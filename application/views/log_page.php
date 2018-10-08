<script>
    var page_name = "user_page";
</script>
<style>
    input{
        color: yellow !important;
    }
    inputactive{
        color: black;
    }
    input::placeholder{
        color: #fff !important;
        font-weight: bold;
    }
    input:focus{
        color: black !important;
    }
    .form-heading{
        font-size: 5vw;
        color: white;
    }
    .ajax-response{
        font-style: italic;
        color: white;
    }
</style>
<div class="section section-signup" style="background-image:url(<?php echo base_url(); ?>assets/frontend/img/sign_in.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-6 sign-in">
                <form id="loginForm" role="form" method="post" action="">
                  <div class="form-group">
                    <label class="form-heading" for="name">Login</label>
                  </div>	
                  <div class="form-group">
                    <label class="sr-only" for="name">user id or Email</label>
                    <input class="form-control" type="text" id="user_id" name="user_id" placeholder="user id or Email*" required="required" data-validation-required-message="Please enter your user name."/>
                    <p class="help-blk text-danger" id="err_lemail"></p>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="email">Password</label>
                    <input class="form-control" type="password" id="l_password" name="l_password" placeholder="Your password*" required="required" data-validation-required-message="Please enter your password"/>
                    <p class="help-blk text-danger" id="err_lpsw"></p>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="button" onclick="loginExpert();">Login</button>           <a href="<?php echo base_url()?>langExpert/forgotPassword">  
                    <button class="btn btn-block btn-round btn-d" type="button">Forgot Password</button> 
                     </a>  
                  </div>
                </form>
                <div class="ajax-response font-alt" id="loginResponse"></div>
            </div>
            <div class="col-md-6 sign-up">
                <form id="registerForm" role="form" method="post" action="">
                    <div class="form-group">
                        <label class="form-heading" for="name">Register</label>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="name">First Name</label>
                        <input class="form-control" type="text" id="first_name" name="first_name" placeholder="First Name*" required="required" data-validation-required-message="Please enter your first name." maxlength="50" />
                        <p class="help-blk text-danger" id="err_fname"></p>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="name">Last Name</label>
                        <input class="form-control" type="text" id="last_name" name="last_name" placeholder="Last Name" maxlength="50" />
                        <p class="help-blk text-danger" id="err_lname"></p>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="email">Email</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="Your Email*" required="required" maxlength="40" data-validation-required-message="Please enter your email address." />
                        <p class="help-blk text-danger" id="err_email"></p>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="email">Password</label>
                        <input class="form-control" type="password" id="password" name="password" placeholder="your password (minimum 6 characters) *" required="required" maxlength="25" data-validation-required-message="Please enter your email address." />
                        <p class="help-blk text-danger" id="err_psw"></p>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-block btn-round btn-d" id="regbtn" type="button" onclick="registerExpert();">Register</button>
                    </div>

                </form>
                <div class="ajax-response font-alt" id="registerResponse"></div>
            </div>
        </div>
    </div>
</div>