/* 
    Generates an array of body group weights, one per vertex in the mesh.
    A "body group weight" is a normalized Vector4, structured as the following:
        x: percentage influence of "head" bones on the vertex
        y: percentage influence of "torso" bones on the vertex
        z: percentage influence of "arm" bones on the vertex
        w: percentage influence of "leg" bones on the vertex
    For example, a vertex that's part of the avatar's head would probably have body group weight of (1, 0, 0, 0),
    while neck vertices may have a weight of (.5, .5, 0, 0).
    renderer is the skinned mesh renderer with bone information
    mesh is the source for vertex information
*/
static private Vector4[] GetBodyGroupWeights(SkinnedMeshRenderer renderer, Mesh mesh)
{
    // Initialize the array of body group weights, one per vertex
    Vector4[] bodyGroupWeights = new Vector4[mesh.vertexCount];

    // Get bone weights
    NativeArray<BoneWeight1> boneWeights = mesh.GetAllBoneWeights();
    NativeArray<byte> bonesPerVertex = mesh.GetBonesPerVertex();

    // Get the actual bones
    Transform[] bones = renderer.bones;

    // Iterate over the vertices to get body group weights for each vertex
    int weightIndex = 0;
    for (int vertIndex = 0; vertIndex < mesh.vertexCount; vertIndex++)
    {
        // Remember body group weight for this vertex
        Vector4 bodyGroupWeight = Vector4.zero;
        float totalWeight = 0;

        // For each vertex, iterate over its bone weights
        for (int i = 0; i < bonesPerVertex[vertIndex]; i++)
        {
            // Get the bone weight, and the corresponding bone
            BoneWeight1 boneWeight = boneWeights[weightIndex];
            Transform bone = bones[boneWeight.boneIndex];

            // Get bone name without prefix (get last item after a _)
            string[] split = bone.name.Split("_");
            string boneName = split[split.Length - 1];

            // Ensure the bone name has a corresponding body group
            if (boneName != null && boneNameToBodyGroup.ContainsKey(boneName))
            {
                // Add the weight of the bone to the proper weight for the bone's body group
                switch (boneNameToBodyGroup[boneName])
                {
                    case (HumanoidKit.BodyGroup.Head):
                        bodyGroupWeight.x += boneWeight.weight;
                        break;
                    case (HumanoidKit.BodyGroup.Torso):
                        bodyGroupWeight.y += boneWeight.weight;
                        break;
                    case (HumanoidKit.BodyGroup.Arms):
                        bodyGroupWeight.z += boneWeight.weight;
                        break;
                    case (HumanoidKit.BodyGroup.Legs):
                        bodyGroupWeight.w += boneWeight.weight;
                        break;
                }
                // Add weight to the total weight for this vertex
                totalWeight += boneWeight.weight;
            }
            // Increment bone weight index
            weightIndex++;
        }
        // Remember weights for this vector
        bodyGroupWeights[vertIndex] = bodyGroupWeight / totalWeight;
    }

    return bodyGroupWeights;
}

/* 
    Creates and saves a mask texture, where each pixel's value corresponds to the body weights for that point of the mesh.
    mesh is the source for UV coordinates (and should be the same mesh used to generate body group weights)
    bodyGroupWeights is a array of weights, one per vertex in the mesh
    size is the desired size of the mask texture
*/
static private Texture2D GenerateMaskTexture(Mesh mesh, Vector4[] bodyGroupWeights, int size)
{
    // Get UV coordinates for vertices
    List<Vector2> uvs = new List<Vector2>();
    mesh.GetUVs(0, uvs);

    // Create the texture
    Texture2D mask = new Texture2D(size, size, TextureFormat.RGBA32, true, true);
    Color32[] pixels = mask.GetPixels32();

    // Create queue for flood fill
    LinkedList<Vector2Int> points = new LinkedList<Vector2Int>();
    // The weight values for each point that has been visited
    Dictionary<Vector2Int, Vector4> weights = new Dictionary<Vector2Int, Vector4>(); 

    // Seed flood fill with uvs
    for (int i = 0; i < uvs.Count; i++)
    {
        Vector2Int point = Vector2Int.RoundToInt(uvs[i] * size);

        points.AddLast(point);
        weights[point] = bodyGroupWeights[i];
    }

    // Flood fill
    while (points.Count > 0)
    {
        Vector2Int point = points.First.Value;
        points.RemoveFirst();

        ProcessPoint(point, new Vector2Int(-1, 0), size, points, weights);
        ProcessPoint(point, new Vector2Int(1, 0), size, points, weights);
        ProcessPoint(point, new Vector2Int(0, -1), size, points, weights);
        ProcessPoint(point, new Vector2Int(0, 1), size, points, weights);
    }

    // Gather pixel colors
    for (int y = 0; y < size; y++)
    {
        for (int x = 0; x < size; x++)
        {
            int index = x + size * y;
            Color32 color = (Color)weights[new Vector2Int(x, y)];
            pixels[index] = color;
        }
    }

    // Set pixel colors
    mask.SetPixels32(pixels);
    mask.Apply();

    return mask;
}

// Processes the given point for the texture flood fill
static private void ProcessPoint(Vector2Int parent, Vector2Int offset, int size, LinkedList<Vector2Int> points, Dictionary<Vector2Int, Vector4> weights)
{
    Vector2Int point = parent + offset;

    // Only process the point if it's within the texture's bounds
    if (point.x >= 0 && point.x < size && point.y >= 0 && point.y < size)
    {
        // If this point hasn't already been filled, flood it with the weight values from its parent
        if (!weights.ContainsKey(point))
        {
            points.AddLast(point);
            weights[point] = weights[parent];
        }
    }
}