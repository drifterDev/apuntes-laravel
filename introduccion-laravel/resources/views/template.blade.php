<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Introducción a Laravel</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-full h-24 bg-gray-500 flex items-center pl-5 text-xl">
        <a href="{{route('home')}}" class="mr-5 hover:scale-105">Home</a>
        <a href="{{route('blog')}}" class="hover:scale-105">Blog</a>
    </div>
    <div class="p-8 text-lg">
        @yield('content')
    </div>
</body>
</html>

