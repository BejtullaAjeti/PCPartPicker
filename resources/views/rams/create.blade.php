@extends('rams.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Add New RAM</div>

    <div class="card-body">
        <form action="{{ url('ram') }}" method="post">
            {!! csrf_field() !!}
            <label>Brand</label><br />
            <input type="text" name="brand" id="brand" class="form-control"><br />
            <label>Name</label><br />
            <input type="text" name="name" id="name" class="form-control"><br />
            <label>Type</label>
            <input type="text" name="type" id="type" class="form-control"><br />
            <label>Capacity</label><br/>
            <input type="text" name="capacity" id="capacity" class="form-control"><br />
            <label>Speed</label>
            <input type="text" name="speed" id="speed" class="form-control"><br />
            <label>Modules</label>
            <input type="text" name="modules" id="modules" class="form-control"><br />
            <label>Price</label>
            <input type="text" name="price" id="price" class="form-control"><br />

            <input type="submit" value="Save" class="btn btn-success"><br />
        </form>

    </div>

</div>

@stop
