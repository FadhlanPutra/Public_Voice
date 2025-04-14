@php
$jam = (int) now('Asia/Jakarta')->locale('id')->isoFormat('HH');

if ($jam >= 0 && $jam < 12) {
    $salam = 'Pagi';
} elseif ($jam >= 12 && $jam < 15) {
    $salam = 'Siang';
} elseif ($jam >= 15 && $jam < 18) {
    $salam = 'Sore';
} else {
    $salam = 'Malam';
}
@endphp

<x-app-layout>
    <section class="bg-white dark:bg-gray-900 md2:pl-64 lg:pl-64 md:pl-64 mx-3 pt-5">
    
        <div class="flex flex-col me-1 dark:text-white">
            <div class='p-4 dark:bg-black rounded-xl border-black shadow-lg'>
                <div class='flex flex-col lg:flex-row gap-8  justify-center'>
                    <img src="aset/image_dashboard.png" alt="Gambar Dashboard" class='w-full max-w-md' loading="lazy"/>
                    <div class='flex flex-col justify-center gap-4 lg:w-1/2'>
                        <h1 class='font-extrabold text-2xl'>Selamat {{$salam}}, {{ Auth::user()->name }}!</h1>
                        <p>Terima kasih telah menjadi bagian dari Public Voice. Peran Anda sangat penting dalam memastikan setiap pengaduan masyarakat dikelola dengan cepat, transparan, dan tepat sasaran. Gunakan panel admin ini untuk memantau, menanggapi, dan menindaklanjuti setiap laporan yang masuk.</p>
                    
                    @if(Auth::user()->role == 'admin')    
                        <div class='flex lg:gap-5 max-sm:justify-between'>
                            <a href="{{ route('admin.pengaduan') }}">
                                <button href='#' class='p-2 px-6 bg-gray-300 rounded-full text-black'>Lihat Laporan</button>
                            </a>
                            <a href="{{ route('admin.statistik') }}">
                                <button href='#' class='p-2 px-6 bg-orange-500 rounded-full'>Lihat Statistik</button>
                            </a>
                        </div>
                    @elseif(Auth::user()->role == 'petugas')    
                        <div class='flex lg:gap-5 max-sm:justify-between'>
                            <a href="{{ route('petugas.laporan') }}">
                                <button href='#' class='p-2 px-6 bg-gray-300 rounded-full text-black'>Lihat Laporan</button>
                            </a>
                        </div>
                    @elseif(Auth::user()->role == 'user')
                        <div class='flex lg:gap-5 max-sm:justify-between'>
                            <a href={{ route('users.create') }}>
                                <button class='p-2 px-6 bg-gray-300 rounded-full text-black'>Buat Laporan</button>
                            </a>
    
                            <a href={{ route('users.index') }}>
                                <button class='p-2 px-6 bg-orange-500 rounded-full'>Lihat Laporan</button>
                            </a>
                        </div>
                    @endif
    
                    </div>
                </div>
            </div>
        </div>
    
            
            <div class="mt-10 me-1 dark:text-white text-black ">
                <h1 class='font-medium text-2xl'>Info Dashboard Laporan</h1>
    
                <div class="flex max-sm:flex-col lg:flex-row justify-between">
                    <p class="">Dashboard informasi total laporan</p>
                    @if(Auth::user()->role == 'admin')
                        <a href="{{ route('admin.pengaduan') }}">
                            <button class='p-2 px-3 bg-gray-300 rounded-full w-full text-black'>Kelola</button>
                        </a>
                    @elseif(Auth::user()->role == 'petugas')
                        <a href="{{ route('petugas.laporan') }}">
                            <button class='p-2 px-3 bg-gray-300 rounded-full w-full text-black'>Kelola</button>
                        </a>
                    @elseif(Auth::user()->role == 'user')
                        <a href={{ route('users.index') }}>
                            <button class='p-2 px-3 bg-gray-300 rounded-full w-full text-black'>Lihat Laporan</button>
                        </a>
                    @endif
                </div>
    
    

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-5 mt-5 mb-10 text-black">
                @if(auth()->user()->role === 'admin')
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-5 gap-5 mt-5 mb-10 text-black">

                    <div class="bg-white dark:bg-gray-700 dark:text-white border-b border-l-4 border-purple-500 rounded-3xl shadow-md p-6 w-full">
                        <p class="text-left font-semibold">Semua Laporan</p>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-4xl font-bold">156</span>
                            <i class="fa-solid fa-database text-3xl"></i>
                        </div>
                    </div>
                    @endif

                    <div class="bg-white dark:bg-gray-700 dark:text-white border-b border-l-4 border-yellow-500 rounded-3xl shadow-md p-6 w-full">
                        <p class="text-left font-semibold">Menunggu Diproses</p>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-4xl font-bold">25</span>
                            <i class="fa-solid fa-hourglass-half text-3xl"></i>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-700 dark:text-white border-b border-l-4 border-blue-500 rounded-3xl shadow-md p-6 w-full">
                        <p class="text-left font-semibold">Sedang Diproses</p>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-4xl font-bold">78</span>
                            <i class="fa-solid fa-gear text-3xl"></i>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-700 dark:text-white border-b border-l-4 border-green-500 rounded-3xl shadow-md p-6 w-full">
                        <p class="text-left font-semibold">Laporan Selesai</p>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-4xl font-bold">42</span>
                            <i class="fa-solid fa-circle-check text-3xl"></i>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-700 dark:text-white border-b border-l-4 border-red-500 rounded-3xl shadow-md p-6 w-full">
                        <p class="text-left font-semibold">Laporan Ditolak</p>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-4xl font-bold">11</span>
                            <i class="fa-solid fa-xmark text-3xl"></i>
                        </div>
                    </div>
                </div>
                
                
                @if(auth()->user()->role === 'admin')

                <h1 class='font-medium text-2xl'>Info Data Pengguna</h1>
    
                <div class="flex max-sm:flex-col lg:flex-row justify-between">
                    <p class="">Dashboard informasi data pengguna</p>
                    <a href="{{ route('admin.pengguna') }}">
                        <button class='p-2 px-3 bg-gray-300 rounded-full w-full text-black'>Kelola</button>
                    </a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-5 mt-5 pb-10 text-black">
                    <div class="bg-white dark:bg-gray-700 dark:text-white border-b border-l-4 border-purple-500 rounded-3xl shadow-md p-6 w-full">
                        <p class="text-left font-semibold">Semua Laporan</p>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-4xl font-bold">156</span>
                            <i class="fa-solid fa-database text-3xl"></i>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-700 dark:text-white border-b border-l-4 border-yellow-500 rounded-3xl shadow-md p-6 w-full">
                        <p class="text-left font-semibold">Menunggu Diproses</p>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-4xl font-bold">25</span>
                            <i class="fa-solid fa-hourglass-half text-3xl"></i>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-700 dark:text-white border-b border-l-4 border-blue-500 rounded-3xl shadow-md p-6 w-full">
                        <p class="text-left font-semibold">Sedang Diproses</p>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-4xl font-bold">78</span>
                            <i class="fa-solid fa-gear text-3xl"></i>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-700 dark:text-white border-b border-l-4 border-red-500 rounded-3xl shadow-md p-6 w-full">
                        <p class="text-left font-semibold">Laporan Ditolak</p>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-4xl font-bold">11</span>
                            <i class="fa-solid fa-xmark text-3xl"></i>
                        </div>
                    </div>
                </div>
                @endif
                
        </div>
                
    
    
            </section>
</x-app-layout>


