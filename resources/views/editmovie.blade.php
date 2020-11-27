<!DOCTYPE html>
<html lang="en">

<head>
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Change Data</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand">Movies Web</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
            @can('user-display')
            <a class="nav-link" href="{{ url('/home') }}">Home</a>
            @endcan
          </li>
          <li class="nav-item {{ Route::is('movies') ? 'active' : '' }}">
            @can('user-display')
            <a class="nav-link" href="{{ url('/movies') }}">Movies</a>
            @endcan
          </li>
          <li class="nav-item {{ Route::is('manage-user') ? 'active' : '' }}">
            @can('manage-articles')
            <a class="nav-link" href="{{ route('manage-user') }}">Manage User</a>
            @endcan
          </li>
          <li class="nav-item {{ Route::is('manage') ? 'active' : '' }}">
            @can('manage-articles')
            <a class="nav-link" href="{{ route('manage') }}">Manage Movies</a>
            @endcan
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                {{ __('LogOut')}}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">
      <br><br><br><br>
        <!-- Title -->
        <form action="/movie/update/{{$movies->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}} 
            <input type="hidden" name="id" value="{{$movies->id}}"></br>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" required="required" name="title" value="{{$movies->title}}"></br>
            </div>
            <div class="form-group">
                <label for="synopsis">Synopsis</label>
                <input type="text" class="form-control" required="required" name="synopsis" value="{{$movies->synopsis}}"></br>
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="text" class="form-control" required="required" name="rating" value="{{$movies->rating}}"></br>
            </div>
            <div class="form-group">
                <label for="review">Review</label>
                <input type="text" class="form-control" required="required" name="review" value="{{$movies->review}}"></br>
            </div>
            <div class="form-group">
                <label for="poster">Poster</label>
                <input type="file" class="form-control" required="required" name="poster" value="{{$movies->poster}}"></br>
                <img width="150px" src="{{asset('storage/'.$movies->poster)}}">
            </div>
            <button href="/manage" class="btn btn-primary float-left">Back</button>
            <button type="submit" name="edit" class="btn btn-primary float-right">Change Data</button>
        </form>
        <br><br><br><br><br><br>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        
        <!-- Categories Widget -->
        <br><br>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            Kuis 1 Pemrograman Web Lanjut 2020/2021
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; shafailona 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
