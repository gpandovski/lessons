<?php
 class Employee {
    private $name;
    private $dob;
    public function getName() {
        return name;
    }
    public function setName(string $name) {
        $this->name = $name;
    }
    public function getDob() {
        return $this->dob;
    }
    public function setDob(Date $dob) {
        $this->dob = $dob;
    }
}


// Polymorphism 

interface Machine {
    public function calcTask();
 }

 class Circle implements Machine {
    private $radius;
    public function __construct($radius){
       $this -> radius = $radius;
    }
    public function calcTask() {
       return $this -> radius * $this -> radius * pi();
    }
 }

 class Rectangle implements Machine {
    private $width;
    private $height;
    public function __construct($width, $height){
       $this -> width = $width;
       $this -> height = $height;
    }
    public function calcTask() {
       return $this -> width * $this -> height;
    }
 }

 $mycirc = new Circle(3);
 $myrect = new Rectangle(3,4);
 echo $mycirc->calcTask();
 echo $myrect->calcTask();

$obj = [ $mycirc,$myrect ];

foreach ($obj as $particularObj) {
    $particularObj->calcTask();
}

 // Final
 
 // Final method
 class BaseClass {
    public function test() {
        echo "BaseClass::test() called\n";
    }
    
    final public function moreTesting() {
        echo "BaseClass::moreTesting() called\n";
    }
 }
 
 class ChildClass extends BaseClass {
    public function moreTesting() {
        echo "ChildClass::moreTesting() called\n";
    }
 }
// Results in Fatal error: Cannot override final method BaseClass::moreTesting()


// final class
final class BaseClass {
    public function test() {
        echo "BaseClass::test() called\n";
    }
 
    // Here it doesn't matter if you specify the function as final or not
    final public function moreTesting() {
        echo "BaseClass::moreTesting() called\n";
    }
 }
 
 class ChildClass extends BaseClass {
 }
 // Results in Fatal error: Class ChildClass may not inherit from final class (BaseClass)
 


// Magic methods

// __construct(),
// __destruct(),
// __call(), 
// __callStatic(),
// __get(), 
// __set(),
// __isset()
// __unset(), 
// __sleep(),
// __wakeup(), 
// __serialize()
// __unserialize(),
// __toString(),
// __invoke(),
// __set_state(), 
// __clone()
// __debugInfo() 


// __get(), __set(), __isset() and __unset()

class Animal {
    public $height;
    public $legs;

}
//Whenever you attempt to retrieve a certain field from a class like so:
$animal = new Animal();
$height = $animal->height;
$legs = $animal->legs;

$animal->height = 40;

//PHP invokes the magic method __get($name), with $name equal to "height" in this case. Writing to a class field like so

$arr = ['legs'=>4, 'height'=>50];

class Example {
    private $data = [];

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    public function __get($name) {
        if (!array_key_exists($name, $this->data)) {
            return null;
        }

        return $this->data[$name];
    }

    public function __isset($name) {
        return isset($this->data[$name]);
    }

    public function __unset($name) {
        unset($this->data[$name]);
    }
}

$example = new Example();

// Stores 'a' in the $data array with value 15
$example->a = 15;

// Retrieves array key 'a' from the $data array
echo $example->a; // prints 15

// Attempt to retrieve non-existent key from the array returns null
echo $example->b; // prints nothing

// If __isset('a') returns true, then call __unset('a')
if (isset($example->a)) {
    unset($example->a));
}

// __toString()

class User {
    public $first_name;
    public $last_name;
    public $age;

    public function __toString() {
        return "{$this->first_name} {$this->last_name} ($this->age)";
    }
}

$user = new User();
$user->first_name = "Chuck";
$user->last_name = "Norris";
$user->age = 76;

// Anytime the $user object is used in a string context, __toString() is called

echo $user; // prints 'Chuck Norris (76)'

// String value becomes: 'Selected user: Chuck Norris (76)'
$selected_user_string = sprintf("Selected user: %s", $user);

// Casting to string also calls __toString()
$user_as_string = (string) $user;
