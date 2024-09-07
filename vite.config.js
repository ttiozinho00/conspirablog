import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',  // Caminho para o arquivo CSS que inclui Tailwind
                'resources/js/app.js',    // Caminho para o arquivo JS principal
                'resources/sass/app.scss' // Caminho para o arquivo SCSS que inclui Bootstrap
            ],
            refresh: true,
        }),
    ],
});
