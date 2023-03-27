@extends('cpus.layout')
@section('content')

<div class="card" style="margin: 20px;">
<div class="card-header">Details</div>
<div class="card-body">
    <div class="card-body">
        <h5 class="card-title">Name : {{ $cpus->name}}</h5>
        <p class="card-text">Cores : {{ $cpus->cores}}</p>
        <p class="card-text">Threads : {{ $cpus->threads}}</p>
        <p class="card-text">Clock Speed : {{ $cpus->clock_speed}}</p>
        <p class="card-text">Socket : {{ $cpus->socket}}</p>
        <p class="card-text">Price : {{ $cpus->price}}</p>
    </div>
    <hr />
</div>
</div>