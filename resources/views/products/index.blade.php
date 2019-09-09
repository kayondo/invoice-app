<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <a href="{{route('products.create')}}">
        Insert a new product
    </a>
    <br >
    <br >
    @forelse ($products as $product)
        <li>
            <a href="{{route('products.show', $product)}}">
                    {{$product->name }}
            </a>

        </li>
    @empty
        <p>You don't have any products yet</p>
    @endforelse

</body>
</html>