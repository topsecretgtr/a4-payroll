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
            "firstName" => "Andres",
            "lastName" => "Ang",
            "slug" => "andres-ang",
            "sex" => "Laki",
            "age" => "39",
            "address" => "monginsidi",
            "position" => "Manager",
        ],
        [
            "id" => "2",
            "firstName" => "Grace",
            "lastName" => "Togelang",
            "slug" => "grace-togelang",
            "sex" => "Perempuan",
            "age" => "39",
            "address" => "Cut Nyak Dien",
            "position" => "SPV",
        ],
        [
            "id" => "3",
            "firstName" => "Aiden",
            "lastName" => "Ang",
            "slug" => "aiden-ang",
            "sex" => "Laki",
            "age" => "12",
            "address" => "Sutomo",
            "position" => "Waiter",
        ],
        [
            "id" => "4",
            "firstName" => "Amelia",
            "lastName" => "Ang",
            "slug" => "amelia-ang",
            "sex" => "Perempuan",
            "age" => "10",
            "address" => "Santigi",
            "position" => "Housekeeping",
        ],
        [
            "id" => "5",
            "firstName" => "Adeline",
            "lastName" => "Ang",
            "slug" => "adeline-ang",
            "sex" => "Perempuan",
            "age" => "5",
            "address" => "Sis Aljufri",
            "position" => "Leader",
        ]
    ];
    return view('hr.employees', [
        "title" => "Employees",
        "employees" => $employees
    ]);
});

Route::get('/employees/{slug}', function ($slug) {
    $employees = [
        [
            "id" => "1",
            "firstName" => "Andres",
            "lastName" => "Ang",
            "slug" => "andres-ang",
            "sex" => "Laki",
            "age" => "39",
            "address" => "monginsidi",
            "position" => "Manager",
        ],
        [
            "id" => "2",
            "firstName" => "Grace",
            "lastName" => "Togelang",
            "slug" => "grace-togelang",
            "sex" => "Perempuan",
            "age" => "39",
            "address" => "Cut Nyak Dien",
            "position" => "SPV",
        ],
        [
            "id" => "3",
            "firstName" => "Aiden",
            "lastName" => "Ang",
            "slug" => "aiden-ang",
            "sex" => "Laki",
            "age" => "12",
            "address" => "Sutomo",
            "position" => "Waiter",
        ],
        [
            "id" => "4",
            "firstName" => "Amelia",
            "lastName" => "Ang",
            "slug" => "amelia-ang",
            "sex" => "Perempuan",
            "age" => "10",
            "address" => "Santigi",
            "position" => "Housekeeping",
        ],
        [
            "id" => "5",
            "firstName" => "Adeline",
            "lastName" => "Ang",
            "slug" => "adeline-ang",
            "sex" => "Perempuan",
            "age" => "5",
            "address" => "Sis Aljufri",
            "position" => "Leader",
        ]
    ];
    
    $new_emp =[];
    foreach($employees as $emp){
        if($emp["slug"]===$slug){
            $new_emp = $emp;
        }
    };
    return view('hr.employee', [
        "title" => "Single Employee",
        "employee" => $new_emp
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
