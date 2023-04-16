<x-layout>

    <x-page.breadcrumb title="Редагувати категорію">
        <li>
            <a href="{{route('show-categories')}}">Категорії</a>
        </li>
    </x-page.breadcrumb>

    <x-page.main-admin title="Редагувати категорію">

        <form action="{{route('update-category', $category)}}" method="post" >
            @csrf
            <x-form.input name="name"
                          label="Назва категорії"
                          value="{{$category->name}}">
            </x-form.input>

            <x-form.buttons-container>
                <x-form.a-white
                    href="{{route('show-categories')}}"
                    name="Назад"/>

                <x-form.submit
                    name="Зберегти"/>
            </x-form.buttons-container>
        </form>

    </x-page.main-admin>

</x-layout>





