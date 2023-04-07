@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1> {{$asset->title}} Details</h1>
    <ul class="list-group mt-2">
        <li class="list-group-item"><strong>Organization</strong>: {{$asset->organization->name}}</li>
        <li class="list-group-item"><strong>Assigned To </strong>: {{$asset->employee->name}}</li>
        <li class="list-group-item"><strong>Type</strong>: {{$asset->type}}</li>
        <li class="list-group-item"><strong>Mfg. By</strong>: {{$asset->manufactured_by}}</li>
        <li class="list-group-item"><strong>Model</strong>: {{$asset->model}}</li>
        <li class="list-group-item"><strong>Serial No.</strong>: {{$asset->serial_no}}</li>
        <li class="list-group-item"><strong>Address</strong>: {{$asset->address}}</li>
        <li class="list-group-item"><strong>Purchase Date</strong>: {{ date('d M, Y', strtotime($asset->purchase_date))}}</li>
        <li class="list-group-item"><strong>Last Maintenance Date</strong>: {{ date('d M, Y', strtotime($asset->last_maintenance_date))}}</li>
        <li class="list-group-item"><strong>Condition</strong>: {{ $asset->condition}}</li>
        <li class="list-group-item"><strong>Description</strong>: {{ $asset->description}}</li>
    </ul>
</div>
@endsection
