<aside id="sidebar_section" class="sidebar_section pl-30">

    @if(Route::is('show-service'))
        @include('components.page.aside-posts')
        @include('components.page.aside-categories')
        @include('components.page.aside-tags')
    @endif

    @if(Route::is('show-post') || Route::is('posts'))
        @include('components.page.aside-services')
    @endif

</aside>
