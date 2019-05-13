@extends('layouts.index')
@section('site-name')
    Voyager
@endsection

@section('Links')

        <a href="https://laravel.com/docs">Docs</a>
        <a href="https://laracasts.com">Laracasts</a>
        <a href="https://laravel-news.com">News</a>
        <a href="https://blog.laravel.com">Blog</a>
        <a href="https://nova.laravel.com">Nova</a>
        <a href="https://forge.laravel.com">Forge</a>
        <a href="https://github.com/laravel/laravel">GitHub</a>

@endsection

@section('posts-content')
    {{-- {{ menu('name') }} thisis --}}
    <ol>
        @foreach ($posts as $post)
            <li><a href="{{ url('/post/')."/".$post->slug }}">{{$post->title}}</a>  </li>
        @endforeach
    <ol>
        {{-- this is next and previous --}}
        {{$posts->links()}}
@endsection
