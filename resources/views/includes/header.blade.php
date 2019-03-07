<header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">

                  <!-- Navigation -->
                  <nav class="navbar navbar-default">
                      <!-- Brand and toggle get grouped for better mobile display -->
                      <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                  data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>


                          <!-- Brand -->

                          <a class="navbar-brand page-scroll sticky-logo" href="/">
                              <!--<h1><span>e</span>Business</h1>-->
                              <!-- Uncomment below if you prefer to use an image logo -->
                              <img src="img/logo.png" alt="wave-it" width="180" height="30" title="">
                          </a>
                      </div>
                      <div class="dropdown language_drop">
                          <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
                              <!--@if(Session::get('locale') == 'en')-->
                              <!--<img style="width:18px;margin-top:-4px" src="img/about/en.png" alt="">-->
                              <!--<span>Eng</span>-->
                              <!--@elseif(Session::get('locale') == 'hy')-->
                              <!--<img style="width:18px;margin-top:-4px" src="img/about/hy.png" alt="">-->
                              <!--<span>Հայ</span> -->
                              <!--@else-->
                              <!--<img style="width:18px;margin-top:-4px" src="img/about/ru.png" alt="">-->
                              <!--<span>Рус</span>-->
                              <!--@endif-->
                              
                              @if(App::isLocale('en'))
                              <img style="width:18px;margin-top:-4px" src="img/about/en.png" alt="Wave IT">
                              @elseif(App::isLocale('hy'))
                              <img style="width:18px;margin-top:-4px" src="img/about/hy.png" alt="Wave IT">
                              @else
                              <img style="width:18px;margin-top:-4px" src="img/about/ru.png" alt="Wave IT">
                              @endif


                              <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu language_menu ">
                              @if(App::isLocale('en'))
                              <li>
                                  <a href="{{route('lanuage',['locale'=>'ru'])}}">
                                      <img style="width:20px;margin-top:-4px" src="{{ asset('img/about/ru.png') }}" alt="Wave IT">
                                  </a>
                              </li>
                              <li>
                                <a href="{{route('lanuage',['locale'=>'hy'])}}">
                                      <img style="width:20px;margin-top:-4px" src="{{ asset('img/about/hy.png') }}" alt="Wave IT">
                                  </a> 
                              </li>
                              @elseif(App::isLocale('hy'))
                              <li>
                                <a href="{{route('lanuage',['locale'=>'ru'])}}">
                                  <img style="width:20px;margin-top:-4px" src="{{ asset('img/about/ru.png') }}" alt="Wave IT">
                                </a> 
                              </li>
                              <li>
                                <a href="{{route('lanuage',['locale'=>'en'])}}">
                                  <img style="width:20px;margin-top:-4px" src="{{ asset('img/about/en.png') }}" alt="Wave IT">
                                </a>  
                              </li>
                              @else
                              <li>
                                <a href="{{route('lanuage',['locale'=>'en'])}}">
                                  <img style="width:20px;margin-top:-4px" src="{{ asset('img/about/en.png') }}" alt="Wave IT">
                                  <span>Eng</span>
                                </a>  
                              </li>
                              <li>
                                <a href="{{route('lanuage',['locale'=>'hy'])}}">
                                  <img style="width:20px;margin-top:-4px" src="{{ asset('img/about/hy.png') }}" alt="Wave IT">
                                  <span>Հայ</span>
                                </a>  
                              </li>
                              @endif


                          </ul>
                      </div>
                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1"
                           id="navbar-example">
                          <ul class="nav navbar-nav navbar-right">
                              <li class="{{ request()->is('/') ? 'active' : '' }}">
                                  <a class="page-scroll" href="{{route('index')}}">@lang('global.Home')</a>
                              </li>
                              <li class="{{request()->is('web') ? 'active' : ''}}">
                                  <a href="{{route('web')}}" class="page-scroll" >@lang('global.Courses')
                                      
                                  </a>
                              </li>
                              <li class="{{request()->is('about') ? 'active' : ''}}">
                                  <a class="page-scroll" href="{{route('about')}}">@lang('global.About')</a>
                              </li>
                              <li class="{{request()->is('team') ? 'active' : ''}}">
                                  <a class="page-scroll" href="{{route('team')}}">@lang('global.Team')</a>
                              </li>
                              <!--<li>-->
                              <!--    <a class="page-scroll" href="#services">@lang('global.Services')</a>-->
                              <!--</li>-->
                              <!--<li>-->
                              <!--    <a class="page-scroll" href="#team">@lang('global.Team')</a>-->
                              <!--</li>-->
                              <li class="{{request()->is('portfolio') ? 'active' : ''}}">
                                  <a class="page-scroll" href="{{route('portfolio')}}">@lang('global.Portfolio')</a>
                              </li>
                              <li>
                                  <a class="page-scroll" href="#contact">@lang('global.Contact')</a>
                              </li>
                          </ul>
                      </div>
                      <!-- navbar-collapse -->
                  </nav>
                  <!-- END: Navigation -->
                    <!--Start Modal-->
                    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" 
                        aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 50px; background: rgba(0,0,0,0.8);">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="">
                        <!--<div class="modal-body">-->
                            <!--<div class="modal-content">-->
                            <div id="carouselExampleIndicators" class="carousel slide carousel-fade col-lg-12" data-ride="carousel">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size: 45px; color: white; opacity: 1;">
                            <span aria-hidden="true">&times;</span>
                            </button>

                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <!--<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
                                <!--<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
                                <!--<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>-->
                                <!--<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>-->
                            </ol>

                            <div class="carousel-inner">
                                <div class="item active">
                                <img class="d-block" src="img/sale/sale_1.jpg"  style='height: ' alt="First slide">
                                </div>
                                <!--<div class="item ">-->
                                <!--<img class="d-block" src=""  style='height: 55rem;' alt="First slide">-->
                                <!--</div>-->
                                <!--<div class="item">-->
                                <!--<img class="d-block" src=""  style='height: 55rem;' alt="Second slide">-->
                                <!--</div>-->
                                <!--<div class="item">-->
                                <!--<img class="d-block" src=""  style='height: 55rem;' alt="Third slide">-->
                                <!--</div>-->
                                <!--<div class="item">-->
                                <!--<img class="d-block" src=""  style='height: 55rem;' alt="Third slide">-->
                                <!--</div>-->
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            </div>
                        <!--</div>-->
                        <!--</div>-->
                        </div>
                    </div>
                    </div>

                    <style>
                        .modal-backdrop{
                            z-index: 0 !important;
                        }
                    </style>
                <!--Modal end-->

                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
</header>
<!-- header end -->
