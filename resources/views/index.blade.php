<x-layout>

    <section id="banner_section"
             class="banner_section software_banner deco_wrap d-flex align-items-center text-white clearfix">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">

                <div class="col-lg-5 order-last">
                    <div class="banner_image scene">
                        <div class="big_image">
                            <div class="layer" data-depth="0.2">
                                <div data-aos="fade-up" data-aos-delay="300">
                                    <img src="{{url('/')}}/assets/images/robot-main-3-bg.png" alt="image_not_found">
                                </div>
                            </div>
                        </div>
                        {{--         <div class="child_image_1">
                                     <div class="layer" data-depth="0.3">
                                         <div data-aos="fade-up" data-aos-delay="500">
                                             <img src="{{url('/')}}/assets/images/ai.png" alt="image_not_found">
                                         </div>
                                     </div>
                                 </div>
                                 <div class="child_image_2">
                                     <div class="layer" data-depth="0.4">
                                         <div data-aos="fade-up" data-aos-delay="700">
                                             <img src="{{url('/')}}/assets/images/ai.png" alt="image_not_found">
                                         </div>
                                     </div>
                                 </div>--}}
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="banner_content c_slide_in">
                        <h1 class="title_text mb-30 text_effect_wrap c_slide_in_wrap1">
                                            <span class="c_slide_in_wrap2">
                                                <span class="c_slide_in_wrap3">
                                                    Вас вітає AI HUB
                                                </span>
                                            </span>
                        </h1>
                        <p class="mb-50" data-aos="fade-up" data-aos-delay="200">
                            Каталог AI-сервисів: знайдіть найкращі інструменти зі штучним інтелектом для свого бізнесу
                            українською.
                        </p>
                        <div class="btns_group ul_li" data-aos="fade-up" data-aos-delay="300">
                            <ul class="clearfix">
                                <li><a href="{{url('/')}}/services" class="btn_text letter-spacing-1">Знайти необхідний сервіс <i
                                            class="fal fa-long-arrow-right ml-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="deco_image bg_shape_1" data-background="assets/images/banner/10_software/bg_1.png"></div>
        <div class="deco_image bg_shape_2" data-background="assets/images/banner/10_software/bg_2.png"></div>
        <div class="deco_image bg_shape_3" data-background="assets/images/banner/10_software/bg_3.png"
             data-aos="zoom-out" data-aos-delay="100"></div>

        <div class="deco_image shape_1" data-aos="fade-left" data-aos-delay="500">
            <img src="{{url('/')}}/assets/images/banner/10_software/shape_1.png" alt="shape_not_found">
        </div>
        <div class="deco_image shape_2" data-aos="fade-right" data-aos-delay="700">
            <img src="{{url('/')}}/assets/images/banner/10_software/shape_2.png" alt="shape_not_found">
        </div>

        <div class="deco_image cloud_1" data-aos="fade-up" data-aos-delay="500">
            <img src="{{url('/')}}/assets/images/banner/10_software/cloud_1.png" alt="shape_not_found">
        </div>
        <div class="deco_image cloud_2" data-aos="fade-up" data-aos-delay="700">
            <img src="{{url('/')}}/assets/images/banner/10_software/cloud_1.png" alt="shape_not_found">
        </div>
    </section>

    <section class="service_section sec_ptb_120 pb-0 clearfix">
        <div class="container">

            <div class="section_title text-center mb-30 c_slide_in">
                <h3 class="sub_title mb-15 c_slide_in_wrap1">
								<span class="c_slide_in_wrap2">
									<span class="c_slide_in_wrap3">
										Найбільш популярні
									</span>
								</span>
                </h3>
                <h2 class="title_text mb-0 c_slide_in_wrap1">
								<span class="c_slide_in_wrap2">
									<span class="c_slide_in_wrap3">
										Сервіси з штучним інтелектом
									</span>
								</span>
                </h2>
            </div>

            <div class="row mb-5">

                @foreach ($services as $service)



                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="service_primary_2" data-aos="fade-up" data-aos-delay="700">
                            <div class="header-card">
                                <div class="item_icon icon_image">
                                    <img src="{{ url('/') . Storage::url($service->logo) }}"
                                         alt="icon_not_found">
                                </div>
                                <h3 class="item_title mt-3">
                                    {{$service -> title}}
                                </h3>
                            </div>
                            <p>
                                {{$service-> excerpt}}
                            </p>
                            <a href="{{url('/')}}/services/{{$service -> slug}}" class="details_btn">Детальніше
                                <i
                                    class="fal fa-long-arrow-right ml-1"></i></a>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- feature_section - start
