<!-- Given a string s containing just the characters:

'(', ')', '{', '}', '[' and ']'

Determine if the input string is valid. -->
<?php

function isValid($s) {
    $stack = [];

    for ($i = 0; $i < strlen($s); $i++) {
        $c = $s[$i];

        // opening bracket  push
        if ($c == '(' || $c == '{' || $c == '[') {
            array_push($stack, $c);
        } 
        // closing bracket check
        else {
            if (empty($stack)) return false;

            $top = array_pop($stack);

            if (
                ($c == ')' && $top != '(') ||
                ($c == '}' && $top != '{') ||
                ($c == ']' && $top != '[')
            ) {
                return false;
            }
        }
    }

    return empty($stack);
}

// Test
var_dump(isValid("()[]{}")); // true
var_dump(isValid("(]"));     // false