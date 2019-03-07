@extends('layouts.admin')



@section('title') Users @endsection





@section('breadcrumbs', Breadcrumbs::render('admin.dashboard.orders'))


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



    <h1>Orders</h1>

    <div class="card mb-3">

        <div class="card-header">

            <i class="fa fa-table"></i> Orders list</div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>

                    <tr>

                        <th>Id</th>

                        <th>Buyer ID</th>
                        <th>Buyer full name</th>
                        <th>Buyer phone</th>
                        <th>Buyer email</th>

                        <th>Total amount</th>
                        
                        <th>Country</th>
                        <th>City</th>
                        <th>Address</th>

                        <th>Type</th>

                        <th>Status</th>

                        <th>Use bonuses</th>

                        <th>Products</th>



                        <th>Created at</th>
                        <th>Print</th>

                    </tr>

                    </thead>

                    <tfoot>

                    <tr>

                        <th>Id</th>

                        <th>Buyer ID</th>
                        <th>Buyer full name</th>
                        <th>Buyer phone</th>
                        <th>Buyer email</th>

                        <th>Total amount</th>

                        <th>Country</th>
                        <th>City</th>
                        <th>Address</th>

                        <th>Type</th>

                        <th>Status</th>

                        <th>Use bonuses</th>

                        <th>Products</th>



                        <th>Created at</th>
                        <th>Print</th>

                    </tr>

                    </tfoot>







                    <tbody>

                    @if($orders)

                        @foreach($orders as $order)

                            <tr>

                                <td>{{ $order->id }}</td>
                                <td>{{ $order->user->id }}</td>

                                <td>{{ $order->user->name.' '.$order->user->surname }}</td>

                                <td>{{ $order->user->phone}}</td>

                                <td>{{ $order->user->email}}</td>

                                <td>{{ $order->totalAmount }} AMD</td>
                                
                                <td>{{ $order->country }} </td>
                                <td>{{ $order->city }} </td>
                                <td>{{ $order->adress }} </td>
                                <td>{{ $order->type }} </td>

                                <td>

                                    <label class="switch ">
                                        <input data-id="{{$order->id}}" type="checkbox" @if($order->status == 'PENDING')  @else checked @endif class="default payButton">
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                                <td>{{ $order->bonus }} </td>

                                <td>

                                    @foreach($order->products as $product)



                                        {{$product['qty']}}x<img src="{{$product['product']->firstImage()}}" alt="{{$product['product']->brand }}" title="{{$product['product']->brand }}" style="height: 40px; width: 40px;">



                                    @endforeach

                                </td>



                                <td>{{ $order->created_at }}</td>
                                <td><a href="{{route('order.id',['id'=>$order->id])}}"><i style="font-size: 30px;" class="fa fa-print" aria-hidden="true"></i></a></td>

                            </tr>

                        @endforeach

                    @endif





                    </tbody>







                </table>

            </div>

        </div>



    </div>





@stop


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

                        $.post('{{route('admin.orders.payed')}}', {
                            id: id,
                            _token: $("meta[name='csrf-token']").attr('content')
                        }, function (data) {
                            if (data.message = 'yes') {

                            }
                        })
                    } else {
                        $.post('{{route('admin.orders.panding')}}', {
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