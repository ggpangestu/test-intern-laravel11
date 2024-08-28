<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Route location
Route::get('/location', [LocationController::class, 'tampil'])->name('location.tampil');
Route::get('/location/add', [LocationController::class, 'add'])->name('location.add');
Route::post('/location/submit', [LocationController::class, 'submit'])->name('location.submit');
Route::get('/location/edit/{id}', [LocationController::class, 'edit'])->name('location.edit');
Route::post('/location/update/{id}', [LocationController::class, 'update'])->name('location.update');
Route::post('/location/delete/{id}', [LocationController::class, 'delete'])->name('location.delete');

//Route employee
Route::get('/employee', [EmployeeController::class, 'tampil'])->name('employee.tampil');
Route::get('/employee/add', [EmployeeController::class, 'add'])->name('employee.add');
Route::post('/employee/submit', [EmployeeController::class, 'submit'])->name('employee.submit');
Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::post('/employee/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
Route::post('/employee/delete/{id}', [EmployeeController::class, 'delete'])->name('employee.delete');
