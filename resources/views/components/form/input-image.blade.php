@props(['label', 'name', 'img' => ''])

<div class="form_item">
    <div class="flex">
        @if($img != '')
            <img class="position-absolute ml-3 " src="{{ url('/') . Storage::url($img) }}" width="20"  alt="logo prev">
        @endif
        <h6 class="ml-5">{{$label}}</h6>

    </div>
    <div class="custom-file">
        <input type="file" class="custom-file-input" name="{{$name}}" >
        <label class="custom-file-label">Завантажити</label>
    </div>
    <x-page.error
        name="{{$name}}"
    >
    </x-page.error>
</div>
