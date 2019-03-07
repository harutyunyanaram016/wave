@extends('layouts.base')

@section('content')



<!-- Start About area -->
<div id="about" class="about-area area-padding sectionMargin">
    <div class="container" style="sectionMargin">
        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="section-headline text-center">
                    <h2>Error 404</h2>
                </div>
                <p>
                   Sorry, the page you are looking for could not be found.
                </p>
                <a href="{{route('index')}}">@lang('global.Home')</a>
            </div>
        </div>

        </div>
    </div>
</div>
<!-- End About area -->





@endsection