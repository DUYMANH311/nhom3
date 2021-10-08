@extends('layout')
@section('content')
<section class="page-header page-header-modern bg-color-primary page-header-md mb-0">
					<div class="container">
						<div class="row">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="font-weight-bold text-light text-uppercase">Rooms &amp; Rates <span class="d-block mt-2">Check out our amazing options</span></h1>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-no-background section-no-border m-0 p-0">
					<div class="container">
						<div class="row mb-4">

							<div class="col">

								<div class="row">
									<div class="col d-flex justify-content-center">
										<ul class="nav nav-pills nav-pills-center sort-source text-2 text-uppercase my-4 py-2" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
											<li class="nav-item active" data-option-value="*"><a class="nav-link active" href="#">Show All</a></li>
											<li class="nav-item" data-option-value=".rooms"><a class="nav-link" href="#">Rooms</a></li>
											<li class="nav-item" data-option-value=".suites"><a class="nav-link" href="#">Suites</a></li>
										</ul>
									</div>
								</div>

								<div class="sort-destination-loader sort-destination-loader-showing">
									<div class="row portfolio-list sort-destination" data-sort-id="portfolio">
										<div class="col-md-6 col-lg-4 isotope-item rooms mb-4 pb-3">
											<a href="demo-hotel-rooms-rates-detail.html">
												<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
													<span class="thumb-info-wrapper">
														<img src="img/demos/hotel/room-1.jpg" class="img-fluid" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">View Details</span>
														</span>
													</span>
												</span>
											</a>
											<h5 class="mt-3 mb-0">Standard Room</h5>
											<div class="room-suite-info">
												<ul>
													<li><label>BEDS</label>	<span>1 Double Bed</span></li>
													<li><label>OCCUPANCY</label> <span>2 Persons</span></li>
													<li><label>SIZE</label>	<span>40 sqm.</span></li>
													<li><label>Status</label>	<span>Còn Phòng</span></li>
													<li><label>RATES FROM</label> <strong>USD 199</strong></li>
													<li>
														<a href="{{URL::To('/room-detail')}}" class="room-suite-info-detail" title="">View Details <i class="fas fa-long-arrow-alt-right"></i></a>
														<a href="demo-hotel-book.html" class="room-suite-info-book" title="">Book Now</i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-lg-4 isotope-item rooms mb-4 pb-3">
											<a href="demo-hotel-rooms-rates-detail.html">
												<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
													<span class="thumb-info-wrapper">
														<img src="img/demos/hotel/room-2.jpg" class="img-fluid" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">View Details</span>
														</span>
													</span>
												</span>
											</a>
											<h5 class="mt-3 mb-0">Premium Room</h5>
											<div class="room-suite-info">
												<ul>
													<li><label>BEDS</label>	<span>1 Double Bed</span></li>
													<li><label>OCCUPANCY</label> <span>2 Persons</span></li>
													<li><label>SIZE</label>	<span>50 sqm.</span></li>
													<li><label>Status</label>	<span>Còn Phòng</span></li>
													<li><label>RATES FROM</label> <strong>USD 299</strong></li>
													<li>
														<a href="demo-hotel-rooms-rates-detail.html" class="room-suite-info-detail" title="">View Details <i class="fas fa-long-arrow-alt-right"></i></a>
														<a href="demo-hotel-book.html" class="room-suite-info-book" title="">Book Now</i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-lg-4 isotope-item rooms mb-4 pb-3">
											<a href="demo-hotel-rooms-rates-detail.html">
												<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
													<span class="thumb-info-wrapper">
														<img src="img/demos/hotel/room-3.jpg" class="img-fluid" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">View Details</span>
														</span>
													</span>
												</span>
											</a>
											<h5 class="mt-3 mb-0">Deluxe Room</h5>
											<div class="room-suite-info">
												<ul>
													<li><label>BEDS</label>	<span>2 Double Beds</span></li>
													<li><label>OCCUPANCY</label> <span>3 Persons</span></li>
													<li><label>SIZE</label>	<span>80 sqm.</span></li>
													<li><label>Status</label>	<span>Còn Phòng</span></li>
													<li><label>RATES FROM</label> <strong>USD 399</strong></li>
													<li>
														<a href="demo-hotel-rooms-rates-detail.html" class="room-suite-info-detail" title="">View Details <i class="fas fa-long-arrow-alt-right"></i></a>
														<a href="demo-hotel-book.html" class="room-suite-info-book" title="">Book Now</i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-lg-4 isotope-item rooms mb-4 pb-3">
											<a href="demo-hotel-rooms-rates-detail.html">
												<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
													<span class="thumb-info-wrapper">
														<img src="img/demos/hotel/room-4.jpg" class="img-fluid" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">View Details</span>
														</span>
													</span>
												</span>
											</a>
											<h5 class="mt-3 mb-0">Executive Room</h5>
											<div class="room-suite-info">
												<ul>
													<li><label>BEDS</label>	<span>King</span></li>
													<li><label>OCCUPANCY</label> <span>2 Persons</span></li>
													<li><label>SIZE</label>	<span>90 sqm.</span></li>
													<li><label>Status</label>	<span>Còn Phòng</span></li>
													<li><label>RATES FROM</label> <strong>USD 499</strong></li>
													<li>
														<a href="demo-hotel-rooms-rates-detail.html" class="room-suite-info-detail" title="">View Details <i class="fas fa-long-arrow-alt-right"></i></a>
														<a href="demo-hotel-book.html" class="room-suite-info-book" title="">Book Now</i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-lg-4 isotope-item rooms mb-4 pb-3">
											<a href="demo-hotel-rooms-rates-detail.html">
												<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
													<span class="thumb-info-wrapper">
														<img src="img/demos/hotel/room-5.jpg" class="img-fluid" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">View Details</span>
														</span>
													</span>
												</span>
											</a>
											<h5 class="mt-3 mb-0">Superior Room</h5>
											<div class="room-suite-info">
												<ul>
													<li><label>BEDS</label>	<span>King or 2 Double Beds</span></li>
													<li><label>OCCUPANCY</label> <span>5 Persons</span></li>
													<li><label>SIZE</label>	<span>140 sqm.</span></li>
													<li><label>Status</label>	<span>Còn Phòng</span></li>
													<li><label>RATES FROM</label> <strong>USD 599</strong></li>
													<li>
														<a href="demo-hotel-rooms-rates-detail.html" class="room-suite-info-detail" title="">View Details <i class="fas fa-long-arrow-alt-right"></i></a>
														<a href="demo-hotel-book.html" class="room-suite-info-book" title="">Book Now</i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-lg-4 isotope-item suites mb-4 pb-3">
											<a href="demo-hotel-rooms-rates-detail.html">
												<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
													<span class="thumb-info-wrapper">
														<img src="img/demos/hotel/room-6.jpg" class="img-fluid" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">View Details</span>
														</span>
													</span>
												</span>
											</a>
											<h5 class="mt-3 mb-0">Porto Suite</h5>
											<div class="room-suite-info">
												<ul>
													<li><label>BEDS</label>	<span>King</span></li>
													<li><label>OCCUPANCY</label> <span>7 Persons</span></li>
													<li><label>SIZE</label>	<span>150 sqm.</span></li>
													<li><label>Status</label>	<span>Còn Phòng</span></li>
													<li><label>RATES FROM</label> <strong>USD 699</strong></li>
													<li>
														<a href="demo-hotel-rooms-rates-detail.html" class="room-suite-info-detail" title="">View Details <i class="fas fa-long-arrow-alt-right"></i></a>
														<a href="demo-hotel-book.html" class="room-suite-info-book" title="">Book Now</i></a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>

							</div>
								
						</div>
					</div>
				</section>
@endsection
