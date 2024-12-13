<template>
	<div id="list-property">
		<nav id="list-property-navbar"
			class="navbar navbar-expand-lg navbar-light bg-white nav-border fixed-top py-4"
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
							<form id="newPropertyData1" role="form" method="POST"
								action="http://localhost:8000/create-property" class="form-list-property">
								<input type="hidden" name="_token" value="jUTQCZRT3puNN5hQuWcdrh8ugb6ODyjZp1DkochD">
								<div class="mb-5">
									<h4 class="mb-4 required">What is the estate type?</h4>
									<div class="row">
										<div class="col-md-8">
											<div class="form-group">
												<select id="estate-type" class="select2 select2-list-property"
													name="type">
													<option value="">Select estate type</option>
													<option value="apartment">Apartment</option>
													<option value="house">House</option>
												</select>
											</div>
										</div>
										<div class="col-md-4 estate-size">
											<div class="form-group d-flex align-items-center">
												<label class="label-special text-muted fs-12" id="estate-label"
													for="">UNIT
													SIZE</label>
												<input class="form-control form-control-dashboard" id="size-input"
													type="number" placeholder="0" name="size" value="">
												<span class="ml-2 fs-12">m<sup>2</sup></span>
											</div>
										</div>
									</div>
								</div>
								<div class="mb-5">
									<h4 class="mb-4 required">What is the ideal living condition?</h4>
									<p class="text-muted fs-12">You can choose more than one.</p>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="card card-list-property">
											<div class="card-header">
												<img class="mb-4" src="/img/list-property-coliving.svg"
													alt="Co-living" />
												<h5>Co-living</h5>
											</div>
											<div class="card-body justify-content-between d-flex flex-column">
												<div class="card-text">
													<p>
														You accept multiple renters leasing your property bedrooms and
														sharing the common areas. This option is also useful when
														seeking a
														housemate for your property
													</p>
													<p>
														By selecting co-living, you agree to rent your property on room
														by
														room basis, forgoing leasing all bedrooms at once. We call this
														progressive leasing.
													</p>
													<a href="#">Connect with us for more info.</a>
												</div>
												<div class="btn-group-toggle" data-toggle="buttons">
													<label
														class="btn btn-checkbox btn-rounded btn-outline-primary mr-10 mb-10 ">
														<input value="co-living" type="checkbox"
															name="living_cond[]">Pilih
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="card card-list-property">
											<div class="card-header">
												<img class="mb-4" src="/img/list-property-entirespace.svg"
													alt="Co-living" />
												<h5>Entire Space</h5>
											</div>
											<div class="card-body justify-content-between d-flex flex-column">
												<div class="card-text">
													<p>Classic practice of leasing your property to one renter.</p>
													<p>He is entitled to renting your entire property space for him or
														herself.</p>
												</div>
												<div class="btn-group-toggle" data-toggle="buttons">
													<label
														class="btn btn-checkbox btn-rounded btn-outline-primary mr-10 mb-10 ">
														<input value="entire-space" type="checkbox"
															name="living_cond[]">Pilih
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="info-estate-type">
											<p>We will publish your property as co-living friendly and as an entire
												space.
												Giving you more opportunities to lease faster.</p>
											<p>In the case where your property is rented-out as a co-living, you agree
												to
												forfeit entire space leasing for the duration of the contracted length
												of
												stay.</p>
											<a class="fs-12" href="#">Terms Of Use</a>
										</div>
									</div>
								</div>
								<input type="hidden" name="id" value="" />
								<input value="1" type="hidden" name="step" id="step">
							</form>
						</div>
						<div class="row">
							<div class="col-md-12 border-top py-5 justify-content-between d-flex">
								<div class="col-md-12 py-5 justify-content-end d-flex">
									<button id="submit-list-property" class="btn btn-primary btn-next-list-property"
										style="padding-left: 32px;padding-right: 32px;padding-top: 15px;padding-bottom: 15px;letter-spacing: 1px">
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
	</div>
</template>

<script setup lang="ts">
import { Button, HomeSearchBar } from '@/components'
import '@/assets/styles/style.css';

</script>

<style scoped></style>