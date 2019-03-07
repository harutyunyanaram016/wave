@extends('layouts.base')

@section('content')

    <main style="background: #222;">

        <div class="container pt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('mainpage')}}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{route('web')}}">¸³ëÁÝÃ³óÝ»ñ</a></li>
                    <li class="breadcrumb-item active">HTML5 & CSS3 & BOOTSTRAP 4</li>
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
                                <img src="/lessons/img/htmlLogo.png">
                            </div>
                        </li>
                        <li>
                            <div class="courses-view-logo">
                                <img src="/lessons/img/cssLogo.png">
                            </div>
                        </li>
                        <li>
                            <div class="courses-view-logo">
                                <img src="/lessons/img/bootstrapLogo.png">
                            </div>
                        </li>
                    </ul>

                    <h2 class="text-center  py-4 px-3">HTML5 & CSS3 & BOOTSTRAP 4</h2>

                    <hr class="mb-0">

                    <!-- Accordion card -->
                    <div class="card courses-viev-accordion">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading4">
                            <a class="courses-view-accardion-title" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse1" aria-expanded="true"
                               aria-controls="collapse4">
                                <h4 class="mb-0 py-2 text-center">
                                    ¸³ë 1 ÆÝã ¿ í»µ Íñ³·ñ³íáñáõÙÁ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>ÆÝã ¿ í»µ Íñ³·ñ³íáñáõÙÁ</li>
                                    <li>ÆÝã ¿ í»µ Ï³ÛùÁ, ÇÝãå»ë ¿ ³ÛÝ ³ßË³ïáõÙ</li>
                                    <li>ÆÝã ¿ HTML-Á, HTML-Ç ÏÇñ³éáõÃÛáõÝÁ</li>
                                    <li>ÆÝã ¿ CSS-Á, CSS-Ç Ïñ³éáõÃÛáõÝÁ</li>
                                    <li>ÆÝã ¿ JavaScript-Á, JavaScript -Ç ÏÇñ³éáõÃÛáõÝÁ</li>
                                    <li>ÆÝã ¿ PHP-Ý, PHP-Ç ÏÇñ³éáõÃÛáõÝÁ</li>
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
                                    ¸³ë 2 HTML Ý»ñ³ÍáõÃÛáõÝ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>ÆÝã ¿ HTML-Á</li>
                                    <li>ÆÝã ¿ Ã»·Á, Ã»·»ñÇ ï»ë³ÏÝ»ñÁ</li>
                                    <li>ÆÝã ¿ ³ïñÇµáõïÁ</li>
                                    <li>HTML ¿çÇ ÑÇÙÝ³Ï³Ý Ï³éáõóí³ÍùÁ</li>
                                    <li>ØÇ ù³ÝÇ Ã»·»ñ</li>
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
                                    ¸³ë 3 Üß³·ñáõÙ: ²é³çÇÝ ù³ÛÉ»ñ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>Ð³ïáõÏ Ýß³ÝÝ»ñ</li>
                                    <li>²ÕÛáõë³ÏÝ»ñ</li>
                                    <li>üáñÙ³Ý»ñ</li>
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
                                    ¸³ë 4 Üß³·ñáõÙ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>Î³Ûù»ñÇ ÑÇÙÝ³Ï³Ý ëïñáõÏïáõñ³Ý</li>
                                    <li>¶ñ³ýÇÏ³Ï³Ý ËÙµ³·ñÇãÝ»ñ, Adobe Photoshop</li>
                                    <li>div ¿É»Ù»Ýï</li>
                                    <li>Üß³·ñáõÙ div ¾É»Ù»ÝïÝ»ñáí</li>
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
                                    ¸³ë 5 CSS Ý»ñ³ÍáõÃÛáõÝ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>ÆÝã ¿ CSS-Á</li>
                                    <li>CSS-Ç ëÇÝï³ùëÇëÁ</li>
                                    <li>CSS-Ç Ñ³Ûï³ñ³ñÙ³Ý »Õ³Ý³ÏÝ»ñÁ</li>
                                    <li>ê»É»ÏïáñÝ»ñ</li>
                                    <li>Ä³é³Ý·áõÃÛáõÝ, Ñ³ïÏáõÃÛáõÝÝ»ñ ËÙµ³íáñáõÙ</li>
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
                                    ¸³ë 6 CSS Ý»ñ³ÍáõÃÛáõÝ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>²Ûë ¹³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýùª</li>
                                    <li>overflow, position, top, right, left, bottom, Ñ³ïÏáõÃÛáõÝÝ»ñ</li>
                                    <li>PSD ý³ÛÉÇ Ýß³·ñáõÙ</li>
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
                                    ¸³ë 7 media Ñ³ñóáõÙÝ»ñ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>ÆÝãÇ Ñ³Ù³ñ »Ý ·ñ³ýÇÏ³Ï³Ý ËÙµ³·ñÇãÝ»ñÁ</li>
                                    <li>Adobe Photoshop ·ñ³ýÇÏ³Ï³Ý ËÙµ³·ñÇã</li>
                                    <li>Þ»ñï»ñ</li>
                                    <li>ÆÝãå»ë ×Çßï Ïïñ»É ÝÏ³ñÝ»ñ Ýß³·ñÙ³Ý Ñ³Ù³ñ</li>
                                    <li>²¹³åï³óíáÕ ¹Ç½³ÛÝ, media Ñ³ñóáõÙÝ»ñ</li>
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
                                    ¸³ë 8 BootStrap Ñ³ñóáõÙÝ»ñ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>ÆÝã ¿ BootStrap-Á ¨ ÇÝãÇ Ñ³Ù³ñ ¿ ³ÛÝ ÏÇñ³éíáõÙ</li>
                                    <li>ÆÝãå»ë ï»Õ³¹ñ»É BootStrap 4 Ñ»ÝùÁ(FrameWork)</li>
                                    <li>ò³Ýó»ñ</li>
                                    <li>ÎáÙåáÝ»ÝïÝ»ñ</li>
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
                                    ¸³ë 9 BootStrap customization: SASS
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse9" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>BootStrap. Customization. SASS ​</li>
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
                                    ¸³ë 10 BootStrap äñ³ÏïÇÏ ³ßË³ï³Ýù
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse10" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>BootStrap äñ³ÏïÇÏ ³ßË³ï³Ýù</li>
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
                                    ¸³ë 11 HTML5 Üáñ Ã»·»ñ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse11" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>ÆÝã ¿ HTML5-Á</li>
                                    <li>HTML5-Ç Ã»·»ñ</li>
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
                                    ¸³ë 12 CSS3 Ý»ñ³ÍáõÃÛáõÝ
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse12" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
                            <div class="card-body py-3">
                                <h5 class="text-center">¸³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù</h5>
                                <ol>
                                    <li>²Ûë ¹³ëÇ ÁÝÃ³óùáõÙ ÏáõëáõÙÝ³ëÇñ»Ýù CSS3 ï»ËÝáÉá·Ç³Ý</li>
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
