

    <!-- Session Status -->
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FasaLUG /  پنل کاربری</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=poppins:500|vazirmatn:100,200,300,400,500,600,700,800,900"
            rel="stylesheet" />
        <!-- Styles -->
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <style>
    </style>

    <body>

        <div class="container relative !z-[999]">
            <div class="bg-white p-4 rounded-b-lg ">
                <div class="flex justify-between items-center">
                    <div class="flex items-center select-none">
                        <iconify-icon width="1.5rem" icon="gravity-ui:logo-linux"></iconify-icon>
                        <span class="font-semibold">لاگ فسا | گروه کاربران لینوکسی فسا</span>
                    </div>
                    <div class="profile-info flex items-center  gap-2">
                        <iconify-icon width="1.4rem" icon="ri:user-6-line"></iconify-icon>
                        <span class="font-bold">{{ auth()->user()->name }}</span>

                    </div>
                </div>

            </div>
            <div class="bg-gray-200 p-10 relative overflow-hidden rounded-t-lg shadow-xl mt-10 ">
                <a href="/" class="absolute left-10 top-[-1.3rem] flex items-center gap-2 bg-gray-950 hover:scale-95 transition-all pt-7 pb-1 px-2 p-3 rounded text-white select-none">
                <iconify-icon width="1.3rem" icon="mingcute:back-2-fill"></iconify-icon>
                <span>بازگشت به صفحه اصلی</span>
                </a>
                <div class="flex flex-row gap-3">
                    <div class="bg-slate-100 h-[80vh] flex flex-col justify-between rounded-lg min-w-[20rem]  p-3">
                        <div class="flex gap-2 flex-col">
                            <a href="{{ route('dashboard') }}" class="btn flex items-center gap-2">

                                <iconify-icon width="1.3rem" icon="pajamas:dashboard"></iconify-icon>
                                <span>داشبورد</span>
                            </a>
                            <div class="btn flex items-center gap-2">
                                <iconify-icon width="1.3rem" icon="material-symbols:event-note-outline"></iconify-icon>
                                <span>رویداد های من</span>
                            </div>
                            <div class="btn !bg-blue-200 flex items-center gap-2">
                                <iconify-icon width="1.3rem" icon="tabler:edit"></iconify-icon>
                                <span>پروفایل کاربری</span>
                            </div>

                        </div>
                        <a href="{{ route('g.logout') }}" class="btn logout flex items-center gap-2">
                            <iconify-icon width="1.3rem" icon="material-symbols:logout"></iconify-icon>
                            <span>خروج از حساب</span>
                        </a>
                    </div>
                    <div class="bg-slate-100 rounded-lg flex-grow">
                        <div class="py-12">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                                <div class="p-4 sm:p-8 bg-white  shadow sm:rounded-lg">
                                    <div class="max-w-xl">
                                        @include('profile.partials.update-profile-information-form')
                                    </div>
                                </div>

                                <div class="p-4 sm:p-8 bg-white  shadow sm:rounded-lg">
                                    <div class="max-w-xl">
                                        @include('profile.partials.update-password-form')
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </body>
    </html>





