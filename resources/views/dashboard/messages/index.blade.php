@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Aspiration</h1>
  </div>


  @if (session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive col-lg-8">
    <a href="/dashboard/message/create" class="btn btn-primary mb-3">Create new aspiration</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Title</th>
          <th scope="col">Tags</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($messages as $msg )


        <tr>
            {{-- lop iteration dari laravel --}}
            <td>{{ $loop->iteration }}</td>

            <td>{{ $msg->title }}</td>
            <td>{{ $msg->categories->name }}</td>
            <td>
                <a href="/dashboard/message/{{ $msg->slug }}" class="badge bg-info" ><span data-feather='eye' ></span></a>
                <a href="/dashboard/message/{{ $msg->slug }}/edit" class="badge bg-warning" ><span data-feather='edit' ></span></a>

                <form action="/dashboard/message/{{ $msg->slug }}" class="d-inline" method="post">
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
