<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-700">
    <div class="w-full h-24 bg-gray-700 border-b border-gray-800 fixed shadow-xl">
        <div class="flex px-8 py-4 h-24 items-center">
            <a href="{{ route('login') }}" class="text-lg text-white pr-5 border-r border-gray-400 cursor-pointer">Iniciar
                sesión</a>
            <a href="{{ route('register') }}" class="text-lg text-white ml-5 cursor-pointer">Registrarse</a>
        </div>
    </div>
    <div class="h-24"></div>
    <ul class="max-w-lg bg-gray-700 border-r border-gray-800 shadow-xl">
        @foreach ($repositories as $repository)
            <li class="flex items-center text-black p-2 hover:bg-gray-600">
                <img src="{{ $repository->user->profile_photo_url }}" alt="author"
                    class="w-12 h-12 rounded-full mr-2">
                <div class="flex justify-between w-full py-3">
                    <div class="flex-1">
                        <h2 class="text-sm font-semibold text-white">{{ $repository->url }}</h2>
                        <p class="text-gray-300">{{ $repository->description }}</p>
                    </div>
                    <span
                        class="text-xs font-medium text-gray-400">{{ $repository->created_at->diffForHumans() }}</span>
                </div>
            </li>
        @endforeach
    </ul>
</body>

</html>
