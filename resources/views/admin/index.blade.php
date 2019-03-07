@extends('layouts.admin')



@section('title') Dashboard @endsection








@section('content')





    <!-- Icon Cards-->



    <div class="row">

        <div class="col-xl-3 col-sm-6 mb-3">

            <div class="card text-white bg-primary o-hidden h-100">

                <div class="card-body">

                    <div class="card-body-icon">

                        <i class="fa fa-fw fa-users"></i>

                    </div>

                    <div class="mr-5">{{ $users_count }} Օգտատերեր!</div>

                </div>

                <a class="card-footer text-white clearfix small z-1" href="{{route('admin.users.index')}}">

                    <span class="float-left">Տեսնել ավելին</span>

                    <span class="float-right">

                <i class="fa fa-angle-right"></i>

              </span>

                </a>

            </div>

        </div>





        {{--<div class="col-xl-3 col-sm-6 mb-3">--}}

            {{--<div class="card text-white bg-secondary o-hidden h-100">--}}

                {{--<div class="card-body">--}}

                    {{--<div class="card-body-icon">--}}

                        {{--<i class="fa fa-fw fa-list"></i>--}}

                    {{--</div>--}}

                    {{--<div class="mr-5">{{ $categories_count }} Կատեգորիաներ!</div>--}}

                {{--</div>--}}

                {{--<a class="card-footer text-white clearfix small z-1" href="{{ route('admin.categories.index') }}">--}}

                    {{--<span class="float-left">Տեսնել ավելին</span>--}}

                    {{--<span class="float-right">--}}

                {{--<i class="fa fa-angle-right"></i>--}}

              {{--</span>--}}

                {{--</a>--}}

            {{--</div>--}}

        {{--</div>--}}

        {{--<div class="col-xl-3 col-sm-6 mb-3">--}}

            {{--<div class="card text-white bg-warning o-hidden h-100">--}}

                {{--<div class="card-body">--}}

                    {{--<div class="card-body-icon">--}}

                        {{--<i class="fa fa-fw fa-television"></i>--}}

                    {{--</div>--}}

                    {{--<div class="mr-5">Նկարների սլայդեր!</div>--}}

                {{--</div>--}}

                {{--<a class="card-footer text-white clearfix small z-1" href="{{ route('slide.index') }}">--}}

                    {{--<span class="float-left">Տեսնել ավելին</span>--}}

                    {{--<span class="float-right">--}}

                {{--<i class="fa fa-angle-right"></i>--}}

            {{--</span>--}}

                {{--</a>--}}

            {{--</div>--}}

        {{--</div>--}}

    </div>









@endsection
