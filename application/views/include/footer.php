<style>
    .nav-tabs>.nav-item>.nav-link{
        padding: 7px 28px;
    }
</style> 
<!--Snack Bar-->
<div id="snackbar"><i class="now-ui-icons emoticons_satisfied"></i> </div>
<!-- Mini Modal -->
<div class="modal fade modal-mini modal-primary" id="signbox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs justify-content-center" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#camp_access" rel="tooltip" title="Campers Login"><i class="fas fa-user-ninja"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#host_access" rel="tooltip" title="Host's Login"><i class="fas fa-briefcase"></i></a>
                  </li>
                </ul>
            </div>
          </div>
      </div>
      <div class="modal-body">

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane container active" id="camp_access">
            <a class="btn form-control" href="<?php echo base_url(); ?>Home/user_page"><i class="fas fa-sign-in-alt"></i> Sign Up / Sign In</a>
             <div class="g-signin2 form-control btn" data-onsuccess="onSignIn" data-theme="dark"></div>
          </div>
          <div class="tab-pane container fade" id="host_access">
            <a href="<?php echo base_url() ?>Hostsignup" class="btn btn-primary form-control"><i class="fas fa-user-plus"></i> Sign Up</a>
            <a href="<?php echo base_url() ?>camp_organiser/Dashboard/login" class="btn btn-secondary form-control"><i class="fas fa-sign-in-alt"></i> Sign In</a>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--  End Modal -->
<footer class="footer" data-background-color="black">
  <div class="container">
    <nav>
      <ul>
        <li>
          <a href="#">
            Contact US
          </a>
        </li>
        <li>
          <a href="#">
            About Us
          </a>
        </li>
        <li>
          <a href="#">
            Blog
          </a>
        </li>
      </ul>
    </nav>
    <div class="copyright" id="copyright">
      COPYRIGHT &copy;
      <script>
        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
      </script> |
        <a href="<?php echo base_url(); ?>" target="_blank">Bookourcamp.com</a>
        <a style="display:none;" href="http://rajnishcv.com">Designed & Developed By Rajnish</a>
    </div>
  </div>
</footer>
</div>
  <!--   Core JS Files   -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/core/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/now-ui-kit.js?v=1.2.0" type="text/javascript"></script>
    <!--  Old footer files  -->
    <script src="<?php echo base_url() ?>assets/slider/ideal-image-slider.js"></script>
    <script src="<?php echo base_url() ?>assets/slider/extensions/bullet-nav/iis-bullet-nav.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/intlTelInput.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/utils.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
<!--    <script src="http://malsup.github.com/jquery.cycle2.js"></script>-->
    <!--  Google Login Start -->
    <script>
    function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    console.log(profile);
    var googleid = profile.getId();
    var fname = profile.getGivenName();
    var lname = profile.getFamilyName();
    var photo = profile.getImageUrl();
    var email = profile.getEmail();
    var id_token = googleUser.getAuthResponse().id_token;
    <?php 
        if(!$this->session->userdata('google_id')){
    ?>
    login(googleid, fname, lname, photo, email);
    <?php } ?>
    };
    function login(googleid, fname, lname, photo, email){
      $.ajax({
        type: "POST",
        url: baseurl+ "Home/login",
        dataType: 'html',
        data: {googleid:googleid, fname:fname, lname:lname, photo:photo, email:email},
        success: function(res)
        {
            $('#signbox').modal('toggle');
            showalert("logged in");
            location.reload();
        },
        error: function (request, status, error) 
        {
            alert('Error! Try again later');
            console.log(request.responseText);
        }
    });
    }
    </script>
    <!--  Google Login End -->
    <script>
    var intro = document.querySelector('.banner');
    var introPlayer = document.querySelector('.banner__video');

    var iOS = /iPad|iPhone|iPod/.test(navigator.platform);
    if (iOS) {
        intro.style.backgroundImage = 'url("' + introPlayer.poster + '")';
        introPlayer.style.display = 'none';
    }
    </script>
    <script>
    function showalert(message) {
        var x = document.getElementById("snackbar");
        x.innerHTML+=" "+message;
        x.className = "show";

        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
    }
    $('document').ready(function(){
        $('.customcycler').mouseenter(function(){
            var images = $(this).attr('data-images').split(', '); 
            $(this).addClass('this_div');
            var index=0;
            timer = setInterval(function(){
                if(index == (images.length-1)){
                    index = 0;
                } else {
                    index++;
                }
                var img = images[index];
                $('.this_div').css('background-image', "url('"+img+"')");
                //console.log(img);
            }, 1000)
        }).mouseleave(function(){
            $('.customcycler.this_div').removeClass('this_div');
            clearTimeout(timer);
        });
        
    });
    </script>
<script>
    function registerExpert()
    {
        $('#first_name').css('border','1px solid #EAEAEA');
        $('#email').css('border','1px solid #EAEAEA');
        $('#password').css('border','1px solid #EAEAEA');

        $('#err_fname').html('');	
        $('#err_lname').html('');
        $('#err_email').html('');
        $('#err_psw').html('');


        //alert('KJJ');
        var first_name = $('#first_name').val();
        var last_name  = $('#last_name').val();
        var email      = $('#email').val();
        var password   = $('#password').val();
        if(first_name == '')
        {
            $('#err_fname').html('Please enter first name');
            $('#first_name').css('border','solid 1px #FF0000');
            return false;
        }

        // email validation
        if( !isEmail(email))
        {
            $("#err_email").html('please enter correct email');
            $('#email').css('border','solid 1px #FF0000');
            return false;
        }

        if(password == '' || password.length < 6)
        {
            $('#err_psw').html('Please enter password');
            $('#password').css('border','solid 1px #FF0000');
            return false;
        }


        $.ajax({
            type: "POST",
            url: baseurl+ "Home/register_user",
            dataType: 'html',
            data: {first_name:first_name,last_name:last_name,email:email,password:password},
            success: function(res)
            {
                if(res == '-1')
                    $("#registerResponse").html('This email id is already registerd with us, if this is your email id please login.');
                else
                    $("#registerResponse").html('Thank you for registering with us, We will send you a verification mail shortly');
            },
            error: function (request, status, error) 
            {
                alert(request.responseText);
            }
        });

    }

    function loginExpert()
    {
        //alert('login');
        $('#user_id').css('border','solid 1px #EAEAEA');
        $('#user_id').css('border','solid 1px #EAEAEA');

        $('#err_lemail').html('');
        $('#err_lpsw').html('');

        var email      = $('#user_id').val();
        var password   = $('#l_password').val();

        if(email == '')
        {
            $('#err_lemail').html('Please enter user id or email id');
            $('#user_id').css('border','solid 1px #FF0000');
            return false;
        }

        if(password == '')
        {
            $('#err_lpsw').html('Please enter password');
            $('#l_password').css('border','solid 1px #FF0000');
            return false;
        }

        $.ajax({
            type: "POST",
            url: baseurl+ "Home/normal_login",
            dataType: 'html',
            data: {email:email,password:password},
            success: function(res)
            {
                //alert(res);	return false;
                if(res == '-1')
                    $("#loginResponse").html('Please Come back later, Admin is currently processing your account');
                else if(res == '0')
                    $("#loginResponse").html('Please verify your email id');
                else if(res == '2')
                    $("#loginResponse").html('Wrong email id or password');
                else 
                    //console.log(res);
                    window.location.href = baseurl;	
            },
            error: function (request, status, error) 
            {
                alert(request.responseText);
            }
        });
    }
</script>
</body>

</html>