<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;


class InvoiceController extends Controller
{
    //
    public function create()
    {
        return view('invoices.create');
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
        return view('invoices.edit', compact('invoice'));
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
}
