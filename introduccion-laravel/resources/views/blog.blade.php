@extends('template')
@section('content')
<h1>Listado de posts</h1>
@foreach ($posts as $p)
    <p>
        <strong>{{ $p['id'] }}</strong>
        <a href="">{{ $p['title'] }}</a>
    </p>
@endforeach
@endsection
