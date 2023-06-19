<x-layout>
    <x-page.breadcrumb title="Перелік користувачів">

    </x-page.breadcrumb>

    <section id="admin_section" class="cart_section sec_ptb_120 bg_gray clearfix" data-aos="fade-up"
             data-aos-delay="100">
        <div class="container">

            @include('admin.include.navbar')

            <div class="table_wrap border_bottom mb-50">
                <div class="d-flex mb-3">
                    <div class="bg-primary text-white m-1 p-2 rounded">
                        Зареєстровано за сьогодні: {{$usersToday->count()}}
                    </div>
                    <div class="bg-primary text-white m-1 p-2 rounded">
                        Зареєстровано за місяць: {{$usersCurrentMonth->count()}}
                    </div>
                    <div class="bg-primary text-white p-2 my-1 mr-1 ml-0 rounded">
                        Всього користувачів: {{$users->count()}}
                    </div>
                </div>

                <table class="table m-0">
                    <thead>
                    <tr>
                        <th class="text-center">Ім'я користувача</th>
                        <th class="text-center">Роль</th>
                        <th class="text-center">Електронна пошта</th>
                        <th class="text-center">Верифікація пошти</th>
                        <th class="text-center">Дата створення</th>
                        <th class="text-center">Редагувати</th>
                        <th class="text-center">Видалити</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($users as $user)

                        <tr>
                            <td class="text-center">
                                <div class="product_item clearfix">
                                    <div class="item_content">
                                        <span class="item_title">{{$user -> name}}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="text-center">{{($user -> role) != 1 ? 'Користувач' : 'Адміністратор'}}</span>
                            </td>
                            <td class="text-center">
                                <span class="text-center">{{$user -> email}}</span>
                            </td>
                            <td class="text-center">
                                <span class="text-center">{{($user -> email_verified_at) ? 'Так' : 'Ні' }}</span>
                            </td>

                            <td class="text-center">
                                <span class="text-center">{{$user -> updated_at}}</span>
                            </td>

                            <td class="text-center">

                                <a href="{{route('edit-user', $user->id)}}" type="button" class="edit">
                                    <i class="fas fa-edit icon_blue"></i>
                                </a>
                            </td>
                            <td class="text-center">

                                <form method="POST" action="{{ route('delete-user', $user->id) }}">

                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <a type="submit" class="delete show_confirm"
                                       data-name="{{ "користувача - " . $user->name}}"><i
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
