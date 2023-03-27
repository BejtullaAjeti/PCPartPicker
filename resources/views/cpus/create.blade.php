@extends('cpus.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Add New CPU</div>

    <div class="card-body">
        <form action="{{ url('cpu') }}" method="post">
            {!! csrf_field() !!}
            <label>Name</label><br />
            <input type="text" name="name" id="name" class="form-control"><br />
            <label>Cores</label><br/>
            <input type="text" name="cores" id="cores" class="form-control"><br />
            <label>Threads</label>
            <input type="text" name="threads" id="threads" class="form-control"><br />
            <label>Clock Speed</label>
            <input type="text" name="clock_speed" id="clock_speed" class="form-control"><br />
            <label>Socket</label>
            <input type="text" name="socket" id="socket" class="form-control"><br />
            <label>Price</label>
            <input type="text" name="price" id="price" class="form-control"><br />
            
            <input type="submit" value="Save" class="btn btn-success"><br />
        </form>

    </div>

</div>

@stop