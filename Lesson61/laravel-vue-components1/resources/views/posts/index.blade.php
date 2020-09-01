@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts</div>
                <div class="card-body">
                    <ul>
                        @foreach($posts as $post)
                            <a href="{{route('post', $post->id)}}"><li>{{$post->title}}</li></a>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection