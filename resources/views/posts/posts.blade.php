<x-layout>

    <x-page.breadcrumb title="Блог">

    </x-page.breadcrumb>

    <section id="blog_section" class="blog_section sec_ptb_120 clearfix">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

                <div class="mt--60 col-lg-8 col-md-10">
                    <div class="blog_masonry_grid grid">
                        <div class="grid-sizer"></div>

                        @foreach($posts as $post)
                            @if($post->is_published)
                        <div class="grid-item">
                            <div class="blog_grid decrease_size" data-aos="fade-up" data-aos-delay="100">
                                <div class="post_date">
                                    <strong>14</strong>
                                    <span>Jan</span>
                                </div>
                                <a href="#!" class="item_image">
                                    <img src="{{ url('/') . Storage::url($post->image) }}" alt="image_not_found">
                                </a>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="{{url('/')}}/posts/{{$post -> slug}}">{{$post->title}}</a>
                                    </h3>
                                    <p class="mb-30">
                                        {{$post -> excerpt}}
                                    </p>
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="#!" class="details_btn">Read More <i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="col-6">
                                            <a href="#!" class="comment_btn float-right"><i class="far fa-comment mr-1"></i> 03 Comments</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endif
                        @endforeach

                    </div>

                    <div class="pagination_nav ul_li" data-aos="fade-up" data-aos-delay="100">
                        <ul class="clearfix">
                            <li><a href="#!"><i class="ti-arrow-left"></i></a></li>
                            <li class="active"><a href="#!">1</a></li>
                            <li><a href="#!">2</a></li>
                            <li><a href="#!"><i class="ti-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-7">
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


</x-layout>
