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

    {{--    <section class="details_section sec_ptb_120 clearfix">
            <div class="container">
                <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
                    <div class="col-lg-8 col-md-10 col-sm-12">
                        <h2 class="mb-5">
                            {{$content_ai->title}}
                        </h2>
                        <p class="mb-30">
                            {{$content_ai->body}}
                        </p>
                        <p>Категорія: <a href="{{url('/')}}/categories/{{ $content_ai->category->slug }}"> {{$content_ai->category->name}}</a></p>
                        <a class="btn btn_border" href="{{$content_ai->link_to_service}}">Спробувати зараз</a>

                    </div>
                    <div class="col-lg-4 col-md-10 col-sm-12">
                        <aside id="sidebar_section" class="sidebar_section pl-30">

                            <div class="widget sidebar_category ul_li_block" data-aos="fade-up" data-aos-delay="100">
                                <h3 class="widget_title mb-30">Category</h3>
                                <ul class="clearfix">
                                    <li><a href="#!">Fashion <span>(24)</span></a></li>
                                    <li><a href="#!">Food for thought <span>(09)</span></a></li>
                                    <li><a href="#!">Gaming <span>(07)</span></a></li>
                                    <li><a href="#!">Uncategorized <span>(02)</span></a></li>
                                    <li><a href="#!">makro <span>(04)</span></a></li>
                                    <li><a href="#!">Project Management <span>(07)</span></a></li>
                                    <li><a href="#!">Wireframing <span>(05)</span></a></li>
                                </ul>
                            </div>

                            <div class="widget sidebar_blog ul_li_block" data-aos="fade-up" data-aos-delay="400">
                                <h3 class="widget_title mb-30">Recent Posts</h3>
                                <ul class="clearfix">
                                    <li>
                                        <div class="blog_small">
                                            <a href="#!" class="item_image">
                                                <img src="{{url('/')}}/assets/images/sidebar/blogs/img_1.jpg" alt="image_not_found">
                                            </a>
                                            <div class="item_content">
                                                <h4 class="item_title">
                                                    <a href="#!">Fast App development</a>
                                                </h4>
                                                <span class="post_date">July 06, 2020</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="blog_small">
                                            <a href="#!" class="item_image">
                                                <img src="{{url('/')}}/assets/images/sidebar/blogs/img_2.jpg" alt="image_not_found">
                                            </a>
                                            <div class="item_content">
                                                <h4 class="item_title">
                                                    <a href="#!">Fast App development</a>
                                                </h4>
                                                <span class="post_date">July 06, 2020</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="blog_small">
                                            <a href="#!" class="item_image">
                                                <img src="{{url('/')}}/assets/images/sidebar/blogs/img_3.jpg" alt="image_not_found">
                                            </a>
                                            <div class="item_content">
                                                <h4 class="item_title">
                                                    <a href="#!">Fast App development</a>
                                                </h4>
                                                <span class="post_date">July 06, 2020</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>



                            <div class="widget sidebar_tag" data-aos="fade-up" data-aos-delay="100">
                                <h3 class="widget_title mb-30">Tags</h3>
                                <div class="tag_list ul_li">
                                    <ul class="clearfix">
                                        <li><a href="#!">makro</a></li>
                                        <li><a href="#!">Web Design</a></li>
                                        <li><a href="#!">Saas</a></li>
                                        <li><a href="#!">Cooling System</a></li>
                                        <li><a href="#!">Corporate</a></li>
                                        <li><a href="#!">Software</a></li>
                                        <li><a href="#!">Landing</a></li>
                                        <li><a href="#!">Wheels</a></li>
                                    </ul>
                                </div>
                            </div>

                        </aside>
                    </div>

                </div>
            </div>
        </section>--}}

    <body class="blog_details_page">


    <div class="body_wrap">


        <!-- details_section - start
        ================================================== -->
        <section class="details_section sec_ptb_120 clearfix">
            <div class="container">
                <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

                    <div class="col-lg-8 col-md-10 col-sm-12">
                        <div class="item_image" data-aos="fade-up" data-aos-delay="300">
                            <img
                                src="data:image/png;base64,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"
                                alt="image_not_found" class="float-left mr-3 mb-3 service_image">
                        </div>

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

                        <div class="job_info_list mb-80 ul_li_block">
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
                            {{$service->functionality_1}}
                        </p>

                        <p>
                            {{$service->functionality_2}}

                        </p>

                        <p>
                            {{$service->functionality_3}}
                        </p>

                        <div class="col-12">
                            <div class="service-footer d-flex align-items-center" data-aos="fade-up"
                                 data-aos-delay="100">
                                <h6 class="widget_title mb-0">Категорія:</h6>
                                <div class="tag_list ul_li">
                                    <ul class="clearfix d-flex">
                                     {{--   <li class="mx-2"><a href="#!">{{$content_ai->category->name}}</a></li>--}}
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <h6 class="widget_title mb-0 mx2">Посилання на сайт:</h6>
                                <div class="btns_group ul_li clearfix m-3">
                                    <ul class="clearfix d-flex align-items-center">
                                        <li><a href="{{$service->link_to_service}}" class="btn bg_default_blue">Спробувати зараз</a></li>
                                        <li><a href="#!" class="heart_btn"><i class="far fa-heart mr-1"></i>16</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="comment_form" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="title_text mb-50">Alex, поділись враженнями або спитай</h3>
                            <form action="{{url('/')}}/services/{{$service->slug}}/comments" method="post">
                                @csrf

                                <div class="form_item">
                                    <textarea
                                        name="body"
                                        placeholder="Comment">
                                    </textarea>
                                </div>
                                <input type="hidden" name="service_id" value="{{$service->id}}">

                                <button type="submit" class="btn bg_default_blue">Post Comment</button>

                            </form>
                        </div>

                        <div class="comment_area mt-4 mb-80 clearfix">
                            <h3 class="title_text mb-50">02 Comments</h3>


                            @foreach ($service->comments as $comment)
                                <x-service-comment :comment="$comment"/>
                            @endforeach




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




