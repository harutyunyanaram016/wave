@extends('layouts.base')

@section('content')
    <main style="background: #222;">

        <div class="container pt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('mainpage')}}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{route('web')}}">¸³ëÁÝÃ³óÝ»ñ</a></li>
                    <li class="breadcrumb-item active">LARAVEL</li>
                </ol>
            </nav>
        </div>

        <section class="courses-about py-4">
            <div class="container">
                <!--Accordion wrapper-->
                <div class="accordion md-accordion accordion-3 z-depth-1-half" id="accordionEx194" role="tablist"
                     aria-multiselectable="true">

                    <ul class="list-unstyled d-flex justify-content-center pt-5 courses-laravel">
                        <li>
                            <svg version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 x="0px" y="0px" viewBox="0 0 100 100" xml:space="preserve" style="fill: #f44336">
        <g id="surface1_1_">
        </g>
                                <path d="M99.6,48c-0.7-0.7-9.8-12.2-11.4-14.1c-1.6-1.9-2.4-1.6-3.4-1.4c-1,0.1-12.6,2.1-13.9,2.3c-1.3,0.2-2.2,0.8-1.4,1.9
            c0.7,1,8.4,11.8,10,14.2l-30.3,7.3L25.2,17.9c-1-1.4-1.2-1.9-3.3-1.8C19.7,16.2,3,17.5,1.8,17.6c-1.2,0.1-2.5,0.6-1.3,3.4
            C1.7,23.9,20.6,64.8,21.2,66c0.5,1.2,1.9,3.1,5.1,2.3c3.3-0.8,14.7-3.8,21-5.4c3.3,6,10,18.1,11.3,19.8c1.7,2.3,2.8,1.9,5.4,1.2
            c2-0.6,31.2-11.1,32.5-11.6c1.3-0.5,2.1-0.9,1.2-2.2c-0.7-1-8.4-11.3-12.4-16.7c2.8-0.7,12.6-3.4,13.6-3.6
            C100.1,49.4,100.3,48.8,99.6,48z M44.6,59.3c-0.4,0.1-17.3,4.1-18.2,4.3c-0.9,0.2-0.9,0.1-1-0.2C25.2,63.1,5.2,21.8,4.9,21.2
            s-0.3-0.9,0-0.9c0.3,0,16-1.4,16.6-1.4c0.6,0,0.5,0.1,0.7,0.4c0,0,22.2,38.3,22.6,39C45.2,59,44.9,59.2,44.6,59.3z M92.4,68.2
            c0.3,0.4,0.5,0.7-0.3,1c-0.9,0.3-28.7,9.7-29.2,9.9c-0.5,0.2-1,0.3-1.7-0.7c-0.7-1-9.8-16.7-9.8-16.7l29.5-7.7
            c0.7-0.2,1-0.4,1.4,0.3C82.8,55.2,92.1,67.8,92.4,68.2z M94.3,47.3c-0.7,0.1-11.5,2.8-11.5,2.8L73.9,38c-0.2-0.4-0.5-0.7,0.2-0.8
            c0.6-0.1,10.7-1.9,11.1-2c0.5-0.1,0.8-0.2,1.4,0.5c0.6,0.8,8.2,10.5,8.5,10.8C95.4,46.9,94.9,47.1,94.3,47.3z"/>
    </svg>

                        </li>
                    </ul>

                    <h2 class="text-center  py-4 px-3">LARAVEL</h2>

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
                                    <li>ÆÝã ¿ PHP-Á</li>
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
                                    <span style="font-family: ArmNormal; color:#222;">¸³ë 11 -</span> OOP Ý»ñ³ÍáõÃÛáõÝ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse11" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>Ì³ÝáÃ³Ý³É OOP-Ç ÑÇÙÝ³Ï³Ý ÏáÝó»åóÇ³Ý»ñÇ Ñ»ï</li>
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
                                    <span style="font-family: ArmNormal; color:#222;">¸³ë 12 -</span> OOP ß³ñáõÝ³ÏáõÃÛáõÝ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse12" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>OOP ß³ñáõÝ³ÏáõÃÛáõÝ</li>
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
