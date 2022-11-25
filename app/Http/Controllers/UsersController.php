<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //

    public function show(Users $users){
        return view('user', [
            'heading' => $users->name,
          'datas' => $users->messages,
        //   'categories' => Categories::all(),
        //   'messages' => $categories->messages
        ]);
    }
}
