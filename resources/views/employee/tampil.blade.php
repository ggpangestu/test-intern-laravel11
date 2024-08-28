@extends('layout')
<link rel="stylesheet" href="{{ asset('css/style.css?v=' . time()) }}">
@section('konten')
  <div class="container mt-4">
    <div class="card bg-white rounded-3 p-4 border shadow " style="height: 650px;">
      <div class="row mb-4 align-items-center">
        <div class="col-md-6">
          <h3>EMPLOYEE</h3>
        </div>
        
        <div class="col-md-6 d-flex justify-content-end">
          <form action="{{ route('employee.tampil') }}" method="GET" class="d-flex align-items-center">
            @csrf
            <div class="form-group me-2">
              <input type="number" name="search" placeholder="Search by age" value="{{ request('search') }}" class="form-control" style="max-width: 200px;">
            </div>
  
            <div class="form-group me-2">
              <select name="city" id="city" class="form-select">
                <option value="">All</option>
                @foreach($location as $location)
                  <option value="{{ $location->code }}" {{ request('city') == $location->code ? 'selected' : '' }}>{{ $location->name }}</option>
                @endforeach
              </select>
            </div>
  
            <button type="submit" class="btn btn-primary">Search</button>
          </form>
          <div class="mb-4">
            <a class="btn btn-success ms-2 mt-2" href="{{ route('employee.add') }}">ADD EMPLOYEE</a>
          </div>
        </div>
      </div>

      <div style="height: 500px; overflow-y: auto;">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>Name</th>
              <th>Location</th>
              <th>Birth Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($employee as $data)
              <tr>
                <td>{{ $data->employee_name }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->birth_date }}</td>
                <td>
                  <a href="{{ route('employee.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                  <form action="{{ route('employee.delete', $data->id) }}" method="POST" style="display:inline">
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
        <a href="{{ url('/location') }}" class="btn btn-primary">Go to Location</a>
      </div>
    </div>
  </div>
@endsection
