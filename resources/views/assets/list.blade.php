@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1> Assets</h1>
    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Organization</th>
                    <th scope="col">Assigned to</th>
                    <th scope="col">Type</th>
                    <th scope="col">Mfg. By</th>
                    <th scope="col">Purchase Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($assets as $asset)
                <tr>
                    <th scope="row">{{ $asset->id }}</th>
                    <td><a href="{{route('assets.show', $asset->id)}}">{{ $asset->title }}</a></td>
                    <td>{{ $asset->organization->name }}</td>
                    <td>{{ $asset->employee->name }}</td>
                    <td>{{ $asset->type }}</td>
                    <td>{{ $asset->manufactured_by }}</td>
                    <td>{{ date('d M, Y', strtotime($asset->purchase_date)) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $assets->links() !!}
        </div>
    </div>     
</div>
@endsection
