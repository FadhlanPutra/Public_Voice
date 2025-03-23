<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <x-input-label for="nik" :value="__('NIK')" />
            <x-text-input id="nik" name="nik" type="number" class="mt-1 block w-full" :value="old('nik', $user->nik)" required autofocus autocomplete="nik" />
            <x-input-error class="mt-2" :messages="$errors->get('nik')" />
        </div>

        <div>
            <x-input-label for="number_phone" :value="__('Nomor Telepon')" />
            <x-text-input id="number_phone" name="number_phone" type="number" class="mt-1 block w-full" :value="old('number_phone', $user->number_phone)" required autofocus autocomplete="number_phone" />
            <x-input-error class="mt-2" :messages="$errors->get('number_phone')" />
        </div>

        <div>
            <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />
            <x-text-input id="tanggal_lahir" name="tanggal_lahir" type="date" class="mt-1 block w-full" :value="old('tanggal_lahir', $user->tanggal_lahir)" required autofocus autocomplete="tanggal_lahir" />
            <x-input-error class="mt-2" :messages="$errors->get('tanggal_lahir')" />
        </div>

        <div>
            <x-input-label for="gender" :value="__('Gender')" />
            <select id="gender" name="gender" class="mt-1 block w-full" required autofocus>
                <option value="" {{ old('gender', $user->gender ?? '') == '' ? 'selected' : '' }}>Belum diisi</option>
                <option value="a" {{ old('gender', $user->gender ?? '') == 'a' ? 'selected' : '' }}>A</option>
                <option value="b" {{ old('gender', $user->gender ?? '') == 'b' ? 'selected' : '' }}>B</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('gender')" />
        </div>
        
        <div>
            <x-input-label for="disabilitas" :value="__('Disabilitas')" />
            <select id="disabilitas" name="disabilitas" class="mt-1 block w-full" required autofocus>
                <option value="" {{ old('disabilitas', $user->disabilitas ?? '') == '' ? 'selected' : '' }}>Belum diisi</option>
                <option value="ya" {{ old('disabilitas', $user->disabilitas ?? '') == 'ya' ? 'selected' : '' }}>Ya</option>
                <option value="tidak" {{ old('disabilitas', $user->disabilitas ?? '') == 'tidak' ? 'selected' : '' }}>Tidak</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('disabilitas')" />
        </div>


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
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
</section>
