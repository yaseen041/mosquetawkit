<!DOCTYPE html>
<html>
<head>
	<script type='text/javascript' src="{{ asset('assets/offline/countries.js') }}"></script>
	<script type='text/javascript' src="{{ asset('assets/offline/PrayTimes.js') }}"></script>
	<style type='text/css'>
		@font-face {
			font-family: 'Amiri';
			src: url("{{asset('assets/font/Amiri-Regular.woff2') }}") format('woff2');
			font-weight: normal;
			font-style: normal;
			font-display: swap;
		}
		body {
			margin: 0px;
			font-family: 'Amiri';
			font-size: 15pt;
			color: #151515;
			background-color: white;
			line-height: 25px;
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
		select {
			padding: 3px;
		}
		.cssINPUT {
			padding: 5px;
			font-size: 12pt;
			border: 3px solid #503931;
			width: 95%;
		}
		.cssMONO {
			font-family: monospace;
		}
		.eSans {
			font-family: sans-serif;
		}
		img {
			vertical-align: middle;
		}
		a {
			text-decoration: none;
			color: black;
		}
		a:hover {
			color: #982D27;
		}
		.silver {
			color: silver;
		}
		.fs90 {
			font-size: 90%;
		}
		.fs80 {
			font-size: 80%;
		}
		.cssAR {
			font-size: 110%;
			color: #982D27;
			font-family: 'Amiri';
			direction: rtl;
		}
		.cssBLUE {
			color: blue;
			cursor: pointer;
		}
		.cssSelecL {
			width: 100%;
			padding: 7px;
		}
	</style>
	<link rel='shortcut icon' type='image/x-icon' href="{{ asset('assets/favicon.ico') }}" />
	<link rel='apple-touch-icon' sizes='152x152' href="{{ asset('assets/favicon152.png') }}" />
	<title>{{ get_section_content('project', 'site_title') }} Praying Times &#8211; {{ get_section_content('project', 'site_title') }}</title>
</head>
<body>
	<center>
		<div align='center' style='width:750px; padding:15px 0;'>
			<div style='font-size:140%; color:#353535; line-height:1.9em;'>
				<a href="{{ url('/') }}" target='_blank'>{{ get_section_content('project', 'site_title') }}</a> Annual Prayer Times File Maker<br />
				<span class='cssAR'>مواقيت الصلاة لبرنامج التوقيت</span>
			</div>
			<br>
			<table align='center' cellpadding='0' cellspacing='3' border='0' width='100%'>
				<tr>
					<td height='40' width='20%' align='right' valign='top'>Country - <span class='cssAR'>البلد</span> :
					</td>
					<td height='40' width='30%' align='left' valign='top'><select id='mCOUNTRY' name='mCOUNTRY'
							onchange='uCountryCHANGE(this);' class='cssSelecL'></select></td>
					<td height='40' width='20%' align='right' valign='top'>City - <span class='cssAR'>المدينة</span> :
					</td>
					<td height='40' width='30%' align='left' valign='top'><select id='mCITY'
							onchange='uCityCHANGE(this);' class='cssSelecL'></select></td>
				</tr>
				<tr>
					<td height='40' width='20%' align='right' valign='top'>Method :</td>
					<td height='40' width='30%' align='left' valign='top' style='position:relative;'>
						<select id='mMETHODS' onchange='uCalcMethodsCHANGE(this);' class='cssSelecL'></select>
						<div id='eCUSTBOX'
							style='width:300px; padding:3px; background-color:lightyellow; border:1px solid silver; display:none;'>
							Fajr : <span id='custFAJR'>-</span> <span class='cssBLUE'
								onclick="goGpsSetCustom('FAJR');">» Edit (angle)</span> <br />
							Isha : <span id='custISHA'>-</span> <span class='cssBLUE'
								onclick="goGpsSetCustom('ISHA');">» Edit (angle-or-minutes)</span>
						</div>
					</td>
					<td height='40' width='20%' align='right' valign='top'>Asr :</td>
					<td height='40' width='30%' align='left' valign='top'><select id='mMADHAB'
							onchange='uMadhabCHANGE(this);' class='cssSelecL'></select></td>
				</tr>
			</table>
			<div id='mGPSFULL' class='cssMONO'></div>
			<table align='center' cellpadding='0' cellspacing='10' border='0' width='100%'>
				<tr>
					<td height='40' width='100%'>
						<div style='padding:25px 0; line-height:43px;' align='center'>
							TODAY PRAYER TIMES WITH ADJUSTMENTS<br>
							<button onclick='editGPS();'>edit GPS</button> &nbsp;&nbsp;
							<span class='cssMONO silver fs80' id='jxREGIO'
								style='color:orange; cursor:help;'>&nbsp;</span> &nbsp;&nbsp;
							<span style='color:red;' id='jxTODAY'></span>
						</div>
						<table align='center' cellpadding='3' cellspacing='3' border='0' width='100%'
							style='background-color:#FFFFE0;text-align:center;'>
							<tr>
								<td height='30' width='16.6%'>isha<br>العشاء</td>
								<td height='30' width='16.6%'>maghrib<br>المغرب</td>
								<td height='30' width='16.6%'>asr<br>العصر</td>
								<td height='30' width='16.6%'>dohr<br>الظهر</td>
								<td height='30' width='16.6%'>shoruq<br>الشروق</td>
								<td height='30' width='16.6%'>fajr<br>الفجر</td>
							</tr>
						</table>
						<table align='center' cellpadding='3' cellspacing='3' border='0' width='100%' class='eSans'
							style='text-align:center;font-size:110%; letter-spacing:1px; background-color:#503931; color:#FFFFE0;'>
							<tr>
								<td height='30' width='16.6%' id='jxISHA'>-</td>
								<td height='30' width='16.6%' id='jxMAGHRIB'>-</td>
								<td height='30' width='16.6%' id='jxASR'>-</td>
								<td height='30' width='16.6%' id='jxDOHR'>-</td>
								<td height='30' width='16.6%' id='jxSHORUQ'>-</td>
								<td height='30' width='16.6%' id='jxFAJR'>-</td>
							</tr>
						</table>
						<table align='center' cellpadding='3' cellspacing='3' border='0' width='100%'>
							<tr>
								<td height='30' width='16.6%'>
									<select id='qISHA' data-poz='5' onchange='goADJUST(this);' style='width:100%;'>
										<option value='-12'>-12 min</option>
										<option value='-11'>-11 min</option>
										<option value='-10'>-10 min</option>
										<option value='-9'>-9 min</option>
										<option value='-8'>-8 min</option>
										<option value='-7'>-7 min</option>
										<option value='-6'>-6 min</option>
										<option value='-5'>-5 min</option>
										<option value='-4'>-4 min</option>
										<option value='-3'>-3 min</option>
										<option value='-2'>-2 min</option>
										<option value='-1'>-1 min</option>
										<option value='0' selected>0 min</option>
										<option value='1'>1 min</option>
										<option value='2'>2 min</option>
										<option value='3'>3 min</option>
										<option value='4'>4 min</option>
										<option value='5'>5 min</option>
										<option value='6'>6 min</option>
										<option value='7'>7 min</option>
										<option value='8'>8 min</option>
										<option value='9'>9 min</option>
										<option value='10'>10 min</option>
										<option value='11'>11 min</option>
										<option value='12'>12 min</option>
										<option value='13'>13 min</option>
										<option value='14'>14 min</option>
										<option value='15'>15 min</option>
										<option value='16'>16 min</option>
										<option value='17'>17 min</option>
										<option value='18'>18 min</option>
										<option value='19'>19 min</option>
										<option value='20'>20 min</option>
										<option value='21'>21 min</option>
										<option value='22'>22 min</option>
										<option value='23'>23 min</option>
										<option value='24'>24 min</option>
										<option value='25'>25 min</option>
									</select>
								</td>
								<td height='30' width='16.6%'>
									<select id='qMAGHRIB' data-poz='4' onchange='goADJUST(this);' style='width:100%;'>
										<option value='-12'>-12 min</option>
										<option value='-11'>-11 min</option>
										<option value='-10'>-10 min</option>
										<option value='-9'>-9 min</option>
										<option value='-8'>-8 min</option>
										<option value='-7'>-7 min</option>
										<option value='-6'>-6 min</option>
										<option value='-5'>-5 min</option>
										<option value='-4'>-4 min</option>
										<option value='-3'>-3 min</option>
										<option value='-2'>-2 min</option>
										<option value='-1'>-1 min</option>
										<option value='0' selected>0 min</option>
										<option value='1'>1 min</option>
										<option value='2'>2 min</option>
										<option value='3'>3 min</option>
										<option value='4'>4 min</option>
										<option value='5'>5 min</option>
										<option value='6'>6 min</option>
										<option value='7'>7 min</option>
										<option value='8'>8 min</option>
										<option value='9'>9 min</option>
										<option value='10'>10 min</option>
										<option value='11'>11 min</option>
										<option value='12'>12 min</option>
										<option value='13'>13 min</option>
										<option value='14'>14 min</option>
										<option value='15'>15 min</option>
										<option value='16'>16 min</option>
										<option value='17'>17 min</option>
										<option value='18'>18 min</option>
										<option value='19'>19 min</option>
										<option value='20'>20 min</option>
										<option value='21'>21 min</option>
										<option value='22'>22 min</option>
										<option value='23'>23 min</option>
										<option value='24'>24 min</option>
										<option value='25'>25 min</option>
									</select>
								</td>
								<td height='30' width='16.6%'>
									<select id='qASR' data-poz='3' onchange='goADJUST(this);' style='width:100%;'>
										<option value='-12'>-12 min</option>
										<option value='-11'>-11 min</option>
										<option value='-10'>-10 min</option>
										<option value='-9'>-9 min</option>
										<option value='-8'>-8 min</option>
										<option value='-7'>-7 min</option>
										<option value='-6'>-6 min</option>
										<option value='-5'>-5 min</option>
										<option value='-4'>-4 min</option>
										<option value='-3'>-3 min</option>
										<option value='-2'>-2 min</option>
										<option value='-1'>-1 min</option>
										<option value='0' selected>0 min</option>
										<option value='1'>1 min</option>
										<option value='2'>2 min</option>
										<option value='3'>3 min</option>
										<option value='4'>4 min</option>
										<option value='5'>5 min</option>
										<option value='6'>6 min</option>
										<option value='7'>7 min</option>
										<option value='8'>8 min</option>
										<option value='9'>9 min</option>
										<option value='10'>10 min</option>
										<option value='11'>11 min</option>
										<option value='12'>12 min</option>
										<option value='13'>13 min</option>
										<option value='14'>14 min</option>
										<option value='15'>15 min</option>
										<option value='16'>16 min</option>
										<option value='17'>17 min</option>
										<option value='18'>18 min</option>
										<option value='19'>19 min</option>
										<option value='20'>20 min</option>
										<option value='21'>21 min</option>
										<option value='22'>22 min</option>
										<option value='23'>23 min</option>
										<option value='24'>24 min</option>
										<option value='25'>25 min</option>
									</select>
								</td>
								<td height='30' width='16.6%'>
									<select id='qDOHR' data-poz='2' onchange='goADJUST(this);' style='width:100%;'>
										<option value='-12'>-12 min</option>
										<option value='-11'>-11 min</option>
										<option value='-10'>-10 min</option>
										<option value='-9'>-9 min</option>
										<option value='-8'>-8 min</option>
										<option value='-7'>-7 min</option>
										<option value='-6'>-6 min</option>
										<option value='-5'>-5 min</option>
										<option value='-4'>-4 min</option>
										<option value='-3'>-3 min</option>
										<option value='-2'>-2 min</option>
										<option value='-1'>-1 min</option>
										<option value='0' selected>0 min</option>
										<option value='1'>1 min</option>
										<option value='2'>2 min</option>
										<option value='3'>3 min</option>
										<option value='4'>4 min</option>
										<option value='5'>5 min</option>
										<option value='6'>6 min</option>
										<option value='7'>7 min</option>
										<option value='8'>8 min</option>
										<option value='9'>9 min</option>
										<option value='10'>10 min</option>
										<option value='11'>11 min</option>
										<option value='12'>12 min</option>
										<option value='13'>13 min</option>
										<option value='14'>14 min</option>
										<option value='15'>15 min</option>
										<option value='16'>16 min</option>
										<option value='17'>17 min</option>
										<option value='18'>18 min</option>
										<option value='19'>19 min</option>
										<option value='20'>20 min</option>
										<option value='21'>21 min</option>
										<option value='22'>22 min</option>
										<option value='23'>23 min</option>
										<option value='24'>24 min</option>
										<option value='25'>25 min</option>
									</select>
								</td>
								<td height='30' width='16.6%'>
									<select id='qSUNRISE' data-poz='1' onchange='goADJUST(this);' style='width:100%;'>
										<option value='-12'>-12 min</option>
										<option value='-11'>-11 min</option>
										<option value='-10'>-10 min</option>
										<option value='-9'>-9 min</option>
										<option value='-8'>-8 min</option>
										<option value='-7'>-7 min</option>
										<option value='-6'>-6 min</option>
										<option value='-5'>-5 min</option>
										<option value='-4'>-4 min</option>
										<option value='-3'>-3 min</option>
										<option value='-2'>-2 min</option>
										<option value='-1'>-1 min</option>
										<option value='0' selected>0 min</option>
										<option value='1'>1 min</option>
										<option value='2'>2 min</option>
										<option value='3'>3 min</option>
										<option value='4'>4 min</option>
										<option value='5'>5 min</option>
										<option value='6'>6 min</option>
										<option value='7'>7 min</option>
										<option value='8'>8 min</option>
										<option value='9'>9 min</option>
										<option value='10'>10 min</option>
										<option value='11'>11 min</option>
										<option value='12'>12 min</option>
										<option value='13'>13 min</option>
										<option value='14'>14 min</option>
										<option value='15'>15 min</option>
										<option value='16'>16 min</option>
										<option value='17'>17 min</option>
										<option value='18'>18 min</option>
										<option value='19'>19 min</option>
										<option value='20'>20 min</option>
										<option value='21'>21 min</option>
										<option value='22'>22 min</option>
										<option value='23'>23 min</option>
										<option value='24'>24 min</option>
										<option value='25'>25 min</option>
									</select>
								</td>
								<td height='30' width='16.6%'>
									<select id='qFAJR' data-poz='0' onchange='goADJUST(this);' style='width:100%;'>
										<option value='-12'>-12 min</option>
										<option value='-11'>-11 min</option>
										<option value='-10'>-10 min</option>
										<option value='-9'>-9 min</option>
										<option value='-8'>-8 min</option>
										<option value='-7'>-7 min</option>
										<option value='-6'>-6 min</option>
										<option value='-5'>-5 min</option>
										<option value='-4'>-4 min</option>
										<option value='-3'>-3 min</option>
										<option value='-2'>-2 min</option>
										<option value='-1'>-1 min</option>
										<option value='0' selected>0 min</option>
										<option value='1'>1 min</option>
										<option value='2'>2 min</option>
										<option value='3'>3 min</option>
										<option value='4'>4 min</option>
										<option value='5'>5 min</option>
										<option value='6'>6 min</option>
										<option value='7'>7 min</option>
										<option value='8'>8 min</option>
										<option value='9'>9 min</option>
										<option value='10'>10 min</option>
										<option value='11'>11 min</option>
										<option value='12'>12 min</option>
										<option value='13'>13 min</option>
										<option value='14'>14 min</option>
										<option value='15'>15 min</option>
										<option value='16'>16 min</option>
										<option value='17'>17 min</option>
										<option value='18'>18 min</option>
										<option value='19'>19 min</option>
										<option value='20'>20 min</option>
										<option value='21'>21 min</option>
										<option value='22'>22 min</option>
										<option value='23'>23 min</option>
										<option value='24'>24 min</option>
										<option value='25'>25 min</option>
									</select>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td height='20' width='100%'></td>
				</tr>
				<tr>
					<td height='40' width='100%' align='center'>
						Annual Data-File To Use in {{ get_section_content('project', 'site_title') }} Application <br>
						<span class='cssAR'>ملف البيانات لاستخدامه في تطبيق التوقيت</span><br>
					</td>
				</tr>
				<tr>
					<td height='30' width='100%' align='left' valign='top'>
						<textarea id='mWTIMES' rows='35' class='cssINPUT cssMONO'></textarea>
						<br>
					</td>
				</tr>
			</table>
		</div>
		<div align='left' style='color:#919191; width:550px; padding:90px 0px;'>
			{{-- Credits : <br />
			Calculation Script of pray times : &nbsp; <a href='http://praytimes.org/' target='_blank'
				style='color:gray;'>PrayTimes.org</a><br />
			World Geographical Database : &nbsp; <a href='https://www.geonames.org/' target='_blank'
				style='color:gray;'>GeoNames.org</a>
			<br> --}}
			<br>
			© {{date('Y')}} {{ get_section_content('project', 'site_title') }}. All rights reserved.
			<br>
		</div>
	</center>
</body>
</html>
<script>
	var JS_uuuCITY = document.getElementById('mCITY');
	var JS_mWTIMES = document.getElementById('mWTIMES');
	var JS_mGPSFULL = document.getElementById('mGPSFULL');
	var JS_jxTODAY = document.getElementById('jxTODAY');
	var JS_jxREGIO = document.getElementById('jxREGIO');
	var JS_jxISHA = document.getElementById('jxISHA');
	var JS_jxMAGHRIB = document.getElementById('jxMAGHRIB');
	var JS_jxASR = document.getElementById('jxASR');
	var JS_jxDOHR = document.getElementById('jxDOHR');
	var JS_jxSHORUQ = document.getElementById('jxSHORUQ');
	var JS_jxFAJR = document.getElementById('jxFAJR');
	var JS_GPS_CALC_METHOD = 'MAKKAH';
	var JS_GPS_ASR_TYPE = 'Standard';
	var JS_GPS_CUSTOM_FAJR = '17.5';
	var JS_GPS_CUSTOM_ISHA = '15';
	var JS_GPS_FULL_CODE = '';
	var JS_VERSIO = new Date().getTime();
	function uLoadTheCountries() {
		var JS_uuuCOUNTRY = document.getElementById('mCOUNTRY');
		var strNow = '';
		var newOPTO = new Option("", "");
		JS_uuuCOUNTRY.append(newOPTO);
		for (var i = 0; i < JS_WORLD_COUNTRIES.length; i++) {
			strNow = JS_WORLD_COUNTRIES[i];
			var tmpARR = strNow.split("|");
			var cntCODE = tmpARR[0];
			var cntNAME = tmpARR[1];
			newOPTO = new Option(cntNAME, strNow);
			JS_uuuCOUNTRY.append(newOPTO);
		}
		var xOPTO = new Option('', '');
		JS_uuuCITY.append(xOPTO);
	}
	function emptyCities() {
		JS_uuuCITY.innerHTML = '';
		var newOPTO = new Option("", "");
		JS_uuuCITY.append(newOPTO);
		uCityCHANGE(JS_uuuCITY);
	}
	var JS_GPS_CALCULATION_CITIES_NOW = [];
	function uCountryCHANGE(obj) {
		var eee_STR = obj.options[obj.selectedIndex].value;
		if (eee_STR == '') {
			emptyCities();
			return;
		}
		var tmpARR = eee_STR.split("|");
		var eee_CODE = tmpARR[0];
		JS_mGPSFULL.innerHTML = '';
		JS_mWTIMES.value = '';
		JS_GPS_CALCULATION_CITIES_NOW = [];
		var tempIniFile = "{{ asset('assets/admin/geoDB/')}}" + '/' + eee_CODE + ".js?s=" + JS_VERSIO;
		uLoadGpsCitiesAsJS(tempIniFile);
		console.log(tempIniFile);
	}
	function uLoadGpsCitiesAsJS(iniFile) {
		var JS_script = document.createElement("script");
		JS_script.type = "text/javascript";
		JS_script.src = iniFile;
		JS_script.onload = function () {
			log("Script_load_end.");
			uLoadGpsCitiesNOW();
		};
		document.body.appendChild(JS_script);
	}
	function uLoadGpsCitiesNOW() {
		var strNow = '';
		emptyCities();
		for (var i = 0; i < JS_GPS_CALCULATION_CITIES_NOW.length; i++) {
			strNow = JS_GPS_CALCULATION_CITIES_NOW[i];
			var tmpARR = strNow.split("|");
			var city_NAME = tmpARR[1];
			newOPTO = new Option(city_NAME, strNow);
			JS_uuuCITY.append(newOPTO);
		}
		log('----END_uLoadGpsCitiesNOW');
	}
	function uCityCHANGE(obj) {
		var sssCODE, origVAL;
		sssCODE = obj.options[obj.selectedIndex].value;
		if (sssCODE == "") return;
		origVAL = sssCODE;
		sssCODE = sssCODE.replace(/'/g, '');
		sssCODE = sssCODE.replace(/"/g, '');
		var arrco = sssCODE.split("|");
		sssCODE = arrco[0] + '|' + arrco[1] + '|' + arrco[2] + '|' + arrco[3] + '|' + arrco[4];
		JS_GPS_FULL_CODE = sssCODE.toUpperCase();
		JS_jxREGIO.innerHTML = JS_GPS_FULL_CODE;
		setTimeout(goGenerateDATA, 500);
	}
	function goFillMadhabAndMETHODS() {
		var JS_METHODS_BOX = document.getElementById('mMETHODS');
		var JS_MADHAB_BOX = document.getElementById('mMADHAB');
		var arryMDHB = ['Standard|Standard', 'Hanafi|Hanafi'];
		var arro = JS_PRAY_TIME.getMethodsLISTING();
		for (var item in arro) {
			var newOPTO = new Option(arro[item].name, item);
			JS_METHODS_BOX.append(newOPTO);
			if (item == JS_GPS_CALC_METHOD) newOPTO.selected = true;
		}
		for (var i = 0; i < arryMDHB.length; i++) {
			var tempio = arryMDHB[i].split("|");
			var newOPTO = new Option(tempio[1], tempio[0]);
			JS_MADHAB_BOX.append(newOPTO);
			if (tempio[0] == JS_GPS_ASR_TYPE) newOPTO.selected = true;
		}
	}
	function uCalcMethodsCHANGE(obj) {
		JS_GPS_CALC_METHOD = obj.options[obj.selectedIndex].value;
		log(JS_GPS_CALC_METHOD);
		autoHideCustoms();
		goGenerateDATA();
	}
	function editGPS() {
		var strMORE = "\n\n";
		strMORE += "A | B | C | D | E \n\n";
		strMORE += "A = Country CODE \n";
		strMORE += "B = City NAME \n";
		strMORE += "C = Latitude \n";
		strMORE += "D = Longitude \n";
		strMORE += "E = Time Zone : UTC \n";
		var str = prompt("Edit GPS Informations " + strMORE, JS_GPS_FULL_CODE);
		if (str != null) {
			JS_GPS_FULL_CODE = str;
			JS_jxREGIO.innerHTML = JS_GPS_FULL_CODE;
			setTimeout(goGenerateDATA, 500);
		}
	}
	function uMadhabCHANGE(obj) {
		JS_GPS_ASR_TYPE = obj.options[obj.selectedIndex].value;
		log(JS_GPS_ASR_TYPE);
		goGenerateDATA();
	}
	var JS_ADJS = [0, 0, 0, 0, 0, 0];
	function goADJUST(obj) {
		var eSEL = obj.options[obj.selectedIndex].value;
		var poza = obj.dataset.poz;
		JS_ADJS[poza] = eSEL;
		log(JS_ADJS);
		goGenerateDATA();
	}
	function ShowZunder(ss) {
		document.getElementById(ss).style.visibility = 'visible';
	}
	function HideZunder(ss) {
		document.getElementById(ss).style.visibility = 'hidden';
	}
	function makeTable(method, lat, lng, timeZone, dst) {
		var outDATA = '';
		var monthNames = new Array('JANUARY', 'FEBRUARY', 'MARCH', 'APRIL', 'MAY', 'JUNE', 'JULY', 'AUGUST', 'SEPTEMBER', 'OCTOBER', 'NOVEMBER', 'DECEMBER');
		var JSTODAY = new Date();
		var JSyear = JSTODAY.getFullYear();
		var JSjDAY = JSTODAY.getDate();
		var JSjMONTH = JSTODAY.getMonth() + 1;
		var xjMONTH = monthNames[JSjMONTH - 1];
		var JS_STR_MONTH = '';
		var JSDate = new Date(JSyear, 0, 1);
		var endDate = new Date(JSyear + 1, 0, 1);
		if (JS_GPS_CALC_METHOD == 'CUSTOM') {
			JS_PRAY_TIME.getMethodsLISTING()['CUSTOM'].params.fajr = JS_GPS_CUSTOM_FAJR;
			JS_PRAY_TIME.getMethodsLISTING()['CUSTOM'].params.isha = JS_GPS_CUSTOM_ISHA;
		}
		JS_PRAY_TIME.setMethod(method);
		JS_PRAY_TIME.adjust({ asr: JS_GPS_ASR_TYPE });
		if (JS_GPS_CALC_METHOD == 'MAROC')
			JS_PRAY_TIME.tune({ sunrise: -5, dhuhr: 5, maghrib: 6 });
		else
			JS_PRAY_TIME.tune({ fajr: JS_ADJS[0], sunrise: JS_ADJS[1], dhuhr: JS_ADJS[2], asr: JS_ADJS[3], maghrib: JS_ADJS[4], isha: JS_ADJS[5] });
		var output = ['fajr', 'sunrise', 'dhuhr', 'asr', 'maghrib', 'isha'];
		while (JSDate < endDate) {
			var JSNowTimes = JS_PRAY_TIME.getTimes(JSDate, [lat, lng], timeZone, dst);
			var JSNOWDAY = JSDate.getDate();
			var JSNOWMONTH = JSDate.getMonth() + 1;
			var tempMONTH = monthNames[JSNOWMONTH - 1];
			if ((JSNOWDAY == JSjDAY) && (JSNOWMONTH == JSjMONTH)) {
				JS_jxTODAY.innerHTML = JSNOWDAY + ' ' + xjMONTH + ' ' + JSyear;
				JS_jxISHA.innerHTML = JSNowTimes[output[5]];
				JS_jxMAGHRIB.innerHTML = JSNowTimes[output[4]];
				JS_jxASR.innerHTML = JSNowTimes[output[3]];
				JS_jxDOHR.innerHTML = JSNowTimes[output[2]];
				JS_jxSHORUQ.innerHTML = JSNowTimes[output[1]];
				JS_jxFAJR.innerHTML = JSNowTimes[output[0]];
			}
			if (tempMONTH !== JS_STR_MONTH) {
				JS_STR_MONTH = tempMONTH;
				outDATA += '"-------------- ' + JS_STR_MONTH + ' ----------------------------",\n';
			}
			JSNOWDAY = (JSNOWDAY < 10) ? '0' + JSNOWDAY : JSNOWDAY;
			JSNOWMONTH = (JSNOWMONTH < 10) ? '0' + JSNOWMONTH : JSNOWMONTH;
			outDATA += '"' + JSNOWMONTH + '-' + JSNOWDAY + '~~~~~';
			for (var i in output) {
				outDATA += JSNowTimes[output[i]];
				if (i < 5) outDATA += '|';
			}
			outDATA += '",\n';
			JSDate.setDate(JSDate.getDate() + 1);
		}
		JS_mWTIMES.value = 'var JS_TIMES =\n' + '[\n';
		JS_mWTIMES.value += outDATA;
		JS_mWTIMES.value += '];\n\n';
	}
	function goGpsSetCustom(codo) {
		var strMORE = "\n ";
		if (codo == 'ISHA') strMORE += "Or enter how many minutes after Maghrib ( eg: 90min )";
		var str = prompt("Edit Angle of : " + codo + strMORE, "");
		if (str != null) {
			if (codo == 'FAJR') JS_GPS_CUSTOM_FAJR = str;
			else JS_GPS_CUSTOM_ISHA = str;
			updateGpsCustoms();
			goGenerateDATA();
		}
	}
	function updateGpsCustoms() {
		document.getElementById('custFAJR').innerHTML = JS_GPS_CUSTOM_FAJR;
		document.getElementById('custISHA').innerHTML = JS_GPS_CUSTOM_ISHA;
	}
	function autoHideCustoms() {
		if (JS_GPS_CALC_METHOD == 'CUSTOM')
			document.getElementById('eCUSTBOX').style.display = 'block';
		else
			document.getElementById('eCUSTBOX').style.display = 'none';
	}
	function goGenerateDATA() {
		JS_mWTIMES.value = "Calculation ...";
		setTimeout(goCalc, 300);
	}
	function goCalc() {
		var arrio = JS_GPS_FULL_CODE.split("|");
		makeTable(JS_GPS_CALC_METHOD, arrio[2], arrio[3], arrio[4], arrio[4]);
	}
	function log(sss) {
		console.log(sss);
	}
	uLoadTheCountries();
	goFillMadhabAndMETHODS();
	updateGpsCustoms();
</script>