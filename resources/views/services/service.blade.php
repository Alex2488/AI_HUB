<x-layout>

    <section id="breadcrumb_section"
             class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
        <div class="container">
            <div class="breadcrumb_content text-center decrease_size" data-aos="fade-up" data-aos-delay="100">
                <h1 class="page_title mb-30">
                    {{$service->title}}
                </h1>
                <div class="breadcrumb_nav ul_li_center">
                    <ul class="clearfix">
                        <li>
                            <a href="{{url('/')}}">Головна</a>
                        </li>
                        <li>
                            {{$service->title}}
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


    <body class="blog_details_page">


    <div class="body_wrap">

        <section class="details_section casestudy_details sec_ptb_120 pb-0 clearfix">
            <div class="container">
                <div class="row mb-50 justify-content-lg-between justify-content-md-between justify-content-sm-center">
                    <div class="col-lg-8 col-md-7 col-sm-12">
                        <div class="item_image mr--30" data-aos="fade-up" data-aos-delay="300">
                            <img src="{{  url('/') . Storage::url($service->image) }}" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-5 col-sm-12 ">
                        <div class="item_content h-100 d-flex flex-column justify-content-around pl-4"
                             data-aos="fade-up" data-aos-delay="400">
                            <h2 class="item_title">Інформація</h2>
                            <div class="info_list ul_li_block mb-50">
                                <ul class="clearfix">
                                    <li><strong>Назва :</strong> {{$service->title}}</li>
                                    <li><strong>Дата :</strong> 2022 рік</li>
                                    <li>
                                        <strong>Категорія :</strong> <a href="#!">{{$service->category->name}}</a>
                                    </li>
                                    <li><strong>Розробник :</strong> OpenAI</li>
                                </ul>
                            </div>
                            <div class="btns_group ul_li clearfix">
                                <ul class="clearfix">
                                    <li><a href="{{$service->link_to_service}}"
                                           class="btn bg_default_blue">Спробувати </a></li>
                                    <li>
                                        @include('components.service-like')
                                    </li>

                                    {{--                                    <li><a href="#!" class="heart_btn"><i class="far fa-heart mr-1"></i>16</a></li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>


        <!-- details_section - start
        ================================================== -->
        <section class="details_section pt-5 pb-5 clearfix">
            <div class="container">
                <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

                    <div class="col-lg-8 col-md-10 col-sm-12">

                        <p class="mb-30">
                            {{$service->information_1}}
                        </p>

                        <p>
                            {{$service->information_2}}
                        </p>

                        <p>
                            {{$service->information_3}}
                        </p>


                        <h3 class="title_text mb-30">Основні функції сервису {{$service->title}}</h3>

                        <div class="job_info_list mb-30 ul_li_block">
                            <ul class="clearfix">
                                <li>
                                    <p class="mb-0">
                                        {{$service->functionality_1}}
                                    </p>
                                </li>

                                <li>
                                    <p class="mb-0">
                                        {{$service->functionality_2}}
                                    </p>
                                </li>

                                <li>
                                    <p class="mb-0">
                                        {{$service->functionality_3}}
                                    </p>
                                </li>

                                <li>
                                    <p class="mb-0">
                                        {{$service->functionality_4}}
                                    </p>
                                </li>


                            </ul>
                        </div>

                        <h3 class="title_text mb-30">Переваги сервису {{$service->title}}</h3>

                        <p>
                            {{$service->benefits_1}}
                        </p>

                        <p>
                            {{$service->benefits_2}}

                        </p>

                        <p>
                            {{$service->benefits_3}}
                        </p>

                        <div class="col-12">
                            <div class="service-footer d-flex flex-column justify-content-center" data-aos="fade-up"
                                 data-aos-delay="100">
                                <div class="row align-items-center">
                                    <h6 class="widget_title mb-0">Категорія:</h6>
                                    <div class="tag_list ul_li">
                                        <ul class="clearfix d-flex">
                                            <li class="mx-2"><a href="#!">{{$service->category->name}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <h6 class="widget_title mb-0">Посилання на сайт:</h6>
                                    <div class="tag_list ul_li">
                                        <ul class="clearfix d-flex">
                                            <li class="mx-2"><a
                                                        href="{{$service->link_to_service}}">{{$service->title}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="comments" class="comment_area mt-4 mb-80 clearfix">
                            @if (auth()->check() && auth()->user()->email_verified_at !== null)
                                <div class="comment_form" data-aos="fade-up" data-aos-delay="100">
                                    <h5 class="title_text mb-50">{{auth()->user()->name}}, поділись враженнями від
                                        сервісу</h5>
                                    <form action="{{route('add-comment')}}" method="post">
                                        @csrf

                                        <div class="form_item">
                                    <textarea
                                            name="body"
                                            placeholder="Comment"></textarea>
                                        </div>
                                        <input
                                                type="hidden"
                                                name="service_id"
                                                value="{{$service->id}}"
                                        >
                                        <button type="submit" class="btn bg_default_blue mb-4">Відправити</button>
                                    </form>
                                </div>
                                @foreach ($service->comments as $comment)
                                    <x-service-comment :comment="$comment"/>
                                @endforeach
                            @elseif (auth()->check() && auth()->user()->email_verified_at === null)
                                <div class="comment_form" data-aos="fade-up" data-aos-delay="100">
                                    <h3 class="title_text mb-50">Для того, щоб бачити коментарі, необхідно підтвердити
                                        електронну пошту.
                                        <form action="{{route('verification.send')}}" method="POST">
                                            @csrf


                                            <button type="submit" class="btn-link">
                                                Направити повтоно лист?
                                            </button>

                                        </form>
                                    </h3>
                                </div>
                            @else
                                <div class="comment_form" data-aos="fade-up" data-aos-delay="100">
                                    <h3 class="title_text mb-50">Для того, щоб бачити коментарі, необхідно <a
                                                href="{{route('register')}}"> зареєструватись </a> або <a
                                                href="{{route('login')}}"> авторизуватись </a> на сайті.

                                    </h3>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-10 col-sm-12">

                        @include('components.aside')
                    </div>
                </div>
            </div>
        </section>
        <!-- details_section - end
        ================================================== -->


    </div>


    </body>

</x-layout>





