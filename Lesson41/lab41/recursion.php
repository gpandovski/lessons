<?php
/**
 * A recursive function is one that calls itself, either directly or in a cycle of function calls.
 */

// function my_recursive_func (args) {
//     if (simplest case) {
//         // The Base Case/Guard Clause that stops the
//         // function from running forever
//         return simple value;
//     }
//     else {
//         //call function again with simpler args
//         my_recursive_func(argsSimplified);
//     }
// }

function find_in_arr($key, $arr) {
    foreach ($arr as $k => $v) {
        if ($k == $key) {
            return $v;
        }		
        if (is_array($v)) {
            foreach ($v as $_k => $_v) {
	        if ($_k == $key) {
                    return $_v;
                }
            }
        }
    }
    return false;
}

$arr = [
    'name' => 'Php Master',
    'subject' => 'Php',
    'type' => 'Articles',
    'items' => [
        'one' => 'Iteration',
        'two' => 'Recursion',
        'methods' => [
            'factorial' => 'Recursion',
            'fibonacci' => 'Recursion',
        ],
    ],
    'parent' => 'Sitepoint',
];

var_dump(
    find_in_arr('two', $arr),
    find_in_arr('parent', $arr),
    find_in_arr('fibonacci', $arr)
);

// factorial
// Factorial says to multiply all whole numbers from the chosen number down to 1.
// The symbol is "!"
// 4! = 4 × 3 × 2 × 1 = 24
// 7! = 7 × 6 × 5 × 4 × 3 × 2 × 1 = 5040//

// n ! = n ( n - 1)( n - 2)( n - 3) ... (3)(2)(1)
// If p = 0, then p ! = 1 by convention.

// $x = 4 
// $x = 3
// $x = 2
// $x = 1

function factorial($x) { 
    if($x === 0) {
        return 1;
    } else {
        return $x*factorial($x-1); // 4 * 3 * 2 * 1 * 1 = 24
    }

}
factorial(4);

// The Fibonacci Sequence is the series of numbers:

// 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ...

// The next number is found by adding up the two numbers before it:

// the 2 is found by adding the two numbers before it (1+1),
// the 3 is found by adding the two numbers before it (1+2),
// the 5 is (2+3),
// and so on!

function fibonacci ($n) {
    if($n < 3) {
        return 1;
    } else {
        return fibonacci($n-1) + fibonacci($n-2);
    }
}

echo fibonaci(10);