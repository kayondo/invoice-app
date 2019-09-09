@extends('layout')

@section('content')
<h2>Product No. {{$product->id}} </h2>
<p>Name: {{ $product->name}}</p>
<p>Quantity: {{$product->quantity}}</p> 
<p>Unit price: {{$product->unit_price}}</p>

<br >

<a href="{{route('products.edit', $product)}}">
Edit
</a>

<br>


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