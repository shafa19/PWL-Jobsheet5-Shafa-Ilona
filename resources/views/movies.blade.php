<!DOCTYPE html>
<html lang="en">

<head>
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Movies</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-item.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand">Kuis 1 - Shafa Ilona</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/kuis">Home
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/movies">Movies</a>
              <span class="sr-only">(current)</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/news/7">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                       {{ __('Logout') }}
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
      <div class="col-lg-3">
        <br><br>
        <h1 class="my-4">Movies</h1>
        <div class="list-group">
          <a href="/film/7" class="list-group-item">Parasite</a>
          <a href="/film/8" class="list-group-item">Searching</a>
          <a href="/film/9" class="list-group-item">Five Feet Apart</a>
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <br><br>
        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="{{ $movie->poster }}" alt="">
          <div class="card-body">
            <h3 class="card-title">{{ $movie->title }}</h3>
            <h4>Synopsis</h4>
            <p class="card-text">{{ $movie->synopsis }}</p>
            <span class="text-warning">&#9733;</span>
            {{ $movie->rating }} stars
          </div>
        </div>
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Movie Review
          </div>
          <div class="card-body">
            <p>{{ $movie->review }}</p>
            <small class="text-muted">Posted by Anonymous on 05/10/20</small>
            <hr>
            
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

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
