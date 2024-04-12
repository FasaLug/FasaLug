
    <!-- Session Status -->
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FasaLUG /  پنل مدیریت</title>
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
                        <span class="font-semibold">ADPANEL V.1</span>
                    </div>
                    <div class="profile-info flex items-center  gap-2">
                        <iconify-icon width="1.4rem" icon="ri:user-6-line"></iconify-icon>
                        @if(auth()->user()->role === env('FSLOG_ADMIN'))
                        <span class="font-bold">خوش آمدید ، ادمین!</span>
                        @elseif (auth()->user()->role === env('FSLOG_USER'))
                        <span class="font-bold">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</span>
                        @endif
                    </div>
                </div>

            </div>
            <div class="bg-gray-200 p-10 relative overflow-hidden rounded-t-lg shadow-xl mt-10 h-[90vh]">
                <a href="/" class="absolute left-10 top-[-1.3rem] flex items-center gap-2 bg-gray-950 hover:scale-95 transition-all pt-7 pb-1 px-2 p-3 rounded text-white select-none">
                <iconify-icon width="1.3rem" icon="mingcute:back-2-fill"></iconify-icon>
                <span>بازگشت به پنل کاربری</span>
                </a>
                <div class="flex flex-row gap-3">
                    <div class="bg-slate-100 h-[80vh] flex flex-col justify-between rounded-lg min-w-[20rem]  p-3">
                        <div class="flex gap-2 flex-col">
                            <a href="{{ route('dashboard') }}" class="btn !bg-blue-200 flex items-center gap-2">

                                <iconify-icon width="1.3rem" icon="pajamas:dashboard"></iconify-icon>
                                <span>داشبورد</span>
                            </a>


                        </div>
                        <a href="{{ route('g.logout') }}" class="btn logout flex items-center gap-2">
                            <iconify-icon width="1.3rem" icon="material-symbols:logout"></iconify-icon>
                            <span>خروج از حساب</span>
                        </a>
                    </div>
                    <div class="bg-slate-100 h-[80vh] rounded-lg flex-grow">
                        <div class="grid gap-4 lg:gap-8 md:grid-cols-2 p-8 pt-20">
                            <a href="/myevents" class="relative p-6 rounded-2xl bg-white hover:scale-105 transition-all shadow">
                                <div class="space-y-2">
                                    <div
                                        class="flex items-center justify-between space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500">
                                        <span>لیست کابران</span>
                                        <div class="flex items-center">
                                            <iconify-icon width="2.1rem" icon="mdi:events"></iconify-icon>
                                        </div>
                                    </div>

                                    <div class="flex justify-evenly gap-2">
                                        <div class="flex flex-col text-center">
                                            <div class="numb text-xl">{{ count($users) }}</div>
                                            <div class="info text-xs">تمامی کاربران سایت</div>
                                        </div>
                                        <div class="flex flex-col text-center">
                                            <div class="numb text-xl">{{ count($eventmanger) }}</div>
                                            <div class="info text-xs">تعداد مدیران رویداد</div>
                                        </div>
                                        <div class="flex flex-col text-center">
                                            <div class="numb text-xl">{{ count($admin) }}</div>
                                            <div class="info text-xs">مدیرکل</div>
                                        </div>
                                    </div>


                                </div>
                            </a>

                            <a href="profile/edit" class="relative p-6 rounded-2xl bg-white hover:scale-105 transition-all shadow">
                                <div class="space-y-2">
                                    <div
                                        class="flex items-center justify-between space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500">
                                        <span>وضعیت وبسایت</span>
                                        <div class="flex items-center">
                                            <iconify-icon width="2.1rem" icon="heroicons-outline:status-online"></iconify-icon>

                                        </div>

                                    </div>

                                    <div class="text-2xl">
                                        {{ auth()->user()->firstname }}
                                    </div>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </body>
    </html>




