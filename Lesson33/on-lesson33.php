<?php 
echo "<h1>OOP</h1>";


// We create a class - Car
/*
A class is a source code blueprint for objects. Other analogies are classes provide a factory to create objects with, or an "object template".
*/
class Car {
    // public
    public $type;
    public $color;

    function drive() {
        echo "Brrrrr <br/>";
    }

    function printProperties() {
        echo $this->type."<br>";
        echo $this->color."<br>";
    }
}
// Objects are instantiated out of classes by using the new keyword. 
// Another way to think about it is that we instantiate (create instances from) a class in order to assign an instance of the class to a variable.

$bmw = new Car(); // create a Car instance

// check the type of variable we created (object)
echo gettype($bmw)."<br>"; // object
echo is_object($bmw)."<br>"; // 1(true)

//We can access properties or methods of the object using the object operator, ->
$bmw->type = "bmw";
$bmw->color = "white";


$bmw->drive();
$bmw->printProperties();

echo "<br>";


class User {
    // public ( can be private, protected we will learn them in next lessons)
    public $firstname;
    public $lastname;

    // when we crate an object __construct function is called automaticaly
    // Within an object method, $this is a reference to the current object. 
    function __construct($firstname, $lastname) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        // echo "User: ". $firstname." ".$lastname."<br>";
        // echo "Object of type User is created BOM!<br>";
    }

    // programmer defined function
    function fullname() {
        echo $this->firstname." ".$this->lastname;
    }

    // destructor function called automatically when object is destroyed - usually happen when php finish script(php file) execution
    // function __destruct() {
    //     echo $this->firstname." Destroyed";
    // }
}

// $john = new User();
// $john->firstname = "John";
// $john->lastname = "Doe";

$john = new User("John","Doe");
// $rob = new User();

echo "<pre>";
var_dump($john);
echo "</pre>";
$john->fullname();
echo "<br>";
 

/*
Coding Standards:

- Class name: uppercase camels, eg: `MyClass`
- Class properties/methods: lowercase camels, eg: `myProperty`
- One class per file.
- No closing `?>` tag.
*/