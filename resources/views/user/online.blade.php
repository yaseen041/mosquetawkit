@extends('app')
@section('title', 'Makkah')
@push('styles')
@endpush
@section('content')

<div style='position:absolute;  left:33%; top:2%; z-index:203;' >
	<audio id='eVoiceAzan' 		src={{ asset('assets/audio/audio_azan.mp3') }}></audio>
	<audio id='eVoiceFajr' 		src={{ asset('assets/audio/audio_fajr.mp3') }}></audio>
	<audio id='shortAzan' 		src={{ asset('assets/audio/short_azan.mp3') }}></audio>
	<audio id='shortIqama' 		src={{ asset('assets/audio/short_iqama.mp3') }}></audio>
	<audio id='eBeeep' 			src={{ asset('assets/audio/audio_wbeeep.wav') }}></audio>
	<audio id='eTit' 			src={{ asset('assets/audio/audio_wtit.wav') }}></audio>
</div>

<!-- eMainVERTICAL -->
<div id='eMainVERTICAL'>
	<div id='eMenuVR' onclick='ShowGlobalHELP();' >&#9776;</div>
	<!-- MOSQUE NAME --->
	<div id='VRMsqNAME'>-</div>
	<!-- DATES  --->
	<div id='eVRDATES' >
		<table align='center' cellpadding='4' cellspacing='0' border='0' width='100%' >
			<tr>
				<td height='20' width='100%' align='center' valign='top'>
					<span id='eVRYOUM'></span>&nbsp;
					<span id='_eMILADI'></span>
				</td>
			</tr>
			<tr>
				<td height='20' width='100%' align='center' valign='bottom'>
					<span id='_eHIJRI' onclick='HijriClick();'></span>
				</td>
			</tr>
		</table>
	</div>


	<img src="{{ asset('assets/logo.png') }}" id='VR_LOGO' alt='app-logo' class='VR_LOGO' />

	<!-- CLOCK MINI --->
	<div id='CLOKO_MINI_VR'>
		<div id='VR_eFullHOUR' >--:--</div>
		<div id='VR_eSECS'>--</div>
		<div id='VR_eAMPM'>--</div>
	</div>

	<!-- CLOCK FULL --->
	<div id='CLOKO_FULL_VR'><span id='VR_eFullCLOKO' >--:--</span><span id='VR_sssCLOKO' >:--</span></div>

	<!--  VR NEXT_PRAY -->
	<div id='VReNextPRAYER' class='cShdw'>---</div>
	<div id='VReNextPrTEXT'>---</div>

	<!--  VR JOMOA and SHOROUQ -->
	<div id='VReJOMOA'>-</div>
	<div id='VReSHOROUQ' onclick='TestCounter();'>-</div>
	<div id='VReDOHA'>---</div>

	<!-- VRAzanCOMES -->
	<div id='VRAzanCOMES'>
		<div id='eeeTextAZAN' >-</div>
		<div id='eeeNowNAMEazan'>-</div>
	</div>

	<!-- AYATS --->
	<div id='VReAyatsHDR' class='centro1' onclick='_GoMessages();'>
		<div id='VReAYATS' class='centro2' dir='rtl'>---</div>
	</div>

	<div id='VReDecompteBOX'>
		<div id='VReDecompteTEXT' class='cSans'>--:--</div>
		<div id='VRBAQI2IQAMA'></div>
		<div id='eVRPROGRESS0'></div>
		<div id='eVRPROGRESS1'></div>
	</div>

	<!-- VR_TITLES --->
	<div id='VR_TITLES' >
		<table align='center' cellpadding='0' cellspacing='0' border='0' width='100%' >
			<tr>
				<td align='right' height='20' width='35%' id='ewSALAT'>-</td>
				<td align='right' height='20' width='37%' id='ewAZAN' >-</td>
				<td align='right' height='20' width='28%' id='ewIQAMA'>-</td>
			</tr>
		</table>
	</div>

	<div id='VRePrayersHDR' class='cShdw'>
		<!-- LEVEL_C_1 --->
		<div class='cccROUND' id='tube0'>
			<div id='t0' class='eeeNAMEar' onclick='demoThemesNEXT();' >-</div>
			<div id='s0' class='eeeHOURar cSans' onclick='demoThemesBACK();' ></div>
			<span id='qm1' class='eeeIQAMAar cSans' onclick='demoThemesNEXT();' >-</span>
			<span id='VRdemain'></span>
		</div>
		<!-- LEVEL_C_3 --->
		<div class='cccROUND' id='tube2' >
			<div id='t2' class='eeeNAMEar' >-</div>
			<div id='s2' class='eeeHOURar cSans' ></div>
			<span id='qm3' class='eeeIQAMAar cSans' >-</span>
		</div>
		<!-- LEVEL_C_4 --->
		<div class='cccROUND' id='tube3' >
			<div id='t3' class='eeeNAMEar' onclick='LogsOnOff();' >-</div>
			<div id='s3' class='eeeHOURar cSans' ></div>
			<span id='qm4' class='eeeIQAMAar cSans' >-</span>
		</div>
		<!-- LEVEL_C_5 --->
		<div class='cccROUND' id='tube4' >
			<div id='t4' class='eeeNAMEar' >-</div>
			<div id='s4' class='eeeHOURar cSans' ></div>
			<span id='qm5' class='eeeIQAMAar cSans' >-</span>
		</div>
		<!-- LEVEL_C_6 --->
		<div class='cccROUND' id='tube5' >
			<div id='t5' class='eeeNAMEar' onclick='testACTIVE();' >-</div>
			<div id='s5' class='eeeHOURar cSans' ></div>
			<span id='qm6' class='eeeIQAMAar cSans' >-</span>
		</div>
	</div>

	<div id='VReWebMSG' onclick='DataMSGshow();'>&#9993;</div>
	<div id='VRCELSIUS' dir='ltr' onclick='proccessMETEO(false);'></div>
	<div id='VRmeteoHL'><span id='VRmtoHHH'></span> <span id='VRmtoLLL'></span></div>

	<div id='VReVERSIO'>---</div>
	<div id='VReMarqueeTEXT'>----</div>

	<img alt='تحيا فلسطين' src="{{ asset('assets/stats/flags/ps.png') }}" style='position:absolute; bottom:1.3%; left:2.5%; width:8.5%; '>

	<div id='VRDataBOX'>
		<div id='VRDataHOLDO'>
			<div id='VRDataMESSAGE'></div>
		</div>
		<div id='VRDataCLOSE' onclick='DataMSGclose();'>&#10006;</div>
	</div>

	<!-- DIM SCREEN -->
	<div id='eRIDO' class='CSS_BlackSCREEN' onclick='RemoveBlackScreen();'>
		<img id='eMobile' border='0' class='cssNoMOBILE' src="{{ asset('assets/no-mobile.png') }}" />
	</div>
	<!-- END OF mainVERTICAL -->
