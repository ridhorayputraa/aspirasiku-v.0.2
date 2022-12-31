@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Aspiration Filter Admin</h1>
  </div>


  @if (session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive col-lg-8">
    <p>Aspirasi ini di urutkan dari yang terakhir di input</p>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Title</th>
          <th scope="col">User</th>
          <th scope="col">Tag</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($messages as $msg )


        <tr>
            {{-- lop iteration dari laravel --}}
            <td>{{ $loop->iteration }}</td>

            <td>{{ $msg->title }}</td>
            <td>{{ $msg->users->name }}</td>
            <td>{{ $msg->categories->name }}</td>
            <td class="d-felx text-center">

          
                <form action="/dashboard/messages/{{ $msg->slug}}" class="d-inline" method="post">
                    @method('delete')
                @csrf
                <button  class="badge bg-danger border-0" onclick="return confirm('Are you sure?')" ><span data-feather='x-circle' ></span></button>
                </form>
            </td>
          </tr>

        @endforeach


      </tbody>
    </table>
  </div>

@endsection
