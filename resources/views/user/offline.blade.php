<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Makkah &#8211; {{ get_section_content('project', 'site_title') }}</title>
    <meta http-equiv='content-type' content='text/html; charset=UTF-8'>

    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'>
    <link rel='icon' href='favicon.ico'>
    <script src="{{ asset('assets/offline/ayats.js?c=ccc') }}"></script>
    <script src="{{ asset('assets/offline/countries.js?c=3') }}"></script>
    <script src="{{ asset('assets/offline/azkar/azkar.js') }}"></script>
    <script src="{{ asset('assets/offline/azkar/azkar-sabah.js') }}"></script>
    <script src="{{ asset('assets/offline/azkar/azkar-masaa.js') }}"></script>
    <script>
        var JS_VERSIO = new Date().getTime();
        var JS_FORCED_VERTICAL = localStorage.getItem('STORAGE_JS_FORCED_VERTICAL');
        if(JS_FORCED_VERTICAL == null) JS_FORCED_VERTICAL = 0;
        var baseUrl = "{{ asset('') }}";
        var JScssNOW = baseUrl+"/assets/offline/style1.css";
        if(JS_FORCED_VERTICAL > 0) JScssNOW = baseUrl+"assets/offline/style2.css";
        document.write("<link rel='stylesheet' href='" + baseUrl + '/assets/offline/style0.css?s=' + JS_VERSIO + "'>");

        document.write("<link rel='stylesheet' href='"+JScssNOW+"?s="+JS_VERSIO+"'>");
        var eBUILD = 'n';
        var JS_LANG_NOW = "AR";
        var baseUrl = "{{ asset('') }}";
        var eetempo = localStorage.getItem('STORAGE_LANG_NOW'); if(eetempo) JS_LANG_NOW = eetempo;
        document.write("<script src='"+baseUrl+"assets/offline/languages/lang-"+JS_LANG_NOW+".js?s="+JS_VERSIO+"'><\/script>");
if( (JS_LANG_NOW=="UR")||(JS_LANG_NOW=="KU") ) JS_LANG_NOW = "AR"; // set UR/KU as AR
</script>


<script>

    var JS_TAWKIT_VERSION = '{{ get_section_content('project', 'site_title') }}';
    const JS_ROOT = document.documentElement;

    var JS_TIMES        = '';
    var JS_WCSV_DATA    = '';
    var JS_DATA_METEO   = '';

    var JS_TEST_TEXT    = '';
    var JS_AFTERAZAN    = ' اللهم رب هذه الدعوة التامة، والصلاة القائمة، آت محمدًا الوسيلة والفضيلة، وابعثه المقام المحمود الذي وعدته';

    var JS_bgForVRS     = 'var(--bgForVRS)';
    var JS_bgForHRS     = 'var(--bgForHRS)';
    var JS_BGTUBE       = 'var(--Color_BGTUBE)';
    var JS_BgSEKSALATS  = 'var(--Color_SEKSALATS)';


    var JS_THEMES_VERTICALS = [
        '#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#E5BC71|#B8A16C|#000000',
        '#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000',
        '#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000',
        '#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#E5BC71|#B8A16C|#000000','#FFFFFF|#E5BC71|#B8A16C|#000000',
        '#8E141C|#252525|#757575|#F8F5F0','#8A3A17|#252525|#757575|#F8F5F0','#FFFFFF|#DFBB75|#B8A16C|#000000',
        '#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000',
        '#A3140B|#221C16|#757575|#F8F5F0','#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000',
        '#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000',
        '#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000',
        '#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000'];
        var JS_THEMES_HORIZONTALS   = [
            '#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000',
            '#FFFFFF|#DFBB75|#B8A16C|#000000','#8E141C|#252525|#757575|#F8F5F0','#FFFFFF|#DFBB75|#B8A16C|#000000',
            '#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000',
            '#8E141C|#000000|#3F090D|#F8F5F0','#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000',
            '#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000',
            '#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000',
            '#6A2107|#142000|#757575|#F8F5F0','#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000',
            '#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000',
            '#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000',
            '#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000','#FFFFFF|#DFBB75|#B8A16C|#000000'];

            var JS_ACTIVE_COLORYO = '';
            var JS_ATHAN_MINUTES_OF_FAJR        = 0;
            var JS_ATHAN_MINUTES_OF_SHRQ        = 0;
            var JS_ATHAN_MINUTES_OF_DOHR        = 0;
            var JS_ATHAN_MINUTES_OF_ASR         = 0;
            var JS_ATHAN_MINUTES_OF_MAGHRIB     = 0;
            var JS_ATHAN_MINUTES_OF_ISHA        = 0;

            var JS_DOA_AFTER_AZAN       = "";
            var JS_DOA_SYAM_MONDAY      = "";
            var JS_DOA_SYAM_THURSDAY    = "";

            var JS_PRAY_DURATION_OF_FAJR        = 9;
            var JS_PRAY_DURATION_OF_DOHR        = 8;
            var JS_PRAY_DURATION_OF_ASR         = 8;
            var JS_PRAY_DURATION_OF_MAGHRIB     = 7;
            var JS_PRAY_DURATION_OF_ISHA        = 9;

            var JS_THIS_IS_RAMADAN              = false;
            var JS_JOMOA_DIM_MINIUTES_BEFORE    =  0;
            var JS_JOMOA_DIM_MINIUTES_AFTER     = 25;
            var JS_DISPLAY_IS_HORIZONTAL        = true;

            var JS_AZKAR_PRIMARY = [];
            var JS_AZKAR_SABAH = [];
            var JS_AZKAR_MASAA = [];

            var JS_AZKAR_MSGS = [];
            var JS_AZKAR_NEXT = 0;
            var JS_SLIDES_NEXT = 0;


            var tempo = 0;
            var JS_LOGS_ENABLED = false;

            tempo = localStorage.getItem('STORAGE_JOMOA_DIM_BEFORE');   if(tempo) {JS_JOMOA_DIM_MINIUTES_BEFORE = parseInt(tempo);}
            tempo = localStorage.getItem('STORAGE_JOMOA_DIM_AFTER');    if(tempo) {JS_JOMOA_DIM_MINIUTES_AFTER  = parseInt(tempo);}


            var JS_AUDIO_AZAN_IQAMA_IS_BY_VOICE = false;
            var eetempo = localStorage.getItem('STORAGE_AUDIO_BY_VOICE');
            if(eetempo == '1') JS_AUDIO_AZAN_IQAMA_IS_BY_VOICE  = true;


            var JS_SHORT_AZAN_ACTIVE = false;
            var eetempo = localStorage.getItem('STORAGE_JS_SHORT_AZAN_ACTIVE');
            if(eetempo == '1') JS_SHORT_AZAN_ACTIVE = true;

            var JS_SHORT_IQAMA_ACTIVE = false;
            var eetempo = localStorage.getItem('STORAGE_JS_SHORT_IQAMA_ACTIVE');
            if(eetempo == '1') JS_SHORT_IQAMA_ACTIVE    = true;

            var JS_ARABIC_DIGITS = false;
            var eetempo = localStorage.getItem('STORAGE_ARABIC_DIGITS');
            if(eetempo == '1') JS_ARABIC_DIGITS = true;

            var JS_RAMADAN_30MIN_ACTIVE = false;
            var eetempo = localStorage.getItem('STORAGE_RAMADAN_30MIN_ACTIVE');
            if(eetempo == '1') JS_RAMADAN_30MIN_ACTIVE  = true;

            var JS_SUMMER_ADD1HOUR = false;
            var eetempo = localStorage.getItem('STORAGE_SUMMER_ADD1HOUR');
            if(eetempo == '1') JS_SUMMER_ADD1HOUR   = true;

            var JS_1HOURMORE = false;
            var eetempo = localStorage.getItem('STORAGE_JS_1HOURMORE');
            if(eetempo == '1') JS_1HOURMORE = true;

            var JS_1LESSMORE = false;
            var eetempo = localStorage.getItem('STORAGE_JS_1LESSMORE');
            if(eetempo == '1') JS_1LESSMORE = true;

            var JS_24H_ACTIVE = false;
            var eetempo = localStorage.getItem('STORAGE_24H_ACTIVE');
            if(eetempo == '1') JS_24H_ACTIVE = true;


            var JS_FULL_CLOCK_ACTIVE = false;
            var eetempo = localStorage.getItem('STORAGE_FULL_CLOCK_ACTIVE');
            if(eetempo == '1') JS_FULL_CLOCK_ACTIVE = true;

            var JS_DIMM_WHILE_PRAYIN_ACTIVE = true;
            var eetempo = localStorage.getItem('STORAGE_DIMM_SCREEN');
            if(eetempo == '0') JS_DIMM_WHILE_PRAYIN_ACTIVE  = false;



            var JS_APP_AZKAR_ACTIVE = true;
            var eetempo = localStorage.getItem('STORAGE_AZKAR_ACTIVE');
            if(eetempo == '0') JS_APP_AZKAR_ACTIVE  = false;

            var JS_USER_SLIDERS_ACTIVE = true;
            var eetempo = localStorage.getItem('STORAGE_SLIDERS_ACTIVE');
            if(eetempo == '0') JS_USER_SLIDERS_ACTIVE = false;


            var JS_PAST_DIMER_ACTIVE = false;
            var eetempo = localStorage.getItem('STORAGE_PAST_DIMER_ACTIVE');
            if(eetempo == '1') JS_PAST_DIMER_ACTIVE = true;

            var JS_IQAMA_FULL_TIMES = false;
            var eetempo = localStorage.getItem('STORAGE_IQAMA_FULL_TIMES');
            if(eetempo == '1') JS_IQAMA_FULL_TIMES  = true;

            var JS_IQAMA_COUNTDOWN_ACTIVE = true;
            var eetempo = localStorage.getItem('STORAGE_IQAMA_COUNTDOWN_ACTIVE');
            if(eetempo == '0') JS_IQAMA_COUNTDOWN_ACTIVE    = false;

            tempo = localStorage.getItem('STORAGE_AZAN_FAJR');      if(tempo) {JS_ATHAN_MINUTES_OF_FAJR     = parseInt(tempo);}
            tempo = localStorage.getItem('STORAGE_AZAN_SHRQ');      if(tempo) {JS_ATHAN_MINUTES_OF_SHRQ     = parseInt(tempo);}
            tempo = localStorage.getItem('STORAGE_AZAN_DOHR');      if(tempo) {JS_ATHAN_MINUTES_OF_DOHR     = parseInt(tempo);}
            tempo = localStorage.getItem('STORAGE_AZAN_ASR');       if(tempo) {JS_ATHAN_MINUTES_OF_ASR      = parseInt(tempo);}
            tempo = localStorage.getItem('STORAGE_AZAN_MAGHRIB');   if(tempo) {JS_ATHAN_MINUTES_OF_MAGHRIB  = parseInt(tempo);}
            tempo = localStorage.getItem('STORAGE_AZAN_ISHA');      if(tempo) {JS_ATHAN_MINUTES_OF_ISHA     = parseInt(tempo);}

            tempo = localStorage.getItem('STORAGE_DURATION_FAJR');      if(tempo) {JS_PRAY_DURATION_OF_FAJR     = parseInt(tempo);}
            tempo = localStorage.getItem('STORAGE_DURATION_DOHR');      if(tempo) {JS_PRAY_DURATION_OF_DOHR     = parseInt(tempo);}
            tempo = localStorage.getItem('STORAGE_DURATION_ASR');       if(tempo) {JS_PRAY_DURATION_OF_ASR      = parseInt(tempo);}
            tempo = localStorage.getItem('STORAGE_DURATION_MAGHRIB');   if(tempo) {JS_PRAY_DURATION_OF_MAGHRIB  = parseInt(tempo);}
            tempo = localStorage.getItem('STORAGE_DURATION_ISHA');      if(tempo) {JS_PRAY_DURATION_OF_ISHA     = parseInt(tempo);}


            var JS_IQAMA_TIME_OF_FAJR       = 10;
            var JS_IQAMA_TIME_OF_SHRQ       = 15;
            var JS_IQAMA_TIME_OF_DOHR       = 10;
            var JS_IQAMA_TIME_OF_ASR        = 10;
            var JS_IQAMA_TIME_OF_MAGHRIB    = 10;
            var JS_IQAMA_TIME_OF_ISHA       = 10;

            tempo = localStorage.getItem('STORAGE_IQAMA_FAJR');     if(tempo) {JS_IQAMA_TIME_OF_FAJR        = parseInt(tempo);}
            tempo = localStorage.getItem('STORAGE_IQAMA_SHRQ');     if(tempo) {JS_IQAMA_TIME_OF_SHRQ        = parseInt(tempo);}
            tempo = localStorage.getItem('STORAGE_IQAMA_DOHR');     if(tempo) {JS_IQAMA_TIME_OF_DOHR        = parseInt(tempo);}
            tempo = localStorage.getItem('STORAGE_IQAMA_ASR');      if(tempo) {JS_IQAMA_TIME_OF_ASR         = parseInt(tempo);}
            tempo = localStorage.getItem('STORAGE_IQAMA_MAGHRIB');  if(tempo) {JS_IQAMA_TIME_OF_MAGHRIB     = parseInt(tempo);}
            tempo = localStorage.getItem('STORAGE_IQAMA_ISHA');     if(tempo) {JS_IQAMA_TIME_OF_ISHA        = parseInt(tempo);}



            var JS_MOSQUE_NAME = "إسم المسجد هنا";
            var STRtempo = localStorage.getItem('STORAGE_MOSQUE_NAME'); if(STRtempo) {JS_MOSQUE_NAME = STRtempo;}

            var JS_BTM_WAGON   = "";
            var JS_BTM_ONE_MSG = "";

            var JS_CITY_CODE = "SA.MAKKAH";
            var STRtempo = localStorage.getItem('STORAGE_CITY_CODE'); if(STRtempo) {JS_CITY_CODE = STRtempo;}

            var JS_PERSO_FIXED_JOMOA = "AUTO";
            var JS_PERSO_AUTOX_JOMOA = "";
            var STRtempo = localStorage.getItem('STORAGE_PERSO_FIXED_JOMOA'); if(STRtempo) {JS_PERSO_FIXED_JOMOA = STRtempo;}
JS_PERSO_AUTOX_JOMOA = JS_PERSO_FIXED_JOMOA; // default fill


function dolog(s)
{
    console.log(s);
}
//-----------------------------------------------------------------------------------
var JSALLDATA = {
    IZmarquee       : 0,
    IZmeteo         : 1,
    IZMtoPRYRS      : 0,
    IZforHOME       : 0,
    IZaddZerosAMPM  : 0,
    IZ5BoxesOnly    : 0,
    IZDohaSaver     : 0,
    IZIshaSaver     : 0,
    IZJanazatShow   : 0,
    DHRxminASR      : 0,
    JomoaIzInLogo   : 0,
    IZJOMOAon       : 0,
    IZ5minAzkar     : 0,
    IZVrMiddleNames : 0,
    IZVrNoNEXTNoJMA : 1,
    FontoTIMES      : 'FONTO',
    FontoCLOKEN     : 'FONTO',
    FontoAZKAR      : 'Taha',
    IZAzkarSABAH    : 1,
    IZAzkarASR      : 1,
    IZAzkarMAGRIB   : 1,
    IZAzkarISHA     : 0,
    userMonths      : 0,
    IZ1MinCounter   : 0,
    IZSCounterEnlarge : 0,
    IZIqamaScreen    : 0,
}


var STRtempo = localStorage.getItem('JSALLDATA');

if(STRtempo)
{
    var tmpOBJ = JSON.parse(STRtempo);
    for(var propt in tmpOBJ)
    {
       if(propt in JSALLDATA) JSALLDATA[propt] = tmpOBJ[propt];
   }
}



// default admin msgs
var JS_ADMIN_MESSAGES  = "1|DAILY|سُبْحَانَ اللَّهِ وَبِحَمْدِهِ، سُبْحَانَ اللَّهِ العَظِيم°°";
JS_ADMIN_MESSAGES += "1|JOMOA|(عن رسول الله  صلى الله عليه وسلم  قال : “ في يوم الجمعة ساعة لا يوافقها مسلم وهو قائم يصلي يسأل الله خيرًا إلا أعطاه “ )°°";
JS_ADMIN_MESSAGES += "1|10/01|تقبل الله منا ومنكم صالح الأعمال°°";
JS_ADMIN_MESSAGES += "1|10DLHJ|تذكير بالأيام العشر من ذي الحجة --- قالَ رسُولُ اللَّهِ ﷺ: مَا مِنْ أَيامٍ العَمَلُ الصَّالحُ فِيها أَحَبُّ إِلى اللَّهِ مِنْ هذِهِ الأَيَّامِ°°";
JS_ADMIN_MESSAGES += "1|12/10|الله أكبر الله أكبر لا إله إلا الله، الله أكبر الله أكبر ولله الحمد°°";
JS_ADMIN_MESSAGES += "1|12/11|الله أكبر الله أكبر لا إله إلا الله، الله أكبر الله أكبر ولله الحمد°°";
JS_ADMIN_MESSAGES += "1|12/12|الله أكبر الله أكبر لا إله إلا الله، الله أكبر الله أكبر ولله الحمد°°";
JS_ADMIN_MESSAGES += "1|12/13|الله أكبر الله أكبر لا إله إلا الله، الله أكبر الله أكبر ولله الحمد°°";
JS_ADMIN_MESSAGES += "1|DAILY| قالَ رسُولُ اللَّهِ ﷺ : (لَا يُؤْمِنُ أحَدُكُمْ، حتَّى يُحِبَّ لأخِيهِ ما يُحِبُّ لِنَفْسِهِ).°°";
JS_ADMIN_MESSAGES += "0|DAILY|test message on/off ...°°";

var STRtempo = localStorage.getItem('STORAGE_ADMIN_MESSAGES');
if(STRtempo) {JS_ADMIN_MESSAGES = STRtempo;}
var JS_MSGS_DATA = JS_ADMIN_MESSAGES.split("°°");



// default slides
var JS_SLIDES_MESSAGES = "";
JS_SLIDES_MESSAGES += "﴿ رَبَّنَا لاَ تُزِغْ قُلُوبَنَا بَعْدَ إِذْ هَدَيْتَنَا وَهَبْ لَنَا مِن لَّدُنكَ رَحْمَةً إِنَّكَ أَنتَ الْوَهَّابُ ﴾°°";
JS_SLIDES_MESSAGES += "اللَّهُمَّ إِنِّي أَسْأَلُكَ الْهُدَى وَالتُّقَى وَالْعَفَافَ وَالْغِنَى°°";
JS_SLIDES_MESSAGES += "اللَّهُمَّ أنَْتَ رَبيِّ لَا إلِهََ إلَِّا أنَتَ| خَلَقْتنَيِ وَأنََا عَبدُْكَ| وَأنََا عَلَى عَهْدِكَ وَوَعْدِكَ مَا اسْتَطَعْتُ| أَعُوذُ بِكَ مِنْ شَرِّ مَا صَنَعْتُ, أَبُوءُ لَكَ بِنِعْمَتِكَ عَلَيَّ, وَأَبُوءُ لَكَ بِذَنْبِي, فَاغْفِرْ لِي فَإِنَّهُ لَا يَغْفِرُ الذُّنُوبَ إِلَّا أَنْتَ°°";
JS_SLIDES_MESSAGES += "اللَّهُمَّ اغْفِرْ لِي ذَنْبِي كُلَّهُ، دِقَّهُ، وَجِلَّهُ| وَأَوَّلَهُ، وَآخِرَهُ، وَعَلَانِيَتَهُ، وَسِرَّهُ°°";
JS_SLIDES_MESSAGES += "رَبَّنَا آتِنَا فِي الدُّنْيَا حَسَنَةً وَفِي الآخِرَةِ حَسَنَةً وَقِنَا عَذَابَ النَّارِ°°";
JS_SLIDES_MESSAGES += "اللَّهُمَّ اكْفِنِي بِحَلَالِكَ عَنْ حَرَامِكَ | وَأَغْنِنِي بِفَضْلِكَ عَمَّنْ سِوَاكَ°°";
JS_SLIDES_MESSAGES += "اللَّهُمَّ إِنِّي أَعُوذُ بِكَ|مِنْ زَوَالِ نِعْمَتِكَ وَتَحَوُّلِ عَافِيَتِكَ|وَفُجَاءَةِ نِقْمَتِكَ وَجَمِيعِ سَخَطِكَ°°";
JS_SLIDES_MESSAGES += "اللَّهُمَّ أَصْلِحْ لِي دِينِي الَّذِي هُوَ عِصْمَةُ أَمْرِي، وَأَصْلِحْ لِي دُنْيَايَ الَّتِي فِيهَا مَعَاشِي، وَأَصْلِحْ لِي آخِرَتِي الَّتِي فِيهَا مَعَادِي وَاجْعَلِ الْحَيَاةَ زِيَادَةً لِي فِي كُلِّ خَيْرٍ، وَاجْعَلِ الْمَوْتَ رَاحَةً لِي مِنْ كُلِّ شَرٍّ°°";
JS_SLIDES_MESSAGES += "﴿ رَبِّ هَبْ لِي مِن لَّدُنْكَ ذُرِّيَّةً طَيِّبَةً إِنَّكَ سَمِيعُ الدُّعَاء ﴾°°";
JS_SLIDES_MESSAGES += "﴿ رَبَّنَا آمَنَّا بِمَا أَنزَلْتَ وَاتَّبَعْنَا الرَّسُولَ فَاكْتُبْنَا مَعَ الشَّاهِدِينَ ﴾°°";
JS_SLIDES_MESSAGES += "﴿ رَبِّ اجْعَلْنِي مُقِيمَ الصَّلاَةِ وَمِن ذُرِّيَّتِي رَبَّنَا وَتَقَبَّلْ دُعَاء ﴾°°";
JS_SLIDES_MESSAGES += "﴿ رَبَّنَا آتِنَا مِن لَّدُنكَ رَحْمَةً وَهَيِّئْ لَنَا مِنْ أَمْرِنَا رَشَدًا ﴾°°";
JS_SLIDES_MESSAGES += "﴿رَبِّ لَا تَذَرْنِي فَرْدًا وَأَنتَ خَيْرُ الْوَارِثِينَ﴾°°";
JS_SLIDES_MESSAGES += "اللَّهُمَّ مُصَرِّفَ الْقُلُوبِ صَرِّفْ قُلُوبَنَا عَلَى طَاعَتِكَ°°";




var STRtempo = localStorage.getItem('STORAGE_JS_SLIDES_MESSAGES');
if(STRtempo) {JS_SLIDES_MESSAGES = STRtempo;}
var JS_SLIDES_DATA = JS_SLIDES_MESSAGES.split("°°");

var JS_MSGS_DATA = JS_ADMIN_MESSAGES.split("°°");
var JS_FIXED_IQAMATFAJR = "";
var STRtempo = localStorage.getItem('STORAGE_FIXED_IQAMATFAJR'); if(STRtempo) {JS_FIXED_IQAMATFAJR = STRtempo;}
var JS_FIXED_IQAMATDOHR = "";
var STRtempo = localStorage.getItem('STORAGE_FIXED_IQAMATDOHR'); if(STRtempo) {JS_FIXED_IQAMATDOHR = STRtempo;}
var JS_FIXED_IQAMATASR = "";
var STRtempo = localStorage.getItem('STORAGE_FIXED_IQAMATASR'); if(STRtempo) {JS_FIXED_IQAMATASR = STRtempo;}
var JS_FIXED_IQAMATISHA = "";
var STRtempo = localStorage.getItem('STORAGE_FIXED_IQAMATISHA'); if(STRtempo) {JS_FIXED_IQAMATISHA = STRtempo;}

var JS_ACTIVE_FONTO = 'Taha';
tempo = localStorage.getItem('STORAGE_JS_ACTIVE_FONTO');    if(tempo) {JS_ACTIVE_FONTO  = tempo;}


var JS_METEO_LATITUDE  = 21.3890824;
var STRtempo = localStorage.getItem('STORAGE_JS_METEO_LATITUDE'); if(STRtempo) {JS_METEO_LATITUDE = STRtempo;}
var JS_METEO_LONGITUDE  = 39.8579118;
var STRtempo = localStorage.getItem('STORAGE_JS_METEO_LONGITUDE'); if(STRtempo) {JS_METEO_LONGITUDE = STRtempo;}



var JS_WCSV_ACTIVE = false;
var eetempo = localStorage.getItem('STORAGE_WCSV_ACTIVE');
if(eetempo == '1') JS_WCSV_ACTIVE = true;


if(JS_WCSV_ACTIVE)
{
    var JS_wcsvFile = 'wcsv.js?e='+ JS_VERSIO;
    document.write("<script src='"+JS_wcsvFile+"'><\/script>");
    JS_IQAMA_FULL_TIMES = true;
}
else
{
    var tmp   = JS_CITY_CODE.split(".");
    var yFile = 'assets/offline/data/'+tmp[0]+'/wtimes-'+JS_CITY_CODE+'.js?e='+ JS_VERSIO;
    document.write("<script src='"+yFile+"'><\/script>");
}



</script>

</head>



<body onload='_cadro();' onresize='_cadro();' class=''>

    <div id='odyo'>
        <audio id='eVoiceAzan'      src="{{ asset('assets/offline/audio/audio_azan.mp3') }}"></audio>
        <audio id='eVoiceFajr'      src="{{ asset('assets/offline/audio/audio_fajr.mp3') }}"></audio>
        <audio id='shortAzan'       src="{{ asset('assets/offline/audio/short_azan.mp3') }}"></audio>
        <audio id='shortIqama'      src="{{ asset('assets/offline/audio/short_iqama.mp3') }}"></audio>
        <audio id='eBeeep'          src="{{ asset('assets/offline/audio/audio_wbeeep.wav') }}" ></audio>
        <audio id='eTit'            src="{{ asset('assets/offline/audio/audio_wtit.wav') }}" ></audio>
    </div>



    <div id='eMainVERTICAL' class='s003'>
        <div id='eMenuVR' onclick='ShowGlobalHELP();' >&#9776;</div>
        <div id='VRMsqNAME'>-</div>
        <img id='VR_LOGO' alt='' src="{{ asset('assets/offline/logo.png') }}">
        <div id='eVRDATES'>
            <div id='eVRYOUM'></div>
            <div id='eVRHIJRI' onclick='HijriClick();'></div>
            <div id='eVR003' onclick='HijriClick();'></div>
            <div id='eVRMILADI'></div>
        </div>
        <div id='VrMeteoBOX'>
            <div id='VRMTOikon'><img id='VRimgMETEO' alt='' src='{{asset("assets/offline/images/meteo/0.png")}}'></div>
            <div id='VRCELSIUS' dir='ltr' onclick='proccessMETEO();'>-</div>
            <div id='VRmeteoHL'><span id='VRmtoHHH'>-</span></div>
        </div>
        <div id='eMIDDLE3'>
            <div id='VReJomoa' ondblclick='SetVrMiddleNames();'></div>
            <div id='VReSEP'></div>
            <div id='VReNXXX'></div>
        </div>
        <div id='CLOKO_MINI_VR' onclick='SetFullClockOnOff();'>
            <div id='VR_eMiniHOUR'>--:--</div>
            <div id='VR_eSECS'>--</div>
            <div id='VR_eAMPM'>--</div>
        </div>

        <div id='CLOKO_FULL_VR' onclick='SetFullClockOnOff();'><span id='VR_eFullCLOKO' >--:--</span><span id='VR_sssCLOKO'>:</span></div>

        <div id='VRAzanCOMES' class='SSoff' onclick='HideZunder2(this.id);'>
            <div id='eeeTextAZAN' >-</div>
            <div id='eeeNowNAMEazan'>-</div>
            <div id='eeeTopTIME'></div>
        </div>

        <div id='VRIQAMATIME' class='SSoff' onclick='HideZunder2(this.id);'>
            <div id='VRnowIQAMA'>-</div>
        </div>

        <div id='VRDOHACAME' class='SSoff' onclick='HideZunder2(this.id);'>
            <div id='VRnowDOHA'></div>
        </div>


        <div id='VReAyatsHDR' class='centro1' onclick='_GoMessages();'>
            <div id='VReAYATS' class='centro2' dir='rtl'></div>
        </div>

        <div id='VReALERT'></div>

        <div id='tuberBG'>&nbsp;</div>

        <div id='VRePrayersHDR' class=''>
            <div id='VR_TITLES'>
                <div id='ewSALAT'></div>
                <div id='ewAZAN'></div>
                <div id='ewIQAMA'></div>
            </div>
            <div class='cccROUND' id='tube0'>
                <div id='t0' class='eeeNAME' onclick='demoThemesNEXT();'>-</div>
                <div id='s0' class='eeeHOUR cSalats' onclick='demoThemesBACK();'></div>
                <span id='qm1' class='eeeIQAMA cSalats'>-</span>
                <span id='VRdemain'></span>
                <div id='VmtALT0' class='Vmtx'></div>
            </div>
            <div class='cccROUND' id='tube1'>
                <div id='t1' class='eeeNAME'>-</div>
                <div id='s1' class='eeeHOUR cSalats' ></div>
                <span id='qm2' class='eeeIQAMA cSalats' >-</span>
                <div id='VmtALT1' class='Vmtx'></div>
            </div>
            <div class='cccROUND' id='tube2'>
                <div id='t2' class='eeeNAME' onclick='DemoStartSLIDES();'>-</div>
                <div id='s2' class='eeeHOUR cSalats' onclick='DemoSartMainAZKAR();'></div>
                <span id='qm3' class='eeeIQAMA cSalats' >-</span>
                <div id='VmtALT2' class='Vmtx'></div>
            </div>
            <div class='cccROUND' id='tube3'>
                <div id='t3' class='eeeNAME' ondblclick='LogsOnOff();' onclick='DemoAzSABAH();'>-</div>
                <div id='s3' class='eeeHOUR cSalats' onclick='DemoAzMASAA();'></div>
                <span id='qm4' class='eeeIQAMA cSalats' >-</span>
                <div id='VmtALT3' class='Vmtx'></div>
            </div>
            <div class='cccROUND' id='tube4'>
                <div id='t4' class='eeeNAME' ondblclick='TestCounter();' >-</div>
                <div id='s4' class='eeeHOUR cSalats' ></div>
                <span id='qm5' class='eeeIQAMA cSalats' >-</span>
                <div id='VmtALT4' class='Vmtx'></div>
            </div>
            <div class='cccROUND' id='tube5'>
                <div id='t5' class='eeeNAME' ondblclick='testACTIVE();'>-</div>
                <div id='s5' class='eeeHOUR cSalats' ></div>
                <span id='qm6' class='eeeIQAMA cSalats' ondblclick='SetVrNoNEXTNoJMA();'>-</span>
                <div id='VmtALT5' class='Vmtx'></div>
            </div>
        </div>

        <div id='VReVER'></div>
        <div id='VReMESSAGE0'></div>
        <div id='VReMESSAGE1'></div>





        <div id='eRIDO' class='CSS_BlackSCREEN' onclick='RemoveBlackScreen();'>
            <img id='eMobile' alt='' class='cssNoMOBILE' src="{{asset('assets/offline/images/no-mobile.png')}}">
        </div>




        <div id='VRAZKAR' class='SSoff' onclick='ForceSTOPazkar();'>
            <div id='Vclc' class='jclc'></div>
            <div id='Vmes0'><div id='Vmes1'></div></div>
        </div>

        <div id='VRSLIDES' class='SSoff' onclick='ForceSTOPSLIDES();'>
            <div id='sVclc' class='jclc'></div>
            <div id='sVmes0'><div id='sVmes1'></div></div>
        </div>

        <div id='VR5MIN' class='SSoff' onclick='Close5minPIC();'>
            <div id='V5clc' class='jclc'></div>
        </div>


        <div id='VRSMLKNTR'>
            <div id='sVRnbr'>-</div>
            <div id='sVRtxt'>-</div>
        </div>

        <div id='LastMinVR' class='SSoff' onclick="HideZunder2('LastMinVR');"></div>



<!-- COUNTER-->
<div id='VRCONTO' class='SSoff' onclick='CloseFullCONTO();'>
    <span id='sVRCONTO'></span><div id='sVRCloky'></div>
</div>

<img id='ePSvr' alt='' src="{{asset('assets/offline/ps.png')}}">



</div>








<div id='eMainHORIZONTAL' class='THRCLASSIC'>


    <div id='eMenuHR' onclick='ShowGlobalHELP();' >&#9776;</div>

    <img id='HR_LOGO' alt='' src="{{ asset('assets/offline/logo.png') }}">

    <div id='HRMILADIHIJRI' onclick='HijriClick();'></div>
    <div id='HRMHJJJ' onclick='HijriClick();'><div id='mhj0'></div><div id='mhj1'></div></div>

    <div id='HRMsqNAME'></div>

    <div id='HrMeteoBOX'>
        <div id='HRMTOikon'><img id='HRimgMETEO' alt='' src='{{asset("assets/offline/images/meteo/0.png")}}'></div>
        <div id='HRCELSIUS' onclick='proccessMETEO();' dir='ltr'>-</div>
        <div id='HRmeteoHL'><span id='HRmtoHHH'>-</span></div>
    </div>

    <div id='CLOKO_MINI_HR' onclick='SetFullClockOnOff();'>
        <div id='HR_eMiniHOUR'>--:--</div>
        <div id='HR_eSECS'>--</div>
        <div id='HR_eAMPM'>--</div>
    </div>


    <div id='CLOKO_FULL_HR' onclick='SetFullClockOnOff();'>
        <span id='HR_eFullCLOKO'></span><span id='HR_sssCLOKO'></span>
    </div>

    <div id='HReAyatsHDR' class='centro1' onclick='_GoMessages();'>
        <div id='HReAYATS' class='centro2' dir='rtl'></div>
    </div>



    <div id='HReALERT'></div>

    <div id='HReNextBOX' class='HReBOX2'>
        <div id='HReNextPRAYER'></div>
        <div id='HReNextPrTEXT'></div>
        <div id='HReOPTIOshrq'></div>
        <div id='HReoptJomoa'></div>
    </div>

    <div id='HRJOMOABOX'>
        <div id='HReJOMOAPRAYER'></div>
        <div id='HReJOMOATEXT'></div>
        <div id='HReJOMOA2wcsv'></div>
    </div>


    <div id='HRAzanCOMES' class='SSoff' onclick='HideZunder2(this.id);'>
        <div id='HRTextAZAN' ></div>
        <div id='HHHNowNAMEazan'>-</div>
        <div id='HHHTopTIME'></div>
    </div>


    <div id='HRIQAMATIME' class='SSoff' onclick='HideZunder2(this.id);'>
        <div id='HRnowIQAMA'>-</div>
    </div>

    <div id='HRDOHACAME' class='SSoff' onclick='HideZunder2(this.id);'>
        <div id='HRnowDOHA'></div>
    </div>

    <div id='HahowaALONGO'>
        <table id='alongotablo' class='_h6'>
            <tr>
                <td id='W333HRtube0'>
                    <div id='HReFIXER' >&nbsp;</div>
                    <div id='W333Ht0' class='wwwNAME' onclick='demoThemesNEXT();'>---</div>
                    <div id='W333H_s0' class='wwwHOUR cSalats' onclick='demoThemesBACK();'></div>
                    <div id='W333HRqm1' class='wwwIQAMA cSalats'>-</div>
                    <div id='HRdemain'></div>
                    <div id='HmtALT0' class='Hmtx'></div>
                    <div class='HdcA' id='HdcA1'></div>
                    <div class='jnzts'><div id='jA0' onclick='setJnzMNS(0);'> </div><div id='jB0' onclick='setJnzPLS(0);'> </div></div>
                </td>
                <td id='W333HRtube1'>
                    <div id='W333Ht1' class='wwwNAME'>---</div>
                    <div id='W333H_s1' class='wwwHOUR cSalats' ></div>
                    <div id='W333HRqm2' class='wwwIQAMA cSalats' >-</div>
                    <div id='HmtALT1' class='Hmtx'></div>
                    <div class='HdcA'></div>
                </td>
                <td id='W333HRtube2'>
                    <div id='W333Ht2' class='wwwNAME' onclick='DemoStartSLIDES();'>---</div>
                    <div id='W333H_s2' class='wwwHOUR cSalats' onclick='DemoSartMainAZKAR();'></div>
                    <div id='W333HRqm3' class='wwwIQAMA cSalats' >-</div>
                    <div id='HmtALT2' class='Hmtx'></div>
                    <div class='HdcA'></div>
                    <div class='jnzts'><div id='jA2' onclick='setJnzMNS(2);'> </div><div id='jB2' onclick='setJnzPLS(2);'> </div></div>
                </td>
                <td id='W333HRtube3'>
                    <div id='W333Ht3' class='wwwNAME' ondblclick='LogsOnOff();' onclick='DemoAzSABAH();'>---</div>
                    <div id='W333H_s3' class='wwwHOUR cSalats' onclick='DemoAzMASAA();'></div>
                    <div id='W333HRqm4' class='wwwIQAMA cSalats' >-</div>
                    <div id='HmtALT3' class='Hmtx'></div>
                    <div class='HdcA'></div>
                    <div class='jnzts'><div id='jA3' onclick='setJnzMNS(3);'> </div><div id='jB3' onclick='setJnzPLS(3);'> </div></div>
                </td>
                <td id='W333HRtube4' ondblclick='TestCounter();'>
                    <div id='W333Ht4' class='wwwNAME'>---</div>
                    <div id='W333H_s4' class='wwwHOUR cSalats' ></div>
                    <div id='W333HRqm5' class='wwwIQAMA cSalats' >-</div>
                    <div id='HmtALT4' class='Hmtx'></div>
                    <div class='HdcA'></div>
                    <div class='jnzts'><div id='jA4' onclick='setJnzMNS(4);'> </div><div id='jB4' onclick='setJnzPLS(4);'> </div></div>
                </td>
                <td id='W333HRtube5'>
                    <div id='W333Ht5' class='wwwNAME' ondblclick='testACTIVE();'>---</div>
                    <div id='W333H_s5' class='wwwHOUR cSalats'></div>
                    <div id='W333HRqm6' class='wwwIQAMA cSalats' ondblclick='SetJomoaLogoCHECK();'>-</div>
                    <div id='HmtALT5' class='Hmtx'></div>
                    <div class='HdcA' id='HdcA6'></div>
                    <div class='jnzts'><div id='jA5' onclick='setJnzMNS(5);'> </div><div id='jB5' onclick='setJnzPLS(5);'> </div></div>
                </td>
            </tr>
        </table>
    </div>


    <div id='HR_Btm0' onclick='Set5BoxesOnly();'>---</div>
    <div id='HReMESSAGE0'></div>
    <div id='HReMESSAGE1'></div>
    <div id='HR_Btm1'></div>




