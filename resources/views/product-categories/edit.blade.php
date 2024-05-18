<!-- resources/views/categorys/edit.blade.php -->

<h1>Edit category</h1>

<form action="{{ route('product-categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="product_category_name">Category Name:</label>
    <input type="text" id="product_category_name" name="product_category_name" value="{{ $category->product_category_name }}">

    <label for="status">Status:</label>
    <select id="status" name="status">
        <option value="active" {{ $category->status == 'active' ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ $category->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
    </select>

    <button type="submit">Update category</button>
</form>
