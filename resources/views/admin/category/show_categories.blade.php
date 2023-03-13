<x-layout>
    @include('admin.include.admin_sidebar')
    <section id="breadcrumb_section"
             class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
        <div class="container">
            <div class="breadcrumb_content text-center decrease_size" data-aos="fade-up" data-aos-delay="100">
                <h1 class="page_title mb-30">
                    Панель адмністратора
                </h1>
                <div class="breadcrumb_nav ul_li_center">
                    <ul class="clearfix">
                        <li>
                            <a href="{{url('/')}}">Головна</a>
                        </li>
                        <li>
                            Панель адмністратора
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


    <section id="admin_section" class="cart_section sec_ptb_120 bg_gray clearfix" data-aos="fade-up"
             data-aos-delay="100">
        <div class="container">

            <a href="{{route('add-category')}}" class="btn btn_border float-right mb-4">Нова категорія
            </a>

            <div class="table_wrap border_bottom mb-50">
                <table class="table m-0">
                    <thead>
                    <tr>
                        <th class="text-center">Назва категорії</th>
                        <th class="text-center">Кількість сервісів</th>
                        <th class="text-center">Путь</th>
                        <th class="text-center">Дата створення</th>
                        <th class="text-center">Редагувати</th>
                        <th class="text-center">Видалити</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($categories as $category)

                        <tr>
                            <td class="text-center">
                                <div class="product_item clearfix">
                                    <div class="item_content">
                                        <span class="item_title">{{$category -> name}}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="text-center">{{$category->service->count()}}</span>
                            </td>
                            <td class="text-center">
                                <span class="text-center">{{$category -> slug}}</span>
                            </td>

                            <td class="text-center">
                                <span class="text-center">{{$category -> updated_at}}</span>
                            </td>

                            <td class="text-center">

                                <a href="{{route('edit-category', $category->id)}}" type="button" class="edit">
                                    <i class="fas fa-edit icon_blue"></i>
                                </a>
                            </td>
                            <td class="text-center">

                                <form method="POST" action="{{ route('delete-category', $category->id) }}">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <a type="submit" class="delete show_confirm"
                                       data-title-service="{{'категорію - ' . $category->name}}"><i
                                            class="fas fa-trash icon_blue text-danger"></i></a>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
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