</div>

<!-- ==  -->
<div id='eMainHORIZONTAL'>
	<!-- Menu --->
	<div id='eMenuHR' onclick='ShowGlobalHELP();' >&#9776;</div>
	<img id='HR_LOGO' class='HR_LOGO1' alt='app-logo' src="{{ asset('assets/logo.png') }}" />

	<!-- <img id='HRx1' src='./x1.png'> -->

	<!-- TopDATES --->
	<div id='HR_TopDATES' lang='ar'>
		<span id='_HR_YOUM' onclick='AyatsMsgSwitcher();'></span>&nbsp;&nbsp;<span id='_HR_MILADI'></span> &nbsp;.&nbsp;
		<span id='_HReHIJRI' onclick='HijriClick();' ></span><br>
		<span id='HRMsqNAME'></span>
	</div>

	<div id='HRMTOikon'>WW</div>
	<div id='HRCELSIUS' class='cShdw' onclick='proccessMETEO(false);' dir='ltr'></div>
	<div id='HRmeteoHL'><span id='HRmtoHHH'></span>&nbsp;<span id='HRmtoLLL'></span></div>

	<!-- HR CLOCK MINI --->
	<div id="CLOKO_MINI_HR" style="visibility: visible;">
		<div id="HR_eFullHOUR"></div>
		<div id="HR_eSECS">15</div>
		<div id="HR_eAMPM"><span class="cARPM">مساء</span></div>
	</div>

	<!-- CLOCK FULL --->
	<div id="CLOKO_FULL_HR" style="visibility: hidden;">
		<span id="HR_eFullCLOKO"></span><span id="HR_sssCLOKO">:21</span>
	</div>

	<!-- HR AYATS 	--->
	<div id='HReAyatsHDR' class='centro1' onclick='_GoMessages();'>
		<div id='HReAYATS' class='centro2' dir='rtl'></div>
	</div>

	<!-- HRDataBOX 	--->
	<div id='HRDataBOX' class='centro1'>
		<div id='HRDataMESSAGE' class='centro2' dir='rtl'></div>
	</div>

	<div id='HReDecompteBOX'>
		<div id='HReDecompteTEXT' class='cSans'>--:--</div>
		<div id='HRBAQI2IQAMA'></div>
		<div id='eHRPROGRESS0'></div>
		<div id='eHRPROGRESS1'></div>
	</div>

	<!--  HR NEXT_PRAY -->
	<div id='HReNextPRAYER' class='cShdw'>---</div>
	<div id='HReNextPrTEXT'>---</div>

	<!-- HRAzanCOMES -->
	<div id='HRAzanCOMES'>
		<div id='HRTextAZAN' ></div>
		<div id='HHHNowNAMEazan'>-</div>
	</div>

	<!--  HR JOMOA AND SHOROUQ -->
	<div id='HReJOMOA'></div>
	<div id='HReSHOROUQ' onclick='TestCounter();'>-</div>
	<div id='HReDOHA'>---</div>

	<!-- HORIZONTAL_ALONGO --->
	<div id='HahowaALONGO'>
		<table id='alongotablo' dir='rtl' cellpadding='3' cellspacing='9' border='0' width='100%' >
			<tr>
				<td id='W333HRtube0' width='20%'>
					<div id='HReFIXER' >&nbsp;</div>
					<div id='W333Ht0' class='wwwNAMEar' onclick='demoThemesNEXT();' >---</div>
					<div id='W333H_s0' class='wwwHOUR cSans' onclick='demoThemesBACK();' ></div>
					<div id='W333HRqm1' class='wwwIQAMA cSans' onclick='demoThemesNEXT();' >-</div>
					<div id='W333_HRdemain' class='wwwDemain cSans' ></div>
				</td>
				<td id='W333HRtube2' width='20%'>
					<div id='W333Ht2' class='wwwNAMEar'>---</div>
					<div id='W333H_s2' class='wwwHOUR cSans' ></div>
					<div id='W333HRqm3' class='wwwIQAMA cSans' >-</div>
				</td>
				<td id='W333HRtube3' width='20%'>
					<div id='W333Ht3' class='wwwNAMEar' onclick='LogsOnOff();'>---</div>
					<div id='W333H_s3' class='wwwHOUR cSans'></div>
					<div id='W333HRqm4' class='wwwIQAMA cSans' >-</div>
				</td>
				<td id='W333HRtube4' width='20%'>
					<div id='W333Ht4' class='wwwNAMEar'>--- </div>
					<div id='W333H_s4' class='wwwHOUR cSans' ></div>
					<div id='W333HRqm5' class='wwwIQAMA cSans' >-</div>
				</td>
				<td id='W333HRtube5' width='20%'>
					<div id='W333Ht5' class='wwwNAMEar' onclick='testACTIVE();'>---</div>
					<div id='W333H_s5' class='wwwHOUR cSans'></div>
					<div id='W333HRqm6' class='wwwIQAMA cSans' >-</div>
				</td>
			</tr>
		</table>
	</div>

	<div id='HReMarqueeTEXT'>----</div>
	<div id='HR_Btm0'>---</div>
	<div id='HR_Btm1' onclick='TestCounter();'>---</div>

	<img alt='تحيا فلسطين' src="{{ asset('assets/stats/flags/ps.png') }}" style='position:absolute; bottom:1%; left:18%; width:4%; '>

	<!-- HReRIDO-->
	<div id='HReRIDO' class='CSS_BlackSCREEN' onclick='RemoveBlackScreen();'>
		<img id='HReMobile' border='0' class='cssNoMOBILE' src="{{ asset('assets/no-mobile.png') }}" />
	</div>

	<!-- HRCONTO FULLSCREEN COUNTER -->
	<div id='HRCONTO' class='CSS_FullCONTO' onclick='CloseFullCONTO();'>
		<div id='ELBLACK'>&nbsp;</div>
		<div id='ELHOLDO'>
			<div id='ELAYATS'></div>
			<div id='ELCONTO'></div>
			<div id='ELKLOKO'></div>
		</div>
	</div>
	<!-- END OF mainHORIZONTAL -->
