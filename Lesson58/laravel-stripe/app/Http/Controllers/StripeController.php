<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Stripe;
use Session;

class StripeController extends Controller
{
    /**
     * payment view
     */
    public function create()
    {
        return view('home');
    }
  
    /**
     * handling payment with POST
     */
    public function store(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $result = Stripe\Charge::create ([
                "amount" => 100 * 100, // in cents!
                "currency" => "eur",
                "source" => $request->stripeToken,
                "description" => "Making test payment."
        ]);
    
        if($result['status']==='success') {
            // Payments user_id, payment_id, status
            $payment = Payments::create([
                'user_id'=>Auth::user()->id,
                'payment_id'=> $result['id'],
                
            ])
        }
  
        Session::flash('success', 'Payment has been successfully processed.');
          
        return back();
    }
}
