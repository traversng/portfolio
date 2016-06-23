@extends('portfolio_layout')

@section('content')
    <!-- HOME -->
    <section id="home" class="module-hero module-parallax module-fade bg-dark-30" data-background="assets/images/section-2.jpg">

        <div class="hs-caption container">
            <div class="caption-content">
                <div class="hs-title-size-4 font-alt m-b-30">
                    Travis Ueki
                </div>
                <div class="hs-title-size-1 font-inc">
                    I love to Hack.
                </div>
            </div>
        </div>

    </section >
    <!-- /HOME -->

    <!-- WRAPPER -->
    <div class="wrapper">

        <!-- PORTFOLIO -->
        <section class="module-small p-t-20 p-b-0 p-t-sm-0">

            <div class="container hidden-xs">

                <!-- PORTFOLIO FILTER -->
                <div class="row">
                    <div class="col-sm-12">

                        <ul id="filters" class="filter font-inc">
                            <li><a href="#" data-filter="*" class="current wow fadeInUp">All</a></li>
                            <li><a href="#" data-filter=".Front-end" class="wow fadeInUp" data-wow-delay="0.2s">Front-end</a></li>
                            <li><a href="#" data-filter=".Back-end" class="wow fadeInUp" data-wow-delay="0.4s">Back-end</a></li>
                            <li><a href="#" data-filter=".webdesign" class="wow fadeInUp" data-wow-delay="0.8s">Design</a></li>
                        </ul>

                    </div>
                </div>
                <!-- /PORTFOLIO FILTER -->

            </div>

            <!-- PORTFOLIO LIST -->
            <ul id="works-grid" class="works-grid works-grid-masonry works-grid-3 works-hover-w">

                <!-- PORTFOLIO ITEM -->
                <li class="work-item illustration webdesign">
                    <a href="portfolio-single-1.html">
                        <div class="work-image">
                            <img src="assets/images/work-masonry-1.jpg" alt="">
                        </div>
                        <div class="work-caption">
                            <h3 class="work-title font-alt">Corporate Identity</h3>
                            <div class="work-descr font-inc">
                                Illustration
                            </div>
                        </div>
                    </a>
                </li>
                <!-- /PORTFOLIO ITEM -->

                <!-- PORTFOLIO ITEM -->
                <li class="work-item marketing photography">
                    <a href="portfolio-single-1.html">
                        <div class="work-image">
                            <img src="assets/images/work-2.jpg" alt="">
                        </div>
                        <div class="work-caption">
                            <h3 class="work-title font-alt">Bag MockUp</h3>
                            <div class="work-descr font-inc">
                                Marketing
                            </div>
                        </div>
                    </a>
                </li>
                <!-- /PORTFOLIO ITEM -->

                <!-- PORTFOLIO ITEM -->
                <li class="work-item illustration photography">
                    <a href="portfolio-single-1.html">
                        <div class="work-image">
                            <img src="assets/images/work-3.jpg" alt="">
                        </div>
                        <div class="work-caption">
                            <h3 class="work-title font-alt">Disk Cover</h3>
                            <div class="work-descr font-inc">
                                Illustration
                            </div>
                        </div>
                    </a>
                </li>
                <!-- /PORTFOLIO ITEM -->

                <!-- PORTFOLIO ITEM -->
                <li class="work-item marketing photography">
                    <a href="portfolio-single-1.html">
                        <div class="work-image">
                            <img src="assets/images/work-4.jpg" alt="">
                        </div>
                        <div class="work-caption">
                            <h3 class="work-title font-alt">Business Card</h3>
                            <div class="work-descr font-inc">
                                Photography
                            </div>
                        </div>
                    </a>
                </li>
                <!-- /PORTFOLIO ITEM -->

                <!-- PORTFOLIO ITEM -->
                <li class="work-item illustration webdesign">
                    <a href="portfolio-single-1.html">
                        <div class="work-image">
                            <img src="assets/images/work-masonry-2.jpg" alt="">
                        </div>
                        <div class="work-caption">
                            <h3 class="work-title font-alt">Business Cards</h3>
                            <div class="work-descr font-inc">
                                Webdesign
                            </div>
                        </div>
                    </a>
                </li>
                <!-- /PORTFOLIO ITEM -->

                <!-- PORTFOLIO ITEM -->
                <li class="work-item marketing webdesign">
                    <a href="portfolio-single-1.html">
                        <div class="work-image">
                            <img src="assets/images/work-6.jpg" alt="">
                        </div>
                        <div class="work-caption">
                            <h3 class="work-title font-alt">Business Cards in paper clip</h3>
                            <div class="work-descr font-inc">
                                Marketing
                            </div>
                        </div>
                    </a>
                </li>
                <!-- /PORTFOLIO ITEM -->

                <!-- PORTFOLIO ITEM -->
                <li class="work-item marketing webdesign">
                    <a href="portfolio-single-1.html">
                        <div class="work-image">
                            <img src="assets/images/work-7.jpg" alt="">
                        </div>
                        <div class="work-caption">
                            <h3 class="work-title font-alt">Business Cards in paper clip</h3>
                            <div class="work-descr font-inc">
                                Marketing
                            </div>
                        </div>
                    </a>
                </li>
                <!-- /PORTFOLIO ITEM -->

            </ul>
            <!-- /PORTFOLIO LIST -->

        </section>
        <!-- /PORTFOLIO -->

        <!-- TESTIMONIAL -->
        <section class="module-small">

            <div class="container">

                <div class="row">

                    <!-- MODULE TITLE -->
                    <div class="col-sm-6">
                        <h2 class="module-title font-alt">Someone quote</h2>
                    </div>
                    <!-- /MODULE TITLE -->

                    <!-- BLOCKQUOTE -->
                    <div class="col-sm-6">
                        <blockquote class="font-serif align-right">
                            <p>The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.</p>
                            <p class="font-inc font-uppercase">- Thomas Anderson</p>
                        </blockquote>
                    </div>
                    <!-- /BLOCKQUOTE -->

                </div>

            </div>

        </section>
        <!-- /TESTIMONIAL -->

        <!-- ABOUT -->
        <section class="module p-t-0 p-b-0" data-background="assets/images/section-4.jpg">

            <div class="container-fluid">

                <div class="row relative">

                    <div class="col-sm-12 col-md-6 col-md-offset-6 col-bg">

                        <h2 class="module-title font-alt">About</h2>

                        <div class="module-subtitle font-inc">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                        </div>

                        <p>The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.</p>

                        <p>To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.</p>

                        <ul class="social-list">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-googleplus"></span></a></li>
                        </ul>

                    </div>

                </div>

            </div>

        </section>
        <!-- /ABOUT -->
    </div>
    <!-- /WRAPPER -->

    <!-- Scroll-up -->
    <div class="scroll-up">
        <a href="#totop"><i class="fa fa-angle-double-up"></i></a>
    </div>
@stop