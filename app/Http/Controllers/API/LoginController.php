<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends BaseController
{
   public function login(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            $user = Auth::user();
            $response['token'] = $user->createToken('token_api')->plainTextToken;
            $response['name'] = $user->name;
            return $this->sendResponse($response, 'User logged in successfully.');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised'], 401);
        }
   }

   public function logout(Request $request){
        $user=$request->user();
        $user->tokens()->delete(); //Apaga todos os tokens
        $user->currentAccessToken()->delete();
        return $this->sendResponse(null, 'User logged out successfully.');
   }
}
