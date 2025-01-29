@extends('app')
@section('title', 'Sign up')
@section('content')

<div id="signup" class="register-page division">
	<div class="container">
		<div class="row justify-content-start">
			<div class="col-12 col-lg-6">
				<div class="register-form-title">
					<h1 class="h1-title">Register</h1>
					<p>Create your account to get started</p>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-7 order-2 order-lg-1">
				<div class="register-page-form wow animate__animated animate__fadeInUp">
					<form method="POST" class="row sign-in-form" id="submit_form">
						@csrf
						<div class="col-md-6">
							<input class="form-control text" type="text" name="first_name" placeholder="Enter Your First Name">
						</div>
						<div class="col-md-6">
							<input class="form-control text" type="text" name="last_name" placeholder="Enter Your Last Name">
						</div>
						<div class="col-md-6">
							<input class="form-control email" type="email" name="email" placeholder="Enter Your Email">
						</div>
						<div class="col-md-6">
							<input id="phone" class="form-control phone" type="tel" name="phone" placeholder="Enter Your Phone Number">
						</div>
						<div class="col-md-6">
							<input id="company_name" class="form-control" type="text" name="company_name" placeholder="Enter Your Company Name">
						</div>
						<div class="col-md-6">
							<div class="wrap-input">
								<span class="btn-show-pass ico-20" style="cursor: pointer;">
									<span class="eye-pass flaticon-visibility"></span>
								</span>
								<input class="form-control password" type="password" name="password" placeholder="Enter Your Password">
							</div>
						</div>
						<div class="col-md-12">
							<input id="address" class="form-control" type="text" name="address" placeholder="Enter Your Address">
						</div>
						<div class="col-md-12">
							<input id="tax_id" class="form-control" type="text" name="tax_id" placeholder="Enter Your Tax ID Number">
						</div>
						<div class="col-md-12">
							<div class="row px-0">
								<div class="button_div col-lg-4">
									<button type="button" id="w9_form" class="btn r-06 btn--theme hover--black btn-sm shadow-sm d-flex align-items-center">
										<span id="w9_btn_txt">Upload W9-Form</span>
										<span id="w9_spinner" class="spinner spinner-border spinner-border-sm ms-2 d-none" role="status" aria-hidden="true"></span>
									</button>
									<input name="w9_form" id="w9_form_input" type="file" accept="pdf/*" class="d-none">
								</div>
								<div class="button_div col-lg-4">
									<button type="button" id="tax_form" class="btn r-06 btn--theme hover--black btn-sm shadow-sm d-flex align-items-center">
										<span id="tax_btn_txt">Upload Tax Resale Certification</span>
										<span id="tax_spinner" class="spinner spinner-border spinner-border-sm ms-2 d-none" role="status" aria-hidden="true"></span>
									</button>
									<input name="tax_form" id="tax_form_input" type="file" accept="pdf/*" class="d-none">
								</div>
								<div class="button_div col-lg-4">
									<button type="button" id="credit_form" class="btn r-06 btn--theme hover--black btn-sm shadow-sm d-flex align-items-center">
										<span id="credit_btn_txt">Upload Credit Application</span>
										<span id="credit_spinner" class="spinner spinner-border spinner-border-sm ms-2 d-none" role="status" aria-hidden="true"></span>
									</button>
									<input name="credit_form" id="credit_form_input" type="file" accept="pdf/*" class="d-none">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<button type="button" class="btn r-06 btn--theme hover--black submit btn_save">Join Now</button>
						</div>
						<div class="col-md-12 text-center">
							<p class="create-account">Already registered?
								<a class="color--theme" href="{{ url('login') }}" data-discover="true">Back to Login</a>
							</p>
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-5 order-1 order-lg-2 py-4 py-lg-0 mt-0 d-flex justify-content-center ">
				<div class="register-page-form contacts-info link_box wow animate__animated animate__fadeInUp">
					<span class="section-id text-danger">* Mandatory documents</span>

					 <p class="my-3"><strong class="text-dark">Important:</strong> Please download the mandatory documents below, fill them out, and upload them back to the registration form to complete your registration. </p>

					<div class="row mandetory_docs gy-2">
						<div class="col-lg-12">
							<a href="{{ asset('assets/files/W9-Form.pdf') }}" download class="btn btn-light">
								<img src="{{ asset('assets/images/pdf.png') }}" alt="Icon 1" class="icon">
								<span>Download W9-Form</span>
							</a>
						</div>
						<div class="col-lg-12">
							<a href="{{ asset('assets/files/texas_resale_form.pdf') }}" download class="btn btn-light">
								<img src="{{ asset('assets/images/pdf.png') }}" alt="Icon 2" class="icon">
								<span>Download Tax Resale Certification</span>
							</a>
						</div>
						<div class="col-lg-12">
							<a href="{{ asset('assets/files/luxview_business_credit_application.pdf') }}" download class="btn btn-light">
								<img src="{{ asset('assets/images/pdf.png') }}" alt="Icon 3" class="icon">
								<span>Download Credit Application</span>
							</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@push('scripts')
<script>
	$(document).ready(function() {
		const setupFileUpload = (buttonId, inputId, textId, spinnerId, defaultText) => {
			$(`#${buttonId}`).on('click', function() {
				$(`#${inputId}`).click();
			});
			$(`#${inputId}`).on('change', function(event) {
				const selectedFile = event.target.files[0];
				const spinner = $(`#${spinnerId}`);
				spinner.removeClass('d-none');
				setTimeout(() => {
					if (selectedFile) {
						$(`#${textId}`).text(selectedFile.name);
					} else {
						$(`#${textId}`).text(defaultText);
					}
					spinner.addClass('d-none');
				}, 1000);
			});
		};

		setupFileUpload('w9_form', 'w9_form_input', 'w9_btn_txt', 'w9_spinner', 'Upload W9-Form');
		setupFileUpload('tax_form', 'tax_form_input', 'tax_btn_txt', 'tax_spinner', 'Upload Tax Resale Certification');
		setupFileUpload('credit_form', 'credit_form_input', 'credit_btn_txt', 'credit_spinner', 'Upload Credit Application');
	});
	$(document).ready(function () {
		$('#phone').on('input', function () {
			this.value = this.value.replace(/[^0-9]/g, '');
		});
	});
	$(document).on("click" , ".btn_save" , function() {
		$(".btn_save").text('Please wait...');
		$(".btn_save").prop('disabled', 'true');
		var formData =  new FormData($("#submit_form")[0]);
		$.ajax({
			url:'{{ url('register_new_users') }}',
			type: 'POST',
			data: formData,
			dataType:'json',
			cache: false,
			contentType: false,
			processData: false,
			success:function(status){
				if(status.msg=='success') {
					$('.btn_save').prop("disabled", false);
					$(".btn_save").text('Join Now');
					$('#submit_form')[0].reset();
					$(`#w9_btn_txt`).text('Upload W9-Form');
					$(`#tax_btn_txt`).text('Upload Tax Resale Certification');
					$(`#credit_btn_txt`).text('Upload Credit Application');
					toastr.success(status.response,"Success");
				} else if(status.msg == 'error') {
					$(".btn_save").prop('disabled', false);
					$(".btn_save").text('Join Now');
					toastr.error(status.response,"Error");
				} else if(status.msg == 'lvl_error') {
					$(".btn_save").prop('disabled', false);
					$(".btn_save").text('Join Now');
					var message = "";
					$.each(status.response, function (key, value) {
						message += value+"<br>";
					});
					toastr.error(message, "Error");
				}
			}
		});
	});
</script>
@endpush