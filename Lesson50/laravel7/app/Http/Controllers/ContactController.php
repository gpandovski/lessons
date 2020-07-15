<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactUs;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function show()
    {
        return view('contacts');
    }

    public function store()
    {
        

         // validation 
         request()->validate(['email' =>'required|email']); // valid email *** @ *** . ***

         
        //  Mail::raw('This is my first email', function($message) {
        //         $message->to(request('email'))
        //         ->subject('My email');
        //  });


        // $topic request('topic')
        // $message request('message')
        // auth()->user



        Mail::to(config('mail.from.address'))->send(new Contact());

         // Flash messages - session message
         // $_SESSION['message'] = 'You email is sent, thank you!'
         // $_SESSION['message'] = ' ' , unset( $_SESSION['message']) //  $_SESSION['message'] will be null


         return redirect('/contacts/create')->with('message', 'You email is sent, thank you!');
    }
}
