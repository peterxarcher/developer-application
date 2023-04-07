@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1> Dashboard</h1>
            <div class="mb-4">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-header">{{ __('Employees') }}</div>
                            <div class="card-body">
                                <a href="{{ route('employees.index') }}" class="display-1 p-5 d-inline-block"><i class="bi bi-people-fill"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-header">{{ __('Organizations') }}</div>
                            <div class="card-body">
                                <a href="{{ route('organizations.index') }}" class="display-1 p-5 d-inline-block"><i class="bi bi-buildings"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-header">{{ __('Assets') }}</div>
                            <div class="card-body">
                                <a href="{{ route('assets.index') }}" class="display-1 p-5 d-inline-block"><i class="bi bi-pass"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4">
                <div class="card text-left">
                    <div class="card-header">{{ __('Employees') }}</div>
                        <div class="card-body">
                            <ul class="list-group">
                                @if($employees)
                                    @foreach($employees as $employee)
                                        <li class="list-group-item"><a href="{{route('employees.show', $employee->id)}}">{{$employee->name}} {{$employee->email?'-'.$employee->email:''}}</a></li>
                                    @endforeach
                                @else
                                    <li class="list-group-item">No employee exists</li>
                                @endif
                            </ul> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-left">
                        <div class="card-header">{{ __('Organizations') }}</div>
                        <div class="card-body">
                            <ul class="list-group">
                                @if($organizations)
                                    @foreach($organizations as $organization)
                                        <li class="list-group-item"><a href="{{route('organizations.show', $organization->id)}}">{{$organization->name}} {{$organization->email?'-'.$organization->email:''}}</a></li>
                                    @endforeach
                                @else
                                    <li class="list-group-item">No Organization exists</li>
                                @endif
                            </ul> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-left">
                        <div class="card-header">{{ __('Assets') }}</div>
                        <div class="card-body">

                            <ul class="list-group">
                                @if($assets)
                                    @foreach($assets as $asset)

                                        <li class="list-group-item"><a href="{{route('assets.show', $asset->id)}}">{{$asset->title}}</a> <strong>Assigned to</strong> <a href="{{route('employees.show', $asset->employee->id)}}">{{$asset->employee->name}}</a></li>
                                    @endforeach
                                @else
                                <li class="list-group-item">No Assets exists</li>
                                @endif
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection
