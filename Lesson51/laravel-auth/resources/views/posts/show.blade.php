@extends('layouts.app')


@section('content')
<p>
    <a href="/posts">Back</a>
</p>
<h1>{{$post->title}}</h1>
<p class="text-muted">
    Posted by {{$post->user->name}}
</p>
<div>
    {{$post->body}}
</div>

<hr>
    @foreach($post->replies as $reply)
    <div>
        <header style="display:flex; justify-content:space-between;">


        <p class="m-0"> <strong>{{$reply->user->name}}</strong> said ...</p>
        @if($post->best_reply_id === $reply->id)
            <span style="color:green;">Best Reply!!!</span>
        @endif
        </header>
        {{$reply->body}} 

        @can('update', $post)
        
        <form action="/best-replies/{{$reply->id}}" method="POST">
            @csrf
            <button type="submit" class="btn p-0 text-muted">Best reply</button>
        </form>
        @endcan
    </div>
    @continue($loop->last)
 
    <hr>
    @endforeach

@endsection