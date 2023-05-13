<?php

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard', [
            "title" => 'Home'
        ]);
});

Route::get('/employees', [EmployeeController::class, 'index']);

Route::get('/employees/{employee:slug}', [EmployeeController::class, 'show']);

Route::get('/departments/{department:slug}', function (Department $department){
    return view('department.department', [
        'title' => $department->name,
        'employees' => $department->employee,
        'department' => $department->name
    ]);
});

Route::get('/departments', function (){
    return view('department.departments', [
        'title' => 'Company Departments',
        'departments' => Department::all()
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
