<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Relationship - hasMany, belongsTo</title>
</head>
<body>
    <h1>Relationship - hasMany, belongsTo</h1>
    <ul>
    @foreach ($categories as $category)
        <li>
            {{ $category->name }} - ({{ $category->num_books }} Libros)
        </li>
        
        <ol>
            
        @foreach ($category->books as $book)
            <li>
                <strong>{{ $book->title }}: </strong> {{ $book->description }}
            </li>
        @endforeach
        </ol>
    @endforeach
    </ul>
</body>
</html>