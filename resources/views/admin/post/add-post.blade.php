<x-layout>


    <x-page.breadcrumb title="Додати пост">
        <li>
            <a href="{{route('show-posts')}}">Пости</a>
        </li>
    </x-page.breadcrumb>

    <!-- contact_section - start
				================================================== -->
    <x-page.main-admin title_page="Додати новий пост">


        <form action="{{route('submit-post')}}" method="post" enctype="multipart/form-data">



            @csrf

            <x-form.input
                label="Найменування посту"
                name="title"
                :value="old('title')"
            >
            </x-form.input>


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

            <div id="editor" class="mb-4">

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


</x-layout>





