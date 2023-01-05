<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthenticationRequest;
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



    // public function login()
    // {
      
    // }
    
}
