@extends('template')
@section('content')
    <div class="relative bg-gray-900 px-20 py-16 rounded-lg mb-8 overflow-hidden">
        <span class="text-xs uppercase text-gray-300 bg-gray-700 rounded-full px-2 py-1">Programación</span>
        <h1 class="text-3xl text-gray-300 mt-4">Blog</h1>
        <p class="text-sm text-gray-500 mt-2">Proyecto de desarrollo web para profesionales</p>

        <img src="{{ asset('images/dev.png') }}" alt="" class="absolute right-10 bottom-8 opacity-20 h-64">
    </div>
    <div class="px-4">
        <h1 class="text-2xl mb-8 text-white">Contenido técnico</h1>

        <div class="grid grid-cols-1 gap-4 mb-4">
            @foreach ($posts as $post)
                <a href="{{ route('post', $post->slug) }}" class="bg-gray-700 rounded-lg px-6 py-4">
                    <p class="text-xs flex items-center gap-2">
                        <span class="uppercase text-gray-900 bg-gray-600 rounded-all px-2 py-1">Tutorial</span>
                        <span class="text-gray-300">{{ $post->created_at->format('d/m/Y') }}</span>
                    </p>
                    <h2 class="text-lg text-gray-300 mt-2">{{ $post->title }}</h2>
                    <div class="text-xs text-gray-300 opacity-75 flex items-center gap-1">
                        Autor: {{ $post->user->name }}
                    </div>
                </a>
            @endforeach
        </div>
        {{ $posts->links() }}
    </div>
@endsection
