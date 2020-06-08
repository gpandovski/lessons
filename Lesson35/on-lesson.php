<?php
/**
 * Public - properties are ones that directly accessible in the instantiated object.
 * 
 * Private - properties cannot be accessed anywhere except from within the class. 
 * This allows one to create a public interface, where some critical internal state can be protected.
 * 
 * Protected - Another level of visibility (information hiding) is "protected", 
 * which means that a protected property or method can be accessed only from within the class defining it, or any subclassses. 
 * In contrast, a private property/method is only visible to the class defining it.
 * 
 */

// PROPERTY & METHODS Visibility
//
// class Person {
//     private $name='Name';

//     // getter
//     public function getName() {
//         return $this->name;
//     }
//     //setter
//     public function setName($name) {
//         $this->name = $this->convertName($name);
//     }

//     private function convertName($name) {
//         return ucfirst(trim($name));
//     }
// }

// class Developer extends Person {
//     protected $name = "Dev Name";
// }

// $person = new Person();
// // $person->name = " Alice"; // fatal error

// // echo $person->name; // fatal error
// $person->setName("     alice   "); // ok

// echo $person->getName()."<br>";// ok

// $developer = new Developer(); 

// // echo $person->getName(); // fatal error

// // $developer->setName("John"); // ok

// echo $developer->getName()."<br>"; // ok
// echo $developer->name."<br>"; // ok


/**
 * Constants are variables that cannot have their values changed during execution. 
 * The default visibility of class constants is public. 
 * Constants can be accessed via the scope resolution operator ::
 */
// class User {
//     const USER_PIC_DIR = "C:\caphp\public\project\users\\";
//     const SOMETHING = "something";
//     const MY_SPECIAL_NUMBER = 12343;

//     public $browsers=[]; // property
//     public $name;
//     public $birthday;

//     // getter function 
//     function getBirthday() {
//         return date('Y % m % d', $this->birthday);
//     }
//     function setBirthday($birthday) {
//         // if birthday is birthday
//         // if birthday is timestamp
//         $this->birthday = strtotime($birthday);
//     }

//     // getter function 
//     function getName() {
//         return $this->name;
//     }

//     function setName($name) {
//         $this->name =  strtolower($name);
//     }
//     // getters
//     function getBrowsers() { // get..... functions must have return by default
//         return $this->browsers;
//     }
 

//     function saveUserPhoto($photo) { // "C:\Users\Photo\myphoto.jpeg"
//     // Accessing constant inside the class
//         copy($photo, self::USER_PIC_DIR."user-photo-".md5(basename($photo)).".jpg");
//     }


//     function calculateAge() {
//         return date("Y", time())- date("Y", $this->birthday);
//     }
// }

// Accessing constant outside a class
// 
// echo User::USER_PIC_DIR."<br>"; 

// $user = new User();

// $user->setName("John Doe");

// $user->setBirthday('1995-10-10');

// echo $user->getName()."<br>";
// echo $user->getBirthday()."<br>";
// echo $user->name."<br>";



// $userName = $user->name;

// echo $userName."<br>";
// $userName = "Matt Test";
// echo $user->name."<br>";
// echo date('Y % m % d', $obj->birthday);
// echo $obj->name;

// $obj->browsers = ['firefox', 'chrome'];

// abstract class SuperEmployee {
//     public $name;
//     public $age;
//     public $monthlySalary;
//     public $type='generic employee';

//     public function printEmployeeData() {
//         echo "Name: ".$this->name."<br>";
//         echo "Employee type: ".$this->type."<br>";
//         echo "Age: ".$this->age."<br>";
//     }

//     public function startWork() {
//             // Code
//     }

//     public function stopWork() {
//             // Code
//     }

//     public function calculateSalary() {
//         // tax calculation
//         // 
//         return $this->monthlySalary;
//     }

//     // children of this class MUST have login() function
//     public abstract function login();

// }

/**
 * Interfaces closely resemble abstract classes, but cannot contain concrete methods or properties. 
 * In order to create an interface, use the interface keyword.
 * 
 */


