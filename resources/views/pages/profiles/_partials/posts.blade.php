
<div class="product-feed-tab current" id="feed-dd">
	<div class="posts-section">
		@foreach($posts as $post)
			<div class="post-bar">
				<div class="post_topbar">
					<div class="usy-dt">
						<!-- <img src="http://via.placeholder.com/50x50" alt=""> -->
						<img src="{{ asset('storage' . '/' . getAuteurPhoto($post->user_id)) }}" width="50" height="50" alt="">

						<div class="usy-name">
							<h3>{{ $post->user->nom }}  {{ $post->user->prenom }}</h3>
							<span>
								<img src="{{ asset('images/clock.png') }}" alt="">
								{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
							</span>
						</div>
					</div>
					@can('update',$user->profil)
						<div class="ed-opts">
							<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
							<ul class="ed-options">
								<li><a href="#" title="">Modifier</a></li>
								<li><a href="#" title="">Supprimer</a></li>
								<li><a href="#" title="">Desactiver</a></li>
								{{-- <li><a href="#" title="">Ferme</a></li>
								<li><a href="#" title="">Fermer</a></li> --}}
							</ul>
						</div>
					@endcan
				</div>
				<div class="epi-sec">
					<ul class="descp">
						<li><img src="{{ asset('images/icon8.png') }}" alt="">
							<span>{{ $user->profil->job }}</span>
						</li>
						<li>
							<img src="{{ asset('images/icon9.png') }}" alt="">
							<span>{{ $user->adresse }}</span>
						</li>
					</ul>
					{{-- <ul class="bk-links">
						<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
						<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
						<li><a href="#" title="" class="bid_now">Bid Now</a></li>
					</ul> --}}
				</div>
				<div class="job_descp">
					<h3>{{ $post->title }}</h3>

					<p>
						@if(strlen($post->content) >= 600)
							{{ substr($post->content, 0, 100). "..." }}
							<br>
							<a href="#" title="">voir plus</a>
						@else
							{{ $post->content }}
							<br><br/>
						@endif

						@if($post->photo != "")
							<img src="{{ asset('storage' . '/' . $post->photo) }}" width="500" height="200">
						@endif

						@if($post->video != "")
							<video title="{{ $post->title }}" width="100%" preload="auto" autoplay controls>

								<source src="{{ asset('files') . '/' .$post->video}}" type="video/mp4">
								<source src="{{ asset('files') . '/' .$post->video}}" type="video/ogg">
								<source src="{{ asset('files') . '/' .$post->video}}" type="video/webm">

							</video>
						@endif
						
					</p>
					
				</div>
				<div class="job-status-bar">
					<ul class="like-com">
						<li>
							<a href="#"><i class="la la-heart"></i> Like</a>
							<img src="{{ asset('images/liked-img.png') }}" alt="">
							<span>25</span>
						</li> 
						<li><a href="#" title="" class="com"><img src="{{ asset('images/com.png') }}" alt=""> Comment 15</a></li>
					</ul>
					<a><i class="la la-eye"></i>Views 50</a>
				</div>
			</div><!--post-bar end-->
		@endforeach
		<div class="process-comm">
			<div class="spinner">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
			<!-- <a href="#" title=""><img src="{{ asset('images/process-icon.png') }}" alt=""></a> -->
		</div><!--process-comm end-->
	</div><!--posts-section end-->
</div>

