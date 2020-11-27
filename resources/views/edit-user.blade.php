<!DOCTYPE html>
<html lang="en">

<head>
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit User</title>

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
        <form action="/user/update/{{$users->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}} 
            <input type="hidden" name="id" value="{{$users->id}}"></br>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" required="required" name="name" value="{{$users->name}}"></br>
            </div>
            <div class="form-group">
                <label for="profpic">Profile Picture</label>
                <input type="file" class="form-control" required="required" name="profpic" value="{{$users->profpic}}"></br>
                <img width="100px" src="{{asset('storage/'.$users->profpic)}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" required="required" name="email" value="{{$users->email}}"></br>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" required="required" name="password" value="{{$users->password}}"></br>
            </div>
            <div class="form-group">
                <label for="roles">Roles (Recommended with 'User')</label>
                <input type="text" class="form-control" required="required" name="roles" value="{{$users->roles}}"></br>
            </div>
            <button type="submit" name="edit" class="btn btn-primary float-right">Edit User</button>
        </form>
        <br><br><br><br><br><br>



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
