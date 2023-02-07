<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dustra- Factory & Industrial Template">

    <!-- ========== Page Title ========== -->
    <title>Srinu Technologies - Contact</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/icon.png" type="image/x-icon">
    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/icofont.min.css" rel="stylesheet" />
    <link href="assets/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel = "stylesheet" href = "whatsapp.css">
    <!-- ========== End Stylesheet ========== -->


    

</head>

<body>



    
<?php  

if(isset($_POST['submit'])) {
$mailto = "srinutechnologiespvtltd@gmail.com";  //My email address
//getting customer data
$name = $_POST['name']; //getting customer name
$fromEmail = $_POST['email']; //getting customer email
$phone = $_POST['tel']; //getting customer Phome number
//$subject = $_POST['subject']; //getting subject line from client
$subject2 = "Confirmation: Message was submitted successfully | GODREJ ENTERPRISES "; // For customer confirmation

//Email body I will receive
$message = "Cleint Name: " . $name . "\n"
. "Phone Number: " . $phone . "\n\n"
. "Client Message: " . "\n" . $_POST['message'];

//Message for client confirmation
$message2 = "Dear" ."\n". $name . "\n"
. "Thank you for contacting us!" . "\n\n"
. "You submitted the following message: " . "\n" . $_POST['message'] . "\n\n"
. "Regards," . "\n" . "- GODREJ ENTERPRISES ";

//Email headers
$headers = "From: " . $fromEmail; // Client email, I will receive
$headers2 = "From: " . $mailto; // This will receive client

//PHP mailer function

$result1 = mail($mailto, $message, $headers); // This email sent to My address
$result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client

//Checking if Mails sent successfully

if ($result1 && $result2) {
$success = "Your Message was sent Successfully!";
} else {
$failed = "Sorry! Message was not sent, Try again Later.";
}

}


