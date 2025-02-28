<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Role;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function welcome(){
        $voyages = Annonce::all();
        return view('welcome', compact('voyages'));
    }
    public function login(){
        return view('login');
    }
    public function authLogin(Request $request){
        echo 'kdhfk';
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials,true)) {
            return redirect()->intended('/')->with('success', 'Login successful');
        }

        return redirect('/login')->with('error', 'Invalid credentials');

    }

    public function register(){
        $roles = Role::all();
        return view('register', ['roles' => $roles]);
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4',
            'role' => 'required'
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => $request->role
        ]);
        return redirect('/login')->with('success', 'Registration successful');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'Successfully logged out');
    }
}
