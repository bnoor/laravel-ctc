<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8"/>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	@yield('css')
</head>
<body>
	
	<ul id="menu" class="hidden-print">
		<li><a href="#">Home</a></li>
		<li><a href="#">Home</a></li>
	</ul>
	@yield('main')
</body>
</html>
