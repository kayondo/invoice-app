<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    public function create()
    {
        return view('products.create');
    }
    
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function store()
    {
        Product::create(request(['name','description', 'quantity','unit_price']));       
        return redirect('/products');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function update(Product $product)
    {
        $product->update(request(['name','description', 'quantity','unit_price']));
        return redirect('/products');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/products');

    }
}
