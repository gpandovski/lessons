@extends('layouts.app')


@section('content')

    
    @foreach($posts as $post)

    <h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>

    @continue($loop->last)

    <hr>

    @endforeach
@endsection