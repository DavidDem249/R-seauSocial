@extends("../layouts.master")


@section('header-acceuil')
	
	@include('pages.header/header')
	
@stop

@section("section_gauche")

	<div class="col-lg-3 col-md-4 pd-left-none no-pd">
		<div class="main-left-sidebar no-margin">
			<div class="user-data full-width">
				<div class="user-profile">
					<div class="username-dt">
						<div class="usr-pic">
							<!-- <img src="http://via.placeholder.com/100x100" alt=""> -->
							<img src="{{ $user->profil->getPhotoProfile() }}" width="100" alt="Photo de profile">
						</div>
					</div><!--username-dt end-->
					<div class="user-specs">
						<h3>{{ $user->nom }} {{ $user->prenom }} </h3>
						<span style="color: blue">{{ $user->job }}</span>
					</div>
				</div><!--user-profile end-->
				<ul class="user-fw-status">
					<li>
						<h4>Utilisateurs suivi</h4>
						<span>?</span>
					</li>
					<li>
						<h4>Suivi par</h4>
						<span>?</span>
					</li>
					<li>
						<a href="{{ route('profile',['user' => $user]) }}" title="">Voir Profile</a>
					</li>
				</ul>
			</div><!--user-data end-->
			<div class="suggestions full-width">
				<div class="sd-title">
					<h3>Suggestions</h3>
					<i class="la la-ellipsis-v"></i>
				</div><!--sd-title end-->
					<div class="suggestions-list">
						@foreach($familles as $famil)
							@if($famil->id != $user->id)
								<div class="suggestion-usd">
									<!-- <img src="http://via.placeholder.com/35x35" alt=""> -->
									@if($famil->profil->avatar == "")
										<img src="{{ asset('storage/avatars-profil/default.png') }}" width="35" alt="">
									@else
										<img src="{{ asset('storage' . '/' . getAuteurPhoto($famil->profil->user_id)) }}" width="35" alt="">
									@endif
									<div class="sgt-text">
										<h4>{{ $famil->nom }} {{ $famil->prenom }}</h4>
										{{--<span>{{ $famil->profil->job }}</span>--}}
									</div>
									<span><i class="la la-plus"></i></span>
								</div>
							@endif
						@endforeach
						<div class="view-more">
							<a href="#" title="">Voir plus</a>
						</div>
					</div><!--suggestions-list end-->
				
			</div><!--suggestions end-->
			{{-- 
				<div class="tags-sec full-width">
				
					<div class="cp-sec">
						<p><img src="images/cp.png" alt="">Copyright 2018</p>
					</div>
				</div><!--tags-sec end--> 
			--}}
		</div><!--main-left-sidebar end-->
	</div>
	
							
@stop

