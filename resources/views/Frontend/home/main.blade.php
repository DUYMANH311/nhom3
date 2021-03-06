@extends('layout')
@section('content')
<div class="slider-container rev_slider_wrapper" style="height:530px;">
	<div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8">
		<ul>
			<li data-transition="boxfade">

				<img src="{{asset('public/style/frontend/img/demos/hotel/slides/slide-hotel-1.jpg')}}" alt="" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
			</li>
			<li data-transition="boxfade">

				<img src="{{asset('public/style/frontend/img/demos/hotel/slides/slide-hotel-1.jpg')}}" alt="" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
			</li>
			<li data-transition="boxfade">

				<img src="{{asset('public/style/frontend/img/demos/hotel/slides/slide-hotel-1.jpg')}}" alt="" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
			</li>
		</ul>
	</div>
</div>

<section class="section section-no-background section-no-border m-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">

				<h3 class="mt-4 mb-0 pb-0 text-uppercase">In the Heart of Porto</h3>
				<div class="divider divider-primary divider-small mb-4 mt-0">
					<hr class="mt-2 mr-auto">
				</div>

				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor sit amet. Lorem ipsum dolor sit amet.</p>

				<p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut.</p>

				<a class="btn btn-primary btn-lg text-2 text-uppercase mt-2 mb-4" href="{{asset('public/style/frontend/#">Learn More</a>
							</div>
							<div class="col-lg-4">

								<div class="micro-map box-shadow-custom clearfix">
									<div class="micro-map-map">
										<div id="googleMapsMicro" class="google-map m-0" style="height: 280px;"></div>
									</div>
									<div class="micro-map-info">
										<div class="micro-map-info-detail">
											<i class="icon-location-pin icons text-color-primary"></i>
											<label>address</label>
											<strong>1234 Street Name, Porto, Envato</strong>
											<a href="demo-hotel-location.html" title="">(View Location)</a>
										</div>
										<div class="micro-map-info-detail">
											<i class="icon-phone icons text-color-primary"></i>
											<label>call us</label>
											<strong>(800) 1234-5678</strong>
										</div>
									</div>
								</div>

							</div>
								
						</div>
					</div>
				</section>

				<section class="parallax section section-parallax section-center m-0 section-overlay-opacity section-overlay-opacity-scale-4" >
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center">
								<h3 class="mb-1 mt-0 text-light text-uppercase">Enjoy the best of Porto</h3>
								<p class="lead text-light mb-4">Make your reservation right now with the best price</p>

								<a class="btn btn-primary btn-lg text-2 text-uppercase mt-2" href="demo-hotel-book.html">Book Now</a>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-no-background section-no-border m-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-4">

								<div class="owl-carousel owl-theme dots-inside box-shadow-custom mt-4" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
									<div>
										<img alt="" class="img-fluid" src="public/style/frontend/img/demos/hotel/gallery/gallery-1.jpg">
									</div>
									<div>
										<img alt="" class="img-fluid" src="public/style/frontend/img/demos/hotel/gallery/gallery-2.jpg">
									</div>
								</div>

							</div>
							<div class="col-lg-8">

								<h3 class="mt-4 mb-0 pb-0 text-uppercase">Hotel Overview</h3>
								<div class="divider divider-primary divider-small mb-4 mt-0">
									<hr class="mt-2 mr-auto">
								</div>

								<p class="mt-4 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut. <a href="demo-hotel-hotel.html" class="custom-rtl-link-fix" title="">(View More...)</a></p>

								<div class="row">
									<div class="col-lg-4">
										<ul class="list list-icons list-primary list-borders text-uppercase text-color-dark text-2">
											<li><i class="fas fa-check"></i> 24 Rooms, 4 Luxury suites</li>
											<li><i class="fas fa-check"></i> Fitness center</li>
											<li><i class="fas fa-check"></i> Airport transporation</li>
										</ul>
									</div>
									<div class="col-lg-4">
										<ul class="list list-icons list-primary list-borders text-uppercase text-color-dark text-2">
											<li><i class="fas fa-check"></i> 24-Hour In-Room Dining</li>
											<li><i class="fas fa-check"></i> Cocktail Bar</li>
											<li><i class="fas fa-check"></i> Dog Friendly - Pets Stay Free</li>
										</ul>
									</div>
									<div class="col-lg-4">
										<ul class="list list-icons list-primary list-borders text-uppercase text-color-dark text-2">
											<li><i class="fas fa-check"></i> Valet car service</li>
											<li><i class="fas fa-check"></i> Pool</li>
											<li><i class="fas fa-check"></i> Free Wi-Fi</li>
										</ul>
									</div>
								</div>

							</div>

								
						</div>
					</div>
				</section>

				<section class="section section-text-light section-background section-center section-overlay-opacity section-overlay-opacity-scale-4 m-0" style="background-image:url('https://www.luthercollege.edu/public/gallery/LCHS_Workout_Room_Zoom_Virtual_Background.png')">
					<div class="container">
						<div class="row">
							<div class="col-lg-12" style="height: 360px;">
								<a href="https://www.youtube.com/watch?v=qY6axDB7VVk" class="play-video-custom"><img src="public/style/frontend/img/demos/hotel/play-icon.png" class="img-fluid" width="90" height="90" /></a>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-primary section-no-border m-0" >
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center">
								<h3 class="mt-4 mb-0 pb-0 text-light text-uppercase">Guest Reviews</h3>
								<div class="divider divider-light divider-small divider-small-center mb-4 mt-0">
									<hr class="mt-2">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4">
								<div class="testimonial testimonial-style-3 testimonial-style-custom appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
									<blockquote class="box-shadow-custom">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</blockquote>
									<div class="testimonial-arrow-down mx-auto"></div>
									<div class="testimonial-author">
										<p><strong>John Smith</strong><span>Porto Advisor</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="testimonial testimonial-style-3 testimonial-style-custom appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
									<blockquote class="box-shadow-custom">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes.</p>
									</blockquote>
									<div class="testimonial-arrow-down mx-auto"></div>
									<div class="testimonial-author">
										<p><strong>Brad Smith</strong><span>Porto Advisor</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="testimonial testimonial-style-3 testimonial-style-custom appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
									<blockquote class="box-shadow-custom">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet.</p>
									</blockquote>
									<div class="testimonial-arrow-down mx-auto"></div>
									<div class="testimonial-author">
										<p><strong>Paul Smith</strong><span>Porto Advisor</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-no-background section-no-border m-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center">

								<h3 class="mb-0 pb-0 text-uppercase">Special Offers</h3>
								<div class="divider divider-primary divider-small divider-small-center mb-4 mt-0">
									<hr class="mt-2">
								</div>

								<div class="row pt-4">
									<div class="col-lg-6">
										<a href="#" class="text-decoration-none">
											<span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom box-shadow-custom thumb-info-no-zoom thumb-info-side-image-custom-highlight appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
												<span class="thumb-info-side-image-wrapper">
													<img alt="" class="img-fluid" src="public/style/frontend/img/demos/hotel/gallery/gallery-4.jpg">
												</span>
												<span class="thumb-info-caption">
													<span class="thumb-info-caption-text">
														<h4 class="text-uppercase">Porto Special</h4>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti...</p>
													</span>
												</span>
											</span>
										</a>
									</div>
									<div class="col-lg-6">
										<a href="#" class="text-decoration-none">
											<span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom box-shadow-custom appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
												<span class="thumb-info-side-image-wrapper">
													<img alt="" class="img-fluid" style="max-width: 225px;" src="public/style/frontend/img/demos/hotel/gallery/gallery-2.jpg">
												</span>
												<span class="thumb-info-caption">
													<span class="thumb-info-caption-text pr-3">
														<h4 class="text-uppercase">Plan Ahead</h4>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
													</span>
												</span>
											</span>
										</a>

										<a href="#" class="text-decoration-none">
											<span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom box-shadow-custom appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
												<span class="thumb-info-side-image-wrapper">
													<img alt="" class="img-fluid" style="max-width: 225px;" src="public/style/frontend/img/demos/hotel/gallery/gallery-3.jpg">
												</span>
												<span class="thumb-info-caption">
													<span class="thumb-info-caption-text pr-3">
                                                    <h4 class="text-uppercase">Plan Ahead</h4>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
													</span>
												</span>
											</span>
										</a>
									</div>
								</div>

								<a class="btn btn-primary btn-lg text-2 text-uppercase mt-2" href="demo-hotel-special-offers.html">View All</a>

							</div>
								
						</div>
					</div>
				</section>
@endsection