<!-- HReRIDO   -->
<div id='HReRIDO' class='CSS_BlackSCREEN' onclick='RemoveBlackScreen();'>
    <img id='HReMobile' alt='' class='cssNoMOBILE' src="{{asset('assets/offline/images/no-mobile.png')}}">
</div>


<div id='HRAZKAR' class='SSoff' onclick='ForceSTOPazkar();'>
    <div id='Hclc' class='jclc'></div><div id='Hmes0'><div id='Hmes1'></div></div>
</div>

<div id='HRSLIDES' class='SSoff' onclick='ForceSTOPSLIDES();'>
    <div id='sHclc' class='jclc'></div><div id='sHmes0'><div id='sHmes1'></div></div>
</div>

<div id='HR5MIN' class='SSoff' onclick='Close5minPIC();'>
    <div id='H5clc' class='jclc'></div>
</div>



<div id='HRSMLKNTR'>
    <div id='sHRnbr'>-</div>
    <div id='sHRtxt'>-</div>
</div>


<div id='LastMinHR' class='SSoff' onclick="HideZunder2('LastMinHR');"></div>

<!-- HRCONTO COUNTER-->
<div id='HRCONTO' class='SSoff' onclick='CloseFullCONTO();'>
    <span id='sHRCONTO'></span><div id='sHRCloky'></div>
    <div id='ELMOBIL2'><img src="{{asset('assets/offline/images/no-mobile.png')}}"></div>
</div>

<img id='ePShr' alt='' src="{{asset('assets/offline/ps.png')}}">

</div>



<button id='BtnAudio' onclick='forceAudio();'>
    Azan Voice is Activated in Settings <br> Click Here To Enable Sounds in Browser</button>

<!--  ======================================================   -->


<!-- HELP SCREEN -->
<div id='eHELPSCREEN' class='cssColorLITE' >


    <div class='cssSET'>
        <div id='mntopo' ><span onclick="SetScroll('eMenuGRP', 0);">&#9650;</span> &nbsp;&nbsp;  <span onclick="SetScroll('eMenuGRP', 1);">&#9660;</span></div>
    </div>

    <div id='eMenuGRP' dir='rtl' class='cssMenuGRP CSS_HAFS'>
        <div id='LangsDIV' >
            <img id='ePS' alt='' src="{{asset('assets/offline/ps.png')}}">&nbsp;&nbsp;&nbsp;
            <span title='AR' class='CSS_AR33'  onclick='getLANGUAGE(this);'>العربية</span>
            <br>
            <span title='EN' class='CSS_EN33'  onclick='getLANGUAGE(this);'>EN</span> .
            <span title='FR' class='CSS_EN33'  onclick='getLANGUAGE(this);'>FR</span> .
            <span title='ES' class='CSS_EN33'  onclick='getLANGUAGE(this);'>ES</span> .
            <span title='IT' class='CSS_EN33'  onclick='getLANGUAGE(this);'>IT</span>
            <br>
            <span title='DE' class='CSS_EN33'  onclick='getLANGUAGE(this);'>DE</span> .
            <span title='SE' class='CSS_EN33'  onclick='getLANGUAGE(this);'>SE</span> .
            <span title='NO' class='CSS_EN33'  onclick='getLANGUAGE(this);'>NO</span> .
            <span title='ID' class='CSS_EN33'  onclick='getLANGUAGE(this);'>ID</span>
            <br>
            <span title='TR' class='CSS_EN33'  onclick='getLANGUAGE(this);'>TR</span> .
            <span title='KU' class='CSS_EN33'  onclick='getLANGUAGE(this);'>KU</span> .
            <span title='UR' class='CSS_EN33'  onclick='getLANGUAGE(this);'>UR</span> .
            <span title='KG' class='CSS_EN33'  onclick='getLANGUAGE(this);'>KG</span> .
            <span title='UZ' class='CSS_EN33'  onclick='getLANGUAGE(this);'>UZ</span>
            <br>
            <span title='BN' class='CSS_AR44'  onclick='getLANGUAGE(this);'>বাংলা</span> .
            <span title='IN' class='CSS_EN33'  onclick='getLANGUAGE(this);'>हिन्दी</span>
        </div>

        <div class='cssMenuBTN' id='AAA_FullSCREEN'     onclick="CloseHELP(); goFullSCREEN();">-</div>
        <div class='cssMenuBTN' id='AAA_LOCALISATION'   onclick="CloseHELP(); ShowZunder('e_LOCALISATION');">-</div>
        <div class='cssMenuBTN' id='AAA_e_OPTIONS'      onclick="CloseHELP(); ShowZunder('e_OPTIONS');">-</div>
        <div class='cssMenuBTN' id='AAA_MosqueNAME'     onclick="CloseHELP(); editMOSQUENAME();">-</div>
        <div class='cssMenuBTN' id='AAA_ADMINMSGS'      onclick="CloseHELP(); ShowZunder('e_ADMINMSGS');">-</div>
        <div class='cssMenuBTN' id='AAA_ForcedVR'>-</div>

        <div class='cssMenuBTN' id='AAA_ADJUSTMENTS'    onclick="CloseHELP(); ShowZunder('e_ADJUSTMENTS');">-</div>

        <div class='cssMenuBTN' id='AAA_BLACKSCREEN'    onclick="CloseHELP(); ShowZunder('e_BLACKSCREEN');">-</div>
        <div class='cssMenuBTN' id='AAA_AZKAR'          onclick="CloseHELP(); ShowZunder('e_AZKAR');">-</div>
        <div class='cssMenuBTN' id='AAA_AZKAR_SBH_MSA'  onclick="CloseHELP(); ShowZunder('e_AZKAR_SBH_MSA');">-</div>
        <div class='cssMenuBTN' id='AAA_SLIDERS'        onclick="CloseHELP(); ShowZunder('e_SLIDERS');">-</div>
        <div class='cssMenuBTN' id='AAA_DimDIRECT'      onclick="CloseHELP(); ForceBlackScreenNOW();">-</div>
        <div class='cssMenuBTN' id='AAA_METEO'          onclick="CloseHELP(); ShowZunder('e_METEO');">-</div>
        <div class='cssMenuBTN' id='AAA_AboutTAWKIT'    onclick="CloseHELP(); ShowZunder('e_ABOUT');">-</div>
        <div class='cssMenuBTN' id='AAA_dev2' onclick="CloseHELP();"><a class='devs' href="#">خيارات في تطوير - Dev. progress</a></div>
        <div class='cssMenuBTN' id='AAA_dev3' onclick="CloseHELP();"><a class='devs' href="{{ url('contact')}}" target='_blank'>تصحيحات و اقتراحات - Suggestions</a></div>
        <div class='cssMenuBTN' id='AAA_dev4' onclick="CloseHELP();"><a class='devs' href="{{ url('/') }}" target='_blank'>موقع التحديثات - Updates website</a></div>
        <div id='mn0'><div id='mn1'></div></div>

    </div>

</div>



<div id='e_ABOUT' class='cssModelSettingsWINDOW cssColorLITE' >

    <div class='cssTitlesHOLDER'>
        <div class='cssWindowTITLE' ></div>
        <div class='cssWindowCLOSE' ><span onclick="SetScroll('scroABOUT', 0);">&#9650;</span> &nbsp;  <span onclick="SetScroll('scroABOUT', 1);">&#9660;</span> &nbsp;&nbsp;&nbsp; <span onclick='closeThis(this.parentNode);'>&#10006;</span></div>
    </div>

    <div id='scroABOUT' class='cssSettingsDATA cntr'>
        <br>
        <span id='bx0' class='eLiter' ></span><br><br>
        <span class='CSS_HAFS' id='ab1' ></span><br><br>
        <span>
            This application is 100% freeware! <br>
            It is not permissible to sell it! <br><br>

            <a href="{{ url('/#Installers') }}" target="_blank">
                متطوعين للمساعدة على تركيب البرنامج<br>
                {{ url('/#Installers') }}
            </a><br>
        </span>

        <br>
        <div id='ab5'></div><br><br>
    </div>

</div>


<!-- ■■■■■■■■■■■■ OPTIONS  ■■■■■■■■■■■■■■■■■■■ -->
<div id='e_OPTIONS' class='cssModelSettingsWINDOW cssColorLITE' >

    <div class='cssTitlesHOLDER'>
        <div class='cssWindowTITLE' ></div>
        <div class='cssWindowCLOSE' ><span class='hnd' onclick="SetScroll('scroOPTIONS', 0);">&#9650;</span> &nbsp;  <span class='hnd' onclick="SetScroll('scroOPTIONS', 1);">&#9660;</span> &nbsp;&nbsp;&nbsp; <span onclick='closeThis(this.parentNode);'>&#10006;</span></div>
    </div>

    <div id='scroOPTIONS' class='cssSettingsDATA CSS_X_LANG_DIRECTION' >


        <div id='AAA_set_THEMES'></div>
        <div id='XX_MISC_1'></div>
        <hr>
        <!--   24H ON-OFF   -->
        <div><input type='checkbox' id='e24CHECK' class='cssCheckBOX' onchange='Set24OnOff()'> &nbsp; <label for='e24CHECK' id='XX_OPTION_0'> </label></div>

        <!--    Set Zeros in AMPM -->
        <div><input type='checkbox' id='eZerosAMPM' class='cssCheckBOX' onchange='SetZerosAMPM()'> &nbsp; <label for='eZerosAMPM' id='XX_ZEROS_AMPM'> --- </label></div>

        <!--   FULL CLOCK   -->
        <div><input type='checkbox' id='eFullClockCHECK' class='cssCheckBOX' onchange='SetFullClockOnOff()'> &nbsp; <label for='eFullClockCHECK'><span id='XX_OPTION_1'>---</span>  "00:00:00" </label></div>

        <!--   DIM PAST TIMES   -->
        <div><input type='checkbox' id='ePastDimerCHECK' class='cssCheckBOX' onchange='SetPastDimerOnOff()'> &nbsp; <label for='ePastDimerCHECK' id='XX_OPTION_2'>---</label></div>

        <!--   IQAMA FULLE TIME   -->
        <div><input type='checkbox' id='eIQAMAasHOUR' class='cssCheckBOX' onchange='SetIqamaFullTimes()'> &nbsp; <label for='eIQAMAasHOUR' id='XX_IQAMAASHOUR'>---</label></div>

        <!--    COUNTDOWN OnOff   -->
        <div><input type='checkbox' id='eCOUNTDOWNOnOff' class='cssCheckBOX' onchange='SetCOUNTDOWNOnOff()'> &nbsp; <label for='eCOUNTDOWNOnOff' id='W9_eCOUNTDOWNOnOff'>---</label></div>
        <div><input type='checkbox' id='eCounterEnlarge' class='cssCheckBOX' onchange='SetCounterEnlarge()'> &nbsp; <label for='eCounterEnlarge' id='XX_ENLARGE'>---</label></div>
        <div><input type='checkbox' id='e1MinCounter' class='cssCheckBOX' onchange='Set1MinCounter()'> &nbsp; <label for='e1MinCounter' id='XX_1MIN_COUNTER'>---</label></div>

        <!--   ARABIC DIGITS   -->
        <div><input type='checkbox' id='eArabicDIGITS' class='cssCheckBOX' onchange='SetArabicDIGITSOnOff()'> &nbsp; <label for='eArabicDIGITS' id='W9_ARABICDIGITS'> --- </label></div>

        <!--   hide Iqamat   -->
        <div><input type='checkbox' id='forHOME' class='cssCheckBOX' onchange='Set4HOMEOnOff()'> &nbsp; <label for='forHOME' id='XX_HIDE_IQAMAT'> --- </label></div>


        <!--    HR 5 BOXES ONLY  -->
        <div><input type='checkbox' id='e5BoxesOnly' class='cssCheckBOX' onchange='Set5BoxesOnly()'> &nbsp; <label for='e5BoxesOnly' id='XX_5BOXES_ONLY'> --- </label></div>
        <div><input type='checkbox' id='eVrMiddleNames' class='cssCheckBOX' onchange='SetVrMiddleNames()'> &nbsp; <label for='eVrMiddleNames' id='XX_VR_MIDDLENAMES'> --- </label></div>
        <div><input type='checkbox' id='eVrNoNEXTNoJMA' class='cssCheckBOX' onchange='SetVrNoNEXTNoJMA()'> &nbsp; <label for='eVrNoNEXTNoJMA' id='XX_VR_NoNEXTNoJMA'> --- </label></div>
        <div><input type='checkbox' id='eIqamaScr' class='cssCheckBOX'   onchange='SetIqamaScreen()'> &nbsp; <label for='eIqamaScr' id='XX_IQAMASCREEN'> --- </label></div>

        <hr>
        <div>Change months names | تغيير أسماء الشهور</div>
        <input type='radio' onclick="goMonthsZZ(0);" name='RZZ1' id='ZZZ0'><label id='jZ0' for='ZZZ0'>بدون تغيير | Default </label><br>
        <input type='radio' onclick="goMonthsZZ(1);" name='RZZ1' id='ZZZ1'><label id='jZ1' for='ZZZ1'></label><br>
        <input type='radio' onclick="goMonthsZZ(2);" name='RZZ1' id='ZZZ2'><label id='jZ2' for='ZZZ2'></label><br>

        <!--  MP3   -->
        <hr>
        <div><input type='checkbox' id='eVoiceCHECK' class='cssCheckBOX' onchange='SetAudioVoiceOnOff()'> &nbsp; <label for='eVoiceCHECK' id='XX_ADJUST_2'> --- </label></div>
        <div><input type='checkbox' id='eShortAZAN'  class='cssCheckBOX' onchange='SetShortAZANOnOff()'> &nbsp; <label for='eShortAZAN' id='XX_eShortAZAN'> --- </label></div>
        <div><input type='checkbox' id='eShortIQAMA' class='cssCheckBOX' onchange='SetShortIQAMAOnOff()'> &nbsp; <label for='eShortIQAMA' id='XX_eShortIQAMA'> --- </label></div>

        <!--  FONTS   -->
        <hr>
        <div id='AAA_eFONTS1'>---</div>

        <table id='xtFonts'>
            <tr><th>TEXT</th><th>TIMES</th><th>CLOCK</th><th>AZKAR</th></tr>
            <tr>

                <td>
                    <input type='radio' onclick="goFontTHIS('Amiri');"      name='Rfon1' id='Amiri'><label for='Amiri'> AMIRI</label><br>
                    <input type='radio' onclick="goFontTHIS('Andalus');"    name='Rfon1' id='Andalus'><label for='Andalus'> ANDALUS</label><br>
                    <input type='radio' onclick="goFontTHIS('KSA');"        name='Rfon1' id='KSA'><label for='KSA'> KSA</label><br>
                    <input type='radio' onclick="goFontTHIS('Taha');"       name='Rfon1' id='Taha'><label for='Taha'> TAHA</label><br>
                    <input type='radio' onclick="goFontTHIS('STC');"        name='Rfon1' id='STC'><label for='STC'> STC</label><br>
                    <input type='radio' onclick="goFontTHIS('FODA');"       name='Rfon1' id='FODA'><label for='FODA'> FODA</label><br>
                    <input type='radio' onclick="goFontTHIS('MOLHIM');"     name='Rfon1' id='MOLHIM'><label for='MOLHIM'> MOLHIM</label><br>
                </td>
                <td>
                    <input type='radio' onclick="goFontTIMES('FreeSans');"  name='Rfon2' id='TIMES-FreeSans'><label for='TIMES-FreeSans'> FreeSANS</label><br>
                    <input type='radio' onclick="goFontTIMES('TTKP');"      name='Rfon2' id='TIMES-TTKP'><label for='TIMES-TTKP'> TTKP</label><br>
                    <input type='radio' onclick="goFontTIMES('FONTO');"     name='Rfon2' id='TIMES-FONTO'><label for='TIMES-FONTO'> FONTO</label><br>
                    <input type='radio' onclick="goFontTIMES('STC');"       name='Rfon2' id='TIMES-STC'><label for='TIMES-STC'> STC</label><br>
                </td>
                <td>
                    <input type='radio' onclick="goFontCLOKEN('FreeSans');" name='Rfon3' id='CLOCK-FreeSans'><label for='CLOCK-FreeSans'> FreeSANS</label><br>
                    <input type='radio' onclick="goFontCLOKEN('TTKP');"     name='Rfon3' id='CLOCK-TTKP'><label for='CLOCK-TTKP'> TTKP</label><br>
                    <input type='radio' onclick="goFontCLOKEN('FONTO');"    name='Rfon3' id='CLOCK-FONTO'><label for='CLOCK-FONTO'> FONTO</label><br>
                    <input type='radio' onclick="goFontCLOKEN('STC');"      name='Rfon3' id='CLOCK-STC'><label for='CLOCK-FONTO'> STC</label><br>
                </td>
                <td>
                    <input type='radio' onclick="goFontAZKAR('Amiri');"     name='Rfon4' id='AZKAR-Amiri'><label for='AZKAR-Amiri'> AMIRI</label><br>
                    <input type='radio' onclick="goFontAZKAR('KSA');"       name='Rfon4' id='AZKAR-KSA'><label for='AZKAR-KSA'> KSA</label><br>
                    <input type='radio' onclick="goFontAZKAR('Taha');"      name='Rfon4' id='AZKAR-Taha'><label for='AZKAR-Taha'> TAHA</label><br>
                    <input type='radio' onclick="goFontAZKAR('SULTAN');"    name='Rfon4' id='AZKAR-SULTAN'><label for='AZKAR-SULTAN'> SULTAN</label><br>
                    <input type='radio' onclick="goFontAZKAR('FODA');"      name='Rfon4' id='AZKAR-FODA'><label for='AZKAR-FODA'> FODA</label><br>
                    <input type='radio' onclick="goFontAZKAR('MOLHIM');"    name='Rfon4' id='AZKAR-MOLHIM'><label for='AZKAR-MOLHIM'> MOLHIM</label><br>
                </td>
            </tr>
        </table>


        <br>
        <!--  JANAZAT COUNT   -->
        <hr>
        <div><input type='checkbox' id='eJanazat' class='cssCheckBOX' onchange='SetJanazatOnOff()'> &nbsp; <label for='eJanazat' id='XX_JANAZAT_COUNTER'> --- </label></div>
        <div id='XX_JANAZAT_TEXTER' class='minigray'></div>
        <hr>

        <br><br><br><br>

    </div>

</div>






<!-- ■■■■■■■■■■■■ AZKAR  ■■■■■■■■■■■■■■■■■■■ -->
<div id='e_AZKAR' class='cssModelSettingsWINDOW cssColorLITE' >

    <div class='cssTitlesHOLDER'>
        <div class='cssWindowTITLE' ></div>
        <div class='cssWindowCLOSE' ><span onclick="SetScroll('scroAZKAR', 0);">&#9650;</span> &nbsp;  <span onclick="SetScroll('scroAZKAR', 1);">&#9660;</span> &nbsp;&nbsp;&nbsp; <span onclick='closeThis(this.parentNode);'>&#10006;</span></div>
    </div>

    <div id='scroAZKAR' class='cssSettingsDATA CSS_X_LANG_DIRECTION'>
        <div><input type='checkbox' id='eAzkarCHECK' class='cssCheckBOX' onchange='SwitchOnOffAZKAR()'> &nbsp; <label for='eAzkarCHECK' id='XX_AZKAR_0'> --- </label></div>
        <div><input type='checkbox' id='eAzkar5minCHECK' class='cssCheckBOX' onchange='SetOnePictureFixed5min()'> &nbsp; <label for='eAzkar5minCHECK' id='XX_AZKAR_4'> --- </label></div>
        <hr>
        <div dir='ltr'>
            If enabled, the Azkar whill show/hide after Prayers, and auto-stop after finishing.
            The view duration of Azkar is automatic, it depends on the length of every text.
            <br>
            To modify the content of Azkar, edit the file "/azkar/azkar.js".<br>
            To modify the picture of Azkat, modify the file "/azkar/azkar5min.jpg" <br>
            <br>
            To test Azkar, click 3 times on Azan-time of DOHR.<br>
            To stop Azkar, click on Azkar Screen.<br>
        </div>
        <br><br><br>
    </div>

</div>


<!-- ■■■■■■■■■■■■ AZKAR SABAH MASAA ■■■■■■■■■■■■■■■■■■■ -->
<div id='e_AZKAR_SBH_MSA' class='cssModelSettingsWINDOW cssColorLITE' >

    <div class='cssTitlesHOLDER'>
        <div class='cssWindowTITLE' ></div>
        <div class='cssWindowCLOSE' ><span onclick="SetScroll('scroAZKAR', 0);">&#9650;</span> &nbsp;  <span onclick="SetScroll('scroSBH_MSA', 1);">&#9660;</span> &nbsp;&nbsp;&nbsp; <span onclick='closeThis(this.parentNode);'>&#10006;</span></div>
    </div>

    <div id='scroSBH_MSA' class='cssSettingsDATA CSS_X_LANG_DIRECTION'>
        <div><input type='checkbox' id='eAzkarSBHCHECK' class='cssCheckBOX' onchange='OnOffAzkarSBH()'> &nbsp; <label for='eAzkarSBHCHECK' id='XX_AZKAR_SABAH'> --- </label></div>
        <div><input type='checkbox' id='eAzkarASRCHECK' class='cssCheckBOX' onchange='OnOffAzkarASR()'> &nbsp; <label for='eAzkarASRCHECK' id='XX_AZKAR_ASR'> --- </label></div>
        <div><input type='checkbox' id='eAzkarMGBCHECK' class='cssCheckBOX' onchange='OnOffAzkarMGB()'> &nbsp; <label for='eAzkarMGBCHECK' id='XX_AZKAR_MAGRIB'> --- </label></div>
        <div><input type='checkbox' id='eAzkarISHCHECK' class='cssCheckBOX' onchange='OnOffAzkarISH()'> &nbsp; <label for='eAzkarISHCHECK' id='XX_AZKAR_ISHA'> --- </label></div>
        <hr>
        <div dir='ltr'>
            Azkar Sabah/Masaa starts after main Azkar, and auto-stop after finishing.
            To modify the content of Azkar, edit the files "azkar-sabah.js" and "azkar-masaa.js".<br>
            To test Azkar-Sabah, click 3 times on Name of ASR.<br>
            To test Azkar-Masaa, click 3 times on Azan-time of ASR.<br>
            To stop Azkar, click on Azkar Screen.<br>
        </div>
        <br><br><br>
    </div>

</div>






<!-- ■■■■■■■■■■■■ SLIDERS  ■■■■■■■■■■■■■■■■■■■ -->
<div id='e_SLIDERS' class='cssModelSettingsWINDOW cssColorLITE' >

    <div class='cssTitlesHOLDER'>
        <div class='cssWindowTITLE' ></div>
        <div class='cssWindowCLOSE' ><span onclick="SetScroll('scroSLIDES', 0);">&#9650;</span> &nbsp;  <span onclick="SetScroll('scroSLIDES', 1);">&#9660;</span> &nbsp;&nbsp;&nbsp; <span onclick='closeThis(this.parentNode);'>&#10006;</span></div>
    </div>

    <div id='scroSLIDES' class='cssSettingsDATA CSS_X_LANG_DIRECTION'>
        <div><input type='checkbox' id='eSlidersCHECK' class='cssCheckBOX' onchange='SetOwnSlidersOnOff()'> &nbsp; <label for='eSlidersCHECK' id='XX_SLIDERS_0'></label></div>
        <hr>
        <div dir='ltr'>
            Slides are additional messages that you can display on the screen after Azkar/Sabah/Masaa.
            They are shown/hidden until the next Prayer.
            The view duration of the slides is automatic, it depends on the length of every message.
            To test the Slides, click 3 times on DOHR name.
            To stop the Slides, click on Slides Screen.<br>
            <b>PICTURES SUPPORT</b> : You can also add your own pictures as slides,
            simply write the filename of your slide as new slide text.
            Your picture file must be .jpg file and located in the "/slides/" folder.
            <hr>
            <!--  SLIDERS DATA HOLDER   -->
            <button class='eaBtn hnd' onclick='AddSLIDE();'>Add Slide</button>
            <div class='minigray'>Tip : Add the character "|" in your messages to create a new line</div>
            <table id='uaTBslides' dir='ltr'></table>
        </div>
        <br><br><br>
    </div>

</div>





<!-- ■■■■■■■■■■■■ PRAYINGS ADJUSTMENTS ■■■■■■■■■■■■■■■■■■■ -->
<div id='e_ADJUSTMENTS' class='cssModelSettingsWINDOW cssColorLITE' >

    <div class='cssTitlesHOLDER'>
        <div class='cssWindowTITLE' ></div>
        <div class='cssWindowCLOSE' ><span onclick="SetScroll('scroADJUSTMENTS', 0);">&#9650;</span> &nbsp;  <span onclick="SetScroll('scroADJUSTMENTS', 1);">&#9660;</span> &nbsp;&nbsp;&nbsp; <span onclick='closeThis(this.parentNode);'>&#10006;</span></div>
    </div>

    <div id='scroADJUSTMENTS' class='cssSettingsDATA CSS_X_LANG_DIRECTION'>


        <!--   Ramadan30  -->

        <div><input type='checkbox' id='eRamadan30CHECK' class='cssCheckBOX' onchange='SetRamadan30MinOnOff()'> &nbsp; <label for='eRamadan30CHECK' id='XX_ADJUST_3'> --- </label></div>

        <!--  Summer   -->
        <div><input type='checkbox' id='eSummerCHECK' class='cssCheckBOX' onchange='SetSummerOnOff()'> &nbsp; <label for='eSummerCHECK' id='XX_SUMMERTIME'> --- </label></div>

        <!--  MoreHour   -->
        <div><input type='checkbox' id='eMoreHourCHECK' class='cssCheckBOX' onchange='Set1MoreHOUR()'> &nbsp; <label for='eMoreHourCHECK' id='XX_1MOREHOUR'> --- </label></div>

        <!--   LessHour  -->
        <div><input type='checkbox' id='eLessHourCHECK' class='cssCheckBOX' onchange='Set1LessHOUR()'> &nbsp; <label for='eLessHourCHECK' id='XX_1LESSHOUR'> --- </label></div>





        <!--  PRAYERS ADJUSTEMENTS   -->
        <hr>
        <div id='XX_PRAYERS_ADJUSTEMENTS'>PRAYERS Adjustements</div>
        <table id='tablePrayADJ'>
            <tr>
                <td id='xxFAJR'></td>
                <td id='xxSHRQ'></td>
                <td id='xxDOHR'></td>
                <td id='xxASR'></td>
                <td id='xxMAGHRIB'></td>
                <td id='xxISHA'></td>
            </tr>
            <tr>
                <td id='AZAN_FAJR'></td>
                <td id='AZAN_SHRQ'></td>
                <td id='AZAN_DOHR'></td>
                <td id='AZAN_ASR'></td>
                <td id='AZAN_MAGHRIB'></td>
                <td id='AZAN_ISHA'></td>
            </tr>
            <tr>
                <td><button class='cccADJUSTER' onclick="goAZANminus('FAJR')">-</button>&nbsp;<button class='cccADJUSTER' onclick="goAZANcplus('FAJR')">+</button></td>
                <td><button class='cccADJUSTER' onclick="goAZANminus('SHRQ')">-</button>&nbsp;<button class='cccADJUSTER' onclick="goAZANcplus('SHRQ')">+</button></td>
                <td><button class='cccADJUSTER' onclick="goAZANminus('DOHR')">-</button>&nbsp;<button class='cccADJUSTER' onclick="goAZANcplus('DOHR')">+</button></td>
                <td><button class='cccADJUSTER' onclick="goAZANminus('ASR')">-</button>&nbsp;<button class='cccADJUSTER' onclick="goAZANcplus('ASR')">+</button></td>
                <td><button class='cccADJUSTER' onclick="goAZANminus('MAGHRIB')">-</button>&nbsp;<button class='cccADJUSTER' onclick="goAZANcplus('MAGHRIB')">+</button></td>
                <td><button class='cccADJUSTER' onclick="goAZANminus('ISHA')">-</button>&nbsp;<button class='cccADJUSTER' onclick="goAZANcplus('ISHA')">+</button></td>
            </tr>
        </table>


        <!--  IQAMA ADJUSTEMENTS   -->
        <hr>
        <div id='XX_IQAMA_ADJUSTEMENTS'>---</div>
        <table id='tableIQAMATS'>
            <tr>
                <td id='xxIQAMA0'></td>
                <td width='10%' align='left' id='IQAMA_FAJR'>-</td>
                <td width='10%' align='left'><button class='cccADJUSTER' onclick="goIQAMAminus('FAJR')">-</button></td>
                <td width='10%' align='left'><button class='cccADJUSTER' onclick="goIQAMAcplus('FAJR')">+</button></td>
                <td align='left'>
                    <select id='pFAJR' onchange='persoFAJR(this);'>
                        <option value=''>---</option>
                        <option value='03:00'>Fixed 03:00</option><option value='03:05'>Fixed 03:05</option><option value='03:10'>Fixed 03:10</option>
                        <option value='03:15'>Fixed 03:15</option><option value='03:20'>Fixed 03:20</option><option value='03:25'>Fixed 03:25</option>
                        <option value='03:30'>Fixed 03:30</option><option value='03:35'>Fixed 03:35</option><option value='03:40'>Fixed 03:40</option>
                        <option value='03:45'>Fixed 03:45</option><option value='03:50'>Fixed 03:50</option><option value='03:55'>Fixed 03:55</option>
                        <option value='04:00'>Fixed 04:00</option><option value='04:05'>Fixed 04:05</option><option value='04:10'>Fixed 04:10</option>
                        <option value='04:15'>Fixed 04:15</option><option value='04:20'>Fixed 04:20</option><option value='04:25'>Fixed 04:25</option>
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
                        <option value='07:05'>Fixed 07:05</option>
                        <option value='07:10'>Fixed 07:10</option>
                        <option value='07:15'>Fixed 07:15</option>
                        <option value='07:20'>Fixed 07:20</option>
                        <option value='07:25'>Fixed 07:25</option>
                        <option value='07:30'>Fixed 07:30</option>
                        <option value='07:45'>Fixed 07:45</option>
                        <option value='08:00'>Fixed 08:00</option>
                        <option value='08:15'>Fixed 08:15</option>
                        <option value='08:30'>Fixed 08:30</option>
                    </select>
                </td>
            </tr>
            <!--   SHRQ SETTINGS  -->
            <tr>
                <td id='xxIQAMA1'></td>
                <td id='IQAMA_SHRQ'></td>
                <td><button class='cccADJUSTER' onclick="goIQAMAminus('SHRQ')">-</button></td>
                <td><button class='cccADJUSTER' onclick="goIQAMAcplus('SHRQ')">+</button></td>
                <td>.</td>
            </tr>

            <!--   DOHR SETTINGS  -->
            <tr>
                <td id='xxIQAMA2'>---</td>
                <td id='IQAMA_DOHR'>-</td>
                <td><button class='cccADJUSTER' onclick="goIQAMAminus('DOHR')">-</button></td>
                <td><button class='cccADJUSTER' onclick="goIQAMAcplus('DOHR')">+</button></td>
                <td>
                    <select id='pDOHR' onchange='persoDOHR(this);'>
                        <option value=''>---</option>
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
                        <option value='15:30'>Fixed 15:30</option>
                        <option value='16:00'>Fixed 16:00</option>
                    </select>
                </td>
            </tr>
            <!--   ASR SETTINGS  -->
            <tr>
                <td width='30%' align='center' id='xxIQAMA3'>---</td>
                <td width='10%' align='left' id='IQAMA_ASR'>-</td>
                <td width='10%' align='left'><button class='cccADJUSTER' onclick="goIQAMAminus('ASR')">-</button></td>
                <td width='10%' align='left'><button class='cccADJUSTER' onclick="goIQAMAcplus('ASR')">+</button></td>
                <td align='left'>
                    <select id='pASR' onchange='persoASR(this);'>
                        <option value=''>---</option>
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
            </tr>
            <!--   MAGHRIB SETTINGS  -->
            <tr>
                <td width='30%' align='center' id='xxIQAMA4'>---</td>
                <td width='10%' align='left' id='IQAMA_MAGHRIB'>-</td>
                <td width='10%' align='left'><button class='cccADJUSTER' onclick="goIQAMAminus('MAGHRIB')">-</button></td>
                <td width='10%' align='left'><button class='cccADJUSTER' onclick="goIQAMAcplus('MAGHRIB')">+</button></td>
                <td align='left'>.</td>
            </tr>
            <!--   ISHA SETTINGS  -->
            <tr>
                <td width='30%' align='center' id='xxIQAMA5'>---</td>
                <td width='10%' align='left' id='IQAMA_ISHA'>-</td>
                <td width='10%' align='left'><button class='cccADJUSTER' onclick="goIQAMAminus('ISHA')">-</button></td>
                <td width='10%' align='left'><button class='cccADJUSTER' onclick="goIQAMAcplus('ISHA')">+</button></td>
                <td align='left'>
                    <select id='pISHA' onchange='persoISHA(this);'>
                        <option value=''>---</option>
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
                        <option value='21:15'>Fixed 21:15</option>
                        <option value='21:30'>Fixed 21:30</option>
                        <option value='21:45'>Fixed 21:45</option>
                        <option value='22:00'>Fixed 22:00</option>
                        <option value='22:15'>Fixed 22:15</option>
                        <option value='22:30'>Fixed 22:30</option>
                        <option value='22:45'>Fixed 22:45</option>
                        <option value='23:00'>Fixed 23:00</option>
                        <option value='23:15'>Fixed 23:15</option>
                        <option value='23:30'>Fixed 23:30</option>
                    </select>
                </td>
            </tr>
        </table>
        <br>

        <hr>
        <table align='center' cellpadding='5' width='100%' >
            <tr>
                <td width='70%' valign='top'>
                    <div id='XX_JOMOA_ONOFF'></div>
                    <div><input type='checkbox' id='eJomoa01CHECK' class='cssCheckBOX' onchange='SetJOMOAonOff()'> &nbsp; <label for='eJomoa01CHECK' id='XX_JOMOA_SHOW'></label></div>
                    <div><input type='checkbox' id='eJomoaLogoCHECK' class='cssCheckBOX' onchange='SetJomoaLogoCHECK()'> &nbsp; <label for='eJomoaLogoCHECK' id='XX_JOMOA_INLOGO'></label></div>
                </td>
                <td width='30%' align='left' valign='top'>
                    <select id='pJOMOA' onchange='persoJOMOA(this);'>
                        <option value='AUTO'>AUTOMATIC</option>
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
                        <option value='15:30'>Fixed 15:30</option>
                        <option value='16:00'>Fixed 16:00</option>
                    </select>
                </td>
            </tr>
        </table>


        <hr>
        <div id='AAA_HijriClick' ></div>

        <hr>
        <div onclick='doDHRxminASR();'><span id='XX_DOHR_XMIN_ASR' ></span> <span id='DHRxminASR' class='wt' >0</span></div>

        <hr>

        <br>
        <br><br><br>
    </div>

</div>




