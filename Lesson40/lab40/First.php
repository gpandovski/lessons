<?php
class Logger {
    /**
     * Print some fun string
     * @return string
     */
    public function log() {
        echo "Hello I'm function log from ".__CLASS__."<br>";
    }
}

class First {
 
    public $name;
 
    public $lastname;

    /**
     * Print firstname and lastname separated by space
     * @param string $name  
     * @param string $lastname  
     * @return Logger
     */
    public function printMyName($name, $lastname) {
        echo $name . " ". $lastname."<br>";
        return new Logger();
    }
}