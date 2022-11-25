<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //

    public function show(Users $users){
        return view('user', [
          'datas' => $users,
        //   'categories' => Categories::all(),
        //   'messages' => $categories->messages
        ]);
    }
}