?>

    <a  class="whats-app" href="https://wa.me/7207946760?text=Contact Srinu Technologies" target="_blank"><i class="fa fa-whatsapp my-float"></i></a>

    <!-- Preloader Start -->
    <!--<div class="se-pre-con"></div>-->
    <!-- Preloader Ends -->
    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area bg-dark text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-3 shape">
                    <ul class="social">
                        <li class="facebook">
                            <a href="https://www.facebook.com/srinutechnologiesofficial"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="twitter">
                            <a href="https://twitter.com/SrinuTechnolog1"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="pinterest">
                            <a href="https://www.instagram.com/srinutechnologies/"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="pinterest">
                            <a href="https://www.youtube.com/channel/UC3-ylcVZtKoPk5eQ2cZAnKw"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li class="linkedin">
                            <a href="https://www.linkedin.com/company/stplindia/"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 info float-right text-right">
                    <div class="info box">
                        <ul class="list">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                Hyderabad
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i>
                                <a href="mailto:info@srinutechnologies.com">info@srinutechnologies.com</a>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

  <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <form method="get">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <div class="call">
                        <a href="tel:+1234567890">
                            <i class="fas fa-phone"></i>
                            <div class="contact">
                                <h4>+91 7207946760</h4>
                                <span>Dail Today</span>
                            </div>
                        </a>
                    </div>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/logo1.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">

                        <li class="dropdown"><a href="index.html">Home</a></li>

                        <li><a href="about-us.html"  >About Us</a></li>
                        <li><a href="services.html" >Services</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle smooth-menu" data-toggle="dropdown" >Projects</a>
                            <ul class="dropdown-menu">
                                <li><a href = "webapp.html">Web Application Development</a></li>
                                <li><a href = "mobileapp.html">Mobile Application Development</a></li>
                                <li><a href = "digital.html">Digital Marketing Services</a></li>
                                <li><a href = "design.html">Designing Services</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="Ourteam.html">Team</a></li>
                        <li><a href="ourclients.html">Our Clients</a></li>
                      
                        <li><a href="recentposts.html">News</a> </li> 
                        <li><a href="contact.php"  class = "active">Contact Us</a> </li>
   
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area gradient-bg bg-cover shadow dark text-light text-center" style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Area
    ============================================= -->
    <div class="contact-area default-padding-top">
        <div class="container">
            <div class="contact-items">
                <div class="row">
                    
                    <div class="col-lg-8 left-item">
                        <div class="content">
                            <h2>Send a message</h2>
                            <form action="assets/mail/contact.php" method="POST" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" name="submit" id="submit">
                                            Send Message <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-lg-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 right-item">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <div class="info">
                                <h4>Location</h4>
                                <p>
                                    8-2-268/1/d,Flat 302,Banjara Hills,Road No.3,
                                    Hyderabad,Telangana,Pin Code: 500034
                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                         <!-- Single Item -->
                         <div class="item">
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="info">
                                <h4>Make a Call</h4>
                                <p>
                                    <a href="tel:+917207914005">+917207914005</a> <br> <a href="tel:+91 7207946760">+91 7207946760</a>
                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info">
                                <h4>Send a Mail</h4>
                                <p>
                                    <a href="mailto:info@srinutechnologies.com">info@srinutechnologies.com</a> <br> <a href="mailto:contact@srinutechnologies.com">contact@srinutechnologies.com</a>
                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Google Maps 
    ============================================= -->
    <div class="maps-area">
        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.653552868322!2d78.43347751487688!3d17.42840608805414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb90d478a3c2cb%3A0x208310c8fd24c158!2sSrinu%20Technologies%20Pvt%20Ltd%2C%20India.!5e0!3m2!1sen!2sin!4v1669036168977!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- End Google Maps -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">

                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="f-item contact">
                            <h4 class="widget-title">Contact Us</h4>
                            <p>
                                8-2-268/1/d,Flat 302,Banjara Hills,Road No.3,<br> Hyderabad,Telangana,Pin Code: 500034
                            </p>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    Hyderabad
                                </li>
                                <li>
                                    <i class="fas fa-envelope-open"></i>
                                    <a href="mailto:info@srinutechnologies.com">info@srinutechnologies.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-2 col-md-6 single-item">
                        <div class="f-item link">
                            <h4 class="widget-title">Services</h4>
                            <ul>
                                <li>
                                    <a href="webapp.html">Web Application Development</a>
                                </li>
                                <li>
                                    <a href="android.html">Android Application Development</a>
                                </li>
                                <li>
                                    <a href="digital.html">Digital Marketing</a>
                                </li>
                                <li>
                                    <a href="design.html">Designing  Services</a>
                                </li>
                                <li>
                                    <a href="services.html">All Services</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-2 col-md-6 single-item">
                        <div class="f-item link">
                            <h4 class="widget-title">Social Media Links</h4>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/srinutechnologiesofficial">Facebook</a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/srinutechnologies/">Instagram</a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/SrinuTechnolog1">Twitter</a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/stplindia/">Linked In</a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UC3-ylcVZtKoPk5eQ2cZAnKw">You Tube</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="f-item opening-hours">
                            <h4 class="widget-title">Opening Hours</h4>
                            <ul>
                                
                                <li> 
                                    <span>Mon - Sat :</span>
                                    <div class="float-right"> 9.30 - 6.30</div>
                                </li>
                               
                                
                                <li> 
                                    <span> Sunday : </span>
                                    <div class="float-right closed"> Closed </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
        <!-- Fixed Shape -->

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2021. All Rights Reserved by <a href="www.srinutechnologies.com">Srinu Technologies</a></p>
                    </div>
                    <div class="col-lg-6 text-right">
                        <ul>
                            
                                <a href="contact.php">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->

        <div class="fixed-shape">
            <img src="assets/img/shape/footer-shape.png" alt="Shape">
        </div>
        <!-- End Fixed Shape -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.simpleLoadMore.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>
                <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/63a15bf9b0d6371309d54191/1gkn4uidn';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>