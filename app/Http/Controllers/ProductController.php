<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class ProductController extends Controller
{
    public function index()
    {
        $products = Auth::user()->products;
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    
    public function store(Request $request)
    {
        $product = new Product($request->all());
        Auth::user()->products()->save($product);
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }                                                                                                                                                                                                               

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
