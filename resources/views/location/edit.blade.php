@extends('layout')

@section('konten')

<div class="d-flex justify-content-center">
  <div class="card bg-white rounded-3 p-4 border shadow " style="height: 320px; width: 950px;">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h3> ADIT LOCATION</h3>
      </div>
      <div class="d-flex justify-content-center">
        <form action="{{ route('location.update', $location->id) }}" method="POST" class="w-50">
          @csrf
          <div class="form-group">
            <label for="employee_name">Code</label>
            <input type="text" name="code" value="{{ $location->code }}" class="form-control mb-3" id="code">
          </div>
          <div class="form-group">
            <label for="location_code">Name</label>
            <input type="text" name="name" value="{{ $location->name }}" class="form-control mb-3" id="name">
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary me-2">ADIT DATA</button>
          </div>
        </form>
      </div>
    </div>
    <div>
      <a href="{{ url('/location') }}" class="btn btn-secondary">Back to Location</a>
    </div>
  </div>
</div>
@endsection