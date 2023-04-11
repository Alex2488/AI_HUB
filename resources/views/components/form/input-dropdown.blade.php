@props(['name', 'label'])

<div class="form_item dropdown">
    <h6 class="ml-5">{{$label}}</h6>
    <div class="input-group mb-3">
        <select class="custom-select"
                name="{{$name}}"
                id="{{$name}}">
            {{$slot}}
        </select>
    </div>
    <x-page.error
        name="{{$name}}"
    >
    </x-page.error>
</div>
