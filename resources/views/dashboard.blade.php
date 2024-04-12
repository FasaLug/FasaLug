
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
                    <div class="bg-slate-100 h-[80vh] rounded-lg flex-grow">test</div>
                </div>
            </div>

            </div>
        </div>
    </body>
    </html>




