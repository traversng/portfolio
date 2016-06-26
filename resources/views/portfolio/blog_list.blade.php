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
@foreach($posts as $post)

    @include('portfolio.post')

@endforeach

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