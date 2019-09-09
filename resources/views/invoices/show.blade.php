@extends('layout')

@section('content')
<h2>Invoice No. {{$invoice->id}} </h2>
<p>Details: {{ $invoice->details}}</p>
<p>Units: {{$invoice->units}}</p> 
<p>Unit price: {{$invoice->unit_price}}</p>

<br >

<a href="{{route('invoices.edit', $invoice)}}">
Edit
</a>
@endsection