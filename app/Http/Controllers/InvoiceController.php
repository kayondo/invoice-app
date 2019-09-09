<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use App\Product;


class InvoiceController extends Controller
{
    //
    public function create()
    {
        $products = Product::all();
        return view('invoices.create', compact('products'));
    }
    
    public function index()
    {
        $invoices = Invoice::all();

        return view('invoices.index', compact('invoices'));
    }

    public function store()
    {
        Invoice::create(request(['details','units','unit_price']));       
        return redirect('/invoices');
    }

    public function edit(Invoice $invoice)
    {
        $products = Product::all();
        return view('invoices.edit', compact('invoice','products'));
    }

    public function show(Invoice $invoice)
    {
        return view('invoices.show', compact('invoice'));
    }

    public function update(Invoice $invoice)
    {
        $invoice->update(request(['details','units','unit_price']));
        return redirect('/invoices');
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return redirect('/invoices');

    }

    public function result(Request  $request)
    {
        $result= Product::select('name')->where('name', 'LIKE', "%{$request->input('query')}%")->get();
        return response()->json($result);
    }
}
