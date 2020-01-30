<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Social community</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="icon" href="{{ asset('images/cmp-icon5.png') }}" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/line-awesome.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/line-awesome-font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('lib/slick/slick.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('lib/slick/slick-theme.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/line-awesome-font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">


	</head>

	<body>

		<div class="wrapper">

			@yield('header-acceuil')

			@yield('password_forgot')			

			<main>
				@if(Session::has('success'))
					<div class="alert alert-success" align="center">{{ Session::get('success') }}</div>
				@endif
				<div class="main-section">
					<div class="container">
						<div class="main-section-data">
							<div class="row">

								@yield('section_gauche')

								@yield("main-ws-sec")

								@yield("section_droit")

							</div>
						</div>
					</div>
				</div>
			</main>

			{{-- @yield("form-post") --}}

			@yield("form-post")


			@yield('form-post-jobs')

			
			@yield('profile-image-change')

			

		</div><!--theme-layout end-->

		<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/popper.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/jquery.mCustomScrollbar.js') }}"></script>
		<script type="text/javascript" src="{{ asset('lib/slick/slick.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/scrollbar.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>


		@include('../pages.scripts.script')
	</body>
</html>