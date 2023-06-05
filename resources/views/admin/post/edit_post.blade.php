<x-layout>

    <x-page.breadcrumb title="Редагувати пост">
        <li>
            <a href="{{route('show-posts')}}">Пости</a>
        </li>
    </x-page.breadcrumb>

    <!-- contact_section - start
				================================================== -->
    <x-page.main-admin title="Редагувати пост {{$post->title}} ">

        <form action="{{ route('update-post', $post->id )}}" method="POST" enctype="multipart/form-data">

            @csrf


            <x-form.input
                label="Найменування посту"
                name="title"
                :value="old('title', $post->title)"
            >
            </x-form.input>

            <x-form.input
                label="URL строка"
                name="slug"
                :value="old('slug', $post->slug)"
            >
            </x-form.input>

            <x-form.input-image
                label="Завантажити зображення"
                name="image"
                img="{{$post->image}}">
            </x-form.input-image>

            <x-form.input-textarea
                label="Короткий опис"
                name="excerpt"
            >{{old('excerpt', $post->excerpt)}}
            </x-form.input-textarea>

            <x-form.input-text
                class="editor"
                label="Повний опис"
                name="main_content"
            >{{old('main_content', $post->main_content)}}
            </x-form.input-text>

            <div id="editor" class="mb-4">
                {!! isset($post->main_content) ? $post->main_content : '' !!}
            </div>

            <x-form.input-dropdown
                name="is_published"
                label="Опублікувати?"
            >
                <option value="1" {{$post->is_published ? 'selected' : ''}}>Так</option>
                <option value="0" {{$post->is_published ? '' : 'selected'}}>Ні</option>
            </x-form.input-dropdown>


            <x-form.buttons-container>
                <x-form.a-white
                    href="{{route('show-posts')}}"
                    name="Назад"
                >
                </x-form.a-white>

                <x-form.submit
                    name="Зберегти"
                >
                </x-form.submit>
            </x-form.buttons-container>


        </form>
    </x-page.main-admin>
    <!-- contact_section - end
    ================================================== -->
    @include('admin.include.quill')
</x-layout>





