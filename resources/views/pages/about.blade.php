@extends('layouts.app') @section('title', '| About') @section('content')

@section('stylesheets')

{!! Html::style('css/about.css') !!}

@endsection
<div class="flex-container">
	<div class="container is-fluid">
	        <h1 class="about-title title is-1 has-text-centered m-t-20">  ~ The Hackean Team ~</h1>
	        <p class="about is-size-5 has-text-centered is-capitalized">
	        	I started this site so I can tell people what's in my head...and my head is like a hybrid from Heaven and Hell even if I don't belive religion! You'll see a lot of interesting stuff here, a lot of posts, maybe music, maybe classified documents from F.B.I, I don't know yet! It was created just by me with help from <a href="https://devmarketer.io/" target="_blank"> J.A Curtis</a>, <a href="https://daveismyname.blog/" target="_blank"> David Carr </a> and my man, the guy who turned me in the next Steve Jobs: <a href="https://www.twitch.tv/maribolhd" target="_blank">Maribol</a> Because of them my blog is up running but let's not forget about a blog that inspired me a lot: <a href="http://stayfresh.ro/" target="_blank">StayFresh</a> Yuu should learn to code, because is more important than you think. You're not a dork, nerd, geek, you are a person who likes other things that the majority (exept music, everyone love music)! My blog will have a section for learning and it will be dedicated to PHP Progarmming and WEB Development! These were my last words, if you want to cotact me for more details or to start a project & business togheter, you can do it here: <a href="/contact">Contact. </a> 

	        </p>
	        <p class="about-us is-size-5 has-text-centered m-t-30">
	        	私は普通の人々が特別であることを選ぶことは可能であると思います
	        </p>
	</div>
</div>
@endsection