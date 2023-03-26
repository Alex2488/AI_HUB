<x-layout>

    <!-- breadcrumb_section - start
                    ================================================== -->
    <section id="breadcrumb_section" class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
        <div class="container">
            <div class="breadcrumb_content text-center" data-aos="fade-up" data-aos-delay="100">
                <h1 class="page_title">Підтвердження електронної пошти</h1>

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



                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="section_title increase_size mb-80" data-aos="fade-up" data-aos-delay="400">
                        <h2 class="title_text mb-30">Підтвердження електронної пошти</h2>
                        <p class="mb-0">
                            Дякуємо за реєстрацію на сайті
                            <span><a href="{{url('/')}}">AI HUB!</a></span>
                            На вказану електронну пошту надіслано посилання, за допомогою якого необхідно підтвердити
                            електронну пошту
                        </p>
                    </div>

                    @if ($errors->any())
                        <div class="container">
                            <div>
                                <h5>Щось пішло не так!</h5>
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                            </div>
                        </div>
                    @endif

                    @if (session('status') == 'verification-link-sent')
                        <div class="mb-4 font-medium text-sm text-green-600">
                            A new email verification link has been emailed to you!
                        </div>
                    @endif

                    <div class="mt-4 d-flex align-items-center justify-content-between">
                        <form action="{{route('verification.send')}}" method="POST">
                            @csrf

                            <div>
                                <button type="submit" class="btn btn_border">
                                    {{__('Resend Verification Email')}}
                                </button>
                            </div>
                        </form>

                        <form method="POST" action="{{route ('logout')}}">
                            <button type="submit" class="btn btn_border">
                                {{__('logout')}}
                            </button>


                        </form>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- register_section - end
    ================================================== -->



</x-layout>


