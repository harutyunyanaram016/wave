@extends('layouts.admin')



@section('title') Փոփոխել ապրանքը @endsection




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



    <h1> Փոփոխել ապրանքը</h1>

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="row">







                <div class="col-lg-4">



                    @foreach($product->images as $image)
                        <div class="col-lg-12" style = "margin-top:10px;">
                            <img width="200px"  src="{{asset('/images/product/'.$image->file)}}"><span style="cursor: pointer; border: 1px solid black;padding: 2px" class="deleteImg" data-id="{{$image->id}}">X</span>
                        </div>
                    @endforeach



                </div>





                <div class="col-lg-8">

                    {!! Form::model($product, ['method'=>'PATCH','action' => ['Admin\AdminProductsController@update', $product->id], 'files' => true]) !!}



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






                    <div class="dropzone mb-4" id="dropzone"></div>

                    @if(!empty($creators))
                        <div class="form-group">
                            {!! Form::label('creator_id', 'Ընտրեք արտադռողին *') !!}
                            <select  name="creator_id" id="creator_id" @if(!$errors->has('creator_id'))  class="form-control " @else class="form-control is-invalid" @endif>
                                @foreach($creators as $creator)
                                    <option @if($creator->id == $product->cretor_id)  selected @endif  value="{{$creator->id}}">{{$creator->name}}</option>
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
                                    <option @if($parent->id == $product->category_id)  selected @endif value="{{$parent->id}}" class="optionGroup">{{$parent->name}}</option>

                                @endforeach
                            </select>
                            @if ($errors->has('category_id'))
                                <div class="invalid-feedback">{{ $errors->first('category_id') }}</div>
                            @endif
                        </div>
                    @endif
                    <div class="form-group">
                        {!! Form::label('subcategory_id', 'Ընտրեք ենթակատեգորիան  *') !!}
                        <select  name="subcategory_id" id="my-subcategory" @if(!$errors->has('subcategory_id'))  class="form-control" @else class="form-control is-invalid" @endif>
                            <option  value="" class="optionChild">None</option>
                            @if(!empty($product->category->childrens))
                                @foreach($product->category->childrens as $parent)
                                    <option @if($parent->id == $product->subcategory_id)  selected @endif value="{{$parent->id}}" class="optionChild">{{$parent->name}}</option>
                                @endforeach
                            @endif
                        </select>
                        @if ($errors->has('subcategory_id'))
                            <div class="invalid-feedback">{{ $errors->first('subcategory_id') }}</div>
                        @endif
                    </div>







                    @foreach($product->images as $image)
                        <input class="imgUser imgUser{{$image->id}}" type="hidden"   data-name="{{$image->file}}" name="images[]" value="{{$image->file}}">
                    @endforeach








                    <div class="form-group">

                        {!! Form::submit('Փոփոխել', ['class'=>'btn btn-primary btn-block']) !!}

                    </div>

                    {!! Form::close() !!}



                    {!! Form::open(['method'=>'DELETE', 'action'=>['Admin\AdminProductsController@destroy', $product->id]]) !!}

                    <div class="form-group">

                        {!! Form::submit('Ջնջել', ['class'=>'btn btn-danger btn-block']) !!}

                    </div>

                    {!! Form::close() !!}

                </div>





            </div>

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



        $(".deleteImg").click(function () {
            var id = $(this).attr('data-id');
            var self = $(this);
            $.post('{{route('deleteImage')}}', {id:id,_token:$("meta[name='csrf-token']").attr('content')},function (data) {
                if(data.message = 'yes'){
                    self.parent().remove();
                    $('.imgUser'+id).remove();
                }
            })
        })
        function getSubcategories(categoryValue) {
            const subcategoriesSelect = document.querySelector('#my-subcategory');
            var xhr = new XMLHttpRequest();
            if (categoryValue !== '') {
                xhr.open('GET',  '{{ route('getSubcategories', null) }}' +'/' + categoryValue, true);
                xhr.onload = function() {
                    if (this.status == 200) {
                        subcategories = JSON.parse(this.responseText);
                        display = '<option value="" selected="selected">Choose Option</option>';
                        subcategories.forEach(function(subcategory) {
                            var str = '';
                            if(subcategory.id == '{{$product->subcategory_id}}'){
                                str = 'selected'
                            }

                            display += '<option '+ str +'  value="'+ subcategory.id +'">' + subcategory.name +'</option>';
                        });
                        subcategoriesSelect.innerHTML = display;
                    }
                }
                xhr.send();
            } else {
                subcategoriesSelect.innerHTML = '<option value="" selected="selected">Choose Option</option>';
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