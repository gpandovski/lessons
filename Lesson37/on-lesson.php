<?php 

declare(strict_types = 1);
// function sum($a,$b) {
//     return $a + $b; // stop exection and return
// }

function concat(?string $str1, ?string $str2) : string {
    return 3;
    // return $str1." ".$str2; // stop exection and return
}

class StringManipulator {
    public function sum(string $str1, string $str2) : ?string {
        return $str1." ".$str2; 
    }
}
// var_dump(sum(2,"oranges"));
var_dump(concat(null, "oranges"));

function loopThroughArr(array $myArr) {
     
}