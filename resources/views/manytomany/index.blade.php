<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Relationship - Many to Many</title>
</head>
<body>
    <h1>Relationship - Many to Many</h1>

    <ul>
    @foreach ($users as $user)
        <li>
            <strong>Autor: </strong>{{ $user->name }} 
            <a href="{{ route('getEdit', $user->id) }}">Editar</a>
            <ol>
            @foreach ($user->manyBooks as $book)
                <li>{{ $book->title }}</li>
            @endforeach
            </ol>
        </li>
    @endforeach
    </ul>
</body>
</html>