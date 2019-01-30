@extends('layouts.manage') @section('title', '| Edit Role') @section('content')

<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title is-1 has-text-centered is-admin">Edit {{ $role->display_name }}</h1>
        </div>
    </div>
    <hr class="m-t-10">

    <form action="{{ route('roles.update', $role->id) }}" method="post">
        {{ csrf_field() }} {{ method_field('put') }}
        <div class="columns">
            <div class="column">
                <div class="box">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <h2 class="title">Role Details:</h2>
                                <div class="field">
                                    <p class="control">
                                        <label type="display_name" class="input">Name (Human Readable) </label>
                                        <input type="text" class="input" name="display_name" value="{{ $role->display_name }}" id="display_name">
                                    </p>
                                </div>
                                <div class="field">
                                    <p class="control">
                                        <label type="name" class="input">Slug (Can not be edited) </label>
                                        <input type="text" class="input" name="name" value="{{ $role->name }}" disabled="" id="name">
                                    </p>
                                </div>
                                <div class="field">
                                    <p class="control">
                                        <label type="description" class="input">Description </label>
                                        <input type="text" class="input" value="{{ $role->display_namea }}" id="description" name="description">
                                    </p>
                                </div>
                                <input type="hidden" :value="permissionsSelected" name="permissions">
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="box">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <h2 class="title">Permissions:</h2>
                                <b-checkbox-group v-model="permissionsSelcted">
                                    @foreach ($permissions as $permission)
                                    <div class="field">
                                        <b-checkbox :custom-value="{{ $permission->id }}">{{ $permission->display_name }} <em>({{ $permission->description }})</em></b-checkbox>
                                    </div>
                                    @endforeach
                                </b-checkbox-group>
                            </div>
                        </div>
                    </article>
                </div>
                <button class="button is-success is-medium is-focused">Save Changes</button>
            </div>
        </div>
    </form>
</div>
@endsection @section('scripts')
<script>
    var app = new Vue({
        el: '#app',
        data: {
            permissionsSelected: {
                {!! $role->permissions->pluck('id') !!}
            }
        }
    });
</script>
@endsection