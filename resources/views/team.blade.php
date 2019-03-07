@extends('layouts.tbase')

@section('content')
<!-- Start team Area -->
    <section class="sectionMargin">
        <div id="team" class="our-team-area area-padding sectionMargin">
    <div class="container">
        <div class="row">
				<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{route('index')}}">@lang('global.Home')</a>
    </li>
    <li class="breadcrumb-item active">@lang('global.Team')</li>
</ol>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>@lang('global.Special_team')</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="team-top clearfix swiper-container">
                <div class="swiper-wrapper swiper_items">
                    <div class="swiper-slide team_item">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="img/team/1.jpg" alt="Wave-it տնօրեն">
                                </a>
                                <div class="team-social-icon text-center">
                                    <ul>
                                        <!--<li>-->
                                        <!--    <a href="https://www.facebook.com/arshbabayan" target="_blank">-->
                                        <!--        <i class="fa fa-facebook"></i>-->
                                        <!--    </a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                        <!--    <a href="https://vk.com/id307266562" target="_blank">-->
                                        <!--        <i class="fa fa-vk"></i>-->
                                        <!--    </a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                        <!--    <a href="https://www.instagram.com/arshak_babayan91/?hl=ru" target="_blank">-->
                                        <!--        <i class="fa fa-instagram"></i>-->
                                        <!--    </a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                        <!--    <a href="#" target="_blank">-->
                                        <!--        <i class="fa fa-linkedin"></i>-->
                                        <!--    </a>-->
                                        <!--</li>-->
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>@lang('global.Arshak')</h4>
                                <p>@lang('global.Arshak_pos')</p>
                                <div class="team_description">@lang('global.Arshak_desc')</div>
                            </div>
                        </div>
                    </div>
                    <!-- End column -->
                    <div class="swiper-slide team_item">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="img/team/3.jpg" alt="Wave-it փոխտնօրեն">
                                </a>
                                <div class="team-social-icon text-center">
                                    <ul>
                                        <!--<li>-->
                                        <!--    <a href="https://www.facebook.com/vahagn.tadevosyan.71" target="_blank">-->
                                        <!--        <i class="fa fa-facebook"></i>-->
                                        <!--    </a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                        <!--    <a href="#" target="_blank">-->
                                        <!--        <i class="fa fa-vk"></i>-->
                                        <!--    </a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                        <!--    <a href="#" target="_blank">-->
                                        <!--        <i class="fa fa-instagram"></i>-->
                                        <!--    </a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                        <!--    <a href="#" target="_blank">-->
                                        <!--        <i class="fa fa-linkedin"></i>-->
                                        <!--    </a>-->
                                        <!--</li>-->
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>@lang('global.Vahag')</h4>
                                <p>@lang('global.Vahag_pos')</p>
                                <div class="team_description">@lang('global.Vahag_desc')</div>
                            </div>
                        </div>
                    </div>
                    <!-- End column -->
                    <div class="swiper-slide team_item">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="img/team/2.jpg" alt="Wave-it մարքեթոլոգ">
                                </a>
                                <div class="team-social-icon text-center">
                                    <ul>
                                        <!--<li>-->
                                        <!--    <a href="https://www.facebook.com/Wave-It-180752426136908/" target="_blank">-->
                                        <!--        <i class="fa fa-facebook"></i>-->
                                        <!--    </a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                        <!--    <a href="https://vk.com/it_wave_it" target="_blank">-->
                                        <!--        <i class="fa fa-vk"></i>-->
                                        <!--    </a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                        <!--    <a href="https://www.instagram.com/wave_it.ru/?hl=ru" target="_blank">-->
                                        <!--        <i class="fa fa-instagram"></i>-->
                                        <!--    </a>-->
                                        <!--</li>-->
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>@lang('global.Violetta')</h4>
                                <p>@lang('global.Violetta_pos')</p>
                                <div class="team_description">@lang('global.Violetta_desc')</div>
                            </div>
                        </div>
                    </div>
                    <!-- End column -->
                    <div class="swiper-slide team_item">
                    <div class="single-team-member">
                        <div class="team-img">
                            <a href="#">
                                <img src="img/team/5.jpg" alt="կայքի պատրաստման մասնագետ,">
                            </a>
                            <div class="team-social-icon text-center">
                                <ul>
                                    <!--<li>-->
                                    <!--    <a href="https://https://www.facebook.com/Wave-It-180752426136908/" target="_blank">-->
                                    <!--        <i class="fa fa-facebook"></i>-->
                                    <!--    </a>-->
                                    <!--</li>-->
                                    <!--<li>-->
                                    <!--    <a href="https://vk.com/it_wave_it" target="_blank">-->
                                    <!--        <i class="fa fa-vk"></i>-->
                                    <!--    </a>-->
                                    <!--</li>-->
                                    <!--<li>-->
                                    <!--    <a href="https://www.instagram.com/wave_it.ru/?hl=ru" target="_blank">-->
                                    <!--        <i class="fa fa-instagram"></i>-->
                                    <!--    </a>-->
                                    <!--</li>-->
                                </ul>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4>@lang('global.Mariam')</h4>
                            <p>@lang('global.Mariam_pos')</p>
                            <div class="team_description">@lang('global.Mariam_desc')</div>
                        </div>
                    </div>
                </div>
                <!-- End column -->
                <div class="swiper-slide team_item">
                    <div class="single-team-member">
                        <div class="team-img">
                            <a href="#">
                                <img src="img/team/Robert.jpg" alt="CMS մասնագետ">
                            </a>
                            <div class="team-social-icon text-center">
                                <ul>
                                    <!--<li>-->
                                    <!--    <a href="https://www.facebook.com/Wave-It-180752426136908/" target="_blank">-->
                                    <!--        <i class="fa fa-facebook"></i>-->
                                    <!--    </a>-->
                                    <!--</li>-->
                                    <!--<li>-->
                                    <!--    <a href="https://vk.com/it_wave_it" target="_blank">-->
                                    <!--        <i class="fa fa-vk"></i>-->
                                    <!--    </a>-->
                                    <!--</li>-->
                                    <!--<li>-->
                                    <!--    <a href="https://www.instagram.com/wave_it.ru/?hl=ru" target="_blank">-->
                                    <!--        <i class="fa fa-instagram"></i>-->
                                    <!--    </a>-->
                                    <!--</li>-->
                                </ul>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4>@lang('global.Robert')</h4>
                            <p>@lang('global.Robert_pos')</p>
                            <div class="team_description">@lang('global.Robert_desc')</div>
                        </div>
                    </div>
                </div>
                <!-- End column -->
                <!--<div class="swiper-slide team_item">-->
                <!--    <div class="single-team-member">-->
                <!--        <div class="team-img">-->
                <!--            <a href="#">-->
                <!--                <img src="img/team/Aram.jpg" alt="">-->
                <!--            </a>-->
                <!--            <div class="team-social-icon text-center">-->
                <!--                <ul>-->
                <!--                    <li>-->
                <!--                        <a href="https://www.facebook.com/may.movsisyan" target="_blank">-->
                <!--                            <i class="fa fa-facebook"></i>-->
                <!--                        </a>-->
                <!--                    </li>-->
                <!--                    <li>-->
                <!--                        <a href="#" target="_blank">-->
                <!--                            <i class="fa fa-vk"></i>-->
                <!--                        </a>-->
                <!--                    </li>-->
                <!--                    <li>-->
                <!--                        <a href="https://www.instagram.com/may_movsisyan/?hl=ru" target="_blank">-->
                <!--                            <i class="fa fa-instagram"></i>-->
                <!--                        </a>-->
                <!--                    </li>-->
                <!--                </ul>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="team-content text-center">-->
                <!--            <h4>@lang('global.Aram')</h4>-->
                <!--            <p>@lang('global.Aram_pos')</p>-->
                <!--            <div class="team_description">@lang('global.Aram_desc')</div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!-- End column -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>
    </section>
<!-- End Team Area -->
@endsection
