<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login.index', [
               'title' => 'Login',
               'active' => 'login'
        ]);
    }

    public function authenticate(Request $request){
       $credentials = $request->validate([
         'email' => 'required|email:dns',
         'password' => 'required'
       ]);
       dd('loginn oke');
    }
}
