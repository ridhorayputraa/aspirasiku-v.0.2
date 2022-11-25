
@extends('layouts.main')

@section('container')
<h1>{{ $heading }}</h1>

<div class="row container ">

    @foreach ($datas as $msg)

    <div class="container my-4 main-message border">
        <p>{{ $msg->title }}</p>
      <p><a href="/author/{{ $msg->users->username }}">{{ $msg->users->name }}</a></p>
        <p><a href="/{{ $msg->categories->slug }}"> {{ $msg->categories->name }}</a></p>
        <div class="border-bottom  border-dark">

        </div>
        <p>excerptttt</p>
    </div>
    @endforeach

</div>
@endsection
