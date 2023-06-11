<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>AI HUB - найкращі інструменти зі штучним інтелектом українською</title>

    @include('include.style')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


</head>


<body class="home_software">



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
                    <div class="brand_logo d-flex justify-content-between">
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
                            <li class="menu_item_has_child {{(Route::is('home')) ? 'active' : ''}}">
                                <a href="{{route('home')}}">Головна</a>
                            </li>

                            <li class="menu_item_has_child {{(Route::is('services')) ? 'active' : ''}} ">
                                <a href="{{route('services')}}">AI сервіси</a>
                            </li>


                            <li class="menu_item_has_child {{(Route::is('posts')) ? 'active' : ''}}">
                                <a href="{{url('posts')}}">Блог</a>
                            </li>

                            <li class="menu_item_has_child {{(Route::is('about')) ? 'active' : ''}}">
                                <a href="{{url('about')}}">Про нас</a>
                            </li>

                            @if (auth()->user()?->role === 1)
                                <li class="menu_item_has_child">
                                    <a href="{{route('show-services')}}">admin</a>

                                </li>
                            @endif


                            @if (auth()->user())
                                <li class="menu_item_has_child">
                                    <a href="#">{{auth()->user()->name}} <span style="font-size: 10px">&#9660;</span></a>
                                    <ul class="submenu rounded">
                                        <li><a href="{{route('edit-profile')}}">Змінити данні</a></li>
                                        <li><a href="{{route('favorite-services')}}">Улюблені сервіси</a></li>
                                        <li><a href="{{route('commented-services')}}">Коментовані сервіси</a></li>
                                        <li><a href="{{route('reviewed-services')}}">Переглянуті сервіси</a></li>
                                    </ul>
                                </li>
                            @endif

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
                    <img src="{{url('/')}}/assets/images/logo_ai.png" alt="logo_not_found">
                </a>
                <span class="close_btn"><i class="fal fa-times"></i></span>
            </div>

            <div class="about_content mb-50 clearfix">
                <h3 class="item_title">
                    Каталог AI-сервисів

                </h3>
                <p class="mb-30">
                    Знайдіть найкращі інструменти зі штучним інтелектом для свого бізнесу
                    українською.
                </p>


                <div id="menu_list" class="menu_list ul_li_block mp_balancing mb-50 clearfix">
                    <ul class="clearfix">

                        <li><a href="{{url('/')}}">Головна</a></li>
                        <li><a href="{{route('services')}}">AI сервіси</a></li>
                        <li><a href="{{route('posts')}}">Блог</a></li>
                        <li><a href="{{route('about')}}">Про нас</a></li>
                        @if (auth()->user()?->role === 1)
                            <li>
                                <a href="{{route('show-services')}}">admin</a>
                            </li>
                        @endif
                    </ul>
                </div>

                <div class="btns_group ul_li clearfix">
                    <ul class="clearfix">
                        <li><a href="{{route('register')}}" class="btn bg_default_blue">Зареєструватись</a></li>
                        <li><a href="{{url('auth')}}" class="btn btn_border">Війти<i
                                    class="fal fa-long-arrow-right ml-1"></i></a></li>
                    </ul>
                </div>
            </div>



            <div class="contact_info ul_li_block mb-50">
                <ul class="clearfix">
                    <li><a href="#!"><span>Email:</span>aihub.ukraine@gmail.com</a></li>
                </ul>
            </div>


            <div class="copyright_text text-center mb-15">
                <p class="mb-0">
                    Copyright © 2023 AI-HUB
                </p>
            </div>

            <div class="footer_menu ul_li_center text-center">
                <ul class="clearfix">
                    <li><a href="{{url('privacy')}}">Політика приватності</a></li>
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





@include('include.footer')

@include('include.script')


</body>
</html>
