<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function signin()
    {
        return view('sign_in');
    }



    public function register()
    {
        return view('register');
    }


    public function signup(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:225',
                'email' => 'required|email|max:225|unique:users',
                'password' => 'required|min:6|string',
            ],
            [
                'name.required' => 'Enter your name.',
                'name.max' => 'Your name is too long.',
                'email.required' => 'Enter your email.',
                'email.email' => 'Email not recognized.',
                'email.max' => 'Your email is too long.',
                'password.required' => 'Enter your password.',
                'password.min' => 'Email must have at least 6 characters.',
            ]
        );


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();


        if (!$user) {
            return 'Could not register';
        }
        // return "Registration Successful";
        return redirect()->back()->with('success', 'Registration Successful');
    }

    public function login(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'email.required' => 'Enter your email.',
                'email.email' => 'Email not recognized.',
                'password.required' => 'Enter your password.',
                ]
            );
            
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            
            $credentials = $request->only('email', 'password');
            
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home')->with('success', 'Welcome to StudyHub');
        } else {
            return redirect()
                ->route('signin')
                ->withErrors(['email' => 'Either your password or email is incorrect.'])
                ->onlyInput('email');
        }
    }
}
