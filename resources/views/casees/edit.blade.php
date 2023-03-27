@extends('casees.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Edit CASE</div>
    <div class="card-body">


    <form action="{{url('casee/' . $casees->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$casees->id}}" id="id" />
        <label>Name</label><br />
        <input type="text" name="name" id="name" value="{{$casees->name}}" class="form-control"><br />
        <label>Type</label><br/>
        <input type="text" name="type" id="type" value="{{$casees->type}}" class="form-control"><br />
        <label>Color</label>
        <input type="text" name="color" id="color" value="{{$casees->color}}" class="form-control"><br />
        <label>Material</label>
        <input type="text" name="material" id="material" value="{{$casees->material}}" class="form-control"><br />
        <label>Dimensions</label>
        <input type="text" name="dimensions" id="dimensions" value="{{$casees->dimensions}}" class="form-control"><br />
        <label>Price</label>
        <input type="text" name="price" id="price" value="{{$casees->price}}" class="form-control"><br />
        
        <input type="submit" value="Update" class="btn btn-success"> <br />
    </form>
</div>
</div>

@stop