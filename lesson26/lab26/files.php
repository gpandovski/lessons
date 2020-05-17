<?php
echo "<h1> Files </h1>";
$file = "test.txt"; // files
$iniFile = "my_config.ini";
$pathToFiles = "/Users/alex/Projects/ca-php-course/php/lab26";

var_dump(__DIR__);

// file_exists folderi i za files


if(is_writable($file)) {
    file_put_contents($file, "Hello File I/O system"); // file rewrite
    file_put_contents($file, "Hello File I/O system", FILE_APPEND); // file rewrite

}

if(file_exists($file) && is_readable($file)) {
    echo "File ".$file. " is found. <br>";
    $content = file_get_contents($file);
    var_dump($content);
} 
// var_dump(base64_encode("admin123"));
// file_put_contents($iniFile, "lastname=snow", FILE_APPEND); 
// file_put_contents($iniFile, '\n password="'.base64_encode("admin123").'"', FILE_APPEND); 

// if(file_exists($iniFile)) {
//     $iniContent = parse_ini_file($iniFile);
    
//     var_dump($iniContent);
// }
 
// else {
//     echo "File ".$file. " is NOT found.  <br>";
// }

// if(is_file($file)) {

//     echo "Yes ".$file. " is file for sure <br>";
//     echo "Filesize of file ".$file." is ".filesize($file)." bytes<br>"; 
// }
// if(is_dir($pathToFiles )) {
//     echo "Yes ".$pathToFiles. " is directory for sure <br>";
// }