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



        <main class="form-signin w-100 mt-5 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
            <form>
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
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
