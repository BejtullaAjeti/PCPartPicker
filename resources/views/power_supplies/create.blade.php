@extends('power_supplies.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Add New POWER SUPPLY</div>

    <div class="card-body">
        <form action="{{ url('power_supplie') }}" method="post">
            {!! csrf_field() !!}
            <label>Name</label><br />
            <input type="text" name="name" id="name" class="form-control"><br />
            <label>Wattage</label><br/>
            <input type="text" name="wattage" id="wattage" class="form-control"><br />
            <label>Efficienty Rating</label>
            <input type="text" name="efficiency_rating" id="efficiency_rating" class="form-control"><br />
            <label>Modularity</label>
            <input type="text" name="modularity" id="modularity" class="form-control"><br />
            <label>Fan size</label>
            <input type="text" name="fan_size" id="fan_size" class="form-control"><br />
            <label>Price</label>
            <input type="text" name="price" id="price" class="form-control"><br />
            
            <input type="submit" value="Save" class="btn btn-success"><br />
        </form>

    </div>

</div>

@stop