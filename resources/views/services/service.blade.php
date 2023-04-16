<x-layout>

    <x-page.breadcrumb title="{{$service->title}}">
        <li>
            <a href="{{route('services')}}">Сервіси</a>
        </li>
    </x-page.breadcrumb>


    <body class="blog_details_page">
    <div class="body_wrap">
        <section class="details_section casestudy_details sec_ptb_120 pb-0 clearfix">
            <div class="container">
                <div class="row mb-50 justify-content-lg-between justify-content-md-between justify-content-sm-center">
                               <div class="col-lg-8 col-md-7 col-sm-12">
                        <div class="item_image mr-30" data-aos="fade-up" data-aos-delay="300">
                            <img src="{{  url('/') . Storage::url($service->image) }}" class="card-img-service"
                                 alt="image_not_found">
                            <div class="mt-5">
                                {!! $service->main_content !!}
                            </div>
                            <div class="col-12">
                                <div class="service-footer d-flex flex-column justify-content-center" data-aos="fade-up"
                                     data-aos-delay="100">
                                    <div class="row align-items-center">
                                        <h6 class="widget_title mb-0">Категорія:</h6>
                                        <div class="tag_list ul_li">
                                            <ul class="clearfix d-flex">
                                                <li class="mx-2"><a href="{{url('services')}}/?category={{$service->category->slug}}">{{$service->category->name}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row align-items-center my-4">
                                        <h6 class="widget_title mb-0">Посилання на сайт:</h6>
                                        <a href="{{$service->link_to_service}}"
                                           class="ml-2">{{$service->link_to_service}}</a>
                                    </div>
                                </div>
                            </div>
                            @if($services_alt->count()>0)
                                <h3 class="title_text mb-0">Схожі сервіси</h3>
                                <div class="row mb-50">
                                    @foreach ($services_alt as $service_alt)
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <div class="blog_grid" data-aos="fade-up" data-aos-delay="100">
                                                <div class="post_date">
                                                    {{--                                            <strong>14</strong>--}}
                                                    <span>{{$service_alt->category->name}}</span>
                                                </div>
                                                <a href="#!" class="item">
                                                    <img src="{{ url('/') . Storage::url($service_alt->logo) }}">
                                                </a>
                                                <div class="item_content">
                                                    <h3 class="item_title">
                                                        <a href="{{url('/')}}/services/{{$service_alt -> slug}}"></a>
                                                    </h3>
                                                    <p class="mb-0 text-black-50 text-center">
                                                        <strong>{{$service_alt-> title}}</strong>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div id="comments" class="comment_area mt-4 mb-80 clearfix">
                            @if (auth()->check() && auth()->user()->email_verified_at !== null)
                                <div class="comment_form" data-aos="fade-up" data-aos-delay="100">
                                    <h5 class="title_text mb-50">{{auth()->user()->name}}, поділись враженнями
                                        від
                                        сервісу</h5>
                                    <form action="{{route('add-comment')}}" method="post">
                                        @csrf
                                        <div class="form_item">
                                                <textarea
                                                    name="body"
                                                    placeholder="Comment"></textarea>
                                        </div>
                                        <input
                                            type="hidden"
                                            name="service_id"
                                            value="{{$service->id}}"
                                        >
                                        <button type="submit" class="btn bg_default_blue mb-4">Відправити
                                        </button>
                                    </form>
                                </div>
                                @foreach ($service->comments as $comment)
                                    <x-service-comment :comment="$comment"/>
                                @endforeach
                            @elseif (auth()->check() && auth()->user()->email_verified_at === null)
                                <div class="comment_form" data-aos="fade-up" data-aos-delay="100">
                                    <h3 class="title_text mb-50">Для того, щоб бачити коментарі, необхідно
                                        підтвердити
                                        електронну пошту.
                                        <form action="{{route('verification.send')}}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn-link">
                                                Направити повтоно лист?
                                            </button>
                                        </form>
                                    </h3>
                                </div>
                            @else
                                <div class="comment_form" data-aos="fade-up" data-aos-delay="100">
                                    <h3 class="title_text mb-50">Для того, щоб бачити коментарі, необхідно <a
                                            href="{{route('register')}}"> зареєструватись </a> або <a
                                            href="{{route('login')}}"> авторизуватись </a> на сайті.
                                    </h3>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-5 col-sm-12 ">
                        <div class="item_content d-flex flex-column justify-content-around pl-4 mb-30"
                             data-aos="fade-up" data-aos-delay="400">
                            <h2 class="item_title">Інформація</h2>
                            <div class="info_list ul_li_block mb-30">
                                <ul class="clearfix">
                                    <li><strong>Назва :</strong> {{$service->title}}</li>
                                    <li><strong>Дата :</strong> {{$service->release_date}}</li>
                                    <li>
                                        <strong>Категорія :</strong> <a href="#!">{{$service->category->name}}</a>
                                    </li>
                                    <li><strong>Розробник :</strong> {{$service->developer}}</li>
                                </ul>
                            </div>
                            <div class="btns_group ul_li clearfix">
                                <ul class="clearfix">
                                    <li><a href="{{$service->link_to_service}}"
                                           class="btn bg_default_blue">Спробувати</a></li>
                                    <li>
                                        @include('components.service-like')
                                    </li>
                                </ul>
                            </div>
                        </div>


                        @include('components.aside')
                    </div>
                </div>
            </div>
        </section>
    </div>
    </body>
</x-layout>





