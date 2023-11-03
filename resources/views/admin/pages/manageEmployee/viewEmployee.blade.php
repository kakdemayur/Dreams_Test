@extends('admin.master')

@section('content')
    <div class="shadow p-4 d-flex justify-content-between align-items-center ">
        <h4 class="text-uppercase">View Employee Details</h4>
        <div>
            <a href="{{ route('manageEmployee.addEmployee') }}" class="btn btn-info p-2 text-lg rounded">Add New
                Employee</a>
        </div>
    </div>
    <div class="container my-5 py-5">
        <table class="table align-middle text-center  mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th>Employee Name</th>
                    <th>Employee ID</th>
                    <th>Designation</th>
                    <th>Password</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Salary</th>
                    <th>Location</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->employee_id }}</td>
                        <td>{{ $employee->designation }}</td>
                        <td>{{ $employee->password }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->salary }}</td>
                        <td>{{ $employee->location }}</td>
                        <td>
                            <a class="btn btn-success" href="">Edit</a>
                            <a class="btn btn-danger" href="">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="w-25 mx-auto mt-4">
            {{ $employees->links() }}
        </div>
    </div>
@endsection
