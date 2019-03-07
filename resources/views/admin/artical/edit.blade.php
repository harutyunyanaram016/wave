@extends('layouts.admin')



@section('title') Edit News @endsection











@section('content')

    <h1>Edit Ad</h1>



    <div class="row justify-content-center">



        <div class="col-sm-3">
            <div class="col-lg-4">



                @foreach($post->images as $image)
                    <div class="col-lg-12" style = "margin-top:10px;">
                        <img width="200px"  src="{{asset('/images/artical/'.$image->name)}}"><span style="cursor: pointer; border: 1px solid black;padding: 2px" class="deleteImg" data-id="{{$image->id}}">X</span>
                    </div>
                @endforeach



            </div>
        </div>
        <div class="col-sm-9">

            {!! Form::model($post, ['method'=>'PATCH','action' => ['Admin\ArticalController@edit', $post->id],'files'=>true]) !!}

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

                <input @if($post->status ) checked @endif type="checkbox" name="status" id="status" value="1">

                @if ($errors->has('status'))

                    {{ dd($errors->all()) }}

                    <div class="invalid-feedback">{{ $errors->first('status') }}</div>

                @endif

            </div>


            <div class= "form-group" >

                {!! Form::label('type', 'Tipe *') !!}

                <select name="type" id="type">
                    <option  value="1">Կառաջարկեմ</option>
                    <option @if($post->type == 2) selected @endif value="2">Կգնեմ</option>
                </select>

                @if ($errors->has('description'))

                    <div class="invalid-feedback">{{ $errors->first('description') }}</div>

                @endif

            </div>




            <div class= "form-group" >

                <div class="dropzone mb-4" id="dropzone"></div>

            </div>
            @foreach($post->images as $image)
                <input class="imgUser imgUser{{$image->id}}" type="hidden"   data-name="{{$image->name}}" name="images[]" value="{{$image->name}}">
            @endforeach

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

@section('modal')


















    <script>


        $(".deleteImg").click(function () {
            var id = $(this).attr('data-id');
            var self = $(this);
            $.post('{{route('artical.deleteImage')}}', {id:id,_token:$("meta[name='csrf-token']").attr('content')},function (data) {
                if(data.message = 'yes'){
                    self.parent().remove();
                    $('.imgUser'+id).remove();
                }
            })
        })

    </script>

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