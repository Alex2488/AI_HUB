@props(['label', 'name'])

<div class="form_item">
    <h6 class="ml-5">{{$label}}</h6>
    <textarea {{$attributes}} name="{{$name}}"  placeholder="Введіть текст">
        {{$slot}}
    </textarea>
</div>
