<script>
    // Immediately set initial theme to prevent FOUC
    (function() {
        // Tambahkan class 'transition-none' ke html untuk menonaktifkan transisi sementara
        document.documentElement.classList.add('transition-none');

        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            document.documentElement.style.backgroundColor = '#1f2937'; // dark background
        } else {
            document.documentElement.classList.remove('dark');
            document.documentElement.style.backgroundColor = '#ffffff'; // light background
        }

        // Force reflow untuk menerapkan style tanpa transisi
        window.getComputedStyle(document.documentElement).backgroundColor;

        // Hapus class 'transition-none' setelah initial render
        requestAnimationFrame(() => {
            document.documentElement.classList.remove('transition-none');
        });
    })();
</script>

<style>
    /* Nonaktifkan semua transisi saat class transition-none aktif */
    .transition-none,
    .transition-none *,
    .transition-none *:before,
    .transition-none *:after {
        transition: none !important;
    }

    /* Aktifkan transisi setelah initial load */
    html {
        transition: background-color 0.3s ease;
    }
    
    body {
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    /* Set warna default untuk light dan dark mode */
    html {
        background-color: #ffffff;
    }

    html.dark {
        background-color: #1f2937;
    }
</style> 