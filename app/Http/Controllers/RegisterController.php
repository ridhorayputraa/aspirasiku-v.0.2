<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('register.index', [
        'title' => 'Register',
        'active' => 'register'
        ]);
    }

    public function store(Request $request){
        $validate = $request->validate([
        'name' => 'required|min:3|max:20',
        'username' => 'required|min:3|max:20|unique:users',
        'email' => 'required|email:dns|max:255|unique:users',
        'password' => 'required|min:5|max:20',
        ]);

        $validate['password'] = bcrypt($validate['password']);
        Users::create($validate);

        return redirect('/login')->with('success', 'Account succesfull created! Please Login Here');
    }
}
