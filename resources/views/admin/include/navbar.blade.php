<div class="button-group filter-btns-group ul_li mb-3 d-flex justify-content-between" data-aos="fade-up"
     data-aos-delay="200">
    <ul id="admin-buttons" class="clearfix">
        <li>
            <a class="btn-light px-3 py-2 rounded mr-2 {{(Route::is('show-services')) ? 'active' : ''}} "
               href="{{route('show-services')}}">
                Сервіси
            </a>
        </li>
        <li>
            <a class="btn-light px-3 py-2 rounded mr-2 {{(Route::is('show-users')) ? 'active' : ''}}"
               href="{{route('show-users')}}">
                Користувачі
            </a>
        </li>
        <li>
            <a class="btn-light px-3 py-2 rounded mr-2 {{(Route::is('show-categories')) ? 'active' : ''}}"
               href="{{route('show-categories')}}">
                Категорії
            </a>
        </li>
        <li>
            <a class="btn-light px-3 py-2 rounded mr-2 {{(Route::is('show-tags')) ? 'active' : ''}}"
               href="{{route('show-tags')}}">
                Теги
            </a>
        </li>
        <li>
            <a class="btn-light px-3 py-2 rounded mr-2 {{(Route::is('show-posts')) ? 'active' : ''}}"
               href="{{route('show-posts')}}">
                Пости
            </a>
        </li>
        <li>
            <a class="btn-light px-3 py-2 rounded mr-2 {{(Route::is('show-subscribers')) ? 'active' : ''}}"
               href="{{route('show-subscribers')}}">
                Підписники
            </a>
        </li>

    </ul>

    <ul>
        <li>
            @if(Route::is('show-services'))
                <a href="{{route('add-service')}}" class="btn-primary px-3 py-2 rounded mr-2">
                    Новий сервіс
                </a>
            @elseif(Route::is('show-categories'))
                <a href="{{route('add-category')}}" class="btn-primary px-3 py-2 rounded mr-2">
                    Нова категорія
                </a>
            @elseif(Route::is('show-posts'))
                <a href="{{route('add-post')}}" class="btn-primary px-3 py-2 rounded mr-2">
                    Новий пост
                </a>
            @elseif(Route::is('show-tags'))
                <a href="{{route('add-tag')}}" class="btn-primary px-3 py-2 rounded mr-2">
                    Новий тег
                </a>
            @endif


        </li>
    </ul>
</div>
