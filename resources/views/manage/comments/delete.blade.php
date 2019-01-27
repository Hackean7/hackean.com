@extends('layouts.manage') @section('title', '| Delete Comment') @section('content')

    <div class="felx-container">
        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
                <h1 class="title is-1 is-admin has-text-centered has-text-danger">Delete this comment?</h1>
                <div class="card">
                    <div class="card-content">
                        <div class="title is-4">Name: </div> <div> {{ $comment->name }} </div>

                        <div class="title is-4 m-t-20">Email: </div> <div> {{ $comment->email }} </div>

                        <div class="title is-4 m-t-20">Comment: </div> <div>{{ $comment->comment }}</div>
                    </div>
                </div>

                {{ Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'delete']) }} 
                {{ Form::submit('Yes! Delete this comment!', ['class' => 'button is-danger is-rounded is-focused is-fullwidth m-t-30']) }} 
                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection