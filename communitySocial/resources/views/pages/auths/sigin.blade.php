@extends('pages.auths._partials.master')

@section('sign_in_sec-login')
	<ul class="sign-control">
		<li data-tab="tab-1" class="current"><a href="#" title="">Connexion</a></li>				
		<li data-tab="tab-2"><a href="#" title="">Inscription</a></li>				
	</ul>
	
	<div class="sign_in_sec current" id="tab-1">
		@if(Session::has('success'))
            <div class="alert alert-success" align="center">{{ Session::get('success') }}</div>
        @endif
		<h3>Connexion</h3>
		<form method="post" action="{{ route('login') }}">
			@csrf
			
			
			@if(Session::has('erreur_con'))
				<div class="alert alert-danger">
					{{ Session::get('erreur_con') }}
				</div>
			@endif

			@if(Session::has('erreur_ins'))
				<div class="alert alert-danger">
					{{ Session::get('erreur_ins') }}
				</div>
			@endif

			<div class="row">
				<div class="col-lg-12 no-pdd">
					<div class="sn-field">
						<input type="email" class="form-control" name="email" placeholder="Votre email">
						<i class="la la-user"></i>
					</div><!--sn-field end-->
					@if($errors->first('email'))
						<p style="color:#CD3F3F;">{{ $errors->first('email') }}</p>
					@endif
				</div>
				<div class="col-lg-12 no-pdd">
					<div class="sn-field">
						<input type="password" class="form-control" name="password" placeholder="Votre nouveau mot de passe">
						<i class="la la-lock"></i>
					</div>
					@if($errors->first('password'))
						<p style="color:#CD3F3F;">{{ $errors->first('password') }}</p>
					@endif
				</div>
				<div class="col-lg-12 no-pdd">
					<div class="checky-sec">
						<a href="{{ route('form_pass_forgot') }}" title="">Mot de passe oublié</a>
					</div>
				</div>
				<div class="col-lg-12 no-pdd">
					<button type="submit" value="submit">Connexion</button>
				</div>
			</div>
		</form>
		<div class="login-resources">
			<h4>Se connecter à travers ?</h4>
			<ul>
				<li><a href="{{url('/redirect')}}" class="fb"><i class="fa fa-facebook"></i>Facebook</a></li>
				<li><a href="#" title="" class="tw"><i class="fa fa-twitter"></i>Twitter</a></li>
			</ul>
		</div><!--login-resources end-->
	</div><!--sign_in_sec end-->
			
@stop

@section('sign_in_sec-register')
	@include("pages.auths.signup")	
@stop

@section('footy-sec')
	<div class="footy-sec">
		<div class="container">
			{{-- <ul>
				<li><a href="#" title="">Help Center</a></li>
				<li><a href="#" title="">Privacy Policy</a></li>
				<li><a href="#" title="">Community Guidelines</a></li>
				<li><a href="#" title="">Cookies Policy</a></li>
				<li><a href="#" title="">Career</a></li>
				<li><a href="#" title="">Forum</a></li>
				<li><a href="#" title="">Language</a></li>
				<li><a href="#" title="">Copyright Policy</a></li>
			</ul> --}}
			<ul>
				<p><img src="{{ asset('images/copy-icon.png') }}" alt="">Copyright 2018</p>	
			</ul>
		</div>
	</div><!--footy-sec end-->
@stop
