<x-layout>

    <x-page.breadcrumb title="Перелік категорій">

    </x-page.breadcrumb>


    <section id="admin_section" class="cart_section sec_ptb_120 bg_gray clearfix" data-aos="fade-up"
             data-aos-delay="100">
        <div class="container">

            @include('admin.include.navbar')


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

                                <span class="text-center">{{$category->services->count()}}</span>
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
                                       data-name="{{'категорію - ' . $category->name}}"><i
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

    <x-page.delete-modal/>


</x-layout>
