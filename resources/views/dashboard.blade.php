<x-app-layout>
    <section class="bg-white dark:bg-gray-900 lg:pl-64 mx-3 pt-5">
    
        <div class="flex flex-col me-1 dark:text-white">
            <div class='p-4 dark:bg-black rounded-xl border-black shadow-lg'>
                <div class='flex flex-col lg:flex-row gap-8  justify-center'>
                    <img src="storage/images/image_dashboard.png" alt="Gambar Dashboard" class='w-full max-w-md' loading="lazy"/>
                    <div class='flex flex-col justify-center gap-4 lg:w-1/2'>
                        <h1 class='font-extrabold text-2xl'>Selamat Pagi, {{ Auth::user()->name }}!</h1>
                        <p>Terima kasih telah menjadi bagian dari Public Voice. Peran Anda sangat penting dalam memastikan setiap pengaduan masyarakat dikelola dengan cepat, transparan, dan tepat sasaran. Gunakan panel admin ini untuk memantau, menanggapi, dan menindaklanjuti setiap laporan yang masuk.</p>
                    
                    @if(Auth::user()->role == 'petugas')    
                        <div class='flex lg:gap-5 max-sm:justify-between'>
                            <a href="">
                                <button href='#' class='p-3 px-6 bg-gray-300 rounded-full text-black'>Lihat Laporan</button>
                            </a>
                        </div>
                    
    
                    @elseif(Auth::user()->role == 'anggota')
                        <div class='flex lg:gap-5 max-sm:justify-between'>
                            <a href="">
                                <button href='#' class='p-3 px-6 bg-gray-300 rounded-full text-black'>Lihat Riwayat</button>
                            </a>
    
                            <a href="">
                                <button class='p-3 px-6 bg-[#A78E51] rounded-full'>Pinjam Buku</button>
                            </a>
                        </div>
                    @endif
    
                    </div>
                </div>
            </div>
            
            
        </div>
    
            
            <div class="mt-10 me-1 dark:text-white text-black">
                <h1 class='font-medium text-2xl'>Info Dashboard Laporan</h1>
    
                <div class="flex max-sm:flex-col lg:flex-row justify-between">
                    <p class='py-3'>Dashboard informasi total laporan</p>
                    @if(Auth::user()->role == 'admin')
                        <a href="">
                            <button class='p-2 px-3 mt-1 bg-gray-300 rounded-full w-full text-black'>Kelola</button>
                        </a>
                    
    
                    @elseif(Auth::user()->role == 'anggota')
                    <a href="">
                        <button class='p-2 px-3 mt-1 bg-gray-300 rounded-full w-full text-black'>Lihat Buku</button>
                    </a>
                    @endif
                </div>
    
    
                <div class='flex mt-14 gap-5 justify-between text-black lg:flex-row flex-wrap'>
                    <div class="bg-white border-l-4 border-blue-500 lg:w-72 lg:h-50 max-sm:w-44 max-sm:h-44 rounded-3xl shadow-md p-6">
                        <p class="text-left font-semibold">Total laporan</p>
                        <div class="flex flex-row items-center mt-4 gap-20">
                            <span class="text-5xl font-bold mr-4">78</span>
                            <i class="fa-solid fa-clipboard-list fa-3x"></i>
                        </div>
                    </div>
                    <div class="bg-white border-l-4 border-red-500 lg:w-72 lg:h-50 max-sm:w-44 max-sm:h-44 rounded-3xl shadow-md p-6">
                        <p class="text-left font-semibold">Laporan belum diproses</p>
                        <div class="flex flex-row items-center mt-4 gap-20">
                            <span class="text-5xl font-bold mr-4">11</span>
                            <i class="fa-solid fa-clock-rotate-left fa-3x"></i>
                        </div>
                    </div>
                    <div class="bg-white border-l-4 border-yellow-500 lg:w-72 lg:h-50 max-sm:w-44 max-sm:h-44 rounded-3xl shadow-md p-6">
                        <p class="text-left font-semibold">Laporan diproses</p>
                        <div class="flex flex-row items-center mt-4 gap-20">
                            <span class="text-5xl font-bold mr-4">25</span>
                            <i class="fa-solid fa-gear fa-3x"></i>
                        </div>
                    </div>
                    <div class="bg-white border-l-4 border-green-500 lg:w-72 lg:h-50 max-sm:w-44 max-sm:h-44 rounded-3xl shadow-md p-6">
                        <p class="text-left font-semibold">Laporan selesai</p>
                        <div class="flex flex-row items-center mt-4 gap-20">
                            <span class="text-5xl font-bold mr-4">42</span>
                            <i class="fa-solid fa-circle-check fa-3x"></i>
                        </div>
                    </div>
                </div>
    
    
            </section>
</x-app-layout>
