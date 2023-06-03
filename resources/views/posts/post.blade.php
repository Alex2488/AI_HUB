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
                        {!! $post->main_content !!}
                    </p>


                    @if($posts_alt->count()>0)
                        <h3 class="title_text mb-0">Інші публікації</h3>
                        <div class="row mb-80">
                            <div class="row mb-50">
                                @foreach ($posts_alt as $post_alt)
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="blog_grid" data-aos="fade-up" data-aos-delay="100">
                                            <a href="{{url('/')}}/posts/{{$post_alt -> slug}}" class="item">
                                                <img src="{{ url('/') . Storage::url($post_alt->image) }}">
                                                <p class="mb-0 text-black-50 text-center">
                                                    <strong>{{$post_alt->title}}</strong>
                                                </p>
                                            </a>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <div class="col-lg-4 col-md-10 col-sm-12">
                    @include('components.aside')
                </div>

            </div>
        </div>
    </section>
</x-layout>





