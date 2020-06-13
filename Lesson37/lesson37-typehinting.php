<?php
// Nullable type hints

function sum(int $a, int $b) {
    return $a + $b; // stop exection and return
}

function concat(string $str1, string $str2) {
    return $str1." ".$str2; // stop exection and return
}

sum(2, 2);
concat("oranges", 2);


function f(?string $a) {}
function g(string $a) {}

f(null); // valid
g(null); // TypeError: Argument 1 passed to g() must be of the type string, null given

// Return values
function f() : ?string {
    return null;
}

function g() : ?string {}
function h() : ?string {}

f(); // OK
g(); // TypeError: Return value of g() must be of the type string or null, none returned
h(); // TypeError: Return value of h() must be of the type string or null, none returned

//Type hinting classes and interfaces
class Student
{
    public $name = 'Chris';
}

class School
{
    public $name = 'University of Edinburgh';
}

class House {
    public $name= " some name";
}

function enroll(Student $student, School $school)
{
    echo $student->name . ' is being enrolled at ' . $school->name;
}

$student = new Student();
$school = new School();
$house = 1;

enroll($student, $house); 

//Interface type hint
interface Enrollable {};
interface Attendable {};

class Chris implements Enrollable
{
    public $name = 'Chris';
}

class UniversityOfEdinburgh implements Attendable
{
    public $name = 'University of Edinburgh';
}

function enroll(Enrollable $enrollee, Attendable $premises)
{
    echo $enrollee->name . ' is being enrolled at ' . $premises->name;
}

$chris = new Chris();
$edinburgh = new UniversityOfEdinburgh();

enroll($chris, $edinburgh);

//Type hinting generic objects

function doSomething(object $obj) {
    return $obj;
}

class ClassOne {}
class ClassTwo {}

$classOne= new ClassOne();
$classTwo= new ClassTwo();

doSomething($classOne);
doSomething($classTwo);

//Type Hinting No Return(Void)
function lacks_return(): void {
    // valid
}

function should_return_nothing(): void {
    return null; // Fatal error: A void function must not return a value
}
function returns_nothing(): void {
    return; // valid
}

//Type hinting scalar types, arrays and callables
function foo(callable $c) {}
foo("count"); // valid
foo("Phar::running"); // valid
foo(["Phar", "running"); // valid
foo([new ReflectionClass("stdClass"), "getName"]); // valid
foo(function() {}); // valid

foo("no_such_function"); // callable expected, string given

private static function f(){
    echo "Good" . PHP_EOL;
  }

public static function r(callable $c){
    $c();
  }
}

function r(callable $c){}

Foo::r(["Foo", "f"]);
r(["Foo", "f"]);


