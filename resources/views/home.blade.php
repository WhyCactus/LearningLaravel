<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    @foreach ($posts as $post)
        <div>
            <a href="{{ route('page.detail', $post->id) }}">
                <h3>{{  $post->title }}</h3>
            </a>
            <p>
                {{ $post->description }}
            </p>
            <hr>
        </div>
    @endforeach
</body>

</html>