================================================== -->
    <section class="feature_section sec_ptb_120 deco_wrap clearfix mb-50">
        <div class="container">
            <div class="section_title text-center mb-30 c_slide_in">
                <h3 class="sub_title mb-15 c_slide_in_wrap1">
								<span class="c_slide_in_wrap2">
									<span class="c_slide_in_wrap3">
										Блог
									</span>
								</span>
                </h3>
                <h2 class="title_text mb-0 c_slide_in_wrap1">
								<span class="c_slide_in_wrap2">
									<span class="c_slide_in_wrap3">
                                        Про штучний інтелект
									</span>
								</span>
                </h2>
            </div>
            <div class="feature_item">
                <div
                    class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                    <div class="col-lg-6 col-md-7 col-sm-8">
                        <div class="feature_image" data-aos="fade-up" data-aos-delay="300">
                            <img src="assets/images/features/img_9.png" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6 col-sm-8">
                        <div class="section_title ml--30">
										<span class="icon icon_yellow mb-30">
											<i class="icon-avatar"></i>
										</span>
                            <h2 class="title_text mb-30 text_effect_wrap">
                                <span class="text_effect text_effect_left">Сервіси на основі AI - </span>
                                <span class="text_effect text_effect_left">покращіть своє життя</span>
                            </h2>
                            <p class="mb-30" data-aos="fade-up" data-aos-delay="100">
                                Передові інструменти допоможуть вам автоматизувати завдання та підвищити ефективність навчання. Почніть використовувати всі переваги сучасних технологій вже зараз.
                            </p>
                            <a href="service_1.html" class="btn_text" data-aos="fade-up" data-aos-delay="200">Детальніше
                                <i class="fal fa-long-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature_item">
                <div
                    class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                    <div class="col-lg-6 col-md-7 col-sm-8 order-last">
                        <div class="feature_image float-left" data-aos="fade-up" data-aos-delay="300">
                            <img src="assets/images/features/img_10.png" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6 col-sm-8">
                        <div class="section_title mr--30">
										<span class="icon icon_pink mb-30">
											<i class="icon-lock"></i>
										</span>
                            <h2 class="title_text mb-30 text_effect_wrap">
                                <span class="text_effect text_effect_left">Що таке Chat GPT</span>
                                <span class="text_effect text_effect_left">та як їм користуватись?</span>
                            </h2>
                            <p class="mb-30" data-aos="fade-up" data-aos-delay="100">
                                Why I say old chap that is, spiffing off his nut cor blimey guvnor geeza bloke knees up
                                bobby, sloshed arse William cack Richard. Bloke fanny around chesed
                            </p>
                            <a href="service_1.html" class="btn_text" data-aos="fade-up" data-aos-delay="200">Read More
                                <i class="fal fa-long-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="deco_image shape_1" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/images/shapes/shape_26.png" alt="image_not_found">
        </div>

        <div class="deco_image dot_image_1" data-aos="fade-up" data-aos-delay="300">
            <img src="assets/images/shapes/shape_25.png" alt="image_not_found" data-parallax='{"y" : 90}'>
        </div>
    </section>
    <!-- feature_section - end
    ================================================== -->


</x-layout>


