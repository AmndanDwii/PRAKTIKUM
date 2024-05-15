<!DOCTYPE html>
<html>
<head>
    <title>Brand List</title>
</head>
<body>
    <h1>Brand List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brands as $brand)
            <tr>
                <td>{{ $brand->id }}</td>
                <td>{{ $brand->product_brand }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
