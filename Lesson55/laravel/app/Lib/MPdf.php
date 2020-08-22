<?php
namespace App\Lib;

class MPdf implements IPdf {

    
    public function write($text) {
        return $pdf->output();
        echo $text;
    }

    public function read() {
        echo "Hello I'm pdf extension MPDF";
    }
}