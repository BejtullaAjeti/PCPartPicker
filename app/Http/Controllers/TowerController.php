<?php

namespace App\Http\Controllers;

use App\Models\Tower;
use Illuminate\Http\Request;

class TowerController extends Controller
{
    public function index()
    {
        $towers = Tower::all();
        return view('towers.index')->with('towers',$towers);
    }

    public function create()
    {
        return view('towers.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Tower::create($input);
        return redirect('tower')->with('flash_message','Tower Added!');
    }

    public function show(string $id)
    {
        $towers = Tower::find($id);
        return view('towers.show')->with('towers',$towers);
    }

    public function edit(string $id)
    {
        $towers = Tower::find($id);
        return view('towers.edit')->with('towers', $towers);
    }

    public function update(Request $request, string $id)
    {
        $towers = Tower::find($id);
        $input = $request->all();
        $towers->update($input);
        return redirect('tower')->with('flash_message', 'Tower Updated!');
    }

    public function destroy(string $id)
    {
        Tower::destroy($id);
        return redirect('tower')->with('flash_message', 'Tower deleted!');
    }
}
