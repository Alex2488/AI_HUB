<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>AI HUB</title>

    @include('include.style')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


</head>


<body class="home_software">

<div class="body_wrap">

    <!-- backtotop - start -->
    <div id="thetop"></div>
    <div id="backtotop">
        <a href="#" id="scroll">
            <i class="fal fa-arrow-up"></i>
            <i class="fal fa-arrow-up"></i>
        </a>
    </div>
    <!-- backtotop - end -->

    <header id="header_section"
            class="header_section bg_gradient_blue sticky_header d-flex align-items-center text-white border_bottom clearfix">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-2">
                    <div class="brand_logo">
                        <a href="{{url('/')}}" class="brand_link">
                            <img src="{{url('/')}}/assets/images/logo_ai_w.png" alt="logo_not_found">
                            <img src="{{url('/')}}/assets/images/logo_ai.png" alt="logo_not_found">
                        </a>
                        <button type="button" class="menu_btn">
                            <i class="fal fa-bars"></i>
                        </button>
                    </div>
                </div>

                <div class="col-lg-8">
                    <nav class="main_menu ul_li_right clearfix">
                        <ul class="clearfix">
                            <li class="active menu_item_has_child">
                                <a href="{{url('/')}}">Головна</a>
                            </li>

                            <li class="menu_item_has_child">
                                <a href="{{route('services')}}">AI сервіси</a>
                            </li>



                            <li class="menu_item_has_child">
                                <a href="{{url('blog')}}">Блог</a>

                            </li>

                            <li class="menu_item_has_child">
                                <a href="{{url('about')}}">Про нас</a>

                            </li>



{{--                            @if (auth()->user()->role === 1)--}}


                            @if (auth()->user()?->role === 1)
                            <li class="menu_item_has_child">
                                <a href="{{route('show-services')}}">admin</a>

                            </li>
                            @endif

{{--                            @endif--}}
                        </ul>
                    </nav>
                </div>
                @if (auth()->check())
                    <div class="col-lg-2">
                        <form method="POST" action="{{url('logout')}}">
                            @csrf
                            <button type="submit" class="btn btn_border border_white float-right">Вийти
                            </button>
                        </form>
                    </div>
                @else
                    <div class="col-lg-2 d-flex align-items-center">
                        <a href="{{url('login')}}"
                           class="btn btn_border border_white float-right">Вхід</a>
                    </div>
                @endif


            </div>
        </div>
    </header>

    <!-- mobile sidebar menu - start -->
    <div class="sidebar-menu-wrapper">
        <div id="mobile_menu" class="mobile_menu">

            <div class="brand_logo mb-50 clearfix">
                <a href="index.html" class="brand_link">
                    <img src="{{url('/')}}/assets/images/logo/logo_2.png" alt="logo_not_found">
                </a>
                <span class="close_btn"><i class="fal fa-times"></i></span>
            </div>

            <div class="about_content mb-50 clearfix">
                <h3 class="item_title">
                    We giving you a shiny future to your Business
                </h3>
                <p class="mb-30">
                    Why say old chap that is spiffin barney and nancy boys bleeder and chimne pot ichard cheers the
                    little rotter so I said, easy peasy buggered blower
                </p>
                <div class="btns_group ul_li clearfix">
                    <ul class="clearfix">
                        <li><a href="sign_up.html" class="btn bg_default_blue">Get Started</a></li>
                        <li><a href="about.html" class="btn btn_border">Learn More <i
                                    class="fal fa-long-arrow-right ml-1"></i></a></li>
                    </ul>
                </div>
            </div>

            <div id="menu_list" class="menu_list ul_li_block mp_balancing mb-50 clearfix">
                <ul class="clearfix">

                    <li><a href="{{url('/')}}">Головна</a></li>
                    <li><a href="about.html">AI сервіси</a></li>
                    <li><a href="about.html">Блог</a></li>
                    <li><a href="about.html">Про нас</a></li>


                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>

            <div class="contact_info ul_li_block mb-50">
                <h3 class="item_title">Contact Us</h3>
                <ul class="clearfix">
                    <li><a href="#!"><span>Email:</span> makro@gmail.com</a></li>
                    <li><a href="#!"><span>Phone:</span> +948 256 347 968</a></li>
                </ul>
            </div>

            <div class="social_links ul_li mb-50">
                <h3 class="item_title">Follow Us</h3>
                <ul class="clearfix">
                    <li><a href="#!"><i class="icon-facebook"></i></a></li>
                    <li><a href="#!"><i class="icon-twitter"></i></a></li>
                    <li><a href="#!"><i class="icon-vimeo"></i></a></li>
                    <li><a href="#!"><i class="icon-linkedin"></i></a></li>
                </ul>
            </div>

            <div class="app_content mb-80 clearfix">
                <h2 class="item_title">support & downloads</h2>
                <p class="mb-30">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text.
                </p>

            </div>

            <div class="copyright_text text-center mb-15">
                <p class="mb-0">
                    Copyright © 2020 Desing by <a href="https://droitthemes.com/" class="author_link">DroitThemes</a>
                </p>
            </div>

            <div class="footer_menu ul_li_center text-center">
                <ul class="clearfix">
                    <li><a href="#!">Terms of Use</a></li>
                    <li><a href="#!">Privacy Policy</a></li>
                </ul>
            </div>

        </div>
        <div class="overlay"></div>
    </div>
    <!-- mobile sidebar menu - end -->
    <main>
        {{ $slot }}
    </main>

    <x-flash/>


</div>
@include('include.footer')

@include('include.script')


</body>
</html>
