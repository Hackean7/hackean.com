@extends('layouts.manage')

@section('title', "| Edit Tag")

@section('content')
	<div class="flex-container">
		<div class="columns has-text-centered">
			<div class="column is-4 is-offset-4">
			    {{ Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'put']) }}

			        {{ Form::label('name', "Title:", ['class' => 'title is-2 is-admin']) }}
			        {{ Form::text('name', null, ['class' => 'input is-primary is-medium m-t-20']) }}
			        {{ Form::submit('Save Changes', ['class' => 'button is-success is-medium m-t-20'])}}

			    {{ Form::close()}}
    		</div>
    	</div>
	</div>
@endsection