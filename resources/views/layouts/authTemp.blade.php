<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Sistema de administración</title>
	<!-- core:css -->
    <link rel="stylesheet" href="{{ asset('vendors/core/core.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
	<!-- endinject -->
    <!-- plugin css for this page -->
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="{{ asset('fonts/feather-font/css/iconfont.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/flag-icon-css/css/flag-icon.min.css') }}">
	<!-- endinject -->
    <!-- Layout styles -->  
	<link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <!-- End layout styles -->
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>
<body>

	@yield('content')

	<!-- core:js -->
	<script src="{{ asset('vendors/core/core.js') }}"></script>
	<!-- endinject -->
    <!-- plugin js for this page -->
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
	<script src="{{ asset('js/template.js') }}"></script>
	<!-- endinject -->
    <!-- custom js for this page -->
	<!-- end custom js for this page -->
</body>
</html>