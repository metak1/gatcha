<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Unit;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::get();

        return response()->json($units->first()->spells, 200);
    }

    /*public function create() {
        return view('units.create');
    }

    public function store(Request $request) {
        Unit::create($request->all());

        return redirect()->route('units.index');
    }

    public function edit(Unit $unit) {
        return view('units.edit', [ 'unit' => $unit]);
    }

    public function update(Request $request, Unit $unit) {
        $unit_request = $request->except(['_token', '_method' ]);
        Unit::where('id', $unit->id)->update($unit_request);

        return redirect()->route('units.index');
    }*/
}
