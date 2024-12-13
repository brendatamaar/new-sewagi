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
                        <form id="newPropertyData9" role="form" method="POST" action="http://localhost:8000/create-property/9" class="form-list-property">
<input type="hidden" name="_token" value="jUTQCZRT3puNN5hQuWcdrh8ugb6ODyjZp1DkochD">    <div class="col-md-10">
        <div class="mb-5">
            <h4 class="mb-4 required">Set up your preferred payment options</h4>
        </div>
        <div class="mb-5">
            <h5 class="mb-4">Co-Living</h5>
            <div id="length-of-stay-container-co-living">
                                                                </div>
        </div>
        <div id="length-stay-row-clone-co-living" class="card card-body mb-5 length-stay-row-co-living" style="display: none;">
            <div class="d-flex justify-content-between">
                <label class="mb-4 text-muted">LENGTH OF STAY</label>
                <a href="#" class="btn btn-link btn-save-length-stay" style="display: none;">
                    Save
                </a>
                <span class="btn-edit-container" style="display: none;">
                    <a href="#" class="mr-3 btn btn-link btn-edit-length-stay">
                        Edit
                    </a>
                    <a href="#" class="btn btn-link btn-delete-length-stay">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </span>
            </div>
            <select class="select2 select2-list-property length-stay" name="length" placeholder="">
                <option value=""></option>
                <option value="1 year">1 year</option>
                <option value="9 months">9 months</option>
                <option value="6 months">6 months</option>
                <option value="3 months">3 months</option>
            </select>
            <div class="payment-terms mt-5">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-between">
                        <label class="text-muted">PAYMENT TERMS</label>
                        <a href="" class="btn btn-link btn-select-all">
                            Select all
                        </a>
                    </div>
                    <div class="col-md-12">
                        <p class="text-muted">The following rates must include TAX</p>
                    </div>
                    <ul class="col-md-12 list-group pl-4">
                        <li class="list-group-item paid-once" style="display: none;">
                            <div class="btn-group-toggle d-flex align-items-center" data-toggle="buttons">
                                <label class="btn btn-sm btn-checkbox btn-circle mb-0 mr-4 btn-paid-checkbox">
                                    <input type="checkbox">+
                                </label>
                                <span class="font-weight-bolder">
                                    Paid once
                                </span>
                            </div>
                            <div class="input-rate-wrapper mt-4" style="display: none;">
                                                                <div class="d-flex justify-content-start col-md-11 offset-md-1">
                                    <div class="custom-control custom-switch mr-3">
                                        <input type="checkbox" class="custom-control-input" id="nego-twice-switch">
                                        <label class="custom-control-label" for="nego-twice-switch"></label>
                                    </div>
                                    <p id="nego-twice-switch-label">I&#039;m open to negotiate my rate with the prospective renter</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item paid-twice" style="display: none;">
                            <div class="btn-group-toggle d-flex align-items-center" data-toggle="buttons">
                                <label class="btn btn-sm btn-checkbox btn-circle mb-0 mr-4 btn-paid-checkbox }">
                                    <input type="checkbox">+
                                </label>
                                <span class="font-weight-bolder">
                                    Paid twice
                                </span>
                            </div>
                            <div class="input-rate-wrapper mt-4" style="display: none;">
                                                                <div class="d-flex justify-content-start col-md-11 offset-md-1">
                                    <div class="custom-control custom-switch mr-3">
                                        <input type="checkbox" class="custom-control-input" id="nego-twice-switch">
                                        <label class="custom-control-label" for="nego-twice-switch"></label>
                                    </div>
                                    <p id="nego-twice-switch-label">I&#039;m open to negotiate my rate with the prospective renter</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item paid-quarterly" style="display: none;">
                            <div class="btn-group-toggle d-flex align-items-center" data-toggle="buttons">
                                <label class="btn btn-sm btn-checkbox btn-circle mb-0 mr-4 btn-paid-checkbox ">
                                    <input type="checkbox">+
                                </label>
                                <span class="font-weight-bolder">
                                    Paid quarterly
                                </span>
                            </div>
                            <div class="input-rate-wrapper mt-4" style="display: none;">
                                                                <div class="d-flex justify-content-start col-md-11 offset-md-1">
                                    <div class="custom-control custom-switch mr-3">
                                        <input type="checkbox" class="custom-control-input" id="nego-quarterly-switch">
                                        <label class="custom-control-label" for="nego-quarterly-switch"></label>
                                    </div>
                                    <p id="nego-quarterly-switch-label">I&#039;m open to negotiate my rate with the prospective renter</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item paid-monthly" style="display: none;">
                            <div class="btn-group-toggle d-flex align-items-center" data-toggle="buttons">
                                <label class="btn btn-sm btn-checkbox btn-circle mb-0 mr-4 btn-paid-checkbox">
                                    <input type="checkbox">+
                                </label>
                                <span class="font-weight-bolder">
                                    Paid monthly
                                </span>
                            </div>
                            <div class="input-rate-wrapper mt-4" style="display: none;">
                                                                <div class="d-flex justify-content-start col-md-11 offset-md-1">
                                    <div class="custom-control custom-switch mr-3">
                                        <input type="checkbox" class="custom-control-input" id="nego-monthly-switch">
                                        <label class="custom-control-label" for="nego-monthly-switch"></label>
                                    </div>
                                    <p id="nego-monthly-switch-label">I&#039;m open to negotiate my rate with the prospective renter</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <button class="btn btn-outline-primary mb-5" id="add-more-length-co-living">
            ADD MORE LENGTH OF STAY
        </button>
        <div class="card card-body mb-5">
            <p class="text-muted required">
                DO MY RATES ABOVE INCLUDE THE FOLLOWING MONTHLY CHARGES?
            </p>
            <div class="row my-5">
                <div class="col-lg-8 offset-lg-2 d-flex justify-content-between">
                    <p id="internet-switch-label" class="font-weight-bolder">Internet</p>
                    <div class="custom-control custom-switch">
                        <input value="1" type="checkbox" class="custom-control-input" name="is_internet" id="internet-switch" >
                        <label class="custom-control-label" for="internet-switch"></label>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2 d-flex justify-content-between">
                    <p id="parking-switch-label" class="font-weight-bolder">Private parking slot</p>
                    <div class="custom-control custom-switch">
                        <input value="1" type="checkbox" class="custom-control-input" name="is_parking" id="parking-switch" >
                        <label class="custom-control-label" for="parking-switch"></label>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2 d-flex justify-content-between">
                    <p id="tv-switch-label" class="font-weight-bolder">TV cable</p>
                    <div class="custom-control custom-switch">
                        <input value="1" type="checkbox" class="custom-control-input" name="is_tv_cable" id="tv-switch" >
                        <label class="custom-control-label" for="tv-switch"></label>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2 d-flex justify-content-between">
                    <p id="cleaning-switch-label" class="font-weight-bolder">Cleaning service</p>
                    <div class="custom-control custom-switch">
                        <input value="1" type="checkbox" class="custom-control-input" name="is_cleaning" id="cleaning-switch" >
                        <label class="custom-control-label" for="cleaning-switch"></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="form-inline row">
                        <label for="inlineFormInputGroup" class="required mr-4 col-auto">RESIDENCE SERVICE CHARGE FEE</label>
                        <div class="input-group mb-2 mr-2 col-md-6">
                            <div class="input-group-prepend">
                                <div class="input-group-text form-control-dashboard">IDR
                                </div>
                            </div>
                            <input type="text" class="form-control form-control-dashboard" name="service_fee" id="inlineFormInputGroup" placeholder="Input value or 0 if none" value="">
                        </div>
                        <p class="mb-0 col-auto">/ month</p>
                    </div>
                </div>
                <div class="col-md-12 d-flex justify-content-between">
                    <p id="fee-paid-switch-label" class="text-muted">I would rather have the residence service charge fee paid by my renter?</p>
                    <div class="custom-control custom-switch">
                        <input value="1" type="checkbox" class="custom-control-input" id="fee-paid-switch" name="charge_fee" >
                        <label class="custom-control-label" for="fee-paid-switch"></label>
                    </div>
                </div>
            </div>
        </div>
        <div id="disclaimer-section" class="p-5 mb-5">
            <div class="row">
                <div class="col-md-4">
                    <h4>Disclaimer</h4>
                </div>
                <div class="col-md-8">
                    <p>Property lister is responsible for all tax declaration and payment.</p>
                    <p>Sewagi cannot be held responsible for non tax declaration and payment emanating from properties perceiving revenue and listed on our platform.</p>
                    <a href="" class="btn btn-link">More information</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2 float-right">
        <div id="info-payment-term">
            <p>Monthly payments help you lease your bedrooms faster.</p>
            <p>Don’t overprice them just because it’s on monthly terms. </p>
        </div>
    </div>
    <input type="hidden" name="id" value="2" />
    <input value="9" type="hidden" name="step" id="step">
</form>
                    </div>
                    <div class="row">
                        <div class="col-md-12 border-top py-5 justify-content-between d-flex">
                            <a id="link-previous" href="/create-property/2/7" class="btn btn-link btn-prev-list-property d-flex align-items-center">
    <i class="fas fa-long-arrow-alt-left mr-2"></i>
    Previous
</a>
<button id ="submit-list-property" class="btn btn-primary btn-next-list-property">
    REVIEW &amp; SUBMIT MY LISTING
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