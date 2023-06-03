<x-layout>

    <x-page.breadcrumb title="Перелік постів">

    </x-page.breadcrumb>


    <section id="admin_section" class="cart_section sec_ptb_120 bg_gray clearfix" data-aos="fade-up"
             data-aos-delay="100">
        <div class="container">
            @include('admin.include.navbar')


            <div class="table_wrap border_bottom mb-50">
                <table class="table m-0">
                    <thead>
                    <tr>
                        <th class="text-center">Назва посту</th>
                        <th class="text-center">Короткий опис</th>
                        <th class="text-center">Публікація</th>
                        <th class="text-center">Редагувати</th>
                        <th class="text-center">Видалити</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if ($posts->count() === 0)
                        <tr>
                            <td class="text-center" colspan="5">
                                <span class="text-center">Пости відсутні</span>
                            </td>
                        </tr>
                    @else
                        @foreach ($posts as $post)
                            <tr>
                                <td class="text-center">
                                    <div class="product_item clearfix">
                                        <div class="item_content">
                                        <span class="item_title"><a
                                                href="{{route('show-post', $post)}}"> {{$post -> title}}</a></span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">

                                    <span class="text-center">{{$post->excerpt}}</span>
                                </td>
                                <td class="text-center">

                                    <span class="text-center">{{($post->is_published) ? 'так' : 'ні'}}</span>
                                </td>
                                <td class="text-center">

                                    <a href="{{route('edit-post', $post->id)}}" type="button" class="edit">
                                        <i class="fas fa-edit icon_blue"></i>
                                    </a>
                                </td>
                                <td class="text-center">

                                    <form method="POST" action="{{ route('delete-post', $post->id) }}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <a type="submit" class="delete show_confirm"
                                           data-name="{{ "пост - " . $post->title}}"><i
                                                class="fas fa-trash icon_blue text-danger"></i></a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif

        </div>
    </section>

    <x-page.delete-modal/>


</x-layout>
