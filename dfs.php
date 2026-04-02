<!-- Traverse graph using DFS. -->
 <?php

function DFS($graph, $node, &$visited) {
    echo $node . " ";
    $visited[$node] = true;

    foreach ($graph[$node] as $neighbor) {
        if (!isset($visited[$neighbor])) {
            DFS($graph, $neighbor, $visited);
        }
    }
}

// Graph
$graph = [
    1 => [2, 3],
    2 => [4],
    3 => [],
    4 => []
];

$visited = [];
DFS($graph, 1, $visited); // 1 2 4 3