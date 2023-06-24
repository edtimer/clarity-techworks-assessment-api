// import { defineConfig } from 'vite';
// import laravel from 'laravel-vite-plugin';

// export default defineConfig({
//     plugins: [
//         laravel({
//             input: ['resources/css/app.css', 'resources/js/app.js'],
//             refresh: true,
//         }),
//     ],
// });
const { resolve } = require('path');

module.exports = {
  alias: {
    '@': resolve(__dirname, 'resources/js'), // Update this path to match your app's JavaScript directory
  },
  server: {
    proxy: {
      '/': {
        target: 'http://localhost', // development url
        changeOrigin: true,
      },
    },
  },
  build: {
    manifest: true,
    rollupOptions: {
      input: {
        app: resolve(__dirname, 'resources/js/app.js'), // path to app
      },
    },
  },
};