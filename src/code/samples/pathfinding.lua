-- A version of dijkstra with multiple starting points
-- graph is the graph to pathind on
-- starts is a list of nodes to start from, these nodes should exist in the given graph
-- Avoid is a bool, whether or not to avoid nodes used by already-generated paths
function Pathfind:generate(graph, starts, avoid)
  local queue = Heap:new() -- The queue of nodes to visit
  local visited = {} -- A list of visited nodes
  local dist = {} -- Distance scores for each node
  self.pred = {} -- The predecessors of each node
  -- Iterate through every node in the given graph, setting the initial values for each
  for _, v in pairs(graph:getNodes()) do
    visited[v] = false
    dist[v] = math.huge
    self.pred[v] = nil
  end
  -- Iterate through all the starting node, setting their distance to 0, and adding them to the queue
  for _, v in ipairs(starts) do
    dist[v] = 0
    queue:insert(v, 0)
  end
  -- Iterate through every node in the queue
  while not queue:isEmpty() do
    -- Take the node with the lowest dist as the current node
    local node = queue:remove()
    -- Make sure it has not been visited yet before continuing
    if not visited[node] then
      -- Mark the current node as visited
      visited[node] = true
      -- Iterate through the current node's neighbors
      for _, v in pairs(graph:getEdges(node)) do
        -- Calculate the new distance for this neighbor, coming from the current node
        -- Calculate the weight for this edge
        local weight = v.weight
        -- If avoidance is in use, and the neightboring node has an avoidance value, add it to the weight
        if avoid and self.avoidance[v.node] then
          weight = weight + self.avoidance[v.node]
        end
        local newDist = dist[node] + weight
        -- If the new distance is less than the current distance, update it
        if newDist < dist[v.node] then
          queue:insert(v.node, newDist) -- Add the node to the queue (only way of updating a priority queue)
          dist[v.node] = newDist -- Remember the new distance
          self.pred[v.node] = node -- Set the predecessors of the neighbor to the current node
        end
      end
    end
  end
end

-- Using a list of predecessors, return the path from the given node to a start
function Pathfind:path(node, avoid)
  local path = {} -- Start the path off as empty
  local step = node -- Start at the given node, and work backwards
  if self.pred[step] then
    -- Until we reach a starting node (which have a predecessor of nil) continue adding steps to the path
    while step do
      -- Check if avoidance is in use
      if avoid then
        -- If this step's node already has an avoidance value, add to it
        if self.avoidance[step] then
          self.avoidance[step] = self.avoidance[step] + self.avoidWeight
        else -- Otherwise, simply set it to the avoidance weight
          self.avoidance[step] = self.avoidWeight
        end
      end
      path[#path+1] = step -- Add the step to the path
      step = self.pred[step] -- Get the predecessor of the current step
    end
  end
  -- Return the generated path
  return path
end

-- Reduces the avoidance value for all nodes on a path
-- If start is given, all nodes before step are ignored
function Pathfind:reducePathAvoidance(path, start)
  -- Iterate through all nodes in the path
  for step = start or 1, #path do
    -- Reduce the node's avoidance
    self:reduceNodeAvoidance(path[step])
  end
end

-- Reduces the avoidance value for a node
function Pathfind:reduceNodeAvoidance(node)
  -- Make sure an avoidance value for the node exists
  if self.avoidance[node] then
    -- Reduce the value by the avoidance weight
    self.avoidance[node] = self.avoidance[node] - self.avoidWeight
    -- If the value is now zero or less, clear it
    if self.avoidance[node] <= 0 then
      self.avoidance[node] = nil
    end
  end
end

-- Clears the avoidance value for the given node
function Pathfind:clearNodeAvoidance(node)
  self.avoidance[node] = nil
end