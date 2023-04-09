<x-layout>

    <x-page.breadcrumb title="Редагувати користувача">
        <li>
            <a href="{{route('show-users')}}">Користувачі</a>
        </li>
    </x-page.breadcrumb>



    <x-page.main-admin>

                        <form action="{{ route('update-user', $user->id )}}" method="post">

                            @csrf


                            <x-form.input
                                name="name"
                                value="{{$user->name}}"
                                label="Ім'я користувача"
                            ></x-form.input>

                            <x-form.input
                                name="email"
                                value="{{$user->email}}"
                                label="Електронна пошта"
                            ></x-form.input>

                            <x-form.input-dropdown
                                label="Роль"
                                name="role"
                                id="role"
                            >
                                <option  {{($user->role === 0) ? 'selected' : ''}} value="0"> Користувач</option>
                                <option  {{($user->role === 1) ? 'selected' : ''}} value="1"> Адміністратор</option>
                            </x-form.input-dropdown>


                            <x-form.buttons-container>
                                <x-form.a-white
                                    href="{{route('show-users')}}"
                                    name="Назад"
                                >
                                </x-form.a-white>

                                <x-form.submit
                                    name="Зберегти">
                                </x-form.submit>
                            </x-form.buttons-container>

                        </form>
    </x-page.main-admin>

</x-layout>





