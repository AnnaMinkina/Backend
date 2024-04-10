<!DOCTYPE html>
<html>

<head>
    <title> Статья {{ $post->title }} </title>
</head>

<body>
    <h1> Статья {{ $post->title }} </h1>
    <p><strong>ID:</strong>{{ $post->id }}</p>
    <p><strong>Заголовок:</strong>{{ $post->title }}</p>
    <p><strong>Описание:</strong>{{ $post->desc }}</p>
</body>

</html>
