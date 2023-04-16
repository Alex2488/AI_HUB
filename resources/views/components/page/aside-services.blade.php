


    <div class="widget sidebar_blog ul_li_block" data-aos="fade-up" data-aos-delay="400">
                <h3 class="widget_title mb-30">AI сервіси</h3>
                <ul class="clearfix">
                    @foreach($services_random as $service_random)
                        <li>
                            <div class="blog_small d-flex align-items-center">
                                <a href="{{url('/')}}/posts/{{$service_random -> slug}}" class="item_image">
                                    <img src="{{  url('/') . Storage::url($service_random->image) }}" alt="image_not_found">
                                </a>
                                <div class="item_content">
                                    <h4 class="item_title">
                                        <a href="{{url('/')}}/posts/{{$service_random -> slug}}">{{$service_random->title}}</a>
                                    </h4>
                                    <span class="post_date">{{$service_random->category->name}}</span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
    </div>


{{--    @if(Route::is('show-service'))
    <div class="widget sidebar_category ul_li_block" data-aos="fade-up" data-aos-delay="100">
        <h3 class="widget_title mb-30">Категорії</h3>
        <ul class="clearfix">
            @foreach ($categories as $category)
                <li><a href="#!">{{$category->name}} <span>({{$category->services->count()}})</span></a></li>
            @endforeach

        </ul>
    </div>
    @endif

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
    </div>--}}


