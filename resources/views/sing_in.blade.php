<x-layout></x-layout>

        <section id="breadcrumb_section"
                 class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
            <div class="container">
                <div class="breadcrumb_content text-center decrease_size" data-aos="fade-up" data-aos-delay="100">
                    <h1 class="page_title mb-30">
                        Вхід
                    </h1>
                    <div class="breadcrumb_nav ul_li_center">
                        <ul class="clearfix">
                            <li>
                                <a href="{{url('/')}}">Головна</a>
                            </li>
                            <li>
                                Вхід
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="deco_image spahe_1" data-aos="fade-down" data-aos-delay="300">
                <img src="{{url('/')}}/assets/images/shapes/shape_1.png" alt="spahe_not_found">
            </div>
            <div class="deco_image spahe_2" data-aos="fade-up" data-aos-delay="400">
                <img src="{{url('/')}}/assets/images/shapes/shape_2.png" alt="spahe_not_found">
            </div>
        </section>


        <!-- register_section - start
                        ================================================== -->
        <section id="register_section" class="register_section sec_ptb_120 bg_gray half_bg_white clearfix">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

                    <div class="col-lg-6 col-md-7 order-last">
                        <div class="signin_image" data-aos="fade-up" data-aos-delay="300">
                            <img src="assets/images/register/img_1.png" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-7 col-sm-8">
                        <div class="section_title increase_size mb-80" data-aos="fade-up" data-aos-delay="400">
                            <h2 class="title_text mb-30">Вхід</h2>
                            <p class="mb-0">
                                Ласкаво просимо! Будь ласка, підтвердіть, що ви відвідуєте
                                <span class="d-block"><a href="#!">https://www.ai-hub.com</a></span>
                            </p>
                        </div>

                        <div class="signin_form" data-aos="fade-up" data-aos-delay="500">
                            <form action="#">

                                <div class="form_item">
                                    <h4 class="input_title">Ваше ім'я</h4>
                                    <input type="text" name="username" placeholder="Введіть ім'я">
                                </div>

                                <div class="form_item">
                                    <h4 class="input_title">Пароль</h4>
                                    <input type="password" name="password" placeholder="**********">
                                </div>

                                <div class="row mb-50">
                                    <div class="col-6">
                                        <div class="check_box">
                                            <input id="remember_btn" type="checkbox">
                                            <label for="remember_btn">Запам'ятати мене</label>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <a href="#!" class="forget_btn">Забули пароль?</a>
                                    </div>
                                </div>

                                <button type="submit" class="btn bg_default_blue mb-30">Війти</button>

                                <p class="mb-0 text-center">
                                    Досі не зареєстровані? <a href="{{url('auth')}}"><u>Зареєструватись</u></a>
                                </p>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- register_section - end
        ================================================== -->



</x-layout>
