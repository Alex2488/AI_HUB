@props(['active' => false])

@php
    $classes = 'category-btn rounded p-2';

    if ($active) $classes .= ' active';
@endphp

<li>
    <a {{ $attributes (['class' => $classes]) }}>
        {{$slot}}
    </a>
</li>

