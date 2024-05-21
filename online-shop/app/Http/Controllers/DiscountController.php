<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string'],
            'amount' => ['required', 'numeric', 'integer'],
            'percent' => ['required', 'numeric', 'min:0', 'max:100', 'integer'],
        ]);
        $discount = Discount::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Discount $discount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Discount $discount)
    {
        $data = $request->validate([
            'name' => ['required', 'string'],
            'amount' => ['required', 'numeric', 'integer'],
            'percent' => ['required', 'numeric', 'min:0', 'max:100', 'integer'],
        ]);
        $discount->update($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Discount $discount)
    {
        $discount->delete();
    }
}
