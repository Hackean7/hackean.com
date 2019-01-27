@extends('layouts.manage') @section('title', '| Create New Role') @section('content')

<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title is-1 has-text-centered is-admin">Create New Role</h1>
        </div>
    </div>
    <hr class="m-t-10">

    <form action="{{ route('roles.store')}}" method="post">
        {{ csrf_field() }}
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
                                        <input type="text" class="input is-primary" name="display_name" value="{{ old('display_name') }}" id="display_name">
                                    </p>
                                </div>
                                <div class="field">
                                    <p class="control">
                                        <label type="name" class="input">Slug (Can not be changed) </label>
                                        <input type="text" class="input is-primary" name="name" value="{{ old('name') }}" id="name">
                                    </p>
                                </div>
                                <div class="field">
                                    <p class="control">
                                        <label type="description" class="input">Description </label>
                                        <input type="text" class="input is-primary" value="{{ old('description') }}" id="description" name="description">
                                    </p>
                                </div>
                                <input type="hidden" :value="permissionsSelected" name="permissions">
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </form>

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
                                </b-check>
                        </div>
                    </div>
                </article>
            </div>
            <button class="button is-medium is-success is-focused">Create New Role</button>
        </div>
    </div>

</div>

@endsection @section('scripts')
<script>
    var app = new Vue({
        el: '#app',
        data: {
            permissionsSelected: []
        }
    });
</script>
@endsection