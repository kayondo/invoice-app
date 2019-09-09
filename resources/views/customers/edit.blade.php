@extends('layout')

@section('content')
<form method="POST" action="/customers/{{ $customer->id }}">
        {{ csrf_field() }}
        {{ method_field('PATCH')}}

        <div class="container">
          
          <p>Edit customer's details</p>
          <hr>
      
          <label><b>First name</b></label>
        <input type="text" placeholder="First name" name="first_name" value="{{ $customer->first_name}}">
      
          <br >
          <label><b>Last name</b></label>
          <input type="text" placeholder="Last name" name="last_name" value="{{ $customer->last_name}}">
      
          <br >
          <label><b>Email address</b></label>
          <input type="email" placeholder="Email address" name="email" value="{{ $customer->email}}">

          <br >
          <label><b>Company name</b></label>
          <input type="text" placeholder="Company name" name="company_name" value="{{ $customer->company_name}}">
      
          <hr>
      
          <button type="submit" class="registerbtn">Update</button>
        </div>
        
      </form>
      <form method="POST" action="/customers/{{ $customer->id }}">
          {{ method_field('DELETE')}}
          {{ csrf_field() }}
            <button type="submit" class="registerbtn">Delete</button>
      </form>
@endsection