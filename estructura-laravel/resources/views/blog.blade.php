@extends('template')
@section('content')
@foreach ($posts as $post)
<p>
    <strong>{{ $post['id'] }}</strong>
    <a href="{{route('post', $post['slug'])}}"> {{ $post['title'] }} </a>
</p>
@endforeach
@endsection('content')