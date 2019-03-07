@extends('layouts.base')

@section('content')
@if(session()->has('SendMail'))
                <div class="alert alert-success">
                    <script>alert('Նամակը Ուղղարկված է։ Շնորհակալություն'); </script>
                </div>
        @endif



<main>


    <section class="banner" id="banner">
        <div class="swiper-container baner">
            <div class="swiper-wrapper">
                <div class="swiper-slide d-flex">
                    <img src="/lessons/img/slide1.jpg" class="w-100">
                    <div class="m-auto sliderText">
                        ÆÜîºðÜºî ¶àì²¼¸ Î²ÚøºðÆ ²è²æÊ²Ô²òàôØ SEO ²è²æÊ²Ô²òàôØ
                    </div>
                </div>
                <div class="swiper-slide d-flex">
                    <img src="/lessons/img/slide1.jpg" class="w-100">
                    <div class="m-auto sliderText">
                        ÆÜîºðÜºî ¶àì²¼¸ Î²ÚøºðÆ ²è²æÊ²Ô²òàôØ SEO ²è²æÊ²Ô²òàôØ
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <div class="d-flex justify-content-center flex-wrap align-items-center py-2 py-md-3">
        <a href="#" class="button call-order mx-2 d-flex justify-content-center align-items-center">
            <div class="d-flex justify-content-center align-items-center buttonIcon mr-2">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </div>
            ä³ïíÇñ»É Ï³Ûù
        </a>
        <a href="#" class="button call-order mx-2 d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#basicExampleModal">
            <div class="d-flex justify-content-center align-items-center buttonIcon mr-2">
                <i class="fa fa-phone" aria-hidden="true"></i>
            </div>
            ä³ïíÇñ»É ½³Ý·
        </a>
    </div>

    <section class="about py-2 py-md-4" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow slideInLeft" data-wow-offset="10">
                    <iframe width="100%" height="315px" src="https://www.youtube.com/embed/YdQyHaki7Gk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6 wow slideInRight" data-wow-offset="10">
                    <div style="height: 315px; background-color: rgba(255,255,255,.5); padding: 1rem;">
                        <p class="about__text">
                            Wave-IT- åñáý»ëÇÝ³ÉÝ»ñÇ ÃÇÙ ¿, áñÇÝ Ï³ñáÕ »ù íëï³Ñ»É Ò»ñ Ï³ÛùÇ ëï»ÕÍáõÙÝ áõ Ñ»ï³·³ ³ç³ÏóáõÃÛáõÝÁ: Ø»Ýù ïñ³Ù³¹ñáõÙ »Ýù Í³é³ÛáõÃÛáõÝÝ»ñÇ É³ÛÝ ßñç³Ý³Ï, ¹áõù Ï³ñáÕ »ù íëï³Ñ ÉÇÝ»É, áñ Ò»ñ ËÝ¹ñáí ½µ³Õí»Éáõ »Ý ÷áñÓ³éáõ Ù³ëÝ³·»ïÝ»ñ, áíù»ñ Ñ³çáÕáõÃÛ³Ùµ ³í³ñï»É »Ý µ³½Ù³ÃÇí Ý³Ë³·Í»ñ: Ø»Ýù ³ÝÏ»ÕÍáñ»Ý ëÇñáõÙ »Ýù Ù»ñ ·áñÍÁ ¨ Ï³ñáÕÝáõÙ »Ýù ³ÛÝ å³ïß³× Ï³ï³ñ»É:
                        </p>
                        <div class="about__text__wave" >
                            <h2>Ð³ñ·³ÝùÝ»ñáí` Wave-IT ÃÇÙ</h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <section class="my-2">

        <div class="container">
            <h1 class="text-center service__title">
                <span>ì»µ Ï³Ûù»ñÇ å³ïñ³ëïáõÙ</span>
            </h1>


            <div class="row my-5">
                <div class="col-xl-3 col-sm-6 my-4 wow ">
                    <div class="card card-cascade">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header blue-gradient text-center py-4">

                            <!-- Title -->
                            <img src="/lessons/img/icon1.png" class="mx-auto">
                            <!-- Subtitle -->
                            <h4 class="card-header-subtitle mt-3">È»Ý¹ÇÝ·</h4>

                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center d-flex flex-column">

                            <!-- Text -->
                            <p class="card-text d-flex align-items-center" style="flex: auto">Ø»Ýù å³ïñ³ëïáõÙ »Ýù É»Ý¹ÇÝ· ¿ç»ñ: È»Ý¹ÇÝ· ¿çÁ Ù»Ï ¿ç³Ýáó Ï³Ûù ¿, áñÝ û·ï³·áñÍíáõÙ ¿ ·áí³½¹³ÛÇÝ, Ù³ñù»ÃÇÝ·³ÛÇÝ ¨ µÇ½Ý»ë Ýå³ï³ÏÝ»ñáí: Ø»Ï ¿çÇ Ù»ç ³ÙµáÕç³óí³Í ï»Õ»Ï³ïíáõÃÛáõÝÁ ³ñ³·, ³ñ¹ÛáõÝ³í»ï áñáßáõÙ Ï³Û³óÝ»Éáõ áõ ·áñÍ»Éáõ ÑÝ³ñ³íáñáõÃÛáõÝ ¿ ï³ÉÇë:</p>

                            <hr>

                            <h5>êÏë³Í 50.000¹ñ-Çó</h5>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 my-4 wow ">
                    <div class="card card-cascade">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header blue-gradient text-center py-4">

                            <!-- Title -->
                            <img src="/lessons/img/icon2.png" class="mx-auto">
                            <!-- Subtitle -->
                            <h4 class="card-header-subtitle mt-3">Îáñåáñá³ïÇí</h4>

                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center d-flex flex-column">

                            <!-- Text -->
                            <p class="card-text d-flex align-items-center" style="flex: auto">ä³ïñ³ëïáõÙ »Ýù ó³ÝÏ³ó³Í µ³ñ¹áõÃÛ³Ý Ïáñåáñ³ïÇí Ï³Ûù»ñ: Îáñåáñ³ïÇí Ï³ÛùÇ Ûáõñ³Ñ³ïÏáõÃÛáõÝÝ ³ÛÝ ¿, áñ Éñ³óáõóÇã ýáõÝÏóÇáÝ³ÉáõÃÛáõÝ ¿ ³í»É³óÝáõÙ Ï³ÛùÇÝ: ²ÛÝ ÑÝ³ñ³íáñáõÃÛáõÝ ¿ ï³ÉÇë ï»Õ³¹ñ»É ï»Õ»ÏáõÃÛáõÝÝ»ñ Ï³½Ù³Ï»ñåáõÃÛ³Ý ·áñÍáõÝ»áõÃÛ³Ý ï»ë³ÏÇ, ÏáÝï³Ïï³ÛÇÝ ïíÛ³ÉÝ»ñÇ, Ñ³ëó»Ý»ñÇ, ³é³ç³ñÏíáÕ ³ÏóÇ³Ý»ñÇ, ³åñ³ÝùÝ»ñÇ ¨ Í³é³ÛáõÃÛáõÝÝ»ñÇ Ù³ëÇÝ:</p>

                            <hr>

                            <h5>êÏë³Í 100.000¹ñ-Çó</h5>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 my-4 wow ">
                    <div class="card card-cascade">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header blue-gradient text-center py-4">

                            <!-- Title -->
                            <img src="/lessons/img/icon3.png" class="mx-auto">
                            <!-- Subtitle -->
                            <h4 class="card-header-subtitle mt-3">ÆÝï»ñÝ»ï Ë³ÝáõÃ</h4>

                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center d-flex flex-column">

                            <!-- Text -->
                            <p class="card-text d-flex align-items-center" style="flex: auto">ä³ïñ³ëïáõÙ »Ýù ÇÝï»ñÝ»ï Ë³ÝáõÃÝ»ñ, áñáÝù ÏÝå³ëï»Ý Ò»ñ µÇ½Ý»ëÇ ³ñ¹ÛáõÝ³í»ï ³é³çË³Õ³óÙ³ÝÁ ¨ í³×³éùÇ ËÃ³ÝÙ³ÝÁ:</p>

                            <hr>

                            <h5>êÏë³Í 150.000¹ñ-Çó</h5>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 my-4 wow ">
                    <div class="card card-cascade ">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header blue-gradient text-center py-4">

                            <!-- Title -->
                            <img src="/lessons/img/icon4.png" class="mx-auto">
                            <!-- Subtitle -->
                            <h4 class="card-header-subtitle mt-3">WordPress CMS</h4>

                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center d-flex flex-column">

                            <!-- Text -->
                            <p class="card-text d-flex align-items-center" style="flex: auto">ä³ïñ³ëïáõÙ »Ýù Ï³Ûù»ñ WordPress CMS-Ç ÙÇçáóáí: WordPress-Á ÑÝ³ñ³íáñáõÃÛáõÝ ¿ ï³ÉÇë å³ïñ³ëï»É ÇÝãå»ë å³ñ½ µÉá·Ý»ñ ¨ Ã»Ù³ïÇÏ Ï³Ûù»ñ, ³ÛÝå»ë ¿É µÇ½Ý»ë ¨ Ïáñåáñ³ïÇí Ï³Ûù»ñ, ÝáñáõÃÛáõÝÝ»ñÇ åáñï³ÉÝ»ñ</p>


                            <h5>êÏë³Í 200.000¹ñ-Çó</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="service py-2 py-md-4" id="service">
        <div class="container">
            <h2 class="text-center service__title">
                <span>Ø»ñ Ì³é³ÛáõÃÛáõÝÝ»ñÁ</span>
            </h2>

            <div class="row py-2 py-md-4">
                <div class="col-xl-4 col-md-6 text-center mt-4">
                    <div class="service__box wow zoomIn" data-wow-offset="70">
                        <h3>ì»µ Ì³é³ÛáõÃÛáõÝÝ»ñ</h3>
                        <p>Î³ÛùÇ Ý³Ë³·ÍáõÙ</p>
                        <p>ì»µ ¹Ç½³ÛÝ</p>
                        <p>ÆÝï»ñÝ»ï Ë³ÝáõÃÝ»ñÇ å³ïñ³ëïáõÙ</p>
                        <p>ÜÛáõÃ»ñÇ ¨ ÝÏ³ñÝ»ñÇ Ã³ñÙ³óáõÙ, ÷á÷áËáõÙ</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 text-center mt-4">
                    <div class="service__box wow zoomIn" data-wow-offset="70" data-wow-delay="0.1s">
                        <h3>SEO Ï³ÛùÇ ûåïÇÙ³É³óáõÙ</h3>
                        <p>´³Ý³ÉÇ µ³é»ñÇ í»ñÉáõÍáõÃÛáõÝ/Ùß³ÏáõÙ</p>
                        <p>ê³ÑÙ³Ýí³Í ÑÇÙÝ³µ³é»ñÇ Ó¨³íáñáõÙ</p>
                        <p>Ü»ñùÇÝ ûåïÇÙ³É³óáõÙ</p>
                        <p>²ñï³ùÇÝ ûåïÇÙ³É³óáõÙ</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 text-center mt-4">
                    <div class="service__box wow zoomIn" data-wow-offset="70" data-wow-delay="0.2s">
                        <h3>ÆÝï»ñÝ»ï Ù³ñù»ÃÇÝ·</h3>
                        <p>²é³çË³Õ³óáõÙ ëáóÇ³É³Ï³Ý ó³Ýó»ñáõÙ (SMM, SMO)</p>
                        <p>Ø³ñù»ÃÇÝ·³ÛÇÝ í»ñÉáõÍáõÃÛáõÝ</p>
                        <p>ÆÝï»ñÝ»ï ·áí³½¹ (Google, Adwords,<br> Yandex direct)</p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 text-center mt-4">
                    <div class="service__box wow zoomIn" data-wow-offset="70" data-wow-delay="0.3s">
                        <h3>Î³ÛùÇ ³ç³ÏóáõÃÛáõÝ 24/7</h3>
                        <p>ÐáëÃ/ë»ñí»ñÇ Ï³é³í³ñáõÙ</p>
                        <p>Î³ÛùÇ í»ñ³Ï³Ý·ÝáõÙ</p>
                        <p>Î³ÛùÇ µáí³Ý¹³ÏáõÃÛ³Ý ÙáÝÇÃáñÇÝ·</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 text-center mt-4">
                    <div class="service__box wow zoomIn" data-wow-offset="70" data-wow-delay="0.4s">
                        <h3>¶ñ³ýÇÏ³Ï³Ý ¹Ç½³ÛÝ</h3>
                        <p><a href="logoPage.php"><i class="fa fa-arrow-right mr-2" aria-hidden="true"></i>Èá·á</a></p>
                        <p><a href="visit.php"><i class="fa fa-arrow-right mr-2" aria-hidden="true"></i>²Ûó»ù³ñï»ñ</a></p>
                        <p><a href="3ddesign.php"><i class="fa fa-arrow-right mr-2" aria-hidden="true"></i>3D ¹Ç½³ÛÝ ÇÝï»ñÇ»ñ</a></p>
                        <p><a href="banner.php"><i class="fa fa-arrow-right mr-2" aria-hidden="true"></i>´³Ý»ñÝ»ñÇ ëï»ÕÍáõÙ</a></p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 text-center mt-4">
                    <div class="service__box wow zoomIn" data-wow-offset="70" data-wow-delay="0.5s">
                        <h3>Ü³Ë³·ÍáõÙ IOS ¨ Android Ñ³Ù³Ï³ñ·áõÙ</h3>
                        <p><a href="https://play.google.com/store/apps/details?id=com.birthright"><i class="fa fa-arrow-right mr-2" aria-hidden="true"></i>Birthright Connect</a></p>
                        <p><a href="https://play.google.com/store/apps/details?id=com.hikearmenia"><i class="fa fa-arrow-right mr-2" aria-hidden="true"></i>HIKE Armenia</a></p>
                        <p><a href="https://play.google.com/store/apps/details?id=com.learnbat.showme"><i class="fa fa-arrow-right mr-2" aria-hidden="true"></i>Show Me Interactive</a></p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="blog-top" id="blog-top">
        <h2 class="text-center service__title">
            <span>ÜáñáõÃÛáõÝÝ»ñ</span>
        </h2>
        <div class="container py-4">
            <div class="row justify-content-around">
                <div class="col-12 col-md-6 col-lg-4 mt-4">
                    <a href="blog-view.php">
                        <div class="blog-box wow fadeInUp" data-wow-offset="100">
                            <div class="blog-img">
                                <div class="day d-flex align-items-center">
                                    <div class="m-auto">
                                        <p>27</p>
                                        <p>¸ºÎ</p>
                                    </div>
                                </div>
                                <img src="/lessons/img/loadImg.jpg">
                            </div>
                            <div class="blog-body">
                                <div class="blog-title">
                                    <h4 class="text-center">John Due</h4>
                                </div>
                                <div class="blog-title">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
                            </div>
                            <div class="blog-footer d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    <p class="ml-2">01.01.2019</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <p class="ml-2">45</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mt-4">
                    <a href="blog-view.php">
                        <div class="blog-box wow fadeInUp" data-wow-offset="100">
                            <div class="blog-img">
                                <div class="day d-flex align-items-center">
                                    <div class="m-auto">
                                        <p>27</p>
                                        <p>¸ºÎ</p>
                                    </div>
                                </div>
                                <img src="/lessons/img/loadImg.jpg">
                            </div>
                            <div class="blog-body">
                                <div class="blog-title">
                                    <h4 class="text-center">John Due</h4>
                                </div>
                                <div class="blog-title">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
                            </div>
                            <div class="blog-footer d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    <p class="ml-2">01.01.2019</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <p class="ml-2">45</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mt-4">
                    <a href="blog-view.php">
                        <div class="blog-box wow fadeInUp" data-wow-offset="100">
                            <div class="blog-img">
                                <div class="day d-flex align-items-center">
                                    <div class="m-auto">
                                        <p>27</p>
                                        <p>¸ºÎ</p>
                                    </div>
                                </div>
                                <img src="/lessons/img/loadImg.jpg">
                            </div>
                            <div class="blog-body">
                                <div class="blog-title">
                                    <h4 class="text-center">John Due</h4>
                                </div>
                                <div class="blog-title">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
                            </div>
                            <div class="blog-footer d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    <p class="ml-2">01.01.2019</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <p class="ml-2">45</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>

        <a href="{{route('blog')}}" class="button blog-button">¸Çï»É ³í»ÉÇÝ</a>
    </section>

    <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ä³ïíÇñ»É ½³Ý·</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="md-form">
                        <input type="text" id="form1" class="form-control">
                        <label for="form1">²ÝáõÝ</label>
                    </div>

                    <div class="md-form">
                        <input type="text" id="form2" class="form-control phone">
                        <label for="form2">Ð»é</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button">àõÕÕ³ñÏ»É</button>
                </div>
            </div>
        </div>
    </div>

    <a class="call-us" href="tel:+37477789786">
        <div id="callme">
            <div id="callmeMain">
                <i class="fa fa-phone m-auto"></i>
            </div>
        </div>
    </a>


</main>
<div id="particles-js" class="particle"></div>

@endsection
