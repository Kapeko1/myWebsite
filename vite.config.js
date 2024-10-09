import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.scss', 'resources/js/app.js',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    assetsInclude: ['**/*.svg', '**/*.png', '**/*.jpg', '**/*.jpeg', '**/*.PNG'], // Ensure Vite handles .svg files
});
