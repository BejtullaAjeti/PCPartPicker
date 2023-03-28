@extends('rams.layout')
@section('content')

<div class="card" style="margin: 20px;">
<div class="card-header">RAM Page</div>
<div class="card-body">
    <div class="card-body">
        <a href="{{ url('/ram/') }}" class="btn btn-success btn-sm" title="Add New CPU">
            Return to RAM's
        </a>
        <a href="{{ url('') }}" class="btn btn-success btn-sm" title="Turn Back to Main" >
            Return to Main
        </a>
        <h5 class="card-title">Brand : {{ $rams->brand}}</h5>
        <h5 class="card-title">Name : {{ $rams->name}}</h5>
        <h5 class="card-title">Type : {{ $rams->type}}</h5>
        <h5 class="card-title">Capacity : {{ $rams->capacity}}</h5>
        <h5 class="card-title">Speed : {{ $rams->speed}}</h5>
        <h5 class="card-title">Modules : {{ $rams->modules}}</h5>
        <h5 class="card-title">Price : {{ $rams->price}}</h5>
    </div>
    <hr />
</div>
</div>
