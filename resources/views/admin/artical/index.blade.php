@extends('layouts.admin')



@section('title') Ads @endsection










@section('content')

    <style>


        /* The switch - the box around the slider */
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
            float:right;
        }

        /* Hide default HTML checkbox */
        .switch input {display:none;}

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input.default:checked + .slider {
            background-color: #444;
        }
        input.primary:checked + .slider {
            background-color: #2196F3;
        }
        input.success:checked + .slider {
            background-color: #8bc34a;
        }
        input.info:checked + .slider {
            background-color: #3de0f5;
        }
        input.warning:checked + .slider {
            background-color: #FFC107;
        }
        input.danger:checked + .slider {
            background-color: #f44336;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>

    @if(Session::has('deleted_news'))

        <div class="alert alert-danger">{{session('deleted_news')}}</div>

    @endif



    <h1>Ads</h1>

    <div class="card mb-3">

        <div class="card-header">


            <i class="fa fa-table"></i> Add list</div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>

                    <tr>

                        <th>Actions</th>
                        <th>#</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Phone</th>
                        <th>Descroption</th>
                        <th>Image</th>
                        <th>Updated at</th>
                        <th>Created at</th>

                    </tr>

                    </thead>

                    <tfoot>

                    <tr>

                        <th>Actions</th>
                        <th>#</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Phone</th>
                        <th>Descroption</th>
                        <th>Image</th>
                        <th>Updated at</th>
                        <th>Created at</th>

                    </tr>

                    </tfoot>







                    <tbody>

                    @if($posts)

                        @foreach($posts as $post)

                            <tr>

                                <td>

                                    <a class="ml-5"   href="{{ route('admin.artical.edit', $post->id) }}" title="Edit Ad"><button class=" btn btn-warning btn-small d-inline-block"><i class="fa fa-edit fa-lg"></i></button></a>

                                    {!! Form::open(['method'=>'DELETE', 'action'=>['Admin\ArticalController@destroy', $post->id], 'class'=>'delete-form d-inline']) !!}

                                    <button type="submit" title="Delete ad" class="my-delete-button btn btn-danger  btn-small d-inline-block"><i class="fa fa-lg fa-trash-o"></i></button>

                                    {!! Form::close() !!}

                                </td>

                                <td>{{ $post->id }}</td>

                                <td>{{ $post->title }}</td>
                                <td>{{ $post->price }}</td>
                                <td> @if($post->type == 1) Suggest  @else Buy @endif</td>
                                <td>

                                    <label class="switch ">
                                        <input data-id="{{$post->id}}" type="checkbox" @if($post->status == 0)  @else checked @endif class="default payButton">
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                                <td>{{ $post->phone }}</td>
                                <td>{{ $post->description }}</td>

                                <td><img src="{{ asset($post->image()) }}" width="100px"></td>


                               

                                <td>{{ $post->updated_at }}</td>

                                <td>{{ $post->created_at }}</td>

                            </tr>

                        @endforeach

                    @endif





                    </tbody>







                </table>

            </div>

        </div>



    </div>





@stop





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

                    <h5 class="modal-title" id="deleteModalLabel">Ready to Leave?</h5>

                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">×</span>

                    </button>

                </div>

                <div class="modal-body">Select "Delete" below if you are ready to delete chosen user.</div>

                <div class="modal-footer">

                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                    <button id="my-modal-button-delete" class="btn btn-danger">Delete user</button>

                </div>

            </div>

        </div>

    </div>

    <!-- END Delete User Modal-->





    <!-- END Delete User Confirmation Modal-->

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



@endsection

@section('script')
    <script>
        $('.payButton').change(function () {
            if(!confirm("Are you sure?")){
                if ($(this).is(':checked')) {
                    $(this).prop('checked', false);
                }else {
                    $(this).prop('checked', true);
                }
            }
            else {
                var id = $(this).attr('data-id')
                if ($(this).is(':checked')) {

                    $.post('{{route('admin.artical.statusYes')}}', {
                        id: id,
                        _token: $("meta[name='csrf-token']").attr('content')
                    }, function (data) {
                        if (data.message = 'yes') {

                        }
                    })
                } else {
                    $.post('{{route('admin.artical.statusNo')}}', {
                        id: id,
                        _token: $("meta[name='csrf-token']").attr('content')
                    }, function (data) {
                        if (data.message = 'yes') {

                        }
                    })
                }
            }
        })
    </script>
@endsection