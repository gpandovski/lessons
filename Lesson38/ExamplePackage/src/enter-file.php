<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\SayHello;
use App\Database\DB;

// use namespace of installed package 
use Carbon\Carbon;

// Use package 
printf("Now: %s", Carbon::now());

echo SayHello::world();
$db = new DB();