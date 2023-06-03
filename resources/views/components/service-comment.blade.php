@props(['comment'])


<div class="comment_item clearfix" data-aos="fade-up" data-aos-delay="100">
    <div class="thumbnail_image">
        @if (auth()->user()->avatar)
            <img class="rounded-circle" src="{{ url('/') . Storage::url(auth()->user()->avatar) }}"
                 alt="image_not_found">
        @else
            <img class="rounded-circle" src="{{url('/')}}/assets/images/default-avatar.jpg"
                 alt="image_not_found">
        @endif
    </div>
    <div class="comment_content">
        <h3 class="admin_name">{{$comment->author->name}}</h3>
        <span class="post_time">{{$comment->created_at}}</span>
        <p class="mb-0">
            {{ $comment->body }}
        </p>
    </div>
{{--    <a href="#!" class="reply_btn">REPLY <i
            class="fal fa-long-arrow-right ml-1"></i></a>--}}
</div>
