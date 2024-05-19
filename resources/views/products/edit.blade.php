<!-- resources/views/products/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>SKU:</label>
        <input type="text" name="sku" value="{{ $product->sku }}" required><br>

        <label>Category:</label>
        <select name="product_category">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $product->product_category == $category->id ? 'selected' : '' }}>
                    {{ $category->product_category_name }}
                </option>
            @endforeach
        </select><br>

        <label>Name:</label>
        <input type="text" name="product_name" value="{{ $product->product_name }}" required><br>

        <label>Detail:</label>
        <textarea name="product_detail" required>{{ $product->product_detail }}</textarea><br>

        <label>Brand:</label>
        <select name="product_brand">
            @foreach ($brands as $brand)
                <option value="{{ $brand->id }}" {{ $product->product_brand == $brand->id ? 'selected' : '' }}>
                    {{ $brand->brand_name }}
                </option>
            @endforeach
        </select><br>

        <label>Price:</label>
        <input type="number" name="product_price" value="{{ $product->product_price }}" required><br>

        <label>Image:</label>
        <input type="text" name="fileimages" value="{{ $product->fileimages }}"><br>

        <label>Status:</label>
        <input type="text" name="status" value="{{ $product->status }}" required><br>

        <button type="submit">Update Product</button>
    </form>
</body>
</html>
