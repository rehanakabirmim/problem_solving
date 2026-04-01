<!-- 

Implement a queue using two stacks. The queue should support two operations:

enqueue(x) → add element x to the end of the queue
dequeue() → remove element from the front of the queue -->
<?php

class QueueUsingTwoStacks {
    private $stack1 = [];
    private $stack2 = [];

    // enqueue element
    public function enqueue($x) {
        array_push($this->stack1, $x);
    }

    // dequeue element
    public function dequeue() {
        if (empty($this->stack2)) {
            while (!empty($this->stack1)) {
                array_push($this->stack2, array_pop($this->stack1));
            }
        }
        if (empty($this->stack2)) {
            return null; // queue is empty
        }
        return array_pop($this->stack2);
    }
}

// Test
$queue = new QueueUsingTwoStacks();

$queue->enqueue(10);
$queue->enqueue(20);
$queue->enqueue(30);

echo $queue->dequeue() . "\n"; // 10
echo $queue->dequeue() . "\n"; // 20

$queue->enqueue(40);

echo $queue->dequeue() . "\n"; // 30
echo $queue->dequeue() . "\n"; // 40