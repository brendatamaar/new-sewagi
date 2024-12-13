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
							<form id="newPropertyData4" role="form" method="POST"
								action="http://localhost:8000/create-property/4" class="form-list-property">
								<input type="hidden" name="_token" value="jUTQCZRT3puNN5hQuWcdrh8ugb6ODyjZp1DkochD">
								<div class="mb-5">
									<h4 class="mb-4 required">By Give a title describing your property</h4>
									<div class="form-group">
										<textarea class="form-control form-control-dashboard"
											placeholder="E.g. Amazing Cityscape - SCBD Apartment" rows="2"
											maxlength="60" name="title" required></textarea>
									</div>
								</div>
								<div class="mb-5">
									<h4 class="mb-4 required">Give more details to better describe your property</h4>
									<div class="form-group">
										<textarea class="form-control form-control-dashboard"
											placeholder="E.g. Amazing Cityscape - SCBD Apartment" rows="6"
											maxlength="300" name="description" required></textarea>
									</div>
								</div>
								<div class="mb-5">
									<h4 class="mb-4 required">Select design preferences best describing your property
									</h4>
									<p class="text-muted fs-12">You may select up to 2 styles</p>
									<div class="row">
										<div class="col-md-3 mb-3 text-center">
											<img src="" alt="" class="img-fluid my-4">
											<div class="btn-group-toggle" data-toggle="buttons">
												<label
													class="btn btn-sm btn-checkbox btn-outline-primary property-style ">
													<input type="checkbox" name="style_id[]" value="1">+ Industrial
												</label>
											</div>
										</div>
										<div class="col-md-3 mb-3 text-center">
											<img src="" alt="" class="img-fluid my-4">
											<div class="btn-group-toggle" data-toggle="buttons">
												<label
													class="btn btn-sm btn-checkbox btn-outline-primary property-style ">
													<input type="checkbox" name="style_id[]" value="2">+ Minimalist
												</label>
											</div>
										</div>
										<div class="col-md-3 mb-3 text-center">
											<img src="" alt="" class="img-fluid my-4">
											<div class="btn-group-toggle" data-toggle="buttons">
												<label
													class="btn btn-sm btn-checkbox btn-outline-primary property-style ">
													<input type="checkbox" name="style_id[]" value="3">+ Contemporary
												</label>
											</div>
										</div>
										<div class="col-md-3 mb-3 text-center">
											<img src="" alt="" class="img-fluid my-4">
											<div class="btn-group-toggle" data-toggle="buttons">
												<label
													class="btn btn-sm btn-checkbox btn-outline-primary property-style ">
													<input type="checkbox" name="style_id[]" value="4">+ Vintage
												</label>
											</div>
										</div>
										<div class="col-md-3 mb-3 text-center">
											<img src="" alt="" class="img-fluid my-4">
											<div class="btn-group-toggle" data-toggle="buttons">
												<label
													class="btn btn-sm btn-checkbox btn-outline-primary property-style ">
													<input type="checkbox" name="style_id[]" value="5">+ Traditional
												</label>
											</div>
										</div>
										<div class="col-md-3 mb-3 text-center">
											<img src="" alt="" class="img-fluid my-4">
											<div class="btn-group-toggle" data-toggle="buttons">
												<label
													class="btn btn-sm btn-checkbox btn-outline-primary property-style ">
													<input type="checkbox" name="style_id[]" value="6">+ Scandinavian
												</label>
											</div>
										</div>
										<div class="col-md-3 mb-3 text-center">
											<img src="" alt="" class="img-fluid my-4">
											<div class="btn-group-toggle" data-toggle="buttons">
												<label
													class="btn btn-sm btn-checkbox btn-outline-primary property-style ">
													<input type="checkbox" name="style_id[]" value="7">+ Coastal
												</label>
											</div>
										</div>
										<div class="col-md-3 mb-3 text-center">
											<img src="" alt="" class="img-fluid my-4">
											<div class="btn-group-toggle" data-toggle="buttons">
												<label
													class="btn btn-sm btn-checkbox btn-outline-primary property-style ">
													<input type="checkbox" name="style_id[]" value="8">+ Unconventional
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="mb-5">
									<h4 class="mb-4 required">On which floor is your property?</h4>
									<div class="form-group">
										<select class="select2 select2-list-property" name="floor_range"
											id="property-floor" required>
											<option value=""></option>
											<option value="below 5">Below 5 storeys</option>
											<option value="between 5-10">Between 5-10 storeys</option>
											<option value="above 10">Above 10 storeys</option>
										</select>
									</div>
								</div>
								<div class="mb-5">
									<h4 class="mb-4">Do you have any property rules?</h4>
									<div class="row">
										<div class="col-md-12 d-flex justify-content-between">
											<p id="pet-switch-label">Pet Friendly</p>
											<div class="custom-control custom-switch">
												<input value="1" type="checkbox" class="custom-control-input"
													name="is_pet_friendly" id="pet-switch">
												<label class="custom-control-label" for="pet-switch"></label>
											</div>
										</div>
									</div>
								</div>
								<input type="hidden" name="id" value=" 2" />
								<input value="4" type="hidden" name="step" id="step">
							</form>
							<input value="0" type="hidden" name="count" id="count">
						</div>
						<div class="row">
							<div class="col-md-12 border-top py-5 justify-content-between d-flex">
								<a id="link-previous" href="/create-property/2/3"
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