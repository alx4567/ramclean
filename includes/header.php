<?php

    $companyName = "Ram<span>Clean</span>";
    include('includes/arrays.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="description" content="RamClean is the premier commercial cleaning and janitorial services company in the Champaign-Urbana region.">
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://use.typekit.net/ksf0tjw.css">
    <link href="/assets/main.css" rel="stylesheet">
    <link href="/assets/<?php echo $page; ?>.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

    <!-- Request Form -->
    <link rel="stylesheet" type="text/css" href="css/style.css">


    <!-- scripts -->
    <script src="/assets/scripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Captcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon" />

    <title><?php echo TITLE; ?></title>

    <!-- Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119956093-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-119956093-1');
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1407766832702862');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1407766832702862&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->


</head>

<body class="<?php echo $page; ?>" >

     

    <header>
        <!--
        <section class="mobile-pop fixedElement">
            <h6><a href="service-request.php">Request A Quote!</a></h6>
        </section>
        -->
        

        <section class="social-media-container">
            <div class="socialWrapper">
                <a target="_blank" href="https://www.facebook.com/RamCleaners"><i class="fab fa-facebook-f"></i></a>
                <a target="_blank" href="https://www.instagram.com/ramcleanllc/"><i class="fab fa-instagram"></i></a>
                <a target="_blank" href="https://www.linkedin.com/company/28181877/ "><i class="fab fa-linkedin-in"></i></a>
                <a target="_blank" href="https://www.google.com/search?ei=ohTEWp3GMI2vjwSk07yABA&q=ramclean+champaign+reviews&oq=ramclean+champaign+reviews&gs_l=psy-ab.3..35i39k1.4882.5912.0.6040.8.7.0.0.0.0.314.835.0j2j1j1.4.0....0...1.1.64.psy-ab..4.4.835....0.5TARfqFIJUI#lrd=0x880cd0b41d7b91f5:0x76ef42e24d189746,1,,,"><i class="fab fa-google"></i></a>
            </div>
            <a  class="phoneNum" href="tel:+217-202-5235"><small style="font-weight: 400; font-size: 0.75em;">Call or text 24/7 for your free quote:</small> (217) 202-5235</a>
        </section> <!-- social-media-container"> -->

        <section class="mainNav-container">
            <div class="links">
                <h4 class="logo"><a href="index.php"><?php echo $companyName; ?></a></h4>

                

                <nav class="topnav" id="myTopnav">
                    <a href="javascript:void(0);" class="icon" onclick="mobileMenu()">&#9776;</a>
                    <?php include('includes/nav.php'); ?>
                </nav>
            </div> <!-- links -->
    
            <div>
                <a href="service-request.php"><div id="dropDownBtn" class="dropbtn">REQUEST A QUOTE</div></a>
            </div>
        </section> <!-- mainNav-container -->
            
        
    </header>

        

        <main class="content">