<!--main content start-->
<?php $this_user = $user[0]; ?>
<style>
    .tab-content{
        margin-top: -25px !important;
    }
</style>
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-user-circle"></i> Organiser/Partner's Profile</h3>
        <a href="<?php echo base_url(); ?>camp_admin/Organisers" class="btn btn-warning btn-xs"><i class="fa fa-chevron-left"></i> Back to organiser's list</a> <?php 
            if($this_user->status=='1'){
                echo '<a href="'.base_url().'camp_admin/Organisers/change_status/'.$this_user->id.'/0" class="btn btn-danger btn-xs"><i class="fa fa-ban"></i> Disable this account</a>';
            } else {
                echo '<a href="'.base_url().'camp_admin/Organisers/change_status/'.$this_user->id.'/1" class="btn btn-info btn-xs"><i class="fa fa-thumbs-o-up"></i> Approve this account</a>';
            }
        ?>
        <div class="row mt">
            <div class="col-lg-12">
                <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#basic"><i class="fa fa-pencil"></i>Basic Info</a></li>
                  <li><a data-toggle="tab" href="#address"><i class="fa fa-map-marker"></i>Address Details</a></li>
                  <li><a data-toggle="tab" href="#business"><i class="fa fa-credit-card"></i>Business Details</a></li>
                  <li><a data-toggle="tab" href="#image"><i class="fa fa-picture-o"></i> Buiness Images</a></li>
                  <?php 
                    if($this_user->is_owner=='0'){ ?>
                        <li><a data-toggle="tab" href="#bown"><i class="fa fa-info-circle"></i> Business Owner Details </a></li>
                 <?php
                    }
                    ?>
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
<!--                    <button class="btn btn-success"> Update Basic Details <i class="fa fa-check-circle"></i></button>-->
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
<!--                    <button class="btn btn-success"> Update Address Details <i class="fa fa-check-circle"></i></button>-->
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
                    <input type="text" name="bname" class="form-control" placeholder="Eg: John and Sons.." value="<?php if($this_user->b_name) echo $this_user->b_name; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Business Description</label>
                  <div class="col-sm-10">
                    <textarea col="4" rows="5" class="form-control" name="bdesc" id="bdesc" placeholder="We started this camping facility to help passionate travellers enjoy the beauty of this hilly area......."><?php if($this_user->b_desc) echo htmlentities($this_user->b_desc); ?></textarea>
                    <span class="help-block">Give us a little idea about your business. include mission and vision too if you have any.</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Website Address</label>
                  <div class="col-sm-10">
                    <input type="text" name="bweb" class="form-control" placeholder="www.abc.com" value="<?php if($this_user->b_website) echo $this_user->b_website; ?>">
                    <span class="help-block">A genuine website assures the campers of your validity.</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Social Media Page</label>
                  <div class="col-sm-10">
                    <input type="text" name="bsocial" class="form-control" placeholder="url of instagram/facebook/blogspot profile" value="<?php if($this_user->b_social) echo $this_user->b_social; ?>">
                    <span class="help-block">Any social media page where you regularly update about your camp.</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Certificate id</label>
                  <div class="col-sm-10">
                    <input type="text" name="certbody" class="form-control" placeholder="" value="<?php if($this_user->b_cert_id) echo $this_user->b_cert_id; ?>">
                    <span class="help-block">Issued by which governing body.</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Certificate issued by</label>
                  <div class="col-sm-10">
                    <input type="text" name="bcertid" class="form-control" placeholder="" value="<?php if($this_user->b_cert_body) echo $this_user->b_cert_body; ?>">
                    <span class="help-block">Certificate issued to your business by any governing body.</span>
                  </div>
                </div>
                <div class="form-group">
                 <?php 
                        if($this_user->b_cert_scan==""){
                    ?>
                  <label class="col-sm-2 col-sm-2 control-label">Certificate Scan</label>
                  <div class="col-sm-10">
                    <input type="file" name="b_cert_scan" class="form-control" placeholder="" value="">
                    <span class="help-block">Scanned image of your certificate.</span>
                  </div>
                  <?php
                        } else {
                    ?>
                  <label class="col-sm-2 col-sm-2 control-label">Certificate Scan</label>
                  <div class="col-sm-7">
                    <input type="file" name="b_cert_scan" class="form-control" placeholder="" value="">
                    <span class="help-block">You have already uploaded a scanned document</span>
                  </div>
                  <div class="col-sm-3">
                      <img class="img-thumbnail" src="<?php echo base_url() ?>assets/uploads/organisers/b_certs/<?php echo $this_user->b_cert_scan; ?>"/>
                  </div>
                  <?php } ?>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">&nbsp;</label>
                  <div class="col-sm-10">
