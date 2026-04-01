<!-- Given a linked list, delete a node with a specific value. -->
<?php

class Node {
    public $val;
    public $next;

    public function __construct($val){
        $this->val = $val;
        $this->next = null;
    }
}

function deleteNode($head, $key){

    // jodi head delete korte hoy
    if($head != null && $head->val == $key){
        return $head->next;
    }

    $current = $head;

    while($current->next != null && $current->next->val != $key){
        $current = $current->next;
    }

    // jodi node paoa jay
    if($current->next != null){
        $current->next = $current->next->next;
    }

    return $head;
}

// Create list: 10 → 20 → 30 → 40
$n1 = new Node(10);
$n2 = new Node(20);
$n3 = new Node(30);
$n4 = new Node(40);

$n1->next = $n2;
$n2->next = $n3;
$n3->next = $n4;

// Delete 20
$head = deleteNode($n1, 20);

// Print list
$current = $head;
while($current != null){
    echo $current->val . " → ";
    $current = $current->next;
}
echo "null";

?>