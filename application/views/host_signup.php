<script>
    var page_name = "host_signup";
</script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/intlTelInput.css">
<style>
    .page-header>.content{
        margin-top: 8%;
    }
.country-name{
    color: #000;
}
select.form-control:not([size]):not([multiple]) {
height: calc(2.25rem + 15px);
}
select.form-control>option{
    color: #000;
}
.intl-tel-input.allow-dropdown .flag-container{
    background-color: #fff;
    border-bottom-left-radius: 50%;
    border-top-left-radius: 50%;
}
.iti-flag {background-image: url("<?php echo base_url() ?>assets/images/flags.png");}
@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
  .iti-flag {background-image: url("<?php echo base_url() ?>assets/images/flags@2x.png");}
}
@keyframes lds-eclipse {
    0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
    }
    50% {
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
    }
    100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
    }
}
@-webkit-keyframes lds-eclipse {
    0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
    }
    50% {
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
    }
    100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
    }
}
.lds-eclipse {
    position: relative;
}
.lds-eclipse div {
    position: absolute;
    -webkit-animation: lds-eclipse 1s linear infinite;
    animation: lds-eclipse 1s linear infinite;
    width: 160px;
    height: 160px;
    top: 20px;
    left: 20px;
    border-radius: 50%;
    box-shadow: 0 4px 0 0 #1d0e0b;
    -webkit-transform-origin: 80px 82px;
    transform-origin: 80px 82px;
}
.lds-eclipse {
    width: 100px !important;
    height: 100px !important;
    -webkit-transform: translate(-50px, -50px) scale(0.5) translate(50px, 50px);
    transform: translate(-50px, -50px) scale(0.5) translate(50px, 50px);
}
</style>
<div class="page-header clear-filter" filter-color="">
    <div class="page-header-image" style="background-image:url(<?php echo base_url(); ?>assets/images/su_bg.jpg)"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
            <form class="form" method="" action="">
              <div class="card-body" style="background:rgb(233,114,49,0.7);">
                <div class="input-group input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="First Name..." name="fname" id="fname" required />
                </div>
                <div class="input-group input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="text" placeholder="Last Name..." class="form-control" name="lname" id="lname" />
                </div>
                <div class="input-group input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons ui-1_email-85"></i>
                    </span>
                  </div>
                  <input type="email" placeholder="Email id..." class="form-control" name="email" id="mail" />
                </div>
                <div class="input-group input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons objects_key-25"></i>
                    </span>
                  </div>
                  <input type="password" placeholder="Secret Password.." class="form-control" name="pass" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
                </div>
                <div class="input-group input-lg">
                  <input type="tel" placeholder="Mobile number" class="form-control" name="num" id="phn" />
                </div>
                <div class="input-group input-lg">
                  <select name="type" name="btype" id="btype" class="form-control" required>
                       <option value="">You're ?</option>
                       <option value="1">An Individual</option>
                       <option value="2">A Business</option>
                   </select>
                </div>
                <div id="sys_alert" style="font-size:12px;font-style:italic;color:white;">      
                </div>
                <div id="message" style="display:none; font-size:10px;">
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
              <div class="card-footer text-center">
                <button type="button" class="btn btn-primary btn-round btn-lg btn-block" onclick="verify_signup()">Get Started</button>
                <div class="pull-left">
                  <h6>
                    <a href="<?php echo base_url() ?>camp_organiser/Dashboard/login" class="link">Host Login</a>
                  </h6>
                </div>
                <div class="pull-right">
                  <h6>
                    <a href="javascript:history.back()" class="link">Go Back</a>
                  </h6>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<script>
    document.querySelector('body').classList.add("login-page");
</script>