@props(['label', 'name', 'class' => ''])

<div class="form_item">
    <h6 class="ml-5">{{$label}}</h6>
    <textarea class="{{$class}}"
              name="{{$name}}"
              placeholder="Введіть текст"
                {{ $attributes }}
    >{{ old($name) ?? $slot }}
    </textarea>
</div>
