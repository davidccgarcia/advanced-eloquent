<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Query Builder</title>
</head>
<body>
    <h1>Query Builder</h1>

    <ul>
    @foreach ($users as $user)
        <li>
            <strong>Autor: </strong>{{ $user->user_name }}
            {{ $user->email }}
        </li>
    @endforeach 
    </ul>
</body>
</html>