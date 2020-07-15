<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Example;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request as RequestFacade;
use App\Pdf;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index( )
    {
  
        PDF::WriteHTML('<h1>Hello world!</h1>');
        PDF::WriteHTML('<p> This is mpdf through Laravel facade proxy classes </p>');

        return PDF::Output();
 
    }
}
