<template>
	<nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white nav-border fox-statis sticky-top ">
		<div class="container">
			<a class="navbar-brand" href="http://localhost:8000" style="max-height: 36px;">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" data-scrollto href="/#about-us">About</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown user-logged">
						<a href="#" class="dropdown-toggle d-flex align-items-center" data-toggle="dropdown">
							<span class="icon-user-logged border"></span>
							<strong>User</strong>
							<span class="glyphicon glyphicon-chevron-down"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="http://localhost:8000/dashboard/profile">My Profile</a></li>
							<li><a href="http://localhost:8000/logout">Log Out</a></li>
						</ul>
					</li>

					<li class="nav-item d-flex align-items-center">
						<a class="nav-link primary" href="http://localhost:8000/create-property">List Your Property <img
								src="http://localhost:8000/img/long-arrow-right.svg" class="ml-10"
								alt="long arrow right"></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="main-content">
		<div class="container">
			<div class="row">
				<div class="col-md-9 pt-28">
					<h3 class="text-color-dark">Amazing Cityspace - Cipete Utara</h3>
					<p class="mb-0 font-size-14 text-color-gray-8">Cipete, Jakarta Selatan</p>
				</div>
			</div>

			<div class="tabs" data-background-color="white" id="shortcut-menu">
				<nav class="container" id="nav-sections">
					<ul class="nav nav-tabs tabs-default text-uppercase">
						<li class="nav-item active">
							<a class="nav-link" href="#about">
								About
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#inclusive-sec">
								Inclusive Service
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#amenities">
								Amenities
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#facilities">
								Facilities
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#room-arrangements">
								Rooms Arrangements
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#house-rules">
								House Rules &amp; Cancellation
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#neighborhood">
								Neighborhood
							</a>
						</li>
						<!-- <li class="scrollTop"><a href="#"><span class="entypo-up-open"></span></a></li> -->
					</ul>
				</nav>
			</div>

			<div class="position-relative">
				<div class="container px-0">
					<div id="carousel-detail" class="card-img-top carousel slide carousel-watcher" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item-active">
								<a class="fancybox-thumbs" data-fancybox-group="thumb"
									href="https://cdn.pixabay.com/photo/2016/11/18/17/46/architecture-1836070_1280.jpg">
									<img class="d-block w-100"
										src="https://cdn.pixabay.com/photo/2016/11/18/17/46/architecture-1836070_1280.jpg">
								</a>
							</div>
						</div>
						<ol class="carousel-indicators">
							<li data-target="#carousel-detail" data-slide-to="1" class="active"></li>
						</ol>
						<button type="button" class="btn btn-prev btn-primary" role="button"
							data-target="#carousel-detail" data-slide="prev">←</button>
						<button type="button" class="btn btn-next btn-primary" role="button"
							data-target="#carousel-detail" data-slide="next">→</button>
					</div>
					<div class="col-sm-6 offset-sm-1">
						<button type="button" class="btn btn-info btn-lg btn-slider-dark background-primary-dark"
							data-toggle="modal" data-target="#list-slider-btn">View 15 photos</button>
					</div>
				</div>
			</div>

			<section id="property-content">
				<div class="container">
					<div class="row">
						<div class="col-md-6 offset-md-1">
							<div id="about" class="py-50">
								<div class="container">
									<div class="row mt-4">
										<div class="col-md-12 text-color-gray-1">
											<div class="d-flex align-items-start font-size-14 mb-3">
												<img src="http://localhost:8000/img/001-home.svg" class="mr-2"
													width="24px">
												<ul class="category-list dot-separator">
													<li><b>72 m<sup>2</sup></b></li>
													<li><b>below 5 stories</b></li>
													<li><b>3 bedroom</b></li>
													<li><b>2 bathroom</b></li>
												</ul>
											</div>
											<div>
												Cipete Utara is a place for dreamers to reset, reflect and create.
												Designed with a 'slow' pace in mind, our hope is that you enjoy every
												part of your stay; from making local coffee by drip in the morning,
												choosing the perfect record to put as the sun sets, or by relaxing in
												the hot tub surrounded by a starry night sky.
											</div>
											<div class="d-flex align-items-center mt-2 mb-15">
												<div class="text-uppercase font-size-12 text-color-gray-7 mr-1">Model
												</div>
												<ul
													class="category-list font-size-14 text-color-gray-1 font-weight-600">
													<li><a class="no-style" href="javascript:void(0);">#modern</a></li>
													<li><a class="no-style" href="javascript:void(0);">#minimalist</a>
													</li>

												</ul>
											</div>
										</div>
										<div class="col-sm-3"></div>
									</div>
								</div>
							</div>
							<hr>
							<div id="inclusive-sec" class="py-50">
								<div class="container">
									<div class="row mt-4 mb-4">
										<div class="col-md-12 d-flex flex-wrap align-items-center">
											<h3 class="mb-0 flex-fill text-dark">Inclusive services &amp; charges</h3>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<h4 class="ml-30 mt-10">Entire House</h4>
											<div class="row text-color-gray-1 mb-4">
												<div class="feature-grid">
													<!-- <img src="/img/001-home.svg" class="mr-2" width="24px"> -->
													<i class="fas fa-globe"></i>
													<div>Internet</div>
												</div>
												<div class="feature-grid">
													<!-- <img src="/img/001-home.svg" class="mr-2" width="24px"> -->
													<i class="fa fa-parking"></i>
													<div>Parkir pribadi</div>
												</div>
												<div class="feature-grid">
													<!-- <img src="/img/001-home.svg" class="mr-2" width="24px"> -->
													<i class="fa fa-tv"></i>
													<div>TV kabel</div>
												</div>
												<div class="feature-grid">
													<!-- <img src="/img/001-home.svg" class="mr-2" width="24px"> -->
													<i class="fas fa-broom"></i>
													<div>Layanan kebersihan</div>
												</div>
												<div class="feature-grid">
													<!-- <img src="/img/001-home.svg" class="mr-2" width="24px"> -->
													<i class="far fa-building"></i>
													<div>Biaya layanan warga</div>
												</div>

											</div>

											<h4 class="ml-30 mt-10">Co-Living</h4>
											<div class="row text-color-gray-1 mb-4">
												<div class="feature-grid">
													<!-- <img src="/img/001-home.svg" class="mr-2" width="24px"> -->
													<i class="fas fa-globe"></i>
													<div>Internet</div>
												</div>
												<div class="feature-grid">
													<!-- <img src="/img/001-home.svg" class="mr-2" width="24px"> -->
													<i class="fa fa-tv"></i>
													<div>TV kabel</div>
												</div>
												<div class="feature-grid">
													<!-- <img src="/img/001-home.svg" class="mr-2" width="24px"> -->
													<i class="fas fa-broom"></i>
													<div>Layanan kebersihan</div>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
							<hr>
							<div id="amenities" class="py-50">
								<div class="container">
									<div class="row mt-4 mb-4">
										<div class="col-md-12 d-flex flex-wrap align-items-center">
											<h3 class="mb-0 flex-fill text-dark">Amenities</h3>
											<a href="javascript:void(0);">See all amenities →</a>

										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="row text-color-gray-1">
												<div class="feature-grid">
													<!-- <img src="/img/001-home.svg" class="mr-2" width="24px"> -->
													<i class="fa fa-tv"></i>
													<div>Television</div>
												</div>

												<div class="feature-grid">
													<!-- <img src="/img/001-home.svg" class="mr-2" width="24px"> -->
													<i class="fa fa-wifi"></i>
													<div>Wi-fi</div>
												</div>

												<div class="feature-grid">
													<!-- <img src="/img/001-home.svg" class="mr-2" width="24px"> -->
													<i class="fa fa-bath"></i>
													<div>Bathtub</div>
												</div>

												<div class="feature-grid">
													<!-- <img src="/img/001-home.svg" class="mr-2" width="24px"> -->
													<i class="fa fa-car"></i>
													<div>Free Parking</div>
												</div>

												<div class="feature-grid">
													<!-- <img src="/img/001-home.svg" class="mr-2" width="24px"> -->
													<i class="fa fa-briefcase"></i>
													<div>Workspace</div>
												</div>

												<div class="feature-grid">
													<!-- <img src="/img/001-home.svg" class="mr-2" width="24px"> -->
													<i class="fa fa-box"></i>
													<div>Deposit box</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<hr>
							<div id="facilities" class="py-50">
								<div class="container">
									<div class="row mt-4 mb-4">
										<div class="col-md-12 d-flex flex-wrap align-items-center">
											<h3 class="mb-0 flex-fill text-dark">Facilities</h3>
											<a href="javascript:void(0);">See all facilities →</a>

										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="row text-color-gray-1 mb-4">
												<div class="feature-grid">
													<!-- <img src="/img/001-home.svg" class="mr-2" width="24px"> -->
													<img src="https://img.icons8.com/wired/26/000000/elevator.png">
													<div>Elevator</div>
												</div>
												<div class="feature-grid">
													<!-- <img src="/img/001-home.svg" class="mr-2" width="24px"> -->
													<i class="fa fa-user-secret"></i>
													<div>24 hours Security</div>
												</div>
												<div class="feature-grid">
													<!-- <img src="/img/001-home.svg" class="mr-2" width="24px"> -->
													<i class="fa fa-car"></i>
													<div>Parking Space</div>
												</div>
												<div class="feature-grid">
													<!-- <img src="/img/001-home.svg" class="mr-2" width="24px"> -->
													<i class="fa fa-shopping-bag"></i>
													<div>Shopping Area</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="room-arrangements" class="width-costum py-50" data-background-color="aqua">
								<div class="container pt-5">
									<div class="row">
										<div class="col-md-6 offset-md-1">
											<h3 class="flex-fill text-dark">Room Arrangements</h3>
											<div class="list-n-divider">
												<div class="py-30">
													<div class="row">
														<div class="col-md-4">
															<div id="carousel-room-item-0"
																class="carousel slide text-color-white"
																data-ride="carousel">
																<div class="carousel-inner">

																	<div class="carousel-item">
																		<img class="d-block w-100"
																			src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-0.3.5&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;s=0cf4ef4cb623c8a52b1a624f76eaf5bf&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80">
																	</div>
																	<div class="carousel-item active">
																		<img class="d-block w-100"
																			src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-0.3.5&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;s=0cf4ef4cb623c8a52b1a624f76eaf5bf&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80">
																	</div>
																	<div class="carousel-item">
																		<img class="d-block w-100"
																			src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-0.3.5&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;s=0cf4ef4cb623c8a52b1a624f76eaf5bf&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80">
																	</div>
																</div>
																<ol class="carousel-indicators">
																	<li data-target="#carousel-room-item-0"
																		data-slide-to="0" class=""></li>
																	<li data-target="#carousel-room-item-0"
																		data-slide-to="1" class="active"></li>
																	<li data-target="#carousel-room-item-0"
																		data-slide-to="2" class=""></li>
																</ol>
																<span class="nav-prev no-style ml-1" role="button"
																	data-target="#carousel-room-item-0"
																	data-slide="prev"><i
																		class="fas fa-arrow-left"></i></span>
																<span class="nav-next no-style mr-1" role="button"
																	data-target="#carousel-room-item-0"
																	data-slide="next"><i
																		class="fas fa-arrow-right"></i></span>
															</div>
														</div>
														<div class="col-md-8 d-flex pt-3">
															<div class="flex-fill font-size-12 text-color-gray-6">
																<div>
																	<h4 class="m-0 text-dark">Master Bedroom</h4>
																</div>
																<div>
																	<ul class="category-list dot-separator">
																		<li><i
																				class="fa fa-expand mr-2 text-color-turqoise"></i>49
																			m²</li>
																	</ul>
																</div>
																<div>
																	<ul class="category-list dot-separator">
																		<li>
																			Furnished
																		</li>
																		<li>King size bed</li>
																	</ul>
																	<ul class="category-list dot-separator">
																		<li>Private bathroom</li>
																		<li>TV</li>
																		<li>Deposit Box</li>
																	</ul>
																</div>
															</div>
															<span class="btn-group-toggle btn-select-room-arrangement"
																data-toggle="buttons">
																<label class="btn btn-outline-primary btn-select">
																	<input type="checkbox" value="1-1">
																	<span>Select</span>
																</label>
															</span>
														</div>
													</div>
												</div>
												<div class="housemate-item d-flex font-size-12 py-10 mt-20"
													data-background-color="orange-2">
													<div class="text-color-dark mt-2 ml-3 font-weight-600">Meet your
														housemate</div>
													<div class="flex-fill">
														<div class="w-100 d-flex mt-1 mb-1">
															<div class="ml-2 mr-2 icon-circle-small flex-auto"
																data-background-color="orange">
																<i class="icon icon-small fas fa-venus"></i>
															</div>
															<ul
																class="mt-1 category-list dot-separator text-color-gray-1">
																<li>Neat</li>
																<li>College student</li>
																<li>Pet lovers</li>
																<li>Talkative</li>
																<li>Musician</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="house-rules" class="width-costum py-50 accordion" data-background-color="dark">
								<div class="container pt-5 pb-5">
									<div class="row">
										<div class="col-md-6 offset-md-1 accordion">
											<h3 class="mb-10 flex-fill">House rules &amp; cancellation</h3>
											<div class="font-size-20 font-weight-600 pt-4 pb-3">General rules</div>
											<div class="mb-20">
												<ul class="custom-list">
													<li>Not safe or suitable for infants (Under 2 years)</li>
													<li>Not suitable for pets</li>
													<li>Check-in is anytime after 2PM</li>
													<li>Self check-in with building staff</li>
												</ul>
												<ul id="collapse-rules" class="custom-list collapse"
													data-parent="#house-rules">
													<li>Not safe or suitable for infants (Under 2 years)</li>
													<li>Not suitable for pets</li>
													<li>Check-in is anytime after 2PM</li>
													<li>Self check-in with building staff</li>
												</ul>
												<a href="javascript:void(0);" data-target="#collapse-rules"
													class="collapse-animated font-size-14 mb-3 collapsed"
													data-toggle="collapse">See all general rules<span
														class="collapse-widget"><i class="fas fa-chevron-up"></i></span>
												</a>
											</div>
											<div class="font-size-20 font-weight-600 pt-4 pb-3">You must acknowledge
											</div>
											<div class="mb-20">
												<ul class="custom-list">
													<li>House for female only</li>
													<li>If you damage the home, you may be charged up to Rp 6933600</li>
													<li>Loud noise would be disrespectful to neighbours</li>
													<li>Use ASHTRAYS for cigarettes and no smoking inside bedrooms.</li>
												</ul>
												<ul id="collapse-acknowledge" class="custom-list collapse"
													data-parent="#house-rules">
													<li>House for female only</li>
													<li>If you damage the home, you may be charged up to Rp 6933600</li>
													<li>Loud noise would be disrespectful to neighbours</li>
													<li>Use ASHTRAYS for cigarettes and no smoking inside bedrooms.</li>
												</ul>
												<a href="javascript:void(0);" data-target="#collapse-acknowledge"
													class="collapse-animated font-size-14 mb-3 collapsed"
													data-toggle="collapse">See all rules<span class="collapse-widget"><i
															class="fas fa-chevron-up"></i></span>
												</a>
											</div>
											<div class="font-size-20 font-weight-600 pt-4 pb-3">Cancellation policy
											</div>
											<div class="mb-20">
												<div>
													Cancel up to 5 days before check in and get a full refund (minus
													service fees). Cancel within 5 days of your trip and the
													first night is non-refundable, but 50% of the cost for the remaining
													nights will be refunded. Service
													fees are refunded when cancellation happens before check in and
													within 48 hours of booking.
												</div>
												<div id="collapse-cancellation" class="collapse"
													data-parent="#house-rules">
													Cancel up to 5 days before check in and get a full refund (minus
													service fees). Cancel within 5 days of your trip and the
													first night is non-refundable, but 50% of the cost for the remaining
													nights will be refunded. Service
													fees are refunded when cancellation happens before check in and
													within 48 hours of booking.
												</div>
												<a href="javascript:void(0);" data-target="#collapse-cancellation"
													class="collapse-animated font-size-14 mb-3 collapsed"
													data-toggle="collapse">See cancelation details<span
														class="collapse-widget"><i class="fas fa-chevron-up"></i></span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4" style="margin-bottom: 320px;">
							<div class="sidebase-sticky justify-content-center">
								<div class="container booking-sticky-container booking-sticky">
									<div class="row">
										<div class="col-md-12">
											<div class="booking-sticky-content" style="width: 337px">
												<input type="hidden" id="property-id" value="1">
												<div class="btn-group-toggle d-flex border-bottom px-9 py-16 col-md-12"
													data-toggle="buttons">
													<button
														class="col-md-6 btn btn btn-checkbox btn-outline-primary flex-fill living-condition active px-0 py-6 mr-0 ml-5"
														style="text-transform:none" data-value="entire-space">
														<input type="radio" name="living-conditions"
															value="entire-space">
														Entire House
													</button>
													<button
														class="col-md-6 btn btn-checkbox btn-outline-primary flex-fill mr-2 living-condition active px-0 py-6 mr-5 ml-16"
														style="text-transform:none" data-value="co-living">
														<input type="radio" name="living-conditions" value="co-living">
														Co-Living
													</button>
												</div>
												<div class="d-flex" style="height: 60px">
													<div class="tabs-navigator left" data-navi="prev"><img
															src="http://localhost:8000/img/ic_sticky_arrow_left.svg"
															class="icon-slide" alt="slide to left"></div>
													<ul class="d-flex flex-fill nav nav-tabs tabs-default tabs-fill text-uppercase btn-group-toggle"
														data-toggle="buttons" id="lengthofstay">
														<li class="nav-item">
															<div class="nav-link active btn">
																<input type="radio" name="monthly" value="1">1 Year
															</div>
														</li>
														<li class="nav-item">
															<div class="nav-link btn">
																<input type="radio" name="monthly" value="1">6 Month
															</div>
														</li>
														<li class="nav-item">
															<div class="nav-link btn">
																<input type="radio" name="monthly" value="1">3 Month
															</div>
														</li>
													</ul>
													<div class="tabs-navigator right" data-navi="next"><span
															class="fas fa-chevron-right"></span></div>

												</div>
												<div class="col btm-sticky px-32 pt-21 py-10">
													<div class="form-group mb-10 pt-0" id="bedroom-type-select">
														<select
															class="select2 js-select2 form-control input-aqua mb-10 select2-hidden-accessible"
															id="bedroom-type" name="bedroom-type"
															data-select2-id="bedroom-type" tabindex="-1"
															aria-hidden="true">
															<option value="master" data-select2-id="2">Master Bedroom
															</option>
														</select><span
															class="select2 select2-container select2-container--default"
															dir="ltr" data-select2-id="1" style="width: 273px;"><span
																class="selection"><span
																	class="select2-selection select2-selection--single js-select2"
																	role="combobox" aria-haspopup="true"
																	aria-expanded="false" tabindex="0"
																	aria-labelledby="select2-bedroom-type-container"><span
																		class="select2-selection__rendered"
																		id="select2-bedroom-type-container"
																		role="textbox" aria-readonly="true"
																		title="Master Bedroom">Master
																		Bedroom</span><span
																		class="select2-selection__arrow"
																		role="presentation"><b
																			role="presentation"></b></span></span></span><span
																class="dropdown-wrapper"
																aria-hidden="true"></span></span>
													</div>
													<div class="form-group mb-10">
														<select class="select2 form-control input-aqua mb-10"
															id="pricepaid">
															<option value="paid-1" data-description="PAID ONCE">IDR
																120,000,000 PAID ONCE</option>
															<option value="paid-1" data-description="PAID TWICE">IDR
																70,000,000 PAID TWICE</option>
															<option value="paid-1" data-description="PAID QUARTERLY">IDR
																50,000,000 PAID QUARTERLY</option>
															<option value="paid-1" data-description="PAID MONTHLY">IDR
																13,500,000PAID MONTHLY</option>

														</select>
													</div>
													<div class="text-center font-size-12 mt-2 mb-10 lets-negotiate"
														style="display:none">
														Not Satisfied with the price? <a href="javascript:void(0);"
															class="negotiate-btn" data-dismiss="modal"
															data-toggle="modal" data-target="#modalLetsNego">Let's
															Negotiate</a>
													</div>
													<div class="form-group installment_option" style="display:none">
														<a href="javascript:void(0);" class="btn btn-orange btn-block"
															id="view-monthly-installment">
															VIEW MONTHLY INSTALLMENT RATE
														</a>
													</div>
													<div id="monthly-installment-holder" style="display: none;">
														<a href="javascript:void(0);"
															class="btn btn-outline-orange btn-block"
															id="close-monthly-installment">
															CLOSE MONTHLY INSTALLMENT RATES
														</a>
														<a href="javascript:void(0);" role="button"
															data-toggle="popover" id="payment-schedule"
															class="btn-monthly-installment btn-white p-7 mt-7 gradana"
															data-original-title="" title="">
															<img src="http://localhost:8000/img/gradana.png" alt="">
															<h4>
																<div id="cicilanbulan"></div>
																<small>
																	PAID MONTHLY
																</small>
															</h4>
														</a>
														<a href="javascript:void(0);" data-toggle="popover"
															data-trigger="focus" data-container="body"
															data-placement="right" role="button" data-html="true"
															id="payment-schedule1"
															class="btn-monthly-installment btn-white p-7 mt-7 cicil_sewa"
															style="display:none;" data-original-title="" title="">
															<img src="http://localhost:8000/img/cicilsewa.png"
																style="width:53px;height:35px;">
															<h4>
																<div id=" cicilanbulansewa">
																</div>
																<small>
																	PAID MONTHLY
																</small>
															</h4>
														</a>
													</div>
													<div id="popover-content-payment-schedule" class="popover-custom"
														style="display: none">
														<div class="pop-header pop-secondary">
															Payment schedule
															<div class="close-popover" data-dismiss="popover">
																<i class="fas fa-times pointer"></i>
															</div>
														</div>
														<div class="pop-body">
															<div id="gradanaTable"></div>
														</div>
													</div>
													<div id="popover-content-payment-schedule1" class="popover-custom"
														style="display: none">
														<div class="pop-header pop-secondary">
															Payment schedule
															<div class="close-popover" data-dismiss="popover">
																<i class="fas fa-times pointer"></i>
															</div>
														</div>
														<div class="pop-body">
															<div id="cicilsewaTable"></div>
														</div>
													</div>
													<div class="form-group mb-15">
														<div class="row">
															<div class="col-md-6 pr-lg-5">
																<button type="button"
																	class="btn btn-outline-primary btn-block px-0 py-9 schedule-btn font-size-12"
																	style="line-height: 13px; letter-spacing: 0px"
																	data-value="onsite">
																	SCHEDULE<br>ONSITE TOUR
																</button>
															</div>
															<div class="col-md-6 pl-lg-5">
																<button type="button"
																	class="btn btn-outline-primary btn-block px-0 py-9 schedule-btn font-size-12"
																	style="line-height: 13px; letter-spacing: 0px"
																	data-value="virtual">
																	SCHEDULE<br>LIVE VIRTUAL TOUR
																</button>
															</div>
														</div>
													</div>
													<div class="form-group mb-7">
														<a href="javascript:void(0);"
															class="btn btn-primary btn-block booknow-btn"
															data-dismiss="modal" data-toggle="modal"
															data-target="#modalVisitThisProperty">
															BOOK NOW
														</a>
													</div>
													<!--<button type="button" class="btn btn-block p-10 mt-10 btn-primary text-uppercase schedule-btn click-trigger">Schedule a Tour</button>-->
													<!-- <button type="button" class="btn btn-block p-2 btn-outline-primary text-uppercase">Book now without a Tour</button> -->
													<a data-toggle="popover" data-container="body" data-trigger="focus"
														data-placement="right" role="button" data-html="true"
														id="published-rates" class="font-size-12 text-center btn-block"
														href="javascript:void(0);" data-original-title="" title="">Read
														more
														about published rates</a>
													<div id="popover-content-published-rates" class="popover-custom"
														style="display: none">
														<div class="pop-header pop-primary">
															More about published rates
															<div class="close-popover" data-dismiss="popover">
																<i class="fas fa-times pointer"></i>
															</div>
														</div>
														<div class="pop-body">
															<div>
																<p><strong>
																		Non inclusive in published rates
																	</strong></p>
																<p>Residence charge IDR 2,500,000 / Month<br>
																	Renter's insurance fee ~ IDR 150,000
																</p>
																<p id="installment_term" style="display:none;">
																	<strong>Installment rates do not include<br>
																		deposit and any administrative fee
																	</strong>
																</p>
															</div>

														</div>
													</div>
													<!--<div class="text-center font-size-12 mt-2 mb-2 gradana" style="display:none"><a href="" data-toggle="modal" data-target="#modalGradana" class="negotiate-btn">Test Gradana</a></div>-->
												</div>
												<div class="d-flex">
													<button class="btn btn-footer flex-fill btn-white"><img
															src="http://localhost:8000/img/ic_logout.svg"> Share
														it</button>
													<button class="btn btn-footer flex-fill btn-white"><img
															src="http://localhost:8000/img/ic_save_it.svg"> Save
														It</button>
													<button class="btn btn-footer flex-fill btn-white"><img
															src="http://localhost:8000/img/ic_heart.svg">
														Favorites</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="neighborhood" class="py-50">
				<div class="container">
					<nav id="neighborhood-tabs">
						<ul class="mb-30 col-sm-12 nav nav-tabs tabs-default text-uppercase" role="tablist">
							<li class="nav-item">
								<a class="nav-link active show" data-toggle="tab" href="#neighborhood-tab-0"
									role="tab">F&amp;B</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#neighborhood-tab-1"
									role="tab">Entertaiment</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#neighborhood-tab-2"
									role="tab">Hospitals</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#neighborhood-tab-3" role="tab">Stations</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#neighborhood-tab-4"
									role="tab">Education</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#neighborhood-tab-5" role="tab">Sports</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#neighborhood-tab-6" role="tab">House of
									worship</a>
							</li>
						</ul>
					</nav>
					<div class="row" id="map-list">
						<div class="col-sm-5 order-sm-0 order-1 map-marker-list">
							<div class="tab-pane active show" role="tabpanel" id="neighborhood-tab-0">
								<div class="tab-content pb-5">
									<div class="marker-item mb-3">
										<div class="marker-icon mr-10">
											<img src="/img/marker.svg">
											<div class="marker-num">1</div>
										</div>
										<div class="ml-2 my-5 my-5 marker-info">
											<div class="marker-title">Lehrman School</div>
											<div class="marker-distance">200 km</div>
										</div>
									</div>
									<div class="marker-item mb-3">
										<div class="marker-icon mr-10">
											<img src="/img/marker.svg">
											<div class="marker-num">2</div>
										</div>
										<div class="ml-2 my-5 my-5 marker-info">
											<div class="marker-title">Lucas Elementary School</div>
											<div class="marker-distance">1 km</div>
										</div>
									</div>
									<div class="marker-item mb-3">
										<div class="marker-icon mr-10">
											<img src="/img/marker.svg">
											<div class="marker-num">3</div>
										</div>
										<div class="ml-2 my-5 marker-info">
											<div class="marker-title">Bina Bangsa School</div>
											<div class="marker-distance">2 km</div>
										</div>
									</div>
									<div class="marker-item mb-3">
										<div class="marker-icon mr-10">
											<img src="/img/marker.svg">
											<div class="marker-num">1</div>
										</div>
										<div class="ml-2 my-5 my-5 marker-info">
											<div class="marker-title">Bina Bangsa School</div>
											<div class="marker-distance">2 km</div>
										</div>
									</div>
									<div class="marker-item mb-3">
										<div class="marker-icon mr-10">
											<img src="/img/marker.svg">
											<div class="marker-num">2</div>
										</div>
										<div class="ml-2 my-5 my-5 marker-info">
											<div class="marker-title">IPEKA International School</div>
											<div class="marker-distance">2 km</div>
										</div>
									</div>
									<div class="marker-item mb-3">
										<div class="marker-icon mr-10">
											<img src="/img/marker.svg">
											<div class="marker-num">3</div>
										</div>
										<div class="ml-2 my-5 marker-info">
											<div class="marker-title">St. Joseph School</div>
											<div class="marker-distance">2 km</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-7 map mb-5">
							<div class="map-container">
								<div class="map-placeholder"></div>
							</div>
							<button class="marker-full-btn btn btn-primary">View full map</button>
						</div>
					</div>
				</div>
			</section>


		</div>

		<section id="listings" class="section-content similar-listing background-aqua py-100">
			<!-- <div class="background-shadow"></div> -->
			<div class="container prop-content">
				<div class="row">
					<div class="col-12">
						<h3 class="font-size-34 font-weight-bold mb-50 pt-20 pb-20">Similar listings</h3>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12 slider-viewed-listings">
						<div class="owl-carousel main-listings-prop owl-loaded owl-drag">
							<div class="owl-stage-outer">
								<div class="owl-stage"
									style="transform: translate3d(0px, 0px, 0px); transition: all;">
									<div class="owl-item active" style="margin-right: 20px;">
										<div class="col-12 property-wrapper">
											<div class="property-item">
												<div id="" class="pp-images position-relative">
													<div class="image-wrapper-2">
														<div class="image-sizing-2">
															<img src="https://cdn.pixabay.com/photo/2014/07/10/17/18/large-home-389271_1280.jpg"
																alt="image">
															<span class="main-tag">#minimalist</span>
														</div>
													</div>
													<div class="position-absolute">
														<button
															class="btn btn-icon-small btn-favorite background-white mb-auto mt-md-40">
															<i class="far fa-heart icon icon-small"></i>
														</button>
													</div>
												</div>
												<div class="pp-detail">
													<div class="row">
														<div class="col-md-12 col-12">
															<div class="pp-highlight border-bottom">
																<div class="pp-tags">
																	<span class="card-tag">Hunian Bersama</span>
																	<span class="card-tag card-tag-outline">Entire
																		House</span>
																</div>
																<div class="row">
																	<div class="col-md-12">
																		<h4 class="pp-title">Gading Icon</h4>
																		<p class="pp-location">Kebayoran Baru, South
																			Jakarta
																		</p>
																		<p class="pp-price">Starting from <strong>IDR
																				5,260,000 per month</strong></p>
																	</div>
																</div>
															</div>
														</div>
														<div
															class="col-md-12 col-12 d-flex flex-md-column flex-row flex-wrap align-items-md-end align-items-center justify-content-md-end justify-content-between mt-md-0 mt-10">
															<div
																class="pp-spec d-flex flex-row flex-wrap w-100 justify-content-end">
																<!--<span class="pp-rates">
                                                            <span class="pp-stars">4.5</span>
                                                            <i class="fas fa-star text-color-orange"></i>
                                                            <span class="pp-raters color-light-brown pl-2">(35)</span>
                                                        </span>-->
																<!--<span class="pp-landsize d-flex flex-row flex-wrap justify-content-start align-items-center">
                                                            <img src="/img/pp-landsize.jpg" alt="Landsize">
                                                            <span>m<sup>2</sup></span>
                                                        </span>-->
																<span
																	class="pp-room d-flex flex-row flex-wrap justify-content-start align-items-center">
																	<img src="/img/pp-room.jpg" alt="Room">
																	<span class="font-weight-bold">2</span>/
																	<span>8</span>
																</span>
																<span
																	class="pp-bed d-flex flex-row flex-wrap justify-content-start align-items-center">
																	<img src="/img/pp-bed.jpg" alt="Bed">
																	<span>2</span>
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="owl-item active" style="margin-right: 20px;">
										<div class="col-12 property-wrapper">
											<div class="property-item">
												<div id="" class="pp-images position-relative">
													<div class="image-wrapper-2">
														<div class="image-sizing-2">
															<img src="https://cdn.pixabay.com/photo/2014/07/10/17/18/large-home-389271_1280.jpg"
																alt="image">
															<span class="main-tag">#minimalist</span>
														</div>
													</div>
													<div class="position-absolute">
														<button
															class="btn btn-icon-small btn-favorite background-white mb-auto mt-md-40">
															<i class="far fa-heart icon icon-small"></i>
														</button>
													</div>
												</div>
												<div class="pp-detail">
													<div class="row">
														<div class="col-md-12 col-12">
															<div class="pp-highlight border-bottom">
																<div class="pp-tags">
																	<span class="card-tag">Hunian Bersama</span>
																	<span class="card-tag card-tag-outline">Entire
																		House</span>
																</div>
																<div class="row">
																	<div class="col-md-12">
																		<h4 class="pp-title">Gading Icon</h4>
																		<p class="pp-location">Kebayoran Baru, South
																			Jakarta
																		</p>
																		<p class="pp-price">Starting from <strong>IDR
																				5,260,000 per month</strong></p>
																	</div>
																</div>
															</div>
														</div>
														<div
															class="col-md-12 col-12 d-flex flex-md-column flex-row flex-wrap align-items-md-end align-items-center justify-content-md-end justify-content-between mt-md-0 mt-10">
															<div
																class="pp-spec d-flex flex-row flex-wrap w-100 justify-content-end">
																<!--<span class="pp-rates">
                                                            <span class="pp-stars">4.5</span>
                                                            <i class="fas fa-star text-color-orange"></i>
                                                            <span class="pp-raters color-light-brown pl-2">(35)</span>
                                                        </span>-->
																<!--<span class="pp-landsize d-flex flex-row flex-wrap justify-content-start align-items-center">
                                                            <img src="/img/pp-landsize.jpg" alt="Landsize">
                                                            <span>m<sup>2</sup></span>
                                                        </span>-->
																<span
																	class="pp-room d-flex flex-row flex-wrap justify-content-start align-items-center">
																	<img src="/img/pp-room.jpg" alt="Room">
																	<span class="font-weight-bold">2</span>/
																	<span>8</span>
																</span>
																<span
																	class="pp-bed d-flex flex-row flex-wrap justify-content-start align-items-center">
																	<img src="/img/pp-bed.jpg" alt="Bed">
																	<span>2</span>
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="owl-item active" style="margin-right: 20px;">
										<div class="col-12 property-wrapper">
											<div class="property-item">
												<div id="" class="pp-images position-relative">
													<div class="image-wrapper-2">
														<div class="image-sizing-2">
															<img src="https://cdn.pixabay.com/photo/2014/07/10/17/18/large-home-389271_1280.jpg"
																alt="image">
															<span class="main-tag">#minimalist</span>
														</div>
													</div>
													<div class="position-absolute">
														<button
															class="btn btn-icon-small btn-favorite background-white mb-auto mt-md-40">
															<i class="far fa-heart icon icon-small"></i>
														</button>
													</div>
												</div>
												<div class="pp-detail">
													<div class="row">
														<div class="col-md-12 col-12">
															<div class="pp-highlight border-bottom">
																<div class="pp-tags">
																	<span class="card-tag">Hunian Bersama</span>
																	<span class="card-tag card-tag-outline">Entire
																		House</span>
																</div>
																<div class="row">
																	<div class="col-md-12">
																		<h4 class="pp-title">Gading Icon</h4>
																		<p class="pp-location">Kebayoran Baru, South
																			Jakarta
																		</p>
																		<p class="pp-price">Starting from <strong>IDR
																				5,260,000 per month</strong></p>
																	</div>
																</div>
															</div>
														</div>
														<div
															class="col-md-12 col-12 d-flex flex-md-column flex-row flex-wrap align-items-md-end align-items-center justify-content-md-end justify-content-between mt-md-0 mt-10">
															<div
																class="pp-spec d-flex flex-row flex-wrap w-100 justify-content-end">
																<!--<span class="pp-rates">
                                                            <span class="pp-stars">4.5</span>
                                                            <i class="fas fa-star text-color-orange"></i>
                                                            <span class="pp-raters color-light-brown pl-2">(35)</span>
                                                        </span>-->
																<!--<span class="pp-landsize d-flex flex-row flex-wrap justify-content-start align-items-center">
                                                            <img src="/img/pp-landsize.jpg" alt="Landsize">
                                                            <span>m<sup>2</sup></span>
                                                        </span>-->
																<span
																	class="pp-room d-flex flex-row flex-wrap justify-content-start align-items-center">
																	<img src="/img/pp-room.jpg" alt="Room">
																	<span class="font-weight-bold">2</span>/
																	<span>8</span>
																</span>
																<span
																	class="pp-bed d-flex flex-row flex-wrap justify-content-start align-items-center">
																	<img src="/img/pp-bed.jpg" alt="Bed">
																	<span>2</span>
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="owl-nav">
								<button type="button" role="presentation" class="owl-prev">
									<i class="fas fa-long-arrow-alt-left"></i>
								</button>
								<button type="button" role="presentation" class="owl-next disabled">
									<i class="fas fa-long-arrow-alt-right"></i>
								</button>
							</div>
							<div class="owl-dots">
								<button role="button" class="owl-dot"><span></span></button>
								<button role="button" class="owl-dot"><span></span></button>
								<button role="button" class="owl-dot active"><span></span></button>
							</div>
							<div class="owl-nav disabled"><button type="button" role="presentation"
									class="owl-prev disabled"><i class="fas fa-long-arrow-alt-left"></i></button><button
									type="button" role="presentation" class="owl-next disabled"><i
										class="fas fa-long-arrow-alt-right"></i></button></div>
							<div class="owl-dots disabled"><button role="button"
									class="owl-dot active"><span></span></button></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<a href="#" class="btn-more-properties outline-none font-weight-bold">See more similar listing
							<i class="fas fa-long-arrow-alt-right"></i></a>
					</div>
				</div>
			</div>
		</section>

		<footer class="section-content footer background-primary-dark pt-65 pb-33">
			<div class="container">
				<div class="row">
					<div class="col-xl-2 col-md-6 col-12 footer-links mr-xl-30 mb-15">
						<p class="text-footer-header mb-30">Services</p>
						<ul class="list-unstyled link-item">
							<li class="mb-10">
								<a href="#" class="color-white">Flexible renting</a>
							</li>
							<li class="mb-10">
								<a href="#" class="color-white">Property Marketing & Management</a>
							</li>
							<li class="mb-10">
								<a href="#" class="color-white">Realty Insurance</a>
							</li>
							<li class="mb-10">
								<a href="#" class="color-white">Co-Brokerage</a>
							</li>
						</ul>
					</div>
					<div class="col-xl-2 col-md-6 col-12 footer-links mr-xl-30 mb-15">
						<p class="text-footer-header mb-30">Company</p>
						<ul class="list-unstyled link-item">
							<li class="mb-10">
								<a href="#" class="color-white">About</a>
							</li>
						</ul>
					</div>
					<div class="col-xl-2 col-md-6 col-12 footer-links mr-xl-30 mb-15">
						<p class="text-footer-header mb-30">FYI</p>
						<ul class="list-unstyled link-item">
							<li class="mb-10">
								<a href="#" class="color-white">FAQ</a>
							</li>
							<li class="mb-10">
								<a href="#" class="color-white">Terms of use</a>
							</li>
							<li class="mb-10">
								<a href="#" class="color-white">Trust & Safety</a>
							</li>
							<li class="mb-10">
								<a href="#" class="color-white">Code of Conduct</a>
							</li>
						</ul>
					</div>
					<div
						class="col-xl-5 col-12 d-flex flex-column flex-wrap justify-content-start align-items-end footer-links pl-xl-50 mb-15">
						<div class="stay-connected w-100">

							<p class="text-footer-header mb-30">FOUND A HOME YOU LIKE BUT NOT ON THE TERMS YOU WANT?
							</p>
							<button type="button" class="btn btn-primary btn-block" data-toggle="modal"
								data-target="#share-it-here-modal">Share it here and we'll make it happen</button>
							<div class="mt-30">
								<p class="text-footer-header py-5 mb-0">Subscribe to our newsletter!</p>
								<div class="form-get-subbed input-group mb-10">
									<input type="text" class="form-control" placeholder="What's your email?"
										aria-label="Text input with segmented dropdown button">
									<div class="input-group-prepend">
										<button type="button" class="btn btn-primary">Subscribe</button>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="row footer-bottom pt-35">
					<div class="col-md-6 col-12 d-flex align-items-center">
						<ul class="list-inline link-item footer-bottom-list mb-md-0">
							<li class="list-inline-item mr-50">
								<i class="fas fa-globe-asia color-white font-size-22 mr-10"></i> <a
									href="http://localhost:8000/set-lang/id"
									class="color-white font-weight-light mr-15">Id</a> <a
									href="http://localhost:8000/set-lang/en"
									class="color-white font-weight-light">En</a>
							</li>
							<li class="list-inline-item">
								<i class="fas fa-coins color-white font-size-22 mr-10"></i> <a href="#"
									class="color-white font-weight-light mr-15">IDR</a> <a href="#"
									class="color-white font-weight-light">USD</a>
							</li>
						</ul>
					</div>
					<div class="col-md-6 col-12 copyright color-white" id="copyright">
						<div class="row align-items-center">
							<div class="col-6">
								<ul class="list-inline text-left mb-0">
									<li class="list-inline-item">
										<a href="https://www.facebook.com/colivingjakarta" class="mr-10 no-style icon"
											target="_blank">
											<i class="fab icon-f__b color-white"></i>
										</a>
									</li>
									<li class="list-inline-item">
										<a href="#" class="mr-10 no-style icon" target="_blank">
											<i class="fab icon-t__w color-white"></i>
										</a>
									</li>
									<li class="list-inline-item">
										<a href="https://www.instagram.com/colivingspaceindonesia"
											class="mr-10 no-style icon" target="_blank">
											<i class="fab icon-i__ns color-white"></i>
										</a>
									</li>
									<li class="list-inline-item">
										<a href="https://www.youtube.com/channel/UC4MaMhPKZ0FOXDeb1X8FdJg"
											class="mr-10 no-style icon" target="_blank">
											<i class="fab icon-y__t color-white"></i>
										</a>
									</li>
									<li class="list-inline-item">
										<a href="https://www.linkedin.com/company/sewagi" class="mr-10 no-style icon"
											target="_blank">
											<i class="fab icon-l__in color-white"></i>
										</a>
									</li>
								</ul>
							</div>
							<div class="col-6">
								<img class="sewagi-copy" src="http://localhost:8000/img/sewagi-logo-only.png"
									alt="Sewagi Brand"> Sewagi &copy; 2019
								<!-- <script>
                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

</template>

<script setup lang="ts">
import { Button, HomeSearchBar } from '@/components'

</script>

<style scoped>
.map-container {
	width: 100%;
	height: 400px;
	margin: 20px auto;
	border: 2px solid #ccc;
	border-radius: 8px;
	overflow: hidden;
}

.map-placeholder {
	width: 100%;
	height: 100%;
	background: url('https://via.placeholder.com/800x400?text=Map+Placeholder') center/cover no-repeat;
}
</style>