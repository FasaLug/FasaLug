<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FasaLUG / ثبت نام</title>
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
    <div class="container">
        <div class="w-full h-[100vh] flex flex-col justify-center items-center">
            <div class="text-3xl font-bold mb-2">ثبت نام</div>
            <form method="POST" class="bg-white p-3 rounded min-w-[300px]" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <x-input-label for="name" :value="__('نام')" />
                    <x-text-input id="nmae" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />



                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('ایمیل')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="phonenumber" :value="__('شماره تلفن')" />
                    <x-text-input id="phonenumber" class="block mt-1 w-full" type="text" name="phonenumber" :value="old('phonenumber')" required autocomplete="phonenumber" />
                    <x-input-error :messages="$errors->get('phonenumber')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('رمزعبور')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('تکرار رمزعبور')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="select-none text-sm text-gray-900  hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('قبلا ثبت نام کردید؟ وارد شوید') }}
                    </a>

                    <x-primary-button class="ms-4 select-none">
                        {{ __('ثبت نام') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>




