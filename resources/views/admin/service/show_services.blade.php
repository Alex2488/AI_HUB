<x-layout>

    <x-page.breadcrumb title="Перелік сервісів">

    </x-page.breadcrumb>




    <section id="admin_section" class="cart_section sec_ptb_120 bg_gray clearfix" data-aos="fade-up"
             data-aos-delay="100">
        <div class="container">
            @include('admin.include.navbar')


            <div class="table_wrap border_bottom mb-50">
                <table class="table m-0">
                    <thead>
                    <tr>
                        <th class="text-center">Назва сервісу</th>
                        <th class="text-center">Категорія</th>
                        <th class="text-center">Лайків</th>
                        <th class="text-center">Коментарів</th>
                        <th class="text-center">Публікація</th>
                        <th class="text-center">Редагувати</th>
                        <th class="text-center">Видалити</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($services as $service)

                        <tr>
                            <td class="text-center">
                                <div class="product_item clearfix">
                                    <div class="item_content">
                                        <span class="item_title"><a
                                                href="{{route('show-service', $service)}}"> {{$service -> title}}</a></span>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">

                                <span class="text-center">{{$service->category->name}}</span>
                            </td>
                            <td class="text-center">

                                <div class="product_quantity">
                                    <span class="text-center">{{$service->liked_users_count}}</span>
                                </div>
                            </td>
                            <td class="text-center">

                                <span class="text-center">{{$service->comments->count()}}</span>
                            </td>
                            <td class="text-center">

                                <span class="text-center">{{($service->is_published) ? 'так' : 'ні'}}</span>
                            </td>
                            <td class="text-center">

                                <a href="{{route('edit-service', $service->id)}}" type="button" class="edit">
                                    <i class="fas fa-edit icon_blue"></i>
                                </a>
                            </td>
                            <td class="text-center">

                                <form method="POST" action="{{ route('delete-service', $service->id) }}">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <a type="submit" class="delete show_confirm"
                                       data-name="{{ "сервіс - " . $service->title}}"><i
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

    <x-page.delete-modal/>


</x-layout>