<!-- ■■■■■■■■■■■■ BLACK SCREEN PRAYING DURATION ■■■■■■■■■■■■■■■■■■■ -->
<div id='e_BLACKSCREEN' class='cssModelSettingsWINDOW cssColorLITE' >

    <div class='cssTitlesHOLDER'>
        <div class='cssWindowTITLE' ></div>
        <div class='cssWindowCLOSE' ><span onclick="SetScroll('scroBLACKS', 0);">&#9650;</span> &nbsp;  <span onclick="SetScroll('scroBLACKS', 1);">&#9660;</span> &nbsp;&nbsp;&nbsp; <span onclick='closeThis(this.parentNode);'>&#10006;</span></div>
    </div>

    <div id='scroBLACKS' class='cssSettingsDATA CSS_X_LANG_DIRECTION'>

        <!--   DIMM SCREEN ON-OFF   -->
        <div><input type='checkbox' id='eDimmCHECK' class='cssCheckBOX' onchange='SetDimmOnOff()'> &nbsp; <label for='eDimmCHECK' id='XX_DIMMER_0'></label></div>
        <div><input type='checkbox' id='eDohaScreenCHECK' class='cssCheckBOX' onchange='DohaSaverOnOff()'> &nbsp; <label for='eDohaScreenCHECK' id='XX_DIMMER_1'></label></div>
        <div><input type='checkbox' id='eIshaScreenCHECK' class='cssCheckBOX' onchange='IshaSaverOnOff()'> &nbsp; <label for='eIshaScreenCHECK' id='XX_DIMMER_2'></label></div>


        <!--   JOMOA_DIM_SETTINGS  -->
        <table align='center' cellpadding='5' width='100%' class='cccTBL1' >
            <tr>
                <td width='17%' id='xxJOMOA'> JOMOA  </td>
                <td width='63%' align='right' id='XX_DIMMER_3'></td>
                <td width='12%' align='center' id='jjjJOMOA_BEFORE_DOHR'>0</td>
                <td width='4%' align='left'><button class='cccADJUSTER' onclick="JomoaBEFOREminus()">-</button></td>
                <td width='4' align='left'><button class='cccADJUSTER' onclick="JomoaBEFOREplus()">+</button></td>
            </tr>
            <tr>
                <td width='17%' align='left'></td>
                <td width='63%' align='right' id='XX_DIMMER_4'></td>
                <td width='12%' align='center' id='jjjJOMOA_AFTER_DOHR'>0</td>
                <td width='4%' align='left'><button class='cccADJUSTER' onclick="JomoaAFTERminus()">-</button></td>
                <td width='4%' align='left'><button class='cccADJUSTER' onclick="JomoaAFTERplus()">+</button></td>
            </tr>
        </table>

        <br>


        <!--   DURATION OF PRAYING   -->
        <!--  ======================================================   -->
        <!--  ======================================================   -->
        <!--  ======================================================   -->
        <div align='center' id='XX_DIMMER_5' style='color:white;' ></div>


        <!--   FAJR DURATION   -->
        <table align='center' cellpadding='5' width='80%' class='cccTBL1' >
            <tr>
                <td width='50%' id='yyFAJR'>  </td>
                <td width='20%' align='left' id='DURATION_FAJR'>0</td>
                <td width='15%' align='left'><button class='cccADJUSTER' onclick="goDURATIONminus('FAJR')">-</button></td>
                <td width='15%' align='left'><button class='cccADJUSTER' onclick="goDURATIONcplus('FAJR')">+</button></td>
            </tr>
        </table>


        <!--   DOHR DURATION  -->
        <table align='center' cellpadding='5' width='80%' class='cccTBL1' >
            <tr>
                <td width='50%' id='yyDOHR'>  </td>
                <td width='20%' align='left' id='DURATION_DOHR'>0</td>
                <td width='15%' align='left'><button class='cccADJUSTER' onclick="goDURATIONminus('DOHR')">-</button></td>
                <td width='15%' align='left'><button class='cccADJUSTER' onclick="goDURATIONcplus('DOHR')">+</button></td>
            </tr>
        </table>


        <!--   ASR DURATION  -->
        <table align='center' cellpadding='5' width='80%' class='cccTBL1' >
            <tr>
                <td width='50%' id='yyASR'>  </td>
                <td width='20%' align='left' id='DURATION_ASR'>0</td>
                <td width='15%' align='left'><button class='cccADJUSTER' onclick="goDURATIONminus('ASR')">-</button></td>
                <td width='15%' align='left'><button class='cccADJUSTER' onclick="goDURATIONcplus('ASR')">+</button></td>
            </tr>
        </table>


        <!--   MAGHRIB DURATION  -->
        <table align='center' cellpadding='5' width='80%' class='cccTBL1' >
            <tr>
                <td width='50%' id='yyMAGHRIB'>  </td>
                <td width='20%' align='left' id='DURATION_MAGHRIB'>0</td>
                <td width='15%' align='left'><button class='cccADJUSTER' onclick="goDURATIONminus('MAGHRIB')">-</button></td>
                <td width='15%' align='left'><button class='cccADJUSTER' onclick="goDURATIONcplus('MAGHRIB')">+</button></td>
            </tr>
        </table>


        <!--   ISHA DURATION  -->
        <table align='center' cellpadding='5' width='80%' class='cccTBL1' >
            <tr>
                <td width='50%' id='yyISHA'>  </td>
                <td width='20%' align='left' id='DURATION_ISHA'>0</td>
                <td width='15%' align='left'><button class='cccADJUSTER' onclick="goDURATIONminus('ISHA')">-</button></td>
                <td width='15%' align='left'><button class='cccADJUSTER' onclick="goDURATIONcplus('ISHA')">+</button></td>
            </tr>
        </table>

    </div>

</div>



<!-- ■■■■■■■■■■■■ LOCATION ■■■■■■■■■■■■■■■■■■■ -->
<div id='e_LOCALISATION' class='cssModelSettingsWINDOW cssColorLITE' >

    <div class='cssTitlesHOLDER'>
        <div class='cssWindowTITLE' ></div>
        <div class='cssWindowCLOSE' ><span onclick="SetScroll('scroLOCATION', 0);">&#9650;</span> &nbsp;  <span onclick="SetScroll('scroLOCATION', 1);">&#9660;</span> &nbsp;&nbsp;&nbsp; <span onclick="closeThis(this.parentNode);">&#10006;</span></div>
    </div>

    <div id='scroLOCATION' class='cssSettingsDATA CSS_X_LANG_DIRECTION'>


        <div style='position:relative; background-color:inherit;' >

            <table align='center' cellpadding='2' cellspacing='1' width='100%' style='background-color:#151515;' >
                <tr>
                    <td width='100%' >
                        <input type='checkbox' id='eWCSV' class='cssCheckBOX' onchange='SetPersoWCSV()'> &nbsp;
                        <label for='eWCSV' id='XX_WCSV_MESSAGE'></label>
                    </td>
                </tr>

                <tr>
                    <td width='100%' class='otoHIDN' >
                        <div id='eLocationByFILE' class='cssLocationDATA' >---</div>
                        <div id='XX_TIMES_2' >---</div>
                    </td>
                </tr>

                <tr>
                    <td width='100%' align='center' valign='top' id='XX_CALC_JX' class='otoHIDN'>
                        <select id='jxCOUNTRY' onchange='jxCountryCHANGE(this);' class='w45' >
                        </select>
                        &nbsp;&nbsp;&nbsp;
                        <select id='citiesLIST' onchange='getCITY(this);' class='w45' >
                        </select>
                    </td>
                </tr>

                <tr>
                    <td width='100%' valign='top' class='otoHIDN'>
                        <div style='padding:3%; color:white;' >
                            <span id='XX_TIMES_3'></span>, <span id='XX_TIMES_4'></span>
                            <div id='XX_YearlyWTIMES'></div>
                            <a href="{{url('/wtimes')}}" target='_blank'>{{url('/wtimes')}}</a>
                        </div>
                    </td>
                </tr>
            </table>


            <br>
            <div align='center' style='margin-top:2%; padding:3%; color:#DFBB75;' >
                <div id='XX_MISC_0' ></div><br>
                <button onclick='location.reload();' id='XX_TIMES_5' ></button>
            </div>
            <br>

        </div>

    </div>

</div>



<!-- ■■■■■■■■■■■■ e_ADMINMSGS ■■■■■■■■■■■■■■■■■■■ -->
<div id='e_ADMINMSGS' class='cssModelSettingsWINDOW cssColorLITE' >

    <div class='cssTitlesHOLDER'>
        <div class='cssWindowTITLE' ></div>
        <div class='cssWindowCLOSE' ><span onclick="SetScroll('scroADMIN_MSGS', 0);">&#9650;</span> &nbsp;  <span onclick="SetScroll('scroADMIN_MSGS', 1);">&#9660;</span> &nbsp;&nbsp;&nbsp; <span onclick="closeThis(this.parentNode);">&#10006;</span></div>
    </div>

    <div id='scroADMIN_MSGS' class='cssSettingsDATA CSS_X_LANG_DIRECTION'>

        <!--  e_ADMIN_MSGS   -->
        <div id='XX_ADMINMSGS_0'></div>
        <div id='XX_ADMINMSGS_TEXTER' class='minigray'></div>
        <div><input type='checkbox' id='eScrollableMSG' class='cssCheckBOX' onchange='SetScrollableMSGOnOff()'> &nbsp; <label for='eScrollableMSG' id='XX_SCROLLABLE_MSG'> --- </label></div>
        <button class='eaBtn hnd' onclick='ADMINMSGSEditor();' id='XX_ADD_MSG'></button>
        <div id='XX_ADMINMSGS_HELP' class='minigray'></div>
        <table id='uaTBL1' dir='ltr'></table>

        <br><br><br><br>
    </div>

</div>



<!-- ■■■■■■■■■■■■ METEO ■■■■■■■■■■■■■■■■■■■ -->
<div id='e_METEO' class='cssModelSettingsWINDOW cssColorLITE' >

    <div class='cssTitlesHOLDER'>
        <div class='cssWindowTITLE' ></div>
        <div class='cssWindowCLOSE' ><span onclick="SetScroll('scroMETEO', 0);">&#9650;</span> &nbsp;  <span onclick="SetScroll('scroMETEO', 1);">&#9660;</span> &nbsp;&nbsp;&nbsp; <span onclick='closeThis(this.parentNode);'>&#10006;</span></div>
    </div>

    <div id='scroMETEO' class='cssSettingsDATA'>

        <div><input type='checkbox' id='MeteoCHECK' class='cssCheckBOX' onchange='SetMeteoOnOff()'> &nbsp; <label for='MeteoCHECK' id='xxMETEO'></label></div>
        <div><input type='checkbox' id='eMtoPRYRS' class='cssCheckBOX' onchange='SetMtoPRYRS()'> &nbsp; <label for='eMtoPRYRS' id='XX_METEOPRYRS'></label></div>
        <center>
            <button onclick='updateGpsMETEO();'>GPS Position By Browser</button><br>
            <button onclick='ManuallyGPS();'>GPS Position Manually</button><br>
            <br>
            GPS Position : <span id='mtoGPS'></span>
        </center>
        <br>
        <div align='center' class='minigray' >7 DAYS WEATHER FORECASTS.<br>Auto-updates when application starts and at midnight.<br>This service needs Internet at least once a week.<br><br>Service by : Open-Meteo.com</div>
        <br><br><br>

    </div>

</div>





<!-- ******************************************************************************** -->


<script>

    document.body.setAttribute('lang', JS_LANG_NOW);
    JS_ROOT.style.setProperty('--XX_MAJORFONTO', JS_ACTIVE_FONTO);
    document.getElementById(JS_ACTIVE_FONTO).checked = true;

    try
    {
        document.getElementById('TIMES-'+JSALLDATA.FontoTIMES).checked = true;
        document.getElementById('CLOCK-'+JSALLDATA.FontoCLOKEN).checked = true;
        document.getElementById('AZKAR-'+JSALLDATA.FontoAZKAR).checked = true;
    }
    catch(err) {}



    JS_ROOT.style.setProperty('--XX_SCREENAZKAR', JSALLDATA.FontoAZKAR);


    var JS_VReJomoa             = document.getElementById('VReJomoa');
    var JS_VReNXXX              = document.getElementById('VReNXXX');

    var JS_eMainVERTICAL        = document.getElementById('eMainVERTICAL');
    var JS_eMainHORIZONTAL      = document.getElementById('eMainHORIZONTAL');

    var JS_VReAYATS             = document.getElementById('VReAYATS');
    var JS_HReAYATS             = document.getElementById('HReAYATS');

    var JS_VRMsqNAME            = document.getElementById('VRMsqNAME');
    var JS_HRMsqNAME            = document.getElementById('HRMsqNAME');

    var JS_VR_EMESSAGE0         = document.getElementById('VReMESSAGE0');
    var JS_VR_EMESSAGE1         = document.getElementById('VReMESSAGE1');
    var JS_HR_EMESSAGE0         = document.getElementById('HReMESSAGE0');
    var JS_HR_EMESSAGE1         = document.getElementById('HReMESSAGE1');


    var JS_eRIDO            = document.getElementById('eRIDO');
    var JS_HReRIDO          = document.getElementById('HReRIDO');


    var JS_VRCONTO          = document.getElementById('VRCONTO');
    var JS_sVRCONTO         = document.getElementById('sVRCONTO');
    var JS_sVRCloky         = document.getElementById('sVRCloky');

    var JS_HRCONTO          = document.getElementById('HRCONTO');
    var JS_sHRCONTO         = document.getElementById('sHRCONTO');
    var JS_sHRCloky         = document.getElementById('sHRCloky');

    var JS_LastMinVR        = document.getElementById('LastMinVR');
    var JS_LastMinHR        = document.getElementById('LastMinHR');

    var JS_tube0            = document.getElementById('tube0');
    var JS_tube1            = document.getElementById('tube1');
    var JS_tube2            = document.getElementById('tube2');
    var JS_tube3            = document.getElementById('tube3');
    var JS_tube4            = document.getElementById('tube4');
    var JS_tube5            = document.getElementById('tube5');


    var JS_W333HRtube0          = document.getElementById('W333HRtube0');
    var JS_W333HRtube1          = document.getElementById('W333HRtube1');
    var JS_W333HRtube2          = document.getElementById('W333HRtube2');
    var JS_W333HRtube3          = document.getElementById('W333HRtube3');
    var JS_W333HRtube4          = document.getElementById('W333HRtube4');
    var JS_W333HRtube5          = document.getElementById('W333HRtube5');


    var JS_VRAzanCOMES      = document.getElementById('VRAzanCOMES');
    var JS_HRAzanCOMES      = document.getElementById('HRAzanCOMES');

    var JS_VRIQAMATIME      = document.getElementById('VRIQAMATIME');
    var JS_HRIQAMATIME      = document.getElementById('HRIQAMATIME');


    var JS_VRDOHACAME       = document.getElementById('VRDOHACAME');
    var JS_HRDOHACAME       = document.getElementById('HRDOHACAME');


    var JS_VRAZKAR      = document.getElementById('VRAZKAR');
    var JS_HRAZKAR      = document.getElementById('HRAZKAR');

    var JS_VRSLIDES         = document.getElementById('VRSLIDES');
    var JS_HRSLIDES         = document.getElementById('HRSLIDES');

    var JS_eMobile          = document.getElementById('eMobile');
    var JS_HReMobile        = document.getElementById('HReMobile');

    var JS_ALONGO           = document.getElementById('HahowaALONGO');

    var JS_HRdynamo         = document.getElementById('HRdynamo');
    var JS_VRdynamo         = document.getElementById('VRdynamo');


    var JS_eVoiceCHECK      = document.getElementById('eVoiceCHECK');
    var JS_eShortAZAN       = document.getElementById('eShortAZAN');
    var JS_eShortIQAMA      = document.getElementById('eShortIQAMA');
    var JS_eRamadan30CHECK  = document.getElementById('eRamadan30CHECK');
    var JS_summerCHECK      = document.getElementById('eSummerCHECK');
    var JS_eMoreHourCHECK   = document.getElementById('eMoreHourCHECK');
    var JS_eLessHourCHECK   = document.getElementById('eLessHourCHECK');
    var JS_e24CHECK         = document.getElementById('e24CHECK');
    var JS_MeteoCHECK       = document.getElementById('MeteoCHECK');
    var JS_eFullClockCHECK  = document.getElementById('eFullClockCHECK');
    var JS_ePastDimerCHECK  = document.getElementById('ePastDimerCHECK');
    var JS_eWCSVCHECK       = document.getElementById('eWCSV');
    var JS_eArabicDIGITS    = document.getElementById('eArabicDIGITS');
    var JS_eIQAMAasHOURCHECK    = document.getElementById('eIQAMAasHOUR');
    var JS_eCOUNTDOWNOnOff      = document.getElementById('eCOUNTDOWNOnOff');
    var JS_eDimmCHECK           = document.getElementById('eDimmCHECK');
    var JS_eSlidersCHECK    = document.getElementById('eSlidersCHECK');
    var JS_eAzkarCHECK      = document.getElementById('eAzkarCHECK');
    var JS_eAzkar5minCHECK  = document.getElementById('eAzkar5minCHECK');

    var JS_VReALERT = document.getElementById('VReALERT');
    var JS_HReALERT = document.getElementById('HReALERT');

    var JS_T_0 = document.getElementById('t0');
    var JS_T_1 = document.getElementById('t1');
    var JS_T_2 = document.getElementById('t2');
    var JS_T_3 = document.getElementById('t3');
    var JS_T_4 = document.getElementById('t4');
    var JS_T_5 = document.getElementById('t5');


    var JS_S_0 = document.getElementById('s0');
    var JS_S_1 = document.getElementById('s1');
    var JS_S_2 = document.getElementById('s2');
    var JS_S_3 = document.getElementById('s3');
    var JS_S_4 = document.getElementById('s4');
    var JS_S_5 = document.getElementById('s5');



    var JS_HHHS_0 = document.getElementById('W333H_s0');
    var JS_HHHS_1 = document.getElementById('W333H_s1');
    var JS_HHHS_2 = document.getElementById('W333H_s2');
    var JS_HHHS_3 = document.getElementById('W333H_s3');
    var JS_HHHS_4 = document.getElementById('W333H_s4');
    var JS_HHHS_5 = document.getElementById('W333H_s5');

    var JS_xtrHOR1 = document.getElementById('xtrHOR1');
    var JS_xtrHOR2 = document.getElementById('xtrHOR2');
    var JS_xtrHOR3 = document.getElementById('xtrHOR3');
    var JS_xtrHOR4 = document.getElementById('xtrHOR4');
    var JS_xtrHOR5 = document.getElementById('xtrHOR5');
    var JS_xtrHOR6 = document.getElementById('xtrHOR6');


    var JS_W333HT_0 = document.getElementById('W333Ht0');
    var JS_W333HT_1 = document.getElementById('W333Ht1');
    var JS_W333HT_2 = document.getElementById('W333Ht2');
    var JS_W333HT_3 = document.getElementById('W333Ht3');
    var JS_W333HT_4 = document.getElementById('W333Ht4');
    var JS_W333HT_5 = document.getElementById('W333Ht5');


    var JS_QM1 = document.getElementById('qm1');
    var JS_QM2 = document.getElementById('qm2');
    var JS_QM3 = document.getElementById('qm3');
    var JS_QM4 = document.getElementById('qm4');
    var JS_QM5 = document.getElementById('qm5');
    var JS_QM6 = document.getElementById('qm6');


    var JS_W333HRQM1 = document.getElementById('W333HRqm1');
    var JS_W333HRQM2 = document.getElementById('W333HRqm2');
    var JS_W333HRQM3 = document.getElementById('W333HRqm3');
    var JS_W333HRQM4 = document.getElementById('W333HRqm4');
    var JS_W333HRQM5 = document.getElementById('W333HRqm5');
    var JS_W333HRQM6 = document.getElementById('W333HRqm6');

    var _vre  = document.getElementById('VReVER');
    var _hrb0 = document.getElementById('HR_Btm0');
    var _hrb1 = document.getElementById('HR_Btm1');
    var _abx  = document.getElementById('bx0');

    var JS_VRCELSIUS    = document.getElementById('VRCELSIUS');
    var JS_VRimgMETEO   = document.getElementById('VRimgMETEO');
    var JS_HRimgMETEO   = document.getElementById('HRimgMETEO');
    var JS_HRCELSIUS    = document.getElementById('HRCELSIUS');

    var JS_HRmtoHHH = document.getElementById('HRmtoHHH');
    var JS_VRmtoHHH = document.getElementById('VRmtoHHH');
    var _ab1    = document.getElementById('ab1');
    var _ab5    = document.getElementById('ab5');


    var _fjr        = 0;
    var _shrq       = 0;
    var _thuhr      = 0;
    var _asr        = 0;
    var _maghreb    = 0;
    var _isha       = 0;

    var JS_nowMNTS  = 0;
    var _mn1= document.getElementById('mn1');
    var JS_HIJRI_DECALAGE = 0;
    var tempDECALA = localStorage.getItem('STORAGE_DECALAGE');
    if (['-2', '-1', '0', '1', '2'].indexOf(tempDECALA) >= 0) {JS_HIJRI_DECALAGE = parseInt(tempDECALA);}


    var JS_PRAYNAMES_NOW    = [];
    var JS_WEEK_DAYS_NOW    = [];
    var JS_MONTHS_NOW       = [];
    var JS_HIJRI_NOW        = [];


    var JS_MONTHS_ZZ    = [
        "كانون الثاني,شباط,آذار,نيسان,أيار,حزيران,تموز,آب,أيلول,تشرين الأول,تشرين الثاني,كانون الأول",
        "جانفي,فيفري,مارس,أفريل,ماي,جوان,جويلية,أوت,سبتمبر,أكتوبر,نوفمبر,ديسمبر"];



        var JS_NOW_ACTIVE_SALAT = 0;
        var JS_COLORO_CLOCK     = 'white';
        var JS_COLORO_SEKSALATS = 'white';
        var JS_COLORO_LOWFOCUS  = 'white';
        var JS_COLORO_BGTUBE    = 'white';


        var JS_uuuCOUNTRY = document.getElementById('uuuCOUNTRY');
        var JS_jxCOUNTRY  = document.getElementById('jxCOUNTRY');
        var _netv,JS_NOW_SALAT_NAME;
        var JS_COUNT_MSGS = 3;
        var JS_ACTIVE_BG  = 19;
        var tempBG = localStorage.getItem('STORAGE_THEME_BG');var _net;
        if(tempBG){JS_ACTIVE_BG = parseInt(tempBG);}

        var JS_HR_LOGO = document.getElementById('HR_LOGO');
        var JS_HRJOMOABOX = document.getElementById('HRJOMOABOX');
        var JS_HReNextBOX = document.getElementById('HReNextBOX');

        var JS_CLOKO_MINI_VR = document.getElementById('CLOKO_MINI_VR');
        var JS_CLOKO_FULL_VR = document.getElementById('CLOKO_FULL_VR');
        var JS_CLOKO_MINI_HR = document.getElementById('CLOKO_MINI_HR');
        var JS_CLOKO_FULL_HR = document.getElementById('CLOKO_FULL_HR');

        var JS_sHRnbr = document.getElementById('sHRnbr');
        var JS_sVRnbr = document.getElementById('sVRnbr');



        var JS_eVRDATES = document.getElementById('eVRDATES');
        var JS_eVRzzzDATES = document.getElementById('eVRzzzDATES');
        var JS_HRMILADIHIJRI = document.getElementById('HRMILADIHIJRI');
        var JS_HRMHJJJ      = document.getElementById('HRMHJJJ');
//-----------------------------------------------------------------------------------
        function goSetBG()
        {

            var JS_NowTHEME = '';
            var tempSTR     = '';

            if( (JS_DISPLAY_IS_HORIZONTAL)&&(JS_FORCED_VERTICAL==0) )
            {
                JS_NowTHEME = 'assets/offline/themes/HR-' + JS_ACTIVE_BG ;
                tempSTR = JS_THEMES_HORIZONTALS[JS_ACTIVE_BG];
                JS_MESSAGES = JS_MESSAGES_HR;
                JS_COUNT_MSGS   = JS_MESSAGES.length;
        go5BoxesJomoaLogo(); // refresh
        const hrjx = [15,16,17];
        if(hrjx.indexOf(JS_ACTIVE_BG) > -1)
        {
            JS_HRMILADIHIJRI.style.visibility='hidden';
            JS_HRMHJJJ.style.visibility='visible';
        }
        else
        {
            JS_HRMILADIHIJRI.style.visibility='visible';
            JS_HRMHJJJ.style.visibility='hidden';
        }
    }
    else
    {
        JS_NowTHEME = 'themes/VR-' + JS_ACTIVE_BG;
        tempSTR = JS_THEMES_VERTICALS[JS_ACTIVE_BG];
        JS_MESSAGES = JS_MESSAGES_VR;
        JS_COUNT_MSGS   = JS_MESSAGES.length;
        const vr002 = [0,4,5,6,7,8,9,13,19,20,21,22,23,24,25,28,29];
        if(vr002.indexOf(JS_ACTIVE_BG) !== -1)
            JS_eMainVERTICAL.className = 's002'; else JS_eMainVERTICAL.className = 's003';
        goNoNEXTNoJMA(true);
    }



    JS_eMainVERTICAL.style.background           = 'url(' + JS_NowTHEME+ '.jpg)';
    JS_eMainVERTICAL.style.backgroundRepeat     = 'no-repeat';
    JS_eMainVERTICAL.style.backgroundSize       = '100% 100%';

    JS_eMainHORIZONTAL.style.background         = 'url(' + JS_NowTHEME + '.jpg)';
    JS_eMainHORIZONTAL.style.backgroundRepeat   = 'no-repeat';
    JS_eMainHORIZONTAL.style.backgroundSize     = '100% 100%';




    JS_VRAzanCOMES.style.background         = 'url(' + JS_NowTHEME + '.jpg)';
    JS_VRAzanCOMES.style.backgroundRepeat   = 'no-repeat';
    JS_VRAzanCOMES.style.backgroundSize     = '100% 100%';

    JS_HRAzanCOMES.style.background         = 'url(' + JS_NowTHEME + '.jpg)';
    JS_HRAzanCOMES.style.backgroundRepeat   = 'no-repeat';
    JS_HRAzanCOMES.style.backgroundSize     = '100% 100%';

    JS_VRIQAMATIME.style.background         = 'url(' + JS_NowTHEME + '.jpg)';
    JS_VRIQAMATIME.style.backgroundRepeat   = 'no-repeat';
    JS_VRIQAMATIME.style.backgroundSize     = '100% 100%';

    JS_HRIQAMATIME.style.background         = 'url(' + JS_NowTHEME + '.jpg)';
    JS_HRIQAMATIME.style.backgroundRepeat   = 'no-repeat';
    JS_HRIQAMATIME.style.backgroundSize     = '100% 100%';


    JS_VRDOHACAME.style.background          = 'url(' + JS_NowTHEME + '.jpg)';
    JS_VRDOHACAME.style.backgroundRepeat    = 'no-repeat';
    JS_VRDOHACAME.style.backgroundSize      = '100% 100%';

    JS_HRDOHACAME.style.background          = 'url(' + JS_NowTHEME + '.jpg)';
    JS_HRDOHACAME.style.backgroundRepeat    = 'no-repeat';
    JS_HRDOHACAME.style.backgroundSize      = '100% 100%';



    JS_ACTIVE_COLORYO = tempSTR.split('|');

    JS_COLORO_CLOCK     = JS_ACTIVE_COLORYO[0];
    JS_COLORO_SEKSALATS = JS_ACTIVE_COLORYO[1];
    JS_COLORO_LOWFOCUS  = JS_ACTIVE_COLORYO[2];
    JS_COLORO_BGTUBE    = JS_ACTIVE_COLORYO[3];


    document.body.style.color = JS_COLORO_LOWFOCUS;

    JS_ROOT.style.setProperty('--Color_CLOCK',     JS_COLORO_CLOCK);
    JS_ROOT.style.setProperty('--Color_SEKSALATS', JS_COLORO_SEKSALATS);
    JS_ROOT.style.setProperty('--Color_LOWFOCUS',  JS_COLORO_LOWFOCUS);
    JS_ROOT.style.setProperty('--Color_BGTUBE',    JS_COLORO_BGTUBE);

    if(JS_COLORO_CLOCK == "#FFFFFF")
        JS_ROOT.style.setProperty('--Color_GOLDEN', '#F4DB97');
    else
        JS_ROOT.style.setProperty('--Color_GOLDEN', JS_COLORO_CLOCK);

    goSetNextSalatRemainingTIME(JS_nowMNTS);
    _GoMessages();
    updateBottomInformations();
}
//-----------------------------------------------------------------------------------
function changeBG(nbr)
{
    JS_ACTIVE_BG = nbr;
    localStorage.setItem('STORAGE_THEME_BG', JS_ACTIVE_BG);
    goSetBG();
}


function demoThemesNEXT()
{
    JS_ACTIVE_BG++;
    if(JS_ACTIVE_BG > 29) JS_ACTIVE_BG = 0;
    changeBG(JS_ACTIVE_BG);
}


function demoThemesBACK()
{
    JS_ACTIVE_BG--;
    if(JS_ACTIVE_BG < 0) JS_ACTIVE_BG =29;
    changeBG(JS_ACTIVE_BG);
}


var JS_citiesListBOX = document.getElementById('citiesLIST');
//-------------------------------------------------------------
function goFillCities()
{

    var strNow = '';

// "SA.JAZAN.---",

    for (var i=0; i < JS_CITIES_DATA.length; i++)
    {
        strNow = JS_CITIES_DATA[i];
        var tmpARR = strNow.split(".");
        var strCodeCLN  = tmpARR[0]+"."+tmpARR[1];
        var CityCln = tmpARR[1];
        if(tmpARR[2] !== '---') CityCln += '.'+tmpARR[2];

        var newOPTO    = new Option(CityCln, strCodeCLN);
        JS_citiesListBOX.append(newOPTO);
        if(strCodeCLN == JS_CITY_CODE) newOPTO.selected = true;
    }

}


function goSelektJOMOAnDOHR()
{

    var JS_pJOMOA   = document.getElementById('pJOMOA');
    var JS_pFAJR    = document.getElementById('pFAJR')
    var JS_pDOHR    = document.getElementById('pDOHR');
    var JS_pASR     = document.getElementById('pASR');
    var JS_pISHA    = document.getElementById('pISHA');

        //----------------- JOMOA
    for(var i=0; i < JS_pJOMOA.options.length; i++)
    {
        var optio = JS_pJOMOA.options[i];
        if(optio.value == JS_PERSO_FIXED_JOMOA) optio.selected = true;
    }

        //----------------- FAJR
    for(var i=0; i < JS_pFAJR.options.length; i++)
    {
        var optio = JS_pFAJR.options[i];
        if(optio.value == JS_FIXED_IQAMATFAJR) optio.selected = true;
    }
        //----------------- DOHR
    for(var i=0; i < JS_pDOHR.options.length; i++)
    {
        var optio = JS_pDOHR.options[i];
        if(optio.value == JS_FIXED_IQAMATDOHR) optio.selected = true;
    }
        //----------------- ASR
    for(var i=0; i < JS_pASR.options.length; i++)
    {
        var optio = JS_pASR.options[i];
        if(optio.value == JS_FIXED_IQAMATASR) optio.selected = true;
    }
        //----------------- ISHA
    for(var i=0; i < JS_pISHA.options.length; i++)
    {
        var optio = JS_pISHA.options[i];
        if(optio.value == JS_FIXED_IQAMATISHA) optio.selected = true;
    }

    setTimeout(ShowThisAlertAndCloseAFTER,1000,sims(c_abn), 0.12);
    setTimeout(ShowThisAlertAndCloseAFTER,4000,sims(c_abo), 0.12);
}


function persoJOMOA(obj)
{
    JS_PERSO_FIXED_JOMOA = obj.options[obj.selectedIndex].value;
JS_PERSO_AUTOX_JOMOA = JS_PERSO_FIXED_JOMOA; // default fill
localStorage.setItem('STORAGE_PERSO_FIXED_JOMOA', JS_PERSO_FIXED_JOMOA);
GoGloballyFillDATA();
putMinutesInSETTINGS(); // for direct show
}

//---------------------------------------------------------------------------------
function persoFAJR(obj)
{
    JS_FIXED_IQAMATFAJR = obj.options[obj.selectedIndex].value;
if(JS_FIXED_IQAMATFAJR == "") JS_IQAMA_TIME_OF_FAJR = 10; //default 10
GoGloballyFillDATA();
putMinutesInSETTINGS(); // for direct show
localStorage.setItem('STORAGE_FIXED_IQAMATFAJR', JS_FIXED_IQAMATFAJR);
localStorage.setItem('STORAGE_IQAMA_FAJR', JS_IQAMA_TIME_OF_FAJR);
}
//---------------------------------------------------------------------------------
function persoDOHR(obj)
{
    JS_FIXED_IQAMATDOHR = obj.options[obj.selectedIndex].value;
if(JS_FIXED_IQAMATDOHR == "") JS_IQAMA_TIME_OF_DOHR = 10; //default 10
GoGloballyFillDATA();
putMinutesInSETTINGS(); // for direct show
localStorage.setItem('STORAGE_FIXED_IQAMATDOHR', JS_FIXED_IQAMATDOHR);
localStorage.setItem('STORAGE_IQAMA_DOHR', JS_IQAMA_TIME_OF_DOHR);
}
//---------------------------------------------------------------------------------
function persoASR(obj)
{
    JS_FIXED_IQAMATASR = obj.options[obj.selectedIndex].value;
if(JS_FIXED_IQAMATASR == "") JS_IQAMA_TIME_OF_ASR = 10; //default 10
GoGloballyFillDATA();
putMinutesInSETTINGS(); // for direct show
localStorage.setItem('STORAGE_FIXED_IQAMATASR', JS_FIXED_IQAMATASR);
localStorage.setItem('STORAGE_IQAMA_ASR', JS_IQAMA_TIME_OF_ASR);
}
//---------------------------------------------------------------------------------
function persoISHA(obj)
{
    JS_FIXED_IQAMATISHA = obj.options[obj.selectedIndex].value;
if(JS_FIXED_IQAMATISHA == "") JS_IQAMA_TIME_OF_ISHA = 10; //default 10
GoGloballyFillDATA();
putMinutesInSETTINGS(); // for direct show
localStorage.setItem('STORAGE_FIXED_IQAMATISHA', JS_FIXED_IQAMATISHA);
localStorage.setItem('STORAGE_IQAMA_ISHA', JS_IQAMA_TIME_OF_ISHA);
}



//---------getCITY--------------------------------------------------------------------------
function getCITY(obj)
{
    var eSEL        = obj.options[obj.selectedIndex].value;
    JS_CITY_CODE    = eSEL;
    localStorage.setItem('STORAGE_CITY_CODE', JS_CITY_CODE);
    updateLocationByFILE();

JS_VERSIO = new Date().getTime();  // again update cache
var tmp   = JS_CITY_CODE.split(".");
var yFile = 'data/'+tmp[0]+'/wtimes-'+JS_CITY_CODE+'.js?e='+ JS_VERSIO;

var JS_yscript      = document.createElement("script");
JS_yscript.type     = "text/javascript";
JS_yscript.src      = yFile;
JS_yscript.onload   = function(){
    GoGloballyFillDATA();
};
document.body.appendChild(JS_yscript);
}


function updateLocationByFILE()
{
    var JS_eLocationByFILE = document.getElementById('eLocationByFILE');
    JS_eLocationByFILE.innerHTML = JS_CITY_CODE;
}


function uLoadGpsCitiesAsJS(iniFile)
{
    var JS_script       = document.createElement("script");
    JS_script.type      = "text/javascript";
    JS_script.src       = iniFile;
    JS_script.onload    = function(){
        uLoadGpsCitiesNOW();
    };
    document.body.appendChild(JS_script);
}

function jxCountryCHANGE(obj)
{
    var eee_CODE = obj.options[obj.selectedIndex].value;


JS_citiesListBOX.innerHTML = ''; // clear box
// add perso everytime
var newOPTO = new Option("", "");
JS_citiesListBOX.append(newOPTO);
var newOPTO = new Option("00.000.PERSONAL", "00.000");
JS_citiesListBOX.append(newOPTO);

JS_VERSIO = new Date().getTime();  // again update cache
var tempjxFile = "data/" + eee_CODE + "/" + eee_CODE +".js?ev="+ JS_VERSIO;

var JS_jxscript     = document.createElement("script");
JS_jxscript.type    = "text/javascript";
JS_jxscript.src     = tempjxFile;
JS_jxscript.onload  = function(){
    goFillCities();
};
document.body.appendChild(JS_jxscript);
}

function sims(h) {
    var s = '';
    for (var i = 0; i < h.length; i+=2) {s += String.fromCharCode(parseInt(h.substr(i, 2), 16));}
        return decodeURIComponent(escape(s));
}

function uLoadTheCountries()
{

    var strNow  = '';

    var jxxOPTO = new Option("", "");
    JS_jxCOUNTRY.append(jxxOPTO);

    var xR = JS_CITY_CODE.split(".");

    for (var i=0; i < JS_WORLD_COUNTRIES.length; i++)
    {
        strNow = JS_WORLD_COUNTRIES[i];

        var tmpARR   = strNow.split("|");
        var cntCODE  = tmpARR[0];
        var cntNAME  = tmpARR[1];
        jxxOPTO    = new Option(cntNAME, cntCODE);
        JS_jxCOUNTRY.append(jxxOPTO);

        //if(cntCODE == xR[0]) jxxOPTO.selected = true;
    }

}


function getLANGUAGE(obj)
{
    JS_LANG_NOW = obj.title;
    localStorage.setItem('STORAGE_LANG_NOW', JS_LANG_NOW);
    setTimeout('location.reload()', 300);
}

//-------goVR------------------------------------------------
function goVR(ini)
{
    localStorage.setItem('STORAGE_JS_FORCED_VERTICAL', ini);
    setTimeout('location.reload()', 300);
}

