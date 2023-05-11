<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/employees', function () {
    $employees = [
        [
            "id" => "1",
            "name" => "Andres",
            "sex" => "Laki",
            "age" => "39",
            "address" => "monginsidi",
            "position" => "Manager",
        ],
        [
            "id" => "2",
            "name" => "Grace",
            "sex" => "Perempuan",
            "age" => "39",
            "address" => "Cut Nyak Dien",
            "position" => "SPV",
        ],
        [
            "id" => "3",
            "name" => "Aiden",
            "sex" => "Laki",
            "age" => "12",
            "address" => "Sutomo",
            "position" => "Waiter",
        ],
        [
            "id" => "4",
            "name" => "Amelia",
            "sex" => "Perempuan",
            "age" => "10",
            "address" => "Santigi",
            "position" => "Housekeeping",
        ],
        [
            "id" => "5",
            "name" => "Adeline",
            "sex" => "Perempuan",
            "age" => "5",
            "address" => "Sis Aljufri",
            "position" => "Leader",
        ]
    ];
    return view('employees', [
        "title" => "Empployees",
        "employees" => $employees
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
