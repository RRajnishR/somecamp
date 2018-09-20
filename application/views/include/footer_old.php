<div class="modal" id="signbox">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal body -->
      <div class="modal-body">
        <ul class="nav nav-tabs nav-justified">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#camp_access"><i class="fas fa-user-ninja"></i> Campers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#host_access"><i class="fas fa-briefcase"></i> Hosts</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane container active" id="camp_access">
             <div class="g-signin2 form-control btn" data-onsuccess="onSignIn" data-theme="dark"></div>
          </div>
          <div class="tab-pane container fade" id="host_access">
            <a href="<?php echo base_url() ?>Hostsignup" class="btn btn-primary form-control"><i class="fas fa-user-plus"></i> Sign Up</a>
            <a href="<?php echo base_url() ?>camp_organiser/Dashboard/login" class="btn btn-secondary form-control"><i class="fas fa-sign-in-alt"></i> Sign In</a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
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
            
        },
        error: function (request, status, error) 
        {
            alert('Error! Try again later');
            console.log(request.responseText);
        }
    });
  }
</script>
<script>
    var intro = document.querySelector('.banner');
    var introPlayer = document.querySelector('.banner__video');

    var iOS = /iPad|iPhone|iPod/.test(navigator.platform);
    if (iOS) {
        intro.style.backgroundImage = 'url("' + introPlayer.poster + '")';
        introPlayer.style.display = 'none';
    }
</script>
<script src="<?php echo base_url() ?>assets/slider/ideal-image-slider.js"></script>
<script src="<?php echo base_url() ?>assets/slider/extensions/bullet-nav/iis-bullet-nav.js"></script>
<script src="<?php echo base_url(); ?>assets/js/intlTelInput.js"></script>
<script src="<?php echo base_url(); ?>assets/js/utils.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body>

</html>