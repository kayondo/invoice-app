@extends('layout')

@section('content')
<form method="POST" action="/products/{{ $product->id }}">
        {{ csrf_field() }}
        {{ method_field('PATCH')}}

        <div class="container">
          
          <p>Edit product's details</p>
          <hr>
      
          <label><b>Name</b></label>
        <input type="text" placeholder="Name" name="name" value="{{ $product->name}}">
      
          <br >
          <label><b>Description</b></label>
          <input type="text" placeholder="Description" name="description" value="{{ $product->description}}">
      
          <br >
          <label><b>Quantity</b></label>
          <input type="number" placeholder="Quantity" name="quantity" value="{{ $product->quantity}}">

          <br >
          <label><b>Unit Price</b></label>
          <input type="number" placeholder="Unit Price" name="unit_price" value="{{ $product->unit_price}}">
      
          <hr>
      
          <button type="submit" class="registerbtn">Update</button>
        </div>
        
      </form>
      <form method="POST" action="/products/{{ $product->id }}">
          {{ method_field('DELETE')}}
          {{ csrf_field() }}
            <button type="submit" class="registerbtn">Delete</button>
      </form>
@endsection