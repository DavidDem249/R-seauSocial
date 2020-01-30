<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Authentification</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/line-awesome.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/line-awesome-font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('lib/slick/slick.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('lib/slick/slick-theme.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
	</head>


	<body class="sign-in">
	

	<div class="wrapper">

		<div class="sign-in-page">
			<div class="signin-popup">
				<div class="signin-pop">
					<div class="row">
						<div class="col-lg-5">
							<div class="cmp-info">
								<div class="cm-logo">
									<img src="" alt="logo-social-community">
									<p>Social community,  est une plateforme de réseau social qui à pour but de rapprocher une famille de façon virtuelle, rétrouver ses parents éloigné et bien d'autres</p>
								</div><!--cm-logo end-->	
								<img src="{{ asset('images/cm-main-img.png') }}" alt="">		
							</div><!--cmp-info end-->
						</div>
						<div class="col-lg-7">
							<div class="login-sec">
								

								@yield('sign_in_sec-login')

								@yield("sign_in_sec-register")

								@yield("password_forgot")

							</div>
						</div>
					</div>
				</div>
			</div>

			@yield('footy-sec')

		</div>

	</div>

		<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/popper.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('lib/slick/slick.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
	</body>
</html>