//-----------------------------------------------------------------------------------
var JS_ANIM_NOMOBILE = 15;
function animateNoMOBILE()
{
    JS_ANIM_NOMOBILE--;
    if(JS_ANIM_NOMOBILE < 1)    {
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
    }
    else
    {
        JS_eMobile.style.visibility   = 'visible';
        JS_HReMobile.style.visibility = 'visible';
    }

    setTimeout('animateNoMOBILE()', 700 );
}


//-----ShowRIDEAU-------------------------------------
function ShowRIDEAU()
{

// exit if sender is shrq ( duree 0)
    if(JS_NOW_DIMSCREEN_DURATION == 0)
    {
    // counter of iqamas, finished, but it's shrq, so show doha_came and close
        ShowZunder2('VRDOHACAME');
        ShowZunder2('HRDOHACAME');
        setTimeout(HideZunder2,20000,'VRDOHACAME');
        setTimeout(HideZunder2,20000,'HRDOHACAME');
    // before exit, also run user-slides if enabled, (no azkar sabah/masaaa)
        if(JS_USER_SLIDERS_ACTIVE) setTimeout("StartSLIDES()", 30000);
        return;
    }



    setTimeout('RemoveBlackScreenAndStartAZKAR()', (JS_NOW_DIMSCREEN_DURATION * 60000) );


var JS_WAITBLK = 12000; // time before black screen

if(JS_DIMM_WHILE_PRAYIN_ACTIVE)
{
if(JSALLDATA.IZIqamaScreen==0) JS_WAITBLK = 0; // direct black screen, no wait
setTimeout('StartBlackScreenWhilePraying()', JS_WAITBLK ); // delay black screen  to show iqama screen
}

if(JSALLDATA.IZIqamaScreen==1)
{
    ShowZunder2('VRIQAMATIME');
    ShowZunder2('HRIQAMATIME');
    setTimeout(HideZunder2,(JS_WAITBLK - 2000),'VRIQAMATIME');
    setTimeout(HideZunder2,(JS_WAITBLK - 2000),'HRIQAMATIME');
}

if(JS_NOW_ACTIVE_SALAT == 1) return; // DON'T SHOW MOBILE-ALERT IF ISHRAQ
if(JS_DIMM_WHILE_PRAYIN_ACTIVE) setTimeout('animateNoMOBILE()', JS_WAITBLK + 3000 ); // MOBILE-ALERT
}


//-----StartAZKAR-------------------------------------
function RemoveBlackScreenAndStartAZKAR()
{

    RemoveBlackScreen();

// info : ISHRAQ  not coming here


    if(JS_APP_AZKAR_ACTIVE)
    {
        setTimeout('SartMainAZKAR()', 7000 );
    }
    else    {
        JS_CONTINUE_AZKARING = true;
        CheckAzkarToSHOW();
    }

}

var JS_AZKAR_ForceEND  = false;
var JS_SLIDES_ForceEND = false;
//-----------------------------------------------------------------------------------
//------DisplayAzkar---------------
function DisplayAzkar()
{
    ShowZunder2('VRAZKAR');
    ShowZunder2('HRAZKAR');
}

//------DisplaySLIDES---------------
function DisplaySLIDES()
{
    ShowZunder2('VRSLIDES');
    ShowZunder2('HRSLIDES');
}

//-----------------------------------------------------------------------------------
//-----FinishAzkar---------------
function FinishAzkar()
{
    HideZunder2('VRAZKAR');
    HideZunder2('HRAZKAR');
}

//-----------------------------------------------------------------------------------
//-----FinishSLIDES---------------
function FinishSLIDES()
{
    HideZunder2('VRSLIDES');
    HideZunder2('HRSLIDES');
}


//-----------------------------------------------------------------------------------


//---------------GlobalGatherAZKAR
function GlobalGatherAZKAR()
{

// ONCE exec


    var www = "";

    var izVerticalNOW = (!JS_DISPLAY_IS_HORIZONTAL);
if(JS_FORCED_VERTICAL > 0) izVerticalNOW = true; // override


var tempAzkarARR = [];

//---------------- AZKAR PRIMARY
if(izVerticalNOW) tempAzkarARR = JS_GLOBAL_AZKAR_VR; else tempAzkarARR = JS_GLOBAL_AZKAR_HR;

for (var i=0; i < tempAzkarARR.length; i++)
{
    if(tempAzkarARR[i] !=="")
    {
        var ccc = tempAzkarARR[i];
        if(ccc.indexOf('-----') > -1)
            {if(www !=="") JS_AZKAR_PRIMARY.push(www); www = "";}
        else {www += ccc + "<br>";}
    }
}

//---------------- SABAH
tempAzkarARR = JS_GLOBAL_AZKAR_SABAH;

for (var i=0; i < tempAzkarARR.length; i++)
{
    if(tempAzkarARR[i] !=="")
    {
        var ccc = tempAzkarARR[i];
        if(ccc.indexOf('-----') > -1)
            {if(www !=="") JS_AZKAR_SABAH.push(www); www = "";}
        else {www += ccc + "<br>";}
    }
}


//---------------- MASAA
tempAzkarARR = JS_GLOBAL_AZKAR_MASAA;

for (var i=0; i < tempAzkarARR.length; i++)
{
    if(tempAzkarARR[i] !=="")
    {
        var ccc = tempAzkarARR[i];
        if(ccc.indexOf('-----') > -1)
            {if(www !=="") JS_AZKAR_MASAA.push(www); www = "";}
        else {www += ccc + "<br>";}
    }
}



}




//var JS_AZKAR_RUNNING = false;

//----------------PlayAzkarOF---
function PlayAzkarOF(DATEN,_isContinue)
{


JS_AZKAR_NEXT = 0; // reset
JS_AZKAR_MSGS = []; // clear msgs

for (var i=0; i < DATEN.length; i++)
{
    var str = DATEN[i];
    JS_AZKAR_MSGS.push(str);
    //dolog(str+"|"+str.length);
}


JS_CONTINUE_AZKARING = _isContinue;
ProcessAzkarShow();
}

//--------ForceSTOPazkar---------------------------
function ForceSTOPazkar()
{
    JS_AZKAR_ForceEND = true;
    JS_AZKAR_NEXT = 0;
    FinishAzkar();
}
//--------ForceSTOPSLIDES---------------------------
function ForceSTOPSLIDES()
{
    JS_SLIDES_RUNNING =  false;
    JS_SLIDES_ForceEND = true;
    JS_SLIDES_NEXT = 0;
    FinishSLIDES();
}

//-----------------------------------------------------------------------------------
var JS_Vmes1 = document.getElementById('Vmes1');
var JS_Hmes1 = document.getElementById('Hmes1');

var JS_CONTINUE_AZKARING = false;

//--------CheckAzkarToSHOW---------------------------
function CheckAzkarToSHOW()
{

    if( (JS_NOW_ACTIVE_SALAT == 0)&&(JSALLDATA.IZAzkarSABAH==1)&&(JS_CONTINUE_AZKARING) )   {PlayAzkarOF(JS_AZKAR_SABAH,false);}
    else
        if( (JS_NOW_ACTIVE_SALAT == 3)&&(JSALLDATA.IZAzkarASR==1)&&(JS_CONTINUE_AZKARING) )     {PlayAzkarOF(JS_AZKAR_MASAA,false);}
    else
        if( (JS_NOW_ACTIVE_SALAT == 4)&&(JSALLDATA.IZAzkarMAGRIB==1)&&(JS_CONTINUE_AZKARING) )  {PlayAzkarOF(JS_AZKAR_MASAA,false);}
    else
        if( (JS_NOW_ACTIVE_SALAT == 5)&&(JSALLDATA.IZAzkarISHA==1)&&(JS_CONTINUE_AZKARING) )    {PlayAzkarOF(JS_AZKAR_MASAA,false);}
    else
        if(JS_USER_SLIDERS_ACTIVE) setTimeout("StartSLIDES()", 7000);

}


//----------------ProcessAzkarShow---
function ProcessAzkarShow()
{

    if(JS_AZKAR_ForceEND) // just stop, no continue, ForceSTOPazkar has FinishAzkar()
    {
    JS_AZKAR_ForceEND = false; // init for a next new show
    return;
}

    if(JS_AZKAR_NEXT >= JS_AZKAR_MSGS.length)// natural session finished, start sliders if enabled
    {
        JS_AZKAR_NEXT = 0;
        FinishAzkar();
        setTimeout("CheckAzkarToSHOW()", 5000);
        return;
    }

    var nowTEXT     = JS_AZKAR_MSGS[JS_AZKAR_NEXT];
    var nSize       = nowTEXT.length;
    var JS_MSC_VIEWING = 20000;

    switch(true)
    {
    case nSize<=50    :   jHHH = '6.5';   jVVV = '8.5';   JS_MSC_VIEWING = 10000; JS_Hmes1.style.lineHeight = '1.60em';   break;
    case nSize<=100   :   jHHH = '6.0';   jVVV = '8.0';   JS_MSC_VIEWING = 12000; JS_Hmes1.style.lineHeight = '1.70em';   break;
    case nSize<=150   :   jHHH = '5.5';   jVVV = '7.5';   JS_MSC_VIEWING = 14000; JS_Hmes1.style.lineHeight = '1.80em';   break;
    case nSize<=200   :   jHHH = '5.0';   jVVV = '7.0';   JS_MSC_VIEWING = 15000; JS_Hmes1.style.lineHeight = '1.90em';   break;
    case nSize<=250   :   jHHH = '4.5';   jVVV = '6.5';   JS_MSC_VIEWING = 16000; JS_Hmes1.style.lineHeight = '2.00em';   break;
    case nSize<=300   :   jHHH = '4.0';   jVVV = '6.0';   JS_MSC_VIEWING = 18000; JS_Hmes1.style.lineHeight = '2.10em';   break;
    case nSize<=350   :   jHHH = '3.9';   jVVV = '6.0';   JS_MSC_VIEWING = 20000; JS_Hmes1.style.lineHeight = '2.20em';   break;
    case nSize<=400   :   jHHH = '3.8';   jVVV = '5.9';   JS_MSC_VIEWING = 21000; JS_Hmes1.style.lineHeight = '2.30em';   break;
    case nSize<=450   :   jHHH = '3.7';   jVVV = '5.6';   JS_MSC_VIEWING = 24000; JS_Hmes1.style.lineHeight = '2.40em';   break;
    case nSize<=500   :   jHHH = '3.6';   jVVV = '5.1';   JS_MSC_VIEWING = 26000; JS_Hmes1.style.lineHeight = '2.50em';   break;
    default           :   jHHH = '3.3';   jVVV = '5.0';   JS_MSC_VIEWING = 20000; JS_Hmes1.style.lineHeight = '1.90em';   break;
    }


    JS_Hmes1.style.fontSize = jHHH+jvwh;
    JS_Vmes1.style.fontSize = jVVV+jvwh;

//dolog(" |"+nowTEXT.length);
    nowTEXT = nowTEXT.replace(/33/g, "<span>33</span>");
    nowTEXT = nowTEXT.replace(/\|/g, "<br>");
    JS_Vmes1.innerHTML = nowTEXT;
    JS_Hmes1.innerHTML = nowTEXT;
    JS_Vmes1.style.lineHeight = JS_Hmes1.style.lineHeight;
    JS_AZKAR_NEXT++;
    DisplayAzkar();
setTimeout("ProcessAzkarShow()", JS_MSC_VIEWING); // repeat action
setTimeout("FinishAzkar()",  JS_MSC_VIEWING - 5500);
}


//-----------------------------------------------------------------------------------
var JS_sVmes1 = document.getElementById('sVmes1');
var JS_sHmes1 = document.getElementById('sHmes1');

var JS_SLIDES_RUNNING = false;

//----------------ProcessSLIDESShow---
function ProcessSLIDESShow()
{

    var sTEXT = JS_SLIDES_DATA[JS_SLIDES_NEXT];

    var sJS_MSC_VIEWING = 15000;


    if(sTEXT == "")
    {
        JS_SLIDES_NEXT++;
    ProcessSLIDESShow();// continue
    return;
}


    if(JS_SLIDES_ForceEND) // just stop, no continue, ForceSTOPSLIDES has FinishSLIDES()
    {
    JS_SLIDES_ForceEND = false; // init for a next new show
    return;
}

    if(JS_SLIDES_NEXT >= JS_SLIDES_DATA.length) // natural end
    {
        JS_SLIDES_NEXT = 0;
    ProcessSLIDESShow();//  loop SLIDES
    return;
}

if(sTEXT.indexOf('.jpg') > -1)
{
    JS_SLIDES_NEXT++;
    JS_sVmes1.innerHTML = '';
    JS_sHmes1.innerHTML = '';
    JS_VRSLIDES.style.background = 'url(./slides/' + sTEXT + ')';
    JS_VRSLIDES.style.backgroundRepeat= 'no-repeat';
    JS_VRSLIDES.style.backgroundSize= '100% 100%';
    JS_HRSLIDES.style.background = 'url(./slides/' + sTEXT + ')';
    JS_HRSLIDES.style.backgroundRepeat= 'no-repeat';
    JS_HRSLIDES.style.backgroundSize= '100% 100%';
    DisplaySLIDES();
    setTimeout("ProcessSLIDESShow()", sJS_MSC_VIEWING); // repeat action
    setTimeout("FinishSLIDES()",  sJS_MSC_VIEWING - 5500);
    return;
}
else
{
    JS_VRSLIDES.style.background = 'url(./slides/vr.jpg)';
    JS_VRSLIDES.style.backgroundRepeat= 'no-repeat';
    JS_VRSLIDES.style.backgroundSize= '100% 100%';
    JS_HRSLIDES.style.background = 'url(./slides/hr.jpg)';
    JS_HRSLIDES.style.backgroundRepeat= 'no-repeat';
    JS_HRSLIDES.style.backgroundSize= '100% 100%';
}



sTEXT       = sTEXT.replace(/\|/g, "<br>");
var nSize   = sTEXT.length;


switch(true)
{
case nSize<=50    :   JS_sHmes1.style.fontSize = '6.0vw'; JS_sVmes1.style.fontSize = '8.5vw'; sJS_MSC_VIEWING = 10000;    JS_sHmes1.style.lineHeight = '1.60em';  break;
case nSize<=100   :   JS_sHmes1.style.fontSize = '5.3vw'; JS_sVmes1.style.fontSize = '8.0vw'; sJS_MSC_VIEWING = 12000;    JS_sHmes1.style.lineHeight = '1.70em';  break;
case nSize<=150   :   JS_sHmes1.style.fontSize = '5.2vw'; JS_sVmes1.style.fontSize = '7.5vw'; sJS_MSC_VIEWING = 14000;    JS_sHmes1.style.lineHeight = '1.80em';  break;
case nSize<=200   :   JS_sHmes1.style.fontSize = '5.0vw'; JS_sVmes1.style.fontSize = '7.0vw'; sJS_MSC_VIEWING = 15000;    JS_sHmes1.style.lineHeight = '1.90em';  break;
case nSize<=250   :   JS_sHmes1.style.fontSize = '4.5vw'; JS_sVmes1.style.fontSize = '6.5vw'; sJS_MSC_VIEWING = 16000;    JS_sHmes1.style.lineHeight = '2.00em';  break;
case nSize<=300   :   JS_sHmes1.style.fontSize = '4.0vw'; JS_sVmes1.style.fontSize = '6.0vw'; sJS_MSC_VIEWING = 18000;    JS_sHmes1.style.lineHeight = '2.10em';  break;
case nSize<=350   :   JS_sHmes1.style.fontSize = '3.5vw'; JS_sVmes1.style.fontSize = '6.0vw'; sJS_MSC_VIEWING = 20000;    JS_sHmes1.style.lineHeight = '2.20em';  break;
case nSize<=400   :   JS_sHmes1.style.fontSize = '3.0vw'; JS_sVmes1.style.fontSize = '5.9vw'; sJS_MSC_VIEWING = 21000;    JS_sHmes1.style.lineHeight = '2.30em';  break;
case nSize<=450   :   JS_sHmes1.style.fontSize = '3.0vw'; JS_sVmes1.style.fontSize = '5.6vw'; sJS_MSC_VIEWING = 24000;    JS_sHmes1.style.lineHeight = '2.40em';  break;
case nSize<=500   :   JS_sHmes1.style.fontSize = '3.0vw'; JS_sVmes1.style.fontSize = '5.1vw'; sJS_MSC_VIEWING = 26000;    JS_sHmes1.style.lineHeight = '2.50em';  break;
default           :   JS_sHmes1.style.fontSize = '3.0vw'; JS_sVmes1.style.fontSize = '5.0vw'; sJS_MSC_VIEWING = 20000;    JS_sHmes1.style.lineHeight = '2.10em';  break;
}



//dolog(" |"+sTEXT.length);
JS_sVmes1.innerHTML = sTEXT;
JS_sHmes1.innerHTML = sTEXT;
JS_sVmes1.style.lineHeight = JS_sHmes1.style.lineHeight;
JS_SLIDES_NEXT++;
DisplaySLIDES();
setTimeout("ProcessSLIDESShow()", sJS_MSC_VIEWING); // repeat action
setTimeout("FinishSLIDES()",  sJS_MSC_VIEWING - 5500);
}


//-----------------------------------------------------------------------------------

//------SartMainAZKAR---------------
function SartMainAZKAR()
{
    JS_AZKAR_ForceEND = false;
    //---------- IF 1 fixed pic enabled
    if(JSALLDATA.IZ5minAzkar==1)
    {
        ShowOnePicFIXED5min();
        return;
    }

    PlayAzkarOF(JS_AZKAR_PRIMARY,true);
}

//-----ShowFIXED_1_PIC___during_5min---------------
function ShowOnePicFIXED5min()
{
    ShowZunder2('VR5MIN');
    ShowZunder2('HR5MIN');
setTimeout("Close5minPIC()", (60000 * 5)); // close the pic after 5 min
}

//-------Close5minPIC---------------
function Close5minPIC()
{
    HideZunder2('VR5MIN');
    HideZunder2('HR5MIN');
    JS_CONTINUE_AZKARING = true;
    CheckAzkarToSHOW();
}


//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
//------StartSLIDES---------------
function StartSLIDES()
{
if(JS_SLIDES_RUNNING) return; // only one runing slides
JS_SLIDES_RUNNING =  true;
JS_SLIDES_ForceEND = false;
ProcessSLIDESShow();
}











//------------------------------------------
function RemoveBlackScreen()
{
    JS_eRIDO.style.width    = '0%';
    JS_HReRIDO.style.width  = '0%';
}


//-----CloseFullCONTO---------------
function CloseFullCONTO()
{
    JS_BIG_CONTO_ACTIVE = false;
    JS_ROOT.style.setProperty('--VRBigCNTR', 1);
    HideZunder2('VRCONTO');
    HideZunder2('HRCONTO');
    HideZunder('ELMOBIL2');
}
//-----CloseMiniCONTO---------------
function CloseMiniCONTO()
{
    HideZunder('HRSMLKNTR');
    HideZunder('VRSMLKNTR');
    goNoNEXTNoJMA(true);
}

//-----StartBlackScreenWhilePraying---------------
function StartBlackScreenWhilePraying()
{
    if(JS_DIMM_WHILE_PRAYIN_ACTIVE) ForceBlackScreenNOW();
}

