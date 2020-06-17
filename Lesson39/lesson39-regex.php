<?php
//PHP regular expressions follow PCRE pattern standards, which are derived from Perl regular expressions.

// $string = "Red Fox";

// $search = "Red";

// If $search exist in $string 
// 

// $email = "alex@gmail.com";

// Before "at" @ sign we can have letters A-Z, a-z, 1-9 , after "at" @ sign we can have domain any length but separated by .(dot)

// preg_name_of_function 

// preg_match();

// "/regular_expression/"

// $regex = "/kart/";
// $regex = "/go*/i"; // i - ignore case sensitivity ( Case sensitive - golemi mali bukvi)


// $string = "you gotta give the gotta kart a try";

// if(preg_match($regex, $string, $match)) { // $match - array 
//     var_dump($match);
//     echo " We found a match to the expression : ".$match[0];
// } else {
//     echo " We found no match";
// }

// Metacharacters
// . - any character
// ^ - start of the string
// $ - end of the string

$string = "3.212312321$^.\\";

$regex = "/3.2\$\.\^\\/";

if(preg_match($regex, $string, $match)) { // $match - array 
    var_dump($match);
    echo " We found a match to the expression : ".$match[0];
} else {
    echo " We found no match";
}
