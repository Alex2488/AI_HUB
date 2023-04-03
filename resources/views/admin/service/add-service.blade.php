<x-layout>


    <x-page.breadcrumb title="Додати сервіс">
        <li>
            <a href="{{url('/')}}">Головна</a>
        </li>
        <li>
            <a href="{{route('show-services')}}">Сервіси</a>
        </li>
        <li>
            Додати сервіс
        </li>
    </x-page.breadcrumb>

    <!-- contact_section - start
				================================================== -->
    <x-page.main-admin title_page="Додати новий сервіс ">

        <x-page.error/>


            <form action="{{route('submit-service')}}" method="post" enctype="multipart/form-data">

                @csrf

                <x-form.input
                    label="Найменування сервісу"
                    name="title">
                </x-form.input>

                <x-form.input
                    label="Посилання на сервіс"
                    name="link_to_service">
                </x-form.input>

                <x-form.input
                    label="Розробник"
                    name="developer">
                </x-form.input>

                <x-form.input
                    label="Рік випуску"
                    name="release_date">
                </x-form.input>

                <x-form.input-image
                    label="Логотип"
                    name="logo">
                </x-form.input-image>

                <x-form.input-dropdown
                    name="category_id"
                    id="inputGroupSelect01"
                    label="Категорія"
                >

                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach

                </x-form.input-dropdown>

                <x-form.input-image
                    label="Зображення"
                    name="image">
                </x-form.input-image>


                <x-form.input-text
                    label="Короткий опис"
                    name="excerpt"
                    placeholder="До 140 символів">

                </x-form.input-text>

                <x-form.input-text
                    class="editor"
                    label="Повний опис"
                    name="content"
                >

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
                    <x-form.submit name="Додати"></x-form.submit>
                </div>



                </form>

    </x-page.main-admin>
    <!-- contact_section - end
    ================================================== -->

</x-layout>





