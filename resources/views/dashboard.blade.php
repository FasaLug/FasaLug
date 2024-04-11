
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
        <div class="fade-in left"></div>
    <div class="fade-in right"></div>
        <div class="container relative !z-[999]">
            <div class="bg-white p-5 rounded-b-lg ">
                <div class="flex justify-between items-center">
                    <span class="font-bold">خوش آمدید!</span>
                    <div class="profile-info flex items-center  gap-2">
                        <iconify-icon width="1.4rem" icon="ri:user-6-line"></iconify-icon>
                        <span>{{ auth()->user()->name }}</span>

                    </div>
                </div>

            </div>

            </div>
        </div>
    </body>
    </html>




