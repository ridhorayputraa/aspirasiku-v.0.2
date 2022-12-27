@extends('layouts.main')

@section('container')

@if (session()->has('commentssucsess'))
<div class="alert alert-success mt-3" role="alert">
  {{ session('commentssucsess') }}
</div>
@endif

<div class="container">
    <div class="row justify-content-center mb-5 ">
        <div class="col-md-8">




        <h1 class="mb-3 mt-3">{{ $message->title }}</h1>



    <p>By. <a class="text-decoration-none" href="/?author={{ $message->users->username }}"> {{ $message->users->name }}</a> in <a href="/?category={{ $message->categories->slug }}" class="text-decoration-none"> {{ $message->categories->name }}</a></p>

    <div class="border-bottom">
    <article class="my-3 fs-6 ">
        {!! $message->body !!}
    </article>
    </div>

        <a href="/" class="d-block mt-5">Back to home</a>

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
		<form action="/createcomment" method="post">
	        @csrf
            <div class="inputBox">
				<input type="text" class="@error('body')
                 is-invalid
                @enderror" id="body" name="body">
                <input type="text" value="{{ $message->id }}" hidden name="messages_id">
				<label for="body">Create a comment</label>

                @error('body')
                 <div class="invalid-feedback">
                    {{ $message }}
                 </div>
                @enderror
			</div>
           @auth
           <button type="submit" class="btn btn-primary">Create Comments</button>

           @else
           <a href="/login" class="text-decoration-none mb-4 btn btn-primary">Create Comments</a>

           @endauth



		</form>
	</div>

</div>

@endsection
