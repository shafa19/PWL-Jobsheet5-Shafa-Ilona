<!DOCTYPE html>
<html lang="en">

<head>
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/full-width-pics.css" rel="stylesheet">

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

  <!-- Header - set the background image for the header in the line below -->
  <header class="py-5 bg-image-full" style="background-image: url('https://images.unsplash.com/photo-1440404653325-ab127d49abc1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80');">
    <div style="height: 200px;"></div>
  </header>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Film</h1>
      <p class="lead">Theme that I choose for this website is Film</p>
      <p>Film, also called movie, motion picture or moving picture, is a visual art-form used to simulate experiences that communicate ideas, stories, perceptions, feelings, beauty, or atmosphere through the use of moving images. These images are generally accompanied by sound, and more rarely, other sensory stimulations.
      The name "film" originates from the fact that photographic film (also called film stock) has historically been the medium for recording and displaying motion pictures. 
      Many other terms exist for an individual motion-picture, including picture, picture show, moving picture, photoplay, and flick. 
      The most common term in the United States is movie, while in Europe film is preferred. Common terms for the field in general include the big screen, the silver screen, the movies, and cinema; 
      the last of these is commonly used, as an overarching term, in scholarly texts and critical essays. In early years, the word sheet was sometimes used instead of screen.
      </p>
    </div>
  </section>

  <!-- Image element - set the background image for the header in the line below -->
  <div class="py-5 bg-image-full" style="background-image: url('https://images.unsplash.com/photo-1519060825752-c4832f2d400a?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80');">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 200px;"></div>
  </div>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>PWL</h1>
      <p class="lead">Mata Kuliah Pemrograman Web Lanjut</p>
      <p>Pada Mata Kuliah ini, mahasiswa diharapkan dapat mengembangkan CMS yang telah dibuat pada tugas-tugas sebelumnya yang mencakup materi-materi pemrograman web lanjut.</p>
    </div>
  </section>

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
