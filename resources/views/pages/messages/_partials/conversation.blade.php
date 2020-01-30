<div class="col-lg-8 col-md-12 pd-right-none pd-left-none">
	<div class="main-conversation-box">
		<div class="message-bar-head">
			<div class="usr-msg-details">
				<div class="usr-ms-img">
					<!-- <img src="http://via.placeholder.com/50x50" alt=""> -->
					<img src="{{ asset('storage' . '/' . $user->profil->avatar) }}" alt="">
				</div>
				<div class="usr-mg-info">
					<h3> {{ $user->nom }} {{ $user->prenom }} </h3>
					{{--<p>Online</p> --}}
					<span class="badge badge-pill badge-success"><center>.</center></span>
				</div><!--usr-mg-info end-->
			</div>
			<a href="#" title=""><i class="fa fa-ellipsis-v"></i></a>
		</div><!--message-bar-head end-->
		<div class="messages-line">
			<div class="main-message-box">
				{{-- <div class="messg-usr-img">
					<img src="http://via.placeholder.com/50x50" alt="">
				</div><!--messg-usr-img end--> --}}
				<div class="message-dt">
					<div class="message-inner-dt img-bx">
						<img src="http://via.placeholder.com/151x125" alt="">
						<img src="http://via.placeholder.com/151x125" alt="">
						<img src="http://via.placeholder.com/151x125" alt="">
					</div><!--message-inner-dt end-->
				</div><!--message-dt end-->
			</div><!--main-message-box end-->
			
			{{-- {{ $message->from->id !== $user->id ? 'Moi': $message->from->nom }} --}}
			@foreach(array_reverse($messages->items()) as $message)
				@if($message->from->id == $user->id) 
					<div class="main-message-box st3">
						<div class="message-dt st3">
							<div class="message-inner-dt">
								<p>{!! nl2br(e($message->content)) !!}</p>
							</div><!--message-inner-dt end-->
							<span>
								{{
								Carbon\Carbon::parse($message->created_at)->diffForHumans() 
								}}
							</span>
						</div><!--message-dt end-->
						<div class="messg-usr-img">
							<!-- <img src="http://via.placeholder.com/50x50" alt=""> -->
							<img src="{{ asset('storage') . '/' . $user->profil->avatar }}" alt="">
						</div><!--messg-usr-img end-->
					</div><!--main-message-box end-->
				@else
					<div class="main-message-box ta-right">
						<div class="message-dt" style="margin-left: 370px;">
							<div class="message-inner-dt">
								<p>{!! nl2br(e($message->content)) !!}</p>
							</div><!--message-inner-dt end-->
							<span>{{Carbon\Carbon::parse($message->created_at)->diffForHumans() }}</span>
						</div><!--message-dt end-->
						<div class="messg-usr-img">
							<!-- <img src="http://via.placeholder.com/50x50" alt=""> -->
							<img src="{{ asset('storage') . '/' . $userConnect->profil->avatar }}" alt="">
						</div><!--messg-usr-img end-->
					</div><!--main-message-box end--> 

				@endif
			@endforeach
		</div><!--messages-line end-->
		<div class="message-send-area">
			<form method="POST" action="" enctype="">
				@csrf
				<div class="mf-field">
					<input type="text" name="message" placeholder="Taper votre message...">
					<button type="submit">Envoyer</button>
				</div>
				<ul>
					<li><a href="#" title=""><i class="fa fa-smile-o"></i></a></li>
					<li><a href="#" title=""><i class="fa fa-camera"></i></a></li>
					<li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
				</ul>
			</form>
		</div><!--message-send-area end-->
	</div><!--main-conversation-box end-->
</div>