<?php
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require '../vendor/autoload.php';
  // require '../vendor/phpmailer/phpmailer/src/SMTP.php';
  // require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
  // require '../vendor/phpmailer/phpmailer/src/Exception.php';

  if(isset($_POST['register'])){
    require "dbconnect.php";
    $Name = $con->real_escape_string($_POST['Name']);
    $Email = $con->real_escape_string($_POST['Email']);
    $Phone = $con->real_escape_string($_POST['Phone']);
    $SchoolName = $con->real_escape_string($_POST['SchoolName']);
    $SchoolCity = $con->real_escape_string($_POST['SchoolCity']);
    $Password = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789';
    $Password = str_shuffle($Password);
    $Password = substr($Password, 0, 8);
    $create_table1 = mysqli_query($con, "CREATE TABLE IF NOT EXISTS USER(ID INT(6) AUTO_INCREMENT PRIMARY KEY,
                                                                    Name varchar(255),
                                                                    Email varchar(255),
                                                                    Phone varchar(255),
                                                                    SchoolName varchar(255),
                                                                    SchoolCity varchar(255),
                                                                    Password varchar(255) )");

    if (!$create_table1) {
      echo("Can't create table1" . mysqli_error($con));
    }
    $insert = mysqli_query($con,"INSERT INTO USER(Name,Email,Phone,SchoolName,SchoolCity,Password)
                              VALUES('$Name','$Email','$Phone','$SchoolName','$SchoolCity','$Password')");

    $mail = new PHPMailer(TRUE);

      //Tell PHPMailer to use SMTP
      $mail->isSMTP();
      // Enable SMTP debugging
      // SMTP::DEBUG_OFF = off (for production use)
      // SMTP::DEBUG_CLIENT = client messages
      // SMTP::DEBUG_SERVER = client and server messages
      //Set the hostname of the mail server
      $mail->Host = 'smtp.gmail.com';
      // use
      // $mail->Host = gethostbyname('smtp.gmail.com');
      // if your network does not support SMTP over IPv6
      //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
      $mail->Port = 587;
      //Set the encryption mechanism to use - STARTTLS or SMTPS
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      //Whether to use SMTP authentication
      $mail->SMTPAuth = true;
      //Username to use for SMTP authentication - use full email address for gmail
      $mail->Username = 'contact@ecellvnit.org';
      //Password to use for SMTP authentication
      $mail->Password = 'Entrepreneurs1999';
      //Set who the message is to be sent from
      $mail->setFrom('contact@ecellvnit.org');
      //Set who the message is to be sent to
      $mail->addAddress($Email);
      //Set the subject line
      $mail->Subject = 'Welcome On Board';
      //Read an HTML message body from an external file, convert referenced images to embedded,
      //convert HTML into a basic plain-text alternative body
      $mail->isHTML(true);

      $mail->Body = '<!DOCTYPE html>
          <html>
              <head>
                  <style>
                      li{
                          padding:10px;
                      }
                      p{
                          font-size:16px;
                      }

                      *{
                          font-family:Helvetica,Arial,sans-serif;
                      }

                      h2{
                          text-align: center;
                          margin-top: 150px;

                      }
                      html, body{
                          background-color:#f7f9fb;
                          margin: 0;
                      }
                      .context {
                          font-size: 12px;
                          padding: 40px 60px;
                          margin-left:10%;
                          margin-right: 10%;
                      }

                      .context p{
                          font-size: 12px;
                      }
                      p{
                          margin: 15px 0px;
                      }

                  </style>
              </head>
              <body>

                  <div style="background: #0b0b0b; padding:10px 30px;"><img src="https://www.neo.ecellvnit.org/pubic/img/log.png"></div>
                  <h2 style="font-size:22px;">Welcome to NEO </h2><br>

                  <div class="context">


                      <h3><b>Hello '.$Name.',</b></h3>


                      <p>Thank You for registering! </p>
                      <div>
                          <p>We hope this mail finds you in the best of your health and cheerful spirits. We are well pleased to have you on board for this program.</p>


                          <p>
                        To keep you updated, all the relevant details will be e-mailed to you very shortly.<br>
                        Use these details to login to your dashboard:<br>
                        Username: '. $Email .'<br>
                        Password: '. $Password .'
                              Over this month, you will get access to plenty of valuable resources, which will help you guide your way through this program.<br>
                        For queries and in case of any difficulty, feel free to contact us.<br>

                      </p>
                          <p>
                              With warm regards,<br>
                              Gourav Routray<br>
                              Core-Coordinator, Ecell VNIT
                          </p>


                      </div>
                  </div>
              </body>
          </html>';

      // $url = 'https://startupconclave.ecellvnit.org/send';
      // $data = array('subject' => $subject, 'email' => $to, 'html' => $html, 'pass' => 'intheend');
      // use key 'http' even if you send the request to https://...
      // $options = array(
      //   'http' => array(
      //       'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
      //       'method'  => 'POST',
      //       'content' => http_build_query($data)
      //   )
      // );
      // $context  = stream_context_create($options);
      // $result = file_get_contents($url, false, $context);
      if(!$mail->send()){
        echo 'Message was not send';
      }


    if($insert){
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <!-- Begin Head -->
      <head>

          <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-125403862-1"></script>
          <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'UA-125403862-1');
          </script>
          <!-- Basic -->
          <meta charset="utf-8"/>
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta http-equiv="x-ua-compatible" content="ie=edge">
          <title>NEO</title>
          <meta name="keywords" content="Ecell, PNAF, Pan nit, vnit, Ecell VNIT, entreprenuship cell, Startup Conclave, 2019, consortium'19, vnit consortium, internit, business plan">
          <meta name="description" content="Great ideas result into great great undertakings which pave the way for glaring success. In order to facilitate this vision of promoting entrepreneurship in India, E-Cell VNIT organizes StartUp Conclave, a national business plan competition with PNAF">
          <meta name="author" content="Sagar Bansal">
          <meta name="theme-color" content="rgb(0,0,0)")>
          <!-- Web Fonts -->
          <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">

          <!-- Vendor Styles -->
          <link href="../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
          <link href="../public/css/animate.css" rel="stylesheet" type="text/css"/>
          <link href="../public/vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
          <link href="../public/vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
          <link href="../public/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
          <link href="../public/vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
          <link href="../public/vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>


          <!-- Theme Styles -->
          <link href="../public/css/style.css" rel="stylesheet" type="text/css"/>
          <link href="../public/css/global/global.css" rel="stylesheet" type="text/css"/>
          <link href="../public/css/custom.css" rel="stylesheet" type="text/css"/>

          <!-- Favicon -->
          <link rel="shortcut icon" href="../public/img/2.png" type="image/x-icon">

      </head>
      <!-- End Head -->


  <!-- Body -->
  <body id="home">


      <!--========== HEADER ==========-->
      <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
          <!-- Navbar -->
          <nav class="s-header-v2__navbar">
              <div class="container g-display-table--lg">
                  <!-- Navbar Row -->
                  <div class="s-header-v2__navbar-row">
                      <!-- Brand and toggle get grouped for better mobile display -->
                      <div class="s-header-v2__navbar-col">
                          <button type="button" class="collapsed s-header-v2__toggle" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
                              <span class="s-header-v2__toggle-icon-bar"></span>
                          </button>
                      </div>

                      <div class="s-header-v2__navbar-col s-header-v2__navbar-col-width--180">
                          <!-- Logo -->
                          <div class="s-header-v2__logo">
                              <a href="/" class="s-header-v2__logo-link">
                                  <img class="s-header-v2__logo-img s-header-v2__logo-img--default"  src="../public/img/ecell-black-logo.png" alt="Ecell Logo" height="50">
                                  <img class="s-header-v2__logo-img s-header-v2__logo-img--shrink" src="../public/img/logo-ecell-sm.png" alt="StartUp Conclave" height="60">
                              </a>
                          </div>
                          <!-- End Logo -->
                      </div>

                      <div class="s-header-v2__navbar-col s-header-v2__navbar-col--right">
                          <!-- Collect the nav links, forms, and other content for toggling -->
                          <div class="collapse navbar-collapse s-header-v2__navbar-collapse" id="nav-collapse">
                              <ul class="s-header-v2__nav">
                                  <li class="s-header-v2__nav-item"><a href="#home" class="s-header-v2__nav-link">Home</a></li>
                                  <li class="s-header-v2__nav-item"><a href="#about" class="s-header-v2__nav-link">About Us</a></li>
                                  <li class="s-header-v2__nav-item"><a href="#reg" class="s-header-v2__nav-link">Register</a></li>
                                  <li class="s-header-v2__nav-item"><a href="#faq" class="s-header-v2__nav-link">FAQs</a></li>
                                  <li class="s-header-v2__nav-item"><a href="#contact" class="s-header-v2__nav-link">Contact</a></li>
                              </ul>
                          </div>
                          <!-- End Nav Menu -->
                      </div>
                  </div>
                  <!-- End Navbar Row -->
              </div>
          </nav>
          <!-- End Navbar -->
      </header>


      <div id="landing" class="g-fullheight--xs">
          <div class="g-fullheight--md g-container--md g-text-center--xs g-ver-left--md g-padding-y-120--xs g-padding-y-300--md" style="width:100%;background: rgba(255,255,255,0)">
              <!--<div class="g-margin-b-60--xs">

                  <img class="resize" src="../public/img/B-01-01.png" alt="StartUp Conclave">

              </div>
              <div class="g-margin-b-60--xs">

                  <img class="resize" src="../public/img/log.png" alt="StartUp Conclave">
                  <p class="g-font-size-18--xs g-font-size-26--md g-color--dark g-margin-b-0--xs">Enlighting students and young entrepreneurs in their entrepreneurial journey.</p>
              </div>


          </div>-->
          <!--</div>-->
      </div>
    </div>
    <!--========== FOOTER ==========-->
    <!--========== FOOTER ==========-->
            <footer class="g-bg-color--dark">
                <!-- End Links -->
                <div class="container g-padding-y-60--xs">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4">

                            <!--<a href="http://pnaf.in">-->
                                <!--<img class="img-responsive g-padding-x-0--xs" style="height: 45px" src="../public/img/pnaf_logo.png" alt="PNAF">-->
                            <!--</a>-->

                            <div style="display: flex">





                                <a href="/" style="margin-left: 20px;">
                                    <img class="g-width-100--xs g-height-auto--xs" src="../public/img/E-Cell_white.png" alt="Ecell Logo">
                                </a>
                            </div>

                            <br><br>
                            <a class="s-header__action-link" href=" https://m.facebook.com/vnitecell/" target="_blank">
                                <i class="g-padding-r-5--xs ti-facebook"></i>
                                <span class="g-display-none--xs g-display-inline-block--sm">Facebook</span>
                            </a>
                            <a class="s-header__action-link" href="https://twitter.com/ecell_vnit" target="_blank">
                                <i class="g-padding-r-5--xs ti-twitter"></i>
                                <span class="g-display-none--xs g-display-inline-block--sm">Twitter</span>
                            </a>
                            <a class="s-header__action-link" href=" https://www.instagram.com/ecellvnit/" target="_blank">
                                <i class="g-padding-r-5--xs ti-instagram"></i>
                                <span class="g-display-none--xs g-display-inline-block--sm">Instagram</span>
                            </a>
                            <br>
                            <a class="s-header__action-link" href=" https://www.linkedin.com/company/6615520/" target="_blank">
                                <i class="g-padding-r-5--xs ti-linkedin"></i>
                                <span class="g-display-none--xs g-display-inline-block--sm">LinkedIn</span>
                            </a>
                            <a class="s-header__action-link" href=" https://www.youtube.com/channel/UC0KNOmODhqLcEpcfN9qEsIQ" target="_blank">
                                <i class="g-padding-r-5--xs ti-youtube"></i>
                                <span class="g-display-none--xs g-display-inline-block--sm">YouTube</span>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                                <p class="g-color--white">For Association Opportunities Contact:<br><b>contact@ecellvnit.org</b></p>
                                <p class="g-color--white">For Sponsorship Opportunities Contact:<br><b>agnikrishnaa@gmail.com<b></b></b></p><b><b>

                        </b></b></div><b><b>
                        <div class="col-sm-12 col-md-4 col-lg-4 g-text-right--md">
                            <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white"> All rights reserved<br>© <a class="g-color--primary" href="https://www.ecellvnit.org/" target="_blank">E-cell Vnit</a></p>
                        </div>
                    </b></b></div><b><b>
                </b></b>
                </div>
                <!-- End Copyright -->
            </footer>


    <!--========== END FOOTER ==========-->

    <!-- Back To Top -->
            <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

            <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
            <!-- Vendor -->
            <script type="text/javascript" src="../public/vendor/jquery.min.js"></script>
            <script type="text/javascript" src="../public/vendor/jquery.migrate.min.js"></script>
            <script type="text/javascript" src="../public/vendor/bootstrap/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="../public/vendor/jquery.smooth-scroll.min.js"></script>
            <script type="text/javascript" src="../public/vendor/jquery.back-to-top.min.js"></script>
            <script type="text/javascript" src="../public/vendor/scrollbar/jquery.scrollbar.min.js"></script>
            <script type="text/javascript" src="../public/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
            <script type="text/javascript" src="../public/vendor/jquery.parallax.min.js"></script>
            <script type="text/javascript" src="../public/vendor/swiper/swiper.jquery.min.js"></script>
            <script type="text/javascript" src="../public/vendor/jquery.wow.min.js"></script>
            <script type="text/javascript" src="../public/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>

            <!-- General Components and Settings -->
            <script type="text/javascript" src="../public/js/global.min.js"></script>
            <script type="text/javascript" src="../public/js/components/header-sticky.min.js"></script>
            <script type="text/javascript" src="../public/js/components/scrollbar.min.js"></script>
            <script type="text/javascript" src="../public/js/components/magnific-popup.min.js"></script>
            <script type="text/javascript" src="../public/js/components/swiper.min.js"></script>
            <script type="text/javascript" src="../public/js/components/wow.min.js"></script>
            <script type="text/javascript" src="../public/js/components/faq.min.js"></script>
            <script type="text/javascript" src="../public/js/components/portfolio-4-col-slider.min.js"></script>
            <script type="text/javascript" src="../public/js/custom.js"></script>

    <!--========== END JAVASCRIPTS ==========-->
  </body>

  </html>

  <?php
    }
  }else {
    header("location:../index.php");
  }
?>
