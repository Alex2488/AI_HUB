@props(['label'=> '', 'name', 'value' => ''])

<div class="form_item">
    <h6 class="ml-5">{{$label}}</h6>
    <input
        type="text"
        name="{{$name}}"
        value="{{$value}}"
        required
        {{ $attributes(['value' => old($name)]) }}
    >
</div>
