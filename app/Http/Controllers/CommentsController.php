<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //
    public function store(Request $request)
    {
        //
        return $request;
        // $validatedData = $request->validate([
        //     'title' => 'required|max:255',
        //     'slug' => 'required|unique:posts',
        //     'category_id' => 'required',
        //     'body' => 'required'
        // ]);

        // // Tambahkan user_id
        // $validatedData['user_id'] = auth()->user()->id;

        // Comments::create($validatedData);

        // return redirect('/dashboard/posts' )->with('success', 'New post has been added!');

    }
}
