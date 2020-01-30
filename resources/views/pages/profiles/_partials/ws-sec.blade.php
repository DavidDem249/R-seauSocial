<div class="main-ws-sec">
	<div class="user-tab-sec">
		<h3>{{ $user->nom }}  {{ $user->prenom }}</h3>
		<div class="star-descp">
			<span>{{ $user->profil->job }} </span>
			<ul>
				<li><i class="fa fa-star"></i></li>
				<!-- <li><i class="fa fa-star"></i></li> -->
				<li><i class="fa fa-star-half-o"></i></li>
			</ul>
			<!-- <a href="#" title="">Status</a> -->
		</div><!--star-descp end-->
		<div class="tab-feed st2">
			<ul>
				<li data-tab="feed-dd" class="active">
					<a href="#" title="">
						<img src="{{ asset('images/ic1.png') }}" alt="">
						<span>Les postes</span>
					</a>
				</li>
				<li data-tab="info-dd">
					<a href="#" title="">
						<img src="{{ asset('images/ic2.png') }}" alt="">
						<span>Informations</span>
					</a>
				</li>
				<li data-tab="saved-jobs">
					<a href="#" title="">
						<img src="{{ asset('images/ic4.png') }}" alt="">
						<span>Les jobs publiés</span>
					</a>
				</li>
				{{-- <li data-tab="my-bids">
					<a href="#" title="">
						<img src="{{ asset('images/ic5.png') }}" alt="">
						<span>My Bids</span>
					</a>
				</li> --}}
				<li data-tab="portfolio-dd">
					<a href="#" title="">
						<img src="{{ asset('images/ic3.png') }}" alt="">
						<span>Portfolio</span>
					</a>
				</li>
				{{-- <li data-tab="payment-dd">
					<a href="#" title="">
						<img src="{{ asset('images/ic6.png') }}" alt="">
						<span>Payment</span>
					</a>
				</li> --}}
			</ul>

		</div><!-- tab-feed end-->
	</div><!--user-tab-sec end-->
	@include('pages.profiles._partials.posts')
	<!--product-feed-tab end-->
	
	@include('pages.profiles._partials.infos')
	<!--product-feed-tab end-->

	@include('pages.profiles._partials.jobs')
	<!--product-feed-tab end-->

	{{--<div class="product-feed-tab" id="my-bids">
		<div class="posts-section">
			<div class="post-bar">
				<div class="post_topbar">
					<div class="usy-dt">
						<img src="http://via.placeholder.com/50x50" alt="">
						<div class="usy-name">
							<h3>John Doe</h3>
							<span><img src="images/clock.png" alt="">3 min ago</span>
						</div>
					</div>
					<div class="ed-opts">
						<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
						<ul class="ed-options">
							<li><a href="#" title="">Edit Post</a></li>
							<li><a href="#" title="">Unsaved</a></li>
							<li><a href="#" title="">Unbid</a></li>
							<li><a href="#" title="">Close</a></li>
							<li><a href="#" title="">Hide</a></li>
						</ul>
					</div>
				</div>
				<div class="epi-sec">
					<ul class="descp">
						<li><img src="images/icon8.png" alt=""><span>Frontend Developer</span></li>
						<li><img src="images/icon9.png" alt=""><span>India</span></li>
					</ul>
					<ul class="bk-links">
						<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
						<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
						<li><a href="#" title="" class="bid_now">Bid Now</a></li>
					</ul>
				</div>
				<div class="job_descp">
					<h3>Simple Classified Site</h3>
					<ul class="job-dt">
						<li><span>$300 - $350</span></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
					<ul class="skill-tags">
						<li><a href="#" title="">HTML</a></li>
						<li><a href="#" title="">PHP</a></li>
						<li><a href="#" title="">CSS</a></li>
						<li><a href="#" title="">Javascript</a></li>
						<li><a href="#" title="">Wordpress</a></li> 	
						<li><a href="#" title="">Photoshop</a></li> 	
						<li><a href="#" title="">Illustrator</a></li> 	
						<li><a href="#" title="">Corel Draw</a></li> 	
					</ul>
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
			<div class="post-bar">
				<div class="post_topbar">
					<div class="usy-dt">
						<img src="http://via.placeholder.com/50x50" alt="">
						<div class="usy-name">
							<h3>John Doe</h3>
							<span><img src="images/clock.png" alt="">3 min ago</span>
						</div>
					</div>
					<div class="ed-opts">
						<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
						<ul class="ed-options">
							<li><a href="#" title="">Edit Post</a></li>
							<li><a href="#" title="">Unsaved</a></li>
							<li><a href="#" title="">Unbid</a></li>
							<li><a href="#" title="">Close</a></li>
							<li><a href="#" title="">Hide</a></li>
						</ul>
					</div>
				</div>
				<div class="epi-sec">
					<ul class="descp">
						<li><img src="images/icon8.png" alt=""><span>Frontend Developer</span></li>
						<li><img src="images/icon9.png" alt=""><span>India</span></li>
					</ul>
					<ul class="bk-links">
						<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
						<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
						<li><a href="#" title="" class="bid_now">Bid Now</a></li>
					</ul>
				</div>
				<div class="job_descp">
					<h3>Ios Shopping mobile app</h3>
					<ul class="job-dt">
						<li><span>$300 - $350</span></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
					<ul class="skill-tags">
						<li><a href="#" title="">HTML</a></li>
						<li><a href="#" title="">PHP</a></li>
						<li><a href="#" title="">CSS</a></li>
						<li><a href="#" title="">Javascript</a></li>
						<li><a href="#" title="">Wordpress</a></li> 	
						<li><a href="#" title="">Photoshop</a></li> 	
						<li><a href="#" title="">Illustrator</a></li> 	
						<li><a href="#" title="">Corel Draw</a></li> 	
					</ul>
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
			<div class="post-bar">
				<div class="post_topbar">
					<div class="usy-dt">
						<img src="http://via.placeholder.com/50x50" alt="">
						<div class="usy-name">
							<h3>John Doe</h3>
							<span><img src="images/clock.png" alt="">3 min ago</span>
						</div>
					</div>
					<div class="ed-opts">
						<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
						<ul class="ed-options">
							<li><a href="#" title="">Edit Post</a></li>
							<li><a href="#" title="">Unsaved</a></li>
							<li><a href="#" title="">Unbid</a></li>
							<li><a href="#" title="">Close</a></li>
							<li><a href="#" title="">Hide</a></li>
						</ul>
					</div>
				</div>
				<div class="epi-sec">
					<ul class="descp">
						<li><img src="images/icon8.png" alt=""><span>Frontend Developer</span></li>
						<li><img src="images/icon9.png" alt=""><span>India</span></li>
					</ul>
					<ul class="bk-links">
						<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
						<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
						<li><a href="#" title="" class="bid_now">Bid Now</a></li>
					</ul>
				</div>
				<div class="job_descp">
					<h3>Simple Classified Site</h3>
					<ul class="job-dt">
						<li><span>$300 - $350</span></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
					<ul class="skill-tags">
						<li><a href="#" title="">HTML</a></li>
						<li><a href="#" title="">PHP</a></li>
						<li><a href="#" title="">CSS</a></li>
						<li><a href="#" title="">Javascript</a></li>
						<li><a href="#" title="">Wordpress</a></li> 	
						<li><a href="#" title="">Photoshop</a></li> 	
						<li><a href="#" title="">Illustrator</a></li> 	
						<li><a href="#" title="">Corel Draw</a></li> 	
					</ul>
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
			<div class="post-bar">
				<div class="post_topbar">
					<div class="usy-dt">
						<img src="http://via.placeholder.com/50x50" alt="">
						<div class="usy-name">
							<h3>John Doe</h3>
							<span><img src="images/clock.png" alt="">3 min ago</span>
						</div>
					</div>
					<div class="ed-opts">
						<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
						<ul class="ed-options">
							<li><a href="#" title="">Edit Post</a></li>
							<li><a href="#" title="">Unsaved</a></li>
							<li><a href="#" title="">Unbid</a></li>
							<li><a href="#" title="">Close</a></li>
							<li><a href="#" title="">Hide</a></li>
						</ul>
					</div>
				</div>
				<div class="epi-sec">
					<ul class="descp">
						<li><img src="images/icon8.png" alt=""><span>Frontend Developer</span></li>
						<li><img src="images/icon9.png" alt=""><span>India</span></li>
					</ul>
					<ul class="bk-links">
						<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
						<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
						<li><a href="#" title="" class="bid_now">Bid Now</a></li>
					</ul>
				</div>
				<div class="job_descp">
					<h3>Ios Shopping mobile app</h3>
					<ul class="job-dt">
						<li><span>$300 - $350</span></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
					<ul class="skill-tags">
						<li><a href="#" title="">HTML</a></li>
						<li><a href="#" title="">PHP</a></li>
						<li><a href="#" title="">CSS</a></li>
						<li><a href="#" title="">Javascript</a></li>
						<li><a href="#" title="">Wordpress</a></li> 	
						<li><a href="#" title="">Photoshop</a></li> 	
						<li><a href="#" title="">Illustrator</a></li> 	
						<li><a href="#" title="">Corel Draw</a></li> 	
					</ul>
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
			<div class="process-comm">
				<a href="#" title=""><img src="images/process-icon.png" alt=""></a>
			</div><!--process-comm end-->
		</div><!--posts-section end-->
	</div><!--product-feed-tab end--> --}}
	
	@include('pages.profiles._partials.portefolio')
	<!--product-feed-tab end-->
	
	{{-- <div class="product-feed-tab" id="payment-dd">
		<div class="billing-method">
			<ul>
				<li>
					<h3>Add Billing Method</h3>
					<a href="#" title=""><i class="fa fa-plus-circle"></i></a>
				</li>
				<li>
					<h3>See Activity</h3>
					<a href="#" title="">View All</a>
				</li>
				<li>
					<h3>Total Money</h3>
					<span>$0.00</span>
				</li>
			</ul>
			<div class="lt-sec">
				<img src="images/lt-icon.png" alt="">
				<h4>All your transactions are saved here</h4>
				<a href="#" title="">Click Here</a>
			</div>
		</div><!--billing-method end-->
		<div class="add-billing-method">
			<h3>Add Billing Method</h3>
			<h4><img src="images/dlr-icon.png" alt=""><span>With workwise payment protection , only pay for work delivered.</span></h4>
			<div class="payment_methods">
				<h4>Credit or Debit Cards</h4>
				<form>
					<div class="row">
						<div class="col-lg-12">
							<div class="cc-head">
								<h5>Card Number</h5>
								<ul>
									<li><img src="images/cc-icon1.png" alt=""></li>
									<li><img src="images/cc-icon2.png" alt=""></li>
									<li><img src="images/cc-icon3.png" alt=""></li>
									<li><img src="images/cc-icon4.png" alt=""></li>
								</ul>
							</div>
							<div class="inpt-field pd-moree">
								<input type="text" name="cc-number" placeholder="">
								<i class="fa fa-credit-card"></i>
							</div><!--inpt-field end-->
						</div>
						<div class="col-lg-6">
							<div class="cc-head">
								<h5>First Name</h5>
							</div>
							<div class="inpt-field">
								<input type="text" name="f-name" placeholder="">
							</div><!--inpt-field end-->
						</div>
						<div class="col-lg-6">
							<div class="cc-head">
								<h5>Last Name</h5>
							</div>
							<div class="inpt-field">
								<input type="text" name="l-name" placeholder="">
							</div><!--inpt-field end-->
						</div>
						<div class="col-lg-6">
							<div class="cc-head">
								<h5>Expiresons</h5>
							</div>
							<div class="rowwy">
								<div class="row">
									<div class="col-lg-6 pd-left-none no-pd">
										<div class="inpt-field">
											<input type="text" name="f-name" placeholder="">
										</div><!--inpt-field end-->
									</div>
									<div class="col-lg-6 pd-right-none no-pd">
										<div class="inpt-field">
											<input type="text" name="f-name" placeholder="">
										</div><!--inpt-field end-->
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="cc-head">
								<h5>Cvv (Security Code) <i class="fa fa-question-circle"></i></h5>
							</div>
							<div class="inpt-field">
								<input type="text" name="l-name" placeholder="">
							</div><!--inpt-field end-->
						</div>
						<div class="col-lg-12">
							<button type="submit">Continue</button>
						</div>
					</div>
				</form>
				<h4>Add Paypal Account</h4>
			</div>
		</div><!--add-billing-method end-->
	</div><!--product-feed-tab end-->--}}
</div>