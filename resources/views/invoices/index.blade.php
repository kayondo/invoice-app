<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoices</title>
</head>
<body>
    <a href="{{route('invoices.create')}}">
        Create an invoice
    </a>
    @forelse ($invoices as $invoice)
        <li> 
            <a href="{{route('invoices.show', $invoice)}}">
                {{ $invoice->details }}
            </a>
        </li>   
    @empty
        <p>You haven't created any invoices</p>
    @endforelse
       
</body>
</html>