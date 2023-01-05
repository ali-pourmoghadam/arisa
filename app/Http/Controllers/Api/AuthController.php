<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthenticationRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


    public function register(AuthenticationRequest $request)
    {
        $user = User::create($request->all());

        return response()->json([

            "message" => "user created successfully" ,

            "token" => $user->createToken("API TOKEN")->plainTextToken

        ]) ;
    }



    public function login(LoginRequest $request)
    {
  
        if (!Auth::attempt($request->all())) 
        {
             return response()->json([ 'message' => 'Invalid login details' ], 401);
        }

        $user= User::where("email" , $request->input("email"))->firstOrfail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([ 'token' =>  $token ]);
    
    }
    
}
