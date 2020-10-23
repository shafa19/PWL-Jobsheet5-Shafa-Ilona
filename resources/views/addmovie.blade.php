<!DOCTYPE html>
<html lang="en">

<head>
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Add Data</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">

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
            <a class="nav-link" href="/kuis">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/movies">Movies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/news/7">News</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/manage">Manage</a>
          </li>
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
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
        <form action="/movie/create" method="post">
            @csrf 
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" required="required" name="title"></br>
            </div>
            <div class="form-group">
                <label for="synopsis">Synopsis</label>
                <input type="text" class="form-control" required="required" name="synopsis"></br>
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="text" class="form-control" required="required" name="rating"></br>
            </div>
            <div class="form-group">
                <label for="review">Review</label>
                <input type="text" class="form-control" required="required" name="review"></br>
            </div>
            <button type="submit" name="add" class="btn btn-primary float-right">Add Data</button>
        </form>
        <br><br><br><br><br><br>
        <!-- Comments Form
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3">can't be filled during the non-existence CRUD mode
                </textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>-->

        <!-- Single Comment 
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Shafa Ilona</h5>
            Perkenalkan saya Shafa Ilona. Biasa dipanggil Shafa. Mahasiswi kelas MI-2F dengan NIM 1931710107, Program Studi D3 Manajemen Informatika, Jurusan Teknologi Informasi, Politeknik Negeri Malang.
          </div>
        </div>-->

        <!-- Comment with nested comments 
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Anonymous User</h5>
            I love this movie! Such a great movie!

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Roger</h5>
                Yep!! Love the plot!!
              </div>
            </div>

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Kath</h5>
                Indeed!
              </div>
            </div>

          </div>
        </div>-->

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>-->

        <!-- Categories Widget -->
        <br><br>
        <div class="card my-4">
          <h5 class="card-header">List Movie</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="/film/7">Parasite</a>
                  </li>
                  <li>
                    <a href="/film/8">Searching</a>
                  </li>
                  <li>
                    <a href="/film/9">Five Feet Apart</a>
                  </li>
                </ul>
              </div>
              <!-- <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a>A-Z</a>
                  </li>
                  <li>
                    <a>Z-A</a>
                  </li>
                  <li>
                    <a>Others</a>
                  </li>
                </ul>
              </div>-->
            </div>
          </div>
        </div>

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
