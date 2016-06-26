@extends('portfolio_layout')

@section('content')
<!-- WRAPPER -->
<div class="wrapper">

    <!-- HOME -->
    <section class="module module-header bg-dark bg-dark-50" data-background="assets/images/section-7.jpg">

        <div class="container">

            <!-- MODULE TITLE -->
            <div class="row">

                <div class="col-sm-6 col-sm-offset-3">

                    <h1 class="module-title font-alt align-center">How My Brain Works</h1>

                    <div class="module-subtitle font-inc align-center">
                        A place for me to jot down my random thoughts and spread them haphazardly across the interwebs.
                    </div>

                </div>

            </div>
            <!-- /MODULE TITLE -->

        </div>

    </section >
    <!-- /HOME -->

    <!-- BLOG STANDARD 1 -->
    <section class="module p-b-0">

        <div class="container">

            <div class="row">

                <div class="col-sm-8 col-sm-offset-2">

                    <!-- POST WITH IMAGE -->
                    <div class="post">

                        <div class="post-header post-header-small">

                            <div class="post-icon">
                                <span class="icon-picture"></span>
                            </div>

                            <h2 class="post-title font-alt"><a href="blog-single.html">Initial Post</a></h2>
                            <div class="post-meta font-inc">
                                By <a href="#">Travis Ueki</a> | 30 DEC 1985 | 0 Comments | <a href="#">Birth</a>, <a href="#">Christmas</a>
                            </div>
                        </div>

                        <div class="post-entry">
                            <p>I have arrived.</p>
                        </div>

                        <div class="post-more font-inc">
                            <a href="blog-single.html" class="more-link">Read more</a>
                        </div>

                    </div>
                    <!-- /POST WITH IMAGE -->

                </div>

            </div>

        </div>

    </section>
    <!-- /BLOG STANDART 1 -->

    <!-- PAGINATION -->
    <section class="module-small p-t-0 p-b-80">

        <div class="container">

            <div class="pagination font-inc text-uppercase">

                <a href="#"><i class="fa fa-angle-left"></i> Prev</a>
                <a href="#">Next <i class="fa fa-angle-right"></i></a>

            </div>

        </div>

    </section>
    <!-- /PAGINATION -->

    <!-- DIVIDER -->
    <hr class="divider-w">
    <!-- /DIVIDER -->
</div>
<!-- /WRAPPER -->
@endsection