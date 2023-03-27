@extends('towers.layout')
@section('content')

    <div class="card" style="margin: 20px;">
        <div class="card-header">CASE Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Brand : {{ $casees->brand}}</h5>
                <h5 class="card-title">Name : {{ $casees->name}}</h5>
                <h5 class="card-title">Type : {{ $casees->type}}</h5>
                <h5 class="card-title">Color : {{ $casees->color}}</h5>
                <h5 class="card-title">Material : {{ $casees->material}}</h5>
                <h5 class="card-title">Dimensions : {{ $casees->dimensions}}</h5>
                <h5 class="card-title">Price : {{ $casees->price}}</h5>
            </div>
            <hr/>
        </div>
    </div>
