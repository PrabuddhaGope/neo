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
    require "../dbconnect.php";
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
    $insert = mysqli_query($con,"INSERT INTO CA(Name,Email,Phone,SchoolName,SchoolCity,Password)
                              VALUES('$Name','$Email','$Phone','$SchoolName', '$SchoolCity','$Password')");
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

  <?php include("includes/head.php");?>


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
                                  <img class="s-header-v2__logo-img s-header-v2__logo-img--default"  src="public/img/ecell-black-logo.png" alt="Ecell Logo" height="50">
                                  <img class="s-header-v2__logo-img s-header-v2__logo-img--shrink" src="public/img/logo-ecell-sm.png" alt="StartUp Conclave" height="60">
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

                  <img class="resize" src="public/img/B-01-01.png" alt="StartUp Conclave">

              </div>
              <div class="g-margin-b-60--xs">

                  <img class="resize" src="public/img/log.png" alt="StartUp Conclave">
                  <p class="g-font-size-18--xs g-font-size-26--md g-color--dark g-margin-b-0--xs">Enlighting students and young entrepreneurs in their entrepreneurial journey.</p>
              </div>


          </div>-->
          <!--</div>-->
      </div>
    </div>
    <!--========== FOOTER ==========-->
    <?php include("includes/footer.php");?>

    <!--========== END FOOTER ==========-->

    <?php include("includes/scripts.php");?>
    <!--========== END JAVASCRIPTS ==========-->
  </body>

  </html>

  <?php
    }
  }else {
    header("location:../index.php");
  }
?>
