@extends('portfolio_layout')

@section('content')
    <!-- WRAPPER -->
    <div class="wrapper">
        <!-- HOME -->
        <section class="module module-header bg-dark bg-dark-50" data-background="assets/images/section-7.jpg">

            <div class="container">
                <!-- MODULE TITLE -->
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">

                        <h1 class="module-title font-alt align-center">{{ $post->title }}</h1>

                    </div>

                </div>
                <!-- /MODULE TITLE -->

            </div>

        </section>
        <!-- /HOME -->

        <!-- BLOG SINGLE -->
        <section class="module">
            <div class="module-subtitle font-inc align-center">
                <div class="post-meta font-inc">
                    By <a href="/about">Travis Ueki</a> | {{ $post->created_at }} |
                </div>
            </div>
            <div class="container">

                <div class="row">
                    {{--<div class="post-icon pull-right">--}}
                    {{--<span class="icon-picture"></span>--}}
                    {{--</div>--}}
                    <div class="col-sm-8 col-sm-offset-2">
                        <!-- POST -->
                        <div class="post text-center">
                            <div class="post-entry">
                                <p>{{ $post->body }}</p>
                            </div>
                        </div>
                        <!-- /POST -->
                    </div>

                </div>

            </div>

        </section>
        <!-- /BLOG SINGLE -->
    </div>
    <!-- /WRAPPER -->
@endsection