import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'
export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
// const { resolve } = require('path');

// module.exports = {
//   alias: {
//     '@': resolve(__dirname, 'resources/js'), // Update this path to match your app's JavaScript directory
//   },
//   server: {
//     port:3000,
//     proxy: {
//       '/': {
//         target: 'http://localhost:8000', // development url
//         changeOrigin: true,
//       },
//     },
//   },
//   build: {
//     manifest: true,
//     rollupOptions: {
//       input: {
//         app: resolve(__dirname, 'resources/js/app.js'), // path to app
//       },
//     },
//   },
// };