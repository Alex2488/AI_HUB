<form action="{{url('/')}}/panel/add-service/submit-service" method="post">

    @csrf


    <div class="form_item">
        <input type="text" name="title" value="{{$dataService->title}}" placeholder="Найменування сервісу">
    </div>


    <div class="form_item">
        <input type="text" name="slug" value="{{$dataService->slug}}" placeholder="URL строка">
    </div>


    <div class="form_item">
        <input type="text" name="logo_link" value="{{$dataService->logo_link}}" placeholder="Посилання на лого">
    </div>

    <div class="form_item">
        <input type="text" name="link_to_service" value="{{$dataService->link_to_service}}"
               placeholder="Посилання на сервіс">
    </div>

    <div class="form_item">
        <input type="text" name="category_id" value="{{$dataService->category_id}}" placeholder="ID категорії">
    </div>


    {{--<div class="form_item dropdown">
        <button class="dropdown-toggle"  type="button" id="category" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
            Категорія
        </button>
        <div class="dropdown-menu ul_li_block" aria-labelledby="category">
            <ul class="clearfix">
                <li>Текст</li>
                <li>Картинка</li>
            </ul>
        </div>
    </div>--}}

    <div class="form_item">
        <textarea name="excerpt" value="{{$dataService->excerpt}}" placeholder="Короткий опис -  до 140 символів"></textarea>
    </div>

    <div class="form_item">
        <h6 class="ml-5">Повний опис - загальна інформація</h6>
        <textarea name="information_1" value="{{$dataService->information_1}}" placeholder="Перший абзац"></textarea>

    </div>
    <div class="form_item">

        <textarea name="information_2" value="{{$dataService->information_2}}" placeholder="Другий абзац"></textarea>
    </div>
    <div class="form_item">

        <textarea name="information_3" value="{{$dataService->information_3}}" placeholder="Третій абзац"></textarea>
    </div>

    <div class="form_item">
        <h6 class="ml-5">Основний функціонал</h6>

        <textarea name="functionality_1" value="{{$dataService->functionality_1}}" placeholder="Перший пункт"></textarea>

    </div>
    <div class="form_item">

        <textarea name="functionality_2" value="{{$dataService->functionality_2}}" placeholder="Другий пункт"></textarea>
    </div>
    <div class="form_item">

        <textarea name="functionality_3 value="{{$dataService->functionality_3}}" placeholder="Третій пункт"></textarea>
    </div>

    <div class="form_item">

        <textarea name="functionality_4" value="{{$dataService->functionality_4}}" placeholder="Четвертий пункт"></textarea>
    </div>

    <div class="form_item">
        <h6 class="ml-5">Переваги</h6>

        <textarea name="benefits_1" value="{{$dataService->benefits_1}}" placeholder="Перший абзац"></textarea>

    </div>
    <div class="form_item">

        <textarea name="benefits_2" value="{{$dataService->benefits_2}}" placeholder="Другий абзац"></textarea>
    </div>
    <div class="form_item">

        <textarea name="benefits_3" value="{{$dataService->benefits_3}}" placeholder="Третій абзац"></textarea>
    </div>

    <div class="btn_wrap">
        <button type="submit" class="btn bg_default_blue">Додати сервіс</button>
    </div>




</form>
