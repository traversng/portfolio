<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta property="og:title" content="Travis Ueki's Portfolio" />
    <meta property="og:url" content="http://www.travisueki.com" />
    <meta property="og:description" content="The personal portfolio of Travis Ueki" />

    <title>Travis Ueki</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins -->
    <link href="assets/css/simpletextrotator.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/et-line-font.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/flexslider.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">

    <!-- Template core CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Custom css -->
    <link href="assets/css/custom.css" rel="stylesheet">
</head>
<body>
    <!-- PRELOADER -->
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    <!-- /PRELOADER -->
    <!-- =============== NAVIGATION ============== -->
    <nav class="navbar navbar-custom navbar-transparent navbar-fixed-top" role="navigation">

        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Travis Ueki</a>
            </div>

            <div class="collapse navbar-collapse" id="custom-collapse">

                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="/">Home</a>
                    </li>

                    <li>
                        <a href="/about">About</a>
                    </li>

                    <li>
                        <a href="/blog" >Blog</a>
                    </li>
                    <li>
                        <a href="/contact">Contact</a>
                    </li>
                </ul>
            </div>

        </div>

    </nav>
    <!-- =============== /NAVIGATION ============== -->

    @yield('content')

    <!-- ================ CONTACT ================ -->
    <section class="module-small">

        <div class="container">

            <div class="row">

                <!-- CONTENT BOX -->
                <div class="col-sm-4">
                    <div class="content-box">
                        <div class="content-box-icon">
                            <span class="icon-map-pin"></span>
                        </div>
                        <div class="content-box-title font-inc">
                            Winchester, CA. 92596
                        </div>
                    </div>
                </div>
                <!-- /CONTENT BOX -->

                <!-- CONTENT BOX -->
                <div class="col-sm-4">
                    <div class="content-box">
                        <div class="content-box-icon">
                            <span class="icon-phone"></span>
                        </div>
                        <a href="tel:1-951-234-4436">
                            <div class="content-box-title font-inc">
                                (951) 234-4436
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /CONTENT BOX -->

                <!-- CONTENT BOX -->
                <div class="col-sm-4">
                    <div class="content-box">
                        <div class="content-box-icon">
                            <span class="icon-envelope"></span>
                        </div>
                        <a href="/contact">
                            <div class="content-box-title font-inc">
                                Contact Me
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /CONTENT BOX -->

            </div>

        </div>

    </section>
    <!-- ================ /CONTACT ================ -->

    <!-- =============== FOOTER =============== -->
    <footer class="footer">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">
                    <p class="copyright font-inc m-b-0">© 2016 <a href="/">TRAVIS UEKI</a>, All Rights Reserved.</p>
                </div>

            </div>

        </div>

    </footer>
    <!-- =============== /FOOTER =============== -->

    <!-- Javascript files -->
    <script src="assets/js/jquery-2.1.3.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.js"></script>
    <script src="assets/js/jquery.flexslider-min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.fitvids.js"></script>
    <script src="assets/js/smoothscroll.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/contact.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>