<html>
<head>

<style type='text/css'>
	@font-face {
		font-family: 'Amiri';
		src: url("{{ asset('assets/font/Amiri-Regular.eot') }}");
		src: url("{{ asset('assets/font/Amiri-Regular.eot?#iefix') }}") format('embedded-opentype'),
		url("{{ asset('assets/font/Amiri-Regular.woff2') }}") format('woff2'),
		url("{{ asset('assets/font/Amiri-Regular.woff') }}") format('woff'),
		url("{{ asset('assets/font/Amiri-Regular.ttf') }}") format('truetype'),
		url("{{ asset('assets/font/Amiri-Regular.svg#Amiri-Regular') }}") format('svg');
		font-weight: normal;
		font-style: normal;
		font-display: swap;
	}
	body{
		margin			: 0px;
		font-family		: 'Georgia';
		font-size		: 12pt;
		color			: #151515;
		background-color: white;
		line-height		: 21px;
		font-variant	: small-caps;
	}
	img {vertical-align:middle;}
	a {text-decoration:none;}
	.CSS_LINK {height:27px; cursor:pointer;}
	.CSS_LINK:hover {color:#9E2D15;}
	.cssAR {font-size:115%; color:#008E00; font-family:'Amiri'; direction:rtl;}
	.cssBLUE {color:blue; cursor:pointer;}


        #email-error { color: red !important; font-size: 14px; }
        .success { color: green; font-size: 14px; margin-top: 10px; }

</style>
<title>Password Recovery</title>
<link rel='icon' href="{{asset('assets/favicon.ico')}}">
	<link rel='shortcut icon' type='image/x-icon' href="{{ asset('assets/favicon.ico') }}" />
	<link rel='apple-touch-icon' sizes='152x152' href="{{ asset('assets/favicon152.png') }}" />
</head>
<body>
	<center>
		<div align='center' style='width:700px; padding:21px; background: url(./passo.png) no-repeat 0px 0px;' >
			<br /><br />
			<span style='font-size:130%;'><b>Password Recovery</b></span><br />
			<br />
			<div style='font-size:100%; color:#353535; line-height:1.9em;'>
				Enter your email to recover your password<br />
				<span class='cssAR'>أدخل بريدك الإلكتروني لاستعادة كلمة المرور</span>
			</div>
			<br />
			<br />
			<form id="recoverForm">
				@csrf
				<table align="center" cellpadding="12" cellspacing="0" width="61%" border="0">
					<tr>
						<td>
							<input id="email" type="text" name="email" placeholder="Enter your email"
							style="padding:5px; width:100%; border:1px solid silver;" />
						</td>
					</tr>
					<tr>
						<td align="center">
							<div class='error-message'></div>
            <div class='sent-message'>Your message has been sent. Thank you!</div>
						</td>
					</tr>
					<tr>
						<td align="center">
							<button type="button" id="submitBtn" style="font-size:110%; padding:10px; width:100%;">RECOVER PASSWORD - إستعادة كلمة المرور</button>
						</td>
					</tr>
				</table>
			</form>

			<hr />
		</div>
	</center>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" ></script>


<script>
     $(document).ready(function () {
 $(".error-message").hide();
          $(".sent-message").hide();
    $("#recoverForm").validate({
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            email: {
                required: "Email is required",
                email: "Enter a valid email address"
            }
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element);
        }
    });

    // Handle form submission
    $("#submitBtn").click(function () {
        if ($("#recoverForm").valid()) {

            $.ajax({
                url: "{{ url('reset-password') }}",  // Ensure this is correct
                type: "POST",
                data: $("#recoverForm").serialize(),
                beforeSend: function () {
                    $("#responseMessage").html("<p class='success'>Processing...</p>");
                },
                success: function (response) {
              $(".loading").hide();
              if (response.status == "success") {
                $(".sent-message").show();
                $(".sent-message").text(response.message);
                $("#recoverForm")[0].reset();
              } else {
                $(".error-message").text(response).show();
              }
            },
            error: function () {
              $(".loading").hide();
              $(".error-message").text("Something went wrong. Please try again.").show();
            }
            });
        }
    });
});

    </script>
</html>

