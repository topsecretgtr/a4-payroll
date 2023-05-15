<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('hr.employees', [
            "title" => "All Employees",
            "employees" => Employee::with(['user', 'department'])->get()
        ]);
    }

    public function show(Employee $employee)
    {
        return view('hr.employee', [
            "title" => "Single Employee",
            "employee" => $employee
        ]);
    }
}
