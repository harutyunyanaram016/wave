@extends('layouts.admin')



@section('title') Slider @endsection







@section('content')

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="row">







                <div class="col-lg-4">








                </div>





                <div class="col-lg-8">

                    {!! Form::model($model, ['method'=>'POST','action' => ['Admin\AdminDashboardController@settings'], 'files' => true]) !!}

                    <div class= "form-group" >

                        {!! Form::label('phone', 'Հեռախոսահամար *') !!}

                        {!! Form::text('phone', null, ['class' => $errors->has('phone') ? 'form-control is-invalid' : 'form-control']) !!}

                        @if ($errors->has('phone'))

                            {{--{{ dd($errors->all()) }}--}}

                            <div class="invalid-feedback">{{ $errors->first('phone') }}</div>

                        @endif

                    </div>

                    <div class= "form-group" >

                        {!! Form::label('email', 'Էլեկտրոննային հասցե') !!}

                        {!! Form::email('email', null, ['class' => $errors->has('email') ? 'form-control is-invalid' : 'form-control']) !!}

                        @if ($errors->has('email'))

                            {{--{{ dd($errors->all()) }}--}}

                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>

                        @endif

                    </div>

                    <div class= "form-group" >

                        {!! Form::label('address_hy', 'Հասցե հայերեն') !!}

                        {!! Form::text('address_hy', null, ['class' => $errors->has('address_hy') ? 'form-control is-invalid' : 'form-control']) !!}

                        @if ($errors->has('address_hy'))

                            {{--{{ dd($errors->all()) }}--}}

                            <div class="invalid-feedback">{{ $errors->first('address_hy') }}</div>

                        @endif

                    </div>

                    <div class= "form-group" >

                        {!! Form::label('address_ru', 'Հասցե ռւսերեն') !!}

                        {!! Form::text('address_ru', null, ['class' => $errors->has('address_ru') ? 'form-control is-invalid' : 'form-control']) !!}

                        @if ($errors->has('address_ru'))

                            {{--{{ dd($errors->all()) }}--}}

                            <div class="invalid-feedback">{{ $errors->first('address_ru') }}</div>

                        @endif

                    </div>

                    <div class= "form-group" >

                        {!! Form::label('days_hy', 'Աշխատանքային օրերը հաըերեն') !!}

                        {!! Form::text('days_hy', null, ['class' => $errors->has('days_hy') ? 'form-control is-invalid' : 'form-control']) !!}

                        @if ($errors->has('days_hy'))

                            {{--{{ dd($errors->all()) }}--}}

                            <div class="invalid-feedback">{{ $errors->first('days_hy') }}</div>

                        @endif

                    </div>

                    <div class= "form-group" >

                        {!! Form::label('days_ru', 'Աշխատանքային օրերը ռուսերեն') !!}

                        {!! Form::text('days_ru', null, ['class' => $errors->has('days_ru') ? 'form-control is-invalid' : 'form-control']) !!}

                        @if ($errors->has('days_ru'))

                            {{--{{ dd($errors->all()) }}--}}

                            <div class="invalid-feedback">{{ $errors->first('days_ru') }}</div>

                        @endif

                    </div>

                    <div class= "form-group" >

                        {!! Form::label('hours', 'Աշխատանքային ժամերը ') !!}

                        {!! Form::text('hours', null, ['class' => $errors->has('hours') ? 'form-control is-invalid' : 'form-control']) !!}

                        @if ($errors->has('hours'))

                            {{--{{ dd($errors->all()) }}--}}

                            <div class="invalid-feedback">{{ $errors->first('hours') }}</div>

                        @endif

                    </div>

                    <div class="form-group" style = "margin-top:10px;">
                        <img width="200px"  src="{{asset('/images/'.$model->logo)}}">
                    </div>
                    <div class= "form-group" >

                        {!! Form::label('logo', 'Լօգօ *') !!}

                        {!! Form::file('logo', null, ['class' => $errors->has('image') ? 'form-control is-invalid' : 'form-control']) !!}

                        @if ($errors->has('logo'))

                            {{--{{ dd($errors->all()) }}--}}

                            <div class="invalid-feedback">{{ $errors->first('logo') }}</div>

                        @endif

                    </div>









                    <div class= "form-group" >

                        {!! Form::label('description', 'Մեր մասին նկարագրություն հայերեն') !!}

                        {!! Form::textarea('description', null, ['rows'=>3, 'id'=>'editor', 'class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control']) !!}

                        @if ($errors->has('description'))

                            <div class="invalid-feedback">{{ $errors->first('description') }}</div>

                        @endif

                    </div>
                    <div class= "form-group" >

                        {!! Form::label('description_ru', 'Մեր մասին նկարագրություն ռուսերեն *') !!}

                        {!! Form::textarea('description_ru', null, ['rows'=>3, 'id'=>'editor2', 'class' => $errors->has('description_ru') ? 'form-control is-invalid' : 'form-control']) !!}

                        @if ($errors->has('description_ru'))

                            <div class="invalid-feedback">{{ $errors->first('description_ru') }}</div>

                        @endif

                    </div>
                    <div class="form-group">

                        {!! Form::submit('Update Slider', ['class'=>'btn btn-primary btn-block']) !!}

                    </div>

                    {!! Form::close() !!}







                </div>





            </div>

        </div>

    </div>

@endsection

@section('modal')
    <script>
        $(".deleteImg").click(function () {
            var id = $(this).attr('data-id');
            var self = $(this);
            $.post('{{route('admin.slider.delete')}}', {id:id,_token:$("meta[name='csrf-token']").attr('content')},function (data) {
                if(data.message = 'yes'){
                    self.parent().remove();
                }
            })
        })
    </script>
@endsection



