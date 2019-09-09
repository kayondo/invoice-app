@extends('layout')

@section('content')
<h2>Customer No. {{$customer->id}} </h2>
<p>Customer first name: {{ $customer->first_name}}</p>
<p>Customer last name: {{$customer->last_name}}</p> 
<p>Company: {{$customer->company_name}}</p>

<br >

<a href="{{route('customers.edit', $customer)}}">
Edit
</a>

<br>
<p> Invoices </p>

{{-- @forelse ($customer->invoices as $invoice)
    <li>
        <a href="">
            {{ $invoice->details }}
        </a>

    </li>
@empty
    {{$customer->first_name}} <p> doesn't have any invoices yet</p>
@endforelse --}}

@endsection