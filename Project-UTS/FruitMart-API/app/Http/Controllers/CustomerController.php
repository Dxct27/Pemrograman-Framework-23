<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return response()->json($customers);
    }

    public function show($id)
    {
        $customer = Customer::with('user')->findOrFail($id);
        return response()->json($customer);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:customers,email',
            'user_id' => 'required|exists:users,id',
        ]);

        $customer = Customer::create($request->all());
        return response()->json($customer, 201);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:customers,email,' . $id,
            'user_id' => 'required|exists:users,id',
        ]);

        $customer = Customer::findOrFail($id);
        $customer->update($request->all());

        return response()->json($customer, 200);
    }
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return response()->json(null, 204);
    }
}
