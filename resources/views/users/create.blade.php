<x-app-layout>

    <section class="bg-white dark:bg-gray-900 md2:pl-64 lg:pl-64 md:pl-64 h-screen flex flex-row">
        <div class="py-8 px-4 ml-5 lg:w-3/5 lg:py-16">
            <h2 class="mb-6 text-xl font-bold text-gray-900 dark:text-white bg-blue-500 p-2 rounded-lg w-1/2 text-center">Sampaikan Laporan Anda</h2>
            <form  method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col gap-4">
                    <div class="sm:col-span-2">
                        <input type="text" name="judul_laporan" id="judul_laporan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Judul laporan" required>
                    </div>
                    <form class="max-w-sm mx-auto">
                        <label for="countries" class="sr-only block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Kategory</label>
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          <option selected disabled>Pilih Kategory</option>
                          <option value="lingkungan">Sampah/Lingkungan</option>
                          <option value="penerangan">Penerangan Jalan</option>
                          <option value="air">Air Bersih</option>
                          <option value="parkir">Parkir Liar</option>
                          <option value="ketertiban">Keamanan/ketertiban</option>
                        </select>
                    </form>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="false" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input id="datepicker-actions" datepicker datepicker-autohide datepicker-buttons datepicker-autoselect-today datepicker-format="mm-dd-yyyy" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pilih Tanggal" required>
                    </div>
                    <div class="w-full">
                        <input type="text" name="lokasi" id="lokasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Lokasi Kejadian" required>
                    </div>
                    <div class="w-full">
                        <textarea type="text" name="deskripsi" id="deskripsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Deskripsi" required></textarea>
                    </div>
                    <input type="file" id="gambar" class="block w-full text-lg text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" required>
                </div>
                
                <div class="flex justify-end items-center space-x-4 mt-5">
                    <div class="flex items-center">
                        <input id="anonim" type="radio" value="anonim" name="tipe-pengaduan" class="w-5 h-5 text-gray-400 bg-gray-200 border-gray-300 focus:ring-gray-300 rounded-full" required>
                        <label for="anonim" class="ml-2 dark:text-gray-200 text-sm font-medium text-gray-700">Anonim</label>
                    </div>
                    <div class="flex items-center">
                        <input id="rahasia" type="radio" value="rahasia" name="tipe-pengaduan" class="w-5 h-5 text-gray-400 bg-gray-200 border-gray-300 focus:ring-gray-300 rounded-full">
                        <label for="rahasia" class="ml-2 dark:text-gray-200 text-sm font-medium text-gray-700">Rahasia</label>
                    </div>
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-gray-200 font-semibold py-2 px-7 rounded-lg">
                        Kirim
                    </button>
                </div>
            </form>
        </div>

        <div class="py-8 px-4 pr-9 lg:w-2/5 lg:py-16 h-full overflow-y-auto">
            <a href="#" class="block max-w-md mb-10 p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Banjir Akibat Saluran Air Tersumbat</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Saya ingin melaporkan bahwa saluran air di Jalan Merdeka, RT 05 RW 03] mengalami penyumbatan dan menyebabkan banjir saat hujan turun. Air meluap ke jalan dan menggenangi rumah warga di sekitar.</p>

                <div class="flex flex-row items-center gap-2 my-4">
                    <img src={{ asset('aset/icon/user.png') }} alt="User" class="rounded-full w-8 h-full">
                    <p class="font-normal text-gray-700 dark:text-gray-400">Anonim</p>
                </div>
                <div class="flex flex-row justify-center gap-8 text-black dark:text-gray-300">
                    <div class="flex flex-row items-center">
                        <i class="fa-solid fa-comments"></i>
                        <p>&nbsp;0 Komentar</p>
                    </div>
                    <div class="flex flex-row items-center">
                        <i class="fa-solid fa-thumbs-up"></i>
                        <p>&nbsp;0 Dukungan</p>
                    </div>
                </div>
            </a>
            <a href="#" class="block max-w-md mb-10 p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Banjir Akibat Saluran Air Tersumbat</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Saya ingin melaporkan bahwa saluran air di Jalan Merdeka, RT 05 RW 03] mengalami penyumbatan dan menyebabkan banjir saat hujan turun. Air meluap ke jalan dan menggenangi rumah warga di sekitar.</p>

                <div class="flex flex-row items-center gap-2 my-4">
                    <img src={{ asset('aset/icon/user.png') }} alt="User" class="rounded-full w-8 h-full">
                    <p class="font-normal text-gray-700 dark:text-gray-400">Anonim</p>
                </div>
                <div class="flex flex-row justify-center gap-8 text-black dark:text-gray-300">
                    <div class="flex flex-row items-center">
                        <i class="fa-solid fa-comments"></i>
                        <p>&nbsp;0 Komentar</p>
                    </div>
                    <div class="flex flex-row items-center">
                        <i class="fa-solid fa-thumbs-up"></i>
                        <p>&nbsp;0 Dukungan</p>
                    </div>
                </div>
            </a>
            <a href="#" class="block max-w-md mb-10 p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Banjir Akibat Saluran Air Tersumbat</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Saya ingin melaporkan bahwa saluran air di Jalan Merdeka, RT 05 RW 03] mengalami penyumbatan dan menyebabkan banjir saat hujan turun. Air meluap ke jalan dan menggenangi rumah warga di sekitar.</p>

                <div class="flex flex-row items-center gap-2 my-4">
                    <img src={{ asset('aset/icon/user.png') }} alt="User" class="rounded-full w-8 h-full">
                    <p class="font-normal text-gray-700 dark:text-gray-400">Anonim</p>
                </div>
                <div class="flex flex-row justify-center gap-8 text-black dark:text-gray-300">
                    <div class="flex flex-row items-center">
                        <i class="fa-solid fa-comments"></i>
                        <p>&nbsp;0 Komentar</p>
                    </div>
                    <div class="flex flex-row items-center">
                        <i class="fa-solid fa-thumbs-up"></i>
                        <p>&nbsp;0 Dukungan</p>
                    </div>
                </div>
            </a>
        </div>
      </section>

</x-app-layout>