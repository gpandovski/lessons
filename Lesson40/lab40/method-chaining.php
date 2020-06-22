<?php
// Method Chaining Design principle
//Makes modifier methods return the host object, so that multiple modifiers can be invoked in a single expression.

class HardDrive {
    protected $isExternal = false;
    protected $capacity = 0;
    protected $speed = 0;
    
    // Fluent setter/getters
    public function external($isExternal = true) {
        $this->isExternal = $isExternal;        
        return $this; // returns the current class instance to allow method chaining
    }
    // Fluent setter/getters
    public function setCapacity($capacity) {
        $this->capacity = $capacity;        
        return $this; // returns the current class instance to allow method chaining
    }

    // Fluent setter/getters
    public function setSpeed($speed) {
        $this->speed = $speed;        
        return $this; // returns the current class instance to allow method chaining
    }
}

//Non-chaining/regular piece of code
$hardDrive = new HardDrive;
$hardDrive->setCapacity(150);
$hardDrive->external();
$hardDrive->setSpeed(7200);

//Method Chaining would allow you to write the above statements in a more compact way:
$hardDrive = (new HardDrive)
    ->setCapacity(150)
    ->external()
    ->setSpeed(7200);

$select = (new BoostrapSelect())->setOptions(["one", "two"])->createSelect();