<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Messages;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class DashboardMessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            //
            return view('dashboard.messages.index', [
                // hanya tampilkan kan postingan user
                // ambil berdasarkn user_id = yang terotentikasi

                'messages' => Messages::where('users_id', auth()->user()->id)->get()

            ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.messages.create',[
            'categories' => Categories::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
          'title' => 'required|max:255',
          'slug' => 'required|unique:messages',
          'categories_id' => 'required',
          'body' => 'required'
        ]);

        $validatedData['users_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags( $request->body), 200);

        Messages::create($validatedData);

        return redirect('/dashboard/messages')->with('success', 'Aspirasimu sudah di tambahkan!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function show(Messages $message)
    {
        //
        return view('dashboard.messages.show', [
            'message' => $message
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function edit(Messages $messages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Messages $messages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Messages $messages)
    {
        //
    }

    public function checkSlug(Request $request){

        $slug = SlugService::createSlug(Messages::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
            }

}
