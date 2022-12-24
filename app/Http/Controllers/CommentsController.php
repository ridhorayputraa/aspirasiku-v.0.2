<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //
    public function store(Request $request)
    {

        //
        $validatedData = $request->validate([
            'body' => 'required',
            'messages_id' => 'required'
        ]);

        // $validatedData['messages_id'] = $request->messages_id;
        $validatedData['users_id'] = auth()->user()->id;

        Comments::create($validatedData);

        return back()->with('commentssucsess', 'Berhasil menambakan komentar!');

    }
}
