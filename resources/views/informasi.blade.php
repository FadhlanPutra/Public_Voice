<x-app-layout>
    <div class="md2:pl-64 lg:pl-64 md:pl-64 mx-10 mt-4">
        <div class="flex flex-row justify-between sticky top-0 bg-gray-100 dark:bg-gray-900 p-3 pt-6">
            <p class="text-black dark:text-white font-bold text-2xl">Informasi</p>
        </div>

        
        <div id="accordion-collapse" data-accordion="collapse">

            <h2 id="status-pengaduan-heading">
              <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#status-pengaduan-body" aria-expanded="true" aria-controls="status-pengaduan-body">
                <span class="text-black dark:text-gray-200">1. Status Pengaduan</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
              </button>
            </h2>
            <div id="status-pengaduan-body" class="hidden" aria-labelledby="status-pengaduan-heading">
              <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                 <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                    <li><p class="text-blue-600 dark:text-blue-500 hover:underline hover:cursor-default">Laporan Diterima - Pengaduan telah diterima dan sedang diproses</p></li>
                    <li><p class="text-blue-600 dark:text-blue-500 hover:underline hover:cursor-default">Sedang Diproses - Pengaduan sedang dalam tahap penyelidikan atau perbaikan</p></li>
                    <li><p class="text-blue-600 dark:text-blue-500 hover:underline hover:cursor-default">Selesai - Pengaduan Telah ditindaklanjuti dan selesai dikerjakan</p></li>
                  </ul>
                </div>
            </div>

            <h2 id="panduan-pengaduan-heading">
              <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#panduan-pengaduan-body" aria-expanded="false" aria-controls="panduan-pengaduan-body">
                <span class="text-black dark:text-gray-200">2. Panduan Pengaduan</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
              </button>
            </h2>
            <div id="panduan-pengaduan-body" class="hidden" aria-labelledby="panduan-pengaduan-heading">
              <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                    <p class="font-bold text-lg hover:underline hover:cursor-default text-black dark:text-gray-200">Cara Membuat Pengaduan:</p>
                    <li><p class="text-blue-600 dark:text-blue-500 hover:underline hover:cursor-default">Pilih Kategori pengaduan (Jalan Rusak, Banjir, Sampah, dll.).</p></li>
                    <li><p class="text-blue-600 dark:text-blue-500 hover:underline hover:cursor-default">Isi detail pengaduan dengan jelas.</p></li>
                    <li><p class="text-blue-600 dark:text-blue-500 hover:underline hover:cursor-default">Unggah foto/video jika diperlukan.</p></li>
                    <li><p class="text-blue-600 dark:text-blue-500 hover:underline hover:cursor-default">Kirim pengaduan dan pantau statusnya.</p></li>
                    <br>
                    <p class="font-bold text-lg hover:underline hover:cursor-default text-black dark:text-gray-200">Dokumen Pendukung (Opsional):</p>
                    <li><p class="text-blue-600 dark:text-blue-500 hover:underline hover:cursor-default">Foto lokasi kejadian.</p></li>
                    <li><p class="text-blue-600 dark:text-blue-500 hover:underline hover:cursor-default">Bukti lain yang mendukung laporan.</p></li>
                </ul>
              </div>
            </div>

            <h2 id="kontak-bantuan-heading">
              <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#kontak-bantuan-body" aria-expanded="false" aria-controls="kontak-bantuan-body">
                <span class="text-black dark:text-gray-200">3. Kontak Bantuan</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
              </button>
            </h2>
            <div id="kontak-bantuan-body" class="hidden" aria-labelledby="kontak-bantuan-heading">
              <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                    <p class="font-bold text-lg hover:underline hover:cursor-default text-black dark:text-gray-200">Kontak Bantuan</p>
                    <li>
                        <div class="flex flex-row items-center gap-3">
                            <i class="fa-solid fa-phone"></i>
                            <p class="text-blue-600 dark:text-blue-500 hover:underline hover:cursor-default">Call Center: 08xxxxxxxxxx</p>
                        </div>
                    </li>
                    <li>
                        <div class="flex flex-row items-center gap-3">
                            <i class="fa-solid fa-envelope"></i>
                            <p class="text-blue-600 dark:text-blue-500 hover:underline hover:cursor-default">Email: pengaduan@domain.com</p>
                        </div>
                    </li>
                    <li>
                        <div class="flex flex-row items-center gap-3">
                            <i class="fa-solid fa-location-dot"></i>
                            <p class="text-blue-600 dark:text-blue-500 hover:underline hover:cursor-default">Alamat Kantor: Jl. Raya No. 123, Kota Anda</p>
                        </div>
                    </li>
                </ul>
              </div>
            </div>

            <h2 id="statistik-pengaduan-heading">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#statistik-pengaduan-body" aria-expanded="false" aria-controls="statistik-pengaduan-body">
                  <span class="text-black dark:text-gray-200">4. Statistik Pengaduan</span>
                  <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                  </svg>
                </button>
            </h2>
            <div id="statistik-pengaduan-body" class="hidden" aria-labelledby="statistik-pengaduan-heading">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                  <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                      <p class="font-bold text-lg hover:underline hover:cursor-default text-black dark:text-gray-200">Laporan Anda:</p>
                      <li>
                          <div class="flex flex-row items-center gap-3">
                              <i class="fa-solid fa-square-check"></i>
                              <p class="text-blue-600 dark:text-blue-500 hover:underline hover:cursor-default">3 Pengaduan Selesai</p>
                          </div>
                      </li>
                      <li>
                          <div class="flex flex-row items-center gap-3">
                              <i class="fa-solid fa-hourglass-half"></i>
                              <p class="text-blue-600 dark:text-blue-500 hover:underline hover:cursor-default">1 Pengaduan Dalam Proses</p>
                          </div>
                      </li>
                      <li>
                          <div class="flex flex-row items-center gap-3">
                              <i class="fa-solid fa-plus"></i>
                              <p class="text-blue-600 dark:text-blue-500 hover:underline hover:cursor-default">2 Pengaduan Baru</p>
                          </div>
                      </li>
                      <p class="font-bold text-lg hover:underline hover:cursor-default mt-5">Total Pengaduan (Kota Anda)</p>
                      <li>
                          <div class="flex flex-row items-center gap-3">
                              <i class="fa-solid fa-calendar-days"></i>
                              <p class="text-blue-600 dark:text-blue-500 hover:underline hover:cursor-default">1.250 Pengaduan Tahun Ini</p>
                          </div>
                      </li>
                      <li>
                          <div class="flex flex-row items-center gap-3">
                              <i class="fa-solid fa-road-circle-xmark"></i>
                              <p class="text-blue-600 dark:text-blue-500 hover:underline hover:cursor-default">500 Pengaduan Jalan Rusak</p>
                          </div>
                      </li>
                      <li>
                          <div class="flex flex-row items-center gap-3">
                              <i class="fa-solid fa-house-flood-water"></i>
                              <p class="text-blue-600 dark:text-blue-500 hover:underline hover:cursor-default">300 Pengaduan Banjir</p>
                          </div>
                      </li>
                  </ul>
                </div>
            </div>

            <h2 id="berita-pengumuman-heading">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#berita-pengumuman-body" aria-expanded="false" aria-controls="berita-pengumuman-body">
                  <span class="text-black dark:text-gray-200">5. Berita & Pengumuman</span>
                  <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                  </svg>
                </button>
            </h2>
            <div id="berita-pengumuman-body" class="hidden" aria-labelledby="kontak-bantuan-heading">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                  <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                      <p class="font-bold text-lg hover:underline hover:cursor-default text-black dark:text-gray-200">Kontak Bantuan</p>
                      <li>
                          <div class="flex flex-row items-center gap-3">
                            <i class="fa-solid fa-newspaper"></i>
                            <p class="text-blue-600 dark:text-blue-500 hover:underline hover:cursor-default">Update Proyek Perbaikan Jalan – Perbaikan jalan di Jl. Merdeka sedang berlangsung hingga 15 April 2025.</p>
                          </div>
                      </li>
                      <li>
                          <div class="flex flex-row items-center gap-3">
                            <i class="fa-solid fa-cloud"></i>
                            <p class="text-blue-600 dark:text-blue-500 hover:underline hover:cursor-default">Waspada Banjir! – Hujan lebat diperkirakan dalam minggu ini, hindari daerah rawan banjir.</p>
                          </div>
                      </li>
                  </ul>
                </div>
            </div>

        </div>


    </div>
</x-app-layout>