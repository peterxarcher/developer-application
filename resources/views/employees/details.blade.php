@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1> {{$employee->name}} Details</h1>
    <ul class="list-group mt-2">
        <li class="list-group-item"><strong>Email</strong>: {{$employee->email}}</li>
        <li class="list-group-item"><strong>Phone</strong>: {{$employee->phone_number}}</li>
        <li class="list-group-item"><strong>Department</strong>: {{$employee->department}}</li>
        <li class="list-group-item"><strong>Salary</strong>: {{$employee->salary}}</li>
        <li class="list-group-item"><strong>Address</strong>: {{$employee->address}}</li>
        <li class="list-group-item"><strong>DOB</strong>: {{ date('d M, Y', strtotime($employee->dob))}}</li>
    </ul>
</div>
@endsection
