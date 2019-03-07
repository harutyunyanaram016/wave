@extends('layouts.base')

@section('content')
    <main style="background: #222;">

        <section class="courses__banner" id="courses__banner">
            <div class="blackBg"></div>
            <h1 id="typed"></h1>
        </section>

        <div class="container pt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('mainpage')}}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item active">¸³ëÁÝÃ³óÝ»ñ</li>
                </ol>
            </nav>
        </div>

        <section class="courses__content py-4">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-around">
                    <a href="{{route('html')}}" class="wow zoomIn" data-wow-offset="100">
                        <div class="courses-item">
                            <div class="courses-show d-flex align-items-center">
                                <i class="fa fa-eye mr-1" aria-hidden="true"></i>
                                <p>¸Çï»É</p>
                            </div>
                            <div class="courses-img">
                                <img src="/lessons/img/htmlcss.jpg">
                            </div>
                            <div class="courses-title">
                                <p>HTML & CSS & BOOTSTRAP</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{route('js')}}" class="wow zoomIn" data-wow-offset="100" data-wow-delay="0.2s">
                        <div class="courses-item">
                            <div class="courses-show d-flex align-items-center">
                                <i class="fa fa-eye mr-1" aria-hidden="true"></i>
                                <p>¸Çï»É</p>
                            </div>
                            <div class="courses-img">
                                <img src="/lessons/img/javascript.jpg">
                            </div>
                            <div class="courses-title">
                                <p>JAVASCRIPT & JQUERY & AJAX</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{route('php')}}" class="wow zoomIn" data-wow-offset="100" data-wow-delay="0.4s">
                        <div class="courses-item">
                            <div class="courses-show d-flex align-items-center">
                                <i class="fa fa-eye mr-1" aria-hidden="true"></i>
                                <p>¸Çï»É</p>
                            </div>
                            <div class="courses-img">
                                <img src="/lessons/img/php.jpg">
                            </div>
                            <div class="courses-title">
                                <p>PHP MYSQL</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{route('react')}}" class="wow zoomIn" data-wow-offset="100">
                        <div class="courses-item">
                            <div class="courses-show d-flex align-items-center">
                                <i class="fa fa-eye mr-1" aria-hidden="true"></i>
                                <p>¸Çï»É</p>
                            </div>
                            <div class="courses-img">
                                <img src="/lessons/img/react.jpg">
                            </div>
                            <div class="courses-title">
                                <p>REACT JS & REDUX</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{route('oop')}}" class="wow zoomIn" data-wow-offset="100" data-wow-delay="0.2s">
                        <div class="courses-item">
                            <div class="courses-show d-flex align-items-center">
                                <i class="fa fa-eye mr-1" aria-hidden="true"></i>
                                <p>¸Çï»É</p>
                            </div>
                            <div class="courses-img">
                                <img src="/lessons/img/laravel.jpg">
                            </div>
                            <div class="courses-title">
                                <p>LARAVEL</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- <div id="particles-js" class="particle"></div> -->
    </main>

@endsection
