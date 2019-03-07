<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">

    <title>Կառավարման համակարգ - @yield('title')</title>

    <!-- Bootstrap core CSS-->

    <link href="{{asset('css/adminlibs.css')}}" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/css/froala_style.min.css' rel='stylesheet' type='text/css' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/js/froala_editor.min.js'></script>

    @yield('head')



</head>



<body class="fixed-nav sticky-footer bg-dark" id="page-top">







<!-- Navigation-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">

    <a class="navbar-brand" href="{{ route('admin.index') }}">Կառավարման համակարգ | {{ Auth::user()->name }}</a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">

                <a class="nav-link" href="{{  route('admin.index') }}">

                    <i class="fa fa-fw fa-dashboard"></i>

                    <span class="nav-link-text">Ցուցատախտակ</span>

                </a>

            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Users">

                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseUsers" data-parent="#exampleAccordion">

                    <i class="fa fa-fw fa-users"></i>

                    <span class="nav-link-text">Օգտատերեր</span>

                </a>

                <ul class="sidenav-second-level collapse" id="collapseUsers">

                    <li>

                        <a href="{{ route('admin.users.create') }}">Ավելացնել օգտատեր</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.users.index') }}">Օգտատերերի ցուցակ</a>

                    </li>


                </ul>

            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Static pages">

                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseStatic">

                    <i class="fab fa-accusoft"></i>

                    <span class="nav-link-text">Կառավարվող էջեր</span>

                </a>

                <ul class="sidenav-second-level collapse" id="collapseStatic">

                    <li>
                        <a href="{{ route('admin.static.pages.create.view') }}">Ավելացնել էջ</a>
                    </li>

                    <li>
                        <a href="{{route('admin.static.pages.list')}}">Էջերի ցուցակ</a>
                    </li>

                </ul>

            </li>



            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Products">

                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseProducts1" data-parent="#exampleAccordion">

                    <i class="fa fa-newspaper-o"></i>

                    <span class="nav-link-text">Նորություններ</span>

                </a>

                <ul class="sidenav-second-level collapse" id="collapseProducts1">

                    <li>

                        <a href="{{ route('admin.news.create') }}">Ավելացնել նորություն</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.news.index') }}">Նորությունների ցուցակ</a>

                    </li>

                </ul>

            </li>


            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">

                <a class="nav-link" href="{{ route('admin.categories.index') }}">

                    <i class="fa fa-fw fa-th-list"></i>

                    <span class="nav-link-text">Կատեգորիանեի</span>

                </a>

            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">

                <a class="nav-link" href="{{ route('slide.index') }}">

                    <i class="fa fa-sliders" aria-hidden="true"></i>

                    <span class="nav-link-text">Սլայդեր</span>

                </a>

            </li>
        </ul>

        <ul class="navbar-nav sidenav-toggler">

            <li class="nav-item">

                <a class="nav-link text-center" id="sidenavToggler">

                    <i class="fa fa-fw fa-angle-left"></i>

                </a>

            </li>

        </ul>

        <ul class="navbar-nav ml-auto">


            <li class="nav-item">

                <a class="nav-link" href="{{ route('mainpage') }}">

                    <i class="fa fa-fw fa-sign-out"></i>Վերադառնալ կայք

                </a>

            </li>

            <li class="nav-item">

                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">

                    <i class="fa fa-fw fa-power-off"></i>Դուրս գալ

                </a>

            </li>

        </ul>

    </div>

</nav>

<!-- END Navigation-->













<div class="content-wrapper">

    <div class="container-fluid">



        @yield('breadcrumbs')



        @yield('content')



    </div>

    <!-- /.container-fluid-->

</div>

    <!-- /.content-wrapper-->







    <footer class="sticky-footer">

        <div class="container">

            <div class="text-center">

                <small>Copyright © Shop 2018</small>

            </div>

        </div>

    </footer>





    <!-- Scroll to Top Button-->

    <a class="scroll-to-top rounded" href="#page-top">

        <i class="fa fa-angle-up"></i>

    </a>





    <!-- Logout Modal-->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>

                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">×</span>

                    </button>

                </div>

                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>

                <div class="modal-footer">

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                        {{ csrf_field() }}

                    </form>

                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                    <button class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</button>

                </div>

            </div>

        </div>

    </div>

    <!-- END Logout Modal-->



    <!-- Bootstrap core JavaScript-->

    <script src="{{asset('js/adminlibs.js')}}"></script>



    <!-- Custom scripts for this page-->

    <script src="{{asset('js/consts/sb-admin-datatables.min.js')}}"></script>

    <script src="{{asset('js/consts/sb-admin-charts.js')}}"></script>

@yield('script')

@yield('modal')

</body>

<script>

</script>

</html>

