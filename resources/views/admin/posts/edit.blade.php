@extends('layouts.admin')



@section('title') Edit News @endsection











@section('content')

    <h1>Edit news</h1>



    <div class="row justify-content-center">



        <div class="col-sm-9">

            {!! Form::model($post, ['method'=>'PATCH','action' => ['Admin\AdminNewsController@edit', $post->id],'files'=>true]) !!}

            <div class= "form-group" >

                {!! Form::label('name', 'name *') !!}

                {!! Form::text('name', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('name'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>

                @endif

            </div>

            <div class= "form-group" >

                {!! Form::label('name_ru', 'name RU*') !!}

                {!! Form::text('name_ru', null, ['class' => $errors->has('name_ru') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('name_ru'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('name_ru') }}</div>

                @endif

            </div>

            <div class= "form-group" >

                {!! Form::label('name_en', 'name EN*') !!}

                {!! Form::text('name_en', null, ['class' => $errors->has('name_en') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('name_en'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('name_en') }}</div>

                @endif

            </div>

            <div class= "form-group" >

                {!! Form::label('name_ka', 'name GE*') !!}

                {!! Form::text('name_ka', null, ['class' => $errors->has('name_ka') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('name_ka'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('name_ka') }}</div>

                @endif

            </div>


            <div class= "form-group" >

                {!! Form::label('description', 'Description *') !!}

                {!! Form::textarea('description', null, ['rows'=>3, 'id'=>'editor', 'class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('description'))

                    <div class="invalid-feedback">{{ $errors->first('description') }}</div>

                @endif

            </div>

            <div class= "form-group" >

                {!! Form::label('description_ru', 'Description (RU) *') !!}

                {!! Form::textarea('description_ru', null, ['rows'=>3, 'id'=>'editor2', 'class' => $errors->has('description_ru') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('description_ru'))

                    <div class="invalid-feedback">{{ $errors->first('description_ru') }}</div>

                @endif

            </div>

            <div class= "form-group" >

                {!! Form::label('description_en', 'Description (EN) *') !!}

                {!! Form::textarea('description_en', null, ['rows'=>3, 'id'=>'editor3',  'class' => $errors->has('description_en') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('description_en'))

                    <div class="invalid-feedback">{{ $errors->first('description_en') }}</div>

                @endif

            </div>

            <div class= "form-group" >

                {!! Form::label('description_ka', 'Description (GE) *') !!}

                {!! Form::textarea('description_ka', null, ['rows'=>3, 'id'=>'editor1',  'class' => $errors->has('description_ka') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('description_ka'))

                    <div class="invalid-feedback">{{ $errors->first('description_ka') }}</div>

                @endif

            </div>




            <div class= "form-group" >

                {!! Form::label('url', 'Image *') !!}

                {!! Form::file('url', null, ['class' => $errors->has('image') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('url'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('url') }}</div>

                @endif

            </div>

            <div class="form-group">


                {!! Form::submit('Edit News', ['class'=>'btn brn-primary btn-block']) !!}

            </div>




            {!! Form::close() !!}













            {!! Form::open(['method'=>'DELETE', 'action'=>['Admin\AdminNewsController@destroy', $post->id]]) !!}

            <div class="form-group">

                {!! Form::submit('Delete News', ['class'=>'btn btn-danger col-sm-12']) !!}

            </div>

            {!! Form::close() !!}

        </div>

    </div>



@endsection