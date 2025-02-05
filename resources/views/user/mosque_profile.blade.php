<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
<head>
	<title>{{ get_section_content('project', 'site_title') }} Mosque Profile</title>
	<link rel='icon' href="{{ asset('assets/favicon.ico') }}">
	<meta http-equiv='content-type' content='text/html; charset=utf-8' />
	<script type='text/javascript' src="{{ asset('assets/offline/countries.js') }}"></script>
	<script type='text/javascript' src="{{ asset('assets/admin/datetimepicker_css.js') }}"></script>
	<script type='text/javascript' src="{{ asset('assets/offline/PrayTimes.js') }}"></script>
	<script type='text/javascript' language='javascript'>
		var JS_IKAMAS_DATA = "{{$mosque->iqamaz}}";
		var JS_SETTINGS = "{{$mosque->m_settings}}";
	</script>
	<style type='text/css'>
		@font-face { 
			font-family: 'Amiri';
			src: url("{{ asset('assets/font/Amiri-Regular.eot') }}");
			src: url("{{ asset('assets/font/Amiri-Regular.eot') }}") format('embedded-opentype'),
				url("{{ asset('assets/font/Amiri-Regular.woff2') }}") format('woff2'),
					url("{{ asset('assets/font/Amiri-Regular.woff') }}") format('woff'),
						url("{{ asset('assets/font/Amiri-Regular.ttf') }}") format('truetype'),
							url("{{ asset('assets/font/Amiri-Regular.svg#Amiri-Regular') }}") format('svg');
								font-weight: normal;
								font-style: normal;
								font-display: swap;
							}
							body{
								margin : 0px;
								font-family : 'Georgia';
								font-size : 11pt;
								color : #353535;
								background-color: white;
								line-height : 21px;
							}
							.cssINPUT {
								padding:5px;
								font-size:11pt;
								border:1px solid silver;
								width:95%;
							}
							.cssMONO {
								font-family:monospace;
								font-size:10pt;
							}
							.cssSelecR {
								position:absolute;
								right:25px;
								width:250px;
							}
							.cssSelecL {
								position:absolute;
								left:0px;
								width:250px;
							}
							img {
								vertical-align:middle;
							}
							a {
								text-decoration:none;
							}
							a:link,
							a:visited {
								color: blue;
							}
							.btmLINE {
								border-bottom:7px solid gray;
								margin-bottom:20px;
							}
							.CSS_LINK {
								height:27px;
								cursor:pointer;
							}
							.CSS_LINK:hover {
								color:#9E2D15;
							}
							.cssAR {
								font-size:14pt;
								color:#D63A0E;
								font-family:'Amiri';
							}
							.cssBLUE {
								color:blue;
								cursor:pointer;
							}
							.cssBORD {
								padding:5px;
								border:1px solid gray;
								background-color:#DADADA;
							}
							.eMUST {
								color:#D70000;
								font-size:16pt;
							}
							.alert-danger,
							.error {
								color:#D70000;
								font-size:12pt;
							}


							.alert-success{
								color:green;
								font-size:12pt;
							}
						</style>
					</head>
					<body>
						<table align='center' cellpadding='0' cellspacing='0' border='0' width='900' style='background-color:white;' >
							<tr>
								<td height='110' width='100%' align='right' style='position:relative;border-bottom:3px solid gray;'>
									<a href="{{ url('mosque')}}">Home</a>
									&nbsp;&nbsp;&nbsp; | &nbsp;
									<a href='{{url('online')}}' target='_blank'>
										{{ get_section_content('project', 'site_title') }}
									</a>
									&nbsp;&nbsp;&nbsp; | &nbsp;
									{{ $mosque->email}} &nbsp;
									<a href="{{ url('logout') }}">LOG OFF</a>
									&nbsp;<br /><br />
									<span style='font-size:120%;'>
										{{ get_section_content('project', 'site_title') }} Administration &nbsp; - &nbsp;
										<a href="{{url('online'.'/'.$mosque->unique_id.'/'.$mosque->city)}}" target='_blank' class='cssAR' title="{{ $mosque->unique_id}}" style='font-size:110%;'>
											{{$mosque->app_name}}
										</a>
									</span>
									<div style='position:absolute; left:10px; top:10px; width:60px;' >
										<img width='100%' border='0' alt='' src="{{ asset('assets/logo.png') }}" />
										<br>{{ get_section_content('project', 'site_title') }}
									</div>
								</td>
							</tr>
							<tr>
								<td height='130' width='100%' align='center' >
									<table align='center' cellpadding='10' cellspacing='0' border='0' width='100%' >
										<tr>
											<td height='30' width='30%' align='right' valign='top'>
												Mosque link - <span class='cssAR'>رابط المسجد</span> :
											</td>
											<td height='30' width='70%' align='left' valign='top' style='font-variant:normal; color:blue;'>
												<a href='{{url('online'.'/'.$mosque->unique_id.'/'.$mosque->city)}}' target='_blank'  title="{{ $mosque->unique_id}}">{{url('online'.'/'.$mosque->unique_id.'/'.$mosque->city)}}</a>
											</td>
										</tr>
										<tr>
											<td height='30' width='30%' align='right' valign='top'>
												Your Mosque QR-Code :
											</td>
											<td height='30' width='70%' align='left' valign='top'>
												<table align='center' cellpadding='3' cellspacing='0' border='0' width='100%' >
													<tr>
														<td height='40' width='20%' align='left' valign='top'>
															<a target='_blank' href='{{ asset('uploads/qr-codes/'.$mosque->qr_code)}}'>
																<img width='80' height='80' border='0' alt='' src="{{ asset('uploads/qrcodes/'.$mosque->qr_code)}}" />
															</a>
														</td>
														<td height='40' width='20%' align='left' valign='top'>
															<img width='100%' border='0' alt='' src="{{ asset('uploads/mosque_logos/'.$mosque->logo) }}" />
														</td>
														<td height='40' width='55%' align='left' valign='top'>
															<form action="{{ url('mosque/upload-profile') }}" method="post" enctype="multipart/form-data" class="p-4 border rounded bg-light shadow-sm text-center" style="max-width: 500px; margin: auto;">
																@csrf
																<input type="hidden" name="msID" value="{{ $mosque->unique_id }}">

																<div class="mb-3">
																	<label for="pLGfile" class="form-label fw-bold">Modify Mosque Logo (PNG file size 550 x 550)</label><br>
																	<span class="cssAR text-muted">تغيير شعار المسجد</span><br>
																	<input type="file" name="pLGfile" id="pLGfile" class="form-control" accept=".png">
																	@error('pLGfile')
																	<div class="error">{{ $message }}</div>
																	@enderror
																</div>
																<br>

																<button type="submit" name="pUploadLOGO" class="btn btn-primary" style="padding: 3px 7px; font-size: 12px">
																	<i class="fas fa-upload"></i> Upload Logo
																	<span class="cssAR" style="font-size: 12px">تفعيل</span>
																</button>

																@if (session('success'))
																<div class="mt-3 alert alert-success">
																	{{ session('success') }}
																</div>
																@endif

																@if (session('error'))
																<div class="mt-3 alert alert-danger">
																	{{ session('error') }}
																</div>
																@endif
															</form>
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
									<form action="{{ url('mosque/update-profile')}}" method='POST' enctype='multipart/form-data' >
										@csrf
										<input type='hidden' name='mID' value="{{ $mosque->unique_id}}" >
										<input type='hidden' name='mSavedCITY' value="{{ $mosque->city}}" >
										<input type='hidden' name='mIQAMAS' id='mIQAMAS' value="{{ $mosque->iqamaz}}" >
										<input type='hidden' name='mSETTINGS' id='mSETTINGS' value="{{ $mosque->m_settings}}" >
										<input type='hidden' name='m12BOOLZ' id='m12BOOLZ' value="{{ $mosque->m_12boolz}}" >


										<table align='center' cellpadding='10' cellspacing='0' border='0' width='100%' >
											<tr>
												<td height='30' width='30%' align='right' valign='top'>
													Mosque name (by Latin) :
												</td>

												<td height='30' width='70%' align='left' valign='top'>
													<input type='text' id='mNAMELATIN' name='mNAMELATIN' value="{{ $mosque->mosque_name}}" class='cssINPUT' />
												</td>
											</tr>
											<tr>
												<td height='30' width='30%' align='right' valign='top'>
													Name in mobile app : <span class='eMUST'>*</span>
													<br />
													<span class='cssAR'>اسم المسجد في تطبيق الجوال</span>
												</td>
												<td height='30' width='70%' align='left' valign='top'>
													<input type='text' id='mNAME' name='mNAME' value="{{ $mosque->app_name}}" class='cssINPUT' />
												</td>
											</tr>
											<tr>
												<td height='20' width='30%'></td>
												<td height='20' width='70%'>
													<div class='btmLINE'>&nbsp;</div>
												</td>
											</tr>
											<tr>
												<td height='30' width='30%' align='right' valign='top'>
													Message in mobile app : <br /><span id='eChars'></span>
													250 characters maxi.<br />
													<span class='cssAR'>الرسالة في تطبيق الجوال</span>
												</td>
												<td height='30' width='70%' align='left' valign='top' >
													<textarea id='mDATA' name='mDATA' rows='4' class='cssINPUT'>{{ $mosque->message}}</textarea>
												</td>
											</tr>
											<tr>
												<td height='30' width='30%' align='right' valign='top' >&nbsp;</td>
												<td height='30' width='70%' align='left' valign='top' >
													<div>
														To activate your message, the date must be in the future ( Expiration Date )
													</div>
													<div class='cssAR'>
														تفعيل رسالتك ، يجب أن يكون التاريخ في المستقبل (تاريخ انتهاء الرسالة)
													</div>
												</td>
											</tr>
											<tr>
												<td height='30' width='30%' align='right' valign='top' >
													Message Expiration Date : <br />
													<span class='cssAR'>تاريخ انتهاء الرسالة</span>
												</td>
												<td height='30' width='70%' align='left' valign='top'>
													<input type="text" id="mDatetimeEND" name="mDatetimeEND"
													value="{{ $mosque->message_expire_date == '0000-00-00 00:00:00' ? '' : $mosque->message_expire_date }}"
													readonly class="cssINPUT" style="width:145px;" />

													<span class='cssBLUE cssBORD' onclick="NewCssCal('mDatetimeEND','yyyyMMdd','ARROW',true,'24',false,true)">
														<img border='0' src="{{ asset('assets/images/cal.gif')}}" />
														&nbsp;
														Change Date  -  <span class='cssAR'>تغيير التاريخ</span>
													</span>
													&nbsp;&nbsp;
													<span class='cssBLUE cssBORD' onclick='DisableMsgDATE();'>
														Disable Message  -  <span class='cssAR'>تعطيل الرسالة</span>
													</span>
												</td>
											</tr>
											<tr>
												<td height='30' width='30%' align='right' valign='top' ></td>
												<td height='30' width='70%' align='left' valign='top' >
													@php

													$timezone = 'Asia/Karachi';
													$expireDate = $mosque->message_expire_date
													? \Carbon\Carbon::parse($mosque->message_expire_date, $timezone)
													: null;
													$now = \Carbon\Carbon::now($timezone);
													@endphp

													@if(is_null($expireDate) || $expireDate->lessThanOrEqualTo($now))
													<img width='23' height='23' border='0' alt='' src="{{ asset('assets/images/ico-off.png') }}" />
													&nbsp;
													Date Expired - <span class='cssAR'> انتهى تاريخ الصلاحية</span>
													@else
													<img width='23' height='23' border='0' alt='' src="{{ asset('assets/images/ico-on.png') }}" />
													Active Till : {{ $expireDate->format('l j F Y, g:i A') }}
													<span class="cssAR">فعلي حتى تاريخ</span>
													@endif


													<br>
													<br>
													<input type='checkbox' name='mAyatsSWITCHER' value='1' checked >
													&nbsp;&nbsp;&nbsp;
													<label for='mAyatsSWITCHER'>
														Auto switch between my message and Ayats in horizontal display ()
														<br />
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<span class='cssAR'> تفعيل التبديل التلقائي بين رسالتي والآيات في العرض الأفقي
														</span>
													</label>
													<br>
													<br />
												</td>
											</tr>
											<tr>
												<td height='20' width='30%'></td>
												<td height='20' width='70%'>
													<div class='btmLINE'>&nbsp;</div>
												</td>
											</tr>
											<tr>
												<td height='30' width='30%' align='right' valign='top'>
													IQAMA - <span class='cssAR'>الإقامة</span> :
												</td>
												<td height='30' width='70%' align='left' valign='top'>
													<table align='center' cellpadding='5' cellspacing='3' border='0' width='100%' >
														<tr>
															<td height='30' width='20%'>ISHA</td>
															<td height='30' width='20%'>MAGHRIB</td>
															<td height='30' width='20%'>ASR</td>
															<td height='30' width='20%'>DOHR</td>
															<td height='30' width='20%'>FAJR</td>
														</tr>
														<tr>
															<td height='30' width='20%'>
																<select id='qISHA' data-poz='4' onchange='getIKAMA(this);' style='width:100%;' >
																	<option value='---'>---</option>
																	<option value='0'>0 min</option>
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
																	<option value='26'>26 min</option>
																	<option value='27'>27 min</option>
																	<option value='28'>28 min</option>
																	<option value='29'>29 min</option>
																	<option value='30'>30 min</option>
																	<option value='31'>31 min</option>
																	<option value='32'>32 min</option>
																	<option value='33'>33 min</option>
																	<option value='34'>34 min</option>
																	<option value='35'>35 min</option>
																	<option value='36'>36 min</option>
																	<option value='37'>37 min</option>
																	<option value='38'>38 min</option>
																	<option value='39'>39 min</option>
																	<option value='40'>40 min</option>
																	<option value='45'>45 min</option>
																	<option value='50'>50 min</option>
																	<option value='60'>60 min</option>
																	<option value='18:00'>Fixed 18:00</option>
																	<option value='18:05'>Fixed 18:05</option>
																	<option value='18:10'>Fixed 18:10</option>
																	<option value='18:15'>Fixed 18:15</option>
																	<option value='18:20'>Fixed 18:20</option>
																	<option value='18:25'>Fixed 18:25</option>
																	<option value='18:30'>Fixed 18:30</option>
																	<option value='18:35'>Fixed 18:35</option>
																	<option value='18:40'>Fixed 18:40</option>
																	<option value='18:45'>Fixed 18:45</option>
																	<option value='18:50'>Fixed 18:50</option>
																	<option value='18:55'>Fixed 18:55</option>
																	<option value='19:00'>Fixed 19:00</option>
																	<option value='19:05'>Fixed 19:05</option>
																	<option value='19:10'>Fixed 19:10</option>
																	<option value='19:15'>Fixed 19:15</option>
																	<option value='19:20'>Fixed 19:20</option>
																	<option value='19:25'>Fixed 19:25</option>
																	<option value='19:30'>Fixed 19:30</option>
																	<option value='19:35'>Fixed 19:35</option>
																	<option value='19:40'>Fixed 19:40</option>
																	<option value='19:45'>Fixed 19:45</option>
																	<option value='19:50'>Fixed 19:50</option>
																	<option value='19:55'>Fixed 19:55</option>
																	<option value='20:00'>Fixed 20:00</option>
																	<option value='20:05'>Fixed 20:05</option>
																	<option value='20:10'>Fixed 20:10</option>
																	<option value='20:15'>Fixed 20:15</option>
																	<option value='20:20'>Fixed 20:20</option>
																	<option value='20:25'>Fixed 20:25</option>
																	<option value='20:30'>Fixed 20:30</option>
																	<option value='20:35'>Fixed 20:35</option>
																	<option value='20:40'>Fixed 20:40</option>
																	<option value='20:45'>Fixed 20:45</option>
																	<option value='20:50'>Fixed 20:50</option>
																	<option value='20:55'>Fixed 20:55</option>
																	<option value='21:00'>Fixed 21:00</option>
																	<option value='21:05'>Fixed 21:05</option>
																	<option value='21:10'>Fixed 21:10</option>
																	<option value='21:15'>Fixed 21:15</option>
																	<option value='21:20'>Fixed 21:20</option>
																	<option value='21:25'>Fixed 21:25</option>
																	<option value='21:30'>Fixed 21:30</option>
																	<option value='21:35'>Fixed 21:35</option>
																	<option value='21:40'>Fixed 21:40</option>
																	<option value='21:45'>Fixed 21:45</option>
																	<option value='21:50'>Fixed 21:50</option>
																	<option value='21:55'>Fixed 21:55</option>
																	<option value='22:00'>Fixed 22:00</option>
																	<option value='22:05'>Fixed 22:05</option>
																	<option value='22:10'>Fixed 22:10</option>
																	<option value='22:15'>Fixed 22:15</option>
																	<option value='22:20'>Fixed 22:20</option>
																	<option value='22:25'>Fixed 22:25</option>
																	<option value='22:30'>Fixed 22:30</option>
																	<option value='22:35'>Fixed 22:35</option>
																	<option value='22:40'>Fixed 22:40</option>
																	<option value='22:45'>Fixed 22:45</option>
																	<option value='22:50'>Fixed 22:50</option>
																	<option value='22:55'>Fixed 22:55</option>
																	<option value='23:00'>Fixed 23:00</option>
																	<option value='23:05'>Fixed 23:05</option>
																	<option value='23:10'>Fixed 23:10</option>
																	<option value='23:15'>Fixed 23:15</option>
																	<option value='23:20'>Fixed 23:20</option>
																	<option value='23:25'>Fixed 23:25</option>
																	<option value='23:30'>Fixed 23:30</option>
																</select>
															</td>
															<td height='30' width='20%'>
																<select id='qMAGHRIB' data-poz='3' onchange='getIKAMA(this);' style='width:100%;' >
																	<option value='---'>---</option>
																	<option value='0'>0 min</option>
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
																	<option value='26'>26 min</option>
																	<option value='27'>27 min</option>
																	<option value='28'>28 min</option>
																	<option value='29'>29 min</option>
																	<option value='30'>30 min</option>
																	<option value='31'>31 min</option>
																	<option value='32'>32 min</option>
																	<option value='33'>33 min</option>
																	<option value='34'>34 min</option>
																	<option value='35'>35 min</option>
																	<option value='36'>36 min</option>
																	<option value='37'>37 min</option>
																	<option value='38'>38 min</option>
																	<option value='39'>39 min</option>
																	<option value='40'>40 min</option>
																	<option value='45'>45 min</option>
																	<option value='50'>50 min</option>
																	<option value='60'>60 min</option>
																</select>
															</td>
															<td height='30' width='20%'>
																<select id='qASR' data-poz='2' onchange='getIKAMA(this);' style='width:100%;' >
																	<option value='---'>---</option>
																	<option value='0'>0 min</option>
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
																	<option value='26'>26 min</option>
																	<option value='27'>27 min</option>
																	<option value='28'>28 min</option>
																	<option value='29'>29 min</option>
																	<option value='30'>30 min</option>
																	<option value='31'>31 min</option>
																	<option value='32'>32 min</option>
																	<option value='33'>33 min</option>
																	<option value='34'>34 min</option>
																	<option value='35'>35 min</option>
																	<option value='36'>36 min</option>
																	<option value='37'>37 min</option>
																	<option value='38'>38 min</option>
																	<option value='39'>39 min</option>
																	<option value='40'>40 min</option>
																	<option value='45'>45 min</option>
																	<option value='50'>50 min</option>
																	<option value='60'>60 min</option>
																	<option value='13:00'>Fixed 13:00</option>
																	<option value='13:15'>Fixed 13:15</option>
																	<option value='13:30'>Fixed 13:30</option>
																	<option value='13:45'>Fixed 13:45</option>
																	<option value='14:00'>Fixed 14:00</option>
																	<option value='14:15'>Fixed 14:15</option>
																	<option value='14:30'>Fixed 14:30</option>
																	<option value='14:45'>Fixed 14:45</option>
																	<option value='15:00'>Fixed 15:00</option>
																	<option value='15:05'>Fixed 15:05</option>
																	<option value='15:10'>Fixed 15:10</option>
																	<option value='15:15'>Fixed 15:15</option>
																	<option value='15:20'>Fixed 15:20</option>
																	<option value='15:25'>Fixed 15:25</option>
																	<option value='15:30'>Fixed 15:30</option>
																	<option value='15:35'>Fixed 15:35</option>
																	<option value='15:40'>Fixed 15:40</option>
																	<option value='15:45'>Fixed 15:45</option>
																	<option value='15:50'>Fixed 15:50</option>
																	<option value='15:55'>Fixed 15:55</option>
																	<option value='16:00'>Fixed 16:00</option>
																	<option value='16:05'>Fixed 16:05</option>
																	<option value='16:10'>Fixed 16:10</option>
																	<option value='16:15'>Fixed 16:15</option>
																	<option value='16:20'>Fixed 16:20</option>
																	<option value='16:25'>Fixed 16:25</option>
																	<option value='16:30'>Fixed 16:30</option>
																	<option value='16:35'>Fixed 16:35</option>
																	<option value='16:40'>Fixed 16:40</option>
																	<option value='16:45'>Fixed 16:45</option>
																	<option value='16:50'>Fixed 16:50</option>
																	<option value='16:55'>Fixed 16:55</option>
																	<option value='17:00'>Fixed 17:00</option>
																	<option value='17:05'>Fixed 17:05</option>
																	<option value='17:10'>Fixed 17:10</option>
																	<option value='17:15'>Fixed 17:15</option>
																	<option value='17:20'>Fixed 17:20</option>
																	<option value='17:25'>Fixed 17:25</option>
																	<option value='17:30'>Fixed 17:30</option>
																	<option value='17:35'>Fixed 17:35</option>
																	<option value='17:40'>Fixed 17:40</option>
																	<option value='17:45'>Fixed 17:45</option>
																	<option value='17:50'>Fixed 17:50</option>
																	<option value='17:55'>Fixed 17:55</option>
																	<option value='18:00'>Fixed 18:00</option>
																	<option value='18:05'>Fixed 18:05</option>
																	<option value='18:10'>Fixed 18:10</option>
																	<option value='18:15'>Fixed 18:15</option>
																	<option value='18:20'>Fixed 18:20</option>
																	<option value='18:25'>Fixed 18:25</option>
																	<option value='18:30'>Fixed 18:30</option>
																	<option value='18:35'>Fixed 18:35</option>
																	<option value='18:40'>Fixed 18:40</option>
																	<option value='18:45'>Fixed 18:45</option>
																	<option value='18:50'>Fixed 18:50</option>
																	<option value='18:55'>Fixed 18:55</option>
																	<option value='19:00'>Fixed 19:00</option>
																	<option value='19:15'>Fixed 19:15</option>
																	<option value='19:30'>Fixed 19:30</option>
																</select>
															</td>
															<td height='30' width='20%'>
																<select id='qDOHR' data-poz='1' onchange='getIKAMA(this);' style='width:100%;' >
																	<option value='---'>---</option>
																	<option value='0'>0 min</option>
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
																	<option value='26'>26 min</option>
																	<option value='27'>27 min</option>
																	<option value='28'>28 min</option>
																	<option value='29'>29 min</option>
																	<option value='30'>30 min</option>
																	<option value='31'>31 min</option>
																	<option value='32'>32 min</option>
																	<option value='33'>33 min</option>
																	<option value='34'>34 min</option>
																	<option value='35'>35 min</option>
																	<option value='36'>36 min</option>
																	<option value='37'>37 min</option>
																	<option value='38'>38 min</option>
																	<option value='39'>39 min</option>
																	<option value='40'>40 min</option>
																	<option value='45'>45 min</option>
																	<option value='50'>50 min</option>
																	<option value='60'>60 min</option>
																	<option value='12:00'>Fixed 12:00</option>
																	<option value='12:05'>Fixed 12:05</option>
																	<option value='12:10'>Fixed 12:10</option>
																	<option value='12:15'>Fixed 12:15</option>
																	<option value='12:20'>Fixed 12:20</option>
																	<option value='12:25'>Fixed 12:25</option>
																	<option value='12:30'>Fixed 12:30</option>
																	<option value='12:35'>Fixed 12:35</option>
																	<option value='12:40'>Fixed 12:40</option>
																	<option value='12:45'>Fixed 12:45</option>
																	<option value='12:50'>Fixed 12:50</option>
																	<option value='12:55'>Fixed 12:55</option>
																	<option value='13:00'>Fixed 13:00</option>
																	<option value='13:05'>Fixed 13:05</option>
																	<option value='13:10'>Fixed 13:10</option>
																	<option value='13:15'>Fixed 13:15</option>
																	<option value='13:20'>Fixed 13:20</option>
																	<option value='13:25'>Fixed 13:25</option>
																	<option value='13:30'>Fixed 13:30</option>
																	<option value='13:35'>Fixed 13:35</option>
																	<option value='13:40'>Fixed 13:40</option>
																	<option value='13:45'>Fixed 13:45</option>
																	<option value='13:50'>Fixed 13:50</option>
																	<option value='13:55'>Fixed 13:55</option>
																	<option value='14:00'>Fixed 14:00</option>
																	<option value='14:15'>Fixed 14:15</option>
																	<option value='14:30'>Fixed 14:30</option>
																</select>
															</td>
															<td height='30' width='20%'>
																<select id='qFAJR' data-poz='0' onchange='getIKAMA(this);' style='width:100%;' >
																	<option value='---'>---</option>
																	<option value='0'>0 min</option>
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
																	<option value='26'>26 min</option>
																	<option value='27'>27 min</option>
																	<option value='28'>28 min</option>
																	<option value='29'>29 min</option>
																	<option value='30'>30 min</option>
																	<option value='31'>31 min</option>
																	<option value='32'>32 min</option>
																	<option value='33'>33 min</option>
																	<option value='34'>34 min</option>
																	<option value='35'>35 min</option>
																	<option value='36'>36 min</option>
																	<option value='37'>37 min</option>
																	<option value='38'>38 min</option>
																	<option value='39'>39 min</option>
																	<option value='40'>40 min</option>
																	<option value='45'>45 min</option>
																	<option value='50'>50 min</option>
																	<option value='60'>60 min</option>
																	<option value='04:00'>Fixed 04:00</option>
																	<option value='04:05'>Fixed 04:05</option>
																	<option value='04:10'>Fixed 04:10</option>
																	<option value='04:15'>Fixed 04:15</option>
																	<option value='04:20'>Fixed 04:20</option>
																	<option value='04:25'>Fixed 04:25</option>
																	<option value='04:30'>Fixed 04:30</option>
																	<option value='04:35'>Fixed 04:35</option>
																	<option value='04:40'>Fixed 04:40</option>
																	<option value='04:45'>Fixed 04:45</option>
																	<option value='04:50'>Fixed 04:50</option>
																	<option value='04:55'>Fixed 04:55</option>
																	<option value='05:00'>Fixed 05:00</option>
																	<option value='05:05'>Fixed 05:05</option>
																	<option value='05:10'>Fixed 05:10</option>
																	<option value='05:15'>Fixed 05:15</option>
																	<option value='05:20'>Fixed 05:20</option>
																	<option value='05:25'>Fixed 05:25</option>
																	<option value='05:30'>Fixed 05:30</option>
																	<option value='05:35'>Fixed 05:35</option>
																	<option value='05:40'>Fixed 05:40</option>
																	<option value='05:45'>Fixed 05:45</option>
																	<option value='05:50'>Fixed 05:50</option>
																	<option value='05:55'>Fixed 05:55</option>
																	<option value='06:00'>Fixed 06:00</option>
																	<option value='06:05'>Fixed 06:05</option>
																	<option value='06:10'>Fixed 06:10</option>
																	<option value='06:15'>Fixed 06:15</option>
																	<option value='06:20'>Fixed 06:20</option>
																	<option value='06:25'>Fixed 06:25</option>
																	<option value='06:30'>Fixed 06:30</option>
																	<option value='06:35'>Fixed 06:35</option>
																	<option value='06:40'>Fixed 06:40</option>
																	<option value='06:45'>Fixed 06:45</option>
																	<option value='06:50'>Fixed 06:50</option>
																	<option value='06:55'>Fixed 06:55</option>
																	<option value='07:00'>Fixed 07:00</option>
																</select>
															</td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td height='30' width='30%' align='right' valign='top'>
													JUMMOA - <span class='cssAR'>الجمعة</span> :
												</td>
												<td height='30' width='70%' align='left' valign='top'>
													<table align='center' cellpadding='5' cellspacing='3' border='0' width='100%'>
														<tr>
															<td height='30' width='20%' valign='top'>
																Fixed time for Jummoa - <span class='cssAR'>وقت محدد للجمعة
																</span>
															</td>
														</tr>
														<tr>
															<td height='30' width='20%' valign='top' >
																<select id='qJOMOA' onchange='doJOMOA(this);' style='width:150px;' >
																	<option value=''></option>
																	<option value='12:00'>Fixed 12:00</option>
																	<option value='12:05'>Fixed 12:05</option>
																	<option value='12:10'>Fixed 12:10</option>
																	<option value='12:15'>Fixed 12:15</option>
																	<option value='12:20'>Fixed 12:20</option>
																	<option value='12:25'>Fixed 12:25</option>
																	<option value='12:30'>Fixed 12:30</option>
																	<option value='12:35'>Fixed 12:35</option>
																	<option value='12:40'>Fixed 12:40</option>
																	<option value='12:45'>Fixed 12:45</option>
																	<option value='12:50'>Fixed 12:50</option>
																	<option value='12:55'>Fixed 12:55</option>
																	<option value='13:00'>Fixed 13:00</option>
																	<option value='13:05'>Fixed 13:05</option>
																	<option value='13:10'>Fixed 13:10</option>
																	<option value='13:15'>Fixed 13:15</option>
																	<option value='13:20'>Fixed 13:20</option>
																	<option value='13:25'>Fixed 13:25</option>
																	<option value='13:30'>Fixed 13:30</option>
																	<option value='13:35'>Fixed 13:35</option>
																	<option value='13:40'>Fixed 13:40</option>
																	<option value='13:45'>Fixed 13:45</option>
																	<option value='13:50'>Fixed 13:50</option>
																	<option value='13:55'>Fixed 13:55</option>
																	<option value='14:00'>Fixed 14:00</option>
																	<option value='14:15'>Fixed 14:15</option>
																	<option value='14:30'>Fixed 14:30</option>
																	<option value='15:00'>Fixed 15:00</option>
																</select>
															</td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td height='20' width='30%'></td>
												<td height='20' width='70%'>
													<div class='btmLINE'>&nbsp;</div>
												</td>
											</tr>
											<tr>
												<td height='30' width='30%' align='right' valign='top'>
													DATA-FILE :
												</td>
												<td height='30' width='70%' align='left' valign='top'>
													Yearly data-file of your Mosque<br />
													Modify your Mosque times manually.<br>
													Or use this page to produce new times :
													<a href="{{ url('/wtimes') }}" target='_blank'>{{ url('/wtimes') }}</a>
													<br><br>
													<span class='cssAR'>
														م بتعديل أوقات مسجدك يدويًا.<br>
														أو استخدم هذه الصفحة لإنتاج أوقات جديدة تلائم أوقات مسجدك  :
													</span>
													<br />
													<a href="{{ url('/wtimes') }}" target='_blank'>{{ url('/wtimes') }}</a>
													<br><br>
													<span class='cssAR'>ملف أوقات الصلاة</span>
													<br /><br>
													<textarea id='mWTIMES' name='mWTIMES' rows='33' class='cssINPUT cssMONO'>{{ $mosque->annual_time}}</textarea>
												</td>
											</tr>
											<tr>
												<td height='20' width='30%'></td>
												<td height='20' width='70%'>
													<div class='btmLINE'>&nbsp;</div>
												</td>
											</tr>
											<tr>
												<td height='30' width='30%' align='right' valign='top' >OPTIONS</td>
												<td height='30' width='70%' align='left' valign='top' >
													<input type='checkbox' name='mSummer1HOUR' value='1' {{ $mosque->summer_hour === 1 ? 'checked' : '' }}>
													&nbsp;&nbsp;&nbsp;
													<label for='mSummer1HOUR'>
														Auto add <b>1 hour in  Summer</b>
														<br />
														(Summer Time : from last Sunday of March till last Sunday of October )
														<br>
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<span class='cssAR'>إضافة ساعة واحدة  في مواقيت الصيف </span>
													</label>
													<br> <br />
													<input type='checkbox' name='m30MinIshaRAMADAN' value='1' {{ $mosque->increase_isha_ramadan === 1 ? 'checked' : '' }} >
													&nbsp;&nbsp;&nbsp;
													<label for='m30MinIshaRAMADAN'>
														Auto Add 30 Minutes To
														<b> Isha In Ramadan</b>
														<br />
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<span class='cssAR'>
														أضف 30 دقيقة إلى العشاء في رمضان </span>
													</label><br>
													<br />
													<input type='checkbox' name='mLess1HourRAMADAN' value='1' {{ $mosque->reduce_isha_ramadan === 1 ? 'checked' : '' }}>
													&nbsp;&nbsp;&nbsp;
													<label for='mLess1HourRAMADAN'>
														<b>Auto REDUCE 1 Hour In Ramadan</b
														br />
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<span class='cssAR'>
															إزالة ساعة واحدة في رمضان
														</span>
													</label>
													<br>
													<br>
													<br>
												</td>
											</tr>

											@if (session('update_success') || session('update_error'))
											<tr>
												<td  height='0'/>

												<td  height='5'>
													@if (session('update_success'))
													<div class="mt-3 alert alert-success">
														{{ session('update_success') }}
													</div>
													@endif

													@if (session('update_error'))
													<div class="mt-3 alert alert-danger">
														{{ session('update_error') }}
													</div>
													@endif

												</td>
											</tr>
											@endif
											<tr>
												<td height='0' width='30%' style="padding: 0px;"></td><td height='0' width='70%' style="padding: 0px;" class='btmLINE'></td>
											</tr>

											<tr>
												<td height='30' width='30%' align='right'></td>
												<td height='30' width='70%' align='center'><br />
													<button type='submit'  style='width:271px; font-size:17pt; font-family:Amiri; padding:10px 0px;' > SAVE - احفظ التغييرات</button>
												</td>
											</tr>
											<tr>
												<td height='90' width='30%'></td>
												<td height='90' width='70%'></td>
											</tr>
										</table>
									</form>
								</td>
							</tr>
						</table>

						<div class='btmLINE'>&nbsp;</div>
						<div style='height:90px;' >&nbsp;</div>
						<center>
							<div align='center' style='color:#919191; width:350px;' >
								© {{date('Y')}} {{ get_section_content('project', 'site_title') }}. All rights reserved.
								<br /><br />
							</div>
						</center>
						<br />
						<br />
						<br />
					</body>
					</html>


					<script type='text/javascript' language='javascript'>

						var JS_mWTIMES = document.getElementById('mWTIMES');

						var JS_IKAMARRY = JS_IKAMAS_DATA.split(",");
						function getIKAMA(obj)
						{
							var eSEL = obj.options[obj.selectedIndex].value;
							var poza = obj.dataset.poz;
							JS_IKAMARRY[poza] = eSEL;
							JS_IKAMAS_DATA = JS_IKAMARRY.toString();
							document.getElementById('mIQAMAS').value = JS_IKAMAS_DATA;
						}
						function doJOMOA(obj)
						{
							JS_SETTINGS = obj.options[obj.selectedIndex].value;
							document.getElementById('mSETTINGS').value = JS_SETTINGS;
						}
						function DisableMsgDATE()
						{
							document.getElementById('mDatetimeEND').value = '0000-00-00 00:00';
						}
						function FillTheIQAMAS()
						{
							var JS_qFAJR 	= document.getElementById('qFAJR');
							var JS_qDOHR 	= document.getElementById('qDOHR');
							var JS_qASR 	= document.getElementById('qASR');
							var JS_qMAGHRIB = document.getElementById('qMAGHRIB');
							var JS_qISHA 	= document.getElementById('qISHA');
							for(var i=0; i < JS_qFAJR.options.length; i++)
							{
								var optio = JS_qFAJR.options[i];
								if(optio.value == JS_IKAMARRY[0] ) optio.selected = true;
							}
							for(var i=0; i < JS_qDOHR.options.length; i++)
							{
								var optio = JS_qDOHR.options[i];
								if(optio.value == JS_IKAMARRY[1] ) optio.selected = true;
							}
							for(var i=0; i < JS_qASR.options.length; i++)
							{
								var optio = JS_qASR.options[i];
								if(optio.value == JS_IKAMARRY[2] ) optio.selected = true;
							}
							for(var i=0; i < JS_qMAGHRIB.options.length; i++)
							{
								var optio = JS_qMAGHRIB.options[i];
								if(optio.value == JS_IKAMARRY[3] ) optio.selected = true;
							}
							for(var i=0; i < JS_qISHA.options.length; i++)
							{
								var optio = JS_qISHA.options[i];
								if(optio.value == JS_IKAMARRY[4] ) optio.selected = true;
							}
						}

						function FillTheSETTINGS()
						{
							var JS_qJOMOA 	= document.getElementById('qJOMOA');
							for(var i=0; i < JS_qJOMOA.options.length; i++)
							{
								var optio = JS_qJOMOA.options[i];
								if(optio.value == JS_SETTINGS ) optio.selected = true;
							}
						}

						function ShowZunder(ss)
						{
							document.getElementById(ss).style.visibility = 'visible';
						}

						function HideZunder(ss)
						{
							document.getElementById(ss).style.visibility = 'hidden';
						}

						function log(sss)
						{
							console.log(sss);
						}
						FillTheIQAMAS();
						FillTheSETTINGS();
					</script>
