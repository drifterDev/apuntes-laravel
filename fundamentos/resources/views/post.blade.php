@extends('template')
@section('content')
    <div class="max-w-3xl mx-auto">
        <h1 class="text-5xl font-bold text-gray-200 mb-8">{{ $post->title }}</h1>
        <span class="text-sm text-gray-400">Author: {{ $post->user->name }}</span>
        <p class="leading-loose text-lg text-gray-300">{{ $post->body }}</p>
    </div>
@endsection
