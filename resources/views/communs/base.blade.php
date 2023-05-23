<!DOCTYPE html>
<html lang="ar" dir="rtl" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <title>@yield('title')</title>
</head>

<body class="flex flex-col flex-wrap lg:flex-row bg-gray-900">
    @include('communs.sidebar')
    <main class="flex-1 flex flex-col max-w-full lg:min-w-100">
        @include('communs.header')
        <section class="w-full container mx-auto p-4 flex flex-col gap-4">
            @yield('content')
        </section>
    </main>
    <script src="{{ asset('js/index.js') }}"></script>
    <script>
        @if (Session::has('message'))
            const info = {!! json_encode(Session::all()) !!};
            const message = replaceString(Array.isArray(info.message) ? info.message : [info.message]).join("<br />");
            const type = info.type;
            (new Toaster({
                positionX: "left",
                positionY: "bottom",
                width: 500
            }))[type](message);
        @endif
        Table.option({
            style: {
                text: "#030712",
                color: "#030712",
                background: "#ca8a04",
                header: "#ca8a04",
            },
        });
        new Toggle();
        new Table();
    </script>
    @yield('script')
</body>

</html>
