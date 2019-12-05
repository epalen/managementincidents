@extends('layouts.app')

@section('content')
    {!! Form::open(array('route' => 'incident.store','method' => 'POST', 'enctype' => 'multipart/form-data')) !!}
        <div class="container">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Category</label>
                    <input type="text" class="form-control" id="inputPassword4">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Priority</label>
                    <input type="text" class="form-control" id="inputPassword4">
                </div>
            </div>
            <div class="form-row">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
    {!! Form::close() !!}
@endsection