<x-layout>

    <section id="breadcrumb_section"
             class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
        <div class="container">
            <div class="breadcrumb_content text-center decrease_size" data-aos="fade-up" data-aos-delay="100">
                <h1 class="page_title mb-30">
                    Додати категорію

                </h1>
                <div class="breadcrumb_nav ul_li_center">
                    <ul class="clearfix">
                        <li>
                            <a href="{{url('/')}}">Головна</a>
                        </li>
                        <li>
                            <a href="{{route('show-categories')}}">Категорії</a>
                        </li>
                        <li>
                            Додати категорію
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

    <!-- contact_section - start
				================================================== -->
    <section id="contact_section" class="contact_section sec_ptb_120 clearfix">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

                <div class="col-lg-8 col-md-8 col-sm-10">
                    <div class="contact_form" data-aos="fade-up" data-aos-delay="500">

                        <div class="section_title decrease_size mb-50">
                            <h2 class="title_text mb-30">Редагувати категорію {{$category->name}}</h2>

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <form action="{{route('update-category', $category)}}" method="post">
                            @csrf
                            <div class="form_item">
                                <label for="name">Назва категорії</label>
                                <input type="text" value="{{$category->name}}" name="name" placeholder="Найменування категорії">
                            </div>

                            <div class="buttons-group d-flex justify-content-between">
                                <div class="btn_wrap">
                                    <a href="{{route('show-categories')}}" class="btn btn_border border_blue float-right">Назад</a>
                                </div>
                                <div class="btn_wrap">
                                    <button type="submit" class="btn bg_default_blue">Зберегти зміни</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- contact_section - end
    ================================================== -->

</x-layout>





