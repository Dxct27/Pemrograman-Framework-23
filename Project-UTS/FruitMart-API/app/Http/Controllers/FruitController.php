<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;

class FruitController extends Controller
{
    // READ
    public function index()
    {
        $fruits = Fruit::all();
        return response()->json($fruits);
    }

    public function show($id)
    {
        $fruit = Fruit::findOrFail($id);
        return response()->json($fruit);
    }

    // CREATE
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price_per_kg' => 'required|numeric',
            'category_id' => 'required',
        ]);

        $fruit = Fruit::create($request->all());
        return response()->json($fruit, 201);
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price_per_kg' => 'required|numeric',
            'category_id' => 'required',
        ]);

        $fruit = Fruit::findOrFail($id);
        $fruit->update($request->all());

        return response()->json($fruit, 200);
    }

    // DELETE
    public function destroy($id)
    {
        $fruit = Fruit::findOrFail($id);
        $fruit->delete();

        return response()->json(null, 204);
    }
}