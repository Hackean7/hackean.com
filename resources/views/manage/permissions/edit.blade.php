@extends('layouts.manage') @section('content')
<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title is-2 is-admin has-text-centered">Edit Permission Details</h1>
        </div>
    </div>
    <hr class="m-t-0">

    <form action="{{ route('permissions.update', $permission->id) }}" method="POST">
        {{ csrf_field() }} {{ method_field('put') }}

        <div class="field">
            <label for="display_name" class="label">Name (Display Name)</label>
            <p class="control">
                <input type="text" class="input is-primary" name="display_name" id="display_name" value="{{$permission->display_name}}">
            </p>
        </div>

        <div class="field">
            <label for="name" class="label m-t-20">Slug <small>(Cannot be changed)</small></label>
            <p class="control">
                <input type="text" class="input is-danger" name="name" id="name" value="{{$permission->name}}" disabled>
            </p>
        </div>

        <div class="field">
            <label for="description" class="label m-t-20">Description</label>
            <p class="control">
                <input type="text" class="input is-primary" name="description" id="description" placeholder="Describe what this permission does" value="{{$permission->description}}">
            </p>
        </div>

        <button class="button is-success is-focused is-medium m-t-20">Save Changes</button>
    </form>
</div>
@endsection