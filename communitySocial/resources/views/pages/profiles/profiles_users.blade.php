
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Profiles</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="{{ asset('images/cmp-icon5.png') }}" type="image/x-icon">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/flatpickr.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/line-awesome.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/line-awesome-font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('lib/slick/slick.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('lib/slick/slick-theme.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
	</head>


	<body>
	

		<div class="wrapper">
			
			@include('pages.profiles._partials.header')<!--header end-->

			<section class="companies-info">
				<div class="container">
					<div class="company-title">
						<h3>Tous les profiles</h3>
					</div><!--company-title end-->
					<div class="companies-list">
						<div class="row">

							@foreach($users as $user)
								@if($user->id != $userConnect->id)
									<div class="col-lg-3 col-md-4 col-sm-6 col-12">
										<div class="company_profile_info">
											<div class="company-up-info">
												<!-- <img src="http://via.placeholder.com/91x91" alt=""> -->
												@if($user->profil->avatar == "")
													<img src="{{ asset('storage/avatars-profil/default.png') }}" alt="">
												@else
													<img src="{{ asset('storage' . '/' . $user->profil->avatar) }}" alt="">
												@endif
												<h3>{{ $user->nom }} {{ $user->prenom }}</h3>
												
												@if($user->profil->job == "")
													<h4 style="color: red"> Pas de job indiqué  </h4>
												@else
													<h4>{{ $user->profil->job }}</h4>
												@endif
												<ul>
													<li><a href="#" title="" class="follow">Suivre</a></li>
													<li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
													<li><a href="#" title="" class="hire-us">Invité</a></li>
												</ul>
											</div>
											<a href=" {{ route('voir.profile',['user' => $user]) }} " title="" class="view-more-pro">Voir profile</a>
										</div><!--company_profile_info end-->
									</div>
								@endif
							@endforeach

						</div>
					</div><!--companies-list end-->
					<div class="process-comm">
						<div class="spinner">
							<div class="bounce1"></div>
							<div class="bounce2"></div>
							<div class="bounce3"></div>
						</div>
					</div>
				</div>
			</section><!--companies-info end-->


		</div><!--theme-layout end-->



		<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/popper.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/flatpickr.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('lib/slick/slick.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
	</body>
</html>