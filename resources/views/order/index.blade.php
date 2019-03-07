@extends('layouts.app')

@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        <i class="indicator glyphicon glyphicon-triangle-bottom"></i><h1 class="text-center"> Պատվերներ</h1>
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <div class="panel panel-default">

                        <div class="panel-body">
                            <table class="table table-condensed" style="border-collapse:collapse;">
                                @foreach($item as $it)
                                <tbody>

                                <tr data-toggle="collapse" data-target="#order{{$it->id}}" class="accordion-toggle">
                                    <td><span class="glyphicon glyphicon-triangle-top"></span> {{$it->name}}</td>
                                    <td>{{$it->mail}}</td>
                                    <td>{{$it->phone}}</td>
                                    <td>{{$it->created_at}}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td colspan="12" class="hiddenRow">
                                        <div class="accordian-body collapse" id="order{{$it->id}}">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Ընկերության անունը</th>
                                                    <th>Աշխատանքային ոլորտ</th>
                                                    <th>Կայքերի օրինակներ</th>
                                                    <th>Կայքի տեսակը</th>
                                                    <th>վաճառքի ծառայություններ</th>
                                                    <th><form action="{{ route('order.destroy', $it->id) }}" method="POST">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button onclick="return confirm('Համոզված եք, որ ցանկանում եք հեռացնել պատվերը?')" class="btn btn-danger">Հեռացնել</button>
                                                        </form></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr data-toggle="collapse" data-target="#read" class="accordion-toggle">
                                                    <td><span class="glyphicon glyphicon-plus"></span> {{$it->company_name}}</td>
                                                    <td>{{$it->business}}</td>
                                                    <td>{{$it->design}}</td>
                                                    <td>{{$it->type}}</td>
                                                    <td>{{$it->functions}}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6" class="hiddenRow">
                                                        <div id="read" class="accordian-body collapse">
                                                            <p><b>ծառայությունները</b> : {{$it->side_services}}</p>
                                                            <p><b>լեզվի տարբերակները</b> : {{$it->lang}}</p>
                                                            <p><b>Այլ նպատակներ</b> : {{$it->other}}</p>
                                                            <p><b>Կայքի բաժիններ</b> : {{$it->sections}}</p>
                                                            <p><b>Կայքի նավիգացիա</b> : {{$it->navigation}}</p>
                                                            <p><b>Տեղեկատվական բլոկներ</b> : {{$it->information_blocks}}</p>
                                                            <p><b>պահանջները և ցանկությունները</b> : {{$it->desires}}</p>
                                                            <p><b>Կայքի բովանդակությունը</b> : {{$it->conten}}</p>
                                                            <p><b>Լրացուցիչ ծառայություններ</b> : {{$it->additional_services}}</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                                    @endforeach
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<script>



    function toggleChevron(e) {
        $(e.target)
            .prev('.panel-heading')
            .find("i.indicator")
            .toggleClass('glyphicon-triangle-bottom glyphicon-triangle-top');
    }
    $('#accordion').on('hidden.bs.collapse', toggleChevron);
    $('#accordion').on('shown.bs.collapse', toggleChevron);
</script>
@endsection
