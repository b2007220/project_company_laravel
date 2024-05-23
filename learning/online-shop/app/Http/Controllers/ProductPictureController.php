<?php

namespace App\Http\Controllers;

use App\Models\Product_Picture;
use Illuminate\Http\Request;

class ProductPictureController extends Controller
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
            'product_id' => ['required', 'exists:product,id'],
            'link' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        $product = Product_Picture::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product_Picture $product_Picture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product_Picture $product_Picture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product_Picture $product_Picture)
    {
        $data = $request->validate([
            'product_id' => ['required', 'numeric', 'integer'],
            'link' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        $product_Picture->update($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product_Picture $product_Picture)
    {
        $product_Picture->delete();
    }
}
