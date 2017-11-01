<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete multiple records simultaneously</title>
</head>
<body>
    <h1>Delete multiple records simultaneously</h1>
    <p>{{ count($books) }} Registros</p>
    
    <form action="{{ url('destroy') }}" method="post">
        {!! csrf_field() !!}
        {!! method_field('delete') !!}
        
        @foreach ($books as $book)

            <input type="checkbox" name="books[]" value="{{ $book->id}} "> {{ $book->title }} <br>
        @endforeach

        <input type="submit" name="destroy">
    </form>
</body>
</html>