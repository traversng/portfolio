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

                        <h1 class="module-title font-alt align-center">Post title</h1>

                        <div class="module-subtitle font-inc align-center">
                            <div class="post-meta font-inc">
                                By <a href="#">Thomas Anderson</a> | 31 DEC 2014 | 3 Comments | <a href="#">Photography</a>, <a href="#">Web Design</a>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /MODULE TITLE -->

            </div>

        </section >
        <!-- /HOME -->

        <!-- BLOG SINGLE -->
        <section class="module">

            <div class="container">

                <div class="row">

                    <div class="col-sm-8 col-sm-offset-2">

                        <!-- POST -->
                        <div class="post">

                            <div class="post-thumbnail">
                                <a href="blog-single.html"><img src="assets/images/post-1.jpg" alt=""></a>
                            </div>

                            <div class="post-entry">

                                <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>

                                <p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>

                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                </blockquote>

                                <p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental.</p>

                                <ul>
                                    <li>The European languages are members of the same family.</li>
                                    <li>Their separate existence is a myth.</li>
                                    <li>For science, music, sport, etc, Europe uses the same vocabulary.</li>
                                </ul>

                                <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>

                            </div>

                        </div>
                        <!-- /POST -->

                        <!-- COMMENTS-->
                        <div class="comments">
                            <h4 class="comment-title font-alt">3 comments</h4>

                            <!-- COMMENT 1 -->
                            <div class="comment clearfix">

                                <div class="comment-avatar">
                                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/ryanbattles/128.jpg" alt="avatar">
                                </div>

                                <div class="comment-content clearfix">

                                    <div class="comment-author font-inc">
                                        <a href="#">John Doe</a>
                                    </div>

                                    <div class="comment-body">
                                        <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The European languages are members of the same family. Their separate existence is a myth.</p>
                                    </div>

                                    <div class="comment-meta font-inc">
                                        Today, 5 hours ago - <a href="#">Reply <i class="fa fa-angle-right"></i></a>
                                    </div>

                                </div>

                                <!-- COMMENT 2 -->
                                <div class="comment clearfix">

                                    <div class="comment-avatar">
                                        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/draganbabic/128.jpg" alt="avatar">
                                    </div>

                                    <div class="comment-content clearfix">

                                        <div class="comment-author font-inc">
                                            <a href="#">Mark Stone</a>
                                        </div>

                                        <div class="comment-body">
                                            <p>Europe uses the same vocabulary. The European languages are members of the same family. Their separate existence is a myth.</p>
                                        </div>

                                        <div class="comment-meta font-inc">
                                            Today, 4 hours ago - <a href="#">Reply <i class="fa fa-angle-right"></i></a>
                                        </div>

                                    </div>

                                </div>
                                <!-- /COMMENT 2 -->

                            </div>
                            <!-- /COMMENT 1 -->

                            <!-- COMMENT 3 -->
                            <div class="comment clearfix">

                                <div class="comment-avatar">
                                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/pixeliris/128.jpg" alt="avatar">
                                </div>

                                <div class="comment-content clearfix">

                                    <div class="comment-author font-inc">
                                        <a href="#">Andy</a>
                                    </div>

                                    <div class="comment-body">
                                        <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The European languages are members of the same family. Their separate existence is a myth.</p>
                                    </div>

                                    <div class="comment-meta font-inc">
                                        Today, 2 hours ago - <a href="#">Reply <i class="fa fa-angle-right"></i></a>
                                    </div>

                                </div>

                            </div>
                            <!-- /COMMENT 3 -->

                        </div>
                        <!-- /COMMENTS -->

                        <!-- COMMENT FORM -->
                        <div class="comment-form">
                            <h4 class="comment-form-title font-alt">Add your comment</h4>

                            <form method="post">

                                <div class="form-group">
                                    <label class="sr-only" for="name">Name</label>
                                    <input type="text" id="name" class="form-control" name="name" placeholder="Name">
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="email">Name</label>
                                    <input type="text" id="email" class="form-control" name="email" placeholder="E-mail">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" id="comment" name="comment" rows="6" placeholder="Comment"></textarea>
                                </div>

                                <button type="submit" class="btn btn-round btn-g">Post comment</button>

                            </form>

                        </div>
                        <!-- COMMENT FORM -->

                    </div>

                </div>

            </div>

        </section>
        <!-- /BLOG SINGLE -->
    </div>
    <!-- /WRAPPER -->
@endsection