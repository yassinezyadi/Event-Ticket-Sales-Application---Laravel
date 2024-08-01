<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Barren - Simple Online Event Ticketing System</title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="{{('assets/images/fav.pn')}}g">
		
		<!-- Stylesheets -->
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
		<link href="{{asset('assets/vendor/unicons-2.0.1/css/unicons.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/vertical-responsive-menu.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/analytics.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/night-mode.css')}}" rel="stylesheet">
		
		<!-- Vendor Stylesheets -->
		<link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/vendor/OwlCarousel/assets/owl.carousel.')}}" rel="stylesheet">
		<link href="{{asset('assets/vendor/OwlCarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">	
		<link href="{{asset('assets/vendor/chartist/dist/chartist.min.css ')}}"rel="stylesheet">
		<link href="{{asset('assets/vendor/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
		
	</head>

    <body class="d-flex flex-column h-100">

     @include('admin_layout.navbare')
     @include('admin_layout.Sidebar')

     @yield('content')




        <script src="{{asset('assets/js/vertical-responsive-menu.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/vendor/OwlCarousel/owl.carousel.js')}}"></script>
        <script src="{{asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>	
        <script src="{{asset('assets/vendor/chartist/dist/chartist.min.js')}}"></script>
        <script src="{{asset('assets/vendor/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js')}}"></script>
        <script src="{{asset('assets/js/analytics.js')}}"></script>
        <script src="{{asset('assets/js/custom.js')}}"></script>
        <script src="{{asset('assets/js/night-mode.js')}}"></script>

    </body>

</html>