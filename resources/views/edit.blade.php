<!-- resources/views/products/edit.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>

    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $product->name }}" required>
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" value="{{ $product->price }}" required>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" required>{{ $product->description }}</textarea>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>

</body>
</html>
