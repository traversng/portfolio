{{--This is the blog component--}}
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

                        <h2 class="post-title font-alt">>{{ $post->title }}</h2>
                        <div class="post-meta font-inc">
                            By <a href="/about">Travis Ueki</a> | {{ $post->created_at }}
                        </div>
                    </div>

                    <div class="post-entry">
                        <p>{{ $post->body }}</p>
                    </div>

                    <div class="post-more font-inc">
                        <a href="{{ $post->id }}" class="more-link">Read more</a>
                    </div>

                </div>
                <!-- /POST WITH IMAGE -->

            </div>

        </div>

    </div>

</section>
<!-- /BLOG STANDART 1 -->