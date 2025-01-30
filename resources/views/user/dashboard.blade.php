@extends('app')
@section('title', 'Homepage')
@section('content')
    <section>
        <div class='container'>
            <div class='row' dir='ltr'>
                <h1>Prayer times application for mosques</h1>
                <div class='col-md-6 d-flex align-items-end'>
                    <a href="{{ url('add-mosque')}}" class='download-btn'>
                        <span class='colink'>CREATE ONLINE APP</span><br>
                        <span>For Mobile & Mosque. <b>No Installation !</b></span><br>
                        <span>موقع مسجدكم على الأ نترنت <br>بدون تنصيب البرنامج</span>
                    </a>
                </div>
                <div class='col-md-6 d-flex align-items-end'>
                    <a href="{{ asset('assets/admin/tawkit-9.54n-db004.zip')}}" class='download-btn'>
                        <span class='colink'>DOWNLOAD TAWKIT v9.54n-db004</span><br>
                        <span>Offline Edition, <b>Without Internet</b></span><br>
                        <span>تنزيل النسخة المحلية<br>بدون إنترنت</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class='container'>
            <div class='row'>
                <div align='center' style='padding-bottom:25px; font-size:130%; color:#A91515;'>
                    <b> البرنامج مجاني</b><br> هذا التطبيق وقف لبيوت الله و لا يجوز بيعه .<br>
                    <a href='./#License'>أنظر شروط الاستعمال</a>
                    <br>
                </div>
                <div align='center' style='padding:15px; font-size:110%; color:blue;'>
                    <b>This application is 100% freeware !</b> It is not permissible to sell it. <br>
                    <a href='./#License'>See License.</a>
                </div>
                <img alt='Tawkit - prayer times application' src="{{ asset('assets/images_tawkit/tawkit00.png') }}"
                    style='width:100%; margin-bottom:17px;'>
                <div class='col-md-6 d-flex align-items-end'>
                    <div class='col-md-6 d-flex align-items-end'>
                        <img alt='Tawkit - prayer times application'
                            src="{{ asset('assets/images_tawkit/tawkit-v1.png') }}" style='width:100%;'>
                    </div>
                    <div class='col-md-6 d-flex align-items-end'>
                        <img alt='Tawkit - prayer times application'
                            src="{{ asset('assets/images_tawkit/tawkit-v0.png') }}" style='width:100%;'>
                    </div>
                </div>
                <div class='col-md-6 d-flex align-items-end'>
                    <div class='col-md-6 d-flex align-items-end'>
                        <img alt='Tawkit - prayer times application'
                            src="{{ asset('assets/images_tawkit/tawkit-v3.png') }}" style='width:100%;'>
                    </div>
                    <div class='col-md-6 d-flex align-items-end'>
                        <img alt='Tawkit - prayer times application'
                            src="{{ asset('assets/images_tawkit/tawkit-v2.png') }}" style='width:100%;'>
                    </div>
                </div>
                <div class='col-md-6 d-flex align-items-end'>
                    <img alt='Tawkit - prayer times application' src="{{ asset('assets/images_tawkit/tawkit-h1.png') }}"
                        style='width:100%;'>
                </div>
                <div class='col-md-6 d-flex align-items-end'>
                    <img alt='Tawkit - prayer times application' src="{{ asset('assets/images_tawkit/tawkit-h3.png') }}"
                        style='width:100%;'>
                </div>
                <div class='col-md-6 d-flex align-items-end'>
                    <img alt='Tawkit - prayer times application' src="{{ asset('assets/images_tawkit/tawkit-h2.png') }}"
                        style='width:100%;'>
                </div>
                <div class='col-md-6 d-flex align-items-end'>
                    <img alt='Tawkit - prayer times application' src="{{ asset('assets/images_tawkit/tawkit-h0.png') }}"
                        style='width:100%;'>
                </div>
                <div class='col-md-6 d-flex align-items-end'>
                    <img alt='Tawkit - prayer times application' src="{{ asset('assets/images_tawkit/tawkit-h4.png') }}"
                        style='width:100%;'>
                </div>
                <div class='col-md-6 d-flex align-items-end'>
                    <img alt='Tawkit - prayer times application' src="{{ asset('assets/images_tawkit/tawkit-h5.png') }}"
                        style='width:100%;'>
                </div>
                <div class='col-md-6 d-flex align-items-end'>
                    <img alt='Tawkit - prayer times application' src="{{ asset('assets/images_tawkit/tawkit-h6.png') }}"
                        style='width:100%;'>
                </div>
                <div class='col-md-6 d-flex align-items-end'>
                    <img alt='Tawkit - prayer times application' src="{{ asset('assets/images_tawkit/tawkit-h7.png') }}"
                        style='width:100%;'>
                </div>
                <div class='col-md-6 d-flex align-items-end'>
                    <img alt='Tawkit - prayer times application' src="{{ asset('assets/images_tawkit/tawkit-h9.png') }}"
                        style='width:100%;'>
                </div>
                <div class='col-md-6 d-flex align-items-end'>
                    <img alt='Tawkit - prayer times application' src="{{ asset('assets/images_tawkit/tawkit-ha.png') }}"
                        style='width:100%;'>
                </div>
                <div class='col-md-6 d-flex align-items-end'>
                    <img alt='Tawkit - prayer times application' src="{{ asset('assets/images_tawkit/tawkit-hb.png') }}"
                        style='width:100%;'>
                </div>
                <div class='col-md-6 d-flex align-items-end'>
                    <img alt='Tawkit - prayer times application' src="{{ asset('assets/images_tawkit/tawkit-h8.png') }}"
                        style='width:100%;'>
                </div>
            </div>
        </div>
    </section>

    <section id='contact' class='contact'>
        <div class='container'>
            <div class='row mrjBTM50'>
                <div class='pad20'>
                    <h2 id='Installers'>Volunteers to help you for installation <br>
                        <span>متطوعين للمساعدة على تركيب البرنامج </span>
                    </h2>
                    <br>
                </div>
                <div align='center' style='padding-bottom:45px;'>
                    For <b>Raspberry Pi</b> and media-box installation technical issues, please contact brother Ziad
                    Qareish : <br>
                    <a target='_blank' href='https://wa.me/962798590505'>WhatsApp: +962 79 859 0505</a> &nbsp; |
                    &nbsp; Email: ziad.qareish@gmail.com &nbsp; | &nbsp; Jordan<br>
                    Or brother Samer Abdennour : <a target='_blank' href='https://wa.me/213778549501'>WhatsApp:
                        +213778549501</a> &nbsp; | &nbsp; Algeria<br>
                </div>
                <div class='col-md-6 d-flex align-items-start'>
                    <table align='center' cellpadding='5' cellspacing='0' border='0' width='100%'>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'>
                                <img width='30' border='0' alt='' src="{{ asset('assets/stats/flags/sa.png' ) }}" />
                                : KSA | Jeddah<br>
                                <span class='cccBtmArabic'>Jameel M. KHAN<br /><a target='_blank'
                                        href='https://wa.me/966554772660'>WhatsApp +966554772660</a><br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'>
                                <img width='30' border='0' alt='' src="{{ asset('assets/stats/flags/om.png' ) }}" />
                                : سلطنة عمان<br>
                                <span class='cccBtmArabic'>Said Alwhaibi<br /><a target='_blank'
                                        href='https://wa.me/96899739919'>WhatsApp +968 9973 9919</a><br><br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/sa.png' ) }}" /> : KSA | المدينة المنورة ومكة
                                <br>
                                <span class='cccBtmArabic'>هشام عبد الله<br><a target='_blank'
                                        href='https://wa.me/966549876907'>WhatsApp +966549876907</a><br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/id.png' ) }}" /> : Indonesia <br>
                                <span class='cccBtmArabic'>Ahmad Radli | MutiaraQonaah<br><a target='_blank'
                                        href='https://wa.me/6285108005922'>WhatsApp +62 851-0800-5922</a><br><br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/sa.png' ) }}" /> : KSA | مكة المكرمة<br>
                                <span class='cccBtmArabic'>محمود حامد<br>WhatsApp +966533230070<br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/sa.png' ) }}" /> : KSA | مدينة الجبيل<br>
                                <span class='cccBtmArabic'>يحيى الجيزاني ابو حسين<br>WhatsApp +966558655661<br><br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/sa.png' ) }}" /> : KSA | منطقة الجوف<br>
                                <span class='cccBtmArabic'>اليزيد ناصرالجريد<br>WhatsApp +966508287772<br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/sa.png' ) }}" />KSA | الدمام والخبر<br>
                                <span class='cccBtmArabic'>ابراهيم محمد الزهراني<br>WhatsApp : +966550888181<br><br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/ly.png' ) }}" /> : Libya <br>
                                <span class='cccBtmArabic'>Muhanned Ghuna<br />WhatsApp +218 92-5847050<br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/ly.png' ) }}" /> : Libya | طرابلس<br>
                                <span class='cccBtmArabic'>عادل عامر العزيبى<br>WhatsApp +218 91-8773113<br><br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/us.png' ) }}" /> : USA | Laurel, MD<br>
                                <span class='cccBtmArabic'>Waqas Malik | Media Coordinator<br><span
                                        style='font-size:80%;'>Islamic Community Center of Laurel,
                                        MD</span><br>media.coordinator@icclmd.org<br>802-448-4272<br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/dz.png' ) }}" /> : Algeria | Djelfa<br>
                                <span class='cccBtmArabic'>chahin zizo <br>WhatsApp +213660488002<br><br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/ma.png' ) }}" /> : المغرب <br>
                                <span class='cccBtmArabic'>كمال باحسو <br>WhatsApp +212700153933<br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/dz.png' ) }}" /> : Algeria | ولاية المسيلة
                                الجلفة<br>
                                <span class='cccBtmArabic'>محمد زيطة <br>Email : starziti@gmail.com<br><br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/ma.png' ) }}" /> المغرب , سوس ماسة <br>
                                <span class='cccBtmArabic'>عبد الكريم<br>WhatsApp +212666096020<br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/dz.png' ) }}" /> Algeria | مولاي العربي ,
                                ولاية سعيدة<br>
                                <span class='cccBtmArabic'>Yahia dz<br>WhatsApp +213660056650<br><br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/jo.png' ) }}" /> : Jordan الأردن<br>
                                <span class='cccBtmArabic'>Dr. Hussien Hyissat | Eqra Tech<br>Mobile:
                                    +962796080604<br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/jo.png' ) }}" /> : عمان | الأردن <br>
                                <span class='cccBtmArabic'>فضل عيسى<br>WhatsApp +962796006051<br><br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/jo.png' ) }}" /> : Jordan الأردن <br>
                                <span class='cccBtmArabic'>عبدالله ابو الحاج<br>Only_WhatsApp :
                                    +962798008983<br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/jo.png' ) }}" /> الأردن . عمان <br>
                                <span class='cccBtmArabic'>مالك أبوربيع<br>WhatsApp +962795505855<br><br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/jo.png' ) }}" /> : Jordan الأردن <br>
                                <span class='cccBtmArabic'>صهيب الكيلاني<br>WhatsApp : +962777491897<br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/jo.png' ) }}" />الكرك ، الأردن<br>
                                <span class='cccBtmArabic'>مؤمن الذنيبات<br>WhatsApp +962797982248<br><br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/ma.png' ) }}" /> : تازة - المغرب <br>
                                <span class='cccBtmArabic'>جلال بوطوال<br>WhatsApp : +212600155276<br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/tn.png' ) }}" /> : المنستير - تونس <br>
                                <span class='cccBtmArabic'>محمد بوسعيد<br>WhatsApp :
                                    +21697711984<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    +21698640525<br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/gb1.png' ) }}" /> : United Kingdom <br>
                                <span class='cccBtmArabic'>Mahad | CTOServers<br>Email:
                                    mahad@ctoservers.co.uk<br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/no.png' ) }}" /> Norway - Kongeriket Noreg<br>
                                <span class='cccBtmArabic'>Abdelmalek Benidir<br>WhatsApp : 00 47 46547178<br><br>
                            </td>
                        </tr>
                    </table>


                </div>
                <div class='col-md-6 d-flex align-items-start'>
                    <table align='center' cellpadding='5' cellspacing='0' border='0' width='100%' class='cccCONTACTS'>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/bd.png' ) }}" /> : Bangladesh <br>
                                <span class='cccBtmArabic'>Md Shohidul Islam<br />
                                    Mobile +8801733160122<br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/lk.png' ) }}" /> : Sri Lanka <br>
                                <span class='cccBtmArabic'>Thanish Ahmed | InTouch solutions<br>WhatsApp :
                                    +94770775059<br><br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/tn.png' ) }}" /> : Tunisia <br>
                                <span class='cccBtmArabic'>Majdi Draouil<br />WhatsApp +21625447478<br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/tn.png' ) }}" /> : Tunisia <br>
                                <span class='cccBtmArabic'>Frej youssef | Monastir<br />WhatsApp
                                    +21695200444<br><br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/de.png' ) }}" /> : Germany <br>
                                <span class='cccBtmArabic'>Ibrahim<br />WhatsApp +49 176 56717279<br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/tn.png' ) }}" /> : Tunisia | قابس<br>
                                <span class='cccBtmArabic'>نعمان المرزوقى<br />WhatsApp +21655660560<br><br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/ly.png' ) }}" /> : Libya | Zliten<br>
                                <span class='cccBtmArabic'>Abdusalam Naas<br />WhatsApp +218913223596<br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/tn.png' ) }}" /> : Tunisia | ولاية صفاقس<br>
                                <span class='cccBtmArabic'>حاتم الشريف<br />WhatsApp +216 98 231 346<br><br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/dz.png' ) }}" /> : Algeria<br>
                                <span class='cccBtmArabic'>Mourad Hanti<br>WhatsApp +213797989898<br><br><br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/kw.png' ) }}" /> : الكويت<br>
                                <span class='cccBtmArabic'>مطلق السبيعي<br>WhatsApp +965 500 00919<br><br><br><br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/au.png' ) }}" /> : Melbourne, Australia<br>
                                <span class='cccBtmArabic'>Saied Altabaa<br>WhatsApp +61 430 533 774<br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/nz1.png' ) }}" /> : New Zealand | Auckland<br>
                                <span class='cccBtmArabic'>Mohammed Roshan<br>WhatsApp +64 21 228 6896<br><br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/dz.png' ) }}" /> : الجزائر | ولاية الشلف مدينة
                                تاوقريت<br>
                                <span class='cccBtmArabic'>Samer Abdennour<br>WhatsApp +213778549501<br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/dz.png' ) }}" /> : الجزائر | مدينة قسنطينة و
                                ما جاورها<br>
                                <span class='cccBtmArabic'>ملول وليد<br>WhatsApp +213540407568<br><br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/lb.png' ) }}" /> : Lebanon <br>
                                <span class='cccBtmArabic'>Abdussamii Al-Sharif | EDM<br>asharif@edm.com.lb<br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/dz.png' ) }}" /> : الجزائر | ولاية الطارف
                                مدينة القالة <br>
                                <span class='cccBtmArabic'>Djamel Mazni<br>WhatsApp +213662137513<br><br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/dz.png' ) }}" />Algeria | Oran<br>
                                <span class='cccBtmArabic'>Oussama Larbi<br>WhatsApp +213770647520<br>Tél
                                    :0770647520<br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/tn.png' ) }}" /> Tunisia : Sousse et
                                communes<br>
                                <span class='cccBtmArabic'>Chatti Monem<br>WhatsApp : +216 92446478<br><br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/dz.png' ) }}" />الجزائر | المسيلة - برج
                                بوعريريج<br>
                                <span class='cccBtmArabic'>Bachir Hemza<br>WhatsApp +213770752576<br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/dz.png' ) }}" /> الجزائر | وهران <br>
                                <span class='cccBtmArabic'>عبد القادر<br>Tél/WhatsApp : +213661317007<br><br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/tn.png' ) }}" /> : تونس | ولاية قابس <br>
                                <span class='cccBtmArabic'>محمد بن سالم<br>WhatsApp : +21698479637<br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/ps.png' ) }}" /> فلسطين <br>
                                <span class='cccBtmArabic'>نائل بدران<br>WhatsApp : 00972569705009<br><br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/dz.png' ) }}" /> : الجزائر | تقرت <br>
                                <span class='cccBtmArabic'>sm<br>WhatsApp : +213697778449<br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/ps.png' ) }}" /> فلسطين <br>
                                <span class='cccBtmArabic'>وسام شاور التميمي<br>WhatsApp :
                                    00972598161122<br>wisamco@gmail.com<br>
                            </td>
                        </tr>
                        <tr>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/ye.png' ) }}" /> اليمن, حضرموت<br>
                                <span class='cccBtmArabic'><br>WhatsApp 00967771502444<br><br>
                            </td>
                            <td height='55' width='50%' align='left' valign='top'><img width='30' border='0' alt=''
                                    src="{{ asset('assets/stats/flags/dz.png' ) }}" /><br>
                                <span class='cccBtmArabic'><br><br><br>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </section>
    <div align='center' style='padding:30px;'>
        البرنامج مجاني و ليس مفتوح المصدر, يجوز التعديل على التطبيق للاستخدام الشخصي فقط , و لا يجوز نشره متغيرا .
        <br><br>
        This software is freeware but not open source. It is permissible to modify the application for a personal
        use only, not allowed to distribute a modified version of it.
    </div>
    <div align='center' style='padding:30px;' id='License'>
        <div dir='rtl'>
            <b>شروط الاستعمال</b><br>
            البرنامج مجاني !<br>
            هذا التطبيق وقف لبيوت الله و لا يجوز بيعه .<br>
            لايجوز حذف أو تغيير إسم البرنامج أو المؤلف . <br>
            لابد بالاحتفاظ بهذا الإشعار القانوني مع البرنامج . <br>
            يجوز التعديل على التطبيق للاستخدام الشخصي فقط , لا لنشره متغيرا<br>
            <br>
            <b>للتجارة في الأجهزة الحاملة للبرنامج</b><br>
            يجوز للتاجر الربح إلى 30% كأقصى حد من قيمة الجهاز و ملحقاته ، مع التركيب و الصيانة<br>
            مثال : <br>
            صاحب الجهاز عنده جهاز كلفه 100 ريال<br>
            يجوز له بيع جهازه لصاحب المسجد ب 130ريال كأقصى ثمن<br>
            بهذه الشروط الثلاثة :<br>
            1. يخبر صاحب المسجد أن البرنامج مجاني ، وأنه يبيع له الجهاز مع التركيب و الصيانة<br>
            2. أن يقوم بصيانة البرنامج و الجهاز مجانيا عند حدوث أي خلل في تشغيل الجهاز :<br>
            ( إعادة تشغيل الجهاز، ضبط الساعة , المساعدة على استخدام البرنامج ... )<br>
            3. عدم تغيير البرنامج ، لا يجوز حذف أو إخفاء إسم البرنامج<br>
            <br>
            <b>التركيب :</b><br>
            قد يكون مجانيا أو بأجرة.<br>
            يتفق صاحب التركيب مع مدير المسجد على مبلغ مناسب <br>
            <br>
        </div>
    </div>
