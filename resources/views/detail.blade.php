@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">



    <h1 class="mb-3">{{ $message->title }}</h1>

    <p>By. <a class="text-decoration-none" href="/?author={{ $message->users->username }}"> {{ $message->users->name }}</a> in <a href="/?category={{ $message->categories->slug }}" class="text-decoration-none"> {{ $message->categories->name }}</a></p>

    <img src="https://source.unsplash.com/1200x400?{{ $message->categories->name }}" alt="{{ $message->categories->name }}" class="img-fluid">

    <article class="my- fs-6">
        {!! $message->body !!}
    </article>
+



        <a href="/" class="d-block mt-3">Back to post</a>

        </div>
    </div>
    <div class="row mb-5">
        <h4 class="border-bottom">Comments Section</h4>

    </div>
    @foreach ($comment as $cmn )
    <div class="row border-bottom pt-2 comment-card">
        <p class="cmn-body">{{ $cmn->body}}</p>

            <p class="user-cmn" >{{ $cmn->users->name }}</p>

    </div>

    @endforeach

    <div class="box">
		<h2>Login</h2>
		<form action="">
			<div class="inputBox">
				<input type="text" name="" required="">
				<label for="">Username</label>
			</div>
			<div class="inputBox">
				<input type="password" name="" required="">
				<label for="">Password</label>
			</div>
			<input type="submit" name="" value="Submit">
		</form>
	</div>

</div>

@endsection
