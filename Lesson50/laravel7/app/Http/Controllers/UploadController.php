<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //\
    public function show() {
        return view('upload');
    }

    public function store() {
        // dd(request('logo'));
        request()->logo->store('uploads');
    }
}
