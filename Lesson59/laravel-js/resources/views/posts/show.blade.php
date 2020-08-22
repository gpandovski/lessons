@extends('layouts.app');
@push('fontawesome')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$post->title}} </div>
                <div class="card-body">
                    <ul>
                         <li>{{$post->body}}</li>
                         <li>{{csrf_field()}}</li>
                         <div class="container">
                            <a href="#" id="like-button"> <i class="fa fa-thumbs-up"></i>({{$post->like}})</a>
                         </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('pagescripts')
<script src='/js/custom.js'></script>
@endsection
@push('scripts')
<script>
    // route /like/$post->id (POST) > LikeController@store

    // when user clicks on thumbsup 
    // we send POST request to /like/$post->id
    // we will use javascript fetch API 
    // 
    // after post likes was successfully updated we increase the number in ()
    // put some message "you liked this post"
    var link = document.getElementById('like-button');
    let post = @json($post);
    let token = @json(csrf_token());
    
  
    
    link.addEventListener('click', function (event) {

 
        var self = event.target;
        console.log(self);
        const formData = new FormData();
 

        formData.append('_token', token);
        formData.append('post', post.id);

        fetch("/like/"+post.id, { // we make post request to our laravel route
            method: 'post',
            body: formData
        }).then(response => response.json())
        .then(result => {
 
            self.innerHTML = '<i class="fa fa-thumbs-up"></i> (' + result.likes + ')';
     
        })
 
    });
   

</script>
@endpush