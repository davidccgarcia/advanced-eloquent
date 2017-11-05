<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Solution to problem n + 1</title>
</head>
<body>
    <h1>Solution to problem n + 1</h1>
    
    <ul>
    @foreach ($books as $book)
        <li>
            <strong>Libro: </strong> {{ $book->title }} - 
            <em>Category: {{ $book->category->name }}</em> - 
            @foreach ($book->users as $user)
                <strong>Autor: </strong> {{ $user->name }} 
            @endforeach
        </li>
    @endforeach
    </ul>
</body>
</html>