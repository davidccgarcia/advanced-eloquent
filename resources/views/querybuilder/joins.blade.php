<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Query Builder - Joins</title>
</head>
<body>
    <h1>Query Builder - Joins</h1>

    @foreach ($books as $book)
        <li>
            <strong>Book: </strong>
            {{ $book->title }}
            <em>{{ $book->category }}</em>
        </li>
    @endforeach
</body>
</html>