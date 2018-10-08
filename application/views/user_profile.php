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
          <a href="#button" class="btn btn-primary btn-round btn-lg">Profile</a>
        </div>
        <h3 class="title">My Profile</h3>
        <h5 class="description" style="font-weight:bold;">A complete profile helps us in recognizing and verifying you better</h5>
        <div class="row">
            <div class="col-md-2">&nbsp;</div>
            <div class="col-md-8">
                <form action="<?php echo base_url() ?>Profile/update_profile" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="fname">First Name:</label>
                      <input type="text" class="form-control" id="fname" placeholder="Enter Your First Name" name="first_name" value="<?php if(!$user->first_name=="") echo $user->first_name; ?>" required />
                    </div>
                    <div class="form-group">
                      <label for="lname">Last Name:</label>
                      <input type="text" class="form-control" id="fname" placeholder="Enter Your Last Name" name="last_name" value="<?php if(!$user->last_name=="") echo $user->last_name; ?>" required />
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php if($this->session->userdata('email')) echo $this->session->userdata('email'); ?>" disabled />
                    </div>
                    <div class="form-group">
                      <label for="photo">Profile Picture: </label>
                      <button class="btn btn-xs"> <i class="fa fa-camera"></i> <input type="file" name="photo" id="photo" /></button>
                      <label style="font-style:italic; font-size: 11px;">{ **Upload small passport size images. 150px * 150px. less than 500kb } </label>
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" class="form-control" name="dob" id="date" value="<?php if(!$user->dob=="") echo $user->dob; ?>" required />
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="male" <?php if($user->gender=="male") echo "selected"; ?> >Male</option>
                            <option value="female" <?php if($user->gender=="female") echo "selected"; ?> >Female</option>
                            <option value="none" <?php if($user->gender=="none") echo "selected"; ?> >Non Binary</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Update Profile <i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                    <hr/>
                    <?php
                        if(!$user->dob==""){
                            if(time() < strtotime('+18 years', strtotime($user->dob))){ ?>
                            <label style="font-style:italic; font-size: 11px;">{ **Since, You're still an underage(i.e. less than 18 year of age), Please ask your parent / guardian to upload following details: } </label>
                            <form action="<?php echo base_url() ?>Profile/update_guardian" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="id_type">Id Type:</label>
                                <input type="text" class="form-control" name="id_type" id="id_type" value="<?php if(!$user->id_type=="") echo $user->id_type; ?>" placeholder="Eg: Driver's License, Passport etc.">
                            </div>
                            <div class="form-group">
                                <label for="id_of">Relationship with Guardian:</label>
                                <input type="text" class="form-control" name="id_of" id="id_of" value="<?php if(!$user->id_of=="") echo $user->id_of; ?>" placeholder="Eg: Father, Mother...">
                            </div>
                            <div class="form-group">
                                <label for="id_contact">Guardian's Contact:</label>
                                <input type="text" class="form-control" name="id_contact" id="id_contact" value="<?php if(!$user->id_contact=="") echo $user->id_contact; ?>" placeholder="Eg: (+91) - 900xxxxxxx">
                            </div>
                            <div class="form-group">
                                <label for="id_type">Scan of ID:</label>
                                <button class="btn btn-info"><i class="fas fa-image"></i> <input type="file" name="id_image"></button>
                                <?php 
                                    if(!$user->id_image=""){
                                        echo "Old Scanned Image: <img src='".base_url()."assets/uploads/users/guardian_id/".$user->id_image."' width='50' height='50' />";
                                    }
                                ?>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-warning">Update Guardian's Details <i class="fas fa-paper-plane"></i></button>
                            </div>
                            </form>
                            </form>
                         <?php
                            }
                        }
                    ?>
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