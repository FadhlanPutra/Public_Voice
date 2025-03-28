<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="false" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
               <a href="{{ "/dashboard" }}" class="{{ Request::is('dashboard') ? 'bg-gray-200 dark:bg-gray-600' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }} flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <i class="fa-solid fa-chart-pie text-gray-400"></i>
                   <span class="ml-3">Dashboard</span>
               </a>
           </li>
           <li> 
               <button type="button" class="{{ Request::is('users') || Request::is('users/create') || Request::is('petugas') ? 'bg-gray-200 dark:bg-gray-600' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }} flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                    <i class="fa-solid fa-file-contract text-gray-400"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Laporan</span>
                    <svg aria-hidden="false" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            <ul id="dropdown-pages" class="hidden py-2 space-y-2">
                @if(Auth::user()->role == 'petugas')
                <li class="flex items-center text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                    <a href={{ route('petugas.create') }} class="flex items-center gap-3 pl-11 p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                        <i class="fa-solid fa-table-list text-gray-400"></i> 
                        <p>Daftar Laporan</p>
                    </a>
                </li>
                <li class="flex items-center text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                    <a href={{ route('petugas.index') }} class="flex items-center gap-3 pl-11 p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                        <i class="fa-solid fa-square-plus text-gray-400"></i> 
                        <p>Riwayat Laporan</p>
                    </a>
                </li>
                @endif
                @if(Auth::user()->role == 'user')
                <li class="{{ Request::is('users') ? 'bg-gray-200 dark:bg-gray-700' : 'hover:bg-gray-100 dark:hover:bg-gray-800' }} flex items-center text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                    <a href={{ route('users.index') }} class="flex items-center gap-3 pl-11 p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                        <i class="fa-solid fa-table-list text-gray-400"></i> 
                        <p>Daftar Laporan</p>
                    </a>
                </li>
                   <li class="{{ Request::is('users/create') ? 'bg-gray-200 dark:bg-gray-700' : 'hover:bg-gray-100 dark:hover:bg-gray-800' }} flex items-center text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                    <a href={{ route('users.create') }} class="flex items-center gap-3 pl-11 p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                        <i class="fa-solid fa-square-plus text-gray-400"></i> 
                        <p>Tambah Laporan</p>
                    </a>                    
                </li>
                @endif
                </ul>
            </li>
            <li>
                <a href="{{ "/informasi" }}" class="{{ Request::is('informasi') ? 'bg-gray-200 dark:bg-gray-600' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }} flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <i class="fa-solid fa-circle-info text-gray-400"></i>
                    <span class="ml-3">Informasi</span>
                </a>
            </li>
            <li>
                <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales">
                    <i class="fa-solid fa-user text-gray-400"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">User</span>
                      
                    <svg aria-hidden="false" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
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
            <a href="/profile" class="{{ Request::is('profile') ? 'bg-gray-200 dark:bg-gray-600' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }} flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                <i class="fa-solid fa-user text-gray-400"></i>
                <span class="ml-3">Pengaturan Akun</span>
            </a>
        </li>
           <li>
                <form id="logout-form" action={{ route('logout') }} method="POST">
                    @csrf
                    <button data-message="Logout Sekarang?" data-form="logout-form" type="button" class="confirm-button w-full flex items-center text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                        <i class="fa-solid fa-arrow-right-from-bracket text-gray-400 ml-2"></i>                                            
                            <span data-message="Logout Sekarang?" data-form="logout-form" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">Keluar</span>
                    </button>
                </form>
           </li>
        <li>
            <div class="relative w-full dark:text-white mt-5">
                <select class="themed block w-full pl-10 pr-10 py-2 text-base border-gray-300 dark:bg-gray-700 dark:text-white dark:border-gray-600 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md appearance-none">
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