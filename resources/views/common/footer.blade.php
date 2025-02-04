  <footer id='footer'>
    <div class='footer-top'>
        <div class='container'>
            <div class='row align-items-end' style='padding-top:35px; border-top:1px solid #F3F3F3;'>
                <div class='col-lg-4 col-md-4 footer-links'>
                    <ul>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                            <a title='{{ get_section_content('project', 'site_title') }} Home Page' href="{{ url('/') }}">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                            <a title='{{ get_section_content('project', 'site_title') }} Installation on Android Devices' href="{{url('/installation/')}}">Installation</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                            <a title='{{ get_section_content('project', 'site_title') }} Frequently Asked Questions' href="{{ url('/faq/') }}">F.A.Q</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                            <a title='{{ get_section_content('project', 'site_title') }} Live Demonstration' href="{{ url('online') }}" target='_blank'>{{ get_section_content('project', 'site_title') }} Live Demo</a>
                        </li>
                    </ul>
                </div>
                <div class='col-lg-4 col-md-4 footer-links'>
                    <ul>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                            <a title='Contact {{ get_section_content('project', 'site_title') }} Author' href="{{ url('contact') }}">Contact Author</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                            <a title='{{ get_section_content('project', 'site_title') }} Offline App Installers' href="{{ url('/#Installers')}}">Installers</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                            <a title='{{ get_section_content('project', 'site_title') }} Online App Administration' href="{{ url('/mosque') }}" target='_blank'>Online Administration</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                            <a title='{{ get_section_content('project', 'site_title') }} Annual Prayer Times File Maker' href="{{ url('wtimes')}}">{{ get_section_content('project', 'site_title') }} wTimes File Maker</a>
                        </li>
                    </ul>
                </div>
                <div class='col-lg-4 col-md-4 footer-links'>
                    <ul align='right'>
                        <li>
                            Author:&nbsp;
                            <a href="" target='_blank' class='cssAR' title='8803' >
                                <strong>
                                    {{ get_section_content('project', 'site_author') }}
                                </strong>
                            </a>
                        </li>
                        <li>
                            Email:&nbsp;&nbsp;
                            <a href="" target='_blank' class='cssAR' title='8803' >
                                <strong>
                                    {{ get_section_content('project', 'admin_email') }}
                                </strong>
                            </a>
                        </li>
                        <li>
                            ©
                            {{date('Y')}}&nbsp;
                            <a href="" target='_blank' class='cssAR' title='8803' >
                                <strong>
                                    {{ get_section_content('project', 'site_title') }}
                                </strong>
                            </a>.
                            All rights reserved.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
