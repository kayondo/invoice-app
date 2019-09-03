<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;


class CustomerController extends Controller
{
    //
    public function create()
    {
        return view('customers.create');
    }

    public function index()
    {
        $customers = Customer::all();

        return view('customers.index', compact('customers'));
    }

    public function store()
    {
        $customer = new Customer();
        $customer->cust_fname = request('cust_fname');
        $customer->cust_lname = request('cust_lname');
        $customer->email = request('email');
        $customer->company_name = request('company_name');

        $customer->save();

        return redirect('/customers');
    }
}
