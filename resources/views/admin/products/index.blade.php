@extends('layouts.admin')



@section('title') Ապրանքներ @endsection







@section('content')



    <h1>Ապրանքներ</h1>

    <div class="card mb-3">

        <div class="card-header">

            <i class="fa fa-table"></i> Ապրանքների ցուցակ</div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">

                    <thead>

                    <tr>

                        <th>#</th>

                        <th>Անում</th>
                        <th>Նկար</th>



                        <th>Հղում</th>



                        <th>Գորժողություներ</th>

                    </tr>

                    </thead>

                    <tfoot>

                    <tr>

                        <th>#</th>

                        <th>Անում</th>
                        <th>Նկար</th>



                        <th>Հղում</th>



                        <th>Գորժողություներ</th>

                    </tr>

                    </tfoot>







                    <tbody>

                    @if($products)

                        @foreach($products as $product)

                            <tr id="{{$product -> id}}">

                                <td>

                                    {{$product -> id}}

                                </td>

                                <td>{{ $product->brand }}</td>
                                <td><img width="100px" src="{{asset( $product->firstImage())}}"></td>



                                <td>{{ $product->url }}</td>



                                <td>

                                    <a class="ml-1 " href="{{ route('admin.products.edit', $product->id) }}" title="Փոփոխել"><button class="text-dark btn btn-warning d-inline-block"><i class="fa fa-edit fa-lg"></i></button></a>



                                    {!! Form::open(['method'=>'DELETE', 'action'=>['Admin\AdminProductsController@destroy', $product->id], 'class'=>'delete-form d-inline']) !!}

                                    <button type="submit" title="Ջնջել" class="ml-1 my-delete-button btn btn-small btn-danger d-inline-block"><i class="fa fa-lg fa-trash-o"></i></button>

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

         @if(Session::has('id'))
             var id = {{Session::get('id')}};
            
             page = parseInt($('#'+id).index()/10) ;
            
             console.log(page);

             $('#dataTable1').DataTable({
                 initComplete: function () {
                     this.api().page(page).draw( 'page' );
                 }
            });


        @else

        $('#dataTable1').DataTable();
        @endif

    </script>





@endsection

