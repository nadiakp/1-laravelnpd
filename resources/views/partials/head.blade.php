    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('assets/js/app.js') }}" defer></script> -->
    <script src="{{ asset('build/js/lib/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('build/js/lib/tether/tether.min.js') }}"></script>
	<script src="{{ asset('build/js/lib/bootstrap/bootstrap.min.js') }}"></script>
	<script src="{{ asset('build/js/plugins.js') }}"></script>
	<script type="text/javascript" src="{{ asset('build/js/lib/jqueryui/jquery-ui.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('build/js/lib/lobipanel/lobipanel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('build/js/lib/match-height/jquery.matchHeight.min.js') }}"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="{{ asset('build/js/app.js') }}"></script>
	
	<!-- Styles -->
	<link href="{{ asset('build/img/favicon.144x144.png') }}" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="{{ asset('build/img/favicon.114x114.png') }}" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="{{ asset('build/img/favicon.72x72.png') }}" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="{{ asset('build/img/favicon.57x57.png') }}" rel="apple-touch-icon" type="image/png">
	<link href="{{ asset('build/img/favicon.png') }}" rel="icon" type="image/png">
	<link href="{{ asset('build/img/favicon.ico') }}" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    <link rel="stylesheet" href="{{ asset('build/css/lib/lobipanel/lobipanel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/css/separate/vendor/lobipanel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/css/lib/jqueryui/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/css/separate/pages/widgets.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/css/lib/font-awesome/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('build/css/lib/bootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('build/css/separate/pages/chat.min.css') }}">
	<link rel="stylesheet" href="{{ asset('build/css/separate/pages/messenger.min.css') }}">
	<link rel="stylesheet" href="{{ asset('build/css/lib/summernote/summernote.css') }}">
	<link rel="stylesheet" href="{{ asset('build/css/separate/pages/editor.min.css') }}">
	<link rel="stylesheet" href="{{ asset('build/css/separate/pages/mail.min.css') }}">
	<link rel="stylesheet" href="{{ asset('build/css/separate/vendor/fancybox.min.css') }}">
	<link rel="stylesheet" href="{{ asset('build/css/separate/pages/activity.min.css') }}">
	<link rel="stylesheet" href="{{ asset('build/css/separate/vendor/slick.min.css') }}">
	<link rel="stylesheet" href="{{ asset('build/css/separate/pages/profile.min.css') }}">
	<link rel="stylesheet" href="{{ asset('build/css/separate/pages/tasks.min.css') }}">
	<link rel="stylesheet" href="{{ asset('build/css/separate/pages/contacts.min.css') }}">
	<link rel="stylesheet" href="{{ asset('build/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">