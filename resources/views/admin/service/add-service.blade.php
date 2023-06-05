<x-layout>


    <x-page.breadcrumb title="Додати сервіс">
        <li>
            <a href="{{route('show-services')}}">Сервіси</a>
        </li>
    </x-page.breadcrumb>

    <!-- contact_section - start
				================================================== -->
    <x-page.main-admin title_page="Додати новий сервіс">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('submit-service')}}" method="post" enctype="multipart/form-data">

            @csrf



            <x-form.input
                label="Найменування сервісу"
                name="title"
                :value="old('title')">
            </x-form.input>

            <x-form.input
                label="Посилання на сервіс"
                name="link_to_service"
                :value="old('link_to_service')">
            </x-form.input>

            <x-form.input
                label="Розробник"
                name="developer"
                :value="old('developer')">
            </x-form.input>

            <x-form.input
                label="Рік випуску"
                name="release_date"
                :value="old('release_date')">
            </x-form.input>

            <x-form.input-image
                label="Логотип"
                name="logo"
                :value="old('logo')">
            </x-form.input-image>

            <x-form.input-dropdown
                name="category_id"
                id="inputGroupSelect01"
                label="Категорія"
                :value="old('category_id')"
            >

                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach

            </x-form.input-dropdown>



            <x-form.input-dropdown-tags
                name="tags[]"
                label="Теги"
                :value="old('tags[]')"
            >
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
            </x-form.input-dropdown-tags>



            <x-form.input-image
                label="Зображення"
                name="image"
                :value="old('image')"
            >
            </x-form.input-image>


            <x-form.input-textarea
                label="Короткий опис"
                name="excerpt"
                placeholder="До 140 символів"
                :value="old('excerpt')"
            >

            </x-form.input-textarea>

            <x-form.input-text
                class="editor"
                label="Повний опис"
                name="main_content"
                :value="old('main_content')"
            >

            </x-form.input-text>

            <div id="editor">

            </div>

            <x-form.input-dropdown
                name="is_published"
                label="Опублікувати?"
                id="inputGroupSelect02"
                :value="old('is_published')"
            >
                <option value="1">Так</option>
                <option value="0">Ні</option>
            </x-form.input-dropdown>

            <x-form.buttons-container>
                <x-form.a-white
                    href="{{route('show-services')}}"
                    name="Назад"
                >
                </x-form.a-white>

                <x-form.submit
                    name="Додати"
                >
                </x-form.submit>
            </x-form.buttons-container>
        </form>
    </x-page.main-admin>
    @include('admin.include.quill')
</x-layout>





