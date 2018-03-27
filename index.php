<?php 
    
    define("TITLE", "RamClean Cleaning Services");
    $page = "index";
    include('includes/header.php');

?>

    <section class="banner-container">
        <div class="banner-text">
            <div class="banner-headline">
                <em>TAKE YOUR</em>
                <strong>WEEKEND</strong>
                <em class="back">BACK</em>
            </div><!-- banner-headline -->
            <p>
                RamClean gives you the peace of mind
                to enjoy every weekend!
            </p>
        </div><!-- banner-text -->
        <div class="banner-animation">
            <img src="img/mom-and-daughter.png" alt="Smiling mother giving piggy-back ride to daughter">
        </div><!-- banner-animation -->
    </section> <!-- banner-container -->


    <section class="index-services-container">
        <h2><em>We Take Pride In Our</em><br>Exceptional Services</h2>
        <div class="service-detail-container">
            <div class="service-icons">
                <div class="icon-box">
                    <div class="icon"><i class="fas fa-home fa-4x"></i></div>
                    Residential<br>Cleaning
                </div> <!-- icon-box -->
                <div class="icon-box">
                    <div class="icon"><i class="fas fa-building fa-4x"></i></div>
                    Commercial<br>Cleaning
                </div> <!-- icon-box -->
                <div class="icon-box">
                    <div class="icon"><i class="fas fa-wrench fa-4x"></i></div>
                    Construction<br>Cleanup
                </div> <!-- icon-box -->
            </div> <!-- service-icons -->
            <img class="vacuum-man" src="img/cartoon-vacuuming.png" alt="Cartoon Man Vacuuming Floor">
        </div> <!-- service-detail-container -->
    </section> <!-- index-services-container -->


    <section class ="premier-cleaners-container">
        <div class="premier-wrapper">
            <h2><em>CHAMPAIGN-URBANA'S</em><br>PREMIER CLEANING<br>PROVIDERS</h2>
            <p>
                Our trained teams of professional cleaning specialists will tackle 
                dirt, dust and grime and leave your home shining. Our products and 
                extensive industry experience give us a leg up when it comes to 
                eaving your house cleaner, and healthier, than ever before.
            </p>
        </div> <!-- premier-wrapper -->
    </section> <!-- premier-cleaners-container -->


    <section class="shoutout-container">
        <div class="shoutout-text-wrapper">

            <div class="reviews-wrapper">
                <h4 class="w3-center">HAVE YOU HEARD?</h4>

                    <div class="w3-content w3-display-container">
                        <p class="mySlides" style="text-align:center;"> 
                            Charlie is the hardest working individual I know. He goes above and 
                            beyond and makes you feel special while doing it
                            <br>
                            <small>Sam L.</small>
                        </p>
                        <p class="mySlides" style="text-align:center;">
                            Excellent company, I would highly recommend RamClean for your Buisness 
                            or construction cleaning needs.
                            <br>
                            <small>Andrew W.</small>
                        </p>
                        <p class="mySlides" style="text-align:center;">
                            Great service and team! We appreciate the extra steps RamClean takes 
                            to ensure our office space is looking great!
                            <br>
                            <small>Jilyan L.</small>
                        </p>

                        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                    </div>
            </div> <!-- reviews-wrapper -->

            <div class="reviews-wrapper">
                <h4 class="w3-center">PROUDLY SERVING</h4>

                    <div class="w3-content w3-display-container">
                        <div class="logo-slides"> 
                            <img src="" alt="logo" class="partnerLogo">
                            <img src="" alt="logo" class="partnerLogo">
                            <img src="" alt="logo" class="partnerLogo">
                        </div>
                        <div class="logo-slides"> 
                            <img src="" alt="logo3" class="partnerLogo">
                            <img src="" alt="logo" class="partnerLogo">
                            <img src="" alt="logo" class="partnerLogo">
                        </div>
                        <div class="logo-slides"> 
                            <img src="" alt="logo4" class="partnerLogo">
                            <img src="" alt="logo" class="partnerLogo">
                            <img src="" alt="logo" class="partnerLogo">
                        </div>

                        <button class="w3-button w3-black w3-display-left" onclick="plusDivs2(-1)">&#10094;</button>
                        <button class="w3-button w3-black w3-display-right" onclick="plusDivs2(1)">&#10095;</button>
                    </div>
            </div> <!-- reviews-wrapper -->

            

        </div> <!-- shoutout-text-wrapper -->

        <img src="" alt="Window Cleaner Cartoon">
    </section> <!-- shoutout-container -->
    




<?php

    include('includes/footer.php')

?>