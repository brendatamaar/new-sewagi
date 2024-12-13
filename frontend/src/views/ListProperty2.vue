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
							<div id="newPropertyData2" class="form-list-property">
								<input type="hidden" name="_token" value="jUTQCZRT3puNN5hQuWcdrh8ugb6ODyjZp1DkochD">
								<div class="mb-5" id="bedroom-wrapper">
									<h4 class="mb-4">Bedrooms inventory</h4>
									<div id="bedroom-wrapper-content">
										<form action="#" method="POST" class="card mb-4 template-bedroom" data-id="0">
											<div class="card-body">
												<div class="d-flex justify-content-between bedroom-title-wrap">
													<h5 class="mb-5 bedroom-title"></h5>
													<div class="button-group">
														<input type="hidden" name="id" value="0" class="bed_id">
														<input type="hidden" name="property_id" value="2">
														<button type="submit" class="mr-3 btn btn-link">Save</button>
														<button type="submit" class="bedroom-row-reset btn btn-link">
															<i class="fas fa-trash-alt"></i>
														</button>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group d-relative">
															<label for="bedType" class="required"
																style="font-size: 12px;font-weight: 500;color: #A6B2B8; letter-spacing: 1.8px;text-transform: uppercase;">Bedroom
																type</label>
															<select class="select2 select2-list-property bed-type"
																name="type" id="" required>
																<option value=""></option>
																<option value="master"
																	title="Bedroom containing the most amenities, typically the largest in your property">
																	Master Bedroom</option>
																<option value="standard"
																	title="Bedroom smaller in size than your master bedroom, with less amenities">
																	Standard Bedroom</option>
																<option value="pocket"
																	title="Bedroom fit for the budget conscious renter, typically smaller in size than your standard bedroom, with fewer amenities">
																	Pocket Bedroom</option>
															</select>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label class="required" for=""
																style="font-size: 12px;font-weight: 500;color: #A6B2B8; letter-spacing: 1.8px;text-transform: uppercase;">Bedroom
																Size</label>
															<div class="input-group">
																<input
																	class="form-control form-control-dashboard bedroom-size"
																	id="unit-size-input" type="number" placeholder="0"
																	min="0" name="size" value="" required>
																<div class="input-group-append">
																	<span class="input-group-text"
																		id="basic-addon2">m<sup>2</sup></span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label class="required" for=""
																style="font-size: 12px;font-weight: 500;color: #A6B2B8; letter-spacing: 1.8px;text-transform: uppercase;">Bedroom
																quantity</label>
															<input
																class="form-control form-control-dashboard mb-2 bedroom-quantity"
																type="number" placeholder="1" value="1" min="1"
																name="quantity" required>
															<a href="#" data-toggle="modal"
																data-target="#modalRoomNumbering"
																class="required modal-room-numbering-link">Room
																Numbering</a>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<div class="form-group">
															<label for="bedType" class="required"
																style="font-size: 12px;font-weight: 500;color: #A6B2B8; letter-spacing: 1.8px;text-transform: uppercase;">Bedroom
																furniture arrangement</label>
															<select class="select2 select2-list-property bed-furniture"
																name="furniture" id="" required>
																<option value=""></option>
																<option value="furnished">Furnished</option>
																<option value="semi-furnished">Semi-Furnished</option>
																<option value="unfurnished">Unfurnished</option>
															</select>
														</div>
													</div>
												</div>
												<div id="" class="row bed-arrangement-wrapper" style="display: none">
													<div class="col-md-8">
														<div class="form-group">
															<label for="bedArrangement" class="required"
																style="font-size: 12px;font-weight: 500;color: #A6B2B8; letter-spacing: 1.8px;text-transform: uppercase;">Bed
																arrangement</label>
															<select
																class="select2 select2-list-property bed-arrangement"
																name="bed_arrangement" id="">
																<option value=""></option>
																<option value="twin">Twin Bed</option>
																<option value="single">Single Size Bed</option>
																<option value="queen">Queen Size Bed</option>
																<option value="king">King Size Bed</option>
															</select>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label for="bedLayout">Bedroom Layout</label>
															<div class="btn-group-toggle" data-toggle="buttons">
																<label
																	class="btn btn-rounded btn-checkbox btn-outline-primary mr-10 mb-10">
																	<input type="checkbox" name="is_loft" value="1">Loft

																</label>
															</div>
														</div>
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<label for="bedAmenities">Bedroom Amenities</label>
															<div class="btn-group-toggle" data-toggle="buttons">
																<label
																	class="btn btn-rounded btn-checkbox btn-outline-primary mr-10 mb-10">
																	<input type="checkbox" value="1"
																		class="bedroom-amenities-unfurnished"
																		name="amenities[]">Ensuite bathroom
																</label>
																<label
																	class="btn btn-rounded btn-checkbox btn-outline-primary mr-10 mb-10">
																	<input type="checkbox" value="2"
																		class="bedroom-amenities-unfurnished"
																		name="amenities[]">Ensuite living room
																</label>
																<label
																	class="btn btn-rounded btn-checkbox btn-outline-primary mr-10 mb-10">
																	<input type="checkbox" value="3"
																		class="bedroom-amenities-unfurnished"
																		name="amenities[]">Walk-in closet
																</label>
																<label
																	class="btn btn-rounded btn-checkbox btn-outline-primary mr-10 mb-10">
																	<input type="checkbox" value="4"
																		class="bedroom-amenities-unfurnished"
																		name="amenities[]">Balcony
																</label>
																<label
																	class="btn btn-rounded btn-checkbox btn-outline-primary mr-10 mb-10">
																	<input type="checkbox" value="5"
																		class="bedroom-amenities-furnished"
																		name="amenities[]">Ensuite kitchen
																</label>
																<label
																	class="btn btn-rounded btn-checkbox btn-outline-primary mr-10 mb-10">
																	<input type="checkbox" value="6"
																		class="bedroom-amenities-furnished"
																		name="amenities[]">Deposit box
																</label>
																<label
																	class="btn btn-rounded btn-checkbox btn-outline-primary mr-10 mb-10">
																	<input type="checkbox" value="7"
																		class="bedroom-amenities-furnished"
																		name="amenities[]">TV
																</label>
																<label
																	class="btn btn-rounded btn-checkbox btn-outline-primary mr-10 mb-10">
																	<input type="checkbox" value="8"
																		class="bedroom-amenities-furnished"
																		name="amenities[]">Desk
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
										<form action="#" method="POST" class="card mb-4 form-bedroom">
											<div class="card-body">
												<div class="d-flex justify-content-between bedroom-title-wrap">
													<h5 class="mb-5 bedroom-title">Master Bedroom 1</h5>
													<div class="button-group">
														<input type="hidden" name="id" value="" class="bed_id">
														<input type="hidden" name="property_id" value="1">
														<button type="submit" class="mr-3 btn btn-link">Save</button>
														<button type="button" class="bedroom-row-reset btn btn-link">
															<i class="fas fa-trash-alt"></i>
														</button>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="bedType" class="required">Bedroom type</label>
															<select
																class="select2 select2-list-property bed-type select2inp"
																name="type" id="" required>
																<option value=""></option>
																<option value="master"
																	title="Bedroom containing the most amenities, typically the largest in your property">
																	Master Bedroom</option>
																<option value="standard"
																	title="Bedroom smaller in size than your master bedroom, with less amenities">
																	Standard Bedroom</option>
																<option value="pocket"
																	title="Bedroom fit for the budget conscious renter, typically smaller in size than your standard bedroom, with fewer amenities">
																	Pocket Bedroom</option>
															</select>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label class="required" for="">Bedroom Size</label>
															<div class="input-group">
																<input
																	class="form-control form-control-dashboard bedroom-size"
																	id="unit-size-input" type="number" placeholder="0"
																	min="0" name="size" value="15" required>
																<div class="input-group-append">
																	<span class="input-group-text"
																		id="basic-addon2">m<sup>2</sup></span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label class="required" for="">Bedroom quantity</label>
															<input
																class="form-control form-control-dashboard mb-2 bedroom-quantity"
																type="number" placeholder="1" min="1" name="quantity"
																value="1" required>
															<a href="#" data-toggle="modal"
																data-target="#modalRoomNumbering"
																class="required modal-room-numbering-link">Room
																Numbering</a>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<div class="form-group">
															<label for="bedType" class="required">Bedroom furniture
																arrangement</label>
															<select
																class="select2 select2-list-property bed-furniture select2inp"
																name="furniture" id="" required>
																<option value=""></option>
																<option value="furnished" selected>Furnished</option>
																<option value="semi-furnished">Semi-Furnished</option>
																<option value="unfurnished">Unfurnished</option>
															</select>
														</div>
													</div>
												</div>
												<div id="" class="row bed-arrangement-wrapper" data-id="1">
													<div class="col-md-8">
														<div class="form-group">
															<label for="bedArrangement" class="required">Bed
																arrangement</label>
															<select
																class="select2 select2-list-property bed-arrangement select2inp"
																name="bed_arrangement" id="">
																<option value=""></option>
																<option value="twin" selected>Twin Bed</option>
																<option value="single">Single Size Bed</option>
																<option value="queen">Queen Size Bed</option>
																<option value="king">King Size Bed</option>
															</select>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label for="bedLayout">Bedroom Layout</label>
															<div class="btn-group-toggle" data-toggle="buttons">
																<label
																	class="btn btn-sm btn-checkbox btn-outline-primary mr-10 mb-10">
																	<input type="checkbox" name="is_loft" value="1">+
																	Loft
																</label>
															</div>
														</div>
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<label for="bedAmenities">Bedroom Amenities</label>
															<div class="btn-group-toggle" data-toggle="buttons">
																<label
																	class="btn btn-sm btn-checkbox btn-outline-primary mr-10 mb-10 active">
																	<input type="checkbox" value="1"
																		class="bedroom-amenities"
																		name="amenities[]">Amenity 1
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
									<button id="btn-add-newbedroom" class="btn btn-primary btn-outline-primary">
										ADD NEW BEDROOM
									</button>
								</div>
								<div class="mb-5">
									<h4 class="mb-4">How many bathrooms are there?</h4>
									<div class="form-group form-inline">
										<label class="mr-5">Total bathroom</label>
										<div class='btn-counter'>
											<button class='down_count' href="#" title='Down'>
												<i class="fas fa-minus"></i>
											</button>
											<input class='counter' type="text" placeholder="value..." value="0"
												name="total_bathroom" />
											<button class='up_count' href="#" title='Up'>
												<i class="fas fa-plus"></i>
											</button>
										</div>
									</div>
								</div>
								<div class="mb-5">
									<h4 class="mb-4">Total listed bedrooms: <span class="ml-4" id="total-listed-bedroom"
											name="total_bedroom"></span></h4>
								</div>
								<div id="modal-room-numbering-container"></div>
								<div class="modal fade modal-dashboard modal-room-numbering" id="modalRoomNumbering"
									tabindex="-1" role="dialog">
									<div class="modal-dialog from-right" role="document">
										<div class="modal-content bg-white">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<i class="fas fa-times"></i>
											</button>
											<div class="modal-body text-center">
												<div class="form-group">
													<label class="required font-weight-bolder">Please input your
														bedrooms Number / Name.</label>
													<label class="text-muted d-block">E.g. 1A, 1B, 1C, 101, 102, Jasmin
														1</label>
													<div class="row mt-5 modal-room-numbering-container"></div>
												</div>
												<div class="button-group d-flex justify-content-end">
													<a class="btn btn-primary disabled btn-room-numbering-done" href="#"
														data-dismiss="modal">Done</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="modal-room-numbering-switch-clone" style="display: none;">
									<div class="col-md-6 d-flex align-items-center mb-4 modal-room-numbering-switch">
										<input
											class="form-control form-control-dashboard text-center input-room-numbering"
											name="roomName[]" type="text" placeholder="1A">
										<div class="custom-control custom-switch custom-switch-available">
											<input type="checkbox" class="custom-control-input" id="customSwitch"
												name="roomAvailability" value="1">
											<label class="custom-control-label" for="customSwitch">
												<span>
													Not Available
												</span>
											</label>
										</div>
									</div>
								</div>
								<div class="modal fade modal-dashboard modal-room-numbering" id="modalIncreaseBedroom"
									tabindex="-1" role="dialog">
									<div class="modal-dialog from-right" role="document">
										<div class="modal-content bg-white">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<i class="fas fa-times"></i>
											</button>
											<div class="modal-body text-center">
												<div class="form-group">
													<label class="required font-weight-bolder">Please input your
														bedrooms Number / Name.</label>
													<label class="text-muted d-block">E.g. 1A, 1B, 1C, 101, 102, Jasmin
														1</label>
													<div class="row mt-5 modal-room-numbering-container"></div>
												</div>
												<div class="button-group d-flex justify-content-end">
													<a class="btn btn-primary disabled btn-room-numbering-done" href="#"
														data-dismiss="modal">Done</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal face modal-dashboard modal-derease-room modal-decrease-room"
									id="popUpDecreaseBedroom" tabindex="-1" role="dialog">
									<div class="modal-dialog from-right" role="document">
										<div class="modal-content bg-grey">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<i class="moon-close btn-hover"></i>
											</button>
											<div class="modal-body text-center">
												<label class="mb-5">Are you sure want to decrease the bedroom quantity
													?</label>
												<label class="mb-5">if you decrease, it will update bedrooms
													Number/Name.</label>
											</div>
											<div class="modal-footer no-border justify-content-center">
												<a class="btn btn-primary mr-2" href="#" data-dismiss="modal">YES</a>
												<a class="btn btn-primary mr-2" href="#" data-dismiss="modal">NO</a>
											</div>
										</div>
									</div>
								</div>
								<div class="modal face modal-dashboard modal-increase-room" id="popUpIncreaseBedroom"
									tabindex="-1" role="dialog">
									<div class="modal-dialog from-right" role="document">
										<div class="modal-content bg-grey">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<i class="moon-close btn-hover"></i>
											</button>
											<div class="modal-body text-center">
												<label class="mb-5">By increasing the bedroom quantity you will need
													to</label>
												<label class="mb-5">update the bedrooms Number/Name.'</label>
											</div>
											<div class="modal-footer no-border justify-content-center">
												<a class="btn btn-primary mb-2" href="#" data-dismiss="modal">GOT IT</a>
											</div>
										</div>
									</div>
								</div>
								<div class="modal face modal-dashboard modal-confrim-availability-room"
									id="popUpAvailabilityBedroom" tabindex="-1" role="dialog">
									<div class="modal-dialog from-right" role="document">
										<div class="modal-content bg-grey">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<i class="moon-close btn-hover"></i>
											</button>
											<div class="modal-body text-center">
												<label class="mb-5">Toggling OFF the bedroom, will readjust the number
													of</label>
												<label class="mb-5">available bedroom for the corresponding bedroom
													type, and</label>
												<label class="mb-5">won&#039;t be publish it.</label>
												<label class="mb-5"></label>
												<label class="mb-5">Later, you willbe able to toggle ON the bedroom in
													your</label>
												<label class="mb-5">dashboard, in order to publish and make it available
													for rent</label>
											</div>
											<div class="modal-footer no-border justify-content-center">
												<a class="btn btn-primary mr-2" href="#" data-dismiss="modal">GOT IT</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<form role="form" method="POST" action="http://localhost:8000/create-property/2"
								class="form-list-property">
								<input type="hidden" name="_token" value="jUTQCZRT3puNN5hQuWcdrh8ugb6ODyjZp1DkochD">
								<input type="hidden" name="id" value="2" id="property-id" />
								<input type="hidden" name="total_bedroom" value="0" id="total-bedroom">
								<input type="hidden" name="total_bathroom" value="0" id="total-bathroom">
								<input value="2" type="hidden" name="step" id="step">
							</form>
							<input value="0" type="hidden" name="count" id="count">
							<input value="1" type="hidden" name="updateBedroom">
						</div>
						<div class="row">
							<div class="col-md-12 border-top py-5 justify-content-between d-flex">
								<a id="link-previous" href="/create-property/2/1"
									class="btn btn-link btn-prev-list-property d-flex align-items-center">
									<i class="fas fa-long-arrow-alt-left mr-2"></i>
									Previous
								</a>
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
</template>

<script setup lang="ts">
import '@/assets/styles/style.css';

</script>

<style scoped></style>