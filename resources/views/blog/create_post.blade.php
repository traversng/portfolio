@extends('layouts.app')

@section('content')
    <pre>
        {{ $posts }}
    </pre>
    <div class="row">
        <div class="container post-container">
            <form class="form-horizontal" method="post" action="blog/add_post">
                <fieldset>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="title">Post Title</label>
                        <div class="col-md-4">
                            <input id="post-title-input" name="title" type="text" placeholder="title"
                                   class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="body">Post Body</label>
                        <div class="col-md-4">
                            <textarea class="form-control" id="post-body-textarea" name="body"
                                      placeholder="Say something..."></textarea>
                        </div>
                    </div>

                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="submit-post"></label>
                        <div class="col-md-8">
                            <button id="submit-post" name="submit-post" class="btn btn-info">Submit</button>
                            <button id="cancel-post" name="cancel-post" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
                </fieldset>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection