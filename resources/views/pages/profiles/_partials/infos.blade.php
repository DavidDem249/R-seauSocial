<div class="product-feed-tab" id="info-dd">

	@if(Session::has('success'))
        <div class="alert alert-success" align="center">{{ Session::get('success') }}</div>
    @endif

    @if(Session::has('errors'))
        <div class="alert alert-success" align="center">{{ Session::get('errors') }}</div>
    @endif


	<div class="user-profile-ov">

		<h3>
			<a href="#" title="" class="lct-box-open">Info perso</a> 

			@can('update',$user->profil)
				<a href="#" title="" class="lct-box-open">
					<i class="fa fa-pencil"></i>
				</a> 

				<a href="#" title="">
					<i class="fa fa-plus-square"></i>
				</a>
			@endcan

		</h3>
		<h4 style="background-color: green; color:#fff">Côte d'ivoire</h4>

		<p>Nom: <span style="font-weight: bold;"> {{ $user->nom }}</span></p>
		<p>Prénom: <span style="font-weight: bold;"> {{ $user->prenom }} </span></p>
		<p>Email: <span style="font-weight: bold;"> {{ $user->email }}</span></p>

		@if($user->profil->contact =="")
			<p>Contact: <span style="font-weight: bold;"> ? </span></p>
		@else
			<p>Contact: <span style="font-weight: bold;"> {{ $user->profil->contact }}</span></p>
		@endif
		
		<p>Ville: <span style="font-weight: bold;"> {{ $user->adresse }}</span></p>
		<p>Genre: <span style="font-weight: bold;"> {{ $user->genre }}</span></p>

		@if($user->profil->date_naissance =="")
			<p>Date de naissance: <span style="font-weight: bold;"> ? </span></p>
		@else
			<p>Date de naissance: <span style="font-weight: bold;"> {{ $user->profil->date_naissance }}</span></p>
		@endif

		@if($user->profil->job =="")
			<p>Job: <span style="font-weight: bold;"> ? </span></p>
		@else
			<p>Job: <span style="font-weight: bold;"> {{ $user->profil->job }}</span></p>
		@endif
		
	</div><!--user-profile-ov end-->

	<div class="user-profile-ov">
		<h3><a href="#" title="" class="overview-open">
				Biographie
			</a> 
			@can('update',$user->profil)
				<a href="#" title="" class="overview-open">
					<i class="fa fa-pencil"></i>
				</a>
			@endcan
		</h3>
		@if($user->profil->biographie == "")

			<p> ? </p>

		@else

			<p>{{ $user->profil->biographie }}</p>

		@endif

	</div><!--user-profile-ov end-->

	<div class="user-profile-ov">
		<h3>
			<a href="#" title="" class="skills-open">
				Infos familiale
			</a> 
			@can('update',$user->profil)
				<a href="#" title="" class="skills-open">
					<i class="fa fa-pencil"></i>
				</a> 
				<a href="#">
					<i class="fa fa-plus-square"></i>
				</a>
			@endcan
		</h3>

		@if($user->genre == "Masculin")

			@if($user->profil->nom_prenom_pere == "" and $user->nom_prenom_mere == "")

				<p>Fils de <span style="font-weight: bold;"> ? </span> et de <span style="font-weight: bold;"> ? </span></p>

			@else

				<p>Fils de <span style="font-weight: bold;"> {{ $user->profil->nom_prenom_pere }}</span> et de <span style="font-weight: bold;">{{ $user->profil->nom_prenom_mere }}</span></p>

			@endif

		@else

			@if($user->profil->nom_prenom_pere == "" and $user->nom_prenom_mere == "")

				<p>Fille de <span style="font-weight: bold;"> ? </span> et de <span style="font-weight: bold;"> ? </span></p>

			@else

				<p>Fille de <span style="font-weight: bold;"> {{ $user->profil->nom_prenom_pere }}</span> et de <span style="font-weight: bold;">{{ $user->profil->nom_prenom_mere }} </span></p>

			@endif

		@endif

		{{-- @if($user->nom_prenom_pere == "")
			<p>Nom & Prénom du Père  :  <span style="font-weight: bold;"> ? </span></p><br><br>
		@else
			<p>Nom & Prénom du Père  :  <span style="font-weight: bold;">{{ $user->nom_prenom_pere }}</span></p><br><br>
		@endif

		@if($user->nom_prenom_mere == "")
			<p>Nom & Prénom Maman  :  <span style="font-weight: bold;"> ? </span></p><br><br>
		@else
			<p>Nom & Prénom   :  <span style="font-weight: bold;">{{ $user->nom_prenom_mere }}</span></p><br><br>
		@endif

		
		<p>Nom & Prénom de votre Mère  :  <span style="font-weight: bold;">Traoré Aoua</span></p> --}}
	</div><!--user-profile-ov end-->


	{{--<div class="user-profile-ov st2">
		<h3>
			<a href="#" title="" class="exp-bx-open">
				Experience 
			</a>
			@can('update',$user->profil)
				<a href="#" title="" class="exp-bx-open">
					<i class="fa fa-pencil"></i>
				</a> 
				<a href="#" title="" class="exp-bx-open">
					<i class="fa fa-plus-square"></i>
				</a>
			@endcan
		</h3>
		<h4>Développeur Python 
			<a href="#" title="">
				@can('update',$user->profil)
					<i class="fa fa-pencil"></i>
				@endcan
			</a></h4>
		<p>Je suis dans le développement python dépuit 2016 et<br> 
			J'ai réalisé plus de 10 projets dans le domaine web <br>
		et 3 logiciels desktops. </p>
		
	</div><!--user-profile-ov end--> --}}
	{{--<div class="user-profile-ov">
		<h3>
			<a href="#" title="" class="ed-box-open">
				Education
			</a> 
			@can('update',$user->profil)
				<a href="#" title="" class="ed-box-open">
					<i class="fa fa-pencil"></i>
				</a> 
				<a href="#" title="">
					<i class="fa fa-plus-square"></i>
				</a>
			@endcan
		</h3>
		<h4>BEPC au Collège la Maison de Bambi</h4>
		<span>2012 - 2013</span>
		<p>J'ai eu mon BEPC en 2013 au collège de la maison de bambi avec Mention très bien !</p>
	</div><!--user-profile-ov end--> --}}
</div>