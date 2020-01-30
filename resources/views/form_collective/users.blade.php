{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('nom', 'Nom:') !!}
			{!! Form::text('nom') !!}
		</li>
		<li>
			{!! Form::label('prenom', 'Prenom:') !!}
			{!! Form::text('prenom') !!}
		</li>
		<li>
			{!! Form::label('nom_prenom_pere', 'Nom_prenom_pere:') !!}
			{!! Form::text('nom_prenom_pere') !!}
		</li>
		<li>
			{!! Form::label('nom_prenom_mere', 'Nom_prenom_mere:') !!}
			{!! Form::text('nom_prenom_mere') !!}
		</li>
		<li>
			{!! Form::label('contact', 'Contact:') !!}
			{!! Form::text('contact') !!}
		</li>
		<li>
			{!! Form::label('adresse', 'Adresse:') !!}
			{!! Form::text('adresse') !!}
		</li>
		<li>
			{!! Form::label('genre', 'Genre:') !!}
			{!! Form::text('genre') !!}
		</li>
		<li>
			{!! Form::label('date_naissance', 'Date_naissance:') !!}
			{!! Form::text('date_naissance') !!}
		</li>
		<li>
			{!! Form::label('job', 'Job:') !!}
			{!! Form::text('job') !!}
		</li>
		<li>
			{!! Form::label('photo', 'Photo:') !!}
			{!! Form::text('photo') !!}
		</li>
		<li>
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email') !!}
		</li>
		<li>
			{!! Form::label('password', 'Password:') !!}
			{!! Form::text('password') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}