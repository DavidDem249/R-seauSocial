@extends('layouts.master')


@section('header-acceuil')

	@include('../pages.header.header')
	
@endsection

@can('update',$user->profil)
	@section("password_forgot")
	
		<div class="sign-in-page">
			<div class="signin-popup">
				<div class="signin-pop">
					<div class="row">

						<div class="col-lg-7">
							<div class="login-sec">

								<div class="sign_in_sec current" id="tab-1">
										
									<h3>Changer mon mot de passe</h3>
									<form method="post" action="{{ route('password.change',['user' => $user]) }}">

										@csrf

										@if(Session::has('success'))
											<div class="alert alert-success">
												{{ Session::get('success') }}
											</div>
										@endif

										@if(Session::has('erreur'))
											<div class="alert alert-danger">
												{{ Session::get('erreur') }}
											</div>
										@endif    {{-- DTmwNepL --}}

										@if(Session::has('erreur_pass'))
											<div class="alert alert-danger">
												{{ Session::get('erreur_pass') }}
											</div>
										@endif


										<div class="row">
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="password" name="password_old" class="form-control" placeholder="Votre ancien mot de passe">
													<i class="la la-lock"></i>
												</div><!--sn-field end-->
												@if($errors->first('password_old'))
													<p style="color:#CD3F3F;">{{ $errors->first('password_old') }}</p>
												@endif
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="password" name="password" placeholder="Saisir un nouveau mot de passe" class="form-control">
													<i class="la la-lock"></i>
												</div>

												@if($errors->first('password'))
													<p style="color:#CD3F3F;">{{ $errors->first('password') }}</p>
												@endif
											</div>

											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="password" name="password_repeat" placeholder="Répéter le nouveau mot de passe" class="form-control">
													<i class="la la-lock"></i>
												</div>

												@if($errors->first('password_repeat'))
													<p style="color:#CD3F3F;">{{ $errors->first('password_repeat') }}</p>
												@endif
											</div>

											<div class="col-lg-12 no-pdd">
												<div class="checky-sec">
													<!-- 
													<a href="{{ route('auth.view') }}" title="">Se connecter</a> -->
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<button type="submit" value="submit">Changer</button>
											</div>
										</div>
									</form>
								</div>

							</div>

						</div>

						<div class="col-lg-5">
							
							<div class="login-sec">

								<div class="sign_in_sec current" id="tab-1">
										
									<p style="font-weight: bold;font-size: 20px;">Vous devez donner : </p>
									<br><br>
									<ul>
										<li>Un mot de passe d'au moins 8 caractères</li>
									</ul>

								</div>
							</div>
							
						</div>

					</div>
				</div>
			</div>
		</div>

	@stop
@endcan