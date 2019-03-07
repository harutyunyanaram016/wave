@extends('layouts.admin')



@section('title') Դասեր, ենթադասեր @endsection



@section('head')





    <style>



        .tree, .tree ul {

            margin:0;

            padding:0;

            list-style:none

        }

        .tree ul {

            margin-left:1em;

            position:relative

        }

        .tree ul ul {

            margin-left:.5em

        }

        .tree ul:before {

            content:"";

            display:block;

            width:0;

            position:absolute;

            top:0;

            bottom:0;

            left:0;

            border-left:1px solid

        }

        .tree li {

            margin:0;

            padding:0 1em;

            line-height:2em;

            color:#369;

            font-weight:700;

            position:relative

        }

        .tree ul li:before {

            content:"";

            display:block;

            width:10px;

            height:0;

            border-top:1px solid;

            margin-top:-1px;

            position:absolute;

            top:1em;

            left:0

        }

        .tree ul li:last-child:before {

            background:#fff;

            height:auto;

            top:1em;

            bottom:0

        }

        .indicator {

            margin-right:5px;

        }

        .tree li a {

            text-decoration: none;

            color:#369;

        }

        .tree li button, .tree li button:active, .tree li button:focus {

            text-decoration: none;

            color:#369;

            border:none;

            background:transparent;

            margin:0px 0px 0px 0px;

            padding:0px 0px 0px 0px;

            outline: 0;

        }

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

        @include('includes.flash_display')



        <div class="col-md-12">

            <h1 class="text-center">Ավելացնել Դասեր, ենթադասեր</h1>

            {!! Form::open(['method'=>'POST', 'action'=>'Admin\AdminCategoriesController@store','files'=>true]) !!}



            <div class="form-group">

                {!! Form::label('name', 'Անուն հայերեն *') !!}

                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                @if ($errors->has('name'))

                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>

                @endif

            </div>
            <div class="form-group">

                {!! Form::label('name_ru', 'Անուն ռուսերեն *') !!}

                {!! Form::text('name_ru', null, ['class' => 'form-control']) !!}
                @if ($errors->has('name_ru'))

                    <div class="invalid-feedback">{{ $errors->first('name_ru') }}</div>

                @endif

            </div>
            <div class="form-group">

                {!! Form::label('url', 'Հղում (Անգլերեն տառերով օրինակ `drner`*)') !!}

                {!! Form::text('url', null, ['class' => 'form-control']) !!}
                @if ($errors->has('url'))

                    <div class="invalid-feedback">{{ $errors->first('url') }}</div>

                @endif

            </div>
            <div class="form-group">

                {!! Form::label('name_en', 'Անուն Անգլերեն *') !!}

                {!! Form::text('url', null, ['class' => 'form-control']) !!}
                @if ($errors->has('url'))

                    <div class="invalid-feedback">{{ $errors->first('url') }}</div>

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
            <div class= "form-group" >

                {!! Form::label('description_en', 'Նկարագրություն Անգլերեն  *') !!}

                {!! Form::textarea('description_en', null, ['rows'=>3, 'id'=>'editor3',  'class' => $errors->has('description_en') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('description_en'))

                    <div class="invalid-feedback">{{ $errors->first('description_en') }}</div>

                @endif

            </div>

            <div class="form-group">

                {!! Form::label('image', 'Նկարը *') !!}

                {!! Form::file('image', ['class' => $errors->has('image') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('image'))

                    <div class="invalid-feedback">{{ $errors->first('image') }}</div>

                @endif

            </div>

            @if(!empty($mains) && count($mains))
                {!! Form::label('category', 'Որ կատեգորիայի եթախումբ *') !!}
                <div class="form-group" id="category">
                    <select  class="form-control    " name="parent_id">
                        <option value="">Լինի գլխաոր</option>
                        @foreach($mains as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>

                        @endforeach
                    </select>
                </div>
            @endif

            <div class="form-group">

                {!! Form::submit('Create Category', ['class'=>'btn btn-block btn-primary']) !!}

            </div>



            {!! Form::close() !!}

        </div>










        <div class="col-md-3 offset-md-1">







        </div>



    </div>



    <div class="row">

        <div class="col-lg-12">





















            <div class="card mb-3 mt-5">

                <div class="card-header">

                    <i class="fa fa-table"></i> Categories list</div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                            <thead>

                            <tr>

                                <th>#</th>

                                <th>Անուն հայերեն</th>
                                <th>Անուն ռուսերեն</th>

                                <td>Հղում</td>
                                <td>Նկար</td>



                                <th>Գորժողություներ</th>

                            </tr>

                            </thead>

                            <tfoot>

                            <tr>

                                <th>#</th>

                                <th>Անուն հայերեն</th>
                                <th>Անուն ռուսերեն</th>
                                <td>Հղում</td>
                                <td>Նկար</td>



                                <th>Գորժողություներ</th>

                            </tr>

                            </tfoot>







                            <tbody>

                            @if($categories)

                                @foreach($categories as $category)

                                    <tr>

                                        <td>{{ $category->id }}</td>

                                        <td>{{ $category->name }}</td>

                                        <td>{{ $category->name_ru }}</td>
                                        <td>{{ $category->url }}</td>


                                        <td><img src="{{ asset('/images/categories/'.$category->image) }}" width="50px" alt=""></td>



                                        <td>

                                            <a class="ml-1 " href="{{ route('admin.categories.edit', $category->id) }}" title="Փոփոխել"><button class="btn btn-warning right d-inline-block"><i class="fa fa-edit fa-lg"></i></button></a>

                                            {!! Form::open(['method'=>'DELETE', 'action'=>['Admin\AdminCategoriesController@destroy', $category->id], 'class'=>'delete-form d-inline']) !!}

                                            <button type="submit" title= class="ml-1 my-delete-button btn btn-danger btn-small d-inline-block"><i class="fa fa-lg fa-trash-o"></i></button>

                                            {!! Form::close() !!}

                                        </td>

                                    </tr>

                                @endforeach

                            @endif





                            </tbody>







                        </table>

                    </div>

                </div>



            </div>









        </div>

    </div>



@endsection





@section('modal')

    <!-- Delete User Modal-->

    <!-- Delete User Modal-->

    <a class="nav-link" data-toggle="modal" data-target="#deleteModal" style="display: none" id="my-modal-button">

        <i class="fa fa-fw fa-power-off"></i>Logout

    </a>



    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="deleteModalLabel">Ready to do this?</h5>

                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">×</span>

                    </button>

                </div>

                <div class="modal-body">Select "OK" below if you are ready to do chosen action.</div>

                <div class="modal-footer">

                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                    <button id="my-modal-button-delete" class="btn btn-danger">OK</button>

                </div>

            </div>

        </div>

    </div>

    <!-- END Delete User Modal-->





    <!-- END Delete User Confirmation Modal-->




    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>

    <script>

        CKEDITOR.replace('editor');
        CKEDITOR.replace('editor3');
        CKEDITOR.replace('editor2');
    </script>


    <script>



        document.addEventListener('DOMContentLoaded', function(){



            const buttons = document.querySelectorAll('.my-delete-button');

            const modal = document.querySelector('#deleteModal')



            const modalButton = document.querySelector('#my-modal-button');

            const modalButtonDelete = document.querySelector('#my-modal-button-delete');



            const count = buttons.length;



            let form;



            for(let i=0; i<count; i++) {





                buttons[i].addEventListener('click', function(e) {

                    e.preventDefault();

                    form = buttons[i].parentElement;

                    console.log(form);

                    modalButton.click();

                });



            }





            modalButtonDelete.addEventListener('click', function(){

                form.submit();

            })









        });



    </script>









    <script>

        $.fn.extend({

            treed: function (o) {



                var openedClass = 'fa fa-minus';

                var closedClass = 'fa fa-plus';



                if (typeof o != 'undefined'){

                    if (typeof o.openedClass != 'undefined'){

                        openedClass = o.openedClass;

                    }

                    if (typeof o.closedClass != 'undefined'){

                        closedClass = o.closedClass;

                    }

                };



                //initialize each of the top levels

                var tree = $(this);

                tree.addClass("tree");

                tree.find('li').has("ul").each(function () {

                    var branch = $(this); //li with children ul

                    branch.prepend("<i class='indicator glyphicon " + closedClass + "'></i>");

                    branch.addClass('branch');

                    branch.on('click', function (e) {

                        if (this == e.target) {

                            var icon = $(this).children('i:first');

                            icon.toggleClass(openedClass + " " + closedClass);

                            $(this).children().children().toggle();

                        }

                    })

                    branch.children().children().toggle();

                });

                //fire event from the dynamically added icon

                tree.find('.branch .indicator').each(function(){

                    $(this).on('click', function () {

                        $(this).closest('li').click();

                    });

                });

                //fire event to open branch if the li contains an anchor instead of text

                tree.find('.branch>a').each(function () {

                    $(this).on('click', function (e) {

                        $(this).closest('li').click();

                        e.preventDefault();

                    });

                });

                //fire event to open branch if the li contains a button instead of text

                tree.find('.branch>button').each(function () {

                    $(this).on('click', function (e) {

                        $(this).closest('li').click();

                        e.preventDefault();

                    });

                });

            },

            generateItem: function(){

                var li = $('<li>');

            },

            generateTree: function(){

                var tree = $(this);



            }

        });



        //Initialization of treeviews



        $('#tree1').treed();

    </script>

@endsection