</div>

<div id='TheAlertIQAMA'></div>

<button id='BtnAudio' onclick='forceAudio();'>
	Azan Voice is Activated in Settings
	<br> Click Here To Enable Sounds in Browser
</button>

<!-- HELP SCREEN -->
<div id='eHELPSCREEN' class='cssHelpSCREEN cssColorLITE' >
	<div align='center' class='cssSET'>
		<div style='position:absolute; right:5%; top:35%;' ><span onclick="SetScroll('eMenuGRP', 0);">&#9650;</span> &nbsp;  <span onclick="SetScroll('eMenuGRP', 1);">&#9660;</span></div>
	</div>
	<div id='eMenuGRP' align='right' dir='rtl' class='cssMenuGRP'>

		<div class='cssMenuBTN' dir='ltr' id='LangsLINES'>
			<span title='EN' class='CSS_EN33'  onclick='getLANGUAGE(this);'>EN</span> .
			<span title='FR' class='CSS_EN33'  onclick='getLANGUAGE(this);'>FR</span> .
			<span title='DE' class='CSS_EN33'  onclick='getLANGUAGE(this);'>DE</span> .
			<span title='ES' class='CSS_EN33'  onclick='getLANGUAGE(this);'>ES</span> .
			<span title='IT' class='CSS_EN33'  onclick='getLANGUAGE(this);'>IT</span> .
			<span title='AR' class='CSS_AR33'  onclick='getLANGUAGE(this);'>العربية</span>
			<br>
			<span title='SE' class='CSS_EN33'  onclick='getLANGUAGE(this);'>SE</span> .
			<span title='ID' class='CSS_EN33'  onclick='getLANGUAGE(this);'>ID</span> .
			<span title='TR' class='CSS_EN33'  onclick='getLANGUAGE(this);'>TR</span> .
			<span title='BN' class='CSS_AR44'  onclick='getLANGUAGE(this);'>বাংলা</span> .
			<span title='UR' class='CSS_AR33'  onclick='getLANGUAGE(this);'>اردو</span> .
			<span title='IN' class='CSS_EN33'  onclick='getLANGUAGE(this);'>हिन्दी</span>
		</div>

		<div class='cssMenuBTN' id='AAA_FullSCREEN'		onclick="CloseHELP(); goFullSCREEN();">-</div>
		<div class='cssMenuBTN' id='AAA_set_THEMES' 	onclick="CloseHELP(); ShowZunder('e_THEMES');">-</div>
		<div class='cssMenuBTN' id='AAA_e_OPTIONS' 		onclick="CloseHELP(); ShowZunder('e_OPTIONS');">-</div>
		<div class='cssMenuBTN' id='AAA_e_FOXEN' 		onclick="CloseHELP(); ShowZunder('e_FOXEN');">-</div>
		<div class='cssMenuBTN' id='AAA_BLACKSCREEN' 	onclick="CloseHELP(); ShowZunder('e_BLACKSCREEN');">-</div>
		<div class='cssMenuBTN' id='AAA_HijriClick' 	onclick="CloseHELP(); HijriHELP();">-</div>
		<div class='cssMenuBTN' id='AAA_METEO' 			onclick="CloseHELP(); ShowZunder('e_METEO');">-</div>
		<div class='cssMenuBTN' dir='ltr' style='text-align:center;'>
			<br>
			<div style='letter-spacing:0.05em;' >
				<span class='eLiter'>Tawkit Online Version</span><br><br>
				<span class='CSS_EN33' onclick='ClearSETTINGS();'>RESET</span>&nbsp;.
				<span class='CSS_EN33' onclick='location.reload();'>RELOAD</span>&nbsp;.
				<span class='CSS_EN33' onclick="window.open('https://www.tawkit.net/contact/', '_blank');">CONTACT</span><br><br>
				<span class='CSS_EN33' onclick="window.open('https://www.tawkit.net/', '_blank');">&copy; TAWKIT.NET</span><br>
			</div>
			<br>
		</div>
	</div>
