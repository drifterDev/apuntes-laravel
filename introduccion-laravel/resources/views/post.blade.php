@extends('template')
@section('content')
<h1 class="text-xl font-bold mb-5">{{ $post->title }}</h1>
<p>{{ $post->body }}</p>
@endsection
