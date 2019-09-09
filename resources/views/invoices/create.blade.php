@extends('layout')

@section('content')

<form method="POST" action="/invoices">
  {{ csrf_field() }}
  <div class="container">
    
    <p>Create an invoice</p>
    <hr>

    <label>Product</label>
    <select name="product_id" id="" class="form-control">
      @foreach ($products as $product)
        <option value="{{ $product->id }}">{{ $product->name }}</option>
      @endforeach
    </select>

    <br >
    <label for="units"><b>Units</b></label>
    <input type="number" placeholder="Units" name="units" required>

    <br >
    <label for="price"><b>Unit price</b></label>
    <input id="price" type="number" placeholder="Unit price" name="unit_price" required>

    <hr>

    <button type="submit" class="registerbtn">Submit</button>
  </div>
  
</form>
    
@endsection

@section('bottom-scripts')

<script type="text/javascript">


  var path = "{{ url('search') }}";

  $('#search').typeahead({
       minLength: 2,
      source:  function (query, process) {
      return $.get(path, { query: query }, function (data) {
          var dataset = [];
              data.forEach(function(value){
                  dataset.push(value.name);
              });
              return process(dataset);
          });
      }
  });
  </script>
    
@endsection

