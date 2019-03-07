@extends('layouts.base')

@section('content')

    <main>

        <div class="container pt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('mainpage')}}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item active">Î³å</li>
                </ol>
            </nav>
        </div>

        <section class="contacts py-2 py-md-4" id="contacts">
            <h2 class="text-center service__title pb-5">
                <span>Ð»ï³¹³ñÓ Î³å</span>
            </h2>

            <div class="container">
                <div class="d-flex justify-content-around">
                    <div class="contactBox text-center">
                        <div class="icon d-flex">
                            <i class="fa fa-mobile m-auto" aria-hidden="true"></i>
                        </div>
                        <p>+374 95 78 97 86</p>
                        <p>+374 77 78 97 86</p>
                    </div>

                    <div class="contactBox text-center">
                        <div class="icon d-flex">
                            <i class="fa fa-envelope m-auto" aria-hidden="true"></i>
                        </div>
                        <p>¾É. Ñ³ëó»ª info@wave-it.ru </p>
                    </div>

                    <div class="contactBox text-center">
                        <div class="icon d-flex">
                            <i class="fa fa-map-marker m-auto" aria-hidden="true"></i>
                        </div>
                        <p>Ð³ëó»ª Ð³Ïáµ Ð³ÏáµÛ³Ý 3</p>
                    </div>
                </div>

                <div class="row align-items-center py-4">
                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3047.459778275848!2d44.4885341153893!3d40.19883437939109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abd6beca25551%3A0x9192912c6f698e91!2s3+Hakob+Hakobyan+St%2C+Yerevan+0033!5e0!3m2!1sru!2s!4v1542179406201" style="border:0; width: 100%; height: 410px;" allowfullscreen=""></iframe>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <div class="md-form my-3">
                                <input type="text" id="form1" class="form-control">
                                <label for="form1">²ÝáõÝ</label>
                            </div>

                            <div class="md-form my-3">
                                <input type="text" id="form2" class="form-control">
                                <label for="form2">¾É. Ñ³ëó»</label>
                            </div>

                            <div class="md-form my-3">
                                <input type="text" id="form3" class="form-control">
                                <label for="form3">Ð»é.</label>
                            </div>

                            <div class="md-form">
                                <textarea type="text" id="form7" class="md-textarea form-control" rows="3"></textarea>
                                <label for="form7">Ð³Õáñ¹³·ñáõÃÛáõÝ</label>
                            </div>

                            <button class="button">àõÕÕ³ñÏ»É <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <div id="particles-js" class="particle"></div>

@endsection
