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
                </ul>
            </div>
        </div>
        <div class="tab-content">
        <div class="row mt tab-pane fade in active" id="basic">
            <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-pencil"></i> Personal / Basic Details</h4>
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url(); ?>camp_organiser/Iprofile/update_basic_details" autocomplete="off">
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
                  <label class="col-sm-2 col-sm-2 control-label">Passport / ID Number</label>
                  <div class="col-sm-10">
                    <input type="text" name="pid" class="form-control" placeholder="Eg: 3115....." value="<?php if($this_user->p_id) echo $this_user->p_id; ?>">
                    <span class="help-block">Any govt issued identification like passport will work.</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Passport / ID Scan</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="p_scan" />
                    <span class="help-block">This will help us in verifying your authenticity.</span>
                  </div>
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
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url(); ?>camp_organiser/Iprofile/" autocomplete="off">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Street / House Number</label>
                  <div class="col-sm-10">
                    <input type="text" name="fname" class="form-control" placeholder="Eg: Jhon" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">City</label>
                  <div class="col-sm-10">
                    <input type="text" name="lname" class="form-control" placeholder="Eg: Doe" value="">
<!--                    <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Zip / Postal Code</label>
                  <div class="col-sm-10">
                    <input type="text" name="contact" class="form-control" placeholder="Eg: +10987654321" value="">
                    <span class="help-block">Please add the country code infront of your mobile number, like +91xxxxxxxxxx for india.</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">State / Province</label>
                  <div class="col-sm-10">
                    <input type="text" name="contact" class="form-control" placeholder="Eg: +10987654321" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Country</label>
                  <div class="col-sm-10">
                    <select class="form-control">
                       <option value="">Select Country</option>
                        <?php 
                            foreach($country as $c){ ?>
                             <option value="<?php echo $c->countries_id; ?>"><?php echo $c->countries_name; ?></option>   
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
              <form class="form-horizontal style-form" method="post" action="<?php echo base_url(); ?>camp_organiser/Iprofile/" autocomplete="off">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Business Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="fname" class="form-control" placeholder="Eg: Jhon" value="">
                  </div>
                </div>
                <div class="form-group last">
                  <label class="control-label col-md-3">Business Image / Logo </label>
                  <div class="col-md-9">
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
                        <input type="file" class="default" name="image"/>
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
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Business Description</label>
                  <div class="col-sm-10">
                    <textarea col="4" rows="5" class="form-control" name="bdesc" id="bdesc"></textarea>
                    <span class="help-block">Give us a little idea about your business. include mission and vision too if you have any.</span>
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
        </div>
    </section>
</section>
<script>
    CKEDITOR.replace( 'bdesc' );
</script>