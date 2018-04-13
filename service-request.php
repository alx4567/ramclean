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


        <form method="post" action="" id="request-form" class="form-container">

            <h2>A BIT ABOUT YOU</h2>

            <div class="about-you-container">
                <input type="text" class="name" name="name" placeholder="FIRST AND LAST NAME">
                <input type="text" class="address" name="address" placeholder="ADDRESS">
                
                <div class="address-phone-container">
                    <div class="city-state-container">
                        <input type="text" class="city" name="city" placeholder="CITY">
                        <input type="text" class="state" name="state" placeholder="STATE">
                    </div> <!-- city-state-container -->
                    <div class="zip-phone-container">
                        <input type="text" class="zip" name="zip" placeholder="ZIP">
                        <input type="phone" class="phone" name="phone" placeholder="PHONE NUMBER">
                    </div><!-- zip-phone-container -->
                </div> <!-- address phone -->
            </div> <!-- about-you-container -->

            <div class="tab tab-button-container">
                <div class="tablinks commercialBtn active" onclick="openTab(event, 'Commercial2')">COMMERCIAL</div>
                <div class="tablinks residentialBtn" onclick="openTab(event, 'Residential2')">RESIDENTIAL</div>
            </div> <!-- commercial-residential-container -->


            <div id="Commercial2" class="tabcontent" style="display:block;">
                <div class="commercial-container">
                    <input type="text" id="sqFt" class="single" name="sqFt" placeholder="ESTIMATED SQUARE FOOTAGE">
                    <br>
                    <p>WHAT ARE YOUR WINDOW CLEANING NEEDS?</p>
                    <div class="commercial-window-container">
                        <label class="checkContainer">EXTERIOR
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label> <!-- checkContainer -->

                        <label class="checkContainer">INTERIOR
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label> <!-- checkContainer -->

                        <label class="checkContainer">I DON'T NEED WINDOW CLEANING
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label> <!-- checkContainer -->
                    </div> <!-- commercial-window-container -->
                    <textarea rows="4" cols="100" name="specialRequest" placeholder="SPECIAL REQUESTS (CLEANING DETAILS WITHIN YOUR SPACE)"></textarea>
                </div> <!-- commercial-container -->
            </div>


            <div id="Residential2" class="residential-container tabcontent">
                <input type="text" id="sqFt" class="single sqft" name="sqFt" placeholder="ESTIMATED SQUARE FOOTAGE">
                <div class="bed-bath-container">
                    <input type="text" id="bedrooms" class="double bedroom" name="bedrooms" placeholder="NUMBER OF BEDROOMS">
                    <input type="text" id="bathRoom" class="double bathroom" name="bathRoom" placeholder="NUMBER OF BATHROOMS">
                </div> <!-- bed-bath-container -->
                
                <p>WHAT ARE YOUR WINDOW CLEANING NEEDS?</p>
                <div class="residential-window-container">
                    <label class="checkContainer">EXTERIOR
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label> <!-- checkContainer -->

                    <label class="checkContainer">INTERIOR
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label> <!-- checkContainer -->

                    <label class="checkContainer">I DON'T NEED WINDOW CLEANING
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label> <!-- checkContainer --><br>
                </div> <!-- residential-window-container -->

                <p>DO YOU HAVE ANY PETS?</p>
                <div class="pets-container"> 
                    <label class="checkContainer">DOGS
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label> <!-- checkContainer -->

                    <label class="checkContainer">CATS
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label> <!-- checkContainer -->
                </div> <!-- pets-container -->
            </div> <!-- residential-container -->


            <input type="submit" value="Request Quote" class="button g-recaptcha" data-sitekey="6Lc-TUwUAAAAAAi3ioLQ22vRnJLvFGerQYRwmDv3" data-callback="YourOnSubmitFn" name="requestQuote">
        </form>

    </div> <!-- request-main-container -->

</div> <!-- request-container -->






<?php

include('includes/footer.php')

?>