<?php
// boolean
$foo = true;  
$bar = false;

// Callable
$callable = function () {
    return 'value';
};

if(is_callable($callable)) {

} 
 
// FLOAT
$float = 0.123;
$sum = 3 + 0.14;

echo $sum; // 3.14
//Integers

$int = 123;

if($int>0 && $int<PHP_INT_MAX) {

}
//Null
$nullvar = null; // directly

if (is_null($nullvar)) { /* variable is null */ }

if ($nullvar === null) {  /* variable is null */ }

// Resources
$file = fopen('/etc/passwd', 'r');

echo gettype($file);
# Out: resource

echo $file;

class Smth{
    public $prop = '';
}
# Out: Resource id #2

//Strings
/**
 * Displays things almost completely "as is". Variables and most escape sequences will not be interpreted. 
 * The exception is that to display a literal single quote, one can escape it with a back slash ', and to display a back slash,
 *  one can escape it with another backslash \
 */
$foo = "Smth";
$my_string = 'Nothing is parsed, except an escap\'d apostrophe or backslash. '.$foo.'\n';
$my_stringDouble = "Nothing is parsed, except an escap\'d apostrophe or backslash. $foo\n";
var_dump($my_string);

/*
string(68) "Nothing is parsed, except an escap'd apostrophe or backslash. $foo\n"
*/

/**
 * Unlike a single-quoted string, simple variable names and escape sequences in the strings will be evaluated. 
 * Curly braces (as in the last example) can be used to isolate complex variable names.
 */

$variable1 = "Testing!";
$variable2 = [ "Testing?", [ "Failure", "Success" ] ];
$my_string = "Variables and escape characters are parsed:\n\n";
$my_string .= "$variable1\n\n$variable2[0]\n\n";
$my_string .= "There are limits: $variable2[1][0]";
$my_string .= "But we can get around them by wrapping the whole variable in braces: {$variable2[1][1]}";
var_dump($my_string);

/*
string(98) "Variables and escape characters are parsed:

Testing!

Testing?

There are limits: Array[0]"

But we can get around them by wrapping the whole variable in braces: Success\
*/

// HEREDOC
/**
 * In a heredoc string, variable names and escape sequences are parsed in a similar manner to double-quoted strings, 
 * though braces are not available for complex variable names. 
 */
$variable1 = "Including text blocks is easier";

$my_string = <<< EOF
Everything is parsed in the same fashion as a double-quoted string,
but there are advantages. $variable1; database queries and HTML output
can benefit from this formatting.
Once we hit a line containing nothing but the identifier, the string ends.
EOF;

var_dump($my_string);

/*
string(268) "Everything is parsed in the same fashion as a double-quoted string,
but there are advantages. Including text blocks is easier; database queries and HTML output
can benefit from this formatting.
Once we hit a line containing nothing but the identifier, the string ends."
*/

//Type Casting
$bool = true;
var_dump($bool); // bool(true)

$int = (int) true;
var_dump($int); // int(1)

$string = (string) true;
var_dump($string); // string(1) "1"
$string = (string) false;
var_dump($string); // string(0) ""

$float = (float) true;
var_dump($float); // float(1)

$array = ['x' => 'y'];
var_dump((object) $array); // object(stdClass)#1 (1) { ["x"]=> string(1) "y" } 

$object = new stdClass();
$object->x = 'y';
var_dump((array) $object); // array(1) { ["x"]=> string(1) "y" }

$string = "asdf";
var_dump((unset)$string); // NULL

// below 3 statements hold for 32-bits systems (PHP_INT_MAX=2147483647)
// an integer value bigger than PHP_INT_MAX is automatically converted to float:
var_dump(       999888777666 ); // float(999888777666)
// forcing to (int) gives overflow:
var_dump((int)  999888777666 ); // int(-838602302)
// but in a string it just returns PHP_INT_MAX
var_dump((int) "999888777666"); // int(2147483647)

var_dump((bool) []);      // bool(false) (empty array)
var_dump((bool) [false]); // bool(true)  (non-empty array)

// Type Comparision
// Loose comparisons
var_dump(1 == 1); // true
var_dump(1 == "1"); // true
var_dump(1 == true); // true
var_dump(0 == false); // true

// Strict comparisons
var_dump(1 === 1); // true
var_dump(1 === "1"); // false
var_dump(1 === true); // false
var_dump(0 === false); // false

// Notable exception: NAN — it never is equal to anything
var_dump(NAN == NAN); // false
var_dump(NAN === NAN); // false

// Type Juggling
$a = "2";             // string 
$a = $a + 2;          // integer (4) 
$a = $a + 0.5;        // float (4.5)
$a = 1 + "oranges 2"; // integer (3)