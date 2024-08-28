@extends('layout')

@section('konten')

<div class="d-flex justify-content-center">
  <div class="card bg-white rounded-3 p-4 border shadow " style="height: 420px; width: 950px;">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h3> ADIT EMPLOYEE</h3>
      </div>
      <div class="d-flex justify-content-center">
        <form action="{{ route('employee.update', $employee->id) }}" method="POST" class="w-50">
          @csrf
          <div class="form-group">
            <label for="employee_name">Name</label>
            <input type="text" name="employee_name" value="{{ $employee->employee_name }}" class="form-control mb-3" id="employee_name">
          </div>
          <div class="form-group">
            <label for="location_code">Location Code</label>
            <input type="text" name="location_code" value="{{ $employee->location_code }}" class="form-control mb-3" id="location_code">
          </div>
          <div class="form-group">
            <label for="birth_date">Birth Date</label>
            <input type="date" name="birth_date" value="{{ $employee->birth_date }}" class="form-control mb-4" id="birth_date">
          </div>
  
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary me-2">ADIT DATA</button>
          </div>
        </form>
      </div>
    </div>
    <div>
      <a href="{{ url('/employee') }}" class="btn btn-secondary">Back to Employee</a>
    </div>
  </div>
</div>
@endsection