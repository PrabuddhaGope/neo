<!DOCTYPE html>
<html lang="en">

<?php include("includes/head.php") ?>

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
              <p class="text-uppercase g-font-size-20--xs g-font-weight--700 g-letter-spacing--2" style="color: #0079bf">Login</p>
          </div>

          <form class="center-block g-width-500--sm g-width-550--md" role="form" method="post" action="reglog/login.php">
                    <div class="g-margin-b-30--xs">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* Email" name="Email" required>
                    </div>

                    <div class="g-margin-b-30--xs">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* Password" name="Password" required>
                    </div>

                </form>
              </div>
            </div>
        <!--========== END PROMO BLOCK ==========-->


<?php include("includes/footer.php") ?>


      <?php include("includes/footer.php") ?>
    </body>
    </html>
