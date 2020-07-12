<?php

namespace App\Components\Example;

class ExampleService {

    protected $api_key;

    public function __construct($api_key) {
        $this->api_key = $api_key;
    }

    public function handle() {
        die('Hello World from Example class');
    }
}