<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FasaLUG / لاگ فسا</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:500|vazirmatn:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <!-- Styles -->
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<style>
    #app {
        min-height: 100vh;
        background: hsla(228, 17%, 53%, 1);
        background: linear-gradient(90deg, hsla(228, 17%, 53%, 1) 0%, hsla(229, 28%, 88%, 1) 100%);
        background: -moz-linear-gradient(90deg, hsla(228, 17%, 53%, 1) 0%, hsla(229, 28%, 88%, 1) 100%);
        background: -webkit-linear-gradient(90deg, hsla(228, 17%, 53%, 1) 0%, hsla(229, 28%, 88%, 1) 100%);
        filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#727A9A", endColorstr="#D8DBE9", GradientType=1);
    }
</style>

<body id="app">
    <div class="nav mx-auto mt-3 shadow-sm px-4 bg-white rounded w-full min-h-[65px] max-w-[1440px] flex items-center justify-between">
        <div class="text-xl font-bold select-none">لاگ فسا | گروه کاربران لینوکس فسا </div>
        <div class="flex gap-3 select-none">
            <div class="bg-slate-100 hover:bg-slate-200 transition-colors text-black font-bold rounded p-2 flex items-center gap-1 cursor-pointer">
                <iconify-icon width="1.3rem" icon="solar:user-linear"></iconify-icon>
                <span>ورود/ثبت نام</span>

            </div>

            <div class="bg-slate-100 hover:bg-slate-200 transition-colors text-black font-bold rounded p-2 flex items-center gap-1 cursor-pointer">
                <iconify-icon width="1.3rem" icon="mdi:list-box-outline"></iconify-icon>
                <span>رویداد های اخیر</span>

            </div>
        </div>


    </div>
    <div class="container">
        <div class="absolute rgiht-0 bg-white min-h-[10vh]"></div>
    </div>
</body>

</html>
