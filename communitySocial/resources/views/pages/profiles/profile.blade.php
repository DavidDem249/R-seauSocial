<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Profile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="icon" href="{{ asset('images/cmp-icon5.png') }}" type="image/x-icon">
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


			<section class="cover-sec">
				<!-- <img src="http://via.placeholder.com/1600x400" alt=""> -->
				<img src="{{ $user->profil->getPhotoCouverture() }}" alt="photo de couverture">
				@can('update', $user->profil)
					<a href="#" class="box-photo-cov" title="">
						<i class="fa fa-camera"></i> 
						Changer Image
					</a>
				@endcan
			</section>


			<main>
				<div class="main-section">
					<div class="container">
						<div class="main-section-data">
							<div class="row">
								<div class="col-lg-3">
									@include('pages.profiles._partials.left_sidebar')<!--main-left-sidebar end-->
								</div>
								<div class="col-lg-6">
									@include('pages.profiles._partials.ws-sec')<!--main-ws-sec end-->
								</div>
								<div class="col-lg-3">
									@include('pages.profiles._partials.right-sidebar')<!--right-sidebar end-->
								</div>
							</div>
						</div><!-- main-section-data end-->
					</div> 
				</div>
			</main>

			<footer>
				<div class="footy-sec mn no-margin">
					<div class="container">
						<!-- <ul>
							<li><a href="#" title="">Help Center</a></li>
							<li><a href="#" title="">Privacy Policy</a></li>
							<li><a href="#" title="">Community Guidelines</a></li>
							<li><a href="#" title="">Cookies Policy</a></li>
							<li><a href="#" title="">Career</a></li>
							<li><a href="#" title="">Forum</a></li>
							<li><a href="#" title="">Language</a></li>
							<li><a href="#" title="">Copyright Policy</a></li>
						</ul> -->
						<p><img src="images/copy-icon2.png" alt="">Copyright 2018</p>
						<img class="fl-rgt" src="images/logo2.png" alt="">
					</div>
				</div>
			</footer><!--footer end-->

			<div class="overview-box" id="photo-cov-box">
				<div class="overview-edit">
					
					<h3>Changer la photo de couverture</h3>

					<form method="POST" action="{{ route('couver.photo',['user' => $user]) }}" enctype="multipart/form-data">

						@csrf
						@method('PATCH')
						<div class="datefm">
							<input type="file" name="photo_cov" placeholder="" value="">	
							<i class="fa fa-picture"></i>
						</div>

						<button type="submit" class="save">Changer</button>
						<button type="submit" class="cancel">Annuler</button>
					</form>
					<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
				</div><!--overview-edit end-->
			</div><!--overview-box end-->

			<div class="overview-box" id="photo-box">
				<div class="overview-edit">
					
					<h3>Changer la photo de profile</h3>

					<form method="POST" action="{{ route('profil.photo',['user' => $user]) }}" enctype="multipart/form-data">
						@csrf 
						@method('PATCH')

						<div class="datefm">
							<input type="file" name="avatar" placeholder="" value="" >	
							<i class="fa fa-picture"></i>
						</div>

						<button type="submit" class="save">Changer</button>
						<button type="submit" class="cancel">Annuler</button>
					</form>
					<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
				</div><!--overview-edit end-->
			</div><!--overview-box end-->

			<div class="overview-box" id="photo-galery-box">
				<div class="overview-edit">
					
					<h3>Ajouter une photo à votre galérie</h3>

					<form method="POST" action="{{ route('store.galerie',['user' => $user]) }}" enctype="multipart/form-data">

						@csrf
						@method('PATCH')
						<div class="datefm">
							<input type="file" name="photo_galerie" placeholder="" value="">	
							<i class="fa fa-picture"></i>
						</div>

						<button type="submit" class="save">Ajouter</button>
						<button type="submit" class="cancel">Annuler</button>
					</form>
					<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
				</div><!--overview-edit end-->
			</div><!--overview-box end-->


			<div class="overview-box" id="location-box">
				<div class="overview-edit">
					
					<h3>Informations personnelles</h3>

					<form method="POST" action="{{ route('update',['user' => $user]) }}">
						@csrf

						<div class="datepicky">
							<div class="row">

								<div class="col-lg-4 no-left-pd">
									<div class="datefm">
										<input type="text" name="nom" disabled="disabled" placeholder="Votre nom" value="{{ $user->nom }}">
										<i class="fa fa-globe"></i>
									</div>
								</div>

								<div class="col-lg-8 no-left-pd">
									<div class="datefm">
										<input type="text" name="prenom" disabled="disabled" placeholder="Votre prénom" value="{{ $user->prenom }}">
										<i class="fa fa-map-marker"></i>
									</div>
								</div>
							</div>
						</div>

						<div class="datefm">
							<input type="text" name="contact" placeholder="Votre numéro" value="{{ $user->profil->contact }}">
							<i class="fa fa-map-marker"></i>
						</div>


						<div class="datefm">
							<input type="text" name="facebook" placeholder="Votre lien facebook" value="{{ $user->profil->facebook }}">
							<i class="fa fa-map-marker"></i>
						</div>


						<div class="datefm">
							<input type="text" name="twitter" placeholder="Votre lien twitter" value="{{ $user->profil->twitter }}">
							<i class="fa fa-map-marker"></i>
						</div>

						<div class="datefm">
							<input type="text" name="instagram" placeholder="Votre lien instagram" value="{{ $user->profil->instagram }}">
							<i class="fa fa-map-marker"></i>
						</div>

						{{--<div class="datefm">
							<select name="genre">
								@if($user->genre == "Masculin")
									<option value="Masculin">Masculin</option>
									<option value="Féminin">Féminin</option>
									<option value="Autre">A</option>

								@elseif($user->genre == "Féminin")
									<option value="Féminin">Féminin</option>
									<option value="Masculin">Masculin</option>
									<option value="Autre">A</option>
								@else
									<option value="Autre">Autre</option>
									<option value="Masculin">Masculin</option>
									<option value="Féminin">Féminin</option>
								@endif
							</select>
						</div> --}}

						<div class="datefm">
							<input type="text" name="date_naiss" placeholder="Votre date de naissance" value="{{ $user->profil->date_naissance }}" class="datepicker">	
							<i class="fa fa-calendar"></i>
						</div>

						<div class="datefm">
							<input type="text" name="job" placeholder="Votre Travail ou job" value="{{ $user->profil->job }}">
							<i class="fa fa-map-marker"></i>
						</div>
						
						<button type="submit" class="save">Enregistrer</button>
						<button type="submit" class="cancel">Annuler</button>
					</form>
					<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
				</div><!--overview-edit end-->
			</div><!--overview-box end-->

			<div class="overview-box" id="overview-box">
				<div class="overview-edit">
					<h3>Votre biographie</h3>
					<span>Au maximum 5000 charactères</span>
					<form method="POST" action="{{ route('update.bio',['user' => $user]) }}">
						@csrf

						<textarea name="bio" placeholder="Parlez-nous de vous en quelques phrases seulement...">{{ $user->profil->biographie }}</textarea>
						<button type="submit" class="save">Enregistrer</button>
						<button type="submit" class="cancel">Annuler</button>
					</form>
					<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
				</div><!--overview-edit end-->
			</div><!--overview-box end-->


			<div class="overview-box" id="skills-box">
				<div class="overview-edit">
					<h3>Informations familiale</h3>
					
					<form method="POST" action="{{ route('update.famille',['user' => $user]) }}">
						@csrf

						<div class="datefm">
							<label for="name_papa"> Nom & Prenom du pére</label><br>

							@if($user->profil->nom_prenom_pere == "")

								<input type="text" name="name_papa" id="name_papa" value="">
								<i class="fa fa-globe"></i>

							@else

								<input type="text" name="name_papa" id="name_papa" value="{{ $user->profil->nom_prenom_pere }}" disabled="disabled">
								<i class="fa fa-globe"></i>

							@endif
							
						</div>

						<div class="datefm">
							<label for="name_mere"> Nom & Prenom de la maman</label><br>
							@if($user->profil->nom_prenom_mere == "")

								<input type="text" name="name_mere" id="name_mere" value="">
								<i class="fa fa-map-marker"></i>

							@else

								<input type="text" name="name_mere" id="name_mere" value="{{ $user->profil->nom_prenom_mere }}" disabled="disabled">
								<i class="fa fa-map-marker"></i>

							@endif

						</div>
						<button type="submit" class="save">Enregistrer</button>
						<button type="submit" class="cancel">Annuler</button>
					</form>
					<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
				</div><!--overview-edit end-->
			</div><!--overview-box end-->


			<div class="overview-box" id="experience-box">
				<div class="overview-edit">
					<h3>Votre expérience</h3>
					<form method="POST" action="">
						@csrf

						<input type="text" name="experience" placeholder="Donner le titre de l'expérience">
						<textarea></textarea>
						<button type="submit" class="save">Enregistrer</button>
						{{--<button type="submit" class="save-add">Save & Add More</button>--}}
						<button type="submit" class="cancel">Annuler</button>
					</form>
					<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
				</div><!--overview-edit end-->
			</div><!--overview-box end-->

			<div class="overview-box" id="education-box">
				<div class="overview-edit">
					<h3>Education</h3>
					<form method="POST" action="">
						@csrf

						<input type="text" name="school" placeholder="School / University">
						<div class="datepicky">
							<div class="row">
								<div class="col-lg-6 no-left-pd">
									<div class="datefm">
										<input type="text" name="date_deb" placeholder="De" class="datepicker">	
										<i class="fa fa-calendar"></i>
									</div>
								</div>
								<div class="col-lg-6 no-righ-pd">
									<div class="datefm">
										<input type="text" name="date_fin" placeholder="à" class="datepicker">
										<i class="fa fa-calendar"></i>
									</div>
								</div>
							</div>
						</div>
						<input type="text" name="degree" placeholder="Degree">
						<textarea placeholder="Description"></textarea>
						<button type="submit" class="save">Enregistrer</button>
						{{-- <button type="submit" class="save-add">Save & Add More</button> --}}
						<button type="submit" class="cancel">Annuler</button>
					</form>
					<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
				</div><!--overview-edit end-->
			</div><!--overview-box end-->


			<div class="overview-box" id="create-portfolio">
				<div class="overview-edit">
					<h3>Create Portfolio</h3>
					<form method="POST" action="">
						@csrf

						<input type="text" name="pf-name" placeholder="Portfolio Name">
						<div class="file-submit">
							<input type="file" name="file">
						</div>
						<div class="pf-img">
							<img src="http://via.placeholder.com/60x60" alt="">
						</div>
						<input type="text" name="website-url" placeholder="htp://www.example.com">
						<button type="submit" class="save">Save</button>
						<button type="submit" class="cancel">Cancel</button>
					</form>
					<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
				</div><!--overview-edit end-->
			</div><!--overview-box end-->

		</div><!--theme-layout end-->



		<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/popper.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/flatpickr.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('lib/slick/slick.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
	</body>
</html>