@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <span class="fa fa-bullhorn"></span>
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">{{ $post->title }}</h4>
                    {{ $post->body }}
                </div>
            </div>
        @endforeach
    </div>
@endsection