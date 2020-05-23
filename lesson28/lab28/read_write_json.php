<?php
echo "<h1>Read and write JSON files </h1>";

// filename to work with
$jsonFile = "files/jsonData.txt";

// Our PHP array data
// $data = [
//     [
//         "John",
//         "Snow",
//         30
//     ],
//     [
//         "Rob",
//         "Kavinski",
//         25
//     ]
// ];

// Convert PHP array to JSON string(text);
// $jsonData = json_encode($data);

// Convert PHP array to JSON string to save in Pretty format (text looks nice inside file)
// $jsonData = json_encode($data, JSON_PRETTY_PRINT);

// Write JSON string to file
// file_put_contents($jsonFile,$jsonData, FILE_APPEND);

//************************************************************************************************** */

// Read file with JSON string
$jsonString = file_get_contents($jsonFile); // file_get_contents return string - text

// // we convert JSON string from file to PHP ARRAY
$ourArray = json_decode($jsonString);

// Test in browser 
echo "<pre>";
var_dump($ourArray);
echo "</pre>";