<script type='text/javascript'>
	var JS_TAWKIT_ONLINE_VERSION = 947;
	var JS_NET_ADRESS_VERSION 	= 'TAWKIT.NET ONLINE';
	var JS_cCODE = 'SA';
	var JS_LOCATION_NOW 		= "MAKKAH, SA";
	var JS_LOGS_ENABLED			= false;
	var JS_SUMMER_ADD1HOUR 		= 0;
	var JS_RAMADAN_30MIN_ACTIVE	= 0;
	var JS_LESS1HOUR_IN_RAMADAN	= 0;
	var JS_IQAMA_TIME_OF_FAJR		= '0';
	var JS_IQAMA_TIME_OF_DOHR		= '0';
	var JS_IQAMA_TIME_OF_ASR		= '0';
	var JS_IQAMA_TIME_OF_MAGHRIB	= '0';
	var JS_IQAMA_TIME_OF_ISHA		= '0';
	var JS_MOSK_IQAMAS = '---,---,---,---,---';
	var JS_WEB_12BOOLZ				= '100000000000';
	var JS_ID_MSQ					= '1';
	var JS_PERSO_FIXED_JOMOA		= '';
	var JS_FIXED_IQAMATFAJR			= '';
	var JS_FIXED_IQAMATDOHR			= '';
	var JS_FIXED_IQAMATASR			= '';
	var JS_FIXED_IQAMATISHA			= '';

		// override if fixed iqama
	if(JS_IQAMA_TIME_OF_FAJR.indexOf(':') > -1) JS_FIXED_IQAMATFAJR = JS_IQAMA_TIME_OF_FAJR;
	if(JS_IQAMA_TIME_OF_DOHR.indexOf(':') > -1) JS_FIXED_IQAMATDOHR = JS_IQAMA_TIME_OF_DOHR;
	if(JS_IQAMA_TIME_OF_ASR.indexOf(':') > -1)  JS_FIXED_IQAMATASR  = JS_IQAMA_TIME_OF_ASR;
	if(JS_IQAMA_TIME_OF_ISHA.indexOf(':') > -1) JS_FIXED_IQAMATISHA = JS_IQAMA_TIME_OF_ISHA;


	var JS_SITE_ADMIN_DATA = "[@(السلام عليكم ورحمة الله<br>Makkah times here<br>to create own mosque app, <br><br>go to : <a href='http://online.tawkit.net/add-mosque/' target='_blank'> online.tawkit.net/add-mosque</a><br>)|]";

	var JS_WCSV_ACTIVE = false;

		// FORCE SHOW FULL IQAMA TIMES
	if(JS_WCSV_ACTIVE) JS_IQAMA_FULL_TIMES	= true;
	let JS_ROOT = document.documentElement;
	var JS_DATA_METEO 	= '';
	var JS_bgSemiLITE 	= 'var(--bgSemiLITE)';
	var JS_bgSemiHRBG 	= 'var(--bgSemiHRBG)';
	var JS_BgSEKSALATS 	= 'var(--Color_SEKSALATS)';
	var JS_BgTUBE	  	= 'var(--Color_BGTUBE)';

		// VERTICALS THEMES COLORS --CLOK | BRIGHT | LOW | BG
	var JS_THEMES_VERTICALS_MAIN_COLORIO	= [
		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#2F261D|#684B43|#757575|#F8F5F0',
		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#FFFFFF|#E0CFB1|#A3A099|#050505',

		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#572D17|#684B43|#757575|#F8F5F0',

		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#8E141C|#050505|#757575|#F8F5F0',
		'#114793|#050505|#757575|#F8F5F0',
		'#FFFFFF|#E0CFB1|#A3A099|#050505',

		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#FFFFFF|#E0CFB1|#A3A099|#050505',
	];

		// HORIZONTALS THEMES COLORS
	var JS_THEMES_HORIZONTALS_MAIN_COLORIO	= [
		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#FFFFFF|#E0CFB1|#A3A099|#050505',

		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#8E141C|#050505|#757575|#F8F5F0',
		'#2F261D|#684B43|#757575|#F8F5F0',

		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#FFFFFF|#E0CFB1|#A3A099|#050505',

		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#FFFFFF|#E0CFB1|#A3A099|#050505',
		'#114793|#050505|#757575|#F8F5F0',
	];
	var JS_ACTIVE_COLORYO = '';


		// MINUTES OF PRAYINGS ADJUSTMENTS
	var JS_ATHAN_MINUTES_OF_FAJR		= 0;
	var JS_ATHAN_MINUTES_OF_DOHR		= 0;
	var JS_ATHAN_MINUTES_OF_ASR			= 0;
	var JS_ATHAN_MINUTES_OF_MAGHRIB		= 0;
	var JS_ATHAN_MINUTES_OF_ISHA		= 0;

	var JS_DOA_AFTER_AZAN		= "";
	var JS_DOA_SYAM_MONDAY		= "";
	var JS_DOA_SYAM_THURSDAY	= "";


		// Duration Of Praying Of Every Salat, (Dim-Screen-Time)
	var JS_PRAY_DURATION_OF_FAJR		= 10;
	var JS_PRAY_DURATION_OF_DOHR		=  9;
	var JS_PRAY_DURATION_OF_ASR			=  9;
	var JS_PRAY_DURATION_OF_MAGHRIB		=  7;
	var JS_PRAY_DURATION_OF_ISHA		= 10;


	var JS_THIS_IS_RAMADAN 				= false;
	var JS_JOMOA_DIM_MINIUTES_BEFORE	=  0;
	var JS_JOMOA_DIM_MINIUTES_AFTER		= 25;
	var JS_DISPLAY_IS_HORIZONTAL 		= true;


	var tempo = 0;

	var JS_FULLSCREEN_COUNTER = false;
	var eetempo = localStorage.getItem('STORAGE_FULLSCREEN_COUNTER');
	if(eetempo == '1') JS_FULLSCREEN_COUNTER = true;

	tempo = localStorage.getItem('STORAGE_JOMOA_DIM_BEFORE');	if(tempo) {JS_JOMOA_DIM_MINIUTES_BEFORE = parseInt(tempo);}
	tempo = localStorage.getItem('STORAGE_JOMOA_DIM_AFTER');	if(tempo) {JS_JOMOA_DIM_MINIUTES_AFTER 	= parseInt(tempo);}


	var JS_AUDIO_AZAN_IQAMA_IS_BY_VOICE = false;
	var eetempo = localStorage.getItem('STORAGE_AUDIO_BY_VOICE');
	if(eetempo == '1') JS_AUDIO_AZAN_IQAMA_IS_BY_VOICE	= true;


	var JS_SHORT_AZAN_ACTIVE = false;
	var eetempo = localStorage.getItem('STORAGE_JS_SHORT_AZAN_ACTIVE');
	if(eetempo == '1') JS_SHORT_AZAN_ACTIVE	= true;

	var JS_SHORT_IQAMA_ACTIVE = false;
	var eetempo = localStorage.getItem('STORAGE_JS_SHORT_IQAMA_ACTIVE');
	if(eetempo == '1') JS_SHORT_IQAMA_ACTIVE	= true;

	var JS_ARABIC_DIGITS = false;
	var eetempo = localStorage.getItem('STORAGE_ARABIC_DIGITS');
	if(eetempo == '1') JS_ARABIC_DIGITS	= true;

	var JS_SHOW_AYATS = true;
	var eetempo = localStorage.getItem('STORAGE_JS_SHOW_AYATS');
	if(eetempo == '0') JS_SHOW_AYATS = false;


	var JS_1HOURMORE = false;
	var eetempo = localStorage.getItem('STORAGE_JS_1HOURMORE');
	if(eetempo == '1') JS_1HOURMORE	= true;

	var JS_1LESSMORE = false;
	var eetempo = localStorage.getItem('STORAGE_JS_1LESSMORE');
	if(eetempo == '1') JS_1LESSMORE	= true;

	var JS_24H_ACTIVE = false;
	var eetempo = localStorage.getItem('STORAGE_24H_ACTIVE');
	if(eetempo == '1') JS_24H_ACTIVE = true;


	var JS_FULL_CLOCK_ACTIVE = false;
	var eetempo = localStorage.getItem('STORAGE_FULL_CLOCK_ACTIVE');
	if(eetempo == '1') JS_FULL_CLOCK_ACTIVE = true;

	var JS_DIMM_WHILE_PRAYIN_ACTIVE = true;
	var eetempo = localStorage.getItem('STORAGE_DIMM_SCREEN');
	if(eetempo == '0') JS_DIMM_WHILE_PRAYIN_ACTIVE	= false;

	var JS_PAST_DIMER_ACTIVE = false;
	var eetempo = localStorage.getItem('STORAGE_PAST_DIMER_ACTIVE');
	if(eetempo == '1') JS_PAST_DIMER_ACTIVE	= true;

	var JS_IQAMA_FULL_TIMES = false;
	var eetempo = localStorage.getItem('STORAGE_IQAMA_FULL_TIMES');
	if(eetempo == '1') JS_IQAMA_FULL_TIMES	= true;

	var JS_BIG_IQAMA = false;
	var eetempo = localStorage.getItem('STORAGE_JS_BIG_IQAMA');
	if(eetempo == '1') JS_BIG_IQAMA	= true;

	var JS_IQAMA_COUNTDOWN_ACTIVE = true;
	var eetempo = localStorage.getItem('STORAGE_IQAMA_COUNTDOWN_ACTIVE');
	if(eetempo == '0') JS_IQAMA_COUNTDOWN_ACTIVE	= false;

	tempo = localStorage.getItem('STORAGE_AZAN_FAJR'); if(tempo) { JS_ATHAN_MINUTES_OF_FAJR = parseInt(tempo); }
	tempo = localStorage.getItem('STORAGE_AZAN_DOHR'); if(tempo) { JS_ATHAN_MINUTES_OF_DOHR = parseInt(tempo); }
	tempo = localStorage.getItem('STORAGE_AZAN_ASR'); if(tempo) {JS_ATHAN_MINUTES_OF_ASR = parseInt(tempo);}
	tempo = localStorage.getItem('STORAGE_AZAN_MAGHRIB'); if(tempo) {JS_ATHAN_MINUTES_OF_MAGHRIB = parseInt(tempo);}
	tempo = localStorage.getItem('STORAGE_AZAN_ISHA'); if(tempo) {JS_ATHAN_MINUTES_OF_ISHA	= parseInt(tempo);}
	tempo = localStorage.getItem('STORAGE_DURATION_FAJR'); if(tempo) {JS_PRAY_DURATION_OF_FAJR = parseInt(tempo);}
	tempo = localStorage.getItem('STORAGE_DURATION_DOHR'); if(tempo) {JS_PRAY_DURATION_OF_DOHR = parseInt(tempo);}
	tempo = localStorage.getItem('STORAGE_DURATION_ASR'); if(tempo) {JS_PRAY_DURATION_OF_ASR = parseInt(tempo);}
	tempo = localStorage.getItem('STORAGE_DURATION_MAGHRIB'); if(tempo) {JS_PRAY_DURATION_OF_MAGHRIB = parseInt(tempo);}
	tempo = localStorage.getItem('STORAGE_DURATION_ISHA'); if(tempo) {JS_PRAY_DURATION_OF_ISHA = parseInt(tempo);}

	var JS_ACTIVE_FONTO = 'Amiri';
	tempo = localStorage.getItem('STORAGE_JS1_ACTIVE_FONTO');	if(tempo) {JS_ACTIVE_FONTO 	= tempo;}
	var JS_ACTIVE_FOXEN = '1.0';
	tempo = localStorage.getItem('STORAGE_JS1_ACTIVE_FOXEN');	if(tempo) {JS_ACTIVE_FOXEN 	= tempo;}
	var JS_METEO_LATITUDE  = 0;
	var STRtempo = localStorage.getItem('STORAGE_JS_METEO_LATITUDE'); if(STRtempo) {JS_METEO_LATITUDE = STRtempo;}
	var JS_METEO_LONGITUDE  = 0;
	var STRtempo = localStorage.getItem('STORAGE_JS_METEO_LONGITUDE'); if(STRtempo) {JS_METEO_LONGITUDE = STRtempo;}
