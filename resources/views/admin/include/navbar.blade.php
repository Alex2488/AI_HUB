









<div class="button-group filter-btns-group ul_li mb-30 d-flex justify-content-between" data-aos="fade-up" data-aos-delay="200">
    <ul id="admin-buttons" class="clearfix">
        <li >
            <a class="btn-light px-3 py-2 rounded  mr-2
                @if(Route::is('show-services') )active
                @endif"
               href="{{route('show-services')}}" >
                Сервіси
            </a>
        </li>
        <li>
            <a class="btn-light px-3 py-2 rounded mr-2
                @if(Route::is('show-users') )active
                @endif"
               href="{{route('show-users')}}" >
                Користувачі
            </a>
        </li>
        <li>
            <a class="btn-light px-3 py-2 rounded mr-2
                @if(Route::is('show-categories') )
                    active
                @endif
            "
               href="{{route('show-categories')}}" >
                Категорії
            </a>
        </li>
        <li>
            <a class="btn-light px-3 py-2 rounded mr-2
                @if(Route::is('show-tags') )
                    active
                @endif
            "
               href="{{route('show-categories')}}" >
                Tags
            </a>
        </li>
        <li>
            <a class="btn-light px-3 py-2 rounded mr-2
                @if(Route::is('show-blogs') )
                    active
                @endif
            "
               href="{{route('show-posts')}}" >
                Пости
            </a>
        </li>

    </ul>

    <ul>
        <li>
            @if(Route::is('show-services'))
                <a href="{{route('add-service')}}" class="btn-primary px-3 py-2 rounded mr-2">
                    Новий сервіс
                </a>
            @elseif(Route::is('show-users'))
                <a href="{{route('add-service')}}" class="btn-primary px-3 py-2 rounded mr-2">
                    Новий користувач
                </a>
            @elseif(Route::is('show-categories'))
                <a href="{{route('add-category')}}" class="btn-primary px-3 py-2 rounded mr-2">
                    Нова категорія
                </a>
            @elseif(Route::is('show-posts'))
                <a href="{{route('add-post')}}" class="btn-primary px-3 py-2 rounded mr-2">
                    Новий пост
                </a>
            @endif

        </li>
    </ul>
</div>
