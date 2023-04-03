@props(['label', 'name'])

<div class="form_item">
    <h6 class="ml-5">{{$label}}</h6>
    <div class="custom-file">
        <input type="file" class="custom-file-input" name="{{$name}}" >
        <label class="custom-file-label">Завантажити</label>
    </div>
</div>
