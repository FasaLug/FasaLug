
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
            <div class="bg-white p-5 rounded-b-lg ">
                <div class="flex justify-between items-center">
                    <span class="font-bold">خوش آمدید!</span>
                    <div class="profile-info flex items-center  gap-2">
                        <iconify-icon width="1.4rem" icon="ri:user-6-line"></iconify-icon>
                        <span class="font-bold">{{ auth()->user()->name }}</span>

                    </div>
                </div>

            </div>
            <div class="bg-gray-200 p-10  rounded-t-lg shadow-xl overflow-hidden mt-10 h-[90vh]">
                <div class="flex flex-row gap-3">
                    <div class="bg-slate-100 h-[80vh] flex flex-col justify-between rounded-lg min-w-[20rem]  p-3">
                        <div class="flex gap-2 flex-col">
                            <div class="btn flex items-center gap-2">

                                <iconify-icon width="1.3rem" icon="pajamas:dashboard"></iconify-icon>
                                <span>داشبورد</span>
                            </div>
                            <div class="btn flex items-center gap-2">
                                <iconify-icon width="1.3rem" icon="material-symbols:event-note-outline"></iconify-icon>
                                <span>رویداد های من</span>
                            </div>
                            <div class="btn flex items-center gap-2">
                                <iconify-icon width="1.3rem" icon="tabler:edit"></iconify-icon>
                                <span>پروفایل کاربری</span>
                            </div>

                        </div>
                        <div class="btn logout flex items-center gap-2">
                            <iconify-icon width="1.3rem" icon="material-symbols:logout"></iconify-icon>
                            <span>خروج از حساب</span>
                        </div>
                    </div>
                    <div class="bg-slate-100 h-[80vh] rounded-lg flex-grow">
                        <div class="grid gap-4 lg:gap-8 md:grid-cols-2 p-8 pt-20">
                            <a href="/myevents" class="relative p-6 rounded-2xl bg-white hover:scale-105 transition-all shadow">
                                <div class="space-y-2">
                                    <div
                                        class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 ">
                                        <span>رویداد های من</span>
                                    </div>

                                    <div class="flex justify-evenly gap-2">
                                        <div class="flex flex-col text-center">
                                            <div class="numb text-xl">0</div>
                                            <div class="info text-xs">رویداد های ثبت نام شده</div>
                                        </div>
                                        <div class="flex flex-col text-center">
                                            <div class="numb text-xl">0</div>
                                            <div class="info text-xs">رویداد های حاضر</div>
                                        </div>
                                        <div class="flex flex-col text-center">
                                            <div class="numb text-xl">0</div>
                                            <div class="info text-xs">رویداد های غایب</div>
                                        </div>
                                    </div>

                                    <div class="flex pt-5 items-center space-x-1 rtl:space-x-reverse text-sm font-medium text-green-600 select-none">
                                        <iconify-icon  width="1.3rem" icon="ant-design:rise-outlined"></iconify-icon>
                                        <span>شما در 32% رویداد ها شرکت کرده اید</span>


                                    </div>
                                </div>
                            </a>

                            <div class="relative p-6 rounded-2xl bg-white shadow ">
                                <div class="space-y-2">
                                    <div
                                        class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500">
                                        <span>New customers</span>
                                    </div>

                                    <div class="text-3xl">
                                        1340
                                    </div>

                                    <div class="flex items-center space-x-1 rtl:space-x-reverse text-sm font-medium text-red-600">

                                        <span>3% decrease</span>

                                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M12 13a1 1 0 100 2h5a1 1 0 001-1V9a1 1 0 10-2 0v2.586l-4.293-4.293a1 1 0 00-1.414 0L8 9.586 3.707 5.293a1 1 0 00-1.414 1.414l5 5a1 1 0 001.414 0L11 9.414 14.586 13H12z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>

                            </div>

                            <div class="relative p-6 rounded-2xl bg-white shadow">
                                <div class="space-y-2">
                                    <div
                                        class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 ">

                                        <span>New orders</span>
                                    </div>

                                    <div class="text-3xl">
                                        3543
                                    </div>

                                    <div class="flex items-center space-x-1 rtl:space-x-reverse text-sm font-medium text-green-600">

                                        <span>7% increase</span>

                                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                                                clip-rule="evenodd"></path>
                                        </svg>
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




