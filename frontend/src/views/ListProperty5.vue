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
							<form id="newPropertyData5" role="form" method="POST"
								action="http://localhost:8000/create-property/5" class="form-list-property">
								<input type="hidden" name="_token" value="jUTQCZRT3puNN5hQuWcdrh8ugb6ODyjZp1DkochD">
								<div class="mb-5">
									<h4 class="mb-4 required">What is your property furniture arrangement?</h4>
									<div class="form-group">
										<select class="select2 select2-list-property" name="furniture"
											id="furniture-arrangement">
											<option value=""></option>
											<option value="Furnished">Furnished</option>
											<option value="Semi-Furnished">Semi-Furnished</option>
											<option value="Unfurnished">Unfurnished</option>
										</select>
									</div>
								</div>
								<div class="mb-5">
									<div class="d-flex justify-content-between mb-4">
										<h4 class="required">What amenities do you provide?</h4>
										<button
											data-property_id="{&quot;id&quot;:2,&quot;title&quot;:null,&quot;description&quot;:null,&quot;type&quot;:&quot;apartment&quot;,&quot;unit_size&quot;:50,&quot;building_size&quot;:0,&quot;is_co_living&quot;:1,&quot;is_entire_space&quot;:1,&quot;bedrooms&quot;:0,&quot;bathrooms&quot;:0,&quot;available_room&quot;:0,&quot;rented_room&quot;:0,&quot;total_room&quot;:0,&quot;estimated_price&quot;:null,&quot;land_area_type&quot;:null,&quot;arrangement&quot;:null,&quot;floor_range&quot;:null,&quot;storey&quot;:null,&quot;is_pet_friendly&quot;:0,&quot;address&quot;:null,&quot;property_number&quot;:null,&quot;property_detail&quot;:null,&quot;province&quot;:null,&quot;city&quot;:null,&quot;district&quot;:null,&quot;village&quot;:null,&quot;postcode&quot;:null,&quot;latitude&quot;:null,&quot;longitude&quot;:null,&quot;user_id&quot;:2,&quot;co_living_min_price&quot;:0,&quot;entire_space_min_price&quot;:0,&quot;furniture&quot;:null,&quot;belong_to&quot;:null,&quot;ownership_status&quot;:null,&quot;status&quot;:0,&quot;is_insured&quot;:0,&quot;is_draft&quot;:0,&quot;is_featured&quot;:0,&quot;step&quot;:0,&quot;link_360_file&quot;:null,&quot;approved_at&quot;:&quot;2024-12-13 15:51:54&quot;,&quot;created_at&quot;:&quot;2024-12-13 15:51:54&quot;,&quot;updated_at&quot;:&quot;2024-12-13 15:51:54&quot;,&quot;deleted_at&quot;:null,&quot;location&quot;:{&quot;lat&quot;:0,&quot;lon&quot;:0},&quot;slug_url&quot;:&quot;&quot;,&quot;amenities&quot;:[],&quot;facilities&quot;:[],&quot;styles&quot;:[],&quot;viewed&quot;:0}"
											data-original_caption="Add" type="button" id="btn-add-amenities"
											data-toggle="collapse" href="#amenities-provide" aria-expanded="false"
											aria-controls="amenities-provide" class="btn btn-link">Add</button>
									</div>
									<div id="amenities-provide" class="collapse">
										<div class="row">
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="amenity_id[]" value="9">+ Wi-fi
														enabled
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="amenity_id[]" value="10">+ TV
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="amenity_id[]" value="11">+ Air
														conditioner
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="amenity_id[]" value="12">+ Deposit
														box
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="amenity_id[]" value="13">+ Fridge
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="amenity_id[]" value="14">+ Dining
														Set
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="amenity_id[]" value="15">+
														Workspace
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="amenity_id[]" value="16">+ Washing
														Machine
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="amenity_id[]" value="17">+ Water
														heater
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="amenity_id[]" value="18">+ Dryer
														machine
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="amenity_id[]" value="19">+ Cooking
														appliances
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="amenity_id[]" value="20">+ Kitchen
														set
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="amenity_id[]" value="21">+ Dining
														set
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="amenity_id[]" value="22">+ Water
														dispenser
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="amenity_id[]" value="23">+ Linen
														set
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="amenity_id[]" value="24">+ Bathtub
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="amenity_id[]" value="25">+ Maid
														quarter
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="mb-5">
									<div class="d-flex justify-content-between mb-4">
										<h4 class="required">What are the available facilities?</h4>
										<button
											data-property_id="{&quot;id&quot;:2,&quot;title&quot;:null,&quot;description&quot;:null,&quot;type&quot;:&quot;apartment&quot;,&quot;unit_size&quot;:50,&quot;building_size&quot;:0,&quot;is_co_living&quot;:1,&quot;is_entire_space&quot;:1,&quot;bedrooms&quot;:0,&quot;bathrooms&quot;:0,&quot;available_room&quot;:0,&quot;rented_room&quot;:0,&quot;total_room&quot;:0,&quot;estimated_price&quot;:null,&quot;land_area_type&quot;:null,&quot;arrangement&quot;:null,&quot;floor_range&quot;:null,&quot;storey&quot;:null,&quot;is_pet_friendly&quot;:0,&quot;address&quot;:null,&quot;property_number&quot;:null,&quot;property_detail&quot;:null,&quot;province&quot;:null,&quot;city&quot;:null,&quot;district&quot;:null,&quot;village&quot;:null,&quot;postcode&quot;:null,&quot;latitude&quot;:null,&quot;longitude&quot;:null,&quot;user_id&quot;:2,&quot;co_living_min_price&quot;:0,&quot;entire_space_min_price&quot;:0,&quot;furniture&quot;:null,&quot;belong_to&quot;:null,&quot;ownership_status&quot;:null,&quot;status&quot;:0,&quot;is_insured&quot;:0,&quot;is_draft&quot;:0,&quot;is_featured&quot;:0,&quot;step&quot;:0,&quot;link_360_file&quot;:null,&quot;approved_at&quot;:&quot;2024-12-13 15:51:54&quot;,&quot;created_at&quot;:&quot;2024-12-13 15:51:54&quot;,&quot;updated_at&quot;:&quot;2024-12-13 15:51:54&quot;,&quot;deleted_at&quot;:null,&quot;location&quot;:{&quot;lat&quot;:0,&quot;lon&quot;:0},&quot;slug_url&quot;:&quot;&quot;,&quot;amenities&quot;:[],&quot;facilities&quot;:[],&quot;styles&quot;:[],&quot;viewed&quot;:0}"
											data-original_caption="Add" type="button" id="btn-add-facilities"
											data-toggle="collapse" href="#available-facilities" aria-expanded="false"
											aria-controls="available-facilities" class="btn btn-link">Add</button>
									</div>
									<div id="available-facilities" class="collapse">
										<div class="row">
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="facility_id[]" value="1">+ 24 hrs
														security
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="facility_id[]" value="2">+ Pool
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="facility_id[]" value="3">+ Garden
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="facility_id[]" value="4">+ Laundry
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="facility_id[]" value="5">+ Gym
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="facility_id[]" value="6">+ Parking
														space
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="facility_id[]" value="7">+ Shopping
														mall
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="facility_id[]" value="8">+ Nursery
														/ Kindergarten
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="facility_id[]" value="9">+ Business
														center / Co-working space
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="facility_id[]" value="10">+ Sport
														court
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="facility_id[]" value="11">+ Mini
														mart
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="facility_id[]" value="12">+ Multi
														function hall
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="facility_id[]" value="13">+
														Concierge
													</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-sm btn-checkbox btn-outline-primary ">
														<input type="checkbox" name="facility_id[]" value="14">+
														Playground
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<input type="hidden" name="id" value=" 2" />
								<input value="5" type="hidden" name="step" id="step">
							</form>
							<input value="5" type="hidden" name="step" id="step">
						</div>
						<div class="row">
							<div class="col-md-12 border-top py-5 justify-content-between d-flex">
								<a id="link-previous" href="/create-property/2/4"
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