import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],

    build: { 
        outDir: 'public/build', // ဒီလိုသတ်မှတ်ထားပါ 
        manifest: true, // manifest.json ဖိုင်ထုတ်ဖို့ 
    },
});
