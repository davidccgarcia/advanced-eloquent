<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Relationship - Many To Many - Part 2</title>
</head>
<body>
    <h1>Relationship - Many To Many - Part 2</h1>
    {!! Form::model($user, ['route' => ['putEdit', $user->id], 'method' => 'PUT']) !!}
        <div>
            <p>
                <strong>Autor: </strong>
                {{ $user->name }}
            </p>
        </div>

        <div>
            {!! Form::label('books', 'Libros:') !!} <br>
            {!! Form::select('books[]', $books, null, ['multiple']) !!}
        </div>

            {!! Form::submit('Actualizar') !!}
    {!! Form::close() !!}
</body>
</html>