<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderItem;

class OrderItemController extends Controller
{
    public function index()
    {
        $orderItems = OrderItem::all();
        return response()->json($orderItems);
    }

    public function show($id)
    {
        $orderItem = OrderItem::findOrFail($id);
        return response()->json($orderItem);
    }

    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:order,id',
            'fruit_id' => 'required|exists:fruit,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $orderItem = OrderItem::create($request->all());
        return response()->json($orderItem, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'order_id' => 'required|exists:order,id',
            'fruit_id' => 'required|exists:fruit,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $orderItem = OrderItem::findOrFail($id);
        $orderItem->update($request->all());

        return response()->json($orderItem, 200);
    }

    public function destroy($id)
    {
        $orderItem = OrderItem::findOrFail($id);
        $orderItem->delete();

        return response()->json(null, 204);
    }
}