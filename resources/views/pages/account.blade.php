@extends('layouts.app') @section('title', '| My Account') @section('content') 

	<div class="flex-container" style="font-family: 'Cute Font', cursive;">

	    <h1 class="title is-1 has-text-centered is-admin">This is your account</h1>

	    <div class="subtitle is-6 has-text-centered is-admin">*This website is not a social network (yet) so my intention is just to create content, not to bring people togheter. In this case you can just logout. Dashboard is just for the administrator or hackers! If you want to be admin or want to know some more about the site <a href="/contact">contact me!</a></div>

	    <div class="columns is-multiline is-mobile">

	        <div class="column is-half m-t-35">
	            <div class="title is-2 has-text-centered is-admin">Dashboard:</div>
	            <a href="{{route('manage.dashboard')}}" class="button is-primary is-medium is-rounded is-fullwidth"> <span class="icon"> <i class="fa fa-cogs"></i> </span> </a>
	        </div>

	        <div class="column is-half m-t-35">
	            <div class="title is-2 has-text-centered is-admin">Log Out:</div>
	            <a href="{{ route('logout') }}" class="button is-link is-medium is-rounded is-fullwidth " onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <span class="icon"> <i class="fa fa-sign-out"></i> </span> </a>
		    </div>

		</div>
	</div>
@include('_includes.forms.logout') @endsection