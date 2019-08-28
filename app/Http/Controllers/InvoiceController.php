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
        $invoice = new Invoice();

        $invoice->date = request('date');
        $invoice->invoice_id = request('invoice_number');
        $invoice->details = request('details');
        $invoice->units = request('units');
        $invoice->unit_price = request('unit_price');

        $invoice->save();

        return redirect('/invoices');
    }
}
