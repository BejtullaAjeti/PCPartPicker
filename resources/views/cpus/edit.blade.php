@extends('cpus.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Edit CPU</div>
    <div class="card-body">


    <form action="{{url('cpu/' . $cpus->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$cpus->id}}" id="id" />
        <label>Name</label>
        <input type="text" name="name" id="name" value="{{$cpus->name}}" class="form-control" /><br/>
        <label>Cores</label>
        <input type="text" name="cores" id="cores" value="{{$cpus->cores}}" class="form-control" /> <br/>
        <label>Threads</label>
        <input type="text" name="threads" id="threads" value="{{$cpus->threads}}" class="form-control" /> <br/>
        <label>Clock Speed</label>
        <input type="text" name="clock_speed" id="clock_speed" value="{{$cpus->clock_speed}}" class="form-control" /> <br/>
        <label>Socket</label>
        <input type="text" name="socket" id="socket" value="{{$cpus->socket}}" class="form-control" /> <br/>
        <label>Price</label>
        <input type="text" name="price" id="price" value="{{$cpus->price}}" class="form-control" /> <br/>

        <input type="submit" value="Update" class="btn btn-success"> <br />
    </form>
</div>
</div>

@stop