@extends('layouts.app')


@section('content')

    <ul>
        @can('edit_forum')
        <li>
            <a href="#"> Edit forum</a>
        </li>
        @endcan
    </ul>
    @foreach($posts as $post)
 
    <h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>

    @continue($loop->last)

    <hr>

    @endforeach
@endsection