@section("main-ws-sec")
	
	<div class="col-lg-6 col-md-8 no-pd">
		<div class="main-ws-sec">
			<div class="post-topbar">
				<div class="user-picy">
					<!-- <img src="http://via.placeholder.com/100x100" alt=""> -->
					<img src="{{ $user->profil->getPhotoProfile() }}" width="100" alt="Photo de profile">
				</div>
				<div class="post-st">
					<ul>
						<!-- <li><a class="post-pub active" href="#" title="">Exprimez-vous</a></li> -->
						<li><a class="post_project active" href="#" title="">Exprimez-vous</a></li>
						<li><a class="post-jb " href="#" title="">Un Jobs</a></li>
					</ul>
				</div><!--post-st end-->
			</div><!--post-topbar end-->
			<div class="posts-section">
				@foreach($posts as $post)
					<div class="post-bar">
						<div class="post_topbar">
							<div class="usy-dt">
								<!-- <img src="http://via.placeholder.com/50x50" alt=""> -->
								<img src="{{ asset('storage' . '/' . getAuteurPhoto($post->user_id)) }}" width="50" height="50" alt="">
								<div class="usy-name"> 
									<h3>{{ getAuteurNom($post->user->id) }} {{ getAuteurPrenom($post->user->id) }}</h3>
									<span>
										<img src="images/clock.png" alt="">
										{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
									</span>
								</div>
							</div>
							<div class="ed-opts">
								<a href="#" title="" class="ed-opts-open">
									<i class="la la-ellipsis-v"></i>
								</a>
								@if($user->id == $post->user_id)
									<ul class="ed-options">
										<li><a href="#" title="">Modifier</a></li>
										<li><a href="#" title="">Supprimer</a></li>
										<li><a href="#" title="">Desactiver</a></li>
										{{-- <li><a href="#" title="">Close</a></li>
										<li><a href="#" title="">Fermer</a></li> --}}
									</ul>
								@endcan
							</div>
						</div>
						<div class="epi-sec">
							<ul class="descp">
								<li>
									<img src="images/icon8.png" alt="">
									<span>{{ getAuteurJob($post->user->id) }}</span>
								</li>
								<li>
									<img src="images/icon9.png" alt="">
									<span> {{ getAuteurVille($post->user_id) }} </span>
								</li>
							</ul>
							<ul class="bk-links">
								<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
								<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
							</ul>
						</div>
						<div class="job_descp">
							<h3>{{ $post->title }}</h3>
							<p title="{{ $post->content }}" class="pa1">
								@if(strlen($post->content) >= 100)
									{{ substr($post->content, 0, 100). "..." }}
									<br>
									<a href="#" class="lien_{{ $post->id }}" title="">voir plus</a>
								@else
									{{ $post->content }}
									<br><br/>
								@endif

								@if($post->photo != "")
									<br><br>
									<img src="{{ asset('storage' . '/' . $post->photo) }}" width="100%">
								@endif

								@if($post->video != "")
									<video title="{{ $post->video }}" width="100%" preload="auto" autoplay controls>

										<source src="{{ asset('files') . '/' .$post->video}}" type="video/mp4">
										<source src="{{ asset('files') . '/' .$post->video}}" type="video/ogg">
										<source src="{{ asset('files') . '/' .$post->video}}" type="video/webm">

									</video>
								@endif
							</p>
							<p title="{{ $post->content }}" class="pa2">
							
								{{ $post->content }}
								<br><br/>

								@if($post->photo != "")
									<br><br>
									<img src="{{ asset('storage' . '/' . $post->photo) }}" width="100%">
								@endif

								@if($post->video != "")
									<video title="{{ $post->title }}" width="100%" preload="none" controls>

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
									<img src="images/liked-img.png" alt="">
									<span>25</span>
								</li> 
								<li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 15</a></li>
							</ul>
							<a><i class="la la-eye"></i>Views 50</a>
						</div>
					</div><!--post-bar end-->
				@endforeach

				{{ $posts->links() }}

				<div class="top-profiles">
					<div class="pf-hd">
						<h3>Top Profiles</h3>
						<i class="la la-ellipsis-v"></i>
					</div>
					<div class="profiles-slider">

						@foreach($users as $user0)

							@if($user0->id != $user->id)
								<div class="user-profy">
									<!-- <img src="http://via.placeholder.com/57x57" alt=""> -->
									@if($user0->profil->avatar == "")
										<img src="{{ asset('storage/avatars-profil/default.png') }}" width="57" alt="">
									@else
										<img src="{{ asset('storage' . '/' . $user0->profil->avatar) }}" width="57" alt="">
									@endif

									<h3>{{ $user0->nom }} {{ $user0->prenom }}</h3>

									{{-- @if($user->profil->job == "")
										<h4 style="color: red"> Pas de job indiqué  </h4>
									@else
										<h4>{{ $user->profil->job }}</h4>
									@endif --}}

									<ul>
										<li><a href="#" title="" class="followw">Suivre</a></li>
										<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
										<li><a href="#" title="" class="hire">Invité</a></li>
									</ul>
									<a href="{{ route('voir.profile',['user' => $user0]) }}">Voir profile</a>
								</div><!--user-profy end-->
							@endif
						@endforeach

					</div><!--profiles-slider end-->
				</div><!--top-profiles end-->
				
				
				<div class="process-comm">
					<div class="spinner">
						<div class="bounce1"></div>
						<div class="bounce2"></div>
						<div class="bounce3"></div>
					</div>
				</div><!--process-comm end-->
			</div><!--posts-section end-->
		</div><!--main-ws-sec end-->
	</div> 

@stop

@section("section_droit")

	<div class="col-lg-3 pd-right-none no-pd">
		<div class="right-sidebar">
			
			<div class="widget widget-jobs">
				<div class="sd-title">
					<h3>Top Jobs</h3>
					<i class="la la-ellipsis-v"></i>
				</div>
				<div class="jobs-list">
					<div class="job-info">
						<div class="job-details">
							<h3>Maître de maison</h3>
							<p>Besoins d'un répetiteur..</p>
						</div>
						<div class="hr-rate">
							<span>$25/heure</span>
						</div>
					</div><!--job-info end-->
					<div class="job-info">
						<div class="job-details">
							<h3>Développeur</h3>
							<p>Création d'un site vitrine pour une entreprise..</p>
						</div>
						<div class="hr-rate">
							<span>$250/heure</span>
						</div>
					</div><!--job-info end-->
				</div><!--jobs-list end-->
			</div><!--widget-jobs end-->
			
			<div class="widget suggestions full-width">
				<div class="sd-title">
					<h3>Personnes les plus suivies</h3>
					<i class="la la-ellipsis-v"></i>
				</div><!--sd-title end-->
				<div class="suggestions-list">
					@foreach($users as $user)
						<div class="suggestion-usd">
							<!-- <img src="http://via.placeholder.com/35x35" alt=""> -->
							@if($user->profil->avatar == "")
								<img src="{{ asset('storage/avatars-profil/default.png') }}" width="35" alt="">
							@else
								<img src="{{ asset('storage' . '/' . $user->profil->avatar) }}" width="35" alt="">
							@endif

							<div class="sgt-text">
								<h4>{{ $user->nom }} {{ $user->prenom }}</h4>
								{{-- <span>{{ $user->profil->job }}</span> --}}
							</div>
							<span><i class="la la-plus"></i></span>
						</div>
					@endforeach
				</div><!--suggestions-list end-->
			</div>
		</div><!--right-sidebar end-->
	</div> 

@stop

{{-- 
@section("form-post")
	@include('pages.posts.create')
@stop
--}}

@section("form-post")
	@include('pages.posts.create')
@stop


@section("form-post-jobs")
	@include('pages.jobs.create')
@stop



