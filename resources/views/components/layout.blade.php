<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>AI HUB</title>
    <link rel="shortcut icon" href="{{url('/')}}/assets/images/logo/favourite_icon_1.png">

    @include('include.style')

</head>


<body class="home_software">

<div class="body_wrap">
    @include('include.header')
    <main>
        @yield('content')
    </main>
</div>
@include('include.footer')

@include('include.script')


</body>
</html>
