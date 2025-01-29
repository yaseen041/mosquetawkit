<!DOCTYPE html>
<html>
<head>
	<script type='text/javascript' src='../admin/countries.js'></script>
	<script type='text/javascript' src='../admin/PrayTimes.js'></script>
	<script type='text/javascript' src='./sw.js?x=sss'></script>
	<style type='text/css'>
		@font-face {
			font-family: 'Amiri';
			src: url('../font/Amiri-Regular.eot');
			src: url('../font/Amiri-Regular.eot?#iefix') format('embedded-opentype'),
			url('../font/Amiri-Regular.woff2') format('woff2'),
			url('../font/Amiri-Regular.woff') format('woff'),
			url('../font/Amiri-Regular.ttf') format('truetype'),
			url('../font/Amiri-Regular.svg#Amiri-Regular') format('svg');
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
			<form method='post' action='./'>
				<table align='center' cellpadding='12' cellspacing='0' width='61%' border='0' >
					<tr>
						<td align='center'><input id='vMOSQEMAIL' type='text' name='vMOSQEMAIL' placeholder='enter your email' style='padding:5px; width:100%; border:1px solid silver;' /></td>
					</tr>
					<tr>
						<td align='center'><input type='submit' name='vNewMosqSUBMIT' value='Create' style='padding:10px;  width:100%;' /></td>
					</tr>
				</table>
			</form>
		</div>
		<img width='100%' border='0' alt='' src='https://www.tawkit.net/screenshots/6-mosque-mobile-app-messages-for-prayers-awqat-salat-masjid.png' />
	</center>
</body>
</html>
<script type='text/javascript' language='javascript'>
	var JS_btnStep2		= document.getElementById('btnStep2');
	var JS_uuuCITY 		= document.getElementById('mCITY');
	var JS_mWTIMES 		= document.getElementById('mWTIMES');
//-----------------------------------------------------------------------------------
	function checkMsqNames()
	{
		var JS_nNormal 		= document.getElementById('mNAME');
		var JS_btnStep3		= document.getElementById('btnStep3');
		if(JS_nNormal.value == '')
			{ JS_btnStep3.disabled = true; JS_btnStep3.style.backgroundColor = 'Gray'; }
		else
			{ JS_btnStep3.disabled = false; JS_btnStep3.style.backgroundColor = 'Green'; }
	}
//-----------------------------------------------------------------------------------
</script>
