<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>Movies List</h1>
    <ul>
        @foreach($products as $product)
            <li>{{ $product['title'] }} - Genre: {{ $product['genre'] }}</li>
        @endforeach
    </ul>
</body>
</html>
