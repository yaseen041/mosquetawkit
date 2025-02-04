@extends('app')
@section('title', 'Installation for Android Devices &#8211;')
@section('content')
<section >
  <div class='container' >
    <div class='row' dir='ltr'>
      <h1>{{ get_section_content('project', 'site_title') }} Installation for Android Devices</h1>
    </div>
  </div>
</section>
<section id='details' class='details'>
  <div class='container'>
    <div class='row content align-items-start'>
      <div class='col-md-4 mTop30'>
        <table align='center' width='100%' >
          <tr>
            <td height='40' width='50%'><a href="{{ asset('assets/w9images/help_awqat_salat_app_1.jpg') }}" class='gallery-lightbox' data-gall='gal9'><img loading='lazy' class='w100' src="{{ asset('assets/w9images/help_awqat_salat_app_1.jpg') }}" alt='help_awqat_salat_app'></a></td>
            <td height='40' width='50%'><a href="{{ asset('assets/w9images/help_awqat_salat_app_2.jpg') }}" class='gallery-lightbox' data-gall='gal9'><img loading='lazy' class='w100' src="{{ asset('assets/w9images/help_awqat_salat_app_2.jpg') }}" alt='help_awqat_salat_app'></a></td>
          </tr>
          <tr>
            <td height='40' width='50%'><a href="{{ asset('assets/w9images/help_awqat_salat_app_3.jpg') }}" class='gallery-lightbox' data-gall='gal9'><img loading='lazy' class='w100' src="{{ asset('assets/w9images/help_awqat_salat_app_3.jpg') }}" alt='help_awqat_salat_app'></a></td>
            <td height='40' width='50%'><a href="{{ asset('assets/w9images/help_awqat_salat_app_4.jpg') }}" class='gallery-lightbox' data-gall='gal9'><img loading='lazy' class='w100' src="{{ asset('assets/w9images/help_awqat_salat_app_4.jpg') }}" alt='help_awqat_salat_app'></a></td>
          </tr>
          <tr>
            <td height='40' width='50%'><a href="{{ asset('assets/w9images/help_awqat_salat_app_5.jpg') }}" class='gallery-lightbox' data-gall='gal9'><img loading='lazy' class='w100' src="{{ asset('assets/w9images/help_awqat_salat_app_5.jpg') }}" alt='help_awqat_salat_app'></a></td>
            <td height='40' width='50%'><a href="{{ asset('assets/w9images/help_awqat_salat_app_6.jpg') }}" class='gallery-lightbox' data-gall='gal9'><img loading='lazy' class='w100' src="{{ asset('assets/w9images/help_awqat_salat_app_6.jpg') }}" alt='help_awqat_salat_app'></a></td>
          </tr>
          <tr>
            <td height='40' width='50%'><a href="{{ asset('assets/w9images/help_awqat_salat_app_7.jpg') }}" class='gallery-lightbox' data-gall='gal9'><img loading='lazy' class='w100' src="{{ asset('assets/w9images/help_awqat_salat_app_7.jpg') }}" alt='help_awqat_salat_app'></a></td>
            <td height='40' width='50%'><a href="{{ asset('assets/w9images/help_awqat_salat_app_8.jpg') }}" class='gallery-lightbox' data-gall='gal9'><img loading='lazy' class='w100' src="{{ asset('assets/w9images/help_awqat_salat_app_8.jpg') }}" alt='help_awqat_salat_app'></a></td>
          </tr>
          <tr>
            <td height='40' width='50%'><a href="{{ asset('assets/w9images/help_awqat_salat_app_9.jpg') }}" class='gallery-lightbox' data-gall='gal9'><img loading='lazy' class='w100' src="{{ asset('assets/w9images/help_awqat_salat_app_9.jpg') }}" alt='help_awqat_salat_app'></a></td>
            <td height='40' width='50%'><a href="{{ asset('assets/w9images/help_awqat_salat_app_10.jpg') }}" class='gallery-lightbox' data-gall='gal9'><img loading='lazy' class='w100' src="{{ asset('assets/w9images/help_awqat_salat_app_10.jpg') }}" alt='help_awqat_salat_app'></a></td>
          </tr>
        </table>
      </div>
      <div class='col-md-8' >
        <b>STEP BY STEP INSTALLATION</b>
        <ul>
          <li>
            <i class='bi bi-check'></i>
            You need
            <a href='https://www.google.com/search?q=android+media+box' target='_blank'>
              Android Media-Box
            </a> with android version 9 or less !
          </li>
          <li>
            <i class='bi bi-check'></i>
            Install
            <a href="{{asset('assets/files/opera51.apk') }}">Opera-Browser</a>.
          </li>
          <li>
            <i class='bi bi-check'></i>
            Install <a href="{{asset('assets/files/ES-Explorer.apk') }}">ES-Explorer</a>

            (<b>IMPORTANT</b> to use this old version! and don't update it!).
          </li>
          <li>
            <i class='bi bi-check'></i> Download <a href="{{ asset('assets/admin/tawkit-9.54n-db004.zip')}}">{{ get_section_content('project', 'site_title') }}</a> in Downloads folder of your device.
          </li>
          <li>
            <i class='bi bi-check'></i> Open ES-Explorer and go to Downloads.
          </li>
          <li>
            <i class='bi bi-check'></i> Open mosque.zip you downloaded, and click on Extract.
          </li>
          <li>
            <i class='bi bi-check'></i> Go back, and open the extracted folder of mosque,
            and start the file index.html in Opera Browser !
          </li>
        </ul>
        <p>
          If you couldn't install {{ get_section_content('project', 'site_title') }} on your Android device,<br>
          . enter this adress in your browser :  <a href="{{ url('/')}}" target='_blank'>{{ url('/')}}</a><br>
          . or contact an <a href="{{url('/#Installers')}}" >Installer</a> to help you,<br>
          . or <a href="{{url('/contact/')}}" >contact author</a> with more details.
        </p>
      </div>
      <div class='col-md-4' >
      </div>
      <div class='col-md-8' >
        <p class='fst-italic'>
          {{ get_section_content('project', 'site_title') }}.net doesn't sell any media-box. You need to have your own <a href='https://www.google.com/search?q=android+media+box'>Android Media-Box</a> or any device with a modern Browser.<br>
          You can also use a Smart TV, but ONLY if its Browser is capable viewing {{ get_section_content('project', 'site_title') }} application correctly !<br>
          To know if a Smart TV is good for {{ get_section_content('project', 'site_title') }} or no, ask the seller to test this link in its Browser :
          <a href="{{ url('/')}}" >{{ get_section_content('project', 'site_title') }}</a><br>
          If application not showing correctly, then you better use a Media-Box, and
          contact one of <a href="{{url('/#Installers')}}" >The Installers</a> in your country to help you install {{ get_section_content('project', 'site_title') }}.<br>
          <br><br><br>
        </p>
      </div>
    </div>
  </div>
</section>
@endsection
@push('scripts')

<script>
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
    if(JS_TOGGLE_ON) {
      JS_SCR_X.src = objIMG.src;
      JS_SCR_0.style.opacity = 0;
    } else {
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
@endpush