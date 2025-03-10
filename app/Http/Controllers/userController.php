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
        $voyages = Annonce::paginate(6);
        return view('clientView.welcome', ['voyages' => $voyages]);
    }
    public function index(){
        // $voyages = Annonce::paginate(6);
        return view('dashboard.dashboard');
    }
    public function login(){
        return view('Auth.login');
    }
    public function authLogin(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // $user = Auth::user();
        

        if (Auth::attempt($credentials,true)) {
            if(auth()->user()->role_id == 1){
                return redirect()->intended('/client')->with('success', 'Login successful');
            }
            return redirect()->intended('/')->with('success', 'Login successful');
        }

        return redirect('/login')->with('error', 'Invalid credentials');

    }

    public function register(){
        $roles = Role::where('id', '!=', 3)->get();
        return view('Auth.register', ['roles' => $roles]);
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4',
            // 'role' => 'required'
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            // 'role_id' => $request->role
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
    public function editRole(Request $request, $id){
        $user = User::find($id);
        // dd($request->role);
        $user->role_id = $request->role;
        $user->save();
        return redirect()->back()->with('success', 'Role updated successfully');
    }
}
