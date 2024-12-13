<template>
	<div id="list-property">
		<nav id="list-property-navbar" class="navbar navbar-expand-lg navbar-light bg-white nav-border fixed-top py-4"
			solid-on-scroll>
			<div class="container" style="padding: 0px">
				<a class="navbar-brand" href="#" data-toggle="modal" data-target="#modalConfirmation"
					style="height: 36px;margin: 0px;padding: 0px">Navbar</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarListPropertyContent" aria-controls="navbarListPropertyContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-between" id="navbarListPropertyContent">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item active">
								<a href="">
									<span>1</span>
									Basic property information
								</a>
							</li>
							<li class="breadcrumb-item " aria-current="page">
								<a href="" class="disabled">
									<span>2</span>
									Tell us the details
								</a>
							</li>
							<li class="breadcrumb-item " aria-current="page">
								<a href="" class="disabled">
									<span>3</span>
									Payment preferences
								</a>
							</li>
							<li class="breadcrumb-item " aria-current="page">
								<a href="" class="disabled">
									<span>4</span>
									Review &amp; Submit
								</a>
							</li>
						</ol>
					</nav>
					<a class="save-draft-link saveDraft" href="#">
						Save as Draft
					</a>
				</div>
			</div>
		</nav>

		<div class="list-property-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-2" style="padding-left: 0px;padding-right: 0px">
						<!-- Sidebar List Property -->
						<nav class="navbar-vertical navbar-light" style="display: block;">
							<ul class="navbar-nav flex-column">
								<li class="nav-item">
									<a id="propertyNavItem1" href="#" class="disabled"
										style="letter-spacing: 1.8px; padding-left: 0px;padding-right: 0px">
										ESTATE TYPE & LIVING CONDITION
									</a>
								</li>
								<li class="nav-item">
									<a id="propertyNavItem2" class="disabled" href="#"
										style="letter-spacing: 1.8px; padding-left: 0px;padding-right: 0p">
										BEDROOM & BATHROOM
									</a>
								</li>
								<li class="nav-item">
									<a id="propertyNavItem3" class="disabled" href="#"
										style="letter-spacing: 1.8px; padding-left: 0px;padding-right: 0p">
										LOCATION
									</a>
								</li>
							</ul>
						</nav>
						<nav class="navbar-vertical navbar-light" style="display: block;">
							<ul class="navbar-nav flex-column">
								<li class="nav-item">
									<a id="propertyNavItem4" href="#" class="disabled" style="letter-spacing: 1.8px">
										DESCRIPTION & HOUSE RULES
									</a>
								</li>
								<li class="nav-item">
									<a id="propertyNavItem5" class="disabled" href="#" style="letter-spacing: 1.8px">
										AMENITIES & FACILITIES
									</a>
								</li>
								<li class="nav-item">
									<a id="propertyNavItem6" class="disabled" style="letter-spacing: 1.8px">
										PHOTOS
									</a>
								</li>
								<li class="nav-item">
									<a id="propertyNavItem7" class="disabled" style="letter-spacing: 1.8px">
										LEGAL DETAILS
									</a>
								</li>
							</ul>
						</nav>
						<nav class="navbar-vertical navbar-light" style="display: block;">
							<ul class="navbar-nav flex-column">
								<li class="nav-item">
									<a id="propertyNavItem4" href="#" class="disabled" style="letter-spacing: 1.8px">
										PAYMENT PREFERENCE FOR ENTIRE SPACE
									</a>
								</li>
								<li class="nav-item">
									<a id="propertyNavItem5" class="disabled" href="#" style="letter-spacing: 1.8px">
										PAYMENT PREFERENCE FOR CO - LIVING
									</a>
								</li>
							</ul>
						</nav>
						<!-- End Sidebar List Property -->
					</div>

					<div class="col-md-10">
						<div class="list-property-content">
							<form id="newPropertyData3" role="form" method="POST"
								action="http://localhost:8000/create-property/3" class="form-list-property">
								<input type="hidden" name="_token" value="jUTQCZRT3puNN5hQuWcdrh8ugb6ODyjZp1DkochD">
								<div class="mb-5">
									<h4 class="mb-4">Where is the location?</h4>
									<p class="text-muted fs-12">Your exact address will only be shared with prospective
										renters engaged in a tour or booking request.</p>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" name="property_addr_autocomplete"
													class="form-control form-control-dashboard"
													placeholder="Enter the street address or Building Name"
													id="property-addr-autocomplete" autocomplete="off" required
													value="">
												<span class="input-required"></span>
												<input type="hidden" name="property_address" id="input-property-address"
													value="" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-5">
											<div class="form-group">
												<input id="input-property-street-number"
													class="form-control form-control-dashboard required" type="text"
													placeholder="Enter property number (e.g.7, A5)" value=""
													name="property_number">
												<span class="input-required"></span>
											</div>
										</div>
										<div class="col-md-7">
											<div class="form-group">
												<input id="input-property-details"
													class="form-control form-control-dashboard required" type="text"
													placeholder="Enter property details (e.g.Block, Tower unit)"
													value="" name="property_details">
												<span class="input-required"></span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input id="input-property-city"
													class="form-control form-control-dashboard required" type="text"
													placeholder="Enter city" value="" name="city">
												<span class="input-required"></span>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input id="input-property-district"
													class="form-control form-control-dashboard required" type="text"
													placeholder="Enter district" value="" name="district">
												<span class="input-required"></span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<input id="input-property-village"
													class="form-control form-control-dashboard required" type="text"
													placeholder="Enter village" value="" name="village">
												<span class="input-required"></span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<input id="input-property-province"
													class="form-control form-control-dashboard required" type="text"
													placeholder="Enter province" value="" name="province">
												<span class="input-required"></span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<input id="input-property-postcode"
													class="form-control form-control-dashboard" type="text"
													placeholder="Enter post code" value="" name="post_code">
												<span class="input-required"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="mb-5">
									<div class="row">
										<div class="col-md-8">
											<h4 class="mb-4">Is the pin in the right location?</h4>
											<p class="text-muted fs-12">
												The pin need to be precisely pointed to the location of your property.
												Press the adjust button to correct the pin point’s location.
											</p>
										</div>
										<div class="col-md-4 d-flex justify-content-end align-items-start">
											<a id="link-adjust" class="btn btn-outline-primary" href="#">
												ADJUST
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div id="list-property-map"></div>
											<input type="hidden" name="latitude" id="latitude" value="-6.21462">
											<input type="hidden" name="longitude" id="longitude" value="106.84513">
										</div>
									</div>
								</div>
								<input type="hidden" name="id" value=" 2" />
								<input value="3" type="hidden" name="step" id="step">
							</form>
						</div>
						<div class="row">
							<div class="col-md-12 border-top py-5 justify-content-between d-flex">
								<a id="link-previous" href="/create-property/2/2"
									class="btn btn-link btn-prev-list-property d-flex align-items-center">
									<i class="fas fa-long-arrow-alt-left mr-2"></i>
									Previous
								</a>
								<button id="submit-list-property" class="btn btn-primary btn-next-list-property">
									Next
									<i class="fas fa-long-arrow-alt-right ml-2"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script setup lang="ts">
import '@/assets/styles/style.css';

</script>

<style scoped></style>