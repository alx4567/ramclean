<?php 
    
    define("TITLE", "Service Request | RamClean Cleaning Services");
    $page = "employment";
    include('includes/header.php');

?>

<div class="request-container">

    <section class="request-banner">
        <div class="blue-box"></div>
        <div class="banner-text">
            <h1>YOUR NEW<br>CAREER</h1>
            <img src="img/ramclean-logo-banner.png" alt="RamClean logo" class="banner-title-logo" />
        </div>
    </section> <!-- res-banner -->


    <div class="request-main-container" >


        <div class="form-container">

            <h2>Employment</h2>
            <p>
                We pride ourselves on making a difference in our customers’ lives by providing 
                high-quality home cleaning services from a name you can trust. We’ve been 
                cleaning homes for over 25 years and know that our focus on great customer 
                service and taking care of our employees will always be our priority.
            </p>
            
            <!--Contact Form-->
            <div id="aquaria_form_alert" class="alert" role="alert" style="font-size: 14px;">
                <strong></strong> <span></span>
            </div>
            <form role="form" class="aquaria_form" onsubmit="return false">
                <section id="aquaria_module_1" class="aquaria_title aquaria_module" style="margin-bottom: 20px;">
                </section>
                
                <!-- Name -->
                <section id="aquaria_module_3" class="input-group aquaria_module" style="margin-bottom: 20px;">
                    <input type="text" name="Name" data-validation="empty-value" data-err-msg="Please enter name" class="form-control" placeholder="Your Name" style="font-size: 14px; height: 40px; border-radius: 4px;">
                </section>
                
                <div class="contact-container">
                    <!-- Phone -->
                    <section id="aquaria_module_17" class="input-group aquaria_module col-sm-6">
                        <input type="text" name="Phone_num" data-validation="empty-value" data-err-msg="Please Enter Phone Number" class="form-control" placeholder="Phone #">
                    </section>
                    
                    <!-- Email -->
                    <section id="aquaria_module_2" class="input-group aquaria_module col-sm-6" style="margin-bottom: 20px;">
                        <input type="email" name="Email" data-validation="email" data-err-msg="Incorect email address" class="form-control" placeholder="Your Email" style="font-size: 14px; height: 40px; border-radius: 4px;">
                    </section>
                </div>
                
                <!-- Address -->
                <section id="aquaria_module_18" class="input-group aquaria_module col-sm-12" style="float: left !important;">
                    <input type="text" name="Address" data-validation="empty-value" data-err-msg="Please Enter Address" class="form-control" placeholder="Address">
                </section>
                
                <div class="contact-container">
                    <!-- City -->
                    <section id="aquaria_module_19" class="input-group aquaria_module col-sm-6">
                        <input type="text" name="Random_19" data-validation="empty-value" data-err-msg="Please Enter City" class="form-control" placeholder="City">
                    </section>
                    
                    <!-- State -->
                    <section id="aquaria_module_20" class="input-group aquaria_module col-sm-6">
                        <input type="text" name="State" data-validation="empty-value" data-err-msg="Please Enter State" class="form-control" placeholder="State">
                    </section>
                </div>
                
                <!-- Zip -->
                <section id="aquaria_module_21" class="input-group aquaria_module col-sm-6">
                    <input type="text" name="Zip" data-validation="empty-value" data-err-msg="Please Enter Zip" class="form-control" placeholder="Zip">
                </section>
                
                <!-- HR -->
                <section id="aquaria_module_22" class="input-group aquaria_module col-sm-12">
                    <p class="separ"></p>
                </section>
                
                <!-- Resume -->
                <section id="aquaria_module_11" class="input-group aquaria_module col-sm-12" style="margin-bottom: 20px;">
                    <button class="btn btn-lg btn-block  btn-primary attach_bt" style="font-size: 18px; border-radius: 4px;">
                        <i class="fa fa-cloud-upload"></i>
                        <span class="attach_h">Upload Resume</span>
                    </button>
                    <input style="display: none; font-size: 14px; height: 40px; border-radius: 4px;" class="form-control attach" name="attach_name_1" type="file">
                </section>
                
                <!-- HR -->
                <section id="aquaria_module_8" class="input-group aquaria_module col-sm-12" style="margin-bottom: 20px;">
                    <p class="separ" style="font-size: 14px;"></p>
                </section>
                
                <!-- CAPTCHA -->
                <section id="aquaria_captcha" class="input-group aquaria_module col-sm-6" style="margin-bottom: 20px;">
                    <span class="aquaria_captcha_addon"><img id="aquaria_captcha_pic" src="captcha/captcha.php"></span>
                    <i class="fa fa-refresh" onclick="aquariaFormBuilder.ressetCaptcha(true)"></i>
                    <input id="aquaria_captcha-form" type="text" data-validation="empty-value" data-err-msg="Please enter captcha code" class="form-control" placeholder="Captcha code" name="aquaria_captcha-form" autocomplete="off" style="font-size: 14px; height: 40px; border-radius: 4px;">
                </section>
                
                <!-- Submit -->
                <section id="aquaria_form_submit" class="input-group aquaria_module col-sm-5" style="float: right !important;">
                    <button class="btn btn-lg btn-primary btn-block" data-loading-text="Sending ..." autocomplete="off" type="submit" style="font-size: 18px; border-radius: 4px;">Submit Application</button>
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