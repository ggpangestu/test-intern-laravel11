@extends('layout')

@section('konten')
<div class="container mt-4 ">
  <div class="card bg-white rounded-3 p-4 border shadow " style="height: 650px;">
    <div class="row mb-4 align-items-center">
      <div class="col-md-6">
        <h3>LOCATION</h3>
      </div>
      <div class="col-md-6 d-flex justify-content-end">
        <div class="mb-4">
          <a class="btn btn-success ms-2 mt-2" href="{{ route('location.add') }}">ADD LOCATION</a>
        </div>
      </div>
    </div>

    <div style="height: 500px; overflow-y: auto;">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Code</th>
            <th>Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($location as $data)
            <tr>
              <td>{{ $data-> id}}</td>
              <td>{{ $data-> code}}</td>
              <td>{{ $data-> name}}</td>
              <td>
                <a href="{{ route('location.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('location.delete', $data->id) }}" method="POST" style="display:inline">
                  @csrf
                  <button class="btn btn-danger btn-sm">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div>
      <a href="{{ url('/') }}" class="btn btn-secondary">Back to Dashboard</a>
      <a href="{{ url('/employee') }}" class="btn btn-primary">Go to Employee</a>
    </div>
  </div>
</div>
@endsection