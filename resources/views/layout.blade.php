<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>



<nav class="navbar navbar-expand-sm bg-light">
	<div class="container">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" href="{{route('home')}}">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="{{route('todo')}}">Todo</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="{{route('about')}}">About</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="{{route('contact')}}">Contact Us </a>
		</li>
		</ul>
	</div>
</nav>


<br>



<div class="container">

	@if(Session::has('success'))
		<div class="alert alert-success">
			<strong>Successs!</strong>
			<p>{{Session::get('success')}}</p>
		</div>
	@endif

  @yield('content')
</div>

<script>

	@if(\Request::is('about'))
		alert('this is the about page')
	@endif()

</script>

</body>
</html>
