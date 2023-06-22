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
                                    <img src="{{url('/')}}/assets/images/robot-main-3-bg-min.png" alt="image_not_found">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="banner_content c_slide_in">
                        <h1 class="title_text mb-30 text_effect_wrap c_slide_in_wrap1 justify-content-center justify-content-lg-start">
                                            <span class="c_slide_in_wrap2">
                                                <span class="c_slide_in_wrap3">
                                                    Вас вітає AI HUB
                                                </span>
                                            </span>
                        </h1>
                        <p class="mb-50" data-aos="fade-up" data-aos-delay="200">
                            Український каталог AI-сервисів.
                            <br>
                            Знайдіть потрібні рішення в одному місці!
                        </p>
                        <div class="btns_group ul_li" data-aos="fade-up" data-aos-delay="300">
                            <ul class="clearfix">
                                <li><a href="{{url('/')}}/services" class="btn_text letter-spacing-1">Знайти необхідний
                                        сервіс <i
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

        {{--        <div class="deco_image shape_1" data-aos="fade-left" data-aos-delay="500">
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
                </div>--}}
    </section>

    <section class="service_section sec_ptb_120 mb-80 pb-0 clearfix">
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
            <div class="btn_wrap text-center mt-" data-aos="fade-up" data-aos-delay="100">
                <a href="{{route('services')}}" class="btn btn_border">Всі сервіси</a>
            </div>
        </div>
    </section>


    <!-- service_section - start
             ================================================== -->
    <section id="feature_section" class="feature_section bg_gradient_blue sec_ptb_120 clearfix">
        <div class="container">

            <div class="section_title text-center mb-50" data-aos="fade-up" data-aos-delay="300">
                <h3 class="sub_title text-white mb-15">Ми найкращі</h3>
                <h2 class="title_text text-white mb-0">Чому обирають AI HUB</h2>
            </div>

            <div class="row mb-80">
                <div class="col-lg-4 col-md-4 col-sm-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="service_boxed_1">
                        <div class="icon_wrap">
                            <div class="item_icon bg_gradient_blue">
                                <i class="icon-start-up"></i>
                            </div>
                            <span class="icon_deco icon_deco_1">
											<img src="assets/images/shapes/shape_3.png" alt="shape_not_found">
										</span>
                            <span class="icon_deco icon_deco_2">
											<img src="assets/images/shapes/shape_4.png" alt="shape_not_found">
										</span>
                            <span class="icon_deco icon_deco_3">
											<img src="assets/images/shapes/shape_5.png" alt="shape_not_found">
										</span>
                            <span class="icon_deco icon_deco_4">
											<img src="assets/images/shapes/shape_6.png" alt="shape_not_found">
										</span>
                        </div>
                        <h3 class="item_title">
                            <a href="{{url('services')}}">Найкращі сервіси</a>
                        </h3>
                        <p class="mb-50">
                            Завдяки рейтинговій системі сервісів, ви зможете знайти для себе найкращі сервіси, порівняти
                            і вибрати найбільш оптимальні за лічені хвилини
                        </p>
                        <a href="{{url('services')}}" class="details_btn"><i
                                class="icon-arrow-right-style-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12" data-aos="fade-up" data-aos-delay="500">
                    <div class="service_boxed_1">
                        <div class="icon_wrap">
                            <div class="item_icon bg_gradient_green">
                                <i class="icon-marketing"></i>
                            </div>
                            <span class="icon_deco icon_deco_1">
											<img src="assets/images/shapes/shape_3.png" alt="shape_not_found">
										</span>
                            <span class="icon_deco icon_deco_2">
											<img src="assets/images/shapes/shape_4.png" alt="shape_not_found">
										</span>
                            <span class="icon_deco icon_deco_3">
											<img src="assets/images/shapes/shape_5.png" alt="shape_not_found">
										</span>
                            <span class="icon_deco icon_deco_4">
											<img src="assets/images/shapes/shape_6.png" alt="shape_not_found">
										</span>
                        </div>
                        <h3 class="item_title">
                            <a href="{{url('posts')}}">Завжди в курсі подій</a>
                        </h3>
                        <p class="mb-50">
                            На нашому сайті ви отримуєте корисну інформацію про останні досягнення та дослідження,
                            новинки та тренди у світі штучного інтелекту
                        </p>
                        <a href="{{url('posts')}}" class="details_btn"><i class="icon-arrow-right-style-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12" data-aos="fade-up" data-aos-delay="600">
                    <div class="service_boxed_1">
                        <div class="icon_wrap">
                            <div class="item_icon bg_gradient_orange">
                                <i class="icon-paper-plane"></i>
                            </div>
                            <span class="icon_deco icon_deco_1">
											<img src="assets/images/shapes/shape_3.png" alt="shape_not_found">
										</span>
                            <span class="icon_deco icon_deco_2">
											<img src="assets/images/shapes/shape_4.png" alt="shape_not_found">
										</span>
                            <span class="icon_deco icon_deco_3">
											<img src="assets/images/shapes/shape_5.png" alt="shape_not_found">
										</span>
                            <span class="icon_deco icon_deco_4">
											<img src="assets/images/shapes/shape_6.png" alt="shape_not_found">
										</span>
                        </div>
                        <h3 class="item_title">
                            <a href="#newsletter_section">Дізнайтеся першими </a>
                        </h3>
                        <p class="mb-50">
                            Отримуйте інформацію про нові сервіси, акційні пропозиції та інші важливі події першими.
                            Лише корисна інформація стосовно AI сервісів.
                        </p>
                        <a href="#newsletter_section" class="details_btn"><i class="icon-arrow-right-style-1"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- service_section - end
    ================================================== -->

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
            @foreach($posts as $post)

                <div class="feature_item">
                    <div
                        class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                        <div class="col-lg-6 col-md-7 col-sm-8">
                            <div class="feature_image" data-aos="fade-up" data-aos-delay="300">
                                <img src="{{ url('/') . Storage::url($post->image) }}" class="post_img"
                                     alt="image_not_found">
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-6 col-sm-8">
                            <div class="section_title ml--30">

                                <h2 class="title_text mb-30 text_effect_wrap">
                                    <span class="text_effect text_effect_left">{{$post->title}}</span>
                                </h2>
                                <p class="mb-30" data-aos="fade-up" data-aos-delay="100">
                                    {{$post->excerpt}}
                                </p>
                                <a href="{{url('/')}}/posts/{{$post -> slug}}" class="btn_text" data-aos="fade-up"
                                   data-aos-delay="200">Детальніше
                                    <i class="fal fa-long-arrow-right ml-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

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

    @include('include.newsletter')


</x-layout>


