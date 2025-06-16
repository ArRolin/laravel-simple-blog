<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
</head>
<body>
    <h1>Welcome to My Blog</h1>
    @if($posts->count())
    <div class="container">
        @foreach($posts as $blog)
        <article>
            <h2><a href="/post/{{ $blog->slug }}">{{ $blog->title }}</a></h2>
            <div>{{ $blog->excerpt }}</div>
            <div>{{ $blog->author }} / {{ $blog->date->diffForHumans() }}</div>
        </article>
        @endforeach
    </div>
    @endif
</body>
</html>