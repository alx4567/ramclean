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
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

    <!-- scripts -->
    <script src="/assets/scripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Captcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <title><?php echo TITLE; ?></title>

</head>

<body class="<?php echo $page; ?>" >

    <header>
        <h4 class="logo"><a href="index.php"><?php echo $companyName; ?></a></h4>

        <!-- dropdown request form -->
        <div id="myDropdown" class="dropdown-content">
                <?php include('requestForm.php'); ?>
        </div> 
        <div class="dropdown">
            <button onclick="dropRequest()" data-text-swap="CLOSE" id="dropDownBtn" class="dropbtn">REQUEST A QUOTE</button>
        </div> 

        

         <nav class="topnav" id="myTopnav">
            <a href="javascript:void(0);" class="icon" onclick="mobileMenu()">&#9776;</a>
            <?php include('includes/nav.php'); ?>
            <a class="noMobile" href="#">|</a>
            <a class="noMobile" href="tel:+217-202-5235"><small class="textToday">CALL OR TEXT<br>(217) 202-5232</small></a>
        </nav>
            
        
    </header>

        

        <main class="content">