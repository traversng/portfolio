@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <ul class="nav nav-pills">
                            <li><a href="/new_post">Create new blog post</a></li>
                            <li><a href="/display_posts">View Blog Posts</a></li>
                            <li><a href="#">Menu 3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection