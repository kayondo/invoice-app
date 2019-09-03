@extends('layout')

@section('content')

<form method="POST" action="/invoices">
  {{ csrf_field() }}
  <div class="container">
    
    <p>Create an invoice</p>
    <hr>

    <label for="details"><b>Details</b></label>
    <input type="text" placeholder="Details" name="details" required>

    <br >
    <label for="units"><b>Units</b></label>
    <input type="number" placeholder="Units" name="units" required>

    <br >
    <label for="unit_price"><b>Unit price</b></label>
    <input type="number" placeholder="Unit price" name="unit_price" required>

    <hr>

    <button type="submit" class="registerbtn">Submit</button>
  </div>
  
</form>
    
@endsection

