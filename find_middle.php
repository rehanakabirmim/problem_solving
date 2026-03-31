<!-- Given the head of a singly linked list, return the middle node of the list. -->
 <?php

class Node {
    public $val;
    public $next;

    public function __construct($val){
        $this->val = $val;
        $this->next = null;
    }
}

function findMiddle($head){
    $slow = $head;
    $fast = $head;

    while($fast != null && $fast->next != null){
        $slow = $slow->next;         // 1 step
        $fast = $fast->next->next;   // 2 step
    }

    return $slow;
}

// Create list: 1 → 2 → 3 → 4 → 5
$node1 = new Node(1);
$node2 = new Node(2);
$node3 = new Node(3);
$node4 = new Node(4);
$node5 = new Node(5);

$node1->next = $node2;
$node2->next = $node3;
$node3->next = $node4;
$node4->next = $node5;

$middle = findMiddle($node1);
echo "Middle node: " . $middle->val;

?>