@extends('layouts.cbase')

@section('content')
<section class="container sectionMargin">
<div class="row">
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{route('index')}}">@lang('global.Home')</a>
    </li>
    <li class="breadcrumb-item active">@lang('global.card')</li>
</ol>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
            <h2>@lang('global.card')</h2>
        </div>
    </div>
</div>
<div class="d-flex justify-content-around">

        <div id="contentWrapper">
            <ul>
                <li style="background-image: url('img/card/1.jpg')"></li>
                <li style="background-image: url('img/card/2.jpg')"></li>
              
				<li style="background-image: url('img/card/4.jpg')"></li>
				<li style="background-image: url('img/card/5.jpg')"></li>
				<li style="background-image: url('img/card/6.jpg')"></li>
                <li style="background-image: url('img/card/7.jpg')"></li>
                <li style="background-image: url('img/card/8.jpg')"></li>
				<li style="background-image: url('img/card/9.jpg')"></li>
				<li style="background-image: url('img/card/10.jpg')"></li>
            </ul>
        </div>
		<div id="dark"></div>
		<div id="lightbox"></div>
        </div>
    </div>
</div> 


</section>
<!-- //js -->
<!-- simpleLightbox -->
@endsection

@section('altlinks')
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
