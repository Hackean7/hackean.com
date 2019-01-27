@extends('layouts.manage')

@section('title', '| Edit Post')

@section('stylesheets')

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
                <h1 class="title is-2 is-admin has-text-centered"> Edit This Post </h1>

            {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'put', 'files' => true]) !!}

                {{ Form::label('title', 'Title:', ['class' => 'label title is-4"']) }}
                {{ Form::text('title', null, ['class' => 'input is-primary is-medium']) }}
                
                {{ Form::label('slug', 'Slug:', ['class' => 'label title is-4 m-t-30']) }}
                {{ Form::text('slug', null, ['class' => 'input is-primary is-medium', 'required' => '', 'minlenght' => '5', 'maxlenght' => '255'] ) }}
            
                {{ Form::label('category_id', 'Category:', ['class' => 'label title is-4 m-t-30']) }}
                <div class="select is-medium is-info">
                    <select name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $post->category->id }}">{{ $post->category->name }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Form::label('tags', 'Tags:', ["class" => 'label title is-4 m-t-30']) }}
                <div class="select is-multiple is-medium is-info">
                    <select multiple size="5">
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>
                --}}
                
                {{ Form::label('image', 'Update Image:', ["class" => 'label title is-4 m-t-30']) }}
                {{ Form::file('image') }}

                {{ Form::label('content', 'Content:', ["class" => 'label title is-4 m-t-30']) }}
                {{ Form::textarea('content', null, ["class" => 'textarea contro']) }}

                    <div class="card m-t-30">
                        <div class="card-content">
                                <label class="label title is-4">Created At:</label>
                                <p class="subtitle is-6 m-t-5"> {{ date('M j, Y H:i', strtotime($post->created_at)) }} </p>

                                <label class="label title is-4 m-t-10">Last Updated:</label>
                                <p class="subtitle is-6 m-t-5"> {{ date('M j, Y H:i', strtotime($post->updated_at)) }} </p>
                        </div>
                    </div>             
                            {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'button is-danger  is-rounded m-t-30')) !!}               
                            {{ Form::submit('Save', ["class" => 'button is-success is-rounded m-t-30 m-l-10']) }}
   
                    {!! Form::close() !!}
            </div> 
        </div>
    </div>
@endsection
