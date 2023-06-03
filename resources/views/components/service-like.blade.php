<form action="{{ route('add-like', $service)}}"
      method="post">
    @csrf

    @if(auth()->user())
        @auth()

            @if(auth()->user()->likedServices->contains($service->id))
                <button class="heart_btn h-100 d-flex align-items-center"
                        type="submit" >
                    <i class="fa-solid fa-heart mr-1"></i>
                    <span class="ml-2">{{$service->liked_users_count}}</span>
                </button>
            @else
                <button class="heart_btn h-100 d-flex align-items-center"
                        type="submit" >
                    <i class="far fa-heart mr-1"></i>
                    <span class="ml-2">{{$service->liked_users_count}}</span>
                </button>
            @endif

        @endauth
    @else
        <div class="heart_btn h-100 d-flex align-items-center"
             data-toggle="tooltip"
             data-placement="top"
             data-title="Необхідно авторизуватись">
            <i class="far fa-heart mr-1"></i>
            <span class="ml-2">{{$service->liked_users_count}}</span>
        </div>
    @endif


</form>
