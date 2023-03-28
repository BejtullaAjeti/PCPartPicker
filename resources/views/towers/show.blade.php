@extends('towers.layout')
@section('content')

    <div class="card" style="margin: 20px;">
        <div class="card-header">CASE Page</div>
        <div class="card-body">
            <div class="card-body">
                <a href="{{ url('/tower/') }}" class="btn btn-success btn-sm" title="Add New CASE">
                    Return to Towers
                </a>
                <a href="{{ url('') }}" class="btn btn-success btn-sm" title="Turn Back to Main" >
                    Return to Main
                </a>
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
