<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    //
    public function index(){
     return view('home', [
          'title' => 'Messages',
          'messages' => Messages::all(),
          'categories' => Categories::all()
     ]);
    }

    public function show(Categories $categories){
        return view('category', [
          'category' => $categories,
          'categories' => Categories::all(),
          'messages' => $categories->messages
        ]);
    }
}
