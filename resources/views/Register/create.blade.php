<x-layout>

        <section id="breadcrumb_section"
                 class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
            <div class="container">
                <div class="breadcrumb_content text-center decrease_size" data-aos="fade-up" data-aos-delay="100">
                    <h1 class="page_title mb-30">
                        Реєстрація на сайті
                    </h1>
                    <div class="breadcrumb_nav ul_li_center">
                        <ul class="clearfix">
                            <li>
                                <a href="{{url('/')}}">Головна</a>
                            </li>
                            <li>
                                Реєстрація на сайті
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
        <section id="register_section" class="register_section sec_ptb_120 clearfix">
            <div class="container">

                <div class="signup_wrap" data-aos="fade-up" data-aos-delay="300">
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <div class="info_wrap">
                                <h4>Вже маєте акаунт?</h4>
                                <h4>
                                    Увійдіть зараз і насолоджуйтеся використанням нашого <strong> чудового </strong> сайту
                                </h4>
                                <div class="info_list ul_li_block mb-50">
                                    <ul class="clearfix">
                                        <li>Пошук по назві сервісу або його опису</li>
                                        <li>Можливіть коментувати сервіси та ділитись досвідом</li>
                                        <li>Ставити лайки улюбленим сервісам</li>
                                    </ul>
                                </div>
                                <a href="#!" class="btn btn_border">Вхід</a>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-7">
                            <div class="signup_form">
                                <h2 class="title_text">Реєстрація на сайті</h2>
                                <form method="post" action="{{url('/')}}/register">
                                    @csrf
                                    <div class="form_item">
                                        <h4 class="input_title">Ваше ім'я</h4>
                                        <input
                                            type="text"
                                            name="name"
                                            value="{{old('name')}}"
                                            placeholder="Ввeдіть ім'я"
                                            required
                                        >
                                        @error('name')
                                        <p class="text-danger mt-1"> {{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form_item">
                                        <h4 class="input_title">Адреса електронної пошти</h4>
                                        <input
                                            type="email"
                                            name="email"
                                            value="{{old('email')}}"
                                            placeholder="example@ai-hub.co.ua"
                                            required
                                        >
                                        @error('email')
                                        <p class="text-danger mt-1"> {{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form_item">
                                        <h4 class="input_title">Пароль</h4>
                                        <input
                                            type="password"
                                            name="password"
                                            placeholder="**********"
                                            required
                                        >
                                        @error('password')
                                        <p class="text-danger mt-1"> {{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="check_box mb-50">
                                        <input
                                            id="remember_btn"
                                            name="remember_btn"
                                            type="checkbox"
                                            required
                                        >
                                        @error('remember_btn')
                                        <p class="text-danger mt-1"> {{$message}}</p>
                                        @enderror
                                        <label for="remember_btn">Я погоджуюся з умовами та положеннями цього веб-сайту</label>
                                    </div>

                                    <button type="submit" class="btn bg_default_blue">Зареєструватись</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- register_section - end
        ================================================== -->



</x-layout>


