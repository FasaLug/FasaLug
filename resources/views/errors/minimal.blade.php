<!DOCTYPE html>
<html lang="fa">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=poppins:500|vazirmatn:100,200,300,400,500,600,700,800,900"
            rel="stylesheet" />

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen  sm:items-center sm:pt-0">
            <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
                <div class="flex flex-col gap-2 items-center pt-8 sm:justify-start sm:pt-0 select-none">
                    <iconify-icon class="text-gray-500" width="10rem" icon="gravity-ui:logo-linux"></iconify-icon>
                    <div class="text-6xl font-extrabold text-gray-500 uppercase tracking-wider">
                        @yield('code')
                    </div>
                    <div class="text-lg text-gray-500 uppercase tracking-wider">

                        @yield('message')
                    </div>
                    <a href="/" class="btn !bg-gray-900 hover:!bg-gray-950 !text-white">بازگشت به صفحه اصلی</a>
                </div>
            </div>
        </div>
    </body>
</html>
