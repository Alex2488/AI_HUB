<x-layout>

    <x-page.breadcrumb title="Додати тег">
        <li>
            <a href="{{route('show-tags')}}">Теги</a>
        </li>
    </x-page.breadcrumb>

    <x-page.main-admin title="Додати тег">

        <form action="{{route('submit-tag')}}" method="post">
            @csrf
            <x-form.input
                name="name"
                placeholder="Найменування тегу"></x-form.input>
            <x-form.buttons-container>
                <x-form.a-white
                    href="{{route('show-tags')}}"
                    name="Назад"/>

                <x-form.submit
                    name="Додати тег"/>
            </x-form.buttons-container>
        </form>

    </x-page.main-admin>

</x-layout>





