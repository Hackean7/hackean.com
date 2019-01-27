@extends('layouts.manage') @section('content')

<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title is-2 is-admin has-text-centered">Edit User</h1>
        </div>
    </div>
    <hr>

    <form action="{{ route('users.update', $user->id) }}" method="post">
        {{ method_field('put') }} {{ csrf_field() }}
        <div class="columns">
            <div class="column">
                <div class="filed">
                    <label for="name" class="label">Name:</label>
                    <p class="control">
                        <input type="text" class="input is-primary" name="name" id="name" value="{{ $user->name }}">
                    </p>
                </div>

                <div class="field">
                    <label for="email" class="label m-t-30">Email:</label>
                    <p class="control">
                        <input type="text" class="input is-primary" name="email" id="email" value="{{ $user->email }}">
                    </p>
                </div>

                <div class="field">
                    <label for="password" class="label m-t-30">Password:</label>
                    <b-radio-group v-model="password_options" name="password_options">
                        <div class="field">
                            <b-radio name="password_options" value="keep">Do Not Change Password</b-radio>
                        </div>
                        <div class="field">
                            <b-radio name="password_options" value="auto">Generate New Password</b-radio>
                        </div>
                        <div class="field">
                            <b-radio name="password_options" value="manual">Set New Password Manually</b-radio>
                            <p class="control">
                                <input type="text" class="input is-primary" name="password" id="password" v-if="password_options == 'manual'">
                            </p>
                        </div>
                    </b-radio-group>
                </div>
            </div>
        </div>

        <div class="column">
            <label for="roles" class="label">Roles:</label>
            <input type="hidden" name="roles" :value="rolesSelected">
            <b-checkbox-group v-model="rolesSelected">
                @foreach ($roles as $role)
                <div class="field">
                    <b-checkbox :custom-value="{{ $role->id }}"> {{ $role->display_name }}</b-checkbox>
                </div>
                @endforeach
            </b-checkbox-group>
        </div>

        <div class="columns">
            <div class="column">
                <hr>
                <button class="button is-primary is-medium is-focused">Edit User</button>
            </div>
        </div>
    </form>
</div>

@endsection 
@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                password_options: 'keep',
                rolesSelected: {!! $user->roles->pluck('id') !!}       
            }
        });
    </script>
@endsection