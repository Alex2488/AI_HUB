@props(['label'=> '', 'name', 'value' => ''])

<div class="form_item">
    <h6 class="ml-5">{{$label}}</h6>
    <input
        type="text"
        name="{{$name}}"
        value="{{$value}}"
        {{ $attributes(['value' => old($name)]) }}

    >
    <x-page.error
        name="{{$name}}"
    >
    </x-page.error>
</div>
