@extends('layout')

@section('content')

<form method="POST" action="/products">
  {{ csrf_field() }}
  <div class="container">
    
    <p>Insert a product</p>
    <hr>

    <label><b>Name</b></label>
    <input type="text" placeholder="Name" name="name" required>

    <br >

    <label><b>Description</b></label>
    <input type="text" placeholder="Description" name="description" required>

    <br >

    <label><b>Quantity</b></label>
    <input type="number" placeholder="Quantity" name="quantity" required>

    <br >
    <label><b>Unit price</b></label>
    <input type="number" placeholder="Unit price" name="unit_price" required>

    <hr>

    <button type="submit" class="registerbtn">Insert</button>
  </div>
  
</form>
@endsection
