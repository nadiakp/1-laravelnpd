<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('partials.head')
</head>
<body class="with-side-menu control-panel control-panel-compact"> 
	@include('partials.header')
    
	@yield('content')
</body>
</html>