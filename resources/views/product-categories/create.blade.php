<!DOCTYPE html>
<html>
<head>
    <title>Add New Category</title>
</head>
<body>
    <h1>Add New Category</h1>
    <form action="{{ route('product-categories.store') }}" method="POST">
        @csrf
        <label for="product_category_name">Category Name:</label>
        <input type="text" name="product_category_name" required>

       <label for="status">Status:</label>
         <select id="status" name="status">
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
    </select>
        <button type="submit">Add Category</button>
    </form>
</body>
</html>
