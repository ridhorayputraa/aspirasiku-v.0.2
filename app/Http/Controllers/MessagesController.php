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

      $active = 'home';
      if(request('category')){
          $category = Categories::firstWhere('slug', request('category'));
          $active =  $category->slug;
      }


     return view('home', [
        'active' => $active,
          'title' => 'Messages',
          'messages' => Messages::latest()->filters(request(['search', 'category']))->get(),
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
