<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>{{ $title }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">

    <!-- Bootstrap core CSS -->
	<link href="../../css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="../../css/style.css" rel="stylesheet">
  </head>
  <body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="#">Dompet {{ $name }}</a>
		  </div>
		</nav>
	</header>
	<main>
	  @include('partials.sidebar')
	  <div class="b-example-divider"></div>
	  <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white col" style="width: 80%;">
	  	<div class="container">

	  		@yield('content')
	  		
	  	</div>
	  </div>
	</main>
	<footer>
		<div align="center">
			<h6>Maju Bersama Atomic Indonesia</h6>
		</div>
	</footer>
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/script.js"></script>
  </body>
</html>
