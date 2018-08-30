<!--main content start-->
<?php $this_user = $user[0]; ?>
<style>
    .tab-content{
        margin-top: -25px !important;
    }
</style>
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-user-circle"></i> Individual Profile</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#basic"><i class="fa fa-pencil"></i> Basic Info</a></li>
                  <li><a data-toggle="tab" href="#address"><i class="fa fa-map-marker"></i> Address</a></li>
                  <li><a data-toggle="tab" href="#business"><i class="fa fa-credit-card"></i> Business</a></li>
                  <li><a data-toggle="tab" href="#certificate"><i class="fa fa-certificate"></i> Certificate</a></li>
                  <li><a data-toggle="tab" href="#image"><i class="fa fa-picture-o"></i> Upload Image</a></li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
        <div class="row mt tab-pane fade in active" id="basic">
            <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-pencil"></i> Personal / Basic Details</h4>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url(); ?>camp_organiser/Iprofile/update_basic_details" autocomplete="off" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">First Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="fname" class="form-control" placeholder="Eg: Jhon" value="<?php if($this_user->first_name) echo $this_user->first_name; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Last Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="lname" class="form-control" placeholder="Eg: Doe" value="<?php if($this_user->last_name) echo $this_user->last_name; ?>">
<!--                    <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mobile</label>
                  <div class="col-sm-10">
                    <input type="text" name="contact" class="form-control" placeholder="Eg: +10987654321" value="<?php if($this_user->contact) echo $this_user->contact; ?>">
                    <span class="help-block">Please add the country code infront of your mobile number, like +91xxxxxxxxxx for india.</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Date of Birth</label>
                  <div class="col-sm-10">
                    <input type="date" name="dob" class="form-control" placeholder="dd/MM/YYYY" value="<?php if($this_user->dob == "0000-00-00"){} else {echo $this_user->dob; } ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Id and Id Number</label>
                  <div class="col-sm-10">
                    <input type="text" name="pid" class="form-control" placeholder="Eg: Passport (H43123...)" value="<?php if($this_user->p_id) echo $this_user->p_id; ?>">
                    <span class="help-block">Any govt issued identification like passport will work. Specigy the type of Id and its serial number in this format:<b>"Driver License (XT87631234)"</b>. </span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Passport / ID Scan</label>
                  <?php 
                    if($this_user->p_scan == ""){
                    ?>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="p_scan" />
                    <span class="help-block">This will help us in verifying your authenticity. Ps: image should be in jpg or png format and less than 1MB in size</span>
                  </div>
                  <?php
                    } else { ?>
                    <div class="col-sm-7">
                        <input type="file" class="form-control" name="p_scan" />
                        <span class="help-block">You have already uploaded the id</span>
                    </div>
                    <div class="col-sm-3">
                        <img class="img-thumbnail" src="<?php echo base_url() ?>assets/uploads/organisers/id_image/<?php echo $this_user->p_scan; ?>" />
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">&nbsp;</label>
                  <div class="col-sm-10">
                    <button class="btn btn-success"> Update Basic Details <i class="fa fa-check-circle"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--   End of basic form--------- address details start.     -->
        <div class="row mt tab-pane fade" id="address">
            <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-map-marker"></i> Address Details </h4>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url(); ?>camp_organiser/Iprofile/update_address" autocomplete="off">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Address</label>
                  <div class="col-sm-10">
                    <input type="text" name="hnum" class="form-control" placeholder="Eg: h-104,..." value="<?php if($this_user->add_street) echo $this_user->add_street; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">City</label>
                  <div class="col-sm-10">
                    <input type="text" name="city" class="form-control" placeholder="Eg: little city.." value="<?php if($this_user->add_city) echo $this_user->add_city; ?>">
<!--                    <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Zip / Postal Code</label>
                  <div class="col-sm-10">
                    <input type="text" name="zip" class="form-control" placeholder="Eg: 821357.." value="<?php if($this_user->add_postal) echo $this_user->add_postal; ?>">
                    <span class="help-block">Please add the country code infront of your mobile number, like +91xxxxxxxxxx for india.</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">State / Province</label>
                  <div class="col-sm-10">
                    <input type="text" name="state" class="form-control" placeholder="Eg: texas.." value="<?php if($this_user->add_state) echo $this_user->add_state; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Country</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="country">
                       <option value="">Select Country</option>
                        <?php 
                            foreach($country as $c){ ?>
                             <option value="<?php echo $c->countries_id; ?>" <?php if($c->countries_id == $this_user->add_country) echo "selected"; ?> ><?php echo $c->countries_name; ?></option>   
                        <?php
                            }
                        ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">&nbsp;</label>
                  <div class="col-sm-10">
                    <button class="btn btn-success"> Update Address Details <i class="fa fa-check-circle"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--   Enf of Address Details form //// Start of Business details     -->
        <div class="row mt tab-pane fade" id="business">
            <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-credit-card"></i> Business Details </h4>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url(); ?>camp_organiser/Iprofile/update_business" autocomplete="off" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Business Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="bname" class="form-control" placeholder="Eg: John and Sons.." value="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Business Description</label>
                  <div class="col-sm-10">
                    <textarea col="4" rows="5" class="form-control" name="bdesc" id="bdesc" placeholder="We started this camping facility to help passionate travellers enjoy the beauty of this hilly area......."></textarea>
                    <span class="help-block">Give us a little idea about your business. include mission and vision too if you have any.</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Website Address</label>
                  <div class="col-sm-10">
                    <input type="text" name="bweb" class="form-control" placeholder="www.abc.com" value="">
                    <span class="help-block">A genuine website assures the campers of your validity.</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Social Media Page</label>
                  <div class="col-sm-10">
                    <input type="text" name="bsocial" class="form-control" placeholder="url of instagram/facebook/blogspot profile" value="">
                    <span class="help-block">Any social media page where you regularly update about your camp.</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Certificate id</label>
                  <div class="col-sm-10">
                    <input type="text" name="certbody" class="form-control" placeholder="" value="">
                    <span class="help-block">Issued by which governing body.</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Certificate id</label>
                  <div class="col-sm-10">
                    <input type="text" name="bcertid" class="form-control" placeholder="" value="">
                    <span class="help-block">Certificate issued to your business by any governing body.</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Certificate Scan</label>
                  <div class="col-sm-10">
                    <input type="file" name="b_cert_scan" class="form-control" placeholder="" value="">
                    <span class="help-block">Scanned image of your certificate.</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">&nbsp;</label>
                  <div class="col-sm-10">
                    <button class="btn btn-success">Update Business Details <i class="fa fa-check-circle"></i> </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--    End of Business Form //// Start of certificates details    -->
        <div class="row mt tab-pane fade" id="certificate">
            <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-certificate"></i> Certificate Details </h4>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url(); ?>camp_organiser/Iprofile/" autocomplete="off">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Street / House Number</label>
                  <div class="col-sm-10">
                    <input type="text" name="fname" class="form-control" placeholder="Eg: Jhon" value="">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--    End of certificates Form //// Start of images details    -->
        <div class="row mt tab-pane fade" id="image">
            <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-certificate"></i> Certificate Details </h4>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url(); ?>camp_organiser/Iprofile/" autocomplete="off">
                <div class="form-group last">
                  <label class="control-label col-md-2">Your Image / Profile Pic </label>
                  <div class="col-md-10">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <?php 
                        $img="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image";
                        if($this_user->image){
                            $img = base_url()."assets/uploads/organisers/image/".$this_user->image;
                        }
                      ?>
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="<?php echo $img; ?>" alt="Organisers Image" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-theme02 btn-file">
                        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" class="default" id="profile_image"/>
                        </span>
                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                      </div>
                    </div>
                    <span class="label label-info">NOTE!</span>
                    <span>
                      Attached image thumbnail is
                      supported in Latest Firefox, Chrome, Opera,
                      Safari and Internet Explorer 10 only
                      </span>
                  </div>
                </div>
                
              </form>
            </div>
          </div>
        </div>
        </div>
    </section>
</section>
<script>
    CKEDITOR.plugins.addExternal( 'wordcount', '<?php echo base_url(); ?>assets/admin/lib/ckeditor/wordcount/', 'plugin.js' );
    CKEDITOR.replace( 'bdesc', {
        extraPlugins:   'wordcount',
        wordcount: {
                        showParagraphs: false,
                        showWordCount: false,
			            showCharCount: true,
			            maxCharCount: 400
			        }
    });
</script>