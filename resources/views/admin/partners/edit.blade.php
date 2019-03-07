@extends('layouts.admin')

@section('title') Edit Brand @endsection


@section('content')


    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1>Edit Brand</h1>

            {!! Form::model($category, ['method'=>'PATCH', 'action'=>['Admin\AdminTransportsController@update', $category->id]]) !!}
            <div class="form-group">

                {!! Form::label('name', 'Name') !!}

                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                @if ($errors->has('name'))

                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>

                @endif

            </div>
            <div class="form-group">

                {!! Form::label('name_ru', 'Name RU') !!}

                {!! Form::text('name_ru', null, ['class' => 'form-control']) !!}
                @if ($errors->has('name_ru'))

                    <div class="invalid-feedback">{{ $errors->first('name_ru') }}</div>

                @endif

            </div>
            <div class="form-group">

                {!! Form::label('name_ka', 'Name GE') !!}

                {!! Form::text('name_ka', null, ['class' => 'form-control']) !!}
                @if ($errors->has('name_ka'))

                    <div class="invalid-feedback">{{ $errors->first('name_ka') }}</div>

                @endif

            </div>
            <div class="form-group">

                {!! Form::label('name_en', 'Name EN') !!}

                {!! Form::text('name_en', null, ['class' => 'form-control']) !!}
                @if ($errors->has('name_en'))

                    <div class="invalid-feedback">{{ $errors->first('name_en') }}</div>

                @endif

            </div>

            <div class="form-group">

                {!! Form::label('name', 'Url') !!}

                {!! Form::text('url', null, ['class' => 'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('name', 'Image') !!}

                {!! Form::file('image', null, ['class' => 'form-control']) !!}

            </div>



            <div class="form-group">

                {!! Form::submit('Create Partner', ['class'=>'btn btn-block btn-primary']) !!}

            </div>
            {!! Form::close() !!}
        </div>

    </div>






@endsection