<html>
<head>
</script>
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
<title>Password Recovery</title>
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
			<form method='post' action='./recover.php'>
				<table align='center' cellpadding='12' cellspacing='0' width='61%' border='0' >
					<tr>
						<td align='center'><input id='vIniMAIL' type='text' name='vIniMAIL' placeholder='enter your email' style='padding:5px; width:100%; border:1px solid silver;' /></td>
					</tr>
					<tr>
						<td align='center'><input type='submit' name='vDoRECOVER' value='RECOVER PASSWORD - إستعادة كلمة المرور' style='font-size:110%; padding:10px;  width:100%;' /></td>
					</tr>
				</table>
			</form>
			<hr />
		</div>
	</center>
</body>
</html>