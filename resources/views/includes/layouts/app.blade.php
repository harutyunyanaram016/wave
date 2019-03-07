<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('site/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
    @yield('css')
</head>

<body>
<!--   left part-->
<?php
use Illuminate\Support\Facades\Session;
use App\Category;

$categories = Category::whereNull('parent_id')->get();
if (Session::has('cart')) {

    $cart = Session::get('cart');

} else {

    $cart = null;

}

$lang =  App::getLocale();
if($lang == 'hy'){
    $languages = array(
        '0'=>array(
            'url'=>route('lanuage',['locale'=>'hy']),
            'image'=>asset('/site/images/arm_flag.png')
        ),
        '1'=>array(
            'url'=>route('lanuage',['locale'=>'ru']),
            'image'=>asset('/site/images/lang_ru.png')
        ),
        '2'=>array(
            'url'=>route('lanuage',['locale'=>'en']),
            'image'=>asset('/site/images/2.png')
        ),
        '3'=>array(
            'url'=>route('lanuage',['locale'=>'ka']),
            'image'=>asset('/site/images/georgia_flag.png')
        ),
    );
}
elseif ($lang == 'ru'){
    $languages = array(
        '0'=>array(
            'url'=>route('lanuage',['locale'=>'ru']),
            'image'=>asset('/site/images/lang_ru.png')
        ),
        '1'=>array(
            'url'=>route('lanuage',['locale'=>'hy']),
            'image'=>asset('/site/images/arm_flag.png')
        ),

        '2'=>array(
            'url'=>route('lanuage',['locale'=>'en']),
            'image'=>asset('/site/images/2.png')
        ),
        '3'=>array(
            'url'=>route('lanuage',['locale'=>'ka']),
            'image'=>asset('/site/images/georgia_flag.png')
        ),
    );
}
elseif ($lang == 'en'){
    $languages = array(
        '0'=>array(
            'url'=>route('lanuage',['locale'=>'en']),
            'image'=>asset('/site/images/2.png')
        ),
        '1'=>array(
            'url'=>route('lanuage',['locale'=>'hy']),
            'image'=>asset('/site/images/arm_flag.png')
        ),
        '2'=>array(
            'url'=>route('lanuage',['locale'=>'ru']),
            'image'=>asset('/site/images/lang_ru.png')
        ),

        '3'=>array(
            'url'=>route('lanuage',['locale'=>'ka']),
            'image'=>asset('/site/images/georgia_flag.png')
        ),
    );
}
else {
    $languages = array(
        '0'=>array(
            'url'=>route('lanuage',['locale'=>'ka']),
            'image'=>asset('/site/images/georgia_flag.png')
        ),
        '1'=>array(
            'url'=>route('lanuage',['locale'=>'hy']),
            'image'=>asset('/site/images/arm_flag.png')
        ),
        '2'=>array(
            'url'=>route('lanuage',['locale'=>'ru']),
            'image'=>asset('/site/images/lang_ru.png')
        ),
        '3'=>array(
            'url'=>route('lanuage',['locale'=>'en']),
            'image'=>asset('/site/images/2.png')
        ),
    );
}
$pages = DB::table('static_pages')->get();


?>

<div class="mega display-n-sm">
    <div class="left-part animate-children" id="leftMenu">
        <div class="left-part-navbar animate-children">
            <div class="logo-part">
                <div class="menu-button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </div>
            </div>
            <div class="sidebar animate-children">
                <ul class="list-unstyled head-menu ">
                    <li class="menu ">
                        <a href="{{route('anounce')}}" class="sidebar-menu-item">
                            <span class="menu-icon">
                                <img src="/site/images/anounce.png" alt="" >
                          </span>
                            <span>@lang('global.Announcements') </span>
                        </a>
                    </li>
                    <li class="menu ">
                        <a href="{{route('brand')}}" class="sidebar-menu-item">
                            <span class="menu-icon">
                                <img src="/site/images/advr.png" alt="" >
                          </span>
                            <span>@lang('global.Advertisement')</span>
                        </a>
                    </li>

                    <li class="menu  ">
                        <a href="{{route('contact')}}" class="sidebar-menu-item">
                            <span class="menu-icon">
                                <img src="/site/images/1433161004-3131.png" alt="">
                            </span>
                            <span>@lang('global.Contact_us')</span>
                        </a>
                    </li>
                    <li class="menu ">
                        <a href="{{route('orders')}}" class="sidebar-menu-item">
                            <span class="menu-icon">
                                <img src="/site/images/product.png" alt="" >
                          </span>
                            <span>@lang('global.Orders_history') </span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
<!--  end left part-->
<!--   mobile menu-->

<div class="left-part d-lg-none" id="leftMenu1">
    <div class="left-part-navbar ">
        <div class="logo-part">
            <div class="menu-button1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </div>
        </div>
        <div class="sidebar animate-children">
            <ul class="list-unstyled head-menu ">
                <li class="menu">
                    <a href="{{route('mainpage')}}" class="sidebar-menu-item">
                            <span class="menu-icon">
                                <img src="/site/images/home.png" alt="" >
                          </span>
                        <span>@lang('global.Home') </span>
                    </a>

                </li>
                @if(!empty($pages) && count($pages))
                    @foreach($pages as $page)
                        <li class="menu ">
                            <a href="{{route('staticPage',['url'=>$page->url])}}" class="sidebar-menu-item">
                                <span class="menu-icon">
                                    <img src="/site/images/1433160896-8873.png" alt="">
                                </span>
                                <span>
                                    @if(App::getLocale() == 'ru')
                                        {{$page->title_ru}}
                                    @elseif(App::getLocale() == 'en')
                                        {{$page->title_en}}
                                    @elseif(App::getLocale() == 'ka')
                                        {{$page->title_ka}}
                                    @else
                                        {{$page->title}}
                                    @endif
                                </span>
                            </a>
                        </li>

                    @endforeach
                @endif



                <li class="menu  ">
                    <a href="{{route('products.news')}}" class="sidebar-menu-item">
                            <span class="menu-icon">
                                <img src="/site/images/news.png" alt="">
                            </span>
                        <span>@lang('global.News')</span>
                    </a>
                </li>
                <li class="menu">
                    <a href="{{route('products.categories')}}" class="sidebar-menu-item">
                            <span class="menu-icon">
                                <img src="/site/images/product.png" alt="" >
                            </span>
                        <span>@lang('global.Goods')</span>
                    </a>
                </li>
                <li class="menu ">
                    <a href="{{route('anounce')}}" class="sidebar-menu-item">
                            <span class="menu-icon">
                                <img src="/site/images/anounce.png" alt="" >
                          </span>
                        <span>@lang('global.Announcements') </span>
                    </a>
                </li>
                <li class="menu ">
                    <a href="{{route('orders')}}" class="sidebar-menu-item">
                            <span class="menu-icon">
                                <img src="/site/images/product.png" alt="" >
                          </span>
                        <span>@lang('global.Orders_history') </span>
                    </a>
                </li>
                <li class="menu ">
                    <a href="{{route('brand')}}" class="sidebar-menu-item">
                            <span class="menu-icon">
                                <img src="/site/images/advr.png" alt="" >
                          </span>
                        <span>@lang('global.Advertisement') </span>
                    </a>
                </li>

                <li class="menu  ">
                    <a href="{{route('products.bonus')}}" class="sidebar-menu-item">
                            <span class="menu-icon">
                                <img src="/site/images/advr.png" alt="">
                            </span>
                        <span>@lang('global.Bonus_system')</span>
                    </a>
                </li>
                <li class="menu  ">
                    <a href="{{route('products.videos')}}" class="sidebar-menu-item">
                            <span class="menu-icon">
                                <img src="/site/images/1433160960-0404.png" alt="">
                            </span>
                        <span>@lang('global.Photos_and_videos')  </span>
                    </a>
                </li>
                @guest
                <li class="menu" >
                    <a href="{{route('login')}}" class="sidebar-menu-item">
                            <span class="menu-icon">
                                <img src="/site/images/login.png" alt="" >
                            </span>
                        <span>@lang('global.Login')</span>
                    </a>
                </li>
                <li class="menu" data-toggle="modal" data-target="#loginRegister">
                    <a href="{{route('register')}}" class="sidebar-menu-item">
                            <span class="menu-icon">
                                <img src="/site/images/register.png" alt="" >
                            </span>
                        <span>@lang('global.Registration')</span>
                    </a>
                </li>
                @else
                    <li class="menu" >
                        <a href="#"  onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="sidebar-menu-item">
                            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">

                                {{ csrf_field() }}

                            </form>
                            <span class="menu-icon">
                                <img src="/site/images/login.png" alt="" >
                            </span>
                            <span>@lang('global.Logout')</span>
                        </a>
                    </li>
                @endguest

                <li class="menu">
                    <a href="{{route('contact')}}" class="sidebar-menu-item">
                            <span class="menu-icon">
                                <img src="/site/images/1433161004-3131.png" alt="" >
                            </span>
                        <span>@lang('global.Contact_us')</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--  mobile menu-->

<!--    header-->
<header>
    <div class="container">
        <div class="row header animate-children">
            <div class="col-lg-9 col-md-12 col-sm-12 d-flex align-items-center resp-flex-column">
                <div class="d-flex align-items-center">
                    <div class="logo"><a href="{{route('mainpage')}}"><img src="/site/images/logoLast.png" alt="" ></a></div>
                    <div class="search ">
                        <form action="{{route('products.search')}}">
                            <input class="input-text" type="text" name="search" placeholder="@lang('global.Search_by')">
                            <input class="submit" type="submit" value="">
                        </form>
                    </div>

                </div>


                @guest
                    <div class="d-flex display-n-sm ">
                        <div class="login-table">
                            <a href="{{route('login')}}" id="head-entry" class="login-col"><span class="FontAwesome before-text"></span>@lang('global.Login')</a>
                        </div>
                        <div class="containerModal">
                            <a href="{{route('register')}}" id="head-entry" class="login-col"><span class="FontAwesome before-text"></span>@lang('global.Registration')</a>
                        </div>
                    </div>
                @else
                    <div class="d-flex  ">
                        <div class="login-table">
                            <div class="user"> {{\Illuminate\Support\Facades\Auth::user()->name}} {{\Illuminate\Support\Facades\Auth::user()->surname}}    </div>
                        </div>
                        <div class="containerModal">
                            <a  id="head-entry" href="#"  onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="login-col"><span class="icon-sign-out"></span>@lang('global.Logout')</a>
                        </div>
                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">

                            {{ csrf_field() }}

                        </form>
                    </div>

                @endguest

            </div>

            <div class="col-lg-3 col-md-12 col-sm-12 d-flex align-items-center justify-content-end resp">

                <div class="head-basket">
                    <div class="basket-block d-flex align-items-center">
                        <div class="d-flex align-items-center basket">

                            <div ><img class="icon-cart my-cart-icon" src="/site/images/head-basket.png" alt=""><span class="badge badge-notify my-cart-badge"> @if(isset($cart->totalQty)) {{$cart->totalQty}} @else 0 @endif</span> </div> <a href="{{route('orders.show')}}">@lang('global.basket')</a>
                            <div class="basket-content" id="bascet_content">

                                @if(isset($cart) && $cart->totalQty>0)
                                    <table>
                                        <thead>
                                        <tr>
                                            <th rowspan="1">&nbsp;</th>
                                            <th rowspan="1"> @lang('global.Name') </th>
                                            <th colspan="1">  @lang('global.Code') </th>
                                            <th rowspan="1"> @lang('global.Price')</th>
                                            <th colspan="1"> @lang('global.Total')  <br> (դր)</th>
                                            <th rowspan="1">&nbsp;</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($cart->items as $item)

                                            <tr>
                                                <td rowspan="1">
                                                    <img src="{{asset($item['item']->firstImage())}}" alt="">
                                                </td>
                                                <td rowspan="1">{{$item['item']->name()}}</td>
                                                <td rowspan="1" class="price"> {{$item['item']->userPprice()}}</td>
                                                <td rowspan="1">
                                                    {{$item['qty']}}
                                                </td>
                                                <td rowspan="1" class="total"> {{$item['qty']*$item['item']->userPprice()}} </td>
                                                <td rowspan="1"><span data-id="{{$item['item']->id}}" data-count="{{$item['qty']}}" class="icon-cross" data-item-index="0"></span></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    @lang('global.basket_is_empty')

                                @endif
                            </div>
                        </div>
                        <div class="change_lang change_lang_adapt">
                            <div class="langdown">
                                @foreach($languages as $key =>$language)
                                    <div data-id="{{$key}}" class="lang">
                                        <a data-id="{{$language['url']}}"  title="" class="flag"><img src="{{$language['image']}}" alt="">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-lg-block display-n">
            <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center ">
                <ul class="top-menu d-flex list-unstyled animate-children">
                    <li class=""><a href="{{route('mainpage')}}" class="root-item menuBg_1 hvr-underline-from-left">@lang('global.Home')</a> </li>

                    @if(!empty($pages) && count($pages))
                        @foreach($pages as $page)

                            <li class=""><a href="{{route('staticPage',['url'=>$page->url])}}" class="root-item menuBg_2 hvr-underline-from-left">
                                    @if(App::getLocale() == 'ru')
                                        {{$page->title_ru}}
                                    @elseif(App::getLocale() == 'en')
                                        {{$page->title_en}}
                                    @elseif(App::getLocale() == 'ka')
                                        {{$page->title_ka}}
                                    @else
                                        {{$page->title}}
                                    @endif
                                </a> </li>
                        @endforeach
                    @endif

                    <li> <a href="{{route('products.news')}}" class="root-item menuBg_3 hvr-underline-from-left">@lang('global.News') </a> </li>
                    <li><a href="{{route('products.categories')}}" class="root-item menuBg_4 hvr-underline-from-left">@lang('global.Goods') </a> </li>
                    <li> <a href="{{route('products.videos')}}" class="root-item menuBg_5 hvr-underline-from-left">@lang('global.Photos_and_videos') </a> </li>
                    <li> <a href="{{route('products.bonus')}}" class="root-item menuBg_6 hvr-underline-from-left">@lang('global.Bonus_system')</a> </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!--    end header-->

<!--  top  slider section-->
<div class="main-content">
    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="d-flex align-items-center resp-flex-md-column ">
                        <div class="phone"> <div class="tel"><span class="icon-phone"></span> </div><div><strong>+ 374 ( 41 ) 56 - 96 - 95</strong> </div></div>

                    </div>
                    <div class="subscribe d-flex align-items-center">
                        {{--<span>    @lang('global.Subscribe') <br>մեր կայքում </span>--}}
                        {{--<form action="/" class="relative-block">--}}
                            {{--<input type="email" name="email" class="input-text" placeholder="Ձեր էլ-փոստը">--}}
                            {{--<button type="submit" class="submit" name="Save" value="Подписаться"></button>--}}
                        {{--</form>--}}
                        <div class="d-flex justify-center ">
                            <div class="">
                                <span class="label">@lang('global.networks')</span>
                                <span class="links">
                                        <a href="#"  target="_blank"><img src="/site/images/fb.png" alt=""></a>
                                        <a href="#" target="_blank"><img src="/site/images/vk.png" alt=""></a>
                                        <a href="#"  target="_blank"><img src="/site/images/yt.png" alt=""></a>
                                        <a href="#"  target="_blank"><img src="/site/images/instagram.png" alt=""></a>
                            </span>
                            </div>

                        </div>

                    </div>
                    <div class="copy">
                        © 2003-2018 @lang('global.Sion_Group_llc')։ <br> @lang('global.All_wave')։ </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="right-menu d-flex">
                        <ul class="footer-menu animate-children">
                            <li><a href="{{route('mainpage')}}" class="hvr-underline-from-left">@lang('global.Home')</a></li>
                            @if(!empty($pages) && count($pages))
                                @foreach($pages as $page)

                                   
                                    <li><a href="{{route('staticPage',['url'=>$page->url])}}" class="hvr-underline-from-left">
                                            @if(App::getLocale() == 'ru')
                                                {{$page->title_ru}}
                                            @elseif(App::getLocale() == 'en')
                                                {{$page->title_en}}
                                            @elseif(App::getLocale() == 'ka')
                                                {{$page->title_ka}}
                                            @else
                                                {{$page->title}}
                                            @endif
                                        </a> </li>
                                @endforeach
                            @endif

                            <li><a href="{{route('products.news')}}" class="hvr-underline-from-left">@lang('global.News')</a></li>
                            <li><a href="{{route('products.videos')}}" class="hvr-underline-from-left">@lang('global.Photos_and_videos')</a></li>
                            <li><a href="{{route('anounce')}}" class="hvr-underline-from-left">@lang('global.Advertisement')</a></li>
                            <li><a href="{{route('contact')}}" class="hvr-underline-from-left">@lang('global.Contact_us')</a></li>
                            <li><a href="{{route('products.bonus')}}" class="hvr-underline-from-left">@lang('global.Bonus_system')</a></li>
                        </ul>
                        <ul class="footer-menu footer-menu-second animate-children">
                            <li><a href="{{route('products.categories')}}" class="hvr-underline-from-left"><strong>@lang('global.Goods')</strong></a>
                            </li>
                            @foreach($categories as $category)
                                <li><a href="{{route('products.category',['subcategory'=>$category->id])}}" class="hvr-underline-from-left">{{$category->locName()}}</a></li>
                            @endforeach
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </footer>
</div>
<!--end main conent-->

<!-- Modal Login register -->

<script src="{{asset('site/js/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('site/js/bootstrap.js')}}"></script>
<script src="{{asset('site/js/slick.min.js')}}"></script>
<script src="{{asset('site/js/jquery.mycart.js')}}"></script>
<script src="{{asset('site/js/script.js')}}"></script>

<script>
    $(function () {

        $(".lang").click(function () {

            let id = $(this).attr('data-id');
            let url = $(this).children().eq(0).attr('data-id');

            if(id != 0){
                window.location.href = url;
            }
        })



        $('.my-cart-btn').on('click', function(ev) {
            ev.preventDefault();
            var self = $(this);
            var id = self.data('id');
            var $cartIcon = $(".icon-cart.my-cart-icon");
            var $image = $('<img style="width: 30px; height: 30px;" src="' + self.data("image") + '"/>').css({
                "position": "fixed",
                "z-index": "999",
                "right": '300'
            });
            var count = Number($(".my-cart-badge").text())
            self.prepend($image);
            var position = $cartIcon.offset();
            console.log(position)
            $.ajax({
                url: "/products/addProductsToCart",
                type: "POST",
                data: {_token:$('[name="csrf_token"]').attr('content'),id:id,qty:1},
                dataType: "html",
                success: function(data){
                    console.log(Number($(".my-cart-badge").text()));
                    $("#bascet_content").html(data);
                    $(".my-cart-badge").text(count+1);

                }

            });
            $image.animate({
                top: 0,//position.top,
                 right: '400'
            }, 500, "linear", function() {
                $image.remove();
            });
        })

        $("#prRange").on('change', function() {
            let pr = this.value;
            $(".pr>span").text(pr);
        })
        $(".pr>span").text(1000);
        $("body").on('click','.icon-cross',function() {

            let self = $(this).parent().parent().parent()
            let id = $(this).attr('data-id')
            let count2 = Number($(this).attr('data-count'));
            $.ajax({
                url: "/products/deleteProductsFromCart",
                type: "POST",
                data: {_token:$('[name="csrf_token"]').attr('content'),id:id,qty:$(this).attr('data-count')},
                dataType: "html",
                success: function(data){
                    $("#bascet_content").html(data);
                    self.remove();

                    $('.icon-cross[data-id="'+id+'"]').parent().parent().parent().remove();
                    let count = 0;

                    if(Number($(".my-cart-badge").text())- count2 > 0){
                        count = Number($(".my-cart-badge").text())-count2;

                    }
                    $(".my-cart-badge").html(count);


                }

            });
            // $("body").find("tr").eq(index).hide();
            // $("body").find("tr").eq(index).find("td.total").html("");
            var newTotal = 0;
            $("body").find(".total").each(function() {
                let price = $(this).text();
                newTotal = newTotal + +price;
                $("body").find(".sum > span").html(newTotal);

            });

        })

    });
</script>
@yield('script')

</body>

</html>