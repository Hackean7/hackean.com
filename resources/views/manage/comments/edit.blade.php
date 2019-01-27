@extends('layouts.manage')

@section('title', '| Edit Comment')

@section('content')
    <div class="flex-container">
        <div class="columns">    
            <div class="column is-half is-offset-one-quarter">
                <h1 class="title is-admin is-1 has-text-centered">Edit Comment</h1>

                {{ Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'put'])}}

                {{ Form::label('name', 'Name:', ['class' => 'label title is-4 m-t-20']) }}
                {{ Form::text('name', null, ['class' => 'input is-danger', 'disabled' => ''])}}

                {{ Form::label('email', 'Email:', ['class' => 'label title is-4 m-t-30']) }}
                {{ Form::text('email', null, ['class' => 'input is-danger', 'disabled' => '']) }}

                {{ Form::label('comment', 'Comment:', ['class' => 'label title is-4 m-t-30']) }}
                {{ Form::textarea('comment', null, ['class' => 'textarea is-primary']) }}

                {{ Form::submit('Update Comment', ['class' => 'button is-success is-rounded is-focused is-fullwidth m-t-30']) }}

                {{ Form::close() }}
            </div>
        </div>   
    </div> 
@stop