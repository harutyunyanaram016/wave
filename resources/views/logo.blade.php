@extends('layouts.lbase')

@section('content')
<section class="container sectionMargin">
<div class="row">
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{route('index')}}">@lang('global.Home')</a>
    </li>
    <li class="breadcrumb-item active">@lang('global.logo')</li>
</ol>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
            <h2>@lang('global.logo')</h2>
        </div>
    </div>
</div>

<div class="d-flex justify-content-around">

            <div id="contentWrapper">
                <ul>
                    <li style="background-image: url('img/logo/1.png')"></li>
                    <li style="background-image: url('img/logo/2.jpg')"></li>
					<li style="background-image: url('img/logo/3.jpg')"></li>
					<li style="background-image: url('img/logo/4.jpg')"></li>
					<li style="background-image: url('img/logo/5.jpg')"></li>
					<li style="background-image: url('img/logo/6.jpg')"></li>
					<li style="background-image: url('img/logo/7.jpg')"></li>
					<li style="background-image: url('img/logo/8.png')"></li>
					<li style="background-image: url('img/logo/9.jpg')"></li>
					<li style="background-image: url('img/logo/10.jpg')"></li>
					<li style="background-image: url('img/logo/11.jpg')"></li>
					<li style="background-image: url('img/logo/12.jpg')"></li>
					
                </ul>
            </div>
    		<div id="dark"></div>
    		<div id="lightbox"></div>
        </div>

</section>
@endsection

@section('altlinks')


<!-- //js -->
<!-- simpleLightbox -->

<script>
    $("#contentWrapper li").click(function() {
// 	console.log($(this).css("background-image"));

	//grabs the image url of that particular image
	imgUrl = $(this).css("background-image");

		//replaces the image url of the last image shown in the lightbox with the current image
		$("#lightbox").css("background-image", imgUrl);
		//shows the updated lightbox that has been hidden
		$("#dark").fadeIn();
		$("#lightbox").fadeIn("slow");
});

$("#lightbox").click(function(){
	//hides the lightbox so we can go back to the page
	$("#dark").fadeOut();
	$("#lightbox").fadeOut("slow");
});


</script>

@endsection