@extends('pc_parts.layout')
@section('content')

<div class="card" style="margin: 20px;">
<div class="card-header">Details</div>
<div class="card-body">
    <div class="card-body">
        
        <p class="card-title">CPU : {{ $pc_part->cpus->name}} <a href="{{ url('/cpu/'. $pc_part->cpus->id) }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Specifications</button></a> </p>
        <p class="card-text">GPU : {{ $pc_part->gpus->name}} <a href="{{ url('/gpu/'. $pc_part->gpus->id) }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Specifications</button></a></p>
        <p class="card-text">RAM : {{ $pc_part->rams->threads}} <a href="{{ url('/ram/'. $pc_part->rams->id) }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Specifications</button></a></p>
        <p class="card-text">POWER SUPPLY : {{ $pc_part->power_supplies->name}} <a href="{{ url('/power_supplie/'. $pc_part->power_supplies->id) }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Specifications</button></a></p>
        <p class="card-text">CPU COOLER : {{ $pc_part->cpu_coolers->name}} <a href="{{ url('/cpu_cooler/'. $pc_part->cpu_coolers->id) }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Specifications</button></a></p>
        <p class="card-text">CASE : {{ $pc_part->towers->name}} <a href="{{ url('/tower/'. $pc_part->towers->id) }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Specifications</button></a></p>
        <p class="card-text">STORAGE : {{ $pc_part->storages->name}} <a href="{{ url('/storage/'. $pc_part->storages->id) }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Specifications</button></a></p>
        <p class="card-text">MOTHERBOARD : {{ $pc_part->motherboards->name}} <a href="{{ url('/motherboard/'. $pc_part->motherboards->id) }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Specifications</button></a></p>


       
    </div>
    <hr />
</div>
</div>