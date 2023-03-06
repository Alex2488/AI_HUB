@if(session()->has('success'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"

         class="col-3 fixed-bottom alert-primary p-3 ml-auto m-3 text-center rounded-pill"
    >
        <p class="m-0">{{ session('success') }}</p>
    </div>
@endif
