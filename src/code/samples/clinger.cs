using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Clinger : MachinePart
{
    [Space()]
    [Tooltip("How fast goo clusters are consumed")]
    public float eatSpeed = 1;
    [Tooltip("How quickly the jump happens")]
    public float jumpSpeed = 24;
    [Tooltip("The apex of the jump will be at a height equal to this value multiplied by the jump distance")]
    public float relativeJumpHeight = .2f;

    // The rigidbody on this part
    private Rigidbody clingerBody;
    private Collider clingerCollider;

    // The jump coroutine that is currently active
    private Coroutine jump;

    // Reference to the player controller
    protected PlayerController playerController;

    // Reference to rendering details
    private Renderer[] renderers;
    private MaterialPropertyBlock block;

    protected override void OnEnable()
    {
        base.OnEnable();

        // Get reference to the player
        playerController = PlayerController.Instance;

        // Get components
        clingerBody = GetComponent<Rigidbody>();
        clingerCollider = GetComponent<Collider>();

        // Det renderer info
        block = new MaterialPropertyBlock();
        renderers = GetComponentsInChildren<Renderer>();


        // Try to attach if not yet attached
        if (!attached)
        {
            jump = StartCoroutine(Jump());
        }
    }

    protected virtual void Update()
    {
        // Update renderers
        block.SetVector("_Target", playerController.cameraLookAtPoint.position);
        block.SetVector("_UpDirection", transform.GetChild(0).up);
        block.SetVector("_ForwardDirection", transform.GetChild(0).forward);
        foreach (Renderer renderer in renderers)
        {
            renderer.SetPropertyBlock(block);
        }
    }

    public override void ProcessInput(GooCluster input, int inputFace)
    {
        // Eat any input
        StartCoroutine(AnimateEat(input));
    }

    private IEnumerator AnimateEat(GooCluster input)
    {
        // Bring input to center
        yield return AnimateCluster(input, transform.position, eatSpeed);

        // Eat input
        input.PopCluster();
    }

    public override void OnPickUp()
    {
        if (jump != null)
        {
            StopCoroutine(jump);
        }
    }

    public override void OnPutDown()
    {
        if (!attached)
        {
            // Try to reattach
            jump = StartCoroutine(Jump());
        }     
    }

    private IEnumerator Jump()
    {
        if (GetJumpTarget(out Vector3 goalPosition))
        {
            // Get other relevant positions
            Vector3 startPosition = transform.position;
            Quaternion startRotation = transform.rotation;
            Quaternion goalRotation = GetRotation();

            // Stop using physics
            clingerBody.isKinematic = true;
            clingerCollider.enabled = false;

            float distance = (startPosition - goalPosition).magnitude;
            float jumpTime = distance / jumpSpeed;
            float jumpHeight = distance * relativeJumpHeight;

            // Animate the jump
            float time = 0;
            while (time < jumpTime)
            {
                // Get lerp percent
                float x = (time / jumpTime);
                // Get y amount
                float y = Mathf.Clamp((.25f - (x - .5f) * (x - .5f)) * 4, 0, 1);
                // Set position
                transform.position = Vector3.Lerp(startPosition, goalPosition, x) + y * jumpHeight * Vector3.up;
                // Set rotation
                transform.rotation = Quaternion.Slerp(startRotation, goalRotation, x);

                // Decrement time and wait
                time += Time.deltaTime;
                yield return null;
            }

            // Resume using physics
            clingerBody.isKinematic = false;
            clingerCollider.enabled = true;

            // Attach the part at the end of the jump
            grid.AttachPart(this, goalPosition);
        }
    }

    // Get a position to jump to
    private bool GetJumpTarget(out Vector3 target)
    {
        // Generate a random offset so we don't always search the grid for an open spot starting at the same place
        Vector2Int offset = new Vector2Int(Random.Range(0, grid.width), Random.Range(0, grid.height));

        // Search the grid for an open spot
        for (int x = 0; x < grid.width; x++)
        {
            for (int y = 0; y < grid.height; y++)
            {
                // Get this offset coordinate
                Vector2Int coord = new Vector2Int((x + offset.x) % grid.width, (y + offset.y) % grid.height);

                // If this is an empty spot, return it's position
                if (!grid.parts[coord.x, coord.y])
                {
                    target = grid.CoordToPosition(coord);
                    return true;
                }
            }
        }

        // If no open spot is found, return false
        target = Vector3.zero;
        return false;
    }
}
