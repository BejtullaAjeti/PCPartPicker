@extends('motherboards.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin: 20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>MOTHERBOARD</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/motherboard/create') }}" class="btn btn-success btn-sm" title="Add New MOTHERBOARD">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive"> 
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Chipset</th>
                                        <th>Form Factor</th>
                                        <th>Memory Slots</th>
                                        <th>Maxmemory</th>
                                        <th>Pcie Slots</th>
                                        <th>m2 slots</th>
                                        <th>Price</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($motherboards as $item)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $item->name}}</td>
                                            <td>{{ $item->chipset}}</td>
                                            <td>{{ $item->socket}}</td>
                                            <td>{{ $item->form_factor}}</td>
                                            <td>{{ $item->memory_slots}}</td>
                                            <td>{{ $item->max_memory}}</td>
                                            <td>{{ $item->pcie_slots}}</td>
                                            <td>{{ $item->m2_slots}}</td>
                                            <td>{{ $item->price}}</td>

                                            <td>
                                                <a href="{{ url('/motherboard/' . $item->id) }}" title="View MOTHERBOARD"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                                <a href="{{ url('/motherboard/' . $item->id . '/edit')}}" title="Edit MOTHERBOARD"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                                <form method="post" action="{{ url('/motherboard' . '/' . $item->id )}}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                   <button type="submit" class="btn btn-danger btn-sm" title="Delete MOTHERBOARD" onclick="return confirm('Confirm delete?')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Delete</button>
                                                </form>
                                               
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    
@endsection