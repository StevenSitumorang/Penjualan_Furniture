import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: ['resources/css/app.css', 'resources/js/app.js'],
=======
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
>>>>>>> 0721052d5016ac3e52570a9df7ef0a4dee31aeb9
            refresh: true,
        }),
    ],
});
