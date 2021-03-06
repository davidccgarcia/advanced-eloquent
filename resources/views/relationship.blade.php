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

            <ol>
                @foreach ($category->public_books as $book)
                    <li>
                        <strong>{{ $book->title }}</strong>
                        <em>{{ $book->status }}</em>
                        {{ $book->description }}
                    </li>
                @endforeach
            </ol>
        </li>
    @endforeach
    </ul>
</body>
</html>