<?php
//Anonymous function
 
function isBigger($a, $b) {
    return $a < $b;
}

$anony = function ($a , $b)
 {
  return $a < $b;
 };

var_dump (
 $anony ( 1 ,2 ) //true
);

//Anonymous class

$anony = new class {
    public function hello($name) {
     return "Hello $name";
    }
   };
   
echo $anony->hello('World');
   //Hello world

// Usort() example
function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);

usort($a, "cmp");


foreach ($a as $key => $value) {
    echo "$key: $value\n";
}

// Using lambda
$someArray = ['100',3,7,1];
$someVar = 123;
 
usort($someArray, function ($x , $y) {

 return $x > $y;
});

print_r($someArray);

/**
 * Closure
 * PHP closures and anonymous (lambda) functions use the same syntax as a function, 
 * but if you inspect a PHP closure or anonymous function, you’ll find they are instances of the Closure class
 * 
 */
/**
 * An anonymous function is just a function that has no name; nothing more.
 * A closure is a function that captures the state of the surrounding environment. 
 * An anonymous function does not necessarily need to create a closure, and a closure is not created only for anonymous functions.
 */

$anony = function () {
 
    return 'lambda';
   };
   
   //Closure
   echo get_class($anony);
   
   //object
   echo gettype($anony);


   $hello = 'Hello ';

   $closure = function ($name) use ($hello){
    return $hello." ".$name;
   };
   
   //Closure
   echo get_class($closure);
   echo get_class($anony);
   
   //object
   echo gettype($closure);
   
   //Hello World
   echo $closure('World');

 

    $a = [1, 2, 3, 4, 5];

    $b = array_map(function ($n) {
        return ($n*$n*$n);
    }, $a);
    print_r($b);