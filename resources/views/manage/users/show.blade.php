@extends('layouts.manage') @section('content')

<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title is-1 is-admin">View User Details</h1>
        </div>

        <div class="column">
            <a href="{{ route('users.edit', $user->id) }}" class="button is-primary is-pulled-right is-medium"><i class="fa fa-user m-r-10"></i> Edit User</a>
        </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
        <div class="column">
            <form action="{{ route('users.store') }}" method="post">
                <div class="filed">
                    <label for="name" class="label">Name:</label>
                    <pre>{{ $user->name }}</pre>
                </div>

                <div class="field">
                    <label for="email" class="label m-t-30">Email:</label>
                    <pre>{{ $user->email }}</pre>
                </div>

                <div class="field">
                    <label for="email" class="label m-t-30">Roles:</label>
                    <ul>
                        {{ $user->roles->count() == 0 ? 'This user has no role.' : ''}} @foreach ($user->roles as $role)
                        <li>{{ $role->display_name }} ({{ $role->description }})</li>
                        @endforeach
                    </ul>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection