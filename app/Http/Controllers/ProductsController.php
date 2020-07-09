<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return Products::all();
    }
    public function show(Products $products)
    {
        return $products;
    }
    public function store(Request $request)
    {
        $products = Products::create($request->all());

        return response()->json($products, 201);
    }
    public function update(Request $request, Products $products)
    {
        $products->update($request->all());
        return response()->json($products, 200);
    }
    public function delete(Products $products)
    {
        $products->delete();

        return response()->json(null, 204);
    }
}
