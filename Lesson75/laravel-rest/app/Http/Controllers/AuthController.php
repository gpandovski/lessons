<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
use App\User;
use GuzzleHttp\Client;
use Carbon\Carbon;
use Laravel\Passport\Client as JWTAuth;

class AuthController extends Controller
{
    public function login() {

        request()->validate([
            'email' => 'required|string',
            'password' => 'required|string',
 
        ]);

        $credentials = request(['email', 'password']);
        //save response to login

        if(!Auth::attempt( $credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);

        $user = request()->user();

        $tokenResult = $user->createToken('Personal Access Token');
        // $tokenResult = $user->createToken('Personal Access Token', ['check-status']);
        // $token = $user->createToken('Laravel Password Grant Client')->accessToken;


        $token = $tokenResult->token;

        if (request()->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();

        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);

    }

    public function register() {
        // name, email, password
        request()->validate([
            'username'=>'required', 
            'email'=>'required',
            'password'=>'required|confirmed',
     
            ]);
        User::create([
            'name' => request('username'),
            'email' => request('email'),
            'password' => Hash::make(request('password'))
        ]);
        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    }
 


    public function logout() {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}