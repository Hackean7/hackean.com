@extends('layouts.app')

@section('title', "| Home ") @section('content')

@section('stylesheets')

{!! Html::style('css/home.css') !!}

@endsection
    <div class="flex-container">
        <div class="container">
            <div class="hero">
                <h1 class="f-society title is-2 has-text-centered"> <div class="f-society">&alpha; Fuck Society! &omega;</div> </h1>
                <p class="quote is-size-4">"What I'm about to tell you is top secret. A conspiracy bigger than all of us. There's a powerful group of people out there that are secretly running the world. I'm talking about the guys no one knows about, the ones that are invisible. The top 1% of the top 1%, the guys that play God without permission. And now I think they're following me."</p>
                <p class="copyright is-size-5 has-text-centered">Copyright &COPY; 1995-2014 NovaSoft&trade; Inc and Mr Robot&trade;. All rights reserved.</p>
                <p class="link m-t-20"><a class="button is-success is-medium is-fullwidth is-rounded" href="https://www.torproject.org/" target="_blank" role="button">Free The Internet</a></p>
            </div>
        </div>


                @foreach($posts as $post)
                <div class="columns has-text-centered m-t-30">
                <div class="column is-one-third">
                    <div class="box" style="font-family: 'Inconsolata', monospace; background-color: #f7f7f7;">

                        <h2 class="title is-2 m-t-10">{{ $post->title }}</h2>

                        <div class="subtitle is-6">Published: {{ date('M j, Y', strtotime($post->created_at)) }}</div>

                        <p class="has-text-weight-normal is-size-6"> {{ substr(strip_tags($post->content), 0, 300) }} {{ strlen(strip_tags($post->content)) > 300 ? "..." : "" }} </p>

                        <p><a class="button is-link is-medium is-rounded m-t-10 m-b-10" href="{{ url('blog/'.$post->slug) }}" role="button">Go Beyond &raquo;</a></p>
                    </div>
                </div>
                </div>
                @endforeach
        </div> 
@endsection
