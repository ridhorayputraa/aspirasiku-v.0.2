{{-- @dd($active) --}}
@extends('layouts.main')

@section('container')

<div class="section container-fluid">

<section class="hero pt-5 section">
    <div class="container">
        <div class="row pt-5 " >
            <div class="col-12 col-md-6 align-self-center">
                <h1 class="mb-3">Selamat Datang di Aspirasiku</h1>
                @auth
                <p class="mb-3">Terimkasih telah bergabung <i>{{ auth()->user()->name }}</i>, silahkan membuat pesan baru ataupun berkomentar</p>

                <a href="/dashboard" class="text-decoration-none mb-4 btn btn-dark">To Dashboard</a>

                    @else
                    <p class="mb-3">Gabung Sekarang untuk menyalurkan aspirasi</p>
                    <a href="/login" class="text-decoration-none mb-4 btn btn-dark">Log In</a>
                @endauth

            </div>
            <div class="col-12 col-md-6 algin-self-center">
                <img src="../img/loud.jpg" class="rounded-circle img-fluid" width="500px" alt="aspiration logo">
            </div>
        </div>
    </div>

</section>
@endsection

@section('forum')
<div class="container ">
    <div class="row justify-content-end">
        <div class="col-12 col-md-3">
            <h1 class="mb-3">Forum</h1>
            {{-- for left components --}}


            <form action="/">
                <div class="input-group mb-3">
                    @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">

                    @endif
                    @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">

                    @endif
                    <input type="text" class="form-control" placeholder="Search..." name="search"
                        value="{{ request('search') }}">
                        <button class="btn btn-danger" type="submit" >Search</button>
                </div>
            </form>

            <a class="btn btn-secondary my-2" href="/dashboard/messages/create">Create Aspiration!</a>

            {{-- tags --}}
              @include('partials.tags')

            </div>
@endsection

{{-- testt pr --}}
{{-- testt 2 --}}
{{-- testtt 3 --}}

@section('msg')

<div class="col-12 col-md-9  mt-5">


    <h1 class="mb-2">{{ $title }}</h1>

    {{-- for right --}}

    {{-- container for aspirasi content --}}
    <div class="row container ">

        @if ($messages->count())


        @foreach ($messages as $msg)

        <div class="container my-4 main-message border">
            <p class="title">{{ $msg->title }}</p>
          <p><a class="text-decoration-none link author link-dark" href="/?author={{ $msg->users->username }}">{{ $msg->users->name }}</a></p>
            <p><a class="text-decoration-none category link link-dark" href="/?category={{ $msg->categories->slug }}"> {{ $msg->categories->name }}</a></p>
            <div class="border-bottom  border-dark">

            </div>
            <p class="mt-3">{{ $msg->excerpt }}</p>
            <p class="mt-2"><a class="text-decoration-none " href="/aspiration/{{$msg->slug}}">Click to see the comments</a> </p>
        </div>
        @endforeach
        @else
        <p class="text-center fs-4">Upsss there is nothing....</p>
        @endif

    </div>


</div>
</div>
</div>

{{ $messages->links()}}
</div>
@endsection






