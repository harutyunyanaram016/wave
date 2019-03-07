<div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>@lang('global.Contact_us')</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <a href="tel:+374 77 78 97 86"><i class="fa fa-mobile"></i></a>
                            <p>
<!--                                Позвонить владельцу : +7 958 799 50 53<br>-->
<!--                                Позвонить менеджеру : +7 915 023 88 00-->
                                <!--@lang('global.Telephone') : @lang('global.Tel_1')<br>-->
                                <!--       <span>@lang('global.Tel_2')</span>-->
                                       <a href="tel:+7 915 023 88 00">@lang('global.Tel_2')</a><br>
                                       <a href="tel:+7 958 799 50 53">@lang('global.Tel_1')</a>

                            </p>
                        </div>
                    </div>
                </div>
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <a href="mailto:info@wave-it.ru"><i class="fa fa-envelope-o"></i></a>
                            <p>
                                <a href="mailto:info@wave-it.ru">@lang('global.Email') info@wave-it.ru</a> <br>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon text-center">
                            <i class="fa fa-map-marker"></i>
                            <p>
                                @lang('global.Location')

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Start Google Map -->
                <div class="col-md-6 col-sm-6 col-xs-12 location">
                    <!-- Start Map -->
                    @if(App::isLocale('en') || App::isLocale('hy'))
                    <!--<iframe src="https://yandex.ru/map-widget/v1/-/CBR4fGux~C" allowfullscreen="true" style="border:none;"></iframe>-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3047.459778275848!2d44.4885341153893!3d40.19883437939109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abd6beca25551%3A0x9192912c6f698e91!2s3+Hakob+Hakobyan+St%2C+Yerevan+0033!5e0!3m2!1sru!2s!4v1542179406201" style="border:0" allowfullscreen></iframe>
                    @else
                    <iframe src="https://yandex.ru/map-widget/v1/-/CBFZe6Rg9B" allowfullscreen="true" style="border:none;"></iframe>
                    @endif

                    <!--Google map-->
                    <div id="map-container" class="z-depth-1-half map-container mb-5">
                        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3047.3832299675355!2d44.533456715545874!3d40.20053747939076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abd2b1a589109%3A0x3b524ed217ab2cbb!2zMjMg1LTVodW-1avVqSDUsdW21bDVodWy1anVqyDWg9W41bLVuNaBLCDUtdaA1ofVodW2LCDVgNWh1bXVodW91b_VodW2!5e0!3m2!1shy!2s!4v1539942725022" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                    </div>
                    <!-- Uncomment below if you wan to use dynamic maps -->
                    <!-- End Map -->
                </div>
                <!-- End Google Map -->

                <!-- Start  contact -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form contact-form">
                        <form action="{{action('ContactController@store')}}" method="post" role="form" class="">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="@lang('global.Your_name')"
                                       data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                                <!-- <div class="validation"></div> -->
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="@lang('global.Your_email')" data-rule="email"
                                       data-msg="Please enter a valid email"/>
                                <!-- <div class="validation"></div> -->
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="@lang('global.Telephone')"
                                       data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
                                <!-- <div class="validation"></div> -->
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required"
                                          data-msg="Please write something for us" placeholder="@lang('global.Message')"></textarea>
                                <!-- <div class="validation"></div> -->
                            </div>
                            <div class="text-center">
                                <button type="submit">@lang('global.Send_message')</button>
                            </div>
                        </form>

                        <!--<div id="sendmessage">Your message has been sent. Thank you!</div>-->
                        <!--<div id="errormessage"></div>-->
                        <!--<form action="myform.php" method="post" role="form" class="contactForm">-->
                        <!--  <div class="form-group">-->
                        <!--    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />-->
                        <!--    <div class="validation"></div>-->
                        <!--  </div>-->
                        <!--  <div class="form-group">-->
                        <!--    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />-->
                        <!--    <div class="validation"></div>-->
                        <!--  </div>-->
                        <!--  <div class="form-group">-->
                        <!--    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />-->
                        <!--    <div class="validation"></div>-->
                        <!--  </div>-->
                        <!--  <div class="form-group">-->
                        <!--    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>-->
                        <!--    <div class="validation"></div>-->
                        <!--  </div>-->
                        <!--  <div class="text-center"><button type="submit">Send Message</button></div>-->
                        <!--</form>-->
                    </div>
                </div>
                <!-- End Left contact -->
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->
<!-- Start Footer bottom Area -->
<footer>
    <div class="footer-area-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-icons">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/Wave-It-180752426136908/" target="_blank"><i
                                            class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/wave_it.ru/?hl=ru" target="_blank"><i
                                            class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://vk.com/it_wave_it" target="_blank"><i class="fa fa-vk"></i></a>
                            </li>
                            <!-- <li>
                                <a href="#" target="_blank"><i class="fa fa-google"></i></a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="copyright text-center">
                        <p>
                             <?php echo date('Y');?><strong> <a href="#">Wave IT</a> </strong>
                        </p>
						<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=51770639&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://metrika-informer.com/informer/51770639/3_1_FFFFFFFF_EFEFEFFF_0_visits"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="51770639" data-lang="ru" /></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym");

   ym(51770639, "init", {
        id:51770639,
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/51770639" style="position:absolute; left:-9999px;" alt="Wave IT" /></div></noscript>
<!-- /Yandex.Metrika counter -->
                    </div>
                    <div class="credits">

                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="modal in" id="call" tabindex="-1" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">

					<div class="modal-header">
<a href="#" data-dismiss="modal"><i class="fa fa-close"></i></a>
					</div>
					<div class="modal-body">
<form action="{{route('order_mail_post')}}" method="post" role="form" class="reg">
    {{ csrf_field() }}
	<div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="@lang('global.Your_name')"
                                       data-rule="minlen:4" data-msg="Please enter at least 4 chars"  required />
                                <!-- <div class="validation"></div> -->
                            </div>
	<div class="form-group">
                                <input type="text" class="form-control" name="phone" id="subject" placeholder="@lang('global.Telephone')"
                                       data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"  required />
                                <!-- <div class="validation"></div> -->
                            </div>
							<div class="text-center">
                                <button type="submit" class="btn-call">@lang('global.Send')</button>
                            </div>
</form>
					</div>
					<div class="modal-footer">

					</div>

			</div>

		</div>
	</div>

</footer>

<div class='tel'><a class="call-us" href="tel:+37477789786"><i class="fa fa-phone"></i></a></div>
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

