<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Method Integration</title>
</head>

<body>
    <h2>Product : Mobile phone</h2>
    <h1>Price : 20$</h1>
    <form action="{{ route('paypal') }}" method="post">
        @csrf
        <input type="hidden" name="price" value="20">
        <button type="submit">Pay with PayPal</button>
    </form>
</body>

</html>
