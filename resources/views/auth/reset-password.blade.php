<x-layout>

    <!-- breadcrumb_section - start
                    ================================================== -->
    <section id="breadcrumb_section" class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
        <div class="container">
            <div class="breadcrumb_content text-center" data-aos="fade-up" data-aos-delay="100">
                <h1 class="page_title">Зміна паролю</h1>

            </div>
        </div>

        <div class="deco_image spahe_1" data-aos="fade-down" data-aos-delay="300">
            <img src="assets/images/shapes/shape_1.png" alt="spahe_not_found">
        </div>
        <div class="deco_image spahe_2" data-aos="fade-up" data-aos-delay="500">
            <img src="assets/images/shapes/shape_2.png" alt="spahe_not_found">
        </div>
    </section>
    <!-- breadcrumb_section - end
    ================================================== -->


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
                        <h2 class="title_text mb-30">Зміна паролю</h2>
                        <p class="mb-0">
                            Зміна паролю на сайті
                            <span><a href="{{url('/')}}">AI HUB!</a></span>
                        </p>
                    </div>

                    <div class="signin_form" data-aos="fade-up" data-aos-delay="500">
                        <form method="post" action="{{url('reset-password')}}">
                            @csrf

                            <input type="hidden" name="token" value="{{$request->token}}">

                            <div class="form_item">
                                <h4 class="input_title">Адреса електронної пошти</h4>
                                <input
                                    type="email"
                                    name="email"
                                    value="{{$request->email}}"
                                    placeholder="example@ai-hub.co.ua"
                                >
                                @error('email')
                                <p class="text-danger mt-1"> {{$message}}</p>
                                @enderror
                            </div>

                            <div class="form_item">
                                <h4 class="input_title">Новий пароль</h4>
                                <input
                                    type="password"
                                    name="password"
                                    placeholder="**********"
                                >
                                @error('password')
                                <p class="text-danger mt-1"> {{$message}}</p>
                                @enderror
                            </div>

                            <div class="form_item">
                                <h4 class="input_title">Повторіть пароль</h4>
                                <input
                                    type="password"
                                    name="password_confirmation"
                                    placeholder="**********"
                                >
                                @error('password')
                                <p class="text-danger mt-1"> {{$message}}</p>
                                @enderror
                            </div>


                            <button type="submit" class="btn bg_default_blue mb-30">Зберегти</button>


                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- register_section - end
    ================================================== -->



</x-layout>


