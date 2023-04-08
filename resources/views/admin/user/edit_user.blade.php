<x-layout>

    <x-page.breadcrumb title="Редагувати користувача">
        <li>
            <a href="{{route('show-users')}}">Користувачі</a>
        </li>
    </x-page.breadcrumb>



    <x-page.main-admin>

                        <form action="{{ route('update-user', $user->id )}}" method="post">

                            @csrf

{{--                            <x-form.input--}}
{{--                                label = "Ім'я користувача"--}}
{{--                                name = 'name'--}}
{{--                                value = '$user->name'--}}
{{--                            ></x-form.input>--}}



                            <div class="form_item">
                                <h6 class="ml-5">Ім'я користувача</h6>
                                <input type="text" name="name" value="{{$user->name}}"
                                       placeholder="Ім'я користувача">
                            </div>
                            <div class="form_item">
                                <h6 class="ml-5">Електронна пошта</h6>
                                <input type="text" name="email" value="{{$user->email}}" placeholder="Електронна пошта">
                            </div>
                            <div class="form_item dropdown">
                                <h6 class="ml-5">Роль</h6>
                                <div class="input-group mb-3">
                                    <select class="custom-select" name="role" id="inputGroupSelect01">


                                        <option  {{($user->role === 0) ? 'selected' : ''}} value="0"> Користувач</option>
                                        <option  {{($user->role === 1) ? 'selected' : ''}} value="1"> Адміністратор</option>



                                    </select>
                                </div>
                            </div>
                            <div class="buttons-group d-flex justify-content-between">
                                <div class="btn_wrap">
                                    <a href="{{route('show-users')}}" class="btn btn_border border_blue float-right">Назад</a>
                                </div>
                                <div class="btn_wrap">
                                    <button type="submit" class="btn bg_default_blue">Зберегти зміни</button>
                                </div>
                            </div>

                        </form>
    </x-page.main-admin>

</x-layout>





