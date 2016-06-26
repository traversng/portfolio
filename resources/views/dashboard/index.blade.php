@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">What do you want to do?</div>

                    <div class="panel-body">
                        <!-- Single button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Blog <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="/new_post">Create new blog post</a></li>
                                <li><a href="/display_posts">View Blog Posts</a></li>
                            </ul>
                        </div>

                        <!-- Single button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Home <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="/monitor">Home Surveillance Monitor</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection