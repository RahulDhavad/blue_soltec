<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Marketer - SEO, Online Marketing, Social Media Template</title>

	<!-- LOAD JQUERY LIBRARY -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
	
    <!-- Loading Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Loading Template CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style-magnific-popup.css" rel="stylesheet">
  <?php include 'header.php';?>

    <!--begin breadcrumb-wrapper-->
    <div class="breadcrumb-wrapper">
    
        <!--begin container -->
        <div class="container">
            
            <!--begin row -->
            <div class="row">
                  
                <!--begin col-xs-6 -->
                <div class="col-xs-6">
                
                    <h2 class="page-title">Contact Us</h2>
                    
                </div>
                <!--end col-xs-6 -->

                <!--begin col-xs-6 -->
                <div class="col-xs-6 text-right">
                
                    <ol class="breadcrumb">
                      <li><a href="index.html">Marketer</a></li>
                      <li class="active">Contact</li>
                    </ol>

                </div>
                <!--end col-xs-6 -->

            </div>
            <!--end row -->
            
        </div>
        <!--end container -->
        
    </div>
    <!--end breadcrumb-wrapper-->
    
    <!--begin blog -->
    <section class="section-white small-padding">
        
        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">

                <!--begin col-sm-6 -->
                <div class="col-sm-6 margin-bottom-50">
                
                    <h3>Get in touch</h3>

                    <!--begin success message -->
                    <p class="contact_success_box" style="display:none;">We received your message and you'll hear from us soon. Thank You!</p>
                    <!--end success message -->
                    
                    <!--begin contact form -->
                    <form id="contact-form" class="contact" action="php/contact.php" method="post">
                    
                        <input class="contact-input white-input" required="" name="contact_names" placeholder="Full Name*" type="text">
                        <input class="contact-input white-input" required="" name="contact_email" placeholder="Email Adress*" type="email">
                        <input class="contact-input white-input" required="" name="contact_phone" placeholder="Phone Number*" type="text">
                        <textarea class="contact-commnent white-input" rows="2" cols="20" name="contact_message" placeholder="Your Message..."></textarea>
                        <input value="Send Message" id="submit-button" class="contact-submit" type="submit">
                        
                    </form>
                    <!--end contact form -->
                             
                </div>
                <!--end col-sm-6-->
                
                <!--begin col-sm-6 -->
                <div class="col-sm-6">

                    <h3>How to find us</h3>
                    
                    <iframe class="contact-maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.9050207912896!2d-0.14675028449633118!3d51.514958479636384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ad554c335c1%3A0xda2164b934c67c1a!2sOxford+St%2C+London%2C+UK!5e0!3m2!1sen!2sro!4v1485889312335" width="600" height="450" style="border:0" allowfullscreen></iframe>

                </div>
                <!--end col-sm-6-->
             
            </div>
            <!--end row-->
    
        </div>
        <!--end container-->
    
    </section>
    <!--end blog -->
   <?php include 'header.php';?>