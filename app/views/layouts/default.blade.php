<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Larabook</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
@include('layouts.partials.nav')
<div class="container">
	@yield('content')
</div>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>