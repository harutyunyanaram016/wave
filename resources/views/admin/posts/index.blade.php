@extends('layouts.admin')



@section('title') News @endsection










@section('content')

    @include('includes.flash_display')


    <h1>News</h1>

    <div class="card mb-3">

        <div class="card-header">

            <i class="fa fa-table"></i> News list</div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>

                    <tr>

                        <th>Actions</th>
                        <th>#</th>


                        <th>Name</th>
                        <th>Type</th>

                        <th>File</th>


                        <th>Updated at</th>

                        <th>Created at</th>

                    </tr>

                    </thead>

                    <tfoot>

                    <tr>

                        <th>Actions</th>
                        <th>#</th>
                        <th>Name</th>
                        <th>Tipe</th>

                        <th>File</th>


                        <th>Updated at</th>

                        <th>Created at</th>

                    </tr>

                    </tfoot>







                    <tbody>

                    @if($posts)

                        @foreach($posts as $post)

                            <tr>

                                <td>

                                    <a class="ml-5"  @if($post->type == 'image') href="{{ route('admin.news.edit', $post->id) }}" @else href="{{ route('admin.news.editVideo', $post->id) }}"  @endif title="Edit news"><button class=" btn btn-warning btn-small d-inline-block"><i class="fa fa-edit fa-lg"></i></button></a>

                                    {!! Form::open(['method'=>'DELETE', 'action'=>['Admin\AdminNewsController@destroy', $post->id], 'class'=>'delete-form d-inline']) !!}

                                    <button type="submit" title="Delete user" class="my-delete-button btn btn-danger  btn-small d-inline-block"><i class="fa fa-lg fa-trash-o"></i></button>

                                    {!! Form::close() !!}

                                </td>

                                <td>{{ $post->id }}</td>

                                <td>{{ $post->name }}</td>
                                <td>{{ $post->type }}</td>
                                @if($post->type == 'image')
                                    <td><img src="{{ asset('/images/posts/'.$post->url) }}" width="100px"></td>
                                @else
                                    <td>
                                        <iframe width="100" height="60" src="{{$post->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </td>
                                @endif


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
