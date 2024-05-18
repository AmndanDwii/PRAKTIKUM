<!-- resources/views/brands/index.blade.php -->

<h1>Brands List</h1>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif
<div>
    <a href="{{ route('brands.create') }}">Add New Brand</a>
</div>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Brand Name</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($brands as $index => $brand)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $brand->product_brand }}</td>
                <td>{{ $brand->status }}</td>
                <td>
                    
                    <a href="{{ route('brands.edit', $brand->id) }}">Edit</a>
                    <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
