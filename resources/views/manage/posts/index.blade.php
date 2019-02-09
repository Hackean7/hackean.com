@extends('layouts.manage') @section('title', '| All Posts') @section('content')

    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title is-admin is-1">All Posts</h1>
            </div>
            <div class="column">
                <a href="{{ route('posts.create') }}" class="button is-primary is-medium is-pulled-right"><i class="fa fa-book m-r-10"></i> Create New Post</a>
            </div>
        </div>
        <hr class="m-t-0">
    <div class="column">
        <div class="card">
            <div class="card-content">
                <table class="table is-fullwidth">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Body</th>
                            <th>Created</th>
                            <th> </th>
                            <th> </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($posts as $post)

                        <tr>
                            <th> {{ $post->id }} </th>
                            <th> {{ $post->title }} </th>
                            <td> {{ $post->slug }} </td>
                            <td> {{ substr($post->content, 0, 20) }} {{ strlen($post->content) > 20 ? "..." : "" }} </td>
                            <td> {{ date('M j, Y', strtotime($post->created_at)) }} </td>
                            <td> <a href="{{ route('posts.show', $post->id) }}" class="button  is-outlined "> View </a> </td>
                            <td> <a href="{{ route('posts.edit', $post->id) }}" class="button  is-outlined"> Edit </a> </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
                <div class="has-text-centered">
                    {!! $posts->links(); !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection