<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('department.departments', [
            'title' => 'Company Departments',
            'departments' => Department::get()
        ]);
    }

    public function show(Department $department)
    {
        return view('hr.employees', [
            'title' => $department->name,
            'employees' => $department->employee->load('user', 'department')
        ]);
    }
}
