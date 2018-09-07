<div class="modal" id="signbox">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal body -->
      <div class="modal-body">
<!--       <button type="button" class="close" data-dismiss="modal">&times;</button>-->
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
              <button class="btn btn-success form-control"><i class="fas fa-user-plus"></i> Sign Up</button>
              <button class="btn btn-info form-control"><i class="fas fa-sign-in-alt"></i> Sign In</button>
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
<script>
var slider = new IdealImageSlider.Slider('#slider');
slider.addBulletNav();
slider.start();
</script>
<script src="<?php echo base_url(); ?>assets/js/intlTelInput.js"></script>
<script src="<?php echo base_url(); ?>assets/js/utils.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body>

</html>