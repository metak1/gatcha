<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::get();

        return view('items.list', ['items' => $items]);
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        Item::create($request->all());

        return redirect()->route('items.index');
    }

    public function edit(Item $item)
    {
        return view('items.edit', ['item' => $item]);
    }

    public function update(Request $request, Item $item)
    {
        $item_request = $request->except(['_token', '_method']);
        Item::where('id', $item->id)->update($item_request);

        return redirect()->route('items.index');
    }
}
