<!-- Session Status -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FasaLUG / پنل مدیریت</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:500|vazirmatn:100,200,300,400,500,600,700,800,900"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/riva-dashboard-tailwind/riva-dashboard.css">
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
            <a href="{{ route('dashboard') }}"
                class="absolute left-10 top-[-1.3rem] flex items-center gap-2 bg-gray-950 hover:scale-95 transition-all pt-7 pb-1 px-2 p-3 rounded text-white select-none">
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
                        <a href="/myevents"
                            class="relative p-6 rounded-2xl bg-white hover:scale-105 transition-all shadow">
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

                        <a href="profile/edit"
                            class="relative p-6 rounded-2xl bg-white hover:scale-105 transition-all shadow">
                            <div class="space-y-2">
                                <div
                                    class="flex items-center justify-between space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500">
                                    <span>وضعیت وبسایت</span>
                                    <div class="flex items-center">
                                        <iconify-icon width="2.1rem" icon="heroicons-outline:status-online">
                                        </iconify-icon>

                                    </div>

                                </div>

                                <div class="text-2xl">
                                    {{ $status }}
                                </div>
                            </div>

                        </a>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-5">
                        <div class="w-full max-w-full px-3 mb-6  mx-auto">
                            <div
                                class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] bg-white m-5">
                                <div
                                    class="relative flex flex-col min-w-0 break-words border border-dashed bg-clip-border rounded-2xl border-stone-200 bg-light/30">
                                    <!-- card header -->
                                    <div
                                        class="px-9 pt-5 flex justify-between items-stretch flex-wrap min-h-[70px] pb-0 bg-transparent">
                                        <h3
                                            class="flex flex-col items-start justify-center m-2 ml-0 font-medium text-xl/tight text-dark">
                                            <span class="mr-3 font-semibold text-dark">لیست کاربران</span>
                                            <span class="mt-1 font-medium text-secondary-dark text-lg/normal">
                                                مشاهده کاربران و رویداد هایی که در آنها عضو هستند</span>
                                        </h3>
                                        <div class="relative flex flex-wrap items-center my-2">
                                            <a href="javascript:void(0)"
                                                class="inline-block text-[.925rem] font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-150 ease-in-out text-light-inverse bg-light-dark border-light shadow-none border-0 py-2 px-5 hover:bg-secondary active:bg-light focus:bg-light">
                                               مشاهده همه </a>
                                        </div>
                                    </div>
                                    <!-- end card header -->
                                    <!-- card body  -->
                                    <div class="flex-auto block py-8 pt-6 px-9">
                                        <div class="overflow-x-auto">
                                            <table class="w-full my-0 align-middle text-dark border-neutral-200">
                                                <thead class="align-bottom">
                                                    <tr class="font-semibold text-[0.95rem] text-secondary-dark">
                                                        <th class="pb-3 text-start min-w-[175px]">پروفایل</th>
                                                        <th class="pb-3 text-end min-w-[100px]">OWNER</th>
                                                        <th class="pb-3 text-end min-w-[100px]">PROGRESS</th>
                                                        <th class="pb-3 pr-12 text-end min-w-[175px]">STATUS</th>
                                                        <th class="pb-3 pr-12 text-end min-w-[100px]">DEADLINE</th>
                                                        <th class="pb-3 text-end min-w-[50px]">DETAILS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="border-b border-dashed last:border-b-0">
                                                        <td class="p-3 pl-0">
                                                            <div class="flex items-center">
                                                                <div
                                                                    class="relative inline-block shrink-0 rounded-2xl me-3">
                                                                    <img src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/img-49-new.jpg"
                                                                        class="w-[50px] h-[50px] inline-block shrink-0 rounded-2xl"
                                                                        alt="">
                                                                </div>
                                                                <div class="flex flex-col justify-start">
                                                                    <a href="javascript:void(0)"
                                                                        class="mb-1 font-semibold transition-colors duration-200 ease-in-out text-lg/normal text-secondary-inverse hover:text-primary">
                                                                        Social Media API </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="p-3 pr-0 text-end">
                                                            <span
                                                                class="font-semibold text-light-inverse text-md/normal">Olivia
                                                                Cambell</span>
                                                        </td>
                                                        <td class="p-3 pr-0 text-end">
                                                            <span
                                                                class="text-center align-baseline inline-flex px-2 py-1 mr-auto items-center font-semibold text-base/none text-success bg-success-light rounded-lg">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-5 h-5 mr-1">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                                                </svg> 6.5% </span>
                                                        </td>
                                                        <td class="p-3 pr-12 text-end">
                                                            <span
                                                                class="text-center align-baseline inline-flex px-4 py-3 mr-auto items-center font-semibold text-[.95rem] leading-none text-primary bg-primary-light rounded-lg">
                                                                In Progress </span>
                                                        </td>
                                                        <td class="pr-0 text-start">
                                                            <span
                                                                class="font-semibold text-light-inverse text-md/normal">2023-08-23</span>
                                                        </td>
                                                        <td class="p-3 pr-0 text-end">
                                                            <button
                                                                class="ml-auto relative text-secondary-dark bg-light-dark hover:text-primary flex items-center h-[25px] w-[25px] text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-200 ease-in-out shadow-none border-0 justify-center">
                                                                <span
                                                                    class="flex items-center justify-center p-0 m-0 leading-none shrink-0 ">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                                        stroke="currentColor" class="w-4 h-4">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                                    </svg>
                                                                </span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b border-dashed last:border-b-0">
                                                        <td class="p-3 pl-0">
                                                            <div class="flex items-center">
                                                                <div
                                                                    class="relative inline-block shrink-0 rounded-2xl me-3">
                                                                    <img src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/img-40-new.jpg"
                                                                        class="w-[50px] h-[50px] inline-block shrink-0 rounded-2xl"
                                                                        alt="">
                                                                </div>
                                                                <div class="flex flex-col justify-start">
                                                                    <a href="javascript:void(0)"
                                                                        class="mb-1 font-semibold transition-colors duration-200 ease-in-out text-lg/normal text-secondary-inverse hover:text-primary">
                                                                        Geolocation App </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="p-3 pr-0 text-end">
                                                            <span
                                                                class="font-semibold text-light-inverse text-md/normal">Luca
                                                                Micloe</span>
                                                        </td>
                                                        <td class="p-3 pr-0 text-end">
                                                            <span
                                                                class="text-center align-baseline inline-flex px-2 py-1 mr-auto items-center font-semibold text-base/none text-danger bg-danger-light rounded-lg">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-5 h-5 mr-1">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M2.25 6L9 12.75l4.286-4.286a11.948 11.948 0 014.306 6.43l.776 2.898m0 0l3.182-5.511m-3.182 5.51l-5.511-3.181" />
                                                                </svg> 2.7% </span>
                                                        </td>
                                                        <td class="p-3 pr-12 text-end">
                                                            <span
                                                                class="text-center align-baseline inline-flex px-4 py-3 mr-auto items-center font-semibold text-[.95rem] leading-none text-light-inverse bg-light rounded-lg">
                                                                Under Review </span>
                                                        </td>
                                                        <td class="pr-0 text-start">
                                                            <span
                                                                class="font-semibold text-light-inverse text-md/normal">2024-04-11</span>
                                                        </td>
                                                        <td class="p-3 pr-0 text-end">
                                                            <button
                                                                class="ml-auto relative text-secondary-dark bg-light-dark hover:text-primary flex items-center h-[25px] w-[25px] text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-200 ease-in-out shadow-none border-0 justify-center">
                                                                <span
                                                                    class="flex items-center justify-center p-0 m-0 leading-none shrink-0 ">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                                        stroke="currentColor" class="w-4 h-4">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                                    </svg>
                                                                </span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b border-dashed last:border-b-0">
                                                        <td class="p-3 pl-0">
                                                            <div class="flex items-center">
                                                                <div
                                                                    class="relative inline-block shrink-0 rounded-2xl me-3">
                                                                    <img src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/img-39-new.jpg"
                                                                        class="w-[50px] h-[50px] inline-block shrink-0 rounded-2xl"
                                                                        alt="">
                                                                </div>
                                                                <div class="flex flex-col justify-start">
                                                                    <a href="javascript:void(0)"
                                                                        class="mb-1 font-semibold transition-colors duration-200 ease-in-out text-lg/normal text-secondary-inverse hover:text-primary">
                                                                        iOS Login <span class="text-sm">(Morra)</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="p-3 pr-0 text-end">
                                                            <span
                                                                class="font-semibold text-light-inverse text-md/normal">Bianca
                                                                Winson</span>
                                                        </td>
                                                        <td class="p-3 pr-0 text-end">
                                                            <span
                                                                class="text-center align-baseline inline-flex px-2 py-1 mr-auto items-center font-semibold text-base/none text-success bg-success-light rounded-lg">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-5 h-5 mr-1">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                                                </svg> 6.8% </span>
                                                        </td>
                                                        <td class="p-3 pr-12 text-end">
                                                            <span
                                                                class="text-center align-baseline inline-flex px-4 py-3 mr-auto items-center font-semibold text-[.95rem] leading-none text-primary bg-primary-light rounded-lg">
                                                                In Progress </span>
                                                        </td>
                                                        <td class="pr-0 text-start">
                                                            <span
                                                                class="font-semibold text-light-inverse text-md/normal">2024-02-10</span>
                                                        </td>
                                                        <td class="p-3 pr-0 text-end">
                                                            <button
                                                                class="ml-auto relative text-secondary-dark bg-light-dark hover:text-primary flex items-center h-[25px] w-[25px] text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-200 ease-in-out shadow-none border-0 justify-center">
                                                                <span
                                                                    class="flex items-center justify-center p-0 m-0 leading-none shrink-0 ">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                                        stroke="currentColor" class="w-4 h-4">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                                    </svg>
                                                                </span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b border-dashed last:border-b-0">
                                                        <td class="p-3 pl-0">
                                                            <div class="flex items-center">
                                                                <div
                                                                    class="relative inline-block shrink-0 rounded-2xl me-3">
                                                                    <img src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/img-47-new.jpg"
                                                                        class="w-[50px] h-[50px] inline-block shrink-0 rounded-2xl"
                                                                        alt="">
                                                                </div>
                                                                <div class="flex flex-col justify-start">
                                                                    <a href="javascript:void(0)"
                                                                        class="mb-1 font-semibold transition-colors duration-200 ease-in-out text-lg/normal text-secondary-inverse hover:text-primary">
                                                                        Axios Menu </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="p-3 pr-0 text-end">
                                                            <span
                                                                class="font-semibold text-light-inverse text-md/normal">Roberto
                                                                Alliton</span>
                                                        </td>
                                                        <td class="p-3 pr-0 text-end">
                                                            <span
                                                                class="text-center align-baseline inline-flex px-2 py-1 mr-auto items-center font-semibold text-base/none text-success bg-success-light rounded-lg">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-5 h-5 mr-1">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                                                </svg> 4.5% </span>
                                                        </td>
                                                        <td class="p-3 pr-12 text-end">
                                                            <span
                                                                class="text-center align-baseline inline-flex px-4 py-3 mr-auto items-center font-semibold text-[.95rem] leading-none text-success bg-success-light rounded-lg">
                                                                Done </span>
                                                        </td>
                                                        <td class="pr-0 text-start">
                                                            <span
                                                                class="font-semibold text-light-inverse text-md/normal">2023-05-31</span>
                                                        </td>
                                                        <td class="p-3 pr-0 text-end">
                                                            <button
                                                                class="ml-auto relative text-secondary-dark bg-light-dark hover:text-primary flex items-center h-[25px] w-[25px] text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-200 ease-in-out shadow-none border-0 justify-center">
                                                                <span
                                                                    class="flex items-center justify-center p-0 m-0 leading-none shrink-0 ">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                                        stroke="currentColor" class="w-4 h-4">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                                    </svg>
                                                                </span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b border-dashed last:border-b-0">
                                                        <td class="p-3 pl-0">
                                                            <div class="flex items-center">
                                                                <div
                                                                    class="relative inline-block shrink-0 rounded-2xl me-3">
                                                                    <img src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/img-48-new.jpg"
                                                                        class="w-[50px] h-[50px] inline-block shrink-0 rounded-2xl"
                                                                        alt="">
                                                                </div>
                                                                <div class="flex flex-col justify-start">
                                                                    <a href="javascript:void(0)"
                                                                        class="mb-1 font-semibold transition-colors duration-200 ease-in-out text-lg/normal text-secondary-inverse hover:text-primary">
                                                                        Resto Aperto </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="p-3 pr-0 text-end">
                                                            <span
                                                                class="font-semibold text-light-inverse text-md/normal">Michael
                                                                Kenny</span>
                                                        </td>
                                                        <td class="p-3 pr-0 text-end">
                                                            <span
                                                                class="text-center align-baseline inline-flex px-2 py-1 mr-auto items-center font-semibold text-base/none text-danger bg-danger-light rounded-lg">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-5 h-5 mr-1">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M2.25 6L9 12.75l4.286-4.286a11.948 11.948 0 014.306 6.43l.776 2.898m0 0l3.182-5.511m-3.182 5.51l-5.511-3.181" />
                                                                </svg> 1% </span>
                                                        </td>
                                                        <td class="p-3 pr-12 text-end">
                                                            <span
                                                                class="text-center align-baseline inline-flex px-4 py-3 mr-auto items-center font-semibold text-[.95rem] leading-none text-warning bg-warning-light rounded-lg">
                                                                Postponed </span>
                                                        </td>
                                                        <td class="pr-0 text-start">
                                                            <span
                                                                class="font-semibold text-light-inverse text-md/normal">2023-05-15</span>
                                                        </td>
                                                        <td class="p-3 pr-0 text-end">
                                                            <button
                                                                class="ml-auto relative text-secondary-dark bg-light-dark hover:text-primary flex items-center h-[25px] w-[25px] text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-200 ease-in-out shadow-none border-0 justify-center">
                                                                <span
                                                                    class="flex items-center justify-center p-0 m-0 leading-none shrink-0 ">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                                        stroke="currentColor" class="w-4 h-4">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                                    </svg>
                                                                </span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
