@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1> Employees</h1>
    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Salary</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                <tr>
                    <th scope="row">{{ $employee->id }}</th>
                    <td><a href="{{route('employees.show', $employee->id)}}">{{ $employee->name }}</a></td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->phone_number }}</td>
                    <td>{{ $employee->salary }}</td>
                    <td>{{ date('d M, Y', strtotime($employee->dob)) }}</td>
                    <td><a href="{{route('employees.edit', $employee->id)}}">Edit</a></td>

                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $employees->links() !!}
        </div>
    </div>     
</div>
@endsection