//-----------------------------------
function ForceBlackScreenNOW()
{
    JS_eRIDO.style.width    = '100%';
    JS_HReRIDO.style.width  = '100%';
    ForceSTOPazkar();
    ForceSTOPSLIDES();
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


//var JS_CIR_DATA = 0;
//var JS_PERC_DATA = 0;

var JS_VR_eSECS = document.getElementById('VR_eSECS');
var JS_HR_eSECS = document.getElementById('HR_eSECS');
var JS_HR_sssCLOKO = document.getElementById('HR_sssCLOKO');
var JS_VR_sssCLOKO = document.getElementById('VR_sssCLOKO');
var JS_1MINC_ACTIVE = false;

// LiveTime ******************************
function LiveTime()
{
// LIVE SECONDS TIMES FROM SYSTEM
    var JS_LIVE_TIME    = new Date();

    var s = JS_LIVE_TIME.getSeconds();
    s = ('0' + s).slice(-2);


    var JS_SECSNOW = ARNumbers(s);

    JS_VR_eSECS.innerHTML = JS_SECSNOW;
    JS_HR_eSECS.innerHTML = JS_SECSNOW;

    JS_HR_sssCLOKO.innerHTML = ':'+JS_SECSNOW;
    JS_VR_sssCLOKO.innerHTML = ':'+JS_SECSNOW;

    if(JS_AZAN_ACTIVE)  {
        JS_VR_TopTIME.innerHTML = JS_HOURSNOW;
        JS_HR_TopTIME.innerHTML = JS_HOURSNOW;
    }


    if(JS_DECOMPTE_STARTED)
    {

        JS_IQUAMA_SECONDS--;

                //JS_PERC_DATA = JS_ACTIVE_IQAMA_NOW_SECONDS - JS_IQUAMA_SECONDS;
                //JS_PERC_DATA = Math.floor((JS_PERC_DATA*100/JS_ACTIVE_IQAMA_NOW_SECONDS));


        var minnn = Math.floor(JS_IQUAMA_SECONDS / 60);
        var seccc = Math.floor(JS_IQUAMA_SECONDS % 60);
        minnn = ('0' + minnn).slice(-2);
        seccc = ('0' + seccc).slice(-2);

        if(JS_BIG_CONTO_ACTIVE)
        {
            JS_sHRCONTO.innerHTML = ARNumbers(minnn + ':' + seccc);
            JS_sVRCONTO.innerHTML = JS_sHRCONTO.innerHTML;
        }
        else
        {
            JS_sVRnbr.innerHTML = ARNumbers(minnn + ':' + seccc);
            JS_sHRnbr.innerHTML = JS_sVRnbr.innerHTML;
        }

        if(JS_1MINC_ACTIVE)
        {
            JS_LastMinVR.innerHTML = ARNumbers(seccc);
            JS_LastMinHR.innerHTML = JS_LastMinVR.innerHTML;
        }

        if(JS_IQUAMA_SECONDS == 15) ShowZunder('ELMOBIL2');

        if((JS_IQUAMA_SECONDS == 60)&&(JSALLDATA.IZ1MinCounter==1))
        {
            JS_1MINC_ACTIVE = true;
            ShowZunder2('LastMinVR');
            ShowZunder2('LastMinHR');
        }

        if(JS_IQUAMA_SECONDS == 0) {
                                            JS_DECOMPTE_STARTED = false; // stop immediatly
                                            JS_1MINC_ACTIVE = false;
                                            SetAllTubesNORMAL();
                                            HideZunder2('LastMinVR');
                                            HideZunder2('LastMinHR');
                                            setTimeout('closeDECOMPTE()', 700);
                                            setTimeout('ShowRIDEAU()', 1000);
                                            if(JS_BIG_CONTO_ACTIVE)
                                                setTimeout('CloseFullCONTO()', 1000);
                                            else
                                                setTimeout('CloseMiniCONTO()', 1000);
                                        }
                                    }



                                    if(s == '00') Go1MN(false);
                                }

//-----------------------------------------------------------------------------------


                                var JS_AM_TEXT = "<span class='cEnPM'>AM</span>";
                                var JS_PM_TEXT = "<span class='cEnPM'>PM</span>";




                                var JS_MINUTES_AFTER_SHRQ_TO_OFF    = 30;
                                var JS_MINUTES_AFTER_ISHA_TO_OFF    = 60;
                                var JS_MINUTES_BEFORE_FAJR_TO_ON    = 60;
                                var JS_MINUTES_BEFORE_DOHR_TO_ON    = 60;


                                var JS_TODAY_IS_JOMOA   = false;
                                var JS_HOURSNOW = "00:00";
//*****Go1MN*********************************************************
                                function Go1MN(izJustUpdateCLK)
                                {

                                    var JS_AAA  = new Date();

                                    var h   = JS_AAA.getHours();
                                    var m   = JS_AAA.getMinutes();


// here format of 12 support
                                    var hhhhh = h;
                                    var mmmmm = m;
                                    mmmmm = ('0' + mmmmm).slice(-2);



                                    h = ('0' + h).slice(-2);
                                    m = ('0' + m).slice(-2);

                                    var JS_ClnHM = h+':'+m;



                                    var FinalTM4    = JS_ClnHM;
                                    var STRampm     = '&nbsp;';


                                    if(!JS_24H_ACTIVE)
                                    {
                                        if(hhhhh >= 12)
                                        {
                                            STRampm = JS_PM_TEXT;
                                            if(hhhhh > 12) hhhhh = hhhhh - 12;
                                            FinalTM4 = hhhhh+':'+mmmmm;
                                        }
                                        else
                                        {
                    if(hhhhh == 0) hhhhh = 12; // it is  AM
                    STRampm = JS_AM_TEXT;
                    FinalTM4 = hhhhh+':'+mmmmm;
                }
            }



            JS_HOURSNOW = ARNumbers(FinalTM4);
            document.getElementById('VR_eMiniHOUR').innerHTML = JS_HOURSNOW;
            document.getElementById('VR_eAMPM').innerHTML     = STRampm;

            document.getElementById('HR_eMiniHOUR').innerHTML   = JS_HOURSNOW;
            document.getElementById('HR_eAMPM').innerHTML       = STRampm;

            if(JS_BIG_CONTO_ACTIVE)
            {
                JS_sHRCloky.innerHTML = JS_HOURSNOW;
                JS_sVRCloky.innerHTML = JS_HOURSNOW;
            }

            document.getElementById('HR_eFullCLOKO').innerHTML = JS_HOURSNOW;
            document.getElementById('VR_eFullCLOKO').innerHTML = JS_HOURSNOW;

            JS_nowMNTS  = ( (parseInt(h)*60) + parseInt(m) );


            document.getElementById('Vclc').innerHTML   = JS_HOURSNOW;
            document.getElementById('Hclc').innerHTML   = JS_HOURSNOW;
            document.getElementById('sVclc').innerHTML  = JS_HOURSNOW;
            document.getElementById('sHclc').innerHTML  = JS_HOURSNOW;
            document.getElementById('V5clc').innerHTML  = JS_HOURSNOW;
            document.getElementById('H5clc').innerHTML  = JS_HOURSNOW;

            var nowXDAY = JS_AAA.getDay();

            JS_TODAY_IS_JOMOA = (nowXDAY == 5);


// just update clock if wndw lost focus
            if(izJustUpdateCLK) return;





//----- DO DIMM WHEN SHOROUQ COMES
            if(JS_nowMNTS == (_shrq + JS_MINUTES_AFTER_SHRQ_TO_OFF)){ if(JSALLDATA.IZDohaSaver==1) ForceBlackScreenNOW(); }
//----- REMOVE BEFORE DOHR
            if(JS_nowMNTS == (_thuhr - JS_MINUTES_BEFORE_DOHR_TO_ON)) RemoveBlackScreen();



//----- START OFF AFTER ISHA
            if(JS_nowMNTS == (_isha + JS_MINUTES_AFTER_ISHA_TO_OFF)) { if(JSALLDATA.IZIshaSaver==1) ForceBlackScreenNOW(); }
//----- REMOVE BEFORE FAJR
            if(JS_nowMNTS == (_fjr - JS_MINUTES_BEFORE_FAJR_TO_ON)) RemoveBlackScreen();


                        // AZAN TIME IS COMING SOON, STOP AZKAR AND SLIDERS --------------

            if(     (JS_nowMNTS==(_fjr - 3) )||
                (JS_nowMNTS==(_shrq - 3) )||
                (JS_nowMNTS==(_thuhr - 3) )||
                (JS_nowMNTS==(_asr - 3) )||
                (JS_nowMNTS==(_maghreb - 3) )||
                (JS_nowMNTS==(_isha - 3) )
                )
            {
                ForceSTOPSLIDES();
                ForceSTOPazkar();
            }







// ----------- Start Iqama Counter
            if( JS_nowMNTS == _fjr )        startDECOMPTE(JS_IQAMA_TIME_OF_FAJR,    JS_PRAY_DURATION_OF_FAJR);
            if( JS_nowMNTS == _shrq )       startDECOMPTE(JS_IQAMA_TIME_OF_SHRQ,    0);
            if( JS_nowMNTS == _asr )        startDECOMPTE(JS_IQAMA_TIME_OF_ASR,     JS_PRAY_DURATION_OF_ASR);
            if( JS_nowMNTS == _maghreb )    startDECOMPTE(JS_IQAMA_TIME_OF_MAGHRIB, JS_PRAY_DURATION_OF_MAGHRIB);
            if( JS_nowMNTS == _isha )       startDECOMPTE(JS_IQAMA_TIME_OF_ISHA,    JS_PRAY_DURATION_OF_ISHA);





        //--------SPECIAL DOHR FOR JOMOA ---------------------------------------

        if(JS_TODAY_IS_JOMOA) // if JOMOA
        {
            //------ JOMOA_THUHR___SPECIAL_DIMMING
            if(  JS_nowMNTS == (_thuhr - JS_JOMOA_DIM_MINIUTES_BEFORE) )    { StartBlackScreenWhilePraying();}
            if(  JS_nowMNTS == (_thuhr + JS_JOMOA_DIM_MINIUTES_AFTER) )     { RemoveBlackScreen(); SetAllTubesNORMAL();}
        }
        else
        {
            //------ NORMAL DOHR DAY
            if( JS_nowMNTS == _thuhr )  startDECOMPTE(JS_IQAMA_TIME_OF_DOHR,    JS_PRAY_DURATION_OF_DOHR);
        }



                        //--------------- IQAMA_FAJR ---------------
        if(  JS_nowMNTS == (JS_IQAMA_TIME_OF_FAJR + _fjr)  )
            { Play_IqamaTit();}


                        //--------------- DOHA CAME ---------------
        if(  JS_nowMNTS == (JS_IQAMA_TIME_OF_SHRQ + _shrq)  )
            { Play_DohaTit();}

                        //--------------- IQAMA_THUHR ---------------
        if(  JS_nowMNTS == (JS_IQAMA_TIME_OF_DOHR + _thuhr)  )
        {
            if(!JS_TODAY_IS_JOMOA) Play_IqamaTit();
        }

                        //--------------- IQAMA_ASR ---------------
        if(  JS_nowMNTS == (JS_IQAMA_TIME_OF_ASR + _asr)  )
            { Play_IqamaTit();}

                        //--------------- IQAMA_MAGHREB ---------------
        if(  JS_nowMNTS == (JS_IQAMA_TIME_OF_MAGHRIB + _maghreb)  )
            { Play_IqamaTit();}

                        //--------------- IQAMA__ISHA ---------------
        if(  JS_nowMNTS == (JS_IQAMA_TIME_OF_ISHA + _isha)  )
            { Play_IqamaTit();}





        var JS_IT_IS_JOMOA_AND_DOHR = ( (JS_nowMNTS == _thuhr) && (JS_TODAY_IS_JOMOA) )


                        // **********ON_TIME_SALAWATS****************

        if(     (JS_nowMNTS==_fjr)||
            (JS_nowMNTS==_shrq)||
            (JS_nowMNTS==_thuhr)||
            (JS_nowMNTS==_asr)||
            (JS_nowMNTS==_maghreb)||
            (JS_nowMNTS==_isha)
            )
        {

            if(JS_nowMNTS != _shrq )
            {
                                    //if(!JS_IT_IS_JOMOA_AND_DOHR)
                                    // let it beep/azan even friday, app can be used in villages etc...
                Play_Beeep();
            }

            GoActiveSALAT(JS_nowMNTS);





                                    // IF NOT RAMADAN NOR TASHREEK, THEN DO SYAM REMINDER
            if( (!JS_THIS_IS_RAMADAN) && (!JS_DULHIJJA_DAYS_0913) && (!JS_SHAABAN_LAST_DAYS) )
            {
                                        // SEYAM-REMINDER ----- IF SUNDAY
                if(nowXDAY == 0)
                {
                                        if( (JS_nowMNTS==_maghreb) || (JS_nowMNTS==_isha) ) // wait 7 min then show reminder 30min
                                            setTimeout(ShowThisAlertAndCloseAFTER, (7*60000), JS_DOA_SYAM_MONDAY, 30);
                                    }

                                        // SEYAM-REMINDER ----- IF WEDNSDAY
                                    if(nowXDAY == 3)
                                    {
                                        if( (JS_nowMNTS==_maghreb) || (JS_nowMNTS==_isha) ) // wait 7 min then show reminder for 1hour
                                            setTimeout(ShowThisAlertAndCloseAFTER, (7*60000), JS_DOA_SYAM_THURSDAY, 30);
                                    }
                                }

                            }


            // -------------AT NIGHT NEWDAY, GO FILL NEW DATA----------------
                            if( JS_ClnHM == "00:00" )
                            {
                                GoGloballyFillDATA();
            AdminMsgsVIEW(); // update view of admin bottom messages
        }

            // -------------UPDATE WEATHER DATA FROM SERVER ONCE EVERY NIGHT---------------
        if( JS_ClnHM == "00:01" )FetchMETEO();



        goSetNextSalatRemainingTIME(JS_nowMNTS);
        goDimPassedPRAYINGS(JS_nowMNTS);
        _GoMessages();

// UPDATE WEATHER ON SCREEN EVERY 1 HOUR
        if(m == '00') proccessMETEO();


    }



//-----------------------------------------------------------------------------------
//------gimeTime-----------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
    function gimeTime(iniMNTS)
    {
        var _hours      = Math.floor(iniMNTS / 60);
        var _minutes    = iniMNTS % 60;

        _minutes = ('0' + _minutes).slice(-2);

        var finalo = _hours + ':' + _minutes;

        if( (_hours == 0) && (_minutes == 0) )
        {
            finalo = '.';
            JS_NEXT_PRAYER = '';
        }


        return finalo;
    }


    var JS_NEXT_PRAYER = '-';

//--------SetNEXTERS---------------------&#10710;------------------------------------------------------
    function SetNEXTERS(xMNTS)
    {
        JS_HReNextPRAYER.innerHTML  = ARNumbers(gimeTime(xMNTS));


        var ssTextnow = '---';
        if(JS_NEXT_PRAYER !== "")
        {
            if(JS_LANG_NOW == "AR")
            {
                ssTextnow = JS_eLang.NextPrayTime + JS_NEXT_PRAYER;
                ssTextnow = ssTextnow.replace('لا', 'ل');
            }
            else ssTextnow = JS_eLang.NextPrayTime;
        }

        JS_HReNextPrTEXT.innerHTML  = ssTextnow;

        if(JS_eMainVERTICAL.className == 's002')
            JS_VReNXXX.innerHTML  = JS_HReNextPRAYER.innerHTML+" <span>"+ssTextnow+"</span>";
        else
            JS_VReNXXX.innerHTML  = JS_HReNextPRAYER.innerHTML+"<br><span>"+ssTextnow+"</span>";
    }

//-----------------------------------------------------------------------------------
    var JS_JANAZA_FAJR = 0;
    var JS_JANAZA_DOHR = 0;
    var JS_JANAZA_ASSR = 0;
    var JS_JANAZA_MGRB = 0;
    var JS_JANAZA_ISHA = 0;
//-----------------------------------------------------------------------------------
    function setJnzPLS(nbr)
    {
        switch(nbr)
        {
        case 0 :  JS_JANAZA_FAJR++; fillThisJnz(JS_JANAZA_FAJR, nbr); break;
        case 2 :  JS_JANAZA_DOHR++; fillThisJnz(JS_JANAZA_DOHR, nbr); break;
        case 3 :  JS_JANAZA_ASSR++; fillThisJnz(JS_JANAZA_ASSR, nbr); break;
        case 4 :  JS_JANAZA_MGRB++; fillThisJnz(JS_JANAZA_MGRB, nbr); break;
        case 5 :  JS_JANAZA_ISHA++; fillThisJnz(JS_JANAZA_ISHA, nbr); break;
        default   : dolog('setJnzPLS_error:'+nbr); break;
        }
    }
//-----------------------------------------------------------------------------------
    function setJnzMNS(nbr)
    {
        switch(nbr)
        {
        case 0 :  JS_JANAZA_FAJR--; fillThisJnz(JS_JANAZA_FAJR, nbr); break;
        case 2 :  JS_JANAZA_DOHR--; fillThisJnz(JS_JANAZA_DOHR, nbr); break;
        case 3 :  JS_JANAZA_ASSR--; fillThisJnz(JS_JANAZA_ASSR, nbr); break;
        case 4 :  JS_JANAZA_MGRB--; fillThisJnz(JS_JANAZA_MGRB, nbr); break;
        case 5 :  JS_JANAZA_ISHA--; fillThisJnz(JS_JANAZA_ISHA, nbr); break;
        default   : dolog('setJnzMNS_error:'+nbr); break;
        }
    }
//-----------------------------------------------------------------------------------
    function fillThisJnz(konto, nbx)
    {
        var nnnjAAA = "[id='jA"+nbx+"']";
        var nnnjBBB = "[id='jB"+nbx+"']";

        var elemsAAA = document.querySelectorAll(nnnjAAA);
        var elemsBBB = document.querySelectorAll(nnnjBBB);


        if(konto > 0)
        {
            for(var i = 0; i < elemsAAA.length; i++) {elemsAAA[i].innerHTML = 'ج';  elemsAAA[i].parentNode.style.opacity = 1;}
                for(var i = 0; i < elemsBBB.length; i++) {elemsBBB[i].innerHTML = konto;}
            }
        else
        {
            for(var i = 0; i < elemsAAA.length; i++) {elemsAAA[i].innerHTML = ' '; elemsAAA[i].parentNode.style.opacity = 0.21;}
                for(var i = 0; i < elemsBBB.length; i++) {elemsBBB[i].innerHTML = ' ';}
            }


    }
//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
//---------Next Salat--------------------------------------------------------------------------
    var JS_HReNextPRAYER  = document.getElementById('HReNextPRAYER');
    var JS_HReJOMOAPRAYER = document.getElementById('HReJOMOAPRAYER');



//-----------------------------------------------------------------------------------
    function goSetNextSalatRemainingTIME(mntsNOW)
    {


        if(mntsNOW <= _fjr)     {JS_NEXT_PRAYER=JS_PRAYNAMES_NOW[0]; SetNEXTERS(_fjr - mntsNOW); return;}

        if(mntsNOW <= _shrq)    {JS_NEXT_PRAYER=JS_PRAYNAMES_NOW[1]; SetNEXTERS(_shrq - mntsNOW);   return;}

        if(mntsNOW <= _thuhr)   {JS_NEXT_PRAYER=JS_PRAYNAMES_NOW[2]; if(JS_TODAY_IS_JOMOA)JS_NEXT_PRAYER=JS_tempJMA; SetNEXTERS(_thuhr - mntsNOW);  return;}

        if(mntsNOW <= _asr)     {JS_NEXT_PRAYER=JS_PRAYNAMES_NOW[3]; SetNEXTERS(_asr - mntsNOW);    return;}

        if(mntsNOW <= _maghreb) {JS_NEXT_PRAYER=JS_PRAYNAMES_NOW[4]; SetNEXTERS(_maghreb - mntsNOW); return;}

        if(mntsNOW <= _isha)    {JS_NEXT_PRAYER=JS_PRAYNAMES_NOW[5]; SetNEXTERS(_isha - mntsNOW);   return;}

        if(mntsNOW > _isha)     {JS_NEXT_PRAYER=JS_PRAYNAMES_NOW[0]; SetNEXTERS( (1440 - mntsNOW) + _fjr);  return;}

    }


//-----------------------------------------------------------------------------------




//---------------DimPassedPRAYINGS--------------------------------------------------------------------
    function goDimPassedPRAYINGS(mntsNOW)
    {


        JS_tube0.className = 'cccROUND_ACTIVE';
        JS_tube1.className = 'cccROUND_ACTIVE';
        JS_tube2.className = 'cccROUND_ACTIVE';
        JS_tube3.className = 'cccROUND_ACTIVE';
        JS_tube4.className = 'cccROUND_ACTIVE';
        JS_tube5.className = 'cccROUND_ACTIVE';

        JS_W333HRtube0.style.opacity = '1';
        JS_W333HRtube1.style.opacity = '1';
        JS_W333HRtube2.style.opacity = '1';
        JS_W333HRtube3.style.opacity = '1';
        JS_W333HRtube4.style.opacity = '1';
        JS_W333HRtube5.style.opacity = '1';



// EXIT IF OPTION DISABLED
        if(!JS_PAST_DIMER_ACTIVE) return;

        if(mntsNOW > (_fjr      + 60) )     { JS_tube0.className = 'cccROUND';  JS_W333HRtube0.style.opacity = '0.5';}
        if(mntsNOW > (_shrq     + 30) )     { JS_tube1.className = 'cccROUND';  JS_W333HRtube1.style.opacity = '0.5';}
        if(mntsNOW > (_thuhr    + 40) )     { JS_tube2.className = 'cccROUND';  JS_W333HRtube2.style.opacity = '0.5';}
        if(mntsNOW > (_asr      + 30) )     { JS_tube3.className = 'cccROUND';  JS_W333HRtube3.style.opacity = '0.5';}
        if(mntsNOW > (_maghreb  + 30) )     { JS_tube4.className = 'cccROUND';  JS_W333HRtube4.style.opacity = '0.5';}
        if(mntsNOW > (_isha     + 30) )     { JS_tube5.className = 'cccROUND';  JS_W333HRtube5.style.opacity = '0.5';}

    }


    var JS_FLASHER_TUBE = 0;



//-------processActiveTUBE------------------------------------------------------------------------------------
    function processActiveTUBE(vTube,hx)
    {

// If Shorouq  no flash
        if(vTube.id == 'tube1') { ShowAdanAutoClose(true); return; }

        ShowAdanAutoClose(false);

setTimeout(selectActiveTUBES, 5000, vTube, hx); // delay it to be not seen with azan screen

}

//-----------------------------------------------------------------------------------
function getOffset(el){
    const rect = el.getBoundingClientRect();
    return {
        left: rect.left,
        top: rect.top,
        width: rect.width,
        height: rect.height
    };
}
//-----------------------------------------------------------------------------------
/*
function GetVW(percent) {
  var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
  return (percent * w) / 100;
}
*/

var JS_tuberBG = document.getElementById('tuberBG');
//------------------------------------------------------------------------------------------
function selectActiveTUBES(Tube1,Tx)
{
if(JSALLDATA.IZforHOME==1) return; //

var ar1 = getOffset(Tube1);
var hx = parseInt(JS_tuberBG.offsetHeight - Tube1.offsetHeight);
var py = parseInt(ar1.top);
JS_tuberBG.style.top = py-(parseInt(hx/2))+'px';
ShowZunder('tuberBG');
}

//-------GoActiveSALAT------------------------------------------------------------------------------------
function GoActiveSALAT(nowLiveTIME)
{

    if(nowLiveTIME == _fjr)     { JS_NOW_ACTIVE_SALAT = 0; JS_NOW_SALAT_NAME = JS_PRAYNAMES_NOW[0];     processActiveTUBE(JS_tube0,0);  return; }
    if(nowLiveTIME == _shrq)    { JS_NOW_ACTIVE_SALAT = 1; JS_NOW_SALAT_NAME = JS_PRAYNAMES_NOW[1];     processActiveTUBE(JS_tube1,1);  return; }
    if(nowLiveTIME == _thuhr)   { JS_NOW_ACTIVE_SALAT = 2; JS_NOW_SALAT_NAME = JS_PRAYNAMES_NOW[2];     processActiveTUBE(JS_tube2,2);  return; }
    if(nowLiveTIME == _asr)     { JS_NOW_ACTIVE_SALAT = 3; JS_NOW_SALAT_NAME = JS_PRAYNAMES_NOW[3];     processActiveTUBE(JS_tube3,3);  return; }
    if(nowLiveTIME == _maghreb) { JS_NOW_ACTIVE_SALAT = 4; JS_NOW_SALAT_NAME = JS_PRAYNAMES_NOW[4];     processActiveTUBE(JS_tube4,4);  return; }
    if(nowLiveTIME == _isha)    { JS_NOW_ACTIVE_SALAT = 5; JS_NOW_SALAT_NAME = JS_PRAYNAMES_NOW[5];     processActiveTUBE(JS_tube5,5);  return; }
}
//-----------------------------------------------------------------------------------
var JS_VR_AZAN      = document.getElementById('eeeNowNAMEazan');
var JS_VR_TopTIME   = document.getElementById('eeeTopTIME');
var JS_HR_AZAN      = document.getElementById('HHHNowNAMEazan');
var JS_HR_TopTIME   = document.getElementById('HHHTopTIME');
var JS_AZAN_ACTIVE  = false;
//-------------------------------------------------------------------------------------------
function ShowAdanAutoClose(isSHRQ)
{
    JS_AZAN_ACTIVE  = true;

    if( (JS_TODAY_IS_JOMOA)&&(JS_nowMNTS == _thuhr) )
    {
        JS_VR_AZAN.innerHTML    = JS_tempJMA;
        JS_HR_AZAN.innerHTML    = JS_tempJMA;
    }
    else
    {
        if(isSHRQ)
        {
            JS_eeeTextAZAN.innerHTML    = "&nbsp;";
            JS_HRTextAZAN.innerHTML     = "&nbsp;";
            JS_VR_AZAN.innerHTML        = JS_eLang.XX_WQT_SHRQ;
            JS_HR_AZAN.innerHTML        = JS_eLang.XX_WQT_SHRQ;
        }
        else
        {
            JS_eeeTextAZAN.innerHTML    = JS_eLang.AzanCalling;
            JS_HRTextAZAN.innerHTML     = JS_eLang.AzanCalling;
            JS_VR_AZAN.innerHTML        = JS_NOW_SALAT_NAME;
            JS_HR_AZAN.innerHTML        = JS_NOW_SALAT_NAME;
        }

    }


    ShowZunder2('VRAzanCOMES');
    ShowZunder2('HRAzanCOMES');



setTimeout('closeADAN()', 60000); // Let Azan Box 1 Min

if(!isSHRQ)
{
    setTimeout(ShowThisAlertAndCloseAFTER, 50000, JS_DOA_AFTER_AZAN, 1);
}
}

//-------------------------------------------------------------------------------------------
function closeADAN()
{
    JS_AZAN_ACTIVE  = false;
    HideZunder2('VRAzanCOMES');
    HideZunder2('HRAzanCOMES');

//  Jomoa doesn't activate the startDECOMPTE !
// so baqi_iqama NA for Jomoa time
    if(JS_DECOMPTE_STARTED) ShowCOUNTERS();
}
//-----------------------------------------------------------------------------------
function ShowZunder2(ddd)
{
    document.getElementById(ddd).className = "SSon";
}
//-----------------------------------------------------------------------------------
function HideZunder2(ddd)
{
    document.getElementById(ddd).className = "SSoff";
}


var JS_BIG_CONTO_ACTIVE = false;
//-------------------------------------------------------------------------------------------
function ShowCOUNTERS()
{

    if( (!JS_IQAMA_COUNTDOWN_ACTIVE) || (JSALLDATA.IZforHOME==1) ) return;

// IF IS SHRQ
//var JS_THIS_IS_SHOROQ =  (JS_NOW_DIMSCREEN_DURATION == 0);
//  && (!JS_THIS_IS_SHOROQ)


    if( (JS_ACTIVE_IQAMA_NOW > 1) && (JS_IQAMA_COUNTDOWN_ACTIVE)  )
    {
        if(JSALLDATA.IZSCounterEnlarge==1)
        {
            JS_BIG_CONTO_ACTIVE = true;
            ShowZunder2('VRCONTO');
            ShowZunder2('HRCONTO');
            Go1MN(true); // to refresh clock up right
            JS_ROOT.style.setProperty('--VRBigCNTR', 0);
        }
        else
        {
            JS_BIG_CONTO_ACTIVE = false;
            ShowZunder('VRSMLKNTR');
            ShowZunder('HRSMLKNTR');
            goNoNEXTNoJMA(false);
        }
    }

}


//-------SetAllTubesNORMAL------------------------------------------------------------------------------------
function SetAllTubesNORMAL()
{

    HideZunder('tuberBG');
}

//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
function Gime1HourMORE(_hour)
{
// 05:37
    var hrs = _hour.split(':');
    var IntHour = parseInt(hrs[0]);

    IntHour++;

    IntHour = '0'+IntHour;
    IntHour = IntHour.slice(-2);

    return IntHour+':'+hrs[1];
}



function Gime1HourLESS(_hour)
{
// 05:37
    var hrs = _hour.split(':');
    var IntHour = parseInt(hrs[0]);

    IntHour--;

    IntHour = '0'+IntHour;
    IntHour = IntHour.slice(-2);

    return IntHour+':'+hrs[1];
}

//------------FindInArray-----------------------------------------------------------------------
function FindInArray(str,Arro)
{
    for (var i=0; i < Arro.length; i++)
    {
        if (Arro[i].match(str)) return i;
    }
    return -1;
}

//------------goFontTHIS-----------------------------------------------------------------------
function goFontTHIS(ss)
{
    JS_ACTIVE_FONTO = ss;
    localStorage.setItem('STORAGE_JS_ACTIVE_FONTO', JS_ACTIVE_FONTO);
    JS_ROOT.style.setProperty('--XX_MAJORFONTO', JS_ACTIVE_FONTO);
}

//------------goFontTIMES-----------------------------------------------------------------------
function goFontTIMES(ss)
{
    JSALLDATA.FontoTIMES = ss;
    SaveJsDATA();
    execDIGITS(JS_ARABIC_DIGITS);
}

//------------goFontCLOKEN-----------------------------------------------------------------------
function goFontCLOKEN(ss)
{
    JSALLDATA.FontoCLOKEN = ss;
    SaveJsDATA();
    execDIGITS(JS_ARABIC_DIGITS);
}

//------------goFontAZKAR-----------------------------------------------------------------------
function goFontAZKAR(ss)
{
    JSALLDATA.FontoAZKAR = ss;
    SaveJsDATA();
    JS_ROOT.style.setProperty('--XX_SCREENAZKAR', JSALLDATA.FontoAZKAR);
}


//------------KonvertTimeTo12-----------21:53 > 09:53 -----------------------------
function KonvertTimeTo12(time24)
{
// ----------- If 24H Enabled, Give As it is And Exit)
    if(JS_24H_ACTIVE)   {
        if(time24.length < 5) time24 = '0'+time24;
        return time24;
    }


    var eee = time24.split(':'), hhhhh, mmmmm, FinalTM4, strAmPm;

    hhhhh = parseInt(eee[0]);
    mmmmm = eee[1];

    if(hhhhh >= 12)
    {
        if(hhhhh > 12) hhhhh = hhhhh - 12;
    }
    else
    {
            if(hhhhh == 0) hhhhh = 12; // midnight AM


        }

        var finalOut = hhhhh+':'+mmmmm;

        if(JSALLDATA.IZaddZerosAMPM==1)
            { if(finalOut.length < 5) finalOut = '0'+finalOut; }

        return finalOut;
    }


//-----------------------------------------------------------------------------------

    var JS_SUMMER_LIVE_ACTIVE   = false;
    var JS_LOCATION_NOW         = '';
    var JS_FULL_HJRI_NOW        = '-----';
    var JS_FULL_HJRI_CLR        = '-----';
    var JS_ARRAY_FULLHJRI       = ['-','-','-'];
    var JS_DULHIJJA_DAYS_0913   = false;
    var JS_SHAABAN_LAST_DAYS    = false;
    var JS_DULHIJJA_WORK_DAYS   = false;
    var JS_TAKBIR_DAYS          = false;
    var JS_RAMADAN_10_NIGHTS    = false;
    var JS_FASTING_3_WHITE_DAYS = false;
    var JS_IS_10DULHIJJA        = false;


    var JS_arr6TIMES = ['0','0','0','0','0','0'];
    var JS_arr6DATAC = [0,0,0,0,0,0];

    var JS_ADM_WEEK_DAYS    = ["SUNDAY","MONDAY","TUESDAY","WEDNESDAY","THURSDAY","JOMOA","SATURDAY"];
    var JS_ADM_TODAY_NAME   = "";
    var JS_ADM_HIJRI_DATE   = "";
    var JS_ADM_10DLHJ       = "";

//*****GoGloballyFillDATA*********************************************************
    function GoGloballyFillDATA()
    {

        var JS_CCC  = new Date();

//   -------------TEST ONLY  JS_CCC.setDate(JS_CCC.getDate() + 5);

        MiladiToHIJRI(JS_CCC,JS_HIJRI_DECALAGE);


        var WeekDayX        = JS_CCC.getDay();
        var arYOUM          = JS_WEEK_DAYS_NOW[WeekDayX];
        JS_ADM_TODAY_NAME   = JS_ADM_WEEK_DAYS[WeekDayX];

        var YearNow = JS_CCC.getFullYear();

        var h3      = JS_CCC.getHours();
        var m3      = JS_CCC.getMinutes();
        var JSNOW   = ( (h3*60) + m3 );



        var mmm     = (JS_CCC.getMonth());
        var jx      = JS_CCC.getDate();
        var jj      = '0'+jx;
        jj      = jj.slice(-2);



        var mm = '0'+(mmm+1);
        mm = mm.slice(-2);






        var _n0 = '-';
        var _n1 = '-';
        var _n2 = '-';
        var _n3 = '-';
        var _n4 = '-';
        var _n5 = '-';


JS_HReJOMOA2WCSV.innerHTML = ''; // always reset

if(JS_WCSV_ACTIVE)
{
// WSCV USER FILE ---------------------------------------
// "Date,Day,FajrBegins,FajrJamaat,Sunrise,ZohrBegins,ZohrJamaat,AsrBegins,AsrJamaat,MagribBegins,MagribJamaat,IshaBegins,IshaJamaat,Jumah1,Jumah2,Days",
// "12-25,NA,06:35,07:00,08:05,12:06,13:00,14:11,14:30,16:00,16:00,17:15,18:00,12:20,13:00,359",

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

_n13 = VDatenz[13]; // jomoa1
_n14 = VDatenz[14]; // jomoa2

JS_IQAMA_TIME_OF_FAJR       = GimeTotalMinutes(VDatenz[3])  - GimeTotalMinutes(_n0);
JS_IQAMA_TIME_OF_DOHR       = GimeTotalMinutes(VDatenz[6])  - GimeTotalMinutes(_n2);
JS_IQAMA_TIME_OF_ASR        = GimeTotalMinutes(VDatenz[8])  - GimeTotalMinutes(_n3);
JS_IQAMA_TIME_OF_MAGHRIB    = GimeTotalMinutes(VDatenz[10]) - GimeTotalMinutes(_n4);
JS_IQAMA_TIME_OF_ISHA       = GimeTotalMinutes(VDatenz[12]) - GimeTotalMinutes(_n5);

JS_LOCATION_NOW = "";
}
else
{
// TAWKIT WTIMES FILE ---------------------------------------
//"01-01~~~~~05:37|06:58|12:24|15:29|17:50|19:20",

    var monthDay = mm+'-'+jj;
    var idx = FindInArray(monthDay, JS_TIMES);
    if(idx== -1)    {
                        if(monthDay == "02-29") // skip errors of bad files forgeting 29th February
                        idx = FindInArray("03-01", JS_TIMES); // show next day instead
                    else
                    {
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

                JS_LOCATION_NOW = JS_CITY_CODE;


            }


//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------



if(!JS_WCSV_ACTIVE)  // ADJUST ONLY IF NORMAL FILES
{
//--------Adjustment---------------------------------------------------------------------------
    _n0 = GoAdjustment(_n0, JS_ATHAN_MINUTES_OF_FAJR);
    _n1 = GoAdjustment(_n1, JS_ATHAN_MINUTES_OF_SHRQ);
    _n2 = GoAdjustment(_n2, JS_ATHAN_MINUTES_OF_DOHR);
    _n3 = GoAdjustment(_n3, JS_ATHAN_MINUTES_OF_ASR);
    _n4 = GoAdjustment(_n4, JS_ATHAN_MINUTES_OF_MAGHRIB);
    _n5 = GoAdjustment(_n5, JS_ATHAN_MINUTES_OF_ISHA);
}

//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
JS_SUMMER_LIVE_ACTIVE = false;

if(JS_SUMMER_ADD1HOUR)
{
                                    const summerMONTHS = [3,4,5,6,7,8,9];  // from april(3) include 9(october)

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

                                                    //--------MARS----------------------------------------------
                                                    //------------------------CATCH LAST-SUNDAY'DAY
                                                    //----------------------------------------------------------
                                    if(mmm == 2)
                                    {
                                        var JSDXXX = 24;
                                        var JSvDAT = null;
                                        var xDDD   = -1;

                                        for (i=25; i <= 31; i++)
                                        {
                                            JSvDAT  = new Date(YearNow, 2, i);
                                            xDDD    = JSvDAT.getDay();
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

                                                    //-----------------------------------------------------------------------------------


                                                    //--------OCTOBRE----------------------------------------------
                                                    //------------------------CATCH LAST-SUNDAY'DAY
                                                    //----------------------------------------------------------
                                    if(mmm == 9)
                                    {
                                        var JSDXXX = 24;
                                        var JSvDAT = null;
                                        var xDDD   = -1;

                                        for (i=25; i <= 31; i++)
                                        {
                                            JSvDAT  = new Date(YearNow, 9, i);
                                            xDDD    = JSvDAT.getDay();
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



//-------------- MOROCCO 1 HOUR LESS IN RAMADAN
                                if( (JS_THIS_IS_RAMADAN) && (JS_CITY_CODE.substring(0, 3) == "MA.") )
                                {
                                    _n0 = Gime1HourLESS(_n0);
                                    _n1 = Gime1HourLESS(_n1);
                                    _n2 = Gime1HourLESS(_n2);
                                    _n3 = Gime1HourLESS(_n3);
                                    _n4 = Gime1HourLESS(_n4);
                                    _n5 = Gime1HourLESS(_n5);
                                }




//---------manually add 1 hour to all if set----------------------------------------------
                                if(JS_1HOURMORE)
                                {
                                    _n0 = Gime1HourMORE(_n0);
                                    _n1 = Gime1HourMORE(_n1);
                                    _n2 = Gime1HourMORE(_n2);
                                    _n3 = Gime1HourMORE(_n3);
                                    _n4 = Gime1HourMORE(_n4);
                                    _n5 = Gime1HourMORE(_n5);
                                }

//---------manually remove 1 hour from all if set----------------------------------------------
                                if(JS_1LESSMORE)
                                {
                                    _n0 = Gime1HourLESS(_n0);
                                    _n1 = Gime1HourLESS(_n1);
                                    _n2 = Gime1HourLESS(_n2);
                                    _n3 = Gime1HourLESS(_n3);
                                    _n4 = Gime1HourLESS(_n4);
                                    _n5 = Gime1HourLESS(_n5);
                                }

//-----------------------------------------------------------------------------------


// AUTO ADD 30 MIN TO ISHA IF RAMADAN AND OPTION ACTIVE
                                if( (JS_THIS_IS_RAMADAN) && (JS_RAMADAN_30MIN_ACTIVE) ) _n5 = GoAdjustment(_n5, 30);




if(JS_PERSO_FIXED_JOMOA == 'AUTO') // auto-friday from  WCSV allowed here
{
    JS_PERSO_AUTOX_JOMOA = GetNextFriday(2);
}



        // DOHR/JOMOA = ASR - X min
if( (JSALLDATA.DHRxminASR > 0) && (!JS_WCSV_ACTIVE) )
{
    _n2 = GoAdjustment(_n3, -(JSALLDATA.DHRxminASR));

            if(JS_PERSO_FIXED_JOMOA == 'AUTO')// check and fix next jomoa auto
            {
            JS_PERSO_AUTOX_JOMOA = GoAdjustment(GetNextFriday(3), -(JSALLDATA.DHRxminASR)); // next asr-x
        }
    }



//IF FRIDAY CHANGE DOHR NAME BY JOMOA TEXT AND PERSO TIME IF ANY
//-----------------------------------------------------------------------------------

    if(JS_TODAY_IS_JOMOA)
    {
        JS_T_2.innerHTML      = JS_tempJMA;
        JS_W333HT_2.innerHTML = JS_T_2.innerHTML;

        if(JS_PERSO_FIXED_JOMOA !== "")
        {

            if(JS_PERSO_FIXED_JOMOA == 'AUTO')
            {

                if(JS_WCSV_ACTIVE)
                {
                                    JS_PERSO_AUTOX_JOMOA = _n13; // TODAY_ from today-jomoa1 wcsv
                                    JS_HReJOMOA2WCSV.innerHTML = '2nd Jomoa : '+_n14; // TODAY_jomoa 2
                                }
                                else
                                {
                                    if(JSALLDATA.DHRxminASR > 0)
                                    JS_PERSO_AUTOX_JOMOA = GoAdjustment(_n3, -(JSALLDATA.DHRxminASR)); // direct today'asr-x
                                else
                                    JS_PERSO_AUTOX_JOMOA = _n2; // override by TODAY(n2) really jomoa dohr
                            }
                        }
                        else
                        {
                        JS_PERSO_AUTOX_JOMOA = JS_PERSO_FIXED_JOMOA; // override Jomoa time by FIXED perso
                    }


                    _n2 = JS_PERSO_AUTOX_JOMOA;
                }
            }
            else
            {
                JS_T_2.innerHTML      = JS_PRAYNAMES_NOW[2];
                JS_W333HT_2.innerHTML = JS_T_2.innerHTML;
            }



            _vre.innerHTML=_netv;_hrb0.innerHTML=_netv;
//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
// NOW SET FIXED FAJR
            if( (JS_FIXED_IQAMATFAJR !== "")&&(!JS_WCSV_ACTIVE) )
            {
                JS_IQAMA_TIME_OF_FAJR = GimeTotalMinutes(JS_FIXED_IQAMATFAJR) - GimeTotalMinutes(_n0);
if(JS_IQAMA_TIME_OF_FAJR < 1) JS_IQAMA_TIME_OF_FAJR = 10; //default 10
}
//-----------------------------------------------------------------------------------
// NOW SET FIXED DOHR
if( (JS_FIXED_IQAMATDOHR !== "")&&(!JS_WCSV_ACTIVE) )
{
    JS_IQAMA_TIME_OF_DOHR = GimeTotalMinutes(JS_FIXED_IQAMATDOHR) - GimeTotalMinutes(_n2);
if(JS_IQAMA_TIME_OF_DOHR < 1) JS_IQAMA_TIME_OF_DOHR = 10; //default 10
}
//-----------------------------------------------------------------------------------
// NOW SET FIXED ASR
if( (JS_FIXED_IQAMATASR !== "")&&(!JS_WCSV_ACTIVE) )
{
    JS_IQAMA_TIME_OF_ASR = GimeTotalMinutes(JS_FIXED_IQAMATASR) - GimeTotalMinutes(_n3);
if(JS_IQAMA_TIME_OF_ASR < 1) JS_IQAMA_TIME_OF_ASR = 10; //default 10
}
//-----------------------------------------------------------------------------------
// NOW SET FIXED ISHA
if( (JS_FIXED_IQAMATISHA !== "")&&(!JS_WCSV_ACTIVE) )
{
    JS_IQAMA_TIME_OF_ISHA = GimeTotalMinutes(JS_FIXED_IQAMATISHA) - GimeTotalMinutes(_n5);
if(JS_IQAMA_TIME_OF_ISHA < 1) JS_IQAMA_TIME_OF_ISHA = 10; //default 10
}
//-----------------------------------------------------------------------------------


JS_arr6TIMES[0] = "T"+_n0.split(":")[0]+":00";
JS_arr6TIMES[1] = "T"+_n1.split(":")[0]+":00";
JS_arr6TIMES[2] = "T"+_n2.split(":")[0]+":00";
JS_arr6TIMES[3] = "T"+_n3.split(":")[0]+":00";
JS_arr6TIMES[4] = "T"+_n4.split(":")[0]+":00";
JS_arr6TIMES[5] = "T"+_n5.split(":")[0]+":00";


// fill times now, with converting them to 12 hour format
var JJJ0 = ARNumbers(KonvertTimeTo12(_n0));
var JJJ1 = ARNumbers(KonvertTimeTo12(_n1));
var JJJ2 = ARNumbers(KonvertTimeTo12(_n2));
var JJJ3 = ARNumbers(KonvertTimeTo12(_n3));
var JJJ4 = ARNumbers(KonvertTimeTo12(_n4));
var JJJ5 = ARNumbers(KonvertTimeTo12(_n5));


JS_S_0.innerHTML = JJJ0;
JS_S_1.innerHTML = JJJ1;
JS_S_2.innerHTML = JJJ2;
JS_S_3.innerHTML = JJJ3;
JS_S_4.innerHTML = JJJ4;
JS_S_5.innerHTML = JJJ5;
_netv = sims(c_ab0)+ ' '+c_ab0.charAt(9)+ '.'+c_ab0.charAt(0)+'4'+eBUILD;
_ab5.innerHTML = sims(c_ab5);
JS_HHHS_0.innerHTML = JJJ0;
JS_HHHS_1.innerHTML = JJJ1;
JS_HHHS_2.innerHTML = JJJ2;
JS_HHHS_3.innerHTML = JJJ3;
JS_HHHS_4.innerHTML = JJJ4;
JS_HHHS_5.innerHTML = JJJ5;


_fjr        = GimeTotalMinutes(_n0);
_shrq       = GimeTotalMinutes(_n1);
_thuhr      = GimeTotalMinutes(_n2);
_asr        = GimeTotalMinutes(_n3);
_maghreb    = GimeTotalMinutes(_n4);
_isha       = GimeTotalMinutes(_n5);

JS_arr6DATAC[0] = _fjr;
JS_arr6DATAC[1] = _shrq;
JS_arr6DATAC[2] = _thuhr;
JS_arr6DATAC[3] = _asr;
JS_arr6DATAC[4] = _maghreb;
JS_arr6DATAC[5] = _isha;


var STRmonth    = JS_MONTHS_NOW[mmm];
var STRyear     = JS_CCC.getFullYear();



//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
var eHjrVVV =  ARNumbers(JS_FULL_HJRI_NOW);
var eHjrCLR =  ARNumbers(JS_FULL_HJRI_CLR);
_ab1.innerHTML = sims(c_ab1);

var iiiDAY  = "<span class='cDGT cCLK'>"+ARNumbers(jx)+"</span>";
var iiiYEAR = "<span class='cDGT'>"+ARNumbers(STRyear)+"</span>";

var miladiSEK  = "<span class='cDGT'>"+ARNumbers(jx)+"</span> "+STRmonth+" "+iiiYEAR;
var miladiCLR  = iiiDAY+" <span class='cCLK'>"+STRmonth+"</span> "+iiiYEAR;

_vre.style.visibility='visible';_vre.style.opacity=1;_vre.style.display='block';
document.getElementById('eVRYOUM').innerHTML    = arYOUM;
document.getElementById('eVRHIJRI').innerHTML   = eHjrVVV;
document.getElementById('eVRMILADI').innerHTML  = miladiSEK;
document.getElementById('eVR003').innerHTML  = arYOUM+' '+eHjrCLR;

JS_HRMILADIHIJRI.innerHTML  = arYOUM+' '+eHjrCLR+' . '+miladiCLR;
document.getElementById('mhj0').innerHTML = miladiCLR;
document.getElementById('mhj1').innerHTML = arYOUM+' '+eHjrCLR;

ShowTomorrow();
updateBottomInformations();
goUpdateIQAMAS();
goSetNextSalatRemainingTIME(JS_nowMNTS);

}

//-----------------------------------------------------------------------------------
function GoAdjustment(hhh, mints)
{

    var nowMNTS = GimeTotalMinutes(hhh);
    nowMNTS += mints;
    var cHHH = Math.floor(nowMNTS / 60);
    var cMMM = nowMNTS % 60;

    cHHH    ='0'+cHHH;
    cMMM    ='0'+cMMM;

    cHHH = cHHH.slice(-2);
    cMMM = cMMM.slice(-2);

    return (cHHH + ':' + cMMM);
}


//-----------------------------------------------------------------------------------
function GetNextFriday(x)
{

    var JS_TOD  = new Date;
    var JS_TMP  = new Date;
//   -------------TEST ONLY        JS_TMP.setDate(JS_TOD.getDate() + 36);

    var xjjj   = -1;
    var nextFridayX  = "---";


    for (i=0; i <= 6; i++)
    {
        JS_TMP.setDate(JS_TMP.getDate() + 1); //    +1  not i

        xjjj = JS_TMP.getDay();

        if(xjjj == 5)
        {
            var Exmont  = JS_TMP.getMonth();
            var Eydato  = JS_TMP.getDate();
            var jje     = '0'+Eydato;
            jje     = jje.slice(-2);

            var jmm = '0'+(Exmont+1);
            jmm = jmm.slice(-2);

            var jmonthDay = jmm+'-'+jje;


            if(JS_WCSV_ACTIVE)
            {
                        // "10-15,  NA,  05:56,  06:30,  07:26,       12:51,  13:30,      16:14,  16:30,      18:08,  18:08,        19:24,  19:45,        13:15,  14:15,  288",
                var ikc = FindInArray(jmonthDay, JS_WCSV_DATA);
                if(ikc== -1) { dolog('jmonthDay Error in file (WCSV.js), date not found:'+jmonthDay); return; }
                var jLineFULL  = JS_WCSV_DATA[ikc];
                var jTIMES_NOW = jLineFULL.split(',');
                        nextFridayX  = jTIMES_NOW[13]; // direct jomoa1 from wcsv
                        JS_HReJOMOA2WCSV.innerHTML = '2nd Jomoa : '+jTIMES_NOW[14]; // direct jomoa2 from wcsv
                    }
                    else
                    {
                        var ikc = FindInArray(jmonthDay, JS_TIMES);
                        if(ikc== -1) { dolog('jmonthDay Error in file (wtimes), date not found:'+jmonthDay); return; }
                        var jLineFULL  = JS_TIMES[ikc];
                        var jDataLINE  = jLineFULL.split('~~~~~');
                        var jTIMES_NOW = jDataLINE[1].split('|');
                        nextFridayX = jTIMES_NOW[x];
                    }

                    break;
                }
            }



            if( (JS_SUMMER_LIVE_ACTIVE) && (Exmont !== 10) ) nextFridayX = Gime1HourMORE(nextFridayX);


            return nextFridayX;
        }



//-----------------------------------------------------------------------------------

        var JS_DECOMPTE_STARTED         =  false;
        var JS_IQUAMA_SECONDS           =  0;
        var JS_NOW_DIMSCREEN_DURATION   =  0;
        var JS_ACTIVE_IQAMA_NOW         =  0;
        var JS_ACTIVE_IQAMA_NOW_SECONDS =  0;

//---------------------------------------------
        function startDECOMPTE(xminu, duree)
        {

            if( (!JS_IQAMA_COUNTDOWN_ACTIVE) || (JSALLDATA.IZforHOME==1) ) return;

// NO COUNTER, DIRECT BLACKSCREEN AND EXIT
            if(xminu < 1) {setTimeout('ShowRIDEAU()', 1000);  setTimeout('SetAllTubesNORMAL()', 9000);   return; }


// first, fill prayer duration
            JS_NOW_DIMSCREEN_DURATION   = duree;



            JS_DECOMPTE_STARTED         = true;
            JS_IQUAMA_SECONDS           = (xminu * 60);
            JS_ACTIVE_IQAMA_NOW         = xminu;
            JS_ACTIVE_IQAMA_NOW_SECONDS = JS_IQUAMA_SECONDS;

        }



//-------------------closeDECOMPTE--------------------------
        function closeDECOMPTE()
        {
            JS_DECOMPTE_STARTED = false;
            JS_IQUAMA_SECONDS   = 0;
            JS_ACTIVE_IQAMA_NOW = 0;
            JS_ACTIVE_IQAMA_NOW_SECONDS = 0;
        }



//-----------------------------------HijriClick--------------------------
        function HijriClick()
        {
            JS_HIJRI_DECALAGE++;
            if(JS_HIJRI_DECALAGE > 2) JS_HIJRI_DECALAGE = -2;

            localStorage.setItem('STORAGE_DECALAGE', JS_HIJRI_DECALAGE);

            GoGloballyFillDATA();
        }


        var JS_STRICT_WTIMES_FILE = false;
//**************************************************************
        function ShowTomorrow()
        {

// TOMORROW TIMES ...
            var JS_TTT  = new Date;
            JS_TTT.setDate(JS_TTT.getDate() + 1);

            var dayNBR = JS_TTT.getDay();

            var YearNow = JS_TTT.getFullYear();

            var mm      ='0'+(JS_TTT.getMonth()+1);
            var jj      ='0'+JS_TTT.getDate();

            jj =jj.slice(-2);
            mm =mm.slice(-2);


            var eeeFajrTMRW = '';



            if(JS_WCSV_ACTIVE)
            {
        // WSCV USER FILE ---------------------------------------
        // "Date,Day,FajrBegins,....

                var fulldate = mm+'-'+jj;
                var idx = FindInArray(fulldate, JS_WCSV_DATA);
                if(idx== -1) { return; }
                var VLine   = JS_WCSV_DATA[idx];
                var VDatenz = VLine.split(',');
        eeeFajrTMRW = VDatenz[2];  // FAJR TOMORROW
    }
    else
    {
        JS_STRICT_WTIMES_FILE = true;
        var monthDay = mm+'-'+jj;
        var idx = FindInArray(monthDay, JS_TIMES);
        if(idx== -1) { return; }
        //"01-01~~~~~05:37|06:58|12:24|15:29|17:50|19:20",
        var eeeLineFULL         = JS_TIMES[idx];
        var eeeDataLINE         = eeeLineFULL.split('~~~~~');
        var eeeTHE_TIMES_NOW    = eeeDataLINE[1].split('|');
        eeeFajrTMRW             = eeeTHE_TIMES_NOW[0];
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
    var ArTMRW = ARNumbers(adjustedTMRW);
    document.getElementById('VRdemain').innerHTML   = ArTMRW;
    document.getElementById('HRdemain').innerHTML   = ArTMRW;
}




//----goFullSCREEN-------------------------------------
function goFullSCREEN()
{
    GoGloballyFillDATA();
    Go1MN(false);
    launchFullscreen(document.documentElement);
    JS_SND_BEEEP.play();
}


//-------------------------------------------------
function forceAudio()
{
// just to trigger audio manually sounds to be accepted in browser
    JS_SND_BEEEP.play();
    HideZunder('BtnAudio');
}


//------------------------Play_Beeep-----------------
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


//-----------------------------------------
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

//-----------------------------------------
function Play_DohaTit()
{
    JS_SND_TIT.play();
}


//-------------SetScroll-----------
function SetScroll(StrId,nbr)
{
    var OBBB = document.getElementById(StrId);

    var nowSCRO = OBBB.scrollTop;
    if(nbr > 0) OBBB.scrollTop = nowSCRO + 90; else OBBB.scrollTop = nowSCRO - 90;
}


//---------------------------GimeTotalMinutes------
function GimeTotalMinutes(s)
{
//14:25
    var sss = s;
    var hee = sss.substr(0,2);
    var mee = sss.substr(3,2);
    return ( ( parseInt(hee)*60 ) + parseInt(mee) );
}


//=======DisableSelectionByID======================
function DisableSelectionByNAME(elem)
{
    elem.onselectstart = function() { return false; };
    elem.unselectable = "on";
    elem.style.MozUserSelect = "none";
    elem.style.cursor = "default";
}

//-------------------------------------------------------------------------------------------
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


//-------_cadro------------------------------------------------------------------------------------
function _cadro()
{
    JS_DISPLAY_IS_HORIZONTAL = (window.innerHeight < window.innerWidth);
    goSetBG();
}


//---------GoBoxesONOFF--------------------------------------------------------------------------
function GoBoxesONOFF(stat,ELEM)
{
    ELEM.disabled=stat;
}
//-------SetAudioVoiceOnOff------------------------------------------------------------------------------------
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

//-------------------------------------------------------------------------------------------
function VerifyMP3Options()
{
    GoBoxesONOFF(!JS_AUDIO_AZAN_IQAMA_IS_BY_VOICE,JS_eShortAZAN);
    GoBoxesONOFF(!JS_AUDIO_AZAN_IQAMA_IS_BY_VOICE,JS_eShortIQAMA);
}

//-------SetShortAZANOnOff----------------------------------------------------
function SetShortAZANOnOff()
{
    JS_SHORT_AZAN_ACTIVE = !JS_SHORT_AZAN_ACTIVE;
    var eeBOOL = 0;
    if(JS_SHORT_AZAN_ACTIVE) eeBOOL = 1;
    localStorage.setItem('STORAGE_JS_SHORT_AZAN_ACTIVE', eeBOOL);
    if(eeBOOL) JS_eShortAZAN.checked = true; else JS_eShortAZAN.checked = false;
}

//-------SetShortIQAMAOnOff----------------------------------------------------
function SetShortIQAMAOnOff()
{
    JS_SHORT_IQAMA_ACTIVE = !JS_SHORT_IQAMA_ACTIVE;
    var eeBOOL = 0;
    if(JS_SHORT_IQAMA_ACTIVE) eeBOOL = 1;
    localStorage.setItem('STORAGE_JS_SHORT_IQAMA_ACTIVE', eeBOOL);
    if(eeBOOL) JS_eShortIQAMA.checked = true; else JS_eShortIQAMA.checked = false;
}


//-------SetRamadan30MinOnOff------------------------------------------------------------------------------------
function SetRamadan30MinOnOff()
{
    JS_RAMADAN_30MIN_ACTIVE = !JS_RAMADAN_30MIN_ACTIVE;

    var eeBOOL = 0;
    if(JS_RAMADAN_30MIN_ACTIVE) eeBOOL = 1;
    localStorage.setItem('STORAGE_RAMADAN_30MIN_ACTIVE', eeBOOL);

    if(eeBOOL) JS_eRamadan30CHECK.checked = true; else JS_eRamadan30CHECK.checked = false;

    GoGloballyFillDATA();
}


//-------SetSummerOnOff------------------------------------------------------------------------------------
function SetSummerOnOff()
{
    JS_SUMMER_ADD1HOUR = !JS_SUMMER_ADD1HOUR;

    var eeBOOL = 0;
    if(JS_SUMMER_ADD1HOUR) eeBOOL = 1;
    localStorage.setItem('STORAGE_SUMMER_ADD1HOUR', eeBOOL);
    if(eeBOOL) JS_summerCHECK.checked = true; else JS_summerCHECK.checked = false;
    GoGloballyFillDATA();
}

//-------Set1MoreHOUR------------------------------------------------------------------------------------
function Set1MoreHOUR()
{
    JS_1HOURMORE = !JS_1HOURMORE;
    var eeBOOL = 0;
    if(JS_1HOURMORE) eeBOOL = 1;
    localStorage.setItem('STORAGE_JS_1HOURMORE', eeBOOL);
    if(eeBOOL) JS_eMoreHourCHECK.checked = true; else JS_eMoreHourCHECK.checked = false;
    GoGloballyFillDATA();
}

//-------Set1LessHOUR------------------------------------------------------------------------------------
function Set1LessHOUR()
{
    JS_1LESSMORE = !JS_1LESSMORE;
    var eeBOOL = 0;
    if(JS_1LESSMORE) eeBOOL = 1;
    localStorage.setItem('STORAGE_JS_1LESSMORE', eeBOOL);
    if(eeBOOL) JS_eLessHourCHECK.checked = true; else JS_eLessHourCHECK.checked = false;
    GoGloballyFillDATA();
}




//-------SetMeteoOnOff------------------------------------------------------------------------------------
function SetMeteoOnOff()
{
    if(JSALLDATA.IZmeteo==0) JSALLDATA.IZmeteo=1; else JSALLDATA.IZmeteo=0;
    SaveJsDATA();
    updateMeteoDSP(true);
}
//-----------------------------------------------------------------------------------
function updateMeteoDSP(_forceFETCH)
{
    if(JSALLDATA.IZmeteo==1){
        JS_MeteoCHECK.checked = true;
        JS_ROOT.style.setProperty('--METEO', 'visible');
        if(_forceFETCH) FetchMETEO();
    }
    else
    {
        JS_MeteoCHECK.checked = false;
        JS_ROOT.style.setProperty('--METEO', 'hidden');
    }
}

//-------SetMtoPRYRS------------------------------------------------------------------------------------
function SetMtoPRYRS()
{
    if(JSALLDATA.IZMtoPRYRS==0) JSALLDATA.IZMtoPRYRS=1; else JSALLDATA.IZMtoPRYRS=0;
    SaveJsDATA();
    updateMtoPRYRS(true);
}
//-----------------------------------------------------------------------------------
function updateMtoPRYRS(_forceFETCH)
{
    var objjj = document.getElementById('eMtoPRYRS');

    objjj.checked = (JSALLDATA.IZMtoPRYRS==1);

    if(JSALLDATA.IZMtoPRYRS==1)
        JS_ROOT.style.setProperty('--MTOSLWTS', 'visible');
    else
        JS_ROOT.style.setProperty('--MTOSLWTS', 'hidden');

    if(_forceFETCH) FetchMETEO();
}
//-------Set24OnOff------------------------------------------------------------------------------------
function Set24OnOff()
{
    JS_24H_ACTIVE = !JS_24H_ACTIVE;
    var sssBOOL = 0;
    if(JS_24H_ACTIVE) sssBOOL = 1;
    localStorage.setItem('STORAGE_24H_ACTIVE', sssBOOL);
    if(sssBOOL) JS_e24CHECK.checked = true; else JS_e24CHECK.checked = false;

    GoGloballyFillDATA();
    Go1MN(false);
}

//-------SetFullClockOnOff------------------------------------------------------------------------------------
function SetFullClockOnOff()
{
    JS_FULL_CLOCK_ACTIVE = !JS_FULL_CLOCK_ACTIVE;
    UpdateFullClock(JS_FULL_CLOCK_ACTIVE);
}

//-------SetPersoWCSV------------------------------------------------------------------------------------
function SetPersoWCSV()
{
    JS_WCSV_ACTIVE = !JS_WCSV_ACTIVE;
    var sssBOOL = 0;
    if(JS_WCSV_ACTIVE) sssBOOL = 1;
    localStorage.setItem('STORAGE_WCSV_ACTIVE', sssBOOL);
    execWCSV(JS_WCSV_ACTIVE);
}

//-------execWCSV------------------------------------------------------------------------------------
function execWCSV(sBOL)
{
    if(sBOL)
    {
        JS_eWCSVCHECK.checked = true;
        JS_ROOT.style.setProperty('--OPAK', '0');
    }
    else
    {
        JS_eWCSVCHECK.checked = false;
        JS_ROOT.style.setProperty('--OPAK', '1');
    }


    Go1MN(false);
}





//-------SetPastDimerOnOff------------------------------------------------------------------------------------
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

//-------SetIqamaFullTimes------------------------------------------------------------------------------------
function SetIqamaFullTimes()
{
    JS_IQAMA_FULL_TIMES = !JS_IQAMA_FULL_TIMES;
    var sssBOOL = 0;
    if(JS_IQAMA_FULL_TIMES) sssBOOL = 1;
    localStorage.setItem('STORAGE_IQAMA_FULL_TIMES', sssBOOL);
    if(sssBOOL) JS_eIQAMAasHOURCHECK.checked = true; else JS_eIQAMAasHOURCHECK.checked = false;


    goUpdateIQAMAS();
}


//-------SetCOUNTDOWNOnOff------------------------------------------------------------------------------------
function SetCOUNTDOWNOnOff()
{
    JS_IQAMA_COUNTDOWN_ACTIVE = !JS_IQAMA_COUNTDOWN_ACTIVE;
    var sssBOOL = 0;
    if(JS_IQAMA_COUNTDOWN_ACTIVE) sssBOOL = 1;
    localStorage.setItem('STORAGE_IQAMA_COUNTDOWN_ACTIVE', sssBOOL);
    if(sssBOOL) JS_eCOUNTDOWNOnOff.checked = true; else JS_eCOUNTDOWNOnOff.checked = false;
}




//-------UpdateFullClock------------------------------------------------------------------------------------
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


//-------SetDimmOnOff------------------------------------------------------------------------------------
function SetDimmOnOff()
{
    JS_DIMM_WHILE_PRAYIN_ACTIVE = !JS_DIMM_WHILE_PRAYIN_ACTIVE;
    var sssBOOL = 0;
    if(JS_DIMM_WHILE_PRAYIN_ACTIVE) sssBOOL = 1;
    localStorage.setItem('STORAGE_DIMM_SCREEN', sssBOOL);
    if(sssBOOL) JS_eDimmCHECK.checked = true; else JS_eDimmCHECK.checked = false;
}





//-------SetOwnSlidersOnOff------------------------------------------------------------------------------------
function SetOwnSlidersOnOff()
{
    JS_USER_SLIDERS_ACTIVE = !JS_USER_SLIDERS_ACTIVE;
    var sssBOOL = 0;
    if(JS_USER_SLIDERS_ACTIVE) sssBOOL = 1;
    localStorage.setItem('STORAGE_SLIDERS_ACTIVE', sssBOOL);
    if(sssBOOL) JS_eSlidersCHECK.checked = true; else JS_eSlidersCHECK.checked = false;
}


//---------SwitchOnOffAZKAR--------------------------------------------------------------------------
function SwitchOnOffAZKAR()
{
    JS_APP_AZKAR_ACTIVE = !JS_APP_AZKAR_ACTIVE;
    var sssBOOL = 0;
    if(JS_APP_AZKAR_ACTIVE) sssBOOL = 1;
    localStorage.setItem('STORAGE_AZKAR_ACTIVE', sssBOOL);
    if(sssBOOL) JS_eAzkarCHECK.checked = true; else JS_eAzkarCHECK.checked = false;

    GoBoxesONOFF((sssBOOL==0),JS_eAzkar5minCHECK);
}
//-------SetOnePictureFixed5min------------------------------------------------------------------------------------
function SetOnePictureFixed5min()
{
    if(JSALLDATA.IZ5minAzkar==0) JSALLDATA.IZ5minAzkar=1; else JSALLDATA.IZ5minAzkar=0;
    SaveJsDATA();
    set5minAzkar();
}
//------------------------------------------------------------
function set5minAzkar()
{
    JS_eAzkar5minCHECK.checked = (JSALLDATA.IZ5minAzkar==1);

}





var JS_LAST_X = 0;
var JS_NB     = 0;
//------------_GoMessages------------------------------------------------------
function _GoMessages()
{

    JS_NB = Math.floor((Math.random() * JS_COUNT_MSGS));


// avoid same number
    if(JS_LAST_X == JS_NB ) { _GoMessages(); return; }


    var str = JS_MESSAGES[JS_NB];
    if(str == "") { _GoMessages(); return; }



    if((JS_DULHIJJA_WORK_DAYS) &&
        ((str.indexOf('10NIGHTS') > -1) || (str.indexOf('3WHITEDAYS') > -1) || (str.indexOf('TAKBIR') > -1))) { _GoMessages(); return; }

        if((JS_RAMADAN_10_NIGHTS) &&
            ((str.indexOf('10DAYS') > -1) || (str.indexOf('3WHITEDAYS') > -1) || (str.indexOf('TAKBIR') > -1))) { _GoMessages(); return; }

            if((JS_FASTING_3_WHITE_DAYS) &&
                ((str.indexOf('10DAYS') > -1) || (str.indexOf('10NIGHTS') > -1) || (str.indexOf('TAKBIR') > -1))) { _GoMessages(); return; }

                if((JS_TAKBIR_DAYS) &&
                    ((str.indexOf('10DAYS') > -1) || (str.indexOf('10NIGHTS') > -1) || (str.indexOf('3WHITEDAYS') > -1))) { _GoMessages(); return; }

                    var group4Specials   = (JS_DULHIJJA_WORK_DAYS || JS_RAMADAN_10_NIGHTS || JS_FASTING_3_WHITE_DAYS || JS_TAKBIR_DAYS);
                var spclSTRini       = (str.indexOf('10DAYS') > -1) || (str.indexOf('10NIGHTS') > -1) || (str.indexOf('3WHITEDAYS') > -1) || (str.indexOf('TAKBIR') > -1);

                if (spclSTRini && !group4Specials) { _GoMessages(); return; }


// filter passed, clean now,
                str = str.replace('TAKBIR', '');
                str = str.replace('10DAYS', '');
                str = str.replace('10NIGHTS', '');
                str = str.replace('3WHITEDAYS', '');


                if(spclSTRini) str = "<span style='color:var(--Color_CLOCK);'>"+str+"<span>";

                str = str.replace(/\{/g, "﴿");
                str = str.replace(/\}/g, "﴾");


                if(JS_LOGS_ENABLED) str = JS_TEST_TEXT;

                JS_VReAYATS.innerHTML = str;
                JS_HReAYATS.innerHTML = str;

                JS_LAST_X = JS_NB;
            }





//--------editMOSQUENAME-----------------------------------------------------------------------------------
            function editMOSQUENAME()
            {

                var str = prompt("Enter your Mosque name", JS_MOSQUE_NAME);
                if(str === null) return;

                JS_MOSQUE_NAME = str;
                JS_VRMsqNAME.innerHTML = JS_MOSQUE_NAME;
                JS_HRMsqNAME.innerHTML = JS_MOSQUE_NAME;
                localStorage.setItem('STORAGE_MOSQUE_NAME', JS_MOSQUE_NAME);

            }

//-------------------------------------------------------------------------------------------
            function doDHRxminASR()
            {
                var str = prompt("Enter Dohr-Azan, X-minutes before Asr,  (enter 0 to disable)", JSALLDATA.DHRxminASR);
                if(str === null) return;
                JSALLDATA.DHRxminASR = parseInt(str);
                if(!JSALLDATA.DHRxminASR) JSALLDATA.DHRxminASR = 0;
                SaveJsDATA();
                updateDHRxminASR();
                updateBottomInformations();
                GoGloballyFillDATA();
            }

//-------------------------------------------------------------------------------------------+' min'
            function updateDHRxminASR()
            {
                document.getElementById('DHRxminASR').innerHTML = JSALLDATA.DHRxminASR;
            }


//-------------------------------------------------------------------------------------------
            var JS_KNTO = 0;
//-----------------TestCounter---------------
            function TestCounter()
            {
                JS_KNTO++;
                if(JS_KNTO >= 3)    {
                    JS_KNTO = 0;
                    startDECOMPTE(2, 1);
                    ShowCOUNTERS();
                }
            }
//-----------------------------------------------------------------------------------
            var JS_KNTazkar = 0;
            function DemoSartMainAZKAR()
            {
                JS_KNTazkar++; if(JS_KNTazkar >= 3) {JS_KNTazkar = 0; SartMainAZKAR();}
            }
//-----------------------------------------------------------------------------------
            var JS_KNTslides = 0;
            function DemoStartSLIDES()
            {
                JS_KNTslides++; if(JS_KNTslides >= 3) {JS_KNTslides = 0; StartSLIDES();}
            }


//-----------------------------------------------------------------------------------
            var JS_KNTasABH = 0;
            function DemoAzSABAH()
            {
                JS_KNTasABH++; if(JS_KNTasABH >= 3) {JS_KNTasABH = 0; PlayAzkarOF(JS_AZKAR_SABAH,false);}
            }
//-----------------------------------------------------------------------------------
            var JS_KNTasMSA = 0;
            function DemoAzMASAA()
            {
                JS_KNTasMSA++; if(JS_KNTasMSA >= 3) {JS_KNTasMSA = 0; PlayAzkarOF(JS_AZKAR_MASAA,false);}
            }






//-------------------------------------------------------------------------------------------
//-----------------LogsOnOff---------------
            function LogsOnOff()
            {
                JS_LOGS_ENABLED = !JS_LOGS_ENABLED;
                _GoMessages();
            }

//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------

            var JS_HELP_MENU_IS_OPEN = true;
            var JS_eMenuVR = document.getElementById('eMenuVR');
            var JS_eMenuHR = document.getElementById('eMenuHR');
//-----------------ShowGlobalHELP---------------
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

//-----------------------
            function CloseHELP()
            {
                JS_HELP_MENU_IS_OPEN = !JS_HELP_MENU_IS_OPEN;
                HideZunder('eHELPSCREEN');
            }

//-----------------openSSS---------------
            function openSSS(xx)
            {
                HideZunder('sss1');
                HideZunder('sss2');
                HideZunder('sss3');
                HideZunder('sss4');

                ShowZunder('sss'+xx);
            }



//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
//--------------------------ADMINMSGSEditor--------------------------------------------
            function ADMINMSGSEditor()
            {
                var str = prompt("Enter your message. اكتب إعلانك ", "");
                if (str != null)
                {
                    str = str.replaceAll('"', '“');
                    JS_MSGS_DATA.unshift("1|DAILY|" + str);
                    AdminMsgsGLOBAL();
                }
            }
//-----------------------------------------------------------------------------------
            function AdminMsgsGLOBAL()
            {
                AdminMsgsSAVER();
                AdminMsgsLISTER();
                AdminUpdateWAGON();
                AdminUpdateMarquee();
            }


//-----------------------------------------------------------------------------------
            function AdminMsgsVIEW()
            {
                AdminUpdateWAGON();
                AdminUpdateMarquee();
            }
//--------------------------AddSLIDE--------------------------------------------
            function AddSLIDE()
            {
                var str = prompt("Enter your slide message here, or picture file name (.jpg)", "");
                if (str != null)
                {
                    str = str.replaceAll('"', '“');
                    str = str.replaceAll('°', '.');
                    str = str.replaceAll('#', '.');
                    str = str.replaceAll('^', '.');
                    JS_SLIDES_DATA.push(str);
                    SlidesGLOBAL();
                }
            }
//-----------------------------------------------------------------------------------
            function clearSlidesTable()
            {
                while(JS_uaTBslides.hasChildNodes())
                {
                    JS_uaTBslides.removeChild(JS_uaTBslides.firstChild);
                }
            }
//-------------SlidesGLOBAL----------------------------------------------------------------------
            function SlidesGLOBAL()
            {
                SlidesSAVER();
                SlidesLISTER();
            }
//-----------------------------------------------------------------------------------
            function SlidesSAVER()
            {
JS_SLIDES_MESSAGES  = ""; // clear
for (var i=0; i < JS_SLIDES_DATA.length; i++)
{
    var nowDT = JS_SLIDES_DATA[i];
    if(nowDT !== "") JS_SLIDES_MESSAGES += nowDT+"°°";
}
localStorage.setItem('STORAGE_JS_SLIDES_MESSAGES', JS_SLIDES_MESSAGES);
}

var JS_uaTBslides = document.getElementById('uaTBslides');
var JS_UATBL1     = document.getElementById('uaTBL1');
//-------------SlidesLISTER----------------------------------------------------------------------
function SlidesLISTER()
{
    clearSlidesTable();

    for (var i=0; i < JS_SLIDES_DATA.length; i++)
    {
        var str3 = JS_SLIDES_DATA[i];
        if(str3 !== "")
        {
            var row = JS_uaTBslides.insertRow(-1);
            var j0 = row.insertCell(0);
            var j1 = row.insertCell(1);
            var j2 = row.insertCell(2);

            j0.innerHTML = "<span class='hnd' onclick='editSlide("+i+")'>EDIT</span>";
            j1.innerHTML = "<span >"+str3+"</span>";
            j2.innerHTML = "<span class='hnd' onclick='DelSlide("+i+")'> X </span>";
        }
    }
}

//-----------------------------------------------------------------------------------
function DelSlide(itm)
{
    JS_SLIDES_DATA.splice(itm, 1);
    SlidesGLOBAL();
}
//-----------------------------------------------------------------------------------
function editSlide(itm)
{
    var xstr = JS_SLIDES_DATA[itm];

    var str = prompt("Edit Slide Message",xstr);
    if (str != null)
    {
        str = str.replaceAll('"', '“');
        JS_MSGS_DATA[itm] = str;
        SlidesGLOBAL();
    }
}
//-----------------------------------------------------------------------------------
function AdminMsgsLISTER()
{

    clearMsgsTable();

    for (var i=0; i < JS_MSGS_DATA.length; i++)
    {
        var str3 = JS_MSGS_DATA[i];
        if(str3 !== "")
        {
            var xARR = str3.split("|");
            var row = JS_UATBL1.insertRow(-1);
            var c0 = row.insertCell(0);
            var c1 = row.insertCell(1);
            var c2 = row.insertCell(2);
            var c3 = row.insertCell(3);
            var c4 = row.insertCell(4);

            var ccc = "";  if(xARR[0]=="1") ccc = "checked";
            c0.innerHTML = "<input type='checkbox' class='cc15' onchange='SetADMsgOnOff(this,"+i+")' "+ccc+">";
            if(i>0) c1.innerHTML = "<span class='hnd' onclick='editMovUP("+i+")'>&#8593;</span>";
            c2.innerHTML = "<span ondblclick='editMxDAY("+i+")'>"+xARR[1]+"</span>";
            c3.innerHTML = "<span ondblclick='editADMsg("+i+")'>"+xARR[2]+"</span>";
            c4.innerHTML = "<span class='hnd' onclick='DelADMsg("+i+")'> X </span>";
        }
    }
}

//-----------------------------------------------------------------------------------
function SetADMsgOnOff(obj,itm)
{
    var c = "0"; if(obj.checked) c = "1";
    JS_MSGS_DATA[itm] = JS_MSGS_DATA[itm].replace(/^./, c);
    AdminMsgsGLOBAL();
}
//-----------------------------------------------------------------------------------
function editMovUP(itm)
{
    var tmp = JS_MSGS_DATA[itm-1];
    JS_MSGS_DATA[itm-1] = JS_MSGS_DATA[itm];
    JS_MSGS_DATA[itm]   = tmp;
    AdminMsgsGLOBAL();
}
//-----------------------------------------------------------------------------------
function DelADMsg(itm)
{
    JS_MSGS_DATA.splice(itm, 1);
    AdminMsgsGLOBAL();
}

//-----------------------------------------------------------------------------------
function editADMsg(itm)
{
    var xARR = JS_MSGS_DATA[itm].split("|");

    var str = prompt("Edit Message", xARR[2]);
    if (str != null)
    {
        str = str.replaceAll('"', '“');
        xARR[2] = str;
        JS_MSGS_DATA[itm] = xARR[0]+"|"+xARR[1]+"|"+xARR[2];
        AdminMsgsGLOBAL();
    }
}

//-----------------------------------------------------------------------------------
function editMxDAY(itm)
{
    var xARR = JS_MSGS_DATA[itm].split("|");

    var strCHS  = "Choose EXACTLY one of these days. اختر من هذه الأيام  : \r\r";
    strCHS += "JOMOA . SATURDAY . SUNDAY . MONDAY . TUESDAY . WEDNESDAY . THURSDAY \r\r";
    strCHS += "If you want your message to appear on a special HIJRI date (eg: 27th Ramadan), enter : 09/27 \r\r";

    var str = prompt(strCHS, xARR[1]);
    if (str != null)
    {
        xARR[1] = str;
        JS_MSGS_DATA[itm] = xARR[0]+"|"+xARR[1]+"|"+xARR[2];
        AdminMsgsGLOBAL();
    }
}
//-----------------------------------------------------------------------------------
function clearMsgsTable()
{
    while(JS_UATBL1.hasChildNodes())
    {
        JS_UATBL1.removeChild(JS_UATBL1.firstChild);
    }
}
//-----------------------------------------------------------------------------------
function AdminMsgsSAVER()
{
JS_ADMIN_MESSAGES   = ""; // clear
for (var i=0; i < JS_MSGS_DATA.length; i++)
{
    var nowDT = JS_MSGS_DATA[i];
    if(nowDT !== "") JS_ADMIN_MESSAGES += nowDT+"°°";
}
localStorage.setItem('STORAGE_ADMIN_MESSAGES', JS_ADMIN_MESSAGES);
}


//-----------------------------------------------------------------------------------
function AdminUpdateWAGON()
{
JS_BTM_WAGON    = ""; // clear marquee wagon
JS_BTM_ONE_MSG  = ""; // also clear


for (var i=0; i < JS_MSGS_DATA.length; i++)
{
    var xARR = JS_MSGS_DATA[i].split("|");

        // add to wagon if active
        if(xARR[0] == "1")  // then add msg if daily or same day as today or same hijri date
        {
            if( (xARR[1]=="DAILY") || (xARR[1]==JS_ADM_TODAY_NAME) || (xARR[1]==JS_ADM_HIJRI_DATE) || (xARR[1]==JS_ADM_10DLHJ) )
            {
                if(JS_BTM_WAGON !== "") JS_BTM_WAGON += "<span> &nbsp;&nbsp;&nbsp; &bull; &nbsp;&nbsp;&nbsp; </span>";
                JS_BTM_WAGON += xARR[2];

                if(JS_BTM_ONE_MSG == "") JS_BTM_ONE_MSG  = xARR[2]; // fill btm one msg With the first active msg, once.
            }
        }
    }

}
//-----------------------------------------------------------------------------------
var JS_HRMARQ = null;
var JS_VRMARQ = null;
//--------------------------------------------------------------------------
function AdminUpdateMarquee()
{
// force marquee update by re-add
    JS_VR_EMESSAGE1.innerHTML = "<marquee id='VRmarq' class='cMarq' scrollamount='5'></marquee>";
    JS_HR_EMESSAGE1.innerHTML = "<marquee id='HRmarq' class='cMarq' scrollamount='5'></marquee>";

JS_VRMARQ = document.getElementById('VRmarq'); // force new assign VR
JS_HRMARQ = document.getElementById('HRmarq'); // force new assign HR

JS_VR_EMESSAGE0.innerHTML = JS_BTM_ONE_MSG;
JS_HR_EMESSAGE0.innerHTML = JS_BTM_ONE_MSG;

JS_VRMARQ.innerHTML = JS_BTM_WAGON;
JS_HRMARQ.innerHTML = JS_BTM_WAGON;


verifyMarquee(); // must be always after update marquee
}

//--------------------------------------------------------------------------
function verifyMarquee()
{
    if (JS_BTM_WAGON == "")
    {
        HideZunder('VReMESSAGE0');
        HideZunder('HReMESSAGE0');
        HideZunder('VReMESSAGE1');
        HideZunder('HReMESSAGE1');

    }
    else  // USER MSG ACTIVE
    {

        if(JSALLDATA.IZmarquee==1)
        {
            ShowZunder('VReMESSAGE1');
            HideZunder('VReMESSAGE0');
            ShowZunder('HReMESSAGE1');
            HideZunder('HReMESSAGE0');

            if(izArabic(JS_BTM_WAGON))
                { JS_VRMARQ.direction = 'right'; JS_HRMARQ.direction = 'right';}
            else
                { JS_VRMARQ.direction = 'left'; JS_HRMARQ.direction = 'left';}
        }
        else
        {
            HideZunder('VReMESSAGE1');
            HideZunder('HReMESSAGE1');
            ShowZunder('VReMESSAGE0');
            ShowZunder('HReMESSAGE0');
        }
    }
}

//--------------------------closeThis-----------------------------------------------------
function closeThis(obj)
{
    obj.parentNode.parentNode.style.visibility = 'hidden';
}

//-----------------------------------------------------------------------------------


// HIJRI DATE FROM MILADI, CODE FROM :
// http://www.vivvo.net/forums/showthread.php?p=40981
//-------------------------------------------------------------------------------------------
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
    if(d < 1 ) { d = 30; m--;   }
    if(d > 30) { d = 1;  m++;   }

    if(m < 1  ) m = 12;
    if(m > 12 ) m = 1;

    JS_THIS_IS_RAMADAN      = (m == 9 );
    JS_FULL_HJRI_NOW        =  "<span class='cDGT'>" + d + "</span> " + " " + JS_HIJRI_NOW[m-1] + " <span class='cDGT'>" +y+ "</span>";
    JS_FULL_HJRI_CLR        =  "<span class='cCLK cDGT'>" + d + "</span> <span class='cCLK'>" + JS_HIJRI_NOW[m-1] + "</span> <span class='cDGT'>" +y+ "</span>";
    JS_ARRAY_FULLHJRI       = [d,JS_HIJRI_NOW[m-1],y];
    JS_DULHIJJA_DAYS_0913   = ( (m == 12) && (  (d==9)||(d==10)||(d==11)||(d==12)||(d==13)  )   );
    JS_SHAABAN_LAST_DAYS    = ( (m == 8) && (  (d==29)||(d==30)  )   );
    JS_DULHIJJA_WORK_DAYS   = ( (m == 12) && ( d >=1  && d <= 9 ));
    JS_RAMADAN_10_NIGHTS    = ( (m == 9)  && ( d >=20 && d < 29));
    JS_TAKBIR_DAYS          = (  m == 10 &&  d == 1) || ( (m == 12) && ( d >=10  && d <= 13 )) ;

    JS_FASTING_3_WHITE_DAYS = (  d >=12 && d <= 14) && (  (!JS_THIS_IS_RAMADAN)&&(!JS_DULHIJJA_DAYS_0913)&&(!JS_SHAABAN_LAST_DAYS) );

    var xMM = '0'+m;    xMM = xMM.slice(-2);
    var xDD = '0'+d;    xDD = xDD.slice(-2);

    JS_ADM_HIJRI_DATE = xMM+"/"+xDD;

    JS_IS_10DULHIJJA    = ( (m == 12)  && ( d >=1 && d <= 9));
    if(JS_IS_10DULHIJJA) JS_ADM_10DLHJ = "10DLHJ"; else JS_ADM_10DLHJ = "";

}



//------------------------------intPart-------------------------------------------------------------
function intPart(floatNum)
{
    if (floatNum < -0.0000001) { return Math.ceil(floatNum-0.0000001) }
        return Math.floor(floatNum+0.0000001)
}


//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------

var JS_OBJ_AZAN_FAJR        = document.getElementById('AZAN_FAJR');
var JS_OBJ_AZAN_SHRQ        = document.getElementById('AZAN_SHRQ');
var JS_OBJ_AZAN_DOHR        = document.getElementById('AZAN_DOHR');
var JS_OBJ_AZAN_ASR         = document.getElementById('AZAN_ASR');
var JS_OBJ_AZAN_MAGHRIB     = document.getElementById('AZAN_MAGHRIB');
var JS_OBJ_AZAN_ISHA        = document.getElementById('AZAN_ISHA');





//--------------goAZANminus-----------------------------------------------------------------------------
function goAZANminus(prayNAME)
{


    switch(prayNAME)
    {

    case 'FAJR'   :   JS_ATHAN_MINUTES_OF_FAJR--;
        if(JS_ATHAN_MINUTES_OF_FAJR < -60) {JS_ATHAN_MINUTES_OF_FAJR = -60; return;}
        JS_OBJ_AZAN_FAJR.innerHTML = JS_ATHAN_MINUTES_OF_FAJR;
        localStorage.setItem('STORAGE_AZAN_FAJR', JS_ATHAN_MINUTES_OF_FAJR);
        break;

    case 'SHRQ'   :   JS_ATHAN_MINUTES_OF_SHRQ--;
        if(JS_ATHAN_MINUTES_OF_FAJR < -60) {JS_ATHAN_MINUTES_OF_SHRQ = -60; return;}
        JS_OBJ_AZAN_SHRQ.innerHTML = JS_ATHAN_MINUTES_OF_SHRQ;
        localStorage.setItem('STORAGE_AZAN_SHRQ', JS_ATHAN_MINUTES_OF_SHRQ);
        break;

    case 'DOHR'   :   JS_ATHAN_MINUTES_OF_DOHR--;
        if(JS_ATHAN_MINUTES_OF_DOHR < -60) {JS_ATHAN_MINUTES_OF_DOHR = -60; return;}
        JS_OBJ_AZAN_DOHR.innerHTML = JS_ATHAN_MINUTES_OF_DOHR;
        localStorage.setItem('STORAGE_AZAN_DOHR', JS_ATHAN_MINUTES_OF_DOHR);
        break;

    case 'ASR'    :   JS_ATHAN_MINUTES_OF_ASR--;
        if(JS_ATHAN_MINUTES_OF_ASR < -60) {JS_ATHAN_MINUTES_OF_ASR = -60; return;}
        JS_OBJ_AZAN_ASR.innerHTML = JS_ATHAN_MINUTES_OF_ASR;
        localStorage.setItem('STORAGE_AZAN_ASR', JS_ATHAN_MINUTES_OF_ASR);
        break;

    case 'MAGHRIB'    :   JS_ATHAN_MINUTES_OF_MAGHRIB--;
        if(JS_ATHAN_MINUTES_OF_MAGHRIB < -60) {JS_ATHAN_MINUTES_OF_MAGHRIB = -60; return;}
        JS_OBJ_AZAN_MAGHRIB.innerHTML = JS_ATHAN_MINUTES_OF_MAGHRIB;
        localStorage.setItem('STORAGE_AZAN_MAGHRIB', JS_ATHAN_MINUTES_OF_MAGHRIB);
        break;

    case 'ISHA'   :   JS_ATHAN_MINUTES_OF_ISHA--;
        if(JS_ATHAN_MINUTES_OF_ISHA < -60) {JS_ATHAN_MINUTES_OF_ISHA = -60; return;}
        JS_OBJ_AZAN_ISHA.innerHTML = JS_ATHAN_MINUTES_OF_ISHA;
        localStorage.setItem('STORAGE_AZAN_ISHA', JS_ATHAN_MINUTES_OF_ISHA);
        break;



    default   : alert('err888');      break;
    }

    GoGloballyFillDATA();
}
//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
//--------------goZZZcplus----------------------------------------------------------
function goAZANcplus(prayNAME)
{

    switch(prayNAME)
    {



    case 'FAJR'   :   JS_ATHAN_MINUTES_OF_FAJR++;
        if(JS_ATHAN_MINUTES_OF_FAJR > 60) {JS_ATHAN_MINUTES_OF_FAJR = 60; return;}
        JS_OBJ_AZAN_FAJR.innerHTML = JS_ATHAN_MINUTES_OF_FAJR;
        localStorage.setItem('STORAGE_AZAN_FAJR', JS_ATHAN_MINUTES_OF_FAJR);
        break;

    case 'SHRQ'   :   JS_ATHAN_MINUTES_OF_SHRQ++;
        if(JS_ATHAN_MINUTES_OF_FAJR > 60) {JS_ATHAN_MINUTES_OF_SHRQ = 60; return;}
        JS_OBJ_AZAN_SHRQ.innerHTML = JS_ATHAN_MINUTES_OF_SHRQ;
        localStorage.setItem('STORAGE_AZAN_SHRQ', JS_ATHAN_MINUTES_OF_SHRQ);
        break;

    case 'DOHR'   :   JS_ATHAN_MINUTES_OF_DOHR++;
        if(JS_ATHAN_MINUTES_OF_DOHR > 60) {JS_ATHAN_MINUTES_OF_DOHR = 60; return;}
        JS_OBJ_AZAN_DOHR.innerHTML = JS_ATHAN_MINUTES_OF_DOHR;
        localStorage.setItem('STORAGE_AZAN_DOHR', JS_ATHAN_MINUTES_OF_DOHR);
        break;

    case 'ASR'    :   JS_ATHAN_MINUTES_OF_ASR++;
        if(JS_ATHAN_MINUTES_OF_ASR > 60) {JS_ATHAN_MINUTES_OF_ASR = 60; return;}
        JS_OBJ_AZAN_ASR.innerHTML = JS_ATHAN_MINUTES_OF_ASR;
        localStorage.setItem('STORAGE_AZAN_ASR', JS_ATHAN_MINUTES_OF_ASR);
        break;

    case 'MAGHRIB'    :   JS_ATHAN_MINUTES_OF_MAGHRIB++;
        if(JS_ATHAN_MINUTES_OF_MAGHRIB > 60) {JS_ATHAN_MINUTES_OF_MAGHRIB = 60; return;}
        JS_OBJ_AZAN_MAGHRIB.innerHTML = JS_ATHAN_MINUTES_OF_MAGHRIB;
        localStorage.setItem('STORAGE_AZAN_MAGHRIB', JS_ATHAN_MINUTES_OF_MAGHRIB);
        break;

    case 'ISHA'   :   JS_ATHAN_MINUTES_OF_ISHA++;
        if(JS_ATHAN_MINUTES_OF_ISHA > 60) {JS_ATHAN_MINUTES_OF_ISHA = 60; return;}
        JS_OBJ_AZAN_ISHA.innerHTML = JS_ATHAN_MINUTES_OF_ISHA;
        localStorage.setItem('STORAGE_AZAN_ISHA', JS_ATHAN_MINUTES_OF_ISHA);
        break;



    default   : alert('err999');      break;
    }


    GoGloballyFillDATA();
}

//-------------------------------------------------------------------------------------------

var JS_OBJ_IQAMA_FAJR       = document.getElementById('IQAMA_FAJR');
var JS_OBJ_IQAMA_SHRQ       = document.getElementById('IQAMA_SHRQ');
var JS_OBJ_IQAMA_DOHR       = document.getElementById('IQAMA_DOHR');
var JS_OBJ_IQAMA_ASR        = document.getElementById('IQAMA_ASR');
var JS_OBJ_IQAMA_MAGHRIB    = document.getElementById('IQAMA_MAGHRIB');
var JS_OBJ_IQAMA_ISHA       = document.getElementById('IQAMA_ISHA');

//--------------goIQAMAminus-----------------------------------------------------------------------------
function goIQAMAminus(prayNAME)
{


    switch(prayNAME)
    {

    case 'FAJR'   :   JS_IQAMA_TIME_OF_FAJR--;
        if(JS_IQAMA_TIME_OF_FAJR < 1) {JS_IQAMA_TIME_OF_FAJR = 1; return;}
        JS_OBJ_IQAMA_FAJR.innerHTML = JS_IQAMA_TIME_OF_FAJR;
        localStorage.setItem('STORAGE_IQAMA_FAJR', JS_IQAMA_TIME_OF_FAJR);
        JS_QM1.innerHTML = JS_IQAMA_TIME_OF_FAJR + '’';
        JS_W333HRQM1.innerHTML = JS_QM1.innerHTML;
        break;

    case 'SHRQ'   :   JS_IQAMA_TIME_OF_SHRQ--;
        if(JS_IQAMA_TIME_OF_SHRQ < 12) {JS_IQAMA_TIME_OF_SHRQ = 12; return;}
        JS_OBJ_IQAMA_SHRQ.innerHTML = JS_IQAMA_TIME_OF_SHRQ;
        localStorage.setItem('STORAGE_IQAMA_SHRQ', JS_IQAMA_TIME_OF_SHRQ);
        JS_QM2.innerHTML = JS_IQAMA_TIME_OF_SHRQ + '’';
        JS_W333HRQM2.innerHTML = JS_QM2.innerHTML;
        break;


    case 'DOHR'   :   JS_IQAMA_TIME_OF_DOHR--;
        if(JS_IQAMA_TIME_OF_DOHR < 1) {JS_IQAMA_TIME_OF__DOHR = 1; return;}
        JS_OBJ_IQAMA_DOHR.innerHTML = JS_IQAMA_TIME_OF_DOHR;
        localStorage.setItem('STORAGE_IQAMA_DOHR', JS_IQAMA_TIME_OF_DOHR);
        JS_QM3.innerHTML = JS_IQAMA_TIME_OF_DOHR + '’';
        JS_W333HRQM3.innerHTML = JS_QM3.innerHTML;
        break;

    case 'ASR'    :   JS_IQAMA_TIME_OF_ASR--;
        if(JS_IQAMA_TIME_OF_ASR < 1) {JS_IQAMA_TIME_OF_ASR = 1; return;}
        JS_OBJ_IQAMA_ASR.innerHTML = JS_IQAMA_TIME_OF_ASR;
        localStorage.setItem('STORAGE_IQAMA_ASR', JS_IQAMA_TIME_OF_ASR);
        JS_QM4.innerHTML = JS_IQAMA_TIME_OF_ASR + '’';
        JS_W333HRQM4.innerHTML = JS_QM4.innerHTML;
        break;

    case 'MAGHRIB'    :   JS_IQAMA_TIME_OF_MAGHRIB--;
        if(JS_IQAMA_TIME_OF_MAGHRIB < 1) {JS_IQAMA_TIME_OF_MAGHRIB = 1; return;}
        JS_OBJ_IQAMA_MAGHRIB.innerHTML = JS_IQAMA_TIME_OF_MAGHRIB;
        localStorage.setItem('STORAGE_IQAMA_MAGHRIB', JS_IQAMA_TIME_OF_MAGHRIB);
        JS_QM5.innerHTML = JS_IQAMA_TIME_OF_MAGHRIB + '’';
        JS_W333HRQM5.innerHTML = JS_QM5.innerHTML;
        break;

    case 'ISHA'   :   JS_IQAMA_TIME_OF_ISHA--;
        if(JS_IQAMA_TIME_OF_ISHA < 1) {JS_IQAMA_TIME_OF_ISHA = 1; return;}
        JS_OBJ_IQAMA_ISHA.innerHTML = JS_IQAMA_TIME_OF_ISHA;
        localStorage.setItem('STORAGE_IQAMA_ISHA', JS_IQAMA_TIME_OF_ISHA);
        JS_QM6.innerHTML = JS_IQAMA_TIME_OF_ISHA + '’';
        JS_W333HRQM6.innerHTML = JS_QM6.innerHTML;
        break;


    default   : alert('err_888');     break;
    }

    goUpdateIQAMAS();
}

//--------------goIQAMAcplus----------------------------------------------------------
function goIQAMAcplus(prayNAME)
{

    switch(prayNAME)
    {

    case 'FAJR'   :   JS_IQAMA_TIME_OF_FAJR++;
        if(JS_IQAMA_TIME_OF_FAJR > 70) {JS_IQAMA_TIME_OF_FAJR = 70; return;}
        JS_OBJ_IQAMA_FAJR.innerHTML = JS_IQAMA_TIME_OF_FAJR;
        localStorage.setItem('STORAGE_IQAMA_FAJR', JS_IQAMA_TIME_OF_FAJR);
        JS_QM1.innerHTML = JS_IQAMA_TIME_OF_FAJR + '’';
        JS_W333HRQM1.innerHTML = JS_QM1.innerHTML;
        break;

    case 'SHRQ'   :   JS_IQAMA_TIME_OF_SHRQ++;
        if(JS_IQAMA_TIME_OF_SHRQ > 30) {JS_IQAMA_TIME_OF_SHRQ = 30; return;}
        JS_OBJ_IQAMA_SHRQ.innerHTML = JS_IQAMA_TIME_OF_SHRQ;
        localStorage.setItem('STORAGE_IQAMA_SHRQ', JS_IQAMA_TIME_OF_SHRQ);
        JS_QM2.innerHTML = JS_IQAMA_TIME_OF_SHRQ + '’';
        JS_W333HRQM2.innerHTML = JS_QM2.innerHTML;
        break;

    case 'DOHR'   :   JS_IQAMA_TIME_OF_DOHR++;
        if(JS_IQAMA_TIME_OF_DOHR > 70) {JS_IQAMA_TIME_OF__DOHR = 70; return;}
        JS_OBJ_IQAMA_DOHR.innerHTML = JS_IQAMA_TIME_OF_DOHR;
        localStorage.setItem('STORAGE_IQAMA_DOHR', JS_IQAMA_TIME_OF_DOHR);
        JS_QM3.innerHTML = JS_IQAMA_TIME_OF_DOHR + '’';
        JS_W333HRQM3.innerHTML = JS_QM3.innerHTML;
        break;

    case 'ASR'    :   JS_IQAMA_TIME_OF_ASR++;
        if(JS_IQAMA_TIME_OF_ASR > 70) {JS_IQAMA_TIME_OF_ASR = 70; return;}
        JS_OBJ_IQAMA_ASR.innerHTML = JS_IQAMA_TIME_OF_ASR;
        localStorage.setItem('STORAGE_IQAMA_ASR', JS_IQAMA_TIME_OF_ASR);
        JS_QM4.innerHTML = JS_IQAMA_TIME_OF_ASR + '’';
        JS_W333HRQM4.innerHTML = JS_QM4.innerHTML;
        break;

    case 'MAGHRIB'    :   JS_IQAMA_TIME_OF_MAGHRIB++;
        if(JS_IQAMA_TIME_OF_MAGHRIB > 70) {JS_IQAMA_TIME_OF_MAGHRIB = 70; return;}
        JS_OBJ_IQAMA_MAGHRIB.innerHTML = JS_IQAMA_TIME_OF_MAGHRIB;
        localStorage.setItem('STORAGE_IQAMA_MAGHRIB', JS_IQAMA_TIME_OF_MAGHRIB);
        JS_QM5.innerHTML = JS_IQAMA_TIME_OF_MAGHRIB + '’';
        JS_W333HRQM5.innerHTML = JS_QM5.innerHTML;
        break;

    case 'ISHA'   :   JS_IQAMA_TIME_OF_ISHA++;
        if(JS_IQAMA_TIME_OF_ISHA > 70) {JS_IQAMA_TIME_OF_ISHA = 70; return;}
        JS_OBJ_IQAMA_ISHA.innerHTML = JS_IQAMA_TIME_OF_ISHA;
        localStorage.setItem('STORAGE_IQAMA_ISHA', JS_IQAMA_TIME_OF_ISHA);
        JS_QM6.innerHTML = JS_IQAMA_TIME_OF_ISHA + '’';
        JS_W333HRQM6.innerHTML = JS_QM6.innerHTML;
        break;

    default   : alert('err_999');     break;
    }


    goUpdateIQAMAS();
}
//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------

var JS_jjj_BEFORE_DOHR  = document.getElementById('jjjJOMOA_BEFORE_DOHR');
var JS_jjj_AFTER_DOHR   = document.getElementById('jjjJOMOA_AFTER_DOHR');


//--------------JomoaBEFOREminus-----------------------------------------------------------------------------
function JomoaBEFOREminus()
{
    JS_JOMOA_DIM_MINIUTES_BEFORE--;
    if(JS_JOMOA_DIM_MINIUTES_BEFORE < 0) {JS_JOMOA_DIM_MINIUTES_BEFORE = 0; return;}
    JS_jjj_BEFORE_DOHR.innerHTML = JS_JOMOA_DIM_MINIUTES_BEFORE;
    localStorage.setItem('STORAGE_JOMOA_DIM_BEFORE', JS_JOMOA_DIM_MINIUTES_BEFORE);
}

//--------------JomoaBEFOREplus-----------------------------------------------------------------------------
function JomoaBEFOREplus()
{
    JS_JOMOA_DIM_MINIUTES_BEFORE++;
    if(JS_JOMOA_DIM_MINIUTES_BEFORE > 60) {JS_JOMOA_DIM_MINIUTES_BEFORE = 60; return;}
    JS_jjj_BEFORE_DOHR.innerHTML = JS_JOMOA_DIM_MINIUTES_BEFORE;
    localStorage.setItem('STORAGE_JOMOA_DIM_BEFORE', JS_JOMOA_DIM_MINIUTES_BEFORE);
}

//-----------------------------------------------------------------------------------

//--------------JomoaAFTERminus-----------------------------------------------------------------------------
function JomoaAFTERminus()
{
    JS_JOMOA_DIM_MINIUTES_AFTER--;
    if(JS_JOMOA_DIM_MINIUTES_AFTER < 0) {JS_JOMOA_DIM_MINIUTES_AFTER = 0; return;}
    JS_jjj_AFTER_DOHR.innerHTML = JS_JOMOA_DIM_MINIUTES_AFTER;
    localStorage.setItem('STORAGE_JOMOA_DIM_AFTER', JS_JOMOA_DIM_MINIUTES_AFTER);
}

//--------------JomoaAFTERplus-----------------------------------------------------------------------------
function JomoaAFTERplus()
{
    JS_JOMOA_DIM_MINIUTES_AFTER++;
    if(JS_JOMOA_DIM_MINIUTES_AFTER > 90) {JS_JOMOA_DIM_MINIUTES_AFTER = 90; return;}
    JS_jjj_AFTER_DOHR.innerHTML = JS_JOMOA_DIM_MINIUTES_AFTER;
    localStorage.setItem('STORAGE_JOMOA_DIM_AFTER', JS_JOMOA_DIM_MINIUTES_AFTER);
}

//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------

function ShowThisAlertAndCloseAFTER(_TXT, _MNT)
{
    JS_VReALERT.innerHTML = _TXT;
    JS_HReALERT.innerHTML = _TXT;
    var xmint = _MNT;
    ShowZunder('VReALERT');
    setTimeout("HideZunder('VReALERT')",    (xmint * 60000) );
    HideZunder('VReAyatsHDR');
    setTimeout("ShowZunder('VReAyatsHDR')", (xmint * 60000) );

    ShowZunder('HReALERT');
    setTimeout("HideZunder('HReALERT')", (xmint * 60000) );
    HideZunder('HReAyatsHDR');
    setTimeout("ShowZunder('HReAyatsHDR')", (xmint * 60000) );


}

//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------



//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
function putMinutesInSETTINGS()
{
// fill data in settings

    JS_OBJ_AZAN_FAJR.innerHTML      = JS_ATHAN_MINUTES_OF_FAJR;
    JS_OBJ_AZAN_SHRQ.innerHTML      = JS_ATHAN_MINUTES_OF_SHRQ
    JS_OBJ_AZAN_DOHR.innerHTML      = JS_ATHAN_MINUTES_OF_DOHR;
    JS_OBJ_AZAN_ASR.innerHTML       = JS_ATHAN_MINUTES_OF_ASR;
    JS_OBJ_AZAN_MAGHRIB.innerHTML   = JS_ATHAN_MINUTES_OF_MAGHRIB;
    JS_OBJ_AZAN_ISHA.innerHTML      = JS_ATHAN_MINUTES_OF_ISHA;


    JS_OBJ_IQAMA_FAJR.innerHTML     = JS_IQAMA_TIME_OF_FAJR;
    JS_OBJ_IQAMA_SHRQ.innerHTML     = JS_IQAMA_TIME_OF_SHRQ;
    JS_OBJ_IQAMA_DOHR.innerHTML     = JS_IQAMA_TIME_OF_DOHR;
    JS_OBJ_IQAMA_ASR.innerHTML      = JS_IQAMA_TIME_OF_ASR;
    JS_OBJ_IQAMA_MAGHRIB.innerHTML  = JS_IQAMA_TIME_OF_MAGHRIB;
    JS_OBJ_IQAMA_ISHA.innerHTML     = JS_IQAMA_TIME_OF_ISHA;


    JS_OBJ_DURATION_FAJR.innerHTML      = JS_PRAY_DURATION_OF_FAJR;
    JS_OBJ_DURATION_DOHR.innerHTML      = JS_PRAY_DURATION_OF_DOHR;
    JS_OBJ_DURATION_ASR.innerHTML       = JS_PRAY_DURATION_OF_ASR;
    JS_OBJ_DURATION_MAGHRIB.innerHTML   = JS_PRAY_DURATION_OF_MAGHRIB;
    JS_OBJ_DURATION_ISHA.innerHTML      = JS_PRAY_DURATION_OF_ISHA;

}
//-------SetArabicDIGITSOnOff-----------------------------------------------------
function SetArabicDIGITSOnOff()
{
    JS_ARABIC_DIGITS = !JS_ARABIC_DIGITS;
    var sssBOOL = 0;
    if(JS_ARABIC_DIGITS) sssBOOL = 1;
    localStorage.setItem('STORAGE_ARABIC_DIGITS', sssBOOL);
    execDIGITS(JS_ARABIC_DIGITS);
    GoGloballyFillDATA();
proccessMETEO(); // to refresh digits
}

//-------SetScrollableMSGOnOff-----------------------------------------------------
function SetScrollableMSGOnOff()
{
    if(JSALLDATA.IZmarquee==0) JSALLDATA.IZmarquee=1; else JSALLDATA.IZmarquee=0;
    SaveJsDATA();
    goMarqueeOnOff();
}

//-------------goMarqueeOnOff-----------------------------------------------
function goMarqueeOnOff()
{
    var ccc = document.getElementById('eScrollableMSG');
    ccc.checked = (JSALLDATA.IZmarquee==1);
    AdminUpdateMarquee();
}



//-------------------------------------------------------------------------------------------
function DohaSaverOnOff()
{
    if(JSALLDATA.IZDohaSaver==0) JSALLDATA.IZDohaSaver=1; else JSALLDATA.IZDohaSaver=0;
    SaveJsDATA();
    goDohaSaverOnOff();
}
//------------------------------------------------------------
function goDohaSaverOnOff()
{
    var ccc = document.getElementById('eDohaScreenCHECK');
    ccc.checked = (JSALLDATA.IZDohaSaver==1);
}



//-------------------------------------------------------------------------------------------
function IshaSaverOnOff()
{
    if(JSALLDATA.IZIshaSaver==0) JSALLDATA.IZIshaSaver=1; else JSALLDATA.IZIshaSaver=0;
    SaveJsDATA();
    goIshaSaverOnOff();
}
//------------------------------------------------------------
function goIshaSaverOnOff()
{
    var ccc = document.getElementById('eIshaScreenCHECK');
    ccc.checked = (JSALLDATA.IZIshaSaver==1);
}


//------------------------------------------------------------
function SaveJsDATA()
{
    localStorage.setItem('JSALLDATA', JSON.stringify(JSALLDATA));
}
//-------------------------------------------------------------------------------------------
function SetVrMiddleNames()
{
    if(JSALLDATA.IZVrMiddleNames==0) JSALLDATA.IZVrMiddleNames=1; else JSALLDATA.IZVrMiddleNames=0;
    SaveJsDATA();
    goVrMiddleNames();
}

//------------------------------------------------------------
function goVrMiddleNames()
{
    document.getElementById('eVrMiddleNames').checked = (JSALLDATA.IZVrMiddleNames==1);
    if(JSALLDATA.IZVrMiddleNames==1) JS_VReHDR.className = 'sMDL'; else JS_VReHDR.className = '';
}

//-------------------------------------------------------------------------------------------
function goMonthsZZ(xnm)
{
    JSALLDATA.userMonths=xnm;
    SaveJsDATA();
    setzzMonths();
    GoGloballyFillDATA();
}

//------------------------------------------------------------
function setzzMonths()
{
    document.getElementById('ZZZ'+JSALLDATA.userMonths).checked = true;
    var rec = JSALLDATA.userMonths;
    if(rec > 0) JS_MONTHS_NOW = JS_MONTHS_ZZ[rec-1].split(",");
    else JS_MONTHS_NOW = JS_eLang.NamesMonthsMiladi.split(",");
}

//-------------------------------------------------------------------------------------------
function SetIqamaScreen()
{
    if(JSALLDATA.IZIqamaScreen==0) JSALLDATA.IZIqamaScreen=1; else JSALLDATA.IZIqamaScreen=0;
    SaveJsDATA();
    goIqamaScreen();
}

//-------------------------------------------------------------------------------------------
function goIqamaScreen()
{
    document.getElementById('eIqamaScr').checked = (JSALLDATA.IZIqamaScreen==1);
}


//-------------------------------------------------------------------------------------------
function SetVrNoNEXTNoJMA()
{
    if(JSALLDATA.IZVrNoNEXTNoJMA==0) JSALLDATA.IZVrNoNEXTNoJMA=1; else JSALLDATA.IZVrNoNEXTNoJMA=0;
    SaveJsDATA();
    goNoNEXTNoJMA(true);
}

//------------------------------------------------------------&&(JS_eMainVERTICAL.className == 's002')
function goNoNEXTNoJMA(tempContinue)
{
    document.getElementById('eVrNoNEXTNoJMA').checked = (JSALLDATA.IZVrNoNEXTNoJMA==1);

    if((JSALLDATA.IZVrNoNEXTNoJMA==1)&&(tempContinue))
    {
        HideZunder('eMIDDLE3');
        HideZunder('VR_LOGO');
        JS_VReHDR.style.top = '48%';
        JS_ROOT.style.setProperty('--RndMrjnB', '3.3%');
        JS_ROOT.style.setProperty('--VR77', '8.5'+jvwh);
        JS_ROOT.style.setProperty('--j888', '37.0%');
    }
    else
    {
        ShowZunder('eMIDDLE3');
        if(JS_eMainVERTICAL.className == 's003') ShowZunder('VR_LOGO');
        JS_VReHDR.style.top = '54%';
        JS_ROOT.style.setProperty('--RndMrjnB', '0.5%');
        JS_ROOT.style.setProperty('--VR77', '8.1'+jvwh);
        JS_ROOT.style.setProperty('--j888', '34.0%');
    }
}

//-------------OnOffAzkarSBH------------------------------------------------------------------------------
function OnOffAzkarSBH()
{
    if(JSALLDATA.IZAzkarSABAH==0) JSALLDATA.IZAzkarSABAH=1; else JSALLDATA.IZAzkarSABAH=0;
    SaveJsDATA();
    goSetThe4Azkar();
}
//-------------------------------------------------------------------------------------------
function OnOffAzkarASR()
{
    if(JSALLDATA.IZAzkarASR==0) JSALLDATA.IZAzkarASR=1; else JSALLDATA.IZAzkarASR=0;
    SaveJsDATA();
    goSetThe4Azkar();
}
//-------------------------------------------------------------------------------------------
function OnOffAzkarMGB()
{
    if(JSALLDATA.IZAzkarMAGRIB==0) JSALLDATA.IZAzkarMAGRIB=1; else JSALLDATA.IZAzkarMAGRIB=0;
    SaveJsDATA();
    goSetThe4Azkar();
}
//-------------------------------------------------------------------------------------------
function OnOffAzkarISH()
{
    if(JSALLDATA.IZAzkarISHA==0) JSALLDATA.IZAzkarISHA=1; else JSALLDATA.IZAzkarISHA=0;
    SaveJsDATA();
    goSetThe4Azkar();
}
//------------------------------------------------------------
function goSetThe4Azkar()
{
    document.getElementById('eAzkarSBHCHECK').checked = (JSALLDATA.IZAzkarSABAH==1);
    document.getElementById('eAzkarASRCHECK').checked = (JSALLDATA.IZAzkarASR==1);
    document.getElementById('eAzkarMGBCHECK').checked = (JSALLDATA.IZAzkarMAGRIB==1);
    document.getElementById('eAzkarISHCHECK').checked = (JSALLDATA.IZAzkarISHA==1);
}
//-------------------------------------------------------------------------------------------
function SetCounterEnlarge()
{
    if(JSALLDATA.IZSCounterEnlarge==0) JSALLDATA.IZSCounterEnlarge=1; else JSALLDATA.IZSCounterEnlarge=0;
    SaveJsDATA();
    goCounterEnlarge();
}
//------------------------------------------------------------
function goCounterEnlarge()
{
    document.getElementById('eCounterEnlarge').checked = (JSALLDATA.IZSCounterEnlarge==1);
}

//-------------------------------------------------------------------------------------------
function Set1MinCounter()
{
    if(JSALLDATA.IZ1MinCounter==0) JSALLDATA.IZ1MinCounter=1; else JSALLDATA.IZ1MinCounter=0;
    SaveJsDATA();
    go1MinCounter();
}
//------------------------------------------------------------
function go1MinCounter()
{
    document.getElementById('e1MinCounter').checked = (JSALLDATA.IZ1MinCounter==1);
}
//-------------------------------------------------------------------------------------------
function SetJOMOAonOff()
{
    if(JSALLDATA.IZJOMOAon==0) JSALLDATA.IZJOMOAon=1; else JSALLDATA.IZJOMOAon=0;
    SaveJsDATA();
    go5BoxesJomoaLogo();
}

//-------SetJomoaLogoCHECK------------------------------------------------------------------------------------
function SetJomoaLogoCHECK()
{
    if(JSALLDATA.JomoaIzInLogo==0) JSALLDATA.JomoaIzInLogo=1; else JSALLDATA.JomoaIzInLogo=0;
    SaveJsDATA();
    go5BoxesJomoaLogo();
}
//------------------------------------------------------------
function Set5BoxesOnly()
{
    if(JSALLDATA.IZ5BoxesOnly==0) JSALLDATA.IZ5BoxesOnly=1; else JSALLDATA.IZ5BoxesOnly=0;
    SaveJsDATA();
    go5BoxesJomoaLogo();
}
//-----------go5BoxesJomoaLogo-------------------------------------------------
function go5BoxesJomoaLogo()
{
    document.getElementById('e5BoxesOnly').checked     = (JSALLDATA.IZ5BoxesOnly==1);
    document.getElementById('eJomoa01CHECK').checked   = (JSALLDATA.IZJOMOAon==1);
    var JS_eJomoaLogoCHECK = document.getElementById('eJomoaLogoCHECK');
    JS_eJomoaLogoCHECK.checked = (JSALLDATA.JomoaIzInLogo==1);

    GoBoxesONOFF((JSALLDATA.IZJOMOAon==0),JS_eJomoaLogoCHECK);


    var jsALNGO   = document.getElementById('HahowaALONGO');
    var jsHReNBOX = document.getElementById('HReNextBOX');

    if(JSALLDATA.IZ5BoxesOnly==1)
    {
        JS_W333HRtube1.style.display = 'none';
        jsALNGO.style.borderSpacing  = '2.5vw'; //21
        JS_HReOPTIOshrq.style.display = 'block';
        if(JSALLDATA.IZJOMOAon==1)
        {
            if(JSALLDATA.JomoaIzInLogo==1) {jsHReNBOX.className = 'HReBOX4'; HideZunder('HR_LOGO'); ShowZunder('HRJOMOABOX');}
            else {jsHReNBOX.className='HReBOX2'; ShowZunder('HR_LOGO'); HideZunder('HRJOMOABOX');}
        }
        else
        {
            jsHReNBOX.className='HReBOX4'; ShowZunder('HR_LOGO'); HideZunder('HRJOMOABOX');
        }
        jsALNGO.className='_h5';
    }
    else
    {
        JS_W333HRtube1.style.display = '';
        jsALNGO.style.borderSpacing = '0.7vw'; //10
        JS_HReOPTIOshrq.style.display = 'none';
        if(JSALLDATA.IZJOMOAon==1)
        {
            if(JSALLDATA.JomoaIzInLogo==1) {jsHReNBOX.className = 'HReBOX3'; HideZunder('HR_LOGO'); ShowZunder('HRJOMOABOX');}
            else {jsHReNBOX.className='HReBOX1'; ShowZunder('HR_LOGO'); HideZunder('HRJOMOABOX');}
        }
        else
        {
            jsHReNBOX.className='HReBOX3'; ShowZunder('HR_LOGO'); HideZunder('HRJOMOABOX');
        }
        jsALNGO.className='_h6';
    }
}


//---------------------------------------------------
function SetJanazatOnOff()
{
    if(JSALLDATA.IZJanazatShow==0) JSALLDATA.IZJanazatShow=1; else JSALLDATA.IZJanazatShow=0;
    SaveJsDATA();
    goSetJanazat();
}
//------------------------------------------------------------
function goSetJanazat()
{
    document.getElementById('eJanazat').checked = (JSALLDATA.IZJanazatShow==1);

    if(JSALLDATA.IZJanazatShow==1)
        JS_ROOT.style.setProperty('--JANAZATS', 'visible');
    else
        JS_ROOT.style.setProperty('--JANAZATS', 'hidden');
}



//------------------------------------------------------------
function SetZerosAMPM()
{
    if(JSALLDATA.IZaddZerosAMPM==0) JSALLDATA.IZaddZerosAMPM=1; else JSALLDATA.IZaddZerosAMPM=0;
    SaveJsDATA();
    goZerosAMPM();
GoGloballyFillDATA(); // refresh
}

//------------------------------------------------------------
function goZerosAMPM()
{
    document.getElementById('eZerosAMPM').checked = (JSALLDATA.IZaddZerosAMPM==1);
}

//------------------------------------------------------------
function SetAudioCOMOnOff()
{
    if(JSALLDATA.IZAudioCOM==0) JSALLDATA.IZAudioCOM=1; else JSALLDATA.IZAudioCOM=0;
    SaveJsDATA();
}




//------------------------------------------------------------
function Set4HOMEOnOff()
{
    if(JSALLDATA.IZforHOME==0) JSALLDATA.IZforHOME=1; else JSALLDATA.IZforHOME=0;
    SaveJsDATA();
    goHideIqamat();
}

var JS_VReAyatsHDR  = document.getElementById('VReAyatsHDR');
var JS_eMIDDLE3     = document.getElementById('eMIDDLE3');
var JS_VReHDR       = document.getElementById('VRePrayersHDR');

//-----------goHideIqamat-------------------------------------------------
function goHideIqamat()
{
    document.getElementById('forHOME').checked = (JSALLDATA.IZforHOME==1);


    if(JSALLDATA.IZforHOME==1)
    {
        JS_ROOT.style.setProperty('--IQAMAT', 'hidden');
        if(JS_LANG_NOW == "AR") JS_VReHDR.style.left = '-7%'; else JS_VReHDR.style.left = '27%';
    }
    else
    {
        JS_VReHDR.style.left = '10%';
        JS_ROOT.style.setProperty('--IQAMAT', 'visible');
    }

//JS_eMIDDLE3.style.left = JS_VReHDR.style.left;
}




//-------execDIGITS----------------------------------------------------
function execDIGITS(sBOL)
{

    if(sBOL)
    {
        JS_eArabicDIGITS.checked = true;
        JS_ROOT.style.setProperty('--XX_DIGITS', 'Amiri');
        JS_ROOT.style.setProperty('--XX_CLOKEN', 'Amiri');
    }
    else
    {
        JS_eArabicDIGITS.checked = false;
        JS_ROOT.style.setProperty('--XX_DIGITS', JSALLDATA.FontoTIMES);
        JS_ROOT.style.setProperty('--XX_CLOKEN', JSALLDATA.FontoCLOKEN);
    }

    Go1MN(false);
}

//-----------------------------------------------------------------------------------
var JS_HReOPTIOshrq = document.getElementById('HReOPTIOshrq');
var JS_HReoptJomoa  = document.getElementById('HReoptJomoa');
var JS_FULLDOHA = "---";
//---goUpdateIQAMAS-------------------------------------------------------------------
function goUpdateIQAMAS()
{

    var JS_SIGNER = '’';

    JS_FULLDOHA = ARNumbers(KonvertTimeTo12(gimeTime(_shrq + parseInt(JS_IQAMA_TIME_OF_SHRQ))));

    JS_HReOPTIOshrq.innerHTML = "<span class='HRfnx'>"+JS_T_1.innerHTML+"</span> "+JS_S_1.innerHTML;

    if(JS_IQAMA_FULL_TIMES)
    {
            // VR ----------------------
        JS_QM1.innerHTML = ARNumbers(KonvertTimeTo12(gimeTime(_fjr     + parseInt(JS_IQAMA_TIME_OF_FAJR))));
        JS_QM2.innerHTML = JS_FULLDOHA;
        JS_QM3.innerHTML = ARNumbers(KonvertTimeTo12(gimeTime(_thuhr   + parseInt(JS_IQAMA_TIME_OF_DOHR))));
        JS_QM4.innerHTML = ARNumbers(KonvertTimeTo12(gimeTime(_asr     + parseInt(JS_IQAMA_TIME_OF_ASR))));
        JS_QM5.innerHTML = ARNumbers(KonvertTimeTo12(gimeTime(_maghreb + parseInt(JS_IQAMA_TIME_OF_MAGHRIB))));
        JS_QM6.innerHTML = ARNumbers(KonvertTimeTo12(gimeTime(_isha    + parseInt(JS_IQAMA_TIME_OF_ISHA))));
    }
    else
    {
            // VR ----------------------
        JS_QM1.innerHTML = ARNumbers(JS_IQAMA_TIME_OF_FAJR) + JS_SIGNER;
        JS_QM2.innerHTML = ARNumbers(JS_IQAMA_TIME_OF_SHRQ) + JS_SIGNER;
        JS_QM3.innerHTML = ARNumbers(JS_IQAMA_TIME_OF_DOHR) + JS_SIGNER;
        JS_QM4.innerHTML = ARNumbers(JS_IQAMA_TIME_OF_ASR) + JS_SIGNER;
        JS_QM5.innerHTML = ARNumbers(JS_IQAMA_TIME_OF_MAGHRIB) + JS_SIGNER;
        JS_QM6.innerHTML = ARNumbers(JS_IQAMA_TIME_OF_ISHA) + JS_SIGNER;
    }


// update HR ----------------------
    JS_W333HRQM1.innerHTML = JS_QM1.innerHTML;
    JS_W333HRQM2.innerHTML = JS_QM2.innerHTML;
    JS_W333HRQM3.innerHTML = JS_QM3.innerHTML;
    JS_W333HRQM4.innerHTML = JS_QM4.innerHTML;
    JS_W333HRQM5.innerHTML = JS_QM5.innerHTML;
    JS_W333HRQM6.innerHTML = JS_QM6.innerHTML;






    // OVERRIDER OF FAJR
    if( (JS_FIXED_IQAMATFAJR !== "")&&(!JS_WCSV_ACTIVE) )
    {
        JS_QM1.innerHTML        = ARNumbers(KonvertTimeTo12(JS_FIXED_IQAMATFAJR));
        JS_W333HRQM1.innerHTML  = JS_QM1.innerHTML;
    }
    //-----------------------------------------------------------------------------------
    // OVERRIDER OF DOHR
    if( (JS_FIXED_IQAMATDOHR !== "")&&(!JS_WCSV_ACTIVE) )
    {
        JS_QM3.innerHTML        = ARNumbers(KonvertTimeTo12(JS_FIXED_IQAMATDOHR));
        JS_W333HRQM3.innerHTML  = JS_QM3.innerHTML;
    }
    //-----------------------------------------------------------------------------------
    // OVERRIDER OF ASR
    if( (JS_FIXED_IQAMATASR !== "")&&(!JS_WCSV_ACTIVE) )
    {
        JS_QM4.innerHTML        = ARNumbers(KonvertTimeTo12(JS_FIXED_IQAMATASR));
        JS_W333HRQM4.innerHTML  = JS_QM4.innerHTML;
    }
    //-----------------------------------------------------------------------------------
    // OVERRIDER OF ISHA
    if( (JS_FIXED_IQAMATISHA !== "")&&(!JS_WCSV_ACTIVE) )
    {
        JS_QM6.innerHTML        = ARNumbers(KonvertTimeTo12(JS_FIXED_IQAMATISHA));
        JS_W333HRQM6.innerHTML  = JS_QM6.innerHTML;
    }
    //-----------------------------------------------------------------------------------



    // NO IQAMA IN FRIDAY DOHR
    if(JS_TODAY_IS_JOMOA)
    {
        JS_QM3.innerHTML        = "---";
        JS_W333HRQM3.innerHTML  = "---";
    }


}

//-------------------------------------------------------------------------------------------
// FILL DATA OF JOMOA DIM MINUTES
JS_jjj_BEFORE_DOHR.innerHTML    = JS_JOMOA_DIM_MINIUTES_BEFORE;
JS_jjj_AFTER_DOHR.innerHTML     = JS_JOMOA_DIM_MINIUTES_AFTER;
//-------------------------------------------------------------------------------------------

var JS_OBJ_DURATION_FAJR        = document.getElementById('DURATION_FAJR');
var JS_OBJ_DURATION_DOHR        = document.getElementById('DURATION_DOHR');
var JS_OBJ_DURATION_ASR         = document.getElementById('DURATION_ASR');
var JS_OBJ_DURATION_MAGHRIB     = document.getElementById('DURATION_MAGHRIB');
var JS_OBJ_DURATION_ISHA        = document.getElementById('DURATION_ISHA');

//--------------goDURATIONminus-----------------------------------------------------------------------------
function goDURATIONminus(prayNAME)
{


    switch(prayNAME)
    {


    case 'FAJR'   :   JS_PRAY_DURATION_OF_FAJR--;
        if(JS_PRAY_DURATION_OF_FAJR < 5) {JS_PRAY_DURATION_OF_FAJR = 5; return;}
        JS_OBJ_DURATION_FAJR.innerHTML = JS_PRAY_DURATION_OF_FAJR;
        localStorage.setItem('STORAGE_DURATION_FAJR', JS_PRAY_DURATION_OF_FAJR);
        break;



    case 'DOHR'   :   JS_PRAY_DURATION_OF_DOHR--;
        if(JS_PRAY_DURATION_OF_DOHR < 5) {JS_PRAY_DURATION_OF__DOHR = 5; return;}
        JS_OBJ_DURATION_DOHR.innerHTML = JS_PRAY_DURATION_OF_DOHR;
        localStorage.setItem('STORAGE_DURATION_DOHR', JS_PRAY_DURATION_OF_DOHR);
        break;

    case 'ASR'    :   JS_PRAY_DURATION_OF_ASR--;
        if(JS_PRAY_DURATION_OF_ASR < 5) {JS_PRAY_DURATION_OF_ASR = 5; return;}
        JS_OBJ_DURATION_ASR.innerHTML = JS_PRAY_DURATION_OF_ASR;
        localStorage.setItem('STORAGE_DURATION_ASR', JS_PRAY_DURATION_OF_ASR);
        break;

    case 'MAGHRIB'    :   JS_PRAY_DURATION_OF_MAGHRIB--;
        if(JS_PRAY_DURATION_OF_MAGHRIB < 5) {JS_PRAY_DURATION_OF_MAGHRIB = 5; return;}
        JS_OBJ_DURATION_MAGHRIB.innerHTML = JS_PRAY_DURATION_OF_MAGHRIB;
        localStorage.setItem('STORAGE_DURATION_MAGHRIB', JS_PRAY_DURATION_OF_MAGHRIB);
        break;

    case 'ISHA'   :   JS_PRAY_DURATION_OF_ISHA--;
        if(JS_PRAY_DURATION_OF_ISHA < 5) {JS_PRAY_DURATION_OF_ISHA = 5; return;}
        JS_OBJ_DURATION_ISHA.innerHTML = JS_PRAY_DURATION_OF_ISHA;
        localStorage.setItem('STORAGE_DURATION_ISHA', JS_PRAY_DURATION_OF_ISHA);
        break;


    default   : dolog('err_SSS');     break;
    }

}
//--------------goDURATIONcplus----------------------------------------------------------
function goDURATIONcplus(prayNAME)
{

    switch(prayNAME)
    {


    case 'FAJR'   :   JS_PRAY_DURATION_OF_FAJR++;
        if(JS_PRAY_DURATION_OF_FAJR > 40) {JS_PRAY_DURATION_OF_FAJR = 40; return;}
        JS_OBJ_DURATION_FAJR.innerHTML = JS_PRAY_DURATION_OF_FAJR;
        localStorage.setItem('STORAGE_DURATION_FAJR', JS_PRAY_DURATION_OF_FAJR);
        break;


    case 'DOHR'   :   JS_PRAY_DURATION_OF_DOHR++;
        if(JS_PRAY_DURATION_OF_DOHR > 40) {JS_PRAY_DURATION_OF__DOHR = 40; return;}
        JS_OBJ_DURATION_DOHR.innerHTML = JS_PRAY_DURATION_OF_DOHR;
        localStorage.setItem('STORAGE_DURATION_DOHR', JS_PRAY_DURATION_OF_DOHR);
        break;

    case 'ASR'    :   JS_PRAY_DURATION_OF_ASR++;
        if(JS_PRAY_DURATION_OF_ASR > 40) {JS_PRAY_DURATION_OF_ASR = 40; return;}
        JS_OBJ_DURATION_ASR.innerHTML = JS_PRAY_DURATION_OF_ASR;
        localStorage.setItem('STORAGE_DURATION_ASR', JS_PRAY_DURATION_OF_ASR);
        break;

    case 'MAGHRIB'    :   JS_PRAY_DURATION_OF_MAGHRIB++;
        if(JS_PRAY_DURATION_OF_MAGHRIB > 40) {JS_PRAY_DURATION_OF_MAGHRIB = 40; return;}
        JS_OBJ_DURATION_MAGHRIB.innerHTML = JS_PRAY_DURATION_OF_MAGHRIB;
        localStorage.setItem('STORAGE_DURATION_MAGHRIB', JS_PRAY_DURATION_OF_MAGHRIB);
        break;

    case 'ISHA'   :   JS_PRAY_DURATION_OF_ISHA++;
        if(JS_PRAY_DURATION_OF_ISHA > 180) {JS_PRAY_DURATION_OF_ISHA = 180; return;}
        JS_OBJ_DURATION_ISHA.innerHTML = JS_PRAY_DURATION_OF_ISHA;
        localStorage.setItem('STORAGE_DURATION_ISHA', JS_PRAY_DURATION_OF_ISHA);
        break;

    default   : dolog('err_eee');     break;
    }
}

//-------------getTextBetween----------------------------------------------------------------------
function getTextBetween(str,aaa,bbb)
{
    var sResult = str.substring(str.indexOf(aaa) + 1, str.lastIndexOf(bbb));
    return sResult;
}

var jHHH = '';
var jVVV = '';
var jvwh = 'vw';
//----CheckVRSCREEN-------------------------------------------------------------------------------
function CheckVRSCREEN()
{
   if(JS_FORCED_VERTICAL == 1) document.body.className = 'vrRIGHT';
   else if(JS_FORCED_VERTICAL == 2) document.body.className = 'vrLEFT';
   if(JS_FORCED_VERTICAL > 0) jvwh = "vh";
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

//-------------------------------------------------------------------------------------------
var JS_tempJMA = "---";
//-------updateBottomInformations------------------------------------------------------------------------------------
function updateBottomInformations()
{

    var separ = "&nbsp; | &nbsp;";
    if (JS_LOCATION_NOW == "") separ = "";

    var eJMA = ARNumbers(KonvertTimeTo12(JS_PERSO_AUTOX_JOMOA));

    if(JS_eMainVERTICAL.className == 's002')
        JS_VReJomoa.innerHTML        = "<span dir='ltr'>"+JS_tempJMA+"</span> "+eJMA;
    else
        JS_VReJomoa.innerHTML        = eJMA+"<br><span dir='ltr'>"+JS_tempJMA+"</span>";


    JS_HReoptJomoa.innerHTML     = "<span class='HRfnx'>"+JS_tempJMA+"</span> "+eJMA;
    JS_HReJOMOAPRAYER.innerHTML  = eJMA;


    _vre.innerHTML=_netv+separ+JS_LOCATION_NOW;_hrb0.innerHTML=_netv;_hrb1.innerHTML= JS_LOCATION_NOW;
    _hrb0.style.visibility='visible';_hrb0.style.opacity=1;_hrb0.style.display='block';
}
//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
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
//-------------------------------------------------------------------------------------------

function setMenuIcon(obj, iko) {
    var icons = "{{ asset('assets/offline/images/icons') }}";
    obj.style.background = 'url(' + icons + '/' + iko + ')';
    obj.style.backgroundRepeat = 'no-repeat';
    obj.style.backgroundPosition = 'center right';
    obj.style.backgroundSize = 'auto 40%';
}


//-----------------------------------------------------------------------------------
var JS_HReNextPrTEXT = document.getElementById('HReNextPrTEXT');
var JS_HReJOMOATEXT  = document.getElementById('HReJOMOATEXT');
var JS_HReJOMOA2WCSV = document.getElementById('HReJOMOA2wcsv');
var JS_eeeTextAZAN = document.getElementById('eeeTextAZAN');
var JS_HRTextAZAN  = document.getElementById('HRTextAZAN');

//-------ProcessLANGUAGE------------------
function ProcessLANGUAGE()
{

    JS_eeeTextAZAN.innerHTML    = JS_eLang.AzanCalling;
    JS_HRTextAZAN.innerHTML     = JS_eLang.AzanCalling;

    JS_PRAYNAMES_NOW    = JS_eLang.NamesOfPrayings.split(",");
    JS_WEEK_DAYS_NOW    = JS_eLang.NamesWeekDays.split(",");
    JS_MONTHS_NOW       = JS_eLang.NamesMonthsMiladi.split(",");
    JS_HIJRI_NOW        = JS_eLang.MenuMonthsHijri.split(",");

    JS_T_0.innerHTML = JS_PRAYNAMES_NOW[0];
    JS_T_1.innerHTML = JS_PRAYNAMES_NOW[1];
    JS_T_2.innerHTML = JS_PRAYNAMES_NOW[2];
    JS_T_3.innerHTML = JS_PRAYNAMES_NOW[3];
    JS_T_4.innerHTML = JS_PRAYNAMES_NOW[4];
    JS_T_5.innerHTML = JS_PRAYNAMES_NOW[5];

    JS_W333HT_0.innerHTML = JS_T_0.innerHTML;
    JS_W333HT_1.innerHTML = JS_T_1.innerHTML;
    JS_W333HT_2.innerHTML = JS_T_2.innerHTML;
    JS_W333HT_3.innerHTML = JS_T_3.innerHTML;
    JS_W333HT_4.innerHTML = JS_T_4.innerHTML;
    JS_W333HT_5.innerHTML = JS_T_5.innerHTML;




    var jsVRS = "<span dir='ltr' >&nbsp; <span onclick='goVR(0);'>OFF</span> &nbsp;&nbsp; <span onclick='goVR(2);'>&#8630;</span> &nbsp; <span onclick='goVR(1);'>&#8631;</span>&nbsp;&nbsp;&nbsp;&nbsp;</span>";



    var JS_AAA_FullSCREEN   = document.getElementById('AAA_FullSCREEN');    JS_AAA_FullSCREEN.innerHTML     = JS_eLang.MenuFullScreen;      setMenuIcon(JS_AAA_FullSCREEN,'fullscreen.png');
    var JS_AAA_MosqueNAME   = document.getElementById('AAA_MosqueNAME');    JS_AAA_MosqueNAME.innerHTML     = JS_eLang.MenuMosqueNAME;      setMenuIcon(JS_AAA_MosqueNAME,'editname.png');
    var JS_AAA_ADMINMSGS    = document.getElementById('AAA_ADMINMSGS');     JS_AAA_ADMINMSGS.innerHTML      = JS_eLang.MenuMosqueMessage;   setMenuIcon(JS_AAA_ADMINMSGS,'msgs.png');
    var JS_AAA_ForcedVR     = document.getElementById('AAA_ForcedVR');      JS_AAA_ForcedVR.innerHTML       = JS_eLang.XX_FORCED_VERTICAL + jsVRS;  setMenuIcon(JS_AAA_ForcedVR,'vertical.png');
    var JS_AAA_HijriClick   = document.getElementById('AAA_HijriClick');    JS_AAA_HijriClick.innerHTML     = JS_eLang.MenuHijriClick + ' : <br>' + JS_eLang.XX_BOX_0;
    var JS_AAA_set_THEMES   = document.getElementById('AAA_set_THEMES');    JS_AAA_set_THEMES.innerHTML     = JS_eLang.MenuThemes;
    var JS_AAA_e_OPTIONS    = document.getElementById('AAA_e_OPTIONS');     JS_AAA_e_OPTIONS.innerHTML      = JS_eLang.MenuOptions;         setMenuIcon(JS_AAA_e_OPTIONS,'options.png');
    var JS_AAA_AZKAR        = document.getElementById('AAA_AZKAR');         JS_AAA_AZKAR.innerHTML      = JS_eLang.MenuAzkar;           setMenuIcon(JS_AAA_AZKAR,'btn.png');
    var JS_AAA_AZKAR_SBH_MSA    = document.getElementById('AAA_AZKAR_SBH_MSA'); JS_AAA_AZKAR_SBH_MSA.innerHTML = JS_eLang.MenuAzkarSabahMasaa; setMenuIcon(JS_AAA_AZKAR_SBH_MSA,'btn.png');
    var JS_AAA_SLIDERS      = document.getElementById('AAA_SLIDERS');       JS_AAA_SLIDERS.innerHTML        = JS_eLang.MenuSliders;         setMenuIcon(JS_AAA_SLIDERS,'btn.png');
    var JS_AAA_DimDIRECT    = document.getElementById('AAA_DimDIRECT');     JS_AAA_DimDIRECT.innerHTML  = JS_eLang.MenuDimmerDirect;        setMenuIcon(JS_AAA_DimDIRECT,'btn.png');
    var JS_AAA_ADJUSTMENTS  = document.getElementById('AAA_ADJUSTMENTS');   JS_AAA_ADJUSTMENTS.innerHTML    = JS_eLang.MenuAdjustments;     setMenuIcon(JS_AAA_ADJUSTMENTS,'clock.png');
    var JS_AAA_BLACKSCREEN  = document.getElementById('AAA_BLACKSCREEN');   JS_AAA_BLACKSCREEN.innerHTML    = JS_eLang.MenuBlackscreen;     setMenuIcon(JS_AAA_BLACKSCREEN,'tv-off.png');
    var JS_AAA_LOCALISATION = document.getElementById('AAA_LOCALISATION');  JS_AAA_LOCALISATION.innerHTML   = JS_eLang.MenuLocation;        setMenuIcon(JS_AAA_LOCALISATION,'mosque-city.png');
    var JS_AAA_METEO        = document.getElementById('AAA_METEO');         JS_AAA_METEO.innerHTML          = JS_eLang.XX_METEO_A;          setMenuIcon(JS_AAA_METEO,'meteo.png');
    var JS_AAA_AboutTAWKIT  = document.getElementById('AAA_AboutTAWKIT');   JS_AAA_AboutTAWKIT.innerHTML    = JS_eLang.MenuAboutTawkit;     setMenuIcon(JS_AAA_AboutTAWKIT,'tawkit.png');
    var JS_AAA_dev2         = document.getElementById('AAA_dev2'); setMenuIcon(JS_AAA_dev2,'btn.png');
    var JS_AAA_dev3         = document.getElementById('AAA_dev3'); setMenuIcon(JS_AAA_dev3,'btn.png');
    var JS_AAA_dev4         = document.getElementById('AAA_dev4'); setMenuIcon(JS_AAA_dev4,'btn.png');

    document.getElementById('XX_DOHR_XMIN_ASR').innerHTML   = JS_eLang.XX_DOHR_XMIN_ASR;

    document.getElementById('xxMETEO').innerHTML            = JS_eLang.XX_METEO;
    document.getElementById('XX_METEOPRYRS').innerHTML      = JS_eLang.XX_METEOPRYRS;
    document.getElementById('AAA_eFONTS1').innerHTML        = JS_eLang.APP_FONTS;
// document.getElementById('XX_NO_SELL').innerHTML          = JS_eLang.XX_NO_SELL;

    document.getElementById('ewSALAT').innerHTML = JS_eLang.XX_PRAYER;
    document.getElementById('ewAZAN').innerHTML  = JS_eLang.AzanNAME;
    document.getElementById('ewIQAMA').innerHTML = JS_eLang.XX_IQAMA;

    document.getElementById('XX_ADMINMSGS_0').innerHTML         = JS_eLang.XX_ADMINMSGS_0;
    document.getElementById('XX_ADMINMSGS_TEXTER').innerHTML    = JS_eLang.XX_ADMINMSGS_TEXTER;
    document.getElementById('XX_ADMINMSGS_HELP').innerHTML      = JS_eLang.XX_ADMINMSGS_HELP;
    document.getElementById('XX_ADD_MSG').innerHTML             = JS_eLang.XX_ADD_MSG;

    JS_DOA_AFTER_AZAN       = JS_eLang.XXDoaAzanIqama;
    JS_DOA_SYAM_MONDAY      = JS_eLang.XXFastingMonday;
    JS_DOA_SYAM_THURSDAY    = JS_eLang.XXFastingThursday;

    document.getElementById('XX_OPTION_0').innerHTML            = JS_eLang.XX_OPTION_0;
    document.getElementById('XX_OPTION_1').innerHTML            = JS_eLang.XX_OPTION_1;
    document.getElementById('XX_OPTION_2').innerHTML            = JS_eLang.XX_OPTION_2;

    document.getElementById('XX_WCSV_MESSAGE').innerHTML        = JS_eLang.XX_WCSV_MESSAGE;

    document.getElementById('XX_ADJUST_2').innerHTML            = JS_eLang.XX_ADJUST_2;
    document.getElementById('XX_ADJUST_3').innerHTML            = JS_eLang.XX_ADJUST_3;
    document.getElementById('XX_SUMMERTIME').innerHTML          = JS_eLang.XX_SUMMERTIME;
    document.getElementById('XX_1MOREHOUR').innerHTML           = JS_eLang.XX_1MOREHOUR;
    document.getElementById('XX_1LESSHOUR').innerHTML           = JS_eLang.XX_1LESSHOUR;
    document.getElementById('XX_eShortAZAN').innerHTML          = JS_eLang.XX_eShortAZAN;
    document.getElementById('XX_eShortIQAMA').innerHTML         = JS_eLang.XX_eShortIQAMA;
    document.getElementById('XX_IQAMASCREEN').innerHTML         = JS_eLang.XX_IQAMASCREEN;

    document.getElementById('xxFAJR').innerHTML         = JS_PRAYNAMES_NOW[0];
    document.getElementById('xxSHRQ').innerHTML         = JS_PRAYNAMES_NOW[1];
    document.getElementById('xxDOHR').innerHTML         = JS_PRAYNAMES_NOW[2];
    document.getElementById('xxASR').innerHTML          = JS_PRAYNAMES_NOW[3];
    document.getElementById('xxMAGHRIB').innerHTML      = JS_PRAYNAMES_NOW[4];
    document.getElementById('xxISHA').innerHTML         = JS_PRAYNAMES_NOW[5];


    document.getElementById('xxIQAMA0').innerHTML       = JS_PRAYNAMES_NOW[0];
    document.getElementById('xxIQAMA1').innerHTML       = JS_eLang.XX_DOHA;
    document.getElementById('xxIQAMA2').innerHTML       = JS_PRAYNAMES_NOW[2];
    document.getElementById('xxIQAMA3').innerHTML       = JS_PRAYNAMES_NOW[3];
    document.getElementById('xxIQAMA4').innerHTML       = JS_PRAYNAMES_NOW[4];
    document.getElementById('xxIQAMA5').innerHTML       = JS_PRAYNAMES_NOW[5];


    document.getElementById('XX_DIMMER_0').innerHTML        = JS_eLang.XX_DIMMER_0;
    document.getElementById('XX_DIMMER_1').innerHTML        = JS_eLang.XX_DIMMER_1;
    document.getElementById('XX_DIMMER_2').innerHTML        = JS_eLang.XX_DIMMER_2;
    document.getElementById('xxJOMOA').innerHTML            = JS_WEEK_DAYS_NOW[5];
    document.getElementById('XX_DIMMER_3').innerHTML        = JS_eLang.XX_DIMMER_3;
    document.getElementById('XX_DIMMER_4').innerHTML        = JS_eLang.XX_DIMMER_4;
    document.getElementById('XX_DIMMER_5').innerHTML        = JS_eLang.XX_DIMMER_5;

    document.getElementById('yyFAJR').innerHTML         = JS_PRAYNAMES_NOW[0];
    document.getElementById('yyDOHR').innerHTML         = JS_PRAYNAMES_NOW[2];
    document.getElementById('yyASR').innerHTML          = JS_PRAYNAMES_NOW[3];
    document.getElementById('yyMAGHRIB').innerHTML      = JS_PRAYNAMES_NOW[4];
    document.getElementById('yyISHA').innerHTML         = JS_PRAYNAMES_NOW[5];


    document.getElementById('XX_TIMES_2').innerHTML     = JS_eLang.XX_TIMES_2;
    document.getElementById('XX_TIMES_3').innerHTML     = JS_eLang.XX_TIMES_3;
    document.getElementById('XX_TIMES_4').innerHTML     = JS_eLang.XX_TIMES_4;
    document.getElementById('XX_TIMES_5').innerHTML     = JS_eLang.XX_TIMES_5;

    document.getElementById('XX_YearlyWTIMES').innerHTML = JS_eLang.XX_YearlyWTIMES;

    document.getElementById('XX_MISC_0').innerHTML  = JS_eLang.XX_MISC_0;
    document.getElementById('XX_MISC_1').innerHTML  = JS_eLang.XX_MISC_1;

    JS_tempJMA = JS_eLang.XX_JOMOA;

    document.getElementById('XX_JOMOA_ONOFF').innerHTML     = JS_eLang.XX_JOMOA_ONOFF;
    document.getElementById('XX_IQAMAASHOUR').innerHTML     = JS_eLang.XX_IQAMAASHOUR;
    document.getElementById('W9_eCOUNTDOWNOnOff').innerHTML = JS_eLang.W9_eCOUNTDOWNOnOff;
    document.getElementById('XX_1MIN_COUNTER').innerHTML    = JS_eLang.XX_1MIN_COUNTER;
    JS_HReNextPrTEXT.innerHTML      = JS_eLang.NextPrayTime;
    JS_HReJOMOATEXT.innerHTML       = JS_eLang.XX_JOMOA;

    document.getElementById('W9_ARABICDIGITS').innerHTML    = JS_eLang.W9_ARABICDIGITS;
    _mn1.innerHTML = sims(c_mn1);
    document.getElementById('XX_SCROLLABLE_MSG').innerHTML  = JS_eLang.XX_SCROLLABLE_MSG;
    document.getElementById('XX_HIDE_IQAMAT').innerHTML     = JS_eLang.XX_HIDE_IQAMAT;
    document.getElementById('XX_ZEROS_AMPM').innerHTML      = JS_eLang.XX_ZEROS_AMPM;
    document.getElementById('XX_5BOXES_ONLY').innerHTML     = JS_eLang.XX_5BOXES_ONLY;
    document.getElementById('XX_JOMOA_INLOGO').innerHTML    = JS_eLang.XX_JOMOA_INLOGO;
    document.getElementById('VRnowIQAMA').innerHTML = JS_eLang.XX_IQAMAT_SALAT;
    document.getElementById('HRnowIQAMA').innerHTML = JS_eLang.XX_IQAMAT_SALAT;
    document.getElementById('VRnowDOHA').innerHTML  = JS_eLang.DohaTime;
    document.getElementById('HRnowDOHA').innerHTML  = JS_eLang.DohaTime;
    document.getElementById('XX_IQAMA_ADJUSTEMENTS').innerHTML  = JS_eLang.XX_IQAMAT_SALAT;
    document.getElementById('XX_JANAZAT_COUNTER').innerHTML = JS_eLang.XX_JANAZAT_COUNTER;
    document.getElementById('XX_JANAZAT_TEXTER').innerHTML  = JS_eLang.XX_JANAZAT_TEXTER;
    document.getElementById('XX_AZKAR_0').innerHTML = JS_eLang.XX_AZKAR_0;
    document.getElementById('XX_AZKAR_4').innerHTML = JS_eLang.XX_AZKAR_4;
    document.getElementById('XX_SLIDERS_0').innerHTML   = JS_eLang.XX_SLIDERS_0;
    document.getElementById('XX_JOMOA_SHOW').innerHTML  = JS_eLang.XX_JOMOA_SHOW;
    document.getElementById('XX_VR_MIDDLENAMES').innerHTML  = JS_eLang.XX_VR_MIDDLENAMES;
    document.getElementById('XX_VR_NoNEXTNoJMA').innerHTML  = JS_eLang.XX_VR_NoNEXTNoJMA;

    document.getElementById('XX_AZKAR_SABAH').innerHTML = JS_eLang.XX_AZKAR_SABAH;
    document.getElementById('XX_AZKAR_ASR').innerHTML   = JS_eLang.XX_AZKAR_ASR;
    document.getElementById('XX_AZKAR_MAGRIB').innerHTML= JS_eLang.XX_AZKAR_MAGRIB;
    document.getElementById('XX_AZKAR_ISHA').innerHTML  = JS_eLang.XX_AZKAR_ISHA;
    document.getElementById('sVRtxt').innerHTML = JS_eLang.MinutesToIqama;
    document.getElementById('sHRtxt').innerHTML = JS_eLang.MinutesToIqama;
    document.getElementById('XX_ENLARGE').innerHTML = JS_eLang.XX_ADJUST_1;


    if(JS_LANG_NOW == "AR")
    {
        JS_ROOT.style.setProperty('--XX_LANG_DIR', 'rtl');
        JS_AM_TEXT = "<span class='cARPM'>صباحا</span>";
        JS_PM_TEXT = "<span class='cARPM'>مساء</span>";
    }
    else
    {
        JS_ROOT.style.setProperty('--XX_LANG_DIR', 'ltr');
    }


    document.getElementById('jZ1').innerHTML = JS_MONTHS_ZZ[0];
    document.getElementById('jZ2').innerHTML = JS_MONTHS_ZZ[1];
}

//-----------------------------------------------------------------------------------
function izArabic(str)
{
    var arabic = /[\u0600-\u06FF]/;
    return arabic.test(str);
}

//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------


var JS_SND_AZAN  = document.getElementById('eVoiceAzan');
var JS_SND_FAJR  = document.getElementById('eVoiceFajr');
var JS_SND_SHORTAZAN = document.getElementById('shortAzan');
var JS_SND_SHORTIQAMA = document.getElementById('shortIqama');
var JS_SND_BEEEP = document.getElementById('eBeeep');
var JS_SND_TIT   = document.getElementById('eTit');
var JS_1SEC_TIMER  = setInterval('LiveTime()', (1000) );





JS_VRMsqNAME.innerHTML  = JS_MOSQUE_NAME;
JS_HRMsqNAME.innerHTML  = JS_MOSQUE_NAME;


ProcessLANGUAGE();

DisableSelectionByNAME(document.body);




if(JS_AUDIO_AZAN_IQAMA_IS_BY_VOICE) JS_eVoiceCHECK.checked  = true;  else JS_eVoiceCHECK.checked     = false;
if(JS_SHORT_AZAN_ACTIVE)    JS_eShortAZAN.checked   = true;  else JS_eShortAZAN.checked = false;
if(JS_SHORT_IQAMA_ACTIVE)   JS_eShortIQAMA.checked  = true;  else JS_eShortIQAMA.checked = false;
if(JS_RAMADAN_30MIN_ACTIVE) JS_eRamadan30CHECK.checked      = true;  else JS_eRamadan30CHECK.checked = false;
if(JS_SUMMER_ADD1HOUR)      JS_summerCHECK.checked          = true;  else JS_summerCHECK.checked     = false;
if(JS_1HOURMORE)            JS_eMoreHourCHECK.checked       = true;  else JS_eMoreHourCHECK.checked  = false;
if(JS_1LESSMORE)            JS_eLessHourCHECK.checked       = true;  else JS_eLessHourCHECK.checked  = false;
if(JS_24H_ACTIVE)           JS_e24CHECK.checked             = true;  else JS_e24CHECK.checked        = false;
if(JS_FULL_CLOCK_ACTIVE)    JS_eFullClockCHECK.checked      = true;  else JS_eFullClockCHECK.checked = false;
if(JS_PAST_DIMER_ACTIVE)    JS_ePastDimerCHECK.checked      = true;  else JS_ePastDimerCHECK.checked = false;
if(JS_WCSV_ACTIVE)          JS_eWCSVCHECK.checked           = true;  else JS_eWCSVCHECK.checked     = false;
if(JS_IQAMA_FULL_TIMES)     JS_eIQAMAasHOURCHECK.checked    = true;  else JS_eIQAMAasHOURCHECK.checked = false;
if(JS_IQAMA_COUNTDOWN_ACTIVE)       JS_eCOUNTDOWNOnOff.checked      = true;  else JS_eCOUNTDOWNOnOff.checked = false;
if(JS_DIMM_WHILE_PRAYIN_ACTIVE)   JS_eDimmCHECK.checked     = true;  else JS_eDimmCHECK.checked      = false;
if(JS_USER_SLIDERS_ACTIVE)  JS_eSlidersCHECK.checked        = true;  else JS_eSlidersCHECK.checked   = false;
if(JS_APP_AZKAR_ACTIVE)     JS_eAzkarCHECK.checked          = true;  else JS_eAzkarCHECK.checked     = false;

CheckVRSCREEN();
execDIGITS(JS_ARABIC_DIGITS);
execWCSV(JS_WCSV_ACTIVE);
goMarqueeOnOff();
goDohaSaverOnOff();
goIshaSaverOnOff();
goHideIqamat();
go5BoxesJomoaLogo();
goZerosAMPM();
goVrMiddleNames();
UpdateFullClock(JS_FULL_CLOCK_ACTIVE);
setzzMonths();
GoGloballyFillDATA();
Go1MN(false);
updateLocationByFILE();
putMinutesInSETTINGS();
goSelektJOMOAnDOHR();
updateBottomInformations();
VerifyMP3Options();
document.title=_netv;_abx.innerHTML=document.title;
goNoNEXTNoJMA(true);
goSetThe4Azkar();
//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
//----testACTIVE------------------------------------ _shrq _fjr  _thuhr  _asr   _maghreb _isha
function testACTIVE()
{

//JS_IQAMA_TIME_OF_SHRQ = 2;  _shrq = JS_nowMNTS + 1; var ss = gimeTime(_shrq); dolog('testACTIVE / '+ss);

//JS_PRAY_DURATION_OF_FAJR = 2; JS_IQAMA_TIME_OF_FAJR = 2;  _fjr= JS_nowMNTS + 1;
//var ss = gimeTime(_fjr); dolog('testACTIVE / '+ss);

//GoActiveSALAT(_asr);

//JS_NOW_DIMSCREEN_DURATION=2; ShowRIDEAU();
//setTimeout(ShowThisAlertAndCloseAFTER, (1000), JS_DOA_SYAM_THURSDAY, 0.1);
}


//-----------------------------------------------------------------------------------

window.onfocus = function() { GoGloballyFillDATA(); Go1MN(true); }
setTimeout(uLoadTheCountries, 1500); // 1.5 second go load cities

if(JS_AUDIO_AZAN_IQAMA_IS_BY_VOICE) ShowZunder('BtnAudio');


// ########################################################################
// ########################################################################
// ########################################################################
// ########################################################################
// ########################################################################

function isBetween(n, a, b) {return (n - a) * (n - b) <= 0}

//-------ManuallyGPS----------------------------------------------------------------------------
function ManuallyGPS()
{

    var sNowGps = JS_METEO_LATITUDE + ',' + JS_METEO_LONGITUDE;

    var str = prompt("Enter Your GPS Position", sNowGps);
    if (str != null)
    {
        str = str.replace(' ', '');
        var tARR = str.split(',');
        JS_METEO_LATITUDE  = tARR[0];
        JS_METEO_LONGITUDE = tARR[1];

        localStorage.setItem('STORAGE_JS_METEO_LATITUDE', JS_METEO_LATITUDE);
        localStorage.setItem('STORAGE_JS_METEO_LONGITUDE', JS_METEO_LONGITUDE);
        ShowNowLatiLong();
        FetchMETEO();
    }
}
//-----------------------------------------------------------------------------------

function getFullDynDATE(incDAYS)
{
    var JS_TXX  = new Date();
    JS_TXX.setDate(JS_TXX.getDate() + incDAYS);

    var YearNow = JS_TXX.getFullYear();
    var mmm     = ('0'+ (JS_TXX.getMonth()+1)).slice(-2);
    var jjj     = ('0'+ JS_TXX.getDate()).slice(-2);

    return YearNow+'-'+mmm+'-'+jjj;
}
//-----------------------------------------------------------------------------------
function getFullTHnow()
{
    var JS_THH  = new Date();
    var YearNow = JS_THH.getFullYear();
    var hhh     = ('0'+ JS_THH.getHours()).slice(-2);
    var fullDX = getFullDynDATE(0);
    return fullDX+'T'+hhh+':00';
}

var JS_mtoGPS = document.getElementById('mtoGPS');
//-------METEO----------------------------------------------------------------------------
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
//-----------------------------------------------------------------------------------
function iniPosition(position)
{
    JS_METEO_LATITUDE  = position.coords.latitude;
    JS_METEO_LONGITUDE = position.coords.longitude;
    localStorage.setItem('STORAGE_JS_METEO_LATITUDE', JS_METEO_LATITUDE);
    localStorage.setItem('STORAGE_JS_METEO_LONGITUDE', JS_METEO_LONGITUDE);
    ShowNowLatiLong();
    FetchMETEO();
}

//-----------------------------------------------------------------------------------
function setMenuPOZ()
{
    if(JS_FORCED_VERTICAL > 0) {if(JS_FORCED_VERTICAL == 2)JS_eMenuVR.style.left = '0%'; else JS_eMenuVR.style.left = '93%';}
}

//-----------------------------------------------------------------------------------
function ShowNowLatiLong()
{
    JS_mtoGPS.innerHTML = JS_METEO_LATITUDE + ' , ' + JS_METEO_LONGITUDE;
}
//-----------------------------------------------------------------------------------
function FetchMETEO()
{
    if(JSALLDATA.IZmeteo==0) return;
// &temperature_unit=fahrenheit
    if(JS_METEO_LATITUDE == 0) {JS_VRCELSIUS.innerHTML = "-"; JS_HRCELSIUS.innerHTML = "-"; return;}

    fetch('https://api.open-meteo.com/v1/forecast?latitude='+JS_METEO_LATITUDE+'&longitude='+JS_METEO_LONGITUDE+'&hourly=temperature_2m,weathercode&forecast_days=7&timezone=auto')
    .then(text => text.json())
    .then(data => {
      JS_DATA_METEO = data;
      proccessMETEO();
  })
    .catch(error => {console.log(error);})
}



function gimepic(iniNB,iniTM)
{
    var imc = '0.png';

    if(iniNB == 0){
        if( (iniTM >= _maghreb) || (iniTM < _fjr) )
            imc = 'i_clearNight.png'; else imc = 'i_clearDay.png';
    }
    else    if(isBetween(iniNB,1,3))   imc = 'i_clouds.png';
    else    if(isBetween(iniNB,4,9))   imc = 'i_smoke.png';
    else    if(isBetween(iniNB,10,19)) imc = 'i_fogmist.png';
    else    if(isBetween(iniNB,20,29)) imc = 'i_snowgrains.png';
    else    if(isBetween(iniNB,30,39)) imc = 'i_sandstorm.png';
    else    if(isBetween(iniNB,40,49)) imc = 'i_fogmist.png';
    else    if(isBetween(iniNB,50,69)) imc = 'i_dizzle.png';
    else    if(isBetween(iniNB,70,79)) imc = 'i_snow.png';
    else    if(isBetween(iniNB,80,99)) imc = 'i_rainhard.png';

    return imc;
}



var JS_nowUNIT   = "";
var JS_nowCELS   = "";

//--------proccessMETEO---------------------------------------------------------------------------
function proccessMETEO()
{

    if(JSALLDATA.IZmeteo==0) return;

    if(!JS_DATA_METEO.timezone) return;

    var nowTH = getFullTHnow();
    var idx = FindInArray(nowTH, JS_DATA_METEO.hourly.time);



    if(idx > -1)
    {
        var TodayARR = JS_DATA_METEO.hourly.temperature_2m.slice(0,24);
        JS_nowUNIT = JS_DATA_METEO.hourly_units.temperature_2m;
        JS_nowUNIT = JS_nowUNIT.replace('°', '');
        JS_nowCELS = Math.floor(JS_DATA_METEO.hourly.temperature_2m[idx]);
        JS_VRCELSIUS.innerHTML = ARNumbers(JS_nowCELS)+'°';
        JS_HRCELSIUS.innerHTML = JS_VRCELSIUS.innerHTML;
        var ikoMTO = parseInt(JS_DATA_METEO.hourly.weathercode[idx]);
        JS_HRimgMETEO.title = ikoMTO;
        JS_VRimgMETEO.title = ikoMTO;
        var imgi = gimepic(ikoMTO,JS_nowMNTS);
        JS_HRimgMETEO.src = 'assets/offline/images/meteo/'+imgi;
        JS_VRimgMETEO.src = JS_HRimgMETEO.src;
        var uH = Math.floor(Math.max.apply(null, TodayARR));
        var uL = Math.floor(Math.min.apply(null, TodayARR));
        JS_HRmtoHHH.innerHTML = ARNumbers(uH+'°,'+uL+'°');
        JS_VRmtoHHH.innerHTML = ARNumbers(uH+'°<br>'+uL+'°');
    }
    else {
        JS_VRCELSIUS.innerHTML = '-';
        JS_HRCELSIUS.innerHTML = '-';
        JS_HRimgMETEO.src = '{{asset("assets/offline/images/meteo/0.png")}}';
        JS_HRmtoHHH.innerHTML = '-';
        JS_VRmtoHHH.innerHTML = '-';
    }

    if(JSALLDATA.IZMtoPRYRS==1)
    {
        for (var i=0; i < 6; i++)
        {
            nowT= getFullDynDATE(0)+JS_arr6TIMES[i];
            idx = FindInArray(nowT, JS_DATA_METEO.hourly.time);
            var slxOH = document.getElementById('HmtALT'+i);
            var slxOV = document.getElementById('VmtALT'+i);
            if(idx > -1) {
                JS_nowCELS = Math.floor(JS_DATA_METEO.hourly.temperature_2m[idx]);
                var icx = parseInt(JS_DATA_METEO.hourly.weathercode[idx]);

                var imgc = gimepic(icx,JS_arr6DATAC[i]);
                slxOH.title = icx;
                var images = "{{ asset('assets/offline/images/meteo') }}";
                slxOH.style.background = "url(assets/offline/images/meteo/"+imgc+") no-repeat left bottom";


                slxOH.style.backgroundSize = "70% auto";
                slxOH.innerHTML = ARNumbers(JS_nowCELS)+"°";

                slxOV.title = icx;
                slxOV.style.background = slxOH.style.background;
                slxOV.style.backgroundSize = "70% auto";
                slxOV.innerHTML = slxOH.innerHTML;
            } else {
                slxOH.innerHTML = "-";
                slxOV.innerHTML = "-";
            }

        }
    }



}


//-----------------------------------------------------------------------------------
ShowNowLatiLong();
FetchMETEO();
updateMeteoDSP(false);
updateMtoPRYRS(false);
goSetJanazat();
updateDHRxminASR();
AdminMsgsLISTER();
AdminMsgsVIEW();
SlidesLISTER();
set5minAzkar();
GlobalGatherAZKAR();
go1MinCounter();
goCounterEnlarge();
goIqamaScreen();
setMenuPOZ();
</script>

</body>
</html>