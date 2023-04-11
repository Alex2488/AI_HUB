@props(['name'])

@error($name)
<p class="text-danger mt-1 ml-5"> {{$message}}</p>
@enderror
