<!-- Given the head of a linked list, determine if the list contains a cycle (loop). -->
 <?php

class Node {
    public $val;
    public $next;

    public function __construct($val){
        $this->val = $val;
        $this->next = null;
    }
}

function hasCycle($head){
    $slow = $head;
    $fast = $head;

    while($fast != null && $fast->next != null){
        $slow = $slow->next;          // 1 step
        $fast = $fast->next->next;    // 2 step

        if($slow == $fast){
            return true; // cycle found
        }
    }

    return false; // no cycle
}

// Create list with cycle
$node1 = new Node(1);
$node2 = new Node(2);
$node3 = new Node(3);
$node4 = new Node(4);

$node1->next = $node2;
$node2->next = $node3;
$node3->next = $node4;
$node4->next = $node2; // cycle create

if(hasCycle($node1)){
    echo "Cycle detected";
}else{
    echo "No cycle";
}

?>