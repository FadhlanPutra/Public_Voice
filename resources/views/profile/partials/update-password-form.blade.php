@vite(['resources/js/togglePassword.js'])

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        @if (Auth::user()->socialAccounts->isEmpty())
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Pastikan akun Anda menggunakan kata sandi yang panjang dan acak agar tetap aman.') }}
        </p>
        @else
        <p class="text-sm text-gray-600 dark:text-gray-400">
            {{ __('Anda telah login menggunakan media sosial. Anda tidak dapat mengubah password Anda.') }}
        </p>
        @endif
    </header>

    @if (Auth::user()->socialAccounts->isEmpty())
    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <div class="relative">
                <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full password-input" autocomplete="current-password" />
                <i class="fa fa-eye absolute right-3 top-3 cursor-pointer text-black dark:text-gray-200 toggle-password"></i>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <div class="relative">
                <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full password-input" autocomplete="new-password" />
                <i class="fa fa-eye absolute right-3 top-3 cursor-pointer text-black dark:text-gray-200 toggle-password"></i>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <div class="relative">
                <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full password-input" autocomplete="new-password" />
                <i class="fa fa-eye absolute right-3 top-3 cursor-pointer text-black dark:text-gray-200 toggle-password"></i>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>

    @else
    <form class="mt-6 space-y-6 opacity-50 pointer-events-none">
        @csrf
        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <div class="relative">
                <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" disabled />
                <i class="fa fa-eye absolute right-3 top-3 text-gray-500"></i>
            </div>
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <div class="relative">
                <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" disabled />
                <i class="fa fa-eye absolute right-3 top-3 text-gray-500"></i>
            </div>
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <div class="relative">
                <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" disabled />
                <i class="fa fa-eye absolute right-3 top-3 text-gray-500"></i>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button disabled>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
    @endif
</section>
