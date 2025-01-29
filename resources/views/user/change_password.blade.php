@extends('app')
@section('title', 'Change Password')
@section('content')

<div id="login" class="register-page division">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7 col-lg-5">
				<div class="reset-page-wrapper">
					<div class="reset-form-title">
						<h1 class="h1-title">Change Password</h1>
						<p class="p-sm">Update your password for CiteEcho account.</p>
					</div>
					<form class="row reset-password-form" id="update_form">
						 @csrf
						<div class="col-md-12">
							<div class="wrap-input">
								<span class="btn-show-pass ico-20" style="cursor: pointer;">
									<span class=" eye-pass flaticon-visibility"></span>
								</span>
								<input class="form-control password text-start" type="password" name="old_password" placeholder="Enter old password">
							</div>
						</div>
						<div class="col-md-12">
							<div class="wrap-input">
								<span class="btn-show-pass ico-20" style="cursor: pointer;">
									<span class=" eye-pass flaticon-visibility"></span>
								</span>
								<input class="form-control password text-start" type="password" name="new_password" placeholder="Enter New Password">
							</div>
						</div>
						<div class="col-md-12">
							<div class="wrap-input">
								<span class="btn-show-pass ico-20" style="cursor: pointer;">
									<span class=" eye-pass flaticon-visibility"></span>
								</span>
								<input class="form-control password text-start" type="password" name="confirm_password" placeholder="Re-enter New Password">
							</div>
						</div>
						<div class="col-md-12">
							<button type="button" class="btn btn--theme hover--black btn_update submit">Change Password</button>
						</div>
						<div class="col-lg-12 reset-form-msg">
							<span class="loading"></span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('scripts')
<script>
	$(document).on("click" , ".btn_update" , function() {
		$(".btn_update").text('Please wait...');
		$(".btn_update").prop('disabled', 'true');
		var formData =  new FormData($("#update_form")[0]);
		$.ajax({
			url:'{{ url('update_password') }}',
			type: 'POST',
			data: formData,
			dataType:'json',
			cache: false,
			contentType: false,
			processData: false,
			success:function(status){
				if(status.msg=='success') {
					$('.btn_update').prop("disabled", false);
					$(".btn_update").text('Change Password');
					toastr.success(status.response,"Success");
					setTimeout(function(){
                        window.location.href = "{{ url('profile') }}";
					}, 2000);
				} else if(status.msg == 'error') {
					$(".btn_update").prop('disabled', false);
					$(".btn_update").text('Change Password');
					toastr.error(status.response,"Error");
				} else if(status.msg == 'lvl_error') {
					$(".btn_update").prop('disabled', false);
					$(".btn_update").text('Change Password');
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