@extends('layouts.manage') @section('content')

<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title is-admin is-2 has-text-centered">Create New User</h1>
        </div>
    </div>
    <hr class="m-t-0">
    <div class="flex-container">
            <div class="columns">
                <div class="column">
                    <form action="{{ route('users.store') }}" method="post">
                        <div class="filed">
                            <label for="name" class="label">Name:</label>
                            <p class="control">
                                <input type="text" class="input is-primary" name="name" id="name">
                            </p>
                        </div>

                        <div class="field">
                            <label for="email" class="label m-t-10">Email:</label>
                            <p class="control">
                                <input type="text" class="input is-primary" name="email" id="email">
                            </p>
                        </div>

                        <div class="field">
                            <label for="password" class="label m-t-10">Password</label>
                            <p class="control">
                                <input type="text" class="input is-primary" name="password" id="password" v-if="!auto_password">
                                <b-checkbox name="auto_generate" class="m-t-15" :checked="true" v-model="auto_password">Auto Generate Password</b-checkbox>
                            </p>
                        </div>

                        <button class="button is-medium is-success is-focused m-t-20">Create User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection @section('scripts')
<script>
    var app = new Vue({
        el: '#app',
        data: {
            auto_password: true
        }
    });
</script>
@endsection