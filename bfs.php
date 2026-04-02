<!-- Traverse graph using BFS. -->
 <?php

function BFS($graph, $start) {
    $queue = [];
    $visited = [];

    array_push($queue, $start);
    $visited[$start] = true;

    while (!empty($queue)) {
        $node = array_shift($queue);
        echo $node . " ";

        foreach ($graph[$node] as $neighbor) {
            if (!isset($visited[$neighbor])) {
                $visited[$neighbor] = true;
                array_push($queue, $neighbor);
            }
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

BFS($graph, 1); // 1 2 3 4