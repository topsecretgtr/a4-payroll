@extends('layouts.main')

@section('container')
    
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Employees</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col"> First Name</th>
            <th scope="col"> Last Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Age</th>
            <th scope="col">Address</th>
            <th scope="col">Position</th>
            <th scope="col">Department</th>
            <th scope="col">Username</th>
          </tr>
        </thead>
        <tbody>
          @foreach($employees as $employee)
            <tr>
              <th scope="row">{{ $employee->id }}</th>
              <td><a href="/employees/{{ $employee->slug }}">{{ $employee->firstName }}</td>
              <td>{{ $employee->lastName }}</td>
              <td>{{ $employee->gender }}</td>
              <td>{{ $employee->age }}</td>
              <td>{{ $employee->address }}</td>
              <td>{{ $employee->position }}</td>
              <td><a href="/departments/{{ $employee->department->slug }}">{{ $employee->department->name }}</td>
              <td>{{ $employee->user->username }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
