@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">



         @if (session()->has('success'))
         {{-- ALert for flashing --}}
         <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
             {{ session('success') }}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>

         @endif




         @if (session()->has('loginError'))
         {{-- ALert for flashing --}}
         <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
             {{ session('loginError') }}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>

         @endif



        <main class="form-signin w-100 mt-5 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
            <form action="/login" method="post">
            @csrf
                <div class="form-floating">
                <input type="email" class="form-control @error('email')
                  'is-invalid'
                @enderror"  name="email" required id="email" placeholder="name@example.com" value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                     <div class="invalid-feedback">
                        {{ $message }}
                     </div>
                @enderror

              </div>
              <div class="form-floating">
                <input type="password"  required class="form-control @error('password')
                  is-invalid
                @enderror" name="password" id="password" placeholder="Password">
                <label for="password">Password</label>
                @error('password')
                     <div class="invalid-feedback">
                        {{ $message }}
                     </div>
                @enderror
              </div>


              <button class="w-100 btn btn-lg btn-dark" type="submit">Log in</button>
            </form>

            <small class="d-block text-center mt-3">
                Not registered? <a href="/register">Register Now!</a>
            </small>
          </main>

    </div>
</div>
@endsection
