<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;
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

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
