var JS_GPS_CALC_METHOD 	= 'MAKKAH';
var JS_GPS_ASR_TYPE 	= 'Standard';
var JS_GPS_CUSTOM_FAJR 	= '17.5';
var JS_GPS_CUSTOM_ISHA 	= '15';
var JS_GPS_FULL_CODE	= '';

function editGPS() 
{
	var strMORE = "\n\n";
	strMORE += "A | B | C | D | E  \n\n";
	strMORE += "A = Country CODE \n";
	strMORE += "B = City NAME \n";
	strMORE += "C = Latitude \n";
	strMORE += "D = Longitude \n";
	strMORE += "E = Time Zone : UTC \n\n";
	alert("GPS Informations " + strMORE);
}

function uLoadTheCountries()
{
	var JS_uuuCOUNTRY = document.getElementById('mCOUNTRY');
	var strNow 		  = '';
	var newOPTO = new Option("", "");
	JS_uuuCOUNTRY.append(newOPTO);
	for (var i=0; i < JS_WORLD_COUNTRIES.length; i++)
	{
		strNow = JS_WORLD_COUNTRIES[i];
		var tmpARR   = strNow.split("|");
		var cntCODE  = tmpARR[0];
		var cntNAME  = tmpARR[1];
		newOPTO    = new Option(cntNAME, strNow);
		JS_uuuCOUNTRY.append(newOPTO);
	}
	log('----END_uLoadTheCountries');
	var xOPTO    = new Option('', '');
	JS_uuuCITY.append(xOPTO);
}

function emptyCities()
{
	JS_uuuCITY.innerHTML = '';

	var newOPTO = new Option("", "");
	JS_uuuCITY.append(newOPTO);
	uCityCHANGE(JS_uuuCITY);
}


var JS_GPS_CALCULATION_CITIES_NOW = [];
function uCountryCHANGE(obj) 
{
	var eee_STR = obj.options[obj.selectedIndex].value;
	JS_CITIES_DATA = "";
	emptyCities();
	if(eee_STR == '')
	{
		return;
	}
	var tmpARR   = eee_STR.split("|");
	var eee_CODE  = tmpARR[0];
	var JS_VERSIO = new Date().getTime();
	JS_GPS_CALCULATION_CITIES_NOW = [];
	var tempIniFile =  "assets/admin/geoDB/" + eee_CODE + ".js";
	var jsRealFilesFile = "assets/admin/data/" + eee_CODE + "/" + eee_CODE + ".js";
	log(jsRealFilesFile);
	uLoadRealFILES(jsRealFilesFile);
	setTimeout(uLoadGpsCitiesAsJS, 1200, tempIniFile);
}

var JS_CITIES_DATA = ""; 
function uLoadRealFILES(cJsFile)
{
	var JS_script = document.createElement("script");
	JS_script.type = "text/javascript";
	JS_script.src = cJsFile;
	JS_script.onload = function(){
		log("A_uLoadRealFILES_end.");
	};
	document.body.appendChild(JS_script);
}

function uLoadGpsCitiesAsJS(iniFile)
{
	var JS_script 		= document.createElement("script");
	JS_script.type 		= "text/javascript";
	JS_script.src 		= iniFile;
	JS_script.onload	= function(){
		log("B_GpsCities_end.");
		uLoadGpsCitiesNOW();
	};
	document.body.appendChild(JS_script);
}

function uLoadGpsCitiesNOW()
{
	var strNow = '';
	emptyCities();
	var JSoptgroup = document.createElement('optgroup');
	JSoptgroup.label = "Files . الملفات";

	if(JS_CITIES_DATA !== "")
	{
		JS_CITIES_DATA.sort();
		for (var i=0; i < JS_CITIES_DATA.length; i++)
		{
			strNow = JS_CITIES_DATA[i];
			var tmpARR = strNow.split(".");
			var clnCTY = tmpARR[1]+'.'+tmpARR[2];
			newOPTO    = new Option(clnCTY, "_WRFILE."+strNow);
			JSoptgroup.appendChild(newOPTO);
		}
	}
	JS_uuuCITY.appendChild(JSoptgroup);
	var JSoptgroup = document.createElement('optgroup');
	JSoptgroup.label = "Calculation . الحساب";

	for (var i=0; i < JS_GPS_CALCULATION_CITIES_NOW.length; i++)
	{
		strNow = JS_GPS_CALCULATION_CITIES_NOW[i];
		var tmpARR   = strNow.split("|");
		var city_NAME  = tmpARR[1];
		newOPTO    = new Option(city_NAME, strNow);
		JSoptgroup.appendChild(newOPTO);
					    //JS_uuuCITY.append(newOPTO);
	}
	JS_uuuCITY.appendChild(JSoptgroup);
	log('----END_uLoadGpsCitiesNOW');
}

