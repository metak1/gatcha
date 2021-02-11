<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Spell;
use App\Models\Unit;

class SpellController extends Controller
{
    public function index()
    {
        $spells = Spell::get();

        return view('spells.list', ['spells' => $spells]);
    }

    public function create()
    {
        return view('spells.create');
    }

    public function store(Request $request)
    {
        $spell = Spell::create($request->all());
        $unit = Unit::where('id', $request->input('unit'));
        $spell->unit()->associate($unit);

        return redirect()->route('spells.index');
    }

    public function edit(Spell $spell)
    {
        return view('spells.edit', ['spell' => $spell]);
    }

    public function update(Request $request, Spell $spell)
    {
        $spell_request = $request->except(['_token', '_method']);
        Spell::where('id', $spell->id)->update($spell_request);

        return redirect()->route('spells.index');
    }
}