</div>

<!-- THEMES -->
<div id='e_THEMES' class='cssModelSettingsWINDOW cssColorLITE' >
	<div class='cssTitlesHOLDER'>
		<div class='cssWindowTITLE' ></div>
		<div class='cssWindowCLOSE' >
			<span onclick="SetScroll('scroTHEMES', 0);">&#9650;</span>
			&nbsp;
			<span onclick="SetScroll('scroTHEMES', 1);">&#9660;</span>
			&nbsp;&nbsp;&nbsp;
			<span onclick='closeThis(this.parentNode);'>&#10006;</span>
		</div>
	</div>

	<div id='scroTHEMES' class='cssSettingsDATA'>
		<!--  VR THEMES  -->
		<div id='sssVR' style='display:none;'>
			<table align='center' cellpadding='0' cellspacing='3' border='0' width='100%'>
				<tr>
					<td height='40' width='16%'>
						<div id='tmV_0' class='CSS_VR_THEMER' onclick='changeBG(0); CloseTHEMES();'>0</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmV_1' class='CSS_VR_THEMER' onclick='changeBG(1); CloseTHEMES();'>1</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmV_2' class='CSS_VR_THEMER' onclick='changeBG(2); CloseTHEMES();'>2</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmV_3' class='CSS_VR_THEMER' onclick='changeBG(3); CloseTHEMES();'>3</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmV_4' class='CSS_VR_THEMER' onclick='changeBG(4); CloseTHEMES();'>4</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmV_5' class='CSS_VR_THEMER' onclick='changeBG(5); CloseTHEMES();'>5</div>
					</td>
				</tr>
				<tr>
					<td height='40' width='16%'>
						<div id='tmV_6' class='CSS_VR_THEMER' onclick='changeBG(6); CloseTHEMES();'>6</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmV_7' class='CSS_VR_THEMER' onclick='changeBG(7); CloseTHEMES();'>7</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmV_8' class='CSS_VR_THEMER' onclick='changeBG(8); CloseTHEMES();'>8</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmV_9' class='CSS_VR_THEMER' onclick='changeBG(9); CloseTHEMES();'>9</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmV_10' class='CSS_VR_THEMER' onclick='changeBG(10); CloseTHEMES();'>10</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmV_11' class='CSS_VR_THEMER' onclick='changeBG(11); CloseTHEMES();'>11</div>
					</td>
				</tr>
				<tr>
					<td height='40' width='16%'>
						<div id='tmV_12' class='CSS_VR_THEMER' onclick='changeBG(12); CloseTHEMES();'>12</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmV_13' class='CSS_VR_THEMER' onclick='changeBG(13); CloseTHEMES();'>13</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmV_14' class='CSS_VR_THEMER' onclick='changeBG(14); CloseTHEMES();'>14</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmV_15' class='CSS_VR_THEMER' onclick='changeBG(15); CloseTHEMES();'>15</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmV_16' class='CSS_VR_THEMER' onclick='changeBG(16); CloseTHEMES();'>16</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmV_17' class='CSS_VR_THEMER' onclick='changeBG(17); CloseTHEMES();'>17</div>
					</td>
				</tr>
			</table>
		</div>

		<!--  HR THEMES  -->
		<div id='sssHR' style='display:block;'>
			<table align='center' cellpadding='0' cellspacing='3' border='0' width='100%' >
				<tr>
					<td height='40' width='16%'>
						<div id='tmH_0' class='CSS_HR_THEMER' onclick='changeBG(0); CloseTHEMES();'>0</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmH_1' class='CSS_HR_THEMER' onclick='changeBG(1); CloseTHEMES();'>1</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmH_2' class='CSS_HR_THEMER' onclick='changeBG(2); CloseTHEMES();'>2</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmH_3' class='CSS_HR_THEMER' onclick='changeBG(3); CloseTHEMES();'>3</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmH_4' class='CSS_HR_THEMER' onclick='changeBG(4); CloseTHEMES();'>4</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmH_5' class='CSS_HR_THEMER' onclick='changeBG(5); CloseTHEMES();'>5</div>
					</td>
				</tr>
				<tr>
					<td height='40' width='16%'>
						<div id='tmH_6' class='CSS_HR_THEMER' onclick='changeBG(6); CloseTHEMES();'>6</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmH_7' class='CSS_HR_THEMER' onclick='changeBG(7); CloseTHEMES();'>7</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmH_8' class='CSS_HR_THEMER' onclick='changeBG(8); CloseTHEMES();'>8</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmH_9' class='CSS_HR_THEMER' onclick='changeBG(9); CloseTHEMES();'>9</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmH_10' class='CSS_HR_THEMER' onclick='changeBG(10); CloseTHEMES();'>10</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmH_11' class='CSS_HR_THEMER' onclick='changeBG(11); CloseTHEMES();'>11</div>
					</td>
				</tr>
				<tr>
					<td height='40' width='16%'>
						<div id='tmH_12' class='CSS_HR_THEMER' onclick='changeBG(12); CloseTHEMES();'>12</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmH_13' class='CSS_HR_THEMER' onclick='changeBG(13); CloseTHEMES();'>13</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmH_14' class='CSS_HR_THEMER' onclick='changeBG(14); CloseTHEMES();'>14</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmH_15' class='CSS_HR_THEMER' onclick='changeBG(15); CloseTHEMES();'>15</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmH_16' class='CSS_HR_THEMER' onclick='changeBG(16); CloseTHEMES();'>16</div>
					</td>
					<td height='40' width='16%'>
						<div id='tmH_17' class='CSS_HR_THEMER' onclick='changeBG(17); CloseTHEMES();'>17</div>
					</td>
				</tr>
			</table>
		</div>

		<!--  ++  -->
		<div class='CSS_X_LANG_DIRECTION' >
			<table align='center' cellpadding='3' cellspacing='0' border='0' width='100%' class='cccTBL1' >
				<tr>
					<td height='20' width='100%' align='center' style='font-size:70%;' id='XX_MISC_1'></td>
				</tr>
			</table>
		</div>
	</div>
