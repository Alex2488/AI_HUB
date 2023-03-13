<aside id="sidebar_section" class="sidebar_section pl-30">


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

        </ul>
    </div>

    <div class="widget sidebar_category ul_li_block" data-aos="fade-up" data-aos-delay="100">
        <h3 class="widget_title mb-30">Категорії</h3>
        <ul class="clearfix">
            @foreach ($categories as $category)
                <li><a href="#!">{{$category->name}} <span>({{$category->count()}})</span></a></li>
            @endforeach

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