function uCityCHANGE(obj) 
{
	var sssCODE,origVAL;
	sssCODE = obj.options[obj.selectedIndex].value;

	log('sssCODE '+sssCODE);
	if(sssCODE.indexOf('_WRFILE.') > -1)
	{
		var ax = sssCODE.split(".");
		sssCODE = ax[1] + '|' + ax[2] + '|0|0|_WRFILE';
	}
	origVAL = sssCODE;
	sssCODE = sssCODE.replace(/'/g, '');
	sssCODE = sssCODE.replace(/"/g, '');
	var arrco = sssCODE.split("|");
	sssCODE  = arrco[0]+ '|' + arrco[1] + '|' + arrco[2] + '|' + arrco[3] + '|' + arrco[4];
	document.getElementById('mGPSFULL').value = sssCODE;
	if (origVAL == '')
		{ JS_btnStep2.disabled = true; JS_btnStep2.style.backgroundColor = 'Gray'; }
	else
		{ JS_btnStep2.disabled = false; JS_btnStep2.style.backgroundColor = 'Green'; }
}

function DisableMsgDATE()
{
	document.getElementById('mDatetimeEND').value = '0000-00-00';
}

function goHideMadhabAndMETHODS()
{
	document.getElementById('xMMM1').style.display='none';
	document.getElementById('xMMM2').style.display='none';
}

function goFillMadhabAndMETHODS()
{

	var JS_METHODS_BOX 	= document.getElementById('mMETHODS');
	var JS_MADHAB_BOX 	= document.getElementById('mMADHAB');

	var arryMDHB = ['Standard|Standard', 'Hanafi|Hanafi'];


	var arro = JS_PRAY_TIME.getMethodsLISTING();
	for (var item in arro)
	{
		//log(item + ' - ' + arro[item].name);
		var newOPTO  = new Option(arro[item].name, item);
		JS_METHODS_BOX.append(newOPTO);
		if(item == JS_GPS_CALC_METHOD ) newOPTO.selected = true;
	}


	for(var i=0; i < arryMDHB.length; i++)
	{
		var tempio   = arryMDHB[i].split("|");
		var newOPTO  = new Option(tempio[1], tempio[0]);

		JS_MADHAB_BOX.append(newOPTO);
		if(tempio[0] == JS_GPS_ASR_TYPE ) newOPTO.selected = true;
	}

}
function uCalcMethodsCHANGE(obj) 
{
	JS_GPS_CALC_METHOD = obj.options[obj.selectedIndex].value;
	log(JS_GPS_CALC_METHOD);
	autoHideCustoms();

	goGenerateDATA();
}
function uMadhabCHANGE(obj) 
{
	JS_GPS_ASR_TYPE = obj.options[obj.selectedIndex].value;
	log(JS_GPS_ASR_TYPE);
	goGenerateDATA();
}
function ShowZunder(ss)
{
	document.getElementById(ss).style.visibility = 'visible';
}

function HideZunder(ss)
{
	document.getElementById(ss).style.visibility = 'hidden';
}

function makeTable(method, year, lat, lng, timeZone, dst)
{
	var outDATA = '';
	var monthNames = new Array('JANUARY', 'FEBRUARY', 'MARCH', 'APRIL', 'MAY', 'JUNE', 'JULY', 'AUGUST', 'SEPTEMBER', 'OCTOBER', 'NOVEMBER', 'DECEMBER');
	var JSDate = new Date(year, 0, 1);
	var endDate = new Date(year+ 1, 0, 1);
	var JS_STR_MONTH = '';
	if(JS_GPS_CALC_METHOD == 'CUSTOM')
	{
		JS_PRAY_TIME.getMethodsLISTING()['CUSTOM'].params.fajr = JS_GPS_CUSTOM_FAJR;
		JS_PRAY_TIME.getMethodsLISTING()['CUSTOM'].params.isha = JS_GPS_CUSTOM_ISHA;
	}
	JS_PRAY_TIME.setMethod(method);
	JS_PRAY_TIME.adjust({asr:JS_GPS_ASR_TYPE});
	if(JS_GPS_CALC_METHOD == 'MAROC')
		JS_PRAY_TIME.tune( {sunrise:-5, dhuhr:5, maghrib:6} );
	if(JS_GPS_CALC_METHOD == 'TUNISIA')
		JS_PRAY_TIME.tune( {fajr:-3, dhuhr:7, maghrib:4, isha:3} );
	if(JS_GPS_CALC_METHOD == 'DIYANET')
		JS_PRAY_TIME.tune( {fajr:0, sunrise:-6, dhuhr:5, asr:4, maghrib:7, isha:-1} );
	var output = ['fajr', 'sunrise', 'dhuhr', 'asr', 'maghrib', 'isha'];
	while (JSDate < endDate)
	{
		var JSNowTimes = JS_PRAY_TIME.getTimes(JSDate, [lat, lng], timeZone, dst);
		var JSNOWDAY   = JSDate.getDate();
		var JSNOWMONTH   = JSDate.getMonth()+1;
		var tempMONTH = monthNames[JSNOWMONTH -1];
		if(tempMONTH !== JS_STR_MONTH)
		{
			JS_STR_MONTH = tempMONTH;
			outDATA += '"-------------- ' + JS_STR_MONTH + ' ----------------------------",\n';
		}
		JSNOWDAY   = (JSNOWDAY < 10) ? '0'  + JSNOWDAY : JSNOWDAY;
		JSNOWMONTH = (JSNOWMONTH < 10) ? '0'+ JSNOWMONTH : JSNOWMONTH;
		outDATA += '"'+JSNOWMONTH+ '-'+ JSNOWDAY + '~~~~~';
		for (var i in output)
		{
			outDATA += JSNowTimes[output[i]];
			if(i < 5) outDATA += '|';
		}
		outDATA += '",\n';
		JSDate.setDate(JSDate.getDate()+ 1);
	}
	JS_mWTIMES.innerHTML  =  'var JS_TIMES =\n' + '[\n';
	JS_mWTIMES.innerHTML +=  outDATA;
	JS_mWTIMES.innerHTML +=  '];\n\n';
}

function goGpsSetCustom(codo)
{
	var strMORE = "\n ";
	if(codo == 'ISHA') strMORE += "Or enter how many minutes after Maghrib ( eg: 90min )";
	var str = prompt("Edit Angle of : "+codo + strMORE, "");
	if (str != null)
	{
		if(codo == 'FAJR') JS_GPS_CUSTOM_FAJR = str;
		else JS_GPS_CUSTOM_ISHA = str;
		updateGpsCustoms();
		goGenerateDATA();
	}
}

function updateGpsCustoms()
{	
	document.getElementById('custFAJR').innerHTML = JS_GPS_CUSTOM_FAJR;
	document.getElementById('custISHA').innerHTML = JS_GPS_CUSTOM_ISHA;
	document.getElementById('mCusFAJR').value = JS_GPS_CUSTOM_FAJR;
	document.getElementById('mCusISHA').value = JS_GPS_CUSTOM_ISHA;
}

function autoHideCustoms() 
{
	if(JS_GPS_CALC_METHOD == 'CUSTOM')
		document.getElementById('eCUSTBOX').style.display = 'block';
	else
		document.getElementById('eCUSTBOX').style.display = 'none';
}


function updateNowGPS()
{
	JS_GPS_FULL_CODE = document.getElementById('mGPSFULL').value;
	log(JS_GPS_FULL_CODE);
}

function goGenerateDATA()
{

	var arrio = JS_GPS_FULL_CODE.split("|");	
	makeTable(JS_GPS_CALC_METHOD, 2020, arrio[2], arrio[3], arrio[4], arrio[4]);
}

function goGenerateDATAexec()
{
	if(confirm("SAVE YOUR DATA FILE BEFORE ANY CHANGES \n\n This operation will update the data file, are you sure ? \n\n ستعمل هذه العملية على تحديث ملف البيانات ، هل أنت متأكد؟")) 
	{
		var arrio = JS_GPS_FULL_CODE.split("|");
		makeTable(JS_GPS_CALC_METHOD, 2020, arrio[2], arrio[3], arrio[4], arrio[4]);
		log(arrio);
	}
}

function log(sss)
{
	console.log(sss);
}