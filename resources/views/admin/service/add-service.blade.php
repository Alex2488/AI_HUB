<x-layout>


    <x-page.breadcrumb title="Додати сервіс">
        <li>
            <a href="{{route('show-services')}}">Сервіси</a>
        </li>
    </x-page.breadcrumb>

    <!-- contact_section - start
				================================================== -->
    <x-page.main-admin title_page="Додати новий сервіс">

        <form action="{{route('submit-service')}}" method="post" enctype="multipart/form-data">

            @csrf

            <x-form.input
                label="Найменування сервісу"
                name="title"
                required
                :value="old('title')"

            >
            </x-form.input>

            <x-form.input
                label="Посилання на сервіс"
                name="link_to_service"
                required
                :value="old('link_to_service')">
            </x-form.input>

            <x-form.input
                label="Розробник"
                name="developer"
                required
                :value="old('developer')">
            </x-form.input>

            <x-form.input
                label="Рік випуску"
                name="release_date"
                required
                :value="old('release_date')">
            </x-form.input>

            <x-form.input-image
                label="Логотип"
                name="logo"
                required
                :value="old('logo')">
            </x-form.input-image>

            <x-form.input-dropdown
                name="category_id"
                id="inputGroupSelect01"
                label="Категорія"
                required
                :value="old('category_id')"
            >

                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach

            </x-form.input-dropdown>

            <x-form.input-image
                label="Зображення"
                name="image"
                required
                :value="old('image')"
            >
            </x-form.input-image>


            <x-form.input-text
                label="Короткий опис"
                name="excerpt"
                placeholder="До 140 символів"
                required
                :value="old('excerpt')"
            >

            </x-form.input-text>

            <x-form.input-text
                class="editor"
                label="Повний опис"
                name="main_content"
                required
                :value="old('main_content')"
            >

            </x-form.input-text>

            <x-form.input-dropdown
                name="is_published"
                label="Опублікувати?"
                id="inputGroupSelect02"
                required
                :value="old('is_published')"
            >
                <option value="1">Так</option>
                <option value="0">Ні</option>
            </x-form.input-dropdown>

            <x-form.buttons-container>
                <x-form.a-white
                    href="{{route('show-services')}}"
                    name="Назад"/>

                <x-form.submit
                    name="Додати"/>
            </x-form.buttons-container>

        </form>

    </x-page.main-admin>

</x-layout>





