@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="media">
                <div class="media-left">
                    <button type="button" class="btn btn-info" aria-label="Left Align">
                        <a href="/post/{{ $post->id }}/edit">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </button>
                    <form method="POST" action="/post/{{ $post->id }}">
                        {{ method_field('delete') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                    </form>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">{{ $post->title }}</h4>
                    {{ $post->body }}
                    <p>Post id: {{ $post->id }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection