@extends('layouts.app')

@section('content')
    <div class="container post-container">
        <div class="jumbotron">
            <h1>Edit Post</h1>
        </div>
        <form class="form-horizontal" method="POST" action="/post/{{ $post->id }}">
            {{ method_field('patch') }}
            {{ csrf_field() }}
            <fieldset>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="title">Post Title</label>
                    <div class="col-md-4">
                        <input id="post-title-input" name="title" type="text" placeholder="title"
                               class="form-control input-md" required="" value="{{ $post->title }}">

                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="body">Post Body</label>
                    <div class="col-md-4">
                            <textarea class="form-control" id="post-body-textarea" name="body">{{ $post->body }}</textarea>
                    </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="update-post"></label>
                    <div class="col-md-8">
                        <button id="update-post" class="btn btn-info">Update</button>
                        <a href="/display_posts"><input type="button" id="cancel-post" name="cancel-post" class="btn btn-primary" value="Cancel"></a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
@endsection