<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Add New Camp</h3>
        <div class="row mt">
            <!--  DATE PICKERS -->
            <div class="col-lg-12">
                <div class="form-panel">
                    <form action="#" class="form-horizontal style-form">
                        <div class="form-group">
                            <label class="control-label col-md-3">Country</label>
                            <div class="col-md-4 col-xs-11">
                                <select class="form-control select2" name="countryid" required>
                                   <option value="">Select Camp country</option>
                                    <?php 
                                        foreach($countries as $c){ ?>
                                            <option value="<?php echo $c->countries_id; ?>"><?php echo $c->countries_name; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <span class="help-block">Help: Select the country where your camp is getting organised</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Select Main Language</label>
                            <div class="col-md-4 col-xs-11">
                                <select class="form-control select2" name="langid" required>
                                   <option value="">Camp's Main Language</option>
                                    <?php 
                                        foreach($languages as $l){ ?>
                                            <option value="<?php echo $l->id; ?>"><?php echo $l->name."(".$l->nativeName.")"; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <span class="help-block">Help: Select the language which is mainly used for giving instruction and communication</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Select Other Language(s)</label>
                            <div class="col-md-4 col-xs-11">
                                <select class="form-control select2" name="langs[]" multiple="multiple" required>
                                   <option value="">Camp's Other Language</option>
                                    <?php 
                                        foreach($languages as $l){ ?>
                                            <option value="<?php echo $l->id; ?>"><?php echo $l->name."(".$l->nativeName.")"; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <span class="help-block">Help: Select other spoken language(s) if there are any</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Camp's Location</label>
                            <div class="col-md-4 col-xs-11">
                                
                            </div>
                            <div class="col-md-4">
                                <span class="help-block">Help: Select other spoken language(s) if there are any</span>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /form-panel -->
            </div>
            <!-- /col-lg-12 -->
        </div>
    </section>
</section>