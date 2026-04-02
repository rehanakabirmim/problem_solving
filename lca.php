<!-- Find lowest common ancestor of two nodes.
Lowest Common Ancestor (LCA) -->
<?php

function LCA($root, $p, $q) {
    if ($root == null) return null;

    if ($root->data == $p || $root->data == $q) {
        return $root;
    }

    $left = LCA($root->left, $p, $q);
    $right = LCA($root->right, $p, $q);

    if ($left && $right) return $root;

    return $left ? $left : $right;
}

// Example call:
// echo LCA($root, 4, 5)->data; // Output: 2