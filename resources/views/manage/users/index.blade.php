@extends('layouts.manage') @section('title', '| All Users') @section('content')
<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title is-1 is-admin">Manage Users</h1>
        </div>
        <div class="column">
            <a href="{{ route('users.create') }}" class="button is-primary is-medium is-pulled-right"><i class="fa fa-user m-r-10"></i> Create New User</a>
        </div>
    </div>
    <hr>

    <div class="card">
        <div class="card-content">
            <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date Created</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                @foreach ($users as $user)

                <tbody>
                    <tr>
                        <th>{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->toFormattedDateString() }}</td>
                        <td><a class="button is-outlined m-r-5" href="{{ route('users.show', $user->id) }}">View</a></td>
                        <td><a class="button is-outlined" href="{{ route('users.edit', $user->id) }}">Edit</a></td>
                    </tr>
                </tbody>

                @endforeach

            </table>
        </div>
    </div>
    {{ $users->links() }}
</div>
@endsection