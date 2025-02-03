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
            <br><span style='color:#353535;'>{{ get_section_content('project', 'site_author') }}</span>
          </div>
        </div>
      </div>
      <div class='col-lg-6'>
        <form id="contactForm" name="zonder" method="post" role="form" class="php-email-form">
          @csrf
          <div class='form-group'>
            <input placeholder='Your Name' type='text' name='name' class='form-control' id='name' value='---' style='display:none;'>
          </div>
          <div class='form-group mt-3'>
            <input placeholder='Your Email' type='email' class='form-control' name='email' id='email' >
          </div>
          <div class='form-group mt-3'>
            <input placeholder='Subject' type='text' class='form-control' name='subject' onfocus='iniKEY()' id='subject' >
            <input id='eKY' type='hidden' name='eKY' value=''>
          </div>
          <div class='form-group mt-3'>
            <textarea placeholder='Message' class='form-control' name='message' rows='5' ></textarea>
          </div>
          <div class='my-3'>
            <div class='loading'>Loading</div>
            <div class='error-message'></div>
            <div class='sent-message'>Your message has been sent. Thank you!</div>
          </div>
          <div class='text-center'>
            <button type='button' id="submitBtn">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" ></script>


<script>
  $(document).ready(function () {
    var validator = $("#contactForm").validate({
      rules: {
        email: {
          required: true,
          email: true
        },
        subject: {
          required: true,
          minlength: 3
        },
        message: {
          required: true,
          minlength: 10
        }
      },
      messages: {
        email: {
          required: "Please enter your email",
          email: "Enter a valid email"
        },
        subject: {
          required: "Please enter a subject",
          minlength: "Subject must be at least 3 characters"
        },
        message: {
          required: "Please enter your message",
          minlength: "Message must be at least 10 characters"
        }
      },
      errorPlacement: function(error, element) {
        error.insertAfter(element);
      }
    });

    // Handle form submission on button click
    $("#submitBtn").click(function (e) {
        e.preventDefault(); // Prevent default button behavior

        if (!validator.form()) {
            return; // Stop submission if validation fails
          }

          $(".loading").show();
          $(".error-message").hide();
          $(".sent-message").hide();

          $.ajax({
            url: "{{ url('submit-contact') }}",
            type: "POST",
            data: $("#contactForm").serialize(),
            success: function (response) {
              $(".loading").hide();
              if (response.status == "success") {
                $(".sent-message").show();
                $("#contactForm")[0].reset();
              } else {
                $(".error-message").text(response).show();
              }
            },
            error: function () {
              $(".loading").hide();
              $(".error-message").text("Something went wrong. Please try again.").show();
            }
          });
        });
  });
</script>


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
