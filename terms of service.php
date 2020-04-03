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
  <title>VOKS Technologies - Terms of Service</title>
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

  <!--==========================
    Terms of Service
  ============================-->

  <br>   <br> 
<br>   <br>
<br>   <br> 


          
<h2><STRONG>Terms of Service</STRONG></h2><br>
<p>These terms of service outline the rules and regulations for the use of Advoka's Website.</p> <br /> 

VOKS Technologies is located at:<br/><br><strong>
<address>
&nbsp;&nbsp;&nbsp;&nbsp; Plot 4, Rd. 13, Oda Road, Akure.
&nbsp;&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp;&nbsp; ZIP Code : 340223 - Ondo State , Nigeria<br/>&nbsp;&nbsp;&nbsp;&nbsp; Mobile : +234 816 6797 348	</address></strong><br><br>
  
<h2>1. Terms</h2>

<p>By accessing this Website, accessible from https://vokstechnologies.com.ng, you are agreeing to be bound by these Website Terms and Conditions of Use and agree that you are responsible for the agreement with any applicable local laws. If you disagree with any of these terms, you are prohibited from accessing this site. The materials contained in this Website are protected by copyright and trade mark law. </p>

<h2>2. Use License</h2>

<p>Permission is granted to temporarily download one copy of the materials on Voks's Website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:</p>

<ul>
    <li>modify or copy the materials;</li>
    <li>use the materials for any commercial purpose or for any public display;</li>
    <li>attempt to reverse engineer any software contained on VOKS Technologies's Website;</li>
    <li>remove any copyright or other proprietary notations from the materials; or</li>
    <li>transferring the materials to another person or "mirror" the materials on any other server.</li>
</ul>

<p>This will let VOKS Technologies to terminate upon violations of any of these restrictions. Upon termination, your viewing right will also be terminated and you should destroy any downloaded materials in your possession whether it is printed or electronic format.</p>

<h2>3. Disclaimer</h2>

<p>All the materials on VOKS Technologies’s Website are provided "as is". VOKS Technologies makes no warranties, may it be expressed or implied, therefore negates all other warranties. Furthermore, VOKS Technologies does not make any representations concerning the accuracy or reliability of the use of the materials on its Website or otherwise relating to such materials or any sites linked to this Website.</p>

<h2>4. Limitations</h2>

<p>VOKS Technologies or its suppliers will not be hold accountable for any damages that will arise with the use or inability to use the materials on VOKS Technologies’s Website, even if VOKS Technologies or an authorize representative of this Website has been notified, orally or written, of the possibility of such damage. Some jurisdiction does not allow limitations on implied warranties or limitations of liability for incidental damages, these limitations may not apply to you.</p>

<h2>5. Revisions and Errata</h2>

<p>The materials appearing on VOKS Technologies’s Website may include technical, typographical, or photographic errors. VOKS Technologies will not promise that any of the materials in this Website are accurate, complete, or current. VOKS Technologies may change the materials contained on its Website at any time without notice. VOKS Technologies does not make any commitment to update the materials.</p>

<h2>6. Links</h2>

<p>VOKS Technologies has not reviewed all of the sites linked to its Website and is not responsible for the contents of any such linked site. The presence of any link does not imply endorsement by VOKS Technologies of the site. The use of any linked website is at the user’s own risk.</p>

<h2>7. Site Terms of Use Modifications</h2>

<p>VOKS Technologies may revise these Terms of Use for its Website at any time without prior notice. By using this Website, you are agreeing to be bound by the current version of these Terms and Conditions of Use.</p>

<h2>8. Your Privacy</h2>

<p>Please read our <a href="https://voks/privacy.php">Privacy Policy</a>.</p>

<h2>9. Governing Law</h2>

<p>Any claim related to VOKS Technologies's Website shall be governed by the laws of ng without regards to its conflict of law provisions.</p>

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
              <a href="https://instagram.com/@vokstechnologie1" class="instagram"><i class="fa fa-instagram"></i></a>
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
        &copy; Copyright <strong>VOKS technologies</strong> 2020. All Rights Reserved
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
