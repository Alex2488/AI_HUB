<x-layout>

    <section id="breadcrumb_section"
             class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
        <div class="container">
            <div class="breadcrumb_content text-center decrease_size" data-aos="fade-up" data-aos-delay="100">
                <h1 class="page_title mb-30">
                    {{$service->title}}
                </h1>
                <div class="breadcrumb_nav ul_li_center">
                    <ul class="clearfix">
                        <li>
                            <a href="{{url('/')}}">Головна</a>
                        </li>
                        <li>
                            <a href="{{route('show-services')}}">Сервіси</a>
                        </li>
                        <li>
                            Редагувати сервіс
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
                            <h2 class="title_text mb-30">Редагувати сервіс {{$service->title}} </h2>

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

                        <form action="{{ route('update-service', $service->id )}}" method="post">

                            @csrf
                            <div class="form_item">
                                <h6 class="ml-5">Найменування сервісу</h6>
                                <input type="text" name="title" value="{{$service->title}}"
                                       placeholder="Найменування сервісу">
                            </div>
                            <div class="form_item">
                                <h6 class="ml-5">URL строка</h6>
                                <input type="text" name="slug" value="{{$service->slug}}" placeholder="URL строка">
                            </div>
                            <div class="form_item">
                                <h6 class="ml-5">Завантажити логотип</h6>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="logo" value="{{$service->logo}}" >
                                    <label class="custom-file-label">Завантажити логотип</label>
                                </div>
                            </div>
                            <div class="form_item">
                                <h6 class="ml-5">Посилання на сервіс</h6>
                                <input type="text" name="link_to_service" value="{{$service->link_to_service}}"
                                       placeholder="Посилання на сервіс">
                            </div>
                            <div class="form_item dropdown">
                                <h6 class="ml-5">Категорія сервісу</h6>
                                <div class="input-group mb-3">
                                    <select class="custom-select" name="category_id" id="inputGroupSelect01">
                                        <option selected value="{{$service->category->id}}"> {{$service->category->name}}</option>
                                        @foreach ($categories as $category)
                                            @if($category->id != $service->category->id)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form_item">
                                <h6 class="ml-5">Завантажити зображення</h6>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" >
                                    <label class="custom-file-label">Завантажити зображення</label>
                                </div>
                            </div>
                            <div class="form_item">
                                <h6 class="ml-5">Короткий опис</h6>
                                <textarea name="excerpt"
                                          placeholder="Короткий опис -  до 140 символів">{{$service->excerpt}}{{$service->excerpt}}</textarea>
                            </div>

                            <div class="form_item">
                                <h6 class="ml-5">Повний опис - загальна інформація</h6>
                                <textarea name="information_1"
                                          placeholder="Перший абзац">{{$service->information_1}}</textarea>

                            </div>
                            <div class="form_item">

                                <textarea name="information_2"
                                          placeholder="Другий абзац">{{$service->information_2}}</textarea>
                            </div>
                            <div class="form_item">

                                <textarea name="information_3"
                                          placeholder="Третій абзац">{{$service->information_3}}</textarea>
                            </div>

                            <div class="form_item">
                                <h6 class="ml-5">Основний функціонал</h6>

                                <textarea name="functionality_1"
                                          placeholder="Перший пункт">{{$service->functionality_1}}</textarea>

                            </div>
                            <div class="form_item">

                                <textarea name="functionality_2"
                                          placeholder="Другий пункт">{{$service->functionality_2}}</textarea>
                            </div>
                            <div class="form_item">

                                <textarea name="functionality_3"
                                          placeholder="Третій пункт">{{$service->functionality_3}}</textarea>
                            </div>

                            <div class="form_item">

                                <textarea name="functionality_4"
                                          placeholder="Четвертий пункт">{{$service->functionality_4}}</textarea>
                            </div>

                            <div class="form_item">
                                <h6 class="ml-5">Переваги</h6>

                                <textarea name="benefits_1"
                                          placeholder="Перший абзац">{{$service->benefits_1}}</textarea>

                            </div>
                            <div class="form_item">

                                <textarea name="benefits_2"
                                          placeholder="Другий абзац">{{$service->benefits_2}}</textarea>
                            </div>
                            <div class="form_item">

                                <textarea name="benefits_3"
                                          placeholder="Третій абзац">{{$service->benefits_3}}</textarea>
                            </div>
                            <div class="buttons-group d-flex justify-content-between">
                                <div class="btn_wrap">
                                    <a href="{{route('show-services')}}" class="btn btn_border border_blue float-right">Назад</a>
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





