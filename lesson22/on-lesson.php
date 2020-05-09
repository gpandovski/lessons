<?php
// <script> </script>  <?php  

// variable definition
// var myVariable = "test"

$myVariable = "This is my first string <br>";
$notCorrectVariable="test two";
$myNumber = 2; // $myNumber !== $mynumber 


// print outside 
// console.log => print console

echo $myVariable;

// array
// var myArr = [];

$myArr = ["one", "two", "three"];
$myEmptyArray = []; //empty array.indexOf - NOT working in php

// IF ELSE

if ($myNumber === 1) {
    echo " My number is One <br>";
} elseif ($myNumber === 2) {
    echo " My number is Two <br>";
}else {
    echo " My number is NOT one <br>";
}

// for ( var i=0; i <10 ; i++) {
//      console.log("For loop " + i + " index");   
// }
for ($i=0; $i < 10; $i++) { 
    echo "For loop ".$i." index<br>";
}

// Switch case
$error = "bad_ships";

switch ($error) {
    case 'missing_data':
        $errorMessage = 'Don\'t forget to select some ships to battle!';
        break;
    case 'bad_ships':
        $errorMessage = 'You\'re trying to fight with a ship that\'s unknown to the galaxy?';
        break;
    case 'bad_quantities':
        $errorMessage = 'You pick strange numbers of ships to battle - try again.';
        break;
    default:
        $errorMessage = 'There was a disturbance in the force. Try again.';
}

echo $errorMessage."<br>";

// Foreach loop
// myArray.forEach(function(element) { 
    // code
// })
echo  "<br>";
echo  "<br>";
echo  "<br>";
echo  "<br>";
$myArr = ["fox", "dog", "cat"];

foreach ($myArr as $index => $value) {
    echo "Array index is [".$index."] and value = ".$value."<br>";
}

function phpFunction() {
    echo "I'm php function";
}

phpFunction();

function sumNumbers($a, $b) {
    $result = $a + $b;
    echo "Sum result is : ".$result."<br>";
}

sumNumbers(2,2);
echo  "<br>";
echo  "<br>";
echo  "<br>";
echo  "<br>";
echo var_dump($myVariable);

echo  "<br>";
$mySecondVar = " This is second variable";

echo $myVariable, $mySecondVar;

// JS : myArr.length  - 3
echo  "<br>";
echo  "<br>";

$myArr = ["fox", "dog", "cat"];

echo count($myArr);

array_push($myArr, "bear");



array_unshift($myArr, "duck");

// var_dump($myArr);

// var myArray = ["John", "john@test.com"]

// var john = {
//  name:"John",
//  email: "john@test.com"   
// } 
//

// associative array WE DONT HAVE NUMBER INDEXS HERE 
$johnData = ["name"=>"John", "email"=>"john@test.com" ]; // "name"=>"John" - key value pair


echo  "<br>";
echo  "<br>";
echo $johnData["name"]."<br>"; // show John
echo $johnData["email"]."<br>"; // show john@test.com

foreach ($johnData as $key => $value) {
    echo "Array key is [".$key."] and value = ".$value."<br>";
}

// multi dimensional array 
$data = [
    "john" => [ 
        "fullname"=>"John Smith", 
        "email"=>"john@test.com", 
        "positions" =>  [
            "teacher",
            "designer",
            "kelner"
        ] 
    ],
    "rob" => [ "fullname"=>"Rob Kennedy", "email"=>"rob@test.com" ],
    "steff" => [ "fullname"=>"Steff Kennedy", "email"=>"steff@test.com" ],
];

echo  "<br>";

echo $data["rob"]["fullname"]."<br>"; // "Rob Kennedy"
echo $data["rob"]["email"]."<br>";// "Jrob@test.com"


foreach($data as $key => $value) { 
    echo "Fullname : ".$value['fullname']."<br>";
    echo "Fullname : ".$value['email']."<br>";
    echo  "<br>";

}

if(isset($data["Matt"])) {

    echo $data["Matt"];
}


