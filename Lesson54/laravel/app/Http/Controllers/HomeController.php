<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Config\Repository;
use App\Lib\IPdf;

class HomeController extends Controller
{
    // //
    // protected $config;

    // public function __construct(Repository $config) {
    //     $this->config = $config;
    // }
    public function index(IPdf $pdf) {
        // construction injection
        //
        // return $this->config->get('database.default');

        // Constructor method injection
        //return $config->get('database.default');

        // facade
        // return \Config::get('database.default');

        // config function
        $pdf->read();
 
       // return config('database.default');

    }
}
