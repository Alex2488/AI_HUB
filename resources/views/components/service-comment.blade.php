@props(['comment'])


<div class="comment_item clearfix" data-aos="fade-up" data-aos-delay="100">
    <div class="thumbnail_image">
        <img src="https://i.pravatar.cc/60?id={{$comment->id}}" alt="image_not_found">
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
