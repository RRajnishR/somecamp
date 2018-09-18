<style>
    div.file {
      position: relative;
      overflow: hidden;
    }
    input.upbtn {
      position: absolute;
      font-size: 50px;
      opacity: 0;
      right: 0;
      top: 0;
    }
</style>
<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h3><i class="fa fa-th-large"></i> Manage Your Camp's Images</h3>
                <!--  BASIC PROGRESS BARS -->
                <div class="showback">
                  <?php echo $error;?> 
                  <form id="imageForm" method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>camp_organiser/Camps/uploadImage">
                     <div class="file btn btn-lg btn-primary">
                        <i class="fa fa-camera"></i> Upload Images
                        <input id="mulImages" type="file" class="upbtn" name="images" accept="image/*" multiple />
                    </div>
                  </form> 
                </div>
            </div>
            <!-- /col-lg-6 -->
        </div>
        <!--/ row -->
        <div class="row mt">
            <div class="col-lg-12">
                <div class="white-panel pn">
                    <div class="panel-heading">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /wrapper -->
</section>