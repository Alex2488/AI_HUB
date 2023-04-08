<x-layout>

    <x-page.breadcrumb title="Редагувати сервіс">
        <li>
            <a href="{{route('show-services')}}">Сервіси</a>
        </li>
    </x-page.breadcrumb>

    <!-- contact_section - start
				================================================== -->
    <x-page.main-admin title="Редагувати сервіс {{$service->title}} ">

        <form action="{{ route('update-service', $service->slug )}}" method="path" enctype="multipart/form-data">

            @csrf
            @method('patch')

            <x-form.input
                label="Найменування сервісу"
                name="title"
                :value="old('title', $service->title)"
            >
            </x-form.input>

            <x-form.input
                label="URL строка"
                name="slug"
                :value="old('slug', $service->slug)"
            >
            </x-form.input>

            <x-form.input
                label="Посилання на сервіс"
                name="link_to_service"
                :value="old('link_to_service', $service->link_to_service)"
            >
            </x-form.input>

            <x-form.input
                label="Розробник"
                name="developer"
                :value="old('developer', $service->developer)"
            >
            </x-form.input>

            <x-form.input
                label="Рік випуску"
                name="release_date"
                :value="old('release_date', $service->release_date)"
            >
            </x-form.input>

            <x-form.input-image
                label="Завантажити новий логотип"
                name="logo"
                :value="old('logo', $service->logo)"
                img="{{$service->logo}}"
            >
            </x-form.input-image>

            <x-form.input-dropdown
                name="category_id"
                id="inputGroupSelect01"
                label="Категорія"
            >

                @foreach ($categories as $category)

                        <option
                            value="{{$category->id}}"
                            {{$category->id === $service->category->id ? 'selected' : ''}}
                        >{{$category->name}}</option>

                @endforeach

            </x-form.input-dropdown>

            <x-form.input-image
                label="Завантажити зображення"
                name="image"
                img="{{$service->image}}">
            </x-form.input-image>

            <x-form.input-text
                label="Короткий опис"
                name="excerpt"
            >{{old('excerpt', $service->excerpt)}}
            </x-form.input-text>

            <x-form.input-text
                class="editor"
                label="Повний опис"
                name="main_content"
            >{{old('main_content', $service->main_content)}}
            </x-form.input-text>

            <x-form.input-dropdown
                name="is_published"
                label="Опублікувати?"
            >
                <option value="1" {{$service->is_published ? 'selected' : ''}}>Так</option>
                <option value="0" {{$service->is_published ? '' : 'selected'}}>Ні</option>
            </x-form.input-dropdown>

            <div class="buttons-group d-flex justify-content-between">
                <x-form.a-white
                    name="Назад"
                    href="{{route('show-services')}}">
                </x-form.a-white>
                <x-form.submit name="Зберегти зміни"></x-form.submit>
            </div>

        </form>
    </x-page.main-admin>
    <!-- contact_section - end
    ================================================== -->

</x-layout>





