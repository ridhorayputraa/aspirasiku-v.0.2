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
        $title = 'Messages by '. $author->name;
    }

     return view('home', [
        'active' => $active,
          'title' => $title,
          'messages' => Messages::latest()->filters(request(['search', 'category', 'author']))->paginate(5)->withQueryString(),
          'categories' => Categories::all()
     ]);
    }

    // for detail
    public function show(Messages $message){
        return view('detail', [
            'active' => 'detail',
            'title' => 'Detail messages',
            'message' => $message,
            'comment' => $message->comments,
        ]);
    }

}
