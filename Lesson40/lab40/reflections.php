<?php
/**
 * Reflection
 */

 /**
  * Reflection is often used as part of software testing, such as for the runtime creation/instantiation of mock objects. 
  * It's also great for inspecting the state of an object at any given point in time. 
  * Here's an example of using Reflection in a unit test to verify a protected class member contains the expected value.
  */

//   class Car
// {
//     protected $color;
    
//     public function setColor($color)
//     {
//         $this->color = $color;
//     }
    
//     public function getColor($color)
//     {
//         return $this->color;
//     }
// }

class Car
{
    public $color;
    
    public function setColor($color)
    {
        $this->color = $color;
    }
    
    public function getColor($color)
    {
        return "Metallic "; $this->color;
    }
}

$color = 'Red';

$car = new \Car();
$car->setColor($color);
echo  $car->getColor("green");

$reflectionOfCar = new \ReflectionObject($car);
$protectedColor = $reflectionOfCar->getProperty('color');
$protectedColor->setAccessible(true);
$reflectionColor = $protectedColor->getValue($car);

echo $reflectionColor;

//Here is how we are using Reflection to get the value of Car::$color in the code above:

// What we  did?

// We create a new ReflectionObject representing our Car object
// We get a ReflectionProperty for Car::$color (this "represents" the Car::$color variable)
// We make Car::$color accessible
// We get the value of Car::$color


/**
* This is an Example class
*/
class Example
{
    /**
     * This is an example function
     */
    public function fn()
    {
        // void
    }
}

$reflector = new ReflectionClass('Example');

// to get the Class DocBlock
echo $reflector->getDocComment();

// to get the Method DocBlock
$reflector->getMethod('fn')->getDocComment();