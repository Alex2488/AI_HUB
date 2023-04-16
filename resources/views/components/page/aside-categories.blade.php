<div class="widget sidebar_category ul_li_block" data-aos="fade-up" data-aos-delay="100">
    <h3 class="widget_title mb-30">Категорії</h3>
    <ul class="clearfix">
        @foreach ($categories as $category)
            <li><a href="#!">{{$category->name}} <span>({{$category->services->count()}})</span></a></li>
        @endforeach
    </ul>
</div>