</script>
<script type='text/javascript' language='javascript'>
	document.body.setAttribute('lang', JS_LANG_NOW);
	JS_ROOT.style.setProperty('--XX_MAJORFONTO', JS_ACTIVE_FONTO);
	document.getElementById(JS_ACTIVE_FONTO).checked = true;

	var JS_VR_LOGO  			= document.getElementById('VR_LOGO');
	var JS_VReSHOROUQ  			= document.getElementById('VReSHOROUQ');
	var JS_VReJOMOA  			= document.getElementById('VReJOMOA');
	var JS_HReSHOROUQ  			= document.getElementById('HReSHOROUQ');
	var JS_HReJOMOA  			= document.getElementById('HReJOMOA');
	var JS_VReDOHA 				= document.getElementById('VReDOHA');
	var JS_HReDOHA 				= document.getElementById('HReDOHA');
	var JS_eMainVERTICAL  		= document.getElementById('eMainVERTICAL');
	var JS_eMainHORIZONTAL 		= document.getElementById('eMainHORIZONTAL');
	var JS_VReAYATS  			= document.getElementById('VReAYATS');
	var JS_HReAYATS  			= document.getElementById('HReAYATS');
	var JS_VRMsqNAME 			= document.getElementById('VRMsqNAME');
	var JS_HRMsqNAME 			= document.getElementById('HRMsqNAME');
	var JS_eDecompteTEXT 		= document.getElementById('_eDecompteTEXT');
	var JS_VReDecompteTEXT 		= document.getElementById('VReDecompteTEXT');
	var JS_HReDecompteTEXT 		= document.getElementById('HReDecompteTEXT');
	var JS_eRIDO    			= document.getElementById('eRIDO');
	var JS_HReRIDO    			= document.getElementById('HReRIDO');
	var JS_HRCONTO    			= document.getElementById('HRCONTO');
	var JS_ELHOLDO    			= document.getElementById('ELHOLDO');
	var JS_ELAYATS    			= document.getElementById('ELAYATS');
	var JS_ELKLOKO    			= document.getElementById('ELKLOKO');
	var JS_ELCONTO    			= document.getElementById('ELCONTO');
	var JS_tube0    			= document.getElementById('tube0');
	var JS_tube2    			= document.getElementById('tube2');
	var JS_tube3    			= document.getElementById('tube3');
	var JS_tube4    			= document.getElementById('tube4');
	var JS_tube5    			= document.getElementById('tube5');
	var JS_W333HRtube0    		= document.getElementById('W333HRtube0');
	var JS_W333HRtube2    		= document.getElementById('W333HRtube2');
	var JS_W333HRtube3    		= document.getElementById('W333HRtube3');
	var JS_W333HRtube4    		= document.getElementById('W333HRtube4');
	var JS_W333HRtube5    		= document.getElementById('W333HRtube5');
	var JS_VRAzanCOMES 			= document.getElementById('VRAzanCOMES');
	var JS_HRAzanCOMES 			= document.getElementById('HRAzanCOMES');
	var JS_eMobile  			= document.getElementById('eMobile');
	var JS_HReMobile  			= document.getElementById('HReMobile');
	var JS_ALONGO 				= document.getElementById('HahowaALONGO');
	var JS_eAyatsCHECK			= document.getElementById('eAyatsCHECK');
	var JS_eVoiceCHECK			= document.getElementById('eVoiceCHECK');
	var JS_eShortAZAN			= document.getElementById('eShortAZAN');
	var JS_eShortIQAMA			= document.getElementById('eShortIQAMA');
	var JS_eCountdownCHECK		= document.getElementById('eCountdownCHECK');
	var JS_summerCHECK			= document.getElementById('eSummerCHECK');
	var JS_eMoreHourCHECK		= document.getElementById('eMoreHourCHECK');
	var JS_eLessHourCHECK		= document.getElementById('eLessHourCHECK');
	var JS_e24CHECK				= document.getElementById('e24CHECK');
	var JS_eFullClockCHECK		= document.getElementById('eFullClockCHECK');
	var JS_ePastDimerCHECK		= document.getElementById('ePastDimerCHECK');
	var JS_eArabicDIGITS		= document.getElementById('eArabicDIGITS');
	var JS_eIQAMAasHOURCHECK	= document.getElementById('eIQAMAasHOUR');
	var JS_eBigIQAMA			= document.getElementById('eBigIQAMA');
	var JS_eCOUNTDOWNOnOff		= document.getElementById('eCOUNTDOWNOnOff');
	var JS_eDimmCHECK			= document.getElementById('eDimmCHECK');
	var JS_eMarqueeTEXT			= document.getElementById('VReMarqueeTEXT');
	var JS_HReMarqueeTEXT		= document.getElementById('HReMarqueeTEXT');
	var JS_T_0 					= document.getElementById('t0');
	var JS_T_2 					= document.getElementById('t2');
	var JS_T_3 					= document.getElementById('t3');
	var JS_T_4 					= document.getElementById('t4');
	var JS_T_5 					= document.getElementById('t5');
	var JS_S_0 					= document.getElementById('s0');
	var JS_S_2 					= document.getElementById('s2');
	var JS_S_3 					= document.getElementById('s3');
	var JS_S_4 					= document.getElementById('s4');
	var JS_S_5 					= document.getElementById('s5');
	var JS_HHHS_0 				= document.getElementById('W333H_s0');
	var JS_HHHS_2 				= document.getElementById('W333H_s2');
	var JS_HHHS_3 				= document.getElementById('W333H_s3');
	var JS_HHHS_4 				= document.getElementById('W333H_s4');
	var JS_HHHS_5 				= document.getElementById('W333H_s5');
	var JS_W333HT_0 			= document.getElementById('W333Ht0');
	var JS_W333HT_2 			= document.getElementById('W333Ht2');
	var JS_W333HT_3 			= document.getElementById('W333Ht3');
	var JS_W333HT_4 			= document.getElementById('W333Ht4');
	var JS_W333HT_5 			= document.getElementById('W333Ht5');
	var JS_eVRPROGRESS1			= document.getElementById('eVRPROGRESS1');
	var JS_eHRPROGRESS1			= document.getElementById('eHRPROGRESS1');
	var JS_VRCELSIUS			= document.getElementById('VRCELSIUS');
	var JS_HRMTOikon			= document.getElementById('HRMTOikon');
	var JS_HRCELSIUS			= document.getElementById('HRCELSIUS');
	var JS_HRmtoHHH				= document.getElementById('HRmtoHHH');
	var JS_HRmtoLLL				= document.getElementById('HRmtoLLL');
	var JS_VRmtoHHH				= document.getElementById('VRmtoHHH');
	var JS_VRmtoLLL				= document.getElementById('VRmtoLLL');
	var JS_VReWebMSG     		= document.getElementById('VReWebMSG');
	var JS_VRDataMESSAGE 		= document.getElementById('VRDataMESSAGE');
	var JS_HRDataMESSAGE 		= document.getElementById('HRDataMESSAGE');
	var JS_HRDataBOX 			= document.getElementById('HRDataBOX');
	var JS_HReAyatsHDR 			= document.getElementById('HReAyatsHDR');

	var _fjr					= 0;
	var _shrq					= 0;
	var _thuhr					= 0;
	var _asr					= 0;
	var _maghreb				= 0;
	var _isha					= 0;

	var JS_nowMNTS 				= 0;

	var JS_HIJRI_DECALAGE 		= 0;
	var tempDECALA = localStorage.getItem('STORAGE_DECALAGE');
	if (['-2', '-1', '0', '1', '2'].indexOf(tempDECALA) >= 0) {JS_HIJRI_DECALAGE = parseInt(tempDECALA);}

	var JS_PRAYNAMES_NOW		= [];
	var JS_WEEK_DAYS_NOW 		= [];
	var JS_MONTHS_NOW 			= [];
	var JS_HIJRI_NOW 			= [];

	var JS_NOW_ACTIVE_SALAT 	= 0;
	var JS_NOW_SALAT_NAME		= '';

	var JS_COLORO_CLOCK			= 'white';
	var JS_COLORO_SEKSALATS		= 'white';
	var JS_COLORO_LOWFOCUS		= 'white';
	var JS_COLORO_BGTUBE		= 'white';

	var JS_COUNT_MSGS = 3;
	var JS_ACTIVE_BG  = 6;

	var tempBG = localStorage.getItem('STORAGE_THEME_BG');
	if(tempBG){JS_ACTIVE_BG = parseInt(tempBG);}

	// goSetBG
	function goSetBG()
	{
		var JS_NowTHEME	= '';
		var tempSTR 	= '';
		var BASE_URL = "{{ asset('assets/') }}";

		// HORIZONTAL HERE ------------------------------------
		if(JS_DISPLAY_IS_HORIZONTAL)
		{
			JS_NowTHEME = BASE_URL +'/themes7/HR-' + JS_ACTIVE_BG ;
			document.getElementById('sssVR').style.display 			= 'none';
			document.getElementById('sssHR').style.display 			= 'block';
			tempSTR = JS_THEMES_HORIZONTALS_MAIN_COLORIO[JS_ACTIVE_BG];
			JS_MESSAGES = JS_MESSAGES_HR;
			JS_COUNT_MSGS 	= JS_MESSAGES.length;
		}
		else // VERTICAL HERE ----------------------------------------------------------
		{
			JS_NowTHEME = BASE_URL +'/themes7/VR-' + JS_ACTIVE_BG;
			document.getElementById('sssVR').style.display 			= 'block';
			document.getElementById('sssHR').style.display 			= 'none';
			tempSTR = JS_THEMES_VERTICALS_MAIN_COLORIO[JS_ACTIVE_BG];
			JS_MESSAGES = JS_MESSAGES_VR;
			JS_COUNT_MSGS 	= JS_MESSAGES.length;
		}

		JS_eMainVERTICAL.style.background = 'url(' + JS_NowTHEME+ '.jpg?c=1)';
		JS_eMainVERTICAL.style.backgroundRepeat 	= 'no-repeat';
		JS_eMainVERTICAL.style.backgroundSize 		= '100% 100%';

		JS_eMainHORIZONTAL.style.background 		= 'url(' + JS_NowTHEME + '.jpg?c=1)';
		JS_eMainHORIZONTAL.style.backgroundRepeat 	= 'no-repeat';
		JS_eMainHORIZONTAL.style.backgroundSize 	= '100% 100%';

		JS_HRCONTO.style.background = 'url(' + JS_NowTHEME + '.jpg?c=1)';
		JS_HRCONTO.style.backgroundRepeat 			= 'no-repeat';
		JS_HRCONTO.style.backgroundSize 			= '100% auto';

		JS_ACTIVE_COLORYO = tempSTR.split('|');


		JS_COLORO_CLOCK		= JS_ACTIVE_COLORYO[0];
		JS_COLORO_SEKSALATS	= JS_ACTIVE_COLORYO[1];
		JS_COLORO_LOWFOCUS	= JS_ACTIVE_COLORYO[2];
		JS_COLORO_BGTUBE	= JS_ACTIVE_COLORYO[3];

		document.body.style.color = JS_COLORO_LOWFOCUS;

		JS_ROOT.style.setProperty('--Color_CLOCK',     JS_COLORO_CLOCK);
		JS_ROOT.style.setProperty('--Color_SEKSALATS', JS_COLORO_SEKSALATS);
		JS_ROOT.style.setProperty('--Color_LOWFOCUS',  JS_COLORO_LOWFOCUS);
		JS_ROOT.style.setProperty('--Color_BGTUBE',	   JS_COLORO_BGTUBE);

		if(JS_COLORO_CLOCK == "#FFFFFF")
			JS_ROOT.style.setProperty('--Color_GOLDEN',	'#ECD5A5');
		else
			JS_ROOT.style.setProperty('--Color_GOLDEN',	JS_COLORO_CLOCK);
		goSetNextSalatRemainingTIME(JS_nowMNTS);
		_GoMessages();
	}

	// changeBG
	function changeBG(nbr)
	{
		JS_ACTIVE_BG = nbr;
		localStorage.setItem('STORAGE_THEME_BG', JS_ACTIVE_BG);
		goSetBG();
	}

	//log
	function log(s)
	{
		if(JS_LOGS_ENABLED) console.log(s);
	}

	//demoThemesNEXT
	function demoThemesNEXT()
	{
		JS_ACTIVE_BG++;
		if(JS_ACTIVE_BG > 17) JS_ACTIVE_BG = 0;
		changeBG(JS_ACTIVE_BG);
	}

	// demoThemesBACK
	function demoThemesBACK()
	{
		JS_ACTIVE_BG--;
		if(JS_ACTIVE_BG < 0) JS_ACTIVE_BG =17;
		changeBG(JS_ACTIVE_BG);
	}

	// goFillThemesBOTH
	function goFillThemesBOTH() {
    for (var i = 0; i < 18; i++) {
        var tmV = document.getElementById('tmV_' + i);
        var tmH = document.getElementById('tmH_' + i);

        var vrUrl = 'assets/themes7/mini/VR-' + i + '.jpg?c=1';
        var hrUrl = 'assets/themes7/mini/HR-' + i + '.jpg?c=1';
            console.log('VR Image URL:', vrUrl);
            console.log('HR Image URL:', hrUrl);

        if (tmV) {
            tmV.style.backgroundImage = 'url(' + vrUrl + ')';
        }
        if (tmH) {
            tmH.style.backgroundImage = 'url(' + hrUrl + ')';
        }
    }
}
goFillThemesBOTH();




	// getLANGUAGE
	function getLANGUAGE(obj)
	{
		JS_LANG_NOW	= obj.title;
		localStorage.setItem('STORAGE_LANG_NOW', JS_LANG_NOW);
		setTimeout('location.reload()', 300);
	}

	var JS_ANIM_NOMOBILE = 15;

	//  animateNoMOBILE  -----
	function animateNoMOBILE()
	{
		JS_ANIM_NOMOBILE--;

		// Charge Animation For Next-Use And Exit
		if(JS_ANIM_NOMOBILE < 1){
			JS_ANIM_NOMOBILE = 15;
			setTimeout(HideZunder, 5000, 'eMobile');
			setTimeout(HideZunder, 5000, 'HReMobile');
			return;
		}

		// if even hide, then if odd show
		if (JS_ANIM_NOMOBILE % 2 == 0)
		{
			JS_eMobile.style.visibility   = 'hidden';
			JS_HReMobile.style.visibility = 'hidden';
		} else  {
			JS_eMobile.style.visibility   = 'visible';
			JS_HReMobile.style.visibility = 'visible';
		}
		setTimeout('animateNoMOBILE()', 700 );
	}

	function ShowRIDEAU()
	{
		StartBlackScreenWhilePraying();
		setTimeout('RemoveBlackScreen()', (JS_NOW_DIMSCREEN_DURATION * 60000) );
		if(JS_NOW_ACTIVE_SALAT == 1) return; // DON'T SHOW MOBILE-ALERT IF ISHRAQ
		if(JS_DIMM_WHILE_PRAYIN_ACTIVE) setTimeout('animateNoMOBILE()', 3000 ); // MOBILE-ALERT
	}


	var JS_TheAlertIQAMA = document.getElementById('TheAlertIQAMA');


	function ShowAlertIQAMA()
	{
		JS_TheAlertIQAMA.style.opacity		= '1';
		JS_TheAlertIQAMA.style.visibility 	= 'visible';
		setTimeout('HideAlertIQAMA()', 21000 );
	}

	function HideAlertIQAMA()
	{
		JS_TheAlertIQAMA.style.opacity		= '0';
		JS_TheAlertIQAMA.style.visibility	= 'hidden';
	}

	//------------------------------------------
	function RemoveBlackScreen()
	{
		JS_eRIDO.style.width 	= '0%';
		JS_HReRIDO.style.width 	= '0%';
	}

	//-----CloseFullCONTO---------------
	function CloseFullCONTO()
	{
		JS_HRCONTO.style.height = '0%';
		HideZunder('ELHOLDO');
		JS_ALONGO.style.zIndex = 888;
	}

	//-----StartBlackScreenWhilePraying---------------
	function StartBlackScreenWhilePraying()
	{
		if(JS_DIMM_WHILE_PRAYIN_ACTIVE) ForceScreenSaverNOW();
	}

	//-----ForceScreenSaverNOW---------------
	function ForceScreenSaverNOW()
	{
		JS_eRIDO.style.width 	= '100%';
		JS_HReRIDO.style.width 	= '100%';
	}

	//------------------------------------------
	function ShowZunder(ss)
	{
		document.getElementById(ss).style.visibility = 'visible';
	}

	//------------------------------------------
	function HideZunder(ss)
	{
		document.getElementById(ss).style.visibility = 'hidden';
	}

	var JS_CIR_DATA = 0;
	var JS_PERC_DATA = 0;

	var JS_VR_eSECS = document.getElementById('VR_eSECS');
	var JS_HR_eSECS = document.getElementById('HR_eSECS');
	var JS_HR_sssCLOKO = document.getElementById('HR_sssCLOKO');
	var JS_VR_sssCLOKO = document.getElementById('VR_sssCLOKO');

	// LiveTime
	function LiveTime() {
		// LIVE SECONDS TIMES FROM SYSTEM
		var JS_LIVE_TIME	= new Date();
		var s = JS_LIVE_TIME.getSeconds();
		s = ('0' + s).slice(-2);
		var JS_SECSNOW = ARNumbers(s);
		JS_VR_eSECS.innerHTML = JS_SECSNOW;
		JS_HR_eSECS.innerHTML = JS_SECSNOW;
		JS_HR_sssCLOKO.innerHTML = ':'+JS_SECSNOW;
		JS_VR_sssCLOKO.innerHTML = ':'+JS_SECSNOW;

		if(JS_DECOMPTE_STARTED) {
			JS_IQUAMA_SECONDS--;
			JS_PERC_DATA = JS_ACTIVE_IQAMA_NOW_SECONDS - JS_IQUAMA_SECONDS;
			JS_PERC_DATA = Math.floor((JS_PERC_DATA*100/JS_ACTIVE_IQAMA_NOW_SECONDS));
			JS_eVRPROGRESS1.style.width = JS_PERC_DATA + '%';
			JS_eHRPROGRESS1.style.width = JS_PERC_DATA + '%';

			var minnn = Math.floor(JS_IQUAMA_SECONDS / 60);
			var seccc = Math.floor(JS_IQUAMA_SECONDS % 60);
			minnn = ('0' + minnn).slice(-2);
			seccc = ('0' + seccc).slice(-2);

			JS_VReDecompteTEXT.innerHTML = ARNumbers(minnn + ':' + seccc);
			JS_HReDecompteTEXT.innerHTML = JS_VReDecompteTEXT.innerHTML;

			// big counter only if visible/activated
			if(JS_ELHOLDO.style.visibility=='visible') JS_ELCONTO.innerHTML = JS_VReDecompteTEXT.innerHTML;

			if(JS_IQUAMA_SECONDS == 0) {
				JS_DECOMPTE_STARTED = false; // stop immediatly
				SetAllTubesNORMAL();
				setTimeout('closeDECOMPTE()', 700);
				setTimeout('ShowAlertIQAMA()', 3000);
				setTimeout('ShowRIDEAU()', 1000);
				setTimeout('CloseFullCONTO()', 1000);
			}
		}

		if(s == '30') AyatsMsgSwitcher();
		if(s == '00') Go1MN();
	}

	var JS_AM_TEXT = "<span class='cEnPM'>AM</span>";
	var JS_PM_TEXT = "<span class='cEnPM'>PM</span>";
	var JS_TODAY_IS_JOMOA	= false;

	// Go1MN
	function Go1MN()
	{
		var JS_AAA	= new Date();
		var h  	= JS_AAA.getHours();
		var m	= JS_AAA.getMinutes();

		// here format of 12 support
		var hhhhh = h;
		var mmmmm = m;
		mmmmm = ('0' + mmmmm).slice(-2);
		h = ('0' + h).slice(-2);
		m = ('0' + m).slice(-2);
		var JS_ClnHM = h+':'+m;
		var FinalTM4	= JS_ClnHM;
		var STRampm		= '&nbsp;';
		if(!JS_24H_ACTIVE)
		{
			if(hhhhh >= 12)
			{
				STRampm = JS_PM_TEXT;
				if(hhhhh > 12) hhhhh = hhhhh - 12;
				FinalTM4 = hhhhh+':'+mmmmm;
			} else {
				if(hhhhh == 0) hhhhh = 12; // it is  AM
				STRampm = JS_AM_TEXT;
				FinalTM4 = hhhhh+':'+mmmmm;
			}
		}

		var JS_HOURSNOW = ARNumbers(FinalTM4);
		document.getElementById('VR_eFullHOUR').innerHTML = JS_HOURSNOW;
		document.getElementById('VR_eAMPM').innerHTML 	  = STRampm;
		document.getElementById('HR_eFullHOUR').innerHTML 	= JS_HOURSNOW;
		document.getElementById('HR_eAMPM').innerHTML 		= STRampm;
		if(JS_ELHOLDO.style.visibility=='visible')
			JS_ELKLOKO.innerHTML = JS_HOURSNOW;
		document.getElementById('HR_eFullCLOKO').innerHTML = JS_HOURSNOW;
		document.getElementById('VR_eFullCLOKO').innerHTML = JS_HOURSNOW;
		JS_nowMNTS 	= ( (parseInt(h)*60) + parseInt(m) );
		var nowXDAY	= JS_AAA.getDay();
		JS_TODAY_IS_JOMOA = (nowXDAY == 5);

		// ----------- Start Iqama Counter
		if( JS_nowMNTS == _fjr )
			startDECOMPTE(JS_IQAMA_TIME_OF_FAJR, JS_PRAY_DURATION_OF_FAJR);
		if( JS_nowMNTS == _asr )
			startDECOMPTE(JS_IQAMA_TIME_OF_ASR, JS_PRAY_DURATION_OF_ASR);
		if( JS_nowMNTS == _maghreb )
			startDECOMPTE(JS_IQAMA_TIME_OF_MAGHRIB, JS_PRAY_DURATION_OF_MAGHRIB);
		if( JS_nowMNTS == _isha )
			startDECOMPTE(JS_IQAMA_TIME_OF_ISHA, JS_PRAY_DURATION_OF_ISHA);

			//--------SPECIAL DOHR FOR JOMOA ---------------------------------------

		if(JS_TODAY_IS_JOMOA) {
			//------ JOMOA_THUHR___SPECIAL_DIMMING
			if(  JS_nowMNTS == (_thuhr - JS_JOMOA_DIM_MINIUTES_BEFORE) ) 	{ StartBlackScreenWhilePraying();}
			if(  JS_nowMNTS == (_thuhr + JS_JOMOA_DIM_MINIUTES_AFTER) ) 	{ RemoveBlackScreen(); SetAllTubesNORMAL();}
		} else {
			//------ NORMAL DOHR DAY
			if( JS_nowMNTS == _thuhr ) 	startDECOMPTE(JS_IQAMA_TIME_OF_DOHR, 	JS_PRAY_DURATION_OF_DOHR);
		}

		//--------------- IQAMA_FAJR ---------------
		if(JS_nowMNTS == (JS_IQAMA_TIME_OF_FAJR + _fjr)) { Play_IqamaTit();}

		//--------------- IQAMA_THUHR ---------------
		if(JS_nowMNTS == (JS_IQAMA_TIME_OF_DOHR + _thuhr)){ if(!JS_TODAY_IS_JOMOA) Play_IqamaTit();}

		//--------------- IQAMA_ASR ---------------
		if(JS_nowMNTS == (JS_IQAMA_TIME_OF_ASR + _asr)) { Play_IqamaTit();}

		//--------------- IQAMA_MAGHREB ---------------
		if(JS_nowMNTS == (JS_IQAMA_TIME_OF_MAGHRIB + _maghreb)) { Play_IqamaTit();}

		//--------------- IQAMA__ISHA ---------------
		if(JS_nowMNTS == (JS_IQAMA_TIME_OF_ISHA + _isha)) { Play_IqamaTit();}

		var JS_IT_IS_JOMOA_AND_DOHR = ( (JS_nowMNTS == _thuhr) && (JS_TODAY_IS_JOMOA) )

		// **********ON_TIME_SALAWATS****************
		if( (JS_nowMNTS==_fjr) || (JS_nowMNTS==_shrq) || (JS_nowMNTS==_thuhr) || (JS_nowMNTS==_asr) || (JS_nowMNTS==_maghreb) || (JS_nowMNTS==_isha) ) {

			if(JS_nowMNTS != _shrq ) {Play_Beeep();}
			GoActiveSALAT(JS_nowMNTS);

			// IF NOT RAMADAN NOR TASHREEK, THEN DO SYAM REMINDER
			if( (!JS_THIS_IS_RAMADAN) && (!JS_DULHIJJA_DAYS_0913) && (!JS_SHAABAN_LAST_DAYS) ) {
			// SEYAM-REMINDER ----- IF SUNDAY
				if(nowXDAY == 0) {
				// wait 7 min then show reminder for 1hour
					if((JS_nowMNTS==_maghreb) || (JS_nowMNTS==_isha)) {
						setTimeout(ShowThisMarqueeAndCloseAFTER, (7*60000), JS_DOA_SYAM_MONDAY, 60);
					}
				}

				// SEYAM-REMINDER ----- IF WEDNSDAY
				if(nowXDAY == 3) {
						// wait 7 min then show reminder for 1hour
					if( (JS_nowMNTS==_maghreb) || (JS_nowMNTS==_isha) ) {
						setTimeout(ShowThisMarqueeAndCloseAFTER, (7*60000), JS_DOA_SYAM_THURSDAY, 60);
					}
				}
			}
		}

		// AT NIGHT NEWDAY, GO FILL NEW DATA
		if( JS_ClnHM == "00:00" ) GoGloballyFillDATA();

		// UPDATE WEATHER DATA FROM SERVER ONCE EVERY NIGHT
		if( JS_ClnHM == "00:01" )FetchMETEO();

		goSetNextSalatRemainingTIME(JS_nowMNTS);
		goDimPassedPRAYINGS(JS_nowMNTS);
		_GoMessages();
		// UPDATE WEATHER ON SCREEN EVERY 1 HOUR
		if(m == '00') proccessMETEO(false);
	}

	// gimeTime
	function gimeTime(iniMNTS)
	{
		var _hours 		= Math.floor(iniMNTS / 60);
		var _minutes 	= iniMNTS % 60;

		_minutes = ('0' + _minutes).slice(-2);

		var finalo = _hours + ':' + _minutes;

		if( (_hours == 0) && (_minutes == 0) ) finalo = '.';


		return finalo;
	}

	//-- SetNEXTERS
	function SetNEXTERS(xMNTS)
	{
		JS_VReNextPRAYER.innerHTML 	= ARNumbers(gimeTime(xMNTS));
		JS_HReNextPRAYER.innerHTML 	= JS_VReNextPRAYER.innerHTML;
	}

	function DataMSGshow()
	{
		if(JS_SHOW_AYATS) HideZunder('VReAYATS');
		ShowZunder('VRDataBOX');
	}

	function DataMSGclose()
	{
		setMSGgrayICON(); // msg is read, gray it
		HideZunder('VRDataBOX');
		if(JS_SHOW_AYATS) ShowZunder('VReAYATS');
	}


	// Next Salat
	var JS_VReNextPRAYER = document.getElementById('VReNextPRAYER');
	var JS_HReNextPRAYER = document.getElementById('HReNextPRAYER');

	// NextSalatRemainingTIME
	function goSetNextSalatRemainingTIME(mntsNOW)
	{
		if(mntsNOW <= _fjr) {SetNEXTERS(_fjr - mntsNOW); return;}
		//if(mntsNOW <= _shrq) 	{SetNEXTERS(_shrq - mntsNOW); 	return;}
		if(mntsNOW <= _thuhr) 	{SetNEXTERS(_thuhr - mntsNOW); 	return;}
		if(mntsNOW <= _asr) 	{SetNEXTERS(_asr - mntsNOW); 	return;}
		if(mntsNOW <= _maghreb) {SetNEXTERS(_maghreb - mntsNOW); return;}
		if(mntsNOW <= _isha) 	{SetNEXTERS(_isha - mntsNOW); 	return;}
		if(mntsNOW > _isha) 	{SetNEXTERS( (1440 - mntsNOW) + _fjr); 	return;}
	}

	// DimPassedPRAYINGS
	function goDimPassedPRAYINGS(mntsNOW)
	{
		JS_tube0.className = 'cccROUND_ACTIVE';
		JS_tube2.className = 'cccROUND_ACTIVE';
		JS_tube3.className = 'cccROUND_ACTIVE';
		JS_tube4.className = 'cccROUND_ACTIVE';
		JS_tube5.className = 'cccROUND_ACTIVE';
		JS_W333HRtube0.style.opacity = '1';
		JS_W333HRtube2.style.opacity = '1';
		JS_W333HRtube3.style.opacity = '1';
		JS_W333HRtube4.style.opacity = '1';
		JS_W333HRtube5.style.opacity = '1';
		// EXIT IF OPTION DISABLED
		if(!JS_PAST_DIMER_ACTIVE) return;
		if(mntsNOW > (_fjr 		+ 60) )		{ JS_tube0.className = 'cccROUND';	JS_W333HRtube0.style.opacity = '0.5'; }
		if(mntsNOW > (_thuhr 	+ 40) )		{ JS_tube2.className = 'cccROUND';	JS_W333HRtube2.style.opacity = '0.5'; }
		if(mntsNOW > (_asr 		+ 30) )		{ JS_tube3.className = 'cccROUND';	JS_W333HRtube3.style.opacity = '0.5'; }
		if(mntsNOW > (_maghreb 	+ 30) )		{ JS_tube4.className = 'cccROUND';	JS_W333HRtube4.style.opacity = '0.5'; }
		if(mntsNOW > (_isha 	+ 30) )		{ JS_tube5.className = 'cccROUND';	JS_W333HRtube5.style.opacity = '0.5'; }
	}
	var JS_FLASHER_TUBE = 0;
	var strBGBLK = '';

	//  flashTuben
	function flashTuben(tubVR,w333t)
	{
		if(JS_FLASHER_TUBE < 1) return;
		if( (JS_FLASHER_TUBE % 2) == 0 )
		{
			tubVR.style.background 			= JS_bgSemiLITE;
			w333t.style.background 			= JS_bgSemiHRBG;
		} else {
			tubVR.style.background 			= strBGBLK;
			w333t.style.background 			= strBGBLK;
		}
		JS_FLASHER_TUBE--;
		setTimeout(flashTuben, 500, tubVR, w333t);
	}
	// processActiveTUBE
	function processActiveTUBE(tuben,W333TUB)
	{
	// If Shorouq  Exit
		if(tuben.id == 'tube1') return;
		if (JS_COLORO_BGTUBE =="#050505") strBGBLK = 'rgba(0,0, 0, 0.7)';
		else strBGBLK = JS_COLORO_BGTUBE;
		tuben.style.background 		= strBGBLK;
		W333TUB.style.background 	= strBGBLK;
		ShowAdanAutoClose();
		JS_FLASHER_TUBE = 10;
		setTimeout(flashTuben, 500, tuben, W333TUB);
	}

	// GoActiveSALAT
	function GoActiveSALAT(nowLiveTIME)
	{
		if(nowLiveTIME == _fjr) {
			JS_NOW_ACTIVE_SALAT = 0;
			JS_NOW_SALAT_NAME = JS_PRAYNAMES_NOW[0];
			processActiveTUBE(JS_tube0,JS_W333HRtube0);
			return;
		}
		if(nowLiveTIME == _thuhr) {
			JS_NOW_ACTIVE_SALAT = 2;
			JS_NOW_SALAT_NAME = JS_PRAYNAMES_NOW[2];
			processActiveTUBE(JS_tube2,JS_W333HRtube2);
			return;
		}
		if(nowLiveTIME == _asr) {
			JS_NOW_ACTIVE_SALAT = 3;
			JS_NOW_SALAT_NAME = JS_PRAYNAMES_NOW[3];
			processActiveTUBE(JS_tube3,JS_W333HRtube3);
			return;
		}
		if(nowLiveTIME == _maghreb)	{
			JS_NOW_ACTIVE_SALAT = 4;
			JS_NOW_SALAT_NAME = JS_PRAYNAMES_NOW[4];
			processActiveTUBE(JS_tube4,JS_W333HRtube4);
			return;
		}
		if(nowLiveTIME == _isha) {
			JS_NOW_ACTIVE_SALAT = 5;
			JS_NOW_SALAT_NAME = JS_PRAYNAMES_NOW[5];
			processActiveTUBE(JS_tube5,JS_W333HRtube5);
			return;
		}
	}

	var JS_VR_AZAN = document.getElementById('eeeNowNAMEazan');
	var JS_HR_AZAN = document.getElementById('HHHNowNAMEazan');

	// ShowAdanAutoClose
	function ShowAdanAutoClose()
	{
		if( (JS_TODAY_IS_JOMOA)&&(JS_nowMNTS == _thuhr) )
		{
			JS_VR_AZAN.innerHTML 	= JS_tempJMA;
			JS_HR_AZAN.innerHTML 	= JS_tempJMA;
		}
		else
		{
			JS_VR_AZAN.innerHTML 	= JS_NOW_SALAT_NAME;
			JS_HR_AZAN.innerHTML 	= JS_NOW_SALAT_NAME;
		}

		ShowZunder('VRAzanCOMES');
		ShowZunder('HRAzanCOMES');
		setTimeout('closeADAN()', 60000); // Let Azan Box 1 Min
		setTimeout(ShowThisMarqueeAndCloseAFTER, 50000, JS_DOA_AFTER_AZAN, 3);
	}

	// closeADAN
	function closeADAN()
	{
		HideZunder('VRAzanCOMES');
		HideZunder('HRAzanCOMES');

		ShowFullCONTO();
	}

	function ShowFullCONTO()
	{
		log('JS_ACTIVE_IQAMA_NOW : '+JS_ACTIVE_IQAMA_NOW);

		// Show Big Counter If Enabled
		if( (JS_FULLSCREEN_COUNTER) && (JS_ACTIVE_IQAMA_NOW > 1) && (JS_IQAMA_COUNTDOWN_ACTIVE) )
		{
			JS_HRCONTO.style.height = '100%';
			JS_ALONGO.style.zIndex = 1003;
			setTimeout("delayElholdoShow()", 3000);
		}
	}

	function delayElholdoShow()
	{
		ShowZunder('ELHOLDO');
		Go1MN(); // to refresh clock up right
	}

	//  CloseTHEMES
	function CloseTHEMES()
	{
		HideZunder('e_THEMES');
	}

	// SetAllTubesNORMAL
	function SetAllTubesNORMAL()
	{
		JS_tube0.style.background 	= JS_bgSemiLITE;
		JS_tube2.style.background 	= JS_bgSemiLITE;
		JS_tube3.style.background 	= JS_bgSemiLITE;
		JS_tube4.style.background 	= JS_bgSemiLITE;
		JS_tube5.style.background 	= JS_bgSemiLITE;
		JS_W333HRtube0.style.background 	= JS_bgSemiHRBG;
		JS_W333HRtube2.style.background 	= JS_bgSemiHRBG;
		JS_W333HRtube3.style.background 	= JS_bgSemiHRBG;
		JS_W333HRtube4.style.background 	= JS_bgSemiHRBG;
		JS_W333HRtube5.style.background 	= JS_bgSemiHRBG;
	}

	function Gime1HourMORE(_hour)
	{
		var hrs = _hour.split(':');
		var IntHour = parseInt(hrs[0]);

		IntHour++;

		IntHour = '0'+IntHour;
		IntHour = IntHour.slice(-2);

		return IntHour+':'+hrs[1];
	}

	function Gime1HourLESS(_hour)
	{
		var hrs = _hour.split(':');
		var IntHour = parseInt(hrs[0]);

		IntHour--;

		IntHour = '0'+IntHour;
		IntHour = IntHour.slice(-2);

		return IntHour+':'+hrs[1];
	}

	// FindInArray
	function FindInArray(str,Arro)
	{
		for (var i=0; i < Arro.length; i++)
		{
			if (Arro[i].match(str)) return i;
		}
		return -1;
	}

	// goFontTHIS
	function goFontTHIS(objo)
	{
		JS_ACTIVE_FONTO = objo.id;
		JS_ACTIVE_FOXEN = objo.value;
		localStorage.setItem('STORAGE_JS1_ACTIVE_FONTO', JS_ACTIVE_FONTO);
		localStorage.setItem('STORAGE_JS1_ACTIVE_FOXEN', JS_ACTIVE_FOXEN);

		JS_ROOT.style.setProperty('--XX_MAJORFONTO', JS_ACTIVE_FONTO);

		if( (JS_LANG_NOW =="AR") || (JS_LANG_NOW =="UR") )
		{
			JS_ROOT.style.setProperty('--FOXEN', JS_ACTIVE_FOXEN);
		}
		else
		{
			JS_ROOT.style.setProperty('--FOXEN', 1);
		}
	}

	// KonvertTimeTo12 -21:53 > 09:53
	function KonvertTimeTo12(time24)
	{
	// ----------- If 24H Enabled, Give As it is And Exit)
		if(JS_24H_ACTIVE) { return time24;}
		var eee = time24.split(':'), hhhhh, mmmmm, FinalTM4, strAmPm;
		hhhhh = parseInt(eee[0]);
		mmmmm = eee[1];
		if(hhhhh >= 12)
		{
			if(hhhhh > 12) hhhhh = hhhhh - 12;
		} else {
			if(hhhhh == 0) hhhhh = 12; // it is  AM
		}
		return hhhhh+':'+mmmmm;
	}

	var JS_SUMMER_LIVE_ACTIVE	= false;
	var JS_FULL_HJRI_NOW		= '-----';
	var JS_ARRAY_FULLHJRI		= ['-','-','-'];
	var JS_DULHIJJA_DAYS_0913	= false;
	var JS_SHAABAN_LAST_DAYS	= false;
	var JS_DULHIJJA_WORK_DAYS	= false;
	var JS_TAKBIR_DAYS			= false;
	var JS_RAMADAN_10_NIGHTS	= false;
	var JS_FASTING_3_WHITE_DAYS	= false;

	// GoGloballyFillDATA
	function GoGloballyFillDATA()
	{
		log('*GoGloballyFillDATA**********');
		var JS_CCC	= new Date();

		//   -------------TEST ONLY  JS_CCC.setDate(JS_CCC.getDate() + 5);

		MiladiToHIJRI(JS_CCC,JS_HIJRI_DECALAGE);
		var WeekDayX= JS_CCC.getDay();
		var arYOUM	= JS_WEEK_DAYS_NOW[WeekDayX];
		var YearNow = JS_CCC.getFullYear();
		var h3  	= JS_CCC.getHours();
		var m3		= JS_CCC.getMinutes();
		var JSNOW 	= ( (h3*60) + m3 );
		var mmm     = (JS_CCC.getMonth());
		var jx		= JS_CCC.getDate();
		var jj 		= '0'+jx;
		jj 		= jj.slice(-2);
		var mm = '0'+(mmm+1);
		mm = mm.slice(-2);
		var _n0 = '-';
		var _n1 = '-';
		var _n2 = '-';
		var _n3 = '-';
		var _n4 = '-';
		var _n5 = '-';
		if(JS_WCSV_ACTIVE)
		{
			var fulldate = mm+'-'+jj;
			var idx = FindInArray(fulldate, JS_WCSV_DATA);
			if(idx== -1) { console.log('WCSV : Error in your file (wcsv.js), date not found : '+fulldate); return; }

			var VLine   = JS_WCSV_DATA[idx];
			var VDatenz = VLine.split(',');
			_n0 = VDatenz[2];  // FAJR
			_n1 = VDatenz[4];  // SUNRISE
			_n2 = VDatenz[5];  // DOHR
			_n3 = VDatenz[7];  // ASR
			_n4 = VDatenz[9];  // Magrib
			_n5 = VDatenz[11]; // Isha

			// override web online data
			JS_IQAMA_TIME_OF_FAJR		= GimeTotalMinutes(VDatenz[3])  - GimeTotalMinutes(_n0);
			JS_IQAMA_TIME_OF_DOHR		= GimeTotalMinutes(VDatenz[6])  - GimeTotalMinutes(_n2);
			JS_IQAMA_TIME_OF_ASR		= GimeTotalMinutes(VDatenz[8])  - GimeTotalMinutes(_n3);
			JS_IQAMA_TIME_OF_MAGHRIB	= GimeTotalMinutes(VDatenz[10]) - GimeTotalMinutes(_n4);
			JS_IQAMA_TIME_OF_ISHA		= GimeTotalMinutes(VDatenz[12]) - GimeTotalMinutes(_n5);
		} else {
			// TAWKIT WTIMES FILE
			// "01-01~~~~~05:37|06:58|12:24|15:29|17:50|19:20",

			var monthDay = mm+'-'+jj;
			var idx = FindInArray(monthDay, JS_TIMES);
			if(idx== -1)	{
				if(monthDay == "02-29"){
				 // skip errors of bad files forgeting 29th February
				 idx = FindInArray("03-01", JS_TIMES); // show next day instead
				} else {
					console.log('Error in file (wtimes), date not found: '+monthDay);
					return;
				}
			}

			var JS_LineFULL = JS_TIMES[idx];
			var JS_DataLINE = JS_LineFULL.split('~~~~~');
			var JS_THE_TIMES_NOW = JS_DataLINE[1].split('|');

			_n0 = JS_THE_TIMES_NOW[0];
			_n1 = JS_THE_TIMES_NOW[1];
			_n2 = JS_THE_TIMES_NOW[2];
			_n3 = JS_THE_TIMES_NOW[3];
			_n4 = JS_THE_TIMES_NOW[4];
			_n5 = JS_THE_TIMES_NOW[5];
		}

		if(!JS_WCSV_ACTIVE)  // ADJUST ONLY IF NORMAL FILES
		{
		// Adjustment
			_n0 = GoAdjustment(_n0, JS_ATHAN_MINUTES_OF_FAJR);
			_n2 = GoAdjustment(_n2, JS_ATHAN_MINUTES_OF_DOHR);
			_n3 = GoAdjustment(_n3, JS_ATHAN_MINUTES_OF_ASR);
			_n4 = GoAdjustment(_n4, JS_ATHAN_MINUTES_OF_MAGHRIB);
			_n5 = GoAdjustment(_n5, JS_ATHAN_MINUTES_OF_ISHA);
		}


		JS_SUMMER_LIVE_ACTIVE = false;

		if(JS_SUMMER_ADD1HOUR)
		{
			// from april(3) include 9(october)
			const summerMONTHS = [3,4,5,6,7,8,9];
			if(summerMONTHS.indexOf(mmm) !== -1)
			{
				_n0 = Gime1HourMORE(_n0);
				_n1 = Gime1HourMORE(_n1);
				_n2 = Gime1HourMORE(_n2);
				_n3 = Gime1HourMORE(_n3);
				_n4 = Gime1HourMORE(_n4);
				_n5 = Gime1HourMORE(_n5);
				JS_SUMMER_LIVE_ACTIVE = true;
			}

			// MARS
			// CATCH LAST-SUNDAY'DAY
			if(mmm == 2)
			{
				var JSDXXX = 24;
				var JSvDAT = null;
				var xDDD   = -1;
				for (i=25; i <= 31; i++)
				{
					JSvDAT  = new Date(YearNow, 2, i);
					xDDD	= JSvDAT.getDay();
					if(xDDD == 0) { JSDXXX=i; break; }
				}

				if( jx >= JSDXXX )
				{
					_n0 = Gime1HourMORE(_n0);
					_n1 = Gime1HourMORE(_n1);
					_n2 = Gime1HourMORE(_n2);
					_n3 = Gime1HourMORE(_n3);
					_n4 = Gime1HourMORE(_n4);
					_n5 = Gime1HourMORE(_n5);
					JS_SUMMER_LIVE_ACTIVE = true;
				}
			}

			// OCTOBRE
			// CATCH LAST-SUNDAY'DAY

			if(mmm == 9)
			{
				var JSDXXX = 24;
				var JSvDAT = null;
				var xDDD   = -1;

				for (i=25; i <= 31; i++)
				{
					JSvDAT  = new Date(YearNow, 9, i);
					xDDD	= JSvDAT.getDay();
					if(xDDD == 0) { JSDXXX=i; break; }
				}

				if( jx >= JSDXXX )
				{
					_n0 = Gime1HourLESS(_n0);
					_n1 = Gime1HourLESS(_n1);
					_n2 = Gime1HourLESS(_n2);
					_n3 = Gime1HourLESS(_n3);
					_n4 = Gime1HourLESS(_n4);
					_n5 = Gime1HourLESS(_n5);
					JS_SUMMER_LIVE_ACTIVE = false;
				}
			}
		}

		// manually add 1 hour to all if set

		if(JS_1HOURMORE)
		{
			_n0 = Gime1HourMORE(_n0);
			_n1 = Gime1HourMORE(_n1);
			_n2 = Gime1HourMORE(_n2);
			_n3 = Gime1HourMORE(_n3);
			_n4 = Gime1HourMORE(_n4);
			_n5 = Gime1HourMORE(_n5);
		}

		// manually remove 1 hour from all if set
		if(JS_1LESSMORE)
		{
			_n0 = Gime1HourLESS(_n0);
			_n1 = Gime1HourLESS(_n1);
			_n2 = Gime1HourLESS(_n2);
			_n3 = Gime1HourLESS(_n3);
			_n4 = Gime1HourLESS(_n4);
			_n5 = Gime1HourLESS(_n5);
		}

		// AUTO ADD 30 MIN TO ISHA IF RAMADAN AND OPTION ACTIVE
		if( (JS_THIS_IS_RAMADAN) && (JS_RAMADAN_30MIN_ACTIVE) ) _n5 = GoAdjustment(_n5, 30);
		var eHjr	=  ARNumbers(JS_FULL_HJRI_NOW);

		//ARNumbers(JS_ARRAY_FULLHJRI[0])+' '+JS_ARRAY_FULLHJRI[1]+' '+ARNumbers(JS_ARRAY_FULLHJRI[2]);
		document.getElementById('eVRYOUM').innerHTML  	=  arYOUM;
		document.getElementById('_eHIJRI').innerHTML  	= eHjr;
		document.getElementById('_HR_YOUM').innerHTML 	=  arYOUM;
		document.getElementById('_HReHIJRI').innerHTML  =  eHjr;
		//IF FRIDAY CHANGE DOHR NAME BY JOMOA TEXT AND PERSO TIME IF ANY


		if(JS_TODAY_IS_JOMOA)
		{
			JS_T_2.innerHTML  = JS_tempJMA;
			JS_W333HT_2.innerHTML = JS_T_2.innerHTML;
			if(JS_PERSO_FIXED_JOMOA !== "") _n2 = JS_PERSO_FIXED_JOMOA; // override Jomoa time by perso
		}
		else
		{
			JS_T_2.innerHTML  = JS_PRAYNAMES_NOW[2];
			JS_W333HT_2.innerHTML = JS_T_2.innerHTML;
		}

		// NOW SET FIXED DOHR
		if( (JS_FIXED_IQAMATFAJR !== "")&&(!JS_WCSV_ACTIVE) )
		{
			JS_IQAMA_TIME_OF_FAJR = GimeTotalMinutes(JS_FIXED_IQAMATFAJR) - GimeTotalMinutes(_n0);
			if(JS_IQAMA_TIME_OF_FAJR < 1) JS_IQAMA_TIME_OF_FAJR = 10; //default 10
		}

		// NOW SET FIXED DOHR
		if( (JS_FIXED_IQAMATDOHR !== "")&&(!JS_WCSV_ACTIVE) )
		{
			JS_IQAMA_TIME_OF_DOHR = GimeTotalMinutes(JS_FIXED_IQAMATDOHR) - GimeTotalMinutes(_n2);
			if(JS_IQAMA_TIME_OF_DOHR < 1) JS_IQAMA_TIME_OF_DOHR = 10; //default 10
		}

		// NOW SET FIXED ASR
		if( (JS_FIXED_IQAMATASR !== "")&&(!JS_WCSV_ACTIVE) )
		{
			JS_IQAMA_TIME_OF_ASR = GimeTotalMinutes(JS_FIXED_IQAMATASR) - GimeTotalMinutes(_n3);
			if(JS_IQAMA_TIME_OF_ASR < 1) JS_IQAMA_TIME_OF_ASR = 10; //default 10
		}
		// NOW SET FIXED ISHA
		if( (JS_FIXED_IQAMATISHA !== "")&&(!JS_WCSV_ACTIVE) )
		{
			JS_IQAMA_TIME_OF_ISHA = GimeTotalMinutes(JS_FIXED_IQAMATISHA) - GimeTotalMinutes(_n5);
			if(JS_IQAMA_TIME_OF_ISHA < 1) JS_IQAMA_TIME_OF_ISHA = 10; //default 10
		}


		// fill times now, with converting them to 12 hour format
		var JJJ0 = ARNumbers(KonvertTimeTo12(_n0));
		var JJJ1 = ARNumbers(KonvertTimeTo12(_n1));
		var JJJ2 = ARNumbers(KonvertTimeTo12(_n2));
		var JJJ3 = ARNumbers(KonvertTimeTo12(_n3));
		var JJJ4 = ARNumbers(KonvertTimeTo12(_n4));
		var JJJ5 = ARNumbers(KonvertTimeTo12(_n5));


		JS_S_0.innerHTML = JJJ0;
		JS_VReSHOROUQ.innerHTML = JS_PRAYNAMES_NOW[1] + ' ' +JJJ1;
		JS_S_2.innerHTML = JJJ2;
		JS_S_3.innerHTML = JJJ3;
		JS_S_4.innerHTML = JJJ4;
		JS_S_5.innerHTML = JJJ5;
		var dh    = GoAdjustment(_n1, 15);
		var doha1 = ARNumbers(KonvertTimeTo12(dh));
		JS_VReDOHA.innerHTML = doha1;
		JS_HReDOHA.innerHTML = doha1;
		JS_HHHS_0.innerHTML = JJJ0;
		JS_HReSHOROUQ.innerHTML = JS_VReSHOROUQ.innerHTML;
		JS_HHHS_2.innerHTML = JJJ2;
		JS_HHHS_3.innerHTML = JJJ3;
		JS_HHHS_4.innerHTML = JJJ4;
		JS_HHHS_5.innerHTML = JJJ5;

		_fjr		= GimeTotalMinutes(_n0);
		_shrq		= GimeTotalMinutes(_n1);
		_thuhr		= GimeTotalMinutes(_n2);
		_asr		= GimeTotalMinutes(_n3);
		_maghreb	= GimeTotalMinutes(_n4);
		_isha		= GimeTotalMinutes(_n5);

		var STRmonth	= JS_MONTHS_NOW[mmm];
		var STRyear		= JS_CCC.getFullYear();
		document.getElementById('_eMILADI').innerHTML 	= ARNumbers(jx)+' '+STRmonth+' '+ARNumbers(STRyear);
		document.getElementById('_HR_MILADI').innerHTML = ARNumbers(jx)+' '+STRmonth+' '+ARNumbers(STRyear);
		ShowTomorrow();
		updateBottomInformations();
		goUpdateIQAMAS();
		goSetNextSalatRemainingTIME(JS_nowMNTS);
	}

	function GoAdjustment(hhh, mints)
	{
		var nowMNTS = GimeTotalMinutes(hhh);
		nowMNTS += mints;
		var cHHH = Math.floor(nowMNTS / 60);
		var cMMM = nowMNTS % 60;

		cHHH	='0'+cHHH;
		cMMM	='0'+cMMM;

		cHHH = cHHH.slice(-2);
		cMMM = cMMM.slice(-2);

		return (cHHH + ':' + cMMM);
	}

	var JS_DECOMPTE_STARTED			=  false;
	var JS_IQUAMA_SECONDS 			=  0;
	var JS_NOW_DIMSCREEN_DURATION 	=  0;
	var JS_ACTIVE_IQAMA_NOW			=  0;
	var JS_ACTIVE_IQAMA_NOW_SECONDS	=  0;

	// startDECOMPTE
	function startDECOMPTE(xminu, duree)
	{
		if(!JS_IQAMA_COUNTDOWN_ACTIVE) return;

		// first, fill prayer duration
		JS_NOW_DIMSCREEN_DURATION 	= duree;

		if(xminu < 1) {setTimeout('ShowRIDEAU()', 1000);  setTimeout('SetAllTubesNORMAL()', 9000);   return; }

		JS_VReDecompteTEXT.innerHTML 	= '-';
		JS_HReDecompteTEXT.innerHTML 	= '-';
		JS_DECOMPTE_STARTED  		= true;
		JS_IQUAMA_SECONDS 			= (xminu * 60);
		JS_ACTIVE_IQAMA_NOW			= xminu;
		JS_ACTIVE_IQAMA_NOW_SECONDS = JS_IQUAMA_SECONDS;


		ShowZunder('VReDecompteBOX');
		ShowZunder('HReDecompteBOX');

		JS_VR_LOGO.className = 'VRLOGOMINI';

		JS_ROOT.style.setProperty('--MED_VIS', 'hidden');

		// HIDE NEXT PRAY
		HideZunder('HReNextPRAYER');
		HideZunder('HReNextPrTEXT')
	}

	// closeDECOMPTE
	function closeDECOMPTE()
	{
		JS_DECOMPTE_STARTED = false;
		JS_IQUAMA_SECONDS   = 0;
		JS_ACTIVE_IQAMA_NOW	= 0;
		JS_ACTIVE_IQAMA_NOW_SECONDS	= 0;

		JS_ROOT.style.setProperty('--MED_VIS', 'visible');
		HideZunder('VReDecompteBOX');
		HideZunder('HReDecompteBOX');
		JS_VR_LOGO.className = 'VR_LOGO'; // back to normal logo size
		// SHOW NEXT_PRAY
		ShowZunder('HReNextPRAYER');
		ShowZunder('HReNextPrTEXT');
	}

	//- HijriClick
	function HijriClick()
	{
		JS_HIJRI_DECALAGE++;
		if(JS_HIJRI_DECALAGE > 2) JS_HIJRI_DECALAGE = -2;

		localStorage.setItem('STORAGE_DECALAGE', JS_HIJRI_DECALAGE);

		GoGloballyFillDATA();
	}

	// -HijriHELP--------------------------
	function HijriHELP()
	{
		alert(JS_eLang.XX_BOX_0);
	}


	var JS_STRICT_WTIMES_FILE = false;

	function ShowTomorrow()
	{
		// TOMORROW TIMES ...
		var JS_TTT	= new Date;
		JS_TTT.setDate(JS_TTT.getDate() + 1);

		var dayNBR = JS_TTT.getDay();
		var YearNow = JS_TTT.getFullYear();
		var mm		='0'+(JS_TTT.getMonth()+1);
		var jj		='0'+JS_TTT.getDate();
		jj =jj.slice(-2);
		mm =mm.slice(-2);
		var eeeFajrTMRW	= '';
		if(JS_WCSV_ACTIVE)
		{
		// WSCV USER FILE ---------------------------------------
		// "Date,Day,FajrBegins,....
			var fulldate = mm+'-'+jj;
			var idx = FindInArray(fulldate, JS_WCSV_DATA);
			if(idx== -1) { return; }
			var VLine   = JS_WCSV_DATA[idx];
			var VDatenz = VLine.split(',');
			eeeFajrTMRW	= VDatenz[2];  // FAJR TOMORROW
		}
		else
		{
			JS_STRICT_WTIMES_FILE = true;
			var monthDay = mm+'-'+jj;
			var idx = FindInArray(monthDay, JS_TIMES);
			if(idx== -1) { return; }
		//"01-01~~~~~05:37|06:58|12:24|15:29|17:50|19:20",
			var eeeLineFULL 		= JS_TIMES[idx];
			var eeeDataLINE 		= eeeLineFULL.split('~~~~~');
			var eeeTHE_TIMES_NOW 	= eeeDataLINE[1].split('|');
			eeeFajrTMRW				= eeeTHE_TIMES_NOW[0];
		}


//-----------------------------------------------------------------------------------

		var adjustedTMRW = GoAdjustment(eeeFajrTMRW, JS_ATHAN_MINUTES_OF_FAJR);



		if( (JS_SUMMER_LIVE_ACTIVE)&&(JS_STRICT_WTIMES_FILE) )
		{
			var dayNBR = JS_TTT.getDay();
			var xmont  = JS_TTT.getMonth();
			var xdato  = JS_TTT.getDate();
			var JS_IS_LASTOCTOBERSUNDAY =( (dayNBR==0)&&(xmont==9)&&(xdato > 24) );
// tomorrow add 1 hour only if summer time is realy active AND tomorrow is not last sunday of october
			if(!JS_IS_LASTOCTOBERSUNDAY) adjustedTMRW = Gime1HourMORE(adjustedTMRW);
		}



		adjustedTMRW = KonvertTimeTo12(adjustedTMRW);
		document.getElementById('VRdemain').innerHTML 		= ARNumbers(adjustedTMRW);
		document.getElementById('W333_HRdemain').innerHTML 	= ARNumbers(adjustedTMRW);
	}

	//----goFullSCREEN-------------------------------------
	function goFullSCREEN()
	{
		GoGloballyFillDATA();
		Go1MN();
		launchFullscreen(document.documentElement);
		JS_SND_BEEEP.play();
	}

	//  Audio
	function forceAudio()
	{
		JS_SND_BEEEP.play();
		HideZunder('BtnAudio');
	}


	// Play_Beeep
	function Play_Beeep()
	{
		if(JS_AUDIO_AZAN_IQAMA_IS_BY_VOICE)
		{
			if(JS_SHORT_AZAN_ACTIVE)
			{
				JS_SND_SHORTAZAN.play();
			}
			else
			{
				if(JS_nowMNTS==_fjr) JS_SND_FAJR.play();
				else JS_SND_AZAN.play();
			}
		}
		else
		JS_SND_BEEEP.play();
	}

	//  Play_Iqamat
	function Play_IqamaTit()
	{
		if(JS_AUDIO_AZAN_IQAMA_IS_BY_VOICE)
		{
			if(JS_SHORT_IQAMA_ACTIVE) JS_SND_SHORTIQAMA.play();
			else JS_SND_TIT.play();
		}
		else
		JS_SND_TIT.play();
	}

	// SetScroll
	function SetScroll(StrId,nbr)
	{
		var OBBB = document.getElementById(StrId);

		var nowSCRO = OBBB.scrollTop;
		if(nbr > 0) OBBB.scrollTop = nowSCRO + 90; else OBBB.scrollTop = nowSCRO - 90;
	}


	// GimeTotalMinutes
	function GimeTotalMinutes(s)
	{
		//14:25
		var hee = s.substr(0,2);
		var mee = s.substr(3,2);
		return ( ( parseInt(hee)*60 ) + parseInt(mee) );
	}

	// DisableSelectionByID
	function DisableSelectionByNAME(elem)
	{
		elem.onselectstart = function() { return false; };
		elem.unselectable = "on";
		elem.style.MozUserSelect = "none";
		elem.style.cursor = "default";
	}

	// Launch Full Screen
	function launchFullscreen(element)
	{
		if(element.requestFullscreen) {
			element.requestFullscreen();
		}
		else if(element.mozRequestFullScreen) {
			element.mozRequestFullScreen();
		}
		else if(element.webkitRequestFullscreen) {
			element.webkitRequestFullscreen();
		}
		else if(element.msRequestFullscreen) {
			element.msRequestFullscreen();
		}
	}

	//_cadro
	function _cadro()
	{
		JS_DISPLAY_IS_HORIZONTAL = (window.innerHeight < window.innerWidth);
		goSetBG();
	}

	// GoActivateOrDisableDIV
	function GoActivateOrDisableDIV(iniSTATE,idX)
	{
		if(iniSTATE) idX.classList.remove('cssDISABLED'); else idX.classList.add('cssDISABLED');
	}

	// GoBoxesONOFF
	function GoBoxesONOFF(stat,ELEM)
	{
		ELEM.disabled=stat;
	}

	//SetAudioVoiceOnOff
	function SetAudioVoiceOnOff()
	{
		JS_AUDIO_AZAN_IQAMA_IS_BY_VOICE = !JS_AUDIO_AZAN_IQAMA_IS_BY_VOICE;

		var eeBOOL = 0;
		if(JS_AUDIO_AZAN_IQAMA_IS_BY_VOICE) eeBOOL = 1;
		localStorage.setItem('STORAGE_AUDIO_BY_VOICE', eeBOOL);
		if(eeBOOL) JS_eVoiceCHECK.checked = true; else JS_eVoiceCHECK.checked = false;
		VerifyMP3Options();
		// to trigger sounds in browser to be accepted
		if(JS_AUDIO_AZAN_IQAMA_IS_BY_VOICE) JS_SND_BEEEP.play();
	}

	function VerifyMP3Options()
	{
		GoBoxesONOFF(!JS_AUDIO_AZAN_IQAMA_IS_BY_VOICE,JS_eShortAZAN);
		GoBoxesONOFF(!JS_AUDIO_AZAN_IQAMA_IS_BY_VOICE,JS_eShortIQAMA);
	}


	// SetShortAZANOnOff
	function SetShortAZANOnOff()
	{
		JS_SHORT_AZAN_ACTIVE = !JS_SHORT_AZAN_ACTIVE;
		var eeBOOL = 0;
		if(JS_SHORT_AZAN_ACTIVE) eeBOOL = 1;
		localStorage.setItem('STORAGE_JS_SHORT_AZAN_ACTIVE', eeBOOL);
		if(eeBOOL) JS_eShortAZAN.checked = true; else JS_eShortAZAN.checked = false;
	}

	// SetShortIQAMAOnOff
	function SetShortIQAMAOnOff()
	{
		JS_SHORT_IQAMA_ACTIVE = !JS_SHORT_IQAMA_ACTIVE;
		var eeBOOL = 0;
		if(JS_SHORT_IQAMA_ACTIVE) eeBOOL = 1;
		localStorage.setItem('STORAGE_JS_SHORT_IQAMA_ACTIVE', eeBOOL);
		if(eeBOOL) JS_eShortIQAMA.checked = true; else JS_eShortIQAMA.checked = false;
	}
	// SetCounterBIG
	function SetCounterBIG()
	{
		JS_FULLSCREEN_COUNTER= !JS_FULLSCREEN_COUNTER;

		var eeBOOL = 0;
		if(JS_FULLSCREEN_COUNTER) eeBOOL = 1;
		localStorage.setItem('STORAGE_FULLSCREEN_COUNTER', eeBOOL);

		if(eeBOOL) JS_eCountdownCHECK.checked = true; else JS_eCountdownCHECK.checked = false;

	}

	// Set1MoreHOUR
	function Set1MoreHOUR()
	{
		JS_1HOURMORE = !JS_1HOURMORE;
		var eeBOOL = 0;
		if(JS_1HOURMORE) eeBOOL = 1;
		localStorage.setItem('STORAGE_JS_1HOURMORE', eeBOOL);
		if(eeBOOL) JS_eMoreHourCHECK.checked = true; else JS_eMoreHourCHECK.checked = false;
		GoGloballyFillDATA();
	}

	// Set1LessHOUR
	function Set1LessHOUR()
	{
		JS_1LESSMORE = !JS_1LESSMORE;
		var eeBOOL = 0;
		if(JS_1LESSMORE) eeBOOL = 1;
		localStorage.setItem('STORAGE_JS_1LESSMORE', eeBOOL);
		if(eeBOOL) JS_eLessHourCHECK.checked = true; else JS_eLessHourCHECK.checked = false;
		GoGloballyFillDATA();
	}

	// Set24OnOff
	function Set24OnOff()
	{
		JS_24H_ACTIVE = !JS_24H_ACTIVE;
		var sssBOOL = 0;
		if(JS_24H_ACTIVE) sssBOOL = 1;
		localStorage.setItem('STORAGE_24H_ACTIVE', sssBOOL);
		if(sssBOOL) JS_e24CHECK.checked = true; else JS_e24CHECK.checked = false;

		GoGloballyFillDATA();
		Go1MN();
	}

	// SetFullClockOnOff
	function SetFullClockOnOff()
	{
		JS_FULL_CLOCK_ACTIVE = !JS_FULL_CLOCK_ACTIVE;
		UpdateFullClock(JS_FULL_CLOCK_ACTIVE);
	}
	// SetPastDimerOnOff
	function SetPastDimerOnOff()
	{
		JS_PAST_DIMER_ACTIVE = !JS_PAST_DIMER_ACTIVE;
		var sssBOOL = 0;
		if(JS_PAST_DIMER_ACTIVE) sssBOOL = 1;
		localStorage.setItem('STORAGE_PAST_DIMER_ACTIVE', sssBOOL);
		if(sssBOOL) JS_ePastDimerCHECK.checked = true; else JS_ePastDimerCHECK.checked = false;

// go update view
		goDimPassedPRAYINGS(JS_nowMNTS);
	}

	// SetIqamaBIG
	function SetIqamaBIG()
	{
		JS_BIG_IQAMA = !JS_BIG_IQAMA;
		var sssBOOL = 0;
		if(JS_BIG_IQAMA) sssBOOL = 1;
		localStorage.setItem('STORAGE_JS_BIG_IQAMA', sssBOOL);
		if(sssBOOL) JS_eBigIQAMA.checked = true; else JS_eBigIQAMA.checked = false;
		updateBigIQAMA();
	}

	//
	function updateBigIQAMA()
	{
		if(JS_BIG_IQAMA)
			JS_ROOT.style.setProperty('--BigIQ', '4.5vw');
		else
		JS_ROOT.style.setProperty('--BigIQ', '3.3vw');
	}

	// SetIqamaFullTimes
	function SetIqamaFullTimes()
	{
		JS_IQAMA_FULL_TIMES = !JS_IQAMA_FULL_TIMES;
		var sssBOOL = 0;
		if(JS_IQAMA_FULL_TIMES) sssBOOL = 1;
		localStorage.setItem('STORAGE_IQAMA_FULL_TIMES', sssBOOL);
		if(sssBOOL) JS_eIQAMAasHOURCHECK.checked = true; else JS_eIQAMAasHOURCHECK.checked = false;

		goUpdateIQAMAS();
	}

	// SetCOUNTDOWNOnOff
	function SetCOUNTDOWNOnOff()
	{
		JS_IQAMA_COUNTDOWN_ACTIVE = !JS_IQAMA_COUNTDOWN_ACTIVE;
		var sssBOOL = 0;
		if(JS_IQAMA_COUNTDOWN_ACTIVE) sssBOOL = 1;
		localStorage.setItem('STORAGE_IQAMA_COUNTDOWN_ACTIVE', sssBOOL);
		if(sssBOOL) JS_eCOUNTDOWNOnOff.checked = true; else JS_eCOUNTDOWNOnOff.checked = false;
	}

	var JS_SWITCHER =  false;

	// AyatsMsgSwitcher
	function AyatsMsgSwitcher()
	{
		if(JS_HRDataMESSAGE == "") return;
		if(JS_WEB_12BOOLZ[0] == "1")
		{
			JS_SWITCHER = !JS_SWITCHER;
			if(JS_SWITCHER)
			{
				JS_HReAyatsHDR.style.opacity = 1;
				JS_HRDataBOX.style.opacity = 0;
			}
			else
			{
				JS_HReAyatsHDR.style.opacity = 0;
				JS_HRDataBOX.style.opacity = 1;
			}
		}

	}

	// UpdateFullClock
	function UpdateFullClock(YES_ACTIVATE_IT)
	{
		var sssBOOL = 0;
		if(YES_ACTIVATE_IT) sssBOOL = 1;
		localStorage.setItem('STORAGE_FULL_CLOCK_ACTIVE', sssBOOL);
		if(sssBOOL) JS_eFullClockCHECK.checked = true; else JS_eFullClockCHECK.checked = false;

		if(YES_ACTIVATE_IT)
		{
			HideZunder('CLOKO_MINI_VR');
			HideZunder('CLOKO_MINI_HR');
			ShowZunder('CLOKO_FULL_VR');
			ShowZunder('CLOKO_FULL_HR');
		}
		else
		{
			ShowZunder('CLOKO_MINI_VR');
			ShowZunder('CLOKO_MINI_HR');
			HideZunder('CLOKO_FULL_VR');
			HideZunder('CLOKO_FULL_HR');
		}
		setTimeout(Go1MN, 3000);
	}

	// SetDimmOnOff
	function SetDimmOnOff()
	{
		JS_DIMM_WHILE_PRAYIN_ACTIVE = !JS_DIMM_WHILE_PRAYIN_ACTIVE;
		var sssBOOL = 0;
		if(JS_DIMM_WHILE_PRAYIN_ACTIVE) sssBOOL = 1;
		localStorage.setItem('STORAGE_DIMM_SCREEN', sssBOOL);
		if(sssBOOL) JS_eDimmCHECK.checked = true; else JS_eDimmCHECK.checked = false;
	}

	var JS_LAST_X = 0;
	var JS_NB     = 0;

	// _GoMessages
	function _GoMessages()
	{
		if (!JS_SHOW_AYATS && !JS_DISPLAY_IS_HORIZONTAL) return;
		JS_NB = Math.floor((Math.random() * JS_COUNT_MSGS));

		// avoid same number
		if(JS_LAST_X == JS_NB ) { _GoMessages(); return; }
		var str = JS_MESSAGES[JS_NB];
		if(str == "") { _GoMessages(); return; }
		if((JS_DULHIJJA_WORK_DAYS) &&  ((str.indexOf('10NIGHTS') > -1) || (str.indexOf('3WHITEDAYS') > -1) || (str.indexOf('TAKBIR') > -1))) {
			_GoMessages(); return;
		}

		if((JS_RAMADAN_10_NIGHTS) &&  ((str.indexOf('10DAYS') > -1) || (str.indexOf('3WHITEDAYS') > -1) || (str.indexOf('TAKBIR') > -1))) {
			_GoMessages(); return;
		}

		if((JS_FASTING_3_WHITE_DAYS) &&  ((str.indexOf('10DAYS') > -1) || (str.indexOf('10NIGHTS') > -1) || (str.indexOf('TAKBIR') > -1))) {
			_GoMessages(); return;
		}

		if((JS_TAKBIR_DAYS) && ((str.indexOf('10DAYS') > -1) || (str.indexOf('10NIGHTS') > -1) || (str.indexOf('3WHITEDAYS') > -1))) {
			_GoMessages(); return;
		}

		var group4Specials = (JS_DULHIJJA_WORK_DAYS || JS_RAMADAN_10_NIGHTS || JS_FASTING_3_WHITE_DAYS || JS_TAKBIR_DAYS);
		var spclSTRini = (str.indexOf('10DAYS') > -1) || (str.indexOf('10NIGHTS') > -1) || (str.indexOf('3WHITEDAYS') > -1) || (str.indexOf('TAKBIR') > -1);

		if (spclSTRini && !group4Specials) {
			_GoMessages(); return;
		}

		// filter passed, clean now,
		str = str.replace('TAKBIR', '');
		str = str.replace('10DAYS', '');
		str = str.replace('10NIGHTS', '');
		str = str.replace('3WHITEDAYS', '');


		if(spclSTRini) str = "<span style='color:var(--Color_CLOCK);'>"+str+"<span>";

		str = str.replace(/\{/g, "﴿");
		str = str.replace(/\}/g, "﴾");


		if(JS_LOGS_ENABLED) str = "";

		JS_VReAYATS.innerHTML = str;
		JS_HReAYATS.innerHTML = str;
		if(JS_ELHOLDO.style.visibility=='visible') JS_ELAYATS.innerHTML = str;

		JS_LAST_X = JS_NB;
	}


	var JS_KNTO	= 0;

	// TestCounter
	function TestCounter()
	{
		JS_KNTO++;
		if(JS_KNTO >= 3)	{
			JS_KNTO = 0;
			startDECOMPTE(1, 1);
			ShowFullCONTO();
		}
	}

	var JS_RRR	= 0;

	//LogsOnOff
	function LogsOnOff()
	{
		JS_RRR++;
		if(JS_RRR >= 3)	{JS_RRR = 0; JS_LOGS_ENABLED = !JS_LOGS_ENABLED; _GoMessages();}
	}

	var JS_HELP_MENU_IS_OPEN = true;

	// ShowGlobalHELP
	function ShowGlobalHELP()
	{
		JS_HELP_MENU_IS_OPEN = !JS_HELP_MENU_IS_OPEN;

		if(JS_HELP_MENU_IS_OPEN)
		{
			HideZunder('eHELPSCREEN');
		}
		else
		{
			ShowZunder('eHELPSCREEN');
		}
	}

	// -CloseHELP
	function CloseHELP()
	{
		JS_HELP_MENU_IS_OPEN = !JS_HELP_MENU_IS_OPEN;
		HideZunder('eHELPSCREEN');
	}

	// openSSS
	function openSSS(xx)
	{
		HideZunder('sss1');
		HideZunder('sss2');
		HideZunder('sss3');
		HideZunder('sss4');

		ShowZunder('sss'+xx);
	}

	//  closeThis
	function closeThis(obj)
	{
		obj.parentNode.parentNode.style.visibility = 'hidden';
	}

	// HIJRI DATE FROM MILADI, CODE FROM :
	// http://www.vivvo.net/forums/showthread.php?p=40981

	function MiladiToHIJRI(myDate,_dek)
	{
		//var myDate = new Date();

		d = parseInt(myDate.getDate());
		m = parseInt(myDate.getMonth() + 1);
		y = parseInt(myDate.getFullYear());

		if ((y>1582)||((y==1582)&&(m>10))||((y==1582)&&(m==10)&&(d>14)))
		{
			jd= intPart((1461*(y+4800+intPart((m-14)/12)))/4)+
			intPart((367*(m-2-12*(intPart((m-14)/12))))/12)-
			intPart( (3* (intPart(  (y+4900+    intPart( (m-14)/12)     )/100)    )   ) /4)+d-32075
		}
		else
		{
			jd = 367*y-intPart((7*(y+5001+intPart((m-9)/7)))/4)+intPart((275*m)/9)+d+1729777;
		}


		JD=jd;

//wd=weekDay(jd%7);

		l=jd-1948440+10632;
		n=intPart((l-1)/10631);
		l=l-10631*n+354;
		j=(intPart((10985-l)/5316))*(intPart((50*l)/17719))+(intPart(l/5670))*(intPart((43*l)/15238));
		l=l-(intPart((30-j)/15))*(intPart((17719*j)/50))-(intPart(j/16))*(intPart((15238*j)/43))+29;




		m=intPart((24*l)/709);

		d=l-intPart((709*m)/24);

		y=30*n+j-30;


// DECALAGE_CALC
		d = d + _dek;
		if(d < 1 ) { d = 30; m--;	}
		if(d > 30) { d = 1;  m++;	}

		if(m < 1  ) m = 12;
		if(m > 12 ) m = 1;


		JS_THIS_IS_RAMADAN		= (m == 9 );
		JS_FULL_HJRI_NOW		=  d + " " + JS_HIJRI_NOW[m-1] + " " +y;
		JS_ARRAY_FULLHJRI		= [d,JS_HIJRI_NOW[m-1],y];
		JS_DULHIJJA_DAYS_0913 	= ( (m == 12) && (  (d==9)||(d==10)||(d==11)||(d==12)||(d==13)  )   );
		JS_SHAABAN_LAST_DAYS 	= ( (m == 8) && (  (d==29)||(d==30)  )   );
		JS_DULHIJJA_WORK_DAYS 	= ( (m == 12) && ( d >=1  && d <= 9 ));
		JS_RAMADAN_10_NIGHTS 	= ( (m == 9)  && ( d >=20 && d < 29));
		JS_TAKBIR_DAYS 			= (  m == 10 &&  d == 1) || ( (m == 12) && ( d >=10  && d <= 13 )) ;

		JS_FASTING_3_WHITE_DAYS	= (  d >=12 && d <= 14) && (  (!JS_THIS_IS_RAMADAN)&&(!JS_DULHIJJA_DAYS_0913)&&(!JS_SHAABAN_LAST_DAYS) );

	}

	//  intPart
	function intPart(floatNum)
	{
		if (floatNum < -0.0000001) { return Math.ceil(floatNum-0.0000001) }
			return Math.floor(floatNum+0.0000001)
	}

	var JS_jjj_BEFORE_DOHR	= document.getElementById('jjjJOMOA_BEFORE_DOHR');
	var JS_jjj_AFTER_DOHR	= document.getElementById('jjjJOMOA_AFTER_DOHR');

	// JomoaBEFOREminus
	function JomoaBEFOREminus()
	{
		JS_JOMOA_DIM_MINIUTES_BEFORE--;
		if(JS_JOMOA_DIM_MINIUTES_BEFORE < 0) {JS_JOMOA_DIM_MINIUTES_BEFORE = 0; return;}
		JS_jjj_BEFORE_DOHR.innerHTML = JS_JOMOA_DIM_MINIUTES_BEFORE;
		localStorage.setItem('STORAGE_JOMOA_DIM_BEFORE', JS_JOMOA_DIM_MINIUTES_BEFORE);
	}

	// JomoaBEFOREplus
	function JomoaBEFOREplus()
	{
		JS_JOMOA_DIM_MINIUTES_BEFORE++;
		if(JS_JOMOA_DIM_MINIUTES_BEFORE > 60) {JS_JOMOA_DIM_MINIUTES_BEFORE = 60; return;}
		JS_jjj_BEFORE_DOHR.innerHTML = JS_JOMOA_DIM_MINIUTES_BEFORE;
		localStorage.setItem('STORAGE_JOMOA_DIM_BEFORE', JS_JOMOA_DIM_MINIUTES_BEFORE);
	}

	// JomoaAFTERminus
	function JomoaAFTERminus()
	{
		JS_JOMOA_DIM_MINIUTES_AFTER--;
		if(JS_JOMOA_DIM_MINIUTES_AFTER < 0) {JS_JOMOA_DIM_MINIUTES_AFTER = 0; return;}
		JS_jjj_AFTER_DOHR.innerHTML = JS_JOMOA_DIM_MINIUTES_AFTER;
		localStorage.setItem('STORAGE_JOMOA_DIM_AFTER', JS_JOMOA_DIM_MINIUTES_AFTER);
	}
	// JomoaAFTERplus
	function JomoaAFTERplus()
	{
		JS_JOMOA_DIM_MINIUTES_AFTER++;
		if(JS_JOMOA_DIM_MINIUTES_AFTER > 90) {JS_JOMOA_DIM_MINIUTES_AFTER = 90; return;}
		JS_jjj_AFTER_DOHR.innerHTML = JS_JOMOA_DIM_MINIUTES_AFTER;
		localStorage.setItem('STORAGE_JOMOA_DIM_AFTER', JS_JOMOA_DIM_MINIUTES_AFTER);
	}

	function ShowThisMarqueeAndCloseAFTER(_TXT, _MNT)
	{
		JS_eMarqueeTEXT.innerHTML = _TXT;
		JS_HReMarqueeTEXT.innerHTML = _TXT;
		ShowZunder('VReMarqueeTEXT');
		ShowZunder('HReMarqueeTEXT');
		HideZunder('VReVERSIO');
		setTimeout("HideZunder('VReMarqueeTEXT')", (_MNT * 60000) );
		setTimeout("HideZunder('HReMarqueeTEXT')", (_MNT * 60000) );
		setTimeout("ShowZunder('VReVERSIO')", (_MNT * 60000) );
	}

	var JS_QM1 = document.getElementById('qm1');
	var JS_QM3 = document.getElementById('qm3');
	var JS_QM4 = document.getElementById('qm4');
	var JS_QM5 = document.getElementById('qm5');
	var JS_QM6 = document.getElementById('qm6');
	var JS_W333HRQM1 = document.getElementById('W333HRqm1');
	var JS_W333HRQM3 = document.getElementById('W333HRqm3');
	var JS_W333HRQM4 = document.getElementById('W333HRqm4');
	var JS_W333HRQM5 = document.getElementById('W333HRqm5');
	var JS_W333HRQM6 = document.getElementById('W333HRqm6');

	function putMinutesInSETTINGS()
	{
		// fill data in settings
		JS_OBJ_DURATION_FAJR.innerHTML 		= JS_PRAY_DURATION_OF_FAJR;
		JS_OBJ_DURATION_DOHR.innerHTML 		= JS_PRAY_DURATION_OF_DOHR;
		JS_OBJ_DURATION_ASR.innerHTML 		= JS_PRAY_DURATION_OF_ASR;
		JS_OBJ_DURATION_MAGHRIB.innerHTML 	= JS_PRAY_DURATION_OF_MAGHRIB;
		JS_OBJ_DURATION_ISHA.innerHTML 		= JS_PRAY_DURATION_OF_ISHA;
	}

	// SetAYATSOnOff
	function SetAYATSOnOff()
	{
		JS_SHOW_AYATS = !JS_SHOW_AYATS;
		var sssBOOL = 0;
		if(JS_SHOW_AYATS) sssBOOL = 1;
		localStorage.setItem('STORAGE_JS_SHOW_AYATS', sssBOOL);
		//if(JS_SHOW_AYATS) JS_eAyatsCHECK.checked = true;  else JS_eAyatsCHECK.checked = false;
		fixAyaysVerticalClock();
	}

	function fixAyaysVerticalClock()
	{
		var JS_VReAyatsHDR   = document.getElementById('VReAyatsHDR');
		var JS_CLOKO_MINI_VR = document.getElementById('CLOKO_MINI_VR');
		var JS_CLOKO_FULL_VR = document.getElementById('CLOKO_FULL_VR');

		if(JS_SHOW_AYATS)	{
			JS_VReAyatsHDR.style.visibility = 'visible';
			JS_CLOKO_MINI_VR.style.top = '19.5%';
			JS_CLOKO_FULL_VR.style.top = '19.5%';
			_GoMessages();
		}else
		{
			JS_VReAyatsHDR.style.visibility = 'hidden';
			JS_CLOKO_MINI_VR.style.top = '25%';
			JS_CLOKO_FULL_VR.style.top = '25%';
		}
	}

	// SetArabicDIGITSOnOff
	function SetArabicDIGITSOnOff()
	{
		JS_ARABIC_DIGITS = !JS_ARABIC_DIGITS;
		var sssBOOL = 0;
		if(JS_ARABIC_DIGITS) sssBOOL = 1;
		localStorage.setItem('STORAGE_ARABIC_DIGITS', sssBOOL);
		execDIGITS(JS_ARABIC_DIGITS);
		GoGloballyFillDATA();
	}

	// execDIGITS
	function execDIGITS(sBOL)
	{
		if(sBOL)
		{
			JS_eArabicDIGITS.checked = true;
			JS_ROOT.style.setProperty('--XX_DIGITS', 'Amiri');
		}
		else
		{
			JS_eArabicDIGITS.checked = false;
			JS_ROOT.style.setProperty('--XX_DIGITS', 'FreeSans');
		}

		Go1MN();
	}

	// goUpdateIQAMAS
	function goUpdateIQAMAS()
	{

		var JS_SIGNER = '’';
		if(JS_ID_MSQ == '490') JS_SIGNER = ' + ';


		if(JS_IQAMA_FULL_TIMES)
		{
			// VR
			JS_QM1.innerHTML = ARNumbers(KonvertTimeTo12(gimeTime(_fjr 	 + parseInt(JS_IQAMA_TIME_OF_FAJR))));
			JS_QM3.innerHTML = ARNumbers(KonvertTimeTo12(gimeTime(_thuhr  + parseInt(JS_IQAMA_TIME_OF_DOHR))));
			JS_QM4.innerHTML = ARNumbers(KonvertTimeTo12(gimeTime(_asr 	 + parseInt(JS_IQAMA_TIME_OF_ASR))));
			JS_QM5.innerHTML = ARNumbers(KonvertTimeTo12(gimeTime(_maghreb + parseInt(JS_IQAMA_TIME_OF_MAGHRIB))));
			JS_QM6.innerHTML = ARNumbers(KonvertTimeTo12(gimeTime(_isha 	 + parseInt(JS_IQAMA_TIME_OF_ISHA))));
		} else {
			// VR
			JS_QM1.innerHTML = ARNumbers(JS_IQAMA_TIME_OF_FAJR) + JS_SIGNER;
			JS_QM3.innerHTML = ARNumbers(JS_IQAMA_TIME_OF_DOHR) + JS_SIGNER;
			JS_QM4.innerHTML = ARNumbers(JS_IQAMA_TIME_OF_ASR) + JS_SIGNER;
			JS_QM5.innerHTML = ARNumbers(JS_IQAMA_TIME_OF_MAGHRIB) + JS_SIGNER;
			JS_QM6.innerHTML = ARNumbers(JS_IQAMA_TIME_OF_ISHA) + JS_SIGNER;
		}

		if(JS_MOSK_IQAMAS == "---,---,---,---,---")
		{
			JS_QM1.innerHTML = '';
			JS_QM3.innerHTML = '';
			JS_QM4.innerHTML = '';
			JS_QM5.innerHTML = '';
			JS_QM6.innerHTML = '';
		}

		// update HR
		JS_W333HRQM1.innerHTML = JS_QM1.innerHTML;
		JS_W333HRQM3.innerHTML = JS_QM3.innerHTML;
		JS_W333HRQM4.innerHTML = JS_QM4.innerHTML;
		JS_W333HRQM5.innerHTML = JS_QM5.innerHTML;
		JS_W333HRQM6.innerHTML = JS_QM6.innerHTML;

		// OVERRIDER OF FAJR
		if( (JS_FIXED_IQAMATFAJR !== "")&&(!JS_WCSV_ACTIVE) )
		{
			JS_QM1.innerHTML 		= ARNumbers(KonvertTimeTo12(JS_FIXED_IQAMATFAJR));
			JS_W333HRQM1.innerHTML 	= JS_QM1.innerHTML;
		}

		// OVERRIDER OF DOHR
		if( (JS_FIXED_IQAMATDOHR !== "")&&(!JS_WCSV_ACTIVE) )
		{
			JS_QM3.innerHTML 		= ARNumbers(KonvertTimeTo12(JS_FIXED_IQAMATDOHR));
			JS_W333HRQM3.innerHTML 	= JS_QM3.innerHTML
		}

		// OVERRIDER OF ASR
		if( (JS_FIXED_IQAMATASR !== "")&&(!JS_WCSV_ACTIVE) )
		{
			JS_QM4.innerHTML 		= ARNumbers(KonvertTimeTo12(JS_FIXED_IQAMATASR));
			JS_W333HRQM4.innerHTML 	= JS_QM4.innerHTML;
		}

		// OVERRIDER OF ISHA
		if( (JS_FIXED_IQAMATISHA !== "")&&(!JS_WCSV_ACTIVE) )
		{
			JS_QM6.innerHTML 		= ARNumbers(KonvertTimeTo12(JS_FIXED_IQAMATISHA));
			JS_W333HRQM6.innerHTML 	= JS_QM6.innerHTML;
		}
		// NO IQAMA IN FRIDAY DOHR
		if(JS_TODAY_IS_JOMOA)
		{
			JS_QM3.innerHTML 		= "";
			JS_W333HRQM3.innerHTML 	= "";
		}
	}

	// FILL DATA OF JOMOA DIM MINUTES
	JS_jjj_BEFORE_DOHR.innerHTML 	= JS_JOMOA_DIM_MINIUTES_BEFORE;
	JS_jjj_AFTER_DOHR.innerHTML 	= JS_JOMOA_DIM_MINIUTES_AFTER;

	var JS_OBJ_DURATION_FAJR 		= document.getElementById('DURATION_FAJR');
	var JS_OBJ_DURATION_DOHR 		= document.getElementById('DURATION_DOHR');
	var JS_OBJ_DURATION_ASR 		= document.getElementById('DURATION_ASR');
	var JS_OBJ_DURATION_MAGHRIB 	= document.getElementById('DURATION_MAGHRIB');
	var JS_OBJ_DURATION_ISHA 		= document.getElementById('DURATION_ISHA');

	//goDURATIONminus
	function goDURATIONminus(prayNAME)
	{
		switch(prayNAME)
		{
		case 'FAJR'	:	JS_PRAY_DURATION_OF_FAJR--;
			if(JS_PRAY_DURATION_OF_FAJR < 5) {JS_PRAY_DURATION_OF_FAJR = 5; return;}
			JS_OBJ_DURATION_FAJR.innerHTML = JS_PRAY_DURATION_OF_FAJR;
			localStorage.setItem('STORAGE_DURATION_FAJR', JS_PRAY_DURATION_OF_FAJR);
			break;
		case 'DOHR'	:	JS_PRAY_DURATION_OF_DOHR--;
			if(JS_PRAY_DURATION_OF_DOHR < 5) {JS_PRAY_DURATION_OF__DOHR = 5; return;}
			JS_OBJ_DURATION_DOHR.innerHTML = JS_PRAY_DURATION_OF_DOHR;
			localStorage.setItem('STORAGE_DURATION_DOHR', JS_PRAY_DURATION_OF_DOHR);
			break;
		case 'ASR'	:	JS_PRAY_DURATION_OF_ASR--;
			if(JS_PRAY_DURATION_OF_ASR < 5) {JS_PRAY_DURATION_OF_ASR = 5; return;}
			JS_OBJ_DURATION_ASR.innerHTML = JS_PRAY_DURATION_OF_ASR;
			localStorage.setItem('STORAGE_DURATION_ASR', JS_PRAY_DURATION_OF_ASR);
			break;
		case 'MAGHRIB'	:	JS_PRAY_DURATION_OF_MAGHRIB--;
			if(JS_PRAY_DURATION_OF_MAGHRIB < 5) {JS_PRAY_DURATION_OF_MAGHRIB = 5; return;}
			JS_OBJ_DURATION_MAGHRIB.innerHTML = JS_PRAY_DURATION_OF_MAGHRIB;
			localStorage.setItem('STORAGE_DURATION_MAGHRIB', JS_PRAY_DURATION_OF_MAGHRIB);
			break;
		case 'ISHA'	:	JS_PRAY_DURATION_OF_ISHA--;
			if(JS_PRAY_DURATION_OF_ISHA < 5) {JS_PRAY_DURATION_OF_ISHA = 5; return;}
			JS_OBJ_DURATION_ISHA.innerHTML = JS_PRAY_DURATION_OF_ISHA;
			localStorage.setItem('STORAGE_DURATION_ISHA', JS_PRAY_DURATION_OF_ISHA);
			break;

		default	: log('err_SSS');
			break;
		}

	}

	//--------------goDURATIONcplus----------------------------------------------------------
	function goDURATIONcplus(prayNAME)
	{
		switch(prayNAME) {
		case 'FAJR'	:	JS_PRAY_DURATION_OF_FAJR++;
			if(JS_PRAY_DURATION_OF_FAJR > 40) {JS_PRAY_DURATION_OF_FAJR = 40; return;}
			JS_OBJ_DURATION_FAJR.innerHTML = JS_PRAY_DURATION_OF_FAJR;
			localStorage.setItem('STORAGE_DURATION_FAJR', JS_PRAY_DURATION_OF_FAJR);
			break;
		case 'DOHR'	:	JS_PRAY_DURATION_OF_DOHR++;
			if(JS_PRAY_DURATION_OF_DOHR > 40) {JS_PRAY_DURATION_OF__DOHR = 40; return;}
			JS_OBJ_DURATION_DOHR.innerHTML = JS_PRAY_DURATION_OF_DOHR;
			localStorage.setItem('STORAGE_DURATION_DOHR', JS_PRAY_DURATION_OF_DOHR);
			break;
		case 'ASR'	:	JS_PRAY_DURATION_OF_ASR++;
			if(JS_PRAY_DURATION_OF_ASR > 40) {JS_PRAY_DURATION_OF_ASR = 40; return;}
			JS_OBJ_DURATION_ASR.innerHTML = JS_PRAY_DURATION_OF_ASR;
			localStorage.setItem('STORAGE_DURATION_ASR', JS_PRAY_DURATION_OF_ASR);
			break;
		case 'MAGHRIB'	:	JS_PRAY_DURATION_OF_MAGHRIB++;
			if(JS_PRAY_DURATION_OF_MAGHRIB > 40) {JS_PRAY_DURATION_OF_MAGHRIB = 40; return;}
			JS_OBJ_DURATION_MAGHRIB.innerHTML = JS_PRAY_DURATION_OF_MAGHRIB;
			localStorage.setItem('STORAGE_DURATION_MAGHRIB', JS_PRAY_DURATION_OF_MAGHRIB);
			break;
		case 'ISHA'	:	JS_PRAY_DURATION_OF_ISHA++;
			if(JS_PRAY_DURATION_OF_ISHA > 180) {JS_PRAY_DURATION_OF_ISHA = 180; return;}
			JS_OBJ_DURATION_ISHA.innerHTML = JS_PRAY_DURATION_OF_ISHA;
			localStorage.setItem('STORAGE_DURATION_ISHA', JS_PRAY_DURATION_OF_ISHA);
			break;
		default	: log('err_eee');
			break;
		}
	}

	//-------------getTextBetween----------------------------------------------------------------------
	function getTextBetween(str,aaa,bbb)
	{
		var sResult = str.substring(str.indexOf(aaa) + 1, str.lastIndexOf(bbb));
		return sResult;
	}

	//-----------------------------------------------------------------------------------
	function ClearSETTINGS()
	{
		if(confirm("Are you sure to reset all settings and reload the page ?"))
		{
			localStorage.clear();
			location.reload();
		}
	}


	var JS_tempJMA = "---";
	//updateBottomInformations
	function updateBottomInformations()
	{
		var separ = "&nbsp; . &nbsp;";
		if (JS_LOCATION_NOW == "") separ = "";
		if(JS_PERSO_FIXED_JOMOA !== "")
		{
			var eJMA = ARNumbers(KonvertTimeTo12(JS_PERSO_FIXED_JOMOA));
			JS_VReJOMOA.innerHTML = JS_tempJMA + " "+eJMA;
			JS_HReJOMOA.innerHTML = JS_VReJOMOA.innerHTML;
		}
		else	{
			JS_VReJOMOA.innerHTML = '';
			JS_HReJOMOA.innerHTML = '';
		}
		document.getElementById('VReVERSIO').innerHTML	= JS_NET_ADRESS_VERSION+' &nbsp;'+separ+'&nbsp; '+JS_LOCATION_NOW;
		document.getElementById('HR_Btm0').innerHTML 	= JS_NET_ADRESS_VERSION;
		document.getElementById('HR_Btm1').innerHTML 	= JS_LOCATION_NOW;
	}

	var map =["&\#1632;","&\#1633;","&\#1634;","&\#1635;","&\#1636;","&\#1637;","&\#1638;","&\#1639;","&\#1640;","&\#1641;"];
	function ARNumbers(str)
	{
		if(!JS_ARABIC_DIGITS) return str;
		var newStr = "";
		var c = "";
		var iniStr = String(str);
		for(i=0; i < iniStr.length; i++)
		{
			c = iniStr.charAt(i);
			if (c >= '0' && c <= '9')
				newStr += map[parseInt(c)];
			else newStr += c;
		}
		return newStr;
	}

	// ProcessLANGUAGE
    var JS_LANG_NOW = 'AR';
    var eetempo = localStorage.getItem('STORAGE_LANG_NOW');
    if (eetempo) JS_LANG_NOW = eetempo;

    // Dynamically load the language script based on the selected language
    var langScript = document.createElement("script");
    langScript.src = "{{ asset('assets/languages/lang-') }}" + JS_LANG_NOW + ".js";
    langScript.onload = function() {
        ProcessLANGUAGE();
    };
    langScript.onerror = function() {
        console.error('Error loading language script: lang-' + JS_LANG_NOW + '.js');
    };
    document.head.appendChild(langScript);

    // Function to process language updates
    function ProcessLANGUAGE() {
        // Ensure JS_eLang is loaded before attempting to update the UI
        if (typeof JS_eLang !== 'undefined') {
            // Update text content for various elements
            updateTextContent('eeeTextAZAN', JS_eLang.AzanCalling);
            updateTextContent('HRTextAZAN', JS_eLang.AzanCalling);
            updateTextContent('XX_OPTION_0', JS_eLang.XX_OPTION_0);
            updateTextContent('XX_OPTION_1', JS_eLang.XX_OPTION_1);
            updateTextContent('XX_OPTION_2', JS_eLang.XX_OPTION_2);
            updateTextContent('XX_ADJUST_1', JS_eLang.XX_ADJUST_1);
            updateTextContent('XX_ADJUST_2', JS_eLang.XX_ADJUST_2);
            updateTextContent('XX_1MOREHOUR', JS_eLang.XX_1MOREHOUR);
            updateTextContent('XX_1LESSHOUR', JS_eLang.XX_1LESSHOUR);
            updateTextContent('XX_eShortAZAN', JS_eLang.XX_eShortAZAN);
            updateTextContent('XX_eShortIQAMA', JS_eLang.XX_eShortIQAMA);
            updateTextContent('XX_DIMMER_0', JS_eLang.XX_DIMMER_0);
            updateTextContent('XX_MISC_1', JS_eLang.XX_MISC_1);
            updateTextContent('XX_IQAMAASHOUR', JS_eLang.XX_IQAMAASHOUR);
            updateTextContent('XX_BIGIQAMA', JS_eLang.XX_BIGIQAMA);
            updateTextContent('W9_eCOUNTDOWNOnOff', JS_eLang.W9_eCOUNTDOWNOnOff);
            updateTextContent('VReNextPrTEXT', JS_eLang.NextPrayTime);
            updateTextContent('HReNextPrTEXT', JS_eLang.NextPrayTime);
            updateTextContent('W9_ARABICDIGITS', JS_eLang.W9_ARABICDIGITS);
            updateTextContent('W9_AYATS_ACTIVE', JS_eLang.W9_AYATS_ACTIVE);
            updateTextContent('VRBAQI2IQAMA', JS_eLang.MinutesToIqama);
            updateTextContent('HRBAQI2IQAMA', JS_eLang.MinutesToIqama);

            // Update the prayer names and days
            JS_PRAYNAMES_NOW = JS_eLang.NamesOfPrayings.split(",");
            JS_WEEK_DAYS_NOW = JS_eLang.NamesWeekDays.split(",");
            JS_MONTHS_NOW = JS_eLang.NamesMonthsMiladi.split(",");
            JS_HIJRI_NOW = JS_eLang.MenuMonthsHijri.split(",");

            if ((JS_cCODE == 'JO') || (JS_cCODE == 'PS') || (JS_cCODE == 'SY') || (JS_cCODE == 'LB') || (JS_cCODE == 'IQ')) {
                var arMiladi = "كانون ثاني,شباط,آذار,نيسان,أيار,حزيران,تمُّوز,آب,أيلول,تشرين أول,تشرين ثاني,كانون أول";
                JS_MONTHS_NOW = arMiladi.split(",");
            } else if ((JS_cCODE == 'DZ') || (JS_cCODE == 'TN')) {
                var arMiladi = "جانفي,فيفري,مارس,أفريل,ماي,جوان,جويلية,أوت,سبتمبر,أكتوبر,نوفمبر,ديسمبر";
                JS_MONTHS_NOW = arMiladi.split(",");
            }

            // Handle the left-to-right (LTR) or right-to-left (RTL) layout direction
            if ((JS_LANG_NOW == "AR") || (JS_LANG_NOW == "UR")) {
                document.getElementById('eVRDATES').style.direction = 'rtl';
                document.getElementById('HR_TopDATES').lang = 'ar';
                JS_ROOT.style.setProperty('--XX_LANG_DIR', 'rtl');
                JS_AM_TEXT = "<span class='cARPM'>صباحا</span>";
                JS_PM_TEXT = "<span class='cARPM'>مساء</span>";
            } else {
                JS_ROOT.style.setProperty('--XX_LANG_DIR', 'ltr');
                JS_ROOT.style.setProperty('--FOXEN', 1);
            }

            // Update prayer names and times for various sections
            updateTextContent('yyFAJR', JS_PRAYNAMES_NOW[0]);
            updateTextContent('yyDOHR', JS_PRAYNAMES_NOW[2]);
            updateTextContent('yyASR', JS_PRAYNAMES_NOW[3]);
            updateTextContent('yyMAGHRIB', JS_PRAYNAMES_NOW[4]);
            updateTextContent('yyISHA', JS_PRAYNAMES_NOW[5]);
            updateTextContent('xxJOMOA', JS_WEEK_DAYS_NOW[5]);
        } else {
            console.error('Language data (JS_eLang) is not loaded');
        }
    }

    // Helper function to update text content if the element exists
    function updateTextContent(elementId, content) {
        var element = document.getElementById(elementId);
        if (element) {
            element.innerHTML = content;
        }
    }



	var JS_SND_AZAN  = document.getElementById('eVoiceAzan');
	var JS_SND_FAJR	 = document.getElementById('eVoiceFajr');
	var JS_SND_SHORTAZAN = document.getElementById('shortAzan');
	var JS_SND_SHORTIQAMA = document.getElementById('shortIqama');
	var JS_SND_BEEEP = document.getElementById('eBeeep');
	var JS_SND_TIT   = document.getElementById('eTit');
	var JS_1SEC_TIMER  = setInterval('LiveTime()', (1000) );

	JS_VRMsqNAME.innerHTML 	= "توقيت مكة";
	JS_HRMsqNAME.innerHTML 	= "توقيت مكة";
	ProcessLANGUAGE();
	DisableSelectionByNAME(document.body);

	if(JS_AUDIO_AZAN_IQAMA_IS_BY_VOICE) JS_eVoiceCHECK.checked	= true;  else JS_eVoiceCHECK.checked = false;
	if(JS_SHOW_AYATS) JS_eAyatsCHECK.checked = true;  else JS_eAyatsCHECK.checked = false;
	if(JS_SHORT_AZAN_ACTIVE) 	JS_eShortAZAN.checked	= true;  else JS_eShortAZAN.checked = false;
	if(JS_SHORT_IQAMA_ACTIVE) 	JS_eShortIQAMA.checked	= true;  else JS_eShortIQAMA.checked = false;
	if(JS_FULLSCREEN_COUNTER) 	JS_eCountdownCHECK.checked 		= true;  else JS_eCountdownCHECK.checked = false;
	if(JS_1HOURMORE) 			JS_eMoreHourCHECK.checked 		= true;  else JS_eMoreHourCHECK.checked  = false;
	if(JS_1LESSMORE) 			JS_eLessHourCHECK.checked 		= true;  else JS_eLessHourCHECK.checked  = false;
	if(JS_24H_ACTIVE)   		JS_e24CHECK.checked  			= true;  else JS_e24CHECK.checked  		 = false;
	if(JS_FULL_CLOCK_ACTIVE)	JS_eFullClockCHECK.checked  	= true;  else JS_eFullClockCHECK.checked = false;
	if(JS_PAST_DIMER_ACTIVE)   	JS_ePastDimerCHECK.checked  	= true;  else JS_ePastDimerCHECK.checked = false;
	if(JS_IQAMA_FULL_TIMES)   	JS_eIQAMAasHOURCHECK.checked  	= true;  else JS_eIQAMAasHOURCHECK.checked = false;
	if(JS_BIG_IQAMA)   	JS_eBigIQAMA.checked = true;  else JS_eBigIQAMA.checked = false;
	if(JS_IQAMA_COUNTDOWN_ACTIVE)   	JS_eCOUNTDOWNOnOff.checked  	= true;  else JS_eCOUNTDOWNOnOff.checked = false;
	if(JS_DIMM_WHILE_PRAYIN_ACTIVE)   JS_eDimmCHECK.checked  	= true;  else JS_eDimmCHECK.checked  	 = false;

	execDIGITS(JS_ARABIC_DIGITS);
	UpdateFullClock(JS_FULL_CLOCK_ACTIVE);
	GoGloballyFillDATA();
	Go1MN();
	putMinutesInSETTINGS();
	updateBottomInformations();
	VerifyMP3Options();
	updateBigIQAMA();

	// on-isha-click (for_testing_only)
	// testACTIVE
	function testACTIVE()
	{
		if(JS_LOGS_ENABLED)
		{
			_maghreb = JS_nowMNTS + 1;
			//GoActiveSALAT(_maghreb);
			setTimeout(ShowThisMarqueeAndCloseAFTER, (1000), JS_DOA_SYAM_THURSDAY, 5);
		} else {
			ForceScreenSaverNOW();
		}
	}

	// 4 seconds go fill BGs of themes
	setTimeout(goFillThemesBOTH, 4000);
	window.onfocus = function() { GoGloballyFillDATA(); Go1MN(); }


	if(JS_AUDIO_AZAN_IQAMA_IS_BY_VOICE) ShowZunder('BtnAudio');

	// ManuallyGPS
	function ManuallyGPS()
	{

		var sNowGps = JS_METEO_LATITUDE + ',' + JS_METEO_LONGITUDE;

		var str = prompt("Enter Your GPS Position", sNowGps);
		if (str != null)
		{
			var tARR = str.split(',');
			JS_METEO_LATITUDE  = tARR[0];
			JS_METEO_LONGITUDE = tARR[1];

			localStorage.setItem('STORAGE_JS_METEO_LATITUDE', JS_METEO_LATITUDE);
			localStorage.setItem('STORAGE_JS_METEO_LONGITUDE', JS_METEO_LONGITUDE);
			ShowNowLatiLong();
			FetchMETEO();
		}
	}

	function getFullDynDATE(incDAYS)
	{
		var JS_TXX	= new Date();
		JS_TXX.setDate(JS_TXX.getDate() + incDAYS);

		var YearNow = JS_TXX.getFullYear();
		var mmm     = ('0'+ (JS_TXX.getMonth()+1)).slice(-2);
		var jjj     = ('0'+ JS_TXX.getDate()).slice(-2);

		return YearNow+'-'+mmm+'-'+jjj;
	}

	function getFullTHnow()
	{
		var JS_THH	= new Date();
		var YearNow = JS_THH.getFullYear();
		var hhh  	= ('0'+ JS_THH.getHours()).slice(-2);
		var fullDX = getFullDynDATE(0);
		return fullDX+'T'+hhh+':00';
	}

	var JS_mtoGPS = document.getElementById('mtoGPS');

	// METEO

	function updateGpsMETEO()
	{
		if(navigator.geolocation)
		{
			JS_mtoGPS.innerHTML = '...';
			navigator.geolocation.getCurrentPosition(iniPosition);
		}
		else
			{alert("Geolocation is Not supported by this browser.");}
	}

	function iniPosition(position)
	{
		JS_METEO_LATITUDE  = position.coords.latitude;
		JS_METEO_LONGITUDE = position.coords.longitude;
		localStorage.setItem('STORAGE_JS_METEO_LATITUDE', JS_METEO_LATITUDE);
		localStorage.setItem('STORAGE_JS_METEO_LONGITUDE', JS_METEO_LONGITUDE);
		ShowNowLatiLong();
		FetchMETEO();
	}

	function ShowNowLatiLong()
	{
		JS_mtoGPS.innerHTML = JS_METEO_LATITUDE + ',' + JS_METEO_LONGITUDE;
	}

	function FetchMETEO()
	{
		if(JS_METEO_LATITUDE == 0) {JS_VRCELSIUS.innerHTML = ""; JS_HRCELSIUS.innerHTML = ""; return;}

		fetch('https://api.open-meteo.com/v1/forecast?latitude='+JS_METEO_LATITUDE+'&longitude='+JS_METEO_LONGITUDE+'&hourly=temperature_2m,weathercode&forecast_days=3&timezone=auto')
		.then(text => text.json())
		.then(data => {
			JS_DATA_METEO = data;
			proccessMETEO(true);
		})
		.catch(error => {console.log(error);})
	}

	var JS_nowUNIT   = "";
	var JS_nowCELS   = "";
	var JS_arr7HOURS = ['T04:00','T07:00','T10:00','T13:00','T17:00','T20:00','T23:00'];

	function proccessMETEO(doLISTA)
	{
		if(!JS_DATA_METEO.timezone)
			return;
		log(JS_DATA_METEO);
		var nowTH = getFullTHnow();
		var idx = FindInArray(nowTH, JS_DATA_METEO.hourly.time);

		if(idx > -1)
		{
			var TodayARR = JS_DATA_METEO.hourly.temperature_2m.slice(0,24);
			log(TodayARR);
			JS_nowUNIT = JS_DATA_METEO.hourly_units.temperature_2m;
			JS_nowUNIT = JS_nowUNIT.replace('°', '');
			JS_nowCELS = Math.floor(JS_DATA_METEO.hourly.temperature_2m[idx]);
				//JS_VRCELSIUS.innerHTML = ARNumbers(JS_nowCELS)+"°<span class='lw'>"+JS_nowUNIT+"</span>";
			JS_VRCELSIUS.innerHTML = ARNumbers(JS_nowCELS)+"°";
			JS_HRCELSIUS.innerHTML = JS_VRCELSIUS.innerHTML;
			JS_HRMTOikon.innerHTML = JS_DATA_METEO.hourly.weathercode[idx];
			JS_HRmtoHHH.innerHTML = Math.floor(Math.max.apply(null, TodayARR)) + '°';
			JS_HRmtoLLL.innerHTML = Math.floor(Math.min.apply(null, TodayARR)) + '°';
			JS_VRmtoHHH.innerHTML = JS_HRmtoHHH.innerHTML;
			JS_VRmtoLLL.innerHTML = JS_HRmtoLLL.innerHTML;
		} else {
			JS_VRCELSIUS.innerHTML = '';
			JS_HRCELSIUS.innerHTML = '';
			JS_HRMTOikon.innerHTML = '';
			JS_HRmtoHHH.innerHTML = '';
			JS_HRmtoLLL.innerHTML = '';
			JS_VRmtoHHH.innerHTML = '';
			JS_VRmtoLLL.innerHTML = '';
		}

		if(doLISTA)
		{
			for (var k=0; k < 3; k++)
			{
				var cDY = getFullDynDATE(k);
				document.getElementById('day'+k).innerHTML = cDY;
				log(cDY);
				for (var i=0; i < 7; i++)
				{
					nowTH = cDY+JS_arr7HOURS[i];
					idx = FindInArray(nowTH, JS_DATA_METEO.hourly.time);
					var elemXD = document.getElementById('d'+k+'h'+(i+1));

					if(idx > -1)
					{
						JS_nowCELS = Math.floor(JS_DATA_METEO.hourly.temperature_2m[idx]);
						elemXD.innerHTML = JS_nowCELS+'°';
					}
					else
						elemXD.innerHTML = "-";
				}
			}
		}

	}
	// FetchData
	function FetchData()
	{
		var d = new Date();
		var randa = d.getTime();

		fetch('/?jget='+randa+'&iso='+JS_ID_MSQ+'&znder='+JS_TAWKIT_ONLINE_VERSION)
		.then(str => str.text())
		.then(data => {
			ShowAdminMSG(data);
		})
		.catch(error => {console.log(error);})
	}
	var JS_LAST_REMOTE_DATA = '';
	var JS_USER_MSG_ACTIVE  = false;

	function ShowAdminMSG(str)
	{

		if(JS_LAST_REMOTE_DATA !== str)
		{
			if( (str.indexOf('[@(',0) > -1) && (str.indexOf(')|]',0) > -1) )
			{
				var sTextNOW = str;
				sTextNOW = sTextNOW.replace('[@(','');
				sTextNOW = sTextNOW.replace(')|]','');
				JS_LAST_REMOTE_DATA = str;

				if(sTextNOW !== '')
				{
					var STRarabic = /[\u0600-\u06FF]/;
					if(STRarabic.test(sTextNOW)) JS_VRDataMESSAGE.dir='rtl';
					else JS_VRDataMESSAGE.dir='ltr';

							//log('sTextNOW : '+sTextNOW);
					var CleanText = getTextFormated(sTextNOW);
					JS_VRDataMESSAGE.innerHTML = CleanText;
					sTextNOW = CleanText.replace(/<br>/g,'&nbsp; ');
					JS_HRDataMESSAGE.innerHTML = sTextNOW;
					JS_HReAyatsHDR.style.opacity = 0;
					JS_HRDataBOX.style.opacity   = 1;
					setMsgActiveNEW();
				} else {
						// set empty box of vr n hr
					JS_VRDataMESSAGE.innerHTML = "";
					JS_HRDataMESSAGE.innerHTML = "";
					setMSGgrayICON();
					JS_HReAyatsHDR.style.opacity = 1;
					JS_HRDataBOX.style.opacity   = 0;
				}
			}
		} else {
			setMSGgrayICON();
		}
	}

	function setMSGgrayICON()
	{
		JS_VReWebMSG.style.color = 'var(--Color_LOWFOCUS)';
		JS_VReWebMSG.style.opacity = '.3';
	}

	function setMsgActiveNEW()
	{
		JS_VReWebMSG.style.color = 'var(--Color_CLOCK)';
		JS_VReWebMSG.style.opacity = '1';
	}
	function getTextFormated(sss)
	{
		const sArri = sss.split(" ");
		var nowKLN = sss;

		for (var i=0; i < sArri.length; i++)
		{
			var nowStr = sArri[i].toLowerCase();
			if( (nowStr.indexOf('http://') == 0)||(nowStr.indexOf('https:///') == 0) )
			{
				var strLC = "<a class='deko' href='xxxxx1' target='_blank'>xxxxx1</a>";
				strLC = strLC.replace(/xxxxx1/g, nowStr);
				nowKLN = nowKLN.replace(nowStr, strLC);
			}
		}

		return nowKLN;
	}

	ShowNowLatiLong();
	FetchMETEO();
	fixAyaysVerticalClock();
	setTimeout(ShowAdminMSG, 2500, JS_SITE_ADMIN_DATA);
	var JS_5minDATA = setInterval('FetchData()', (30*60000) );
</script>
@stack('scripts')