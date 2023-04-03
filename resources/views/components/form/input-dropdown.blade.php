@props(['name', 'id', 'label'])

<div class="form_item dropdown">
    <h6 class="ml-5">{{$label}}</h6>
    <div class="input-group mb-3">
        <select class="custom-select" name="{{$name}}" id="{{$id}}">
            {{$slot}}
        </select>
    </div>
</div>
