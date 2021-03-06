@extends('layout')
@section('content')

	<div id="wrapper">
		<div id="page" class="container">
			<div id="content">
                @foreach($articles as $article)
				<div class="title">
                    <h2><a href="/articles/{{$article->id}}"> {{$article->title}}</a></h2>
                    <br>
					<span class="byline">{{$article->excerpt}}</span>
				</div>
				<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                @endforeach
			</div>
 
		</div>
	</div>
 
@endsection