<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Unit;
use App\Models\UserItem;
use App\Models\UserUnit;
use Illuminate\Support\Facades\Auth;

class UserUnitController extends Controller
{
    public function index()
    {
        $units = UserUnit::where('user_id', 1)->with('items')->with('unit')->get();
        
        return response()->json($units, 200);
    } 

    public function store()
    {
        $unitsCount = Unit::count();

        $unit = Unit::where('id', rand(1, $unitsCount))->first();

        $userUnit = UserUnit::create([
            'user_id' => 1,
            'unit_id' => $unit->id,
            'rarity' => $unit->rarity
        ]);

        return response()->json($userUnit, 200);
    }

    public function equip(Request $request, UserUnit $userUnit)
    {
        $userItem = UserItem::where('id', $request->get('user_item_id'))->first();
        
        $userItem->unit()->associate($userUnit);
        $userItem->save();

        return response()->json($userUnit, 200);
    }
}
