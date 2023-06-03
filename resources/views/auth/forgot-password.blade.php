<x-layout>

    <!-- breadcrumb_section - start
                    ================================================== -->
    <section id="breadcrumb_section" class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
        <div class="container">
            <div class="breadcrumb_content text-center" data-aos="fade-up" data-aos-delay="100">
                <h1 class="page_title">Відновлення паролю</h1>

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


                    <div class="signin_form" data-aos="fade-up" data-aos-delay="500">
                        <form method="post" action="{{route('password.email')}}">
                            @csrf
                            <div class="form_item">
                                <h4 class="input_title">Адреса електронної пошти</h4>
                                <input
                                    type="email"
                                    name="email"
                                    value="{{old('email')}}"
                                    placeholder="example@ai-hub.co.ua"
                                >
                                @error('email')
                                <p class="text-danger mt-1"> {{$message}}</p>
                                @enderror
                            </div>


                            <button type="submit" class="btn bg_default_blue mb-30">Відправити</button>

                            <div class="d-flex justify-content-between align-items-center mb-0">
                                 <a href="{{route('register')}}"><u>Зареєструватись</u></a>
                                 <a href="{{route('login')}}"><u>Авторизуватись</u></a>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- register_section - end
    ================================================== -->



</x-layout>


