import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


// DARK MODE

// Elemen select dan body
var themeSelector = document.getElementById("theme-selector");

// Fungsi untuk menerapkan tema berdasarkan pilihan
function applyTheme(theme) {
    if (theme === "dark") {
        document.documentElement.classList.add("dark");
        localStorage.setItem("color-theme", "dark");
    } else if (theme === "light") {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("color-theme", "light");
    } else {
        localStorage.removeItem("color-theme");
        if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    }
}

// Inisialisasi tema awal
var currentTheme =
    localStorage.getItem("color-theme") ||
    (window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "system");

themeSelector.value = currentTheme;
applyTheme(currentTheme);

// Event listener untuk perubahan tema
themeSelector.addEventListener("change", function () {
    var selectedTheme = themeSelector.value;
    applyTheme(selectedTheme);
});

// Perbarui tema secara otomatis jika mode sistem berubah
window
    .matchMedia("(prefers-color-scheme: dark)")
    .addEventListener("change", function (e) {
        if (!localStorage.getItem("color-theme")) {
            if (e.matches) {
                document.documentElement.classList.add("dark");
            } else {
                document.documentElement.classList.remove("dark");
            }
        }
    });



