<?php

// class User {
//     protected $name;
//     protected $lastname;


//     public function setName($name) {
//         $this->name = $name;
//         return $this; // $this here is User object
//     }

//     public function setLastname($lastname) {
//         $this->lastname = $lastname;
//         return $this; // $this here is User object
//     }

//     public function printFullname() {
//         echo $this->getFullname()."<br>";
//     }

//     public function getFullname() {
//         return $this->name." ".$this->lastname;
//     }

//     public static function createUser($name, $lastname) {
        
//         $user = new self; // create object of self class
//         $user->setName($name)->setLastname($lastname);
//         return $user;

//     }
 
// }

// // version 1
// $user = new User();
// $user->setName("John");
// $user->setLastname("Doe");

//  echo $user->printFullname()."<br>";

//  // version 2

// echo (new User())->setName("John")->setLastname("Doe")->getFullname()."<br>";
// // var_dump(User::createUser("John", "Doe"));
 
// // Oneliner 
// User::createUser("John", "Doe")->printFullname();

// class FooLogger {

//     public function log() {
//         echo "Hello I'm function log from ".__CLASS__."<br>";
//     }
// }

// class Second {

//     public $logger;

//     public function __construct() {
       
//     }

//     public function setLogger( $logger) { // optional dependency
//         $this->logger = $logger; 
//     }

//     public function saveToLog() {

//         $this->logger->log();
//     }

//     public function someOtherFunctionThatLoggingIsNotCritical() {
//         // some code
//         // if possible log some state if not - also ok
//         $this->logSave();
//         echo " I'm some funciton with long name too long to type...";
//     }

//     public function logSave() {
//         if(isset($this->logger)) {
//             $this->logger->log();
//         }
//     }
//     // method 1
//     /**
//      *        $this->logSave();
//      */
//     // method 2
//         /**
//         *         $this->logSave();
//       *  }
//      */
//     // method 3
//         /**
//      *         $this->logSave();
//       *   
//      */
// }



// // in our application
// // $logger = new FooLogger();
// // Constructor dependency Injection (DI)
// $second = new Second();
// $second->setLogger(new FooLogger());
// $second->someOtherFunctionThatLoggingIsNotCritical();

include "First.php";

$first = new First();

$first->printMyName("John", "Doe")->log();