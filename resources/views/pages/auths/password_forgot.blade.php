@extends('pages.auths._partials.master')

@section("password_forgot")

	<div class="sign_in_sec current" id="tab-1">
			
		<h3>Mot de passe oublié</h3>
		<form method="post" action="{{ route('password.recup') }}">

			@csrf

			@if(Session::has('success'))
				<div class="alert alert-success">
					{{ Session::get('success') }}
				</div>
			@endif

			@if(Session::has('errors'))
				<div class="alert alert-danger">
					{{ Session::get('errors') }}
				</div>
			@endif

			<div class="row">
				<div class="col-lg-12 no-pdd">
					<div class="sn-field">
						<input type="email" name="email" class="form-control" placeholder="Votre adresse email">
						<i class="la la-envelope"></i>
					</div><!--sn-field end-->
				</div>
				{{-- <div class="col-lg-12 no-pdd">
					<div class="sn-field">
						<input type="password" name="password" placeholder="Password">
						<i class="la la-lock"></i>
					</div>
				</div> --}}
				<div class="col-lg-12 no-pdd">
					<div class="checky-sec">
						
						<a href="{{ route('auth.view') }}" title="">Se connecter</a>
					</div>
				</div>
				<div class="col-lg-12 no-pdd">
					<button type="submit" value="submit">Valider</button>
				</div>
			</div>
		</form>
	</div>

@stop