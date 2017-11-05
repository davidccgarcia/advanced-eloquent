<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Polymorphic relationships from many to many</title>
</head>
<body>
    <h1>Polymorphic relationships from many to many</h1>
    <p>POST: {{ $post->title }}</p>
    <ul>
    @foreach ($post->tags as $tag)
        <li>{{ $tag->title }}</li>
    @endforeach
    </ul>
</body>
</html>