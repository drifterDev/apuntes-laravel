@extends('template')
@section('content')
<h1 class="font-bold">Listado de posts</h1>
@foreach ($posts as $p)
<p class="mt-2 hover:font-bold">
    <strong>{{ $p->id }}</strong>
    <a class="ml-5" href="{{route('post', $p->slug)}}">{{ $p->title }}</a>
    <span class="block text-sm ml-8">{{ $p->user->name }}</span>
</p>
@endforeach
<div class="mb-5"></div>

{{-- Para la paginación --}}
{{$posts->links()}}

@endsection
