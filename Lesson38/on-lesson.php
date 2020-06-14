<?php

 
class Test {
    // magic __call method
    public function __call($name, $arguments)
    {
        echo "We called function(method ) ".$name." with arguments(paramters) -- ".join(", ", $arguments);
    }

    // public function hello () {
    //     echo " Hello from hello function";
    // }
    public static function __callStatic($name, $arguments) {
        echo "We called STATIC function(method ) ".$name." with arguments(paramters) -- ".join(", ", $arguments);
 
    }
    
    public function call() {
        echo " Hello from call function";
    }
}

$test = new Test();
// $test->hello("test");
Test::someStaticFunction("Hello");
// $test->call();
 