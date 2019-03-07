
@extends('layouts.admin')



@section('title') Settings @endsection




@section('content')
    <h1>Static Pages</h1>
    <div class="row">
        <div class="col-md-8 offset-md-3">
            {{ Form::open(array('route'=>'admin.static.pages.create','enctype'=>'multipart/form-data')) }}
            {{Form::label('title', 'Title', array('class' => 'awesome'))}}
            <br>

            {{Form::text('title',null,['id'=>'title','class' => $errors->has('title') ? 'form-control is-invalid' : 'form-control'])}}
            <br>
                {{Form::label('title_en', 'Title ( EN ):', array('class' => 'awesome'))}}
            <br>

            {{Form::text('title_en',null,['id'=>'title_en','class' => $errors->has('title_en') ? 'form-control is-invalid' : 'form-control'])}}
            <br>
            {{Form::label('title_ru', 'Title ( RU ):', array('class' => 'awesome'))}}
            <br>

            {{Form::text('title_ru',null,['id'=>'title_ru','class' => $errors->has('title_ru') ? 'form-control is-invalid' : 'form-control'])}}
            <br>
            {{Form::label('title_ka', 'Title ( GE ):', array('class' => 'awesome'))}}
            <br>

            {{Form::text('title_ka',null,['id'=>'title_ka','class' => $errors->has('title_ka') ? 'form-control is-invalid' : 'form-control'])}}
            <hr>
            {{Form::label('image', 'Image', array('class' => 'awesome'))}}
            <br>

            {{Form::file('image',null,['id'=>'title','class' =>  'form-control'])}}
            @if ($errors->has('image'))

                <div class="invalid-feedback">{{ $errors->first('image') }}</div>

            @endif
            <hr>
            {{Form::label('content', 'Content :', array('class' => 'awesome'))}}
            {!! Form::textarea('content', null, ['rows'=>3, 'id'=>'editor12', 'class' => $errors->has('content') ? 'form-control is-invalid' : 'form-control']) !!}
            @if ($errors->has('content'))

                <div class="invalid-feedback">{{ $errors->first('content') }}</div>

            @endif
            <br><br>
                {{Form::label('content_en', 'Content ( EN ):', array('class' => 'awesome'))}}
                {!! Form::textarea('content_en', null, ['rows'=>3, 'id'=>'editor1', 'class' => $errors->has('content_en') ? 'form-control is-invalid' : 'form-control']) !!}
            @if ($errors->has('content_en'))

                <div class="invalid-feedback">{{ $errors->first('content_en') }}</div>

            @endif
            <br><br>
            {{Form::label('content_ru', 'Content ( RU ):', array('class' => 'awesome'))}}
            {!! Form::textarea('content_ru', null, ['rows'=>3, 'id'=>'editor2', 'class' => $errors->has('content_ru') ? 'form-control is-invalid' : 'form-control']) !!}
            @if ($errors->has('content_ru'))

                <div class="invalid-feedback">{{ $errors->first('content_ru') }}</div>

            @endif
            <br><br>
            {{Form::label('content_ka', 'Content ( GE ):', array('class' => 'awesome'))}}
            {!! Form::textarea('content_ka', null, ['rows'=>3, 'id'=>'editor3', 'class' => $errors->has('content_ka') ? 'form-control is-invalid' : 'form-control']) !!}

        @if ($errors->has('content_ka'))

                <div class="invalid-feedback">{{ $errors->first('content_ka') }}</div>

            @endif
            <br><br>
            {!! Form::submit('Create Page', ['class'=>'btn btn-info btn-block']) !!}
            {!! Form::close() !!}
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>

    <script>

        CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor12');
        CKEDITOR.replace('editor2');
        CKEDITOR.replace('editor3');


    </script>
@endsection