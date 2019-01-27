 @extends('layouts.manage') @section('title', "| $tag->name Tag") @section('content')

<div class="flex-container">
    <div class=columns>
        <div class="column is-4">
            <h2 class="title is-2 is-admin">{{ $tag->name }} Tag <small> {{ $tag->posts()->count() }} Posts </small> </h2>
        </div>

        <div class="column is-2">
            <div class="buttons has-addons is-medium">
                <a href="{{ route('tags.edit', $tag->id) }}" class="button is-primary m-t-10">Edit</a>

                {{ Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'delete']) }} 
                {{ Form::submit('Delete', ['class' => 'button is-danger m-t-10']) }} 
                {{ Form::close() }}
            </div>
        </div>

        <div class="column is-6">
            <div class="card">
                <div class="card-content">
                <table class="table is-fullwidth">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Tags</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tag->posts as $post)
                        <tr>
                            <th>{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>
                                @foreach ($post->tags as $tag)
                                <span class="label label-default">{{ $tag->name }}</span> @endforeach
                            </td>
                            <td><a href="{{ route('posts.show', $post->id) }}" class="button is-outlined">View</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop