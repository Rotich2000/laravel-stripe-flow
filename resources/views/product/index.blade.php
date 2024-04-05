<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>

<body class="antialiased">
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem;">
        @foreach ($products as $product)
            <div>
                <img src={{ $product->image }} alt="product" style="max-width: 100%">
                <h5>{{ $product->name }}</h5>
                <p>${{ $product->price }}</p>
            </div>
        @endforeach
    </div>
    <div>
        <form action="{{ route('checkout') }}" method="POST">
            @csrf
            <button>Checkout</button>
        </form>
    </div>
</body>

</html>
