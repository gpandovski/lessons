<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Simple search</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

</head>

<body>

    <div class="container title-container">
        <h1 class="blog-title" style="display:inline-block">Simple search</h1>
        <ul class="social" style="float:right;display:inline-block;margin-top:1.7em">
            <li><a href="http://facebook.com/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="http://linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="http://twitter.com/"><i class="fa fa-twitter"></i></a></li>
        </ul>
    </div>


    <!-- Navigation -->
    <div class="container nav-container">
        <nav class="navbar navbar-inverse rounded navbar-toggleable-md">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#containerNavbar" aria-controls="containerNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <a class="navbar-brand" href="#">&nbsp;</a>
            <div class="collapse navbar-collapse" id="containerNavbar">
                <div class="navbar-nav mr-auto">
                    <a class="nav-item nav-link active" href="#">HOME<span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">LINK</a>
                    <a class="nav-item nav-link" href="#">LINK</a>
                </div>
            </div>
        </nav>
    </div>

    <!-- Page Content -->
    <div class="container content-container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">Posts <small>[{{$posts->total()}}]</small></h1>

                <!-- Blog Post -->
                @foreach($posts as $post)
                <div class="card mb-4">
                    <img class="card-img-top img-fluid" src="{{$post->banner}}" alt="Card image cap">
                    <div class="card-block">
                        <h2 class="card-title">{{$post->title}}</h2>
                        <p class="card-text"> {{$post->body}}</p>
                        <a href="#" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on {{$post->created_at->format('M d, Y')}}  by <a href="#"> User</a>
                    </div>
                </div>
                @endforeach



                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item  disabled"><a class="page-link" href="{{$posts->previousPageUrl()}}"> &larr; Older</a></li>
                    <li class="page-item"><a class="page-link" href="{{$posts->nextPageUrl()}}">Newer &rarr;</a></li>
                </ul>

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">
                <div class="container sidebar">
                    <!-- Search Widget -->
                    <div class="card">
                        <h5 class="card-header">Search</h5>
                        <div class="card-block">
                        <form action="/posts/search" >
                            <div class="input-group">
 
                                <input type="text" name="q" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                <button class="btn btn-secondary" type="submit">Go!</button>
                            
                            </span>
        
                            </div>
                            </form>
                        </div>
                    </div>

                    <!-- Categories Widget -->
                    <div class="card my-4">
                        <h5 class="card-header">Categories</h5>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#">Web Design</a></li>
                                        <li><a href="#">HTML</a></li>
                                        <li><a href="#">Freebies</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#">JavaScript</a></li>
                                        <li><a href="#">CSS</a></li>
                                        <li><a href="#">Tutorials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Side Widget -->
                    <div class="card my-4">
                        <h5 class="card-header">Side Widget</h5>
                        <div class="card-block">
                            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <div class="container footer-container">
        <footer class="py-5 bg-inverse">
            <p class="m-0 text-center text-white">Copyright &copy; <a href="laravel.com"> Searches</a> 2020</p>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</body>

</html>