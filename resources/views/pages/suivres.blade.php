{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('user_suivi_id', 'User_suivi_id:') !!}
			{!! Form::text('user_suivi_id') !!}
		</li>
		<li>
			{!! Form::label('user_suiveur_id', 'User_suiveur_id:') !!}
			{!! Form::text('user_suiveur_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}