@extends('cpu_coolers.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Add New CPU COOLER</div>

    <div class="card-body">
        <form action="{{ url('cpu_cooler') }}" method="post">
            {!! csrf_field() !!}
            <label>Name</label><br />
            <input type="text" name="name" id="name" class="form-control"><br />
            <label>Type</label><br/>
            <input type="text" name="type" id="type" class="form-control"><br />
            <label>Noise Level</label>
            <input type="text" name="noise_level" id="noise_level" class="form-control"><br />
            <label>Fan Size</label>
            <input type="text" name="fan_size" id="fan_size" class="form-control"><br />
            <label>Height</label>
            <input type="text" name="height" id="height" class="form-control"><br />
            <label>Price</label>
            <input type="text" name="price" id="price" class="form-control"><br />
            
            <input type="submit" value="Save" class="btn btn-success"><br />
        </form>

    </div>

</div>

@stop
