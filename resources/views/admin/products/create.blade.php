@extends('layouts.admin')



@section('title') Ավելացնել ապրանք @endsection





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

        <div class="col-lg-6 mt-4">



            <h1>Ավելացնել ապրանք</h1>



            {!! Form::open(['method'=>'POST', 'action' => 'Admin\AdminProductsController@store','files'=>true]) !!}







            <div class= "form-group" >

                {!! Form::label('brand', 'Անուն հայերեն *') !!}

                {!! Form::text('brand', null, ['class' => $errors->has('brand') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('brand'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('brand') }}</div>

                @endif

            </div>

            <div class= "form-group" >

                {!! Form::label('brand_ru', 'Անուն ռուսերեն *') !!}

                {!! Form::text('brand_ru', null, ['class' => $errors->has('brand_ru') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('brand_ru'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('brand_ru') }}</div>

                @endif

            </div>








            <div class="form-group">

                {!! Form::label('url', 'Հղում (Անգլերեն տառերով օրինակ `drner`)') !!}

                {!! Form::text('url', null, ['class' => 'form-control']) !!}
                @if ($errors->has('url'))

                    <div class="invalid-feedback">{{ $errors->first('url') }}</div>

                @endif

            </div>



            <div class= "form-group" >

                {!! Form::label('price', 'Գինը հայերեն') !!}

                {!! Form::textarea('price', null, ['id'=>'editor3', 'class' => $errors->has('price') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('price'))

                    <div class="invalid-feedback">{{ $errors->first('price') }}</div>

                @endif

            </div>
            <div class= "form-group" >

                {!! Form::label('price_ru', 'Գինը ռուսերեն') !!}

                {!! Form::textarea('price_ru', null, ['id'=>'editor1', 'class' => $errors->has('price_ru') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('price_ru'))

                    <div class="invalid-feedback">{{ $errors->first('price_ru') }}</div>

                @endif

            </div>




            <div class= "form-group" >

                {!! Form::label('description', 'Նկարագրություն հայերեն *') !!}

                {!! Form::textarea('description', null, ['rows'=>3, 'id'=>'editor', 'class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('description'))

                    <div class="invalid-feedback">{{ $errors->first('description') }}</div>

                @endif

            </div>
            <div class= "form-group" >

                {!! Form::label('description_ru', 'Նկարագրություն ռուսերեն *') !!}

                {!! Form::textarea('description_ru', null, ['rows'=>3, 'id'=>'editor2', 'class' => $errors->has('description_ru') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('description_ru'))

                    <div class="invalid-feedback">{{ $errors->first('description_ru') }}</div>

                @endif

            </div>

            @if(!empty($creators))
                <div class="form-group">
                    {!! Form::label('creator_id', 'Ընտրեք արտադրողին *') !!}
                    <select  name="creator_id" id="creator_id" @if(!$errors->has('creator_id'))  class="form-control " @else class="form-control is-invalid" @endif>
                        @foreach($creators as $creator)
                            <option  value="{{$creator->id}}">{{$creator->name}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('creator_id'))

                        <div class="invalid-feedback">{{ $errors->first('creator_id') }}</div>

                    @endif
                </div>
            @endif

            @if(!empty($categories))
                <div class="form-group">
                    {!! Form::label('category_id', 'Ընտրեք կատեգորիան *') !!}
                    <select  name="category_id" id="my-category" @if(!$errors->has('category_id'))  class="form-control" @else class="form-control is-invalid" @endif>
                        @foreach($categories as $parent)
                            <option  value="{{$parent->id}}" class="optionGroup">{{$parent->name}}</option>
                        @endforeach
                    </select>
                </div>
            @endif

            <div class="form-group">
                {!! Form::label('subcategory_id', 'Ընտրեք ենթակատեգորիան *') !!}
                {!! Form::select('subcategory_id', array(''=>'Ընտրեք'), null,  ['id'=>'my-subcategory','class' => $errors->has('subcategory_id') ? 'form-control is-invalid' : 'form-control']) !!}
                @if ($errors->has('subcategory_id'))
                    <div class="invalid-feedback">{{ $errors->first('subcategory_id') }}</div>
                @endif
            </div>


            <div class="dropzone mb-4" id="dropzone"></div>











            <div class="form-group">

                {!! Form::token() !!}

                {!! Form::submit('Ավելացնել ապրանք', ['class'=>'btn btn-primary btn-block']) !!}

            </div>





            {!! Form::close() !!}



        </div>

    </div>



@endsection





@section('modal')



    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>

    <script>

        CKEDITOR.replace('editor');
        CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor3');
        CKEDITOR.replace('editor2');


        function getSubcategories(categoryValue) {
            const subcategoriesSelect = document.querySelector('#my-subcategory');
            var xhr = new XMLHttpRequest();
            if (categoryValue !== '') {
                xhr.open('GET',  '{{ route('getSubcategories', null) }}' +'/' + categoryValue, true);
                xhr.onload = function() {
                    if (this.status == 200) {
                        subcategories = JSON.parse(this.responseText);
                        display = '<option value="" selected="selected">Ընտրեք</option>';
                        subcategories.forEach(function(subcategory) {
                            display += '<option value="'+ subcategory.id +'">' + subcategory.name +'</option>';
                        });
                        subcategoriesSelect.innerHTML = display;
                    }
                }
                xhr.send();
            } else {
                subcategoriesSelect.innerHTML = '<option value="" selected="selected">Ընտրեք</option>';
            }
        }
        document.addEventListener('DOMContentLoaded', function () {
            const category = document.querySelector('#my-category');
            getSubcategories(category.value);
            category.addEventListener('change', function () {
                getSubcategories(category.value);
            })
        });


    </script>

    <script src="{{asset('plugins/dropzone/dropzone.js')}}"></script>
    <link href="{{asset('plugins/dropzone/dropzone.css')}}" rel="stylesheet">
    <script>
        $('.dropzone').dropzone({
            url: '{{route('admin.upload')}}',
            method: 'post',
            maxFilesize: 200,
            maxFiles: 10,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            dictDefaultMessage: 'Ավելացրեք նկարնեն',
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

