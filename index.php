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
                </div>
                <div class="icon-box">
                    <div class="icon"><i class="fas fa-building fa-4x"></i></div>
                    Commercial<br>Cleaning
                </div>
                <div class="icon-box">
                    <div class="icon"><i class="fas fa-wrench fa-4x"></i></div>
                    Construction<br>Cleanup
                </div>
            </div> <!-- service-icons -->
            <img class="vacuum-man" src="img/cartoon-vacuuming.png" alt="Cartoon Man Vacuuming Floor">
        </div> <!-- service-detail-container -->
    </section> <!-- index-services-container -->
    




<?php

    include('includes/footer.php')

?>