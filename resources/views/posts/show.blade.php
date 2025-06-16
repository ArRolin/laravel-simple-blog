<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
</head>
<body>
    <div class="container">
        <article>
            <h2>{{ $post->title }}</h2>
            <div>{{ $post->author }} / {{ $post->date->diffForHumans() }}</div>
            <div>{{ $post->contents }}</div>
        </article>
    </div>
</body>
</html>