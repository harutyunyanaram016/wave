@extends('layouts.admin')

@section('title') Փոփոխել կատեգորիան @endsection


@section('head')





    <style>





        .optionGroup {
            font-weight: bold;
            font-style: italic;
        }

        .optionChild {
            padding-left: 15px;
        }



    </style>



@endsection
@section('content')


    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1>Փոփոխել արտադրող</h1>

            {!! Form::model($category, ['method'=>'PATCH', 'action'=>['Admin\AdminCreatorsController@update', $category->id],'files'=>true]) !!}


            <div class="form-group">

                {!! Form::label('name', 'Անուն հայերեն') !!}

                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                @if ($errors->has('name'))

                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>

                @endif

            </div>
            <div class="form-group">

                {!! Form::label('name_ru', 'Անուն ռուսերեն') !!}

                {!! Form::text('name_ru', null, ['class' => 'form-control']) !!}
                @if ($errors->has('name_ru'))

                    <div class="invalid-feedback">{{ $errors->first('name_ru') }}</div>

                @endif

            </div>
            <div class="form-group">

                {!! Form::label('url', 'Հղում (Անգլերեն տառերով օրինակ `drner`)') !!}

                {!! Form::text('url', null, ['class' => 'form-control']) !!}
                @if ($errors->has('url'))

                    <div class="invalid-feedback">{{ $errors->first('url') }}</div>

                @endif

            </div>

            <div class="form-group">

                {!! Form::label('image', 'Նկարը *') !!}

                {!! Form::file('image', ['class' => $errors->has('image') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('image'))

                    <div class="invalid-feedback">{{ $errors->first('image') }}</div>

                @endif

            </div>



            <div class="form-group">
                {!! Form::submit('Փոփոխել', ['class'=>'btn btn-primary btn-block']) !!}
            </div>

            {!! Form::close() !!}




            {!! Form::open(['method'=>'DELETE', 'action'=>['Admin\AdminCreatorsController@destroy', $category->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Ջնջել', ['class'=>'btn btn-danger btn-block']) !!}
            </div>

            {!! Form::close() !!}
        </div>

    </div>






@endsection