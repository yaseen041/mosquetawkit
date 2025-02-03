<html>
<head>
	<title>{{get_section_content('project', 'site_title')}} Mosque Administration</title>
	<link rel='icon' href="{{asset('assets/favicon.ico')}}">
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
							img {vertical-align:middle;}
							a {text-decoration:none;}
							.CSS_LINK {height:27px; cursor:pointer;}
							.CSS_LINK:hover {color:#9E2D15;}
							.cssAR {font-size:115%; color:#008E00; font-family:'Amiri'; direction:rtl;}
							.cssBLUE {color:blue; cursor:pointer;}
							.error{
								color: red !important;
							}
						</style>
					</head>
					<body>
						<center>
							<div align="center" style="width: 700px; padding: 21px; background: url('{{ asset('assets/images/enter.png') }}') no-repeat 0px 0px;">
								<br /><br />
								<span style='font-size:130%;'><b>Administration</b></span><br />
								<br />
								<div style='font-size:100%; color:#353535; line-height:1.9em;'>
									Manage your Mosque configuration and messages<br />
									<span class='cssAR'>إدارة تكوين المسجد والرسائل</span><br />
									<br />
									<a href="{{ url('forgot-password') }}">Recover Password</a> &nbsp; . &nbsp;
									<a href="{{ url('add-mosque') }}">Add Mosque</a>
								</div>
								<hr />
								<br />
								<form method='post' action="{{ url('verify_login') }}">
									@csrf
									<table align='center' cellpadding='12' cellspacing='0' width='80%' border='0' >
										<tr>
											<td width='20%' align='right'>Email : </td>
											<td align='center'><input id='email' type='text' name='email' style='padding:5px; width:100%; border:1px solid silver;' /></td>
										</tr>
										<tr>
											<td width='20%' align='right'>Password : </td>
											<td align='center'><input id='password' type='password' name='password' style='padding:5px; width:100%; border:1px solid silver;' /></td>
										</tr>

										@if(session()->has('errors'))
										<tr>
											<div class='error-message text-start'>
												@foreach ($errors->all() as $error)
												<li style="list-style: none" class="error">{{ $error }}</li>
												@endforeach
											</div>
										</tr>
										@endif
										<tr>
											<td width='20%' align='right'>&nbsp;</td>
											<td align='center'>
												<button type='submit' id="btn_login" style="font-size:110%; padding:10px;  width:100%;">
													Login
												</button>
											</td>
										</tr>
									</table>
								</form>
							</div>
						</center>
					</body>
					</html>