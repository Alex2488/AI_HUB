<x-layout>

    <section id="breadcrumb_section"
             class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
        <div class="container">
            <div class="breadcrumb_content text-center decrease_size" data-aos="fade-up" data-aos-delay="100">
                <h1 class="page_title mb-30">
                    Переглянуті AI сервіси
                </h1>
                <div class="breadcrumb_nav ul_li_center">
                    <ul class="clearfix">
                        <li>
                            {{--                            <a href="{{url('/')}}">Головна</a>--}}
                        </li>
                        <li>
                            Переглянуті AI сервіси
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="deco_image spahe_1" data-aos="fade-down" data-aos-delay="300">
            {{--            <img src="{{url('/')}}/assets/images/shapes/shape_1.png" alt="spahe_not_found">--}}
        </div>
        <div class="deco_image spahe_2" data-aos="fade-up" data-aos-delay="400">
            {{--            <img src="{{url('/')}}/assets/images/shapes/shape_2.png" alt="spahe_not_found">--}}
        </div>
    </section>

    <!-- job_section - start
            ================================================== -->
    <section id="job_section" class="job_section sec_ptb_120 bg_gray clearfix">
        <div class="container">
            <div class="filter_bar mb-4 clearfix">
                <div class="d-flex justify-content-between">
                    <h2 class="title_text mb-0">Пошук AI сервісу</h2>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="btns_group ul_li_right">
                            <ul class="clearfix">
                                <li><span>Сортувати за</span></li>
                                <li>
                                    <div class="form_item dropdown mb-0">
                                        <button class="" type="button" id="filter_dropdown" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                            Default Sorting
                                        </button>
                                        <div class="dropdown-menu h-auto ul_li_block"
                                             aria-labelledby="filter_dropdown">
                                            <ul class="clearfix">


                                                {{--                                                <li><a href="{{request()->query() ? URL::full() . '&sort=title' : URL::full() . '/?sort=title'}}">найменуванням</a></li>--}}
                                                {{--                                                <li><a href="{{request()->query() ? URL::full() . '&sort=date_up': URL::full() . '/?sort=date_up' }}">датою (зростання)</a></li>--}}
                                                <li>
                                                    {{--                                                    <a href="{{request()->query() ? URL::full() . '&sort=date_down': URL::full() . '/?sort=date_down' }}">датою--}}
                                                    (спадання)</a></li>
                                                <li>
                                                    {{--                                                    <a href="{{request()->query() ? URL::full() . '&sort=popular': URL::full() . '/?sort=popular' }}">популярністю</a>--}}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sidebar_section mb-4">
                <div class="widget sidebar_search form_item" data-aos="fade-up" data-aos-delay="300">
                    {{--                    {{dd(request())}}--}}
                    <form method="GET" action="#">
                        @csrf
                        {{--                        @if(request('category'))--}}
                        {{--                            <input type="hidden" name="category" value="{{request('category')}}">--}}
                        {{--                        @endif--}}


                        @if (\request('search'))
                            <input type="search" name="search" value="{{request('search')}}">
                        @else
                            <input type="search" name="search" placeholder="Введіть запит">
                        @endif
                        <button type="submit"><i class="ti-search"></i></button>
                    </form>
                </div>
            </div>


            <x-category-btn>
                <x-category-btn-item
                    href="{{route('reviewed-services')}}"
                    active="{{request()->routeIs('reviewed-services')}}"
                >
                    Всі категорії
                </x-category-btn-item>

                @foreach($categories as $category)

                    <x-category-btn-item
                        href="{{route('reviewed-services') . '/?category=' . $category->slug}}"

                        active="{{request()->is('/?category=' . $category->slug)}}"
                    >
                        {{$category->name}}
                    </x-category-btn-item>

                @endforeach

            </x-category-btn>
            <div class="jobs_grid element_grid position-relative">


                @if ($reviewedServices->count() === 0)
                    <p class="text-center" data-aos="fade-up" data-aos-delay="100">Відсутні переглянуті сервіси</p>
                @else

                    @foreach($reviewedServices as $reviewedService)
                        @foreach($services as $service)
                            @if($service->id === $reviewedService->service_id)
                                <div class="element-item category-{{$service -> category_id}}"
                                     data-category="category-{{$service -> category_id}}">
                                    <div data-aos="fade-up" data-aos-delay="300">
                                        <div class="job_item d-flex justify-content-between align-items-center">
                                            <div class="job_item_container">
                                                <div class="item_icon">
                                                    <img src="{{ url('/') . Storage::url($service->logo) }}"
                                                         class="px-3"
                                                         alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title"><a
                                                            href="{{url('/')}}/services/{{$service -> slug}}">{{$service->title}}</a>
                                                    </h3>
                                                    <p class="mb-0 pr-4">{{$service -> excerpt}}</p>
                                                </div>
                                            </div>
                                            <div class="btns_group">
                                                @include('components.service-like')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                @endif
                {{--{{$services->links()}}--}}
            </div>
        </div>
    </section>
    <!-- job_section - end
    ================================================== -->


</x-layout>
