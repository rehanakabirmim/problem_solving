<!-- find the output -->
<?php

$queue = [];

array_push($queue, 10);
array_push($queue, 20);
array_shift($queue);
array_push($queue, 30);

print_r($queue);