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
    <link href="/assets/serviceRequest.css" rel="stylesheet">
    <link href="/assets/<?php echo $page; ?>.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

    <!-- scripts -->
    <script src="/assets/scripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Captcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <title><?php echo TITLE; ?></title>

</head>

<body class="<?php echo $page; ?>" >

    <header>
        <section class="social-media-container">
            <div class="socialWrapper">
                <a target="_blank" href="https://www.facebook.com/RamCleaners"><i class="fab fa-facebook-f"></i></a>
                <a target="_blank" href="https://www.instagram.com/ramcleanllc/"><i class="fab fa-instagram"></i></a>
                <a target="_blank" href="https://www.linkedin.com/company/28181877/ "><i class="fab fa-linkedin-in"></i></a>
                <a target="_blank" href="https://www.google.com/search?ei=ohTEWp3GMI2vjwSk07yABA&q=ramclean+champaign+reviews&oq=ramclean+champaign+reviews&gs_l=psy-ab.3..35i39k1.4882.5912.0.6040.8.7.0.0.0.0.314.835.0j2j1j1.4.0....0...1.1.64.psy-ab..4.4.835....0.5TARfqFIJUI#lrd=0x880cd0b41d7b91f5:0x76ef42e24d189746,1,,,"><i class="fab fa-google"></i></a>
            </div>
            <a  class="phoneNum" href="tel:+217-202-5235">(217) 202-5232</a>
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