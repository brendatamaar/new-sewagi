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
                        <form id="newPropertyData7" role="form" method="POST" action="http://localhost:8000/create-property/7" class="form-list-property">
    <input type="hidden" name="_token" value="jUTQCZRT3puNN5hQuWcdrh8ugb6ODyjZp1DkochD">    <div class="mb-5">
        <h4 class="mb-4 required">Property Ownership</h4>
        <p class="text-muted fs-12">
            For more transparency and faster contract signing process, please provide us with your property&#039;s legal details. Don&#039;t worry, we won&#039;t share them with anyone.
        </p>
    </div>
    <div class="mb-5">
        <h4 class="mb-4 required">To whom does this property belong?</h4>
        <select class="select2 select2-list-property" name="belong_to" id="your-status">
            <option value=""></option>
            <option value="1" selected>This property is under my name</option>
            <option value="2" >I have legal rights to represent this property</option>
            <option value="3" >I have rights to sublease bedrooms inside this property</option>
        </select>
    </div>
    <div class="mb-5">
        <h4 class="mb-4 required">How will this property be leased?</h4>
        <select class="select2 select2-list-property" name="ownership_status" id="ownership-status">
            <option value=""></option>
            <option value="1" >Leased under private ownership</option>
            <option value="2" >Leased under enterprise ownership</option>
        </select>
    </div>
    <div class="card card-body mb-4 form-dz property-right-wrapper" id="property-legal-certificate-ownership" style="display: none;" >
        <div class="">
            <div class="row">
                <div class="col-md-8">
                    <h5 class="required" id="property-legal-certificate-status">
                        Property ownership certificate
                    </h5>
                </div>
                <div class="col-md-4 d-flex justify-content-end">
                    <a class="btn btn-link btn-add-photos mr-4" data-toggle="collapse" href="#photo-type-ownership-certificate" role="button" aria-expanded="false">
                        + Add File
                    </a>
                </div>
            </div>
            <div class="collapse" id="photo-type-ownership-certificate">
                <div class="upload-image-video my-drop input-pdf-dz" id="upload-media-ownership-certificate" data-id="ownership-certificate">
                    <div class="preview-images" id="preview-image-ownership-certificate">
                        <div class="dropzone-wrap dropzone-area dropzone-button" id="dropzone-button-ownership-certificate"><i class="fas fa-camera"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hide" id="mydz-pdf-template" style="display: none">
            <div class="dz-preview dz-file-preview">
                <div class="dz-details">
                    <img src="/img/pdf-icon.png" />
                </div>
                <div class="dz-progress">
                    <div class="progress">
                        <div class="dz-upload progress-bar progress-bar-striped progress-bar-animated bg-success" data-dz-uploadprogress role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="dz-error-message"><span data-dz-errormessage></span></div>
                <a href="#" class="dz-remove"></a>
            </div>
        </div>
    </div>
    <div class="card card-body mb-4 form-dz property-right-wrapper" id="property-legal-certificate-wrapper" style="display: none;" >
        <div class="">
            <div class="row">
                <div class="col-md-8">
                    <h5 class="required" id="property-legal-certificate-status">
                        Provide a document naming you as the rightful appointee to legally market this property
                    </h5>
                </div>
                <div class="col-md-4 d-flex justify-content-end">
                    <a class="btn btn-link btn-add-photos mr-4" data-toggle="collapse" href="#photo-type-legal-certificate" role="button" aria-expanded="false">
                        + Add File
                    </a>
                </div>
            </div>
            <div class="collapse" id="photo-type-legal-certificate">
                <div class="upload-image-video my-drop input-pdf-dz" id="upload-media-legal-certificate" data-id="legal-certificate">
                    <div class="preview-images" id="preview-image-legal-certificate">
                        <div class="dropzone-wrap dropzone-area dropzone-button" id="dropzone-button-legal-certificate"><i class="fas fa-camera"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hide" id="mydz-pdf-template" style="display: none">
            <div class="dz-preview dz-file-preview">
                <div class="dz-details">
                    <img src="/img/pdf-icon.png" />
                </div>
                <div class="dz-progress">
                    <div class="progress">
                        <div class="dz-upload progress-bar progress-bar-striped progress-bar-animated bg-success" data-dz-uploadprogress role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="dz-error-message"><span data-dz-errormessage></span></div>
                <a href="#" class="dz-remove"></a>
            </div>
        </div>
    </div>
    <div class="card card-body mb-4 form-dz property-right-wrapper" id="property-legal-certificate-authority" style="display: none;" >
        <div class="">
            <div class="row">
                <div class="col-md-8">
                    <h5 class="required" id="property-legal-certificate-status">
                        Property ownership certificate
                    </h5>
                </div>
                <div class="col-md-4 d-flex justify-content-end">
                    <a class="btn btn-link btn-add-photos mr-4" data-toggle="collapse" href="#photo-type-authority-certificate" role="button" aria-expanded="false">
                        + Add File
                    </a>
                </div>
            </div>
            <div class="collapse" id="photo-type-authority-certificate">
                <div class="upload-image-video my-drop input-pdf-dz" id="upload-media-authority-certificate" data-id="authority-certificate">
                    <div class="preview-images" id="preview-image-authority-certificate">
                        <div class="dropzone-wrap dropzone-area dropzone-button" id="dropzone-button-authority-certificate"><i class="fas fa-camera"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hide" id="mydz-pdf-template" style="display: none">
            <div class="dz-preview dz-file-preview">
                <div class="dz-details">
                    <img src="/img/pdf-icon.png" />
                </div>
                <div class="dz-progress">
                    <div class="progress">
                        <div class="dz-upload progress-bar progress-bar-striped progress-bar-animated bg-success" data-dz-uploadprogress role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="dz-error-message"><span data-dz-errormessage></span></div>
                <a href="#" class="dz-remove"></a>
            </div>
        </div>
    </div>
    <div class="card card-body mb-5" id="property-insured-wrapper">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-between">
                <h5>
                    Is the property insured?
                </h5>
                <div class="custom-control custom-switch">
                    <input value="0" type="checkbox" class="custom-control-input" name="insurance_status" id="property-insured-switch" >
                    <label class="custom-control-label" for="property-insured-switch">
                        <span></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-body mb-4 form-dz property-right-wrapper" id="property-insurance-document-wrapper" style="display: none;">
        <div class="row">
            <div class="col-md-8">
                <h5 class="required" id="property-legal-status">
                    Property Insurance Document
                </h5>
            </div>
            <div class="col-md-4 d-flex justify-content-end">
                <a class="btn btn-link btn-add-photos mr-4" data-toggle="collapse" href="#photo-type-legal" role="button" aria-expanded="false">
                    + Add File
                </a>
            </div>
        </div>
        <div class="collapse" id="photo-type-legal">
            <div class="upload-image-video my-drop input-pdf-dz" id="upload-media-insurance-document" data-id="insurance-document">
                <div class="preview-images" id="preview-image-insurance-document">
                    <div class="dropzone-wrap dropzone-area dropzone-button" id="dropzone-button-insurance-document"><i class="fas fa-camera"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="hide" id="mydz-pdf-template" style="display: none">
        <div class="dz-preview dz-file-preview">
            <div class="dz-details">
                <img src="/img/pdf-icon.png" />
            </div>
            <div class="dz-progress">
                <div class="progress">
                    <div class="dz-upload progress-bar progress-bar-striped progress-bar-animated bg-success" data-dz-uploadprogress role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="dz-error-message"><span data-dz-errormessage></span></div>
            <a href="#" class="dz-remove"></a>
        </div>
    </div>
    <p class="text-muted mb-5">
        We strongly suggest that you insure the property in order to avoid unexpected events (i.e damages, accidents, theft) hindering you from marketing or leasing the property effectively.
        <a data-toggle="collapse" href="#insurance-detail" >Insure my property now.</a>
    </p>
    <div class="row">
        <div class="col-md-8">
            <div class="card card-body mb-5 collapse " id="insurance-detail">
                <p>In order to process the insurance quotation for your property, please provide us the following detail?</p>
                <div class="form-group d-flex justify-content-start align-items-center">
                    <label class="mb-0" for="estimated-property-type">IDR</label>
                    <div class="col">
                        <input type="number" value="" name="estimated_price" class="form-control required form-control-dashboard" id="estimated-property-type" placeholder="Input your estimated property price">
                        <span class="input-required"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="id" value="2" id="property-id"/>
    <input value="7" type="hidden" name="step" id="step">
</form>


<div class="modal fade modal-dashboard" id="modalStep7Incomplete" tabindex="-1" role="dialog">
    <input type="hidden" name="category-id" id="category-id" value="">
    <div class="modal-dialog from-right" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
                <p class="font-weight-bolder">You may skip this step for now. However, you will need to upload these documents when signing the lease contract with the renter.</p>
                <div class="button-group">
                    <a class="btn btn-primary" data-dismiss="modal" href="http://localhost:8000">Upload Now</a>
                    <a class="btn btn-primary btn-delete-category-step7-yes" data-dismiss="modal" href="#">Upload Later</a>
                </div>
            </div>
        </div>
    </div>
</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 border-top py-5 justify-content-between d-flex">
                            <a id="link-previous" href="/create-property/2/6" class="btn btn-link btn-prev-list-property d-flex align-items-center">
    <i class="fas fa-long-arrow-alt-left mr-2"></i>
    Previous
</a>
<a href="" id ="submit-list-property-step-7" class="btn btn-primary btn-next-list-property">
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