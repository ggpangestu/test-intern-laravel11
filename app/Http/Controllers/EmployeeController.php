<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class EmployeeController extends Controller
{
    // function tampil()
    // {
    //     $employee = Employee::get();
    //     return view('employee.tampil', compact('employee'));
    // }
    function tampil(Request $request)
    {
        $inputAge = $request->input('search'); // Input umur dari pengguna

        $location = DB::table('location')->orderBy('name', 'asc')->get();

        $locationCode = $request->input('city'); // Kode lokasi Jakarta

        $employeeQuery = DB::table('employee')
            ->join('location', 'employee.location_code', '=', 'location.code')
            ->select('employee.id', 'employee.employee_name', 'location.name', 'employee.birth_date');

        if (!empty($locationCode)) {
            $employeeQuery->where('employee.location_code', $locationCode);
        }
        if (!empty($inputAge)) {
            $currentDate = now(); // Mendapatkan tanggal saat ini
            $minBirthDate = $currentDate->subYears($inputAge)->toDateString(); // Menghitung batas tanggal lahir

            $employeeQuery->where('employee.birth_date', '<', $minBirthDate);
        }

        $employee = $employeeQuery->get();

        return view('employee.tampil', compact('location', 'employee'));
    }

    function add()
    {
        return view('employee.add');
    }

    function submit(Request $request)
    {
        $employee = new Employee();
        $employee->employee_name = $request->employee_name;
        $employee->location_code = $request->location_code;
        $employee->birth_date = $request->birth_date;
        $employee->save();

        return redirect()->route('employee.tampil');
    }

    function edit($id)
    {
        $employee = Employee::find($id);
        return view('employee.edit', compact('employee'));
    }

    function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->employee_name = $request->employee_name;
        $employee->location_code = $request->location_code;
        $employee->birth_date = $request->birth_date;
        $employee->update();

        return redirect()->route('employee.tampil');
    }

    function delete($id)
    {
        $location = Employee::find($id);
        $location->delete();
        return redirect()->route('employee.tampil');
    }
}
