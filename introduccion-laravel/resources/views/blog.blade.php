<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listado de posts</h1>
    @foreach ($posts as $p)
        <p>
            <strong>{{ $p['id'] }}</strong>
            <a href="">{{ $p['title'] }}</a>
        </p>
    @endforeach
</body>
</html>
