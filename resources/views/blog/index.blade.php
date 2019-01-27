@extends('layouts.app') @section('title', '| All Posts') @section('content')

<div class="flex-container">
    <div class="columns">
        <div class="column">
            <h1 class="blog-title title is-1 has-text-centered m-t-10 has-text-weight-normal" style="font-family: 'Titillium Web', sans-serif;">All Blog Posts</h1>
            <hr>
        </div>
    </div>

    @foreach ($posts as $post)
    <div class="columns has-text-centered">

        <div class="column is-one-third">
            <div class="box" style="background-color: #f7f7f7; font-family: 'Raleway', sans-serif;">
            <h2 class="title is-2 m-t-10">{{ $post->title }}</h2>

            <div class="subtitle is-6">Published: {{ date('M j, Y', strtotime($post->created_at)) }}</div>

            <p class="has-text-weight-normal is-size-6"> {{ substr(strip_tags($post->content), 0, 300) }} {{ strlen(strip_tags($post->content)) > 300 ? "..." : "" }} </p>

            <p><a class="button is-link is-medium is-rounded m-t-20 " href="{{ url('blog/'.$post->slug) }}" role="button">Go Beyond &raquo;</a></p>
        </div>

    </div>
    </div>
    @endforeach

    <div class="columns">
        <div class="column">
            <div class="has-text-centered">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
    
</div>

@endsection