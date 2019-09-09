@extends('layout')

@section('content')

<form method="POST" action="/customers">
  {{ csrf_field() }}
  <div class="container">
    
    <p>Create a customer</p>
    <hr>

    <label><b>First name</b></label>
    <input type="text" placeholder="First name" name="first_name" required>

    <br >

    <label><b>Last name</b></label>
    <input type="text" placeholder="Last name" name="last_name" required>

    <br >

    <label><b>Email address</b></label>
    <input type="email" placeholder="Email address" name="email" required>

    <br >
    <label><b>Company name</b></label>
    <input type="text" placeholder="Company name" name="company_name" required>

    <hr>

    <button type="submit" class="registerbtn">Sign up</button>
  </div>
  
</form>
@endsection
