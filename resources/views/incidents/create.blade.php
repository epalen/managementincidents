@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('layouts.sidebar')
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Add incident</div>

                    <div class="card-body">

                        {!! Form::open(array('route' => 'incident.store','method' => 'POST', 'enctype' => 'multipart/form-data')) !!}
                            <input type="hidden" name="status" value="In progress">
                            <div class="container">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputPassword4">Category</label>
                                            {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Choose category']) !!}
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="priority">Priority</label>
                                            <select id="priority" name="priority" class="form-control">
                                                <option selected>Choose priority...</option>
                                                <option value="Urgent">Urgent</option>
                                                <option value="Important">Important</option>
                                                <option value="Half">Half</option>
                                                <option value="Low">Low</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label for="exampleFormControlTextarea1">Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <button type="submit" class="btn btn-success" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Save">Save</button>
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection