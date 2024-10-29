<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends BaseController
{
    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name'=>'required|max:100',
            'email'=>'required|email|unique:users,email',
            'nationality'=>'required|alpha|size:2',
            'birthdate'=>'required|before_or_equal:-10 years|after_or_equal:-120 years',
            'password'=>[
                'required',
                'min:8',
                'max:20',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]/',
            ],
            'confirm_password'=>'required|same:password',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'nationality'=>$request->nationality,
            'birthdate'=>$request->birthdate,
            'password'=> Hash::make($request->password),
            'confirm_password'=> Hash::make($request->confirm_password),
        ]);

        $response['token'] =  $user->createToken('token_api')->plainTextToken;
        $response['name'] =  $user->name;

        return $this->sendResponse($response, 'User register successfully.');
    }
}
