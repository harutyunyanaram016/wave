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
            <h1>Փոփոխել կատեգորիան</h1>

            {!! Form::model($category, ['method'=>'PATCH', 'action'=>['Admin\AdminCategoriesController@update', $category->id],'files'=>true]) !!}


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

            @if(!empty($mains))
                {!! Form::label('category', 'Որ կատեգորիայի եթախումբ *') !!}
                <div class="form-group">
                    <select  name="parent_id" class="form-control">
                        <option value="">Լինի գլխաոր</option>
                        @foreach($mains as $parent)
                            @if($parent->id != $category->id)
                            <option @if($category->parent_id == $parent->id)  selected @endif value="{{$parent->id}}" >{{$parent->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            @endif

            <div class="form-group">
                {!! Form::submit('Փոփոխել', ['class'=>'btn btn-primary btn-block']) !!}
            </div>

            {!! Form::close() !!}




            {!! Form::open(['method'=>'DELETE', 'action'=>['Admin\AdminCategoriesController@destroy', $category->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Ջնջել', ['class'=>'btn btn-danger btn-block']) !!}
            </div>

            {!! Form::close() !!}
        </div>

    </div>






@endsection