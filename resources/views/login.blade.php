<html>
<head>
	<title>Tawkit Administration</title>
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
		img {vertical-align:middle;}
		a {text-decoration:none;}
		.CSS_LINK {height:27px; cursor:pointer;}
		.CSS_LINK:hover {color:#9E2D15;}
		.cssAR {font-size:115%; color:#008E00; font-family:'Amiri'; direction:rtl;}
		.cssBLUE {color:blue; cursor:pointer;}
	</style>
</head>
<body>
	<center>
		<div align='center' style='width:700px; padding:21px; background: url(./enter.png) no-repeat 0px 0px;' >
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
			<form method='post' action='./connect.php'>
				<table align='center' cellpadding='12' cellspacing='0' width='80%' border='0' >
					<tr>
						<td width='20%' align='right'>Login : </td>
						<td align='center'><input id='vLOGIN' type='text' name='vLOGIN' style='padding:5px; width:100%; border:1px solid silver;' /></td>
					</tr>
					<tr>
						<td width='20%' align='right'>Password : </td>
						<td align='center'><input id='vPASS' type='password' name='vPASS' style='padding:5px; width:100%; border:1px solid silver;' /></td>
					</tr>
					<tr>
						<td width='20%' align='right'>&nbsp;</td>
						<td align='center'><input type='submit' name='vLoginSUBMIT' value='Login' style='font-size:110%; padding:10px;  width:100%;' /></td>
					</tr>
				</table>
			</form>
		</div>
	</center>
</body>
</html>