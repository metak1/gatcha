<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Spell;
use App\Models\Unit;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::get();

        return view('units.list', ['units' => $units]);
    }

    public function create()
    {
        $spells = Spell::get();

        return view('units.create', ['spells' => $spells]);
    }

    public function store(Request $request)
    {
        $unit = Unit::create($request->all());

        $spell = Spell::where('id', $request->input('spell'))->first();

        $unit->spells()->save($spell);

        return redirect()->route('units.index');
    }

    public function edit(Unit $unit)
    {
        $spells = Spell::get();

        return view('units.edit', ['unit' => $unit, 'spells' => $spells]);
    }

    public function update(Request $request, Unit $unit)
    {
        $unit_request = $request->except(['_token', '_method']);
        Unit::where('id', $unit->id)->update($unit_request);

        return redirect()->route('units.index');
    }
}
