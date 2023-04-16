{{--{{dd($service->tags)}}--}}

@if($service->tags)
<div class="widget sidebar_tag" data-aos="fade-up" data-aos-delay="100">
    <h3 class="widget_title mb-30">Теги</h3>
    <div class="tag_list ul_li">
        <ul class="clearfix">
          @foreach($service->tags as $tag)

            <li><a href="{{url('services')}}?tags={{$tag->slug}}">{{$tag->name}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
@endif


