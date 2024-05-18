<form action="{{ route('brands.store') }}" method="POST">
    @csrf
    <label for="product_brand">Brand Name:</label>
    <input type="text" id="product_brand" name="product_brand">

    <label for="status">Status:</label>
    <select id="status" name="status">
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
    </select>

    <button type="submit">Create Brand</button>
</form>
