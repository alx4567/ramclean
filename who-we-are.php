<?php 
    
    define("TITLE", "Who We Are | RamClean Cleaning Services");
    $page = "whoWeAre";
    include('includes/header.php');

?>

<section class="about-container">

    <section class="about-banner">
        <div class="about-banner-img-wrapper"></div>
        <div class="blue-box"></div>
        <div class="banner-text">
            <h1>A BIT ABOUT<br>RAMCLEAN</h1>
            <img src="img/ramclean-logo-banner.png" alt="RamClean logo" class="banner-title-logo" />
        </div>
    </section> <!-- about-banner -->

    <section class="about-info-container">
        <div class="contact-container">
            <img src="img/charlieRamshaw.jpg" alt="Charlie Ramshaw, President" />
            <div class="contact-text">
                <h6>CHARLIE RAMSHAW</h6>
                <p>President</p>
                <a href="#">(217) 202-5235</a>
                <br>
                <a href="#">charlie@ramclean.com</a>
            </div> <!-- contact-text -->
        </div> <!-- contact-container -->
        <div class="about-text-container">
            <p>RamClean owner and founder Charlie Ramshaw recognized an opportunity to use 
            his 25 years of experience in the Champaign-Urbana area to offer a more hands-on, 
            comprehensive janitorial experience for commercial clients.</p>

            <p>As a member of a family-owned business for decades, Charlie learned that 
            while cleaning is often the last thing on a business owner’s mind, cleanliness 
            is the first thing noticed by customers.</p>

            <p>At RamClean, we know a clean and safe work space is critical to success. It’s 
            not just about clients and customers. Employees are also happier and more 
            productive when they are in a clean environment.</p>

            <p>Using RamClean professional cleaning services gives business owners one less 
            thing to worry about. When you leave your office or business for the night, you 
            can relax, assured it will be clean the next morning.</p>

            <p>Join the other Champaign-Urbana businesses that trust RamClean for their 
            commercial cleaning needs.</p>
        </div> <!-- about-text-container -->
    </section> <!-- about-info-container -->

    <section class="google-map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3051.1804021280623!2d-88.25315804815637!3d40.115982979300284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880cd0b41d7b91f5%3A0x76ef42e24d189746!2sRamClean%2C+LLC!5e0!3m2!1sen!2sus!4v1523320943755" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section> <!-- google-map-container -->

</section> <!-- about-container -->




<?php

    include('includes/footer.php')

?>