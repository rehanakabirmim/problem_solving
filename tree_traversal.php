<!-- Print inorder, preorder, postorder traversal of a binary tree. -->
 <?php

class Node {
    public $data;
    public $left;
    public $right;

    function __construct($data) {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

// Traversals
function inorder($root) {
    if ($root == null) return;
    inorder($root->left);
    echo $root->data . " ";
    inorder($root->right);
}

function preorder($root) {
    if ($root == null) return;
    echo $root->data . " ";
    preorder($root->left);
    preorder($root->right);
}

function postorder($root) {
    if ($root == null) return;
    postorder($root->left);
    postorder($root->right);
    echo $root->data . " ";
}

// Tree create
$root = new Node(1);
$root->left = new Node(2);
$root->right = new Node(3);
$root->left->left = new Node(4);
$root->left->right = new Node(5);

// Output
inorder($root);   // 4 2 5 1 3
echo "\n";
preorder($root);  // 1 2 4 5 3
echo "\n";
postorder($root); // 4 5 2 3 1