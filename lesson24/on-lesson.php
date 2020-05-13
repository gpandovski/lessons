<?php 
// loops 1
// usual array number index
// $arr = ["one", "two", "three"]; // index $arr[0], $arr[1], $arr[2]

// for ($i=0; $i < count($arr); $i++) { 
//     echo "Index of value: ".$i."<br>";
//     echo "Value: ".$arr[$i]."<br>";
//     echo "<br>";
// }

// echo $arr[0];// prints "One"

// // associative array
// // we dont use FOR loop for associative array
// $arrMulti = [
//     "a" => "one",
//     "b" => "two",
//     "c" => "three",
//     "d" => "four",
//     "any_word" => "five"
// ];
// echo "<br>";
// echo "<h2>Associative array</h2>";
// echo "<br>";

// foreach ($arrMulti as $key => $value) {
//     echo "Key <b> ".$key."</b> <br>";
//     echo "Value: ".$value."<br>";
//     echo "<br>";
// }

// echo $arrMulti["a"] ;// one
// //$_POST["key"] // name od formata 
// // === strict comparision
// // == not strict comparision
// $i = 0;
// // break && continue;
// while($i < 10) {
//     echo $i."<br>";
//     if($i===5) {
//         break;
//     }
//     //continue ;

//     // this code will not run
//     $i++;
// }
// echo "<br>";
// $string = "Hello";
// $i=0;

// // strlen($string) = 5
// while($i<strlen($string)) {
//     echo $string[$i]."<br>";
//     $i++;
// }

// $i=10;
 
// do {
//     echo $i."<br>"; // run at least one time
//     $i++;
// } while ($i <=10);

// function myFunc() {    echo __FUNCTION__."<br>"; }

// // CONSTANTS

// // first way
// define("CONST_USER", 123);

// //second way
// const CONFIG_USER_SECURITY = "Some secure data";

// echo CONST_USER."<br>";
// echo CONFIG_USER_SECURITY."<br>";
// echo __FILE__."<br>";
// echo __DIR__."<br>";

// myFunc();
// error_reporting(E_ALL); // TEST server po default always ON
// error_reporting(0); // TURN off all php errors - PRODUCTION DEFAULT ON
// echo $_POST["notDefinedVar"];
// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";
// Location
//header("Location: index.php"); //temporary redirect to index.php

echo "Other stuff script does";
// if(!file_exists('vars.inc.php')) { // ! false = true
//     die(); // application stops
// }
$randNumber = mt_rand(1, 100);

echo $randNumber;
echo "<br>";
echo "<br>";
echo "<br>";
// include 'vars.inc.php';
// echo " A ".$fruit." ".$color."<br>";
$strinWithEmptySpaces = "         this is string       ";
echo "String".trim($strinWithEmptySpaces)."!";






 


 

 