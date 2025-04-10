<x-app-layout>

    <div class="md2:pl-64 lg:pl-64 md:pl-64">
        <div class="bg-gray-500 dark:bg-gray-800">
            <div class="mx-5 py-5">
                <div class="flex flex-row items-center gap-5 ml-5">
                    <img src="{{ asset('aset/icon/user.png') }}" alt="Foto User" class="w-24 h-full">
                    <p class="text-black dark:text-gray-200 text-lg font-semibold">Nama Pengguna</p>
                    <button type="button" 
                            class="ml-auto py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Lihat Laporan
                    </button>
                </div>
            </div>
        </div>

        <div class="flex flex-row w-full mt-5 pl-5">
            <nav class="flex flex-col lg:pr-24 ml-3">
                <a href="{{ route('settings', ['tab' => 'profile']) }}">
                    <button type="button" class="{{ $tab === 'profile' ? 'active' : '' }} w-full py-2.5 px-5 me-2 mb-1 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Profile</button>
                </a>
                <a href="{{ route('settings', ['tab' => 'settings']) }}">
                    <button type="button" class="{{ $tab === 'settings' ? 'active' : '' }} w-full py-2.5 px-5 me-2 mb-1 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Settings</button>
                </a>
            </nav>
            
            @if($tab === 'profile')
            <div class="w-full mb-8">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                
                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>

                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
                @elseif($tab === 'settings')
                <div>
                    <h2>Pengaturan Tampilan</h2>
                </div>
                @endif
            </div>
        </div>
    </div>
    
    

</x-app-layout>