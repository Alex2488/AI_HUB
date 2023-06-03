@props(['label', 'name', 'class' => ''])

<div class="form_item">
    <h6 class="ml-5">{{$label}}</h6>

    <textarea class="{{$class}}"
              name="{{$name}}"
              placeholder="Введіть короткий опис"
                {{ $attributes }}
    >{{ old($name) ?? $slot }}
    </textarea>

    <x-page.error
        name="{{$name}}"
    >
    </x-page.error>
</div>
