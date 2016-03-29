# Graphs

## Find if there exists a route between two nodes
A popular method for accomplishing this is using [Breadth First Search](https://en.wikipedia.org/wiki/Breadth-first_search) (BFS). Searching a graph means systematically following the edge of graph to visit the vertices. BFS searches all edges to determine which vertices are reachable from the source. BFS searches all the vertices from a given level from the root node before going to the next level, computing the smallest distance from the source to each reachable vertex. After finding all reachable vertices, a BFS tree is generated with the source as the root note.

