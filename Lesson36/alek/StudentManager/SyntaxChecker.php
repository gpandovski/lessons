<?php
namespace Alek\StudentManager;
include "Exceptions/FileNotFoundException.php";
use Alek\StudentManager\Exceptions\FileNotFoundException;

include "Error.php";
// use  Alek\StudentManager\Error;

class SyntaxChecker {

    public function checkStudnetHomework() {
        echo " Start checking Student homwork directory \homeworks <br>";

        $files = glob("homeworks\*.php");

        if(count($files) === 0) {
            // 
            throw new FileNotFoundException('Directory Homework is empty');
            //echo "Directory Homeworks is empty!";
            //return false;
        }

        foreach($files as $file) {
            $this->checkSyntax($file);
        }
    }
    public function checkSyntax($file) {
        echo "File check ok!";
    }

    public static function getErrors() {
        $errorObj = new Error();
        return $errorObj;
    }
}