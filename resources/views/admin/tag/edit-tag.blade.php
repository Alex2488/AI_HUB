<x-layout>

    <x-page.breadcrumb title="Редагувати тег">
        <li>
            <a href="{{route('show-tags')}}">Теги</a>
        </li>
    </x-page.breadcrumb>

    <x-page.main-admin title="Редагувати тег">

        <form action="{{route('update-tag', $tag)}}" method="post" >
            @csrf
            <x-form.input name="name"
                          label="Назва тегу"
                          value="{{$tag->name}}">
            </x-form.input>

            <x-form.buttons-container>
                <x-form.a-white
                    href="{{route('show-tags')}}"
                    name="Назад"/>

                <x-form.submit
                    name="Зберегти"/>
            </x-form.buttons-container>
        </form>

    </x-page.main-admin>

</x-layout>