</div>

<!-- OPTIONS -->
<div id='e_OPTIONS' class='cssModelSettingsWINDOW cssColorLITE' >

	<div class='cssTitlesHOLDER'>
		<div class='cssWindowTITLE'></div>
		<div class='cssWindowCLOSE'>
			<span class='hnd' onclick="SetScroll('scroOPTIONS', 0);">&#9650;</span>
			&nbsp;
			<span class='hnd' onclick="SetScroll('scroOPTIONS', 1);">&#9660;</span>
			&nbsp;&nbsp;&nbsp;
			<span onclick='closeThis(this.parentNode);'>&#10006;</span>
		</div>
	</div>

	<div id='scroOPTIONS' class='cssSettingsDATA CSS_X_LANG_DIRECTION' >

		<!-- 24H ON-OFF -->
		<table align='center' cellpadding='2' cellspacing='0' border='0' width='100%' class='' >
			<tr>
				<td height='20' width='100%' align='' valign='center'>
					<input type='checkbox' id='e24CHECK' class='cssCheckBOX' onchange='Set24OnOff()'> &nbsp;
					<label for='e24CHECK' id='XX_OPTION_0'> </label>
				</td>
			</tr>
			<!-- FULL CLOCK -->
			<tr>
				<td height='20' width='100%' align='' valign='center'>
					<input type='checkbox' id='eFullClockCHECK' class='cssCheckBOX' onchange='SetFullClockOnOff()'>
					&nbsp;
					<label for='eFullClockCHECK'>
						<span id='XX_OPTION_1'>---</span>
						"00:00:00"
					</label>
				</td>
			</tr>
			<!-- DIM PAST TIMES -->
			<tr>
				<td height='20' width='100%' align='' valign='center'>
					<input type='checkbox' id='ePastDimerCHECK' class='cssCheckBOX' onchange='SetPastDimerOnOff()'>
					&nbsp;
					<label for='ePastDimerCHECK' id='XX_OPTION_2'>---</label>
				</td>
			</tr>
			<!-- IQAMA BIGGER -->
			<tr>
				<td height='20' width='100%' align='' valign='center'>
					<input type='checkbox' id='eBigIQAMA' class='cssCheckBOX' onchange='SetIqamaBIG()'> &nbsp; <label for='eBigIQAMA' id='XX_BIGIQAMA'>---</label>
				</td>
			</tr>
			<!-- IQAMA FULLE TIME -->
			<tr>
				<td height='20' width='100%' align='' valign='center'>
					<input type='checkbox' id='eIQAMAasHOUR' class='cssCheckBOX' onchange='SetIqamaFullTimes()'> &nbsp; <label for='eIQAMAasHOUR' id='XX_IQAMAASHOUR'>---</label>
				</td>
			</tr>
			<!--  COUNTDOWN OnOff -->
			<tr>
				<td height='20' width='100%' align='' valign='center'>
					<input type='checkbox' id='eCOUNTDOWNOnOff' class='cssCheckBOX' onchange='SetCOUNTDOWNOnOff()'> &nbsp; <label for='eCOUNTDOWNOnOff' id='W9_eCOUNTDOWNOnOff'>---</label>
				</td>
			</tr>
			<!-- SET COUNTER BIG -->
			<tr>
				<td height='20' width='100%' align='' valign='center'>
					<input type='checkbox' id='eCountdownCHECK' class='cssCheckBOX' onchange='SetCounterBIG()'> &nbsp; <label for='eCountdownCHECK' id='XX_ADJUST_1'> --- </label>
				</td>
			</tr>
			<!-- ARABIC DIGITS -->
			<tr>
				<td height='20' width='100%' align='' valign='center'>
					<input type='checkbox' id='eArabicDIGITS' class='cssCheckBOX' onchange='SetArabicDIGITSOnOff()'> &nbsp; <label for='eArabicDIGITS' id='W9_ARABICDIGITS'> --- </label>
				</td>
			</tr>
			<!-- AYATS ON OF -->
			<tr>
				<td height='20' width='100%' align='' valign='center'>
					<input type='checkbox' id='eAyatsCHECK' class='cssCheckBOX' onchange='SetAYATSOnOff()'> &nbsp; <label for='eAyatsCHECK' id='W9_AYATS_ACTIVE'> --- </label>
				</td>
			</tr>
			<!-- MP3 -->
			<tr><td><hr></td></tr>
			<tr>
				<td height='20' width='100%'  valign='center'>
					<input type='checkbox' id='eVoiceCHECK' class='cssCheckBOX' onchange='SetAudioVoiceOnOff()'> &nbsp; <label for='eVoiceCHECK' id='XX_ADJUST_2'> --- </label>
				</td>
			</tr>
			<tr>
				<td height='20' width='100%'  valign='center'>
					<input type='checkbox' id='eShortAZAN' class='cssCheckBOX' onchange='SetShortAZANOnOff()'> &nbsp; <label for='eShortAZAN' id='XX_eShortAZAN'> --- </label>
				</td>
			</tr>
			<tr>
				<td height='20' width='100%'  valign='center'>
					<input type='checkbox' id='eShortIQAMA' class='cssCheckBOX' onchange='SetShortIQAMAOnOff()'> &nbsp; <label for='eShortIQAMA' id='XX_eShortIQAMA'> --- </label>
				</td>
			</tr>
			<!--   -->
			<tr>
				<td height='20' width='100%'  valign='center'>
					<input type='checkbox' id='eMoreHourCHECK' class='cssCheckBOX' onchange='Set1MoreHOUR()'> &nbsp; <label for='eMoreHourCHECK' id='XX_1MOREHOUR'> --- </label>
				</td>
			</tr>
			<!--  -->
			<tr>
				<td height='20' width='100%'  valign='center'>
					<input type='checkbox' id='eLessHourCHECK' class='cssCheckBOX' onchange='Set1LessHOUR()'> &nbsp; <label for='eLessHourCHECK' id='XX_1LESSHOUR'> --- </label>
				</td>
			</tr>
		</table>

		<br><br><br><br>
	</div>
