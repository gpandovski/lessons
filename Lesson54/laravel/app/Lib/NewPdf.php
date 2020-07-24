<?php
namespace App\Lib;

class NewPdf implements IPdf {
    public function write($text) {
        echo $text;
    }

    public function read() {
        echo "Hello I'm pdf extension NEW PDF";
    }
}