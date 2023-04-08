<x-layout>

    <x-page.breadcrumb title="Додати категорію">
        <li>
            <a href="{{route('show-categories')}}">Категорії</a>
        </li>
    </x-page.breadcrumb>

    <x-page.main-admin title="Додати категорію">

        <form action="{{route('submit-category')}}" method="post">
            @csrf
            <x-form.input
                name="name"
                placeholder="Найменування категорії"></x-form.input>
            <x-form.buttons-container>
                <x-form.a-white
                    href="{{route('show-categories')}}"
                    name="Назад"/>

                <x-form.submit
                    name="Додати категорію"/>
            </x-form.buttons-container>
        </form>

    </x-page.main-admin>

</x-layout>





