<footer id="footer_section" class="footer_section bg_dark_blue text-white deco_wrap sec_ptb_120 pb-0 clearfix">

    <div class="widget_area">
        <div class="container position-relative">
            <div class="row justify-content-lg-between">

                <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                    <div class="widget about_content pr-0">
                        <div class="brand_logo mb-30">
                            <a href="index.html" class="brand_link">
                                <img src="{{url('/')}}/assets/images/logo_ai_w.png" alt="logo_not_found">
                            </a>
                        </div>
                        <div class="copyright_text">
                            <p class="mb-0">
                                Copyright AI-HUB © 2023
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                    <div class="widget useful_links ul_li_block mt-0 mb-4">
                        <h3 class="widget_title mb-50">AI-HUB</h3>
                        <ul class="clearfix">
                            <li><a href="{{url('/')}}">Головна</a></li>
                            <li><a href="{{route('services')}}">AI сервіси</a></li>
                            <li><a href="{{url('posts')}}">Блог</a></li>
                            <li> <a href="{{url('about')}}">Про нас</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                    <div class="widget useful_links ul_li_block mt-0">
                        <h3 class="widget_title mb-50">Топові категорії</h3>
                        <ul class="clearfix">
                            <li><a href="{{route('services')}}?category=text">Текст</a></li>
                            <li><a href="{{route('services')}}?category=image">Картинка</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
