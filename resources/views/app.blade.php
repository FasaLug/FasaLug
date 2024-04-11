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
    <div class="fade-in left"></div>
    <div class="fade-in right"></div>
    <div class="mx-3">
        <div
            class="nav mx-auto mt-3 shadow-md  px-4 bg-white rounded w-full min-h-[65px] max-w-[1440px] flex items-center justify-between">
            <div class="text-xl font-bold select-none">لاگ فسا | گروه کاربران لینوکس فسا </div>
            <div class="flex gap-3 select-none">
                <div
                    class="bg-slate-100 hover:bg-slate-200 transition-colors text-black font-bold rounded p-2 flex items-center gap-1 cursor-pointer">
                    <iconify-icon width="1.3rem" icon="solar:user-linear"></iconify-icon>
                    <span>ورود/ثبت نام</span>

                </div>

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


        </div>
    </div>

    <div class="pinglug relative select-none right-0 top-48 rounded-l-xl bg-white w-[800px] min-h-[30rem]">
        <div class="pt-16 px-7 w-full !z-[999] relative">
            <div>
                <div class="text-5xl font-medium text-gray-800">گروه کاربران لینوکس فسا</div>
                <div class="w-[600px] pt-10">
                    <div class="text-2xl font-medium text-gray-900">لاگ یا گروه کاربران لینوکس فسا گروهی مستقل و مردم
                        نهاد است که در زمینه گنو / لینوکس و نرم افزار های آزاد فعالیت میکند</div>
                    <div class="pt-8 flex justify-end ml-20 gap-3">
                        <div
                            class="bg-blue-500 hover:bg-blue-600 flex gap-2 items-center text-white transition-all font-bold rounded px-5 p-3 w-fit cursor-pointer">
                            <iconify-icon width="1.3rem" icon="line-md:telegram"></iconify-icon>
                            <span>تلگرام</span>


                        </div>
                        <div
                            class="insta-gran flex gap-2 items-center   text-white transition-all font-bold rounded px-5 p-3 w-fit cursor-pointer">
                            <iconify-icon width="1.3rem" icon="line-md:instagram"></iconify-icon>
                            <span>اینستاگرام</span>


                        </div>
                        <div
                            class="bg-gray-900 flex gap-2 items-center hover:bg-gray-950  text-white transition-all font-bold rounded p-3 px-5 w-fit cursor-pointer">
                            <iconify-icon width="1.3rem" icon="line-md:github"></iconify-icon>
                            <span>گیتهاب</span>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <img class="h-[35rem] absolute top-[-.4rem] left-[-8rem]" src="/assets/pinguin.png" alt="">



    </div>
    <div class="absolute !z-[999]  left-20 top-72  w-[900px] min-h-[30rem]">
            <div class="swiper min-h-[30rem]">

                <div class="swiper-wrapper">

                    <div class="swiper-slide"><img class="w-full h-full" src="/assets/slide1.png" alt=""></div>
                    <div class="swiper-slide"><img class="w-full h-full" src="/assets/slide2.jpg" alt=""></div>
                    <div class="swiper-slide"><img class="w-full h-full" src="/assets/slide1.png" alt=""></div>
                </div>
            </div>


    </div>


</body>

</html>
