@extends('layouts.admin')



@section('title') Create News @endsection









@section('content')



    <div class="row justify-content-center">

        <div class="col-lg-12 mt-4">



            <h1>Create Photo </h1>



            {!! Form::open(['method'=>'POST', 'action' => 'Admin\ArticalController@create','files'=>true]) !!}

            <div class= "form-group" >

                {!! Form::label('title', 'title *') !!}

                {!! Form::text('title', null, ['class' => $errors->has('title') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('title'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('title') }}</div>

                @endif

            </div>

            <div class= "form-group" >

                {!! Form::label('description', 'description *') !!}

                {!! Form::textarea('description', null, ['class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('description'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('description') }}</div>

                @endif

            </div>

            <div class= "form-group" >

                {!! Form::label('phone', 'phone*') !!}

                {!! Form::text('phone', null, ['class' => $errors->has('phone') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('phone'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('phone') }}</div>

                @endif

            </div>
            <div class= "form-group" >

                {!! Form::label('price', 'Price ') !!}

                {!! Form::number('price', null, ['class' => $errors->has('price') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('price'))

                    <div class="invalid-feedback">{{ $errors->first('price') }}</div>

                @endif

            </div>

            <div class= "form-group" >

                {!! Form::label('status', 'Status*') !!}

                <input type="checkbox" name="status" id="status" value="1">

                @if ($errors->has('status'))

                    {{ dd($errors->all()) }}

                    <div class="invalid-feedback">{{ $errors->first('status') }}</div>

                @endif

            </div>


            <div class= "form-group" >

                {!! Form::label('type', 'Tipe *') !!}

                <select name="type" id="type">
                    <option value="1">Կառաջարկեմ</option>
                    <option value="2">Կգնեմ</option>
                </select>

                @if ($errors->has('description'))

                    <div class="invalid-feedback">{{ $errors->first('description') }}</div>

                @endif

            </div>




            <div class= "form-group" >

                <div class="dropzone mb-4" id="dropzone"></div>

            </div>

            <div class="form-group">


                {!! Form::submit('Create News', ['class'=>'btn brn-primary btn-block']) !!}

            </div>





            {!! Form::close() !!}



        </div>


    </div>



@endsection


@section('script')
<script src="{{asset('plugins/dropzone/dropzone.js')}}"></script>
<link href="{{asset('plugins/dropzone/dropzone.css')}}" rel="stylesheet">
<script>
    $('.dropzone').dropzone({
        url: '{{route('admin.artical.upload')}}',
        method: 'post',
        maxFilesize: 200,
        maxFiles: 10,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dictDefaultMessage: 'Add Photos',
        success: function(file, response) {

            $(this.element).parents('form').append('<input class="imgUser" data-name="'+file.name+'" type="hidden" name="images[]" value="' + response.uri + '" />')
        },
        removedfile: function(file) {
            $(".imgUser[data-name='"+file.name+"']").remove();
            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;

        }
    });
</script>

@endsection

