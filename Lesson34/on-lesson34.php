<?php
echo "<h1> OOP part 2 </h1>";
// PHP Constants 


// JS 
// Object literal
// $john = {
//     name: "John",
//     mass: 80,
//     height: 1.8, 
//     calculateBmi: function() {
//          return this.mass / this.height * this.height;
//     }
// }

// PHP 
// class User {
//     public $name;
//     public $mass;
//     public $height;
    
//     function calculateBmi() {
//         return $this->height / $this->mass * $this->mass;
//     }
// }

// $john = new User();
// $john->name = "John";
// $john->mass = 82;
// $john->height = 1.80; 

// echo "John BMI is : " .$john->calculateBmi()."<br>";

// class TestClass {
//     //
//     public $myVar; // properties 
//     public $x=2;
//     public $y=3;

//     public $id;

//     function className() { // Class Methods 
//         // __CLASS__ 
//         // var_dump(__CLASS__);
//         echo "<p> Using class : <b>".__CLASS__."</b> </p>";
//     }

//     function printId() {
//         echo "<p> ID: ".$this->id."</p>";
//     }

//     function calc() {

//     }

// }

// function myFunc() {
//     echo "This is function <b>".__FUNCTION__."</b><br>";
// }

// myFunc();

// $objTestClass1 = new TestClass(); // Create an object of class TestClass __construct() 
// $objTestClass1->id = 1;
// $objTestClass1->printId();


// $objTestClass2 = new TestClass(); // Create an object of class TestClass __construct() 

// $objTestClass3 = new TestClass(); // Create an object of class TestClass __construct() 

// $objTestClass1->className();

// // Object inheritance
/*
Inheritance is a programming construct that software developers use to establish an "is-a" relationship between categories. 
Inheritance enables us to derive more-specific categories from more-generic ones. 
The more-specific category is a kind of the more-generic category. For example, a dog is a kind of mammal, and a bicycle is a kind of vehicle.
*/

// // IT 
// // - programmers 
// // - designers 
// // - receptionist 
// // - direktor 

// // class Employees{
// //     public $name;
// //     public $age;
// //     public $type;
// //     public $salary;

// //     function calculateSalary() {

// //     }
// // }

// // DRY - Dont repeat yourself 

// class Programmer {
//     public $name;
//     public $age;
//     public $type;
//     public $monthlySalary;

//     function startWork() {
//         // Code
//     }
//     function stopWork() {
//         // Code
//     }
//     function login() {
//         // Code
//     }
//     function logout() {
//         // Code
//     }
//     function calculateSalary() {
//         return $monthlySalary;
//     }
// }

// class Designer {
//     public $name;
//     public $age;
//     public $type;
//     public $hours;
//     public $rate;

//     function startWork() {

//     }

//     function stopWork() {

//     }
//     function login() {

//     }
//     function logout() {

//     }
//     function calculateSalary() {
//         return $rate*$hours;
//     }
// }

// Super, parent 
/**
 * An abstract class cannot be instantiated, but rather, child classes can be extended from the abstract class.
 */

// abstract class SuperEmployee {
//     public $name;
//     public $age;
//     public $monthlySalary;
//     public $type='generic employee';

//     function printEmployeeData() {
//         echo "Name: ".$this->name."<br>";
//         echo "Employee type: ".$this->type."<br>";
//         echo "Age: ".$this->age."<br>";
//     }

//     function startWork() {
//             // Code
//     }

//     function stopWork() {
//             // Code
//     }

//     function calculateSalary() {
//         // tax calculation
//         // 
//         return $this->monthlySalary;
//     }

//     // children of this class MUST have login() function
//     abstract function login();

// }

// class Programmer extends SuperEmployee {
//     public $type='programmer';

//     function login() {
//         // Some code  that every child of superclass should implement
//     }
// }

// class Designer extends SuperEmployee {
//     public $type='designer'; // property overloading
//     public $hours;
//     public $rate;

//     function calculateSalary() { // method overloading / method overwriting /reloading
//         $bonus =  $this->rate*$this->hours;
//         $salary = parent::calculateSalary(); // with parent keyword we can call parent methods

//         return  $salary + $bonus;
//     }

//     function login() {
//         // code
//     }
// }

// WE cant create abstract class !!!
// // $commonEmployee = new SuperEmployee();

// $programmer = new Programmer();
// $programmer->name = "John";
// $programmer->monthlySalary= 60000;
// $programmer->age = 30;

// $designer = new Designer();
// $designer->name = "Matt";
// $designer->rate = 1000;
// $programmer->monthlySalary= 30000;

// $designer->hours = 10;
// $designer->age = 35;

// $programmer->login();

// $programmer->printEmployeeData();
// echo "Salary: ".$programmer->calculateSalary()."<br>";
// echo "<br>";

// $designer->login();
// $designer->printEmployeeData();
// echo "Salary: ".$designer->calculateSalary()."<br>";


// Class STATIC FUNCTIONS/Methods

// class Helpers {
//     // conver date 
//     // functions that we use over application for some reason
//     static function printCurrentDate() {
//         // code
//         echo date('Y-m-d', time());
//     }

// }


/**
 * Static methods exist only within the scope of the class, not the generated object. 
 * The only properties which they can access are properties which are also declared as static properties.
 */
class SuperUser {

    //Declaring class properties or methods as static makes them accessible without needing an instantiation of the class.
    static function myStaticFunction($name) {
        // echo $this->name;
        // database connection
        // get user from database
        // verify password
        // if password correct return user
        // $this->userLogout();
        echo "<br> My Classname is:" .__CLASS__." <br>";
        echo "<br> Hi I'm static function parameter :" .$name." <br>";

    }

    function sendUserReport() {
        echo "<br> My Classname is:" .__CLASS__." <br>";
    }
}

class User extends SuperUser {
 
    function myFunction() {
        self::myStaticFunction("John");
    }

    // static function myStaticFunction($name) {
    //     // echo $this->name;
    //     // database connection
    //     // get user from database
    //     // verify password
    //     // if password correct return user
    //     // $this->userLogout();
    //     echo "<br> My Classname is:" .__CLASS__." <br>";
    //     echo "<br> Hi I'm static function parameter :" .$name." <br>";

    // }
    
    // function userLogout() {
    //     echo "<br> Hi I'm userLogout function <br>";
    // }
}
// Call static function
// // User::myStaticFunction(); 

// Call regular method with instantiation of the class
$user = new User();

$user->myFunction(); // call regular function

//User::myStaticFunction("John");

// $user = User::login($email, $password);

// no new
// 
// Helpers::printCurrentDate();
 
