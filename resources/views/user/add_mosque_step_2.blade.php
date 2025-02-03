<!DOCTYPE html>
<html>
<head>
	<script type='text/javascript' src="{{ asset('assets/offline/countries.js') }}"></script>
	<script type='text/javascript' src="{{ asset('assets/offline/PrayTimes.js') }}"></script>
	<script type='text/javascript' src="{{ asset('assets/offline/admin/sw.js')}}"></script>
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
	<title>New Mosque Account</title>
</head>
<body>
	<center>
		<div align='center' style='width:500px; padding:21px;' >
			<br /><br />
			<span style='font-size:130%;'><b>Country and City</b></span><br />
			<br />
			<div style='font-size:100%; color:#353535; line-height:1.9em;'>
				Select the country and city of your Mosque.<br />
				<span class='cssAR'>حدد البلد ومدينة مسجدك.</span>
			</div>
			<br />

			<form method='post' action='{{ route('mosque.step2') }}'>
				@csrf
				<input type='hidden' name='mID' value="{{ $uid }}" >
				<table align='center' cellpadding='0' cellspacing='12' border='0' width='100%' >
					<tr>
						<td height='30' width='40%' align='right' valign='top'>
							Country -
							<span class='cssAR'>البلد</span> :
							<span class='eMUST'>*</span>
						</td>
						<td height='30' width='60%' align='left' valign='top'>
							<select id='mCOUNTRY' name='mCOUNTRY' onchange='uCountryCHANGE(this);' style='width:263px; padding:7px;' >

							</select>
						</td>
					</tr>
					<tr>
						<td height='30' width='40%' align='right' valign='top'>
							City - <span class='cssAR'>المدينة</span> :
							<span class='eMUST'>*</span>
						</td>
						<td height='30' width='60%' align='left' valign='top'>
							<select id='mCITY' name='mCITY' onchange='uCityCHANGE(this);' style='width:263px; padding:7px;' >
							</select>
						</td>
					</tr>
					<tr>
						<td height='30' width='40%' align='right' valign='top'></td>
						<td height='30' width='60%' align='left' valign='top'>
							<input type='text' id='mGPSFULL' name='mGPSFULL' value='' class='cssINPUT cssMONO' readonly style='visibility:hidden;' />
						</td>
					</tr>
					<tr>
						<td height='30' width='40%' align='right' valign='top'></td>
						<td height='30' width='60%' align='left' style='position:relative;' valign='top'>
							<input type='submit' id='btnStep2' name='step3SUBMIT' value='Continue' disabled style='padding:10px; width:100%;' />
						</td>
					</tr>
				</table>
			</form>
		</div>
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
		if(JS_nNormal.value == '') {
			JS_btnStep3.disabled = true;
			JS_btnStep3.style.backgroundColor = 'Gray';
		} else {
			JS_btnStep3.disabled = false;
			JS_btnStep3.style.backgroundColor = 'Green';
		}
	}
	setTimeout(uLoadTheCountries, 500);
</script>
