document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('div[id]');
    const navLinks = document.querySelectorAll('#mobile-menu-2 a[href^="#"]');

    const observerOptions = {
        threshold: 0.5, // Trigger ketika 50% section terlihat
        rootMargin: "-200px 0px -50px 0px" // Offset untuk navbar fixed
    };

    function highlightNavLink(id) {
        // Hapus highlight dari semua link
        navLinks.forEach(link => {
            link.classList.remove('text-red-500', 'dark:text-white');
            link.classList.add('text-gray-700', 'dark:text-gray-400');
        });

        // Tambah highlight ke link yang aktif
        const activeLink = document.querySelector(`a[href="#${id}"]`);
        if (activeLink) {
            activeLink.classList.remove('text-gray-700', 'dark:text-gray-400');
            activeLink.classList.add('text-red-500', 'dark:text-white');
        }
    }

    // Tambahkan highlight awal untuk "Beranda"
    highlightNavLink('beranda');

    const observerCallback = (entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                highlightNavLink(entry.target.id);
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    sections.forEach(section => {
        observer.observe(section);
    });
});
