<header>
	<div class="container">
		<div class="header-data">
			<div class="logo">
				<a href="{{ route('index') }}" title="">
					{{-- <img src="{{ asset('images/logo.png') }}" alt=""> --}}
				</a>
			</div><!--logo end-->
			<div class="search-bar">
				<form>
					<input type="text" name="search" placeholder="Search...">
					<button type="submit"><i class="la la-search"></i></button>
				</form>
			</div><!--search-bar end-->
			<nav>
				<ul>
					<li>
						<a href="{{ route('index') }}" title="">
							<span><img src="{{ asset('images/icon1.png') }}" alt=""></span>
							Home
						</a>
					</li>
					{{--<li>
						<a href="companies.html" title="">
							<span><img src="{{ asset('images/icon2.png') }}" alt=""></span>
							Companies
						</a>
						<ul>
							<li><a href="companies.html" title="">Companies</a></li>
							<li><a href="company-profile.html" title="">Company Profile</a></li>
						</ul>
					</li>
					<li>
						<a href="projects.html" title="">
							<span><img src="{{ asset('images/icon3.png') }}" alt=""></span>
							Projects
						</a>
					</li> --}}
					<li>
						<a href="" title="">
							<span>
								<img src="{{ asset('images/icon4.png') }}" alt="">
							</span>
							Profiles
						</a>
						<ul>
							<li>
								<a href="{{ route('profile',['user' => $userConnect]) }}">Mon profile
								</a>
							</li>

							<li>
								<a href="{{ route('users.profiles') }}" title="">Tous les profiles</a>
							</li>
							<!-- <li><a href="my-profile-feed.html" title="">my-profile-feed</a></li> -->
						</ul>
					</li>
					{{-- <li>
						<a href="jobs.html" title="">
							<span><img src="{{ asset('images/icon5.png') }}" alt=""></span>
							Jobs
						</a>
					</li> --}}
					<li>
						<a href="#" title="" class="not-box-open">
							<span><img src="{{ asset('images/icon6.png') }}" alt=""></span>
							Messages
						</a>
						<div class="notification-box msg">
							<div class="nt-title">
								<h4>Setting</h4>
								<a href="#" title="">Clear all</a>
							</div>
							<div class="nott-list">
								{{-- 
				  				<div class="notfication-details">
					  				<div class="noty-user-img">
					  					<img src="{{ asset('images/resources/ny-img2.png') }}" alt="">
					  				</div>
					  				<div class="notification-info">
					  					<h3><a href="messages.html" title="">Jassica William</a></h3>
					  					<p>Lorem ipsum dolor sit amet.</p>
					  					<span>2 min ago</span>
					  				</div><!--notification-info -->
				  				</div>
				  				<div class="notfication-details">
					  				<div class="noty-user-img">
					  					<img src="{{ asset('images/resources/ny-img3.png') }}" alt="">
					  				</div>
					  				<div class="notification-info">
					  					<h3><a href="messages.html" title="">Jassica William</a></h3>
					  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
					  					<span>2 min ago</span>
					  				</div><!--notification-info -->
				  				</div>
				  				--}}
				  				<div class="view-all-nots">
				  					<a href="{{ route('message.create') }}" title="">Voir les messages</a>
				  				</div>
							</div><!--nott-list end-->
						</div><!--notification-box end-->
					</li>
					<li>
						<a href="#" title="" class="not-box-open">
							<span><img src="{{ asset('images/icon7.png') }}" alt=""></span>
							Notification
						</a>
						<div class="notification-box">
							<div class="nt-title">
								<h4>paramètres</h4>
								<a href="#" title="">effacer</a>
							</div>
							<div class="nott-list">
							{{--
				  				<div class="notfication-details">
					  				<div class="noty-user-img">
					  					<img src="{{ asset('images/resources/ny-img3.png') }}" alt="">
					  				</div>
					  				<div class="notification-info">
					  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
					  					<span>2 min ago</span>
					  				</div><!--notification-info -->
				  				</div>
				  				<div class="notfication-details">
					  				<div class="noty-user-img">
					  					<img src="{{ asset('images/resources/ny-img2.png') }}" alt="">
					  				</div>
					  				<div class="notification-info">
					  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
					  					<span>2 min ago</span>
					  				</div><!--notification-info -->
				  				</div>
				  			--}}
				  				<div class="view-all-nots">
				  					<a href="#" title="">Voir les notifications</a>
				  				</div>
							</div><!--nott-list end-->
						</div><!--notification-box end-->
					</li>
				</ul>
			</nav><!--nav end-->
			<div class="menu-btn">
				<a href="#" title=""><i class="fa fa-bars"></i></a>
			</div><!--menu-btn end-->
			<div class="user-account">
				<div class="user-info">
					<!-- <img src="http://via.placeholder.com/30x30" alt=""> -->
					<img src="{{ $userConnect->profil->getPhotoProfile() }}" width="30" height="30" alt="">
					<a href="#" title="">{{ $userConnect->prenom }}</a>
					<i class="la la-sort-down"></i>
				</div>
				<div class="user-account-settingss">
					<h3>Status</h3>
					<ul class="on-off-status">

						<li>
							<div class="fgt-sec">
								<input type="radio" name="cc" id="c5">
								<label for="c5">
									<span></span>
								</label>
								<small>Compte Actif</small>
							</div>
						</li>

						{{-- <li>
							<div class="fgt-sec">
								<input type="radio" name="cc" id="c6">
								<label for="c6">
									<span></span>
								</label>
								<small>Offline</small>
							</div>
						</li> --}}
					</ul>
					<h3>Autres action</h3>
					<div class="search_form">
						<form>
							<input type="text" name="search" placeholder="Récherche">
							<button type="submit">Ok</button>
						</form>
					</div><!--search_form end-->
					<h3 style="color:white;background-color: #e44d3a;">Paramètres</h3>
					<ul class="us-links">
						<li><a href="#" title="">Profile</a></li>
						<!-- <li><a href="#" title="">Données privées</a></li> -->
						<li><a href="{{ route('pass.change',['user' => $user]) }}" title="">Changer mot de passe</a></li>
						<!-- <li><a href="#" title=""></a></li> -->
						<li><a href="#" title="">Termes & Conditions</a></li>
					</ul>
					<h3 class="tc" style="color:white;background-color: #e44d3a;"><a href="{{ route('logout') }}" style="color:white;">Déconnexion</a></h3>
				</div><!--user-account-settingss end-->
			</div>
		</div><!--header-data end-->
	</div>
</header>