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
      $title = 'All tags';
      if(request('category')){
          $category = Categories::firstWhere('slug', request('category'));
          $active =  $category->slug;
          $title = $category->name;
      }

      if(request('author')){
        $author = Users::firstWhere('username', request('author'));
        $active =  "home";
        $title = 'All messages by '. $author->name;
    }

     return view('home', [
        'active' => $active,
          'title' => $title,
          'messages' => Messages::latest()->filters(request(['search', 'category', 'author']))->paginate(5),
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
