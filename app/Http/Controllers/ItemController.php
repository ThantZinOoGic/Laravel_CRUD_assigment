<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Fruit;
use Illuminate\Http\Request;
use App\Models\Item;


class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('item.index', compact('items'));
    }

    
    public function create()
    {
        return view('item.create');
    }


    public function store(StoreItemRequest $request)
    {
        // return $request;
        $item = new Item();
        $item->name = $request->name;
        $item->price = $request->price;
        $item->quantity = $request->quantity;
        $item->save();
        return redirect()->route('items.index');

    }

    public function show(Item $item)
    {
        return view('item.detail',compact('item'));
    }


    public function edit(Item $item)
    {
        return view('item.edit', compact('item'));
    }


    public function update(UpdateItemRequest $request, Item $item)
    {
        // return $item;
        $item->name = $request->name;
        $item->price = $request->price;
        $item->quantity = $request->quantity;
        $item->update();
        return redirect()->route('items.index');
    }


    public function destroy(Item $item)
    {
        if($item)
        {
            $item->delete();
        }
        return redirect()->back();
    }
}
