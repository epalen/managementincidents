@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.sidebar')
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Incidents</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <div class="box-tools">
                                <a class="btn btn-primary" href="{{ route('incident.create') }}" role="button" data-toggle="tooltip" title="Add incident">Add incident</a>
                            </div>
                        </div>

                        <div class="form-group">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $incidents)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td>{{ $incidents->name }}</td>
                                            <td>{{ $incidents->status }}</td>
                                            <td>{{ $incidents->created_at->format('d-m-Y') }}</td>
                                            <td>{{ $incidents->users->name }}</td>
                                            <td>
                                                <a class="btn btn-info" href="{{ route('incident.show', $incidents->id) }}" data-toggle="tooltip" data-placement="top" title="Show incident">Show</a>
                                                <a class="btn btn-primary" href="{{ route('incident.edit', $incidents->id) }}" data-toggle="tooltip" data-placement="top" title="Edit incident">Edit</a>
                                                <a class="btn btn-warning" href="{{ route('incident.delete', $incidents->id) }}" data-toggle="tooltip" data-placement="top" title="Delete incident">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
