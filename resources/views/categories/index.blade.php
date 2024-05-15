<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
</head>
<body>
    <h1>Categories</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('categories.create') }}">Add Category</a>

    <ul>
    @foreach($categories as $category)
        <li>{{ $category->name }}</li>
    @endforeach
    </ul>
</body>
</html>
