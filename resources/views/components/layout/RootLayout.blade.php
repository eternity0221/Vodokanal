<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('assets/images/icon/logotype.png')}}">
    @vite('resources/css/app.css')
    <title>{{$title ?? "Laravel"}}</title>

    {{--Styles--}}
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    {{--JavaScript--}}
    <script defer src="{{asset('assets/js/aos.js')}}"></script>

</head>
<body>
    @php function isActive($href): bool {return Illuminate\Support\Facades\Route::currentRouteName() == $href;} @endphp
    @if(isset($type) && $type == "oauth")
        <div class="flex w-full h-screen justify-center items-center bg-blue-400">
            @yield("layout")
        </div>
    @else
        <div class="min-h-screen grid grid-rows-[minmax(64px,auto)_1fr_minmax(128px,auto)]">
            @include("components.header.header")
            <main class="main">
                @yield("layout")
            </main>
            @include("components.footer.footer")
        </div>
    @endif
</body>
</html>
