<?php
echo "<h1> Lesson 36 </h1> ";
echo "<h2> PHP - OOP  </h2> ";


// Namespaces 
/**
 * Namespaces are a way to encapsulate code, such that to access it, you must first declare which namespace you are referring. 
 * In practical terms, what this means is that adding a namespace to a class is very much like organizing classes into hierarchical directories.
 */
// include "package1/User.php";
// include "package2/User.php";
// include "alek/StudentManager/SyntaxChecker.php";


// // use PackageMyOne\User as PackageOneUser;
// // use PackageTwo\User as PackageTwoUserChanged; 

/**
 * To reference a namespaced class (for example, the class Alek\StudentManager\SyntaxChecker), you can reference it by it's fully qualified name:
 * 
 * $alekSyntaxChecker = new  Alek\StudentManager\SyntaxChecker();
 * 
 * Or by declaring the use keyword and adding the namespace to the top of the class:
 */
// use Alek\StudentManager\SyntaxChecker; 


// $alekSyntaxChecker = new SyntaxChecker();

// // $alekSyntaxChecker = new SomeOtherClass();


/**
 * EXCEPTIONS
 * Exceptions is a better way of handling errors in your application
 * 
 */

// // try {
    
//     $alekSyntaxChecker->checkStudnetHomework(); // exception happened here
  // if something is not as expected
      // throw exception using the "throw" keyword
 
  // code, it won't be executed if the above exception is thrown
//     // other code to continue application workflow
// //     echo " Next application logic <br>";
// // } catch (Exception $e) {
      // exception is raised and it'll be handled here

// //     echo "Exception message: ".$e->getMessage()."<br>";
// //     echo "Exception file: ".$e->getFile()."<br>";
// //     echo "Appliction has errros<br>";
// //     // send email to Alek that homework directory is empty
// //     // write to database that there is no homework for date 09/06/2020
// // }


// echo "<br>";
// $error = SyntaxChecker::getErrors(); // return object
// var_dump(gettype($error));

// $error->printErrors();

//SyntaxChecker
// Once classes have been organized into namespaces, PHP can take advantage and autoload them whenever needed
// function __autoload($class) {
//     include  lcfirst(str_replace("\\", "/", $class )).".php";
// }
//
// or anonymous function in spl_autoload_register (just example)
//
// spl_autoload_register(function ($class_name) {
//     include $class_name . '.php';
// });
test();

function test( ) {
    echo " Start <br>";
    throw new Exception("I want to create error(Exception)");
    // if(!$var)
}