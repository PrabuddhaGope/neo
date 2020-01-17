
<!DOCTYPE html>
<html lang="en" class="no-js">
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
                                    <li class="s-header-v2__nav-item"><a href="login.php" class="s-header-v2__nav-link">Login</a></li>
                                    <li class="s-header-v2__nav-item"><a href="reglog/logout.php" class="s-header-v2__nav-link">Logout</a></li>
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
        <!--========== END HEADER ==========-->

        <!--========== PROMO BLOCK ==========-->
        <div id="reg" class="bg_element">
          <!-- <h2 class="g-text-center--xs g-font-size-22--xs g-font-size-36--md g-color--white g-padding-y-20--xs g-padding-y-60--sm">Register Now</h2> -->
          <div class="g-fullheight--md g-container--md g-text-center--xs g-ver-left--md g-padding-y-120--xs g-padding-y-300--md" >
            <div class="g-margin-b-60--xs">
              <p class="text-uppercase g-font-size-20--xs g-font-weight--700 g-letter-spacing--2" style="color: #0079bf">Pay Using QR-Code Below</p>
          </div>

          
                      
                   <div class="row g-hor-centered-row--md g-row-col--5">
                <div class="col-sm-3 col-xs-6 col-sm-push-4 g-hor-centered-row__col">
                
                        <img class="img-responsive g-padding-x-0--xs" src="public/img/qr-code.jpeg" alt="StartUp Conclave">
                    
                </div>
            
             <div class="col-sm-3" ></div>
                <div class="col-sm-8 col-sm-pull-3 g-hor-centered-row__col g-text-left--xs g-text-right--md" style="padding-top: 30%;text-align: center;">
                    <!--<h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs">About StartUp Conclave</h2>-->
                    <div style="margin-bottom: 10%;visibility: hidden;"></div>
                    <p class="g-font-size-18--sm" style="color: white;">You will recieve a payment confirmation email within 6 hours of your payment.</p>
                </div>
            </div>
        </div>

                

              </div>
            </div>
        <!--========== END PROMO BLOCK ==========-->


<?php include("includes/footer.php") ?>



    </body>
    </html>
