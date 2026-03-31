<!-- You are given two sorted linked lists.
Merge them into one sorted linked list and return the head. -->
<?php

class Node {
    public $val;
    public $next;

    public function __construct($val){
        $this->val = $val;
        $this->next = null;
    }
}

function mergeLists($l1, $l2){
    $dummy = new Node(0); // temporary node
    $current = $dummy;

    while($l1 != null && $l2 != null){
        if($l1->val < $l2->val){
            $current->next = $l1;
            $l1 = $l1->next;
        } else {
            $current->next = $l2;
            $l2 = $l2->next;
        }
        $current = $current->next;
    }

    // remaining nodes add
    if($l1 != null){
        $current->next = $l1;
    } else {
        $current->next = $l2;
    }

    return $dummy->next;
}

// Create List1: 1 → 3 → 5
$a1 = new Node(1);
$a2 = new Node(3);
$a3 = new Node(5);

$a1->next = $a2;
$a2->next = $a3;

// Create List2: 2 → 4 → 6
$b1 = new Node(2);
$b2 = new Node(4);
$b3 = new Node(6);

$b1->next = $b2;
$b2->next = $b3;

// Merge
$merged = mergeLists($a1, $b1);

// Print result
$current = $merged;
while($current != null){
    echo $current->val . " → ";
    $current = $current->next;
}
echo "null";

?>