<?php

namespace App\Http\Controllers;

use App\Models\Casee;
use Illuminate\Http\Request;

class CaseController extends Controller
{
    public function index()
    {
        $casees = Casee::all();
        return view('casees.index')->with('casees',$casees);
    }

    public function create()
    {
        return view('casees.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Casee::create($input);
        return redirect('casee')->with('flash_message','Case Addedd!');
    }

    public function show(string $id)
    {
        $casee = Casee::find($id);
        return view('casees.show')->with('casees',$casee);
    }

    public function edit(string $id)
    {
        $casee = Casee::find($id);
        return view('casees.edit')->with('casees', $casee);
    }

    public function update(Request $request, string $id)
    {
        $casee = Casee::find($id);
        $input = $request->all();
        $casee->update($input);
        return redirect('casee')->with('flash_message', 'Case Updated!');
    }

    public function destroy(string $id)
    {
        Casee::destroy($id);
        return redirect('casee')->with('flash_message', 'Case deleted!');
    }
}
