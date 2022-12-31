<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\Categories;
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

        $validated = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:messages',
            'categories_id' => 'required',
            'body' => 'required'
        ]);

        $validated['users_id'] = auth()->user()->id;
        $validated['excerpt'] = Str::limit(strip_tags( $request->body), 200);

        Messages::create($validated);

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
    // Untuk view
    public function edit(Messages $message)
    {
        //
        return view('dashboard.messages.edit', [
            'categories' => Categories::all(),
            'message' => $message
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Messages  $messages
     * @return \Illuminate\Http\Response
     */

    //  Logic Update
    public function update(Request $request, Messages $message)
    {
        //
        $filter = [
            'title' => 'required|max:255',
            'categories_id' => 'required',
            'body' => 'required'
        ];

        if($request->slug != $message->slug){
            $filter['slug'] = 'required|unique:messages';
        }

        $validate = $request->validate($filter);

       Messages::where('id', $message->id)->update($validate);



        return redirect('/dashboard/messages')->with('success', 'Aspirasimu sudah di Edit!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Messages $message)
    {
        //
           // destroy untuk mengahpus data
           Messages::destroy($message->id);
// return dd($message);
        return redirect('/dashboard/messages')->with('success', 'Aspirasimu sudah di hapus!');

    }

    public function checkSlug(Request $request){

        $slug = SlugService::createSlug(Messages::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
            }

}
