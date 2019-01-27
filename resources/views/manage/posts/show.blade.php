@extends('layouts.manage') @section('title', '| View Post') @section('content')

<div class="flex-container">
<div class="columns">
    <div class="column m-l-20">
        <h1 class="title is-1 is-admin"> {{ $post->title }} </h1>
        <p class="is-size-4"> {!! $post->content !!} </p>
        <hr>
        <div class="tags">

            @foreach ($post->tags as $tag)
            <span class="tag is-dark">{{ $tag->name }}</span> 
            @endforeach

        </div>
        <div class="column m-t-50" id="backend-comments">
            <h3>Comments <small>{{ $post->comments()->count() }} total</small></h3>
            <table class="table m-t-15">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Comment</th>
                        <th ></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($post->comments as $comment)
                    <tr>
                        <td>{{ $comment->name }}</td>
                        <td>{{ $comment->email }}</td>
                        <td>{{ $comment->comment }}</td>
                        <td>
                            <a href="{{ route('comments.edit', $comment->id) }}" class="button is-primary"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('comments.delete', $comment->id) }}" class="button is-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="column is-3 m-t-20">
        <div class="card">
            <div class="card-content">
                    <label class="label title is-5">URL:</label>
                    <p class=""><a href="{{ route('blog.single', $post->slug) }}"> {{ route('blog.single', $post->slug) }} </a></p>

                    <label class="label title is-5 m-t-20">Category:</label>
                    <p>{{ $post->category->name }}</p>

                    <label class="label title is-5 m-t-20">Created At:</label>
                    <p class=""> {{ date('M j, Y H:i', strtotime($post->created_at)) }} </p>
                

                    <label class="label title is-5 m-t-20">Last Updated:</label>
                    <p class=""> {{ date('M j, Y H:i', strtotime($post->updated_at)) }} </p>

                    {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'button is-primary is-rounded is-fullwidth m-t-20')) !!}

                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!} {!! Form::submit('Delete', ["class" => 'button is-danger is-rounded is-fullwidth m-t-20']) !!} 

                    {{ Html::linkroute('posts.index', '&laquo; See All Posts', [], ["class" => 'button is-rounded is-dark is-fullwidth m-t-20']) }}

                    {!! Form::close() !!}

                </div>
                </div>
            </div>
            </div>
        </div>
        @endsection