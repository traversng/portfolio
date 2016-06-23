@extends('portfolio_layout')

@section('content')

    <!-- CONTACT -->
    <section class="module">

        <div class="container">

            <!-- MODULE TITLE -->
            <div class="row">

                <div class="col-sm-6 col-sm-offset-3">

                    <h2 class="module-title align-center font-alt">Hit me up</h2>

                    <div class="module-subtitle align-center font-inc">
                        Some super cliche quote...
                    </div>

                </div>

            </div>
            <!-- /MODULE TITLE -->

            <!-- CONTACT FORM -->
            <div class="row">

                <div class="col-sm-6 col-sm-offset-3">

                    <form id="contact-form" role="form" novalidate="">

                        <div class="form-group">
                            <label class="sr-only" for="cname">Name</label>
                            <input type="text" id="cname" class="form-control" name="cname" placeholder="Name" required="" data-validation-required-message="Please enter your name." aria-invalid="false">
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="cemail">Your Email</label>
                            <input type="email" id="cemail" name="cemail" class="form-control" placeholder="Your E-mail" required="" data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" id="cmessage" name="cmessage" rows="7" placeholder="Message" required="" data-validation-required-message="Please enter your message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>

                        <button type="submit" class="btn btn-round btn-g">Submit</button>

                    </form>

                    <!-- Ajax response -->
                    <div id="contact-response" class="ajax-response font-alt"></div>

                </div>

            </div>
            <!-- /CONTACT FORM -->

        </div>

    </section>
    <!-- /CONTACT -->

    <!-- DIVIDER -->
    <hr class="divider-w">
    <!-- /DIVIDER -->

@stop