import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        cors: true,
        host: '0.0.0.0',      // Menggunakan semua alamat IP
        port: 5173,           // Port default Vite
        strictPort: true,
        hmr: {
            host: '1.1.1.8', // Alamat IP lokal Anda
            port: 5173,
        },
        proxy: {
            '/api': {
                target: 'http://1.1.1.8:8000',
                changeOrigin: true,
            },
        },
    },
});
