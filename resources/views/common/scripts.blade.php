<script type='text/javascript' language='javascript'>

	function setCookie(cname, cvalue, exdays)
	{
		const d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		let expires = 'expires='+ d.toUTCString();
		// document.cookie = cname + '=' + cvalue + '; ' + expires + '; path=/; domain=.tawkit.net; SameSite=Strict;';
	}
	function changeLang(ss)
	{
		setCookie('UserLANG', ss, 90);
		location.reload();
	}

	var JS_SCREENS_COUNT  = 5;
	var JS_ACTIVE_SCREEN  = 0;

	var JS_TOGGLE_ON = false;

	function goScreensSET(objIMG, nbr)
	{
		JS_TOGGLE_ON = !JS_TOGGLE_ON;

		if(JS_TOGGLE_ON)
		{
			JS_SCR_X.src = objIMG.src;
			JS_SCR_0.style.opacity = 0;
		}
		else
		{
			JS_SCR_0.src = objIMG.src;
			JS_SCR_0.style.opacity = 1;
		}

		JS_ACTIVE_SCREEN = nbr;
	}

	function PlayScreens()
	{
		JS_ACTIVE_SCREEN++;
		if(JS_ACTIVE_SCREEN > JS_SCREENS_COUNT) JS_ACTIVE_SCREEN = 1;
		goScreensSET(document.getElementById('scr-'+JS_ACTIVE_SCREEN), JS_ACTIVE_SCREEN);
	}
	function RandomScreenNOW()
	{
		JS_ACTIVE_SCREEN = Math.floor(Math.random() * JS_SCREENS_COUNT) + 1;
		goScreensSET(document.getElementById('scr-'+JS_ACTIVE_SCREEN), JS_ACTIVE_SCREEN);
	}





</script>
@stack('scripts')