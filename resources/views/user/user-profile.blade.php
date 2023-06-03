<x-layout>

    <section id="breadcrumb_section"
             class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
        <div class="container">
            <div class="breadcrumb_content text-center decrease_size" data-aos="fade-up" data-aos-delay="100">
                <h1 class="page_title mb-30">
                    Змінити данні
                </h1>
                <div class="breadcrumb_nav ul_li_center">
                    <ul class="clearfix">
                        <li>
                            <a href="{{url('/')}}">Головна</a>
                        </li>
                        <li>
                            Змінити данні
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

    <!-- checkout_section - start
                    ================================================== -->
    <section id="checkout_section" class="checkout_section sec_ptb_120 bg_gray clearfix">
        <div class="container">
            <div class="row justify-content-lg-center    justify-content-md-center justify-content-sm-center">

                <div class="col-lg-8 col-md-9 col-sm-10">
                    <div class="checkout_sidebar">

                        {{--                        <form action="{{ route('profile-update', $user->id )}}" method="POST" enctype="multipart/form-data">

                                                    @csrf


                                                    <x-form.input
                                                        name="name"
                                                        value="{{$user->name}}"
                                                        label="Ім'я користувача"
                                                    ></x-form.input>

                                                    <x-form.input-image
                                                        label="Завантажити новий аватар"
                                                        name="avatar"
                                                        :value="old('avatar', $user->avatar)"
                                                        @if(!$user->avatar)
                                                            img="{{$user->avatar}}"
                                                        @endif
                                                    >
                                                    </x-form.input-image>
                                                    <x-form.buttons-container>
                                                        <x-form.a-white
                                                            href="{{route('home')}}"
                                                            name="Назад"
                                                        >
                                                        </x-form.a-white>

                                                        <x-form.submit
                                                            name="Зберегти">
                                                        </x-form.submit>
                                                    </x-form.buttons-container>
                                                </form>--}}


                        <div
                            class="user-header d-flex justify-content-around align-items-center p-5 mb-5 border-bottom ">

                            @if ($user->avatar)
                                <img class="rounded-circle w-50" src="{{ url('/') . Storage::url($user->avatar) }}"
                                     alt="image_not_found">
                            @else
                                <img class="rounded-circle w-50" src="{{url('/')}}/assets/images/default-avatar.jpg"
                                     alt="image_not_found">
                            @endif

                            <div class="user-info w-100 ml-5">
                                <h2>{{$user->name}}</h2>
                                <h5 class="mb-3">{{$user->email}}</h5>

                                @if($user->email_verified_at)

                                <p> Пошта верифікована <br> {{$user->email_verified_at}}

                                    @else

                                <p> Пошта не верифікована <br> {{$user->email_verified_at}}
                                <form action="{{route('verification.send')}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn-link">
                                        Верифікація пошти
                                    </button>
                                </form>

                                @endif

                                <p class=""> Дата реєстрації <br> {{ $user->created_at}}</p>
                            </div>
                        </div>
                        <div class="payment_info ul_li_block mb-50 clearfix">
                            <ul class="clearfix">

                                <li>

                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target=".edit-user-profile-modal-lg">Редагувати данні
                                    </button>
                                </li>
                                <li>

                                    <form method="POST" action="{{ route('delete-user', $user->id) }}">

                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-primary delete show_confirm"
                                                data-name="{{ "обліковий запис - " . $user->name}}">
                                            Видалити обліковий запис
                                        </button>
                                    </form>
                                </li>

                            </ul>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- checkout_section - end
    ================================================== -->
    <!-- Large modal -->


    <div class="modal fade edit-user-profile-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Редагувати ім'я</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('profile-update', $user->id )}}" method="POST" enctype="multipart/form-data">

                        @csrf


                        <x-form.input
                            name="name"
                            value="{{$user->name}}"
                            label="Ім'я користувача"
                        ></x-form.input>

                        <x-form.input-image
                            label="Завантажити новий аватар"
                            name="avatar"
                            :value="old('avatar', $user->avatar)"

                        >
                        </x-form.input-image>
                        <x-form.buttons-container>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Назад</button>

                            <x-form.submit
                                name="Зберегти">
                            </x-form.submit>
                        </x-form.buttons-container>
                    </form>
                </div>

            </div>
        </div>
    </div>

</x-layout>
