<!-- find the output -->
 <?php

$queue = [];

array_push($queue, 100);//add value in the list this function
array_push($queue, 200);
array_push($queue, 300);

array_shift($queue);// this function remove the 1st element

echo $queue[0];