</main>
@endsection
@push('scripts')

<script>
    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        let expires = 'expires=' + d.toUTCString();
        document.cookie = cname + '=' + cvalue + '; ' + expires + '; path=/; domain=.tawkit.net; SameSite=Strict;';
    }

    function changeLang(ss) {
        setCookie('UserLANG', ss, 90);
        location.reload();
    }

    var JS_SCREENS_COUNT = 5;
    var JS_ACTIVE_SCREEN = 0;
    var JS_TOGGLE_ON = false;

    function goScreensSET(objIMG, nbr) {
        JS_TOGGLE_ON = !JS_TOGGLE_ON;
        if (JS_TOGGLE_ON) {
            JS_SCR_X.src = objIMG.src;
            JS_SCR_0.style.opacity = 0;
        }
        else {
            JS_SCR_0.src = objIMG.src;
            JS_SCR_0.style.opacity = 1;
        }
        JS_ACTIVE_SCREEN = nbr;
    }
    function PlayScreens() {
        JS_ACTIVE_SCREEN++;
        if (JS_ACTIVE_SCREEN > JS_SCREENS_COUNT) JS_ACTIVE_SCREEN = 1;
        goScreensSET(document.getElementById('scr-' + JS_ACTIVE_SCREEN), JS_ACTIVE_SCREEN);
    }
    function RandomScreenNOW() {
        JS_ACTIVE_SCREEN = Math.floor(Math.random() * JS_SCREENS_COUNT) + 1;
        goScreensSET(document.getElementById('scr-' + JS_ACTIVE_SCREEN), JS_ACTIVE_SCREEN);
    }
</script>
@endpush