<x-layout>

    <section id="breadcrumb_section"
             class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
        <div class="container">
            <div class="breadcrumb_content text-center decrease_size" data-aos="fade-up" data-aos-delay="100">
                <h1 class="page_title mb-30">
                    Про AI HUB
                </h1>
                <div class="breadcrumb_nav ul_li_center">
                    <ul class="clearfix">
                        <li>
                            <a href="{{url('/')}}">Головна</a>
                        </li>
                        <li>
                            Політика приватності
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

    <!-- service_section - start
                    ================================================== -->
    <section id="service_section" class="service_section sec_ptb_120 clearfix">
        <div class="container">

            <div class="section_title text-center mb-50" data-aos="fade-up" data-aos-delay="300">
                <h3 class="sub_title mb-15">Політика приватності</h3>
            </div>

            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="400">
                    <p class="mb-30">
                        Як і більшість веб-сайтів, цей сайт використовує файли cookie, щоб допомогти з навігацією та
                        вашою здатністю надавати відгуки, аналізувати використання вами продуктів і послуг, щоб ми могли
                        їх покращити, допомагати в наших особистих рекламних і маркетингових зусиллях і надавати згоду
                        третіх сторін.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!-- service_section - end
    ================================================== -->


    @include('include.newsletter')


</x-layout>


