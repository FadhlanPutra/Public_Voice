@vite(['resources/js/togglePassword.js'])

<section class="space-y-6 pb-1">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Setelah akun Anda dihapus, semua sumber daya dan datanya akan dihapus secara permanen dari database kami.') }}
        </p>
        <p class="mt-1 text-sm text-red-600 dark:text-red-400">
            {{ __('PERINGATAN! PROSES INI TIDAK DAPAT DIBATALKAN') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Delete Account') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Apakah Anda yakin ingin menghapus akun Anda?') }}
            </h2>

            @if (Auth::user()->socialAccounts->isEmpty())
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Setelah akun Anda dihapus, semua sumber daya dan datanya akan dihapus secara permanen. Masukkan kata sandi Anda untuk mengonfirmasi bahwa Anda ingin menghapus akun Anda secara permanen.') }}
            </p>
            @else
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Setelah akun Anda dihapus, semua sumber daya dan datanya akan dihapus secara permanen. Masukkan Email Anda untuk mengonfirmasi bahwa Anda ingin menghapus akun Anda secara permanen.') }}
            </p>
            @endif
            
            @if (Auth::user()->socialAccounts->isEmpty())
                
            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
                
                <div class="relative w-full">
                    <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-full password-input"
                    placeholder="{{ __('Password') }}"
                    />
                    <i class="fa fa-eye absolute right-3 top-3 cursor-pointer text-black dark:text-gray-200 toggle-password"></i>
                </div>
                
                
            </div>
            
            @else
            <x-input-label for="email" value="{{ __('email') }}" class="sr-only" />
                
            <div class="relative w-full">
                <x-text-input
                id="email"
                name="email"
                type="email"
                class="mt-1 block w-full email-input"
                placeholder="{{ __('Email') }}"
                />
            </div>
            @endif
            <x-input-error :messages="$errors->userDeletion->get('email')" class="mt-2" />
            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>