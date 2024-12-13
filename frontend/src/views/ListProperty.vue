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
                        <form id="newPropertyData10" role="form" method="POST" class="form-list-property">
    <input type="hidden" name="_token" value="jUTQCZRT3puNN5hQuWcdrh8ugb6ODyjZp1DkochD">    <div class="row justify-content-between align-items-center mb-5">
        <div class="col-auto">
            <h3>Let&#039;s review your listing</h3>
        </div>
        <div class="col-auto">
            <a href="#" class="btn btn-primary">VIEW LISTING MOCKUP</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-list-property">
                <div class="card-header">
                    <h6 class="text-muted">STEP 1</h6>
                    <h5 style="min-height: 45px">Basic property information</h5>
                </div>
                <div class="card-body justify-content-between d-flex flex-column">
                    <ul class="list-unstyled list-vertical-line">
                        <li class="d-flex align-items-center">
                            <span class="icon-circle d-flex align-items-center active">
                                <i class="fas fa-check"></i>
                            </span>
                            <span>
                                <p class="mb-0">Property type &amp; living condition</p>
                            </span>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="icon-circle d-flex align-items-center ">
                                <i class="fas fa-check"></i>
                            </span>
                            <span>
                                <p class="mb-0">Bedroom &amp; bathroom</p>
                            </span>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="icon-circle d-flex align-items-center ">
                                <i class="fas fa-check"></i>
                            </span>
                            <span>
                                <p class="mb-0">Location</p>
                            </span>
                        </li>
                    </ul>
                    <a href="/create-property/2/1" class="btn btn-outline-primary">EDIT</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-list-property">
                <div class="card-header">
                    <h6 class="text-muted">STEP 2</h6>
                    <h5 style="min-height: 45px">Tell us the details</h5>
                </div>
                <div class="card-body justify-content-between d-flex flex-column">
                    <ul class="list-unstyled list-vertical-line">
                        <li class="d-flex align-items-center">
                            <span class="icon-circle d-flex align-items-center ">
                                <i class="fas fa-check"></i>
                            </span>
                            <span>
                                <p class="mb-0">Description &amp; house rules</p>
                            </span>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="icon-circle d-flex align-items-center ">
                                <i class="fas fa-check"></i>
                            </span>
                            <span>
                                <p class="mb-0">Amenities &amp; facilities</p>
                            </span>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="icon-circle d-flex align-items-center active">
                                <i class="fas fa-check"></i>
                            </span>
                            <span>
                                <p class="mb-0">Photos</p>
                            </span>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="icon-circle d-flex align-items-center active">
                                <i class="fas fa-check"></i>
                            </span>
                            <span>
                                <p class="mb-0">Legal details</p>
                            </span>
                        </li>
                    </ul>
                    <a href="/create-property/2/4" class="btn btn-outline-primary">EDIT</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-list-property">
                <div class="card-header">
                    <h6 class="text-muted">STEP 3</h6>
                    <h5 style="min-height: 45px">Payment preference</h5>
                </div>
                <div class="card-body justify-content-between d-flex flex-column">
                    <ul class="list-unstyled list-vertical-line">
                        <li class="d-flex align-items-center">
                            <span class="icon-circle d-flex align-items-center ">
                                <i class="fas fa-check"></i>
                            </span>
                            <span>
                                <p class="mb-0">Payment preference for co-living</p>
                            </span>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="icon-circle d-flex align-items-center ">
                                <i class="fas fa-check"></i>
                            </span>
                            <span>
                                <p class="mb-0">Payment preference for entire space</p>
                            </span>
                        </li>
                    </ul>
                    <a href="/create-property/2/8" class="btn btn-outline-primary">EDIT</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 border-top py-5">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="mb-4">Legal documents</h5>
                    <p class="text-muted mb-4">You may skip uploading the required document for now. However, you will need to upload them when signing the lease contract with the renter. <span><a href="/create-property/2/7">Upload now.</a></span></p>
                </div>
                <div class="col-md-4">
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center mb-4">
                            <span class="icon-circle d-flex align-items-center ">
                                <i class="fas fa-check"></i>
                            </span>
                            <span>
                                <p class="mb-0">Property ownership certificate</p>
                            </span>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="icon-circle d-flex align-items-center ">
                                <i class="fas fa-check"></i>
                            </span>
                            <span>
                                <p class="mb-0">Property insurance document</p>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 border-top py-5">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="mb-4">Default Payment Safe</h5>
                    <p class="text-muted mb-4">Your Default Payment Safe insurance coverage, will only activate once you’ve successfully leased a property or bedroom via Sewagi</p>
                    <p class="text-muted mb-4">
                                                    View Default Payment Safe <span><a href="">premiums</a></span> and <span><a href="">benefits</a></span>.
                                            </p>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="id" value="2" />
    <input value="10" type="hidden" name="step" id="step">
</form>
<div class="modal fade modal-dashboard" id="modalSubmitAgree" tabindex="-1" role="dialog">
    <div class="modal-dialog from-right" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img class="mb-5" src="../img/listing-submitted.svg" alt="">
                <p class="mb-5">By submitting my listing to Sewagi, I understand and agree to honor the following <a href="#">General Terms of Partnership</a> and abide by the Sewagi platform <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></p>
                <div class="button-group">
                    <button class="btn btn-outline-primary mr-2" data-dismiss="modal">DECLINE</button>
                    <button class="btn btn-primary" href="#modalSubmitSuccess" data-dismiss="modal" id="btnAgree" data-toggle="modal">AGREE</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-dashboard" id="modalSubmitSuccess" tabindex="-1" role="dialog">
    <div class="modal-dialog from-right" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img class="mb-5" src="../img/listing-submitted.svg" alt="">
                <h5 class="mb-5">Yeay! Your listing has been submitted.</h5>
                <p class="mb-5">We will review your listing to check if all is tip-top before publishing it online within one working day.</p>
                <div class="button-group">
                    <a class="btn btn-primary" href="#" data-dismiss="modal">GO TO DASHBOARD</a>
                </div>

            </div>
        </div>
    </div>
</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 border-top py-5 justify-content-between d-flex">
                            <a id="link-previous" href="/create-property/2/9" class="btn btn-link btn-prev-list-property d-flex align-items-center">
    <i class="fas fa-long-arrow-alt-left mr-2"></i>
    Previous
</a>
<a id ="link-submit" class="btn btn-primary btn-next-list-property" href="#modalSubmitAgree" data-toggle="modal">
    SUBMIT
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