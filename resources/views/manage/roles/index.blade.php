@extends('layouts.manage') @section('title', '| All Roles') @section('content')

<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title is-1 is-admin">Manage Roles</h1>
        </div>
        <div class="column">
            <a href="{{ route('roles.create') }}" class="button is-primary is-pulled-right is-medium">Create New Role </a>
        </div>
    </div>
    <hr class="m-t-10">

    <div class="columns is-multiline">
        @foreach ($roles as $role)
        <div class="column is-on-quarter">
            <div class="box">
                <article class="media">
                    <div class="media-content">
                        <div class="content">
                            <h3 class="title"> {{ $role->display_name }}</h3>
                            <h4 class="subtitle"><em>{{ $role->name }}</em></h4>
                            <p>
                                {{ $role->description }}
                            </p>
                        </div>

                        <nav class="columns is-mobile">
                            <div class="column is-on-half">
                                <a href="{{ route('roles.show', $role->id) }}" class="button is-info is-fullwidth is-rounded">Details</a>
                            </div>
                            <div class="column is-on-half">
                                <a href="{{ route('roles.edit', $role->id) }}" class="button is-primary is-fullwidth is-rounded">Edit</a>
                            </div>
                        </nav>

                    </div>
                </article>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection