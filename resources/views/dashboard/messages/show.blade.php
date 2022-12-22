{{-- @dd($message) --}}
@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row  my-3">
        <div class="col-md-8">



    <h1 class="mb-3">{{ $message->title }}</h1>

<a href="/dashboard/messages" class="btn btn-success"  ><span data-feather="arrow-left"></span> Back to all my aspiration</a>

<a href="" class="btn btn-warning"  ><span data-feather="edit"></span>Edit</a>

<a href="" class="btn btn-danger"  ><span data-feather="edit"></span>Delete</a>


    <img src="https://source.unsplash.com/1200x400?{{ $message->categories->name }}" alt="{{ $message->categories->name }}" class="img-fluid mt-3">

    <article class="my- fs-6">
        {!! $message->body !!}
    </article>




        <a href="/" class="d-block mt-3">Back to post</a>

        </div>
    </div>
   
</div>
@endsection
