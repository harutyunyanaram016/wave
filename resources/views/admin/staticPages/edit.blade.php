

@extends('layouts.admin')



@section('title') Settings @endsection




@section('content')
    <h1>Static Pages</h1>
    <div class="row">
        <div class="col-md-8 offset-md-3">
            {{ Form::open(array('action' => ['Admin\StaticPageController@edit', $page->id],'enctype'=>'multipart/form-data')) }}
            {{Form::label('title', 'Title :', array('class' => 'awesome','value'))}}
            <br>

            {{Form::text('title',$page->title,['id'=>'title_en','class' => $errors->has('title') ? 'form-control is-invalid' : 'form-control'])}}
            <br>
            {{Form::label('title_en', 'Title ( EN ):', array('class' => 'awesome','value'))}}
            <br>

            {{Form::text('title_en',$page->title_en,['id'=>'title_en','class' => $errors->has('title_en') ? 'form-control is-invalid' : 'form-control'])}}
            <br>
            {{Form::label('title_ru', 'Title ( RU ):', array('class' => 'awesome'))}}
            <br>

            {{Form::text('title_ru',$page->title_ru,['id'=>'title_ru','class' => $errors->has('title_ru') ? 'form-control is-invalid' : 'form-control'])}}
            <br>
            {{Form::label('title_ka', 'Title ( GE ):', array('class' => 'awesome'))}}
            <br>

            {{Form::text('title_ka',$page->title_ka,['id'=>'title_fr','class' => $errors->has('title_ka') ? 'form-control is-invalid' : 'form-control'])}}
            <hr>
            {{Form::label('image', 'Image', array('class' => 'awesome'))}}
            <br>

            {{Form::file('image',null,['id'=>'title','class' =>  'form-control'])}}
            @if ($errors->has('image'))

                <div class="invalid-feedback">{{ $errors->first('image') }}</div>

            @endif
            <hr>
            {{Form::label('content', 'Content :', array('class' => 'awesome'))}}
            {!! Form::textarea('content', $page->content, ['rows'=>3, 'id'=>'editor12', 'class' => $errors->has('content') ? 'form-control is-invalid' : 'form-control']) !!}
            @if ($errors->has('content'))

                <div class="invalid-feedback">{{ $errors->first('content') }}</div>

            @endif
            <br><br>
            {{Form::label('content_en', 'Content ( EN ):', array('class' => 'awesome'))}}
            {!! Form::textarea('content_en', $page->content_en, ['rows'=>3, 'id'=>'editor1', 'class' => $errors->has('content_en') ? 'form-control is-invalid' : 'form-control']) !!}
            @if ($errors->has('content_en'))

                <div class="invalid-feedback">{{ $errors->first('content_en') }}</div>

            @endif
            <br><br>
            {{Form::label('content_ru', 'Content ( RU ):', array('class' => 'awesome'))}}
            {!! Form::textarea('content_ru', $page->content_ru, ['rows'=>3, 'id'=>'editor2', 'class' => $errors->has('content_ru') ? 'form-control is-invalid' : 'form-control']) !!}
            @if ($errors->has('content_ru'))

                <div class="invalid-feedback">{{ $errors->first('content_ru') }}</div>

            @endif
            <br><br>
            {{Form::label('content_ka', 'Content ( FR ):', array('class' => 'awesome'))}}
            {!! Form::textarea('content_ka', $page->content_ka, ['rows'=>3, 'id'=>'editor3', 'class' => $errors->has('content_ka') ? 'form-control is-invalid' : 'form-control']) !!}

            @if ($errors->has('content_ka'))

                <div class="invalid-feedback">{{ $errors->first('content_ka') }}</div>

            @endif
            <br><br>
            {!! Form::submit('Edit Page', ['class'=>'btn btn-warning btn-block']) !!}
            {!! Form::close() !!}
            <script src="{{asset('ckeditor/ckeditor.js')}}"></script>

            <script>

                CKEDITOR.replace('editor12');
                CKEDITOR.replace('editor1');
                CKEDITOR.replace('editor2');
                CKEDITOR.replace('editor3');


            </script>
@endsection






