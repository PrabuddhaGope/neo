<!DOCTYPE html>
<html lang="en" class="no-js">
    {{> head }}

    <!-- End Head -->

    <!-- Body -->
    <body>

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
                                    <img class="s-header-v2__logo-img s-header-v2__logo-img--default" src="static/img/up.png" alt="StartUp Conclave" height="70">
                                    <img class="s-header-v2__logo-img s-header-v2__logo-img--shrink" src="static/img/up.png" alt="StartUp Conclave" height="60">
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>

                        <div class="s-header-v2__navbar-col s-header-v2__navbar-col--right">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse s-header-v2__navbar-collapse" id="nav-collapse">
                                <ul class="s-header-v2__nav">
                                    <li class="s-header-v2__nav-item"><a href="/" class="s-header-v2__nav-link">Home</a></li>
                                    <li class="s-header-v2__nav-item"><a href="/logout" class="s-header-v2__nav-link">Logout</a></li>
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
        <div id="login" class="s-promo-block-v1 g-fullheight--xs g-bg-color--primary-ltr">
            <div class="container g-ver-center--md g-padding-y-100--xs">
                <div class="row g-hor-centered-row--md g-margin-t-20--sm">
                    <div class="col-lg-4 col-sm-4 g-hor-centered-row__col">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="g-text-center--xs g-margin-b-40--xs">

                                  <form method="post" action="" id="payment_form" class="center-block g-width-300--xs g-width-350--md g-bg-color--white-opacity-lightest g-box-shadow__blueviolet-v1 g-padding-x-40--xs g-padding-y-60--xs g-radius--4">
                                        <div id="alertinfo" class="dv"></div>

                                        <h2 class="g-font-size-30--lg g-font-size-50--md g-color--white">Payment</h2>
                                        <p class="g-font-size-20--xs g-color--white">Thank You for registering your team in Startup Conclave 2019. Please make the payment of 300 INR (+ 2% bank charge) to activate your account.</p>

                                      <p class="g-font-size-16--xs g-color--red">Note: Kindly use your registered <b>team email address</b> only at time of <b>payment</b>.<br> Then only our server can verify your payment made on the payumoney gateway.</p>
                                        <div class='pm-button text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs'><a href='https://www.payumoney.com/paybypayumoney/#/1083C7F5FB65CCFAB64D802254E45804'>Pay Now</a></div>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--========== END PROMO BLOCK ==========-->

        <!--========== FOOTER ==========-->
        {{> footer}}
        {{> scripts }}

        <script type="text/javascript">


            function launchBOLT() {
                bolt.launch({
                key: "{{session.payment.key}}",
                txnid:"{{session.payment.txnid}}",
                hash: "{{session.payment.hash}}",
                amount: "{{session.payment.amount}}",
                firstname: "{{session.payment.fname}}",
                email: "{{session.payment.email}}",
                phone: "{{session.payment.mobile}}",
                productinfo: "{{session.payment.pinfo}}",
                udf5: "{{session.payment.udf5}}",
                surl : "http://www.localhost:3000/payment",
                furl: "http://www.localhost:3000/payment"
            },{ responseHandler: function(BOLT){
                    console.log( BOLT.response.txnStatus );
                    if(BOLT.response.txnStatus != 'CANCEL')
                    {
                        //Salt is passd here for demo purpose only. For practical use keep salt at server side only.
                        var fr = '<form action=\"'/payment+'\" method=\"post\">' +
                        '<input type=\"hidden\" name=\"key\" value=\"'+BOLT.response.key+'\" />' +
                        '<input type=\"hidden\" name=\"txnid\" value=\"'+BOLT.response.txnid+'\" />' +
                        '<input type=\"hidden\" name=\"amount\" value=\"'+BOLT.response.amount+'\" />' +
                        '<input type=\"hidden\" name=\"productinfo\" value=\"'+BOLT.response.productinfo+'\" />' +
                        '<input type=\"hidden\" name=\"firstname\" value=\"'+BOLT.response.firstname+'\" />' +
                        '<input type=\"hidden\" name=\"email\" value=\"'+BOLT.response.email+'\" />' +
                        '<input type=\"hidden\" name=\"udf5\" value=\"'+BOLT.response.udf5+'\" />' +
                        '<input type=\"hidden\" name=\"mihpayid\" value=\"'+BOLT.response.mihpayid+'\" />' +
                        '<input type=\"hidden\" name=\"status\" value=\"'+BOLT.response.status+'\" />' +
                        '<input type=\"hidden\" name=\"hash\" value=\"'+BOLT.response.hash+'\" />' +
                        '</form>';
                        var form = jQuery(fr);
                        jQuery('body').append(form);
                        form.submit();
                    }
                },
                    catchException: function(BOLT){
                        alert( BOLT.message );
                        console.log(BOLT.message);
                    }
                });
                }


        </script>

    </body>
    <!-- End Body -->
</html>