<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Public Voice</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Flowbite -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <style>
        span {
            color: #ff2b00;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">
    <x-navbar></x-navbar>
    
    <!-- Hero Section -->
    <div class="flex flex-row items-center mb-10 mx-5 mt-5" id="beranda">
        <img src="storage/images/fff.png" alt="gambar" class="w-1/2 h-auto rounded-md shadow-md mb-6 mr-20">
        
        <div class="text-center w-50%">
            <h2 class="text-2xl font-bold mb-2 text-orange-500">Public Voice</h2>
            <h4 class="text-lg font-semibold text-blue-500">Suara Anda, Perubahan Nyata!</h4>
            <p class="text-gray-600 mt-2">Public Voice adalah platform yang memungkinkan Anda untuk menyuarakan pendapat dan aspirasi Anda. Dengan Public Voice, Anda dapat memberikan masukan, saran, dan kritik terhadap kebijakan pemerintah, layanan publik, dan berbagai hal lainnya.</p>
            
            <div class="flex flex-row items-center justify-center mt-6 space-x-4">
                <button 
                    data-modal-target="modal-Login" 
                    data-modal-toggle="modal-Login" 
                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" 
                    type="button"
                >
                    Login
                </button>
                
                <button 
                    data-modal-target="modal-Register" 
                    data-modal-toggle="modal-Register" 
                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" 
                    type="button"
                >
                    Register
                </button>
            </div>
        </div>
    </div>

    <x-modal-handler></x-modal-handler>

    <!-- About Section -->
    <div class="mx-5" id="tentang">
        <div class="flex flex-row items-center mb-10">
            <img src="storage/images/apa-itu.png" alt="Apa Itu Public Voice?" class="w-1/2 h-auto rounded-md shadow-md mb-6 mr-20">

            <div class="text-center w-50%">
                <h4 class="text-2xl font-bold text-orange-500">Apa itu Public Voice?</h4>
                <p class="text-gray-600 mt-2"><span>Public Voice</span> adalah aplikasi pengaduan masyarakat yang memudahkan siapa saja menyampaikan keluhan, saran, atau aspirasi secara transparan. Dengan sistem real-time yang cepat dan akuntabel, setiap laporan dapat dipantau untuk memastikan tindak lanjut yang efektif. Public Voice hadir untuk meningkatkan komunikasi masyarakat dengan pemerintah demi perubahan positif dan lingkungan yang lebih responsif.</p>
            </div>
        </div>

        <div class="flex flex-row items-center mb-10">
            <div class="text-center">
                <h4 class="text-2xl font-bold text-orange-500">Mengapa Harus Public Voice?</h4>
                <p class="text-gray-600 mt-2"><span>Public Voice</span> adalah solusi inovatif untuk pengaduan masyarakat yang cepat, transparan, dan akuntabel. Dengan sistem real-time yang mudah digunakan, setiap laporan mendapat tindak lanjut yang tepat. Keamanan data terjamin, memastikan kerahasiaan pengaduan. <span>Public Voice</span> memberi kekuatan bagi setiap suara untuk mendorong perubahan nyata dan menciptakan lingkungan yang lebih baik.</p>
            </div>

            <img src="storage/images/mengapa-harus.png" alt="Mengapa Harus Public Voice?" class="w-1/2 h-auto rounded-md shadow-md mb-6 ml-20">
        </div>
    </div>

    <!-- Vision Mission Section -->
    <div class="flex justify-between items-start space-x-4 mb-10 relative mx-5 pt-24" id="visi-misi">
        <div class="absolute left-1/2 transform -translate-x-1/2 h-full top-0 w-0.5 bg-orange-500 mx-1"></div>
        
        <div class="w-1/2 text-left">
            <div class="text-center">
                <i class="fa-solid fa-rocket fa-4x"></i>
                <p class="font-semibold text-center text-3xl text-orange-500 my-5">Visi Kami</p>
            </div>
            <p class="text-gray-600 mt-2">
                Menjadi platform pengaduan masyarakat yang inovatif, transparan, dan terpercaya dalam menciptakan perubahan positif bagi lingkungan dan layanan publik. Public Voice berkomitmen untuk membangun sistem yang memudahkan masyarakat dalam menyampaikan aspirasi, memastikan setiap laporan mendapatkan tindak lanjut yang tepat, serta meningkatkan kepercayaan antara masyarakat dan pihak berwenang. Dengan teknologi yang canggih dan sistem yang responsif, kami berupaya menciptakan lingkungan yang lebih baik melalui keterbukaan, partisipasi aktif, dan kolaborasi yang efektif.
            </p>
        </div>
    
        <div class="w-1/2 text-left">
            <div class="text-center">
                <i class="fa-solid fa-bullseye fa-4x"></i>
                <p class="font-semibold text-center text-3xl text-orange-500 my-5">Misi Kami</p>
            </div>
            <ol class="list-decimal list-inside mt-2 text-gray-600">
                <li>Mempermudah Akses Pengaduan – Masyarakat dapat menyampaikan laporan kapan saja dan di mana saja dengan mudah.</li>
                <li>Meningkatkan Transparansi – Setiap laporan dapat dipantau secara real-time untuk memastikan akuntabilitas.</li>
                <li>Membangun Kepercayaan – Menghubungkan masyarakat dengan pihak berwenang untuk solusi yang lebih cepat dan tepat.</li>
                <li>Mendorong Perbaikan – Menggunakan data pengaduan untuk meningkatkan kualitas layanan publik dan kesejahteraan masyarakat.</li>
            </ol>
        </div>
    </div>

    <!-- How To Section -->
    <div class="mt-10 bg-[#d9d9d9] text-center items-center rounded-lg p-10" id="tata-cara">
        <p class="text-2xl font-bold">Bagaimana cara melapor?</p>
        <p>Berikut tata cara melapor pada website kami</p>

        <div class="flex flex-row justify-evenly mt-10">
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <i class="fa-solid fa-user fa-3x" style="color: black"></i>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Masuk Akun</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Sebelum melapor, pastikan anda harus mempunyai akun terlebih dahulu, bila belum mempunyai akun, maka daftar terlebih dahulu.</p>
            </div>

            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <i class="fa-solid fa-address-book fa-3x" style="color: black"></i>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Isi Laporan</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Setelah login, kamu akan masuk ke halaman yang berisi formulir data laporan, jangan lupa masukan data dengan lengkap.</p>
            </div>

            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <i class="fa-solid fa-id-card fa-3x" style="color: black"></i>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Detail Laporan</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Setelah melapor, kamu bisa melihat detail laporan kamu, dan menunggu tanggapan dari seorang petugas.</p>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="text-center mt-10 mx-5 items-center justify-center" id="kontak">
        <p class="text-2xl font-bold">Kontak Kami</p>
        <p>Kami siap membantu! Jika Anda memiliki pertanyaan, saran, atau ingin <br>bekerja sama, jangan ragu untuk menghubungi kami melalui informasi di bawah ini.</p>

        <div class="bg-[#d9d9d9] flex flex-row justify-center items-center rounded-lg p-10 mt-10">
            <div class="bg-[#878787] rounded-lg p-5 text-white">
                <p class="text-2xl font-semibold">Contact Information</p>
                <p>Kami siap membantu! Jika Anda memiliki pertanyaan, saran, atau ingin <br>bekerja sama, jangan ragu untuk menghubungi kami melalui informasi di <br>bawah ini.</p>
                
                <div class="flex flex-row items-center mt-5">
                    <i class="fa-solid fa-phone fa-2x mr-3" style="color: black"></i>
                    <div class="text-left">
                        <p>+62 123-456-789</p>
                        <p>+62 123-456-789</p>
                    </div>
                </div>
                
                <div class="flex flex-row items-center mt-5">
                    <i class="fa-solid fa-envelope fa-2x mr-3" style="color: black"></i>
                    <p>publicvoice@gmail.com</p>
                </div>
                
                <div class="flex flex-row items-center mt-5">
                    <i class="fa-solid fa-location-dot fa-2x mr-3" style="color: black"></i>
                    <p>Bandung, Indonesia</p>
                </div>
            </div>

            <div class="p-6 rounded-lg">
                <form class="max-w-lg mx-auto">
                    <div class="mb-6">
                        <div class="flex flex-col sm:flex-row gap-4">
                            <input 
                                type="text" 
                                id="name" 
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                placeholder="John Doe" 
                                required 
                            />
                            <input 
                                type="email" 
                                id="email" 
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                placeholder="example@gmail.com" 
                                required 
                            />
                        </div>
                    </div>

                    <div class="mb-6">
                        <input 
                            type="text" 
                            id="subject" 
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                            placeholder="Subject" 
                            required 
                        />
                    </div>

                    <div class="mb-6">
                        <textarea 
                            id="deskripsi" 
                            rows="4" 
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                            placeholder="Deskripsi" 
                            required
                        ></textarea>
                    </div>

                    <div class="text-start">
                        <button 
                            type="submit" 
                            class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800"
                        >
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-[#d9d9d9] text-center p-5 mt-10 rounded-t-lg">
        @ Copyright &copy; 2025 Public Voice. All rights reserved.
    </footer>
</body>
</html>
