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

if(isset($_POST['post'])){
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
  <title>VOKS Technologies - Home</title>
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
        <h1 class="text-light"><a href="#intro" class="scrollto"><span style="color: rgb(239, 241, 75)">V</span><span style="color: rgb(65, 208, 252)">O</span><span style="color: rgb(236, 32, 73)">K</span><span style="color: rgb(20, 220, 63)">S</span>
          </span><span style="color: rgb(22, 33, 199); font-size: 20px;">Technologies</span></a></h1>
      </div>
 
      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <li>RC Number : 3068853</li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="img/intro-img.svg" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2 style="font-size: 45px;"> We're here to provide<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>solutions</span><br>for your ICT problems!</h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          <a href="#services" class="btn-services scrollto">Our Services</a>
        </div>
      </div>

    </div>
  </section><!-- #intro -->
  

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>VOKS Technologies is a reowned ICT enthusiast company in Nigeria and Africa at large. The copmany started in the year 2018, and has since then live up to expectations in recent years.
            We are problem solvers, as we are always here to solve your ICT problems for you.
          </p></header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
              We at VOKS Technologies are always aware of all your problems, as we work relentlessly to make sure you get the best service possible. We recieve commendations for our service on a yearly basis.
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Apps</a></h4>
              <p class="description">This can be really unbelieveable, but it's real. Our App has the highest number of downloads in two years.
                Our clients really enjoys our services.
              </p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">Photos</a></h4>
              <p class="description">Photos don't lie they say. You can easily check out our <a href="#portfolio" style="color: blue">portfolio</a> and confirm our achievements over the years.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Graphical Status</a></h4>
              <p class="description">Publishers yearly chart on ICT companies, has clearly state that we are the best in the Nigeria and Africa at large.</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="img/about-img.svg" class="img-fluid" alt="">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/about-extra-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <center><h4>24 Hours Customer Care Service</h4></center>
            <p>
            Our stable 24 hours customer care service is the best you can ever think about. The word "<em style="color:rgb(8, 11, 216)"> You First </em>" is our watch word when it comes to you. 
            </p>
            <p>
              Please, do not hesitate to reach us and report any misconduct, or unsatisfactory service rendered to you . As we are always there to correct any kind of problem and make you happy. You can always count on us.
            </p>
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/about-extra-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <center><h4>Your problem is Ours</h4></center>
            <p>
            We know your problems, and that is why we made it ours. Our experts are busy making research day and night, just to bring you the best.  
            </p>
            <p>
              We give you the best of our service at a very cheaper rate. Your satisfaction is what keeps us moving. We are 100% sure of your ICT issues solved with
              our experts always there to reach your request at anytime you need our service. 
            </p>
          </div>
          
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3> Our Services</h3>
          <p>
            We render different services on ICT only at a cheaper rate. Check out our services below
          </header>

        <div class="row">

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-world-outline" style="color: #4680ff;"></i></div>
              <h4 class="title">Advoka <i style="color: gold">(pending!)</i></h4>
              <p class="description">Advoka is all about advertisement. With Advoka, we help connect your business to the world, connecting it to the right customers is what we do best.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-mic-outline" style="color: #4680ff;"></i></div>
              <h4 class="title">VokTunes <i style="color: green">(coming soon!)</i></h4>
              <p class="description">Sell your song with VokTunes. You can easily sell your songs to your fans through <a href=" ">Voktunes</a> without much stress.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-cart-outline" style="color: #4680ff;"></i></div>
              <h4 class="title">VokStore <i style="color: green">(coming soon!)</i></h4>
              <p class="description">Buy, Sell and Create your own store at Vok Store. With a very fast payment integration, you can always count on us for legit online businesses.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-email-outline" style="color:#4680ff;"></i></div>
              <h4 class="title">VoksMail <i style="color: green">(coming soon!)</i></h4>
              <p class="description">Send and Recieve mails from your Family, Friends, Colleagues and love ones on VOKSMAIL. Generate it... Send it... & Recieve it... It's super fast and easy. </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-lightbulb-outline" style="color: #4680ff;"></i></div>
              <h4 class="title">VokSoft <i style="color: green">(coming soon!)</i></h4>
              <p class="description">Get the best software for your business at VokSoft. No matter your niche, we always gat your back with the right software. Check out  <strong><a href="_">VOKSOFT HUB</a></strong></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-cloud-upload-outline" style="color: #4680ff;"></i></div>
              <h4 class="title">VokHost <i style="color: green">(coming soon!)</i></h4>
              <p class="description">Host your websites with VokHost, and get a free SSL. We can guarrantee you a fast and secured server.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Why choose us?</h3>
          <p>We are a Nigerian ICT revolutionist, and that is why we are here to bring you all ICT packages at a cheaper rate. Making your payments in Naira will be more cheaper, compare to when you will be paying in USD,
            and we will be discharging equal service (even more) to you, since we know the Nigerian market than anyone else.
          </p>
        </header>
    <ul id="faq-list" class="wow fadeInUp">
        <div class="row row-eq-height justify-content-center">
          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-laptop"></i>
              <div class="card-body">
                <h5 class="card-title">Professionalism</h5>
                <p class="card-text">We are professional in all branches of ICT. Our professionalisim has earn us more projects overtime . . .</p>
                     <a data-toggle="collapse" class="collapsed" href="#faq1" style="color:white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Read more</a>
                      <div id="faq1" class="collapse" data-parent="#faq-list">
                        <br>
                        <p>
                          and our clients also increase on a daily basis. We give you the best service, which you can't get elsewhere, and also provide you with the latest updates within our reach
                          .Our workers are always restless, and our always active customer care is the best. You will never regret working with us .
                        </p>
                      </div>                
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-gavel"></i>
              <div class="card-body">
                <h5 class="card-title">Best Decision Makers</h5>
                <p class="card-text">When it comes to ICT, we are the best decision makers in the field. We know what to do to . . .</p>
                <a data-toggle="collapse" class="collapsed" href="#faq2" style="color:white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Read more</a>
                    <div id="faq2" class="collapse" data-parent="#faq-list">
                      <br>
                      <p>
                        make your ICT problems vanish. Our experts are always there to make the right decision for you. Your well being is our strength at VOKS Technologies, and that is the major reason we got your back. You can always consult us 
                        whenever you think you are confused. We will always lead you right.
                      </p>
                    </div>             
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-object-group"></i>
              <div class="card-body">
                <h5 class="card-title">Transparency</h5>
                <p class="card-text">We are always transparent with our clients. Our transparency has earn us trust in Nigeria and . . . </p>
                 <a data-toggle="collapse" class="collapsed" href="#faq3" style="color:white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Read more</a>
                    <div id="faq3" class="collapse" data-parent="#faq-list">
                      <br>
                      <p>
                      Africa at large. We will never add or subtract negatively to any service we're rendering to you except it's been approve officially by the management. As we know any illegal action will destroy our reputation, and 
                      also have negative effect on you and your business. Please, do not hesitate to <a href="#contact">contact us</a> and make enquiry if you discover any illegal act. 
                      </p>
                    </div>
    </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row counters">
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">500</span>
            <p>Clients</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">841</span>
            <p>Projects</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">2,364</span>
            <p>Hours Of Support</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">12</span>
            <p>Hard Workers</p>
          </div> 
        </div>
      </div>
    </section>

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="clearfix">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/portfolio/phone.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Smart Phone View</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/phone.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/voks full screen.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/voks full screen.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/iphone.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">iPhone View 2</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/iphone.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/voks half screen.jpg" height="300" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/voks half screen.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/phone1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">iPhone View</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/phone1.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/tab.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Tab View</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/tab.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="section-bg">

      <div class="container">

        <div class="section-header">
          <strong><h3>Our Clients</h3></strong>
          </div>

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/paystack1.jpg" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/interswitch.png" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/download (3).png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/BAWED LOGO new.png" class="img-fluid" alt="">
            </div>
          </div>
          

        </div>

      </div>

    </section>

    <!--==========================
      Contact Section
    ============================-->

    <?php
//including the database connection file

include_once("config.php");
?>
</body>

<tr>
<td class="bodyText">
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<?php

if(isset($_POST['submit'])){
$Cname=$_POST['Cname'];
$Cmail=$_POST['Cmail'];
$Csubject=$_POST['Csubject'];
$Cpost=$_POST['Cpost'];
$Cmessage=$_POST['Cmessage'];
    
{
mysqli_query($connect,"INSERT INTO `contactmail`(`Cname`,`Cmail`,`Csubject`,`Cpost`,`Cmessage`) VALUES ('$Cname','$Cmail','$Csubject','$Cpost','$Cmessage')");

$_SESSION['success'] = "Registration Successful";
    
   }
   
}

?>


    <section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row wow fadeInUp">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Atipere%2C%20Akure-Oda%20Road%2C%20Akure%2C%20Nigeria&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/namecheap-promo-code/">go to namecheap website</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:320px;width:700px;}</style></div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-5 info">
                <i class="ion-ios-location-outline"></i>
                <p>Plot 4, Rd. 13, Oda Rd
                  Akure, Ondo State
                  Nigeria </p>
              </div>
              <div class="col-md-4 info">
                <i class="ion-ios-email-outline"></i>
                <p>info@vokstechnologies.com</p>
              </div>
              <div class="col-md-3 info">
                <i class="ion-ios-telephone-outline"></i>
                <p>+234 816 6797 348</p>
              </div>
            </div>


            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="Cname" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="Cmail" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="Csubject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="Cpost" id="subject" placeholder="Occupation or Post" data-rule="minlen:4" data-msg="Please enter at least 8 chars of post" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="Cmessage" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message                                                                                                                
                  
                  
                  
                                                                                                                             Maximum of 150 words"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" name="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

 <!--==========================
          Tetimonials
    ============================-->
    <section id="testimonials" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
    
              <div class="testimonial-item">
                
                <h3>Nwaogbo Lucky</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  Advoka has been a means of advertizing my company (planethost & softicu) since it existence. I have never regret doing business with VOKSTECH
                </p>
              </div>
    
              <div class="testimonial-item">
             
                <h3>David Chidubem</h3>
                <h4>Designer</h4>
                <p>
                  Designing is what i love to do, Advertizement is what i find so difficult to do. But Advoka has really help me with a cheaper option
              </p>
              </div>
    
              <div class="testimonial-item">
                
                <h3>Collins</h3>
                <h4>Article Writer</h4>
                <p>
                 I am an article writer, and i got alot of inspiration from voks technologies. This guys are made up of tech.(thumbs up)
              </p>
              </div>
    
              <div class="testimonial-item">
                
                <h3>Adegbusi Olayinka</h3>
                <h4>Freelancer</h4>
                <p>
                  The introduction of advoka brought about the downfall of google ads in Nigeria, this a really a master brainer. It helps me alot. It's much cheaper to run Ads nowadays.
              </p>
              </div>
    
              <div class="testimonial-item">
               
                <h3>John Friday</h3>
                <h4>Entrepreneur</h4>
                <p>
                  Avertizement made easy. Am a young Entrepreneur, can't afford to advertize my product before, but now i can gladly say "YES. I CAN"
                </p>
              </div>

            </div>

          </div>
        </div>


      </div>
    </section><!-- #testimonials -->

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3><a href="home.php"><img src="img/vokslogo - Copy.png" width="200" height="130" alt="voks-logo"></a></h3>
            <p>We are a professional ICT enthusiast. On 29th of June 2019 at the Eko Hotels, we're voted the best ICT platform of the year (Nigeria), and 
              <a href="advoka.ng" style="color:greenyellow"> Advoka </a> (which is also a branch of VOKS Technologies) was voted the best advertizement agency of the year on the same night. We have a very huge
              reputation across the country, as our service speaks for us all over. You can always count on us.
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#intro">Home</a></li>
              <li><a href="#about">About us</a></li>
              <li><a href="#services">Services</a></li>
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