</div>

<!-- BLACK SCREEN PRAYING DURATION -->
<div id='e_BLACKSCREEN' class='cssModelSettingsWINDOW cssColorLITE' >

	<div class='cssTitlesHOLDER'>
		<div class='cssWindowTITLE' ></div>
		<div class='cssWindowCLOSE' >
			<span onclick="SetScroll('scroBLACKS', 0);">&#9650;</span>
			&nbsp;
			<span onclick="SetScroll('scroBLACKS', 1);">&#9660;</span>
			&nbsp;&nbsp;&nbsp;
			<span onclick='closeThis(this.parentNode);'>&#10006;</span>
		</div>
	</div>

	<div id='scroBLACKS' class='cssSettingsDATA CSS_X_LANG_DIRECTION'>

		<!-- DIMM SCREEN ON-OFF +++++++ -->
		<table align='center' cellpadding='5' cellspacing='0' border='0' width='100%' >
			<tr>
				<td height='20' width='100%' valign='center'>
					<input type='checkbox' id='eDimmCHECK' class='cssCheckBOX' onchange='SetDimmOnOff()'>
					&nbsp;
					<label for='eDimmCHECK' id='XX_DIMMER_0'></label>
				</td>
			</tr>
		</table>

		<!-- JOMOA_DIM_SETTINGS+++++++ -->
		<table align='center' cellpadding='5' cellspacing='0' border='0' width='100%' class='cccTBL1' >
			<tr>
				<td height='20' width='17%' id='xxJOMOA'> JOMOA  </td>
				<td height='20' width='63%' align='right' id='XX_DIMMER_3'></td>
				<td height='20' width='12%' align='center' id='jjjJOMOA_BEFORE_DOHR'>0</td>
				<td height='20' width='4%' align='left'>
					<button class='cccADJUSTER' onclick="JomoaBEFOREminus()">-</button>
				</td>
				<td height='20' width='4' align='left'>
					<button class='cccADJUSTER' onclick="JomoaBEFOREplus()">+</button>
				</td>
			</tr>
			<tr>
				<td height='20' width='17%' align='left'></td>
				<td height='20' width='63%' align='right' id='XX_DIMMER_4'></td>
				<td height='20' width='12%' align='center' id='jjjJOMOA_AFTER_DOHR'>0</td>
				<td height='20' width='4%' align='left'>
					<button class='cccADJUSTER' onclick="JomoaAFTERminus()">-</button>
				</td>
				<td height='20' width='4%' align='left'>
					<button class='cccADJUSTER' onclick="JomoaAFTERplus()">+</button>
				</td>
			</tr>
		</table>

		<br>

		<!-- DURATION OF PRAYING -->
		<div align='center' id='XX_DIMMER_5' style='color:white;' ></div>

		<!-- FAJR DURATION -->
		<table align='center' cellpadding='5' cellspacing='0' border='0' width='80%' class='cccTBL1' >
			<tr>
				<td height='20' width='50%' align='' id='yyFAJR'>  </td>
				<td height='20' width='20%' align='left' id='DURATION_FAJR'>0</td>
				<td height='20' width='15%' align='left'>
					<button class='cccADJUSTER' onclick="goDURATIONminus('FAJR')">-</button>
				</td>
				<td height='20' width='15%' align='left'>
					<button class='cccADJUSTER' onclick="goDURATIONcplus('FAJR')">+</button>
				</td>
			</tr>
		</table>

		<!-- DOHR DURATION+++++++ -->
		<table align='center' cellpadding='5' cellspacing='0' border='0' width='80%' class='cccTBL1' >
			<tr>
				<td height='20' width='50%' align='' id='yyDOHR'>  </td>
				<td height='20' width='20%' align='left' id='DURATION_DOHR'>0</td>
				<td height='20' width='15%' align='left'>
					<button class='cccADJUSTER' onclick="goDURATIONminus('DOHR')">-</button>
				</td>
				<td height='20' width='15%' align='left'>
					<button class='cccADJUSTER' onclick="goDURATIONcplus('DOHR')">+</button>
				</td>
			</tr>
		</table>

		<!-- ASR DURATION   -->
		<table align='center' cellpadding='5' cellspacing='0' border='0' width='80%' class='cccTBL1' >
			<tr>
				<td height='20' width='50%' align='' id='yyASR'>  </td>
				<td height='20' width='20%' align='left' id='DURATION_ASR'>0</td>
				<td height='20' width='15%' align='left'>
					<button class='cccADJUSTER' onclick="goDURATIONminus('ASR')">-</button>
				</td>
				<td height='20' width='15%' align='left'>
					<button class='cccADJUSTER' onclick="goDURATIONcplus('ASR')">+</button>
				</td>
			</tr>
		</table>

		<!-- MAGHRIB DURATION   -->
		<table align='center' cellpadding='5' cellspacing='0' border='0' width='80%' class='cccTBL1' >
			<tr>
				<td height='20' width='50%' align='' id='yyMAGHRIB'>  </td>
				<td height='20' width='20%' align='left' id='DURATION_MAGHRIB'>0</td>
				<td height='20' width='15%' align='left'>
					<button class='cccADJUSTER' onclick="goDURATIONminus('MAGHRIB')">-</button>
				</td>
				<td height='20' width='15%' align='left'>
					<button class='cccADJUSTER' onclick="goDURATIONcplus('MAGHRIB')">+</button>
				</td>
			</tr>
		</table>

		<!-- ISHA DURATION   -->
		<table align='center' cellpadding='5' cellspacing='0' border='0' width='80%' class='cccTBL1' >
			<tr>
				<td height='20' width='50%' align='' id='yyISHA'>  </td>
				<td height='20' width='20%' align='left' id='DURATION_ISHA'>0</td>
				<td height='20' width='15%' align='left'>
					<button class='cccADJUSTER' onclick="goDURATIONminus('ISHA')">-</button>
				</td>
				<td height='20' width='15%' align='left'>
					<button class='cccADJUSTER' onclick="goDURATIONcplus('ISHA')">+</button>
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- FOXEN -->
<div id='e_FOXEN' class='cssModelSettingsWINDOW cssColorLITE' >

	<div class='cssTitlesHOLDER'>
		<div class='cssWindowTITLE' ></div>
		<div class='cssWindowCLOSE' >
			<span onclick="SetScroll('scroFOXEN', 0);">&#9650;</span>
			&nbsp;
			<span onclick="SetScroll('scroFOXEN', 1);">&#9660;</span>
			&nbsp;&nbsp;&nbsp;
			<span onclick='closeThis(this.parentNode);'>&#10006;</span>
		</div>
	</div>

	<div id='scroFOXEN' class='cssSettingsDATA'>
		<p align='center'>
			Select a FONT TO USE in application <br>
			<span lang='ar'>حدد خطا لاستخدامه في التطبيق</span>
		</p>
		<table align='center' cellpadding='3' cellspacing='0' border='0' width='80%' >
			<tr>
				<td height='40' width='50%' align='left' valign='top'>
					<input type='radio' onclick='goFontTHIS(this);' id='Amiri' name='Foxens' value='1.0'>
					<label for='Amiri'> Amiri</label>
					<br>
					<input type='radio' onclick='goFontTHIS(this);' id='Andalus' name='Foxens' value='1.0'>
					<label for='Andalus'> Andalus</label>
					<br>
					<input type='radio' onclick='goFontTHIS(this);' id='STC' name='Foxens' value='1.0'>
					<label for='STC'> STC Regular</label>
					<br>
				</td>
				<td height='40' width='50%' align='left' valign='top'>
					<input type='radio' onclick='goFontTHIS(this);' id='KSA' name='Foxens' value='1.0'>
					<label for='KSA'> KSA Regular</label>
					<br>
					<input type='radio' onclick='goFontTHIS(this);' id='Almarai' name='Foxens' value='0.85'>
					<label for='Almarai'> Almarai</label>
					<br>
					<input type='radio' onclick='goFontTHIS(this);' id='ArefRuqaa' name='Foxens' value='1.0'>
					<label for='ArefRuqaa'> Aref Ruqaa</label>
					<br>
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- METEO -->
<div id='e_METEO' class='cssModelSettingsWINDOW cssColorLITE' >

	<div class='cssTitlesHOLDER'>
		<div class='cssWindowTITLE' ></div>
		<div class='cssWindowCLOSE' >
			<span onclick="SetScroll('scroMETEO', 0);">&#9650;</span>
			&nbsp;
			<span onclick="SetScroll('scroMETEO', 1);">&#9660;</span>
			&nbsp;&nbsp;&nbsp;
			<span onclick='closeThis(this.parentNode);'>&#10006;</span>
		</div>
	</div>

	<div id='scroMETEO' class='cssSettingsDATA'>
		<table align='center' cellpadding='1' cellspacing='0' border='0' width='90%' >
			<tr>
				<td height='20' width='100%' id='xxMETEO' align='center'> METEO </td>
			</tr>
			<tr>
				<td height='20' width='100%' align='center'>
					<button onclick='updateGpsMETEO();'>GPS Position By Browser</button> <br>
					<button onclick='ManuallyGPS();'>GPS Position Manually</button>
				</td>
			</tr>
		</table>
		<br>
		<table align='center' cellpadding='1' cellspacing='0' border='0' width='100%'>
			<tr>
				<td height='20' width='100%' align='center'>
					Weather Forecasts By GPS Position : <br><span id='mtoGPS'></span>
				</td>
			</tr>
		</table>
		<br>
		<table align='center' cellpadding='3' cellspacing='0' border='0' width='100%' >
			<tr>
				<td height='20' width='30%' align='left'>Day</td>
				<td height='20' width='10%' align='left'>04H</td>
				<td height='20' width='10%' align='left'>07H</td>
				<td height='20' width='10%' align='left'>10H</td>
				<td height='20' width='10%' align='left'>13H</td>
				<td height='20' width='10%' align='left'>17H</td>
				<td height='20' width='10%' align='left'>20H</td>
				<td height='20' width='10%' align='left'>23H</td>
			</tr>
			<tr>
				<td height='20' width='30%' align='left' id='day0'>_</td>
				<td height='20' width='10%' align='left' id='d0h1'>_</td>
				<td height='20' width='10%' align='left' id='d0h2'>_</td>
				<td height='20' width='10%' align='left' id='d0h3'>_</td>
				<td height='20' width='10%' align='left' id='d0h4'>_</td>
				<td height='20' width='10%' align='left' id='d0h5'>_</td>
				<td height='20' width='10%' align='left' id='d0h6'>_</td>
				<td height='20' width='10%' align='left' id='d0h7'>_</td>
			</tr>
			<tr>
				<td height='20' width='30%' align='left' id='day1'>_</td>
				<td height='20' width='10%' align='left' id='d1h1'>_</td>
				<td height='20' width='10%' align='left' id='d1h2'>_</td>
				<td height='20' width='10%' align='left' id='d1h3'>_</td>
				<td height='20' width='10%' align='left' id='d1h4'>_</td>
				<td height='20' width='10%' align='left' id='d1h5'>_</td>
				<td height='20' width='10%' align='left' id='d1h6'>_</td>
				<td height='20' width='10%' align='left' id='d1h7'>_</td>
			</tr>
			<tr>
				<td height='20' width='30%' align='left' id='day2'>_</td>
				<td height='20' width='10%' align='left' id='d2h1'>_</td>
				<td height='20' width='10%' align='left' id='d2h2'>_</td>
				<td height='20' width='10%' align='left' id='d2h3'>_</td>
				<td height='20' width='10%' align='left' id='d2h4'>_</td>
				<td height='20' width='10%' align='left' id='d2h5'>_</td>
				<td height='20' width='10%' align='left' id='d2h6'>_</td>
				<td height='20' width='10%' align='left' id='d2h7'>_</td>
			</tr>
		</table>

		<div align='center' style='padding:30px;' >
			Weather forecasts service by :<br> Open-Meteo.com
		</div>
	</div>
</div>
@endsection

@push('scripts')

@endpush