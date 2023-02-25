@extends('components.layout')






@section('content')

    <section id="banner_section"
             class="banner_section software_banner deco_wrap d-flex align-items-center text-white clearfix">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">

                <div class="col-lg-5 order-last">
                    <div class="banner_image scene">
                        <div class="big_image">
                            <div class="layer" data-depth="0.2">
                                <div data-aos="fade-up" data-aos-delay="300">
                                    <img src="assets/images/banner/10_software/img_1.png" alt="image_not_found">
                                </div>
                            </div>
                        </div>
                        <div class="child_image_1">
                            <div class="layer" data-depth="0.3">
                                <div data-aos="fade-up" data-aos-delay="500">
                                    <img src="assets/images/banner/10_software/img_2.png" alt="image_not_found">
                                </div>
                            </div>
                        </div>
                        <div class="child_image_2">
                            <div class="layer" data-depth="0.4">
                                <div data-aos="fade-up" data-aos-delay="700">
                                    <img src="assets/images/banner/10_software/img_3.png" alt="image_not_found">
                                </div>
                            </div>
                        </div>
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
                            Каталог AI-сервисів: знайдіть найкращі інструменти зі штучним інтелектом для свого бізнесу українською.
                        </p>
                        <div class="btns_group ul_li" data-aos="fade-up" data-aos-delay="300">
                            <ul class="clearfix">
                                <li><a href="sign_up.html" class="btn btn_border border_white">Get Started</a></li>
                                <li><a href="service_1.html" class="btn_text">Find out more <i
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
            <img src="assets/images/banner/10_software/shape_1.png" alt="shape_not_found">
        </div>
        <div class="deco_image shape_2" data-aos="fade-right" data-aos-delay="700">
            <img src="assets/images/banner/10_software/shape_2.png" alt="shape_not_found">
        </div>

        <div class="deco_image cloud_1" data-aos="fade-up" data-aos-delay="500">
            <img src="assets/images/banner/10_software/cloud_1.png" alt="shape_not_found">
        </div>
        <div class="deco_image cloud_2" data-aos="fade-up" data-aos-delay="700">
            <img src="assets/images/banner/10_software/cloud_1.png" alt="shape_not_found">
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

                @foreach ($content_ai as $one_content_ai)
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="service_primary_2" data-aos="fade-up" data-aos-delay="700">
                            <div class="item_icon icon_image">
                                <img src="assets/images/icons/services/icon_3.png" alt="icon_not_found">
                            </div>
                            <h3 class="item_title">
                                {{$one_content_ai -> title}}
                            </h3>
                            <p>
                                {{$one_content_ai -> excerpt}}
                            </p>
                            <a href="{{url('/')}}/contents/{{$one_content_ai -> slug}}" class="details_btn">Learn
                                More <i
                                    class="fal fa-long-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection


