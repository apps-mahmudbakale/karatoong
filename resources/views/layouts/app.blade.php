<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="Education LMS By Mahmud Bakale">
	<meta name="keywords" content="Rima Computer Institute,education,lms,course,online,learning,caoch,training,tutor">
	<meta name="author" content="Mahmud Bakale">

	<title></title>

	<!-- Mobile Specific Meta-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Rima Institute') }}</title>
	<link rel="shortcut icon" type="image/png" href="{{ asset('karatoo.png') }}">
	<link href="{{ asset('css/all.css') }}" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body id="top-header">
	@include('partials.header')
	@yield('content')
	@include('partials.footer')
	<a href="https://api.whatsapp.com/send?phone=+2348038969767&text=Hello%21%20Mahmud Bakale" class="float" target="_blank">
      <i class="fa fa-whatsapp my-float"></i>
    </a>
	<script src="assets/vendors/jquery/jquery.js"></script>
	<!-- Bootstrap 4.5 -->
	<script src="assets/vendors/bootstrap/bootstrap.js"></script>
	<!-- Counterup -->
	<script src="assets/vendors/counterup/waypoint.js"></script>
	<script src="assets/vendors/counterup/jquery.counterup.min.js"></script>
	<script src="assets/vendors/jquery.isotope.js"></script>
	<script src="assets/vendors/imagesloaded.html"></script>
	<script src="assets/vendors/owl/owl.carousel.min.js"></script>  
	<script src="assets/js/script.js"></script>
</body>

</html>