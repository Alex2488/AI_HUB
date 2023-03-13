<x-layout>

    <section id="breadcrumb_section"
             class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
        <div class="container">
            <div class="breadcrumb_content text-center decrease_size" data-aos="fade-up" data-aos-delay="100">
                <h1 class="page_title mb-30">
                    Всі AI сервіси
                </h1>
                <div class="breadcrumb_nav ul_li_center">
                    <ul class="clearfix">
                        <li>
                            <a href="{{url('/')}}">Головна</a>
                        </li>
                        <li>
                            Всі AI сервіси
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="deco_image spahe_1" data-aos="fade-down" data-aos-delay="300">
            <img src="{{url('/')}}/assets/images/shapes/shape_1.png" alt="spahe_not_found">
        </div>
        <div class="deco_image spahe_2" data-aos="fade-up" data-aos-delay="400">
            <img src="{{url('/')}}/assets/images/shapes/shape_2.png" alt="spahe_not_found">
        </div>
    </section>

    <!-- job_section - start
            ================================================== -->
    <section id="job_section" class="job_section sec_ptb_120 bg_gray clearfix">
        <div class="container">

            <div class="section_title decrease_size mb-30  d-flex justify-content-between" data-aos="fade-up"
                 data-aos-delay="100">
                <h2 class=" title_text mb-0">AI сервіси</h2>
            </div>
            <div class="sidebar_section mb-4">
                <div class="widget sidebar_search form_item" data-aos="fade-up" data-aos-delay="300">
                    <form method="GET" action="#">
                        @csrf
                        @if (\request('search'))
                            <input type="search" name="search" value="{{request('search')}}">
                        @else
                            <input type="search" name="search" placeholder="Пошук...">
                        @endif
                            <button type="submit"><i class="ti-search"></i></button>
                    </form>
                </div>
            </div>


            <div class="button-group filter-btns-group ul_li mb-30" data-aos="fade-up" data-aos-delay="200">
                <ul class="clearfix">
                    <li>
                        <button class="active" data-filter="*">Всі категорії</button>
                    </li>

                    @foreach ($categories as $category)
                        <li>
                            <button data-filter=".category-{{$category->id}}">{{$category->name}}</button>
                        </li>
                    @endforeach

                </ul>
            </div>

            <div class="jobs_grid element_grid " >

                @foreach($services as $service)

                    <div class="element-item category-{{$service -> category_id}}"
                         data-category="category-{{$service -> category_id}}">
                        <div data-aos="fade-up" data-aos-delay="300">
                            <div class="job_item clearfix d-flex align-items-center">
                                <div class="item_icon">
                                    <img src="{{ url('/') . Storage::url($service->logo) }}" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title"><a
                                            href="{{url('/')}}/services/{{$service -> slug}}">{{$service->title}}</a>
                                    </h3>
                                    <p class="mb-0">{{$service -> excerpt}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- job_section - end
    ================================================== -->

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Видалення сервісу</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <form id="delete-form" method="post">
                        @csrf
                        @method ('DELETE')

                        <button type="button" class="btn btn-danger btn-exit " data-dismiss="modal">No</button>

                        <span class="text-right">
                <button type="button" class="btn btn-primary btn-delete" data-dismiss="modal">Yes</button>
            </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->


</x-layout>
