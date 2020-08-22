<?php
namespace App\Lib;

interface IPdf 
{
    public function write($text);
    public function read();
} 