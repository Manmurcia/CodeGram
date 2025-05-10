import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    vue(),
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],  // Archivos de entrada
      refresh: true,  // Habilitar refresco automático en cambios
    }),
  ],
  resolve: {
    alias: {
      '@': '/resources/js',  // Alias opcional si usas Vue
    },
  },
  server: {
    hmr: {
      overlay: false,  // Desactivar la sobrecarga de errores HMR si prefieres
    },
  },
});
