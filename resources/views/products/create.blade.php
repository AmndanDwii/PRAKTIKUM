<!-- resources/views/products/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <h1>Add New Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>SKU:</label>
        <input type="text" name="sku" required><br>

        <label>Category:</label>
        <select name="product_category">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->product_category_name }}</option>
            @endforeach
        </select><br>

        <label>Name:</label>
        <input type="text" name="product_name" required><br>

        <label>Detail:</label>
        <textarea name="product_detail" required></textarea><br>

        <label>Brand:</label>
        <select name="product_brand">
            @foreach ($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->product_brand }}</option>
            @endforeach
        </select><br>

        <label>Price:</label>
        <input type="number" name="product_price" required><br>

        <label>Slug:</label>
        <input type="text" name="slug" required><br>

        <label for="status">Status:</label>
        <select id="status" name="status">
       <option value="active">Active</option>
       <option value="inactive">Inactive</option>
   </select>

        <button type="submit">Add Product</button>
    </form>
</body>
</html>
