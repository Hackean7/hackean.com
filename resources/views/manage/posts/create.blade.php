@extends('layouts.manage')

@section('title', '| Create New Post')

@section('stylesheets')
        {!! Html::style('css/parsley.css') !!}
        {!! Html::style('css/select2.min.css') !!}
@endsection

@section('scripts')

<script type="text/javascript" charset="utf-8" async defer>
    tinymce.init({
        selector: 'textarea',
        plugins: [ 
                 "link code",
                 "advlist autolink lists link image charmap print preview anchor",
                 "searchreplace visualblocks code fullscreen",
                 "insertdatetime media table contextmenu paste"
                 ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    });
</script>

@endsection

@section('content')

    <div class="flex-container">
        <div class="columns">
            <div class="column">    

                <h1 class="title is-2 is-admin has-text-centered"> Create New Post </h1>
                <hr>

                {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '', 'files' => true)) !!}
                    {{ Form::label('title', 'Title:', ['class' => 'label title is-4"']) }}
                    {{ Form::text('title', null, array('class' => 'input is-primary is-medium', 'required' => '', 'maxlength' => '255')) }}

                    {{ Form::label('slug', 'Slug:', ['class' => 'label title is-4 m-t-30']) }}
                    {{ Form::text('slug', null, array('class' => 'input is-primary is-medium', 'required' => '', 'minlength' => '5', 'maxlength' => '255') ) }}

                    {{ Form::label('category_id', 'Category:', ['class' => 'label title is-4 m-t-30']) }}
                    <div class="select is-medium is-info">
                    <select name="category_id">
                        @foreach($categories as $category)
                            <option value='{{ $category->id }}'>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    </div>

                    {{-- Form::label('tags', 'Tags:', ['class' => 'label title is-4 m-t-30']) }}
                    <div class="select is-multiple is-medium is-info" name="tags[]">
                    <select multiple size="5">
                        @foreach($tags as $tag)
                            <option value='{{ $tag->id }}'>{{ $tag->name }}</option>
                        @endforeach
                    </select>
                    </div>
                    --}}
                    
                    {{ Form::label('image', 'Upload an Image:', ['class' => 'label title is-4 m-t-30']) }}
                    {{ Form::file('image') }}

                    {{ Form::label('content', "Post content:", ['class' => 'label title is-4 m-t-30']) }}
                    {{ Form::textarea('content', null, array('class' => 'textarea')) }}

                    {{ Form::submit('Create Post', array('class' => 'button is-success is-focused is-medium m-t-30')) }}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
