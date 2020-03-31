<?php
//including the database connection file
session_start();
include_once("config.php");
?>
</body>

<tr>
<td class="bodyText">
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<?php

if(isset($_POST['submit'])){
$mail=$_POST['mail'];

    
{
mysqli_query($connect,"INSERT INTO `newslettermail`(`mail`) VALUES ('$mail')");

$_SESSION['success'] = "Registration Successful";
    
   }
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>VOKS Technologies - FAQ</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  <script>
      $( function() {
        $( "#accordion" ).accordion();
      } );
      </script>


</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <h1 class="text-light"><a href="home.php#intro" class="scrollto"><span style="color: rgb(239, 241, 75)">V</span><span style="color: rgb(65, 208, 252)">O</span><span style="color: rgb(236, 32, 73)">K</span><span style="color: rgb(20, 220, 63)">S</span>
          <span style="color: rgb(22, 33, 199); font-size: 20px;">Technologies</span></a></h1>
      </div>
 
      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li>RC Number : 3068853</li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <body>



  <br>   <br> 

<br>   <br>
<br>   <br>
         

          
<h1><strong>Frequently Asked Questions   (FAQ)</strong></h1><br>

<div class="accordion" id="myAccordion" style="color: black">
              <div class="card">
                  <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                          <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">1. Is VOKS Technologies a registered company in Nigeria?</button>
                      </h2>
                  </div>
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#myAccordion" style="color: black">
                      <div class="card-body">
                          <p style="color: black">&nbsp;&nbsp;&nbsp;&nbsp;YES. VOKS Technologiesis a registered company in Nigeria. We are registered with the Nigerian cooperate 
                        affiars commision (CAC), with the RC Number 3068853.</p>
                      </div>
                  </div>
              </div>
              <div class="card">
                <div class="card-header" id="heading2">
                    <h2 class="mb-0">
                        <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2">2. What is the main function of VOKS Technologies?</button>
                    </h2>
                </div>
                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#myAccordion">
                    <div class="card-body">
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;The main function of VOKS Technologies is to bring technology into the Nigerian market, beating all odd in the help to improve the country's economy.</p>
                    </div>
                </div>
            </div>
              <div class="card">
                  <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                          <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree">3. Is VOKS Technologies a Non Govermental Organization (NGO)?</button>
                      </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#myAccordion">
                      <div class="card-body">
                          <p>&nbsp;&nbsp;&nbsp;&nbsp;VOKS Technologies is not a Non - Governmental Organization (NGO). We are a firm that's established to provide services in exchange for profit.</p>
                      </div>
                  </div>
              </div>
              <div class="card">
                <div class="card-header" id="heading4">
                    <h2 class="mb-0">
                        <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4">4. Do Advoka have any relationship with VOKS Technologies?</button>
                    </h2>
                </div>
                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#myAccordion">
                    <div class="card-body">
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;YES. Advoka is a branch of VOKS Technologies. Advoka is registered under VOKS Technologies, therefore sharing in everything that has to do with VOKS Technologies.</p>
                    </div>
                </div>
                <div class="card">
                  <div class="card-header" id="heading5">
                      <h2 class="mb-0">
                          <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5">5. Where is VOKS Technologies located?</button>
                      </h2>
                  </div>
                  <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#myAccordion">
                      <div class="card-body">
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;VOKS Technologies is located in Nigeria. We have our Head office in Akure, Ondo state. Kindly check the footer of the official website of VOKS Technologies
                          to get more information or direction you required.
                        </p>
                      </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="heading6">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse6">6. Is VOKS Technologies all about advertisement?</button>
                        </h2>
                    </div>
                    <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#myAccordion">
                        <div class="card-body">
                          <p>&nbsp;&nbsp;&nbsp;&nbsp;NO. We are a ICT LLC company. We deal with varoius parts of ICT. Only <strong><a href="advoka.ng">Advoka</a></strong> is the company's advertizement platform          </p>
                          </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="heading7">
                          <h2 class="mb-0">
                              <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse7">7. How can i know more about VOKS Technologies products?</button>
                          </h2>
                      </div>
                      <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#myAccordion">
                          <div class="card-body">
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;You can know more about VOKS Technologies product by either visiting our website on regular basis, or follow us in social media. We are literally on 
                              every social media. You can get updated there. You can as well drop your active mail in our newsletter, as we'll always update you through your mail.
                            </p>
                          </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="heading8">
                            <h2 class="mb-0">
                                <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse8">8. I wish to get updates from VOKS Technologies about any of their product?</button>
                            </h2>
                        </div>
                        <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#myAccordion">
                            <div class="card-body">
                              <p>&nbsp;&nbsp;&nbsp;&nbsp;You can know more about VOKS Technologies product by either visiting our website on regular basis, or follow us in social media. We are literally on 
                              every social media. You can get updated there. You can as well drop your active mail in our newsletter, as we'll always update you through your mail.</p> 
                              </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="heading9">
                              <h2 class="mb-0">
                                  <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse9">9. How do i place my comments or testimonials about the company?</button>
                              </h2>
                          </div>
                          <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#myAccordion">
                              <div class="card-body">
                                <p>Right on the <a href="home.php">home</a> page of the officail website of VOKS Technologies, you scroll down to <a href="home.php/#contact">Contact Us</a>. Fill in your details, and comments or testimonials (make sure your e-mail is active, as we can make reference to it). </p>
                              </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="heading10">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse10">10. When is VOKS Technologies established?</button>
                                </h2>
                            </div>
                            <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#myAccordion">
                                <div class="card-body">
                                  <p>VOKS Technologies was establishe in February 2018.</p>
                                </div>
</div>
</div>

<br>   <br> 
        <br>   <br>
        <br>   <br>
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3><a href="home.php"><img src="img/vokslogo - Copy.png" width="200" height="90" alt="voks-logo"></a></h3>
            <p>We are a professional ICT ethuiast. On 29th of June 2019 at the Eko Hotels, we're voted the best ICT platform of the year (Nigeria), and 
              <a href="advoka.ng" style="color:greenyellow"> Advoka </a> (which is also a branch of VOKS Technologies) was voted the best advertizement agency of the year on the same night. We have a very huge
              reputation across the country,as our service speaks for us allover. You can always count on us.
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="home.php">Home</a></li>
              <li><a href="terms of service.php">Terms of service</a></li>
              <li><a href="privacy.php">Privacy policy</a></li>
              <li><a href="faq.php">FAQ</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Plot 4, Rd. 13, Oda Rd. 
              Akure, Ondo State
              Nigeria  <br>
              <strong>Phone:</strong> +234 816 6797 348<br>
              <strong>Email:</strong> info@vokstechnologies.com.ng<br>
            </p>

            <div class="social-links">
              <a href="https://twitter.com/vokstechnologi2" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https:..facebook.com/vokstechnologies" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://instagram.com/vokstechnologie1" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="https://linkedin.com/vokstechnologies" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Sign up for FREE e-mail alerts on recent updates from VOKS Technologies. We will use your e-mail address only for sending you Newsletters. 
              Please see our Privacy Notice for details of your data protection rights. Thanks
            </p>
            <form class="form-inline" role="form">
              <div class="form-group">
              <input type="email" name="mail" checked><input type="submit"  name="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>VOKS</strong> 2020. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
        -->
       
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

  <!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5e50e8e0a89cda5a18876272/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->

</body>
</html>
