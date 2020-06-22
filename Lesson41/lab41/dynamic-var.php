<?php
/**
 * PHP allows us to use dynamic variable. Dynamic variable is variable variables.
 * We can name a variable with the value stored in another variable
 * One variable contains the name of another variable.
 */


$text = 'Hello World';

$dynamicText = "text";


echo "The dynamic <b>".$dynamicText. "</b> is <b>".$$dynamicText."</b> <br>";

//We can implement it ${$dynamicText} or $$dynamicText 

$var = "first";
$$var = "Second";
echo "<br>";

var_dump($first); // second
var_dump($$var); //

// //$$var == $first == "Second"

$first = "second";
$second = "third";

echo $first."<br>"; // prints "second"
echo $$first."<br>"; // prints "third"

