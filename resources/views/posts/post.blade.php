<x-layout>

    <x-page.breadcrumb title="{{$post->title}}">
        <li>
            <a href="{{route('posts')}}">Блог</a>
        </li>
    </x-page.breadcrumb>


    <section class="details_section sec_ptb_120 clearfix">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

                <div class="col-lg-8 col-md-10 col-sm-12">
                    <div class="item_image mb-50" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ url('/') . Storage::url($post->image) }}" alt="image_not_found">
                    </div>

                    <p class="mb-30">
                        {{$post->main_content}}
                    </p>


                    <div class="row mb-30">
                        <div class="col-6">
                            <div class="share_links ul_li">
                                <span class="list_title">SHARE:</span>
                                <ul class="clearfix">
                                    <li><a href="#!"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#!"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#!"><i class="icon-vimeo"></i></a></li>
                                    <li><a href="#!"><i class="icon-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-6">
                            <a href="#!" class="comment_btn float-right"><i class="far fa-comment mr-1"></i> 03 Comments</a>
                        </div>
                    </div>

                    <div class="item_tag ul_li mb-80">
                        <span class="list_title">TAGS:</span>
                        <ul class="clearfix">
                            <li><a href="#!">makro</a></li>
                            <li><a href="#!">Web Design</a></li>
                            <li><a href="#!">Saas</a></li>
                        </ul>
                    </div>

                    <h3 class="title_text mb-0">Related Posts</h3>
                    <div class="row mb-80">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="blog_grid" data-aos="fade-up" data-aos-delay="100">
                                <div class="post_date">
                                    <strong>14</strong>
                                    <span>Jan</span>
                                </div>
                                <a href="#!" class="item_image">
                                    <img src="assets/images/blogs/img_16.jpg" alt="image_not_found">
                                </a>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Fast App development</a>
                                    </h3>
                                    <p class="mb-0">
                                        Why I say old chap that is spiffi pukka bamboozl...
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="blog_grid" data-aos="fade-up" data-aos-delay="300">
                                <div class="post_date">
                                    <strong>14</strong>
                                    <span>Jan</span>
                                </div>
                                <a href="#!" class="item_image">
                                    <img src="assets/images/blogs/img_17.jpg" alt="image_not_found">
                                </a>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Fast App development</a>
                                    </h3>
                                    <p class="mb-0">
                                        Why I say old chap that is spiffi pukka bamboozl...
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="blog_grid" data-aos="fade-up" data-aos-delay="500">
                                <div class="post_date">
                                    <strong>14</strong>
                                    <span>Jan</span>
                                </div>
                                <div class="item_image">
                                    <img src="assets/images/blogs/img_18.jpg" alt="image_not_found">
                                    <a class="popup_video" href="https://www.youtube.com/watch?v=JOq6Q-YAg4s"><i class="icon-play"></i></a>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Fast App development</a>
                                    </h3>
                                    <p class="mb-0">
                                        Why I say old chap that is spiffi pukka bamboozl...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comment_area mb-80 clearfix">
                        <h3 class="title_text mb-50">02 Comments</h3>
                        <div class="comment_item clearfix" data-aos="fade-up" data-aos-delay="100">
                            <div class="thumbnail_image">
                                <img src="assets/images/meta/img_2.png" alt="image_not_found">
                            </div>
                            <div class="comment_content">
                                <h3 class="admin_name">Daniel Abraham</h3>
                                <span class="post_time">Just Now</span>
                                <p class="mb-0">
                                    Why I say old chap that is spiffing pukka, bamboozled wind up bugger buggered zonked hanky panky a blinding shot the little
                                </p>

                                <div class="comment_item clearfix">
                                    <div class="thumbnail_image">
                                        <img src="assets/images/meta/img_3.png" alt="image_not_found">
                                    </div>
                                    <div class="comment_content">
                                        <h3 class="admin_name">Daniel Abraham</h3>
                                        <span class="post_time">Just Now</span>
                                        <p class="mb-0">
                                            Why I say old chap that is spiffing pukka, bamboozled wind up bugger buggered zonked hanky panky a blinding shot the little
                                        </p>
                                    </div>
                                    <a href="#!" class="reply_btn">REPLY <i class="fal fa-long-arrow-right ml-1"></i></a>
                                </div>
                            </div>
                            <a href="#!" class="reply_btn">REPLY <i class="fal fa-long-arrow-right ml-1"></i></a>
                        </div>

                        <div class="comment_item clearfix" data-aos="fade-up" data-aos-delay="200">
                            <div class="thumbnail_image">
                                <img src="assets/images/meta/img_4.png" alt="image_not_found">
                            </div>
                            <div class="comment_content">
                                <h3 class="admin_name">Daniel Abraham</h3>
                                <span class="post_time">Just Now</span>
                                <p class="mb-0">
                                    Why I say old chap that is spiffing pukka, bamboozled wind up bugger buggered zonked hanky panky a blinding shot the little
                                </p>
                            </div>
                            <a href="#!" class="reply_btn">REPLY <i class="fal fa-long-arrow-right ml-1"></i></a>
                        </div>
                    </div>

                    <div class="comment_form" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="title_text mb-50">Leave a comment</h3>
                        <form action="#">

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form_item">
                                        <input type="text" name="name" placeholder="Your Name">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form_item">
                                        <input type="email" name="email" placeholder="Your Email">
                                    </div>
                                </div>
                            </div>

                            <div class="form_item">
                                <input type="text" name="website" placeholder="Your Website (optional)">
                            </div>

                            <div class="form_item">
                                <textarea name="comment" placeholder="Comment"></textarea>
                            </div>

                            <button type="submit" class="btn bg_default_blue">Post Comment</button>

                        </form>
                    </div>
                </div>

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
</x-layout>





