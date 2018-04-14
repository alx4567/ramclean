<?php 
    
    define("TITLE", "Service Request | RamClean Cleaning Services");
    $page = "serviceRequest";
    include('includes/header.php');

?>

<div class="request-container">

    <section class="request-banner">
        <div class="blue-box"></div>
        <div class="banner-text"><h1>REQUEST A<br>QUOTE</h1></div>
    </section> <!-- res-banner -->


    <div class="request-main-container" >

        <section class="request-text-container">
            <p><strong>Request your free RamClean consultation and quote right now!</strong>
                <br>
                Please email or call Charlie Ramshaw with as many details as 
                possible about your cleaning needs. RamClean will return a 
                written quote to you within 24 hours of your request. RamClean 
                also will beat any estimate or current cleaning contract by 
                10%.</p>
        </section>


        <div class="form-container">

            <h2>A BIT ABOUT YOU</h2>
            
            <!--Contact Form-->
            <div id="aquaria_form_alert" class="alert" role="alert" style="font-size: 14px;">
            <strong></strong> <span></span>
            </div>
            
            <form role="form" class="aquaria_form" onsubmit="return false">

                <!-- name -->
                <section id="aquaria_module_3" class="input-group aquaria_module name-container" style=";">
                    <input type="text" name="Name" data-validation="empty-value" data-err-msg="Please enter name" class="form-control" placeholder="FIRST AND LAST NAME" style="font-size: 15px; height: 48px; border-color: rgb(204, 204, 204);">
                </section>
                
                <div class="contact-container">
                    <!-- phone -->
                    <section id="aquaria_module_24" class="input-group aquaria_module" style=";">
                        <input type="text" name="Phone" data-validation="" data-err-msg="" class="form-control" placeholder="PHONE #" style="height: 48px; border-color: rgb(204, 204, 204); border-radius: 8px; font-size: 15px;">
                    </section>
                    
                    <!-- email -->
                    <section id="aquaria_module_2" class="input-group aquaria_module" style=";">
                        <input type="email" name="Email" data-validation="email" data-err-msg="Incorect email address" class="form-control" placeholder="EMAIL" style="font-size: 15px; height: 48px; border-radius: 8px; border-color: rgb(204, 204, 204);">
                    </section>
                </div> <!-- contact-container -->
                
                <!-- Address 1 -->
                <section id="aquaria_module_18" class="input-group aquaria_module" style=";">
                    <input type="text" name="Address" data-validation="" data-err-msg="" class="form-control" placeholder="ADDRESS" style="height: 48px; border-color: rgb(204, 204, 204); border-radius: 8px; font-size: 15px;">
                </section>
                
                <!-- Address 2 -->
                <section id="aquaria_module_21" class="input-group aquaria_module" style=";">
                    <input type="text" name="Address 2" data-validation="" data-err-msg="" class="form-control" placeholder="ADDRESS LINE 2" style="height: 48px; border-color: rgb(204, 204, 204); border-radius: 8px; font-size: 15px;">
                </section>
                
                <div class="address-container">
                    <!-- city -->
                    <section id="aquaria_module_17" class="input-group aquaria_module" style=";">
                        <input type="text" name="City" data-validation="" data-err-msg="please enter a city" class="form-control" placeholder="CITY" style="height: 48px; border-color: rgb(204, 204, 204); border-radius: 8px; font-size: 15px;">
                    </section>
                    
                    <!-- state -->
                    <section id="aquaria_module_19" class="input-group aquaria_module" style=";">
                        <input type="text" name="State" data-validation="" data-err-msg="" class="form-control" placeholder="STATE" style="height: 48px; border-color: rgb(204, 204, 204); border-radius: 8px; font-size: 15px;">
                    </section>
                </div> <!-- address-container -->
                
                <!--zip -->
                <section id="aquaria_module_22" class="input-group aquaria_module" style=";">
                    <input type="text" name="Zip" data-validation="" data-err-msg="" class="form-control" placeholder="ZIP" style="height: 48px; border-color: rgb(204, 204, 204); border-radius: 8px; font-size: 15px;">
                </section>

                <!-- sq ft -->
                <section id="aquaria_module_26" class="input-group aquaria_module" style=";">
                    <input type="text" name="Est Square Footage" data-validation="empty-value" data-err-msg="Please enter estimated square footage" class="form-control" placeholder="EST. SQUARE FOOTAGE" style="height: 48px; border-color: rgb(204, 204, 204); border-radius: 8px; font-size: 15px;">
                </section>
                
                <!-- bathrooms -->
                <section id="aquaria_module_27" class="input-group aquaria_module" style=";">
                    <input type="text" name="Num. of Bathrooms" data-validation="empty-value" data-err-msg="Please enter number of bathrooms" class="form-control" placeholder="NUMBER OF BATHROOMS" style="height: 48px; border-color: rgb(204, 204, 204); border-radius: 8px; font-size: 15px;">
                </section>
                
                <!-- cleaning type -->
                <section id="aquaria_module_25" class="input-group aquaria_module">
                    <p class="input_p" style="color: rgb(85, 85, 85); font-weight: 700; font-size: 18px; letter-spacing: 0.025em; margin-bottom: 10px;">CLEANING TYPE</p>
                    <input type="hidden" class="form-control rvals" data-validation="radio" data-err-msg="Please select one" style="height: 48px; border-color: rgb(204, 204, 204); border-radius: 8px; font-size: 15px;">    
                    <div class="cleaning-container">   
                        <div class="radio radio-inline">
                            <input type="radio" id="labelId_7" value="Option 1" name="CLEANING TYPE" style="display: none; height: 48px; border-color: rgb(204, 204, 204); border-radius: 8px; font-size: 15px;">
                            <label for="labelId_7" style="color: rgb(85, 85, 85);">Commercial</label>
                        </div>
                        <div class="radio radio-inline">
                            <input type="radio" id="labelId_8" value="Option 2" name="CLEANING TYPE" style="display: none; height: 48px; border-color: rgb(204, 204, 204); border-radius: 8px; font-size: 15px;">
                            <label for="labelId_8" style="color: rgb(85, 85, 85);">Residential</label>
                        </div>
                        <div></div>
                    </div>
                </section>
                
                
                
                <!-- windows -->
                <section id="aquaria_module_28" class="input-group aquaria_module" style=";">
                    <p class="input_p" style="color: rgb(85, 85, 85); font-weight: 700; font-size: 18px; letter-spacing: 0.025em; margin-bottom: 10px;">WHAT ARE YOUR WINDOW CLEANING NEEDS?</p>
                    <input type="hidden" class="form-control cvals" data-validation="empty-value" data-err-msg="Please select window needs." name="WHAT ARE YOUR WINDOW CLEANING NEEDS?" style="height: 48px; border-color: rgb(204, 204, 204); border-radius: 8px; font-size: 15px;">
                    <div class="window-option-container">
                        <div class="checkbox checkbox-inline">
                            <input type="checkbox" id="labelId_10" style="display: none; height: 48px; border-color: rgb(204, 204, 204); border-radius: 8px; font-size: 15px;">
                            <label for="labelId_10" style="color: rgb(85, 85, 85);">Exterior</label>
                        </div>
                        <div class="checkbox checkbox-inline">
                            <input type="checkbox" id="labelId_11" style="display: none; height: 48px; border-color: rgb(204, 204, 204); border-radius: 8px; font-size: 15px;">
                            <label for="labelId_11" style="color: rgb(85, 85, 85);">Interior</label>
                        </div>
                        <div class="checkbox checkbox-inline">
                            <input type="checkbox" id="labelId_12" style="display: none; height: 48px; border-color: rgb(204, 204, 204); border-radius: 8px; font-size: 15px;">
                            <label for="labelId_12" style="color: rgb(85, 85, 85);">None</label>
                        </div>
                    </div>
                </section>
                
                <!-- pets -->
                <section id="aquaria_module_29" class="input-group aquaria_module" style=";">
                    <p class="input_p" style="color: rgb(85, 85, 85); font-weight: 700; font-size: 18px; letter-spacing: 0.025em; margin-bottom: 10px;">DO YOU HAVE ANY PETS?</p>
                    <input type="hidden" class="form-control cvals" data-validation="" data-err-msg="" name="DO YOU HAVE ANY PETS?" style="height: 48px; border-color: rgb(204, 204, 204); border-radius: 8px; font-size: 15px;">
                    <div class="pets-option-container">
                        <div class="checkbox checkbox-inline">
                            <input type="checkbox" id="labelId_13" style="display: none; height: 48px; border-color: rgb(204, 204, 204); border-radius: 8px; font-size: 15px;">
                            <label for="labelId_13" style="color: rgb(85, 85, 85);">Dogs</label>
                        </div>
                        <div class="checkbox checkbox-inline">
                            <input type="checkbox" id="labelId_14" style="display: none; height: 48px; border-color: rgb(204, 204, 204); border-radius: 8px; font-size: 15px;">
                            <label for="labelId_14" style="color: rgb(85, 85, 85);">Cats</label>
                        </div>
                        <div></div>
                    </div> <!-- pets-option-container -->
                </section>
                
                <!-- special request -->
                <section id="aquaria_module_30" class="input-group aquaria_module" style=";">
                    <textarea name="Special Request" data-validation="" data-err-msg="" class="form-control" placeholder="SPECIAL REQUEST" style="border-color: rgb(204, 204, 204); border-radius: 8px; font-size: 15px;"></textarea>
                </section>
                
                <!-- captcha -->
                <section id="aquaria_captcha" class="input-group aquaria_module">
                    <div class="captcha-image">
                        <span class="aquaria_captcha_addon">
                            <img id="aquaria_captcha_pic" src="captcha/captcha.php">
                        </span>
                        <i class="fa fa-refresh" onclick="aquariaFormBuilder.ressetCaptcha(true)"></i>
                    </div><!-- captcha-img -->
                    <input id="aquaria_captcha-form" type="text" data-validation="empty-value" data-err-msg="Please enter captcha code" class="form-control" placeholder="Captcha code" name="aquaria_captcha-form" autocomplete="off">
                </section>
                

                <div id="aquariaModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="aquariaModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> -->
                        <h4 class="modal-title" id="aquariaModalLabel"><i style="color: green;" class="fa fa-check-circle"></i> <span id="aquariaModalLabelTitle"></span><a class="anchorjs-link" href="#aquariaModalLabel"><span class="anchorjs-icon"></span></a></h4>
                        </div>
                        <div class="modal-body">
                        <p style="text-align: center; margin-top: 24px;"></p>
                        </div>
                        <div class="modal-footer" style="text-align: center; margin-top: 24px;">
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="margin: 0 auto;">OK</button>
                        </div>
                    </div>
                    </div>
                </div>

                
                <!-- submit -->
                <section id="aquaria_form_submit" class="input-group aquaria_module" style="float: left !important; ;">
                
                
                <button class="btn btn-lg btn-block btn-info" data-loading-text="Sending ..." autocomplete="off" type="submit" style="font-size: 18px; border-radius: 8px;">REQUEST QUOTE</button>
            </section>
        
            

        
        
        </form>
            <!--End contact Form-->
    
        </div>

    </div> <!-- request-main-container -->

</div> <!-- request-container -->






<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.js"></script>
<script type="text/javascript" src="js/datetimepicker.min.js"></script>
<script type="text/javascript" src="js/aquaria.form.js"></script>


<?php

include('includes/footer.php')

?>