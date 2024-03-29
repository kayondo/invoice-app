<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customers</title>
</head>
<body>
    <a href="{{route('customers.create')}}">
        Create a new customer
    </a>
    <br >
    <br >
    @forelse ($customers as $customer)
        <li>
            <a href="{{route('customers.show', $customer)}}">
                    {{$customer->last_name }} {{$customer->first_name}}
            </a>

        </li>
    @empty
        <p>You don't have any customers yet</p>
    @endforelse

</body>
</html>