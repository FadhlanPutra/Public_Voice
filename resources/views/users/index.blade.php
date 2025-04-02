<x-app-layout>
    <div class="md2:pl-64 lg:pl-64 md:pl-64 mx-10 mt-4">
        <div class="flex flex-row justify-between sticky top-0 bg-gray-100 dark:bg-gray-900 p-3 pt-6">
            <p class="text-black dark:text-white font-bold text-2xl">Daftar Laporan</p>
            <form class="flex flex-row items-center gap-3">
                <label for="sort" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white whitespace-nowrap">Sort by</label>
                <select id="sort" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 pr-8 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Sortir Berdasarkan</option>
                    <option value="hari">Hari</option>
                    <option value="bulan">Bulan</option>
                    <option value="tahun">Tahun</option>
                </select>
            </form>
        </div>
    
        <div class="lg:w-full lg:py-10 h-full overflow-y-auto">
            <div class="block w-full mb-8 p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <div class="flex flex-row items-center gap-16 mb-4">
                    <div class="flex flex-row items-center gap-2 ">
                        <img src={{ asset('aset/icon/user.png') }} alt="User" class="rounded-full w-8 h-full">
                        <p class="font-normal text-gray-700 dark:text-gray-400">Anonim</p>
                    </div>
                    <div class="flex flex-row items-center gap-2">
                        <i class="fa-solid fa-calendar-days dark:text-white"></i>
                        <p class="font-normal text-gray-700 dark:text-gray-400">14 November 2024</p>
                    </div>
                </div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Banjir Akibat Saluran Air Tersumbat</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Saya ingin melaporkan bahwa saluran air di Jalan Merdeka, RT 05 RW 03] mengalami penyumbatan dan menyebabkan banjir saat hujan turun. Air meluap ke jalan dan menggenangi rumah warga di sekitar.</p>
                
                <div>
                    <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-gray-300 rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 my-3">Lihat Foto</button>
                </div>

                <div class="flex flex-row gap-8 text-black dark:text-gray-300 mt-5">
                    <div class="flex flex-row items-center">
                        <i class="fa-solid fa-comments"></i>
                        <p>&nbsp;0 Komentar</p>
                    </div>
                    <div class="flex flex-row items-center">
                        <i class="fa-solid fa-thumbs-up"></i>
                        <p>&nbsp;0 Dukungan</p>
                    </div>
                    <a href="#" class="flex flex-row items-center">
                        <i class="fa-solid fa-download"></i>
                        <p>&nbsp;Download Laporan</p>
                    </a>
                </div>
            </div>
            <div class="block w-full mb-8 p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <div class="flex flex-row items-center gap-16 mb-4">
                    <div class="flex flex-row items-center gap-2 ">
                        <img src={{ asset('aset/icon/user.png') }} alt="User" class="rounded-full w-8 h-full">
                        <p class="font-normal text-gray-700 dark:text-gray-400">Anonim</p>
                    </div>
                    <div class="flex flex-row items-center gap-2">
                        <i class="fa-solid fa-calendar-days dark:text-white"></i>
                        <p class="font-normal text-gray-700 dark:text-gray-400">14 November 2024</p>
                    </div>
                </div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Banjir Akibat Saluran Air Tersumbat</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Saya ingin melaporkan bahwa saluran air di Jalan Merdeka, RT 05 RW 03] mengalami penyumbatan dan menyebabkan banjir saat hujan turun. Air meluap ke jalan dan menggenangi rumah warga di sekitar.</p>
                
                <div>
                    <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-gray-300 rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 my-3">Lihat Foto</button>
                </div>

                <div class="flex flex-row gap-8 text-black dark:text-gray-300 mt-5">
                    <div class="flex flex-row items-center">
                        <i class="fa-solid fa-comments"></i>
                        <p>&nbsp;0 Komentar</p>
                    </div>
                    <div class="flex flex-row items-center">
                        <i class="fa-solid fa-thumbs-up"></i>
                        <p>&nbsp;0 Dukungan</p>
                    </div>
                    <a href="#" class="flex flex-row items-center">
                        <i class="fa-solid fa-download"></i>
                        <p>&nbsp;Download Laporan</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>