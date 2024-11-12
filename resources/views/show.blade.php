<!-- resources/views/products/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Product</title>
</head>
<body>

    <h1>Product Details</h1>

    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Price:</strong> {{ $product->price }}</p>
    <p><strong>Description:</strong> {{ $product->description }}</p>

    <a href="{{ route('products.index') }}">Back to Products List</a>

</body>
</html>
