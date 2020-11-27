<!DOCTYPE html>
<html lang="en">

<head>
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Manage</title>

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
        <br>
        <div class="card">
            <div class="card-header text-center">
                <h3>Movie Lists</h3>
            </div>
            <a href="movie/add" class="btn btn-primary">Add Data</a>
            <a href="/movie/print_pdf" class="btn btn-primary" target="_blank">Print PDF</a>
            </br></br>
        </div>
        <!-- Title -->
        <div class="card body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Synopsis</th>
                    <th>Rating</th>
                    <th>Review</th>
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td>{{ $a->title }}</td>
                    <td>{{ $a->synopsis }}</td>
                    <td>{{ $a->rating }}</td>
                    <td>{{ $a->review }}</td>
                    <td>
                        <a href="movie/edit/{{ $a->id }}" class="badge badge-warning">Edit</a>
                        <a href="movie/delete/{{ $a->id }}" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        <br><br><br><br><br><br><br>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        
        <!-- Categories Widget -->
        
        <div class="card my-4">
          <h5 class="card-header">List Movie</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                @foreach($movies as $a)
                  <li>
                    <a href="film/{{ $a->id }}">{{ $a->title }}</a>
                  </li>
                @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            Pemrograman Web Lanjut 2020/2021
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
