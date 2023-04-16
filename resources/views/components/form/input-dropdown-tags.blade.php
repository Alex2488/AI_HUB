@props(['name', 'label'])

<div class="form_item dropdown">
    <h6 class="ml-5">{{$label}}</h6>
    <div class="input-group mb-3">
        <select name="{{$name}}" class="selectpicker" multiple data-live-search="true">
            {{$slot}}
        </select>
    </div>
    <x-page.error
        name="{{$label}}"
    >
    </x-page.error>
</div>
