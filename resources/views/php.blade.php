@extends('layouts.base')

@section('content')
    <main style="background: #222;">

        <div class="container pt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('mainpage')}}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{route('web')}}">¸³ëÁÝÃ³óÝ»ñ</a></li>
                    <li class="breadcrumb-item active">PHP & MySql</li>
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
                                <img src="/lessons/img/phpLogo.png">
                            </div>
                        </li>
                        <li>
                            <div class="courses-view-logo">
                                <img src="/lessons/img/mysqlLogo.png">
                            </div>
                        </li>
                    </ul>

                    <h2 class="text-center  py-4 px-3">PHP & MySql</h2>

                    <hr class="mb-0">

                    <!-- Accordion card -->
                    <div class="card courses-viev-accordion">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading4">
                            <a class="courses-view-accardion-title" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse1" aria-expanded="true"
                               aria-controls="collapse4">
                                <h4 class="mb-0 py-2 text-center">
                                    <span style="font-family: ArmNormal; color:#222;">¸³ë 1 -</span> ÆÝã ¿ PHP-Á
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>ÆÝã ¿ PHP-Ý</li>
                                    <li>öá÷áË³Ï³ÝÝ»ñ, ÏáÝëï³ÝïÝ»ñ</li>
                                    <li>¶áñÍáÕáõÃÛáõÝÝ»ñ ÷á÷Ë³Ï³ÝÝ»ñÇ Ñ»ï</li>
                                    <li>ÐÕáõÙ ÷á÷Ë³Ï³ÝÝ»ñ</li>
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
                                    <span style="font-family: ArmNormal; color:#222;">¸³ë 2 -</span> Ø³Ã»Ù³ïÇÏ³Ï³Ý ·áñÍáÕáõÃÛáõÝÝ»ñ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>Ø³Ã»Ù³ïÇÏ³Ï³Ý ·áñÍáÕáõÃÛáõÝÝ»ñ</li>
                                    <li>îáÕ³ÛÇÝ ·áñÍáÕáõÃÛáõÝÝ»ñ</li>
                                    <li>îñ³Ù³µ³Ý³Ï³Ý ·áñÍáÕáõÃÛáõÝÝ»ñ</li>
                                    <li>If-else, switch-case ûå»ñ³ïáñÝ»ñ</li>
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
                                    <span style="font-family: ArmNormal; color:#222;">¸³ë 3 -</span> òÇÏÉ»ñ, ¼³Ý·í³ÍÝ»ñ, üáõÝÏóÇ³Ý»ñ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>òÇÏÉ»ñ</li>
                                    <li>¼³Ý·í³ÍÝ»ñ</li>
                                    <li>üáõÝÏóÇ³Ý»ñ</li>
                                    <li>öá÷Ë³Ï³ÝÝ»ñÇ ï»ë³Ý»ÉÇáõÃÛ³Ý ïÇñáõÛÃ</li>
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
                                    <span style="font-family: ArmNormal; color:#222;">¸³ë 4 -</span> êáõå»ñ·Éáµ³É ÷á÷Ë³Ï³ÝÝ»ñ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>êáõå»ñ·Éáµ³É ÷á÷Ë³Ï³ÝÝ»ñ</li>
                                    <li>øáõùÇÝ»ñ, ë»ëÇ³Ý»ñ</li>
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
                                    <span style="font-family: ArmNormal; color:#222;">¸³ë 5 -</span> Include, require ýáõÝÏóÇ³Ý»ñ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>²Include, require ýáõÝÏóÇ³Ý»ñ</li>
                                    <li>Þ³µÉáÝ³íáñáõÙ</li>
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
                                    <span style="font-family: ArmNormal; color:#222;">¸³ë 6 -</span> îíÛ³ÉÝ»ñÇ µ³½³Ý»ñ, SQL Ññ³Ù³ÝÝ»ñ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>îíÛ³ÉÝ»ñÇ µ³½³Ý»ñ</li>
                                    <li>SQL Ññ³Ù³ÝÝ»ñ</li>
                                    <li>PHP & MySql</li>
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
                                    <span style="font-family: ArmNormal; color:#222;">¸³ë 7 -</span> äñ³ÏïÇÏ ¹³ëª ³Ùñ³åÝ¹»É ·Çï»ÉÇùÝ»ñÁ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>äñ³ÏïÇÏ ¹³ëª ³Ùñ³åÝ¹»É ·Çï»ÉÇùÝ»ñÁ</li>
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
                                    <span style="font-family: ArmNormal; color:#222;">¸³ë 8 -</span> äñ³ÏïÇÏ ¹³ëª ÑÇßáÕáõÃÛáõÝÁ É³í³óÝáÕ Ë³ÕÇ Íñ³·ñ³íáñáõÙ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>äñ³ÏïÇÏ ¹³ëª ÑÇßáÕáõÃÛáõÝÁ É³í³óÝáÕ Ë³ÕÇ Íñ³·ñ³íáñáõÙ</li>
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
                                    <span style="font-family: ArmNormal; color:#222;">¸³ë 9 -</span>îíÛ³ÉÝ»ñÇ ÷áË³ÝóáõÙ AJAX ÙÇçáóáí
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse9" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>îíÛ³ÉÝ»ñÇ ÷áË³ÝóáõÙ AJAX ÙÇçáóáí</li>
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
