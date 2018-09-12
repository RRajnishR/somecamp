<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
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
                            <div class="col-md-4 col-xs-11" >
                                <select class="form-control select2" name="countryid" required >
                                   <option value="">Select Camp country</option>
                                    <?php 
                                        foreach($countries as $c){ ?>
                                            <option value="<?php echo $c->countries_id; ?>" ><?php echo $c->countries_name; ?></option>
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
                                <input type="text" class="form-control" name="camp_address" placeholder="Camp's Full Address here"> <br/>
                                <input type="text" class="form-control" name="latlong" placeholder="Latitude, Longitude Eg: (28.566174,77.230777)" /> 
                            </div>
                            <div class="col-md-4">
                                <span class="help-block">Help: Add full camp's Address (Use Google Maps) <br/> If you can find Latitude and Longitude, Please provide that also. You can use <a href="https://www.latlong.net/" target="_blank">Latlong.net</a> to find those </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Camp's type</label>
                            <div class="col-md-4 col-xs-11">
                                <select class="form-control select2" name="ctype[]" multiple="multiple" required>
                                    <option>Select camp type(s)</option>
                                    <?php 
                                        foreach($camp_type as $ct){ ?>
                                            <option value="<?php echo $ct->id; ?>"><?php echo $ct->ctype; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <span class="help-block">Help: Select the kind(s) of camp</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Suitable for</label>
                            <div class="col-md-4 col-xs-11">
                                <select class="form-control select2" name="camp_for[]" multiple="multiple" required>
                                    <option>Select camp type(s)</option>
                                    <?php 
                                        foreach($camp_for as $cf){ ?>
                                            <option value="<?php echo $cf->id; ?>" title="<?php echo $cf->small_desc; ?>"><?php echo $cf->name; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <span class="help-block">Help: Hover over the options to see the basic info.</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Title Of Camp</label>
                            <div class="col-md-4 col-xs-11">
                               <input class="form-control" name="title" placeholder="4 Days camping retreat at River Way Ranch Camp"/>
                            </div>
                            <div class="col-md-4">
                                <span class="help-block">Help: A camp with welcoming and well described name attracts more campers</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Introduction of camp</label>
                            <div class="col-md-6 col-xs-11">
                               <textarea class="form-control" name="intro" rows="8"></textarea>
                            </div>
                            <div class="col-md-2">
                                <span class="help-block">Help: Give some basic details about the camp, where it is situated, why is it so good? Eg: 
                                In the midst of Mountains, you'll find the best dusks and dawn. *Famous* Lake which is nearby is accessible to our camps etc. etc...
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Currency:</label>
                            <div class="col-md-4 col-xs-11">
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
                            <div class="col-md-4">
                                <span class="help-block">Help: Select your preferred currency.</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nearest Airport</label>
                            <div class="col-md-4 col-xs-11">
                               <input type="text" name="airport_name" class="form-control" />
                            </div>
                            <div class="col-md-4">
                                <span class="help-block">Help: Name of the Nearest airport, where camper should deboard. </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Pickup Option</label>
                            <div class="col-md-6 col-xs-11">
                               <select class="form-control" id="po" name="pickup_option" onchange="show_another_input(this.value)">
                                   <option value="">Select</option>
                                   <option value="1">We will pick up the guests from this airport free of charge</option>
                                   <option value="2">We can pick up the guests at additional costs from this airport</option>
                                   <option value="3">The guests have to arrange their own transport from this airport</option>
                               </select> <br/>
                               <input id="option2" placeholder="Pickup cost per person" type="number" name="pick_with_cost" class="form-control" style="display:none;"/>
                               <textarea id="option3" class="form-control" name="camp_direction" style="display:none;" placeholder="Eg: Guests will have to take bus number 15 from airport to Kualalumpur......." rows="7"></textarea>
                            </div>
                            <div class="col-md-2">
                                <span class="help-block">Help: Please pick from the options and provide further information on basis of your selection</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Included Meals</label>
                            <div class="col-md-4 col-xs-11">
                               <select class="form-control select2" id="ml_list" name="meal_list[]" multiple="multiple">
                                   <option value=""></option>
                                   <?php 
                                        foreach($meals as $ml){ ?>
                                            <option value="<?php echo $ml->id; ?>"><?php echo $ml->meal_type; ?></option>
                                    <?php
                                        }
                                    ?>
                               </select><br/>
                               <input type="checkbox" id="inc_food" class="form-check-input" name="included_food" value="0"> No Meals Included
                            </div>
                            <div class="col-md-4">
                                <span class="help-block">Help: select meal options which are included in the price. Else check No meals included option</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Supported Food Types</label>
                            <div class="col-md-4 col-xs-11">
                               <select class="form-control select2" name="ftype[]" multiple="multiple">
                                   <option value=""></option>
                                   <?php 
                                        foreach($food_type as $fd){ ?>
                                            <option value="<?php echo $fd->id; ?>"><?php echo $fd->food_type; ?></option>
                                    <?php
                                        }
                                    ?>
                               </select>
                            </div>
                            <div class="col-md-4">
                                <span class="help-block">Help: select supported food types which are available at your camp. </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Included Drinks</label>
                            <div class="col-md-4 col-xs-11">
                               <select class="form-control select2" id="dl" name="drink_list[]" multiple="multiple">
                                   <option value=""></option>
                                   <?php 
                                        foreach($drink_type as $dt){ ?>
                                            <option value="<?php echo $dt->id; ?>"><?php echo $dt->drink_type; ?></option>
                                    <?php
                                        }
                                    ?>
                               </select><br/>
                               <input type="checkbox" id="drnk" class="form-check-input" name="included_drinks" value="0"> No Drinks Included
                            </div>
                            <div class="col-md-4">
                                <span class="help-block">Help: select Drink options available at your camp which are included in the price. else check the box </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Program /Itenerary</label>
                            <div class="col-md-6 col-xs-11">
                               <textarea class="form-control" name="program" placeholder="List all the activities covered during the camp"></textarea>
                            </div>
                            <div class="col-md-2">
                                <span class="help-block">Eg: Day 1: Trekking on that famous mountain <br> Day2: Rafting... <br/><b>or</b> <br/>In Morning: Breakfast near river..... </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">What's Included</label>
                            <div class="col-md-6 col-xs-11">
                               <textarea class="form-control" name="included" placeholder="Wifi, toiletries..."></textarea>
                            </div>
                            <div class="col-md-2">
                                <span class="help-block">Help: list all those things which you guys are providing (Which are included in price of camp) <br/> Like: Rafting, Archery etc...</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">What's not Included</label>
                            <div class="col-md-6 col-xs-11">
                               <textarea class="form-control" name="notincluded" placeholder="Medicine, Alcohol"></textarea>
                            </div>
                            <div class="col-md-2">
                                <span class="help-block">Help: list all those things which aren't included in price <br/> Like: Alcohol, Midnight Meal etc...</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">&nbsp;</label>
                            <div class="col-md-4 col-xs-11">
                               <button class="btn btn-success" type="submit"> Create new Camp <i class="fa fa-check-circle"></i></button>
                            </div>
                            <div class="col-md-4">
                                <span class="help-block">Tip: Please try to fill up the form with as much information as you can. This will help our admins to verify your details easily and make your camp visible to campers</span>
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
<script>
    CKEDITOR.replace('intro');CKEDITOR.replace('program');CKEDITOR.replace('included');CKEDITOR.replace('notincluded');
</script>