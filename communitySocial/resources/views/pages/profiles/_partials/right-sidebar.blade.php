<div class="right-sidebar">
	<div class="message-btn">
		<a href="#" title=""><i class="fa fa-envelope"></i> Message</a>
	</div>
	<div class="widget widget-portfolio">
		<div class="wd-heady">
			<h3>Galerie photo</h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			@can('update', $user->profil)
				<a href="#" class="box-photo-galery" title="">
					<i class="fa fa-camera"></i>
					<!-- <img src="{{ asset('images/photo-icon.png') }}" alt=""> -->
				</a>
			@endcan
			<!-- <img src="{{ asset('images/photo-icon.png') }}" alt=""> -->
		</div>
		<div class="pf-gallery">
			<ul>
				<!-- <li>
					<a href="#" title=""><img src="http://via.placeholder.com/70x70" alt="">
					</a>
				</li> -->
				@foreach($photos as $photo)
					<li>
						<a href="#" title="">
							<img src="{{ asset('storage') .  '/' . $photo->photo_galerie}}" alt="" width="70">
						</a>
					</li>
				@endforeach
				<!-- <li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
				<li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
				<li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
				<li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
				<li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
				<li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
				<li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
				<li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
				<li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
				<li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li>
				<li><a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a></li> -->
			</ul>
		</div><!--pf-gallery end-->
	</div><!--widget-portfolio end-->
</div>