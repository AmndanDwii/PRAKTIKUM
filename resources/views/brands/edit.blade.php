<!-- resources/views/brands/edit.blade.php -->

<h1>Edit Brand</h1>

<form action="{{ route('brands.update', $brand->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="product_brand">Brand Name:</label>
    <input type="text" id="product_brand" name="product_brand" value="{{ $brand->product_brand }}">

    <label for="status">Status:</label>
    <select id="status" name="status">
        <option value="active" {{ $brand->status == 'active' ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ $brand->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
    </select>

    <button type="submit">Update Brand</button>
</form>
