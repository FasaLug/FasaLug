<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FasaLUG / لاگ فسا</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:500|vazirmatn:100,200,300,400,500,600,700,800,900"
        rel="stylesheet" />
    <!-- Styles -->
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<style>
</style>

<body id="app">
    <div class="mx-3">
        <div
            class="nav mx-auto mt-3 shadow-md  px-4 bg-white rounded w-full min-h-[65px] max-w-[1440px] flex items-center justify-between">
            <div class="text-xl font-bold select-text flex gap-2 items-center">
                <iconify-icon width="2rem" icon="gravity-ui:logo-linux"></iconify-icon>
                <span>لاگ فسا | گروه کاربران لینوکس فسا</span>


            </div>
            <div class="gap-3 select-none hidden xl:flex">
                @if(!auth()->check())
                <a href="{{ route('login') }}"
                    class="bg-slate-100 hover:bg-slate-200 transition-colors text-black font-bold rounded p-2 flex items-center gap-1 cursor-pointer">
                    <iconify-icon width="1.3rem" icon="solar:user-linear"></iconify-icon>
                    <span>ورود/ثبت نام</span>

                </a>
                @else
                <a href="{{ route('dashboard') }}"
                class="bg-slate-100 hover:bg-slate-200 transition-colors text-black font-bold rounded p-2 flex items-center gap-1 cursor-pointer">
                <iconify-icon width="1.3rem" icon="solar:user-linear"></iconify-icon>
                <span>پنل کاربری</span>

            </a>
                @endif

                <div
                    class="bg-slate-100 hover:bg-slate-200 transition-colors text-black font-bold rounded p-2 flex items-center gap-1 cursor-pointer">
                    <iconify-icon width="1.3rem" icon="mdi:list-box-outline"></iconify-icon>
                    <span>رویداد های اخیر</span>

                </div>
                <div
                    class="bg-slate-100 hover:bg-slate-200 transition-colors text-black font-bold rounded p-2 flex items-center gap-1 cursor-pointer">
                    <iconify-icon width="1.3rem" icon="fluent:window-dev-tools-24-filled"></iconify-icon>
                    <span>تیم اجرایی</span>

                </div>
            </div>
            <div class="block xl:hidden">
                test
            </div>

        </div>
    </div>
    <div class="flex items-center gap-10 flex-col 2xl:gap-0 2xl:flex-row justify-between flex-grow mt-10 2xl:mt-40 mx-3 2xl:mx-0">
        <div class="pinglug select-none relative justify-between 2xl:justify-center !rounded-xl 2xl:!rounded-l-xl bg-white w-full 2xl:w-[800px] min-h-[424px] flex flex-col lg:flex-row items-center 2xl:pr-5 p-16 overflow-hidden 2xl:overflow-visible">
            <div class="2xl:px-7 w-full !z-[999] relative flex flex-col  2xl:flex-row">
                <div>
                    <div class="text-5xl font-medium text-gray-800 select-text text-center 2xl:text-right">گروه کاربران لینوکس فسا</div>
                    <div class="2xl:w-[600px] pt-10">
                        <div class="text-2xl font-medium text-gray-900 select-text text-center 2xl:text-right">لاگ یا گروه کاربران لینوکس فسا گروهی مستقل و مردم
                            نهاد است که در زمینه گنو / لینوکس و نرم افزار های آزاد فعالیت میکند</div>
                        <div class="pt-8 flex flex-col md:flex-row justify-evenly 2xl:justify-end 2xl:ml-20 gap-3">
                            <a href="https://t.me/FasaLUG"
                                class="bg-blue-500 hover:bg-blue-600 flex gap-2 items-center text-white transition-all font-bold rounded px-5 p-3 w-full md:w-fit cursor-pointer">
                                <iconify-icon width="1.3rem" icon="line-md:telegram"></iconify-icon>
                                <span>تلگرام</span>


                            </a>
                            <a href="https://instagram.com/fasalug.ir"
                                class="insta-gran flex gap-2 items-center   text-white transition-all font-bold rounded px-5 p-3 w-full md:w-fit cursor-pointer">
                                <iconify-icon width="1.3rem" icon="line-md:instagram"></iconify-icon>
                                <span>اینستاگرام</span>


                            </a>
                            <a href="https://github.com/FasaLug"
                                class="bg-gray-900 flex gap-2 items-center hover:bg-gray-950  text-white transition-all font-bold rounded p-3 px-5 w-full md:w-fit cursor-pointer">
                                <iconify-icon width="1.3rem" icon="line-md:github"></iconify-icon>
                                <span>گیتهاب</span>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
            <img class="h-[26rem] pointer-events-none 2xl:absolute  2xl:-bottom-14 2xl:-left-24" src="/assets/pinguin.png" alt="">



        </div>
        {{-- <div class="flex items-center slide overflow-hidden">
            <img class="w-full h-full" src="/assets/slide1.png" alt="">
            <img class="w-full h-full" src="/assets/slide2.jpg" alt="">



    </div> --}}
    </div>




</body>

</html>
