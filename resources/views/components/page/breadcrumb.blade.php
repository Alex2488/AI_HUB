@props(['title'])

<section id="breadcrumb_section"
         class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
    <div class="container">
        <div class="breadcrumb_content text-center decrease_size" data-aos="fade-up" data-aos-delay="100">
            <h1 class="page_title mb-30">
                {{$title}}
            </h1>
            <div class="breadcrumb_nav ul_li_center">
                <ul class="clearfix">
                    <li>
                        <a href="{{url('/')}}">Головна</a>
                    </li>
                    {{ $slot }}
                    <li>
                        {{$title}}
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
