<x-app-layout>
    <div class="md2:pl-64 lg:pl-64 md:pl-64 mx-10 mt-4 pb-10">
        <div class="flex flex-row justify-between sticky top-0 bg-gray-100 dark:bg-gray-900 p-3 pt-6">
            <p class="text-black dark:text-white font-bold text-2xl">Daftar Laporan Public Voice</p>
        </div>
        
        <div class='grid mt-14 gap-1 justify-between text-black grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4'>
            <div class="bg-white dark:bg-gray-700 dark:text-white border-b border-l-4 border-yellow-500 lg:w-72 w-full sm:w-44 rounded-3xl shadow-md p-6">
                <p class="text-left font-semibold">Menunggu Diproses</p>
                <div class="flex flex-row items-center mt-4 gap-5 lg:gap-20">
                    <span class="text-5xl font-bold lg:mr-10">25</span>
                    <i class="fa-solid fa-hourglass-half fa-2x"></i>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-700 dark:text-white border-b border-l-4 border-blue-500 lg:w-72 w-full sm:w-44 rounded-3xl shadow-md p-6">
                <p class="text-left font-semibold">Sedang Diproses</p>
                <div class="flex flex-row items-center mt-4 gap-5 lg:gap-20">
                    <span class="text-5xl font-bold lg:mr-10">78</span>
                    <i class="fa-solid fa-gear fa-2x"></i>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-700 dark:text-white border-b border-l-4 border-green-500 lg:w-72 w-full sm:w-44 rounded-3xl shadow-md p-6">
                <p class="text-left font-semibold">Laporan Selesai</p>
                <div class="flex flex-row items-center mt-4 gap-5 lg:gap-20">
                    <span class="text-5xl font-bold lg:mr-10">42</span>
                    <i class="fa-solid fa-circle-check fa-2x"></i>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-700 dark:text-white border-b border-l-4 border-red-500 lg:w-72 w-full sm:w-44 rounded-3xl shadow-md p-6">
                <p class="text-left font-semibold">Laporan Ditolak</p>
               <div class="flex flex-row items-center mt-4 gap-5 lg:gap-20">
                    <span class="text-5xl font-bold lg:mr-10">11</span>
                    <i class="fa-solid fa-xmark fa-2x"></i>
                </div>
            </div>
        </div>
        
        <hr class="my-5 border-gray-700 dark:border-gray-200">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-14 justify-start text-black">
            <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <div class="relative">
                    <i class="fa-solid fa-gear fa-2x absolute -top-2 -right-2 text-black bg-yellow-500 rounded-full p-2.5"></i>
                    <img class="rounded-t-lg" src="{{ asset('aset/fff.png') }}" alt="Foto Bukti Laporan" />
                </div>
                <div class="p-3">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    <button data-modal-target="daftar-modal" data-modal-toggle="daftar-modal" type="button" class="flex justify-center items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Detail Laporan
                        <svg class="rtl:rotate-180 w-3 h-3 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <div class="relative">
                    <i class="fa-solid fa-gear fa-2x absolute -top-2 -right-2 text-black bg-yellow-500 rounded-full p-2.5"></i>
                    <img class="rounded-t-lg" src="{{ asset('aset/fff.png') }}" alt="Foto Bukti Laporan" />
                </div>
                <div class="p-3">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    <button data-modal-target="daftar-modal" data-modal-toggle="daftar-modal" type="button" class="flex justify-center items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Detail Laporan
                        <svg class="rtl:rotate-180 w-3 h-3 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <div class="relative">
                    <i class="fa-solid fa-gear fa-2x absolute -top-2 -right-2 text-black bg-yellow-500 rounded-full p-2.5"></i>
                    <img class="rounded-t-lg" src="{{ asset('aset/fff.png') }}" alt="Foto Bukti Laporan" />
                </div>
                <div class="p-3">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    <button data-modal-target="daftar-modal" data-modal-toggle="daftar-modal" type="button" class="flex justify-center items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Detail Laporan
                        <svg class="rtl:rotate-180 w-3 h-3 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <div class="relative">
                    <i class="fa-solid fa-gear fa-2x absolute -top-2 -right-2 text-black bg-yellow-500 rounded-full p-2.5"></i>
                    <img class="rounded-t-lg" src="{{ asset('aset/fff.png') }}" alt="Foto Bukti Laporan" />
                </div>
                <div class="p-3">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    <button data-modal-target="daftar-modal" data-modal-toggle="daftar-modal" type="button" class="flex justify-center items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Detail Laporan
                        <svg class="rtl:rotate-180 w-3 h-3 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <div class="relative">
                    <i class="fa-solid fa-gear fa-2x absolute -top-2 -right-2 text-black bg-yellow-500 rounded-full p-2.5"></i>
                    <img class="rounded-t-lg" src="{{ asset('aset/fff.png') }}" alt="Foto Bukti Laporan" />
                </div>
                <div class="p-3">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    <button data-modal-target="daftar-modal" data-modal-toggle="daftar-modal" type="button" class="flex justify-center items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Detail Laporan
                        <svg class="rtl:rotate-180 w-3 h-3 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <div class="relative">
                    <i class="fa-solid fa-gear fa-2x absolute -top-2 -right-2 text-black bg-yellow-500 rounded-full p-2.5"></i>
                    <img class="rounded-t-lg" src="{{ asset('aset/fff.png') }}" alt="Foto Bukti Laporan" />
                </div>
                <div class="p-3">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    <button data-modal-target="daftar-modal" data-modal-toggle="daftar-modal" type="button" class="flex justify-center items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Detail Laporan
                        <svg class="rtl:rotate-180 w-3 h-3 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <div class="relative">
                    <i class="fa-solid fa-gear fa-2x absolute -top-2 -right-2 text-black bg-yellow-500 rounded-full p-2.5"></i>
                    <img class="rounded-t-lg" src="{{ asset('aset/fff.png') }}" alt="Foto Bukti Laporan" />
                </div>
                <div class="p-3">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    <button data-modal-target="daftar-modal" data-modal-toggle="daftar-modal" type="button" class="flex justify-center items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Detail Laporan
                        <svg class="rtl:rotate-180 w-3 h-3 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <div class="relative">
                    <i class="fa-solid fa-gear fa-2x absolute -top-2 -right-2 text-black bg-yellow-500 rounded-full p-2.5"></i>
                    <img class="rounded-t-lg" src="{{ asset('aset/fff.png') }}" alt="Foto Bukti Laporan" />
                </div>
                <div class="p-3">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    <button data-modal-target="daftar-modal" data-modal-toggle="daftar-modal" type="button" class="flex justify-center items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Detail Laporan
                        <svg class="rtl:rotate-180 w-3 h-3 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>


    

      
      <!-- Main modal -->
      <div id="daftar-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative p-4 w-full max-w-2xl max-h-full">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                  <!-- Modal header -->
                  <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                      <div class="flex gap-5 text-gray-900 dark:text-white">
                        <h3 class="text-xl font-semibold">Detail Laporan</h3>
                        <p class="bg-yellow-500 px-2 rounded-lg">Sedang di proses</p>
                      </div>
                      <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="daftar-modal">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-4 md:p-5 space-y-4">
                    <form class="grid grid-cols-1 gap-6 w-full max-w-lg ">
                        @csrf
                        <div class="flex items-center gap-4">
                            <label for="judul" class="w-32 text-sm font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                Judul Laporan:
                            </label>
                            <input
                                type="text"
                                id="judul"
                                value="Judul"
                                class="flex-grow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                disabled
                            />
                        </div>
                        <div class="flex items-center gap-4">
                            <label for="tanggal" class="w-32 text-sm font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                Tanggal:
                            </label>
                            <input
                                type="text"
                                id="tanggal"
                                value="tanggal"
                                class="flex-grow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                disabled
                            />
                        </div>
                        <div class="flex items-center gap-4">
                            <label for="lokasi" class="w-32 text-sm font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                Lokasi:
                            </label>
                            <input
                                type="text"
                                id="lokasi"
                                value="lokasi"
                                class="flex-grow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                disabled
                            />
                        </div>
                        <div class="flex items-center gap-4">
                            <label for="deskripsi" class="w-32 text-sm font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                Deskripsi:
                            </label>
                            <textarea
                                type="text"
                                id="deskripsi"
                                rows="3"
                                class="flex-grow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                disabled
                                >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, accusantium aperiam! Similique doloremque, alias, recusandae quasi repellat ratione vero molestiae, voluptate mollitia necessitatibus amet laborum impedit ex tempora quod reprehenderit!</textarea>
                        </div>
                        <select id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected disabled>Ubah Status</option>
                            <option value="belum">Belum di Proses</option>
                            <option value="sedang">Sedang di Proses</option>
                            <option value="selesai">Laporan Selesai</option>
                        </select>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="daftar-modal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </div>
                </form>
              </div>
          </div>
      </div>
  


</x-app-layout>
