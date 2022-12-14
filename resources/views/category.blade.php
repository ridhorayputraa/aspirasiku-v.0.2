{{-- @dd($active) --}}
@extends('layouts.main')

@section('container')


<section class="hero pt-5  section">
    <div class="container ">
        <div class="row">
            <div class="col-12 col-md-6 align-self-center">
                <h1 class="mb-3">Selamat Datang di Aspirasiku</h1>
                <p class="mb-3">Gabung Sekarang untuk menyalurkan aspirasi</p>
                <a href="/" class="text-decoration-none mb-4 btn btn-primary">Log In</a>
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
            <form action="/posts">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search"
                        value="{{ request('search') }}">
                </div>
            </form>

            <a class="btn btn-secondary my-2" href="/createmessage">Create Aspiration!</a>


            @include('partials.tags')

            </div>
@endsection

{{-- testt pr --}}
{{-- testt 2 --}}
{{-- testtt 3 --}}

@section('msg')

<div class="col-12 col-md-9 mt-5">
    <h1 class="mb-2">{{ $category->name }}</h1>
    {{-- for right --}}

    {{-- container for aspirasi content --}}
    <div class="row container ">

        @foreach ($messages as $msg)

        <div class="container my-4 main-message border">
            <p>{{ $msg->title }}</p>
            <p><a href="/author/{{ $msg->users->username }}">{{ $msg->users->name }}</a></p>
            <p><a href="/{{ $msg->categories->slug }}"> {{ $msg->categories->name }}</a></p>
            <div class="border-bottom  border-dark">

            </div>
            <p>{{ $msg->excerpt }}</p>
            <p><a href="/">Click to see the comments</a> </p>
        </div>
        @endforeach

    </div>
</div>
</div>
</div>

@endsection






