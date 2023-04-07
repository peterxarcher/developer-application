@extends('layouts.app')

@section('content')
<div class="container mt-5">
<div class="well">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{!! Form::open(['url' => route('employees.update', $employee->id), 'class' => 'form-horizontal']) !!}
@method('PUT')

<fieldset>

    <legend>Employee</legend>
    <div class="row">
        <div class="col-md-8">   
            <div class="form-group mb-3">
                <label for="name" class="col-lg-2 control-label">Name</label>
                <div class="col-lg-8">
                    <input type="text" name="name" id="name" value="{{$employee->name}}" class="form-control">
                </div>
            </div>

            
            <div class="form-group mb-3">
                <label for="email " class="col-lg-2 control-label">Email </label>
                <div class="col-lg-8">
                    <input type="email" name="email" id="email" value="{{$employee->email }}" class="form-control">
                </div>

            </div>
            
            <div class="form-group mb-3">
                <label for="phone_number " class="col-lg-2 control-label">Phone Number </label>
                <div class="col-lg-8">
                    <input type="text" name="phone_number" id="phone_number" value="{{$employee->phone_number }}" class="form-control">
                </div>

            </div>

            <div class="form-group mb-3">
                <label for="department " class="col-lg-2 control-label">Department </label>
                <div class="col-lg-8">
                    <input type="text" name="department" id="department" value="{{$employee->department }}" class="form-control">
                </div>

            </div>
            <div class="form-group mb-3">
                <label for="dob " class="col-lg-2 control-label">DOB </label>
                <div class="col-lg-8">
                    <input type="text" name="dob" id="dob" value="{{date('d-m-Y', strtotime($employee->dob)) }}" class="form-control">
                </div>

            </div>
            <div class="form-group mb-3">
                <label for="address " class="col-lg-2 control-label">Address </label>
                <div class="col-lg-8">
                    <textarea name="address" id="address" class="form-control">{{$employee->address }}</textarea>
                </div>
                
            </div>
             <!-- Submit Button -->
            <div class="form-group mt-5">
                <div class="col-lg-10 col-lg-offset-2">
                    {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
                </div>
            </div>
        </div>
       
    </div>

    

</fieldset>

{!! Form::close()  !!}

</div>
</div>
@endsection
