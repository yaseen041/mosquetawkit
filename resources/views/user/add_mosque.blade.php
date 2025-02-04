<!DOCTYPE html>
<html>
<head>
	<script type='text/javascript' src="{{ asset('assets/offline/countries.js') }}"></script>
	<script type='text/javascript' src="{{ asset('assets/offline/PrayTimes.js') }}"></script>
	<script type='text/javascript' src="{{ asset('assets/admin/sw.js')}}"></script>
	<title>New Mosque Account &#8211; {{ get_section_content('project', 'site_title') }}</title>
	<link rel='shortcut icon' type='image/x-icon' href="{{ asset('assets/favicon.ico') }}" />
	<link rel='apple-touch-icon' sizes='152x152' href="{{ asset('assets/favicon152.png') }}" />
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
		input[type=submit] {
			background-color: gray;
			color: white;
			padding: 21px;
			text-align: center;
			text-decoration: none;
			font-size: 18px;
			margin: 4px;
			cursor: pointer;
		}
		.cssINPUT {padding:5px; font-size:11pt; border:1px solid gray; width:95%;}
		.cssMONO  {font-family:monospace; font-size:10pt;}
		img {vertical-align:middle;}
		a {text-decoration:none;}
		.CSS_LINK {height:27px; cursor:pointer;}
		.CSS_LINK:hover {color:#9E2D15;}
		.cssAR {font-size:110%; color:#008E00; font-family:'Amiri'; direction:rtl;}
		.cssBLUE {color:blue; cursor:pointer;}
		select optgroup{color:#913E23;}
		select option{color:#252525;}
	</style>
</head>
<body>
	<center>
		<div align='center' style='width:700px; padding:21px; background: url(./mobile153.png) no-repeat 0px 0px;' >
			<a href="{{ url('login') }}">Login To Administration</a>
			<br /><br />
			<span style='font-size:130%;'><b>New Mosque Account</b></span><br />
			<br />
			<div style='font-size:100%; color:#353535; line-height:1.9em;'>
				Enter your email to create a new account for your Mosque.<br />
				<span class='cssAR'>أدخل بريدك الإلكتروني لإنشاء حساب جديد لمسجدك</span>
			</div>
			<br />
			<br />
			<form method='post' action="{{ route('mosque.step1') }}">
				@csrf
				<table align='center' cellpadding='12' cellspacing='0' width='61%' border='0' >
					<tr>
						<td align='center'>
							<input id='vMOSQEMAIL' type='text' name='email' placeholder='Enter your email' style='padding:5px; width:100%; border:1px solid silver;' />
						</td>
					</tr>

					<tr>
						<td align='center'>
							<input id='vMOSQEMAIL' type='password' name='password' placeholder='Enter your password' style='padding:5px; width:100%; border:1px solid silver;' />
						</td>
					</tr>
					<tr>
						<td align='center'>
							<input type='submit' name='vNewMosqSUBMIT' value='Create' style='padding:10px;  width:100%;' />
						</td>
					</tr>
				</table>
			</form>
		</div>
		<img width='100%' border='0' alt='' src='' />
	</center>
</body>
</html>
<script type='text/javascript' language='javascript'>
	var JS_btnStep2		= document.getElementById('btnStep2');
	var JS_uuuCITY 		= document.getElementById('mCITY');
	var JS_mWTIMES 		= document.getElementById('mWTIMES');
	function checkMsqNames()
	{
		var JS_nNormal 		= document.getElementById('mNAME');
		var JS_btnStep3		= document.getElementById('btnStep3');
		if(JS_nNormal.value == '')
			{ JS_btnStep3.disabled = true; JS_btnStep3.style.backgroundColor = 'Gray'; }
		else
			{ JS_btnStep3.disabled = false; JS_btnStep3.style.backgroundColor = 'Green'; }
	}
</script>
