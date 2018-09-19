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
                        <i class="fa fa-camera"></i> Upload Camp Image
                        <input id="mulImages" type="file" class="upbtn" name="camp_image" accept="image/*"/>
                        <input type="hidden" name="camp_id" value="<?php echo $camp_id; ?>" />
                    </div>
                    <span class="help-block">*Instructions:<br/>
                        1. Please Upload only image files. Accepted file formats are *.jpg, *.png etc. <br/>
                        2. Try to upload good resolution images with size less than 1 MB. <br/>
                        3. Images with other campers doing some activity gets more attention. <br/>
                    </span>
                  </form> 
                </div>
            </div>
            <!-- /col-lg-6 -->
        </div>
        <!--/ row -->
        <div class="row mt">
            <div class="col-lg-12">
                <div class="white-panel pn" style="overflow:auto; height:auto;">
                    <div class="panel-heading">
                        <?php
                            if(is_array($images)) { 
                            foreach($images as $i) { ?>
                                <div class="col-lg-3 col-xs-12 col-sm-12 camp_images">
                                    <img src="<?php echo base_url() ?>assets/uploads/organisers/camp_images/<?php echo $i->name; ?>" class="img-thumbnail" height="100"/>
                                    <a class="btn btn-danger btn-xs confirmation" title="delete this image" href="<?php echo base_url() ?>camp_organiser/Camps/deleteimage/<?php echo $i->id; ?>/<?php echo $camp_id; ?>"><i class="fa fa-trash"></i></a>
                                </div>
                        <?php
                            }
                            } else { ?>
                            <div style="text-align:center; margin-top:10%;">You haven't uploaded any images for this camp yet!</div>
                        <?php  
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /wrapper -->
</section>