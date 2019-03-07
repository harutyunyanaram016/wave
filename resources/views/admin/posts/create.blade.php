@extends('layouts.admin')



@section('title') Create News @endsection









@section('content')



    <div class="row justify-content-center">

        <div class="col-lg-12 mt-12">



            <h1>Ավելացնել նորություն </h1>



            {!! Form::open(['method'=>'POST', 'action' => 'Admin\AdminNewsController@create','files'=>true]) !!}

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

                {!! Form::label('url', 'Image *') !!}

                {!! Form::file('url', null, ['class' => $errors->has('image') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('url'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('url') }}</div>

                @endif

            </div>

            <div class="form-group">


                {!! Form::submit('Create News', ['class'=>'btn brn-primary btn-block']) !!}

            </div>





            {!! Form::close() !!}



        </div>


    </div>



@endsection



