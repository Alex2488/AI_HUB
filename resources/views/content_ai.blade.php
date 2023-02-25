@extends('components.layout')

@section('content')


<section id="breadcrumb_section"
         class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
    <div class="container">
        <div class="breadcrumb_content text-center decrease_size" data-aos="fade-up" data-aos-delay="100">
            <h1 class="page_title mb-30">
                {{$content_ai->title}}
            </h1>
            <div class="breadcrumb_nav ul_li_center">
                <ul class="clearfix">
                    <li>
                        <a href="{{url('/')}}">Головна</a>
                    </li>
                    <li>
                        {{$content_ai->title}}
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="deco_image spahe_1" data-aos="fade-down" data-aos-delay="300">
        <img src="assets/images/shapes/shape_1.png" alt="spahe_not_found">
    </div>
    <div class="deco_image spahe_2" data-aos="fade-up" data-aos-delay="400">
        <img src="assets/images/shapes/shape_2.png" alt="spahe_not_found">
    </div>
</section>

<section class="details_section sec_ptb_120 clearfix">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

            {!!$content_ai->body!!}

            <div class="col-lg-4 col-md-10 col-sm-12">
                <aside id="sidebar_section" class="sidebar_section pl-30">

                    <div class="widget sidebar_search form_item" data-aos="fade-up" data-aos-delay="300">
                        <input type="search" name="search" placeholder="Search...">
                        <button type="submit"><i class="ti-search"></i></button>
                    </div>

                    <div class="widget sidebar_blog ul_li_block" data-aos="fade-up" data-aos-delay="400">
                        <h3 class="widget_title mb-30">Recent Posts</h3>
                        <ul class="clearfix">
                            <li>
                                <div class="blog_small">
                                    <a href="#!" class="item_image">
                                        <img src="assets/images/sidebar/blogs/img_1.jpg" alt="image_not_found">
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
                                        <img src="assets/images/sidebar/blogs/img_2.jpg" alt="image_not_found">
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
                                        <img src="assets/images/sidebar/blogs/img_3.jpg" alt="image_not_found">
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

                    <div class="widget sidebar_category ul_li_block" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="widget_title mb-30">Categories</h3>
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
</section>

@endsection





