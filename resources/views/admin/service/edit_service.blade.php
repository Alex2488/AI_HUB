<x-layout>

    <x-page.breadcrumb title="{{$service->title}}">
        <li>
            <a href="{{url('/')}}">Головна</a>
        </li>
        <li>
            <a href="{{route('show-services')}}">Сервіси</a>
        </li>
        <li>
            Редагувати сервіс
        </li>
    </x-page.breadcrumb>

    <!-- contact_section - start
				================================================== -->
    <x-page.main-admin title_page="Редагувати сервіс {{$service->title}} ">

        <x-page.error/>

        <form action="{{ route('update-service', $service->id )}}" method="post">

            @csrf

            <x-form.input
                label="Найменування сервісу"
                name="title"
                value="{{$service->title}}">
            </x-form.input>

            <x-form.input
                label="URL строка"
                name="slug"
                value="{{$service->slug}}">
            </x-form.input>

            <x-form.input
                label="Посилання на сервіс"
                name="link_to_service"
                value="{{$service->link_to_service}}">
            </x-form.input>

            <x-form.input
                label="Розробник"
                name="developer"
                value="{{$service->developer}}">
            </x-form.input>

            <x-form.input
                label="Рік випуску"
                name="release_date"
                value="{{$service->release_date}}">
            </x-form.input>

            <x-form.input-image
                label="Завантажити логотип"
                name="logo">
            </x-form.input-image>

            <x-form.input-dropdown
                name="category_id"
                id="inputGroupSelect01"
                label="Категорія"
            >
                <option selected value="{{$service->category->id}}"> {{$service->category->name}}</option>
                @foreach ($categories as $category)
                    @if($category->id != $service->category->id)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endif
                @endforeach

            </x-form.input-dropdown>

            <x-form.input-image
                label="Завантажити зображення"
                name="image">
            </x-form.input-image>

            <x-form.input-text
                label="Короткий опис"
                name="excerpt">
                {{$service->excerpt}}
            </x-form.input-text>

            <x-form.input-text
                class="editor"
                label="Повний опис"
                name="content"
            >
                {{$service->content}}
            </x-form.input-text>

            <x-form.input-dropdown
                name="is_published"
                label="Опублікувати?"
                id="inputGroupSelect02"
            >
                <option value="1">Так</option>
                <option value="0">Ні</option>
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





