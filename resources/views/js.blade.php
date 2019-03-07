
@extends('layouts.base')

@section('content')

    <main style="background: #222;">

        <div class="container pt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('mainpage')}}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{route('web')}}">¸³ëÁÝÃ³óÝ»ñ</a></li>
                    <li class="breadcrumb-item active">JAVASCRIPT & JQUERY & AJAX</li>
                </ol>
            </nav>
        </div>

        <section class="courses-about py-4">
            <div class="container">
                <!--Accordion wrapper-->
                <div class="accordion md-accordion accordion-3 z-depth-1-half" id="accordionEx194" role="tablist"
                     aria-multiselectable="true">

                    <ul class="list-unstyled d-flex justify-content-center pt-5 courses-svg">
                        <li>
                            <div class="courses-view-logo">
                                <img src="/lessons/img/jsLogo.png">
                            </div>
                        </li>
                        <li>
                            <div class="courses-view-logo">
                                <img src="/lessons/img/jqueryLogo.png">
                            </div>
                        </li>
                        <li>
                            <div class="courses-view-logo">
                                <img src="/lessons/img/ajaxLogo.png">
                            </div>



                        </li>
                    </ul>

                    <h2 class="text-center  py-4 px-3">JAVASCRIPT & JQUERY & AJAX</h2>

                    <hr class="mb-0">

                    <!-- Accordion card -->
                    <div class="card courses-viev-accordion">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading4">
                            <a class="courses-view-accardion-title" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse1" aria-expanded="true"
                               aria-controls="collapse4">
                                <h4 class="mb-0 py-2 text-center">
                                    <span style="font-family: ArmNormal; color:#222;">¸³ë 1 -</span> ÆÝã ¿ JavaScript-Á
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>ÆÝã ¿ JavaScript-Á</li>
                                    <li>ïíÛ³ÉÝ»ñÇ ïÇå»ñ, ÷á÷Ë³Ï³ÝÝ»ñ, Ñ³ëï³ïáõÝÝ»ñ</li>
                                    <li>üáõÝÏóÇ³Ý»ñ, ÉáÏ³É ¨ ·Éáµ³É ÷á÷Ë³Ï³ÝÝ»ñ</li>
                                    <li>ûµÛ»ÏïÝ»ñ</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card courses-viev-accordion">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading4">
                            <a class="courses-view-accardion-title" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse2" aria-expanded="true"
                               aria-controls="collapse4">
                                <h4 class="mb-0 py-2 text-center">
                                    <span style="font-family: ArmNormal; color:#222;">¸³ë 2 -</span> JavaScript Ý»ñ³ÍáõÃÛáõÝ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>alert(), prompt(), confirm() üáõÝÏóÇ³Ý»ñ</li>
                                    <li>ûå»ñ³ïáñÝ»ñ</li>
                                    <li>if, else, switch ûå»ñ³ïáñÝ»ñ</li>
                                    <li>DOM - Ý»ñ³ÍáõÃÛáõÝ</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card courses-viev-accordion">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading4">
                            <a class="courses-view-accardion-title" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse3" aria-expanded="true"
                               aria-controls="collapse4">
                                <h4 class="mb-0 py-2 text-center">
                                    <span style="font-family: ArmNormal; color:#222;">¸³ë 3 -</span> JavaScript Ý»ñ³ÍáõÃÛáõÝ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>¼³Ý·í³ÍÝ»ñ</li>
                                    <li>òÇÏÉ»ñ</li>
                                    <li>setTimeout, setInterval ýáõÝÏóÇ³Ý»ñ</li>
                                    <li>è»ÏáõñëÇ³</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card courses-viev-accordion">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading4">
                            <a class="courses-view-accardion-title" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse4" aria-expanded="true"
                               aria-controls="collapse4">
                                <h4 class="mb-0 py-2 text-center">
                                    <span style="font-family: ArmNormal; color:#222;">¸³ë 4 -</span> DOM Ý»ñ³ÍáõÃÛáõÝ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>DOM ·³Õ³÷³ñÁ</li>
                                    <li>DOM Ý»ñ³ÍáõÃÛáõÝ</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card courses-viev-accordion">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading4">
                            <a class="courses-view-accardion-title" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse5" aria-expanded="true"
                               aria-controls="collapse4">
                                <h4 class="mb-0 py-2 text-center">
                                    <span style="font-family: ArmNormal; color:#222;">¸³ë 5 -</span> äñ³ÏïÇÏ ¹³ëª Ñ³ßíÇãÇ »õ tic tac toe Ë³ÕÇ å³ïñ³ëïáõÙ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>²Ùñ³åÝ¹»É DOM ·Çï»ÉÇùÝ»ñÁ</li>
                                    <li>¼³ñ·³óÝ»É ³É·áñÇÃÙÇÏ Ùï³Í»É³Ï»ñåÁ</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card courses-viev-accordion">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading4">
                            <a class="courses-view-accardion-title" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse6" aria-expanded="true"
                               aria-controls="collapse4">
                                <h4 class="mb-0 py-2 text-center">
                                    <span style="font-family: ArmNormal; color:#222;">¸³ë 6 -</span> Jquery Ý»ñ³ÍáõÃÛáõÝ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>Ì³ÝáÃ³Ý³É ·ñ³¹³ñ³ÝÝ»ñÇ ÁÝ¹Ñ³Ýáõñ ³ßË³ï³ÝùÇ Ñ»ï</li>
                                    <li>Ì³ÝáÃ³Ý³É Jquery ·ñ³¹³ñ³ÝÇ ÁÝ¹Ñ³Ýáõñ ³ßå³ï³ÝùÇ Ñ»ï</li>
                                    <li>ú·ïí»É Jquery ·ñ³¹³ñ³ÝÇó</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card courses-viev-accordion">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading4">
                            <a class="courses-view-accardion-title" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse7" aria-expanded="true"
                               aria-controls="collapse4">
                                <h4 class="mb-0 py-2 text-center">
                                    <span style="font-family: ArmNormal; color:#222;">¸³ë 7 -</span> Jquery Ý»ñ³ÍáõÃÛáõÝ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>Ì³ÝáÃ³Ý³É Jquery ·ñ³¹³ñ³ÝÇ Ñ³×³Ë ÏÇñ³éíáÕ Ù»Ãá¹Ý»ñÇ Ñ»ï</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card courses-viev-accordion">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading4">
                            <a class="courses-view-accardion-title" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse8" aria-expanded="true"
                               aria-controls="collapse4">
                                <h4 class="mb-0 py-2 text-center">
                                    <span style="font-family: ArmNormal; color:#222;">¸³ë 8 -</span> äñ³ÏïÇÏ³ ¹³ëª ÑÇ°áÕáõÃÛáõÝÁ É³í³óÝáÕ Ë³ÕÇ Íñ³·ñ³íáñáõÙ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>²Ùñ³åÝ¹»É DOM ·Çï»ÉÇùÝ»ñÁ</li>
                                    <li>¼³ñ·³óÝ»É ³É·áñÇÃÙÇÏ Ùï³Í»É³Ï»ñåÁ</li>
                                    <li>²ßË³ï»É Jquery ·ñ³¹³ñ³ÝÇ Ñ»ï</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card courses-viev-accordion">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading4">
                            <a class="courses-view-accardion-title" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse9" aria-expanded="true"
                               aria-controls="collapse4">
                                <h4 class="mb-0 py-2 text-center">
                                    <span style="font-family: ArmNormal; color:#222;">¸³ë 9 -</span> JSON, AJAX ï»ËÝáÉá·Ç³
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse9" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>Ì³ÝáÃáõÃÛáõÝ JSON, AJAX ï»ËÝáÉá·Ç³Ý»ñ</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card courses-viev-accordion">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading4">
                            <a class="courses-view-accardion-title" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse10" aria-expanded="true"
                               aria-controls="collapse4">
                                <h4 class="mb-0 py-2 text-center">
                                    <span style="font-family: ArmNormal; color:#222;">¸³ë 10 -</span> API Ý»ñ³ÍáõÃÛáõÝ, YouTube API
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse10" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>Ì³ÝáÃ³Ý³É API ï»ËÝáÉá·Ç³Ý»ñÇ ÑÇÙÝ³Ï³Ý ³ßË³ï³ÝùÇ Ñ»ï</li>
                                    <li>Ì³ÝáÃ³Ý³É Google ÁÝÏ»ñáõÃÛ³Ý API Í³é³ÛáõÃÛáõÝÝ»ñÇ ÑÇÙÝ³Ï³Ý ³ßË³ï³ÝùÇÝ</li>
                                    <li>ú·ïí»É YouTube API Í³é³ÛáõÃÛáõÝÝ»ñÇó</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card courses-viev-accordion">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading4">
                            <a class="courses-view-accardion-title" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse11" aria-expanded="true"
                               aria-controls="collapse4">
                                <h4 class="mb-0 py-2 text-center">
                                    <span style="font-family: ArmNormal; color:#222;">¸³ë 11 -</span> Math և Date ûµÛ»ÏïÝ»ñ, Try/Catch, é»·áõÉÛ³ñ ³ñï³Ñ³ïáõÃÛáõÝÝ»ñ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse11" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>Ì³ÝáÃ³óáõÙ Math ûµÛ»ÏïÇÝ</li>
                                    <li>Ì³ÝáÃ³óáõÙ Date ûµÛ»ÏïÇÝ</li>
                                    <li>Ì³ÝáÃ³óáõÙ Try/Catch üáõÝÏóÇ³Ý»ñÇÝ</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card courses-viev-accordion">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading4">
                            <a class="courses-view-accardion-title" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse12" aria-expanded="true"
                               aria-controls="collapse4">
                                <h4 class="mb-0 py-2 text-center">
                                    <span style="font-family: ArmNormal; color:#222;">¸³ë 12 -</span> Ì³ÝáÃ³óáõÙ ReactJS-Ç և Angular-Ç Ñ»ï
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse12" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>Ì³ÝáÃ³óáõÙ ReactJS-Ç և Angular-Ç Ñ»ï</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->



                </div>
                <!--/.Accordion wrapper-->
            </div>
        </section>


    </main>
@endsection
