@extends('portfolio_layout')

@section('content')
    <!-- WRAPPER -->
    <div class="wrapper">

        <!-- HOME -->
        <section class="module module-header bg-dark bg-dark-50" data-background="assets/images/section-5.jpg">

            <div class="container">

                <!-- MODULE TITLE -->
                <div class="row">

                    <div class="col-sm-6 col-sm-offset-3">

                        <h1 class="module-title font-alt align-center">About</h1>

                        <div class="module-subtitle font-inc align-center">
                            BORN AND RAISED IN HAWAII. PROGRAMMER. NAVY VETERAN. HUSBAND. FATHER. BLESSED.
                        </div>

                    </div>

                </div>
                <!-- /MODULE TITLE -->

            </div>

        </section >
        <!-- /HOME -->

        <!-- ABOUT -->
        <section class="module">

            <div class="container">

                <!-- MODULE TITLE -->
                <div class="row">

                    <div class="col-sm-6">

                        <h2 class="module-title font-alt">Info</h2>

                        <div class="module-subtitle font-inc">
                            Looking for a company that is as passionate about web development as I am.
                        </div>

                    </div>

                </div>
                <!-- /MODULE TITLE -->

                <div class="row">

                    <!-- ABOUT CONTENT -->
                    <div class="col-sm-6">

                        <p>The languages only differ in syntax.</p>

                        <p>All that is important is understanding the problem until the solution is obvious.</p>

                        @include('social_links')

                    </div>
                    <!-- /ABOUT CONTENT -->

                    <!-- SKILLS -->
                    <div class="col-sm-6">

                        <h5 class="progress-title font-inc">Angular</h5>
                        <div class="progress">
                            <div class="progress-bar pb-dark" aria-valuenow="60" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                <span class="font-inc"></span>
                            </div>
                        </div>

                        <h5 class="progress-title font-inc">React</h5>
                        <div class="progress">
                            <div class="progress-bar pb-dark" aria-valuenow="80" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                <span class="font-inc"></span>
                            </div>
                        </div>

                        <h5 class="progress-title font-inc">PHP</h5>
                        <div class="progress">
                            <div class="progress-bar pb-dark" aria-valuenow="70" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                <span class="font-inc"></span>
                            </div>
                        </div>

                        <h5 class="progress-title font-inc">Passion</h5>
                        <div class="progress">
                            <div class="progress-bar pb-dark" aria-valuenow="90" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                <span class="font-inc"></span>
                            </div>
                        </div>

                    </div>
                    <!-- /SKILLS -->

                </div>

            </div>

        </section >
        <!-- /ABOUT -->

        <!-- DIVIDER -->
        <hr class="divider-w">
        <!-- /DIVIDER -->

        <!-- SERVICES -->
        <section class="module">

            <div class="container">

                <!-- MODULE TITLE -->
                <div class="row">

                    <div class="col-sm-6 col-sm-offset-3">

                        <h2 class="module-title align-center font-alt">Skills</h2>

                    </div>

                </div>
                <!-- /MODULE TITLE -->

                <div class="row multi-columns-row">

                    <!-- CONTENT BOX -->
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="content-box">
                            <div class="content-box-icon">
                                <span class="icon-puzzle"></span>
                            </div>
                            <div class="content-box-title font-inc font-uppercase">
                                Programming
                            </div>
                            <div class="content-box-text">
                                Language is redundant.
                            </div>
                        </div>
                    </div>
                    <!-- /CONTENT BOX -->

                    <!-- CONTENT BOX -->
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="content-box">
                            <div class="content-box-icon">
                                <span class="icon-recycle"></span>
                            </div>
                            <div class="content-box-title font-inc font-uppercase">
                                Version Control
                            </div>
                            <div class="content-box-text">
                                Just in case there is a bug.
                            </div>
                        </div>
                    </div>
                    <!-- /CONTENT BOX -->

                    <!-- CONTENT BOX -->
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="content-box">
                            <div class="content-box-icon">
                                <span class="icon-tools"></span>
                            </div>
                            <div class="content-box-title font-inc font-uppercase">
                                Design
                            </div>
                            <div class="content-box-text">
                                Material inspired.
                            </div>
                        </div>
                    </div>
                    <!-- /CONTENT BOX -->

                    <!-- CONTENT BOX -->
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="content-box">
                            <div class="content-box-icon">
                                <span class="icon-lock"></span>
                            </div>
                            <div class="content-box-title font-inc font-uppercase">
                                Security
                            </div>
                            <div class="content-box-text">
                                Locked tight from front to back.
                            </div>
                        </div>
                    </div>
                    <!-- /CONTENT BOX -->
                </div>

            </div>

        </section>
        <!-- /SERVICES -->

        <!-- COUNTERS -->
        <section class="module-small bg-dark bg-dark-50" data-background="assets/images/section-7.jpg">

            <div class="container">

                <div class="row">

                    <!-- COUNTER -->
                    <div class="col-sm-3 m-b-md-20">
                        <div class="counter-item">
                            <div class="counter-number font-alt" data-number="680">
                                <span></span>
                            </div>
                            <div class="counter-title font-inc">
                                Cups of coffee
                            </div>
                        </div>
                    </div>
                    <!-- /COUNTER -->

                    <!-- COUNTER -->
                    <div class="col-sm-3 m-b-md-20">
                        <div class="counter-item">
                            <div class="counter-number font-alt" data-number="1234">
                                <span></span>
                            </div>
                            <div class="counter-title font-inc">
                                Git Commits
                            </div>
                        </div>
                    </div>
                    <!-- /COUNTER -->

                    <!-- COUNTER -->
                    <div class="col-sm-3 m-b-md-20">
                        <div class="counter-item">
                            <div class="counter-number font-alt" data-number="219">
                                <span></span>k
                            </div>
                            <div class="counter-title font-inc">
                                Deadlift
                            </div>
                        </div>
                    </div>
                    <!-- /COUNTER -->

                    <!-- COUNTER -->
                    <div class="col-sm-3 m-b-md-20">
                        <div class="counter-item">
                            <div class="counter-number font-alt" data-number="98">
                                <span></span>%
                            </div>
                            <div class="counter-title font-inc">
                                Happy clients
                            </div>
                        </div>
                    </div>
                    <!-- /COUNTER -->

                </div>

            </div>

        </section>
        <!-- /COUNTERS -->

        <!-- DIVIDER -->
        <hr class="divider-w">
        <!-- /DIVIDER -->
    </div>
    <!-- /WRAPPER -->
@stop