// interface AuthInterface {
//     public function login();
//     public function logout();
// }

// interface CreateFilesInterface {
//     public function createFile();
//     public function copyFile();
//     public function deleteFile();
// }

// class Programmer implements AuthInterface, CreateFilesInterface  {
//     public $type='programmer';

//     public function login() {
//         // Some code  that every child of superclass should implement
//     }
//     public function logout() {
//         // Some code  that every child of superclass should implement
//     }
//     public function createFile() {
//         // Some code  that every child of superclass should implement
//     }
//     public function copyFile() {
//         // Some code  that every child of superclass should implement
//     }
//     public function deleteFile() {
//         // Some code  that every child of superclass should implement
//     }
// }

// class Designer implements AuthInterface {
//     public $type='designer'; // property overloading
//     public $hours;
//     public $rate;

//     public function calculateSalary() { // method overloading / method overwriting /reloading
//         $bonus =  $this->rate*$this->hours;
//         $salary = parent::calculateSalary(); // with parent keyword we can call parent methods

//         return  $salary + $bonus;
//     }

//     public function login() {
//         // code
//     }
//     public function logout() {
//         // Some code  that every child of superclass should implement
//     }
// }

// interface IPerson {
//     public function getName();
//     public function setName($name);
//     public function sayHi();
//     public function work();
// }

// abstract class APerson implements IPerson {
//     private $name;

//     public function getName() {
//         return $this->name;
//     }

//     public function setName($name) {
//         $this->name = $name;
//     }

//     public function sayHi() {
//         echo "Hi ! ";
//     }

//     abstract public function work();
// }

// class Developer extends APerson {
//     public function work() {
//         echo "Coding! <br>";
//     }


//     public function sayHi() {
//         parent::sayHi();
//         echo "I'm a developer. <br>";
//     }
// }

// class Designer extends APerson {
//     public function work() {
//         echo "Designing ! <br>";
//     }
//     public function sayHi() {
//         parent::sayHi();
//         echo "I'm a Designer. <br>";
//     }
// }

// $programmer = new Developer();
// $programmer->sayHi();
// $programmer->work();

// $designer = new Designer();
// $designer->sayHi();
// $designer->work();

// TRAITS

/**
 * Traits 
 * A Trait is similar to a class, but only intended to group functionality in a fine-grained and consistent way. 
 * It is not possible to instantiate a Trait on its own.
 * A simple way to understand traits and how to use them is to look at them for what they essentially are: language assisted copy and paste.
 */
trait TAuth {
    public function login() {
        // code for login
        echo "I did login. <br>";
    }

    public function logout() {
        echo "Logout. <br>";
        // code for login
    }
}

interface IPerson {
    public function getName();
    public function setName($name);
    public function sayHi();
    public function work();
}

abstract class APerson implements IPerson {
    private $name;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function sayHi() {
        echo "Hi ! ";
    }

    abstract public function work();


}
/**
 * Using this trait will add login() and logout() methods to the class.
 */
class Developer extends APerson {

    use TAuth;

    public function work() {
        echo "Coding! <br>";
    }

    public function sayHi() {
        parent::sayHi();
        echo "I'm a developer. <br>";
    }
}

class Designer extends APerson {
    use TAuth;

    public function work() {
        echo "Designing ! <br>";
    }
    public function sayHi() {
        parent::sayHi();
        echo "I'm a Designer. <br>";
    }
}

class Cleaner extends APerson {
    public function work() {
        echo "Cleaning ! <br>";
    }
    public function sayHi() {
        parent::sayHi();
        echo "I'm a Cleaner. <br>";
    }
}

$programmer = new Developer();
$programmer->sayHi();
$programmer->work();
$programmer->login();
echo "<br>";

$designer = new Designer();
$designer->sayHi();
$designer->work();
$designer->login();
echo "<br>";

$cleaner = new Cleaner();
$cleaner->sayHi();
$cleaner->work();

