@extends('layout')

@section('content')
<form method="POST" action="/invoices/{{$invoice->id }}">
        {{ csrf_field() }}
        {{ method_field('PATCH')}}

        <div class="container">
          
          <p>Edit an invoice</p>
          <hr>
      
          <label for="details"><b>Details</b></label>
        <input type="text" placeholder="Details" name="details" value="{{ $invoice->details}}">
      
          <br >
          <label for="units"><b>Units</b></label>
          <input type="number" placeholder="Units" name="units" value="{{ $invoice->units}}">
      
          <br >
          <label for="unit_price"><b>Unit price</b></label>
          <input type="number" placeholder="Unit price" name="unit_price" value="{{ $invoice->unit_price}}">
      
          <hr>
      
          <button type="submit" class="registerbtn">Update</button>
        </div>
        
      </form>
      <form method="POST" action="/invoices/{{ $invoice->id }}">
          {{ method_field('DELETE')}}
          {{ csrf_field() }}
            <button type="submit" class="registerbtn">Delete</button>
      </form>
@endsection