<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">

    <title>Admin Panel - @yield('title')</title>

    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

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

    <a class="navbar-brand" href="{{ route('admin.index') }}">Admin Panel | {{ Auth::user()->name }}</a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">

                <a class="nav-link" href="{{  route('admin.index') }}">

                    <i class="fa fa-fw fa-dashboard"></i>

                    <span class="nav-link-text">Dashboard</span>

                </a>

            </li>



            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Users">

                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseUsers" data-parent="#exampleAccordion">

                    <i class="fa fa-fw fa-users"></i>

                    <span class="nav-link-text">Users</span>

                </a>

                <ul class="sidenav-second-level collapse" id="collapseUsers">

                    <li>

                        <a href="{{ route('admin.users.create') }}">Create User</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.users.index') }}">Users list</a>

                    </li>
                    <li>

                        <a href="{{ route('admin.referal.edit') }}">Users Referral Settings</a>

                    </li>

                </ul>

            </li>



            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Products">

                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseProducts" data-parent="#exampleAccordion">

                    <i class="fa fa-fw fa-television"></i>

                    <span class="nav-link-text">Products</span>

                </a>

                <ul class="sidenav-second-level collapse" id="collapseProducts">

                    <li>

                        <a href="{{ route('admin.products.create') }}">Create Product</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.products.index') }}">Products list</a>

                    </li>

                </ul>

            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Products">

                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseProducts1" data-parent="#exampleAccordion">

                    <i class="fa fa-newspaper-o"></i>

                    <span class="nav-link-text">News</span>

                </a>

                <ul class="sidenav-second-level collapse" id="collapseProducts1">

                    <li>

                        <a href="{{ route('admin.news.create') }}">Create news</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.news.index') }}">News list</a>

                    </li>

                </ul>

            </li>
            {{--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Locations">--}}

                {{--<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseLocations" data-parent="#exampleAccordion">--}}

                    {{--<i class="fa fa-fw fa-location-arrow"></i>--}}

                    {{--<span class="nav-link-text">Location</span>--}}

                {{--</a>--}}

                {{--<ul class="sidenav-second-level collapse" id="collapseLocations">--}}

                    {{--<li>--}}

                        {{--<a href="{{ route('admin.location.index') }}">Countries list</a>--}}

                    {{--</li>--}}

                {{--</ul>--}}

            {{--</li>--}}

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Static pages">

                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseStatic">

                    <i class="fab fa-accusoft"></i>

                    <span class="nav-link-text">Static Pages</span>

                </a>

                <ul class="sidenav-second-level collapse" id="collapseStatic">

                    <li>
                        <a href="{{ route('admin.static.pages.create.view') }}">Create Page</a>
                    </li>

                    <li>
                        <a href="{{route('admin.static.pages.list')}}">Static page list</a>
                    </li>

                </ul>

            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Static pages">

                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseStatic">

                    <i class="fab fa-accusoft"></i>

                    <span class="nav-link-text">Ads</span>

                </a>

                <ul class="sidenav-second-level collapse" id="collapseStatic">

                    <li>
                        <a href="{{ route('admin.artical.create') }}">Create Ad</a>
                    </li>

                    <li>
                        <a href="{{route('admin.artical.index')}}">Ads list</a>
                    </li>

                </ul>

            </li>


            {{--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="FAQ">--}}

                {{--<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseFaq">--}}

                    {{--<i class="fa fa-fw fa-question"></i>--}}

                    {{--<span class="nav-link-text">FAQ</span>--}}

                {{--</a>--}}

                {{--<ul class="sidenav-second-level collapse" id="collapseFaq">--}}

                    {{--<li>--}}

                        {{--<a href="{{ route('admin.faqs.create') }}">Create FAQ</a>--}}

                    {{--</li>--}}

                    {{--<li>--}}

                        {{--<a href="{{ route('admin.faqs.index') }}">FAQ list</a>--}}

                    {{--</li>--}}

                {{--</ul>--}}

            {{--</li>--}}





            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">

                <a class="nav-link" href="{{ route('admin.categories.index') }}">

                    <i class="fa fa-fw fa-th-list"></i>

                    <span class="nav-link-text">Categories</span>

                </a>

            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Orders">

                <a class="nav-link" href="{{ route('admin.orders.index') }}">

                    <i class="fa fa-fw fa-shopping-cart"></i>

                    <span class="nav-link-text">Orders</span>

                </a>

            </li>

             <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">

                <a class="nav-link" href="{{ route('admin.partners.index') }}">

                    <i class="fa fa-fw fa-th-list"></i>

                    <span class="nav-link-text">Brands</span>

                </a>

            </li>



            {{--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">--}}

                {{--<a class="nav-link" href="#">--}}

                    {{--<i class="fa fa-fw fa-link"></i>--}}

                    {{--<span class="nav-link-text">Link</span>--}}

                {{--</a>--}}

            {{--</li>--}}

        </ul>

        <ul class="navbar-nav sidenav-toggler">

            <li class="nav-item">

                <a class="nav-link text-center" id="sidenavToggler">

                    <i class="fa fa-fw fa-angle-left"></i>

                </a>

            </li>

        </ul>

        <ul class="navbar-nav ml-auto">

            {{--<li class="nav-item dropdown">--}}

                {{--<a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}

                    {{--<i class="fa fa-fw fa-envelope"></i>--}}

                    {{--<span class="d-lg-none">Messages--}}

              {{--<span class="badge badge-pill badge-primary">12 New</span>--}}

            {{--</span>--}}

                    {{--<span class="indicator text-primary d-none d-lg-block">--}}

              {{--<i class="fa fa-fw fa-circle"></i>--}}

            {{--</span>--}}

                {{--</a>--}}

                {{--<div class="dropdown-menu" aria-labelledby="messagesDropdown">--}}

                    {{--<h6 class="dropdown-header">New Messages:</h6>--}}

                    {{--<div class="dropdown-divider"></div>--}}

                    {{--<a class="dropdown-item" href="#">--}}

                        {{--<strong>David Miller</strong>--}}

                        {{--<span class="small float-right text-muted">11:21 AM</span>--}}

                        {{--<div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>--}}

                    {{--</a>--}}

                    {{--<div class="dropdown-divider"></div>--}}

                    {{--<a class="dropdown-item" href="#">--}}

                        {{--<strong>Jane Smith</strong>--}}

                        {{--<span class="small float-right text-muted">11:21 AM</span>--}}

                        {{--<div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>--}}

                    {{--</a>--}}

                    {{--<div class="dropdown-divider"></div>--}}

                    {{--<a class="dropdown-item" href="#">--}}

                        {{--<strong>John Doe</strong>--}}

                        {{--<span class="small float-right text-muted">11:21 AM</span>--}}

                        {{--<div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>--}}

                    {{--</a>--}}

                    {{--<div class="dropdown-divider"></div>--}}

                    {{--<a class="dropdown-item small" href="#">View all messages</a>--}}

                {{--</div>--}}

            {{--</li>--}}

            {{--<li class="nav-item dropdown">--}}

                {{--<a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}

                    {{--<i class="fa fa-fw fa-bell"></i>--}}

                    {{--<span class="d-lg-none">Alerts--}}

              {{--<span class="badge badge-pill badge-warning">6 New</span>--}}

            {{--</span>--}}

                    {{--<span class="indicator text-warning d-none d-lg-block">--}}

              {{--<i class="fa fa-fw fa-circle"></i>--}}

            {{--</span>--}}

                {{--</a>--}}

                {{--<div class="dropdown-menu" aria-labelledby="alertsDropdown">--}}

                    {{--<h6 class="dropdown-header">New Alerts:</h6>--}}

                    {{--<div class="dropdown-divider"></div>--}}

                    {{--<a class="dropdown-item" href="#">--}}

              {{--<span class="text-success">--}}

                {{--<strong>--}}

                  {{--<i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>--}}

              {{--</span>--}}

                        {{--<span class="small float-right text-muted">11:21 AM</span>--}}

                        {{--<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>--}}

                    {{--</a>--}}

                    {{--<div class="dropdown-divider"></div>--}}

                    {{--<a class="dropdown-item" href="#">--}}

              {{--<span class="text-danger">--}}

                {{--<strong>--}}

                  {{--<i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>--}}

              {{--</span>--}}

                        {{--<span class="small float-right text-muted">11:21 AM</span>--}}

                        {{--<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>--}}

                    {{--</a>--}}

                    {{--<div class="dropdown-divider"></div>--}}

                    {{--<a class="dropdown-item" href="#">--}}

              {{--<span class="text-success">--}}

                {{--<strong>--}}

                  {{--<i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>--}}

              {{--</span>--}}

                        {{--<span class="small float-right text-muted">11:21 AM</span>--}}

                        {{--<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>--}}

                    {{--</a>--}}

                    {{--<div class="dropdown-divider"></div>--}}

                    {{--<a class="dropdown-item small" href="#">View all alerts</a>--}}

                {{--</div>--}}

            {{--</li>--}}

            {{--<li class="nav-item">--}}

                {{--<form class="form-inline my-2 my-lg-0 mr-lg-2">--}}

                    {{--<div class="input-group">--}}

                        {{--<input class="form-control" type="text" placeholder="Search for...">--}}

                        {{--<span class="input-group-btn">--}}

                {{--<button class="btn btn-primary" type="button">--}}

                  {{--<i class="fa fa-search"></i>--}}

                {{--</button>--}}

              {{--</span>--}}

                    {{--</div>--}}

                {{--</form>--}}

            {{--</li>--}}

            <li class="nav-item">

                <a class="nav-link" href="{{ route('mainpage') }}">

                    <i class="fa fa-fw fa-sign-out"></i>Back to page

                </a>

            </li>

            <li class="nav-item">

                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">

                    <i class="fa fa-fw fa-power-off"></i>Logout

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
@yield('script')

@yield('modal')

</body>

<script>
       
</script>

</html>

