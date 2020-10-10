<!-- file view.blade.php -->
<html>
<head>
	<title>Pemrograman Web Lanjut</title>
</head>
<body>
	<header>
		@include('layouts.navigation')
		@yield('header')
	</header><hr/>

	@yield('sidebar')
	@section('sidebar')
	<div class="menu">
		<a href="/home">Home</a>
		<a href="/about">About</a>
		<a href="/article">Article</a>
		<br/><hr/>
	</div>
	@show
	
	@yield('content')

<footer>
	@yield('footer')
</footer>
</body>
</html>
