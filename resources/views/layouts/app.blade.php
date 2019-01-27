<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
<head>

    @include('partials._head')

</head>
<body>
    
    <div id="app"></div>
    	
    @include('_includes.nav.main')

    @include('partials._messages')
    
    <div id="app">@yield('content') </div>

    @include('partials._footer')

    @include('partials._javascript')

    @yield('scripts')

</body>

</html>

