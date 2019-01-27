<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('partials._head')

</head>

<body>

    @include('_includes.nav.main')

    <div class="management-area" id="app">
        @include('_includes.nav.manage') @yield('content') @include('partials._footer') @include('partials._javascript') @include('_includes.notifications.toast') @yield('scripts')
    </div>

</body>

</html>