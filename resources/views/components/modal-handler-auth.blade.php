    @vite(['resources/js/togglePassword.js'])
    <!-- Login modal -->
    <div id="modal-Login" tabindex="-1" aria-hidden="false" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white text-center w-full">
                        Login
                    </h3>
                    <button type="button" class="absolute right-4 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-Login">
                        <svg class="w-3 h-3" aria-hidden="false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Google Login -->
                        <div class="flex items-center">
                            <div class="flex-grow border-t border-gray-300"></div>
                            <span class="mx-4 text-gray-700 dark:text-white">Gunakan Akun Sosial Media Anda</span>
                            <div class="flex-grow border-t border-gray-300"></div>
                        </div>
                        <div class="flex justify-center my-4">
                            <a href="/auth/google" class="flex gap-2 justify-center items-center text-center bg-gray-300 hover:text-white hover:bg-gray-600 w-full p-2 rounded-lg font-semibold text-xl">  
                                <img src={{ asset('aset/icon/google.png') }} alt="Logo Google" class="w-7 h-auto">
                                Google
                            </a>
                        </div>

                        <div class="flex items-center">
                            <div class="flex-grow border-t border-gray-300"></div>
                            <span class="mx-4 text-gray-700 dark:text-white">Atau Dengan Email Anda</span>
                            <div class="flex-grow border-t border-gray-300"></div>
                        </div>
                    
                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email_login" class="block mt-1 w-full" placeholder="example@gmail.com" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    
                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />
                            
                            <div class="relative">
                                <x-text-input 
                                    class="block mt-1 w-full pr-10 password-input"
                                    placeholder="********"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" 
                                />
                                <i class="fa fa-eye absolute right-3 top-3 cursor-pointer text-black dark:text-gray-200 toggle-password"></i>
                            </div>
                        
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        
                    
                        <!-- Modal footer -->

                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                            </label>
                        </div>
                    
                        <div class="flex items-center justify-between mt-4">
                            <a class="underline text-sm hover:cursor-pointer text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" data-modal-hide="modal-Login" data-modal-target="modal-Register" data-modal-toggle="modal-Register">
                                {{ __('Belum Punya Akun?') }}
                            </a>
                            @if (Route::has('password.request'))
                                <a class="underline text-sm hover:cursor-pointer text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" data-modal-hide="modal-Login" data-modal-target="modal-Forgot" data-modal-toggle="modal-Forgot">
                                    {{ __('Lupa Password?') }}
                                </a>
                            @endif
                            
                        </div>
                            <x-primary-button class="justify-center w-full mt-4 h-10 bg-orange-500 hover:bg-orange-800">
                                {{ __('Log in') }}
                            </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Register modal -->
    <div id="modal-Register" tabindex="-1" aria-hidden="false" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white text-center w-full">
                        Register
                    </h3>
                    <button type="button" class="absolute right-4 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-Register">
                        <svg class="w-3 h-3" aria-hidden="false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="bg-[#535B9C] p-2 m-4 rounded-lg">
                    <p class="text-white text-sm">
                        Mengapa kami meminta data ini?<br>Layanan Public Voice mengumpulkan data pribadi pengguna sebagai jaminan keabsahan dari aduan atau aspirasi yang disampaikan, pengenal identitas, memverifikasi akun dan mengirim notifikasi laporan, menilai tingkat partisipasi publik, pengolahan dan analisis data, penyusunan perencanaan dan pengambilan kebijakan, monitoring dan evaluasi, dan mendorong terciptanya kebijakan yang inklusif.
                    </p>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Google Register -->
                        <div class="flex items-center">
                            <div class="flex-grow border-t border-gray-300"></div>
                            <span class="mx-4 text-gray-700 dark:text-white">Gunakan Akun Sosial Media Anda</span>
                            <div class="flex-grow border-t border-gray-300"></div>
                        </div>
                        <div class="flex justify-center my-4">
                            <a href="/auth/google" class="flex gap-2 justify-center items-center text-center bg-gray-300 hover:text-white hover:bg-gray-600 w-full p-2 rounded-lg font-semibold text-xl">  
                                <img src={{ asset('aset/icon/google.png') }} alt="Logo Google" class="w-7 h-auto">
                                Google
                            </a>
                        </div>

                        <div class="flex items-center">
                            <div class="flex-grow border-t border-gray-300"></div>
                            <span class="mx-4 text-gray-700 dark:text-white">Atau</span>
                            <div class="flex-grow border-t border-gray-300"></div>
                        </div>
                
                        <!-- NIK & Name -->
                        <div class="flex flex-row justify-evenly w-full gap-10">
                            <div class="flex flex-col flex-grow">
                                <x-input-label for="nik" :value="__('NIK')" />
                                <x-text-input id="nik" class="block mt-1 w-full" placeholder="Nomor Induk Kependudukan ( KTP )" type="number" name="nik" :value="old('nik')" required autofocus autocomplete="nik" />
                                <x-input-error :messages="$errors->get('nik')" class="mt-2" />
                            </div>
                            <div class="flex flex-col flex-grow">
                                <x-input-label for="name" :value="__('Nama')" />
                                <x-text-input id="name" class="block mt-1 w-full" placeholder="Nama Lengkap" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Alamat & Tanggal Lahir -->
                        <div class="flex flex-row justify-evenly w-full gap-10">
                            <div class="flex flex-col flex-grow">
                                <x-input-label for="alamat" :value="__('Alamat')" />
                                <x-text-input id="alamat" class="block mt-1 w-full" placeholder="Alamat" type="text" name="alamat" :value="old('alamat')" required autofocus autocomplete="alamat" />
                                <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                            </div>
                            <div class="flex flex-col flex-grow">
                                <label for="tanggal_lahir" class="text-black dark:text-white">Tanggal Lahir</label>
                                <div class="relative max-w-sm">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                      <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                      </svg>
                                    </div>
                                    <input datepicker id="tanggal_lahir" name="tanggal_lahir" datepicker-autohide datepicker-orientation="bottom right" datepicker-format="yyyy-mm-dd" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pilih Tanggal Lahir">
                                    <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        

                        <!-- Pekerjaan & Nomor Telepon -->
                        <div class="flex flex-row justify-evenly w-full gap-10">
                            <div class="flex flex-col flex-grow">
                                <x-input-label for="pekerjaan" :value="__('Pekerjaan')" />
                                <x-text-input id="pekerjaan" class="block mt-1 w-full" placeholder="Pekerjaan" type="text" name="pekerjaan" :value="old('pekerjaan')" required autofocus autocomplete="pekerjaan" />
                                <x-input-error :messages="$errors->get('pekerjaan')" class="mt-2" />
                            </div>
                            <div class="flex flex-col flex-grow">
                                <x-input-label for="number_phone" :value="__('Nomor Telepon')" />
                                <x-text-input id="number_phone" class="block mt-1 w-full" placeholder="Minimal 8-14 Angka" type="text" name="number_phone" :value="old('number_phone')" required autofocus autocomplete="number_phone" />
                                <x-input-error :messages="$errors->get('number_phone')" class="mt-2" />
                            </div>
                        </div>

                        
                        <!-- Jenis Kelamin / Gender & Disabilitas -->
                        <div class="grid grid-cols-2 gap-10">
                            <div>
                                <x-input-label for="gender" :value="__('Gender')" />
                                <select id="gender" name="gender" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required autofocus>
                                    <option value="" disabled selected>Pilih Gender</option>
                                    <option value="pria">Pria</option>
                                    <option value="wanita">Wanita</option>
                                </select>
                                <x-input-error :messages="$errors->get('Gender')" class="mt-2" />
                            </div>
                        
                            <div>
                                <x-input-label for="disabilitas" :value="__('Disabilitas')" />
                                <select id="disabilitas" name="disabilitas" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                                    <option value="" disabled selected>Pilih Status</option>
                                    <option value="ya">Ya</option>
                                    <option value="tidak">Tidak</option>
                                </select>
                                <x-input-error :messages="$errors->get('disabilitas')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Username & Email -->
                        <div class="flex flex-row justify-evenly w-full gap-10">
                            <div class="flex flex-col flex-grow">
                                <x-input-label for="username" :value="__('Username')" />
                                <x-text-input id="username" class="block mt-1 w-full" placeholder="Username" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('username')" class="mt-2" />
                            </div>
                            <div class="flex flex-col flex-grow">
                                <x-input-label for="email_register" :value="__('Email')" />
                                <x-text-input id="email_register" class="block mt-1 w-full" placeholder="user@example.com" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>
                
                        <!-- Password & Confirm -->
                        <div class="flex flex-row justify-evenly w-full gap-10 mb-4">
                            <div class="flex flex-col flex-grow">
                                <x-input-label for="password" :value="__('Password')" />
                
                                <div class="relative">
                                    <x-text-input id="password" class="block mt-1 w-full password-input"
                                    type="password"
                                    name="password"
                                    placeholder="Minimal 8 Digit"
                                    required autocomplete="new-password" />
                                    <i class="fa fa-eye absolute right-3 top-4 cursor-pointer text-black dark:text-gray-200 toggle-password"></i>
                                </div>

                    
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="flex flex-col flex-grow">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                
                                <div class="relative">
                                    <x-text-input id="password_confirmation" class="block mt-1 w-full password-input"
                                    type="password"
                                    placeholder="Password Harus Sama"
                                    name="password_confirmation" required autocomplete="new-password" />
                                    <i class="fa fa-eye absolute right-3 top-4 cursor-pointer text-black dark:text-gray-200 toggle-password"></i>
                                </div>

                    
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                        </div>
                            
                        <!-- Footer -->
                
                            <a class="underline hover:cursor-pointer text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" data-modal-hide="modal-Register" data-modal-target="modal-Login" data-modal-toggle="modal-Login">
                                {{ __('Sudah Memiliki Akun?') }}
                            </a>
                
                        <x-primary-button class="w-full mt-4 justify-center h-10 bg-orange-500 hover:bg-orange-800">
                            {{ __('Register') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Forgot modal -->
    <div id="modal-Forgot" tabindex="-1" aria-hidden="false" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white text-center w-full">
                        Forgot
                    </h3>
                    <button type="button" class="absolute right-4 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-Forgot">
                        <svg class="w-3 h-3" aria-hidden="false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <p class="mx-5 text-black dark:text-gray-200">
                    Masukkan alamat Email anda, kami akan mengirimkan alamat untuk mereset password anda melalui Email anda.
                </p>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                        <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                    
                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>
                                {{ __('Email Password Reset Link') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>