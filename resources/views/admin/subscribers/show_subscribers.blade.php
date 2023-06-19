<x-layout>

    <x-page.breadcrumb title="Перелік сервісів">

    </x-page.breadcrumb>


    <section id="admin_section" class="cart_section sec_ptb_120 bg_gray clearfix" data-aos="fade-up"
             data-aos-delay="100">
        <div class="container">
            @include('admin.include.navbar')
            <div class="table_wrap border_bottom mb-50">
                <div class="d-flex mb-3">
                    <div class="bg-primary text-white m-1 p-2 rounded">
                        Зареєстровано за сьогодні: {{$subscribersToday->count()}}
                    </div>
                    <div class="bg-primary text-white m-1 p-2 rounded">
                        Зареєстровано за місяць: {{$subscribersCurrentMonth->count()}}
                    </div>
                    <div class="bg-primary text-white p-2 my-1 mr-1 ml-0 rounded">
                        Всього підпісників: {{$subscribers->count()}}
                    </div>
                </div>
                <table class="table m-0">
                    <thead>
                    <tr>
                        <th class="text-center">Електронна адреса</th>
                        <th class="text-center">Дата підписки</th>
                        <th class="text-center">Видалити</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if ($subscribers->count() === 0)
                        <tr>
                            <td class="text-center" colspan="3">
                                <span class="text-center">Підписники відсутні</span>
                            </td>
                        </tr>

                    @else
                        @foreach ($subscribers as $subscriber)
                            <tr>
                                <td class="text-center">
                                    <span class="text-center">{{$subscriber->email}}</span>
                                </td>
                                <td class="text-center">
                                    <div class="product_quantity">
                                        <span class="text-center">{{$subscriber->created_at}}</span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <form method="POST" action="{{ route('delete-subscriber', $subscriber->id) }}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <a type="submit" class="delete show_confirm"
                                           data-name="{{ "сервіс - " . $subscriber->email}}"><i
                                                class="fas fa-trash icon_blue text-danger"></i></a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>


        </div>
    </section>

    <x-page.delete-modal/>


</x-layout>
