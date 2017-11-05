<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Polymorphic relationship</title>
</head>
<body>
    <h1>Polymorphic relationship</h1>

    <ul>
        <li>{{ $page->title }}</li>

        <ol>
        @foreach ($page->comments as $comment)
            <li>{{ $comment->body }}</li>
        @endforeach
        </ol>
    </ul>
</body>
</html>