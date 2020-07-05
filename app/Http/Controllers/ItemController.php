<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create()
    {
        return view('item.form');
    }

    public function store(Request $request)
    {
        $new_item = ItemModel::save($request->all());
        return redirect('/items');
    }

    public function index()
    {
        $items = ItemModel::get_all();
        return view('item.index');
    }
}
