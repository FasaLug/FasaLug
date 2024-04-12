<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 ">
            {{ __('ویرایش پروفایل') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 ">
            {{ __("شما از این بخش میتوانید پروفایل خود را ویرایش کنید") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="flex gap-2 w-full justify-between">
            <div class="w-1/2">
                <x-input-label for="firstname" :value="__('نام')" />
                <x-text-input id="firstname" name="firstname" type="text" class="mt-1 block w-full"
                    :value="old('firstname', $user->firstname)" required autofocus autocomplete="firstname" />
                <x-input-error class="mt-2" :messages="$errors->get('firstname')" />
            </div>
          <div class="w-1/2">
            <x-input-label for="lastname" :value="__('نام خانوادگی')" />
            <x-text-input id="lastname" name="lastname" type="text" class="mt-1 block w-full"
                :value="old('lastname', $user->lastname)" required autofocus autocomplete="lastname" />
            <x-input-error class="mt-2" :messages="$errors->get('lastname')" />
          </div>


        </div>

        <div>
            <x-input-label for="email" :value="__('ایمیل')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-gray-800 ">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification"
                        class="underline text-sm text-gray-600  hover:text-gray-900  rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                <p class="mt-2 font-medium text-sm text-green-600 ">
                    {{ __('یک ایمیل تاییدیه برای شما ارسال شد لطفا inbox خود را چک کنید') }}
                </p>
                @endif
            </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('ذخیره') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 ">{{ __('ذخیره شد.') }}</p>
            @endif
        </div>
    </form>
</section>
