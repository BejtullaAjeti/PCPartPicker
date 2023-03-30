@extends('power_supplies.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Edit POWER SUPPLY</div>
    <div class="card-body">


    <form action="{{url('power_supplie/' . $power_supplies->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$power_supplies->id}}" id="id" />
        <label>Brand</label><br />
        <input type="text" name="brand" id="brand" value="{{$power_supplies->brand}}" class="form-control"><br />
        <label>Name</label><br />
        <input type="text" name="name" id="name" value="{{$power_supplies->name}}" class="form-control"><br />
        <label>Wattage</label><br/>
        <input type="text" name="wattage" id="wattage" value="{{$power_supplies->wattage}}" class="form-control"><br />
        <label>Efficiency Rating</label>
        <input type="text" name="efficiency_rating" id="efficiency_rating" value="{{$power_supplies->efficiency_rating}}" class="form-control"><br />
        <label>Fan size</label>
        <input type="text" name="fan_size" id="fan_size" value="{{$power_supplies->fan_size}}" class="form-control"><br />
        <label>Price</label>
        <input type="text" name="price" id="price" value="{{$power_supplies->price}}" class="form-control"><br />

        <input type="submit" value="Update" class="btn btn-success"> <br />
    </form>
</div>
</div>

@stop
