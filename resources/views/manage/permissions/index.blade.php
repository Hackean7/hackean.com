@extends('layouts.manage') @section('title', '| All Permissions') @section('content')

    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title is-admin is-1">Manage Permissions</h1>
            </div>
            <div class="column">
                <a href="{{route('permissions.create')}}" class="button is-primary is-medium is-pulled-right"><i class="m-r-10"></i> Create New Permission</a>
            </div>
        </div>
        <hr class="m-t-0">

        <div class="card">
            <div class="card-content">
                <table class="table is-fullwidth">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($permissions as $permission)
                        <tr>
                            <th>{{ $permission->display_name }}</th>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->description }}</td>
                            <td class="has-text-right"><a class="button is-outlined m-r-5" href="{{ route('permissions.show', $permission->id) }}">View</a> </td>
                            <td class="has-text-right"> <a class="button is-outlined" href="{{  route('permissions.edit', $permission->id) }}">Edit</a> </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection