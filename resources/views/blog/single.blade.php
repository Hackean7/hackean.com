@extends('layouts.app')
<?php
$titleTag = htmlspecialchars($post->title);
?>
@section('title', "| $titleTag")

@section('stylesheets')

<style type="text/css" media="screen">
    .image {
        position: absolute;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .post-title {
        font-family: 'Major Mono Display', monospace;
    }
    .content {
        font-family: 'Nunito', sans-serif;
    }
    img {
        max-width: 100%;
        height: auto;
    }    
</style>

@endsection

@section('content')
            @if (!empty($post->image))
                <img src="{{ asset('/images/' . $post->image )}}">
            @endif
    <div class="flex-container">
        <div class="columns">
             <div class="column">
                
                <h1 class="post-title title is-1 has-text-weight-bold has-text-centered m-t-10"> {{ $post->title }} </h1>
                <div class="content has-text-weight-normal is-size-5 m-t-30"> {!! $post->content !!} </div>  
            </div>
            <hr>
    </div>
    
    <div class="columns has-text-centered">
        <div class="column">
            <div class="title is-5 has-text-centered m-t-10"> Posted In: {{ $post->category->name }} </div>
            <div class="has-text-centered m-t-20">
                @foreach ($post->tags as $tag)
                    <span class="tag is-dark">{{ $tag->name }}</span> 
                @endforeach
            </div>
            <h3 class="comments-title m-t-20"> <i class="fa fa-comments" aria-hidden="true"></i> {{ $post->comments()->count() }} Comments </h3>
                @foreach($post->comments as $comment)
                    <div class="comment m-t-10">
                         <div class="author-info">
                            <figure class="image is-48x48">
                             <img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=waveatar" }}" alt="author-image" class="is-rounded">
                         </figure>
                             <div class="author-name">
                                 <h4 class="title is-6 m-t-10"> {{ $comment->name }} </h4>
                                  <p class="author-time subtitle is-7"> {{ date('F nS, Y - G:iA' ,strtotime($comment->created_at))}} </p>
                              </div>
                         </div>
                         <div class="comment-content is-size-6 m-t-10"> {{ $comment->comment }} </div>
                    </div>
                @endforeach
        </div>
    </div>
<hr>

    <div class="columns has-text-cetnered">
        <div id="comment-form" class="column is-4 is-offset-4 m-t-50">
            {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'post'] ) }}

                        {{ Form::label('name', 'Name:', ['class' => 'label title is-5']) }}
                        {{ Form::text('name', null, ['class' => 'input is-primary']) }}


                        {{ Form::label('email', 'Email:', ['class' => 'label title is-5 m-t-20']) }}
                        {{ Form::text('email', null, ['class' => 'input is-primary']) }}


                        {{ Form::label('comment', "Comment:", ['class' => 'label title is-5 m-t-20']) }}
                        {{ Form::textarea('comment', null, ['class' => 'textarea is-primary', 'row' => '5'])}}

                        {{ Form::submit('Add Comment', ['class' => 'button is-success is-rounded is-medium m-t-15']) }}

            {{ Form::close() }}
        </div>
    </div>
    </div>
@stop