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
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $incidets)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td>{{ $incidents->name }}</td>
                                            <td>{{ $incidents->status }}</td>
                                            <td>{{ $incidents->created_at }}</td>
                                            <td>
                                                <a class="btn btn-default" href="#" data-toggle="tooltip" data-placement="top" title="Edit incident">
                                                    <i class="fa fa-edit"></i> 
                                                </a>
                                                <a class="btn btn-default" href="#" data-toggle="tooltip" data-placement="top" title="Delete incident">
                                                    <i class="fa fa-trash"></i> 
                                                </a>
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
