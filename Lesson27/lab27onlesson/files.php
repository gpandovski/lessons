<h1>Files</h1>
<?php

// READING OF FILE

//file_put_contents();
//file_get_contents();
$file = "files/testfile.txt";
// fopen() /$f / $fn
// $h  = fopen($file, "r"); // => 'start of file' open stream
// // Get Line in file fgets($handle);
// // $firstLine = fgets($handle);
// // $secondLine = fgets($handle);
// $firstFourChar = fread($h , 5); // character = 1 byte, 4 bytes = 4 characters
// var_dump($firstFourChar);
// // var_dump($secondLine);
// fclose($h); // close stream

// // return assoc array "line number"=> "text"
// $lineArray = file($file); 
// echo "<pre>";
// var_dump($lineArray );
// echo "</pre>";
// $h  = fopen($file, "r");
// echo "<pre>";

// $firstLine = fgets($h);
// echo $firstLine ;
// var_dump(feof($h)); // false
// echo "<br>";

// $secondLine = fgets($h);
// echo $secondLine;
// var_dump(feof($h)); // false
// echo "<br>";

// $thirdLine = fgets($h); 
// echo $thirdLine;
// var_dump(feof($h)); // true
// echo "<br>";

// echo "</pre>";
// $line =fgets($h); // we took first line

// while(! feof($h) ){ // if condition is false loop stops
//     $line = fgets($h);
//     echo $line."<br>";
// }
// fclose($h);

// WRITING TO FILE
//  $h  = fopen($file, "a");
//  // fwrite($f, "Four line", 25);
//  $line = fgets($h); // false "a"
//  var_dump($line);
//  fputs($h, "\r\n Fourth Line");
//  fclose($h);

 // If we need to read complete file into string we use file_get_contents($f);

 // If we need to read file into the array we use file($f);

 // If we need to read file line by line we use fopen($f, "X") x> r,r+,a,a+ 

 
 $directory = "/Users/alex/Projects/ca-php-course/php";
//  $files = scandir($directory);
 
//  foreach($files as $file) {
//      if ($file != "." && $file != ".." && is_file($file)) {
//         echo $file."<br>";
//      }
//  }
//  echo "<pre>";
//  var_dump($files);
//  echo "</pre>";
// DIRECTORY_SEPARATOR = "/" linux "\" Windows
$phpFiles = glob( $directory.DIRECTORY_SEPARATOR."fo*.php"); // ? - any letter
// $phpFiles = glob("/Users/alex/Projects/ca-php-course/php/*.html");
 echo "<pre>";
 var_dump($phpFiles);
 echo "</pre>";
 $file = $phpFiles[0]; // form.php

 // pathinfo - get the information of the file path in array
 $path_parts = pathinfo($file); // "/Users/alex/Projects/ca-php-course/php/form.php"
// echo $path_parts['dirname'], "<br>"; // output /Users/alex/Projects/ca-php-course/php 
// echo $path_parts['basename'], "<br>"; // output form.php 
// echo $path_parts['extension'], "<br>"; // output "php"
// echo $path_parts['filename'], "<br>"; // output files
//  $path_parts = pathinfo("/Users/alex/Projects/ca-php-course/php/form.php"); // "/Users/alex/Projects/ca-php-course/php/form.php"
echo "<pre>";
var_dump($path_parts);
echo "</pre>";

echo  "File basename is: " .dirname($file)."<br>";

var_dump(__FILE__); //"/Users/alex/Projects/ca-php-course/php/lab27/files.php"
 // "/Users/alex/Projects/ca-php-course/php/lab26/my_config.ini";

 $configIni = dirname(__FILE__)."/../lab26/my_config.ini"; // "/Users/alex/Projects/ca-php-course/php"
 echo "<br>";
 echo "<br>";
 var_dump( realpath($configIni)); 