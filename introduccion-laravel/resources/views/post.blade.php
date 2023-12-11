@extends('template')
@section('content')
<h1 class="text-xl font-bold mb-5">{{ $post->title }}</h1>
<span class="text-sm mb-5">Author: {{$post->user->name}}</span>
<p>{{ $post->body }}</p>
@endsection
