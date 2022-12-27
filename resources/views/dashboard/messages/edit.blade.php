@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
  </div>

  {{-- form --}}
  <div class="col-lg-8">

      <form method="post" class="mb-5" action="/dashboard/messages/{{ $message->slug }}">
      {{-- Method default routes edit --}}
      @method('put')
        @csrf
        {{-- akan langung ke method source --}}
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" class="form-control @error('title')
           is-invalid
          @enderror" id="title" autofocus value="{{ old('title', $message->title) }}">

          @error('title')
             <div class="invalid-feedback">
                {{ $message }}
             </div>
          @enderror

        </div>

        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" name="slug" class="form-control @error('slug')
               is-invalid
          @enderror" readonly id="slug" value="{{ old('slug', $message->slug) }}">
          @error('slug')
               <div class="invalid-feedback">
                {{ $message }}
               </div>
          @enderror
        </div>

                <div class="mb-3">
                  <label for="category" class="form-label">Category</label>
                  <select class="form-select" name="categories_id">
                       @foreach ($categories as $category )
                       @if (old('categories_id', $message->categories_id) == $category->id)
                       <option value="{{ $category->id }}" selected>{{ $category->name }} </option>
                       @else
                       <option value="{{ $category->id }}">{{ $category->name }}</option>
                       @endif
                       @endforeach
                  </select>
                </div>


                <div class="mb-3">
                  <label for="body" class="form-label">Body</label>
                  @error('body')
                  <p class="text-danger">{{ $message }}</p>
                  @enderror
                  <input id="body" type="hidden" name="body" value="{{ old('body', $message->body) }}">
                  <trix-editor input="body"></trix-editor>

                </div>


        <button type="submit" class="btn btn-primary">Create Post</button>
      </form>

  </div>

  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        console.log(slug.value)
        fetch('/dashboard/messages/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })



    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

    </script>

@endsection
