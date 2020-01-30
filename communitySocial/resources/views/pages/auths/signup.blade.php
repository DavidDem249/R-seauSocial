<div class="sign_in_sec" id="tab-2">
	<div class="signup-tab">
		<i class="fa fa-long-arrow-left"></i>
		<h2>Inscription</h2>
		<ul>
			<li data-tab="tab-3" class="current"><a href="#" title="">Utilisateur</a></li>
			{{-- <li data-tab="tab-4"><a href="#" title="">Company</a></li> --}}
		</ul>
	</div><!--signup-tab end-->	
	<div class="dff-tab current" id="tab-3">
		<form method="POST" action="{{ route('register') }}">

			@csrf 
			
			<div class="row">
				<div class="col-lg-12 no-pdd">
					<div class="sn-field">
						<input type="text" name="nom" class="form-control" placeholder="Nom" value="{{ old('nom') }}">
						<i class="la la-user"></i>
					</div>

					@if($errors->first('nom'))
						<p style="color:#CD3F3F;">{{ $errors->first('nom') }}</p>
					@endif
				</div>
				<div class="col-lg-12 no-pdd">
					<div class="sn-field">
						<input type="text" name="prenom" class="form-control" placeholder="Prénom" value="{{ old('prenom') }}">
						<i class="la la-user"></i>
					</div>

					@if($errors->first('prenom'))
						<p style="color:#CD3F3F;">{{ $errors->first('prenom') }}</p>
					@endif
				</div>
				<div class="col-lg-12 no-pdd">
					<div class="sn-field">
						<input type="text" name="adresse" class="form-control" placeholder="Votre ville" value="{{ old('adresse') }}">
						<i class="la la-map"></i>
					</div>

					@if($errors->first('adresse'))
						<p style="color:#CD3F3F;">{{ $errors->first('adresse') }}</p>
					@endif
				</div>
				<div class="col-lg-12 no-pdd">
					<div class="sn-field">
						<select name="genre" class="form-control">
							<option value="">Genre</option>
							<option value="Masculin">Masculin</option>
							<option value="Féminin">Féminin</option>
							<option value="Autre">Autre</option>
						</select>
						<i class="la la-dropbox"></i>
						<span><i class="fa fa-ellipsis-h"></i></span>
					</div>

					@if($errors->first('genre'))
						<p style="color:#CD3F3F;">{{ $errors->first('genre') }}</p>
					@endif
				</div>
				
				<div class="col-lg-12 no-pdd">
					<div class="sn-field">
						<input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
						<i class="la la-envelope"></i>
					</div>

					@if($errors->first('email'))
						<p style="color:#CD3F3F;">{{ $errors->first('email') }}</p>
					@endif
				</div>

				{{-- <div class="col-lg-12 no-pdd">
					<div class="sn-field">
						<input type="date" name="date_naiss" placeholder="Votre date de naissance">
						<i class="la la-date"></i>
					</div>
				</div> --}}

				<div class="col-lg-12 no-pdd">
					<div class="sn-field">
						<input type="password" name="password" class="form-control" placeholder="Mot de passe" value="">
						<i class="la la-lock"></i>
					</div>

					@if($errors->first('password'))
						<p style="color:#CD3F3F;">{{ $errors->first('password') }}</p>
					@endif
				</div>
				<div class="col-lg-12 no-pdd">
					<div class="sn-field">
						<input type="password" name="password_conf" class="form-control" placeholder="Confirmé mot de passe" value="">
						<i class="la la-lock"></i>
					</div>

					@if($errors->first('password_conf'))
						<p style="color:#CD3F3F;">{{ $errors->first('password_conf') }}</p>
					@endif
				</div>
				{{-- <div class="col-lg-12 no-pdd">
					<div class="checky-sec st2">
						<div class="fgt-sec">
							<input type="checkbox" name="cc" id="c2">
							<label for="c2">
								<span></span>
							</label>
							<small>Yes, I understand and agree to the workwise Terms & Conditions.</small>
						</div><!--fgt-sec end-->
					</div>
				</div> --}}
				<div class="col-lg-12 no-pdd">
					<button type="submit" value="submit">S'inscrire</button>
				</div>
			</div>
		</form>
	</div><!--dff-tab end-->
	{{-- <div class="dff-tab" id="tab-4">
		<form>
			<div class="row">
				<div class="col-lg-12 no-pdd">
					<div class="sn-field">
						<input type="text" name="company-name" placeholder="Company Name">
						<i class="la la-building"></i>
					</div>
				</div>
				<div class="col-lg-12 no-pdd">
					<div class="sn-field">
						<input type="text" name="country" placeholder="Country">
						<i class="la la-globe"></i>
					</div>
				</div>
				<div class="col-lg-12 no-pdd">
					<div class="sn-field">
						<input type="password" name="password" placeholder="Password">
						<i class="la la-lock"></i>
					</div>
				</div>
				<div class="col-lg-12 no-pdd">
					<div class="sn-field">
						<input type="password" name="repeat-password" placeholder="Repeat Password">
						<i class="la la-lock"></i>
					</div>
				</div>
				<div class="col-lg-12 no-pdd">
					<div class="checky-sec st2">
						<div class="fgt-sec">
							<input type="checkbox" name="cc" id="c3">
							<label for="c3">
								<span></span>
							</label>
							<small>Yes, I understand and agree to the workwise Terms & Conditions.</small>
						</div><!--fgt-sec end-->
					</div>
				</div>
				<div class="col-lg-12 no-pdd">
					<button type="submit" value="submit">Get Started</button>
				</div>
			</div>
		</form>
	</div><!--dff-tab end--> --}}
</div>	
