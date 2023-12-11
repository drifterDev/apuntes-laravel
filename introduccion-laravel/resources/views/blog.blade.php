@extends('template')
@section('content')
<h1 class="font-bold">Listado de posts</h1>
@foreach ($posts as $p)
<p>
    <strong>{{ $p['id'] }}</strong>
    <a href="{{route('post', $p['slug'])}}">{{ $p['title'] }}</a>
</p>
@endforeach
@endsection
