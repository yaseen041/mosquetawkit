@extends('app')
@section('title', 'Contact ')
@section('content')
    <section >
      <div class='container'>
        <div class='row' dir='ltr'>
          <h1>Contact</h1>
        </div>
      </div>
    </section>
    <section id='contact' class='contact'>
      <div class='container'>
        <div class='row'>
          <div class='col-lg-6'>
            <div class='row'>
              <div class='col-lg-12 info'>
                <i class='bx bx-envelope bx-lg'></i>
                <h4>Contact Author</h4>
                <br><span style='color:#353535;'>Ismail CHAGDALI</span>
              </div>
            </div>
          </div>
          <div class='col-lg-6'>
            <form action='/w9contact-form.php' name='zonder' method='post' role='form' class='php-email-form'>
              <div class='form-group'>
                <input placeholder='Your Name' type='text' name='name' class='form-control' id='name' value='---' style='display:none;'>
              </div>
              <div class='form-group mt-3'>
                <input placeholder='Your Email' type='email' class='form-control' name='email' id='email' required>
              </div>
              <div class='form-group mt-3'>
                <input placeholder='Subject' type='text' class='form-control' name='subject' onfocus='iniKEY()' id='subject' required>
                <input id='eKY' type='hidden' name='eKY' value=''>
              </div>
              <div class='form-group mt-3'>
                <textarea placeholder='Message' class='form-control' name='message' rows='5' required></textarea>
              </div>
              <div class='my-3'>
                <div class='loading'>Loading</div>
                <div class='error-message'></div>
                <div class='sent-message'>Your message has been sent. Thank you!</div>
              </div>
              <div class='text-center'><button type='submit'>Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection
@push('scripts')


  <script>
    function setCookie(cname, cvalue, exdays) {
      const d = new Date();
      d.setTime(d.getTime() + (exdays*24*60*60*1000));
      let expires = 'expires='+ d.toUTCString();
      document.cookie = cname + '=' + cvalue + '; ' + expires + '; path=/; domain=.tawkit.net; SameSite=Strict;';
    }
    function changeLang(ss)
    {
      setCookie('UserLANG', ss, 90);
      location.reload();
    }
    var JS_SCREENS_COUNT  = 5;
    var JS_ACTIVE_SCREEN  = 0;
    var JS_TOGGLE_ON = false;
    function goScreensSET(objIMG, nbr) {
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
    function PlayScreens() {
      JS_ACTIVE_SCREEN++;
      if(JS_ACTIVE_SCREEN > JS_SCREENS_COUNT) JS_ACTIVE_SCREEN = 1;
      goScreensSET(document.getElementById('scr-'+JS_ACTIVE_SCREEN), JS_ACTIVE_SCREEN);
    }
    function RandomScreenNOW() {
      JS_ACTIVE_SCREEN = Math.floor(Math.random() * JS_SCREENS_COUNT) + 1;
      goScreensSET(document.getElementById('scr-'+JS_ACTIVE_SCREEN), JS_ACTIVE_SCREEN);
    }
  </script>
@endpush
