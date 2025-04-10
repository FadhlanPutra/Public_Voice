<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <script>
            (function() {
              // Gunakan key "color-theme" untuk konsistensi
              const theme = localStorage.getItem('color-theme');
              const systemPrefersLight = window.matchMedia('(prefers-color-scheme: light)').matches;
              const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

              if (theme === 'light' || (!theme && systemPrefersLight)) {
                document.documentElement.classList.add('light');
                document.documentElement.classList.remove('dark');
              } else if (theme === 'dark' || (!theme && systemPrefersDark)) {
                document.documentElement.classList.add('dark');
                document.documentElement.classList.remove('light');
              } else {
                // Jika tidak ada preferensi, default ke light (atau dark sesuai keinginan)
                document.documentElement.classList.add('light');
                document.documentElement.classList.remove('dark');
              }
            })();
        </script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('aset/icon/public_voice.png') }}" type="image/x-icon" class="dark:hidden">
        <link rel="icon" href="{{ asset('aset/icon/public_voice_dark.png') }}" type="image/x-icon" class="hidden dark:block">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
        <meta name="theme-color" content="#FF2B00">

        <title>Public Voice {{ucfirst(Auth::user()->role)}}</title>

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/darkMode.js'])

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">


        {{-- @include('components.dark-mode-script') --}}

        

    </head>
    <body class="font-sans antialiased">
            
            @php
            $waktu = now('Asia/Jakarta')->locale('id')->isoFormat('dddd, D MMMM YYYY | HH:mm');

            $jam = (int) now('Asia/Jakarta')->locale('id')->isoFormat('HH');

            if ($jam >= 6 && $jam < 18) {
                $icon = '<i id="theme-toggle-icon" class="fas fa-sun pt-1"></i>';
            } else {
                $icon = '<i id="theme-toggle-icon" class="fa-solid fa-moon pt-1 sm:hidden"></i>';
            }
            @endphp
        
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <nav class="bg-white dark:text-white border-gray-200 p-4 dark:bg-gray-800 drop-shadow-lg">
                
                <div class="flex flex-row justify-between gap-4 lg:gap-6 items-center px-4 sm:px-6 lg:px-4 md2:pl-64 lg:pl-64 md:pl-64 drop-shadow-md">
                    @if (Auth::user()->role == 'admin')    
                        <form method="GET" action="">
                            <input id="search" name="search" type="text" class="text-black rounded-lg border-gray-500 focus:ring-opacity-50 dark:bg-gray-700 dark:placeholder-white" placeholder="Cari Laporan...">
                        </form> 
                    @elseif (Auth::user()->role == 'petugas')
                        <form method="GET" action="">
                            <input id="search" name="search" type="text" class="text-black rounded-lg border-gray-500 focus:ring-opacity-50 dark:bg-gray-700 dark:placeholder-white" placeholder="Cari Laporan...">
                        </form>
                    @elseif (Auth::user()->role == 'user')
                        <form method="GET" action="">
                            <input id="search" name="search" type="text" class="text-black rounded-lg border-gray-500 focus:ring-opacity-50 dark:bg-gray-700 dark:placeholder-white" placeholder="Cari Laporan...">
                        </form>
                    @endif


                    <div class="md:flex flex-row gap-4 sm:text-sm hidden">
                        <p>{{ $waktu }}</p>
                        <i class="fa-regular fa-calendar pt-1"></i>
                        {!! $icon !!}
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    //message with sweetalert
    @if(session('success'))
        Swal.fire({
            icon: "success",
            title: "BERHASIL",
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
        });
    @elseif(session('error'))
        Swal.fire({
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 2000
        });
    @endif


    document.addEventListener('click', function (e) {

    const confirmButton = e.target.closest('.confirm-button');
    if (confirmButton) {
        e.preventDefault();

        // Ambil pesan konfirmasi dan ID form dari atribut data
        const message = e.target.getAttribute('data-message') || "Apakah Anda yakin?";
        const formId = e.target.getAttribute('data-form');

        // Tampilkan SweetAlert
        Swal.fire({
            title: "Konfirmasi",
            text: message,
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Ya",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika dikonfirmasi, submit form
                if (formId) {
                    document.getElementById(formId).submit();
                    }
            }
        });
    }
});



    function clearInput(){
        document.getElementById(search).value = '';
        document.getElementById(formId).submit();
    };


</script>

        </div>
    </body>
</html>
