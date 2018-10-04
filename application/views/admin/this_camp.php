<?php $this_camp = $camp[0]; ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <a href="<?php echo base_url(); ?>camp_admin/Camps" class="btn btn-warning btn-xs"><i class="fa fa-chevron-left"></i> Back to Camp list</a> <?php 
            $check_status_of_organiser = $this->My_model->selectRecord('organisers', array('status'), array('id' => $this_camp->organiser_id));
            if($check_status_of_organiser[0]->status == "1"){
                if($this_camp->status=='1'){
                    echo '<a href="'.base_url().'camp_admin/Camps/change_status/'.$this_camp->camp_id.'/0" class="btn btn-danger btn-xs"><i class="fa fa-ban"></i> Disable this Camp</a>';
                } else {
                    echo '<a href="'.base_url().'camp_admin/Camps/change_status/'.$this_camp->camp_id.'/1" class="btn btn-info btn-xs"><i class="fa fa-thumbs-o-up"></i> Approve this Camp</a>';
                }
            } else {
                echo '
                    <div class="alert alert-success">
                      <strong>Sorry!</strong> You can not approve this camp till its organiser\'s status is not approved. <a href="'.base_url().'camp_admin/Organisers/change_status/'.$this_camp->organiser_id.'/1" class="btn btn-info btn-xs"><i class="fa fa-thumbs-o-up"></i> Approve Organiser\'s account</a>
                    </div>
                ';
            }
        ?>
            <div class="col-lg-12">
                <div class="form-panel">
                    <h3><i class="fa fa-angle-right"></i> Content of this camp</h3>
                    <form action="#" class="form-horizontal style-form" method="post">
                        <div class="form-group">
                            <label class="control-label col-md-3">Country</label>
                            <div class="col-md-8 col-xs-11" >
                                <input type="hidden" name="camp_id" value="<?php echo $camp_id; ?>">
                                <select class="form-control select2" name="countryid" required >
                                   <option value="">Select Camp country</option>
                                    <?php 
                                        foreach($countries as $c){ ?>
                                            <option value="<?php echo $c->countries_id; ?>" <?php if($this_camp->country_id == $c->countries_id) echo "selected"; ?> ><?php echo $c->countries_name; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Select Main Language</label>
                            <div class="col-md-8 col-xs-11">
                                <select class="form-control select2" name="langid" required>
                                   <option value="">Camp's Main Language</option>
                                    <?php 
                                        foreach($languages as $l){ ?>
                                            <option value="<?php echo $l->id; ?>" <?php if( $this_camp->main_lang == $l->id ) echo "selected"; ?> ><?php echo $l->name."(".$l->nativeName.")"; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Select Other Language(s)</label>
                            <div class="col-md-8 col-xs-11">
                                <select class="form-control select2" name="langs[]" multiple="multiple" required>
                                   <option value="">Camp's Other Language</option>
                                    <?php 
                                        foreach($languages as $l){ ?>
                                            <option value="<?php echo $l->id; ?>" <?php if( in_array($l->id, explode(',', $this_camp->other_lang)) ) echo "selected"; ?> ><?php echo $l->name."(".$l->nativeName.")"; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Camp's Location</label>
                            <div class="col-md-8 col-xs-11">
                                <input type="text" class="form-control" name="camp_address" placeholder="Camp's Full Address here" value="<?php if(!$this_camp->address=="") echo $this_camp->address; ?>" > <br/>
                                <input type="text" class="form-control" name="latlong" placeholder="Latitude, Longitude Eg: (28.566174,77.230777)" value="<?php if(!$this_camp->lot_long=="") echo $this_camp->lot_long; ?>" /> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Camp's Duration</label>
                            <div class="col-md-8 col-xs-11">
                                 <select name="duration" id="duration" class="form-control select2">
                                     <option value="2">2 days / 1 nights</option>
                                     <option value="3">3 days / 2 nights</option>
                                     <option value="4">4 days / 3 nights</option>
                                     <option value="5">5 days / 4 nights</option>
                                     <option value="6">6 days / 5 nights</option>
                                     <option value="7">7 days / 6 nights</option>
                                     <option value="8">8 days / 7 nights</option>
                                     <option value="9">9 days / 8 nights</option>
                                     <option value="10">10 days / 9 nights</option>
                                     <option value="11">11 days / 10 nights</option>
                                     <option value="12">12 days / 11 nights</option>
                                     <option value="13">13 days / 12 nights</option>
                                     <option value="14">14 days / 13 nights</option>
                                     <option value="15">15 days / 14 nights</option>
                                     <option value="16">16 days / 15 nights</option>
                                     <option value="17">17 days / 16 nights</option>
                                     <option value="18">18 days / 17 nights</option>
                                     <option value="19">19 days / 18 nights</option>
                                     <option value="20">20 days / 19 nights</option>
                                     <option value="21">21 days / 20 nights</option>
                                     <option value="22">22 days / 21 nights</option>
                                     <option value="23">23 days / 22 nights</option>
                                     <option value="24">24 days / 23 nights</option>
                                     <option value="25">25 days / 24 nights</option>
                                     <option value="26">26 days / 25 nights</option>
                                     <option value="27">27 days / 26 nights</option>
                                     <option value="28">28 days / 27 nights</option>
                                     <option value="29">29 days / 28 nights</option>
                                     <option value="30">30 days / 29 nights</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Accomodation Facilities</label>
                            <div class="col-md-8 col-xs-11"> &nbsp;&nbsp;
                                <?php 
                                    foreach($facilities as $f){ ?>
                                    <label class="checkbox-inline">
                                      <input type="checkbox" name="facilities[]" value="<?php echo $f->id; ?>" <?php if( in_array($f->id, explode(',', $this_camp->facilities)) ) echo "checked"; ?> ><?php echo $f->facilityname; ?>
                                    </label>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Camp's type</label>
                            <div class="col-md-8 col-xs-11">
                                <select class="form-control select2" name="ctype[]" multiple="multiple" required>
                                    <option>Select camp type(s)</option>
                                    <?php 
                                        foreach($camp_type as $ct){ ?>
                                            <option value="<?php echo $ct->id; ?>" <?php if( in_array($ct->id, explode(',', $this_camp->camp_type)) ) echo "selected"; ?> ><?php echo $ct->ctype; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Suitable for</label>
                            <div class="col-md-8 col-xs-11">
                                <select class="form-control select2" name="camp_for[]" multiple="multiple" required>
                                    <option>Select camp type(s)</option>
                                    <?php 
                                        foreach($camp_for as $cf){ ?>
                                            <option value="<?php echo $cf->id; ?>" title="<?php echo $cf->small_desc; ?>" <?php if( in_array($cf->id, explode(',', $this_camp->camp_for)) ) echo "selected"; ?> ><?php echo $cf->name; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Title Of Camp</label>
                            <div class="col-md-8 col-xs-11">
                               <input class="form-control" name="title" placeholder="4 Days camping retreat at River Way Ranch Camp" value="<?php if(!$this_camp->title == "") echo $this_camp->title; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Introduction of camp</label>
                            <div class="col-md-8 col-xs-11">
                               <textarea class="form-control" name="intro" rows="8"><?php if(!$this_camp->intro == "") echo $this_camp->intro; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Currency:</label>
                            <div class="col-md-8 col-xs-11">
                               <select id="currency" name="currency" class="form-control select2" required> 
                                   <option value="">Select currency</option> 
                                   <option value="AUD">AUD - Australian Dollar</option>
                                   <option value="CAD">CAD - Canadian Dollar</option>
                                   <option value="EUR">EUR - Euro</option>
                                   <option value="GBP">GBP - British Pound</option>
                                   <option value="USD">USD - United States Dollar</option>
                                   <option value="BRL">BRL - Brazilian Real</option>
                                   <option value="CHF">CHF - Swiss Franc</option>
                                   <option value="CNY">CNY - Chinese Renminbi Yuan</option>
                                   <option value="CZK">CZK - Czech Koruna</option>
                                   <option value="DKK">DKK - Danish Krone</option>
                                   <option value="HKD">HKD - Hong Kong Dollar</option>
                                   <option value="IDR">IDR - Indonesian Rupiah</option>
                                   <option value="ILS">ILS - Israeli New Sheqel</option>
                                   <option value="INR">INR - Indian Rupee</option>
                                   <option value="JPY">JPY - Japanese Yen</option>
                                   <option value="KRW">KRW - South Korean Won</option>
                                   <option value="MXN">MXN - Mexican Peso</option>
                                   <option value="MYR">MYR - Malaysian Ringgit</option>
                                   <option value="NOK">NOK - Norwegian Krone</option>
                                   <option value="NZD">NZD - New Zealand Dollar</option>
                                   <option value="PHP">PHP - Philippine Peso</option>
                                   <option value="PLN">PLN - Polish Złoty</option>
                                   <option value="RUB">RUB - Russian Ruble</option>
                                   <option value="SEK">SEK - Swedish Krona</option>
                                   <option value="SGD">SGD - Singapore Dollar</option>
                                   <option value="THB">THB - Thai Baht</option>
                                   <option value="TRY">TRY - Turkish Lira</option>
                                   <option value="ZAR">ZAR - South Africa, Rand</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nearest Airport</label>
                            <div class="col-md-8 col-xs-11">
                               <input type="text" name="airport_name" class="form-control" placeholder="Indra Gandhi International Airport, Delhi" value="<?php echo $this_camp->near_airport; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Pickup Option</label>
                            <div class="col-md-8 col-xs-11">
                               <select class="form-control" id="po" name="pickup_option" onchange="show_another_input(this.value)">
                                   <option value="">Select</option>
                                   <option value="1">We will pick up the guests from this airport free of charge</option>
                                   <option value="2">We can pick up the guests at additional costs from this airport</option>
                                   <option value="3">The guests have to arrange their own transport from this airport</option>
                               </select> <br/>
                               <input id="option2" placeholder="Pickup cost per person" type="number" name="pick_with_cost" class="form-control" <?php if($this_camp->pickup_service == "3") echo "style='display:none;'"; ?> value="<?php if(!$this_camp->pickup_cost=="") echo $this_camp->pickup_cost; ?>"/>
                               <textarea id="option3" class="form-control" name="camp_direction" placeholder="Eg: Guests will have to take bus number 15 from airport to Kualalumpur......." rows="7" <?php if($this_camp->pickup_service == "2") echo "style='display:none;'" ?> ><?php if(!$this_camp->camp_direction=="") echo $this_camp->camp_direction; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Included Meals</label>
                            <div class="col-md-8 col-xs-11">
                               <select class="form-control select2" id="ml_list" name="meal_list[]" multiple="multiple">
                                   <option value=""></option>
                                   <?php 
                                        foreach($meals as $ml){ ?>
                                            <option value="<?php echo $ml->id; ?>" <?php if(in_array($ml->id, explode(',',$this_camp->meal_list))) echo "selected"; ?> ><?php echo $ml->meal_type; ?></option>
                                    <?php
                                        }
                                    ?>
                               </select><br/>
                               <input type="checkbox" id="inc_food" class="form-check-input" name="included_food" value="0" <?php if($this_camp->inc_meal =="0") echo "checked"; ?> > No Meals Included
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Supported Food Types</label>
                            <div class="col-md-8 col-xs-11">
                               <select class="form-control select2" name="ftype[]" multiple="multiple">
                                   <option value=""></option>
                                   <?php 
                                        foreach($food_type as $fd){ ?>
                                            <option value="<?php echo $fd->id; ?>" <?php if(in_array($fd->id, explode(',', $this_camp->food_type))) echo "selected"; ?> ><?php echo $fd->food_type; ?></option>
                                    <?php
                                        }
                                    ?>
                               </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Included Drinks</label>
                            <div class="col-md-8 col-xs-11">
                               <select class="form-control select2" id="dl" name="drink_list[]" multiple="multiple">
                                   <option value=""></option>
                                   <?php 
                                        foreach($drink_type as $dt){ ?>
                                            <option value="<?php echo $dt->id; ?>" <?php if(in_array($dt->id, explode(',', $this_camp->drink_list))) echo "selected"; ?>  ><?php echo $dt->drink_type; ?></option>
                                    <?php
                                        }
                                    ?>
                               </select><br/>
                               <input type="checkbox" id="drnk" class="form-check-input" name="included_drinks" value="0" <?php if($this_camp->inc_drink =="0") echo "checked"; ?> > No Drinks Included
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Program /Itenerary</label>
                            <div class="col-md-8 col-xs-11">
                               <textarea class="form-control" name="program" placeholder="List all the activities covered during the camp"><?php if(!$this_camp->itinerary=="") echo $this_camp->itinerary; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">What's Included</label>
                            <div class="col-md-8 col-xs-11">
                               <textarea class="form-control" name="included" placeholder="Wifi, toiletries..."><?php if(!$this_camp->included=="") echo $this_camp->included; ?></textarea>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">What's not Included</label>
                            <div class="col-md-8 col-xs-11">
                               <textarea class="form-control" name="notincluded" placeholder="Medicine, Alcohol"><?php if(!$this_camp->noincluded=="") echo $this_camp->noincluded; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Things to do</label>
                            <div class="col-md-8 col-xs-11">
                               <textarea class="form-control" name="things_to_do"><?php if(!$this_camp->things_to_do=="") echo $this_camp->things_to_do; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Camp Price</label>
                            <div class="col-md-8 col-xs-11">
                               <input type="number" name="price" class="form-control" value="<?php if(!$this_camp->price==0) echo $this_camp->price; ?>" />
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /form-panel -->
            </div>
            <!-- /col-lg-12 -->
        </div>
        <div class="row mt">
            <div class="col-lg-6">
                <div class="form-panel table-responsive">
                    <h3><i class="fa fa-calendar"></i> Start Dates</h3>
                     <table class="table table-hover">
                         <?php 
                            $dates = $this->My_model->selectRecord('camp_start_dates', '*', array('camp_id' => $this_camp->camp_id));
                            foreach($dates as $d){ ?>
                                <tr>
                                    <td style="text-align:center"><?php echo $d->start_date; ?></td>
                                </tr>
                        <?php
                            }
                         ?>
                     </table>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-panel table-responsive">
                    <h3><i class="fa fa-camera"></i> Images</h3>
                    <div class="row">
                    <?php 
                        $imags = $this->My_model->selectRecord('camp_images', '*', array('camp_id' => $this_camp->camp_id, 'del_status'=>"0"));
                        foreach($imags as $im){ ?>
                            <div class="col-sm-6" style="height:100px;"><img src="<?php echo base_url(); ?>assets/uploads/organisers/camp_images/<?php echo $im->name; ?>" style="width:100%;"/></div>
                    <?php
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<script>
<?php 
    if($this_camp->duration){
        echo "document.getElementById('duration').value = '".$this_camp->duration."';";
    }
    if($this_camp->currency){
        echo "document.getElementById('currency').value = '".$this_camp->currency."';";
    }
    if($this_camp->pickup_service){
        echo "document.getElementById('po').value = '".$this_camp->pickup_service."';";
    }
?>
CKEDITOR.replace('intro');CKEDITOR.replace('program');CKEDITOR.replace('included');CKEDITOR.replace('notincluded');CKEDITOR.replace('things_to_do');
</script>