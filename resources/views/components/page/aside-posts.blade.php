<div class="widget sidebar_blog ul_li_block" data-aos="fade-up" data-aos-delay="400">
    <h3 class="widget_title mb-30">Про штучний інтелект</h3>
    <ul class="clearfix">
        @foreach($popular_posts as $popular_post)
            <li>
                <div class="blog_small">
                    <a href="{{url('/')}}/posts/{{$popular_post -> slug}}" class="item_image">
                        <img src="{{  url('/') . Storage::url($popular_post->image) }}" alt="image_not_found">
                    </a>
                    <div class="item_content">
                        <h4 class="item_title">
                            <a href="{{url('/')}}/posts/{{$popular_post -> slug}}">{{$popular_post->title}}</a>
                        </h4>
                        <span class="post_date">{{$popular_post->updated_at->format('d.m.Y')}}</span>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>
