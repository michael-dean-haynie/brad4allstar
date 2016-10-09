<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('master-title', config('app.name'))</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	{{-- CSS --}}
	<link href="bootstrap-3.3.7-dist\css\bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="css\master.css" type="text/css" rel="stylesheet">

	@yield('master-css')

	{{-- JS --}}
	<script src="jquery-3.1.1.min.js"></script>
	<script src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
	@yield('master-js')


	@yield('master-head')
</head>
<body>
	@include("includes._master-header")
	@yield('master-content')
	@include("includes._master-footer")

</body>
</html>

