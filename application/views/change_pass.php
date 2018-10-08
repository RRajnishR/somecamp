<script>
    var page_name="profile";
</script>  
<style>
    .profile-page .page-header {
        min-height: 350px !important;
    }
</style>
<?php 
    $user = $users[0];
?>
<div class="wrapper">
    <div class="page-header clear-filter" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('<?php echo base_url() ?>assets/frontend/img/profile.jpg');">
      </div>
      <div class="container">
        <div class="photo-container">
         <?php 
            if($this->session->userdata('social_stat')=="0"){
                if($this->session->userdata('photo')==""){
                   $p_img = base_url()."assets/uploads/users/profile/default_profile.png"; 
                } else {
                   $p_img = base_url()."assets/uploads/users/profile/".$this->session->userdata('photo'); 
                }
            } else {
                $p_img = $this->session->userdata('photo');
            }
         ?>
          <img src="<?php echo $p_img; ?>" alt="<?php echo $this->session->userdata('first_name')." | Camper at Langecole"; ?>">
        </div>
        <h3 class="title"><?php echo $this->session->userdata('first_name')." ".$this->session->userdata('last_name') ?></h3>
        <p class="category">Camper at Bookourcamp.com</p>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="button-container">
          <a href="#button" class="btn btn-primary btn-round btn-lg">Password</a>
        </div>
        <h3 class="title">Change Password</h3>
        <div class="row">
            <div class="col-md-2">&nbsp;</div>
            <div class="col-md-8">
                <form action="<?php echo base_url() ?>Profile/update_password" method="post">
                 <div class="form-group">
                  <label for="pass">Old Password</label>
                  <input type="password" class="form-control" placeholder="Enter Your Old Password" name="old_pw" value="" required />
                </div>
                <div class="form-group">
                  <label for="pass">New Password</label>
                  <input type="password" class="form-control" placeholder="Enter New Password" name="new_pw" value="" required />
                </div>
                <div class="form-group">
                  <label for="pass">Re-enter Password</label>
                  <input type="password" class="form-control" placeholder="Re-enter New Password" name="renew_pw" value="" required />
                </div>
                <div class="form-group">
                  <label for="pass"></label>
                  <button class="btn btn-primary" type="submit">Change Password</button>
                </div>
                </form>
            </div>
            <div class="col-md-2">&nbsp;</div>
        </div>
      </div>
    </div>
    <script>
        var thisbody = document.querySelector('body');
        thisbody.classList.remove('index-page');
        thisbody.classList.add('profile-page');
    </script>