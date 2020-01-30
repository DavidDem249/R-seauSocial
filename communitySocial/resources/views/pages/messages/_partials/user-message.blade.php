<div class="col-lg-4 col-md-12 no-pdd">
	<div class="msgs-list">
		<div class="msg-title">
			<h3>Messages</h3>
			<ul>
				<li><a href="#" title=""><i class="fa fa-cog"></i></a></li>
				<li><a href="#" title=""><i class="fa fa-ellipsis-v"></i></a></li>
			</ul>
		</div><!--msg-title end-->
		<div class="messages-list">
			@foreach($users as $user)
				<a class="list-group-item d-flex justify-content-between align-items-center" href="{{ route('conversation.show', $user->id) }}">
					<ul>
						<!-- <li class="active"> -->
						<li class="active">
							<div class="usr-msg-details">
								<div class="usr-ms-img">
									<!-- <img src="http://via.placeholder.com/50x50" alt=""> -->
									@if($user->profil->avatar != "")
										<img src="{{ asset('storage') . '/' . $user->profil->avatar }}" width="50" alt="">
									@else
										<img src="{{ asset('storage/avatars-profil/default.png') }}" alt="">
									@endif 
									<span class="msg-status"></span>
								</div>
								<div class="usr-mg-info">
									<h3>{{ $user->nom }} {{ $user->prenom }}</h3>
									{{-- <p>My message</p> --}}
								</div><!--usr-mg-info end-->
								{{-- <span class="posted_time">1:55 PM</span> --}}

								@if(isset($unread[$user->id]))
									<span class="msg-notifc">{{ $unread[$user->id] }}</span>
								@endif
							</div><!--usr-msg-details end-->
						</li>
						
					</ul> 
				</a>
			@endforeach
		</div><!--messages-list end-->
	</div><!--msgs-list end-->
</div>