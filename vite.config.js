import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        // tailwindcss(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    // server: {
    //     cors: true,
    //     host: '0.0.0.0',      // Menggunakan semua alamat IP
    //     port: 5173,           // Port default Vite
    //     strictPort: true,
    //     hmr: {
    //         host: '114.10.78.95', // Alamat IP lokal Anda
    //         port: 5173,
    //     },
    //     proxy: {
    //         '/api': {
    //             target: 'http://114.10.78.95:8000',
    //             changeOrigin: true,
    //         },
    //     },
    // },
});
