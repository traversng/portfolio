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
                            <li><a href="#" data-filter="*" class="current wow fadeInUp">Projects</a></li>
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
                            <h3 class="work-title font-alt">True Solar</h3>
                            <div class="work-descr font-inc">
                                True Car for Solar
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
                            <h3 class="work-title font-alt">Trav Chat</h3>
                            <div class="work-descr font-inc">
                                React/Redux/Firebase Chat App
                            </div>
                        </div>
                    </a>
                </li>
                <!-- /PORTFOLIO ITEM -->

                <!-- PORTFOLIO ITEM -->
                <li class="work-item illustration photography">
                    <a href="/blog">
                        <div class="work-image">
                            <img src="assets/images/blog.png" alt="image of travisueki.com blog">
                        </div>
                        <div class="work-caption">
                            <h3 class="work-title font-alt">Blog</h3>
                            <div class="work-descr font-inc">
                                Laravel Blog App
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
                            <h3 class="work-title font-alt">Home View</h3>
                            <div class="work-descr font-inc">
                                Remote IP Camera Access
                            </div>
                        </div>
                    </a>
                </li>
                <!-- /PORTFOLIO ITEM -->

                <!-- PORTFOLIO ITEM -->
                <li class="work-item illustration webdesign">
                    <a href="http://www.learningfuze.com">
                        <div class="work-image">
                            <img src="assets/images/learningfuze-project.png" alt="">
                        </div>
                        <div class="work-caption">
                            <h3 class="work-title font-alt">LearningFuze.com</h3>
                            <div class="work-descr font-inc">
                                PHP Custom MVC/Bootstrap UI
                            </div>
                        </div>
                    </a>
                </li>
                <!-- /PORTFOLIO ITEM -->

                <!-- PORTFOLIO ITEM -->
                <li class="work-item marketing webdesign">
                    <a href="http://wodkiller.github.io/trav-weather/#/" target="_blank">
                        <div class="work-image">
                            <img src="assets/images/trav-weather.png" alt="">
                        </div>
                        <div class="work-caption">
                            <h3 class="work-title font-alt">Trav Weather</h3>
                            <div class="work-descr font-inc">
                                Weather application
                            </div>
                        </div>
                    </a>
                </li>
                <!-- /PORTFOLIO ITEM -->

                {{--<!-- PORTFOLIO ITEM -->--}}
                {{--<li class="work-item marketing webdesign">--}}
                    {{--<a href="portfolio-single-1.html">--}}
                        {{--<div class="work-image">--}}
                            {{--<img src="assets/images/work-7.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="work-caption">--}}
                            {{--<h3 class="work-title font-alt">Business Cards in paper clip</h3>--}}
                            {{--<div class="work-descr font-inc">--}}
                                {{--Marketing--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<!-- /PORTFOLIO ITEM -->--}}

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
                        <h2 class="module-title font-alt">Approach</h2>
                    </div>
                    <!-- /MODULE TITLE -->

                    <!-- BLOCKQUOTE -->
                    <div class="col-sm-6">
                        <blockquote class="font-serif align-right">
                            <p>“If I had an hour to solve a problem, I’d spend 55 minutes thinking about the problem and 5 minutes thinking about solutions.”.</p>
                            <p class="font-inc font-uppercase">- Albert Einstein</p>
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
                            Born and raised in Hawaii. Navy veteran. Husband. Father. Lucky.
                        </div>
                        <hr>

                        <p>
                            Lucky because my profession is my passion.
                        <br>
                            Jon Snow is the son of Rhaegar Targaryen, and the one true heir the the throne.
                        <br>
                            My github name is Wodkiller, because I used to kill wods... Now they return the favor and that is ok with me. (for now)
                        </p>

                        @include('social_links')

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