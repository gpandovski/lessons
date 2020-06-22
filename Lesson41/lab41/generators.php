<?php
/**
 * Generators are functions that provide a simple way to loop 
 * through data without the need to build an array in memory. 
 */

// function getRange ($max = 10) {
//     $array = [];

//     for ($i = 1; $i < $max; $i++) {
//         $array[] = $i;
//     }

//     return $array;
// }

function getRange ( ) {
    // yield 1;
    // yield 2;
    // yield 3;
    // yield 4;
    return [1,2,3,4]; // create an array - array is located in computer memory
    // for ($i = 1; $i < $max; $i++) {
    //     yield $i; // return (not value but generator)
    // }
}

$generatorResult = getRange();
 
// var_dump($generatorResult);
// var_dump($generatorResult->current());
foreach ($generatorResult as $range) {
    echo "Dataset {$range} <br>";

}
// foreach (getRange(15) as $range) {
//     echo "Dataset {$range} <br>";
// }

// foreach (getRange(PHP_INT_MAX) as $range) {
//     echo "Dataset {$range} <br>";
// }
// - Fatal error: Allowed memory size of 1234217728 bytes exhausted .... 

/**
 * A yield statement is similar to a return statement, except that instead of stopping execution of the function and returning, 
 * yield instead returns a Generator object and pauses execution of the generator function.
 */


// function getRange ($max = 10) {
//     for ($i = 1; $i < $max; $i++) {
//         $value = $i * mt_rand();

//         yield $i => $value;
//     }
// }