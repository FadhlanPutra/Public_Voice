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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('aset/icon/public_voice.png') }}" type="image/x-icon" class="dark:hidden">
    <link rel="icon" href="{{ asset('aset/icon/public_voice_dark.png') }}" type="image/x-icon" class="hidden dark:block">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="theme-color" content="#FF2B00">
    <title>Public Voice</title>
    <meta name="description" content="Public Voice adalah platform digital untuk pengaduan masyarakat yang memastikan pengelolaan laporan yang cepat, transparan, dan efektif, didukung oleh AI untuk memprioritaskan dan mengotomatiskan klasifikasi masalah.">
    <meta name="keywords" content="Public Voice, pengaduan masyarakat, keterlibatan masyarakat, AI, machine learning, transparansi, teknologi sipil, pelaporan warga, platform digital">
    <meta name="author" content="Tim Public Voice">
    

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/darkMode.js', 'resources/js/navbarHighlight.js'])

    <!-- Flowbite -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <style>
        span {
            color: orange;
        }
    </style>

</head>

<body id="themed" class="bg-gray-50 text-gray-800 dark:bg-gray-800">
    @include('layouts.navbar');
    @include('components.modal-handler-auth');
    
    <!-- Hero Section -->
    <div class="flex flex-row items-center mb-10 mx-5 pt-20" id="beranda">
        <img src="aset/image1_welcome.png" loading="lazy" alt="background" class="hidden md:block w-1/2 h-auto rounded-md mb-6 mr-20">
        
        <div class="text-center w-50%">
            <h2 class="text-2xl font-bold mb-2 text-orange-500">Public Voice</h2>
            <h4 class="text-lg font-semibold text-blue-500">Suara Anda, Perubahan Nyata!</h4>
            <p class="text-gray-600 mt-2 dark:text-gray-300">Public Voice adalah platform yang memungkinkan Anda untuk menyuarakan pendapat dan aspirasi Anda. Dengan Public Voice, Anda dapat memberikan masukan, saran, dan kritik terhadap kebijakan pemerintah, layanan publik, dan berbagai hal lainnya.</p>

            <div class="flex flex-row items-center pt- justify-center mt-6 space-x-4">
                @if (Route::has('login'))
                    @auth
                        {{-- Tombol Dashboard jika user sudah login --}}
                        <a 
                            href="{{ url('/dashboard') }}" 
                            class="block text-white bg-orange-500 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800"
                        >
                            Dashboard
                        </a>
                    @else
                        {{-- Tombol Login --}}
                        <button 
                            data-modal-target="modal-Login" 
                            data-modal-toggle="modal-Login" 
                            class="block text-white bg-orange-500 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800" 
                            type="button"
                        >
                            Login
                        </button>
                    
                        {{-- Tombol Register --}}
                        @if (Route::has('register'))
                            <button 
                                data-modal-target="modal-Register" 
                                data-modal-toggle="modal-Register" 
                                class="block text-white bg-gray-500 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-orange-800" 
                                type="button"
                            >
                                Register
                            </button>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>


    <!-- About Section -->
    <div class="mx-5" id="tentang">
        <div class="flex flex-row items-center mb-10">
            <img src="aset/image2_welcome.png" loading="lazy" alt="Apa Itu Public Voice?" class="hidden md:block w-1/2 h-auto rounded-md mb-6 mr-20">

            <div class="text-center w-50%">
                <h4 class="text-2xl font-bold text-orange-500">Apa itu Public Voice?</h4>
                <p class="text-gray-600 mt-2 dark:text-gray-300"><span>Public Voice</span> adalah aplikasi pengaduan masyarakat yang memudahkan siapa saja menyampaikan keluhan, saran, atau aspirasi secara transparan. Dengan sistem real-time yang cepat dan akuntabel, setiap laporan dapat dipantau untuk memastikan tindak lanjut yang efektif. Public Voice hadir untuk meningkatkan komunikasi masyarakat dengan pemerintah demi perubahan positif dan lingkungan yang lebih responsif.</p>
            </div>
        </div>

        <div class="flex flex-row items-center mb-10">
            <div class="text-center">
                <h4 class="text-2xl font-bold text-orange-500">Mengapa Harus Public Voice?</h4>
                <p class="text-gray-600 mt-2 dark:text-gray-300"><span>Public Voice</span> adalah solusi inovatif untuk pengaduan masyarakat yang cepat, transparan, dan akuntabel. Dengan sistem real-time yang mudah digunakan, setiap laporan mendapat tindak lanjut yang tepat. Keamanan data terjamin, memastikan kerahasiaan pengaduan. <span>Public Voice</span> memberi kekuatan bagi setiap suara untuk mendorong perubahan nyata dan menciptakan lingkungan yang lebih baik.</p>
            </div>

            <img src="aset/image3_welcome.png" loading="lazy"alt="Mengapa Harus Public Voice?" class="hidden md:block w-1/2 h-auto rounded-md mb-6 ml-20">
        </div>
    </div>
    
    <!-- Vision Mission Section -->
    <div class="md:flex justify-center items-stretch md:space-x-4 mb-10 relative mx-5 pt-24" id="visi-misi">
    
        <div class="md:w-1/2 mb-5 text-left flex flex-col p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-400">
            <div class="text-center">
                <i class="fa-solid fa-rocket fa-4x dark:text-white"></i>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-orange-500 dark:text-white my-5">Visi Kami</h5>
            </div>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-300">Menjadi platform pengaduan masyarakat yang inovatif, transparan, dan terpercaya dalam menciptakan perubahan positif bagi lingkungan dan layanan publik. Public Voice berkomitmen untuk membangun sistem yang memudahkan masyarakat dalam menyampaikan aspirasi, memastikan setiap laporan mendapatkan tindak lanjut yang tepat, serta meningkatkan kepercayaan antara masyarakat dan pihak berwenang. Dengan teknologi yang canggih dan sistem yang responsif, kami berupaya menciptakan lingkungan yang lebih baik melalui keterbukaan, partisipasi aktif, dan kolaborasi yang efektif.</p>
            <div class="flex-grow"></div> 
        </div>
        
        <div class="md:w-1/2 text-left flex flex-col p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-400">
            <div class="text-center">
                <i class="fa-solid fa-bullseye fa-4x dark:text-white"></i>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-orange-500 dark:text-white my-5">Misi Kami</h5>
            </div>
            <ol class="list-decimal list-inside mt-2 text-gray-600 dark:text-gray-300">
                <li>Mempermudah Akses Pengaduan – Masyarakat dapat menyampaikan laporan kapan saja dan di mana saja dengan mudah.</li>
                <li>Meningkatkan Transparansi – Setiap laporan dapat dipantau secara real-time untuk memastikan akuntabilitas.</li>
                <li>Membangun Kepercayaan – Menghubungkan masyarakat dengan pihak berwenang untuk solusi yang lebih cepat dan tepat.</li>
                <li>Mendorong Perbaikan – Menggunakan data pengaduan untuk meningkatkan kualitas layanan publik dan kesejahteraan masyarakat.</li>
            </ol>
            <div class="flex-grow"></div> 
        </div>
    </div>

    <!-- How To Section -->
    <div class="mt-10 bg-[#d9d9d9] text-center items-center rounded-lg p-10 shadow-sm text-black dark:text-gray-300 dark:bg-gray-900" id="tata-cara">
        <p class="text-2xl font-bold">Bagaimana cara melapor?</p>
        <p>Berikut tata cara melapor pada website kami</p>
    
        <div class="grid gap-5 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-10 justify-items-center">
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-400">
                <i class="fa-solid fa-user fa-3x text-black dark:text-white"></i>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Masuk Akun</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-300">Sebelum melapor, pastikan anda harus mempunyai akun terlebih dahulu, bila belum mempunyai akun, maka daftar terlebih dahulu.</p>
            </div>
    
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-400">
                <i class="fa-solid fa-address-book fa-3x text-black dark:text-white"></i>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Isi Laporan</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-300">Setelah login, kamu akan masuk ke halaman yang berisi formulir data laporan, jangan lupa masukan data dengan lengkap.</p>
            </div>
    
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-400">
                <i class="fa-solid fa-id-card fa-3x text-black dark:text-white"></i>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Detail Laporan</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-300">Setelah melapor, kamu bisa melihat detail laporan kamu, dan menunggu tanggapan dari seorang petugas.</p>
            </div>
        </div>
    </div>
    
    

    <!-- Contact Section -->
    <div class="text-center mt-10 mx-5 items-center justify-center" id="kontak">
        <p class="text-3xl font-bold text-orange-500 mb-4">Hubungi Kami</p>
        <p class="text-gray-600 mb-8 dark:text-gray-300">
            Kami siap membantu! Jika Anda memiliki pertanyaan, saran, atau ingin bekerja sama,
            <br>jangan ragu untuk menghubungi kami melalui informasi di bawah ini.
        </p>

        <div class="flex flex-col md:flex-row justify-between items-stretch gap-8 p-8 rounded-lg bg-white dark:bg-gray-900 shadow-lg">
            <!-- Informasi Kontak -->
            <div class="w-full md:w-1/2 text-left flex flex-col">
                <h3 class="text-xl font-semibold mb-4 text-orange-500">Informasi Kontak</h3>
                <p class="text-gray-700 mb-4 dark:text-gray-300">Kami siap membantu! Jika Anda memiliki pertanyaan, saran, atau ingin bekerja sama, jangan ragu untuk menghubungi kami melalui informasi di bawah ini.</p>

                <div class="flex items-center mb-3">
                    <i class="fa-solid fa-phone text-black dark:text-white mr-3"></i>
                    <div>
                        <p class="text-gray-700 dark:text-gray-300">+62 123-456-789</p>
                        <p class="text-gray-700 dark:text-gray-300">+62 123-456-789</p>
                    </div>
                </div>

                <div class="flex items-center mb-3">
                    <i class="fa-solid fa-envelope text-black dark:text-white mr-3"></i>
                    <p class="text-gray-700 dark:text-gray-300">publicvoice@gmail.com</p>
                </div>

                <div class="flex items-center">
                    <i class="fa-solid fa-location-dot text-black dark:text-white mr-3"></i>
                    <p class="text-gray-700 dark:text-gray-300">Bandung, Indonesia</p>
                </div>
            </div>

            <!-- Formulir -->
            <div class="w-full flex flex-col items-end">
                <form class="w-full md:max-w-md">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <input type="text" class="p-3 border rounded-lg focus:ring-orange-500 focus:border-orange-500" placeholder="Nama Anda" required />
                        <input type="email" class="p-3 border rounded-lg focus:ring-orange-500 focus:border-orange-500" placeholder="Email Anda" required />
                    </div>

                    <div class="mb-4">
                        <input type="text" class="p-3 border rounded-lg w-full focus:ring-orange-500 focus:border-orange-500" placeholder="Subjek" required />
                    </div>

                    <div class="mb-4">
                        <textarea rows="4" class="p-3 border rounded-lg w-full focus:ring-orange-500 focus:border-orange-500" placeholder="Pesan Anda" required></textarea>
                    </div>

                    <div class="md:text-right">
                        <button type="submit" class="bg-orange-600 hover:bg-orange-700 text-white font-semibold w-full md:w-1/3 py-2 md:px-4 rounded-lg">
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-[#d9d9d9] text-center p-5 mt-10 rounded-t-lg dark:bg-gray-900 dark:text-gray-300 text-black">
        @ Copyright &copy; 2025 Public Voice. All rights reserved.
    </footer>
    
</body>
</html>
