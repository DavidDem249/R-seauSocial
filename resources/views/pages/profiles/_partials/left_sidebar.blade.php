<div class="main-left-sidebar">
	<div class="user_profile">
		<div class="user-pro-img">
			<!-- <img src="http://via.placeholder.com/170x170" alt=""> -->
			<img src="{{ $user->profil->getPhotoProfile() }}" width="200" alt="Photo de profile">
			@can('update', $user->profil)
				<a href="#" class="box-photo" title="">
					<i class="fa fa-camera"></i>
				</a>
			@endcan
		</div><!--user-pro-img end-->
		<div class="user_pro_status">
			<ul class="flw-hr">
				<li><a href="#" title="" class="flww"><i class="la la-plus"></i> Follow</a></li>
				<li><a href="#" title="" class="hre">Hire</a></li>
			</ul>
			<ul class="flw-status">
				<li>
					<span>Following</span>
					<b>34</b>
				</li>
				<li>
					<span>Followers</span>
					<b>155</b>
				</li>
			</ul>
		</div><!--user_pro_status end-->
		<ul class="social_links">
			{{-- <li><a href="#" title=""><i class="la la-globe"></i> www.example.com</a></li>--}}

			<li><a href="{{ $user->profil->facebook }}" target="_blank" title=""><i class="fa fa-facebook-square"></i> {{ $user->profil->facebook }} </a></li>

			<li><a href="{{ $user->profil->twitter }}" target="_blank" title=""><i class="fa fa-twitter"></i> {{ $user->profil->twitter }}</a></li>

			{{-- <li><a href="#" title=""><i class="fa fa-google-plus-square"></i> Http://www.googleplus.com/john...</a></li> --}}
			{{-- <li><a href="#" title=""><i class="fa fa-behance-square"></i> Http://www.behance.com/john...</a></li> --}}
			{{--<li><a href="#" title=""><i class="fa fa-pinterest"></i> Http://www.pinterest.com/john...</a></li>--}}

			<li>
				<a href="{{ $user->profil->instagram }}" target="_blank" title="">
					<i class="fa fa-instagram"></i> 
					{{ $user->profil->instagram }}
				</a>
			</li>

			{{-- <li><a href="#" title=""><i class="fa fa-youtube"></i> Http://www.youtube.com/john...</a></li> --}}
		</ul>
	</div><!--user_profile end-->
	<div class="suggestions full-width">
		<div class="sd-title">
			<h3>Vos amis</h3>
			<i class="la la-ellipsis-v"></i>
		</div><!--sd-title end-->
		{{--<div class="suggestions-list">
			<div class="suggestion-usd">
				<img src="http://via.placeholder.com/35x35" alt="">
				<div class="sgt-text">
					<h4>Jessica William</h4>
					<span>Graphic Designer</span>
				</div>
				<span><i class="la la-plus"></i></span>
			</div>
			<div class="suggestion-usd">
				<img src="http://via.placeholder.com/35x35" alt="">
				<div class="sgt-text">
					<h4>John Doe</h4>
					<span>PHP Developer</span>
				</div>
				<span><i class="la la-plus"></i></span>
			</div>
			<div class="view-more">
				<a href="#" title="">View More</a>
			</div>
		</div><!--suggestions-list end-->--}}
	</div><!--suggestions end-->
</div>