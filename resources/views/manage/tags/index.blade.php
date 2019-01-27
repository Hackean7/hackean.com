@extends('layouts.manage') @section('title', '| All Tags') @section('content')

    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title is-1 has-text-centered is-admin">Tags</h1>
                <hr>
                <div class="columnns">
                    <div class="columnn">
                        <div class="card">
                            <div class="card-content">

                        {!! Form::open(['route' => 'tags.store', 'method' => 'post']) !!}

                            <h2 class="title is-4">New Tag</h2>
                            {{ Form::label('name', 'Name:', ['class' => 'label title is-5 m-t-30']) }}
                            {{ Form::text('name', null, ['class' => 'input is-primary m-t-10']) }}

                            {{ Form::submit('Create New Tag', ['class' => 'button is-success is-medium m-t-20']) }}
                        
                        {!! Form::close() !!}

                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-t-50">
                    <div class="card-content">
                        <div class="columns">
                            <div class="column">
                                <table class="table is-fullwidth">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($tags as $tag)
                                        <tr>
                                            <th>{{ $tag->id }}</th>
                                            <td><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }}</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop