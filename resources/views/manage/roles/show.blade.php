@extends('layouts.manage') @section('title', '| View Role') @section('content')

<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title is-admin is-1"> {{ $role->display_name }} <small class="m-l-5 subtitle"> <em>({{ $role->name }})</em> </small> </h1>
            <h5 class="title is-admin is-5">{{ $role->description }}</h5>
        </div>
        <div class="column">
            <a href="{{ route('roles.edit', $role->id) }}" class="button is-primary is-pulled-right is-medium"><i class="fa fa-edit m-r-10"></i> Edit this Role </a>
        </div>
    </div>
    <hr class="m-t-10">

    <div class="columns">
        <div class="column">
            <div class="box">
                <article class="media">
                    <div class="media-content">
                        <div class="content">
                            <h2 class="title">Permissions:</h2>
                            <ul>
                                @foreach ($role->permissions as $r)
                                <li> {{ $r->display_name }} <em class="m-l-15">({{ $r->description }})</em></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>

</div>

@endsection