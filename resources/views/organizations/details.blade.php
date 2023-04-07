@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1> {{$organization->name}} Details</h1>
    <ul class="list-group mt-2">
        <li class="list-group-item"><strong>Type</strong>: {{$organization->organization_type}}</li>
        <li class="list-group-item"><strong>Email</strong>: {{$organization->email}}</li>
        <li class="list-group-item"><strong>Phone</strong>: {{$organization->telephone}}</li>
        <li class="list-group-item"><strong>Mobile</strong>: {{$organization->mobile_no}}</li>
        <li class="list-group-item"><strong>Address</strong>: {{$organization->address}}</li>
        <li class="list-group-item"><strong>description</strong>: {{$organization->description}}</li>
        <li class="list-group-item"><strong>Created at</strong>: {{ date('d M, Y', strtotime($organization->created_at))}}</li>
    </ul>
</div>
@endsection