<!--                    <button class="btn btn-success">Update Business Details <i class="fa fa-check-circle"></i> </button>-->
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--    End of Business Form //// Start of images details    -->
        <div class="row mt tab-pane fade" id="image">
            <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-picture-o"></i> Upload and Manage Images </h4>
              <form class="form-horizontal style-form" id="imageform" method="post" action="<?php echo base_url(); ?>camp_organiser/Iprofile/uploadImage" autocomplete="off" enctype="multipart/form-data">
                <div class="form-group last">
                  <label class="control-label col-md-3">Your Image / Profile Pic </label>
                  <?php 
                        $img="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image";
                        if($this_user->image){
                            $img = base_url()."assets/uploads/organisers/pro_image/".$this_user->image; 
                        }
                ?>
                    <div class="col-md-9">
                        <div id='preview'>
                        <img class="img-thumbnail" src="<?php echo $img; ?>" width="150" height="200">	
                        </div>	
<!--
                        <div id='imageloadbutton' style="margin-bottom: 5px;">	
                            <label>Add New Profile Image:</label><br/>
                            <input id="photoimg" name="photoimg" type="file" class="inputFile" accept="image/*" />
                        </div>	
                        <button class="btn btn-primary"><i class="fa fa-upload"></i> Upload Profile Image</button>
-->
                    </div>
                  </div>
              </form>
              <form class="form-horizontal style-form" id="imageform" method="post" action="<?php echo base_url(); ?>camp_organiser/Iprofile/uploadFeaturedImage" autocomplete="off" enctype="multipart/form-data">
                <div class="form-group last">
                  <label class="control-label col-md-3">Your Business's Featured image </label>
                  <?php 
                        $img2="http://www.placehold.it/400x350/EFEFEF/AAAAAA&text=Your+Business's+Image+here";
                        if($this_user->b_photo){
                            $img2 = base_url()."assets/uploads/organisers/featured/".$this_user->b_photo; 
                        }
                ?>
                    <div class="col-md-9">
                        <img class="img-thumbnail" src="<?php echo $img2; ?>" width="350" height="400">	
<!--
                        <div id='imageloadbutton' style="margin-bottom: 5px;">	
                            <label>Add New Featured Image (Try good resolution images):</label><br/>
                            <input name="bphoto" type="file" class="inputFile" />
                        </div>	
                        <button class="btn btn-primary"><i class="fa fa-upload"></i> Upload Featured Image</button>
-->
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
        <?php 
            if($this_user->is_owner == '0'){ ?>
               
        <!--   business owner details form     -->
        <div class="row mt tab-pane fade" id="bown">
            <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-info-circle"></i> Business Owner's Details </h4>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url(); ?>camp_organiser/Iprofile/change_ownership" autocomplete="off" name="check_owner">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Do you own this business? </label>
                  <div class="col-sm-10">
                    <select class="form-control" name="is_owner" disabled>
                        <option value="">Select</option>
                        <option value="1" <?php if($this_user->is_owner == "1") echo "selected"; ?> >Yes</option>
                        <option value="0" <?php if($this_user->is_owner == "0") echo "selected"; ?> >No [I will fill up the owner's details]</option>
                    </select>
<!--                    <noscript><button type="submit" class="btn btn-info"><i class="fa fa-save"></i>Save</button></noscript>-->
                  </div>
                </div>
              </form>
              <?php 
                if($this_user->is_owner == "0"){ 
              ?>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url(); ?>camp_organiser/Iprofile/owner_details" autocomplete="off" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Owner's Full Name </label>
                  <div class="col-sm-10">
                    <input type="text" name="own_fn" class="form-control" placeholder="Eg: Chandler Muriel Bing.." value="<?php if($this_user->owner_name) echo $this_user->owner_name; ?>" required />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Owner's Email </label>
                  <div class="col-sm-10">
                    <input type="email" name="own_email" class="form-control" placeholder="Eg: yourcampsite@camp.com" value="<?php if($this_user->owner_email) echo $this_user->owner_email; ?>" required />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Owner's Contact </label>
                  <div class="col-sm-10">
                    <input type="text" name="own_con" class="form-control" placeholder="Eg: (country code) number" value="<?php if($this_user->owner_contact) echo $this_user->owner_contact; ?>" required />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Owner's Identification </label>
                  <div class="col-sm-10">
                    <input type="text" name="own_id" class="form-control" placeholder="Eg: Id Number (Id Type)" value="<?php if($this_user->owner_card) echo $this_user->owner_card; ?>" required />
                    <span class="help-block">Mention id number and id type in this format: "HZ100934 (Passport)"</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Scanned Copy of Identity card </label>
                  <div class="col-sm-10">
                    <?php 
                        if($this_user->owner_card_image){
                            echo "<img src='".base_url()."assets/uploads/organisers/owner_id/".$this_user->owner_card_image."' width='300' alt='Owners ID Scanned Image' /> <br/> You have already uploaded the image, Update a new one only if there is any errors in this scanned image. <br/>";
                        } 
                    ?>
                    <input type="file" name="own_image" class="form-control" placeholder="Eg: Id Number (Id Type)" accept="image/*" required />
                    <span class="help-block">Please upload image file. size limit: < 1MB </span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">&nbsp;</label>
                  <div class="col-sm-10">
<!--                    <button type="submit" class="btn btn-success">Update Owner's Detail <i class="fa fa-check-circle"></i></button>-->
                  </div>
                </div>
              </form>
              
               <?php        
                }
                ?>
            </div>
          </div>
        </div>
           
        <?php                
            }
        ?>
            
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