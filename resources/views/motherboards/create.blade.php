@extends('motherboards.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Add New MOTHERBOARD</div>

    <div class="card-body">
        <form action="{{ url('motherboard') }}" method="post">
            {!! csrf_field() !!}
            <label>Name</label><br />
            <input type="text" name="name" id="name" class="form-control"><br />
            <label>Chipset</label><br/>
            <input type="text" name="chipset" id="chipset" class="form-control"><br />
            <label>Socket</label>
            <input type="text" name="socket" id="socket" class="form-control"><br />
            <label>Form Factor</label>
            <input type="text" name="form_factor" id="form_factor" class="form-control"><br />
            <label>Memory Slots</label>
            <input type="text" name="memory_slots" id="memory_slots" class="form-control"><br />
            <label>Maxmemory</label>
            <input type="text" name="max_memory" id="max_memory" class="form-control"><br />
            <label>Pcie Slots</label>
            <input type="text" name="pcie_slots" id="pcie_slots" class="form-control"><br />
            <label>m2 slots</label>
            <input type="text" name="m2_slots" id="m2_slots" class="form-control"><br />
            <label>Price</label>
            <input type="text" name="price" id="price" class="form-control"><br />
            
            <input type="submit" value="Save" class="btn btn-success"><br />
        </form>

    </div>

</div>

@stop
