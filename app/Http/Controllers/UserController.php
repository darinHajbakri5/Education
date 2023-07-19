<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function create(){
        return view('user.register');
    }

    public function store(Request $request){

        $formField =$request->validate([
          'name' => 'required',
          'email' => 'required|email|unique:users',
          'password' => 'required|confirmed|min:6',
          'role' => 'required|in:teacher,student'
        ]);

        $formField['password'] = bcrypt($formField['password']);
        $user = User::create($formField);
        Auth::login($user);
        return redirect('/');
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function login(){
         return view('user.login');

    }

    public function authenticate(Request $request){
        $formField = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
            'role' => 'required'
        ]);

        if(auth()->attempt($formField)){
            $request->session()->regenerate();
            return redirect()->route('home');
        }
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput(2);

}
}
