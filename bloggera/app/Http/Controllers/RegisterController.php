<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User};
class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $attributes=$request->validate([
            'name'=>'required|unique:users,name',
            'email'=>'required|email|unique:users,email',
            'password'=>'required'
        ]);
        $attributes['password']=bcrypt($attributes['password']);

        $user = User::create($attributes);

        auth()->login($user);
        return redirect('/');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function verify_user(Request $request)
    {
        $attributes=$request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(auth()->attempt($attributes))
        {
            return redirect('/');
        }
        return redirect()->back()->withErrors(['email'=>'Wrong email or password']);
         
    }
    public function logout()
    {
        auth()->logout();
        
        return redirect('/');
    }
}
