<!DOCTYPE html>
<html lang="en" class="h-100">
	
<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/forgot_password.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Mar 2024 22:52:56 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Barren - Simple Online Event Ticketing System</title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/fav.png">
		
		<!-- Stylesheets -->
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
		<link href="{{asset('assets/vendor/unicons-2.0.1/css/unicons.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/night-mode.css')}}" rel="stylesheet">
		
		<!-- Vendor Stylesheets -->
		<link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/vendor/OwlCarousel/assets/owl.carousel.css')}}" rel="stylesheet">
		<link href="{{asset('assets/vendor/OwlCarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">		
		
	</head>

<body>				
	<div class="form-wrapper">
		<div class="app-form">
			<div class="app-form-sidebar">
				<div class="sidebar-sign-logo">
					<img src="images/sign-logo.svg" alt="">
				</div>
				<div class="sign_sidebar_text">
					<h1>The Easiest Way to Create Events and Sell More Tickets Online</h1>
				</div>
			</div>
			<div class="app-form-content">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10 col-md-10">
							<div class="app-top-items">
								<a href="{{url('/')}}">
									<div class="sign-logo" id="logo">
										<img src="{{asset('assets/images/logo.svg')}}" alt="">
										<img class="logo-inverse" src="{{asset('assets/images/dark-logo.svg')}}" alt="">
									</div>
								</a>
								<div class="app-top-right-link">
									<a class="sidebar-register-link" href="{{url('/sign_in')}}"><i class="fa-regular fa-circle-left me-2"></i>Back to sign in</a>
								</div>
							</div>
						</div>
						<div class="col-xl-5 col-lg-6 col-md-7">
							<div class="registration">


								<form method="POST" action="{{ route('forget.password') }}">
									@csrf
								<h2 class="registration-title">Forgot Password</h2>
								  <div class="form-group mt-5">
									<label for="email" class="form-label" id="email" required>Email</label>
									<input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" autofocus />
								  </div>
								  <button class="main-btn btn-hover w-100 mt-4">Send Reset Link</button>
								</form>
								<div class="new-sign-link">
									<a class="signup-link" href="sign_in.html"><i class="fa-regular fa-circle-left me-2"></i>Back to sign in</a>
								</div>
							</div>							
						</div>
					</div>
				</div>
				<div class="copyright-footer">
					© 2024, Barren. All rights reserved. Powered by Gambolthemes
				</div>
			</div>			
		</div>
	</div>
	
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('assets/vendor/OwlCarousel/owl.carousel.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>	
	<script src="{{asset('assets/js/custom.js')}}"></script>
	<script src="{{asset('assets/js/night-mode.js')}}"></script>

</body>

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/forgot_password.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Mar 2024 22:52:56 GMT -->
</html>