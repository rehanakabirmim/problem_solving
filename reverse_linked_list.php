<!-- Given the head of a singly linked list, reverse the list and return the new head. -->
<?php
class Node {
    public $val;
    public $next;

    public function __construct($val){
        $this->val = $val;
        $this->next = null;
    }
}

// Helper function to print linked list
function printList($head){
    $current = $head;
    while($current != null){
        echo $current->val . " → ";
        $current = $current->next;
    }
    echo "null\n";
}

// Reverse linked list
function reverseLinkedList($head){
    $prev = null;
    $current = $head;

    while($current != null){
        $nextNode = $current->next;  // save next node
        $current->next = $prev;      // reverse pointer
        $prev = $current;            // move prev forward
        $current = $nextNode;        // move current forward
    }

    return $prev; // new head
}

// Create linked list: 1 → 2 → 3 → 4
$node1 = new Node(1);
$node2 = new Node(2);
$node3 = new Node(3);
$node4 = new Node(4);

$node1->next = $node2;
$node2->next = $node3;
$node3->next = $node4;

echo "Original list: ";
printList($node1);

$reversedHead = reverseLinkedList($node1);

echo "Reversed list: ";
printList($reversedHead);
?>



