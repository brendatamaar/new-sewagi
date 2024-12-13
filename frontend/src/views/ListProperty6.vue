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
							<div id="newPropertyData6">
								<input type="hidden" name="_token" value="jUTQCZRT3puNN5hQuWcdrh8ugb6ODyjZp1DkochD">
								<div class="mb-5">
									<h4 class="mb-4 required">How about uploading some photos?</h4>
									<p class="text-muted fs-12">Upload up to 6 photos per category</p>
								</div>
								<div class="card card-body mb-4 form-dz">
									<div class="row">
										<div class="col-md-6">
											<h5 class="required">
												Building exterior
											</h5>
										</div>
										<div class="col-md-6 d-flex justify-content-end">
											<a class="btn btn-link btn-add-photos mr-4" data-toggle="collapse"
												href="#photo-type-1" role="button" aria-expanded="false">
												+ Add Photos
											</a>
											<div class="custom-control custom-switch custom-switch-thumbnails">
												<input data-id="1" type="checkbox"
													class="custom-control-input building-exterior-switch"
													id="building-exterior-switch1">
												<label class="custom-control-label" for="building-exterior-switch1">
													<span class="">
														Thumbnail &amp; Highlights
													</span>
												</label>
											</div>
										</div>
									</div>
									<div class="collapse" id="photo-type-1">
										<form method="post" action="http://localhost:8000/add-property/6"
											enctype="multipart/form-data">
											<input type="hidden" name="_token"
												value="jUTQCZRT3puNN5hQuWcdrh8ugb6ODyjZp1DkochD">
											<div class="photo-indicator">
												<p class="mb-1">Photos Uploaded</p>
												<ul class="list-inline mb-2">
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
												</ul>
											</div>
											<div class="upload-image-video my-drop input-dz" id="upload-media-1"
												data-id="1">
												<div class="preview-images" id="preview-image-1">
													<div class="dropzone-wrap dropzone-area dropzone-button"
														id="dropzone-button-1"><i class="fas fa-camera"></i></div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="card card-body mb-4 form-dz">
									<div class="row">
										<div class="col-md-6">
											<h5 class="required">
												Living room
											</h5>
										</div>
										<div class="col-md-6 d-flex justify-content-end">
											<a class="btn btn-link btn-add-photos mr-4" data-toggle="collapse"
												href="#photo-type-2" role="button" aria-expanded="false">
												+ Add Photos
											</a>
											<div class="custom-control custom-switch custom-switch-thumbnails">
												<input data-id="2" type="checkbox"
													class="custom-control-input building-exterior-switch"
													id="building-exterior-switch2">
												<label class="custom-control-label" for="building-exterior-switch2">
													<span class="">
														Thumbnail &amp; Highlights
													</span>
												</label>
											</div>
										</div>
									</div>
									<div class="collapse" id="photo-type-2">
										<form method="post" action="http://localhost:8000/add-property/6"
											enctype="multipart/form-data">
											<input type="hidden" name="_token"
												value="jUTQCZRT3puNN5hQuWcdrh8ugb6ODyjZp1DkochD">
											<div class="photo-indicator">
												<p class="mb-1">Photos Uploaded</p>
												<ul class="list-inline mb-2">
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
												</ul>
											</div>
											<div class="upload-image-video my-drop input-dz" id="upload-media-2"
												data-id="2">
												<div class="preview-images" id="preview-image-2">
													<div class="dropzone-wrap dropzone-area dropzone-button"
														id="dropzone-button-2"><i class="fas fa-camera"></i></div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="card card-body mb-4 form-dz">
									<div class="row">
										<div class="col-md-6">
											<h5 class="required">
												Kitchen
											</h5>
										</div>
										<div class="col-md-6 d-flex justify-content-end">
											<a class="btn btn-link btn-add-photos mr-4" data-toggle="collapse"
												href="#photo-type-3" role="button" aria-expanded="false">
												+ Add Photos
											</a>
											<div class="custom-control custom-switch custom-switch-thumbnails">
												<input data-id="3" type="checkbox"
													class="custom-control-input building-exterior-switch"
													id="building-exterior-switch3">
												<label class="custom-control-label" for="building-exterior-switch3">
													<span class="">
														Thumbnail &amp; Highlights
													</span>
												</label>
											</div>
										</div>
									</div>
									<div class="collapse" id="photo-type-3">
										<form method="post" action="http://localhost:8000/add-property/6"
											enctype="multipart/form-data">
											<input type="hidden" name="_token"
												value="jUTQCZRT3puNN5hQuWcdrh8ugb6ODyjZp1DkochD">
											<div class="photo-indicator">
												<p class="mb-1">Photos Uploaded</p>
												<ul class="list-inline mb-2">
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
												</ul>
											</div>
											<div class="upload-image-video my-drop input-dz" id="upload-media-3"
												data-id="3">
												<div class="preview-images" id="preview-image-3">
													<div class="dropzone-wrap dropzone-area dropzone-button"
														id="dropzone-button-3"><i class="fas fa-camera"></i></div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="card card-body mb-4 form-dz">
									<div class="row">
										<div class="col-md-6">
											<h5 class="required">
												Bathroom
											</h5>
										</div>
										<div class="col-md-6 d-flex justify-content-end">
											<a class="btn btn-link btn-add-photos mr-4" data-toggle="collapse"
												href="#photo-type-4" role="button" aria-expanded="false">
												+ Add Photos
											</a>
											<div class="custom-control custom-switch custom-switch-thumbnails">
												<input data-id="4" type="checkbox"
													class="custom-control-input building-exterior-switch"
													id="building-exterior-switch4">
												<label class="custom-control-label" for="building-exterior-switch4">
													<span class="">
														Thumbnail &amp; Highlights
													</span>
												</label>
											</div>
										</div>
									</div>
									<div class="collapse" id="photo-type-4">
										<form method="post" action="http://localhost:8000/add-property/6"
											enctype="multipart/form-data">
											<input type="hidden" name="_token"
												value="jUTQCZRT3puNN5hQuWcdrh8ugb6ODyjZp1DkochD">
											<div class="photo-indicator">
												<p class="mb-1">Photos Uploaded</p>
												<ul class="list-inline mb-2">
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
												</ul>
											</div>
											<div class="upload-image-video my-drop input-dz" id="upload-media-4"
												data-id="4">
												<div class="preview-images" id="preview-image-4">
													<div class="dropzone-wrap dropzone-area dropzone-button"
														id="dropzone-button-4"><i class="fas fa-camera"></i></div>
												</div>
											</div>
										</form>
									</div>
								</div>

								<div class="hide" id="mydz-template" style="display: none">
									<div class="dz-preview dz-file-preview">
										<div class="dz-details">
											<img data-dz-thumbnail />
										</div>
										<div class="dz-progress">
											<div class="progress">
												<div class="dz-upload progress-bar progress-bar-striped progress-bar-animated bg-success"
													data-dz-uploadprogress role="progressbar" aria-valuenow="75"
													aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="dz-error-message"><span data-dz-errormessage></span></div>
										<a href="#" class="dz-remove"></a>
									</div>
								</div>
								<div class="hide" id="mydz-pdf-template" style="display: none">
									<div class="dz-preview dz-file-preview">
										<div class="dz-details">
											<img src="/img/pdf-icon.png" />
										</div>
										<div class="dz-progress">
											<div class="progress">
												<div class="dz-upload progress-bar progress-bar-striped progress-bar-animated bg-success"
													data-dz-uploadprogress role="progressbar" aria-valuenow="75"
													aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<div class="dz-error-message"><span data-dz-errormessage></span></div>
										<a href="#" class="dz-remove"></a>
									</div>
								</div>
								<div id="category-photo-wrapper">
									<div class="card card-body mb-4 template-category-photo">
										<div class="row">
											<div class="col-md-6">
												<h5 class="required">
													Template
												</h5>
											</div>
											<div class="col-md-6 d-flex justify-content-end">
												<a class="btn btn-link btn-add-photos mr-4" data-toggle="collapse"
													href="#template" role="button" aria-expanded="false">
													+ Add Photos
												</a>
												<div class="custom-control custom-switch custom-switch-thumbnails">
													<input type="checkbox" class="custom-control-input"
														id="template-switch">
													<label class="custom-control-label" for="template-switch">
														<span>
															Thumbnail &amp; Highlights
														</span>
													</label>
												</div>
												<button
													class="btn btn-link ml-2 mb-2 trigger-modal-reset delete-category-step-6"
													data-id="" data-toggle="modal"
													data-target="#modalConfirmationCategory">
													<i class="fas fa-trash-alt"></i>
												</button>
											</div>
										</div>
										<div class="collapse" id="template">
											<form method="post" action="http://localhost:8000/add-property/6"
												enctype="multipart/form-data" class="dropzone" id="my-awesome-dropzone">
											</form>
											<div class="photo-indicator">
												<p class="mb-1">Photos Uploaded</p>
												<ul class="list-inline mb-2">
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
													<li class="list-inline-item"></li>
												</ul>
											</div>
										</div>
									</div>
									<template id="template-category-new-photo">
										<div class="card card-body mb-4">
											<div class="row">
												<div class="col-md-6">
													<h5 class="required">
														Template
													</h5>
												</div>
												<div class="col-md-6 d-flex justify-content-end">
													<a class="btn btn-link btn-add-photos mr-4" data-toggle="collapse"
														href="#template" role="button" aria-expanded="false">
														+ Add Photos
													</a>
													<div class="custom-control custom-switch custom-switch-thumbnails">
														<input type="checkbox" class="custom-control-input"
															id="template-switch">
														<label class="custom-control-label" for="template-switch">
															<span>
																Thumbnail &amp; Highlights
															</span>
														</label>
													</div>
													<button
														class="btn btn-link ml-2 mb-2 trigger-modal-reset delete-category-step-6"
														data-id="" data-toggle="modal"
														data-target="#modalConfirmationCategory">
														<i class="fas fa-trash-alt"></i>
													</button>
												</div>
											</div>
											<div class="collapse" id="template">
												<form method="post" action="http://localhost:8000/add-property/6"
													enctype="multipart/form-data">
													<div class="photo-indicator">
														<p class="mb-1">Photos Uploaded</p>
														<ul class="list-inline mb-2">
															<li class="list-inline-item"></li>
															<li class="list-inline-item"></li>
															<li class="list-inline-item"></li>
															<li class="list-inline-item"></li>
															<li class="list-inline-item"></li>
															<li class="list-inline-item"></li>
														</ul>
													</div>
													<div class="upload-image-video my-drop input-new-dz"
														id="upload-media-" data-id="">
														<div class="preview-images" id="preview-image-">
															<div class="dropzone-wrap dropzone-area dropzone-button"
																id="dropzone-button-"><i class="fas fa-camera"></i>
															</div>
														</div>
													</div>
												</form>
											</div>
										</div>
									</template>
								</div>

								<div class="card card-body mb-4 category-select" style="display: none">
									<label for="">CATEGORY</label>
									<select class="select2 select2-list-property" name="" id="add-category-photos">
										<option value=""></option>
									</select>
								</div>
								<button class="btn btn-outline-primary mb-4" id="add-more-category">
									ADD MORE CATEGORY
								</button>
							</div>
							<input type="hidden" name="id" value="2" id="property-id" />
							<input type="hidden" name="step" value="6" id="step" />


							<div class="modal fade modal-dashboard" id="modalConfirmationCategory" tabindex="-1"
								role="dialog">
								<input type="hidden" name="category-id" id="category-id" value="">
								<div class="modal-dialog from-right" role="document">
									<div class="modal-content">
										<div class="modal-body text-center">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<i class="fas fa-times"></i>
											</button>
											<p class="font-weight-bolder">Are you sure you want to delete this category?
											</p>
											<div class="button-group">
												<a class="btn btn-primary btn-delete-category-step6-yes"
													data-dismiss="modal" href="http://localhost:8000">Yes</a>
												<a class="btn btn-primary" data-dismiss="modal" href="#">No</a>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="modal fade" id="modal-upload-limit" tabindex="-1" role="dialog"
								aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content text-center pt-4" data-background-color="aqua">
										<div class="modal-body text-center">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<i class="fas fa-times"></i>
											</button>
											<p class="font-weight-bolder">You may only upload or drop 6 photos per
												category.</p>
										</div>
										<div class="modal-footer pl-5 pr-5">
											<button type="button" data-dismiss="modal"
												class="btn btn-primary btn-block">Got It</button>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-md-12 border-top py-5 justify-content-between d-flex">
								<a id="link-previous" href="/create-property/2/5"
									class="btn btn-link btn-prev-list-property d-flex align-items-center">
									<i class="fas fa-long-arrow-alt-left mr-2"></i>
									Previous
								</a>
								<a href="/create-property/2/7" class="btn btn-primary btn-next-list-property">
									Next
									<i class="fas fa-long-arrow-alt-right ml-2"></i>
								</a>
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