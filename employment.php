<?php 
    
    define("TITLE", "Service Request | RamClean Cleaning Services");
    $page = "employment";
    include('includes/header.php');

?>

<div class="request-container">

    <section class="request-banner">
        <!--
        <div class="blue-box"></div>
        <div class="banner-text">
            <h1>YOUR NEW<br>CAREER</h1>
            <img src="img/ramclean-logo-banner.png" alt="RamClean logo" class="banner-title-logo" />
        </div>
        -->
        <img src="img/employment-banner.jpg" style="width: 100%;"/>
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
            <iframe src="http://ramclean.com/job-application/index.html" style="width:100%; height:690px; border:none;"></iframe>
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