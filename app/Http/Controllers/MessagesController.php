<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Messages;
use App\Models\Users;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    //
    public function index(){
     return view('home', [
        'active' => 'home',
          'title' => 'Messages',
          'messages' => Messages::all(),
          'categories' => Categories::all()
     ]);
    }

    public function show(Categories $categories){
        return view('category', [
            'active' => $categories->slug,
          'category' => $categories,
          'categories' => Categories::all(),
          'messages' => $categories->messages
        ]);
    }

}
