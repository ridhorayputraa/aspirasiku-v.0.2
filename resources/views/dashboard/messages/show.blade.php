{{-- @dd($message) --}}
@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row  my-3">
        <div class="col-md-8">



    <h1 class="mb-3">{{ $message->title }}</h1>

<a href="/dashboard/messages" class="btn btn-success"  ><span data-feather="arrow-left"></span> Back to all my aspiration</a>
{{-- edit --}}
<a href="/dashboard/messages/{{ $message->slug }}/edit" class="btn btn-warning"  ><span data-feather="edit"></span>Edit</a>


<form action="/dashboard/messages/{{ $message->slug }}" class="d-inline" method="post">
    @method('delete')
@csrf
<button  class="btn btn-danger" onclick="return confirm('Are you sure?')" >Delete<span data-feather='x-circle' ></span></button>
</form>

    <img src="https://source.unsplash.com/1200x400?{{ $message->categories->name }}" alt="{{ $message->categories->name }}" class="img-fluid mt-3">

    <article class="my- fs-6">
        {!! $message->body !!}
    </article>


        </div>
    </div>

</div>
@endsection
