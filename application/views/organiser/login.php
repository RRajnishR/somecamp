<style>
    #lgt{
        display: none;
    }
</style>
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Camp Organisers Login Here</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <form class="form-horizontal" role="form" method="post" action="<?php echo base_url()?>camp_organiser/Dashboard/loginValidate">
                    <?php if(!empty($error)) { ?>	
					<div class="form-group">					  
					  <div class="col-lg-10">
					    <p class="help-block"><p style="color:#F83A18"><?php echo $error;?></p></p>
					  </div>
				    </div>					
					<?php } ?>
					<div class="form-group">
					  <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">User Name</label>
					  <div class="col-lg-10">
						  <input type="text" required="true" class="form-control" name="user_name" id="user_name" placeholder="user name" value="<?php echo set_value("user_name"); ?>" maxlength="35">
						  <p class="help-block"><?php echo form_error('user_name','<p style="color:#F83A18">','</p>'); ?></p>
					  </div>
				    </div>					
					<div class="form-group">
					  <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Password</label>
					  <div class="col-lg-10">
						  <input type="password" required="true" class="form-control" name="password" id="password" placeholder="password" value="" maxlength="25">
						  <p class="help-block"><?php echo form_error('password','<p style="color:#F83A18">','</p>'); ?></p>
					  </div>
				    </div>					
										
				    <div class="form-group">
					  <div class="col-lg-offset-2 col-lg-10">
						  <button type="submit" class="btn btn-danger">Login</button>
						  <a href="<?php echo base_url();?>camp_organiser/Dashboard/forgotPassword">forgot password?</a>
					  </div>
				    </div>
			  </form>
            </div>
        </div>
    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->