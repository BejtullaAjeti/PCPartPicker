<?php

namespace App\Http\Controllers;

use App\Models\PowerSupply;
use Illuminate\Http\Request;

class PowerSupplyController extends Controller
{
    public function index()
    {
        $power_supplies = PowerSupply::all();
        return view('power_supplies.index')->with('power_supplies',$power_supplies);
    }

    public function create()
    {
        return view('power_supplies.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        PowerSupply::create($input);
        return redirect('power_supplie')->with('flash_message','PowerSupply Addedd!');
    }

    public function show(string $id)
    {
        $power_supplie = PowerSupply::find($id);
        return view('power_supplies.show')->with('power_supplies',$power_supplie);
    }

    public function edit(string $id)
    {
        $power_supplie = PowerSupply::find($id);
        return view('power_supplies.edit')->with('power_supplies', $power_supplie);
    }

    public function update(Request $request, string $id)
    {
        $power_supplie = PowerSupply::find($id);
        $input = $request->all();
        $power_supplie->update($input);
        return redirect('power_supplie')->with('flash_message', 'PowerSupply Updated!');
    }

    public function destroy(string $id)
    {
        PowerSupply::destroy($id);
        return redirect('power_supplie')->with('flash_message', 'PowerSupply deleted!');
    }
}
