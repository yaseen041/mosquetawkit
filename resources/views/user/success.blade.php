<!DOCTYPE html>
<html>
<head>
	<title>New Mosque Account</title>
	<link rel='icon' href="{{asset('assets/favicon.ico')}}">
	<link rel='shortcut icon' type='image/x-icon' href="{{ asset('assets/favicon.ico') }}" />
	<link rel='apple-touch-icon' sizes='152x152' href="{{ asset('assets/favicon152.png') }}" />

	<script type='text/javascript' src="{{ asset('assets/offline/countries.js') }}"></script>
	<script type='text/javascript' src="{{ asset('assets/offline/PrayTimes.js') }}"></script>
	<script type='text/javascript' src="{{ asset('assets/admin/sw.js')}}"></script>
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
		<div align='center' style='width:500px; padding:7px;' >
			<br><br><br>
			<div class='cssAR' style='font-size:173%;'><b>الحمد لله</b></div><br /><br />
			<div style='font-size:130%;'><b>AlhamduliLah !</b></div><br />
			<div style='font-size:100%; color:#353535; line-height:1.9em;'>
				Mosque informations sent to your email.<br />
				<span class='cssAR'>تطبيق المسجد جاهز الآن.<br />أدناه كل معلومات المسجد الخاصة بك ، وتم إرسالها إلى بريدك </span>
			</div>
			<br />			
			<table align='center' dir='ltr' cellpadding='5' cellspacing='0' border='0' width='100%' style='font-variant:normal; background-color:lightyellow; border:1px solid silver;' >
				<tr>
					<td height='23' width='100%' align='left' valign='top'>
						Mosque Link <span class='cssAR' >رابط تطبيق المسجد</span> : <br /><br />
						<a href='{{url("online/{$mosque->unique_id}/{$mosque->city}")}}' target='_blank'>{{url("online/{$mosque->unique_id}/{$mosque->city}")}}</a><br />
						<br />
						QR code : <br />
						<a target='_blank' href='{{url("online/{$mosque->unique_id}/{$mosque->city}")}}'>
							<img width='80' height='80' border='0' alt='' src='{{ asset('uploads/qrcodes/' . $mosque->qr_code) }}' />


							{{-- <img width='80' height='80' border='0' alt='' src='https://api.qrserver.com/v1/create-qr-code/?size=90x90&data={{url("online/{$mosque->unique_id}/{$mosque->city}")}}' /> --}}
						</a>
						<hr />
						Administration : <br />
						<a href='{{url('/mosque')}}' target='_blank'>{{url('/mosque')}}</a><br />
						<br />
						<span style="color: green">{{$congrats}}</span>
						<p>{{ $message }}</p>
						<br />
					</td>
				</tr>
			</table>
		</div>
		<br /><br /><br /><br />
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