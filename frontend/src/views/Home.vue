<template>
	<nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white nav-border fixed-top solid-on-scroll">
		<div class="container">
			<a class="navbar-brand" href="" style="max-height: 36px;">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" data-scrollto="" href="/#about-us">About</a>
					</li>
				</ul>
				<div class="navbar-search">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text location-icon pl-20">A</span>
						</div>
						<input id="navbarSearch" type="text"
							class="form-control searchbox-value border-0 searchbox-trigger"
							placeholder="Enter location, property name, company or education ..."
							aria-label="Text input with segmented dropdown button" autocomplete="off">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<span class="input-group-icon d-flex align-items-center pr-15"><i
										id="navbarRemoveLocation" class="fas fa-times"
										style="display: none;"></i></span>
								<button class="btn btn-target btn-grey homeCurrentLocation" type="button">
									<i class="fanicon-target-two"></i>
								</button>
							</span>
						</div>
					</div>
				</div>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="#" class="nav-link" data-toggle="modal" data-target="#modalLogin">Log in</a>
					</li>
					<li class="nav-item d-flex align-items-center">
						<a class="nav-link primary" href="#" data-toggle="modal" data-target="#modalPropertyLister">List
							Your Property <img src="/img/long-arrow-right.svg" class="ml-10" alt="long arrow right"></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- <nav id="main-navbar"
		class="navbar navbar-expand-lg navbar-light bg-white nav-border fixed-top navbar-transparent solid-on-scroll">
		<div class="container">
			<a class="navbar-brand" href="" style="max-height: 36px;">Navbar</a>
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
				<div class="navbar-search">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text location-icon pl-20">A</span>
						</div>
						<input id="navbarSearch" type="text"
							class="form-control searchbox-value border-0 searchbox-trigger"
							placeholder="Enter location, property name, company or education ..."
							aria-label="Text input with segmented dropdown button" autocomplete="off">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<span class="input-group-icon d-flex align-items-center pr-15"><i
										id="navbarRemoveLocation" class="fas fa-times"></i></span>
								<button class="btn btn-target btn-grey homeCurrentLocation" type="button">
									<i class="fanicon-target-two"></i>
								</button>
							</span>
						</div>
					</div>
				</div>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="#" class="nav-link" data-toggle="modal" data-target="#modalLogin">Log in</a>
					</li>
					<li class="nav-item d-flex align-items-center">
						<a class="nav-link primary" href="#" data-toggle="modal" data-target="#modalPropertyLister">List
							Your Property <img src="/img/long-arrow-right.svg" class="ml-10" alt="long arrow right"></a>
					</li>
				</ul>
			</div>
		</div>
	</nav> -->

	<!-- start: cookie -->
	<!-- <div class="navbar-on-top">
		<div class="container">
			<span class="color-main-dark font-size-13">By using this website you agree to our <a href="#">cookie
					policy</a>.</span>
			<a class="close-btn" href="javascript:void(0);">
				<span class="clear-cross"></span>
			</a>
		</div>
	</div> -->
	<!-- end: cookie -->

	<section
		class="section-content d-flex flex-column flex-wrap justify-content-center vh-min-100 background-gradient-1">
		<button onclick="$zopim.livechat.window.show()" class="btn-chat background-primary">
			<font-awesome-icon icon="message" size="2xl" style="color: #ffffff;" />
		</button>

		<div id="homeSlider">
			<div class="home-slider">
				<div class="home-slider-item">
					<img src="/img/background/homepage/architecture-building-man-1527256.jpg" class="d-block w-100"
						alt="Slider">
				</div>
			</div>
		</div>

		<div class="hero-filter position-absolute">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="main-heading">
							<span class="text-color-dark">Need more rental flexibility?</span><br>
							<span class="text-color-orange">Discover Co-Living.</span>
						</h1>
						<div class="home-search">
							<div class="input-group input-homepage">
								<div class="input-group-prepend searchbox-trigger">
									<span class="input-group-text icon-location">A</span>
								</div>
								<input id="homeSearch" type="text"
									class="form-control searchbox-trigger searchbox-value border-0"
									placeholder="Enter location, property name, company or education ..."
									autocomplete="off">
								<div class="input-group-prepend">
									<span class="input-group-text" id="homeRemoveLocation"><i
											class="fas fa-times"></i></span>
									<span class="input-group-text input-group-target">
										<button class="btn btn-grey btn-target homeCurrentLocation"><i
												class="fanicon-target-two"></i></button>
									</span>
								</div>
								<div class="input-group-prepend">
									<button type="button" class="btn btn-primary searchbox-btn">Discover</button>
								</div>
							</div>
						</div>
						<div class="recent-search-wrapper" style="display: none;">
							<p class="text-uppercase recent-search font-size-12 mb-10">
								Recent searches</p>
							<div class="mb-15 btn-group-toggle" data-toggle="buttons" id="homeRecentSearch"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- start: property recommendation -->
	<section class="section-content background-aqua py-65">
		<!-- <div class="background-shadow"></div> -->

		<div class="container">
			<div class="row">
				<div class="col-11">
					<h3 class="font-size-34 font-weight-bold mb-150 pt-20 pl-xl-55">Properties recommended by us</h3>

				</div>
			</div>

			<div class="row">
				<div class="col-12 col-lg-10 offset-lg-1 slider-viewed-listings" id="property-featured">
					<div class="owl-nav">
						<button type="button" role="presentation" class="owl-prev">
							<font-awesome-icon :icon="['fas', 'left-long']" size="2xl" style="color: #ffffff;" />
						</button>
						<button type="button" role="presentation" class="owl-next disabled">
							<font-awesome-icon :icon="['fas', 'right-long']" size="2xl" style="color: #ffffff;" />
						</button>
					</div>

					<div class="owl-carousel main-listings owl-loaded owl-drag">



						<div class="owl-stage-outer">
							<div class="owl-stage"
								style="transform: translate3d(-1160px, 0px, 0px); transition: all; width: 3480px;">
								<div class="owl-item cloned" style="width: 340px; margin-right: 240px;">
									<div class="col-12 property-wrapper">
										<div class="property-item">
											<div id="" class="pp-images position-relative">
												<div id="" class="pp-images position-relative">
													<a class="pp-image-content image-wrapper-1" href="/property/1/1"
														target="_blank">
														<div class="image-sizing-1">
															<img src="https://cdn.pixabay.com/photo/2016/12/30/07/55/bedroom-1940168_1280.jpg"
																alt="image">

														</div>
													</a>
													<a class="pp-image-content image-wrapper-2" href="/property/1/1"
														target="_blank">
														<div class="image-sizing-2">
															<img src="https://cdn.pixabay.com/photo/2017/07/08/02/16/house-2483336_1280.jpg"
																alt="image">
															<div class="main-tag">
																<span>#MINIMALIST</span>
															</div>
														</div>
													</a>
													<a class="pp-image-content image-wrapper-3" href="/property/1/1"
														target="_blank">
														<div class="image-sizing-3">
															<img src="https://cdn.pixabay.com/photo/2017/09/09/18/25/living-room-2732939_1280.jpg"
																alt="image">

														</div>
													</a>
												</div>
											</div>
											<div class="pp-detail">
												<div class="row">
													<div class="col-md-10 col-12">
														<div class="pp-highlight">
															<div class="pp-tags">
																<span id="tag-left-1" class="card-tag" data-id="1"
																	data-type="coliving" data-active="1"
																	data-img="/img/coliving-icon.png" data-room="1"
																	data-price="1" data-building_size="1"
																	data-unit_size="1">Co Living</span>
															</div>
															<h4 class="pp-title">
																<a href="/property/1/1" target="_blank">
																	Amazing City Space - Cipete Utara
																</a>
															</h4>
															<p class="pp-location">Menteng, Jakarta Pusat</p>
															<p class="pp-price" data-type="coliving">From <strong><span
																		class="starting-price">Rp. 5,260,000 / Room /
																		Month</span></strong></p>

														</div>
													</div>
													<div
														class="col-md-2 col-12 d-flex flex-md-column flex-row flex-wrap align-items-md-end align-items-center justify-content-md-end justify-content-between mt-md-0 mt-10">
														<button
															class="btn btn-icon-small btn-favorite background-white mb-auto mt-md-40"
															data-id="1">
															<i class="far fa-heart icon icon-small"></i>
														</button>
													</div>
												</div>
												<hr class="pp-divider">
												<div class="row">
													<div class="col-md-9 col-12">
														<div class="pp-spec d-flex flex-row flex-wrap">
															<span class="pp-rates">
																<span class="pp-stars">4.5</span>
																<i class="fas fa-star text-color-orange"></i>
																<span
																	class="pp-raters color-light-brown pl-2">(35)</span>
															</span>

															<span
																class="pp-landsize d-flex flex-row flex-wrap justify-content-start align-items-start">
																<img src="/img/ic_size.png" alt="icon landsize">
																<span><span
																		class="pp-size">169.4</span>m<sup>2</sup></span>
															</span>
															<span
																class="pp-room d-flex flex-row flex-wrap justify-content-start align-items-start">
																<img id="icon-1" src="/img/coliving-icon.png"
																	alt="icon room">
																<span id="room-1"><span
																		class="font-weight-bold">2</span>/<span>8</span></span>
															</span>
														</div>
													</div>
													<div class="col-md-3 text-right">
														<a href="/property/1/1"
															class="pp-goto-detail outline-none font-weight-bold"
															target="_blank">Details</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 340px; margin-right: 240px;">
									<div class="col-12 property-wrapper">
										<div class="property-item">
											<div id="" class="pp-images position-relative">
												<div id="" class="pp-images position-relative">
													<a class="pp-image-content image-wrapper-1" href="/property/1/1"
														target="_blank">
														<div class="image-sizing-1">
															<img src="https://cdn.pixabay.com/photo/2016/12/30/07/55/bedroom-1940169_1280.jpg"
																alt="image">

														</div>
													</a>
													<a class="pp-image-content image-wrapper-2" href="/property/1/1"
														target="_blank">
														<div class="image-sizing-2">
															<img src="https://cdn.pixabay.com/photo/2016/11/18/17/46/architecture-1836070_1280.jpg"
																alt="image">
														</div>
													</a>
													<a class="pp-image-content image-wrapper-3" href="/property/1/1"
														target="_blank">
														<div class="image-sizing-3">
															<img src="https://cdn.pixabay.com/photo/2016/11/18/17/20/couch-1835923_1280.jpg"
																alt="image">

														</div>
													</a>
												</div>
											</div>
											<div class="pp-detail">
												<div class="row">
													<div class="col-md-10 col-12">
														<div class="pp-highlight">
															<div class="pp-tags">
																<span id="tag-right-1" class="card-tag" data-id="1"
																	data-type="entire" data-active="0"
																	data-img="/img/ic_bedroom.png" data-room="1"
																	data-price="1" data-building_size="1"
																	data-unit_size="1">Entire Apartment</span>
																<span id="tag-left-1" class="card-tag card-tag-outline"
																	data-id="1" data-type="coliving" data-active="1"
																	data-img="/img/coliving-icon.png" data-room="1"
																	data-price="1" data-building_size="1"
																	data-unit_size="1">Co Living</span>
															</div>
															<h4 class="pp-title">
																<a href="/property/1/1" target="_blank">
																	1Park Residence 2BR Tower B
																</a>
															</h4>
															<p class="pp-location">Kebayoran Baru, Jakarta Selatan</p>
															<p class="pp-price" data-type="coliving">From <strong><span
																		class="starting-price">Rp. 32,800,000 /
																		Month</span></strong>
															</p>

														</div>
													</div>
													<div
														class="col-md-2 col-12 d-flex flex-md-column flex-row flex-wrap align-items-md-end align-items-center justify-content-md-end justify-content-between mt-md-0 mt-10">
														<button
															class="btn btn-icon-small btn-favorite background-white mb-auto mt-md-40"
															data-id="1">
															<i class="far fa-heart icon icon-small"></i>
														</button>
													</div>
												</div>
												<hr class="pp-divider">
												<div class="row">
													<div class="col-md-9 col-12">
														<div class="pp-spec d-flex flex-row flex-wrap">
															<span class="pp-rates">
																<span class="pp-stars">4.5</span>
																<i class="fas fa-star text-color-orange"></i>
																<span
																	class="pp-raters color-light-brown pl-2">(35)</span>
															</span>

															<span
																class="pp-landsize d-flex flex-row flex-wrap justify-content-start align-items-start">
																<img src="/img/ic_size.png" alt="icon landsize">
																<span><span
																		class="pp-size">169.4</span>m<sup>2</sup></span>
															</span>
															<span
																class="pp-bed d-flex flex-row flex-wrap justify-content-start align-items-start">
																<img id="icon-1" src="/img/ic_bedroom.png"
																	alt="icon bed">
																<span id="room-1"><span>3</span></span>
															</span>
														</div>
													</div>
													<div class="col-md-3 text-right">
														<a href="/property/1/1"
															class="pp-goto-detail outline-none font-weight-bold"
															target="_blank">Details</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item active" style="width: 340px; margin-right: 240px;">
									<div class="col-12 property-wrapper">
										<div class="property-item">
											<div id="" class="pp-images position-relative">
												<div id="" class="pp-images position-relative">
													<a class="pp-image-content image-wrapper-1" href="/property/1/1"
														target="_blank">
														<div class="image-sizing-1">
															<img src="https://cdn.pixabay.com/photo/2016/12/30/07/55/bedroom-1940168_1280.jpg"
																alt="image">

														</div>
													</a>
													<a class="pp-image-content image-wrapper-2" href="/property/1/1"
														target="_blank">
														<div class="image-sizing-2">
															<img src="https://cdn.pixabay.com/photo/2017/07/08/02/16/house-2483336_1280.jpg"
																alt="image">
															<div class="main-tag">
																<span>#MINIMALIST</span>
															</div>
														</div>
													</a>
													<a class="pp-image-content image-wrapper-3" href="/property/1/1"
														target="_blank">
														<div class="image-sizing-3">
															<img src="https://cdn.pixabay.com/photo/2017/09/09/18/25/living-room-2732939_1280.jpg"
																alt="image">

														</div>
													</a>
												</div>
											</div>
											<div class="pp-detail">
												<div class="row">
													<div class="col-md-10 col-12">
														<div class="pp-highlight">
															<div class="pp-tags">
																<span id="tag-left-1" class="card-tag" data-id="1"
																	data-type="coliving" data-active="1"
																	data-img="/img/coliving-icon.png" data-room="1"
																	data-price="1" data-building_size="1"
																	data-unit_size="1">Co Living</span>
															</div>
															<h4 class="pp-title">
																<a href="/property/1/1" target="_blank">
																	Amazing City Space - Cipete Utara
																</a>
															</h4>
															<p class="pp-location">Menteng, Jakarta Pusat</p>
															<p class="pp-price" data-type="coliving">From <strong><span
																		class="starting-price">Rp. 5,260,000 / Room /
																		Month</span></strong></p>

														</div>
													</div>
													<div
														class="col-md-2 col-12 d-flex flex-md-column flex-row flex-wrap align-items-md-end align-items-center justify-content-md-end justify-content-between mt-md-0 mt-10">
														<button
															class="btn btn-icon-small btn-favorite background-white mb-auto mt-md-40"
															data-id="1">
															<i class="far fa-heart icon icon-small"></i>
														</button>
													</div>
												</div>
												<hr class="pp-divider">
												<div class="row">
													<div class="col-md-9 col-12">
														<div class="pp-spec d-flex flex-row flex-wrap">
															<span class="pp-rates">
																<span class="pp-stars">4.5</span>
																<i class="fas fa-star text-color-orange"></i>
																<span
																	class="pp-raters color-light-brown pl-2">(35)</span>
															</span>

															<span
																class="pp-landsize d-flex flex-row flex-wrap justify-content-start align-items-start">
																<img src="/img/ic_size.png" alt="icon landsize">
																<span><span
																		class="pp-size">169.4</span>m<sup>2</sup></span>
															</span>
															<span
																class="pp-room d-flex flex-row flex-wrap justify-content-start align-items-start">
																<img id="icon-1" src="/img/coliving-icon.png"
																	alt="icon room">
																<span id="room-1"><span
																		class="font-weight-bold">2</span>/<span>8</span></span>
															</span>
														</div>
													</div>
													<div class="col-md-3 text-right">
														<a href="/property/1/1"
															class="pp-goto-detail outline-none font-weight-bold"
															target="_blank">Details</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item active" style="width: 340px; margin-right: 240px;">
									<div class="col-12 property-wrapper">
										<div class="property-item">
											<div id="" class="pp-images position-relative">
												<div id="" class="pp-images position-relative">
													<a class="pp-image-content image-wrapper-1" href="/property/1/1"
														target="_blank">
														<div class="image-sizing-1">
															<img src="https://cdn.pixabay.com/photo/2016/12/30/07/55/bedroom-1940169_1280.jpg"
																alt="image">

														</div>
													</a>
													<a class="pp-image-content image-wrapper-2" href="/property/1/1"
														target="_blank">
														<div class="image-sizing-2">
															<img src="https://cdn.pixabay.com/photo/2016/11/18/17/46/architecture-1836070_1280.jpg"
																alt="image">
														</div>
													</a>
													<a class="pp-image-content image-wrapper-3" href="/property/1/1"
														target="_blank">
														<div class="image-sizing-3">
															<img src="https://cdn.pixabay.com/photo/2016/11/18/17/20/couch-1835923_1280.jpg"
																alt="image">

														</div>
													</a>
												</div>
											</div>
											<div class="pp-detail">
												<div class="row">
													<div class="col-md-10 col-12">
														<div class="pp-highlight">
															<div class="pp-tags">
																<span id="tag-right-1" class="card-tag" data-id="1"
																	data-type="entire" data-active="0"
																	data-img="/img/ic_bedroom.png" data-room="1"
																	data-price="1" data-building_size="1"
																	data-unit_size="1">Entire Apartment</span>
																<span id="tag-left-1" class="card-tag card-tag-outline"
																	data-id="1" data-type="coliving" data-active="1"
																	data-img="/img/coliving-icon.png" data-room="1"
																	data-price="1" data-building_size="1"
																	data-unit_size="1">Co Living</span>
															</div>
															<h4 class="pp-title">
																<a href="/property/1/1" target="_blank">
																	1Park Residence 2BR Tower B
																</a>
															</h4>
															<p class="pp-location">Kebayoran Baru, Jakarta Selatan</p>
															<p class="pp-price" data-type="coliving">From <strong><span
																		class="starting-price">Rp. 32,800,000 /
																		Month</span></strong>
															</p>

														</div>
													</div>
													<div
														class="col-md-2 col-12 d-flex flex-md-column flex-row flex-wrap align-items-md-end align-items-center justify-content-md-end justify-content-between mt-md-0 mt-10">
														<button
															class="btn btn-icon-small btn-favorite background-white mb-auto mt-md-40"
															data-id="1">
															<i class="far fa-heart icon icon-small"></i>
														</button>
													</div>
												</div>
												<hr class="pp-divider">
												<div class="row">
													<div class="col-md-9 col-12">
														<div class="pp-spec d-flex flex-row flex-wrap">
															<span class="pp-rates">
																<span class="pp-stars">4.5</span>
																<i class="fas fa-star text-color-orange"></i>
																<span
																	class="pp-raters color-light-brown pl-2">(35)</span>
															</span>

															<span
																class="pp-landsize d-flex flex-row flex-wrap justify-content-start align-items-start">
																<img src="/img/ic_size.png" alt="icon landsize">
																<span><span
																		class="pp-size">169.4</span>m<sup>2</sup></span>
															</span>
															<span
																class="pp-bed d-flex flex-row flex-wrap justify-content-start align-items-start">
																<img id="icon-1" src="/img/ic_bedroom.png"
																	alt="icon bed">
																<span id="room-1"><span>3</span></span>
															</span>
														</div>
													</div>
													<div class="col-md-3 text-right">
														<a href="/property/1/1"
															class="pp-goto-detail outline-none font-weight-bold"
															target="_blank">Details</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 340px; margin-right: 240px;">
									<div class="col-12 property-wrapper">
										<div class="property-item">
											<div id="" class="pp-images position-relative">
												<div id="" class="pp-images position-relative">
													<a class="pp-image-content image-wrapper-1" href="/property/1/1"
														target="_blank">
														<div class="image-sizing-1">
															<img src="https://cdn.pixabay.com/photo/2016/12/30/07/55/bedroom-1940168_1280.jpg"
																alt="image">

														</div>
													</a>
													<a class="pp-image-content image-wrapper-2" href="/property/1/1"
														target="_blank">
														<div class="image-sizing-2">
															<img src="https://cdn.pixabay.com/photo/2017/07/08/02/16/house-2483336_1280.jpg"
																alt="image">
															<div class="main-tag">
																<span>#MINIMALIST</span>
															</div>
														</div>
													</a>
													<a class="pp-image-content image-wrapper-3" href="/property/1/1"
														target="_blank">
														<div class="image-sizing-3">
															<img src="https://cdn.pixabay.com/photo/2017/09/09/18/25/living-room-2732939_1280.jpg"
																alt="image">

														</div>
													</a>
												</div>
											</div>
											<div class="pp-detail">
												<div class="row">
													<div class="col-md-10 col-12">
														<div class="pp-highlight">
															<div class="pp-tags">
																<span id="tag-left-1" class="card-tag" data-id="1"
																	data-type="coliving" data-active="1"
																	data-img="/img/coliving-icon.png" data-room="1"
																	data-price="1" data-building_size="1"
																	data-unit_size="1">Co Living</span>
															</div>
															<h4 class="pp-title">
																<a href="/property/1/1" target="_blank">
																	Amazing City Space - Cipete Utara
																</a>
															</h4>
															<p class="pp-location">Menteng, Jakarta Pusat</p>
															<p class="pp-price" data-type="coliving">From <strong><span
																		class="starting-price">Rp. 5,260,000 / Room /
																		Month</span></strong></p>

														</div>
													</div>
													<div
														class="col-md-2 col-12 d-flex flex-md-column flex-row flex-wrap align-items-md-end align-items-center justify-content-md-end justify-content-between mt-md-0 mt-10">
														<button
															class="btn btn-icon-small btn-favorite background-white mb-auto mt-md-40"
															data-id="1">
															<i class="far fa-heart icon icon-small"></i>
														</button>
													</div>
												</div>
												<hr class="pp-divider">
												<div class="row">
													<div class="col-md-9 col-12">
														<div class="pp-spec d-flex flex-row flex-wrap">
															<span class="pp-rates">
																<span class="pp-stars">4.5</span>
																<i class="fas fa-star text-color-orange"></i>
																<span
																	class="pp-raters color-light-brown pl-2">(35)</span>
															</span>

															<span
																class="pp-landsize d-flex flex-row flex-wrap justify-content-start align-items-start">
																<img src="/img/ic_size.png" alt="icon landsize">
																<span><span
																		class="pp-size">169.4</span>m<sup>2</sup></span>
															</span>
															<span
																class="pp-room d-flex flex-row flex-wrap justify-content-start align-items-start">
																<img id="icon-1" src="/img/coliving-icon.png"
																	alt="icon room">
																<span id="room-1"><span
																		class="font-weight-bold">2</span>/<span>8</span></span>
															</span>
														</div>
													</div>
													<div class="col-md-3 text-right">
														<a href="/property/1/1"
															class="pp-goto-detail outline-none font-weight-bold"
															target="_blank">Details</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 340px; margin-right: 240px;">
									<div class="col-12 property-wrapper">
										<div class="property-item">
											<div id="" class="pp-images position-relative">
												<div id="" class="pp-images position-relative">
													<a class="pp-image-content image-wrapper-1" href="/property/1/1"
														target="_blank">
														<div class="image-sizing-1">
															<img src="https://cdn.pixabay.com/photo/2016/12/30/07/55/bedroom-1940169_1280.jpg"
																alt="image">

														</div>
													</a>
													<a class="pp-image-content image-wrapper-2" href="/property/1/1"
														target="_blank">
														<div class="image-sizing-2">
															<img src="https://cdn.pixabay.com/photo/2016/11/18/17/46/architecture-1836070_1280.jpg"
																alt="image">
														</div>
													</a>
													<a class="pp-image-content image-wrapper-3" href="/property/1/1"
														target="_blank">
														<div class="image-sizing-3">
															<img src="https://cdn.pixabay.com/photo/2016/11/18/17/20/couch-1835923_1280.jpg"
																alt="image">

														</div>
													</a>
												</div>
											</div>
											<div class="pp-detail">
												<div class="row">
													<div class="col-md-10 col-12">
														<div class="pp-highlight">
															<div class="pp-tags">
																<span id="tag-right-1" class="card-tag" data-id="1"
																	data-type="entire" data-active="0"
																	data-img="/img/ic_bedroom.png" data-room="1"
																	data-price="1" data-building_size="1"
																	data-unit_size="1">Entire Apartment</span>
																<span id="tag-left-1" class="card-tag card-tag-outline"
																	data-id="1" data-type="coliving" data-active="1"
																	data-img="/img/coliving-icon.png" data-room="1"
																	data-price="1" data-building_size="1"
																	data-unit_size="1">Co Living</span>
															</div>
															<h4 class="pp-title">
																<a href="/property/1/1" target="_blank">
																	1Park Residence 2BR Tower B
																</a>
															</h4>
															<p class="pp-location">Kebayoran Baru, Jakarta Selatan</p>
															<p class="pp-price" data-type="coliving">From <strong><span
																		class="starting-price">Rp. 32,800,000 /
																		Month</span></strong>
															</p>

														</div>
													</div>
													<div
														class="col-md-2 col-12 d-flex flex-md-column flex-row flex-wrap align-items-md-end align-items-center justify-content-md-end justify-content-between mt-md-0 mt-10">
														<button
															class="btn btn-icon-small btn-favorite background-white mb-auto mt-md-40"
															data-id="1">
															<i class="far fa-heart icon icon-small"></i>
														</button>
													</div>
												</div>
												<hr class="pp-divider">
												<div class="row">
													<div class="col-md-9 col-12">
														<div class="pp-spec d-flex flex-row flex-wrap">
															<span class="pp-rates">
																<span class="pp-stars">4.5</span>
																<i class="fas fa-star text-color-orange"></i>
																<span
																	class="pp-raters color-light-brown pl-2">(35)</span>
															</span>

															<span
																class="pp-landsize d-flex flex-row flex-wrap justify-content-start align-items-start">
																<img src="/img/ic_size.png" alt="icon landsize">
																<span><span
																		class="pp-size">169.4</span>m<sup>2</sup></span>
															</span>
															<span
																class="pp-bed d-flex flex-row flex-wrap justify-content-start align-items-start">
																<img id="icon-1" src="/img/ic_bedroom.png"
																	alt="icon bed">
																<span id="room-1"><span>3</span></span>
															</span>
														</div>
													</div>
													<div class="col-md-3 text-right">
														<a href="/property/1/1"
															class="pp-goto-detail outline-none font-weight-bold"
															target="_blank">Details</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><img
									src="/img/ic_left_arrow.png" class="icon-arrow-left"
									alt="icon arrow left"></button><button type="button" role="presentation"
								class="owl-next"><img src="/img/ic_right_arrow.png" class="icon-arrow-right"
									alt="icon arrow right"></button></div>
						<div class="owl-dots disabled"><button role="button"
								class="owl-dot active"><span></span></button></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-lg-10 offset-lg-1">
					<a href="#" class="btn-more-properties outline-none font-weight-bold">See more
						<img src="/img/long-arrow-right.svg" class="ml-10" alt="long arrow right"></a>
				</div>
			</div>
		</div>
	</section>
	<!-- end: property recommendation -->

	<!-- start: what we provide -->
	<section class="section-content about-sewagi">
		<div class="container pt-90 pb-100">
			<div class="row">
				<div class="col-12">
					<p class="font-mono text-uppercase text-color-orange text-center mb-60">
						What We Provide</p>
				</div>
			</div>
			<div class="row what-we-provide">
				<!-- start: item -->
				<div class="col-xl-2-4 col-md-6 col-12">
					<div class="we-provide-item mb-lg-0 mb-40">
						<div class="provide-image mb-15">
							<img src="/img/homepage/main-monthly-payment.png" alt="Monthly payments">
						</div>
						<div class="provide-desc text-center">
							<h5 class="font-size-16">
								Monthly payments</h5>
							<p class="font-size-14 mb-0">
								Pay as you go.</p>
						</div>
					</div>
				</div>
				<!-- end: item -->
				<!-- start: item -->
				<div class="col-xl-2-4 col-md-6 col-12">
					<div class="we-provide-item mb-lg-0 mb-40">
						<div class="provide-image mb-15">
							<img src="/img/homepage/main-flexibility.png" alt="Flexibility">
						</div>
						<div class="provide-desc text-center">
							<h5 class="font-size-16">Flexibility
							</h5>
							<p class="font-size-14 mb-0">
								Rent the way you want. Choose your payment and staying terms.
							</p>
						</div>
					</div>
				</div>
				<!-- end: item -->
				<!-- start: item -->
				<div class="col-xl-2-4 col-md-6 col-12">
					<div class="we-provide-item mb-lg-0 mb-40">
						<div class="provide-image mb-15">
							<img src="/img/homepage/main-location.png" alt="Preferred locations">
						</div>
						<div class="provide-desc text-center">
							<h5 class="font-size-16">
								Preferred locations</h5>
							<p class="font-size-14 mb-0">
								Use our <a href="javascript:void(0);" class="font-weight-bold">commute time</a>
								feature to be close to your activity hubs.
							</p>
						</div>
					</div>
				</div>
				<!-- end: item -->
				<!-- start: item -->
				<div class="col-xl-2-4 col-md-6 col-12">
					<div class="we-provide-item mb-lg-0 mb-40">
						<div class="provide-image mb-15">
							<img src="/img/homepage/main-compatibility.png" alt="Co-living compatibility">
						</div>
						<div class="provide-desc text-center">
							<h5 class="font-size-16">
								Co-living compatibility</h5>
							<p class="font-size-14 mb-0">
								We match you with like minded housemates.
							</p>
						</div>
					</div>
				</div>
				<!-- end: item -->
				<!-- start: item -->
				<div class="col-xl-2-4 col-md-6 col-12">
					<div class="we-provide-item mb-lg-0 mb-40">
						<div class="provide-image mb-15">
							<img src="/img/homepage/main-piece-of-mind.png" alt="Peace of mind">
						</div>
						<div class="provide-desc text-center">
							<h5 class="font-size-16">Peace of mind
							</h5>
							<p class="font-size-14 mb-0">
								Unified dashboard paired with customer support for a seamless renting experience.
							</p>
						</div>
					</div>
				</div>
				<!-- end: item -->
			</div>
		</div>
	</section>
	<!-- end: what we provide -->

	<!-- start: about sewagi -->
	<section id="about-us" class="section-content about-sewagi">
		<div class="container">
			<div class="content-wrapper">
				<div class="row">
					<div class="col-12 col-md-10">
						<p class="font-mono title mini text-color-orange text-uppercase mb-24">
							What is Sewagi</p>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-10">
						<div>
							<h3 class="font-size-32 font-weight-bold mb-50">
								SEWAGI lets you rent on your terms &amp; list your property for free.
							</h3>
						</div>
					</div>
					<div class="col-12 col-md-8 offset-md-3">
						<div>
							<p class="font-size-20 mb-15">
								Our marketplace provides you with rental flexibility, proximity &amp; shareability.
							</p>
							<p class="font-size-20">
								While giving your property the edge in leasing out faster &amp; safer.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end: about sewagi -->

	<!-- start: how sewagi helps you -->
	<section class="section-content service-type-info">
		<div class="container-fluid info-content">
			<div class="row info-tab-row">
				<div class="col-12">
					<p class="font-mono title mini text-color-orange text-uppercase mb-24 text-center">
						How Sewagi Helps You as a</p>
				</div>
				<div class="col-12">
					<div id="menu-tabs" class="mb-lg-15">
						<ul class="nav nav-tabs tabs-slash justify-content-center padding-bottom-0" role="tablist">
							<li class="nav-item">
								<a class="nav-link font-size-28 font-weight-bold active" data-toggle="tab"
									href="#renter-tab" role="tab">Renter</a>
							</li>
							<li class="nav-item">
								<a class="nav-link font-size-28 font-weight-bold" data-toggle="tab" href="#coliving-tab"
									role="tab">Co-Living Renter</a>
							</li>
							<li class="nav-item">
								<a class="nav-link font-size-28 font-weight-bold" data-toggle="tab" href="#owner-tab"
									role="tab">
									Property Lister</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-12">
					<div class="tab-content">
						<div class="tab-pane active show" id="renter-tab" role="tabpanel">
							<div class="container">
								<div class="row">
									<div class="col-lg-3 col-md-6 col-12">
										<div class="mb-15 image-card">
											<img src="/img/renter_illustrasi1.png" />
										</div>
										<p
											class="mb-15 text-center text-color-dark font-size-20 title-card font-weight-bold">
											Find and collect the listings you like
										</p>

										<p class="mb-15 text-center text-color-gray-1 text-card">
											Check out our listing and refine your filters to get the best match.
											Whenever you see this logo on our listing you may check it out in
											<a href="#" class="font-weight-bold">mode 360°</a>
										</p>

										<div class="tab-footer-icon text-center">
											<a href="#" data-toggle="modal"
												data-target="#modalExploreLiveVirtualTour"><img
													src="/img/ic_360vr_grey.svg" class="icon"></a>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="mb-15 image-card">
											<img src="/img/renter_illustrasi2.png" />
										</div>
										<p
											class="mb-15 text-center text-color-dark font-size-20 title-card font-weight-bold">
											Schedule for a room tour
										</p>
										<p class="mb-15 text-center text-color-gray-1 text-card">
											Have a closer look at your future home. No strings attached.<br>
											Whenever you see this logo on our listing, you may schedule a
											<a href="#" class="font-weight-bold">Live Virtual Tour</a>
										</p>

										<div class="tab-footer-icon text-center">
											<a href="#" data-toggle="modal"
												data-target="#modalExploreLiveVirtualTour"><img
													src="/img/ic_view_virtual_field_grey.svg" class="icon"></a>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="mb-15 image-card">
											<img src="/img/renter_illustrasi3.png" />
										</div>
										<p
											class="mb-15 text-center text-color-dark font-size-20 title-card font-weight-bold">
											Set up your digital identity
										</p>
										<p class="mb-15 text-center text-color-gray-1 text-card">
											Like what you see? Sign the contract digitally and the place is yours
										</p>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="mb-15 image-card">
											<img src="/img/renter_illustrasi4.png" />
										</div>
										<p
											class="mb-15 text-center text-color-dark font-size-20 title-card font-weight-bold">
											<i>MOVE IN!</i>
										</p>
										<p class="mb-15 text-center text-color-gray-1 text-card">
											You are all set! Move in and be part of the community.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="coliving-tab" role="tabpanel">
							<div class="container">
								<div class="row mb-15">
									<div class="col-lg-3 col-md-6 col-12">
										<div class="mb-15 image-card">
											<img src="/img/renter_illustrasi1.png" />
										</div>

										<p
											class="mb-15 text-center text-color-dark font-size-20 title-card font-weight-bold">
											Find and collect the listings you like
										</p>
										<p class="mb-15 text-center text-color-gray-1 text-card">
											Check out our co-living listing and refine your filters to get the best
											match.<br>
											Whenever you see this logo on our listing, you may check it out in
											<a href="#" class="font-weight-bold">model 360°</a>
										</p>

										<div class="tab-footer-icon text-center">
											<a href="#" data-toggle="modal"
												data-target="#modalExploreLiveVirtualTour"><img
													src="/img/ic_360vr_grey.svg" class="icon"></a>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="mb-15 image-card">
											<img src="/img/connect.svg" />
										</div>
										<p
											class="mb-15 text-center text-color-dark font-size-20 title-card font-weight-bold">
											Connect with the existing renters
										</p>
										<p class="mb-15 text-center text-color-gray-1 text-card">
											Have a closer look at your future home. No strings attached.
											Whenever you see this logo on our listing, you may schedule a
											<a href="#" target="_blank" class="font-weight-bold">Live Virtual Tour</a>
											and meet with your potential roommates.
										</p>

										<div class="tab-footer-icon text-center">
											<a href="#" data-toggle="modal"
												data-target="#modalExploreLiveVirtualTour"><img
													src="/img/ic_view_virtual_field_grey.svg" class="icon"></a>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="mb-15 image-card">
											<img src="/img/renter_illustrasi3.png" />
										</div>
										<p
											class="mb-15 text-center text-color-dark font-size-20 title-card font-weight-bold">
											Set up your digital identity
										</p>
										<p class="mb-15 text-center text-color-gray-1 text-card">
											Like what you see? Sign the contract digitally and the place is yours.
										</p>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="mb-15 image-card">
											<img src="/img/renter_illustrasi4.png" />
										</div>
										<p
											class="mb-15 text-center text-color-dark font-size-20 title-card font-weight-bold">
											<i>MOVE IN!</i>
										</p>
										<p class="mb-15 text-center text-color-gray-1 text-card">
											You are all set! Move in and be part of the community.
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="mt-30 text-center">
											<button class="btn btn-primary btn-wide close font-weight-normal"
												type="button" data-toggle="modal"
												data-target="#modalWhatIsColiving">What is co-living?</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="owner-tab" role="tabpanel">
							<div class="container">
								<div class="row">
									<div class="col-lg-3 col-md-6 col-12">
										<div class="mb-15 image-card">
											<img src="/img/owner1.svg" />
										</div>
										<p
											class="mb-15 text-center text-color-dark font-size-20 title-card font-weight-bold">
											Tell us about your property
										</p>
										<p class="mb-15 text-center text-color-gray-1 text-card">
											Give us your property details. The more details the better.
										</p>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="mb-15 image-card">
											<img src="/img/owner2.svg" />
										</div>
										<p
											class="mb-15 text-center text-color-dark font-size-20 title-card font-weight-bold">
											Let us do the heavy lifting
										</p>
										<p class="mb-15 text-center text-color-gray-1 text-card">
											Sewagi will help you price it right, market it to the right prospects and
											take care of the paperwork.
										</p>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="mb-15 image-card">
											<img src="/img/owner3.svg" />
										</div>

										<p
											class="mb-15 text-center text-color-dark font-size-20 title-card font-weight-bold">
											Approve and sign the digital contract</p>
										<p class="mb-15 text-center text-color-gray-1 text-card">Safe yourself the
											hassle,<br>sign your contract digitally.
										</p>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="mb-15 image-card">
											<img src="/img/owner4.svg" />
										</div>
										<p
											class="mb-15 text-center text-color-dark font-size-20 title-card font-weight-bold">
											Get your passive income
										</p>
										<p class="mb-15 text-center text-color-gray-1 text-card">
											Kick back and see your income grow.
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="mt-30 text-center">
											<button class="btn btn-primary btn-wide close font-weight-normal"
												type="button" data-toggle="modal"
												data-target="#modalPropertyLister">Let&#039;s do it</button>
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
	<!-- end: how sewagi helps you -->

	<!-- start: discover listings -->
	<section class="section-content">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="font-size-32 font-weight-bold text-center mb-40">
						Discover listings that fit you the most</h3>
				</div>
			</div>
			<div class="row row-discover-lists">
				<div class="col-lg-4 col-md-6 col-12 px-0 d-flex align-items-center background-primary-dark">
					<div class="discover-item co-living">
						<div class="banner-tag mb-25 background-white">
							Co-Living</div>
						<p class="font-size-13 color-white mb-15">
							Willing to share living space with others?
						</p>
						<h4 class="font-size-20 font-weight-bold color-white mb-35">
							We can help you find the best housemates match.
						</h4>
						<a class="btn btn-primary btn-wide btn-block" href="#">Find me a co-living</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 px-0 d-flex align-items-center background-aqua">
					<div class="discover-item active-worker">
						<div class="banner-tag mb-25 background-white">
							Active Worker</div>
						<p class="font-size-13 mb-15">
							Can’t find a living space near your office area?
						</p>
						<h4 class="font-size-20 font-weight-bold mb-35">
							We have listings within walking distance near your office.
						</h4>
						<a class="btn btn-primary btn-wide btn-block" href="#">Find a pad near my office</a>
					</div>
				</div>
				<div class="col-lg-4 col-12 px-0 d-flex align-items-center background-primary-orange">
					<div class="discover-item family-friendly">
						<div class="banner-tag mb-25 background-white">
							Family Friendly</div>
						<p class="font-size-13 color-white mb-15">
							Need a living area for your kids?</p>
						<h4 class="font-size-20 font-weight-bold color-white mb-35">
							Worry no more. We can provide listings with school nearby.
						</h4>
						<a class="btn btn-primary btn-wide btn-block" href="#">Find a pad near school</a>


					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end: discover listings -->

	<!-- start: property owner -->
	<section class="section-content background-primary-dark py-60 mt-120">
		<div class="container">
			<div class="row row-property-lister">
				<div class="col-md-6 col-12 d-flex flex-column flex-wrap justify-content-start align-items-center">
					<img class="img-fluid" src="/img/sofa-asset.png" />
				</div>
				<div class="col-md-6 col-12 d-flex flex-column flex-wrap justify-content-center align-items-center">
					<div class="property-lister text-center ml-xl-15">
						<p class="font-mono text-color-orange text-uppercase mb-5">
							Are you a property lister?</p>
						<h3 class="font-size-32 font-weight-bold color-white mb-40">
							Go for effortless leasing as a</h3>
						<div class="btn-list-group">
							<a class="btn btn-primary btn-wide" href="/property-lister/homeowner"
								role="button">Homeowner</a>
							<a class="btn btn-primary btn-wide" href="/property-lister/agent" role="button">Property
								Agent</a>
							<a class="btn btn-primary btn-wide" href="/property-lister/building-management"
								role="button">Building
								Management</a>
							<a class="btn btn-primary btn-wide" href="/property-lister/housemate"
								role="button">Housemate</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end: property owner -->

	<!-- start: work with us -->
	<section class="section-content background-light-orange section-work-with-us">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div
						class="work-with-us d-flex flex-column flex-wrap justify-content-center align-items-center pt-50 pb-75">
						<p class="font-mono text-color-orange text-uppercase text-center mb-35">Work With Us</p>
						<h3 class="font-size-22 font-weight-bold text-center mb-20">Start earning income from real
							estate
							deals on your free time</h3>
						<a class="btn btn-primary btn-wide" href="/join/agent">Become a showing
							agent</a>
						<h3 class="font-size-22 font-weight-bold text-center mt-40 mb-20">Increase efficiency by placing
							your fellow workers near your office or project locations</h3>
						<a class="btn btn-primary btn-wide" href="/join/company-client">Start
							placing my
							company staff</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<template id="home-recent-search">
		<label class="btn btn-checkbox btn-rounded btn-outline-primary btn-overlay mr-10">
			<input class="home-recent" type="radio" /><span class="item-name"></span>
		</label>
	</template>
	<!-- end: work with us -->

	<!-- start: recommend us -->
	<section class="section-content section-testimonial">
		<div class="pot-brick"></div>
		<div class="container pt-100 pb-100">
			<div class="row">
				<div class="col-12">
					<p class="font-mono text-color-orange text-uppercase text-center mb-35">They recommend us</p>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="owl-carousel owl-sewagi-testimonials owl-loaded owl-drag">
						<!-- start: testi item -->

						<!-- end: testi item -->
						<!-- start: testi item -->

						<!-- end: testi item -->
						<!-- start: testi item -->

						<!-- end: testi item -->
						<div class="owl-stage-outer">
							<div class="owl-stage"
								style="transform: translate3d(-2220px, 0px, 0px); transition: 0.25s; width: 7770px;">
								<div class="owl-item cloned" style="width: 1110px;">
									<div class="col-12">
										<div class="testimonial-item">
											<div class="testimonial-icon text-center">
												<i class="fas fa-quote-left"></i>
											</div>
											<div class="testimonial-text text-center">
												<p class="font-size-20 mb-0">Sewagi allows me to handle my property from
													anywhere. No more spending time in traffic just to sign lease
													contract.
												</p>
											</div>
											<div class="testimonial-image text-center">
												<img class="rounded-circle" src="/img/testi.jpg" alt="testimonial User">
												<span class="testimonial-name d-block mb-10">George Norton</span>
												<span class="testimonial-role d-block">Homeowner</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 1110px;">
									<div class="col-12">
										<div class="testimonial-item">
											<div class="testimonial-icon text-center">
												<i class="fas fa-quote-left"></i>
											</div>
											<div class="testimonial-text text-center">
												<p class="font-size-20 mb-0">Sewagi allows me to handle my property from
													anywhere. No more spending time in traffic just to sign lease
													contract.
												</p>
											</div>
											<div class="testimonial-image text-center">
												<img class="rounded-circle" src="/img/testi.jpg" alt="testimonial User">
												<span class="testimonial-name d-block mb-10">George Norton</span>
												<span class="testimonial-role d-block">Homeowner</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item active" style="width: 1110px;">
									<div class="col-12">
										<div class="testimonial-item">
											<div class="testimonial-icon text-center">
												<i class="fas fa-quote-left"></i>
											</div>
											<div class="testimonial-text text-center">
												<p class="font-size-20 mb-0">Sewagi allows me to handle my property from
													anywhere. No more spending time in traffic just to sign lease
													contract.
												</p>
											</div>
											<div class="testimonial-image text-center">
												<img class="rounded-circle" src="/img/testi.jpg" alt="testimonial User">
												<span class="testimonial-name d-block mb-10">George Norton</span>
												<span class="testimonial-role d-block">Homeowner</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item" style="width: 1110px;">
									<div class="col-12">
										<div class="testimonial-item">
											<div class="testimonial-icon text-center">
												<i class="fas fa-quote-left"></i>
											</div>
											<div class="testimonial-text text-center">
												<p class="font-size-20 mb-0">Sewagi allows me to handle my property from
													anywhere. No more spending time in traffic just to sign lease
													contract.
												</p>
											</div>
											<div class="testimonial-image text-center">
												<img class="rounded-circle" src="/img/testi.jpg" alt="testimonial User">
												<span class="testimonial-name d-block mb-10">George Norton</span>
												<span class="testimonial-role d-block">Homeowner</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item" style="width: 1110px;">
									<div class="col-12">
										<div class="testimonial-item">
											<div class="testimonial-icon text-center">
												<i class="fas fa-quote-left"></i>
											</div>
											<div class="testimonial-text text-center">
												<p class="font-size-20 mb-0">Sewagi allows me to handle my property from
													anywhere. No more spending time in traffic just to sign lease
													contract.
												</p>
											</div>
											<div class="testimonial-image text-center">
												<img class="rounded-circle" src="/img/testi.jpg" alt="testimonial User">
												<span class="testimonial-name d-block mb-10">George Norton</span>
												<span class="testimonial-role d-block">Homeowner</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 1110px;">
									<div class="col-12">
										<div class="testimonial-item">
											<div class="testimonial-icon text-center">
												<i class="fas fa-quote-left"></i>
											</div>
											<div class="testimonial-text text-center">
												<p class="font-size-20 mb-0">Sewagi allows me to handle my property from
													anywhere. No more spending time in traffic just to sign lease
													contract.
												</p>
											</div>
											<div class="testimonial-image text-center">
												<img class="rounded-circle" src="/img/testi.jpg" alt="testimonial User">
												<span class="testimonial-name d-block mb-10">George Norton</span>
												<span class="testimonial-role d-block">Homeowner</span>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item cloned" style="width: 1110px;">
									<div class="col-12">
										<div class="testimonial-item">
											<div class="testimonial-icon text-center">
												<i class="fas fa-quote-left"></i>
											</div>
											<div class="testimonial-text text-center">
												<p class="font-size-20 mb-0">Sewagi allows me to handle my property from
													anywhere. No more spending time in traffic just to sign lease
													contract.
												</p>
											</div>
											<div class="testimonial-image text-center">
												<img class="rounded-circle" src="/img/testi.jpg" alt="testimonial User">
												<span class="testimonial-name d-block mb-10">George Norton</span>
												<span class="testimonial-role d-block">Homeowner</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="owl-nav">
							<button type="button" role="presentation" class="owl-prev">
								<font-awesome-icon :icon="['fas', 'left-long']" size="2xl" style="color: #ffffff;" />
							</button>
							<button type="button" role="presentation" class="owl-next">
								<font-awesome-icon :icon="['fas', 'right-long']" size="2xl" style="color: #ffffff;" />
							</button>
						</div>
						<div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button
								role="button" class="owl-dot"><span></span></button><button role="button"
								class="owl-dot"><span></span></button></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="section-testimonial-separator row">
		<div class="col-md-8 offset-md-2" style="padding: 0;">
			<div style="height: 1px;width: 103%;background-color: #ddd;margin-left: -7.5px;margin-right: -7.5px;"></div>
		</div>
	</div>
	<!-- end: recommend us -->

	<!-- start: footer -->
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

						<p class="text-footer-header mb-30">FOUND A HOME YOU LIKE BUT NOT ON THE TERMS YOU WANT?</p>
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
							<i class="fas fa-globe-asia color-white font-size-22 mr-10"></i> <a href="/set-lang/id"
								class="color-white font-weight-light mr-15">Id</a>
							<a href="/set-lang/en" class="color-white font-weight-light">En</a>
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
							<img class="sewagi-copy" src="/img/sewagi-logo-only.png" alt="Sewagi Brand"> Sewagi &copy;
							2019
							<!-- <script>
                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- end: footer -->
</template>

<script setup lang="ts">

</script>

<style scoped></style>