@extends('layout')
@section('content')

	<div id="wrapper">
		<div id="page" class="container">
			<div id="content">
                <!-- forelse is like foreach, but with empty check included -->
                @forelse($articles as $article)
				<div class="title">
                    <h2><a href="{{route('articles.show', $article)}}"> {{$article->title}}</a></h2>
                    <br>
					<span class="byline">{{$article->excerpt}}</span>
				</div>
                <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                @empty
                    <p>There is no articles yet! </p>
                @endforelse
			</div>
 
		</div>
	</div>
 
@endsection