<!DOCTYPE html>
<html>
<head>
    <title>Product Categories</title>
</head>
<body>
    <h1>Product Categories</h1>
    <a href="{{ route('product-categories.create') }}">Add New Category</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->product_category_name }}</td>
            <td>{{ $category->status }}</td>
            <td>
                <a href="{{ route('product-categories.edit', $category->id) }}">Edit</a>
                <form action="{{ route('product-categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
