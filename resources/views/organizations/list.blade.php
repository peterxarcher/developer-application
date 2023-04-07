@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1> Organizations</h1>
    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($organizations as $organization)
                <tr>
                    <th scope="row">{{ $organization->id }}</th>
                    <td><a href="{{route('organizations.show', $organization->id)}}">{{ $organization->name }}</a></td>
                    <td>{{ $organization->organization_type }}</td>
                    <td>{{ $organization->email }}</td>
                    <td>{{ $organization->telephone }}</td>
                    <td>{{ $organization->mobile_no }}</td>
                    <td>{{ date('d M, Y', strtotime($organization->created_at)) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $organizations->links() !!}
        </div>
    </div>     
</div>
@endsection
