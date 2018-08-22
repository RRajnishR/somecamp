<script>
    var page_name = "host_signup";
</script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/intlTelInput.css">
<style>
    body{
        background-image: url('<?php echo base_url(); ?>assets/images/su_bg.jpg');
        -webkit-background-size: 100%;
        -moz-background-size: 100%;
        -o-background-size: 100%;
        background-size: 100%;
        background-position: 0% 0%;  Center the image 
        background-repeat: repeat;
    }
    html{
        height: 100%;
    }
    h1{
        font-size: 5vh;
    }
    .iti-flag {background-image: url("<?php echo base_url() ?>assets/images/flags.png");}
    @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
      .iti-flag {background-image: url("<?php echo base_url() ?>assets/images/flags@2x.png");}
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-1">&nbsp;</div>
        <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12 signupform">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <form class="sform" method="post" autocomplete="off">
                       <input type='text' name="fname" id="fname" class="form-control" placeholder='First Name' title="First Name required. Eg. 'John'" required />
                       <input type='text' name="lname" id="lname" class="form-control" placeholder='Last Name' title="Last Name required. Eg. 'Doe'" required />
                       <input type='email' name="email" id="mail" class="form-control" placeholder='Email' required />
                       <input type='password' name="pass" id="psw" class="form-control" placeholder='Password' pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
                       <input type='tel' name="num" id="phn" class="form-control" placeholder='Mobile number'  />
                       <select name="type" name="btype" id="btype" class="form-control" required>
                           <option value="">You're ?</option>
                           <option value="1">An Individual</option>
                           <option value="2">A Business</option>
                       </select>
                       <button type="button" class="btn btn-success form-control" onclick="verify_signup()">Sign up</button>
                     </form>
                </div>
                <div class="col-sm-6">
                    <div class='whysign'>
                        <div id="sys_alert" style="font-size:12px;font-style:italic;background:red;color:white;">
                            
                        </div>
                        <h1><a href="<?php echo base_url(); ?>">List Your Camps</a></h1>
                        <p>We help you in getting your camps information to large user base all over the world</p>
                        <hr/>
                        <div id="message" style="display:none;">
                          <p>** Password must contain the following:</p>
                          <p id="letter">A <b>lowercase</b> letter</p>
                          <p id="capital">A <b>capital (uppercase)</b> letter</p>
                          <p id="number">A <b>number</b></p>
                          <p id="length">Minimum <b>8 characters</b></p>
                        </div>
                        <div class="lds-css ng-scope">
                            <div id="loading" style="width:100%;height:100%;display:none;" class="lds-eclipse">
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row lower_row">
                <div class="col-sm-6 col-xs-12 lower_div">
                    <p>Already have an account? <a href="<?php echo base_url() ?>Hostsignup/login" style="">Login Here</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-1">&nbsp;</div>
        <!--    Adding new row now    -->
    </div>
</div>