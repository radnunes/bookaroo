<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $rules=[
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
    ];
    protected $messages=[
        'required' => 'The :attribute field is required.',
        'email' => 'The :attribute must be a valid email address.',
        'unique' => 'The :attribute has already been taken.',
        'max' => 'The :attribute may not have more than :max characters.',
        'alpha' => 'The :attribute may only contain letters.',
        'size' => 'The :attribute may not have more or less than :size characters.',
        'before_or_equal' => 'You must be older than 10 years old.',
        'after_or_equal' => 'You must be younger than 120 years old.',
        'confirm_password.same' => 'Password does not match.',
    ];
    public function showRegister()
    {
        return view('template.auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados=$request->validate($this->rules,$this->messages);
        $user = new User($dados);

        $user->save();

        $user->assignRole('client');

        return redirect()->route('login');
    }
}
