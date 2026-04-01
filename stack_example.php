<!-- find the output -->
 <?php

$stack = [];

array_push($stack, 10);//add value in the list this function
array_push($stack, 20);
array_pop($stack);//remove value in list this function
array_push($stack, 30);

echo end($stack);