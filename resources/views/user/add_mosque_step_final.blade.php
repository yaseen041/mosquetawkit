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
			<span style='font-size:130%;'><b>Last final informations</b></span><br />
			<br />
			<div style='font-size:100%; color:#353535; line-height:1.9em;'>
				Complete the final informations of your Mosque.<br />
				<span class='cssAR'>أكمل المعلومات النهائية للمسجد</span>
			</div>
			<br />			
			<form method='post' action="{{ route('mosque.step3') }}">
				@csrf
				<input type='hidden' name='mID' value="{{$mosque->unique_id}}" >
				<input type='hidden' name='mxCITY' value="{{$mosque->city}}" >
				<input type='hidden' name='mxWRFILE' value="" >
				<input type='hidden' name='mxLTD' value="{{$mosque->country_code}}" >
				<input type='hidden' name='mCusFAJR' id='mCusFAJR' 	value='' >
				<input type='hidden' name='mCusISHA' id='mCusISHA' 	value='' >
				<table align='center' cellpadding='0' cellspacing='12' border='0' width='100%' >
					<tr>
						<td height='30' width='40%' align='right' valign='top'>
							Name in mobile app : <span class='eMUST'>*</span> 
							<br />
							<span class='cssAR'>اسم المسجد في تطبيق الجوال</span>
						</td>
						<td height='30' width='60%' align='left' valign='top'>
							<input type='text'  id='mNAME' oninput='checkMsqNames();' name='mNAME' value='' class='cssINPUT' />
						</td>
					</tr>
					<tr>
						<td height='20' width='40%'></td>
						<td height='20' width='60%'></td>
					</tr>
					<tr id='xMMM1'>
						<td height='30' width='40%' align='right' valign='top'>
							Method : <span class='eMUST'>*</span>
						</td>
						<td height='30' width='60%' align='left' style='position:relative;' valign='top'>
							<select id='mMETHODS' name='mMETHODS' onchange='uCalcMethodsCHANGE(this);' class='cssSelecL' style='width:243px; padding:7px;' >
							</select>
							<div id='eCUSTBOX' style='width:270px; padding:3px; background-color:lightyellow; border:1px solid silver; display:none;' >
								Fajr : <span id='custFAJR'>-</span>
								<span class='cssBLUE' onclick="goGpsSetCustom('FAJR');">
									» Edit (angle)
								</span>
								<br />
								Isha : <span id='custISHA'>-</span>
								<span class='cssBLUE' onclick="goGpsSetCustom('ISHA');">
									» Edit (angle-or-minutes)
								</span>
							</div>
						</td>
					</tr>	
					<tr id='xMMM2'>
						<td height='30' width='40%' align='right' valign='top'>Asr Calculation : <span class='eMUST'>*</span>
						</td>
						<td height='30' width='60%' align='left' style='position:relative;' valign='top'>
							<select id='mMADHAB' name='mMADHAB' onchange='uMadhabCHANGE(this);' class='cssSelecL' style='width:143px; padding:7px;' ></select>
						</td>
					</tr>	
					<tr>
						<td height='20' width='40%'></td>
						<td height='20' width='60%'></td>
					</tr>
					<tr style='display:none;'>
						<td height='30' width='40%' align='right' valign='top' ></td>
						<td height='30' width='60%' align='left' valign='top' >
							<textarea id='mWTIMES' name='mWTIMES' rows='1' class='cssINPUT cssMONO' readonly></textarea>
						</td>
					</tr>				
					<tr>
						<td height='30' width='40%' align='right' valign='top'></td>
						<td height='30' width='60%' align='left' style='position:relative;' valign='top'>
							<input type='submit' id='btnStep3' name='step4SUBMIT' value=' SAVE ' disabled style='padding:10px; width:100%;' />
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

	function checkMsqNames() {
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

	goFillMadhabAndMETHODS();
	updateGpsCustoms();
	JS_GPS_FULL_CODE = 'DZ|Ain Boucif|35.89123|3.1585|1.0';
	setTimeout(goGenerateDATA, 1000);
</script>
