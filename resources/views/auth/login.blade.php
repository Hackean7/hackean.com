@extends('layouts.app') @section('title', '| Login') @section('content')

<div class="colums">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
            <div class="card-content">
                <h1 class="title">Log in</h1>
                <form action="{{ route('login') }}" method="post" role="form">
                    {{ csrf_field() }}
                    <div class="field">
                        <label for="email" class="label">Email Address:</label>
                        <p class="control">
                            <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                        </p>
                        @if ($errors->has('email'))
                        <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="field">
                        <label for="password" class="label">Password:</label>
                        <p class="control">
                            <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" type="password" name="password" id="password" placeholder="********">
                        </p>
                        @if ($errors->has('password'))
                        <p class="help is-danger">{{ $errors->first('password') }}</p>
                        @endif
                    </div>

                    <label class="checkbox" for="remember">
                           <input type="checkbox">
                           {{ __('Remember Me') }}       
                    </label>

                    <button class="button is-success is-outlined is-fullwidth m-t-30">Log In</button>
                </form>
            </div>
            <!-- end of card-content -->
        </div>
        <!-- end of card -->
        <h5 class="has-text-centered m-t-20"><a href="{{ route('password.request') }}" class="is-muted">Forgot your password?</a> <a href="{{ route('register') }}" class="is-muted">Register?</a></h5>
    </div>
</div>

@endsection @section('scripts')
<script>
    var app = new Vue({
        el: '#app'
    });
</script>
@endsection