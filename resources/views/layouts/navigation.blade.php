<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
       <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
 </button>
 
 <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidenav">
   <div class="overflow-y-auto py-5 px-3 h-full bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
       <ul class="space-y-2">

        <div class="flex flex-row gap-4 mb-7">
          {{-- <img src="/aset/buku.webp" class="w-1/6 h-1/6" alt="Logo Public Voice"> --}}
          <h1 class="dark:text-white text-black">Public Voice</h1>
        </div>
        
           <li>
               <a href="{{ "/dashboard" }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <i class="fa-solid fa-chart-pie text-gray-400"></i>
                   <span class="ml-3">Dashboard</span>
               </a>
           </li>
           <li> 
               <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                <i class="fa-solid fa-file-contract text-gray-400"></i>
                <span class="flex-1 ml-3 text-left whitespace-nowrap">Laporan</span>
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-pages" class="hidden py-2 space-y-2">
                <li class="flex items-center pl-11 text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                    <i class="fa-solid fa-table-list text-gray-400"></i>
                    <a href="" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Daftar Laporan</a>
                </li>
                @if(Auth::user()->role == 'petugas')
                   <li class="flex items-center pl-11 text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                    <i class="fa-solid fa-box-archive text-gray-400"></i>
                       <a href="" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Riwayat Laporan</a>
                    </li>
                @endif
                @if(Auth::user()->role == 'user')
                   <li class="flex items-center pl-11 text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                    <i class="fa-solid fa-square-plus text-gray-400"></i>
                       <a href="{{ 'user.create' }}" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Tambah Laporan</a>
                    </li>
                @endif
                </ul>
            </li>
            <li>
                <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales">
                    <i class="fa-solid fa-user text-gray-400"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">User</span>
                      
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <ul id="dropdown-sales" class="hidden py-2 space-y-2">
                    <li>
                        <a href="" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">petugas</a>
                    </li>
                    <li>
                        <a href="" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Anggota</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Informasi</a>
                    </li>
                </ul>
            </li>
       </ul>
       <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">

        <li>
            <a href="/profile" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                <i class="fa-solid fa-user text-gray-400"></i>
                <span class="ml-3">Akun</span>
            </a>
        </li>
           <li>
                <form id="logout-form" action={{}} method="POST">
                    @csrf
                    <button data-message="Logout Sekarang?" data-form="logout-form" type="button" class="confirm-button w-full flex items-center text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                        <i class="fa-solid fa-arrow-right-from-bracket text-gray-400 ml-2"></i>                                            
                            <span data-message="Logout Sekarang?" data-form="logout-form" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">Keluar</span>
                    </button>
                </form>
           </li>
        <li>
            <!-- Add this button right here -->
            {{-- <button id="theme-toggle" type="button" class="flex text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
                <svg id="theme-toggle-system-icon" class="hidden w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z" />
                </svg>
                <span id="theme-toogle-dark-msg" class="hidden ml-3">Dark Mode</span>
                <span id="theme-toogle-light-msg" class="hidden ml-3">Light Mode</span>
                <span id="theme-toogle-system-msg" class="hidden ml-3">System</span>
            </button> --}}


            <div class="relative w-full dark:text-white mt-5">
                <select id="theme-selector" class="block w-full pl-10 pr-10 py-2 text-base border-gray-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md appearance-none">
                    <option value="system" data-icon="fa-desktop">System</option>
                    <option value="light" data-icon="fa-sun">Light Mode</option>
                    <option value="dark" data-icon="fa-moon">Dark Mode</option>
                </select>
                <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                    <i class="fas " id="icon-display"></i>
                </div>
            </div>
            
        </li>
    </ul>
   </div>
 </aside>

<script>
    document.addEventListener('click', function (e) {
    // Cek jika elemen yang diklik memiliki kelas 'confirm-button'
    if (e.target.classList.contains('confirm-button')) {
        e.preventDefault(); // Mencegah aksi default tombol

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

</script>   